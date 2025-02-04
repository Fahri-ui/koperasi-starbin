// Dummy Data Log Aktivitas
const logData = [
    { waktu: "24 Januari 2025, 10:30 WIB", user: "Admin", aktivitas: "Login ke sistem", ip: "192.168.1.10", status: "Berhasil" },
    { waktu: "24 Januari 2025, 10:15 WIB", user: "Admin", aktivitas: "Edit data anggota", ip: "192.168.1.10", status: "Berhasil" },
    { waktu: "24 Januari 2025, 09:45 WIB", user: "Staff", aktivitas: "Tambah data simpanan", ip: "192.168.1.20", status: "Berhasil" },
  ];
  
  // Fungsi untuk Render Data ke Tabel
  function renderLogTable(data) {
    const tableBody = document.querySelector("#log-table tbody");
    tableBody.innerHTML = "";
  
    data.forEach((log, index) => {
      const row = `
        <tr>
          <td>${index + 1}</td>
          <td>${log.waktu}</td>
          <td>${log.user}</td>
          <td>${log.aktivitas}</td>
          <td>${log.ip}</td>
          <td><span class="badge bg-success">${log.status}</span></td>
        </tr>
      `;
      tableBody.innerHTML += row;
    });
  
    // Update Ringkasan
    document.getElementById("total-activity").innerText = data.length;
    document.getElementById("last-activity").innerText = data[0]?.waktu || "-";
  }
  
  // Fungsi untuk Filter Log
  document.getElementById("filter-btn").addEventListener("click", () => {
    const filterDate = document.getElementById("filter-date").value;
    const filterUser = document.getElementById("filter-user").value.toLowerCase();
    const filterActivity = document.getElementById("filter-activity").value;
  
    const filteredData = logData.filter((log) => {
      const matchesDate = filterDate ? log.waktu.includes(filterDate) : true;
      const matchesUser = filterUser ? log.user.toLowerCase().includes(filterUser) : true;
      const matchesActivity = filterActivity ? log.aktivitas.toLowerCase().includes(filterActivity) : true;
      return matchesDate && matchesUser && matchesActivity;
    });
  
    renderLogTable(filteredData);
  });
  
  // Fungsi Export Data (Simulasi)
  document.getElementById("export-pdf").addEventListener("click", () => {
    alert("Export ke PDF berhasil!");
  });
  document.getElementById("export-excel").addEventListener("click", () => {
    alert("Export ke Excel berhasil!");
  });
  
  // Render Data Awal
  renderLogTable(logData);
  