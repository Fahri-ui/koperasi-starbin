<?php

namespace App\Http\Controllers;

use App\Models\Simpanan; // Mengimpor model Simpanan
use Carbon\Carbon; // Tambahkan di bagian atas file
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    public function simpananwajib()
    {
        $userId = auth()->id();

        // Ambil semua data simpanan wajib milik user
        $wajib = Simpanan::where('jenis', 'wajib')
            ->where('user_id', $userId)
            ->get();

        // Hitung total saldo simpanan wajib
        $totalWajib = Simpanan::where('jenis', 'wajib')
            ->where('user_id', $userId)
            ->sum('jumlah');

        // ✅ 1. Cek apakah pengguna sudah membayar bulan ini
        $bulanIni = Carbon::now()->format('Y-m');
        $sudahBayarBulanIni = Simpanan::where('jenis', 'wajib')
            ->where('user_id', $userId)
            ->where('tanggal_transaksi', 'like', "$bulanIni%")
            ->where('status', 'completed')
            ->exists();

        // ✅ 2. Buat variabel notifikasi status pembayaran
        if ($sudahBayarBulanIni) {
            $statusPembayaran = 'success'; // Sudah membayar
            $statusPesan = "Anda sudah membayar simpanan wajib bulan ini. Terima kasih!";
        } else {
            $statusPembayaran = 'warning'; // Belum membayar
            $statusPesan = "Anda belum melakukan pembayaran untuk bulan ini.";
        }

        // ✅ 3. Tambahkan Notifikasi Pengingat
        $pengingat = "Anda akan menerima pengingat otomatis setiap awal bulan jika belum melakukan pembayaran.";

        // Kirim data ke view
        return view('user.simpanan-wajib', compact('wajib', 'totalWajib', 'statusPembayaran', 'statusPesan', 'pengingat'));
    }

    public function simpanansukarela()
    {
        // Ambil semua data simpanan sukarela milik user yang sedang login
        $sukarela = Simpanan::where('jenis', 'sukarela')
            ->where('user_id', auth()->id())
            ->get();

        // Hitung total saldo simpanan sukarela milik user yang sedang login
        $totalSukarela = Simpanan::where('jenis', 'sukarela')
            ->where('user_id', auth()->id())
            ->sum('jumlah');


        // Kirim data ke view
        return view('user.simpanan-sukarela', compact('sukarela', 'totalSukarela'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'jenis' => 'required|in:wajib,sukarela', // Jenis simpanan (wajib/sukarela)
            'jenis_transaksi' => 'required|in:penyetoran,penarikan', // Jenis transaksi
            'jumlah' => 'required|numeric',
            'metode_pembayaran' => 'required|in:transfer-bank,ewallet,cash', // Metode pembayaran
        ]);

        // Ambil user yang sedang login
        $user = auth()->user();

        // Hitung saldo saat ini berdasarkan jenis simpanan
        $saldoSaatIni = Simpanan::where('jenis', $validatedData['jenis'])
            ->where('user_id', $user->id)
            ->sum('jumlah');

        // **Proses Penarikan**
        if ($validatedData['jenis_transaksi'] === 'penarikan') {
            if ($saldoSaatIni < $validatedData['jumlah']) {
                // Jika saldo tidak mencukupi
                return redirect()->back()->with('error', 'Saldo tidak mencukupi untuk penarikan.');
            }

            // Simpan transaksi penarikan
            $data = [
                'user_id' => $user->id,
                'jenis' => $validatedData['jenis'],
                'jenis_transaksi' => 'penarikan',
                'jumlah' => -$validatedData['jumlah'], // Jumlah negatif untuk penarikan
                'kode_transaksi' => 'TRX-' . date('YmdHis') . '-' . $user->id,
                'tanggal_transaksi' => Carbon::now()->toDateTimeString(), // Pastikan format benar
                'status' => 'completed', // Penarikan langsung dianggap selesai
                'metode_pembayaran' => $validatedData['metode_pembayaran'],
            ];

            Simpanan::create($data);

            return redirect()
                ->route($validatedData['jenis'] === 'wajib' ? 'simpananwajib' : 'simpanansukarela')
                ->with('success', 'Penarikan berhasil dilakukan!');
        }

        // **Proses Penyetoran**
        $data = [
            'user_id' => $user->id,
            'jenis' => $validatedData['jenis'],
            'jenis_transaksi' => 'penyetoran',
            'jumlah' => $validatedData['jumlah'],
            'kode_transaksi' => 'TRX-' . date('YmdHis') . '-' . $user->id,
            'tanggal_transaksi' => Carbon::now()->toDateTimeString(), // Pastikan format benar
            'status' => 'completed', // Status default "completed"
            'metode_pembayaran' => $validatedData['metode_pembayaran'],
        ];

        Simpanan::create($data);

        // Redirect ke halaman yang sesuai (wajib/sukarela)
        $redirectRoute = $validatedData['jenis'] === 'wajib' ? 'simpananwajib' : 'simpanansukarela';

        return redirect()
            ->route($redirectRoute)
            ->with('success', 'Transaksi berhasil diajukan!');
    }

    public function boot()
    {
        Carbon::setLocale('id'); // Mengatur bahasa ke Indonesia
    }
}