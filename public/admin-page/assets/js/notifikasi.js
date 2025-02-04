// Dummy Data Notifikasi
const notifications = [
    { id: 1, tipe: "system", judul: "Update Sistem Berhasil", waktu: "24 Januari 2025, 10:00 WIB", status: "unread" },
    { id: 2, tipe: "pengajuan", judul: "Pengajuan Baru Diterima", waktu: "24 Januari 2025, 09:45 WIB", status: "unread" },
    { id: 3, tipe: "warning", judul: "Peringatan: Server Penuh", waktu: "23 Januari 2025, 15:30 WIB", status: "read" },
  ];
  
  // Fungsi Render Notifikasi
  function renderNotifications(data) {
    const list = document.getElementById("notification-list");
    list.innerHTML = "";
  
    data.forEach((notif) => {
      const notifItem = `
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>${notif.judul}</strong>
            <p class="mb-0"><small>${notif.waktu}</small></p>
          </div>
          <div>
            <span class="badge ${notif.status === "unread" ? "bg-danger" : "bg-secondary"}">
              ${notif.status === "unread" ? "Belum Dibaca" : "Dibaca"}
            </span>
            <button class="btn btn-sm btn-success ms-2" onclick="markAsRead(${notif.id})">Tandai Dibaca</button>
          </div>
        </li>
      `;
      list.innerHTML += notifItem;
    });
  
    // Update Ringkasan
    document.getElementById("total-notifications").innerText = data.length;
    document.getElementById("unread-notifications").innerText = data.filter((n) => n.status === "unread").length;
  }
  
  // Fungsi Tandai Dibaca
  function markAsRead(id) {
    const notif = notifications.find((n) => n.id === id);
    if (notif) notif.status = "read";
    renderNotifications(notifications);
  }
  
  // Fungsi Filter Notifikasi
  document.getElementById("filter-btn").addEventListener("click", () => {
    const filterType = document.getElementById("filter-type").value;
    const filterTime = document.getElementById("filter-time").value;
  
    let filtered = notifications;
  
    if (filterType) {
      filtered = filtered.filter((n) => n.tipe === filterType);
    }
  
    // Implementasi filter waktu (contoh sederhana)
    // Filter tambahan berdasarkan waktu bisa disesuaikan
    if (filterTime === "today") {
      filtered = filtered.filter((n) => n.waktu.includes("24 Januari 2025"));
    }
  
    renderNotifications(filtered);
  });
  
  // Tandai Semua Dibaca
  document.getElementById("mark-all-read").addEventListener("click", () => {
    notifications.forEach((n) => (n.status = "read"));
    renderNotifications(notifications);
  });
  
  // Render Notifikasi Awal
  renderNotifications(notifications);
  