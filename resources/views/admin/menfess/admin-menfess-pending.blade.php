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
            <h1 class="dash-title">MENFESS</h1> <!-- JUDUL -->

            <!-- LINK -->
            <!-- <a href="#" class="dash-title">Profil</a>
                /
                <a href="#" class="link-title">OSIS</a> -->
        </div>

        <div class="btn-box">
            <a href="{{ URL::to('/admin-menfess-pending') }}" class="btn-act">Pending</a>
            <a href="{{ URL::to('/admin-menfess-accept') }}" class="btn-act">Accept</a>
            <a href="{{ URL::to('/admin-menfess-terbaik') }}" class="btn-act">Terbaik</a>
        </div>

        @if (session()->has('messageslert'))
            <div class="alert {{ session('class') }}">
                <p>{{ session('messageslert') }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table>
                @php
                    $num = 1;
                    $markData = false;
                @endphp
                @foreach ($dataPending as $checking)
                    @if ($checking->status === 0)
                        @php
                            $markData = true;
                        @endphp
                    @endif
                @endforeach
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dari</th>
                        <th>Untuk</th>
                        <th>Ucapan</th>
                        <th>Status</th>
                        <th>Terbaik</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($markData)
                        @foreach ($dataPending as $pendingParticle)
                            @if ($pendingParticle->status === 0)
                                <tr>
                                    <td>
                                        {{ $num }}.
                                        @php
                                            $num++;
                                            $markData = true;
                                        @endphp
                                    </td>
                                    <td>{{ $pendingParticle->from }}</td>
                                    <td>{{ $pendingParticle->to }}</td>
                                    <td>{{ $pendingParticle->message }}</td>
                                    <td>
                                        @if ($pendingParticle->status === 0)
                                            Pending
                                        @endif
                                    </td>
                                    <td>
                                        @if ($pendingParticle->status === 0)
                                            Pending
                                        @endif
                                    </td>
                                    <td class="btn-table">
                                        {{-- <a href="#" class="btn-update">ACCEPT</a><br> --}}
                                        <form action="/admin-menfess/accept/{{ $pendingParticle->id }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <input type="submit" name="submit" value="ACCEPT" class="btn-update"><br>
                                        </form>

                                        <form action="/admin-menfess/delete/{{ $pendingParticle->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" name="submit" value="DELETE" class="btn-delete"><br>
                                        </form>

                                        <form action="/admin-menfess/terbaik/{{ $pendingParticle->id }}"
                                            method="POST">
                                            @csrf
                                            @method('put')
                                            <input type="submit" name="submit" value="TERBAIK" class="btn-act"><br>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td>
                                N/A
                            </td>
                            <td>Unknown Pending</td>
                            <td>Unknown Pending</td>
                            <td>Unknown Pending</td>
                            <td>
                                Unknown Pending
                            </td>
                            <td>
                                Unknown Pending
                            </td>
                            <td class="btn-table">
                                Unknown Pending
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </main>
</div>
@endsection