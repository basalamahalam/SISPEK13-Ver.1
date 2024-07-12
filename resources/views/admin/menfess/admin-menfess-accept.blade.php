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
            @if ($dataPending->isNotEmpty())
                <form action="/admin-menfess/clearMenfess" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" name="submit" value="Delete All Data" class="btn-update">
                </form>
            @endif
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
                    @if ($checking->status === 2 || $checking->status === 1)
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
                            @if ($pendingParticle->status === 1 || $pendingParticle->status === 2)
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
                                        @if ($pendingParticle->status === 2)
                                            Accept
                                        @elseif ($pendingParticle->status === 1)
                                            Terbaik
                                        @endif
                                    </td>
                                    <td>
                                        @if ($pendingParticle->status === 2)
                                            Accept
                                        @elseif ($pendingParticle->status === 1)
                                            Terbaik
                                        @endif
                                    </td>
                                    <td class="btn-table">
                                        <form action="/admin-menfess-accept/delete/{{ $pendingParticle->id }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" name="submit" value="DELETE" class="btn-delete"><br>
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
                            <td>Unknown Accept</td>
                            <td>Unknown Accept</td>
                            <td>Unknown Accept</td>
                            <td>
                                Unknown Accept
                            </td>
                            <td>
                                Unknown Accept
                            </td>
                            <td class="btn-table">
                                Unknown Accept
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </main>
</div>
@endsection