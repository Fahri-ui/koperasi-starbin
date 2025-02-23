function searchAnggota() {
  let input = document.getElementById("search-anggota").value.toLowerCase();
  let table = document.getElementById("data-anggota");
  let rows = table.getElementsByTagName("tr");

  for (let i = 0; i < rows.length; i++) {
      let nama = rows[i].getElementsByTagName("td")[2]; // Kolom Nama
      let id = rows[i].getElementsByTagName("td")[1]; // Kolom ID

      if (nama && id) {
          let namaText = nama.textContent || nama.innerText;
          let idText = id.textContent || id.innerText;

          if (namaText.toLowerCase().includes(input) || idText.includes(input)) {
              rows[i].style.display = "";
          } else {
              rows[i].style.display = "none";
          }
      }
  }
}

function resetSearch() {
  const searchInput = document.getElementById("search-anggota");
  searchInput.value = "";
  searchAnggota(); // Langsung reset tampilan tabel
}

document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll(".role-select").forEach(select => {
      select.addEventListener("change", function() {
          let userId = this.getAttribute("data-user-id");
          let newRole = this.value;
          let originalRole = this.getAttribute("data-original-role");

          Swal.fire({
              title: 'Konfirmasi Ubah Role',
              text: `Anda yakin ingin mengubah role pengguna ini menjadi ${newRole}?`,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, Ubah!',
              cancelButtonText: 'Batal'
          }).then((result) => {
              if (result.isConfirmed) {
                  fetch(updateRoleUrl, {
                      method: "POST",
                      headers: {
                          "X-CSRF-TOKEN": csrfToken,
                          "Content-Type": "application/json",
                      },
                      body: JSON.stringify({
                          id: userId,
                          role: newRole
                      })
                  })
                  .then(response => response.json())
                  .then(data => {
                      if (data.success) {
                          Swal.fire('Berhasil!', data.message, 'success');
                          select.setAttribute("data-original-role", newRole);
                      } else {
                          Swal.fire('Gagal!', 'Terjadi kesalahan saat mengubah role.', 'error');
                          select.value = originalRole; // Kembalikan ke role sebelumnya jika gagal
                      }
                  })
                  .catch(error => {
                      console.error("Error:", error);
                      Swal.fire('Error!', 'Terjadi kesalahan pada server.', 'error');
                      select.value = originalRole;
                  });
              } else {
                  select.value = originalRole;
              }
          });
      });
  });
});

function getDetail(userId) {
  fetch(`/admin/user-summary/${userId}`)
      .then(response => response.json())
      .then(data => {
          document.getElementById('simpanan-wajib').innerText = `Rp ${data.totalSimpananWajib}`;
          document.getElementById('simpanan-sukarela').innerText = `Rp ${data.totalSimpananSukarela}`;
          document.getElementById('total-pinjaman').innerText = `Rp ${data.totalPinjaman}`;
      })
      .catch(error => console.error('Error:', error));
}

function confirmDelete(userId) {
  Swal.fire({
      title: 'Konfirmasi Hapus Pengguna',
      text: "Apakah Anda yakin ingin menghapus pengguna ini?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Batal'
  }).then((result) => {
      if (result.isConfirmed) {
            fetch(`/Data-Anggota/${userId}`, {
                method: "DELETE",
                headers: {
                  "X-CSRF-TOKEN": csrfToken,
                  "Content-Type": "application/json",
             }            
          })
          .then(response => response.json())
          .then(data => {
              if (data.success) {
                  Swal.fire('Berhasil!', data.message, 'success').then(() => {
                      location.reload(); // Reload halaman setelah sukses
                  });
              } else {
                  Swal.fire('Gagal!', 'Pengguna gagal dihapus.', 'error');
              }
          })
          .catch(error => {
              console.error("Error:", error);
              Swal.fire('Error!', 'Terjadi kesalahan pada server.', 'error');
          });
      }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("formTambahAnggota");

  form.addEventListener("submit", function (event) {
      event.preventDefault();

      Swal.fire({
          title: "Konfirmasi",
          text: "Apakah data sudah benar?",
          icon: "question",
          showCancelButton: true,
          confirmButtonText: "Ya, Simpan!",
          cancelButtonText: "Batal"
      }).then((result) => {
          if (result.isConfirmed) {
              const formData = new FormData(form);
              const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

              fetch("/Data-Anggota/store", {
                  method: "POST",
                  headers: {
                      "X-CSRF-TOKEN": csrfToken
                  },
                  body: formData
              })
              .then(response => response.json())
              .then(data => {
                  if (data.success) {
                      Swal.fire({
                          title: "Berhasil!",
                          text: data.message,
                          icon: "success",
                          confirmButtonText: "OK"
                      }).then(() => {
                          window.location.reload(); // Refresh halaman setelah klik OK
                      });
                  } else {
                      Swal.fire("Gagal!", data.message, "error");
                  }
              })
              .catch(error => {
                  Swal.fire("Error!", "Terjadi kesalahan saat mengirim data.", "error");
              });
          }
      });
  });
});