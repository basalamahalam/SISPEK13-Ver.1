<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="icon" href="assets/logoOSIS.png" type="image/icon type">
    <link rel="stylesheet" href="assets/css/signup_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="{{ URL::to('/') }}">
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
                    <a href="{{ URL::to('/admin-osis') }}">KONTAK</a>
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

    <section class="one">
        <div class="top-card">
            <h1 class="top-card-title">FORM PENDAFTARAN</h1>
            <h4>Calon Pengurus OSIS & MPK</h4>
            <hr style="height:2px;border-width:5;color:black;background-color: black">
            <form action="/signup/store" method="POST" id="form" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <label for="pilih" class="title">Pendaftaran</label>
                    <div class="radio-form">
                        <div class="radio-first">
                            <input type="radio" id="osis" name="pilih" value="OSIS">
                            <label for="osis">OSIS</label> 
                            
                        </div>
                        <div class="radio-second">
                            <input type="radio" id="mpk" name="pilih" value="MPK">
                            {{-- checked --}}
                            <label for="mpk">MPK</label><br>
                        </div>
                        @error('pilih')
                            <label for="">
                                {{ $message }}
                            </label>
                        @enderror
                    </div>
                </div>
                
                <div class="for">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    @error('email')
                        <label for="">
                            {{ $message }}
                        </label>
                    @enderror
                </div>
                
                <div class="for" id="typetext-one">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required>
                    @error('nama')
                        <label for="">
                            {{ $message }}
                        </label>
                    @enderror
                </div>
                
                <div class="dropdown-form">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" id="kelas">
                            <option value="" disabled selected>Pilih</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                    </select>
                    @error('kelas')
                        <label for="">
                            {{ $message }}
                        </label>
                    @enderror
                </div>

                <div class="form">
                    <label for="gender" class="title">Jenis Kelamin</label>
                    <div class="radio-form-gender">
                        <div class="radio-first">
                            <input type="radio" id="male" name="gender" value="Laki - Laki">
                            <label for="male">Laki-laki</label> 
                            
                        </div>
                        <div class="radio-second">
                            <input type="radio" id="female" name="gender" value="Perempuan">
                            <label for="female">Perempuan</label><br>
                        </div>
                        @error('gender')
                            <label for="">
                                {{ $message }}
                            </label>
                        @enderror
                    </div>
                </div>
                
                <div class="for" id="typetext-two">
                    <label for="nowa">No WA</label>
                    <input type="text" id="nowa" name="nowa" required>
                    @error('nowa')
                        <label for="">
                            {{ $message }}
                        </label>
                    @enderror
                </div>

                <div class="upload">
                    <label for="img">Foto 3x4</label>
                    <input type="file" required name="pict" id="pict">
                    @error('pict')
                        <label for="">
                            {{ $message }}
                        </label>
                    @enderror
                </div>

                <div class="say">
                    <label for="about">Apa yang kamu ketahui tentang OSIS & MPK</label>
                    <textarea id="about" name="about" id="about" required></textarea>
                    @error('about')
                        <label for="">
                            {{ $message }}
                        </label>
                    @enderror
                </div>

                <div class="say">
                    <label for="reason">Alasan Ingin Bergabung OSIS / MPK</label>
                    <textarea id="reason" name="reason" id="reason" required></textarea>
                    @error('reason')
                        <label for="">
                            {{ $message }}
                        </label>
                    @enderror
                </div>
                
                <div class="desc-form">
                    <p>Dengan mengisi Formulir Pendaftaran Pengurus OSIS ini, maka saya secara sadar dan tanpa paksaan dari pihak manapun, serta atas sepengetahuan dan izin dari orang tua/wali murid untuk mengikuti Pendaftaran Pengurus OSIS Masa Bhakti 2019-2020.</p>
                </div>

                <!-- <input type="radio" id="osis" name="pilih" value="OSIS">
                <label for="osis">OSIS</label>  -->
                <div class="btn-box">
                    <input type="submit" name="submit" value="Submit" id="submit" class="btn-send">
                    <input type="reset" name="reset" value="Reset" id="reset" class="btn-send">
                    {{-- <a href="#" class="btn-send">Reset</a>
                    <a href="#" class="btn-send">Submit</a> --}}
                    
                </div>
            </form>
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
            <p>Website by SISPEK 13 & PROKON 6</p>
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