<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita | Detail Berita</title>
    <link rel="stylesheet" href="{{ asset('assets/css/beritadetail_style.css') }}">
    <link rel="icon" href="{{ asset('../assets/logoOSIS.png') }}" type="image/icon type">
    <script src="https://unpkg.com/feather-icons"></script>

    
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
          <a href="{{URL::to('/')}}">HOME</a>
              <a href="{{URL::to('/osis')}}">OSIS</a>
              <a href="{{URL::to('/mpk')}}">MPK</a>
              <a href="{{URL::to('/ekskul')}}">EKSKUL</a>
              <div class="dropdown">
                <button class="dropbtn">LAINNYA</button>
                <div class="dropdown-content">
                  <a href="{{URL::to('/berita')}}">BERITA</a>
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

    <!-- Navigation Text-->
    <div class="nav-text">
        <a href="/berita">Berita</a> / <a href="/berita_detail/{{ $news->id }}/detail">{{ $news->judul }}</a>
    </div>
    

    <!-- Main Section-->

    <div class="container">
        <div class="card-detail">
            <h1>{{ $news->judul }}</h1>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <div class="card-img">
                <img src="/assets/berita/{{ $news->pict }}" alt="" width="116" height="103">
            </div>
            <p>
                {{ $news->deskripsi }}
            </p>
            <div class="btn-news">
                <a href="/berita">kembali</a>

            </div>

        </div>

        <!-- Other News -->
        <div class="card-other">
            <div class="btn-news-other">
                <a href="">BERITA LAINNYA</a>
                @php
                    $flag = 0;
                @endphp
                @foreach ($data as $p)
                    @if ($flag < 4)
                        <div class="card-other-list">
                            <img src="/assets/berita/{{ $p->pict }}" alt="" width="116" height="103">
                            <div class="card-desc">
                                <p>EXPAND23: {{ $p->clickbait }}</p>
                                <div class="btn-other-next">
                                    <a href="/berita_detail/{{ $p->id }}/detail">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @php
                            $flag++
                        @endphp
                    @endif
                @endforeach
                {{-- <div class="card-other-list">
                    <img src="../assets/berita/news1.png" alt="" width="116" height="103">
                    <div class="card-desc">
                        <p>EXPAND23: Acara Perpisahan untuk Warga Angkatan 23</p>
                        <div class="btn-other-next">
                            <a href="">Selengkapnya</a>
            
                        </div>
                    </div>
                </div>
                <div class="card-other-list">
                    <img src="../assets/berita/news1.png" alt="" width="116" height="103">
                    <div class="card-desc">
                        <p>EXPAND23: Acara Perpisahan untuk Warga Angkatan 23</p>
                        <div class="btn-other-next">
                            <a href="">Selengkapnya</a>
            
                        </div>
                    </div>
                </div>
                <div class="card-other-list">
                    <img src="../assets/berita/news1.png" alt="" width="116" height="103">
                    <div class="card-desc">
                        <p>EXPAND23: Acara Perpisahan untuk Warga Angkatan 23</p>
                        <div class="btn-other-next">
                            <a href="">Selengkapnya</a>
            
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</body>
</html>