<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="{{ asset('images/sipil2.png')}}" alt="" class="img-fluid b-logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
          </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="{{ route('/') }}">Home</a>
                </li>
                @guest
                <div class="nav-item">
                    <a class="nav-link smoth-scroll" href="{{ route('login') }}">
                        Login
                    </a>
                </div>
                @else
                <div class="dropdown nav-item" style="width: 110px;">
                    <a class="nav-link smoth-scroll" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Praktikum
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('praktikum.create') }}">Pendaftaran Praktikum</a>
                        <a class="dropdown-item" href="">Daftar Hadir</a>
                        <a class="dropdown-item" href="">Pelaksanaan</a>
                        <a class="dropdown-item" href="">Pelaksanaan Ujian Praktikum</a>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="service.html">Sewa Alat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="pricing.html">Penelitian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="blog.html">Inventaris</a>
                </li>
                <div class="dropdown nav-item" style="width: 110px;">
                    <a class="nav-link smoth-scroll" href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->username }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="" class="dropdown-item">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>