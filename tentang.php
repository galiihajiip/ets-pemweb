<?php 
/**
 * KOENCHIPS - Tentang Kami
 * Features BLOK 6.0: Mission/Vision, Timeline, Gallery, Animated Stats
 */
include 'includes/header.php'; 
?>

<!-- Hero -->
<section class="bg-army py-24 text-white text-center">
    <div class="container overflow-hidden">
        <span class="text-gold uppercase tracking-[0.5em] font-black text-[10px] mb-4 block" data-aos="fade-down">The Heritage</span>
        <h1 class="text-6xl md:text-8xl playfair mb-6" data-aos="fade-up">Filosofi <span class="text-gold">KOEN</span></h1>
        <p class="text-xl opacity-75 max-w-2xl mx-auto italic" data-aos="fade-up" data-aos-delay="200">"Sukun sebagai simbol ketahanan dan kehangatan nusantara."</p>
    </div>
</section>

<!-- Misi Visi -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="bg-darkGreen text-white p-12 rounded-[4rem] shadow-xl h-full border-b-[12px] border-gold">
                    <h2 class="playfair text-4xl mb-8 text-gold">Visi Utama</h2>
                    <p class="text-lg opacity-80 leading-relaxed font-light">Menjadi pionir camilan sehat berbasis kearifan lokal yang mendunia, memberikan standar baru pada kualitas kripik sukun, serta menginspirasi gaya hidup positif di setiap lapisan masyarakat Indonesia.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white p-12 rounded-[4rem] shadow-xl h-full border border-gray-100">
                    <h2 class="playfair text-4xl mb-8 text-army">Misi Kami</h2>
                    <ul class="space-y-6 text-gray-500 font-medium">
                        <li class="flex items-start space-x-4">
                            <span class="w-8 h-8 bg-gold/10 rounded-full flex items-center justify-center text-gold"> <i class="bi bi-patch-check-fill"></i> </span>
                            <span>Menjaga keaslian rasa sukun dengan teknik pengolahan terbaik.</span>
                        </li>
                        <li class="flex items-start space-x-4">
                            <span class="w-8 h-8 bg-gold/10 rounded-full flex items-center justify-center text-gold"> <i class="bi bi-patch-check-fill"></i> </span>
                            <span>Meningkatkan nilai ekonomi buah sukun bagi petani lokal.</span>
                        </li>
                        <li class="flex items-start space-x-4">
                            <span class="w-8 h-8 bg-gold/10 rounded-full flex items-center justify-center text-gold"> <i class="bi bi-patch-check-fill"></i> </span>
                            <span>Memberikan kebahagiaan melalui kerenyahan yang sehat & halal.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Grid -->
<section class="py-20 bg-darkGreen text-white text-center">
    <div class="container">
        <div class="row g-6 text-center">
            <div class="col-md-3" data-aos="zoom-in">
                <h3 class="text-5xl font-black text-gold mb-2" data-count="50000">0</h3>
                <p class="uppercase tracking-widest text-[10px] font-black opacity-50">Sobat Koen Puas</p>
            </div>
            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <h3 class="text-5xl font-black text-gold mb-2" data-count="300">0</h3>
                <p class="uppercase tracking-widest text-[10px] font-black opacity-50">Testimoni Bintang 5</p>
            </div>
            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <h3 class="text-5xl font-black text-gold mb-2">4.8</h3>
                <p class="uppercase tracking-widest text-[10px] font-black opacity-50">Rating Playstore</p>
            </div>
            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <h3 class="text-5xl font-black text-gold mb-2" data-count="4">0</h3>
                <p class="uppercase tracking-widest text-[10px] font-black opacity-50">Varian Rasa Signature</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="playfair text-5xl mb-4">Momen Kebahagiaan</h2>
            <p class="text-gray-400">KOENCHIPS di setiap tawa Anda.</p>
        </div>
        <div class="row g-4">
            <?php for($i=1; $i<=12; $i++): ?>
            <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="<?php echo ($i % 6)*50; ?>">
                <div class="h-48 rounded-[2rem] overflow-hidden shadow-sm hover-scale">
                    <img src="https://picsum.photos/400/300?random=<?php echo $i; ?>" class="w-full h-full object-cover">
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-gold text-center relative overflow-hidden">
    <div class="container relative z-10" data-aos="fade-up">
        <h2 class="playfair text-4xl text-darkGreen font-bold mb-8 uppercase tracking-wider">Jadilah Bagian dari Inovasi Kami</h2>
        <a href="kontak.php" class="bg-darkGreen text-white px-12 py-5 rounded-full font-black no-underline inline-block uppercase tracking-widest hover:scale-105 transition-all shadow-2xl">BICARA DENGAN KAMI VIA WA</a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const stats = document.querySelectorAll('[data-count]');
    const countUp = () => {
        stats.forEach(s => {
            const tar = +s.getAttribute('data-count');
            const num = +s.innerText;
            const inc = tar / 40;
            if(num < tar) { s.innerText = Math.ceil(num + inc); setTimeout(countUp, 25); }
            else { s.innerText = tar + (tar > 10 ? '+' : ''); }
        });
    };
    const obsStat = new IntersectionObserver((es) => { if(es[0].isIntersecting) { countUp(); obsStat.disconnect(); } }, {threshold: 0.5});
    if(stats.length) obsStat.observe(stats[0]);
});
</script>

<?php include 'includes/footer.php'; ?>
