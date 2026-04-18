<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - <?php echo $tagline; ?></title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        army: '#4a5c2a',
                        darkGreen: '#3d4e22',
                        gold: '#d4a843',
                        cream: '#f5e6c8',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-cream">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-army sticky-top py-3">
        <div class="container">
            <a class="navbar-brand text-2xl" href="index.php">KOENCHIPS</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto space-x-0 lg:space-x-6">
                    <li class="nav-item">
                        <a class="nav-link text-white hover:text-gold transition-colors" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white hover:text-gold transition-colors" href="shop.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white hover:text-gold transition-colors" href="about.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white hover:text-gold transition-colors" href="contact.php">Kontak</a>
                    </li>
                </ul>
                <div class="ms-lg-4 mt-3 mt-lg-0">
                    <a href="contact.php" class="bg-gold text-darkGreen px-4 py-2 rounded-full font-bold hover:bg-white transition-all no-underline inline-block">Order Sekarang</a>
                </div>
            </div>
        </div>
    </nav>
