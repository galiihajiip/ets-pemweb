<?php 
/**
 * KOENCHIPS - Hubungi Kami
 * Features BLOK 7.0: 2 Columns (Form + Info), Embedded Google Maps
 */
include 'includes/header.php'; 
?>

<!-- Main Content -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-0 rounded-[4rem] overflow-hidden shadow-2xl bg-white border border-gray-100">
            
            <!-- Left: Info -->
            <div class="col-lg-5 bg-darkGreen text-white p-12 md:p-20 order-2 order-lg-1" data-aos="fade-right">
                <span class="text-gold uppercase tracking-[0.5em] font-black text-[10px] mb-4 block">Official HQ</span>
                <h2 class="playfair text-5xl mb-12">Keep in <span class="text-gold italic">Touch</span></h2>
                
                <div class="space-y-12">
                    <div class="flex items-start space-x-6">
                        <i class="bi bi-geo-alt-fill text-gold text-3xl"></i>
                        <div>
                            <h5 class="font-bold text-white mb-2">Rumah Produksi</h5>
                            <p class="text-sm opacity-60 leading-relaxed font-light">Jl. Pahlawan No. 45, Sidokumpul, Kab. Sidoarjo, Jawa Timur 61212</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <i class="bi bi-whatsapp text-gold text-3xl"></i>
                        <div>
                            <h5 class="font-bold text-white mb-2">Layanan WhatsApp</h5>
                            <p class="text-sm opacity-60 leading-relaxed font-light">+62 822-6558-8823 (Fast Response)</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <i class="bi bi-envelope-paper-fill text-gold text-3xl"></i>
                        <div>
                            <h5 class="font-bold text-white mb-2">Email Korespondensi</h5>
                            <p class="text-sm opacity-60 leading-relaxed font-light">official@koenchips.id</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <i class="bi bi-clock-fill text-gold text-3xl"></i>
                        <div>
                            <h5 class="font-bold text-white mb-2">Jam Operasional</h5>
                            <p class="text-sm opacity-60 leading-relaxed font-light">Senin - Sabtu: 09:00 - 18:00 WIB<br>Minggu: Libur Produksi</p>
                        </div>
                    </div>
                </div>

                <div class="mt-20 pt-10 border-t border-white/10 flex space-x-6 text-2xl">
                    <i class="bi bi-instagram hover:text-gold cursor-pointer transition-all"></i>
                    <i class="bi bi-tiktok hover:text-gold cursor-pointer transition-all"></i>
                    <i class="bi bi-youtube hover:text-gold cursor-pointer transition-all"></i>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="col-lg-7 p-12 md:p-20 order-1 order-lg-2" data-aos="fade-left">
                <h2 class="playfair text-4xl mb-10 text-darkGreen">Kirim Pesan Cepat</h2>
                <form action="#" method="POST" class="row g-5">
                    <div class="col-md-6 py-0">
                        <label class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-3 block">Nama Lengkap</label>
                        <input type="text" class="w-full bg-cream border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none" required placeholder="Galih Aji">
                    </div>
                    <div class="col-md-6 py-0">
                        <label class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-3 block">Email Aktif</label>
                        <input type="email" class="w-full bg-cream border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none" required placeholder="name@email.com">
                    </div>
                    <div class="col-12 py-0 mt-8">
                        <label class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-3 block">Subjek Pesan</label>
                        <select class="w-full bg-cream border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none">
                            <option>Pertanyaan Produk</option>
                            <option>Kerjasama Event</option>
                            <option>Klaim Pengiriman</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="col-12 py-0 mt-8">
                        <label class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-3 block">Sampaikan Sesuatu</label>
                        <textarea rows="6" class="w-full bg-cream border-0 px-6 py-4 rounded-2xl focus:ring-4 focus:ring-gold/30 outline-none" required placeholder="Tuliskan pesan Anda di sini..."></textarea>
                    </div>
                    <div class="col-12 mt-12">
                        <button type="submit" class="bg-army text-white px-12 py-5 rounded-full font-black uppercase tracking-widest hover:bg-gold hover:text-darkGreen transition-all shadow-xl hover:scale-105">COBA KIRIM PESAN &rarr;</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Embedded Maps -->
<section class="container pb-24" data-aos="zoom-in">
    <div class="h-[550px] w-full rounded-[4rem] overflow-hidden shadow-2xl border-8 border-white grayscale hover:grayscale-0 transition-all duration-1000">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.454932371912!2d112.7214643!3d-7.4475485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e108665de11f%3A0xc6651910ef67c742!2sSidoarjo%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1713444444444!5m2!1sen!2sid" 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
