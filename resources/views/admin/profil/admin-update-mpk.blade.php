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
            <h1 class="dash-title">UPDATE VISI MISI</h1> <!-- JUDUL -->
            <!-- LINK -->
            <a href="#" class="dash-title">Profil</a>
            /
            <a href="{{ URL::to('/admin-mpk') }}" class="link-title">MPK</a>
            /
            <a href="#" class="link-title">UpdateVisiMisi</a>
        </div>


        <div class="top-card">
            <form action="{{ URL::to('/admin-update-mpk/' . $angkatan[0]->id_angkatan) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-text">
                    <label for="gambar">Gambar</label>
                    @error('gambar_angkatan')
                        <label for="gambar_angkatan" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <input type="hidden" name="oldImage" value="{{ $angkatan[0]->gambar_angkatan }}">
                    @if ($angkatan[0]->gambar_angkatan)
                        <img src="{{ asset('storage/' . $angkatan[0]->gambar_angkatan) }}" alt=""
                            class="img-priview img-fluid mb-3 col-sm-5" style="width: 200px; display:block">
                    @else
                        <img src="" alt="" class="img-priview img-fluid mb-3 col-sm-5">
                    @endif
                    {{-- <img src="" alt="" class="img-priview img-fluid mb-3 col-sm-5"> --}}
                    <input type="file" class="file-style" id="gambar" name="gambar_angkatan"
                        onchange="priviewImage()">
                </div>

                <div class="form-text">
                    <label for="nama-angkatan">Nama Angkatan</label>
                    @error('nama_angkatan')
                        <label for="nama_angkatan" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <input type="text" id="nama-angkatan" name="nama_angkatan" required
                        value="{{ old('nama_angkatan', $angkatan[0]->nama_angkatan) }}">
                </div>

                <div class="form-text">
                    <label for="visi">VISI</label>
                    @error('visi_angkatan')
                        <label for="visi_angkatan" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <textarea id="message" required name="visi_angkatan" value="{{ old('visi_angkatan', $angkatan[0]->visi_angkatan) }}">{{ old('visi_angkatan', $angkatan[0]->visi_angkatan) }}</textarea>
                </div>

                <div class="form-text">
                    <label for="misi">MISI</label>
                    @error('misi_angkatan')
                        <label for="misi_angkatan" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <textarea id="message" required name="misi_angkatan" value="{{ old('misi_angkatan', $angkatan[0]->misi_angkatan) }}">{{ old('misi_angkatan', $angkatan[0]->misi_angkatan) }}</textarea>
                </div>
                <div class="btn-box" style="text-align: end;">
                    <a href="#" class="btn-act">RESET</a>
                    <button type="submit" class="btn-act">SUBMIT</button>
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