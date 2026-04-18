<?php 
/**
 * KOENCHIPS - Blog & Tips
 * Features BLOK 7.0: 6 Dummy Articles Grid, Excerpts, Category Badges
 */
include 'includes/header.php'; 
?>

<!-- Hero -->
<section class="bg-darkGreen py-32 text-white text-center relative overflow-hidden">
    <div class="container relative z-10" data-aos="fade-down">
        <h1 class="text-6xl md:text-8xl playfair mb-6">KOEN <span class="text-gold">Digest</span></h1>
        <p class="text-xl opacity-60 max-w-2xl mx-auto italic font-light">"Edukasi pangan, resep kreatif, dan kisah dari kebun sukun."</p>
    </div>
    <!-- Decor Circles -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-gold/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-army/20 rounded-full blur-3xl -ml-40 -mb-40"></div>
</section>

<!-- Blog Feed -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-5">
            <?php 
                $posts = [
                    ['title'=>'5 Manfaat Sukun untuk Tubuh yang Jarang Diketahui', 'cat'=>'HEALTY', 'img'=>'493', 'date'=>'18 APR 2026', 'desc'=>'Sukun memiliki karbohidrat kompleks yang memberikan rasa kenyang lebih lama dibanding kentang...'],
                    ['title'=>'Tips Ngemil Sehat di Kantor Antipanik Lapar', 'cat'=>'LIFESTYLE', 'img'=>'225', 'date'=>'15 APR 2026', 'desc'=>'Pilihan camilan di saat lembur menentukan fokus kerja Anda. Pelajari cara memilih snack rendah lemak...'],
                    ['title'=>'Mengapa KOENCHIPS Memilih Proses Minim Minyak?', 'cat'=>'BEHIND SCENE', 'img'=>'429', 'date'=>'12 APR 2026', 'desc'=>'Teknologi Vacuum Frying menjaga integritas nutrisi buah tanpa harus berendam dalam genangan minyak panas...'],
                    ['title'=>'3 Modifikasi Resep Camilan Sukun yang Kekinian', 'cat'=>'RECIPE', 'img'=>'835', 'date'=>'10 APR 2026', 'desc'=>'Menciptakan kreasi sukun dengan saus dipping unik untuk acara kumpul keluarga di hari minggu...'],
                    ['title'=>'Sobat Koen: Membangun Komunitas Pecinta Lokal', 'cat'=>'COMMUNITY', 'img'=>'111', 'date'=>'05 APR 2026', 'desc'=>'Kisah sukses para mitra petani sukun di Sidoarjo dalam merubah komoditas rumahan menjadi global...'],
                    ['title'=>'KOENCHIPS di CFD Sidoarjo: Seru Banget!', 'cat'=>'EVENT', 'img'=>'517', 'date'=>'01 APR 2026', 'desc'=>'Dokumentasi keseruan ribuan warga yang mencicipi kerenyahan signature kami di pusat kota...'],
                ];
                foreach($posts as $i => $post):
            ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $i*100; ?>">
                <div class="bg-white rounded-[3rem] overflow-hidden shadow-sm hover-scale flex flex-col h-full group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://picsum.photos/id/<?php echo $post['img']; ?>/800/600" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <span class="absolute top-6 left-6 bg-gold text-deepGreen text-[10px] font-black px-4 py-2 rounded-xl shadow-lg uppercase tracking-widest"><?php echo $post['cat']; ?></span>
                    </div>
                    <div class="p-10 flex flex-col flex-grow">
                        <small class="text-gray-400 font-black uppercase text-[10px] tracking-[0.2em] mb-4"><?php echo $post['date']; ?></small>
                        <h3 class="playfair text-2xl font-bold mb-4 leading-tight group-hover:text-gold transition-colors"><?php echo $post['title']; ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-10 line-clamp-3"><?php echo $post['desc']; ?></p>
                        <div class="mt-auto pt-6 border-t border-gray-50 flex items-center justify-between">
                            <a href="#" class="text-army font-black text-xs uppercase tracking-widest no-underline group-hover:underline">Baca Selengkapnya &rarr;</a>
                            <div class="flex space-x-2 text-gray-300">
                                <i class="bi bi-heart-fill"></i>
                                <i class="bi bi-share-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination Bar -->
        <div class="mt-20 flex justify-center space-x-3">
             <button class="w-12 h-12 rounded-full border border-gray-100 bg-white shadow-sm font-bold active-tab">1</button>
             <button class="w-12 h-12 rounded-full border border-gray-100 bg-white shadow-sm font-bold opacity-30 hover:opacity-100 transition-all">2</button>
             <button class="w-12 h-12 rounded-full border border-gray-100 bg-white shadow-sm font-bold opacity-30 hover:opacity-100 transition-all">3</button>
        </div>
    </div>
</section>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
    overflow: hidden;
}
.active-tab { background-color: var(--gold) !important; color: var(--army-dark) !important; border-color: transparent !important; }
</style>

<?php include 'includes/footer.php'; ?>
