<?php include 'includes/header.php'; ?>

<style>
    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 500px;
        perspective: 1000px;
    }
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 3rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .flip-card-front {
        background-color: #fff;
    }
    .flip-card-back {
        background-color: #3d4e22;
        color: white;
        transform: rotateY(180deg);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
    }
</style>

<section class="bg-army py-24 text-white text-center">
    <div class="container">
        <h1 class="text-5xl md:text-7xl playfair mb-6">Minds Behind <span class="text-gold">KOEN</span></h1>
        <p class="text-xl opacity-80 max-w-2xl mx-auto">Kolaborasi mahasiswa kreatif untuk inovasi pangan Nusantara.</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <!-- Team 1 -->
            <div class="col-lg-3 col-md-6 reveal mt-0">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="https://picsum.photos/id/64/800/1000" class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent text-white text-start">
                                <h3 class="playfair text-xl font-bold mb-0">Angelita Aliyah Putri</h3>
                                <small class="text-gold uppercase tracking-tighter">Business Lead</small>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <h3 class="playfair text-2xl font-bold mb-2">Business Lead</h3>
                            <p class="text-xs uppercase tracking-widest text-gold mb-6">Teknik Lingkungan</p>
                            <p class="italic opacity-80 mb-6 font-light">"Mengintegrasikan keberlanjutan dalam setiap strategi bisnis KOENCHIPS."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team 2 -->
            <div class="col-lg-3 col-md-6 reveal mt-0">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="https://picsum.photos/id/65/800/1000" class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent text-white text-start">
                                <h3 class="playfair text-xl font-bold mb-0">Muhammad Ananda H.</h3>
                                <small class="text-gold uppercase tracking-tighter">Product & Operations</small>
                            </div>
                        </div>
                        <div class="flip-card-back" style="background-color: #4a5c2a;">
                            <h3 class="playfair text-2xl font-bold mb-2">Product & Ops</h3>
                            <p class="text-xs uppercase tracking-widest text-gold mb-6">Informatika</p>
                            <p class="italic opacity-80 mb-6 font-light">"Efisiensi sistem adalah kunci untuk menjaga kerenyahan tetap konsisten."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team 3 -->
            <div class="col-lg-3 col-md-6 reveal mt-0">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="https://picsum.photos/id/91/800/1000" class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent text-white text-start">
                                <h3 class="playfair text-xl font-bold mb-0">Galih Aji Pangestu</h3>
                                <small class="text-gold uppercase tracking-tighter">Tech & Branding</small>
                            </div>
                        </div>
                        <div class="flip-card-back" style="background-color: #5a7032;">
                            <h3 class="playfair text-2xl font-bold mb-2">Tech & Branding</h3>
                            <p class="text-xs uppercase tracking-widest text-gold mb-6">Informatika</p>
                            <p class="italic opacity-80 mb-6 font-light">"Membangun jembatan digital antara petani lokal dan pecinta camilan premium."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team 4 -->
            <div class="col-lg-3 col-md-6 reveal mt-0">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="https://picsum.photos/id/177/800/1000" class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent text-white text-start">
                                <h3 class="playfair text-xl font-bold mb-0">Ananditha Frissila U.</h3>
                                <small class="text-gold uppercase tracking-tighter">Marketing Lead</small>
                            </div>
                        </div>
                        <div class="flip-card-back" style="background-color: #2d3a1e;">
                            <h3 class="playfair text-2xl font-bold mb-2">Marketing Lead</h3>
                            <p class="text-xs uppercase tracking-widest text-gold mb-6">Teknik Lingkungan</p>
                            <p class="italic opacity-80 mb-6 font-light">"Marketing bukan cuma jualan, tapi memberi edukasi tentang pangan sehat."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
