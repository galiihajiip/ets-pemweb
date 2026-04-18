<?php
// Database Configuration
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "koenchips_db";

// Connect to MySQL
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection (comment out in production)
/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/

// Brand Settings
$site_name = "KOENCHIPS";
$tagline = "The Authentic Breadfruit Ripple";

// Color Palette
$primary_green = "#4a5c2a";
$secondary_green = "#3d4e22";
$light_green = "#5a7032";
$accent_gold = "#d4a843";
$cream_bg = "#f5e6c8";
?>
