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
            <h1 class="dash-title">UPDATE JURNAL</h1>
            <!-- JUDUL -->
            <!-- LINK -->
            <a href="/admin-jurnalosis" class="dash-title">Jurnal</a>
            /
            <a href="/admin-update-jurnal/{{ $jurnal->id }}/edit" class="link-title">Update Jurnal</a>
        </div>

        <div class="top-card">
            <form action="/admin-update-jurnal/{{ $jurnal->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-text">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" value="{{ $jurnal->judul }}" required />
                    @error('judul')
                        <label for="judul">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                </div>

                <div class="form-text">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" required>{{ $jurnal->deskripsi }}</textarea>
                    @error('deskripsi')
                        <label for="deskripsi">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                </div>

                <div class="form-text">
                    <label for="penulis">Penulis</label>
                    <input type="text" id="penulis" name="penulis" value="{{ $jurnal->penulis }}" required />
                    @error('penulis')
                        <label for="penulis">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                </div>

                <div class="form-text">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="file-style" id="gambar" name="gambar" />
                    <label for="gambar">
                        <img src="/assets/berita/{{ $jurnal->pict }}" alt="picture" width="100px">
                    </label>
                    @error('gambar')
                        <label for="gambar">
                            <span>
                                {{ $message }}
                            </span>
                        </label>
                    @enderror
                </div>

                <div class="btn-box" style="text-align: end">
                    <input type="submit" name="submit" value="Submit" class="btn-act">
                    <input type="reset" value="Reset" class="btn-act"
                        onclick="document.getElementById('judul').value = ''; document.getElementById('deskripsi').value = ''; document.getElementById('penulis').value = ''; document.getElementById('gambar').value = '';">
                </div>
            </form>
        </div>
    </main>
</div>
@endsection