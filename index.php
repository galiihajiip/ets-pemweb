<?php 
/**
 * KOENCHIPS - Landing Page (Home)
 * Features BLOK 3.0: Parallax Hero, Stats Count-up, Testimonial Slider
 */
include 'includes/header.php'; 
include 'products_data.php'; 
?>

<!-- Swiper.js CSS for Testimonials -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- [SECTION 1] - HERO PARALLAX -->
<section class="relative h-[100vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-darkGreen/75 z-10"></div>
        <!-- Background Image -->
        <img src="https://picsum.photos/id/493/1920/1080" alt="Hero Background" class="w-full h-full object-cover transform scale-110 parallax">
    </div>
    
    <div class="container relative z-20 text-center text-white">
        <div class="max-w-4xl mx-auto" data-aos="fade-up">
            <h1 class="text-6xl md:text-8xl playfair font-bold mb-4">Bukan Sekadar Keripik</h1>
            <h2 class="text-2xl md:text-4xl playfair italic text-gold mb-8">Pangan Lokal, Rasa Premium</h2>
            <p class="text-lg md:text-xl mb-12 opacity-90 font-light max-w-2xl mx-auto leading-relaxed">
                KOENCHIPS menghadirkan kerenyahan buah sukun pilihan dengan sentuhan teknologi modern untuk menemani setiap cerita Anda.
            </p>
            <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                <a href="katalog.php" class="bg-gold text-deepGreen px-10 py-4 rounded-full font-bold no-underline hover:bg-white transition-all shadow-xl uppercase tracking-widest text-sm">Lihat Katalog</a>
                <a href="https://wa.me/6282265588823" class="border-2 border-white text-white px-10 py-4 rounded-full font-bold no-underline hover:bg-white hover:text-darkGreen transition-all uppercase tracking-widest text-sm">Chat WhatsApp</a>
            </div>
        </div>
    </div>
</section>

<!-- [SECTION 2] - STAT CARDS -->
<section class="py-12 bg-white shadow-sm relative z-30">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3" data-aos="zoom-in">
                <div class="p-4">
                    <div class="text-4xl mb-2">🌿</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0" data-count="98">0</h3>
                    <p class="text-gray-500 uppercase text-[10px] font-black tracking-widest mt-2">Rendah Lemak (%)</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="p-4">
                    <div class="text-4xl mb-2">🏠</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0" data-count="100">0</h3>
                    <p class="text-gray-500 uppercase text-[10px] font-black tracking-widest mt-2">Bahan Lokal (%)</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="p-4">
                    <div class="text-4xl mb-2">✨</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0" data-count="15">0</h3>
                    <p class="text-gray-500 uppercase text-[10px] font-black tracking-widest mt-2">Varian Rasa</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="p-4">
                    <div class="text-4xl mb-2">⭐</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0">4.8</h3>
                    <p class="text-gray-500 uppercase text-[10px] font-black tracking-widest mt-2">Rating Kepuasan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- [SECTION 3] - FEATURES -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="playfair text-4xl md:text-5xl mb-4">Kenapa Memilih Sukun?</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p class="text-gray-600 italic">"Pangan lokal berkualitas dengan nutrisi seimbang."</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="0">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover-scale border-b-4 border-gold">
                    <div class="text-4xl mb-4 text-gold">🥗</div>
                    <h4 class="font-bold mb-3">Kaya Serat Alami</h4>
                    <p class="text-sm text-gray-600">Mendukung sistem pencernaan yang lebih sehat dan lancar.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover-scale border-b-4 border-army">
                    <div class="text-4xl mb-4 text-army">⚡</div>
                    <h4 class="font-bold mb-3">Energi Lebih Stabil</h4>
                    <p class="text-sm text-gray-600">Karbohidrat kompleks yang memberikan rasa kenyang lebih lama.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover-scale border-b-4 border-gold">
                    <div class="text-4xl mb-4 text-gold">⚖️</div>
                    <h4 class="font-bold mb-3">Lebih Seimbang</h4>
                    <p class="text-sm text-gray-600">Teknik Vacuum Frying menjaga kadar lemak tetap rendah.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover-scale border-b-4 border-army">
                    <div class="text-4xl mb-4 text-army">🤝</div>
                    <h4 class="font-bold mb-3">Memberdayakan Lokal</h4>
                    <p class="text-sm text-gray-600">Berkontribusi langsung pada ekonomi petani sukun Sidoarjo.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12 opacity-40">
            <p class="text-[10px] uppercase tracking-widest font-black">KOENCHIPS bukan produk kesehatan atau medis</p>
        </div>
    </div>
</section>

<!-- [SECTION 4] - BEST SELLERS -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="flex justify-between items-end mb-12" data-aos="fade-right">
            <div>
                <h2 class="playfair text-4xl mb-2">Produk Terlaris</h2>
                <p class="text-gray-500 mb-0">Favorit Sobat Koen yang tak pernah sepi peminat.</p>
            </div>
            <a href="katalog.php" class="text-darkGreen font-bold no-underline hover:text-gold transition-all">Lihat Semua Katalog &rarr;</a>
        </div>
        
        <div class="row g-4">
            <?php for($i=0; $i<4; $i++): $p = $products[$i]; ?>
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="<?php echo $i*100; ?>">
                <div class="card border-0 rounded-[2.5rem] overflow-hidden shadow-sm hover-scale h-full">
                    <img src="<?php echo $p['image']; ?>" class="card-img-top h-60 object-cover" alt="<?php echo $p['name']; ?>">
                    <div class="card-body p-8">
                        <h5 class="playfair font-bold text-xl mb-1"><?php echo $p['name']; ?></h5>
                        <p class="text-gold font-bold mb-5">Rp 12.000 <span class="text-gray-400 text-xs font-normal">/ 100g</span></p>
                        <a href="produk-detail.php?id=<?php echo $p['id']; ?>" class="btn-koen w-full text-xs py-3 rounded-xl no-underline inline-block text-center uppercase font-black tracking-widest">Detail Produk</a>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- [SECTION 5] - TESTIMONIALS SLIDER -->
<section class="section-padding bg-cream overflow-hidden">
    <div class="container">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="playfair text-4xl mb-4">Apa Kata Penggermar?</h2>
            <div class="text-gold text-2xl">★★★★★</div>
        </div>
        
        <div class="swiper testimonialSwiper pb-12" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide px-4">
                    <div class="bg-white p-10 rounded-[3rem] shadow-sm text-center h-full">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=1" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-8 leading-relaxed">"Sukun Premium beneran premium! Bumbunya kerasa sampai Gigitan terakhir."</p>
                        <h6 class="font-bold mb-0">Riza Pratama</h6>
                        <small class="text-gold font-black text-[10px] uppercase">Verified Buyer</small>
                    </div>
                </div>
                <div class="swiper-slide px-4">
                    <div class="bg-white p-10 rounded-[3rem] shadow-sm text-center h-full">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=2" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-8 leading-relaxed">"Matchanya seger banget, gak bikin eneg. Cocok buat nemenin lembur kerja."</p>
                        <h6 class="font-bold mb-0">Andini Putri</h6>
                        <small class="text-gold font-black text-[10px] uppercase">Verified Buyer</small>
                    </div>
                </div>
                <div class="swiper-slide px-4">
                    <div class="bg-white p-10 rounded-[3rem] shadow-sm text-center h-full">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=3" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-8 leading-relaxed">"Suka sekali sama kampanye memberdayakan lokalnya. Sukses terus KOENCHIPS!"</p>
                        <h6 class="font-bold mb-0">Hendra Wijaya</h6>
                        <small class="text-gold font-black text-[10px] uppercase">Verified Buyer</small>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- [SECTION 6] - CTA BANNER -->
<section class="section-padding container">
    <div class="bg-darkGreen rounded-[4rem] p-16 text-center text-white relative overflow-hidden shadow-2xl" 
         style="background-image: radial-gradient(#d4a843 1px, transparent 1px); background-size: 30px 30px; background-color: #3d4e22;"
         data-aos="zoom-in">
        <div class="relative z-10 max-w-2xl mx-auto">
            <h2 class="playfair text-5xl mb-6">Nikmati Kerenyahan Tradisional Sekarang!</h2>
            <p class="text-lg opacity-80 mb-10 leading-relaxed">Pesan hari ini dan dapatkan gratis ongkir untuk wilayah Sidoarjo. Persediaan harian terbatas!</p>
            <a href="order.php" class="bg-gold text-deepGreen px-12 py-4 rounded-full font-black text-xl hover:bg-white transition-all no-underline inline-block uppercase tracking-widest shadow-2xl">PESAN ONLINE SEKARANG</a>
        </div>
    </div>
</section>

<!-- Swiper Initialization -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: { el: '.swiper-pagination', clickable: true },
        autoplay: { delay: 3500 },
        breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
    });

    const counters = document.querySelectorAll('[data-count]');
    const runCount = () => {
        counters.forEach(c => {
            const target = +c.getAttribute('data-count');
            const count = +c.innerText;
            const inc = target / 50;
            if (count < target) {
                c.innerText = Math.ceil(count + inc);
                setTimeout(runCount, 20);
            } else { c.innerText = target; }
        });
    };
    const observer = new IntersectionObserver((es) => { if(es[0].isIntersecting) { runCount(); observer.disconnect(); } }, { threshold: 0.5 });
    if(counters.length) observer.observe(counters[0]);
});
</script>

<?php include 'includes/footer.php'; ?>
