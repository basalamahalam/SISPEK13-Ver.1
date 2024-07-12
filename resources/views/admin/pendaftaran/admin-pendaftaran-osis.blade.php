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
            <h1 class="dash-title">PENDAFTARAN</h1> <!-- JUDUL -->

            <!-- LINK -->
            <a href="{{ URL::to('/admin-pendaftaran-osis') }}" class="dash-title">Pendaftaran</a>
            /
            <a href="{{ URL::to('/admin-pendaftaran-osis') }}" class="link-title">OSIS</a>
        </div>

        <div class="btn-box">
            <a href="{{ URL::to('/admin-pendaftaran-osis') }}" class="btn-act">OSIS</a>
            <a href="{{ URL::to('/admin-pendaftaran-mpk') }}" class="btn-act">MPK</a>
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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @if ($signOsis->isNotEmpty())
                        @foreach ($signOsis as $sign)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><img src="/assets/berita/{{ $sign->pict_personal }}" width="80px"></td>
                                <td>{{ $sign->nama }}</td>
                                <td>{{ $sign->kelas }}</td>
                                <td>{{ $sign->gender }}</td>
                                <td class="btn-table">
                                    <form action="/admin-pendaftaran-osis/{{ $sign->id }}" method="POST">
                                        <a href="/admin-pendaftaran-osis-detail/{{ $sign->id }}/detail-/{{ $sign->pendaftaran }}/{{ $sign->nama }}"
                                            class="btn-act">DETAIL</a>
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn-delete" type="submit"
                                            onclick="return confirm('Are you sure want to delete ?')">DELETE</button>
                                        {{-- @method('delete') --}}
                                    </form>
                                    {{-- <a href="#" class="btn-delete">DELETE</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>N/A</td>
                            <td>Unknown</td>
                            <td>Unknown</td>
                            <td>Unknown</td>
                            <td>Unknown</td>
                            <td class="btn-table">
                                Unknown
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </main>
</div>
@endsection