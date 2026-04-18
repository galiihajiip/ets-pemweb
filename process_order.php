<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $product = mysqli_real_escape_string($conn, $_POST['product_name']);
    $qty = (int)$_POST['quantity'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    
    // Simulasikan simpan ke database
    /*
    $query = "INSERT INTO orders (customer_name, product_name, quantity, address) VALUES ('$name', '$product', '$qty', '$address')";
    mysqli_query($conn, $query);
    */
    
    // Redirect to success simulation
    header("Location: thanks.php?name=" . urlencode($name));
    exit();
}
?>
