<?php 
/**
 * KOENCHIPS - Program Reseller
 * Features BLOK 7.0: Benefits, Terms, Registration Form
 */
include 'includes/header.php'; 
?>

<!-- Header -->
<section class="bg-army py-32 text-center relative overflow-hidden">
    <div class="container relative z-10" data-aos="zoom-in">
        <h1 class="text-6xl md:text-8xl playfair mb-6 text-white">Join Our <span class="text-gold italic">Scale</span></h1>
        <p class="text-xl text-white opacity-60 font-light max-w-2xl mx-auto italic">"Bertumbuh bersama dalam jaringan distribusi camilan sehat nasional."</p>
    </div>
</section>

<!-- Partnership System -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-5 align-items-center">
            
            <!-- Context -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="bg-white p-14 rounded-[4rem] shadow-xl border-l-[15px] border-gold">
                    <h2 class="playfair text-4xl mb-10 text-army">Kenapa Bermitra?</h2>
                    
                    <div class="space-y-12">
                        <div class="flex items-start space-x-6 group">
                            <div class="w-14 h-14 bg-gold/10 text-gold rounded-2xl flex items-center justify-center text-3xl transition-all group-hover:bg-gold group-hover:text-deepGreen">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-darkGreen mb-2">Margin Keuntungan Tinggi</h5>
                                <p class="text-sm text-gray-500 leading-relaxed">Nikmati selisih harga hingga 35-40% dari harga eceran resmi untuk memperkuat arus kas bisnis Anda.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6 group">
                            <div class="w-14 h-14 bg-army/5 text-army rounded-2xl flex items-center justify-center text-3xl transition-all group-hover:bg-army group-hover:text-white">
                                <i class="bi bi-camera-reels"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-darkGreen mb-2">Materi Marketing Visual</h5>
                                <p class="text-sm text-gray-500 leading-relaxed">Akses tak terbatas ke aset foto studio dan video promosi profesional untuk bahan konten media sosial Anda.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6 group">
                            <div class="w-14 h-14 bg-gold/10 text-gold rounded-2xl flex items-center justify-center text-3xl transition-all group-hover:bg-gold group-hover:text-deepGreen">
                                <i class="bi bi-award"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-darkGreen mb-2">Produk Signature Unik</h5>
                                <p class="text-sm text-gray-500 leading-relaxed">Produk sukun premium adalah "Blue Ocean" di pasar camilan, sangat minim kompetitor dengan kualitas serupa.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-16 p-8 bg-cream/50 rounded-3xl border border-gold/10 italic text-sm text-gray-400">
                        * Minimal pembelian pertama hanya 20 pcs (all variants mix). Slot mitra terbatas per kota.
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-darkGreen p-12 md:p-16 rounded-[4rem] shadow-2xl text-white relative">
                    <div class="absolute top-10 right-10 text-6xl opacity-10">✍️</div>
                    <h3 class="playfair text-4xl mb-10 text-gold">Daftar Sekarang</h3>
                    
                    <form action="#" method="POST" class="row g-4">
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 mb-3 block">Nama Pemilik Bisnis</label>
                            <input type="text" class="w-full bg-white/10 border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none" required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 mb-3 block">Kota Domisili</label>
                            <input type="text" class="w-full bg-white/10 border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none" required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 mb-3 block">WhatsApp</label>
                            <input type="tel" class="w-full bg-white/10 border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none" required>
                        </div>
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 mb-3 block">Estimasi Modal Awal</label>
                            <select class="w-full bg-white/10 border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none">
                                <option class="text-darkGreen">Rp 500rb - 2jt</option>
                                <option class="text-darkGreen">Rp 2jt - 5jt</option>
                                <option class="text-darkGreen">> Rp 5jt</option>
                            </select>
                        </div>
                        <div class="col-12 mt-12">
                            <button type="submit" class="w-full bg-gold text-deepGreen py-5 rounded-3xl font-black uppercase tracking-[0.3em] hover:bg-white hover:scale-105 transition-all shadow-2xl">SUBMIT DATA MITRA</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
