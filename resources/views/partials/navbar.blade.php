<nav class="navbar navbar-expand-lg navbar-danger bg-danger" style="background-color: #ef7c10">
    <div class="container">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/Home.png') }}" width="80" height="60" />


        </a>
        <div style="color: white; font-size:20px">
            Home Library
            <div style="color: white; font-size:15px">
                Perpustakaan Online
            </div>
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>

                    </ul>
                </li>

            </ul> --}}





            <ul class="navbar-nav ms-auto">
                <div class="me-1">
                    <form action="{{ route('books.tampil') }}" method="GET">
                        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search"
                            name="search">

                </div>
                <div class="me-4">
                    <button class="btn me-4" style="background-color: #ef7c10; color: white"
                        type="submit">Search</button>
                    </form>
                </div>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">

                    <a class="btn btn-danger" style="background-color: #ef7c10; color:white"
                        href=" {{ route('login') }}">Login</a>
                </li>
                &nbsp
                <li class="nav-item">
                    <a class="btn btn-danger" style="background-color: #ef7c10; color: white"
                        href="{{ route('register') }}">Register</a>
                </li>
            </ul>



        </div>
</nav>
