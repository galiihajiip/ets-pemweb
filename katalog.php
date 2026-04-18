<?php 
include 'includes/header.php'; 
include 'includes/products_data.php';
?>

<!-- Shop Header -->
<section class="bg-army py-20 text-white text-center">
    <div class="container">
        <h1 class="text-5xl playfair mb-4">Katalog Produk</h1>
        <p class="text-xl opacity-80 max-w-2xl mx-auto">Pilih varian KOENCHIPS favoritmu dan rasakan sensasi camilan premium khas Nusantara.</p>
    </div>
</section>

<!-- Product Grid -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <?php foreach($products as $product): ?>
            <div class="col-md-6 col-lg-4">
                <div class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all group border border-gray-100">
                    <div class="relative h-72 overflow-hidden">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4 bg-gold text-darkGreen px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                            <?php echo $product['tag']; ?>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="playfair text-2xl"><?php echo $product['name']; ?></h3>
                            <span class="text-army font-bold text-lg"><?php echo $product['price']; ?></span>
                        </div>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed"><?php echo $product['desc']; ?></p>
                        <a href="https://wa.me/628123456789?text=Halo%20Admin%2C%20saya%20mau%20pesan%20Koenchips%20varian%20<?php echo urlencode($product['name']); ?>" 
                           target="_blank"
                           class="btn-koen w-full inline-block text-center py-3 rounded-xl no-underline font-bold uppercase tracking-wider text-xs">
                           Pesan Lewat WA
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Bulk Order Banner -->
<section class="container mb-20">
    <div class="bg-gold/10 border-2 border-gold/20 rounded-[3rem] p-10 flex flex-col md:flex-row items-center justify-between">
        <div class="mb-6 md:mb-0 md:max-w-xl text-center md:text-start">
            <h2 class="playfair text-3xl mb-3 text-darkGreen">Ingin jadi Reseller atau beli Grosir?</h2>
            <p class="text-gray-700 mb-0">Dapatkan harga khusus untuk pembelian di atas 50 kemasan. Hubungi tim marketing kami untuk penawaran menarik.</p>
        </div>
        <a href="contact.php" class="bg-army text-white px-8 py-3 rounded-full font-bold hover:bg-darkGreen transition-all no-underline">Hubungi Kami</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
