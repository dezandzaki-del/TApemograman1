// Perbaikan: file JS seharusnya tidak mengandung tag <script>. Menambahkan pengecekan elemen untuk mencegah error runtime.

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const inputs = document.querySelectorAll('input, textarea');

    // 1. Efek Fokus Input (Ceria & Interaktif)
    if (inputs.length) {
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                if (this.parentElement) {
                    this.parentElement.style.transform = 'translateX(10px)';
                    this.parentElement.style.transition = '0.3s';
                }
            });

            input.addEventListener('blur', function() {
                if (this.parentElement) {
                    this.parentElement.style.transform = 'translateX(0)';
                }
            });
        });
    }

    // 2. Validasi Nomor HP (Hanya Angka)
    const phoneInputs = document.querySelectorAll('input[name="no_pribadi"], input[name="no_wali"]');
    if (phoneInputs.length) {
        phoneInputs.forEach(phone => {
            phone.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, ''); // Hapus jika bukan angka
            });
        });
    }

    // 3. Efek Loading saat Tombol Daftar Diklik
    if (form) {
        form.addEventListener('submit', function(e) {
            const btn = form.querySelector('.btn-submit') || document.querySelector('.btn-submit');
            if (btn) {
                btn.innerHTML = 'Sedang Memproses...';
                btn.style.opacity = '0.7';
                btn.style.cursor = 'not-allowed';
                btn.disabled = true; // Mencegah klik ganda
            }

            // Jika Anda ingin menghentikan submit untuk validasi tambahan, gunakan e.preventDefault();
        });
    }

    // 4. Validasi Email Sederhana
    const emailInput = document.querySelector('input[type="email"]');
    if (emailInput) {
        emailInput.addEventListener('change', function() {
            const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!pattern.test(this.value)) {
                alert('Mohon masukkan format email yang benar!');
                this.value = '';
                this.focus();
            }
        });
    }
});