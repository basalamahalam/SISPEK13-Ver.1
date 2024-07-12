<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISPEK13 | MPK</title>
    <link rel="stylesheet" href="assets/css/mpk_style.css">
    <link rel="icon" href="assets/logo-mpk.png" type="image/icon type">
    <script src="https://unpkg.com/feather-icons"></script>


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
                <a href="{{ URL::to('/') }}">HOME</a>
                <a href="{{ URL::to('/osis') }}">OSIS</a>
                <a href="{{ URL::to('/mpk') }}">MPK</a>
                <a href="{{ URL::to('/ekskul') }}">EKSKUL</a>
                <div class="dropdown">
                    <button class="dropbtn">LAINNYA</button>
                    <div class="dropdown-content">
                        <a href="{{ URL::to('/berita') }}">BERITA</a>
                        <a href="{{ URL::to('/kontak') }}">KONTAK</a>
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

        <!-- <section class="jumbotron">

        </section> -->

        <!-- Text box -->
        <div class="text-box">
            <img src="assets/logo-mpk.png" alt="mpk">
            <h1>MPK SMKN 13 BANDUNG</h1>
            <p>Majelis Perwakilan Kelas</p>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#d9d9d9" fill-opacity="1"
                    d="M0,224L60,229.3C120,235,240,245,360,229.3C480,213,600,171,720,170.7C840,171,960,213,1080,213.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </div>

    </section>

    <section class="one">
        <div class="top-card">
            <img src="assets/logo-mpk.png" alt="">
            <h3>{{ $mpk[0]->nama_angkatan }}</h3>
        </div>

        <div class="left-card">
            <div class="card-left-container">
                <h1 class="top-card-title">VISI</h1>
                <hr style="height:2px;border-width:5;color:black;background-color: black">

                <p class="top-card-desc">
                    {{ $mpk[0]->visi_angkatan }}
                </p>
            </div>
            <div class="card-left-container">
                <h1 class="top-card-title">MISI</h1>
                <hr style="height:2px;border-width:5;color:black;background-color: black">

                <p class="top-card-desc">
                    {!! $mpk[0]->misi_angkatan !!}
                </p>
            </div>
        </div>

    </section>

    <section class="two">
        <div class="card">
            <h1>STRUKTUR ORGANISASI</h1>
            <h2>MPK SBAP</h2>
            <hr style="height:2px;border-width:5;color:black;background-color: black">
            <div class="cards">
                <div class="card-top">
                    <div class="card-background">
                        <div class="card-anggota">
                            <img src="{{asset('storage/'. $mpk[0]->gambar_anggota)}}" alt="" width="275" height="325">
                            <div class="button-card">
                                <a href="profil-divisi/{{ $mpk[0]->nama_organisasi }}/{{ $mpk[0]->slug }}" class="next">{{ $mpk[0]->nama_jabatan }}</a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="card-midlle">
                    <div class="card-background">
                        <div class="card-anggota">
                            <img src="{{asset('storage/'. $mpk[3]->gambar_anggota)}}" alt="" width="275" height="325">
                            <div class="button-card">
                                <a href="profil-divisi/{{ $mpk[3]->nama_organisasi }}/{{ $mpk[3]->slug }}" class="next">{{ $mpk[3]->nama_divisi }}</a>
                            </div>

                        </div>
                    </div>
                    <div class="card-background">
                        <div class="card-anggota">
                            <img src="{{asset('storage/'. $mpk[4]->gambar_anggota)}}" alt="" width="275" height="325">
                            <div class="button-card">
                                <a href="profil-divisi/{{ $mpk[4]->nama_organisasi }}/{{ $mpk[4]->slug }}" class="next">{{ $mpk[4]->nama_divisi }}</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="card-background">
                        <div class="card-anggota">
                            <img src="{{asset('storage/'. $mpk[5]->gambar_anggota)}}" alt="" width="275" height="325">
                            <div class="button-card">
                                <a href="profil-divisi/{{ $mpk[5]->nama_organisasi }}/{{ $mpk[5]->slug }}" class="next">{{ $mpk[5]->nama_divisi }}</a>
                            </div>

                        </div>
                    </div>
                    <div class="card-background">
                        <div class="card-anggota">
                            <img src="{{asset('storage/'. $mpk[7]->gambar_anggota)}}" alt="" width="275" height="325">
                            <div class="button-card">
                                <a href="profil-divisi/{{ $mpk[7]->nama_organisasi }}/{{ $mpk[7]->slug }}" class="next">{{ $mpk[7]->nama_divisi }}</a>
                            </div>

                        </div>
                    </div>
                    <div class="card-background">
                        <div class="card-anggota">
                            <img src="{{asset('storage/'. $mpk[9]->gambar_anggota)}}" alt="" width="275" height="325">
                            <div class="button-card">
                                <a href="profil-divisi/{{ $mpk[9]->nama_organisasi }}/{{ $mpk[9]->slug }}" class="next">{{ $mpk[9]->nama_divisi }}</a>
                            </div>

                        </div>
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
