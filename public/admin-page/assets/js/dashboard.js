// Data awal untuk dashboard
const dataDashboard = {
    anggota: 120,
    simpanan: 50,
    pinjaman: 30,
    angsuran: 40,
    pengajuan: 15
  };
  
  // Fungsi untuk memperbarui data dashboard
  function updateDashboard() {
    document.getElementById('data-anggota').innerText = dataDashboard.anggota;
    document.getElementById('data-simpanan').innerText = dataDashboard.simpanan;
    document.getElementById('data-pinjaman').innerText = dataDashboard.pinjaman;
    document.getElementById('data-angsuran').innerText = dataDashboard.angsuran;
    document.getElementById('data-pengajuan').innerText = dataDashboard.pengajuan;
  }
  
  // Jalankan fungsi saat halaman selesai dimuat
  updateDashboard();
  