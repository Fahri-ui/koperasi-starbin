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
        $riwayatTransaksi = Pinjaman::where('user_id', $userId)
            ->select(
                'id as kode',
                'tanggal_pengajuan as tanggal',
                'jumlah_pinjaman as jumlah',
                DB::raw("'Pengajuan Pinjaman' as tipe"),
                DB::raw("NULL as metode"),
                DB::raw("NULL as bukti"),
                'status',
                'alasan as tujuan' // Tambahkan kolom ini

            )
            ->union(
                RiwayatPembayaran::join('pinjaman', 'riwayat_pembayaran.pinjaman_id', '=', 'pinjaman.id')
                    ->where('riwayat_pembayaran.user_id', $userId)
                    ->select(
                        'riwayat_pembayaran.pinjaman_id as kode',
                        'riwayat_pembayaran.tanggal_pembayaran as tanggal',
                        'riwayat_pembayaran.jumlah_pembayaran as jumlah',
                        DB::raw("'Pembayaran Pinjaman' as tipe"),
                        'riwayat_pembayaran.metode_pembayaran as metode',
                        'riwayat_pembayaran.bukti_pembayaran as bukti',
                        DB::raw("'Berhasil' as status"),
                        DB::raw("NULL as tujuan") // Supaya union tetap seimbang
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

        // Ambil pinjaman dp
        $pinjamandalamproses = Pinjaman::where('user_id', $userId)
            ->where('status', 'Dalam Proses')
            ->first();
       
            $userId = Auth::id();
            $tanggalHariIni = Carbon::today();
    
            $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();
            // Ambil semua riwayat transaksi
            $riwayatTransaksi = Pinjaman::where('user_id', $userId)
                ->select(
                    'id as kode',
                    'tanggal_pengajuan as tanggal',
                    'jumlah_pinjaman as jumlah',
                    DB::raw("'Pengajuan Pinjaman' as tipe"),
                    DB::raw("NULL as metode"),
                    DB::raw("NULL as bukti"),
                    'status',
                    'alasan as tujuan' // Tambahkan kolom ini
    
                )
                ->union(
                    RiwayatPembayaran::join('pinjaman', 'riwayat_pembayaran.pinjaman_id', '=', 'pinjaman.id')
                        ->where('riwayat_pembayaran.user_id', $userId)
                        ->select(
                            'riwayat_pembayaran.pinjaman_id as kode',
                            'riwayat_pembayaran.tanggal_pembayaran as tanggal',
                            'riwayat_pembayaran.jumlah_pembayaran as jumlah',
                            DB::raw("'Pembayaran Pinjaman' as tipe"),
                            'riwayat_pembayaran.metode_pembayaran as metode',
                            'riwayat_pembayaran.bukti_pembayaran as bukti',
                            DB::raw("'Berhasil' as status"),
                            DB::raw("NULL as tujuan") // Supaya union tetap seimbang
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

        return view('user.pinjaman', compact('riwayatTransaksi', 'pinjamandalamproses', 'simpanan', 'totalPinjaman', 'pinjamanAktif'));
    }

    public function ajukanPinjaman(Request $request)
    {

        $request->validate([
            'jumlah_pinjaman' => 'required|numeric|min:10000',
            'alasan' => 'required|string|max:255',
        ]);

        $pinjaman = Pinjaman::create([
            'user_id' => Auth::id(),
            'jumlah_pinjaman' => $request->input('jumlah_pinjaman'),
            'sisa_angsuran' => $request->input('jumlah_pinjaman'),
            'alasan' => $request->input('alasan'),
            'status' => 'Dalam Proses',
            'tanggal_pengajuan' => Carbon::now()->format('Y-m-d'),
            'tanggal_jatuh_tempo' => Carbon::now()->addMonths(3)->format('Y-m-d'),
            'total_denda' => null,  // ✅ Pastikan NULL
            'status_denda' => null, // ✅ Pastikan NULL
        ]);

        return redirect()->back()->with('success', 'Pengajuan pinjaman berhasil dikirim.');
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

        $sisaPembayaran = $jumlahPembayaran;

        // **Bayar Denda Terlebih Dahulu**
        if ($pinjaman->total_denda > 0) {
            $dendaDibayar = min($sisaPembayaran, $pinjaman->total_denda);
            $sisaPembayaran -= $dendaDibayar;
            $pinjaman->total_denda -= $dendaDibayar;

            RiwayatPembayaran::create([
                'pinjaman_id' => $pinjaman->id,
                'user_id' => $userId,
                'jumlah_pembayaran' => $dendaDibayar,
                'jenis_pembayaran' => 'Denda',
                'metode_pembayaran' => $request->input('payment-method'),
                'bukti_pembayaran' => $buktiPath,
                'tanggal_pembayaran' => now()->format('Y-m-d'),
                'jumlah_denda_dibayar' => $dendaDibayar,
            ]);
        }

        // **Bayar Angsuran (Jika Ada Sisa)**
        if ($sisaPembayaran > 0) {
            $pinjaman->sisa_angsuran -= $sisaPembayaran;

            RiwayatPembayaran::create([
                'pinjaman_id' => $pinjaman->id,
                'user_id' => $userId,
                'jumlah_pembayaran' => $sisaPembayaran,
                'jenis_pembayaran' => 'Angsuran',
                'metode_pembayaran' => $request->input('payment-method'),
                'bukti_pembayaran' => $buktiPath,
                'tanggal_pembayaran' => now()->format('Y-m-d'),
                'jumlah_denda_dibayar' => 0,
            ]);
        }

        // **Perbarui status pinjaman jika lunas**
        if ($pinjaman->sisa_angsuran <= 0 && $pinjaman->total_denda <= 0) {
            $pinjaman->status = 'Lunas';
        }

        $pinjaman->save();

        return redirect()->back()->with('success', 'Pembayaran berhasil.');
    }
}
