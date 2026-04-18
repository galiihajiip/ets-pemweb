<?php 
/**
 * KOENCHIPS - Pusat Bantuan (FAQ)
 * Features BLOK 7.0: Accordion 10+ items, JS FAQ Search
 */
include 'includes/header.php'; 
?>

<!-- Header -->
<section class="bg-army py-24 text-white text-center">
    <div class="container" data-aos="fade-down">
        <h1 class="text-5xl playfair mb-4">Pusat Bantuan</h1>
        <p class="text-xl opacity-75 max-w-2xl mx-auto italic">"Jawaban instan untuk pertanyaan seputar KOENCHIPS."</p>
    </div>
</section>

<!-- FAQ List -->
<section class="section-padding bg-cream">
    <div class="container max-w-4xl">
        
        <!-- FAQ Search Tool -->
        <div class="relative mb-16" data-aos="fade-up">
            <i class="bi bi-search absolute left-8 top-1/2 -translate-y-1/2 opacity-30 text-2xl"></i>
            <input type="text" id="faqSearchInput" placeholder="Ketik topik bantuan... (misal: rasa, pengiriman, minyak)" class="w-full h-20 pl-20 pr-8 bg-white border-0 rounded-[2.5rem] shadow-xl outline-none focus:ring-4 focus:ring-gold/20 text-lg">
        </div>

        <div class="accordion accordion-flush" id="faqAccordion" data-aos="fade-up" data-aos-delay="200">
            <?php 
                $questions = [
                    ['q' => 'Apakah KOENCHIPS menggunakan pengawet?', 'a' => 'Sama sekali tidak. Kerenyahan awet kami murni hasil dari teknologi Vacuum Frying suhu rendah yang membuang air buah secara total.'],
                    ['q' => 'Berapa lama masa kedaluwarsa produk?', 'a' => 'Dalam kemasan tertutup rapat, produk kami tahan hingga 6 bulan sejak tanggal produksi yang tertera pada kemasan bungkus.'],
                    ['q' => 'Apakah aman dikirim ke luar pulau Jawa?', 'a' => 'Sangat aman. Kemasan kripik sukun kami tebal dan kami selalu menambahkan lapisan bubble wrap gratis untuk setiap pengiriman keluar kota.'],
                    ['q' => 'Apakah rasa Chocolate-nya manis sekali?', 'a' => 'Varian Chocolate Bliss kami menggunakan dark chocolate 70% yang dipadukan dengan sedikit sentuhan caramel, menghasilkan rasa manis gurih yang seimbang.'],
                    ['q' => 'Di mana lokasi offline store KOENCHIPS?', 'a' => 'Saat ini kami fokus pada produksi artisan di Sidoarjo dan penjualan melalui kanal online serta jaringan mitra reseller terdaftar.'],
                    ['q' => 'Apakah bisa memesan untuk hampers perusahaan?', 'a' => 'Kami sangat berpengalaman menangani pesanan hampers VIP perusahaan dengan custom kartu ucapan dan packaging eksklusif. Hubungi marketing kami.'],
                    ['q' => 'Berapa minimal pembelian untuk Reseller?', 'a' => 'Untuk menjadi reseller resmi, minimal pengambilan pertama adalah 20 bungkus (boleh mix varian) dengan harga grosir terbaik.'],
                    ['q' => 'Mengapa keripik sukun lebih sehat dari kentang?', 'a' => 'Sukun secara alami memiliki indeks glikemik yang lebih rendah dan serat pangan 3x lebih tinggi daripada kentang biasa.'],
                    ['q' => 'Bisa Bayar di Tempat (COD)?', 'a' => 'Ya, kami mendukung layanan COD melalui pengiriman reguler kurir J&T dan SiCepat untuk seluruh area Indonesia.'],
                    ['q' => 'Apakah sudah tersertifikasi Halal?', 'a' => 'Saat ini produk kami sedang dalam tahap audit final Lembaga Pemeriksa Halal setelah lolos uji sertifikasi P-IRT dari Dinas Kesehatan.'],
                ];
                foreach($questions as $index => $faq):
            ?>
            <div class="accordion-item mb-4 border-0 rounded-[2rem] overflow-hidden shadow-sm faq-box">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed p-8 bg-white font-bold text-darkGreen focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#f<?php echo $index; ?>">
                        <?php echo $faq['q']; ?>
                    </button>
                </h2>
                <div id="f<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-8 pt-0 text-gray-500 leading-relaxed italic">
                        <?php echo $faq['a']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div id="faqEmpty" class="hidden text-center py-20 opacity-30 italic">
            <h4 class="playfair">Pertanyaan tidak ditemukan...</h4>
        </div>
    </div>
</section>

<!-- Contact Support -->
<section class="py-20 bg-darkGreen text-white text-center">
    <div class="container" data-aos="zoom-in">
        <h3 class="playfair text-3xl mb-4">Masih Butuh Bantuan?</h3>
        <p class="opacity-60 mb-10">Tim Customer Experience kami siap membantu Anda 24/7.</p>
        <a href="https://wa.me/6282265588823" class="bg-gold text-deepGreen px-10 py-4 rounded-full font-black no-underline inline-block uppercase tracking-widest hover:bg-white transition-all shadow-xl">CHAT ADMIN VIA WA</a>
    </div>
</section>

<style>
.accordion-button::after { background-size: 15px; }
.accordion-button:not(.collapsed) { background-color: var(--gold-light) !important; color: var(--army-dark) !important; }
</style>

<script>
document.getElementById('faqSearchInput').addEventListener('input', function(e) {
    const q = e.target.value.toLowerCase();
    const boxes = document.querySelectorAll('.faq-box');
    let visibleCount = 0;
    
    boxes.forEach(box => {
        if(box.innerText.toLowerCase().includes(q)) {
            box.style.display = 'block';
            visibleCount++;
        } else {
            box.style.display = 'none';
        }
    });

    document.getElementById('faqEmpty').style.display = visibleCount === 0 ? 'block' : 'none';
});
</script>

<?php include 'includes/footer.php'; ?>
