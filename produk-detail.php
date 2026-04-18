<?php 
/**
 * KOENCHIPS - Produk Detail
 * Features: Product Visualization, Nutrition Facts, Related Products
 */
include 'includes/header.php'; 
include 'products_data.php';

// Get Product ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$p = null;
foreach($products as $prod) { if($prod['id'] === $id) $p = $prod; }
if(!$p) header("Location: katalog.php");
?>

<section class="section-padding bg-cream">
    <div class="container mt-10">
        <div class="row g-5">
            
            <!-- Image Section -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="sticky-top" style="top: 120px;">
                    <div class="bg-white p-6 rounded-[4rem] shadow-xl overflow-hidden border-8 border-white">
                        <img src="<?php echo $p['image']; ?>" class="w-full h-[600px] object-cover rounded-[3rem] hover-scale">
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-10">
                    <span class="text-gold uppercase tracking-[0.4em] font-black text-[10px] mb-4 block">Signature Varian</span>
                    <h1 class="playfair text-6xl font-black mb-4 text-army"><?php echo $p['name']; ?></h1>
                    
                    <div class="flex items-center space-x-6 mb-10">
                        <h2 class="text-4xl font-black text-gold mb-0">Rp 12.000</h2>
                        <span class="px-4 py-1.5 bg-army/5 text-army text-[9px] font-black uppercase rounded-lg">Stok: <?php echo $p['stock']; ?> Tersedia</span>
                    </div>

                    <div class="flex text-gold text-xl space-x-1 mb-8">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <span class="text-xs text-gray-400 font-bold ml-4">5.0 (200+ Reviews)</span>
                    </div>

                    <p class="text-lg text-gray-500 leading-relaxed mb-12 italic">"<?php echo $p['desc']; ?>"</p>

                    <!-- Tabs Meta -->
                    <div class="bg-white p-10 rounded-[3rem] shadow-sm mb-12">
                         <div class="flex space-x-10 mb-8 border-b border-gray-100 pb-4">
                              <h5 class="text-xs font-black uppercase tracking-widest text-gold border-b-2 border-gold pb-2 mb-0">Deskripsi</h5>
                              <h5 class="text-xs font-black uppercase tracking-widest opacity-20 mb-0">Nutrisi</h5>
                              <h5 class="text-xs font-black uppercase tracking-widest opacity-20 mb-0">Ulasan</h5>
                         </div>
                         <p class="text-sm text-gray-500 leading-relaxed">Dibuat dari sukun pilihan yang diiris dengan presisi tinggi dan diproses menggunakan teknologi *Vacuum Frying*. Menghasilkan tekstur yang sangat krispi namun tetap renyah di dalam. Tanpa tambahan MSG maupun pewarna buatan.</p>
                         <div class="mt-8 grid grid-cols-2 gap-4">
                              <div class="bg-cream/50 p-4 rounded-2xl">
                                   <small class="text-[9px] font-black uppercase tracking-widest block mb-1 opacity-50">Berat Bersih</small>
                                   <strong class="text-army">100 Gram</strong>
                              </div>
                              <div class="bg-cream/50 p-4 rounded-2xl">
                                   <small class="text-[9px] font-black uppercase tracking-widest block mb-1 opacity-50">Kadaluwarsa</small>
                                   <strong class="text-army">6 Bulan</strong>
                              </div>
                         </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col md:flex-row gap-4">
                        <button onclick="addToCart('<?php echo $p['name']; ?>')" class="flex-grow bg-army text-white py-5 rounded-3xl font-black uppercase tracking-widest hover:bg-gold hover:text-darkGreen transition-all shadow-2xl">TAMBAH KE KERANJANG</button>
                        <a href="order.php" class="bg-gold text-deepGreen px-10 py-5 rounded-3xl font-black uppercase border-2 border-gold no-underline transition-all hover:bg-white flex items-center justify-center">CHECKOUT</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Related Products -->
<section class="section-padding bg-white mt-12">
    <div class="container">
        <h2 class="playfair text-4xl mb-12">Rekomendasi Lainnya</h2>
        <div class="row g-5">
            <?php for($i=0; $i<4; $i++): $rel = $products[$i]; ?>
            <div class="col-md-3">
                 <div class="group cursor-pointer" onclick="window.location.href='produk-detail.php?id=<?php echo $rel['id']; ?>'">
                      <div class="h-64 rounded-[3rem] overflow-hidden mb-6 shadow-sm border-4 border-white">
                           <img src="<?php echo $rel['image']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                      </div>
                      <h4 class="playfair font-bold text-lg text-center"><?php echo $rel['name']; ?></h4>
                 </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
