<?php
// BLOK 5.0 - Database Configuration with PDO
$host = "localhost";
$db_name = "koenchips_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // Silence error for now if DB doesn't exist yet, to allow UI preview
    $pdo = null;
    $db_error = $e->getMessage();
}

// Brand Settings
$site_name = "KOENCHIPS";
$tagline = "The Authentic Breadfruit Ripple";
?>
