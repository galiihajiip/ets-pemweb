<?php 
/**
 * KOENCHIPS - Form Pemesanan & Visualisasi Data
 * Features BLOK 5.0: Advanced Form, JS Search, Pagination, CSV Export
 */
include 'includes/header.php'; 
include 'config.php';

// Fetch Orders
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
        <p class="text-xl opacity-70">Satu langkah lagi menuju kerenyahan hakiki.</p>
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
                    
                    <form action="process_order.php" method="POST" class="row g-4">
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">Nama Lengkap</label>
                            <input type="text" name="customer_name" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30" placeholder="Contoh: Galih Aji" required>
                        </div>
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">No. WhatsApp (08xx)</label>
                            <input type="tel" name="whatsapp" pattern="08[0-9]{8,12}" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30" placeholder="08226558XXXX" required>
                        </div>
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">Alamat Kirim</label>
                            <textarea name="address" rows="3" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30" placeholder="Detail jalan, No, RT/RW..." required></textarea>
                        </div>
                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">Kota/Kabupaten</label>
                            <input type="text" name="city" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30" placeholder="Sidoarjo / Surabaya..." required>
                        </div>

                        <!-- Checkbox Variants -->
                        <div class="col-12 mt-6">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-4 block">Pilih Varian & Jumlah</label>
                            <div class="grid gap-3">
                                <?php $vars = ['Chocolate Bliss', 'Matcha Zen', 'Vanilla Cloud', 'Taro Twist']; foreach($vars as $v): ?>
                                <div class="flex items-center justify-between bg-white/5 p-4 rounded-2xl border border-white/10 hover:bg-white/10 transition-all">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" name="products[]" value="<?php echo $v; ?>" class="w-5 h-5 accent-gold">
                                        <span class="text-sm font-bold"><?php echo $v; ?></span>
                                    </label>
                                    <input type="number" name="qty[<?php echo $v; ?>]" min="1" value="1" class="w-16 bg-white/20 border-0 rounded-xl px-2 py-2 text-center text-xs font-bold">
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="text-[10px] font-black uppercase tracking-widest opacity-60 mb-2 block">Catatan</label>
                            <textarea name="note" rows="2" class="w-full bg-white/10 border border-white/20 rounded-2xl px-5 py-4 text-white outline-none focus:ring-4 focus:ring-gold/30"></textarea>
                        </div>

                        <div class="col-12 mt-10">
                            <button type="submit" class="bg-gold text-deepGreen w-full py-5 rounded-3xl font-black uppercase tracking-[0.3em] hover:bg-white hover:scale-105 transition-all shadow-2xl">KIRIM PESANAN</button>
                            <button type="reset" class="w-full mt-4 text-xs font-bold opacity-40 hover:opacity-100 transition-all">Hapus Semua Data</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- [TABLE SECTION] -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="bg-white p-10 md:p-14 rounded-[4rem] shadow-xl h-full flex flex-col">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
                        <h2 class="playfair text-4xl mb-0"><i class="bi bi-table text-gold mr-2"></i> Riwayat</h2>
                        <button onclick="exportCSV()" class="bg-army text-white px-6 py-3 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-gold hover:text-deepGreen transition-all shadow-lg"> <i class="bi bi-file-earmark-spreadsheet-fill mr-1"></i> Export CSV</button>
                    </div>

                    <!-- Search -->
                    <div class="relative mb-8">
                        <i class="bi bi-search absolute left-6 top-1/2 -translate-y-1/2 opacity-30 text-xl"></i>
                        <input type="text" id="orderSearch" placeholder="Cari pesanan..." class="w-full h-16 pl-16 pr-6 bg-cream border-0 rounded-3xl outline-none focus:ring-4 focus:ring-gold/20 shadow-inner">
                    </div>

                    <!-- Table -->
                    <div class="table-responsive flex-grow">
                        <table class="table table-striped table-hover align-middle" id="mainTable">
                            <thead class="text-[10px] uppercase font-black">
                                <tr>
                                    <th class="p-4 border-0">No</th>
                                    <th class="p-4 border-0">Customer</th>
                                    <th class="p-4 border-0">Produk</th>
                                    <th class="p-4 border-0">Total</th>
                                    <th class="p-4 border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody id="mainTbody">
                                <?php $n=1; foreach($orders as $o): ?>
                                <tr class="order-item">
                                    <td class="p-4 font-bold opacity-30"><?php echo $n++; ?></td>
                                    <td class="p-4">
                                        <div class="font-bold text-army"><?php echo $o['customer_name']; ?></div>
                                        <div class="text-[10px] font-black opacity-40 mt-1">WA: <?php echo $o['whatsapp']; ?></div>
                                    </td>
                                    <td class="p-4">
                                        <p class="text-xs mb-0 italic max-w-[200px]"><?php echo $o['products']; ?></p>
                                    </td>
                                    <td class="p-4 font-black text-army">Rp <?php echo number_format($o['total_price'], 0, ',', '.'); ?></td>
                                    <td class="p-4">
                                        <?php 
                                            $s = $o['status'];
                                            $c = $s=='Selesai'?'bg-green-100 text-green-700':($s=='Proses'?'bg-blue-100 text-blue-700':'bg-yellow-100 text-yellow-700');
                                        ?>
                                        <span class="px-3 py-1 rounded-lg text-[9px] font-black uppercase shadow-sm <?php echo $c; ?>"><?php echo $s; ?></span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-10 pt-6 border-t border-gray-100 flex justify-between items-center">
                        <small id="pageInf" class="text-gray-400 font-black uppercase text-[10px] tracking-widest"></small>
                        <div class="flex gap-2" id="pageBtnContainer"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Advanced Table Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const srch = document.getElementById('orderSearch');
    const tbody = document.getElementById('mainTbody');
    const rows = Array.from(tbody.querySelectorAll('.order-item'));
    const pInf = document.getElementById('pageInf');
    const pBtns = document.getElementById('pageBtnContainer');
    
    let fRows = [...rows];
    let currP = 1;
    let rPP = 5;

    function render() {
        let start = (currP - 1) * rPP;
        let end = start + rPP;
        rows.forEach(r => r.style.display = 'none');
        fRows.slice(start, end).forEach(r => r.style.display = 'table-row');
        
        // Paginator logic
        pBtns.innerHTML = '';
        let count = Math.ceil(fRows.length / rPP);
        for(let i=1; i<=count; i++) {
            let b = document.createElement('button');
            b.innerText = i;
            b.className = `w-10 h-10 rounded-xl font-black text-xs transition-all ${i===currP?'bg-gold text-deepGreen ring-4 ring-gold/20 shadow-lg':'bg-cream text-army opacity-40 hover:opacity-100'}`;
            b.onclick = () => { currP = i; render(); };
            pBtns.appendChild(b);
        }
        pInf.innerText = `Record ${Math.min(start+1, fRows.length)} - ${Math.min(end, fRows.length)} Dari ${fRows.length}`;
    }

    srch.addEventListener('input', (e) => {
        let q = e.target.value.toLowerCase();
        fRows = rows.filter(r => r.innerText.toLowerCase().includes(q));
        currP = 1;
        render();
    });

    render();
});

function exportCSV() {
    let csv = [];
    const tableRows = document.querySelectorAll("#mainTable tr");
    for (const row of tableRows) {
        let cells = row.querySelectorAll("td, th");
        csv.push(Array.from(cells).map(c => `"${c.innerText.replace(/"/g, '""')}"`).join(","));
    }
    const blob = new Blob([csv.join("\n")], { type: "text/csv" });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement("a");
    a.href = url; a.download = "KOENCHIPS_Orders.csv";
    document.body.appendChild(a); a.click(); document.body.removeChild(a);
}
</script>

<?php include 'includes/footer.php'; ?>
