<?php
// Simple Form Handler (Simulation)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // In a real production environment, you would use mail() or PHPMailer
    // For now, we simulate success
    $success = true;
}
?>

<?php include 'includes/header.php'; ?>

<section class="section-padding min-h-[60vh] flex items-center justify-center text-center">
    <div class="container">
        <div class="max-w-xl mx-auto bg-white p-12 rounded-[3rem] shadow-2xl border-t-8 border-gold">
            <div class="text-6xl mb-6">🌿</div>
            <h1 class="playfair text-4xl mb-4">Terima Kasih, <?php echo isset($name) ? $name : 'Sobat Koen'; ?>!</h1>
            <p class="text-gray-600 text-lg mb-8">Pesan Anda telah kami terima. Tim KOENCHIPS akan segera menghubungi Anda kembali melalui email atau WhatsApp dalam waktu 1x24 jam.</p>
            <div class="flex flex-col space-y-3">
                <a href="index.php" class="btn-koen py-3 rounded-xl no-underline font-bold uppercase tracking-wider">Kembali Ke Beranda</a>
                <a href="shop.php" class="text-army font-bold no-underline hover:text-gold">Sambil nunggu, liat produk yuk &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
