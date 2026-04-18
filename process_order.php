<?php
/**
 * KOENCHIPS - Order Processing Handler (LOCAL SYNC)
 */
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitization
    $name = htmlspecialchars($_POST['customer_name']);
    $wa = htmlspecialchars($_POST['whatsapp']);
    $addr = htmlspecialchars($_POST['address']);
    $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : 'Sidoarjo';
    $note = isset($_POST['note']) ? htmlspecialchars($_POST['note']) : '';
    
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
        $total_price += ($q * 12000); 
    }
    
    $summary_str = implode(", ", $summary_arr);

    // Database Insertion (PDO)
    if ($pdo) {
        try {
            $sql = "INSERT INTO orders (customer_name, whatsapp, address, city, products, quantity, total_price, note) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $wa, $addr, $city, $summary_str, $total_qty, $total_price, $note]);
            
            $wa_msg = "Halo Admin KOENCHIPS! 👋\n\nSy mau pesan kripik sukun premium:\n\n🧑 *Nama:* $name\n📦 *Order:* $summary_str\n💰 *Total:* Rp " . number_format($total_price, 0, ',', '.');
            $wa_url = "https://wa.me/6282265588823?text=" . urlencode($wa_msg);
            
            echo "<!DOCTYPE html><html><head>";
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "</head><body style='background-color:#faf6ee;'>";
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Pesanan Berhasil!',
                        text: 'Halo $name, pesananmu sudah tersimpan.',
                        icon: 'success',
                        confirmButtonText: 'OKE'
                    }).then((result) => {
                        window.open('$wa_url', '_blank');
                        window.location.href = 'order.php?success=1';
                    });
                });
            </script>";
            echo "</body></html>";
            exit();
            
        } catch (PDOException $e) {
            die("SQL Error: " . $e->getMessage());
        }
    } else {
        header("Location: order.php");
        exit();
    }
}
?>
