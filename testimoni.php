<?php include 'includes/header.php'; ?>

<section class="bg-cream py-24 text-center">
    <div class="container">
        <h1 class="text-5xl playfair mb-4">Testimoni Sobat <span class="text-gold">Koen</span></h1>
        <p class="text-xl text-gray-500 max-w-2xl mx-auto">Suara hati pelanggan kami dari seluruh penjuru Nusantara.</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <!-- Flavor Filter -->
        <div class="flex flex-wrap justify-center gap-2 mb-12">
            <button class="px-6 py-2 rounded-full font-bold transition-all bg-gold text-deepGreen testi-filter" data-filter="all">Semua</button>
            <button class="px-6 py-2 rounded-full font-bold transition-all bg-cream hover:bg-gold testi-filter" data-filter="Chocolate">Chocolate</button>
            <button class="px-6 py-2 rounded-full font-bold transition-all bg-cream hover:bg-gold testi-filter" data-filter="Matcha">Matcha</button>
            <button class="px-6 py-2 rounded-full font-bold transition-all bg-cream hover:bg-gold testi-filter" data-filter="Vanilla">Vanilla</button>
            <button class="px-6 py-2 rounded-full font-bold transition-all bg-cream hover:bg-gold testi-filter" data-filter="Taro">Taro</button>
        </div>

        <div class="row g-4" id="testi-grid">
            <?php 
            $testis = [
                ['name'=>'Andini Putri', 'flavor'=>'Chocolate', 'rating'=>5, 'txt'=>'Cokelatnya premium banget, nggak kayak keripik biasa!'],
                ['name'=>'Budi Santoso', 'flavor'=>'Taro', 'rating'=>5, 'txt'=>'Rasa taronya unik, gurih dan nagih banget.'],
                ['name'=>'Siska Melani', 'flavor'=>'Matcha', 'rating'=>4, 'txt'=>'Seger rasa matchanya, cocok buat pecinta teh hijau.'],
                ['name'=>'Dinda Ayu', 'flavor'=>'Vanilla', 'rating'=>5, 'txt'=>'Manis vanillanya pas, nggak bikin eneg.'],
                ['name'=>'Rizky Pratama', 'flavor'=>'Chocolate', 'rating'=>5, 'txt'=>'Favorit anak-anak di rumah. Stoknya langsung habis!'],
                ['name'=>'Maya Sari', 'flavor'=>'Vanilla', 'rating'=>4, 'txt'=>'Kerenyahannya luar biasa, tapi tetap empuk digigit.'],
                ['name'=>'Andri Wijaya', 'flavor'=>'Taro', 'rating'=>5, 'txt'=>'Pas banget buat temen nonton bola.'],
                ['name'=>'Hendra Kurniawan', 'flavor'=>'Matcha', 'rating'=>5, 'txt'=>'Rasa matchanya kerasa banget, nggak cuma pewarna.'],
                ['name'=>'Saraswati', 'flavor'=>'Chocolate', 'rating'=>5, 'txt'=>'Bumbunya merata sampai ke kepingan terakhir.'],
                ['name'=>'Bambang Tejo', 'flavor'=>'Taro', 'rating'=>4, 'txt'=>'Awalnya ragu, pas nyoba malah keterusan.'],
                ['name'=>'Larasati', 'flavor'=>'Vanilla', 'rating'=>5, 'txt'=>'Packagingnya cantik, cocok buat kado ulang tahun.'],
                ['name'=>'Dewi Lestari', 'flavor'=>'Chocolate', 'rating'=>5, 'txt'=>'Asli Sidoarjo, asli enak tenan Rek!'],
            ];
            foreach($testis as $t): 
            ?>
            <div class="col-md-6 col-lg-3 testi-card" data-flavor="<?php echo $t['flavor']; ?>">
                <div class="bg-cream p-8 rounded-[3rem] shadow-sm hover:shadow-xl transition-all border border-gray-100 flex flex-col h-full">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-army rounded-full flex items-center justify-center text-white font-bold text-lg uppercase">
                            <?php echo substr($t['name'], 0, 1); ?>
                        </div>
                        <div>
                            <h6 class="mb-0 font-bold"><?php echo $t['name']; ?></h6>
                            <small class="text-[10px] text-gray-500 uppercase font-black">Beli: <?php echo $t['flavor']; ?></small>
                        </div>
                    </div>
                    <div class="flex text-gold text-xs mb-4">
                        <?php for($i=0; $i<$t['rating']; $i++) echo '★'; ?>
                    </div>
                    <p class="italic text-gray-700 text-sm leading-relaxed flex-grow">"<?php echo $t['txt']; ?>"</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.testi-filter').forEach(btn => {
    btn.addEventListener('click', () => {
        // UI
        document.querySelectorAll('.testi-filter').forEach(b => {
            b.classList.remove('bg-gold', 'text-deepGreen');
            b.classList.add('bg-cream');
        });
        btn.classList.remove('bg-cream');
        btn.classList.add('bg-gold', 'text-deepGreen');

        const filter = btn.getAttribute('data-filter');
        document.querySelectorAll('.testi-card').forEach(card => {
            if(filter === 'all' || card.getAttribute('data-flavor') === filter) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
