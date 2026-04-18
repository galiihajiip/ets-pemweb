<?php 
include 'includes/header.php'; 
include 'products_data.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;
$product = null;

foreach ($products as $p) {
    if ($p['id'] == $id) {
        $product = $p;
        break;
    }
}

if (!$product) $product = $products[0];
?>

<section class="section-padding bg-cream">
    <div class="container mt-10">
        <nav aria-label="breadcrumb" class="mb-10">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-army">Home</a></li>
                <li class="breadcrumb-item"><a href="katalog.php" class="text-army">Katalog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $product['name']; ?></li>
            </ol>
        </nav>

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="bg-white p-4 rounded-[3rem] shadow-xl reveal">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="w-full h-auto rounded-[2rem] object-cover">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal">
                    <span class="bg-gold text-darkGreen px-4 py-1 rounded-full text-sm font-bold uppercase tracking-wider mb-4 inline-block">
                        <?php echo $product['tag']; ?>
                    </span>
                    <h1 class="text-5xl playfair mb-4"><?php echo $product['name']; ?></h1>
                    <h2 class="text-3xl text-army font-bold mb-6"><?php echo $product['price']; ?></h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        <?php echo $product['desc']; ?> Digoreng dengan teknik vacuum frying untuk menjaga nutrisi dan kerenyahan maksimal tanpa bahan pengawet.
                    </p>
                    
                    <div class="bg-white p-8 rounded-3xl border border-gray-100 mb-8">
                        <h5 class="font-bold mb-4">Kenapa memilih ini?</h5>
                        <ul class="space-y-2">
                            <li class="flex items-center space-x-2">
                                <span class="text-gold">✔</span>
                                <span>Rendah Lemak & Kolesterol</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <span class="text-gold">✔</span>
                                <span>Tanpa Pewarna Buatan</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <span class="text-gold">✔</span>
                                <span>Tahan Hingga 6 Bulan</span>
                            </li>
                        </ul>
                    </div>

                    <a href="order.php?product=<?php echo urlencode($product['name']); ?>" class="btn-koen w-full inline-block text-center py-4 rounded-xl no-underline font-bold text-lg">
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="section-padding bg-white">
    <div class="container">
        <h3 class="playfair text-3xl mb-12">Produk Lainnya</h3>
        <div class="row g-4">
            <?php 
            $count = 0;
            foreach($products as $p): 
                if($p['id'] == $id) continue;
                if($count++ >= 3) break;
            ?>
            <div class="col-md-4">
                <div class="border border-gray-100 p-4 rounded-3xl hover:shadow-lg transition-all group">
                    <div class="h-48 overflow-hidden rounded-2xl mb-4">
                        <img src="<?php echo $p['image']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                    </div>
                    <h5 class="playfair text-xl mb-1"><?php echo $p['name']; ?></h5>
                    <p class="text-army font-bold"><?php echo $p['price']; ?></p>
                    <a href="produk-detail.php?id=<?php echo $p['id']; ?>" class="text-sm font-bold text-gold no-underline">Lihat Detail &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
