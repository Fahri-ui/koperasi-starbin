let anggotaData = [
    { no: 1, nama: "Bagas", alamat: "Jakarta", status: "Aktif" },
    { no: 2, nama: "Adi", alamat: "Bandung", status: "Tidak Aktif" },
    { no: 3, nama: "Pras", alamat: "Surabaya", status: "Aktif" },
    { no: 4, nama: "Fahri", alamat: "Yogyakarta", status: "Aktif" },
    { no: 5, nama: "Abdur", alamat: "Medan", status: "Tidak Aktif" },
    { no: 6, nama: "Rahman", alamat: "Makassar", status: "Aktif" },
    { no: 7, nama: "Sholeh", alamat: "Bogor", status: "Tidak Aktif" },
    { no: 8, nama: "Octa", alamat: "Malang", status: "Aktif" },
    { no: 9, nama: "Mahiru", alamat: "Palembang", status: "Aktif" },
    { no: 10, nama: "Agus", alamat: "Semarang", status: "Tidak Aktif" }
  ];
  
  const tableBody = document.getElementById('data-anggota');
  
  // Fungsi untuk merender data ke tabel
  function renderTable() {
    tableBody.innerHTML = ''; // Clear tabel sebelum render ulang
    anggotaData.forEach((anggota, index) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${index + 1}</td>
        <td>${anggota.nama}</td>
        <td>${anggota.alamat}</td>
        <td>${anggota.status}</td>
        <td>
          <button class="btn btn-primary btn-sm">
            <i class="bi bi-pencil-square"></i>
          </button>
          <button class="btn btn-danger btn-sm" onclick="hapusAnggota(${index})">
            <i class="bi bi-trash"></i>
          </button>
        </td>
      `;
      tableBody.appendChild(row);
    });
  }
  
  // Fungsi untuk menghapus anggota
  function hapusAnggota(index) {
    anggotaData.splice(index, 1); // Hapus anggota berdasarkan index
    renderTable(); // Render ulang tabel
  }
  
  // Render tabel saat halaman pertama kali dimuat
  renderTable();
  