// ============================================
// MECAMP-FEST 2026 - JavaScript
// Professional Interactive Features
// ============================================

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initScrollEffects();
    initContactForm();
    initAnimations();
    initScrollToTop();
});

// ============================================
// MOBILE MENU
// ============================================

function initMobileMenu() {
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('.nav-link');

    if (menuBtn && navMenu) {
        // Hapus event listener lama (clone node trick)
        const newMenuBtn = menuBtn.cloneNode(true);
        menuBtn.parentNode.replaceChild(newMenuBtn, menuBtn);

        // Tambahkan event listener baru yang lebih kuat
        newMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Mencegah klik tembus ke body
            toggleMenu();
        });

        // Tutup menu saat link diklik
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });

        // Tutup menu saat klik di luar area
        document.addEventListener('click', function(event) {
            const navbar = document.querySelector('.navbar');
            const isMenuOpen = navMenu.classList.contains('active');
            const isClickInside = navbar.contains(event.target);

            if (isMenuOpen && !isClickInside) {
                closeMenu();
            }
        });
    }

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth > 768) {
                closeMenu();
            }
        }, 250);
    });
}

// ============================================
// SCROLL EFFECTS
// ============================================

function initScrollEffects() {
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');

    // Sticky navbar with shadow on scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.style.boxShadow = '0 4px 20px rgba(67, 35, 27, 0.2)';
        } else {
            navbar.style.boxShadow = '0 2px 8px rgba(67, 35, 27, 0.12)';
        }

        // Update active nav link based on scroll position
        updateActiveNavLink(sections, navLinks);
    });

    // Smooth scroll for navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const navbarHeight = navbar.offsetHeight;
                    const targetPosition = targetElement.offsetTop - navbarHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

function updateActiveNavLink(sections, navLinks) {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (window.scrollY >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === current) {
            link.classList.add('active');
        }
    });
}

// ============================================
// SCROLL TO TOP BUTTON
// ============================================

function initScrollToTop() {
    const scrollTopBtn = document.getElementById('scrollTop');
    
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
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
// CONTACT FORM
// ============================================

function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            handleFormSubmit(this);
        });

        // Add input validation styling
        const inputs = contactForm.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateInput(this);
            });
        });
    }
}

function handleFormSubmit(form) {
    const formData = new FormData(form);
    const data = {};
    
    for (let [key, value] of formData.entries()) {
        data[key] = value;
    }

    // Validation
    if (validateForm(form)) {
        // Show success message
        showNotification('Pesan berhasil dikirim! Kami akan segera menghubungi Anda.', 'success');
        
        // Reset form
        form.reset();
        
        // In production, you would send this data to a server
        console.log('Form data:', data);
    } else {
        showNotification('Mohon lengkapi semua field yang diperlukan.', 'error');
    }
}

function validateForm(form) {
    const inputs = form.querySelectorAll('[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!validateInput(input)) {
            isValid = false;
        }
    });
    
    return isValid;
}

function validateInput(input) {
    const value = input.value.trim();
    const type = input.type;
    
    let isValid = true;
    
    if (input.hasAttribute('required') && !value) {
        isValid = false;
    } else if (type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        isValid = emailRegex.test(value);
    } else if (type === 'tel' && value) {
        const phoneRegex = /^[\d\s\-\+\(\)]+$/;
        isValid = phoneRegex.test(value);
    }
    
    // Add visual feedback
    if (isValid) {
        input.style.borderColor = '#4CAF50';
    } else {
        input.style.borderColor = '#f44336';
    }
    
    return isValid;
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    // Style notification
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 30px;
        background-color: ${type === 'success' ? '#4CAF50' : type === 'error' ? '#f44336' : '#2196F3'};
        color: white;
        padding: 1.5rem 2rem;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        z-index: 10000;
        animation: slideInRight 0.3s ease;
        max-width: 350px;
        font-weight: 500;
    `;
    
    document.body.appendChild(notification);
    
    // Remove notification after 5 seconds
    setTimeout(function() {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(function() {
            document.body.removeChild(notification);
        }, 300);
    }, 5000);
}

// ============================================
// ANIMATIONS
// ============================================

function initAnimations() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Animate stats numbers
                if (entry.target.classList.contains('stat-number')) {
                    animateNumber(entry.target);
                }
                
                // Animate stat bars
                if (entry.target.classList.contains('stat-card')) {
                    const statBar = entry.target.querySelector('.stat-fill');
                    if (statBar) {
                        setTimeout(() => {
                            statBar.style.width = statBar.style.width || '0%';
                        }, 300);
                    }
                }
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll(`
        .goal-card,
        .timeline-item,
        .tenant-card,
        .stat-card,
        .division-card,
        .core-member,
        .highlight-card
    `);

    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Add CSS for animate-in class
    const style = document.createElement('style');
    style.textContent = `
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
        
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
        
        @keyframes countUp {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    `;
    document.head.appendChild(style);
}

function animateNumber(element) {
    const target = element.textContent.trim();
    const isApprox = target.includes('±');
    const cleanTarget = target.replace(/[±,]/g, '');
    const number = parseInt(cleanTarget);
    
    if (isNaN(number)) return;
    
    const duration = 2000; // 2 seconds
    const steps = 60;
    const increment = number / steps;
    let current = 0;
    let step = 0;
    
    element.style.animation = 'countUp 0.5s ease';
    
    const timer = setInterval(() => {
        current += increment;
        step++;
        
        if (step >= steps) {
            current = number;
            clearInterval(timer);
        }
        
        const displayNumber = Math.floor(current);
        const formattedNumber = displayNumber >= 1000 
            ? displayNumber.toLocaleString('id-ID')
            : displayNumber;
        
        element.textContent = isApprox ? `±${formattedNumber}` : formattedNumber;
    }, duration / steps);
}

// ============================================
// PARALLAX EFFECT (Optional Enhancement)
// ============================================

function initParallax() {
    const header = document.getElementById('header');
    
    if (header) {
        window.addEventListener('scroll', function() {
            const scrolled = window.scrollY;
            const rate = scrolled * 0.5;
            
            header.style.transform = `translate3d(0, ${rate}px, 0)`;
        });
    }
}

// ============================================
// LAZY LOADING IMAGES
// ============================================

function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// ============================================
// PAGE LOADING ANIMATION
// ============================================

window.addEventListener('load', function() {
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    
    setTimeout(function() {
        document.body.style.opacity = '1';
    }, 100);
});

// ============================================
// UTILITY FUNCTIONS
// ============================================

// Debounce function for performance
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Get element offset top
function getOffsetTop(element) {
    let offsetTop = 0;
    while(element) {
        offsetTop += element.offsetTop;
        element = element.offsetParent;
    }
    return offsetTop;
}

// ============================================
// CONSOLE MESSAGE
// ============================================

console.log('%c MECAMP-FEST 2026 ', 'background: #43231B; color: #E9CF99; font-size: 20px; font-weight: bold; padding: 10px;');
console.log('%c Festival Expo Campus MAN 1 Banyuwangi ', 'background: #8F8360; color: #FFF; font-size: 14px; padding: 5px;');
console.log('%c "There is No Too Big Dream For a Little Dreamers" ', 'color: #8C523B; font-style: italic; font-size: 12px;');