<?php 
/**
 * KOENCHIPS - Form Pemesanan & Visualisasi Data (LOCAL SYNC)
 */
include 'includes/header.php'; 
include 'config.php';

// Fetch orders from database
$orders = [];
if ($pdo) {
    try {
        $stmt = $pdo->query("SELECT * FROM orders ORDER BY created_at DESC");
        $orders = $stmt->fetchAll();
    } catch (PDOException $e) { $orders = []; }
}
?>

<!-- Header -->
<section class="bg-army py-24 text-white text-center">
    <div class="container" data-aos="zoom-out">
        <h1 class="text-5xl playfair mb-4">Checkout Order</h1>
        <p class="text-xl opacity-70">Segera nikmati kerenyahan KOENCHIPS di rumah Anda.</p>
    </div>
</section>

<!-- Main Order System -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-5">
            
            <!-- [FORM SECTION] -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="bg-darkGreen text-white p-10 rounded-[4rem] shadow-2xl border-t-[10px] border-gold">
                    <h2 class="playfair text-3xl mb-10 pb-4 border-b border-white/10 text-gold"> <i class="bi bi-pencil-square mr-2"></i> Form Order</h2>
                    
                    <form action="process_order.php" method="POST" class="row g-4 text-start">
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">Nama Lengkap</label>
                            <input type="text" name="customer_name" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30" placeholder="Masukkan nama..." required>
                        </div>
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">No. WhatsApp</label>
                            <input type="tel" name="whatsapp" pattern="08[0-9]{8,12}" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30" placeholder="0822..." required>
                        </div>
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">Alamat Kirim</label>
                            <textarea name="address" rows="3" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30" required></textarea>
                        </div>

                        <!-- Checkbox Variants -->
                        <div class="col-12 mt-6">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-4 block">Pilih Varian & Jumlah</label>
                            <div class="grid gap-3">
                                <?php $vars = ['Chocolate Bliss', 'Matcha Zen', 'Vanilla Cloud', 'Taro Twist']; foreach($vars as $v): ?>
                                <div class="flex items-center justify-between bg-white/5 p-4 rounded-2xl border border-white/10 outline-none">
                                    <label class="flex items-center space-x-3 cursor-pointer mb-0">
                                        <input type="checkbox" name="products[]" value="<?php echo $v; ?>" class="w-5 h-5 accent-gold">
                                        <span class="text-sm font-bold"><?php echo $v; ?></span>
                                    </label>
                                    <input type="number" name="qty[<?php echo $v; ?>]" min="1" value="1" class="w-16 bg-white/20 border-0 rounded-xl px-2 py-2 text-center text-xs font-bold text-white shadow-none">
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="col-12 mt-10">
                            <button type="submit" class="bg-gold text-deepGreen w-full py-5 rounded-3xl font-black uppercase tracking-[0.3em] hover:bg-white hover:scale-105 transition-all shadow-2xl">KIRIM PESANAN</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- [TABLE SECTION] -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="bg-white p-10 md:p-14 rounded-[4rem] shadow-xl h-full">
                    <h2 class="playfair text-4xl mb-10"><i class="bi bi-table text-gold mr-2"></i> Riwayat</h2>

                    <div class="table-responsive">
                        <table class="table table-striped align-middle">
                            <thead class="text-[10px] uppercase font-black">
                                <tr>
                                    <th>No</th>
                                    <th>Customer</th>
                                    <th>Produk</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($orders)): ?>
                                    <tr><td colspan="5" class="text-center py-10 opacity-30">Belum ada pesanan masuk.</td></tr>
                                <?php else: ?>
                                    <?php $n=1; foreach($orders as $o): ?>
                                    <tr>
                                        <td class="opacity-30 font-bold"><?php echo $n++; ?></td>
                                        <td>
                                            <div class="font-bold text-army"><?php echo $o['customer_name']; ?></div>
                                            <div class="text-[10px] font-black opacity-40">WA: <?php echo $o['whatsapp']; ?></div>
                                        </td>
                                        <td class="text-xs italic"><?php echo $o['products']; ?></td>
                                        <td class="font-black text-army">Rp <?php echo number_format($o['total_price'], 0, ',', '.'); ?></td>
                                        <td><span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-[9px] font-black uppercase"><?php echo $o['status']; ?></span></td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
