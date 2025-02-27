<?php

namespace App\Http\Controllers;

use App\Models\Simpanan; // Mengimpor model Simpanan
use Carbon\Carbon; // Tambahkan di bagian atas file
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notifikasi;

class SimpananController extends Controller
{
    public function simpananwajib()
    {
        $userId = auth()->id();

        // Ambil data dan hitung total simpanan wajib
        $wajib = Simpanan::where('jenis', 'wajib')
            ->where('user_id', $userId)
            ->get();

        $totalWajib = $wajib->sum('jumlah');

        // Cek apakah sudah membayar bulan ini
        $bulanIni = Carbon::now()->format('Y-m');
        $sudahBayarBulanIni = Simpanan::where('jenis', 'wajib')
            ->where('user_id', $userId)
            ->where('tanggal_transaksi', 'like', "$bulanIni%")
            ->where('status', 'completed')
            ->exists();

        // **🔹 Notifikasi Pembayaran**
        $statusPembayaran = $sudahBayarBulanIni ? 'success' : 'warning';
        $statusPesan = $sudahBayarBulanIni ? "Anda sudah membayar simpanan wajib bulan ini. Terima kasih!" : "Anda belum melakukan pembayaran untuk bulan ini.";

        $notifikasiMessage = $sudahBayarBulanIni ? 'Anda telah membayar simpanan wajib bulan ini.' : 'Anda belum membayar simpanan wajib bulan ini. Harap segera melakukan pembayaran.';
        $notifikasiIcon = $sudahBayarBulanIni ? 'bi-check-circle' : 'bi-exclamation-triangle-fill';
        $notifikasiType = $sudahBayarBulanIni ? 'success' : 'warning';

        // Pastikan notifikasi belum ada
        $notifikasiAda = Notifikasi::where('user_id', $userId)
            ->where('message', $notifikasiMessage)
            ->whereMonth('created_at', Carbon::now()->month)
            ->doesntExist();

        if ($notifikasiAda) {
            Notifikasi::create([
                'user_id' => $userId,
                'message' => $notifikasiMessage,
                'type' => $notifikasiType,
                'icon' => $notifikasiIcon,
                'expired_at' => now()->addMonth(),
            ]);
        }

        // Pengingat
        $pengingat = "Anda akan menerima pengingat otomatis setiap awal bulan jika belum melakukan pembayaran.";

        return view('user.simpanan-wajib', compact('wajib', 'totalWajib', 'statusPembayaran', 'statusPesan', 'pengingat', 'sudahBayarBulanIni'));
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
            'status' => 'Dalam  Proses', // Status default "completed"
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

    public function storePayment(Request $request)
    {
        $request->validate([
            'nominal' => 'required|numeric|min:1000',
            'metode' => 'required|string|in:cash,bank,ewallet',
            'payment-proof' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = auth()->user(); // Mengambil data user yang login

        // Proses upload bukti pembayaran
        $buktiFile = $request->file('payment-proof');
        $namaBukti = time() . '-' . $user->id . '.' . $buktiFile->getClientOriginalExtension();
        $buktiFile->move(public_path('picture/bukti_pembayaran'), $namaBukti);
        $buktiPath = 'picture/bukti_pembayaran/' . $namaBukti;

        // Simpan data transaksi simpanan
        Simpanan::create([
            'user_id' => $user->id,
            'jenis' => 'anggota',
            'jumlah' => $request->nominal,
            'jenis_transaksi' => 'penyetoran',
            'metode_pembayaran' => $request->metode,
            'kode_transaksi' => strtoupper(uniqid('TRX-')),
            'status' => 'Dalam Proses',
            'tanggal_transaksi' => now(),
            'bukti' => $buktiPath,
        ]);

        // 🔥 Update status user jadi Pending
        $user->update(['status' => 'Pending']);

        return redirect()->back()->with('success', 'Pembayaran berhasil dikirim, status akun menjadi Pending. Menunggu persetujuan admin.');
    }
}
