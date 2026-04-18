<?php 
include 'includes/header.php'; 
include 'products_data.php';

// Helper for formatting price
function formatRp($val) {
    return "Rp " . number_format($val, 0, ',', '.');
}
?>

<section class="bg-army py-24 text-white text-center">
    <div class="container">
        <h1 class="text-5xl playfair mb-4">Katalog KOENCHIPS</h1>
        <p class="text-xl opacity-80 max-w-2xl mx-auto italic">"Pilih kebahagiaanmu hari ini."</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <!-- Filter & Sort Bar -->
        <div class="flex flex-col lg:flex-row justify-between items-center mb-12 gap-6 bg-cream/30 p-4 rounded-[2rem]">
            <div class="flex flex-wrap justify-center gap-2" id="filter-tabs">
                <button class="px-6 py-2 rounded-full font-bold transition-all active-tab filter-btn" data-filter="all">Semua</button>
                <button class="px-6 py-2 rounded-full font-bold transition-all bg-white hover:bg-gold filter-btn" data-filter="chocolate">Chocolate</button>
                <button class="px-6 py-2 rounded-full font-bold transition-all bg-white hover:bg-gold filter-btn" data-filter="matcha">Matcha</button>
                <button class="px-6 py-2 rounded-full font-bold transition-all bg-white hover:bg-gold filter-btn" data-filter="vanilla">Vanilla</button>
                <button class="px-6 py-2 rounded-full font-bold transition-all bg-white hover:bg-gold filter-btn" data-filter="taro">Taro</button>
                <button class="px-6 py-2 rounded-full font-bold transition-all bg-white hover:bg-gold filter-btn" data-filter="bundle">Bundle</button>
            </div>
            
            <div class="flex items-center space-x-4">
                <span class="text-sm font-bold opacity-60">Urutkan:</span>
                <select id="sort-dropdown" class="bg-white border-0 px-4 py-2 rounded-xl font-bold focus:ring-2 focus:ring-gold outline-none shadow-sm">
                    <option value="latest">Terbaru</option>
                    <option value="price-low">Harga: Rendah - Tinggi</option>
                    <option value="price-high">Harga: Tinggi - Rendah</option>
                    <option value="rating">Rating Tertinggi</option>
                </select>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row g-5" id="product-grid">
            <?php foreach($products as $p): ?>
            <div class="col-md-4 col-lg-3 product-item" 
                 data-category="<?php echo $p['category']; ?>" 
                 data-price="<?php echo $p['price']; ?>" 
                 data-rating="<?php echo $p['rating']; ?>"
                 data-date="<?php echo $p['date']; ?>">
                <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all h-full flex flex-col border border-gray-100 group">
                    <div class="relative h-60 overflow-hidden">
                        <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-white 
                                <?php 
                                    if($p['category'] == 'chocolate') echo 'bg-amber-900';
                                    elseif($p['category'] == 'matcha') echo 'bg-green-600';
                                    elseif($p['category'] == 'vanilla') echo 'bg-yellow-100 text-darkGreen';
                                    elseif($p['category'] == 'taro') echo 'bg-purple-600';
                                    else echo 'bg-gold text-darkGreen';
                                ?>">
                                <?php echo $p['category']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="playfair text-xl font-bold"><?php echo $p['name']; ?></h3>
                        </div>
                        <div class="flex text-gold text-xs mb-3">
                            <?php for($i=0; $i<$p['rating']; $i++) echo '★'; ?>
                            <?php for($i=0; $i<(5-$p['rating']); $i++) echo '☆'; ?>
                        </div>
                        <p class="text-gray-500 text-xs mb-4 line-clamp-2"><?php echo $p['desc']; ?></p>
                        
                        <div class="mt-auto">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-darkGreen font-black text-lg"><?php echo formatRp($p['price']); ?></span>
                                <span class="text-[10px] font-bold py-1 px-2 bg-red-50 text-red-600 rounded-lg">Stok: <?php echo $p['stock']; ?></span>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <button onclick="addToCart('<?php echo $p['name']; ?>')" class="bg-darkGreen text-white text-[10px] font-bold py-2.5 rounded-xl hover:bg-gold hover:text-darkGreen transition-all uppercase tracking-tighter">
                                    + Keranjang
                                </button>
                                <a href="produk-detail.php?id=<?php echo $p['id']; ?>" class="border border-darkGreen/20 text-darkGreen text-[10px] font-bold py-2.5 rounded-xl hover:bg-gray-50 transition-all text-center no-underline uppercase tracking-tighter">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- No Results -->
        <div id="no-results" class="hidden text-center py-20">
            <div class="text-6xl mb-4">😿</div>
            <h3 class="playfair text-2xl">Maaf, produk tidak ditemukan.</h3>
            <p class="text-gray-500">Coba pilih kategori lain.</p>
        </div>
    </div>
</section>

<style>
.active-tab {
    background-color: #d4a843 !important;
    color: #2d3a1e !important;
    box-shadow: 0 4px 15px rgba(212, 168, 67, 0.3);
}
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;  
    overflow: hidden;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');
    const sortDropdown = document.getElementById('sort-dropdown');
    const productGrid = document.getElementById('product-grid');
    const noResults = document.getElementById('no-results');

    // Filtering Logic
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // UI Toggle
            filterBtns.forEach(b => b.classList.remove('active-tab'));
            filterBtns.forEach(b => b.classList.add('bg-white'));
            btn.classList.add('active-tab');
            btn.classList.remove('bg-white');

            const filter = btn.getAttribute('data-filter');
            let visibleCount = 0;

            productItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            noResults.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });

    // Sorting Logic
    sortDropdown.addEventListener('change', () => {
        const value = sortDropdown.value;
        const itemsArray = Array.from(productItems);

        itemsArray.sort((a, b) => {
            if (value === 'price-low') {
                return a.getAttribute('data-price') - b.getAttribute('data-price');
            } else if (value === 'price-high') {
                return b.getAttribute('data-price') - a.getAttribute('data-price');
            } else if (value === 'rating') {
                return b.getAttribute('data-rating') - a.getAttribute('data-rating');
            } else {
                // latest
                return new Date(b.getAttribute('data-date')) - new Date(a.getAttribute('data-date'));
            }
        });

        // Append sorted items
        itemsArray.forEach(item => productGrid.appendChild(item));
    });
});

// Cart Simulation
function addToCart(name) {
    let cart = JSON.parse(localStorage.getItem('koenchips_cart')) || [];
    cart.push(name);
    localStorage.setItem('koenchips_cart', JSON.stringify(cart));
    
    // Update Navbar Counter (Custom Event)
    window.dispatchEvent(new Event('cartUpdated'));
    
    // Simple Alert toast-style would be better but simple alert for now
    alert(name + " berhasil ditambahkan ke keranjang!");
}
</script>

<?php include 'includes/footer.php'; ?>
