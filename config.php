<?php
/**
 * KOENCHIPS - Configuration & Database Connection (PDO)
 * Senior Web Developer & UI/UX Designer: Galih
 */

// Database Settings
$host = "localhost";
$db_name = "koenchips_db";
$username = "root";
$password = "";

try {
    // Establishing PDO Connection
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // Graceful error handling for UI preview when DB is not yet created
    $pdo = null;
    $db_error = $e->getMessage();
}

// Global Site Variables
$site_name = "KOENCHIPS";
$tagline = "The Authentic Breadfruit Ripple";

// Color Palette Variables (Shared with Tailwind & CSS)
$colors = [
    'army_dark' => '#2d3a1e',
    'army' => '#3d4e22',
    'army_mid' => '#4a5c2a',
    'gold' => '#d4a843',
    'cream' => '#faf6ee'
];
?>
