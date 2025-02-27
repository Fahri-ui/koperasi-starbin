// Fungsi Preview Ikon saat Pilih Platform
document.getElementById('platform').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const iconClass = selectedOption.getAttribute('data-icon');
    const iconPreview = document.getElementById('icon-preview');

    iconPreview.innerHTML = `<i class="${iconClass}"></i>`;
});

// Fungsi Edit Link
function editLink(link) {
    document.getElementById('socialLinkId').value = link.id;
    document.getElementById('platform').value = link.platform;
    document.getElementById('url').value = link.url;

    const selectedOption = document.querySelector(`#platform option[value="${link.platform}"]`);
    if (selectedOption) {
        const iconClass = selectedOption.getAttribute('data-icon');
        document.getElementById('icon-preview').innerHTML = `<i class="${iconClass}"></i>`;
    }
}

// Fungsi Hapus Link dengan Refresh Halaman
function deleteLink(id) {
    Swal.fire({
        title: "Yakin ingin menghapus?",
        text: "Data ini akan hilang selamanya!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/admin/social-links/delete/${id}`, {
                method: "DELETE",
                headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire("Berhasil!", "Link sosial media telah dihapus.", "success")
                    .then(() => location.reload()); // Reload halaman setelah hapus
                }
            });
        }
    });
}

// Form Submit (Tambah/Update) dengan Reload Halaman
document.getElementById("formSocialLink").addEventListener("submit", function() {
    Swal.fire({
        title: "Berhasil!",
        text: "Data berhasil disimpan.",
        icon: "success"
    }).then(() => location.reload()); // Reload halaman setelah submit
});