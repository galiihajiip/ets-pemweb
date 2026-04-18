<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect Data
    $name = htmlspecialchars($_POST['customer_name']);
    $wa = htmlspecialchars($_POST['whatsapp']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $note = htmlspecialchars($_POST['note']);
    
    // Process Products & Quantities
    $selected_products = isset($_POST['products']) ? $_POST['products'] : [];
    $quantities = isset($_POST['qty']) ? $_POST['qty'] : [];
    
    $product_summary = [];
    $total_qty = 0;
    $total_price = 0;
    
    foreach ($selected_products as $p) {
        $q = isset($quantities[$p]) ? (int)$quantities[$p] : 1;
        $product_summary[] = "$p ($q)";
        $total_qty += $q;
        $total_price += ($q * 12000); // Base price 12k
    }
    
    $products_str = implode(", ", $product_summary);

    if ($pdo) {
        try {
            $sql = "INSERT INTO orders (customer_name, whatsapp, address, city, products, quantity, total_price, note) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $wa, $address, $city, $products_str, $total_qty, $total_price, $note]);
            
            // Success redirect with WA intent
            $wa_message = "Halo Admin KOENCHIPS, saya mau pesan!\n\nNama: $name\nProduk: $products_str\nAlamat: $address, $city\nCatatan: $note\n\nTotal: Rp " . number_format($total_price, 0, ',', '.');
            $wa_url = "https://wa.me/6282265588823?text=" . urlencode($wa_message);
            
            echo "<script>
                alert('Pesanan Berhasil Disimpan!');
                window.open('$wa_url', '_blank');
                window.location.href = 'order.php?success=1';
            </script>";
            exit();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    } else {
        // Fallback if no DB: just show the WA link
        $wa_message = "Halo Admin KOENCHIPS, saya mau pesan!\n\nNama: $name\nProduk: $products_str\nTotal: Rp " . number_format($total_price, 0, ',', '.');
        $wa_url = "https://wa.me/6282265588823?text=" . urlencode($wa_message);
        echo "<script>
            alert('DB Connection Error! Dialihkan ke WhatsApp...');
            window.location.href = '$wa_url';
        </script>";
    }
}
?>
