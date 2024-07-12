<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPK | Profil Divisi</title>
    <link rel="stylesheet" href="assets/css/profile_style.css">
    <link rel="icon" href="assets/logo-mpk.png" type="image/icon type" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="{{ URL::to('/') }}">
                <img src="assets/img/Logo 13.png" alt="Logo SMK" class="logo" />
            </a>
            <div class="text-logo">
                <h3>SISPEK13</h3>
                <p>OSIS MPK & EKSKUL 13</p>
            </div>
        </div>
        <div class="navbar-nav">
            <a href="{{ URL::to('/') }}">HOME</a>
            <a href="{{ URL::to('/osis') }}">OSIS</a>
            <a href="{{ URL::to('/mpk') }}">MPK</a>
            <a href="{{ URL::to('/ekskul') }}">EKSKUL</a>
            <div class="dropdown">
                <button class="dropbtn">LAINNYA</button>
                <div class="dropdown-content">
                    <a href="{{ URL::to('/berita') }}">BERITA</a>
                    <a href="{{ URL::to('/admin-osis') }}">KONTAK</a>
                    <a href="{{ URL::to('/') }}">WEBSITE SMKN 13 BANDUNG</a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar-side">
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <section class="one">
        <div class="top-card">
            <h1 class="top-card-title">TRIMITRA</h1>
            <hr style="height:2px;border-width:5;color:black;background-color: black">
            <div class="card-container">
                <div class="card-img">

                </div>
                <div class="card-desc">
                    <div class="deskripsi">
                        Deskripsi
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum fuga iure maxime explicabo qui
                        iste dolorem adipisci quisquam, cum, natus minima repellendus rem enim nesciunt dolores
                        cupiditate nostrum obcaecati mollitia.</p>
                </div>

            </div>
        </div>

    </section>

    <section class="two">
        <div class="top">
            <div class="two-top-card">
                <h1 class="two-top-card-title">Ketua</h1>
                <hr style="height:2px;border-width:5;color:black;background-color: black">
                <div class="card-container">
                    <div class="card-img">
                    </div>
                    <div class="card-desc">
                        <div class="deskripsi">Erik Tohir</div>
                        <p>XI TKJ 2</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="bottom">
            <div class="two-top-card">
                <h1 class="two-top-card-title">Wakil Ketua 1</h1>
                <hr style="height:2px;border-width:5;color:black;background-color: black">
                <div class="card-container">
                    <div class="card-img">

                    </div>
                    <div class="card-desc">
                        <div class="deskripsi">Barack Obama</div>
                        <p>XI TKJ 5</p>
                    </div>

                </div>
            </div>
            <div class="two-top-card">
                <h1 class="two-top-card-title">Wakil Ketua 2</h1>
                <hr style="height:2px;border-width:5;color:black;background-color: black">
                <div class="card-container">
                    <div class="card-img">

                    </div>
                    <div class="card-desc">
                        <div class="deskripsi">Mike Tyson</div>
                        <p>XI TKJ 1</p>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- bottom-nav -->

    <div class="btm-nav">
        <ul>
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('/osis') }}">OSIS</a></li>
            <li><a href="{{ URL::to('/mpk') }}">MPK</a></li>
            <li><a href="#">Kontak Kami</a></li>
        </ul>
    </div>

    <footer>
        <p>Website by Sixth Project</p>
    </footer>
    <script>
        feather.replace();
    </script>
    <!-- My Java Script -->
    <script src="assets/js/script.js"></script>
    <script>
        const burgerMenu = document.querySelector('.navbar-extra');
        const menu = document.querySelector('.navbar-nav');

        burgerMenu.addEventListener('click', () => {
            menu.classList.toggle('show-menu');
        });

        const nav = document.querySelector("nav")
        window.addEventListener("scroll", () => {
            if (document.documentElement.scrollTop > 0) {
                nav.classList.add('sticky');
            } else {
                nav.classList.remove('sticky');
            }
        })
    </script>
</body>

</html>
