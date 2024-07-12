<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISPEK13 | Home</title>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- img icon -->
    <link rel="icon" href="assets/logoOSIS.png" type="image/icon type">
</head>
<body>
    <!-- landing page -->
    <section class="header">
        <nav class="navbar">
            <div class="navbar-logo">
            <a href="{{URL::to('/')}}">
                <img src="assets/img/Logo 13.png" alt="Logo SMK" class="logo" />
            </a>
            <div class="text-logo">
                <h3>SISPEK13</h3>
                <p>OSIS MPK & EKSKUL 13</p>
            </div>
            </div>
            <div class="navbar-nav">
                <a href="{{URL::to('/')}}">HOME</a>
                <a href="{{URL::to('/osis')}}">OSIS</a>
                <a href="{{URL::to('/mpk')}}">MPK</a>
                <a href="{{URL::to('/ekskul')}}">EKSKUL</a>
                <div class="dropdown">
                <button class="dropbtn">LAINNYA</button>
                <div class="dropdown-content">
                <a href="{{URL::to('/berita')}}">BERITA</a>
                <a href="{{URL::to('/admin-osis')}}">KONTAK</a> 
                <a href="{{URL::to('/')}}">WEBSITE SMKN 13 BANDUNG</a>
                </div>
                </div>
            </div>
        </nav>
        <nav class="navbar-side">
            <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>

        <!-- Text box -->
        <div class="text-box">
            <h1>OSIS - MPK & EKSTRAKURIKULER</br> SMKN 13 BANDUNG</h1>
            <p>Selamat datang di website resmi SISPEK SMKN 13 Bandung.</p>
            <div class="btn-box">
                <a href="{{URL::to('/menfess')}}" class="btn-cm">Cek Menfess?</a>
                <a href="{{URL::to('/jurnal')}}" class="btn-bj">Baca Jurnal?</a>
            </div>
            <div onclick="signInFunction()" class="icon-recurment">
                <img src="/assets/icon/icon-rec.png" alt="">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#d9d9d9" fill-opacity="1" d="M0,224L60,229.3C120,235,240,245,360,229.3C480,213,600,171,720,170.7C840,171,960,213,1080,213.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>    
        </div>
    </section>

    <section class="card">
        <div class="card-header3">
            <img src="assets/logo.png" alt="" width="55">
            <div class="text-card-top">
                <h2>OSIS SMKN 13 BANDUNG</h2>
                <p>Sapta Bhakti Adirajasa Paramartha</p>

            </div>
        </div>
        <div class="card-container">
            <div class="card-style">
                <a href="">PROFIL OSIS</a>
                <div class="card-header">
                    <img src="assets/logo.png" alt="">
                </div>
                <a href="{{URL::to('/osis')}}" class="next">SELENGKAPNYA..</a>
            </div>
        </div>
    </section>

    <section class="card">
        <div class="card-header3">
            <img src="assets/logo-mpk.png" alt="" width="55">
            <div class="text-card-top">
                <h2>MPK SMKN 13 BANDUNG</h2>
                <p>Sapta Bhakti Adirajasa Paramartha</p>

            </div>
        </div>
        <div class="card-container">
            <div class="card-style">
                <a href="">PROFIL MPK</a>
                <div class="card-header-mpk">
                    <img src="assets/logo-mpk.png" alt="">
                </div>
                <a href="{{URL::to('/mpk')}}" class="next">SELENGKAPNYA..</a>
            </div>
        </div>
    </section>
    
    <section class="card">
        <div class="card-header3">
            <div class="text-card-top-ekstrakuli">
                <h2>EKSTRAKURIKULER</h2>
                <p>SMK NEGERI 13 BANDUNG</p>

            </div>
        </div>
        <div class="card-container">
            <div class="card-style">
                <a href="">PROFIL EKSKUL</a>
                <div class="card-header">
                    <img src="assets/ekskul/1.png" alt="">
                </div>
                <a href="{{URL::to('/ekskul')}}" class="next">SELENGKAPNYA..</a>
            </div>
        </div>
    </section>

    <!-- team -->
    <div class="team">
        <img src="assets/logoOSIS.png" alt="" width="120" height="115">
        <img src="assets/logo.png" alt="" width="110" height="130">
        <img src="assets/logo-mpk.png" alt="" width="120" height="115">
        <img src="assets/logo-best.png" alt="" width="110" height="130">
    </div>
    
    <!-- bottom-nav -->

    <div class="btm-nav">
        <ul>
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('/osis')}}">OSIS</a></li>
            <li><a href="{{URL::to('/mpk')}}">MPK</a></li>
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
        function signInFunction() {
            window.location.href = "{{ url('/signup') }}";
        }

        
        const burgerMenu = document.querySelector('.navbar-extra');
        const menu = document.querySelector('.navbar-nav');

        burgerMenu.addEventListener('click', () => {
        menu.classList.toggle('show-menu');
        });

        const nav = document.querySelector("nav")
        window.addEventListener("scroll",()=> {
            if(document.documentElement.scrollTop > 0) {
                nav.classList.add('sticky');
            }else {
                nav.classList.remove('sticky');
            }
        })
    </script>
</body>
</html>