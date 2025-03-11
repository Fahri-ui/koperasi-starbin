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

        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();

        $simpananWajib = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->latest()
            ->first();

        $statusWajib = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->latest()
            ->first();


        $totalWajib = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->where('status', 'Berhasil') // Hanya hitung yang disetujui
            ->sum('jumlah');

        // Cek apakah sudah membayar bulan ini
        $bulanIni = Carbon::now()->format('Y-m');
        $sudahBayarBulanIni = Simpanan::where('jenis', 'wajib')
            ->where('user_id', $userId)
            ->where('tanggal_transaksi', 'like', "$bulanIni%")
            ->where('status', 'Berhasil')
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

        return view('user.simpanan-wajib', compact('wajib', 'simpananWajib', 'statusWajib', 'simpanan', 'totalWajib', 'statusPembayaran', 'statusPesan', 'pengingat', 'sudahBayarBulanIni'));
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
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->sum('jumlah');

        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();

        $statusSukarela = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'sukarela')
            ->where('status', 'Dalam Proses')
            ->latest()
            ->first();

        // Kirim data ke view
        return view('user.simpanan-sukarela', compact('sukarela', 'statusSukarela', 'totalSukarela', 'simpanan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required|in:wajib,sukarela',
            'jenis_transaksi' => 'required|in:penyetoran,penarikan',
            'jumlah' => "required|numeric|min:5000|max:1000000000",
            'metode_pembayaran' => 'required|in:transfer-bank,ewallet,cash',
            'bukti' => ($request->jenis_transaksi === 'penyetoran' && in_array($request->metode_pembayaran, ['transfer-bank', 'ewallet']))
                ? 'required|image|mimes:jpeg,png,jpg|max:2048'
                : 'nullable',
        ]);

        $user = auth()->user();

        // Hitung saldo dari transaksi yang ada
        $saldo = Simpanan::where('jenis', 'sukarela')
            ->where('user_id', auth()->id())
            ->where('status', 'Berhasil') // Hanya hitung yang berhasil
            ->sum('jumlah');

        if ($validatedData['jenis_transaksi'] === 'penarikan' && $saldo < $validatedData['jumlah']) {
            return back()->with('error', 'Saldo tidak mencukupi untuk penarikan.');
        }

        $jumlahTransaksi = $validatedData['jenis_transaksi'] === 'penarikan'
            ? -abs($validatedData['jumlah'])
            : abs($validatedData['jumlah']);

        $buktiPath = null;
        if ($request->hasFile('bukti')) {
            $buktiFile = $request->file('bukti');
            $namaBukti = time() . '-' . $user->id . '.' . $buktiFile->getClientOriginalExtension();
            $buktiPath = 'picture/bukti_pembayaran/' . $namaBukti;
            $buktiFile->move(public_path('picture/bukti_pembayaran'), $namaBukti);
        }

        Simpanan::create([
            'user_id' => $user->id,
            'jenis' => $validatedData['jenis'],
            'jenis_transaksi' => $validatedData['jenis_transaksi'],
            'jumlah' => $jumlahTransaksi,
            'kode_transaksi' => 'TRX-' . date('YmdHis') . '-' . $user->id,
            'tanggal_transaksi' => now()->toDateTimeString(),
            'status' => 'Dalam Proses',
            'metode_pembayaran' => $validatedData['metode_pembayaran'],
            'bukti' => $buktiPath,
        ]);

        $redirectRoute = $validatedData['jenis'] === 'wajib' ? 'simpananwajib' : 'simpanansukarela';

        return redirect()
            ->route($redirectRoute)
            ->with('success', 'Transaksi berhasil diajukan! Menunggu konfirmasi admin.');
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
