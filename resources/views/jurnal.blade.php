<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jurnal OSIS</title>
    <link rel="icon" href="assets/img/osis13.png" type="image/icon type" />
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Img Icon -->
    <link rel="icon" href="assets/img/osis13.png" type="image/icon type" />

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style-jurnalosis.css" />
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
    <!-- hero -->
    <section class="two">
        <h1>JURNAL OSIS</h1>
        <h2>Jurnal Virtual OSIS SMKN 13 Bandung</h2>
    </section>
    <section class="searchbar">
        <form action="/jurnal" class="searchform">
            <input type="text" placeholder="CARI JURNAL" name="search" id="search">
            <button type="submit">CARI</button>
        </form>
    </section>

    <section class="listcard">

        @php
            $flag = 0;
        @endphp
        <div class="cards">
        @if ($data->isNotEmpty())
            @foreach ($data as $jurnalParticle)
            <div class="card">
                <img src="../assets/berita/{{ $jurnalParticle->pict }}" alt="JURNAL" height="150">
                <div class="description">
                    <h3>{{ Str::limit($jurnalParticle->judul, 15) }}</h3>
                    <p>{{ $jurnalParticle->penulis }}</p>
                    <hr style="height:1px;border-width:5;color: black;background-color: black;">
                </div>
                <h5>{{ Str::limit($jurnalParticle->deskripsi, 15) }}</h5>
                <a href="/jurnal_detail/{{ $jurnalParticle->id }}/detail" class="btn-news">Lihat jurnal
                    ini</a>
            </div>
                {{-- @if ($flag == 0)
                    @php
                        $flag++
                    @endphp --}}
                        {{-- <div class="card">
                            <img src="../assets/berita/{{ $jurnalParticle->pict }}" alt="JURNAL" height="150">
                            <div class="description">
                                <h3>{{ $jurnalParticle->judul }}</h3>
                                <p>{{ $jurnalParticle->penulis }}</p>
                                <hr style="height:1px;border-width:5;color: black;background-color: black;">
                            </div>
                            <h5>{{ Str::limit($jurnalParticle->deskripsi, 10) }}</h5>
                            <a href="/jurnal_detail/{{ $jurnalParticle->id }}/detail" class="btn-news">Lihat jurnal
                                ini</a>
                        </div> --}}
                    
                {{-- @elseif ($flag < 2)
                    <div class="card">
                        <img src="../assets/berita/{{ $jurnalParticle->pict }}" alt="JURNAL" height="150">
                        <div class="description">
                            <h3>{{ Str::limit($jurnalParticle->judul, 5) }}</h3>
                            <p>{{ $jurnalParticle->penulis }}</p>
                            <hr style="height:1px;border-width:5;color: black;background-color: black;">
                        </div>
                        <h5>{{ Str::limit($jurnalParticle->deskripsi, 35) }}</h5>
                        <a href="/jurnal_detail/{{ $jurnalParticle->id }}/detail" class="btn-news">Lihat jurnal
                            ini</a>
                    </div>
                    @php
                        $flag++
                        @endphp
                @endif --}}
                {{-- @if ($flag == 2) --}}
                {{-- @php --}}
                        {{-- $flag = 0; --}}
                        {{-- @endphp --}}
                {{-- @endif --}}
            @endforeach
        @endif
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
    <!-- bottom nav -->
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
</body>

</html>
