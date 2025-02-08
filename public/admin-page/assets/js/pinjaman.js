// Data awal untuk pinjaman anggota
const pinjamanData = [
    { id: 1, nama: "Bagas", jumlah: 5000000, tanggal: "2025-01-01", tenor: 12, status: "Lunas", sisa: 0 },
    { id: 2, nama: "Dika", jumlah: 3000000, tanggal: "2025-01-10", tenor: 6, status: "Proses", sisa: 1500000 },
    { id: 3, nama: "Rina", jumlah: 7000000, tanggal: "2025-01-15", tenor: 24, status: "Menunggak", sisa: 4000000 },
    { id: 4, nama: "Sinta", jumlah: 4000000, tanggal: "2025-01-20", tenor: 8, status: "Proses", sisa: 2000000 },
    { id: 5, nama: "Andi", jumlah: 6000000, tanggal: "2025-01-22", tenor: 10, status: "Lunas", sisa: 0 }
  ];
  
  // Fungsi untuk merender tabel pinjaman
  function renderPinjamanTable(data) {
    const tabelPinjaman = document.getElementById('tabel-pinjaman');
    tabelPinjaman.innerHTML = ''; // Bersihkan tabel sebelum render ulang
  
    let totalPinjaman = 0; // Total jumlah pinjaman
    let totalSisaPinjaman = 0; // Total sisa pinjaman
    let jumlahLunas = 0; // Total anggota lunas
    let jumlahProses = 0; // Total anggota dalam proses
    let jumlahMenunggak = 0; // Total anggota menunggak
  
    data.forEach(item => {
      totalPinjaman += item.jumlah; // Hitung total pinjaman
      totalSisaPinjaman += item.sisa; // Hitung total sisa pinjaman
  
      if (item.status === "Lunas") {
        jumlahLunas++;
      } else if (item.status === "Proses") {
        jumlahProses++;
      } else if (item.status === "Menunggak") {
        jumlahMenunggak++;
      }
  
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.id}</td>
        <td>${item.nama}</td>
        <td>Rp ${item.jumlah.toLocaleString()}</td>
        <td>${item.tanggal}</td>
        <td>${item.tenor}</td>
        <td>${item.status}</td>
        <td>Rp ${item.sisa.toLocaleString()}</td>
      `;
      tabelPinjaman.appendChild(row);
    });
  
    // Update statistik
    document.getElementById('total-pinjaman').innerText = `Rp ${totalPinjaman.toLocaleString()}`;
    document.getElementById('total-sisa-pinjaman').innerText = `Rp ${totalSisaPinjaman.toLocaleString()}`;
    document.getElementById('jumlah-lunas').innerText = jumlahLunas;
    document.getElementById('jumlah-proses').innerText = jumlahProses;
    document.getElementById('jumlah-menunggak').innerText = jumlahMenunggak;
  }
  
  // Fungsi untuk mencari anggota berdasarkan nama atau ID
  document.getElementById('search-pinjaman').addEventListener('input', function () {
    const keyword = this.value.toLowerCase();
    const filteredData = pinjamanData.filter(item =>
      item.nama.toLowerCase().includes(keyword) || item.id.toString().includes(keyword)
    );
    renderPinjamanTable(filteredData); // Render tabel dengan data yang difilter
  });
  
  // Render tabel saat halaman pertama kali dimuat
  renderPinjamanTable(pinjamanData);
  