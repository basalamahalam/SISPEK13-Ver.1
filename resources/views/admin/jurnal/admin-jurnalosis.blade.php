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
            <h1 class="dash-title">JURNAL OSIS</h1>
        </div>

        <div class="btn-box">
            <a href="{{ URL::to('/admin-tambahjurnal') }}" class="btn-act">Tambah Jurnal Osis</a>
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
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Penulis</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($dataJurnal->isNotEmpty())
                        @foreach ($dataJurnal as $jurnal)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $jurnal->judul }}</td>
                                <td>
                                    {{ Str::limit($jurnal->deskripsi, 35) }}
                                </td>
                                <td>{{ $jurnal->penulis }}</td>
                                <td><img src="assets/berita/{{ $jurnal->pict }}" width="80px" /></td>
                                <td>{{ $jurnal->created_jurnal }}</td>
                                <td class="btn-table">
                                    <form action="/admin-jurnalosis/{{ $jurnal->id }}/{{ $jurnal->slug }}"
                                        method="POST">
                                        <a href="/admin-update-jurnal/{{ $jurnal->id }}/edit"
                                            class="btn-update">UPDATE</a><br /><br />

                                        @method('DELETE')
                                        @csrf
                                        <button class="btn-delete" type="submit"
                                            onclick="return confirm('Are you sure want to delete ?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>N/A</td>
                            <td>Unknown</td>
                            <td>
                                Unknown
                            </td>
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
        <div class="pagination">
            <div class="pag">
                {!! $dataJurnal->links() !!}
            </div>
        </div>
    </main>
</div>
@endsection