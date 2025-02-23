document.getElementById('btn-save-profile').addEventListener('click', function() {
    Swal.fire({
        title: "Konfirmasi",
        text: "Apakah Anda yakin ingin menyimpan perubahan profil?",
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "Ya, Simpan!",
        cancelButtonText: "Batal",
        confirmButtonColor: "#0d6efd",
        cancelButtonColor: "#dc3545"
    }).then((result) => {
        if (result.isConfirmed) {
            simpanProfil();
        }
    });
});

function simpanProfil() {
    let form = document.getElementById('edit-profile-form');
    let formData = new FormData(form);

    fetch("{{ route('profil.update') }}", {
        method: "POST",    
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire("Berhasil!", data.message, "success");
        } else {
            Swal.fire("Gagal!", data.message, "error");
        }
    })
    .catch(error => {
        Swal.fire("Error!", "Terjadi kesalahan pada server.", "error");
        console.error('Error:', error);
    });
}