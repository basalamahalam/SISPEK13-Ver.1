<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISPEK13 | OSIS</title>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Img Icon -->
    <link rel="icon" href="assets/img/osis13.png" type="image/icon type" />

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style-osis.css" />
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
      <!-- Hero section start -->
      <div class="text-box">
        <img src="assets/img/osis13.png" alt="Logo OSIS" width="80px" />
        <h1>OSIS SMKN 13 BANDUNG</h1>
        <p>Organisasi Siswa Intra Sekolah</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#d9d9d9"
            fill-opacity="1"
            d="M0,224L60,229.3C120,235,240,245,360,229.3C480,213,600,171,720,170.7C840,171,960,213,1080,213.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
          ></path>
        </svg>
      </div>
    </section>
    <section class="one">
      <div class="topcard">
        <img src="assets/img/osis13.png" alt="Logo osis13" />
        <h3>{{ $osis[0]->nama_angkatan }}</h3>
      </div>

      <div class="left-card">
        <div class="card-left-container">
          <h1>VISI</h1>
          <p>
            {{ $osis[0]->visi_angkatan }}
          </p>
        </div>
        <div class="card-left-container">
          <h1>MISI</h1>
          <p>
            {!! $osis[0]->misi_angkatan !!}
          </p>
          
        </div>
      </div>
    </section>

    <section class="two">
      <div class="card">
        <h1>STRUKTUR ORGANISASI</h1>
        <h2>OSIS SBAP</h2>
        <hr
          style="
            height: 2px;
            border-width: 5;
            color: gray;
            background-color: gray;
          "
        />
        <div class="cards">
          <div class="card-top">
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="{{asset('storage/'. $osis[0]->gambar_anggota)}}" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="profil-divisi/{{ $osis[0]->nama_organisasi }}/{{ $osis[0]->slug }}" class="next">{{ $osis[0]->nama_jabatan }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-middle">
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="{{asset('storage/'. $osis[3]->gambar_anggota)}}" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="profil-divisi/{{ $osis[3]->nama_organisasi }}/{{ $osis[3]->slug }}" class="next">{{ $osis[3]->nama_divisi }}</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="{{asset('storage/'. $osis[4]->gambar_anggota)}}" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="profil-divisi/{{ $osis[4]->nama_organisasi }}/{{ $osis[4]->slug }}" class="next">{{ $osis[4]->nama_divisi }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @php
            $count = 0;
          @endphp
          <div class="card-bottom-up">
            @foreach ($osis as $particle)
            {{-- Selain ketua, sekre, bendahara --}}
              @if ($count > 4) 
              <div class="card-bg">
                <div class="card-anggota">
                  <img src="assets/img/back-card.png" alt="bek" />
                  <img src="{{asset('storage/'. $particle->gambar_anggota)}}" alt="{{ $particle->nama_divisi }}" />
                  <div class="image-stack">
                    <img src="assets/img/front-card.png" alt="pront" />
                    <div class="button-card">
                      <a href="profil-divisi/{{ $particle->nama_organisasi }}/{{ $particle->slug }}" class="next">{{ $particle->nama_divisi }}</a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
              @php
                $count++
              @endphp
              {{-- {{ $count++ }} --}}
            @endforeach
            {{-- <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 2</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 3</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 4</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 5</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 6</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 7</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 8</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 9</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-bg">
              <div class="card-anggota">
                <img src="assets/img/back-card.png" alt="bek" />
                <img src="assets/img/ketua-mpk.png" alt="Ketua MPK" />
                <div class="image-stack">
                  <img src="assets/img/front-card.png" alt="pront" />
                  <div class="button-card">
                    <a href="#" class="next">SEKBID 10</a>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
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
            if(document.documentElement.scrollTop > 20) {
                nav.classList.add('sticky');
            }else {
                nav.classList.remove('sticky');
            }
        })
    </script>
  </body>
</html>