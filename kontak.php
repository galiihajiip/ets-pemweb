<?php include 'includes/header.php'; ?>

<!-- Contact Header -->
<section class="bg-army py-24 text-white text-center">
    <div class="container">
        <h1 class="text-5xl playfair mb-4">Hubungi Kami</h1>
        <p class="text-xl opacity-80 max-w-2xl mx-auto">Punya pertanyaan, keluhan, atau ingin bekerja sama? Jangan ragu untuk menghubungi kami.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="bg-white p-10 rounded-[3rem] shadow-xl h-full border border-gray-100">
                    <h2 class="playfair text-3xl mb-8">Informasi Kontak</h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="bg-gold/10 p-3 rounded-2xl text-gold text-2xl">📍</div>
                            <div>
                                <h5 class="font-bold mb-1">Alamat</h5>
                                <p class="text-gray-600">Jl. Kaliurang KM 12, Sardonoharjo, Ngaglik, Sleman, DIY 55581</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-gold/10 p-3 rounded-2xl text-gold text-2xl">📞</div>
                            <div>
                                <h5 class="font-bold mb-1">WhatsApp</h5>
                                <p class="text-gray-600">+62 812-3456-789</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-gold/10 p-3 rounded-2xl text-gold text-2xl">📧</div>
                            <div>
                                <h5 class="font-bold mb-1">Email</h5>
                                <p class="text-gray-600">halo@koenchips.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-gold/10 p-3 rounded-2xl text-gold text-2xl">🕒</div>
                            <div>
                                <h5 class="font-bold mb-1">Jam Operasional</h5>
                                <p class="text-gray-600">Senin - Sabtu: 08:00 - 17:00 WIB</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h5 class="font-bold mb-4">Ikuti Media Sosial</h5>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-army w-12 h-12 flex items-center justify-center rounded-2xl text-white hover:bg-gold hover:text-darkGreen transition-all no-underline">IG</a>
                            <a href="#" class="bg-army w-12 h-12 flex items-center justify-center rounded-2xl text-white hover:bg-gold hover:text-darkGreen transition-all no-underline">FB</a>
                            <a href="#" class="bg-army w-12 h-12 flex items-center justify-center rounded-2xl text-white hover:bg-gold hover:text-darkGreen transition-all no-underline">TT</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="bg-darkGreen text-white p-10 rounded-[3rem] shadow-xl">
                    <h2 class="playfair text-3xl mb-8">Kirim Pesan</h2>
                    
                    <form action="thanks.php" method="POST" id="contactForm" class="row g-4">
                        <div class="col-md-6 text-start">
                            <label class="block text-sm font-semibold mb-2 opacity-70">Nama Lengkap</label>
                            <input type="text" name="name" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold" placeholder="Contoh: Budi Santoso" required>
                        </div>
                        <div class="col-md-6 text-start">
                            <label class="block text-sm font-semibold mb-2 opacity-70">Email</label>
                            <input type="email" name="email" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold" placeholder="name@email.com" required>
                        </div>
                        <div class="col-12 text-start">
                            <label class="block text-sm font-semibold mb-2 opacity-70">Subjek</label>
                            <select name="subject" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold">
                                <option class="text-darkGreen" value="order">Pertanyaan Pesanan</option>
                                <option class="text-darkGreen" value="reseller">Kemitraan/Reseller</option>
                                <option class="text-darkGreen" value="complaint">Keluhan Layanan</option>
                                <option class="text-darkGreen" value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-12 text-start">
                            <label class="block text-sm font-semibold mb-2 opacity-70">Pesan Anda</label>
                            <textarea name="message" rows="5" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <div class="col-12 mt-8">
                            <button type="submit" class="w-full bg-gold text-darkGreen py-4 rounded-xl font-bold uppercase tracking-[0.2em] hover:bg-white transition-all">Kirim Pesan Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Simple Map Placeholder -->
<section class="container mb-24">
    <div class="h-[400px] w-full bg-gray-200 rounded-[3rem] overflow-hidden relative shadow-inner">
        <div class="absolute inset-0 flex items-center justify-center text-gray-400">
            <div class="text-center">
                <span class="text-6xl mb-4 block">📍</span>
                <p class="font-semibold italic">Peta Lokasi Google Maps Akan Muncul Di Sini</p>
                <small>(Memerlukan API Key untuk Integrasi Maps Nyata)</small>
            </div>
        </div>
        <!-- In real scenario, embed Google Map iframe here -->
    </div>
</section>

<?php include 'includes/footer.php'; ?>
