<nav class="sidebar {{Auth::user()->openSideBar == '0' ? 'close' : ''}}">
    <header>
        <div class="image-text">
            <span class="image">
            <img src="img/sidebar/profile.png" alt="">
        </span>

            <div class="text logo-text">
                <span class="name">{{ Auth::user()->nama }}</span>
                <span class="profession">Fullstack Developer</span>
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
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-link {{Request::segment(1) == 'bidangKeahlian'? 'active' : ''}}">
                    <a href="/bidangKeahlian">
                        <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <span class="text nav-text">Bidang Keahlian</span>
                    </a>
                </li>

                <li class="nav-link {{Request::segment(1) == 'mataKuliah'? 'active' : ''}}">
                    <a href="/mataKuliah">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">Mata Kuliah</span>
                    </a>
                </li>

                <li class="nav-link {{Request::segment(1) == 'paketKurikulum'? 'active' : ''}}">
                    <a href="/paketKurikulum">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        <span class="text nav-text">Paket Kurikulum</span>
                    </a>
                </li>

                <li class="nav-link {{Request::segment(1) == 'kelas'? 'active' : ''}}">
                    <a href="/kelas">
                        <i class='bx bx-heart icon'></i>
                        <span class="text nav-text">Kelas</span>
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