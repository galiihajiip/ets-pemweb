<?php include 'includes/header.php'; ?>

<section class="section-padding bg-cream">
    <div class="container mt-10">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5 reveal">
                <div class="bg-darkGreen text-white p-12 rounded-[3.5rem] shadow-2xl h-full border-b-8 border-gold">
                    <h2 class="playfair text-4xl mb-12">Keep in <span class="text-gold">Touch</span></h2>
                    
                    <div class="space-y-10">
                        <div class="flex items-start space-x-4">
                            <div class="text-3xl">📍</div>
                            <div>
                                <h5 class="font-bold text-gold mb-1">Alamat Produksi</h5>
                                <p class="text-sm opacity-70">Jl. Pahlawan No. 45, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-3xl">📞</div>
                            <div>
                                <h5 class="font-bold text-gold mb-1">WhatsApp</h5>
                                <p class="text-sm opacity-70">+62 822-6558-8823</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-3xl">✉️</div>
                            <div>
                                <h5 class="font-bold text-gold mb-1">Email Resmi</h5>
                                <p class="text-sm opacity-70">hello@koenchips.id</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-3xl">🕒</div>
                            <div>
                                <h5 class="font-bold text-gold mb-1">Jam Operasional</h5>
                                <p class="text-sm opacity-70">Senin - Sabtu: 09:00 - 18:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="col-lg-7 reveal">
                <div class="bg-white p-12 rounded-[3.5rem] shadow-xl h-full">
                    <h2 class="playfair text-4xl mb-8">Kirim Pesan</h2>
                    <form action="#" method="POST" class="row g-4">
                        <div class="col-md-6 text-start">
                            <label class="text-xs font-black uppercase tracking-widest mb-2 block opacity-40">Nama Lengkap</label>
                            <input type="text" class="w-full bg-cream border-0 px-5 py-3 rounded-2xl focus:ring-2 focus:ring-gold outline-none" placeholder="Contoh: Galih Aji" required>
                        </div>
                        <div class="col-md-6 text-start">
                            <label class="text-xs font-black uppercase tracking-widest mb-2 block opacity-40">Alamat Email</label>
                            <input type="email" class="w-full bg-cream border-0 px-5 py-3 rounded-2xl focus:ring-2 focus:ring-gold outline-none" placeholder="name@email.com" required>
                        </div>
                        <div class="col-12 text-start">
                            <label class="text-xs font-black uppercase tracking-widest mb-2 block opacity-40">Pesan Anda</label>
                            <textarea rows="6" class="w-full bg-cream border-0 px-5 py-3 rounded-2xl focus:ring-2 focus:ring-gold outline-none" placeholder="Tuliskan apapun yang ingin Anda tanyakan..." required></textarea>
                        </div>
                        <div class="col-12 mt-8">
                            <button type="submit" class="bg-army text-white px-12 py-4 rounded-full font-bold uppercase tracking-widest hover:bg-gold hover:text-deepGreen transition-all shadow-lg">Kirim Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Maps -->
<section class="container mb-24 reveal">
    <div class="h-[500px] w-full rounded-[4rem] overflow-hidden shadow-2xl relative grayscale hover:grayscale-0 transition-all duration-700">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.454932371912!2d112.7214643!3d-7.4475485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e108665de11f%3A0xc6651910ef67c742!2sSidoarjo%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1713444444444!5m2!1sen!2sid" 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
