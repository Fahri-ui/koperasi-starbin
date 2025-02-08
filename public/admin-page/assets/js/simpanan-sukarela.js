// Data awal untuk simpanan sukarela anggota
const simpananSukarelaData = [
    { id: 1, nama: "Bagas", jumlah: 2000000, tanggal: "2025-01-01", keterangan: "Setoran awal" },
    { id: 2, nama: "Dika", jumlah: 1500000, tanggal: "2025-01-05", keterangan: "Setoran bulanan" },
    { id: 3, nama: "Rina", jumlah: 3000000, tanggal: "2025-01-10", keterangan: "Setoran tambahan" },
    { id: 4, nama: "Sinta", jumlah: 1000000, tanggal: "2025-01-15", keterangan: "Setoran sukarela" },
    { id: 5, nama: "Andi", jumlah: 2500000, tanggal: "2025-01-20", keterangan: "Setoran bulanan" }
  ];
  
  // Fungsi untuk merender tabel simpanan sukarela
  function renderSimpananSukarelaTable(data) {
    const tabelSimpananSukarela = document.getElementById('tabel-simpanan-sukarela');
    tabelSimpananSukarela.innerHTML = ''; // Bersihkan tabel sebelum render ulang
  
    let totalSimpanan = 0; // Total jumlah simpanan
    let jumlahAnggota = new Set(); // Set untuk menghitung jumlah anggota unik
    let totalTransaksi = 0; // Total jumlah transaksi
  
    data.forEach(item => {
      totalSimpanan += item.jumlah; // Hitung total jumlah simpanan
      jumlahAnggota.add(item.id); // Tambah anggota ke Set (hanya anggota unik)
      totalTransaksi++; // Tambah jumlah transaksi
  
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.id}</td>
        <td>${item.nama}</td>
        <td>Rp ${item.jumlah.toLocaleString()}</td>
        <td>${item.tanggal}</td>
        <td>${item.keterangan}</td>
      `;
      tabelSimpananSukarela.appendChild(row);
    });
  
    // Update statistik
    document.getElementById('total-simpanan-sukarela').innerText = `Rp ${totalSimpanan.toLocaleString()}`;
    document.getElementById('jumlah-anggota').innerText = jumlahAnggota.size;
    document.getElementById('total-transaksi').innerText = totalTransaksi;
  }
  
  // Fungsi untuk mencari anggota berdasarkan nama atau ID
  document.getElementById('search-simpanan-sukarela').addEventListener('input', function () {
    const keyword = this.value.toLowerCase();
    const filteredData = simpananSukarelaData.filter(item =>
      item.nama.toLowerCase().includes(keyword) || item.id.toString().includes(keyword)
    );
    renderSimpananSukarelaTable(filteredData); // Render tabel dengan data yang difilter
  });
  
  // Render tabel saat halaman pertama kali dimuat
  renderSimpananSukarelaTable(simpananSukarelaData);
  