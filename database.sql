CREATE DATABASE IF NOT EXISTS koenchips_db;
USE koenchips_db;

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    whatsapp VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    city VARCHAR(100),
    products TEXT NOT NULL,
    quantity INT NOT NULL,
    total_price INT NOT NULL,
    note TEXT,
    status ENUM('Pending', 'Proses', 'Selesai') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dummy Data
INSERT INTO orders (customer_name, whatsapp, address, city, products, quantity, total_price, status) VALUES 
('Budi Santoso', '08123456789', 'Jl. Merpati No. 12', 'Sidoarjo', 'Chocolate Bliss (2), Matcha Zen (1)', 3, 36000, 'Selesai'),
('Siti Aminah', '082265588823', 'Perum Elok Blok C', 'Surabaya', 'Taro Twist (5)', 5, 60000, 'Proses'),
('Andi Wijaya', '08571234567', 'Dusun Krajan RT 01', 'Gresik', 'Vanilla Cloud (1)', 1, 12000, 'Pending'),
('Rina Rose', '08198765432', 'Jl. Gajah Mada 45', 'Malang', 'Chocolate Bliss (3)', 3, 36000, 'Pending'),
('Eko Prasetyo', '08112233445', 'Apartemen Sudirman', 'Jakarta', 'Matcha Zen (2), Taro Twist (2)', 4, 48000, 'Proses'),
('Dewi Lestari', '08212121212', 'Jl. Melati 9', 'Bandung', 'Vanilla Cloud (10)', 10, 120000, 'Selesai');
