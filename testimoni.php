<?php 
/**
 * KOENCHIPS - Testimoni Lengkap
 * Features BLOK 7.0: Masonry Grid 12 Items, Flavor Filtering JS
 */
include 'includes/header.php'; 
?>

<!-- Header -->
<section class="bg-cream py-32 text-center overflow-hidden">
    <div class="container relative z-10" data-aos="zoom-out">
        <h1 class="text-6xl md:text-8xl playfair mb-6">Suara <span class="text-gold italic">Sahabat</span></h1>
        <p class="text-xl text-gray-400 font-light max-w-2xl mx-auto">"Karena setiap kerenyahan memiliki ceritanya sendiri-sendiri."</p>
    </div>
</section>

<!-- Testimoni Grid -->
<section class="section-padding bg-white">
    <div class="container">
        
        <!-- Flavor Filter Tags -->
        <div class="flex flex-wrap justify-center gap-3 mb-16" data-aos="fade-up">
            <button class="px-8 py-3 rounded-full font-black text-[10px] uppercase tracking-[0.2em] transition-all bg-gold text-deepGreen testi-filter-btn" data-filter="all">Tampilkan Semua</button>
            <button class="px-8 py-3 rounded-full font-black text-[10px] uppercase tracking-[0.2em] transition-all bg-cream hover:bg-gold testi-filter-btn" data-filter="Chocolate">Chocolate</button>
            <button class="px-8 py-3 rounded-full font-black text-[10px] uppercase tracking-[0.2em] transition-all bg-cream hover:bg-gold testi-filter-btn" data-filter="Matcha">Matcha</button>
            <button class="px-8 py-3 rounded-full font-black text-[10px] uppercase tracking-[0.2em] transition-all bg-cream hover:bg-gold testi-filter-btn" data-filter="Vanilla">Vanilla</button>
            <button class="px-8 py-3 rounded-full font-black text-[10px] uppercase tracking-[0.2em] transition-all bg-cream hover:bg-gold testi-filter-btn" data-filter="Taro">Taro</button>
        </div>

        <div class="row g-4" id="testi-masonry">
            <?php 
                $testis = [
                    ['name'=>'Andini Putri', 'flavor'=>'Chocolate', 'rate'=>5, 'txt'=>'Jelas banget bedanya sama kerupuk biasa. Chocolate-nya melt di lidah!'],
                    ['name'=>'Budi Santoso', 'flavor'=>'Taro', 'rate'=>5, 'txt'=>'Rasa taronya gurih abis, nggak pelit bumbu sama sekali.'],
                    ['name'=>'Siska Melani', 'flavor'=>'Matcha', 'rate'=>4, 'txt'=>'Cocok buat temen nugas. Fresh dan ringan di tenggorokan.'],
                    ['name'=>'Dinda Ayu', 'flavor'=>'Vanilla', 'rate'=>5, 'txt'=>'Ini kripik sukun paling wangi yang pernah saya beli.'],
                    ['name'=>'Rizky Pratama', 'flavor'=>'Chocolate', 'rate'=>5, 'txt'=>'Baru sehari nyampe, satu toples langsung dicolong adek.'],
                    ['name'=>'Maya Sari', 'flavor'=>'Vanilla', 'rate'=>4, 'txt'=>'Enak, tapi pengirimannya lumayan lama ke Kalimantan.'],
                    ['name'=>'Andri Wijaya', 'flavor'=>'Taro', 'rate'=>5, 'txt'=>'Teksturnya pas, nggak keras tapi renyah kriuk poll.'],
                    ['name'=>'Hendra Kurniawan', 'flavor'=>'Matcha', 'rate'=>5, 'txt'=>'Matcha sejauh ini varian terbaik bagi saya. Nagih!'],
                    ['name'=>'Saraswati', 'flavor'=>'Chocolate', 'rate'=>5, 'txt'=>'Camilan paling asik pas diajak nonton drakor.'],
                    ['name'=>'Bambang Tejo', 'flavor'=>'Taro', 'rate'=>4, 'txt'=>'Bagus, tolong diperbanyak stoknya di marketplace.'],
                    ['name'=>'Larasati', 'flavor'=>'Vanilla', 'rate'=>5, 'txt'=>'Packingnya niat bgt, pake bubble tebel. Aman sampe Bali.'],
                    ['name'=>'Dewi Lestari', 'flavor'=>'Chocolate', 'rate'=>5, 'txt'=>'Produk lokal tapi kualitas internasional.'],
                ];
                foreach($testis as $i => $t):
            ?>
            <div class="col-md-6 col-lg-3 testi-item" data-flavor="<?php echo $t['flavor']; ?>" data-aos="fade-up" data-aos-delay="<?php echo ($i%4)*100; ?>">
                <div class="bg-cream p-10 rounded-[3.5rem] shadow-sm hover-scale flex flex-col h-full border border-gold/5 border-b-[8px] border-gold">
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-14 h-14 bg-army text-white flex items-center justify-center rounded-full font-black text-xl shadow-lg border-4 border-white">
                            <?php echo substr($t['name'], 0, 1); ?>
                        </div>
                        <div>
                            <h6 class="font-bold mb-0 text-darkGreen"><?php echo $t['name']; ?></h6>
                            <p class="text-[9px] font-black uppercase tracking-widest text-gold mt-1">Varian: <?php echo $t['flavor']; ?></p>
                        </div>
                    </div>
                    <div class="flex text-gold text-[10px] space-x-1 mb-6">
                        <?php for($j=0; $j<5; $j++) echo $j<$t['rate']?'★':'☆'; ?>
                    </div>
                    <p class="italic text-gray-500 text-sm leading-relaxed flex-grow">"<?php echo $t['txt']; ?>"</p>
                    <div class="mt-8 pt-6 border-t border-gold/10 text-end opacity-20">
                        <i class="bi bi-patch-check-fill text-xl"></i>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.testi-filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        // UI State
        document.querySelectorAll('.testi-filter-btn').forEach(b => {
             b.classList.remove('bg-gold', 'text-deepGreen');
             b.classList.add('bg-cream');
        });
        btn.classList.add('bg-gold', 'text-deepGreen');
        btn.classList.remove('bg-cream');

        const filter = btn.getAttribute('data-filter');
        document.querySelectorAll('.testi-item').forEach(item => {
             if(filter==='all' || item.getAttribute('data-flavor')===filter) {
                 item.style.display = 'block';
             } else {
                 item.style.display = 'none';
             }
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
