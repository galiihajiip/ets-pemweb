<?php include 'includes/header.php'; ?>

<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-5">
            <!-- Order Form -->
            <div class="col-lg-6">
                <div class="bg-darkGreen text-white p-10 rounded-[3rem] shadow-2xl reveal">
                    <h2 class="playfair text-3xl mb-8">Form Pemesanan</h2>
                    <form action="process_order.php" method="POST" class="row g-4">
                        <div class="col-12">
                            <label class="block text-sm mb-2 opacity-70">Nama Lengkap</label>
                            <input type="text" name="customer_name" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold" required>
                        </div>
                        <div class="col-md-6">
                            <label class="block text-sm mb-2 opacity-70">Pilih Produk</label>
                            <select name="product_name" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold">
                                <option class="text-darkGreen" value="Original Sea Salt">Original Sea Salt</option>
                                <option class="text-darkGreen" value="Pedas Daun Jeruk">Pedas Daun Jeruk</option>
                                <option class="text-darkGreen" value="Caramel Glaze">Caramel Glaze</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="block text-sm mb-2 opacity-70">Jumlah (Pcs)</label>
                            <input type="number" name="quantity" min="1" value="1" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold" required>
                        </div>
                        <div class="col-12">
                            <label class="block text-sm mb-2 opacity-70">Alamat Pengiriman</label>
                            <textarea name="address" rows="3" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-gold" required></textarea>
                        </div>
                        <div class="col-12 mt-8">
                            <button type="submit" class="w-full bg-gold text-darkGreen py-4 rounded-xl font-bold uppercase tracking-widest hover:bg-white transition-all">Submit Order</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Order Table (Simulation) -->
            <div class="col-lg-6">
                <div class="bg-white p-10 rounded-[3rem] shadow-xl reveal">
                    <h2 class="playfair text-3xl mb-8">Daftar Antrean Order</h2>
                    <div class="table-responsive">
                        <table class="table table-hover border-gray-100">
                            <thead class="bg-gold/10">
                                <tr>
                                    <th class="border-0 p-4">Invoice</th>
                                    <th class="border-0 p-4">Nama</th>
                                    <th class="border-0 p-4">Produk</th>
                                    <th class="border-0 p-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td class="p-4 font-bold">#KC-9902</td>
                                    <td class="p-4">Andini Putri</td>
                                    <td class="p-4">Original</td>
                                    <td class="p-4"><span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold uppercase">Diproses</span></td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="p-4 font-bold">#KC-9901</td>
                                    <td class="p-4">Budi Santoso</td>
                                    <td class="p-4">Pedas</td>
                                    <td class="p-4"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-bold uppercase">Dikirim</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
