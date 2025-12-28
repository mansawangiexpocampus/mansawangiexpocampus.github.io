// ============================================
// MECAMP-FEST 2026 - JavaScript
// Professional Interactive Features
// ============================================

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initScrollEffects();
    initScrollToTop();
    initContactForm();
    initAnimations();
    initConsoleMessage();
});

// ============================================
// 1. MOBILE MENU (DIPERBAIKI)
// ============================================

function initMobileMenu() {
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.getElementById('navMenu'); // Pastikan di HTML id="navMenu"
    const navLinks = document.querySelectorAll('.nav-link');

    if (menuBtn && navMenu) {
        // Toggle Menu saat tombol diklik
        menuBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Mencegah klik tembus
            this.classList.toggle('active'); // Animasi icon X
            navMenu.classList.toggle('active'); // Munculkan menu
        });

        // Tutup menu saat salah satu link diklik
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                menuBtn.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Tutup menu saat klik di luar area navbar
        document.addEventListener('click', function(event) {
            const navbar = document.querySelector('.navbar');
            const isClickInside = navbar.contains(event.target);

            // Jika menu terbuka dan yang diklik BUKAN bagian dari navbar
            if (navMenu.classList.contains('active') && !isClickInside) {
                menuBtn.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });

        // Reset menu jika layar dibesarkan (resize) ke mode laptop
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                menuBtn.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }
}

// ============================================
// 2. SCROLL EFFECTS
// ============================================

function initScrollEffects() {
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');

    window.addEventListener('scroll', function() {
        // Efek bayangan navbar saat scroll
        if (window.scrollY > 50) {
            navbar.style.boxShadow = '0 4px 20px rgba(67, 35, 27, 0.15)';
        } else {
            navbar.style.boxShadow = 'none'; // Flat saat di paling atas
        }

        // Highlight link aktif sesuai posisi scroll
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 150)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current) && current !== '') {
                link.classList.add('active');
            }
        });
    });
}

// ============================================
// 3. SCROLL TO TOP BUTTON
// ============================================

function initScrollToTop() {
    const scrollTopBtn = document.getElementById('scrollTop');
    
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                scrollTopBtn.style.display = 'flex'; // Pastikan display flex agar icon tengah
                // Sedikit delay untuk animasi opacity
                setTimeout(() => scrollTopBtn.classList.add('show'), 10);
            } else {
                scrollTopBtn.classList.remove('show');
                setTimeout(() => scrollTopBtn.style.display = 'none', 300);
            }
        });

        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

// ============================================
// 4. CONTACT FORM
// ============================================

function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Biarkan form submit secara normal ke Laravel (hapus e.preventDefault jika ingin reload)
            // e.preventDefault(); 
            
            // Atau jika ingin validasi visual saja sebelum kirim:
            const btn = this.querySelector('.submit-button');
            btn.innerHTML = 'Mengirim...';
            btn.style.opacity = '0.7';
        });
    }
}

// ============================================
// 5. ANIMATIONS (FADE IN ON SCROLL)
// ============================================

function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target); // Hanya animasi sekali
            }
        });
    }, observerOptions);

    const animateElements = document.querySelectorAll('.goal-card, .timeline-item, .tenant-card, .stat-card, .division-card, .core-member');

    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Tambahkan style animasi via JS
    const style = document.createElement('style');
    style.textContent = `
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    `;
    document.head.appendChild(style);
}

// ============================================
// 6. CONSOLE MESSAGE
// ============================================
function initConsoleMessage() {
    console.log('%c MECAMP-FEST 2026 ', 'background: #43231B; color: #E9CF99; font-size: 20px; font-weight: bold; padding: 10px;');
    console.log('%c Festival Expo Campus MAN 1 Banyuwangi ', 'background: #8F8360; color: #FFF; font-size: 14px; padding: 5px;');
}