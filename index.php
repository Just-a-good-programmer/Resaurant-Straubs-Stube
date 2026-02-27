<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: homepage.php");
        exit();
    }
    include 'connecties database/conn.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Straubs Stube - Bestellen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">Straubs <span>Stube</span></div>
    <nav>
        <a href="#">Home</a>
        <a href="#">Menukaart</a>
        <a href="#">Reserveren</a>
        <a href="#">Contact</a>
    </nav>
</header>

<section class="hallo">
    <h1>Hartelijk welkom</h1>
    <p>Geniet van onze specialiteiten in authentieke sfeer</p>
</section>

<main>

    <section class="menu">
        <h2>Populaire Gerechten</h2>

        <div class="menu-grid">

            <!-- Product 1 -->
            <div class="card">
                <h3>Knödeln met rundvlees</h3>
                <p>Met runderjus</p>
                <div class="price-row">
                    <span>€12,25</span>
                    <input type="checkbox" id="item1">
                    <label for="item1" class="order-btn">+</label>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="card">
                <h3>Bratwurst</h3>
                <p>met aardappelen en zuurkool</p>
                <div class="price-row">
                    <span>€9,50</span>
                    <input type="checkbox" id="item2">
                    <label for="item2" class="order-btn">+</label>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="card">
                <h3>Schnitzel</h3>
                <p>Met frietjes en saus</p>
                <div class="price-row">
                    <span>€9,50</span>
                    <input type="checkbox" id="item3">
                    <label for="item3" class="order-btn">+</label>
                </div>
            </div>

        </div>
    </section>

    <!-- Winkelwagen -->
    <aside class="cart">
        <h2>Winkelwagen</h2>

        <div class="cart-items">
            <p class="empty">Uw winkelwagen is leeg</p>
        </div>

        <div class="cart-footer">
            <button class="checkout">Bestellen</button>
        </div>
    </aside>

</main>

<footer>
    © 2026 Gasthaus Maxhof - München
</footer>

</body>
</html>
