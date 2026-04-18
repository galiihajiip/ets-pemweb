<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<header class="relative h-[80vh] flex items-center overflow-hidden">
    <!-- Background Image placeholder or Hero -->
    <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('koenchips_hero_1776518039191.png'); background-attachment: fixed;">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    
    <div class="container relative z-10 text-white">
        <div class="max-w-2xl" id="hero-content">
            <h1 class="text-5xl md:text-7xl playfair mb-4 leading-tight">Rasakan Kerenyahan <span class="text-gold italic">Sukun</span> yang Sesungguhnya</h1>
            <p class="text-lg md:text-xl mb-8 opacity-90 font-light">KOENCHIPS menghadirkan camilan sehat bergizi dengan rasa tradisional yang dikemas modern untuk menemani hari-harimu.</p>
            <div class="flex space-x-4">
                <a href="katalog.php" class="bg-gold hover:bg-white text-darkGreen px-8 py-3 rounded-full font-bold transition-all no-underline shadow-lg">Lihat Produk</a>
                <a href="tentang.php" class="border-2 border-white hover:bg-white hover:text-darkGreen px-8 py-3 rounded-full font-bold transition-all no-underline">Kenali Kami</a>
            </div>
        </div>
    </div>
</header>

<!-- Featured Categories -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl playfair mb-2">Pilihan Unggulan</h2>
            <div class="w-24 h-1 bg-gold mx-auto mb-4"></div>
            <p class="text-gray-600">Varian rasa yang dipilih khusus untuk lidah Anda.</p>
        </div>
        
        <div class="row g-4">
            <!-- Original -->
            <div class="col-md-4">
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition-all border-b-4 border-army group">
                    <div class="h-64 bg-gray-100 rounded-xl mb-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1628102420294-91c8274d7285?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Original" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <h3 class="playfair text-2xl mb-2">Original Sea Salt</h3>
                    <p class="text-gray-600 mb-4">Kemurnian rasa sukun dengan sentuhan garam laut pilihan.</p>
                    <a href="katalog.php" class="text-army font-bold no-underline hover:text-gold">Detail Produk &rarr;</a>
                </div>
            </div>
            <!-- Pedas -->
            <div class="col-md-4">
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition-all border-b-4 border-army group">
                    <div class="h-64 bg-gray-100 rounded-xl mb-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1599490659223-e1539e769269?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pedas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <h3 class="playfair text-2xl mb-2">Pedas Daun Jeruk</h3>
                    <p class="text-gray-600 mb-4">Sensasi pedas yang berpadu dengan aroma segar daun jeruk.</p>
                    <a href="katalog.php" class="text-army font-bold no-underline hover:text-gold">Detail Produk &rarr;</a>
                </div>
            </div>
            <!-- Manis -->
            <div class="col-md-4">
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition-all border-b-4 border-army group">
                    <div class="h-64 bg-gray-100 rounded-xl mb-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1623934199716-dc3899651bb1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Manis" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <h3 class="playfair text-2xl mb-2">Caramel Glaze</h3>
                    <p class="text-gray-600 mb-4">Balutan karamel manis yang melapisi tiap kepingan renyah.</p>
                    <a href="katalog.php" class="text-army font-bold no-underline hover:text-gold">Detail Produk &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Teaser -->
<section class="bg-army text-white section-padding overflow-hidden">
    <div class="container">
        <div class="row items-center">
            <div class="col-lg-6 mb-8 lg:mb-0">
                <div class="relative">
                    <div class="absolute -top-10 -left-10 w-40 h-40 border-8 border-gold/20 rounded-full"></div>
                    <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="About" class="rounded-3xl shadow-2xl relative z-10 w-full">
                    <div class="absolute -bottom-6 -right-6 bg-gold p-6 rounded-2xl z-20 text-darkGreen">
                        <h4 class="text-4xl font-bold mb-0">100%</h4>
                        <p class="mb-0 text-sm font-semibold uppercase tracking-wider">Bahan Alami</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 lg:ps-12">
                <span class="text-gold uppercase tracking-[0.2em] font-bold text-sm mb-4 block">Cerita Kami</span>
                <h2 class="text-4xl md:text-5xl playfair mb-6">Warisan Rasa dari <br>Tanah Nusantara</h2>
                <p class="text-lg opacity-80 mb-6 font-light">KOENCHIPS lahir dari kecintaan kami terhadap buah sukun lokal. Kami berkomitmen untuk memberikan nilai tambah pada komoditas lokal dengan teknik penggorengan modern yang menjaga kualitas nutrisi dan kerenyahan maksimal.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center space-x-3">
                        <span class="text-gold text-xl">✔</span>
                        <p class="mb-0">Dipilih dari sukun pilihan petani lokal</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-gold text-xl">✔</span>
                        <p class="mb-0">Tanpa bahan pengawet tambahan</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-gold text-xl">✔</span>
                        <p class="mb-0">Halal & Higienis</p>
                    </div>
                </div>
                <a href="tentang.php" class="btn-koen inline-block px-10 py-3 rounded-full no-underline uppercase tracking-wider font-bold text-sm">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section-padding">
    <div class="container text-center">
        <h2 class="text-4xl playfair mb-12">Apa Kata Penggemar Koen?</h2>
        <div class="row g-4 text-start">
            <div class="col-md-4">
                <div class="glass p-8 rounded-3xl border-2 border-army/10 h-full">
                    <div class="flex text-gold mb-4 text-xl">★★★★★</div>
                    <p class="italic text-gray-700 mb-6">"Kerenyahannya luar biasa! Biasanya keripik sukun itu keras, tapi KOENCHIPS ini beneran keriuk tapi empuk. Anak-anak suka banget varian Original nya."</p>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-army rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?u=1" alt="user">
                        </div>
                        <div>
                            <h6 class="mb-0 font-bold">Saras Wijaya</h6>
                            <small class="text-gray-500">Ibu Rumah Tangga</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass p-8 rounded-3xl border-2 border-army/10 h-full">
                    <div class="flex text-gold mb-4 text-xl">★★★★★</div>
                    <p class="italic text-gray-700 mb-6">"Packagingnya mewah banget, cocok buat oleh-oleh atau hampers. Rasanya nggak kaleng-kaleng, bumbunya meresap sampai ke dalam."</p>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-army rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?u=2" alt="user">
                        </div>
                        <div>
                            <h6 class="mb-0 font-bold">Andra Rahman</h6>
                            <small class="text-gray-500">Food Blogger</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass p-8 rounded-3xl border-2 border-army/10 h-full">
                    <div class="flex text-gold mb-4 text-xl">★★★★★</div>
                    <p class="italic text-gray-700 mb-6">"Suka banget sama yang Pedas Daun Jeruk. Fresh banget aromanya. Pengiriman juga cepet dan bubble wrapnya tebel, jadi keripiknya nggak hancur."</p>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-army rounded-full overflow-hidden">
                            <img src="https://i.pravatar.cc/150?u=3" alt="user">
                        </div>
                        <div>
                            <h6 class="mb-0 font-bold">Budi Santoso</h6>
                            <small class="text-gray-500">Karyawan Swasta</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="container mb-24">
    <div class="bg-darkGreen rounded-[3rem] p-12 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gold/5 blur-3xl rounded-full scale-150"></div>
        <div class="relative z-10 w-full max-w-3xl mx-auto">
            <h2 class="text-white playfair text-4xl md:text-5xl mb-6">Siap Menanamkan Kerenyahan di Harimu?</h2>
            <p class="text-cream/80 text-lg mb-10">Dapatkan diskon 15% untuk pembelian pertama Anda melalui website. Klik tombol di bawah ini!</p>
            <a href="kontak.php" class="bg-gold text-darkGreen px-12 py-4 rounded-full font-bold text-xl hover:bg-white transition-all no-underline inline-block">Order via WhatsApp</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
