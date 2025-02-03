<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\RiwayatPembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PinjamanController extends Controller
{
    public function pinjaman()
    {
        $userId = Auth::id();

        // Ambil semua riwayat pengajuan pinjaman
        $riwayatPinjaman = Pinjaman::where('user_id', $userId)
            ->select(
                'id as kode',
                'tanggal_pengajuan as tanggal',
                'jumlah_pinjaman as jumlah',
                'status',
                DB::raw("'Pengajuan Pinjaman' as tipe"),
                DB::raw("NULL as metode"),
                DB::raw("NULL as bukti")
            )
            ->orderBy('tanggal_pengajuan', 'desc')
            ->get();

        // Ambil semua riwayat pembayaran
        $riwayatPembayaran = RiwayatPembayaran::join('pinjaman', 'riwayat_pembayaran.pinjaman_id', '=', 'pinjaman.id')
            ->where('riwayat_pembayaran.user_id', $userId)
            ->select(
                'riwayat_pembayaran.pinjaman_id as kode',
                'riwayat_pembayaran.tanggal_pembayaran as tanggal',
                'riwayat_pembayaran.jumlah_pembayaran as jumlah',
                DB::raw("'Pembayaran Pinjaman' as tipe"),
                'riwayat_pembayaran.metode_pembayaran as metode',
                'riwayat_pembayaran.bukti_pembayaran as bukti',
                'pinjaman.status as status'
            )
            ->orderBy('riwayat_pembayaran.tanggal_pembayaran', 'desc')
            ->get();

        // Gabungkan semua transaksi tanpa menghapus duplikasi agar semua pembayaran muncul
        $riwayatTransaksi = collect($riwayatPinjaman)->concat($riwayatPembayaran)->sortByDesc('tanggal')->values();

        // Debugging sebelum return ke view
        // dd($riwayatPinjaman->toArray(), $riwayatPembayaran->toArray(), $riwayatTransaksi->toArray());

        // Ambil total pinjaman pengguna
        $totalPinjaman = Pinjaman::where('user_id', $userId)
            ->where('status', '!=', 'Ditolak')
            ->sum('jumlah_pinjaman');

        // Cek apakah ada pinjaman aktif
        $pinjamanAktif = Pinjaman::where('user_id', $userId)
            ->where('status', 'Aktif')
            ->first();

        return view('user.pinjaman', compact('riwayatTransaksi', 'totalPinjaman', 'pinjamanAktif'));
    }


    public function ajukanPinjaman(Request $request) {
        $request->validate([
            'loan-amount' => 'required|numeric|min:10000',
            'loan-purpose' => 'required|string|max:255',
        ]);

        $userId = Auth::id();

        // Simpan pengajuan pinjaman
        Pinjaman::create([
            'user_id' => $userId,
            'jumlah_pinjaman' => $request->input('loan-amount'),
            'sisa_angsuran' => $request->input('loan-amount'),
            'tujuan' => $request->input('loan-purpose'),
            'status' => 'Dalam Proses',
            'tanggal_pengajuan' => now(),
            'tanggal_jatuh_tempo' => now()->addMonths(3),
        ]);

        return redirect()->back()->with('success', 'Pengajuan pinjaman berhasil dikirim.');
    }

    public function bayarPinjaman(Request $request) {
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
            'tanggal_pembayaran' => now(),
        ]);
    
        // **Hitung sisa angsuran berdasarkan total pembayaran**
        $pinjaman->sisa_angsuran = $pinjaman->jumlah_pinjaman - $totalPembayaranBaru;
    
        // Jika lunas, ubah statusnya
        if ($pinjaman->sisa_angsuran == 0) {
            $pinjaman->status = 'Lunas';
        }
    
        $pinjaman->save();
    
        return redirect()->back()->with('success', 'Pembayaran berhasil.');

        // Ambil kembali riwayat pembayaran terbaru berdasarkan pinjaman_id
        $riwayat = RiwayatPembayaran::where('pinjaman_id', $pinjaman->id)
        ->latest()
        ->first();

        // Debugging: Cek apakah bukti_pembayaran benar-benar tersimpan
        if (!$riwayat || !$riwayat->bukti_pembayaran) {
        return redirect()->back()->with('error', 'Bukti pembayaran tidak tersimpan dengan benar.');
        }

        // Pastikan bukti_pembayaran ada di response
        return redirect()->back()->with([
        'success' => 'Pembayaran berhasil.',
        'bukti_pembayaran' => $riwayat->bukti_pembayaran
        ]);
    }    
}