<?php 
/**
 * KOENCHIPS - Tim Kami
 * Features BLOK 6.0: Hover Flip Card Effects & Member Profiles
 */
include 'includes/header.php'; 
?>

<!-- Header -->
<section class="bg-army py-24 text-white text-center">
    <div class="container" data-aos="zoom-in">
        <h1 class="text-5xl md:text-7xl playfair mb-4">Behind <span class="text-gold">The Leaf</span></h1>
        <p class="text-xl opacity-75 max-w-2xl mx-auto italic">"Sekumpulan pemimpi yang percaya pada keajaiban pangan lokal."</p>
    </div>
</section>

<!-- Team Cards Grid -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <?php 
                $team = [
                    ['name'=>'Angelita Aliyah Putri', 'role'=>'Business Lead', 'major'=>'Teknik Lingkungan', 'quote'=>'Mengintegrasikan keberlanjutan dalam setiap strategi bisnis KOENCHIPS.', 'img'=>'64', 'color'=>'#3d4e22'],
                    ['name'=>'Muhammad Ananda Hariadi', 'role'=>'Product & Operations', 'major'=>'Informatika', 'quote'=>'Efisiensi sistem adalah kunci untuk menjaga kerenyahan tetap konsisten.', 'img'=>'65', 'color'=>'#4a5c2a'],
                    ['name'=>'Galih Aji Pangestu', 'role'=>'Tech & Branding', 'major'=>'Informatika', 'quote'=>'Membangun jembatan digital antara petani lokal dan pecinta camilan premium.', 'img'=>'91', 'color'=>'#5a7032'],
                    ['name'=>'Ananditha Frissila Utama', 'role'=>'Marketing Lead', 'major'=>'Teknik Lingkungan', 'quote'=>'Marketing bukan cuma jualan, tapi memberi edukasi tentang pangan sehat.', 'img'=>'177', 'color'=>'#2d3a1e'],
                ];
                foreach($team as $i => $m):
            ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $i*100; ?>">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front shadow-xl border-8 border-cream">
                            <img src="https://picsum.photos/id/<?php echo $m['img']; ?>/800/1000" class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/90 via-black/40 to-transparent text-white text-start">
                                <h3 class="playfair text-xl font-bold mb-1"><?php echo $m['name']; ?></h3>
                                <p class="text-[9px] font-black uppercase tracking-[0.3em] text-gold mb-0"><?php echo $m['role']; ?></p>
                            </div>
                        </div>
                        <div class="flip-card-back" style="background-color: <?php echo $m['color']; ?>;">
                            <div class="text-gold text-3xl mb-6">“</div>
                            <h4 class="playfair text-xl font-bold mb-2"><?php echo $m['role']; ?></h4>
                            <p class="text-xs uppercase tracking-widest text-gold/60 mb-8 font-black"><?php echo $m['major']; ?></p>
                            <p class="italic opacity-80 mb-0 font-light text-sm leading-relaxed">"<?php echo $m['quote']; ?>"</p>
                            <div class="mt-10 flex space-x-3 text-gold">
                                <i class="bi bi-linkedin"></i>
                                <i class="bi bi-instagram"></i>
                                <i class="bi bi-twitter-x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Team Footer -->
<section class="py-20 bg-cream text-center">
    <div class="container" data-aos="fade-up">
        <h2 class="playfair text-3xl mb-4">Mari Berkolaborasi!</h2>
        <p class="text-gray-500 mb-8 max-w-xl mx-auto">Kami selalu terbuka untuk ide-ide baru dan kemitraan kreatif. Jangan ragu untuk menyapa kami.</p>
        <a href="kontak.php" class="text-darkGreen font-bold no-underline group">Kirim Pesan ke Tim Kami <span class="group-hover:ml-3 transition-all inline-block">&rarr;</span></a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
