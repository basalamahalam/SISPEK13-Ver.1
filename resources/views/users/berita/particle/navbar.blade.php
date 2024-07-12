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