// Data awal untuk simpanan anggota
const simpananData = [
  { id: 1, nama: "Bagas", jumlah: 5000000, tanggal: "2025-01-10", status: "Aktif" },
  { id: 2, nama: "Dika", jumlah: 3000000, tanggal: "2025-01-15", status: "Aktif" },
  { id: 3, nama: "Rina", jumlah: 2500000, tanggal: "2025-01-18", status: "Tidak Aktif" },
  { id: 4, nama: "Sinta", jumlah: 4500000, tanggal: "2025-01-20", status: "Aktif" },
  { id: 5, nama: "Sinta", jumlah: 4500000, tanggal: "2025-01-20", status: "Aktif" },
  { id: 6, nama: "Sinta", jumlah: 4500000, tanggal: "2025-01-20", status: "Aktif" },
  { id: 7, nama: "Sinta", jumlah: 4500000, tanggal: "2025-01-20", status: "Aktif" },
  { id: 8, nama: "Sinta", jumlah: 4500000, tanggal: "2025-01-20", status: "Aktif" },
  { id: 9, nama: "Sinta", jumlah: 4500000, tanggal: "2025-01-20", status: "Aktif" },
  { id: 10, nama: "Andi", jumlah: 1500000, tanggal: "2025-01-22", status: "Aktif" }
];

// Fungsi untuk merender tabel simpanan
function renderSimpananTable(data) {
  const tabelSimpanan = document.getElementById('tabel-simpanan');
  tabelSimpanan.innerHTML = ''; // Bersihkan tabel sebelum render ulang

  let totalSimpanan = 0; // Hitung total simpanan

  data.forEach(item => {
    totalSimpanan += item.jumlah; // Tambahkan ke total simpanan
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${item.id}</td>
      <td>${item.nama}</td>
      <td>Rp ${item.jumlah.toLocaleString()}</td>
      <td>${item.tanggal}</td>
      <td>${item.status}</td>
    `;
    tabelSimpanan.appendChild(row);
  });

  // Tampilkan total simpanan
  document.getElementById('total-simpanan-statistik').innerText = `Rp ${totalSimpanan.toLocaleString()}`;
}

// Fungsi untuk mencari anggota berdasarkan nama atau ID
document.getElementById('search-simpanan').addEventListener('input', function () {
  const keyword = this.value.toLowerCase();
  const filteredData = simpananData.filter(item =>
    item.nama.toLowerCase().includes(keyword) || item.id.toString().includes(keyword)
  );
  renderSimpananTable(filteredData); // Render tabel dengan data yang difilter
});

// Render tabel saat halaman pertama kali dimuat
renderSimpananTable(simpananData);
