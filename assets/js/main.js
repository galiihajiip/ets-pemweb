// Cart Count Update
function updateCartCount() {
    const countEl = document.getElementById('cart-count');
    if (countEl) {
        let cart = JSON.parse(localStorage.getItem('koenchips_cart')) || [];
        countEl.innerText = cart.length;
    }
}

// Initial count and listener
document.addEventListener('DOMContentLoaded', () => {
    updateCartCount();
    
    window.addEventListener('cartUpdated', () => {
        updateCartCount();
    });
    
    // Initial animations...
    // Initial animations
    const heroContent = document.querySelector('#hero-content');
    if (heroContent) {
        heroContent.style.opacity = '0';
        heroContent.style.transform = 'translateY(30px)';
        setTimeout(() => {
            heroContent.style.transition = 'all 1s ease-out';
            heroContent.style.opacity = '1';
            heroContent.style.transform = 'translateY(0)';
        }, 300);
    }

    // Scroll reveal logic
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-active');
            }
        });
    }, observerOptions);

    // Apply reveal to sections
    document.querySelectorAll('section, header, .row > div').forEach(el => {
        el.classList.add('reveal');
        observer.observe(el);
    });
});

// Utility: Form validasi sederhana
function validateForm(formId) {
    const form = document.getElementById(formId);
    if (!form) return true;
    
    // logic here
    return true;
}
