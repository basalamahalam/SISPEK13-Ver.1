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
                <h1 class="dash-title">TAMBAH BERITA</h1>
                <!-- JUDUL -->
                <!-- LINK -->
                <a href="/admin-berita" class="dash-title">Berita</a>
                /
                <a href="/admin-tambahberita" class="link-title">Tambah Berita</a>
            </div>
            <div class="top-card">
                <form action="/admin-tambahberita/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-text">
                        <label for="judul">Judul</label>
                        @error('judul')
                            <label for="judul" style="color: red; font-size: 15px;">
                                <span>
                                    {{ $message }}
                                </span>
                            </label>
                        @enderror
                        <input type="text" id="judul" name="judul" required />
                    </div>

                    <div class="form-text">
                        <label for="deskripsi">Deskripsi</label>
                        @error('deskripsi')
                            <label for="deskripsi" style="color: red; font-size: 15px;">
                                <span>
                                    {{ $message }}
                                </span>
                            </label>
                        @enderror
                        <textarea id="deskripsi" name="deskripsi" required></textarea>
                    </div>

                    <div class="form-text">
                        <label for="gambar">Gambar</label>
                        @error('gambar')
                            <label for="gambar" style="color: red; font-size: 15px;">
                                <span>
                                    {{ $message }}
                                </span>
                            </label>
                        @enderror
                        <input type="file" class="file-style" id="gambar" name="gambar" />
                    </div>

                    <div class="btn-box" style="text-align: end">
                        <input type="submit" name="submit" value="Submit" class="btn-act">
                        <input type="reset" value="Reset" class="btn-act"
                            onclick="document.getElementById('judul').reset(); document.getElementById('deskripsi').value = null; document.getElementById('gambar').value = '';">
                        {{-- <a href="#" class="btn-act">Reset</a> --}}
                        {{-- <a href="#" class="btn-act">Submit</a> --}}
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection
