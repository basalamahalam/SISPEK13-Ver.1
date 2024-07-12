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
            <h1 class="dash-title">UPDATE DIVISI</h1> <!-- JUDUL -->
            <!-- LINK -->
            <a href="#" class="dash-title">Profil</a>
            /
            <a href="{{ URL::to('/admin-osis') }}" class="link-title">OSIS</a>
            /
            <a href="update-divisi-osis.html" class="link-title">{{ $divisi[0]->nama_divisi }}</a>
        </div>


        <div class="top-card">
            <form action="{{ URL::to('/admin-update-divisi-osis/' . $divisi[0]->slug) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-text">
                    <label for="gambar">Gambar</label>
                    @error('gambar_divisi')
                        <label for="gambar_divisi" style="color: red; font-size: 15px;">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                    <input type="hidden" name="oldImage" value="{{ $divisi[0]->gambar_divisi }}">
                    @if ($divisi[0]->gambar_divisi)
                        <img src="{{ asset('storage/' . $divisi[0]->gambar_divisi) }}" alt=""
                            class="img-priview img-fluid mb-3 col-sm-5" style="width: 200px; display:block">
                    @else
                        <img src="" alt="" class="img-priview img-fluid mb-3 col-sm-5">
                    @endif
                    {{-- <img src="" alt="" class="img-priview img-fluid mb-3 col-sm-5"> --}}
                    <input type="file" class="file-style" id="gambar" name="gambar_divisi"
                        onchange="priviewImage()">
                </div>

                <div class="form-text">
                    <label for="deskripsi">DESKRIPSI</label>
                    <textarea id="message" required name="deskripsi_divisi"
                        value="{{ old('deskripsi_divisi', $divisi[0]->deskripsi_divisi) }}">{{ old('deskripsi_divisi', $divisi[0]->deskripsi_divisi) }}</textarea>
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