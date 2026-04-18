    <!-- Floating Buttons -->
    <div class="floating-btn">
        <a href="#top" id="backToTop" class="btn-back-to-top" title="Back to Top"><i class="bi bi-arrow-up"></i></a>
        <a href="https://wa.me/6282265588823" class="btn-wa shadow-2xl" target="_blank" title="Hubungi WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>

    <footer class="py-16 mt-24" style="background-color: #2d3a1e; color: #c8dca0;">
        <div class="container">
            <div class="row g-5 text-center text-md-start">
                <div class="col-lg-4">
                    <h3 class="playfair text-white text-3xl font-bold mb-4"><i class="fa-solid fa-leaf text-gold mr-2"></i>KOENCHIPS</h3>
                    <p class="opacity-80 text-sm leading-relaxed mb-6">KOENCHIPS adalah pelopor camilan keripik sukun premium Sidoarjo yang menggabungkan cita rasa tradisional dengan kualitas modern yang menyehatkan.</p>
                    <div class="flex justify-center justify-md-start space-x-3">
                        <a href="#" class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center text-white hover:text-gold hover:border-gold transition-all"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center text-white hover:text-gold hover:border-gold transition-all"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" class="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center text-white hover:text-gold hover:border-gold transition-all"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5 class="text-white playfair font-bold mb-4">Navigasi</h5>
                    <ul class="list-unstyled space-y-2 text-sm">
                        <li><a href="index.php" class="hover:text-gold no-underline transition-colors text-inherit">Home</a></li>
                        <li><a href="katalog.php" class="hover:text-gold no-underline transition-colors text-inherit">Katalog</a></li>
                        <li><a href="tentang.php" class="hover:text-gold no-underline transition-colors text-inherit">Tentang</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5 class="text-white playfair font-bold mb-4">Dukungan</h5>
                    <ul class="list-unstyled space-y-2 text-sm">
                        <li><a href="faq.php" class="hover:text-gold no-underline transition-colors text-inherit">FAQ</a></li>
                        <li><a href="reseller.php" class="hover:text-gold no-underline transition-colors text-inherit">Reseller</a></li>
                        <li><a href="blog.php" class="hover:text-gold no-underline transition-colors text-inherit">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white playfair font-bold mb-4">Kontak Resmi</h5>
                    <p class="text-sm">
                        <i class="bi bi-geo-alt text-gold mr-2"></i> Sidoarjo, Jawa Timur<br>
                        <i class="bi bi-telephone text-gold mr-2"></i> +62 822-6558-8823<br>
                        <i class="bi bi-envelope text-gold mr-2"></i> hello@koenchips.id
                    </p>
                </div>
            </div>
            <hr class="my-8 border-white/5">
            <p class="text-center text-xs opacity-50 mb-0">© 2026 KOENCHIPS. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            if(preloader) {
                preloader.style.opacity = '0';
                setTimeout(() => { preloader.style.display = 'none'; }, 500);
            }
        });
        const btt = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) { btt.classList.add('active'); }
            else { btt.classList.remove('active'); }
        });
        btt.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
