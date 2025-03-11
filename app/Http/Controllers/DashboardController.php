<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\RiwayatPembayaran; // Import model RiwayatPembayaran
use Illuminate\Support\Facades\Auth;
use App\Models\Notifikasi; // Tambahkan model Notifikasi
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();

        // Ambil bulan dan tahun saat ini
        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Hitung total saldo simpanan sukarela (hanya bulan ini)
        $totalSimpanan = Simpanan::where('user_id', $user->id)
            ->whereNotIn('status', ['Ditolak', 'Dalam Proses'])
            ->whereMonth('tanggal_transaksi', $currentMonth)
            ->whereYear('tanggal_transaksi', $currentYear)
            ->sum('jumlah');

        // Hitung total pinjaman yang diambil user (hanya bulan ini)
        $totalPinjaman = Pinjaman::where('user_id', $user->id)
            ->where('status', '!=', 'Ditolak')
            ->whereMonth('tanggal_pengajuan', $currentMonth)
            ->whereYear('tanggal_pengajuan', $currentYear)
            ->sum('jumlah_pinjaman');

        // Ambil jumlah notifikasi terbaru yang belum dibaca
        $jumlahNotifikasiBaru = Notifikasi::where('user_id', $user->id)
            ->where('is_read', false)
            ->count();

        $simpanans = Simpanan::where('user_id', $user->id)
            ->select('id', 'jenis', 'tanggal_transaksi as tanggal', 'jumlah', 'status')
            ->get()
            ->map(function ($item) {
                $item->deskripsi = match ($item->jenis) {
                    'sukarela' => $item->jumlah < 0 ? 'Penarikan Sukarela' : 'Simpanan Sukarela',
                    'wajib' => 'Simpanan Wajib',
                    'anggota' => 'Simpanan Anggota',
                    default => 'Simpanan (Jenis Tidak Diketahui)',
                };
                return $item;
            });

        $pinjamans = Pinjaman::where('user_id', $user->id) // Filter berdasarkan user yang login
            ->select('tanggal_pengajuan as tanggal', 'jumlah_pinjaman as jumlah', 'status')
            ->get()
            ->map(function ($item) {
                $item->deskripsi = 'Pinjaman Anda';
                return $item;
            });

        $riwayatPembayarans = RiwayatPembayaran::where('user_id', $user->id) // Filter berdasarkan user yang login
            ->select('tanggal_pembayaran as tanggal', 'jumlah_pembayaran as jumlah', 'status')
            ->get()
            ->map(function ($item) {
                $item->deskripsi = 'Pembayaran Angsuran';
                return $item;
            });

        $riwayatTransaksis = collect()
            ->merge($simpanans)
            ->merge($pinjamans)
            ->merge($riwayatPembayarans)
            ->sortByDesc('tanggal')
            ->values();


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


            $userId = auth()->id();

            // Ambil data dan hitung total simpanan wajib
            $wajib = Simpanan::where('jenis', 'wajib')
                ->where('user_id', $userId)
                ->get();

            $simpanan = Simpanan::where('user_id', auth()->id())->latest()->first();

            $totalWajib = $wajib->sum('jumlah');

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

        // Kirim ke view
        return view('user.dashboard', compact('totalSimpanan', 'totalPinjaman', 'riwayatTransaksi', 'riwayatTransaksis', 'jumlahNotifikasiBaru', 'simpanan'));
    }
}
