<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISPEK13 | Berita</title>
    <link rel="stylesheet" href="assets/css/berita_style.css">
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="icon" href="../assets/logoOSIS.png" type="image/icon type">


</head>

<body>
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
                    <a href="#berita">KONTAK</a>
                    <a href="#">WEBSITE SMKN 13 BANDUNG</a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar-side">
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <section class="two">
        <h1>PORTAL BERITA</h1>
        <h2>OSIS - MPK & EKSTRAKURIKULER SMKN 13 BANDUNG</h2>
    </section>

    <section class="searchbar">
        <form action="/berita" class="searchform">
            <input type="text" placeholder="CARI BERITA" name="search" id="search"
                value="{{ request('search') }}">
            <button type="submit">CARI</button>
        </form>
    </section>

    <section class="listcard">
        <div class="cards">
            @php
                $flag = 0;
            @endphp
            @if ($data->isNotEmpty())
                @foreach ($data as $beritaParticle)
                    <div class="card">
                        <img src="../assets/berita/{{ $beritaParticle->pict }}" alt=""">
                        <div class="title">{{ $beritaParticle->judul }}</div>
                        <div class="desc">
                            {{ Str::limit($beritaParticle->deskripsi, 35) }}
                        </div>
                        <a href="/berita_detail/{{ $beritaParticle->id }}/detail" class="btn-news">Lihat berita ini</a>
                    </div>
                    
                    {{-- @if ($flag == 0)
                @elseif ($flag < 2)
                <div class="card">
                    <img src="../assets/berita/{{ $beritaParticle->pict }}" alt=""">
                    <div class="title">{{ $beritaParticle->judul }}</div>
                    <div class="desc">
                            {{ Str::limit($beritaParticle->deskripsi, 35) }}
                        </div>
                        <a href="/berita_detail/{{ $beritaParticle->id }}/detail" class="btn-news">Lihat berita ini</a>
                    </div>
                    @endif
                    @if ($flag == 2)
                    @php
                    $flag = 0;
                    @endphp
                    @endif --}}
                @endforeach
            @endif
        </div>
        {{-- <div class="cards">
            <div class="card">
                <img src="../assets/berita/news1.png" alt=""">
                <div class="title">Kajian Keislaman 2022</div>
                <div class="desc">
                    “Membangun Peradaban Generasi ya...
                </div>
                <a href="{{URL::to('/berita_detail')}}" class="btn-news">Lihat berita ini</a>
            </div>
            <div class="card">
                
                <img src="../assets/berita/news1.png" alt=""">
                <div class="title">Kajian Keislaman 2022</div>
                <div class="desc">
                    “Membangun Peradaban Generasi ya...
                </div>
                <a href="{{URL::to('/berita_detail')}}" class="btn-news">Lihat berita ini</a>
            </div>
            <div class="card">
                <img src="../assets/berita/news1.png" alt=""">
                <div class="title">Kajian Keislaman 2022</div>
                <div class="desc">
                    “Membangun Peradaban Generasi ya...
                </div>
                <a href="{{URL::to('/berita_detail')}}" class="btn-news">Lihat berita ini</a>
            </div>
        </div> --}}

        </div>

        <!-- button pagination -->
        <div class="pagination">
            <div class="pag">
                {!! $data->links() !!}
                {{-- <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">next</a>
                <a href="#">last</a> --}}
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
    </script>
</body>

</html>
