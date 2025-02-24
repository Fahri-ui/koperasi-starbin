document.getElementById('btn-save-profile').addEventListener('click', function () {
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
    formData.append('_method', 'PUT'); // Pakai PUT lewat _method

    fetch("{{ route('profil.update') }}", {
        method: "POST",
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        }        
    })
    .then(response => response.text())
    .then(text => {
        try {
            let data = JSON.parse(text);
            console.log('Full Response:', data);
            if (data.success) {
                Swal.fire("Berhasil!", data.message, "success");
            } else {
                Swal.fire("Gagal!", data.message, "error");
            }
        } catch (error) {
            console.error('Parsing error:', error);
            Swal.fire("Error!", "Respon tidak valid dari server.", "error");
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
        Swal.fire("Error!", "Terjadi kesalahan pada server.", "error");
    });
}