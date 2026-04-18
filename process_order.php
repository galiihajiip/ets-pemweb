<?php
/**
 * KOENCHIPS - Order Processing Handler
 * Integrates BLOK 5.0 (Validation + PDO) & BLOK 9.0 (SweetAlert2 + WA Intent)
 */
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitization
    $name = htmlspecialchars($_POST['customer_name']);
    $wa = htmlspecialchars($_POST['whatsapp']);
    $addr = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $note = htmlspecialchars($_POST['note']);
    
    // Product Aggregation
    $selected = isset($_POST['products']) ? $_POST['products'] : [];
    $qtys = isset($_POST['qty']) ? $_POST['qty'] : [];
    
    $summary_arr = [];
    $total_qty = 0;
    $total_price = 0;
    
    foreach ($selected as $prod) {
        $q = isset($qtys[$prod]) ? (int)$qtys[$prod] : 1;
        $summary_arr[] = "$prod ($q)";
        $total_qty += $q;
        $total_price += ($q * 12000); // Fixed price per keping: 12.000
    }
    
    $summary_str = implode(", ", $summary_arr);

    // Database Insertion (PDO)
    if ($pdo) {
        try {
            $sql = "INSERT INTO orders (customer_name, whatsapp, address, city, products, quantity, total_price, note) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $wa, $addr, $city, $summary_str, $total_qty, $total_price, $note]);
            
            // Build WhatsApp Message
            $wa_msg = "Halo Admin KOENCHIPS! 👋\n\nSy mau pesan kripik sukun premium:\n\n🧑 *Nama:* $name\n📦 *Order:* $summary_str\n📍 *Alamat:* $addr, $city\n📝 *Catatan:* $note\n\n💰 *Total Bayar:* Rp " . number_format($total_price, 0, ',', '.');
            $wa_url = "https://wa.me/6282265588823?text=" . urlencode($wa_msg);
            
            // Successful Logic Response (with SweetAlert2)
            echo "<!DOCTYPE html><html><head>";
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<link rel='stylesheet' href='assets/css/style.css'>";
            echo "</head><body style='background-color:#faf6ee;'>";
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Pesanan Berhasil Disimpan!',
                        text: 'Halo $name, pesananmu sudah masuk database. Klik OK untuk konfirmasi pembayaran via WhatsApp.',
                        icon: 'success',
                        confirmButtonColor: '#d4a843',
                        confirmButtonText: 'KONFIRMASI VIA WA'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.open('$wa_url', '_blank');
                            window.location.href = 'order.php?success=1';
                        }
                    });
                });
            </script>";
            echo "</body></html>";
            exit();
            
        } catch (PDOException $e) {
            die("SQL Error: " . $e->getMessage());
        }
    } else {
        // Fallback Simulation for UI testing without DB
        $wa_msg = "Halo Admin KOENCHIPS! (No-DB Simulation)\n\nNama: $name\nOrder: $summary_str\nTotal: Rp " . number_format($total_price, 0, ',', '.');
        $wa_url = "https://wa.me/6282265588823?text=" . urlencode($wa_msg);
        header("Location: $wa_url");
        exit();
    }
} else {
    header("Location: order.php");
    exit();
}
?>
