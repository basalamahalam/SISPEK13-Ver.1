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
        <!-- Navigation Text-->
        <div style="margin-bottom: 30px">
            <h1 class="dash-title">UPDATE BERITA</h1>
            <!-- JUDUL -->
            <!-- LINK -->
            <a href="#" class="dash-title">Berita</a>
            /
            <a href="mpk.html" class="link-title">Update Berita</a>
        </div>

        <div class="top-card">
            <form action="/admin-update-berita/{{ $news->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-text">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" value="{{ $news->judul }}" required />
                    <label for="judul">
                        @error('judul')
                            {{ $message }}
                        @enderror
                    </label>
                </div>

                <div class="form-text">
                    <label for="deskripsi">Deskripsi</label><br>
                    <textarea id="deskripsi" name="deskripsi" required>{{ $news->deskripsi }}</textarea>
                    <label for="deskripsi">
                        @error('deskripsi')
                            {{ $message }}
                        @enderror
                    </label>
                </div>

                <div class="form-text">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="file-style" id="gambar" name="gambar" />
                    <label for="gambar">
                        <img src="/assets/berita/{{ $news->pict }}" alt="picture" width="100px">
                    </label>
                    <label for="pict">
                        @error('pict')
                            {{ $message }}
                        @enderror
                    </label>
                </div>

                <div class="btn-box" style="text-align: end">
                    <input type="submit" name="submit" value="Submit" class="btn-act">
                    <input type="reset" value="Reset" class="btn-act"
                        onclick="document.getElementById('judul').value = ''; document.getElementById('deskripsi').value = ''; document.getElementById('gambar').value = '';">
                </div>
            </form>
        </div>
    </main>
</div>
@endsection