<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valid_username = 'admin';
    $valid_password = 'password123';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Guille Vinyl (GV)</title>
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
        }
        .login-container {
            background-color: #1c1c1c;
            padding: 40px;
            border-radius: 15px;
            border: 1px solid #444;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #a7a7a7;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            background-color: #2a2a2a;
            border: 1px solid #444;
            border-radius: 8px;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        .login-button {
            background-color: #ffffff;
            color: #121212;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        .login-button:hover {
            background-color: #e0e0e0;
        }
        .error-message {
            color: #ff4d4d;
            margin-top: 15px;
        }
         .home-link {
            display: block;
            margin-top: 20px;
            color: #a7a7a7;
            text-decoration: none;
        }
        .home-link:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login ke Akun GV</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <?php if ($error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>