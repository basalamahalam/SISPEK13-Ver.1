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
            <h1 class="dash-title">BERITA</h1>
        </div>

        <div class="btn-box">
            <a href="{{ URL::to('/admin-tambahberita') }}" class="btn-act">Tambah Berita</a>
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
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($dataNews->isNotEmpty())
                        @foreach ($dataNews as $news)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $news->judul }}</td>
                                <td>
                                    {{ Str::limit($news->deskripsi, 35) }}
                                </td>
                                <td>
                                    <img src="assets/berita/{{ $news->pict }}" width="80px" />
                                </td>
                                <td>{{ $news->created_news }}</td>
                                <td class="btn-table">

                                    <form action="/admin-berita/{{ $news->id }}/{{ $news->slug }}" method="POST">
                                        <a href="/admin-update-berita/{{ $news->id }}/edit"
                                            class="btn-update">UPDATE</a>
                                        <br /><br />
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn-delete" type="submit"
                                            onclick="return confirm('Are you sure want to delete ?')">DELETE</button>
                                        {{-- @method('delete') --}}
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
                {!! $dataNews->links() !!}
            </div>
        </div>
    </main>
</div>
@endsection