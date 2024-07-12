<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OSIS | Profil Divisi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-profilosis.css') }}" />
    <script src="{{ asset('https://unpkg.com/feather-icons') }}"></script>
    <link rel="icon" href="{{ asset('assets/img/osis13.png') }}" type="image/icon type" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="#">
                <img src="{{ asset('assets/img/Logo 13.png') }}" alt="Logo SMK" class="logo" />
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
    <section class="one">
        <div class="top-card">
            <h1>{{ $anggota[0]->nama_divisi }}</h1>
            <hr style="height:2px;border-width:5;color: black;background-color: black;">
            <div class="card-container">
                <div class="card-img">
                    <img src="{{ asset('storage/' . $anggota[0]->gambar_divisi) }}" alt="" style="" class="card-img">
                </div>
                <div class="card-desc">
                    <div class="deskripsi">
                        Deskripsi
                    </div>
                    <p>{!! $anggota[0]->deskripsi_divisi !!}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="two">
        <div class="card-top">
            <div class="card-bg">
                <div class="card-anggota">
                    <img src="{{ asset('assets/img/back-card.png') }}" alt="bek" />
                    <img src="{{ asset('storage/' . $anggota[0]->gambar_anggota) }}" alt="Ketua MPK" />
                    <div class="image-stack">
                        <img src="{{ asset('assets/img/front-card.png') }}" alt="pront" />
                        <div class="button-card">
                            <p>{{ $anggota[0]->nama_anggota }}</p>
                            <hr style="height: 1px;border-width: 6;color: white;background-color: white;">
                            <div class="containercard">
                                <a href="{{ $anggota[0]->instagram_anggota }}"><i data-feather="instagram"></i></a>
                                <p>{{ $anggota[0]->nama_kelas }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-middle">
            @php
                $count = 0;
            @endphp
            @foreach ($anggota as $user)
                @if ($count == 0)
                    @php
                        $count++;
                        continue;
                    @endphp
                @endif
            <div class="card-bg">
                <div class="card-anggota">
                    <img src="{{ asset('assets/img/back-card.png') }}" alt="bek" />
                    <img src="{{ asset('storage/' . $user->gambar_anggota) }}" alt="Ketua MPK" />
                    <div class="image-stack">
                        <img src="{{ asset('assets/img/front-card.png') }}" alt="pront" />
                        <div class="button-card">
                            <p>{{ $user->nama_anggota }}</p>
                            <hr style="height: 1px;border-width: 6;color: white;background-color: white;">
                            <div class="containercard">
                                <a href="{{ $user->instagram_anggota }}"><i data-feather="instagram"></i></a>
                                <p>{{ $user->nama_kelas }}</p>
                            </div>
                            <!-- <a href="#" class="next">KETUA OSIS</a> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
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
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
