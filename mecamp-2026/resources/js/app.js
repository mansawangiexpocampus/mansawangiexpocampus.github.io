import './bootstrap'; // Jika menggunakan setup default Laravel

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconSpans = document.querySelectorAll('#hamburger-icon span');

    btn.addEventListener('click', () => {
        // 1. Toggle Menu (Buka/Tutup)
        menu.classList.toggle('hidden');

        // 2. Animasi Icon (Garis 3 jadi X)
        // Garis atas
        iconSpans[0].classList.toggle('rotate-45');
        iconSpans[0].classList.toggle('translate-y-2');
        
        // Garis tengah (hilang)
        iconSpans[1].classList.toggle('opacity-0');
        
        // Garis bawah
        iconSpans[2].classList.toggle('-rotate-45');
        iconSpans[2].classList.toggle('-translate-y-2.5');
    });
});