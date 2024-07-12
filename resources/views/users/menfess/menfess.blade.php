@extends('users.menfess.particle.header')

@section('')
<section class="one">
    <div class="top-card">
        <h1 class="top-card-title">Menfess SMKN 13 Bandung</h1>
        <hr style="height:2px;border-width:5;color:black;background-color: black">
        <p class="top-card-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum fuga iure maxime
            explicabo qui iste dolorem adipisci quisquam, cum, natus minima repellendus rem enim nesciunt dolores
            cupiditate nostrum obcaecati mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga
            cupiditate rem, numquam praesentium culpa, similique quas odio accusamus aliquid ipsa porro in sed
            mollitia facilis provident maiores libero possimus.</p>
        <div class="btn-box">
            <a href="{{ URL::to('form_menfess') }}" class="btn-send">Kirim Menfess</a>
        </div>
    </div>

</section>

<section class="two">
    <h1>KIRIMAN MENFESS</h1>
    <h2>Siswa SMKN 13 Bandung</h2>
</section>
@if ($data->isNotEmpty())
    @php
        $month = Carbon\Carbon::parse($data[0]->submit_at)->format('m');
        $monthSelected = null;
    @endphp
@endif


<section class="third">
    <div class="accordion">
        <div class="content-box">
            <div class="label">
                Menfess Bulan Ini
            </div>
            @foreach ($data as $menfessParticle)
                <div class="content">
                    <p>From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $menfessParticle->from }}</p>
                    <p>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $menfessParticle->to }}
                    </p>
                    <p>Message &nbsp;&nbsp;: {{ $menfessParticle->message }}</p>
                </div>
            @endforeach
            @if ($data->isEmpty())
                <div class="content">
                    Data Menfess Bulan ini Tidak Ada
                </div>
            @endif
        </div>
        <div class="content-box">
            <div class="label">
                Menfess Terbaik Bulan Ini
            </div>
            @foreach ($data as $menfessParticle)
                @if ($menfessParticle->status === 1)
                    <div class="content">
                        <p>From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $menfessParticle->from }}</p>
                        <p>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $menfessParticle->to }}
                        </p>
                        <p>Message &nbsp;&nbsp;: {{ $menfessParticle->message }}</p>
                    </div>
                @endif
            @endforeach
            @if ($data->isEmpty())
                <div class="content">
                    Data Menfess Terbaik Bulan ini Tidak Ada
                </div>
            @endif
        </div>
    </div>

</section>
@endsection