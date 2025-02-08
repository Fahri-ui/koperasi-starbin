function checkNotifications() {
        fetch("{{ route('notifikasi') }}")
            .then(response => response.text())
            .then(data => {
                let parser = new DOMParser();
                let doc = parser.parseFromString(data, "text/html");
                let newBadge = doc.querySelector(".badge");

                if (newBadge) {
                    document.querySelector(".badge").innerHTML = newBadge.innerHTML;
                } else {
                    document.querySelector(".badge").remove();
                }
            });
    }

    setInterval(checkNotifications, 10000); // Cek notifikasi setiap 10 detik