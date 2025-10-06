<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Spotlight: Indonesian Indie - Guille Vinyl (GV)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <header>
            <div class="logo">
                <a href="index.php"><h1>GV</h1></a>
            </div>
            <nav class="main-nav">
                <a href="index.php#rilisan-terbaru">Rilisan Terbaru</a>
                <a href="index.php#genre">Genre</a>
                <a href="#">Pre-Order</a>
                <a href="#">Sale</a>
            </nav>
            <div class="header-actions">
                <div class="search-bar">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="search" placeholder="Cari musik & artis...">
                </div>
                <div class="action-icons">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<a href="dashboard.php" aria-label="Dashboard Akun">';
                    } else {
                        echo '<a href="login.php" aria-label="Login Akun">';
                    }
                    ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </a>
                    <a href="keranjang.php" aria-label="Keranjang Belanja">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    </a>
                </div>
            </div>
        </header>

        <main>
            <section id="spotlight-banner" class="promo-card">
                <div class="promo-info">
                    <h2>GENRE SPOTLIGHT</h2>
                    <h3>The Rise of Indonesian Indie</h3>
                    <p class="artist">Jelajahi suara-suara otentik yang mendefinisikan ulang musik Indonesia. Dari rock alternatif hingga folk puitis, temukan rilisan esensial dalam format vinyl.</p>
                    <div class="album-details">
                        <span>KURASI SPESIAL</span> &nbsp;•&nbsp;
                        <span>RILISAN TERBATAS</span>
                    </div>
                    <a href="#featured-albums" class="cta-button">Jelajahi Koleksi</a>
                </div>
                <div class="promo-image">
                    <img src="https://eclecticmusiclover.com/wp-content/uploads/2024/12/indie-music.jpg " alt="Suasana panggung musik indie">
                </div>
            </section>

             <section id="featured-albums" class="product-section">
                <h2>Album Pilihan Spotlight</h2>
                <div class="product-grid">
                    <article class="product-card">
                        <a href="#"><img src="https://images.genius.com/8fcb3d9b72449e19b9ff159ada92646a.610x610x1.jpg" alt="Album Multiverse oleh .Feast"></a>
                        <div class="product-info">
                            <h3>Multiverse</h3>
                            <p>.Feast</p>
                            <span>Rp 650.000</span>
                            <div class="card-actions">
                                <a href="#" class="details-button">Detail</a>
                                <a href="#" class="add-to-cart-button">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <a href="#"><img src="https://images.genius.com/340862de369c515e7eef40ce39d37a92.1000x1000x1.png" alt="Album Sialnya, hidup tetap harus berjalan oleh Bernadya"></a>
                        <div class="product-info">
                            <h3>Sialnya, hidup harus tetap berjalan</h3>
                            <p>Bernadya</p>
                            <span>Rp 720.000</span>
                             <div class="card-actions">
                                <a href="#" class="details-button">Detail</a>
                                <a href="#" class="add-to-cart-button">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <a href="#"><img src="https://tse1.mm.bing.net/th/id/OIP.sEJFqbj-bu2fzffJOzOH2AHaHa?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Album Nematomorpha oleh Fourtwnty"></a>
                        <div class="product-info">
                            <h3>Nematomorpha</h3>
                            <p>Fourtwnty</p>
                            <span>Rp 810.000</span>
                             <div class="card-actions">
                                <a href="#" class="details-button">Detail</a>
                                <a href="#" class="add-to-cart-button">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </article>
                    <article class="product-card">
                        <a href="#"><img src="https://tse1.mm.bing.net/th/id/OIP.45npd_Zw9MDm0qL6yxqDlQAAAA?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Album +imeless oleh Rumahsakit"></a>
                        <div class="product-info">
                            <h3>+imeless</h3>
                            <p>Rumahsakit</p>
                            <span>Rp 750.000</span>
                             <div class="card-actions">
                                <a href="#" class="details-button">Detail</a>
                                <a href="#" class="add-to-cart-button">Tambah ke Keranjang</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <aside class="shipping-promo">
                <h3>Kenapa Vinyl?</h3>
                <p>Nikmati pengalaman mendengarkan yang hangat, kaya, dan otentik. Setiap piringan hitam adalah sebuah karya seni yang bisa Anda sentuh dan koleksi.</p>
            </aside>
        </main>

        <footer>
            <div class="footer-columns">
                <div class="footer-column">
                    <h4>Toko</h4>
                    <a href="#">Rilisan Terbaru</a>
                    <a href="#">Pre-Order</a>
                    <a href="#">Terlaris</a>
                    <a href="#">Sale</a>
                </div>
                <div class="footer-column">
                    <h4>Informasi</h4>
                    <a href="#">Tentang GV</a>
                    <a href="#">Hubungi Kami</a>
                    <a href="#">Info Pengiriman</a>
                </div>
                <div class="footer-column">
                    <h4>Ikuti Kami</h4>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">X (Twitter)</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Guille Vinyl (GV). Hak Cipta Dilindungi Undang-Undang.</p>
            </div>
        </footer>

    </div>

    <div id="custom-alert-overlay" class="modal-overlay">
        <div class="modal-content">
            <h3 id="modal-title">Pemberitahuan</h3>
            <p id="modal-message">Ini adalah pesan default.</p>
            <button id="modal-close-btn" class="modal-button">Mengerti</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>