<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('images/Home.png') }}" width="60" height="40" alt="Cool Admin" />

        </a>
        Home Library
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                {{-- <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                    </ul>
                </li> --}}

                <li class="active has-sub">
                    {{-- <a class="js-arrow" href="#"> --}}
                        {{-- <i class="fas fa-tachometer-alt"></i>Buku</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list"> --}}
                        <li>
                            <a href="{{ route('buku.index') }}">
                                <i class="fa fa-book" aria-hidden="true"></i>Data Buku</a>
                        </li>
                        <li>
                            <a href="{{ route('buku.create') }}">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>Tambah Buku</a>
                        {{-- </li>
                    </ul> --}}
                </li>

                {{-- <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Slider</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('slider.index') }}">
                                <i class="fas fa-chart-bar"></i>Data Slider</a>
                        </li>
                        <li>
                            <a href="{{ route('slider.create') }}">
                                <i class="fas fa-chart-bar"></i>Tambah Slider</a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
            </li>
            </ul>
        </nav>
    </div>
</aside>
