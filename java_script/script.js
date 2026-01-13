// 1. Efek Navbar Berubah Warna Saat Scroll
// Perbaikan: hapus tag <script> (tidak perlu di file .js) dan bungkus kode agar menunggu DOM siap,
// serta tambahkan pengecekan elemen untuk mencegah error jika elemen tidak ada.

document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');

    // 1. Efek Navbar Berubah Warna Saat Scroll
    window.addEventListener('scroll', function() {
        if (!navbar) return; // Aman jika .navbar tidak ditemukan
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(58, 123, 213, 0.95)'; // Biru solid transparan
            navbar.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
            navbar.style.padding = '15px 0'; // Mengecilkan navbar sedikit
        } else {
            navbar.style.background = 'transparent';
            navbar.style.boxShadow = 'none';
            navbar.style.padding = '25px 0';
        }
        navbar.style.transition = '0.4s';
    });

    // 2. Animasi Muncul Saat Scroll (Scroll Reveal)
    const observerOptions = { threshold: 0.2 };

    // Gunakan IntersectionObserver hanya jika didukung
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Menerapkan animasi pada section About Us jika ada
        const aboutSection = document.querySelector('.about-us');
        if (aboutSection) {
            aboutSection.style.opacity = '0';
            aboutSection.style.transform = 'translateY(50px)';
            aboutSection.style.transition = '1s ease-out';
            observer.observe(aboutSection);
        }
    }

    // 3. Efek Klik Halus (Smooth Scroll) untuk Menu
    document.querySelectorAll('.menu a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    targetEl.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
});