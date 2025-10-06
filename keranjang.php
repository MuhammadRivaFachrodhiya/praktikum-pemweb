<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Guille Vinyl (GV)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
         body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .cart-container {
            background-color: #1c1c1c;
            padding: 50px;
            border-radius: 15px;
            border: 1px solid #444;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
            max-width: 600px;
        }
        .cart-container h1 {
            margin-top: 0;
        }
        .store-link {
            background-color: #ffffff;
            color: #121212;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .store-link:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="cart-container">
        <h1>Keranjang Belanja Anda</h1>
        <p>Fitur keranjang belanja dan proses checkout akan segera hadir. Terima kasih telah berkunjung!</p>
        <a href="index.php" class="store-link">Kembali ke Toko</a>
    </div>
</body>
</html>