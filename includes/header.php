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
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Tailwind CSS 3 (Play CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Playfair Display + Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- AOS.js CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        army: '#3d4e22',
                        darkGreen: '#2d3a1e',
                        gold: '#d4a843',
                        cream: '#faf6ee',
                    }
                }
            }
        }
    </script>
    <style>
        .nav-link.active { color: #d4a843 !important; font-weight: 700; }
        .badge-new { background-color: #d4a843; color: #2d3a1e; font-size: 0.6rem; padding: 2px 5px; border-radius: 4px; vertical-align: super; font-weight: 800; }
    </style>
</head>
<body class="bg-cream">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Navbar sticky -->
    <nav class="navbar navbar-expand-xl navbar-dark sticky-top py-4" style="background-color: #3d4e22; z-index: 1030;">
        <div class="container">
            <a class="navbar-brand flex items-center space-x-2" href="index.php">
                <span class="text-2xl font-bold playfair tracking-wider"><i class="fa-solid fa-leaf text-gold mr-2"></i>KOENCHIPS</span>
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list text-3xl"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto items-center lg:space-x-1">
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'katalog.php') ? 'active' : ''; ?>" href="katalog.php">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'tentang.php') ? 'active' : ''; ?>" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'team.php') ? 'active' : ''; ?>" href="team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>" href="blog.php">Blog <span class="badge-new">NEW</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'proses.php') ? 'active' : ''; ?>" href="proses.php">Proses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'reseller.php') ? 'active' : ''; ?>" href="reseller.php">Reseller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?>" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'order.php') ? 'active' : ''; ?>" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white/90 <?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>" href="kontak.php">Kontak</a>
                    </li>
                </ul>
                <div class="ms-xl-4 flex items-center space-x-4 h-full py-2">
                    <div class="relative cursor-pointer group">
                        <i class="bi bi-cart3 text-white text-2xl"></i>
                        <span id="cart-count" class="absolute -top-2 -right-2 bg-gold text-deepGreen text-[10px] font-black w-5 h-5 flex items-center justify-center rounded-full shadow-lg border-2 border-darkGreen">0</span>
                    </div>
                    <a href="order.php" class="bg-gold text-deepGreen px-6 py-2.5 rounded-full font-bold hover:bg-white transition-all no-underline inline-block uppercase text-xs tracking-widest shadow-lg">
                        Order
                    </a>
                </div>
            </div>
        </div>
    </nav>
