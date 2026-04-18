<?php 
/**
 * KOENCHIPS - Katalog Produk
 * Features BLOK 4.0: JS Filter Tabs, Sorting, Cart Counter
 */
include 'includes/header.php'; 
include 'products_data.php'; 

// Price Formatter Helper
function formatPrice($val) {
    return "Rp " . number_format($val, 0, ',', '.');
}
?>

<!-- Katalog Header -->
<section class="bg-army py-24 text-white text-center">
    <div class="container" data-aos="fade-down">
        <h1 class="text-5xl playfair mb-4">Katalog KOENCHIPS</h1>
        <p class="text-xl opacity-80 max-w-2xl mx-auto italic">"Temukan varian sukun favoritmu di sini."</p>
    </div>
</section>

<!-- Shop Section -->
<section class="section-padding bg-white">
    <div class="container">
        <!-- [BAR] - FILTER & SORT -->
        <div class="flex flex-col lg:flex-row justify-between items-center mb-16 gap-6 bg-cream/50 p-6 rounded-[2.5rem] border border-gold/10" data-aos="fade-up">
            <!-- JS Tabs -->
            <div class="flex flex-wrap justify-center gap-3">
                <button class="px-6 py-2.5 rounded-full font-black text-xs uppercase tracking-widest transition-all kat-btn active-tab" data-filter="all">Semua</button>
                <button class="px-6 py-2.5 rounded-full font-black text-xs uppercase tracking-widest transition-all bg-white hover:bg-gold hover:text-deepGreen kat-btn" data-filter="chocolate">Chocolate</button>
                <button class="px-6 py-2.5 rounded-full font-black text-xs uppercase tracking-widest transition-all bg-white hover:bg-gold hover:text-deepGreen kat-btn" data-filter="matcha">Matcha</button>
                <button class="px-6 py-2.5 rounded-full font-black text-xs uppercase tracking-widest transition-all bg-white hover:bg-gold hover:text-deepGreen kat-btn" data-filter="vanilla">Vanilla</button>
                <button class="px-6 py-2.5 rounded-full font-black text-xs uppercase tracking-widest transition-all bg-white hover:bg-gold hover:text-deepGreen kat-btn" data-filter="taro">Taro</button>
                <button class="px-6 py-3 rounded-full font-black text-xs uppercase tracking-widest transition-all bg-army text-white hover:bg-gold hover:text-deepGreen kat-btn" data-filter="bundle">Bundle</button>
            </div>
            
            <!-- Sorting -->
            <div class="flex items-center space-x-3">
                <label class="text-[10px] font-black uppercase opacity-50 tracking-widest">Urutkan:</label>
                <select id="sortBox" class="bg-white border-0 px-6 py-3 rounded-2xl font-bold text-sm shadow-sm outline-none focus:ring-4 focus:ring-gold/20">
                    <option value="newest">Terbaru</option>
                    <option value="low">Harga Terendah</option>
                    <option value="high">Harga Tertinggi</option>
                    <option value="rating">Rating</option>
                </select>
            </div>
        </div>

        <!-- [GRID] - PRODUCTS -->
        <div class="row g-5" id="kat-grid">
            <?php foreach($products as $p): ?>
            <div class="col-md-6 col-lg-3 kat-item" 
                 data-cat="<?php echo $p['category']; ?>" 
                 data-price="<?php echo $p['price']; ?>" 
                 data-rate="<?php echo $p['rating']; ?>"
                 data-date="<?php echo $p['date']; ?>"
                 data-aos="fade-up">
                
                <div class="bg-white rounded-[3rem] overflow-hidden shadow-sm hover-scale border border-gray-50 flex flex-col h-full group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="<?php echo $p['image']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <span class="absolute top-6 left-6 px-4 py-1.5 rounded-full text-[9px] font-black uppercase tracking-widest shadow-lg
                                <?php 
                                    if($p['category']=='chocolate') echo 'bg-amber-900 text-white';
                                    elseif($p['category']=='matcha') echo 'bg-green-700 text-white';
                                    elseif($p['category']=='taro') echo 'bg-purple-700 text-white';
                                    elseif($p['category']=='vanilla') echo 'bg-yellow-100 text-darkGreen';
                                    else echo 'bg-gold text-deepGreen';
                                ?>">
                            <?php echo $p['category']; ?>
                        </span>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="playfair text-xl font-bold"><?php echo $p['name']; ?></h3>
                        </div>
                        <div class="flex text-gold text-[10px] mb-4">
                            <?php for($i=0;$i<5;$i++) echo $i<$p['rating']?'★':'☆'; ?>
                            <span class="ml-2 text-gray-300 font-bold"><?php echo $p['rating']; ?>.0</span>
                        </div>
                        <p class="text-gray-500 text-xs leading-relaxed mb-6 flex-grow"><?php echo $p['desc']; ?></p>
                        
                        <div class="mt-auto border-t pt-6 border-gray-50">
                            <div class="flex justify-between items-center mb-6">
                                <span class="text-xl font-black text-army"><?php echo formatPrice($p['price']); ?></span>
                                <span class="text-[9px] font-black uppercase bg-red-50 text-red-600 px-3 py-1 rounded-lg">Stok: <?php echo $p['stock']; ?></span>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <button onclick="addToCart('<?php echo $p['name']; ?>')" class="btn-koen py-3 rounded-2xl font-black uppercase text-[10px] tracking-widest shadow-lg">
                                    <i class="bi bi-plus-lg mr-1"></i> Beli
                                </button>
                                <a href="produk-detail.php?id=<?php echo $p['id']; ?>" class="border-2 border-army/10 text-army py-3 rounded-2xl font-black uppercase text-[10px] tracking-widest text-center no-underline hover:bg-cream transition-all">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- No Items -->
        <div id="kat-null" class="hidden text-center py-20 opacity-30">
            <h3 class="playfair text-3xl">Pencarian tidak ditemukan...</h3>
        </div>
    </div>
</section>

<style>
.active-tab { background-color: #d4a843 !important; color: #2d3a1e !important; box-shadow: 0 5px 20px rgba(212, 168, 67, 0.4); border-color: transparent !important; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const btns = document.querySelectorAll('.kat-btn');
    const items = document.querySelectorAll('.kat-item');
    const sort = document.getElementById('sortBox');
    const grid = document.getElementById('kat-grid');
    const empty = document.getElementById('kat-null');

    // Tab Filter
    btns.forEach(b => {
        b.addEventListener('click', () => {
            btns.forEach(x => x.classList.remove('active-tab'));
            b.classList.add('active-tab');
            
            let f = b.getAttribute('data-filter');
            let v = 0;
            items.forEach(i => {
                if(f==='all' || i.getAttribute('data-cat')===f) { i.style.display='block'; v++; }
                else i.style.display='none';
            });
            empty.style.display = v === 0 ? 'block' : 'none';
        });
    });

    // Sort Dropdown
    sort.addEventListener('change', () => {
        let val = sort.value;
        let arr = Array.from(items);
        arr.sort((a, b) => {
            if(val==='low') return a.getAttribute('data-price') - b.getAttribute('data-price');
            if(val==='high') return b.getAttribute('data-price') - a.getAttribute('data-price');
            if(val==='rating') return b.getAttribute('data-rate') - a.getAttribute('data-rate');
            return new Date(b.getAttribute('data-date')) - new Date(a.getAttribute('data-date'));
        });
        arr.forEach(i => grid.appendChild(i));
    });
});
</script>

<?php include 'includes/footer.php'; ?>
