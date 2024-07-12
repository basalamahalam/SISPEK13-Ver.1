<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISPEK13 | Ekstrakurikuler</title>
    <link rel="stylesheet" href="assets/css/ekskul_style.css">
    <link rel="icon" href="assets/logoOSIS.png" type="image/icon type">
    
</head>
<body>

    <section class="header">

    <nav class="navbar">
            <div class="navbar-logo">
            <a href="#">
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
                <a href="{{URL::to('/kontak')}}">KONTAK</a> 
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

        <!-- <section class="jumbotron">

        </section> -->
        <!-- Text box -->
        <div class="text-box">
            <img src="assets/logoOSIS.png" alt="mpk">
            <h1>EKSTRAKURIKULER</h1>
            <h4>SMKN 13 BANDUNG</h4>
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#d9d9d9" fill-opacity="1" d="M0,224L60,229.3C120,235,240,245,360,229.3C480,213,600,171,720,170.7C840,171,960,213,1080,213.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </div>
        </section>


        <section class="two">
            <h1>DAFTAR EKSTRAKURIKULER  </h1>
            <h2>Siswa SMKN 13 Bandung</h2>
        </section>
        

        <section class="searchbar">
            <form action="" class="searchform">
                <input type="text" placeholder="CARI EKSKUL">
                <button type="submit">CARI</button>
            </form>
        </section>


        <section class="listcard">
            <div class="cards">
                <div class="card">
                    <img src="  assets/ekskul/1.png" alt="" width="232">
                    <div class="title">Sastrala</div>
                    <div class="desc">
                        Ekskul Sastrala / Jurnalis SMKN 13 Bandung adalah kegiatan bahasa yang mencari, mengolah, menulis, meliput, dan menyebarluaskan informasi atau karya ke warga SMKN 13 Bandung dan masyarakat umum.
                    </div>
                </div>
                <div class="card">

                    <img src="  assets/ekskul/2.png" alt="" width="232">
                    <div class="title">KIR</div>
                    <div class="desc">
                        Ekskul KIR SMKN 13 Bandung adalah kegiatan sains yang mengembangkan minat dan bakat dalam bidang kimia untuk warga SMKN 13 Bandung.
                    </div>
                </div>
                <div class="card">
                    <img src="  assets/ekskul/3.png" alt="" width="232">
                    <div class="title">D’Techno</div>
                    <div class="desc">
                        Ekskul D'Techno adalah kegiatan multimedia dan teknologi yang berfokus pada inovasi dan kreativitas melalui pembuatan video, animasi, dan desain grafis.
                    </div>
                </div>
            {{-- </div> --}}
            {{-- <div class="cards"> --}}
                <div class="card">
                    <img src="  assets/ekskul/1.png" alt="" width="232">
                    <div class="title">Sastrala</div>
                    <div class="desc">
                        Ekskul Sastrala / Jurnalis SMKN 13 Bandung adalah kegiatan bahasa yang mencari, mengolah, menulis, meliput, dan menyebarluaskan informasi atau karya ke warga SMKN 13 Bandung dan masyarakat umum.
                    </div>
                </div>
                <div class="card">

                    <img src="  assets/ekskul/2.png" alt="" width="232">
                    <div class="title">KIR</div>
                    <div class="desc">
                        Ekskul KIR SMKN 13 Bandung adalah kegiatan sains yang mengembangkan minat dan bakat dalam bidang kimia untuk warga SMKN 13 Bandung.
                    </div>
                </div>
                <div class="card">
                    <img src="  assets/ekskul/3.png" alt="" width="232">
                    <div class="title">D’Techno</div>
                    <div class="desc">
                        Ekskul D'Techno adalah kegiatan multimedia dan teknologi yang berfokus pada inovasi dan kreativitas melalui pembuatan video, animasi, dan desain grafis.
                    </div>
                </div>
            </div>

            <!-- button pagination -->
            <div class="pagination">
                <div class="pag">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">next</a>
                    <a href="#">last</a>
                </div>
              </div>
              

        </section>



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