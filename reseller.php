<?php include 'includes/header.php'; ?>

<section class="section-padding bg-darkGreen text-white text-center">
    <div class="container bg-gold rounded-[4rem] p-16 text-deepGreen">
        <h1 class="playfair text-5xl md:text-7xl mb-6">Partnership <span class="italic">Program</span></h1>
        <p class="text-xl max-w-2xl mx-auto opacity-80">Jadilah bagian dari distribusi kerenyahan Nusantara di kota Anda.</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <!-- Benefits -->
            <div class="col-lg-6">
                <h2 class="playfair text-4xl mb-8">Kenapa Gabung Bersama Kami?</h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <span class="text-4xl">🏷️</span>
                        <div>
                            <h5 class="font-bold mb-1">Harga Grosir Khusus</h5>
                            <p class="text-gray-600 text-sm">Dapatkan margin keuntungan hingga 35-40% per kemasan untuk pendapatan maksimal.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <span class="text-4xl">📸</span>
                        <div>
                            <h5 class="font-bold mb-1">Materi Marketing Terpadu</h5>
                            <p class="text-gray-600 text-sm">Akses ke Google Drive berisi konten foto dan video produk berkualitas untuk promosi Anda.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <span class="text-4xl">📦</span>
                        <div>
                            <h5 class="font-bold mb-1">Pengiriman Cepat & Aman</h5>
                            <p class="text-gray-600 text-sm">Prioritas pengiriman dan packaging ekstra kuat untuk menjaga kualitas stok Anda.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 bg-cream p-8 rounded-3xl">
                    <h5 class="font-bold mb-4">Syarat & Ketentuan:</h5>
                    <ul class="text-sm space-y-2 text-gray-700">
                        <li>• Minimal pembelian awal 20 pcs (all variant).</li>
                        <li>• Bersedia mengikuti standar harga jual yang ditetapkan.</li>
                        <li>• Aktif mempromosikan produk di media sosial pribadi/toko.</li>
                    </ul>
                </div>
            </div>

            <!-- Form -->
            <div class="col-lg-6">
                <div class="bg-army p-10 rounded-[3rem] shadow-2xl text-white">
                    <h3 class="playfair text-3xl mb-8">Form Pendaftaran</h3>
                    <form action="#" method="POST" class="row g-4">
                        <div class="col-12 text-start">
                            <label class="text-xs font-black uppercase tracking-widest mb-2 block opacity-70">Nama Lengkap</label>
                            <input type="text" class="w-full bg-white/10 border border-white/20 px-4 py-3 rounded-xl focus:ring-2 focus:ring-gold outline-none" placeholder="Masukkan nama..." required>
                        </div>
                        <div class="col-12 text-start">
                            <label class="text-xs font-black uppercase tracking-widest mb-2 block opacity-70">Kota Domisili</label>
                            <input type="text" class="w-full bg-white/10 border border-white/20 px-4 py-3 rounded-xl focus:ring-2 focus:ring-gold outline-none" placeholder="Contoh: Surabaya" required>
                        </div>
                        <div class="col-12 text-start">
                            <label class="text-xs font-black uppercase tracking-widest mb-2 block opacity-70">Rencana Modal Awal</label>
                            <select class="w-full bg-white/10 border border-white/20 px-4 py-3 rounded-xl focus:ring-2 focus:ring-gold outline-none">
                                <option class="text-darkGreen" value="1">Rp 500rb - 1jt</option>
                                <option class="text-darkGreen" value="2">Rp 1jt - 3jt</option>
                                <option class="text-darkGreen" value="3">> Rp 3jt</option>
                            </select>
                        </div>
                        <div class="col-12 text-start">
                            <label class="text-xs font-black uppercase tracking-widest mb-2 block opacity-70">Kontak (WhatsApp)</label>
                            <input type="tel" class="w-full bg-white/10 border border-white/20 px-4 py-3 rounded-xl focus:ring-2 focus:ring-gold outline-none" placeholder="08xxxx" required>
                        </div>
                        <div class="col-12 mt-8">
                            <button type="submit" class="w-full bg-gold text-deepGreen py-4 rounded-xl font-bold uppercase tracking-widest hover:bg-white transition-all">Submit Pendaftaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
