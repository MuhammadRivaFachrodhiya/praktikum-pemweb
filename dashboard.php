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
    <title>Dashboard - Guille Vinyl (GV)</title>
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
        .dashboard-container {
            background-color: #1c1c1c;
            padding: 50px;
            border-radius: 15px;
            border: 1px solid #444;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
        }
        .dashboard-container h1 {
            margin-top: 0;
        }
        .logout-button {
            background-color: #ff4d4d;
            color: #ffffff;
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
        .logout-button:hover {
            background-color: #e60000;
        }
        .store-link {
            display: block;
            margin-top: 30px;
            color: #a7a7a7;
            text-decoration: none;
        }
        .store-link:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Anda telah berhasil login.</p>
        <a href="logout.php" class="logout-button">Logout</a>
        <a href="index.php" class="store-link">Lanjut ke Toko &rarr;</a>
    </div>
</body>
</html>