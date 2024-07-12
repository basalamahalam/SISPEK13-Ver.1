<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jurnal OSIS | Detail</title>
    <link rel="icon" href="{{ asset('assets/img/osis13.png ') }}" type="image/icon type" />
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Img Icon -->
    <link rel="icon" href="{{ asset('assets/img/osis13.png') }}" type="image/icon type" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-jurnal-detail.css') }}" />
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

    <!-- Navigation Text-->
    <div class="nav-text">
        <a href="/jurnal">JurnalOSIS</a> / <a href="/jurnal_detail/{{ $jurnal->id }}/detail">{{ $jurnal->judul }}</a>
    </div>

    <!-- hero -->
    <div class="container">
        <div class="card-detail">
            <h1>{{ $jurnal->judul }}</h1>
            <div class="card-desc">
                <i data-feather="pen-tool"></i>
                <p>{{ $jurnal->penulis }}</p>
                <i data-feather="clock" width="15px"></i>
                <p>{{ $jurnal->created_jurnal }}</p>
            </div>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <div class="card-img">
                <img src="/assets/berita/{{ $jurnal->pict }}" alt="" width="563" height="401">
            </div>
            <p>
                {{ $jurnal->deskripsi }}
            </p>
            <div class="btn-news">
                <a href="/jurnal">kembali</a>

            </div>

        </div>

        <!-- Other News -->
        <div class="card-other">
            <div class="btn-news-other">
                <a href="">POPULAR POST</a>
                @foreach ($data as $p)
                    <div class="card-other-list">
                        <img src="/assets/berita/{{ $p->pict }}" alt="" >
                        <div class="card-desc">
                            <p>{{ $p->clickbait }}</p>
                            <div class="card-description">
                                <i data-feather="clock" width="15px" color="grey"></i>
                                <p>{{ $p->created_jurnal }}</p>
                            </div>
                            <div class="btn-other-next">
                                <a href="/jurnal_detail/{{ $p->id }}/detail">Selengkapnya</a>
                
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="card-other-list">
                    <img src="assets/img/news2.png" alt="" >
                    <div class="card-desc">
                        <p>EXPAND23: Acara Perpisahan untuk Warga Angkatan 23</p>
                        <div class="card-description">
                            <i data-feather="clock" width="15px"  color="grey"></i>
                            <p>2 Februari 2023</p>
                        </div>
                        <div class="btn-other-next">
                            <a href="">Selengkapnya</a>
            
                        </div>
                    </div>
                </div>
                <div class="card-other-list">
                    <img src="assets/img/news2.png" alt="" >
                    <div class="card-desc">
                        <p>EXPAND23: Acara Perpisahan untuk Warga Angkatan 23</p>
                        <div class="card-description">
                            <i data-feather="clock" width="15px"  color="grey"></i>
                            <p>2 Februari 2023</p>
                        </div>
                        <div class="btn-other-next">
                            <a href="">Selengkapnya</a>
            
                        </div>
                    </div>
                </div>
                <div class="card-other-list">
                    <img src="assets/img/news2.png" alt="" >
                    <div class="card-desc">
                        <p>EXPAND23: Acara Perpisahan untuk Warga Angkatan 23</p>
                        <div class="card-description">
                            <i data-feather="clock" width="15px" color="grey"></i>
                            <p>2 Februari 2023</p>
                        </div>
                        <div class="btn-other-next">
                            <a href="">Selengkapnya</a>
            
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- bottom nav -->
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
  </body>
</html>
