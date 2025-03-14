<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Simpanan;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Notifikasi; // Tambahkan ini di atas

class PinjamanController extends Controller
{
    public function pinjaman()
    {
        $userId = Auth::id();
        $tanggalHariIni = Carbon::today();

        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();
        // Ambil semua riwayat transaksi
        $riwayatTransaksi = RiwayatPembayaran::with('user', 'pinjaman')->get();

        // Ambil total pinjaman pengguna yang tidak ditolak
        $totalPinjaman = Pinjaman::where('user_id', $userId)
            ->whereNotIn('status', ['Ditolak'])
            ->sum('jumlah_pinjaman');

        // Ambil pinjaman aktif
        $pinjamanAktif = Pinjaman::where('user_id', $userId)
            ->where('status', 'Aktif')
            ->first();

        // Ambil pinjaman dp
        $pinjamandalamproses = Pinjaman::where('user_id', $userId)
            ->where('status', 'Dalam Proses')
            ->first();

        $statusWajib = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->where('status', 'Berhasil') // Tambahkan kondisi status berhasil
            ->latest()
            ->first();

        $statusWajibinfo = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->latest()
            ->first();

        $statusWajibDalamproses = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->where('status', 'Dalam Proses') // Tambahkan kondisi status berhasil
            ->latest()
            ->first();

        $userId = Auth::id();
        $tanggalHariIni = Carbon::today();

        $pembayaranProses = RiwayatPembayaran::where('user_id', auth()->id())
            ->where('status', 'Dalam Proses')
            ->exists();

        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();
        // Ambil semua riwayat transaksi
        $riwayatTransaksi = Pinjaman::where('user_id', $userId)
            ->select(
                'id as kode',
                'tanggal_pengajuan as tanggal',
                'jumlah_pinjaman as jumlah',
                DB::raw("'Pengajuan' as tipe"),
                'jenis_jaminan', // Tambahkan jenis jaminan
                'file_jaminan', // Tambahkan bukti jaminan
                DB::raw("NULL as metode"),
                DB::raw("NULL as bukti"),
                'status',
                'alasan as tujuan',
                'total_denda'
            )
            ->union(
                RiwayatPembayaran::join('pinjaman', 'riwayat_pembayaran.pinjaman_id', '=', 'pinjaman.id')
                    ->where('riwayat_pembayaran.user_id', $userId)
                    ->select(
                        'riwayat_pembayaran.pinjaman_id as kode',
                        'riwayat_pembayaran.tanggal_pembayaran as tanggal',
                        'riwayat_pembayaran.jumlah_pembayaran as jumlah',
                        DB::raw("'Pembayaran' as tipe"),
                        'pinjaman.jenis_jaminan', // Ikut ambil jenis jaminan dari pinjaman
                        'pinjaman.file_jaminan', // Ikut ambil bukti jaminan dari pinjaman
                        'riwayat_pembayaran.metode_pembayaran as metode',
                        'riwayat_pembayaran.bukti_pembayaran as bukti',
                        'riwayat_pembayaran.status',
                        DB::raw("NULL as tujuan"),
                        'jumlah_denda_dibayar'
                    )
            )
            ->orderByDesc('tanggal')
            ->get();

        // Ambil total pinjaman pengguna yang tidak ditolak
        $totalPinjaman = Pinjaman::where('user_id', $userId)
            ->whereNotIn('status', ['Ditolak'])
            ->sum('jumlah_pinjaman');

        // Ambil pinjaman aktif
        $pinjamanAktif = Pinjaman::where('user_id', $userId)
            ->where('status', 'Aktif')
            ->first();


        $user = User::find($userId);

        if (in_array($user->status, ['Aktif', 'Belum_Bayar_Simpanan_Wajib'])) {

            // 🔹 Notifikasi Jatuh Tempo
            if ($pinjamanAktif && $pinjamanAktif->tanggal_jatuh_tempo) {
                $tanggalJatuhTempo = Carbon::parse($pinjamanAktif->tanggal_jatuh_tempo);
                $hariMenujuJatuhTempo = Carbon::now()->diffInDays($tanggalJatuhTempo, false);

                if ($hariMenujuJatuhTempo <= 5 && $hariMenujuJatuhTempo > 0) {
                    $pesan = "Angsuran pinjaman dengan ID {$pinjamanAktif->id} jatuh tempo dalam {$hariMenujuJatuhTempo} hari.";

                    Notifikasi::updateOrCreate([
                        'user_id' => $userId,
                        'message' => $pesan
                    ], [
                        'type' => 'danger',
                        'icon' => 'bi-calendar-x',
                        'expired_at' => $tanggalHariIni->addDay()
                    ]);
                }
            }

            // 🔹 Notifikasi Denda
            $pinjamanDenganDenda = Pinjaman::where('status', 'Aktif')->whereNotNull('total_denda')->get();

            foreach ($pinjamanDenganDenda as $pinjaman) {
                $dendaSebelumnya = $pinjaman->getOriginal('total_denda');
                $dendaSekarang = $pinjaman->total_denda;

                if ($dendaSebelumnya > 0 && $dendaSekarang > $dendaSebelumnya) {
                    Notifikasi::updateOrCreate([
                        'user_id' => $pinjaman->user_id,
                        'message' => "Denda untuk pinjaman ID {$pinjaman->id} meningkat sebesar 2%. Total denda sekarang: Rp " . number_format($dendaSekarang, 2, ',', '.'),
                    ], [
                        'type' => 'warning',
                        'icon' => 'bi-exclamation-triangle',
                        'expired_at' => now()->addDays(2),
                    ]);
                }

                if ($pinjaman->total_denda > 0) {
                    Notifikasi::updateOrCreate([
                        'user_id' => $pinjaman->user_id,
                        'message' => "Anda memiliki denda sebesar Rp " . number_format($pinjaman->total_denda, 0, ',', '.') . " untuk pinjaman ID {$pinjaman->id}. Segera bayar untuk menghindari denda tambahan.",
                    ], [
                        'type' => 'warning',
                        'icon' => 'bi-exclamation-triangle',
                        'expired_at' => now()->addDay(),
                    ]);
                }
            }

            // 🔹 Notifikasi Pinjaman Disetujui
            if ($pinjamanAktif) {
                $statusSebelumnya = Pinjaman::where('id', $pinjamanAktif->id)->value('status_sebelumnya');

                if ($statusSebelumnya === 'Dalam Proses' && $pinjamanAktif->status === 'Aktif') {
                    Notifikasi::updateOrCreate([
                        'user_id' => $userId,
                        'message' => "Pengajuan pinjaman dengan ID {$pinjamanAktif->id} telah disetujui. Anda sekarang memiliki pinjaman aktif."
                    ], [
                        'type' => 'success',
                        'icon' => 'bi-check-circle',
                        'expired_at' => $tanggalHariIni->addDay()
                    ]);
                }
            }

            // 🔹 Notifikasi Pinjaman Ditolak
            $pinjamanDitolak = Pinjaman::where('user_id', $userId)->where('status', 'Ditolak')->latest()->first();

            if ($pinjamanDitolak) {
                Notifikasi::updateOrCreate([
                    'user_id' => $userId,
                    'message' => "Pengajuan pinjaman dengan ID {$pinjamanDitolak->id} telah ditolak."
                ], [
                    'type' => 'danger',
                    'icon' => 'bi-x-circle',
                    'expired_at' => $tanggalHariIni->addDay()
                ]);
            }

            // 🔹 Notifikasi Pinjaman Lunas
            $pinjamanLunas = Pinjaman::where('user_id', $userId)->where('status', 'Lunas')->latest()->first();

            if ($pinjamanLunas) {
                Notifikasi::updateOrCreate([
                    'user_id' => $userId,
                    'message' => "Pinjaman dengan ID {$pinjamanLunas->id} telah lunas. Terima kasih atas pembayaran Anda."
                ], [
                    'type' => 'success',
                    'icon' => 'bi-star',
                    'expired_at' => $tanggalHariIni->addDay()
                ]);
            }

            // 🔹 Ambil semua notifikasi hari ini
            $notifikasi = Notifikasi::where('user_id', $userId)
                ->whereDate('created_at', Carbon::today())
                ->orderBy('created_at', 'desc')
                ->get();
        }

        return view('user.pinjaman', compact('statusWajibDalamproses', 'statusWajib', 'statusWajibinfo', 'pembayaranProses', 'riwayatTransaksi', 'pinjamandalamproses', 'simpanan', 'totalPinjaman', 'pinjamanAktif'));
    }

    public function ajukanPinjaman(Request $request)
    {
        $userId = Auth::id();
        $request->validate([
            'jumlah_pinjaman' => 'required|numeric|min:10000',
            'alasan' => 'string|max:255',
            'jenis_jaminan' => 'required|string|in:BPKB Kendaraan,Sertifikat Tanah,Kartu Keluarga',
            'jaminan-proof' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Proses upload file
        $buktiJaminanFile = $request->file('jaminan-proof');
        $namaBuktiJaminan = time() . '-' . $userId . '.' . $buktiJaminanFile->getClientOriginalExtension();
        $buktiJaminanFile->move(public_path('picture/jaminan_pembayaran'), $namaBuktiJaminan);
        $buktiJaminanPath = 'picture/jaminan_pembayaran/' . $namaBuktiJaminan;

        // Simpan data pinjaman
        $pinjaman = Pinjaman::create([
            'user_id' => Auth::id(),
            'jumlah_pinjaman' => $request->input('jumlah_pinjaman'),
            'sisa_angsuran' => $request->input('jumlah_pinjaman'),
            'alasan' => 'Default',
            'jenis_jaminan' => $request->input('jenis_jaminan'),
            'file_jaminan' => $buktiJaminanPath,
            'status' => 'Dalam Proses',
            'tanggal_pengajuan' => Carbon::now()->format('Y-m-d'),
            'tanggal_jatuh_tempo' => Carbon::now()->addMonths(3)->format('Y-m-d'),
            'total_denda' => null,
            'status_denda' => null,
        ]);

        return redirect()->back()->with('success', 'Pengajuan pinjaman berhasil dikirim. Silakan tunggu persetujuan admin.');
    }

    public function bayarPinjaman(Request $request)
    {
        $request->validate([
            'loan-code' => 'required',
            'payment-amount' => 'required|numeric|min:10000',
            'payment-method' => 'required|string',
            'payment-proof' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $userId = Auth::id();
        $pinjaman = Pinjaman::where('id', $request->input('loan-code'))
            ->where('user_id', $userId)
            ->where('status', 'Aktif')
            ->first();

        if (!$pinjaman) {
            return redirect()->back()->with('error', 'Pinjaman tidak ditemukan atau sudah lunas.');
        }

        $jumlahPembayaran = $request->input('payment-amount');

        $buktiFile = $request->file('payment-proof');
        $namaBukti = time() . '-' . $userId . '.' . $buktiFile->getClientOriginalExtension();
        $buktiFile->move(public_path('picture/bukti_pembayaran'), $namaBukti);
        $buktiPath = 'picture/bukti_pembayaran/' . $namaBukti;

        // Hitung total yang harus dibayar
        $totalTagihan = $pinjaman->sisa_angsuran + $pinjaman->total_denda;

        // Cek apakah pembayaran melebihi tagihan
        if ($jumlahPembayaran > $totalTagihan) {
            return redirect()->back()->with('error', 'Jumlah pembayaran melebihi total tagihan. Silakan periksa kembali.');
        }

        // Simpan riwayat pembayaran dengan status "Dalam Proses"
        RiwayatPembayaran::create([
            'pinjaman_id' => $pinjaman->id,
            'user_id' => $userId,
            'jumlah_pembayaran' => $jumlahPembayaran,
            'jenis_pembayaran' => 'Angsuran',
            'metode_pembayaran' => $request->input('payment-method'),
            'bukti_pembayaran' => $buktiPath,
            'tanggal_pembayaran' => now()->format('Y-m-d'),
            'jumlah_denda_dibayar' => 0,
            'status' => 'Dalam Proses', // Status default saat pembayaran diajukan
        ]);

        return redirect()->back()->with('success', 'Pembayaran telah diajukan dan menunggu persetujuan admin.');
    }
}
