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

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".role-select").forEach(select => {
        select.addEventListener("change", function() {
            let userId = this.getAttribute("data-user-id");
            let newRole = this.value;

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
                    fetch("{{ route('users.updateRole') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
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
                        } else {
                            Swal.fire('Gagal!', 'Terjadi kesalahan saat mengubah role.', 'error');
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        Swal.fire('Error!', 'Terjadi kesalahan pada server.', 'error');
                    });
                } else {
                    // Kembalikan ke nilai sebelumnya jika batal
                    this.value = this.getAttribute("data-original-role");
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
        title: 'Apakah Anda yakin?',
        text: "Akun ini akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`deleteForm-${userId}`).submit();
        }
    });
}