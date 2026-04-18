<?php include 'includes/header.php'; ?>

<section class="bg-cream py-24 text-center">
    <div class="container">
        <h1 class="text-5xl playfair mb-4">Frequenty Asked Questions</h1>
        <p class="text-xl text-gray-600">Jawaban dari pertanyaan yang paling sering diajukan Sobat Koen.</p>
    </div>
</section>

<section class="section-padding pt-0">
    <div class="container max-w-3xl">
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Apakah KOENCHIPS aman untuk penderita maag?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Aman. Sukun memiliki indeks glikemik yang rendah dan kami menggunakan teknik penggorengan modern (vacuum frying) yang minim minyak, sehingga lebih ringan untuk pencernaan.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Berapa lama masa kedaluwarsa produk?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        KOENCHIPS tahan hingga 6 bulan jika disimpan dalam kemasan kedap udara dan terhindar dari sinar matahari langsung.
                    </div>
                </div>
            </div>

            <div class="accordion-item border-0 mb-4 shadow-sm rounded-3xl overflow-hidden">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white text-darkGreen font-bold p-6 focus:shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Bagaimana cara menjadi reseller?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body p-6 text-gray-600">
                        Anda bisa mendaftar melalui halaman <a href="reseller.php" class="text-gold">Reseller</a> kami dan mengisi formulir pendaftaran. Minimal pembelian awal hanya 20 pcs.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
