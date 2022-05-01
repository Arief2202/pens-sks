<nav class="sidebar {{Auth::user()->openSideBar == '0' ? 'close' : ''}}">
    <header>
        <div class="image-text">
            <span class="image">
            <img class="fotoProfil" alt="Foto Profil">
            {{-- <img src="http://sks-pens.site/img/sidebar/{{Auth::user()->darkMode == '1' ? 'dark.png' : 'light.png'}}" alt=""> --}}
        </span>

            <div class="text logo-text">
                <span class="name">{{ Auth::user()->alias }}</span>
                <span class="profession">
                    {{Auth::user()->role == 1 ? 'Kaprodi' : ''}}
                    {{Auth::user()->role == 2 ? 'Dosen' : ''}}
                    {{Auth::user()->role != 1 && Auth::user()->role != 2 ? 'Unknown' : ''}}
                </span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            {{-- <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li> --}}
            <ul class="menu-links">
                <li class="nav-link {{Request::segment(1) == 'dashboard'? 'active' : ''}}" >
                    <a href="/dashboard">
                        <i class='bx bx-chart icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                    
                </li>

                <li class="nav-link {{Request::segment(1) == 'dosen'? 'active' : ''}}">
                    <a href="/dosen">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Dosen</span>
                    </a>
                </li>

                <li class="nav-link {{Request::segment(1) == 'dosen'? 'active' : ''}}">
                    <a href="/dosen/status">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Status Dosen</span>
                    </a>
                </li>

                <li class="nav-link {{Request::segment(1) == 'bidangKeahlian'? 'active' : ''}}">
                    <a href="/bidangKeahlian">
                        <i class='bx icon bx-briefcase'></i>
                        <span class="text nav-text">Bidang Keahlian</span>
                    </a>
                </li>

                {{-- <li class="nav-link {{Request::segment(1) == 'mataKuliah'? 'active' : ''}}">
                    <a href="/mataKuliah">
                        <i class='bx bx-book icon'></i>
                        <span class="text nav-text">Mata Kuliah</span>
                    </a>
                </li> --}}

                {{-- <li class="nav-link {{Request::segment(1) == 'kurikulum'? 'active' : ''}}">
                    <a href="/kurikulum">
                        <i class='bx bx-bookmark-alt-minus icon'></i>
                        <span class="text nav-text">Nama Kurikulum</span>
                    </a>
                </li> --}}

                <li class="nav-link {{Request::segment(1) == 'mataKuliah'? 'active' : ''}}">
                    <a href="/mataKuliah">
                        <i class='bx icon bx-briefcase'></i>
                        <span class="text nav-text">Mata Kuliah</span>
                    </a>
                </li>

                {{-- <li class="treeview">
                    <a href="#"><i class="fa fa-key"></i> <span>Kurikulum</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                      <li>
                        <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/kurikulum') }}"><span>Nama</span></a>
                      </li>
                      <li>
                        <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/paketKurikulum') }}"><span>Paket</span></a>
                      </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-group"></i>Kurikulum</a> --}}
                    {{-- <ul class="nav-dropdown-items"> --}}
                        <li class="nav-link {{Request::segment(1) == 'kurikulum'? 'active' : ''}}">
                            <a href="/kurikulum">
                                <i class='bx icon bx-briefcase'></i>
                                <span class="text nav-text">Nama</span>
                            </a>
                        </li>
                        <li class="nav-link {{Request::segment(1) == 'paketKurikulum'? 'active' : ''}}">
                            <a href="/paketKurikulum">
                                <i class='bx bx-package icon'></i>
                                <span class="text nav-text">Paket</span>
                            </a>
                        </li>
                    {{-- </ul> --}}
                {{-- </li> --}}

                
                

                {{-- <li class="nav-link {{Request::segment(1) == 'kelas'? 'active' : ''}}">
                    <a href="/kelas">
                        <i class='bx bx-door-open icon'></i>
                        <span class="text nav-text">Kelas</span>
                    </a>
                </li> --}}
                <li class="nav-link {{Request::segment(2) == 'mengajar'? 'active' : ''}}">
                    <a href="/kelas/mengajar">
                        <i class='bx bx-chalkboard icon '></i>
                        <span class="text nav-text">Mengajar</span>
                    </a>
                </li>

                {{-- <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Wallets</span>
                    </a>
                </li> --}}

            </ul>
        </div>

        <div class="bottom-content">
            <li class="">                        
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </x-responsive-nav-link>
                    
                </form>
            
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>

        </div>
    </div>

</nav>