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
            <h1 class="dash-title">UPDATE ANGGOTA</h1> <!-- JUDUL -->
            <!-- LINK -->
            <a href="#" class="dash-title">Profil</a>
            /
            <a href="{{ URL::to('/admin-osis') }}" class="link-title">OSIS</a>
            /
            <a href="{{ URL::to('/admin-profil-divisi-osis/' . $anggota[0]->slug) }}"
                class="link-title">{{ $anggota[0]->nama_divisi }}</a>
            /
            <a href="#" class="link-title">{{ $anggota[0]->nama_anggota }}</a>
        </div>


        <div class="top-card">
            <form action="{{ URL::to('/admin-update-anggota-divisi-osis/' . $anggota[0]->id_anggota) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id_organisasi" value="{{ $anggota[0]->id_organisasi }}">
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
                    <input type="hidden" name="oldImage" value="{{ $anggota[0]->gambar_anggota }}">
                    @if ($anggota[0]->gambar_anggota)
                        <img src="{{ asset('storage/' . $anggota[0]->gambar_anggota) }}" alt=""
                            class="img-priview img-fluid mb-3 col-sm-5" style="width: 200px; display:block">
                    @else
                        <img src="" alt="" class="img-priview img-fluid mb-3 col-sm-5">
                    @endif
                    {{-- <img src="" alt="" class="img-priview img-fluid mb-3 col-sm-5"> --}}
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
                    <input type="text" id="name" name="nama_anggota" required
                        value="{{ old('nama_anggota', $anggota[0]->nama_anggota) }}">
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
                                @if (old('id_jabatan', $anggota[0]->id_jabatan))
                                    <option value="{{ $item->id_jabatan }}" selected>{{ $item->nama_jabatan }}
                                    </option>
                                @else
                                    <option value="{{ $item->id_jabatan }}">{{ $item->nama_jabatan }}</option>
                                @endif
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
                                @if (old('id_kelas', $anggota[0]->id_kelas))
                                    <option value="{{ $item->id_kelas }}" selected>{{ $item->nama_kelas }}</option>
                                @else
                                    <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
                                @endif
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
                        value="{{ old('instagram_anggota', $anggota[0]->instagram_anggota) }}">
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