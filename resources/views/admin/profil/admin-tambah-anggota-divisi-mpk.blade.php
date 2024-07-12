@extends('admin.particle.header')

@section('')
<div class="main-content">
    <header>
        <div class="profile">
            @auth
                <div>
                    <h3>Halo, {{ auth()->user()->name }}</h3>
                </div>
            @endauth
        </div>
    </header>

    <main>
        <div>
            <h1 class="dash-title">TAMBAH ANGGOTA</h1> <!-- JUDUL -->
            <!-- LINK -->
            <a href="#" class="dash-title">Profil</a>
            /
            <a href="{{ URL::to('/admin-mpk') }}" class="link-title">MPK</a>
            /
            <a href="{{ URL::to('/admin-profil-divisi-mpk/' . $anggota[0]->slug) }}"
                class="link-title">{{ $anggota[0]->nama_divisi }}</a>
        </div>


        <div class="top-card">
            <form action="{{ URL::to('/admin-tambah-anggota-divisi-mpk') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_organisasi" value="{{ $anggota[0]->id_organisasi }}">
                <input type="hidden" name="id_angkatan" value="{{ $anggota[0]->id_angkatan }}">
                <input type="hidden" name="id_divisi" value="{{ $anggota[0]->id_divisi }}">
                <div class="form-text">
                    <label for="gambar">Gambar</label>
                    @error('gambar_anggota')
                        <label for="gambar_anggota" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <img src="" alt="" class="img-priview img-fluid mb-3 col-sm-5">
                    <input type="file" class="file-style" id="gambar" name="gambar_anggota"
                        onchange="priviewImage()">
                </div>

                <div class="form-text">
                    <label for="name">Nama</label>
                    @error('nama_anggota')
                        <label for="nama_anggota" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <input type="text" id="name" name="nama_anggota" required value="{{ old('nama_anggota') }}">
                </div>

                <div class="form-text">
                    <label for="jabatan">Jabatan</label>
                    @error('id_jabatan')
                        <label for="id_jabatan" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <div class="select">
                        <select id="jabatan" name="id_jabatan">

                            <option selected disabled style="display: none;">PILIH</option>
                            {{-- pilih dengan memanggil $jabatan --}}
                            @foreach ($jabatan as $item)
                                <option value="{{ $item->id_jabatan }}">{{ $item->nama_jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-text">
                    <label for="kelas">Kelas</label>
                    @error('id_kelas')
                        <label for="id_kelas" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <div class="select">
                        <select id="kelas" name="id_kelas">
                            <option selected disabled style="display: none;">PILIH</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-text">
                    <label for="instagram">Instagram</label>
                    @error('instagram_anggota')
                        <label for="instagram_anggota" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <input type="text" id="instagram" name="instagram_anggota" required
                        value="{{ old('instagram_anggota') }}">
                </div>
                <div class="btn-box" style="text-align: end;">
                    <a href="#" class="btn-act">RESET</a>
                    <button type="submit" class="btn-act">SUBMIT</button>
                    {{-- <a href="#" class="btn-act">SUBMIT</a> --}}
                </div>
            </form>

        </div>



    </main>
</div>
<script>
    function priviewImage() {
        const gambar = document.querySelector('#gambar');
        const imgPriview = document.querySelector('.img-priview');

        //resize imgae style smaller
        imgPriview.style.width = '200px';


        imgPriview.style.display = 'block';
        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPriview.src = e.target.result;
        }
    }
</script>
@endsection