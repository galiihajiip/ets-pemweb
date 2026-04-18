/**
 * KOENCHIPS - Global JavaScript
 * Features: Cart Logic, Global Observers, Preloader
 */

// [1] - Cart Management System
function updateCartCount() {
    const el = document.getElementById('cart-count');
    if (el) {
        const cart = JSON.parse(localStorage.getItem('koenchips_cart')) || [];
        el.innerText = cart.length;
    }
}

function addToCart(productName) {
    const cart = JSON.parse(localStorage.getItem('koenchips_cart')) || [];
    cart.push(productName);
    localStorage.setItem('koenchips_cart', JSON.stringify(cart));
    
    // Refresh navbar counter
    updateCartCount();
    
    // Success Toast (using SweetAlert2 if available)
    if (typeof Swal !== 'undefined') {
        Swal.fire({
            title: 'Berhasil!',
            text: productName + ' telah ditambahkan ke keranjang.',
            icon: 'success',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    } else {
        alert(productName + " ditambahkan ke keranjang!");
    }
}

// [2] - Initialize Page Elements
document.addEventListener('DOMContentLoaded', () => {
    // Initial Cart Refresh
    updateCartCount();

    // Intersection Observer for Reveal Animations (Fallback for AOS)
    const revealEls = document.querySelectorAll('.reveal');
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-active');
            }
        });
    }, { threshold: 0.1 });
    revealEls.forEach(el => obs.observe(el));
    
    // Parallax Effect for Hero
    window.addEventListener('scroll', () => {
        const p = document.querySelector('.parallax');
        if (p) {
            let offset = window.pageYOffset;
            p.style.transform = `translateY(${offset * 0.4}px) scale(1.1)`;
        }
    });
});
