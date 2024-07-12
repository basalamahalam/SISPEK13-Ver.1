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
            <h1 class="dash-title">PROFIL</h1> <!-- JUDUL -->

            <!-- LINK -->
            <a href="#" class="dash-title">Profil</a>
            /
            <a href="{{ URL::to('/admin-mpk') }}" class="link-title">MPK</a>
            /
            <a href="#" class="link-title">{{ $anggota[0]->nama_divisi }}</a>
        </div>

        @if (session()->has('messageslert'))
            <div class="alert {{ session('class') }}">
                <p>{{ session('messageslert') }}</p>
            </div>
        @endif

        <div class="btn-box">
            <a href="{{ URL::to('/admin-tambah-anggota-divisi-mpk/' . $anggota[0]->slug) }}" class="btn-act">Tambah
                Anggota</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Kelas</th>
                        <th>Instagram</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($anggota as $profil)
                        <tr>
                            <td>{{ $i }}</td>
                            <td><img src="{{ asset('storage/' . $profil->gambar_anggota) }}" width="80px"></td>
                            <td>{{ $profil->nama_anggota }}</td>
                            <td>{{ $profil->nama_jabatan }}</td>
                            <td>{{ $profil->nama_kelas }}</td>
                            <td>{{ $profil->instagram_anggota }}</td>
                            <td class="btn-table">
                                <a href="{{ URL::to('/admin-update-anggota-divisi-mpk/' . $profil->id_anggota) }}"
                                    class="btn-update">UPDATE</a><br><br>

                                <form action="/admin-profil-divisi-mpk/{{ $profil->id_anggota }}" method="POST"
                                    class="d-inline" style="margin-top
                                        : -3px">
                                    @method('DELETE')
                                    @csrf
                                    {{-- button delete --}}
                                    <button class="btn btn-delete border-0"
                                        onclick="return confirm('are you sure?')">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        @php($i = $i + 1)
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
</div>
@endsection