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
            <a href="/admin-pendaftaran-osis" class="dash-title">Pendaftaran</a>
            /
            <a href="{{ URL::to('/admin-pendaftaran-osis') }}" class="link-title">OSIS</a>
            /
            <a href="/admin-pendaftaran-osis-detail/{{ $detail->id }}/detail-/{{ $detail->pendaftaran }}/{{ $detail->nama }}"
                class="link-title">{{ $detail->nama }}</a>
        </div>

        @if (session()->has('messageslert'))
            <div class="alert {{ session('class') }}">
                <p>{{ session('messageslert') }}</p>
            </div>
        @endif

        <div class="card-detail">
            <div class="row-detail">
                <img src="/assets/berita/{{ $detail->pict_personal }}" class="img-detail">
                <div class="col-detail">
                    <h3>Nama : {{ $detail->nama }}</h3>
                    <h3>Kelas : {{ $detail->kelas }}</h3>
                    <h3>Jenis Kelamin : {{ $detail->gender }}</h3>
                    <h3>No WA : {{ $detail->contact }}</h3>
                    <h3>Apa yang kamu ketahui tentang OSIS & MPK :</h3>
                    <div>
                        <p>{{ $detail->about }}</p>
                    </div>
                    <h3>Alasan ingin bergabung OSIS / MPK :</h3>
                    <div>
                        <p>
                            {{ $detail->reason }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="btn-box" style="text-align: end;">
            <a href="/admin-pendaftaran-osis-detail/{{ $detail->id }}/detail-/{{ $detail->pendaftaran }}/{{ $detail->nama }}/pdf"
                class="btn-act">DOWNLOAD PDF</a>
            <a href="{{ URL::to('/admin-pendaftaran-osis') }}" class="btn-act">KEMBALI</a>
        </div>

    </main>
</div>
@endsection