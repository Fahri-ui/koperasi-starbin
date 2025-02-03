    document.getElementById("transaction-amount").addEventListener("input", function(e) {
        const input = e.target;
        const value = parseInt(input.value, 10);

        // Jika nilai bukan kelipatan 10,000, otomatis dibulatkan ke kelipatan terdekat
        if (value % 10000 !== 0) {
            input.value = Math.round(value / 10000) * 10000;
        }
    });
