 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogicGen Scholars Operation - Bimbingan Belajar Terbaik</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header class="navbar">
        <div class="container nav-wrapper">
            <div class="logo">
                <img src="https://ganeshaoperation.com/img/logo_go.png" alt="Logo GO">
                <div class="logo-text">
                    <span class="brand">LogicGen</span>
                    <span class="sub-brand">Scholars</span>
                </div>
            </div>

            <nav class="menu">
                <?php
                $menus = ["About","Harga", "Diskon",];
                foreach ($menus as $m) {
                    echo "<a href='#'>$m</a>";
                }
                ?>
            </nav>

            <div class="nav-right">
                <a href="#" class="btn-login">Login</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>LogicGen Scholars</h1>
                <p>Bimbingan Belajar Terbaik dan Terbesar Se-Indonesia</p>
                
                <div class="hero-btns">
                    <a href="#" class="btn-primary">HUBUNGI KAMI</a>
                    <a href="#" class="btn-primary">CEK HARGA BIMBEL LS DI BERBAGAI KOTA</a>
                </div>
            </div>

            <div class="wave-container">
                <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#ffffff" d="M0,224L80,213.3C160,203,320,181,480,181.3C640,181,800,203,960,186.7C1120,171,1280,117,1360,90.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
                </svg>
            </div>
        </section>

        <section class="about-us">
            <h2>About Us</h2>
            <div class="underline"></div>
        </section>
    </main>
<script src="../java_script/ind.js"></script>
</body>
</html>