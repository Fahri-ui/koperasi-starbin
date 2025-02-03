document.addEventListener('DOMContentLoaded', () => {
    // Tampilkan atau sembunyikan alert berdasarkan status pembayaran
    const paymentStatus = true; // Ubah ini sesuai status pembayaran sebenarnya (true/false)
    const successAlert = document.querySelector('.alert-success');
    const warningAlert = document.querySelector('.alert-warning');

    if (paymentStatus) {
        successAlert.classList.remove('d-none');
        warningAlert.classList.add('d-none');
    } else {
        successAlert.classList.add('d-none');
        warningAlert.classList.remove('d-none');
    }

    // Validasi formulir pembayaran
    const paymentForm = document.getElementById('payment-form');
    paymentForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const paymentMethod = document.getElementById('payment-method').value;
        const paymentProof = document.getElementById('payment-proof').files[0];

        if (!paymentMethod) {
            alert('Pilih metode pembayaran.');
            return;
        }

        if (!paymentProof) {
            alert('Unggah bukti pembayaran.');
            return;
        }

        alert('Pembayaran berhasil dikonfirmasi!');
        paymentForm.reset(); // Reset formulir setelah submit
    });
});


