<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="{{ url('templates/backend') }}/img/profile.png"
                    alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details">{{ Str::limit(Auth::user()->name, 16) }}<i
                            class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="{{ route('profile') }}"><i class="ti-user"></i>Profile</a>
                        <form id="logout-sidebar" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a style="cursor: pointer;" onclick="document.getElementById('logout-sidebar').submit()"><i
                                    class="ti-layout-sidebar-left"></i>Logout</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pcoded-navigation-label">Navigasi</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-tachometer-alt"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), ['visi.index']) ? 'active' : '' }}">
                <a href="{{ route('visi.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-check-square"></i><b>D</b></span>
                    <span class="pcoded-mtext">Visi & Misi</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), ['tujuan.index']) ? 'active' : '' }}">
                <a href="{{ route('tujuan.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-bullseye"></i><b>D</b></span>
                    <span class="pcoded-mtext">Tujuan & Sasaran</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigation-label">Perencanaan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ in_array(Route::currentRouteName(), ['renstra.index']) ? 'active' : '' }}">
                <a href="{{ route('renstra.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
                    <span class="pcoded-mtext" style="font-size: 13px">RENSTRA</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), ['renja.index']) ? 'active' : '' }}">
                <a href="{{ route('renja.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-table"></i><b>D</b></span>
                    <span class="pcoded-mtext" style="font-size: 13px">RKT/RENJA</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), ['iku.index']) ? 'active' : '' }}">
                <a href="{{ route('iku.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-chart-bar"></i><b>D</b></span>
                    <span class="pcoded-mtext" style="font-size: 13px">IKU</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), ['renaksi.index']) ? 'active' : '' }}">
                <a href="{{ route('renaksi.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-registered"></i><b>D</b></span>
                    <span class="pcoded-mtext" style="font-size: 13px">RENAKSI</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), ['laporan.index']) ? 'active' : '' }}">
                <a href="{{ route('laporan.index') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fas fa-file"></i><b>D</b></span>
                    <span class="pcoded-mtext" style="font-size: 13px">LAPORAN</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>