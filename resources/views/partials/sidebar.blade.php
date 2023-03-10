<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/Home.png')}}" width="80" height="60" alt="Cool Admin" />

                </a>
                Home Library
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route ('books.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Buku</a>
                        </li>

                        <li>
                            <a href="{{ route ('books.create')}}">
                                <i class="fas fa-chart-bar"></i>Tambah Buku</a>
                        </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
