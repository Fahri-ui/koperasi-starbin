<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Models\Notifikasi; // Tambahkan ini di atas

class PinjamanController extends Controller
{
    public function pinjaman()
    {
        $userId = Auth::id();
        $tanggalHariIni = Carbon::today();

        // Ambil semua riwayat transaksi
        $riwayatTransaksi = Pinjaman::where('user_id', $userId)
            ->select(
                'id as kode',
                'tanggal_pengajuan as tanggal',
                'jumlah_pinjaman as jumlah',
                DB::raw("'Pengajuan Pinjaman' as tipe"),
                DB::raw("NULL as metode"),
                DB::raw("NULL as bukti"),
                'status'
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
                        DB::raw("'Berhasil' as status")
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

        // 🔹 Notifikasi Pinjaman Aktif (Disetujui)
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
        $pinjamanDitolak = Pinjaman::where('user_id', $userId)
            ->where('status', 'Ditolak')
            ->latest()
            ->first();

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
        $pinjamanLunas = Pinjaman::where('user_id', $userId)
            ->where('status', 'Lunas')
            ->latest()
            ->first();

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

        // Ambil semua notifikasi yang dibuat hari ini
        $notifikasi = Notifikasi::where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->orderBy('created_at', 'desc')
            ->get();

        $pinjaman = Pinjaman::find(55);
        $pinjaman->status = 'Aktif';
        $pinjaman->save();

        return view('user.pinjaman', compact('riwayatTransaksi', 'totalPinjaman', 'pinjamanAktif', 'notifikasi'));
    }

    public function ajukanPinjaman(Request $request)
    {
        $request->validate([
            'loan-amount' => 'required|numeric|min:10000',
            'loan-purpose' => 'required|string|max:255',
        ]);

        $userId = Auth::id();

        // Simpan pengajuan pinjaman dengan tanggal tanpa jam
        Pinjaman::create([
            'user_id' => $userId,
            'jumlah_pinjaman' => $request->input('loan-amount'),
            'sisa_angsuran' => $request->input('loan-amount'),
            'tujuan' => $request->input('loan-purpose'),
            'status' => 'Dalam Proses',
            // Format tanggal untuk menghilangkan jam
            'tanggal_pengajuan' => Carbon::now()->format('Y-m-d'), // Hanya tanggal
            'tanggal_jatuh_tempo' => Carbon::now()->addMonths(3)->format('Y-m-d'), // Hanya tanggal
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

        // **Ambil total pembayaran sebelumnya**
        $totalPembayaranSebelumnya = RiwayatPembayaran::where('pinjaman_id', $pinjaman->id)->sum('jumlah_pembayaran');

        // **Hitung total pembayaran baru**
        $totalPembayaranBaru = $totalPembayaranSebelumnya + $jumlahPembayaran;

        // **Cek apakah total pembayaran melebihi jumlah pinjaman**
        if ($totalPembayaranBaru > $pinjaman->jumlah_pinjaman) {
            return redirect()->back()->with('error', 'Jumlah pembayaran melebihi pinjaman.');
        }

        // **Simpan bukti pembayaran ke public/picture/bukti_pembayaran/**
        $buktiFile = $request->file('payment-proof');
        $namaBukti = time() . '-' . $userId . '.' . $buktiFile->getClientOriginalExtension();

        // Path tujuan di public/
        $tujuanPath = public_path('picture/bukti_pembayaran');

        // Pindahkan file ke public/picture/bukti_pembayaran/
        $buktiFile->move($tujuanPath, $namaBukti);

        // Simpan path relatif di database
        $buktiPath = 'picture/bukti_pembayaran/' . $namaBukti;

        // Simpan riwayat pembayaran
        RiwayatPembayaran::create([
            'pinjaman_id' => $pinjaman->id,
            'user_id' => $userId,
            'jumlah_pembayaran' => $jumlahPembayaran,
            'metode_pembayaran' => $request->input('payment-method'),
            'bukti_pembayaran' => $buktiPath, // Simpan path relatif
            // Format tanggal untuk menghilangkan jam
            'tanggal_pembayaran' => Carbon::now()->format('Y-m-d'), // Hanya tanggal
        ]);

        // **Hitung sisa angsuran berdasarkan total pembayaran**
        $pinjaman->sisa_angsuran = $pinjaman->jumlah_pinjaman - $totalPembayaranBaru;

        // Jika lunas, ubah statusnya
        if ($pinjaman->sisa_angsuran == 0) {
            $pinjaman->status = 'Lunas';
        }

        $pinjaman->save();

        return redirect()->back()->with('success', 'Pembayaran berhasil.');
    }
}
