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
            <h1 class="dash-title">PROFIL</h1>
            <!-- JUDUL -->
            <a href="{{ URL::to('/admin-osis') }}" class="dash-title">Profil</a>
            <!-- LINK -->
            /
            <a href="{{ URL::to('/admin-osis') }}" class="link-title">OSIS</a>
        </div>

        <div class="btn-box">
            <a href="{{ URL::to('/admin-osis') }}" class="btn-act">OSIS</a>
            <a href="{{ URL::to('/admin-mpk') }}" class="btn-act">MPK</a>
        </div>

        @if (session()->has('messageslert'))
            <div class="alert {{ session('class') }}">
                <p>{{ session('messageslert') }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Angkatan</th>
                        <th>VISI</th>
                        <th>MISI</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td><img src="{{ asset('/storage/' . $angkatan[0]->gambar_angkatan) }}" width="80px"></td>
                        <td>{{ $angkatan[0]->nama_angkatan }}</td>
                        <td>
                            {!! $angkatan[0]->visi_angkatan !!}
                        </td>
                        <td>
                            {!! $angkatan[0]->misi_angkatan !!}
                        </td>
                        <td class="btn-table">
                            <a href="{{ URL::to('admin-update-osis/' . $angkatan[0]->id_angkatan) }}"
                                class="btn-update">UPDATE</a><br /><br />
                            {{-- <a href="" class="btn-delete">DELETE</a> --}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Divisi</th>
                        <th>Koor Divisi</th>
                        <th>Jumlah Anggota</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach ($anggota as $profil)
                        <tr>

                            <td>{{ $i }}</td>
                            <td>{{ $profil->nama_divisi }}</td>
                            <td>{{ $profil->nama_anggota }}</td>
                            <td>{{ $profil->count }}</td>
                            <td class="btn-table">
                                <a href="{{ URL::to('/admin-update-divisi-osis/' . $profil->slug) }}"
                                    class="btn-update">UPDATE</a><br /><br />
                                {{-- <a href="#" class="btn-delete">DELETE</a><br /><br /> --}}
                                <a href="{{ URL::to('/admin-profil-divisi-osis/' . $profil->slug) }}"
                                    class="btn-act">MEMBER</a>
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