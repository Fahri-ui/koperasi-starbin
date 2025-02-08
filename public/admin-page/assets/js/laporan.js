// Dummy Data Laporan
const laporanData = [
    { kategori: "Anggota", nama: "Budi", jumlah: 150000, tanggal: "01 Januari 2025", status: "Aktif" },
    { kategori: "Simpanan", nama: "Dewi", jumlah: 200000, tanggal: "02 Januari 2025", status: "Aktif" },
    { kategori: "Pinjaman", nama: "Asep", jumlah: 500000, tanggal: "03 Januari 2025", status: "Lunas" },
    { kategori: "Angsuran", nama: "Rani", jumlah: 100000, tanggal: "04 Januari 2025", status: "Belum Lunas" },
  ];
  
  // Fungsi Render Data ke Tabel
  function renderLaporanTable(data) {
    const tableBody = document.querySelector("#laporan-table tbody");
    tableBody.innerHTML = "";
  
    data.forEach((laporan, index) => {
      const row = `
        <tr>
          <td>${index + 1}</td>
          <td>${laporan.kategori}</td>
          <td>${laporan.nama}</td>
          <td>Rp ${laporan.jumlah.toLocaleString()}</td>
          <td>${laporan.tanggal}</td>
          <td>${laporan.status}</td>
        </tr>
      `;
      tableBody.innerHTML += row;
    });
  }
  
  // Fungsi Filter Laporan
  document.getElementById("filter-btn").addEventListener("click", () => {
    const filterPeriode = document.getElementById("filter-periode").value;
    const filterKategori = document.getElementById("filter-kategori").value;
  
    let filteredData = laporanData;
  
    // Filter berdasarkan kategori
    if (filterKategori) {
      filteredData = filteredData.filter((laporan) => laporan.kategori.toLowerCase() === filterKategori.toLowerCase());
    }
  
    // Tambahkan logika filter periode jika perlu
    // Misalnya untuk daily, monthly, atau yearly.
  
    renderLaporanTable(filteredData);
  });
  
  // Fungsi Export Data
  document.getElementById("export-pdf").addEventListener("click", () => {
    alert("Export ke PDF berhasil!");
  });
  
  document.getElementById("export-excel").addEventListener("click", () => {
    alert("Export ke Excel berhasil!");
  });
  
  // Render Data Awal
  renderLaporanTable(laporanData);
  