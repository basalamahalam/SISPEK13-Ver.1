<input type="checkbox" id="sidebar-toggle" />
<div class="sidebar">
    <div class="sidebar-header">
        <label for="sidebar-toggle" class="ti-menu-alt"></label>
    </div>

    <div class="sidebar-logo">
        <a href="{{ URL::to('/admin-osis') }}"><img src="{{ asset('assets/logoOSIS.png') }}" width="80px" /></a>
        <h2>SISPEK13</h2>
        <h6>Halaman Admin</h6>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li class="highlight">
                <a href="{{ URL::to('/admin-osis') }}">
                    <span class="ti-user"></span>
                    <span>PROFIL</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin-menfess') }}">
                    <span class="ti-email"></span>
                    <span>MENFESS</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin-berita') }}">
                    <span class="ti-files"></span>
                    <span>BERITA</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin-pendaftaran-osis') }}">
                    <span class="ti-id-badge"></span>
                    <span>PENDAFTARAN</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin-jurnalosis') }}">
                    <span class="ti-agenda"></span>
                    <span>JURNAL OSIS</span>
                </a>
            </li>
            @php
                $flagOut = 0;
            @endphp
            <li>
                <a href="#logout">
                    @php
                        $flagOut = 1;
                    @endphp
                    <span class="ti-shift-left"></span>
                    <span>LOG OUT</span>
                </a>
            </li>
        </ul>
    </div>

    @if ($flagOut === 1)
        <div id="logout" class="overlay" style="display: block;">
            <div class="popup">
                <h2>LOG OUT?</h2>
                <a class="close" href="/{{ Request::path() }}">&times;
                    @php
                        $flagOut = 0;
                    @endphp
                </a>
                <div class="content">
                    Apakah anda yakin untuk log out?
                </div>
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn-delete btn-end" style="color: white;">
                            <span style="font-size: 17px;">Log Out</span>
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    @endif

    <div class="sidebar-maker">
        <h5>Website by:</h5>
        <a href="#"><img src="{{ asset('assets/logo-best.png') }}" class="logo" /></a>
    </div>
</div>
