document.addEventListener("scroll", () => {
    const berandaSection = document.querySelector("#Beranda");
    const loginButton = document.querySelector(".login");
    const berandaRect = berandaSection.getBoundingClientRect();

    if (berandaRect.top <= 0 && berandaRect.bottom > 0) {
        // Jika berada di dalam section Beranda
        loginButton.style.bottom = "10%";
        loginButton.style.right = "7%";
        loginButton.style.width = "90px";
        loginButton.style.height = "70px";
        loginButton.style.lineHeight = "70px";
        loginButton.querySelector("h1").style.fontSize = "1rem";
    } else {
        // Jika tidak berada di section Beranda
        loginButton.style.bottom = "90.5%"; // Pastikan ini terlihat pada layout
        loginButton.style.right = "6%";
        loginButton.style.width = "70px";
        loginButton.style.height = "50px";
        loginButton.style.lineHeight = "50px";
        loginButton.querySelector("h1").style.fontSize = "1rem";
    }
});

document.addEventListener('DOMContentLoaded', () => {
const hiddenElements = document.querySelectorAll('.hidden');

const observerOptions = {
root: null, // viewport
threshold: 0.1, // Elemen terlihat 10% akan diproses
};

const observerCallback = (entries) => {
entries.forEach(entry => {
    if (entry.isIntersecting) {
        entry.target.classList.add('show'); // Tambahkan kelas 'show' saat elemen terlihat
    } else {
        entry.target.classList.remove('show'); // Hapus kelas 'show' saat elemen tidak terlihat
    }
});
};

const observer = new IntersectionObserver(observerCallback, observerOptions);

hiddenElements.forEach(el => observer.observe(el));
});