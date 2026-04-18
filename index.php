<?php 
include 'includes/header.php'; 
include 'products_data.php';
?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Section 1: Hero Parallax -->
<section class="relative h-[100vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-darkGreen/75 z-10"></div>
        <img src="https://picsum.photos/id/493/1920/1080" alt="Sukun Background" class="w-full h-full object-cover transform scale-110 parallax">
    </div>
    
    <div class="container relative z-20 text-center text-white">
        <div class="max-w-4xl mx-auto reveal">
            <h1 class="text-6xl md:text-8xl playfair font-bold mb-4">Bukan Sekadar Keripik</h1>
            <h2 class="text-2xl md:text-4xl playfair italic text-gold mb-8">Pangan Lokal, Rasa Premium</h2>
            <p class="text-lg md:text-xl mb-12 opacity-90 font-light max-w-2xl mx-auto leading-relaxed">
                Menghadirkan kelezatan buah sukun pilihan yang diproses dengan teknologi modern untuk kerenyahan maksimal di setiap kepingnya.
            </p>
            <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                <a href="katalog.php" class="bg-gold text-deepGreen px-10 py-4 rounded-full font-bold no-underline hover:bg-white transition-all shadow-xl uppercase tracking-widest">
                    Lihat Katalog
                </a>
                <a href="https://wa.me/6282265588823" class="border-2 border-white text-white px-10 py-4 rounded-full font-bold no-underline hover:bg-white hover:text-darkGreen transition-all uppercase tracking-widest">
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Icon Stat Cards -->
<section class="py-12 bg-white shadow-sm relative z-30">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="text-4xl mb-2">🌿</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0" data-count="98">0</h3>
                    <p class="text-gray-500 uppercase text-xs font-bold tracking-widest mt-2">Rendah Lemak (%)</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="text-4xl mb-2">🏠</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0" data-count="100">0</h3>
                    <p class="text-gray-500 uppercase text-xs font-bold tracking-widest mt-2">Pangan Lokal (%)</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="text-4xl mb-2">✨</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0" data-count="15">0</h3>
                    <p class="text-gray-500 uppercase text-xs font-bold tracking-widest mt-2">Varian Rasa</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="p-4">
                    <div class="text-4xl mb-2">⭐</div>
                    <h3 class="text-3xl font-bold text-darkGreen mb-0">4.8</h3>
                    <p class="text-gray-500 uppercase text-xs font-bold tracking-widest mt-2">Rating Pelanggan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Kenapa Sukun? -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="playfair text-4xl md:text-5xl mb-4">Kenapa Memilih Sukun?</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p class="text-gray-600 italic">"Buah ajaib dari tropis dengan segudang manfaat."</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover:-translate-y-2 transition-transform border-b-4 border-gold">
                    <div class="text-4xl mb-4 text-gold">🥗</div>
                    <h4 class="font-bold mb-3">Kaya Serat Alami</h4>
                    <p class="text-sm text-gray-600">Membantu pencernaan tetap lancar dan sehat setiap hari.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover:-translate-y-2 transition-transform border-b-4 border-army">
                    <div class="text-4xl mb-4 text-army">⚡</div>
                    <h4 class="font-bold mb-3">Energi Lebih Stabil</h4>
                    <p class="text-sm text-gray-600">Karbohidrat kompleks yang memberikan energi tahan lama.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover:-translate-y-2 transition-transform border-b-4 border-gold">
                    <div class="text-4xl mb-4 text-gold">⚖️</div>
                    <h4 class="font-bold mb-3">Lebih Seimbang</h4>
                    <p class="text-sm text-gray-600">Indeks glikemik rendah, cocok sebagai camilan harian.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white p-8 rounded-3xl shadow-sm text-center h-full hover:-translate-y-2 transition-transform border-b-4 border-army">
                    <div class="text-4xl mb-4 text-army">🤝</div>
                    <h4 class="font-bold mb-3">Memberdayakan Lokal</h4>
                    <p class="text-sm text-gray-600">Mendukung petani sukun lokal Sidoarjo dan sekitarnya.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-gray-400 text-xs uppercase tracking-widest font-bold">KOENCHIPS bukan produk kesehatan atau medis</p>
        </div>
    </div>
</section>

<!-- Section 4: Best Seller -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="playfair text-4xl mb-2">Produk Best Seller</h2>
                <p class="text-gray-500 mb-0">Cita rasa yang paling dicintai Sobat Koen.</p>
            </div>
            <a href="katalog.php" class="text-darkGreen font-bold no-underline group">Lihat Semua <span class="group-hover:ml-2 transition-all">→</span></a>
        </div>
        
        <div class="row g-4">
            <?php for($i=0; $i<4; $i++): $p = $products[$i]; ?>
            <div class="col-md-3">
                <div class="card border-0 rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="<?php echo $p['image']; ?>" class="card-img-top h-60 object-cover" alt="<?php echo $p['name']; ?>">
                    <div class="card-body p-6">
                        <h5 class="playfair font-bold text-xl mb-1"><?php echo $p['name']; ?></h5>
                        <p class="text-gold font-bold mb-4">Rp 12.000 <span class="text-gray-400 text-xs font-normal">/ 100g</span></p>
                        <a href="produk-detail.php?id=<?php echo $p['id']; ?>" class="btn-koen w-full text-sm py-2 rounded-xl no-underline inline-block text-center uppercase font-bold">Detail</a>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Section 5: Proses Produksi -->
<section class="section-padding bg-darkGreen text-white">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="playfair text-4xl mb-4">Proses Pembuatan</h2>
            <p class="opacity-70">Standar kualitas tinggi di setiap tahap produksi.</p>
        </div>
        
        <div class="row g-0 relative">
            <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-gold/30 -translate-y-1/2 hidden lg:block"></div>
            
            <div class="col-lg-3 col-md-6 mb-8 lg:mb-0 px-4 text-center relative z-10">
                <div class="w-16 h-16 bg-gold text-darkGreen rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6 shadow-lg">1</div>
                <h5 class="font-bold mb-3">Seleksi Sukun</h5>
                <p class="text-sm opacity-70">Memilih buah sukun tua kualitas grade-A dari petani.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-8 lg:mb-0 px-4 text-center relative z-10">
                <div class="w-16 h-16 bg-gold text-darkGreen rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6 shadow-lg">2</div>
                <h5 class="font-bold mb-3">Iris Presisi</h5>
                <p class="text-sm opacity-70">Pemotongan dengan ketebalan standar untuk hasil renyah.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-8 lg:mb-0 px-4 text-center relative z-10">
                <div class="w-16 h-16 bg-gold text-darkGreen rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6 shadow-lg">3</div>
                <h5 class="font-bold mb-3">Proses Minim Minyak</h5>
                <p class="text-sm opacity-70">Teknik penggorengan hampa untuk hasil sehat & lezat.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-8 lg:mb-0 px-4 text-center relative z-10">
                <div class="w-16 h-16 bg-gold text-darkGreen rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-6 shadow-lg">4</div>
                <h5 class="font-bold mb-3">Packaging Premium</h5>
                <p class="text-sm opacity-70">Kemasan kedap udara untuk menjaga kualitas rasa.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Testimoni Slider -->
<section class="section-padding bg-cream overflow-hidden">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="playfair text-4xl mb-4">Apa Kata Mereka?</h2>
            <div class="text-gold text-2xl">★★★★★</div>
        </div>
        
        <div class="swiper testimonialSwiper pb-12">
            <div class="swiper-wrapper">
                <div class="swiper-slide px-4">
                    <div class="bg-white p-8 rounded-[3rem] shadow-sm text-center">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=1" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-6">"Rasanya benar-benar beda dari keripik sukun yang ada di pasar. Packagingnya juga mewah banget, cocok buat oleh-oleh."</p>
                        <h6 class="font-bold mb-0">Riza Pratama</h6>
                        <small class="text-gold font-bold">Sobat Koen</small>
                    </div>
                </div>
                <div class="swiper-slide px-4">
                    <div class="bg-white p-8 rounded-[3rem] shadow-sm text-center">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=2" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-6">"Camilan favorit keluarga! Yang Caramel Glaze juara banget manisnya pas."</p>
                        <h6 class="font-bold mb-0">Indah Permata</h6>
                        <small class="text-gold font-bold">Sobat Koen</small>
                    </div>
                </div>
                <div class="swiper-slide px-4">
                    <div class="bg-white p-8 rounded-[3rem] shadow-sm text-center">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=3" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-6">"Salut sama KOENCHIPS, bantu petani lokal berkembang. Rasanya juga premium, kualitas ekspor!"</p>
                        <h6 class="font-bold mb-0">Andi Budiman</h6>
                        <small class="text-gold font-bold">Sobat Koen</small>
                    </div>
                </div>
                <div class="swiper-slide px-4">
                    <div class="bg-white p-8 rounded-[3rem] shadow-sm text-center">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=4" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-6">"Pengiriman cepat dan bubble wrap super tebal. Keripik nggak hancur sama sekali."</p>
                        <h6 class="font-bold mb-0">Siska Amalia</h6>
                        <small class="text-gold font-bold">Sobat Koen</small>
                    </div>
                </div>
                <div class="swiper-slide px-4">
                    <div class="bg-white p-8 rounded-[3rem] shadow-sm text-center">
                        <div class="w-20 h-20 mx-auto mb-6 rounded-full overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=5" class="w-full h-full object-cover">
                        </div>
                        <p class="italic text-gray-700 mb-6">"Wajib coba varian Pedas Daun Jeruknya, seger banget baunya dan nagih bumbunya!"</p>
                        <h6 class="font-bold mb-0">Doni Setiawan</h6>
                        <small class="text-gold font-bold">Sobat Koen</small>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Section 7: CTA Banner -->
<section class="section-padding container">
    <div class="bg-darkGreen rounded-[4rem] p-16 text-center text-white relative overflow-hidden" style="background-image: radial-gradient(#d4a843 1px, transparent 1px); background-size: 30px 30px; background-color: #3d4e22;">
        <div class="relative z-10 max-w-2xl mx-auto">
            <h2 class="playfair text-5xl mb-6">Pesan Sekarang & Rasakan <br>Kerenyahannya</h2>
            <p class="text-lg opacity-80 mb-10 leading-relaxed">Nikmati promo gratis ongkir untuk wilayah Sidoarjo dan sekitarnya. Stok terbatas setiap harinya!</p>
            <a href="order.php" class="bg-gold text-darkGreen px-12 py-4 rounded-full font-bold text-xl hover:bg-white transition-all no-underline inline-block uppercase tracking-widest shadow-2xl">
                Beli Online
            </a>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Stat Counter Animation
    const counters = document.querySelectorAll('[data-count]');
    const speed = 200;

    const runCount = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(runCount, 15);
            } else {
                counter.innerText = target;
            }
        });
    };

    // Trigger counter when in view
    const observer = new IntersectionObserver((entries) => {
        if(entries[0].isIntersecting) {
            runCount();
            observer.disconnect();
        }
    }, { threshold: 0.5 });
    
    if(counters.length > 0) observer.observe(counters[0]);

    // Swiper Initializer
    new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        autoplay: {
            delay: 4000,
        },
    });
});
</script>

<?php include 'includes/footer.php'; ?>
