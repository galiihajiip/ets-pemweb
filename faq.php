<?php include 'includes/header.php'; ?>

<section class="bg-army py-24 text-white text-center">
    <div class="container">
        <h1 class="text-5xl playfair mb-4">Pusat Bantuan (FAQ)</h1>
        <p class="text-xl opacity-80 max-w-2xl mx-auto">Temukan jawaban cepat untuk pertanyaan yang sering diajukan Sobat Koen.</p>
    </div>
</section>

<section class="section-padding bg-cream">
    <div class="container max-w-4xl">
        <!-- Search FAQ -->
        <div class="relative mb-12">
            <input type="text" id="faqSearch" placeholder="Cari pertanyaan... (misal: pengiriman, minyak, rasa)" class="w-full px-8 py-4 bg-white border-0 rounded-2xl shadow-sm outline-none focus:ring-2 focus:ring-gold text-lg">
            <span class="absolute right-6 top-1/2 -translate-y-1/2 opacity-30 text-2xl">🔍</span>
        </div>

        <div class="accordion" id="faqAccordion">
            <!-- Q1 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                        Apakah KOENCHIPS menggunakan banyak minyak?
                    </button>
                </h2>
                <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Tidak. Kami menggunakan teknologi <i>Vacuum Frying</i> yang menyerap minyak hingga 90% lebih sedikit dibanding penggorengan konvensional, sehingga keripik tetap sehat dan tidak berminyak di tangan.
                    </div>
                </div>
            </div>
            <!-- Q2 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                        Apa saja varian rasa yang tersedia?
                    </button>
                </h2>
                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Saat ini kami memiliki 4 varian utama: Chocolate Bliss, Matcha Zen, Vanilla Cloud, dan Taro Twist. Kami juga menyediakan paket Bundle untuk mencicipi semua rasa.
                    </div>
                </div>
            </div>
            <!-- Q3 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                        Apakah bisa pesan untuk acara event atau souvenir pernikahan?
                    </button>
                </h2>
                <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Sangat bisa! Kami menerima pesanan custom packaging untuk hampers, souvenir, atau snack box event. Hubungi admin WhatsApp kami untuk negosiasi harga grosir.
                    </div>
                </div>
            </div>
            <!-- Q4 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q4">
                        Berapa lama masa ketahanan produk?
                    </button>
                </h2>
                <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        KOENCHIPS tahan hingga 6 bulan dalam kemasan yang belum dibuka. Jika sudah dibuka, kami sarankan untuk menutup ziplock dengan rapat atau memindahkannya ke toples kedap udara.
                    </div>
                </div>
            </div>
            <!-- Q5 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q5">
                        Bagaimana sistem pengirimannya?
                    </button>
                </h2>
                <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Kami melayani pengiriman ke seluruh Indonesia menggunakan JNE, J&T, dan SiCepat. Untuk wilayah Sidoarjo dan Surabaya tersedia layanan kirim instan (Gojek/Grab).
                    </div>
                </div>
            </div>
            <!-- Q6 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q6">
                        Apakah produk ini sudah Halal?
                    </button>
                </h2>
                <div id="q6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Sedang dalam proses sertifikasi BPOM dan Halal MUI. Namun, kami menjamin seluruh bahan baku adalah 100% tanaman sukun dan bumbu yang bebas dari unsur non-halal.
                    </div>
                </div>
            </div>
            <!-- Q7 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q7">
                        Apakah ada minimal pembelian?
                    </button>
                </h2>
                <div id="q7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Tidak ada minimal pembelian untuk konsumsi pribadi. Namun untuk mendapatkan harga promo grosir, minimal pembelian adalah 20 bungkus.
                    </div>
                </div>
            </div>
            <!-- Q8 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q8">
                        Apa yang harus dilakukan jika keripik yang diterima hancur?
                    </button>
                </h2>
                <div id="q8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Kami selalu menggunakan bubble wrap ekstra. Namun jika paket rusak parah akibat kurir, silakan chat admin dengan menyertakan video unboxing untuk klaim penggantian.
                    </div>
                </div>
            </div>
            <!-- Q9 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q9">
                        Di mana lokasi toko fisiknya?
                    </button>
                </h2>
                <div id="q9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Rumah Produksi kami berada di Sidoarjo, Jawa Timur. Saat ini fokus utama kami adalah penjualan online dan melalui mitra reseller di berbagai kota.
                    </div>
                </div>
            </div>
            <!-- Q10 -->
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden faq-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#q10">
                        Apakah KOENCHIPS cocok untuk vegetarian?
                    </button>
                </h2>
                <div id="q10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Sangat cocok! Bahan dasar sukun adalah nabati. Untuk varian Chocolate dan Vanilla, kami menggunakan bahan-bahan yang ramah bagi lacto-ovo vegetarian.
                    </div>
                </div>
            </div>
        </div>

        <div id="noFaq" class="hidden text-center py-10 opacity-50 italic">Pertanyaan tidak ditemukan...</div>
    </div>
</section>

<script>
document.getElementById('faqSearch').addEventListener('input', function(e) {
    let query = e.target.value.toLowerCase();
    let items = document.querySelectorAll('.faq-item');
    let found = false;
    
    items.forEach(item => {
        let text = item.innerText.toLowerCase();
        if(text.includes(query)) {
            item.style.display = 'block';
            found = true;
        } else {
            item.style.display = 'none';
        }
    });
    
    document.getElementById('noFaq').style.display = found ? 'none' : 'block';
});
</script>

<?php include 'includes/footer.php'; ?>
