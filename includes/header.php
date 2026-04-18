<?php 
include_once 'config.php'; 
$current_page = basename($_SERVER['PHP_SELF']);
?>
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
                        deepGreen: '#2d3a1e',
                        gold: '#d4a843',
                        cream: '#f5e6c8',
                        lightLeaf: '#c8dca0',
                    }
                }
            }
        }
    </script>
    <style>
        .nav-link.active {
            color: #d4a843 !important;
            font-weight: 600;
        }
        .badge-new {
            background-color: #d4a843;
            color: #2d3a1e;
            font-size: 0.6rem;
            padding: 2px 5px;
            border-radius: 4px;
            vertical-align: super;
            margin-left: 2px;
            font-weight: 800;
        }
    </style>
</head>
<body class="bg-cream">
    <!-- Navbar BLOK 2.0 -->
    <nav class="navbar navbar-expand-xl navbar-dark sticky-top py-3" style="background-color: #3d4e22;">
        <div class="container">
            <a class="navbar-brand flex items-center space-x-2" href="index.php">
                <span class="text-2xl font-bold playfair tracking-wider">🍃 KOENCHIPS</span>
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto items-center lg:space-x-1">
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'katalog.php') ? 'active' : ''; ?>" href="katalog.php">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'tentang.php') ? 'active' : ''; ?>" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'team.php') ? 'active' : ''; ?>" href="team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>" href="blog.php">Blog <span class="badge-new">NEW</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'proses.php') ? 'active' : ''; ?>" href="proses.php">Proses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'reseller.php') ? 'active' : ''; ?>" href="reseller.php">Reseller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?>" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'order.php') ? 'active' : ''; ?>" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 hover:text-gold transition-all px-3 <?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>" href="kontak.php">Kontak</a>
                    </li>
                </ul>
                <div class="ms-xl-4 mt-3 mt-xl-0 flex items-center space-x-4">
                    <!-- Cart Counter -->
                    <div class="relative cursor-pointer group">
                        <span class="text-white text-xl">🛒</span>
                        <span id="cart-count" class="absolute -top-2 -right-2 bg-gold text-deepGreen text-[10px] font-black w-5 h-5 flex items-center justify-center rounded-full shadow-lg border-2 border-darkGreen">0</span>
                    </div>
                    <a href="order.php" class="bg-gold text-deepGreen px-6 py-2.5 rounded-full font-bold hover:bg-white hover:scale-105 transition-all no-underline inline-block uppercase text-xs tracking-widest shadow-lg">
                        Order Sekarang
                    </a>
                </div>
            </div>
        </div>
    </nav>
