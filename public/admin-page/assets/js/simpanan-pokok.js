// Data awal untuk simpanan pokok anggota
const simpananPokokData = [
    { id: 1, nama: "Bagas", jumlah: 1000000, tanggal: "2025-01-01", status: "Lunas" },
    { id: 2, nama: "Dika", jumlah: 1000000, tanggal: "2025-01-10", status: "Belum Lunas" },
    { id: 3, nama: "Rina", jumlah: 1000000, tanggal: "2025-01-15", status: "Lunas" },
    { id: 4, nama: "Sinta", jumlah: 1000000, tanggal: "2025-01-20", status: "Lunas" },
    { id: 5, nama: "Andi", jumlah: 1000000, tanggal: "2025-01-22", status: "Belum Lunas" }
  ];
  
  // Fungsi untuk merender tabel simpanan pokok
  function renderSimpananPokokTable(data) {
    const tabelSimpananPokok = document.getElementById('tabel-simpanan-pokok');
    tabelSimpananPokok.innerHTML = ''; // Bersihkan tabel sebelum render ulang
  
    let totalSimpanan = 0; // Total jumlah simpanan
    let totalLunas = 0; // Total anggota lunas
    let totalBelumLunas = 0; // Total anggota belum lunas
  
    data.forEach(item => {
      totalSimpanan += item.jumlah; // Hitung total jumlah simpanan
      if (item.status === "Lunas") {
        totalLunas++; // Tambah ke anggota lunas
      } else {
        totalBelumLunas++; // Tambah ke anggota belum lunas
      }
  
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.id}</td>
        <td>${item.nama}</td>
        <td>Rp ${item.jumlah.toLocaleString()}</td>
        <td>${item.tanggal}</td>
        <td>${item.status}</td>
      `;
      tabelSimpananPokok.appendChild(row);
    });
  
    // Update statistik
    document.getElementById('total-simpanan-pokok').innerText = `Rp ${totalSimpanan.toLocaleString()}`;
    document.getElementById('total-lunas').innerText = totalLunas;
    document.getElementById('total-belum-lunas').innerText = totalBelumLunas;
  }
  
  // Fungsi untuk mencari anggota berdasarkan nama atau ID
  document.getElementById('search-simpanan-pokok').addEventListener('input', function () {
    const keyword = this.value.toLowerCase();
    const filteredData = simpananPokokData.filter(item =>
      item.nama.toLowerCase().includes(keyword) || item.id.toString().includes(keyword)
    );
    renderSimpananPokokTable(filteredData); // Render tabel dengan data yang difilter
  });
  
  // Render tabel saat halaman pertama kali dimuat
  renderSimpananPokokTable(simpananPokokData);
  