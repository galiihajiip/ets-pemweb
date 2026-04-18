<?php 
include 'includes/header.php'; 
include 'config.php';

// Prepare data from DB or Dummy
$orders = [];
if ($pdo) {
    try {
        $stmt = $pdo->query("SELECT * FROM orders ORDER BY created_at DESC");
        $orders = $stmt->fetchAll();
    } catch (PDOException $e) { $orders = []; }
}

// Fallback Dummy Data if DB empty/fails
if (empty($orders)) {
    $orders = [
        ['id'=>1, 'customer_name'=>'Budi Santoso', 'whatsapp'=>'08123456789', 'address'=>'Jl. Merpati 12', 'products'=>'Chocolate Bliss (2)', 'quantity'=>2, 'total_price'=>24000, 'created_at'=>'2026-04-18 10:00', 'status'=>'Selesai'],
        ['id'=>2, 'customer_name'=>'Siti Aminah', 'whatsapp'=>'082265588823', 'address'=>'Perum Elok Blok C', 'products'=>'Taro Twist (1)', 'quantity'=>1, 'total_price'=>12000, 'created_at'=>'2026-04-18 11:30', 'status'=>'Proses'],
        ['id'=>3, 'customer_name'=>'Andi Wijaya', 'whatsapp'=>'08571234567', 'address'=>'Krajan RT 01', 'products'=>'Matcha Zen (3)', 'quantity'=>3, 'total_price'=>36000, 'created_at'=>'2026-04-18 14:15', 'status'=>'Pending'],
    ];
}
?>

<section class="bg-army py-24 text-white text-center">
    <div class="container">
        <h1 class="text-5xl playfair mb-4">Pemesanan Online</h1>
        <p class="text-xl max-w-2xl mx-auto opacity-80">Lengkapi form di bawah untuk memesan kerenyahan KOENCHIPS.</p>
    </div>
</section>

<section class="section-padding bg-cream">
    <div class="container">
        <div class="row g-5">
            <!-- Order Form -->
            <div class="col-lg-5">
                <div class="bg-darkGreen text-white p-10 rounded-[3rem] shadow-2xl reveal border-t-8 border-gold">
                    <h2 class="playfair text-3xl mb-8">Form Order</h2>
                    <form action="process_order.php" method="POST" id="mainOrderForm" class="row g-4">
                        <div class="col-12">
                            <label class="block text-sm font-bold mb-2 opacity-75">Nama Lengkap</label>
                            <input type="text" name="customer_name" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white outline-none focus:ring-2 focus:ring-gold" placeholder="Masukkan nama..." required>
                        </div>
                        
                        <div class="col-12">
                            <label class="block text-sm font-bold mb-2 opacity-75">No. WhatsApp (08xx)</label>
                            <input type="tel" name="whatsapp" pattern="[0-9]{10,14}" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white outline-none focus:ring-2 focus:ring-gold" placeholder="0812xxxx" required>
                        </div>

                        <div class="col-12">
                            <label class="block text-sm font-bold mb-2 opacity-75">Alamat Pengiriman</label>
                            <textarea name="address" rows="3" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white outline-none focus:ring-2 focus:ring-gold" placeholder="Nama jalan, No rumah, RT/RW..." required></textarea>
                        </div>

                        <div class="col-12">
                            <label class="block text-sm font-bold mb-2 opacity-75">Kota/Kabupaten</label>
                            <input type="text" name="city" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white outline-none focus:ring-2 focus:ring-gold" placeholder="Kota Anda..." required>
                        </div>

                        <div class="col-12">
                            <label class="block text-sm font-bold mb-4 opacity-75">Pilih Varian & Jumlah</label>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between bg-white/5 p-3 rounded-xl border border-white/10">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" name="products[]" value="Chocolate Bliss" class="w-5 h-5 accent-gold">
                                        <span class="text-sm">Chocolate Bliss</span>
                                    </label>
                                    <input type="number" name="qty[Chocolate Bliss]" min="1" value="1" class="w-16 bg-white/20 border-0 rounded-lg px-2 py-1 text-center text-xs">
                                </div>
                                <div class="flex items-center justify-between bg-white/5 p-3 rounded-xl border border-white/10">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" name="products[]" value="Matcha Zen" class="w-5 h-5 accent-gold">
                                        <span class="text-sm">Matcha Zen</span>
                                    </label>
                                    <input type="number" name="qty[Matcha Zen]" min="1" value="1" class="w-16 bg-white/20 border-0 rounded-lg px-2 py-1 text-center text-xs">
                                </div>
                                <div class="flex items-center justify-between bg-white/5 p-3 rounded-xl border border-white/10">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" name="products[]" value="Vanilla Cloud" class="w-5 h-5 accent-gold">
                                        <span class="text-sm">Vanilla Cloud</span>
                                    </label>
                                    <input type="number" name="qty[Vanilla Cloud]" min="1" value="1" class="w-16 bg-white/20 border-0 rounded-lg px-2 py-1 text-center text-xs">
                                </div>
                                <div class="flex items-center justify-between bg-white/5 p-3 rounded-xl border border-white/10">
                                    <label class="flex items-center space-x-3 cursor-pointer">
                                        <input type="checkbox" name="products[]" value="Taro Twist" class="w-5 h-5 accent-gold">
                                        <span class="text-sm">Taro Twist</span>
                                    </label>
                                    <input type="number" name="qty[Taro Twist]" min="1" value="1" class="w-16 bg-white/20 border-0 rounded-lg px-2 py-1 text-center text-xs">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="block text-sm font-bold mb-2 opacity-75">Catatan Tambahan</label>
                            <textarea name="note" rows="2" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-white outline-none focus:ring-2 focus:ring-gold" placeholder="Contoh: Bubble wrap extra..."></textarea>
                        </div>

                        <div class="col-12 flex space-x-3 mt-6">
                            <button type="submit" class="flex-grow bg-gold text-deepGreen py-4 rounded-xl font-black uppercase tracking-widest hover:bg-white transition-all shadow-xl">Kirim Pesanan</button>
                            <button type="reset" class="px-6 border border-white/30 rounded-xl hover:bg-white/10 transition-all font-bold">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Data Table -->
            <div class="col-lg-7">
                <div class="bg-white p-8 md:p-12 rounded-[3.5rem] shadow-xl reveal h-full">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
                        <h2 class="playfair text-3xl font-bold mb-0">Riwayat Pesanan</h2>
                        <button onclick="exportCSV()" class="bg-army text-white px-4 py-2 rounded-xl text-xs font-bold uppercase tracking-wider hover:bg-darkGreen transition-all">Export CSV</button>
                    </div>

                    <!-- Search Bar -->
                    <div class="relative mb-6">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 opacity-30 text-xl">🔍</span>
                        <input type="text" id="tableSearch" placeholder="Cari nama atau produk..." class="w-full pl-12 pr-4 py-3 bg-cream border-0 rounded-2xl outline-none focus:ring-2 focus:ring-gold">
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle text-sm" id="ordersTable">
                            <thead class="bg-gold/10 text-xs uppercase font-black">
                                <tr>
                                    <th class="p-4 border-0">No</th>
                                    <th class="p-4 border-0">Nama & WA</th>
                                    <th class="p-4 border-0">Alamat</th>
                                    <th class="p-4 border-0">Produk</th>
                                    <th class="p-4 border-0">Total Harga</th>
                                    <th class="p-4 border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <?php $no = 1; foreach($orders as $order): ?>
                                <tr class="order-row">
                                    <td class="p-4 font-bold text-gray-400"><?php echo $no++; ?></td>
                                    <td class="p-4">
                                        <div class="font-bold"><?php echo $order['customer_name']; ?></div>
                                        <div class="text-xs text-army font-bold mt-1 text-decoration-none">📞 <?php echo $order['whatsapp']; ?></div>
                                    </td>
                                    <td class="p-4">
                                        <div class="truncate max-w-[150px]" title="<?php echo $order['address']; ?>">
                                            <?php echo $order['address']; ?>
                                        </div>
                                    </td>
                                    <td class="p-4">
                                        <span class="text-xs italic"><?php echo $order['products']; ?></span>
                                    </td>
                                    <td class="p-4 font-black">
                                        Rp <?php echo number_format($order['total_price'], 0, ',', '.'); ?>
                                    </td>
                                    <td class="p-4">
                                        <?php 
                                            $status = $order['status'];
                                            $badge_class = "bg-yellow-100 text-yellow-800";
                                            if($status == 'Proses') $badge_class = "bg-blue-100 text-blue-800";
                                            if($status == 'Selesai') $badge_class = "bg-green-100 text-green-800";
                                        ?>
                                        <span class="<?php echo $badge_class; ?> px-3 py-1 rounded-lg text-[10px] font-black uppercase">
                                            <?php echo $status; ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Controls -->
                    <div class="flex justify-between items-center mt-8">
                        <small class="text-gray-400 font-bold" id="paginationInfo"></small>
                        <div class="flex space-x-2" id="paginationBtns">
                            <!-- JS Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const tableBody = document.getElementById('tableBody');
    const tableRows = Array.from(tableBody.getElementsByClassName('order-row'));
    const tableSearch = document.getElementById('tableSearch');
    const paginationBtns = document.getElementById('paginationBtns');
    const paginationInfo = document.getElementById('paginationInfo');
    
    let filteredRows = [...tableRows];
    let currentPage = 1;
    const rowsPerPage = 5;

    function renderTable() {
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        
        tableRows.forEach(row => row.style.display = 'none');
        
        filteredRows.slice(start, end).forEach(row => {
            row.style.display = 'table-row';
        });

        renderPagination();
        
        paginationInfo.innerText = `Menampilkan ${Math.min(start + 1, filteredRows.length)} - ${Math.min(end, filteredRows.length)} dari ${filteredRows.length} pesanan`;
    }

    function renderPagination() {
        const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
        paginationBtns.innerHTML = '';
        
        for (let i = 1; i <= pageCount; i++) {
            const btn = document.createElement('button');
            btn.innerText = i;
            btn.className = `w-8 h-8 rounded-lg font-bold text-xs transition-all ${i === currentPage ? 'bg-gold text-deepGreen ring-4 ring-gold/20' : 'bg-gray-100 text-gray-400 hover:bg-gray-200'}`;
            btn.onclick = () => {
                currentPage = i;
                renderTable();
            };
            paginationBtns.appendChild(btn);
        }
    }

    // Search Logic
    tableSearch.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();
        filteredRows = tableRows.filter(row => {
            return row.innerText.toLowerCase().includes(query);
        });
        currentPage = 1;
        renderTable();
    });

    renderTable();
});

// CSV Export Logic
function exportCSV() {
    let csv = [];
    const rows = document.querySelectorAll("#ordersTable tr");
    
    for (const row of rows) {
        let cols = row.querySelectorAll("td, th");
        let rowContent = [];
        for (const col of cols) {
            rowContent.push('"' + col.innerText.replace(/"/g, '""') + '"');
        }
        csv.push(rowContent.join(","));
    }
    
    const csvFile = new Blob([csv.join("\n")], { type: "text/csv" });
    const downloadLink = document.createElement("a");
    downloadLink.download = "koenchips_orders.csv";
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
    downloadLink.click();
}
</script>

<?php include 'includes/footer.php'; ?>
