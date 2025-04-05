<?php

namespace App\Http\Controllers;

use App\Models\Simpanan; // Mengimpor model Simpanan
use Carbon\Carbon; // Tambahkan di bagian atas file
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notifikasi;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\DB;
use App\Models\RiwayatPembayaran; // Import model RiwayatPembayaran
use Illuminate\Support\Facades\Auth;

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
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->latest('updated_at') // Ambil data terbaru berdasarkan updated_at
            ->first();


        //-----------------------------------------------------------------------//
        $statusWajibtelat = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->where('status', 'berhasil') // Tambahkan kondisi status berhasil
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

        $statusWajibDitolak = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->where('status', 'Ditolak') // Tambahkan kondisi status berhasil
            ->latest()
            ->first();
        //-----------------------------------------------------------------------//



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
        $pembayaranProses = RiwayatPembayaran::where('user_id', auth()->id())
            ->where('status', 'Dalam Proses')
            ->exists();


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


            $userId = auth()->id();

            // Ambil data dan hitung total simpanan wajib
            $wajib = Simpanan::where('jenis', 'wajib')
                ->where('user_id', $userId)
                ->get();

            $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();

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
        }
        $statusPembayaran = $sudahBayarBulanIni ? 'success' : 'warning';
        $statusPesan = $sudahBayarBulanIni ? "Anda sudah membayar simpanan wajib bulan ini. Terima kasih!" : "Anda belum melakukan pembayaran untuk bulan ini.";

        $notifikasiMessage = $sudahBayarBulanIni ? 'Anda telah membayar simpanan wajib bulan ini.' : 'Anda belum membayar simpanan wajib bulan ini. Harap segera melakukan pembayaran.';
        $notifikasiIcon = $sudahBayarBulanIni ? 'bi-check-circle' : 'bi-exclamation-triangle-fill';
        $notifikasiType = $sudahBayarBulanIni ? 'success' : 'warning';

        // Pengingat
        $pengingat = "Anda akan menerima pengingat otomatis setiap awal bulan jika belum melakukan pembayaran.";

        return view('user.simpanan-wajib', compact('statusWajibtelat', 'pembayaranProses', 'statusWajibDitolak', 'statusWajibDalamproses', 'wajib', 'simpananWajib', 'statusWajib', 'simpanan', 'totalWajib', 'statusPembayaran', 'statusPesan', 'pengingat', 'sudahBayarBulanIni', 'pinjamanAktif'));
    }

    public function simpanansukarela()
    {

        $userId = Auth::id();

        $pinjamanAktif = Pinjaman::where('user_id', $userId)
            ->where('status', 'Aktif')
            ->first();

        $pembayaranProses = RiwayatPembayaran::where('user_id', auth()->id())
            ->where('status', 'Dalam Proses')
            ->exists();

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

        $statusWajib = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->where('status', 'berhasil') // Tambahkan kondisi status berhasil
            ->latest()
            ->first();

        $telatwajib = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->latest('updated_at') // Ambil data terbaru berdasarkan updated_at
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

        $statusWajibDitolak = Simpanan::where('user_id', auth()->id())
            ->where('jenis', 'wajib')
            ->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->latest('updated_at') // Ambil data terbaru berdasarkan updated_at
            ->first();

        // Jika ada data terbaru, cek apakah masih "Dalam Proses"
        $isDitolak = $statusWajibDitolak && $statusWajibDitolak->status === 'Ditolak';
        // Kirim data ke view
        return view('user.simpanan-sukarela', compact('telatwajib', 'isDitolak', 'statusWajibDitolak', 'statusWajibinfo', 'statusWajibDalamproses', 'statusWajibinfo', 'statusWajib', 'sukarela', 'statusSukarela', 'totalSukarela', 'simpanan', 'pinjamanAktif', 'pembayaranProses'));
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

        return redirect()->back()->with('success', 'Transaksi berhasil diajukan! Menunggu konfirmasi admin.');
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
