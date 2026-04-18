<?php include 'includes/header.php'; ?>

<!-- Section 1: Hero -->
<section class="bg-army py-24 text-white text-center">
    <div class="container overflow-hidden">
        <span class="text-gold uppercase tracking-[0.4em] font-bold text-sm mb-4 block reveal">The Story of Koen</span>
        <h1 class="text-6xl md:text-8xl playfair mb-6 reveal">Naik Kelas Bersama <span class="text-gold italic">Sukun</span></h1>
        <p class="text-xl opacity-80 max-w-2xl mx-auto italic reveal">"Memberdayakan kekayaan lokal untuk kebahagiaan global."</p>
    </div>
</section>

<!-- Section 2: Misi Visi -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 reveal">
                <div class="bg-darkGreen text-white p-12 rounded-[3.5rem] shadow-xl h-full">
                    <h2 class="playfair text-4xl mb-6 text-gold">Visi Kami</h2>
                    <p class="text-lg opacity-80 leading-relaxed">Menjadi brand camilan sukun nomor satu di dunia yang menginspirasi gaya hidup sehat dan memberdayakan ekonomi krearif masyarakat lokal Indonesia melalui inovasi pangan berkelanjutan.</p>
                </div>
            </div>
            <div class="col-lg-6 reveal">
                <div class="bg-white p-12 rounded-[3.5rem] shadow-xl h-full border border-gray-100">
                    <h2 class="playfair text-4xl mb-6 text-army">Misi Kami</h2>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start space-x-3">
                            <span class="text-gold">✔</span>
                            <span>Menjaga standar kualitas tertinggi dalam setiap proses produksi.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-gold">✔</span>
                            <span>Terus berinovasi dengan varian rasa yang sesuai lidah modern.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-gold">✔</span>
                            <span>Menjaga kesejahteraan petani mitra kami di daerah Sidoarjo.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Timeline -->
<section class="section-padding bg-white">
    <div class="container">
        <h2 class="playfair text-4xl text-center mb-16">Perjalanan KOENCHIPS</h2>
        <div class="relative max-w-4xl mx-auto border-l-2 border-gold/30 pl-10 space-y-12">
            <div class="relative reveal">
                <div class="absolute -left-[51px] top-0 w-5 h-5 bg-gold rounded-full ring-8 ring-gold/10"></div>
                <h4 class="font-bold text-xl text-army mb-2">2022 - Awal Mula</h4>
                <p class="text-gray-500">Dimulai dari garasi kecil di rumah Sidoarjo, bereksperimen dengan resep tradisional sukun.</p>
            </div>
            <div class="relative reveal">
                <div class="absolute -left-[51px] top-0 w-5 h-5 bg-gold rounded-full ring-8 ring-gold/10"></div>
                <h4 class="font-bold text-xl text-army mb-2">2023 - Ekspansi Produksi</h4>
                <p class="text-gray-500">Membuka batch produksi pertama untuk dijual secara online melalui marketplace.</p>
            </div>
            <div class="relative reveal">
                <div class="absolute -left-[51px] top-0 w-5 h-5 bg-gold rounded-full ring-8 ring-gold/10"></div>
                <h4 class="font-bold text-xl text-army mb-2">2024 - Inovasi Vacuum Frying</h4>
                <p class="text-gray-500">Investasi pada teknologi penggorengan hampa untuk hasil yang lebih sehat dan renyah.</p>
            </div>
            <div class="relative reveal">
                <div class="absolute -left-[51px] top-0 w-5 h-5 bg-gold rounded-full ring-8 ring-gold/10"></div>
                <h4 class="font-bold text-xl text-army mb-2">2026 - Go Regional</h4>
                <p class="text-gray-500">Target menjadi snack premium wajib di seluruh retail modern Indonesia.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Angka Capaian -->
<section class="py-20 bg-darkGreen text-white text-center">
    <div class="container">
        <div class="row g-6">
            <div class="col-md-3">
                <h3 class="text-5xl font-black text-gold mb-2" data-count="50000">0</h3>
                <p class="uppercase tracking-widest text-xs font-bold opacity-70">Pelanggan Puas</p>
            </div>
            <div class="col-md-3">
                <h3 class="text-5xl font-black text-gold mb-2" data-count="300">0</h3>
                <p class="uppercase tracking-widest text-xs font-bold opacity-70">Ulasan ⭐⭐⭐⭐⭐</p>
            </div>
            <div class="col-md-3">
                <h3 class="text-5xl font-black text-gold mb-2">4.8</h3>
                <p class="uppercase tracking-widest text-xs font-bold opacity-70">Rating Rata-rata</p>
            </div>
            <div class="col-md-3">
                <h3 class="text-5xl font-black text-gold mb-2" data-count="4">0</h3>
                <p class="uppercase tracking-widest text-xs font-bold opacity-70">Varian Rasa Utama</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Galeri Foto -->
<section class="section-padding bg-cream">
    <div class="container">
        <h2 class="playfair text-4xl text-center mb-16">Galeri Kebahagiaan</h2>
        <div class="row g-4">
            <?php for($i=1; $i<=12; $i++): ?>
            <div class="col-6 col-md-4 col-lg-3 reveal">
                <div class="h-64 rounded-3xl overflow-hidden shadow-sm hover:scale-105 transition-transform">
                    <img src="https://picsum.photos/id/<?php echo 480+$i; ?>/800/800" class="w-full h-full object-cover">
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Section 6: CTA -->
<section class="py-24 bg-gold text-center overflow-hidden relative">
    <div class="container relative z-10">
        <h2 class="playfair text-4xl text-darkGreen mb-8">Jadilah Bagian dari Perjalanan Kami</h2>
        <a href="https://wa.me/6282265588823" class="bg-darkGreen text-white px-12 py-4 rounded-full font-bold no-underline inline-block uppercase tracking-widest hover:bg-army transition-all">Hubungi WhatsApp Admin</a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Count up logic
    const counters = document.querySelectorAll('[data-count]');
    const runCount = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            const inc = target / 50;
            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(runCount, 30);
            } else { counter.innerText = target + (target > 1000 ? '+' : ''); }
        });
    };
    const obs = new IntersectionObserver((es) => { if(es[0].isIntersecting) { runCount(); obs.disconnect(); } }, {threshold: 0.5});
    if(counters.length) obs.observe(counters[0]);
});
</script>

<?php include 'includes/footer.php'; ?>
