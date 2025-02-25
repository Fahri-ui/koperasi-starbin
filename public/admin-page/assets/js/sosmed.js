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

// Fungsi Hapus Link
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
                Swal.fire("Berhasil!", "Link sosial media telah dihapus.", "success").then(() => {
                    window.location.reload();
                });
            });
        }
    });
}

// Form Submit (Tambah/Update)
document.getElementById("formSocialLink").addEventListener("submit", function(event) {
    event.preventDefault();
    const id = document.getElementById("socialLinkId").value;
    const platform = document.getElementById("platform").value;
    const url = document.getElementById("url").value;
    const selectedOption = document.querySelector(`#platform option[value="${platform}"]`);
    const icon = selectedOption ? selectedOption.getAttribute('data-icon') : '';

    const method = id ? "PUT" : "POST";
    const action = id ? `/admin/social-links/update/${id}` : "/admin/social-links/store";

    fetch(action, {
        method: method,
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ platform, url, icon })
    })
    .then(res => res.json())
    .then(data => {
        Swal.fire("Berhasil!", `Link ${platform} berhasil disimpan.`, "success").then(() => {
            window.location.reload();
        });
    });
});