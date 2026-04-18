<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> - <?php echo $tagline; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
    <nav class="navbar navbar-expand-xl navbar-dark bg-army sticky-top py-3">
        <div class="container">
            <a class="navbar-brand text-2xl" href="index.php">KOENCHIPS</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto lg:space-x-4">
                    <li class="nav-item"><a class="nav-link text-white hover:text-gold" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white hover:text-gold" href="katalog.php">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link text-white hover:text-gold" href="proses.php">Proses</a></li>
                    <li class="nav-item"><a class="nav-link text-white hover:text-gold" href="reseller.php">Reseller</a></li>
                    <li class="nav-item"><a class="nav-link text-white hover:text-gold" href="blog.php">Blog</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Lainnya</a>
                        <ul class="dropdown-menu border-0 shadow-lg rounded-xl mt-3">
                            <li><a class="dropdown-item" href="tentang.php">Tentang</a></li>
                            <li><a class="dropdown-item" href="team.php">Tim</a></li>
                            <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                            <li><a class="dropdown-item" href="testimoni.php">Testimoni</a></li>
                            <li><a class="dropdown-item" href="kontak.php">Kontak</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="ms-xl-4 mt-3 mt-xl-0">
                    <a href="order.php" class="bg-gold text-darkGreen px-6 py-2 rounded-full font-bold hover:bg-white transition-all no-underline inline-block">Order Online</a>
                </div>
            </div>
        </div>
    </nav>
