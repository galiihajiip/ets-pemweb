<?php
/**
 * KOENCHIPS - Configuration (Synced with InfinityFree Live)
 */

// Database Settings - LIVE PRODUCTION
$host     = "sql107.infinityfree.com";
$db_name  = "if0_41694674_koenchips";
$username = "if0_41694674";
$password = "Rqdutt86NuJqgtJ";

try {
    // Establishing PDO Connection
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // Fallback for localhost preview
    $pdo = null;
    $db_error = $e->getMessage();
}

// Global Site Variables
$site_name = "KOENCHIPS";
$tagline = "The Authentic Breadfruit Ripple";

// Color Palette Variables
$colors = [
    'army_dark' => '#2d3a1e',
    'army' => '#3d4e22',
    'army_mid' => '#4a5c2a',
    'gold' => '#d4a843',
    'cream' => '#faf6ee'
];
?>
