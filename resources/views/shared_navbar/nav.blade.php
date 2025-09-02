<nav class="navbar navbar-expand-lg navbar-light navbar-custom shadow-sm">
    <div class="container-fluid">

        {{-- Logo on the left --}}
        <div class="d-flex align-items-center">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                🎓 System University
            </a>
        </div>

        {{-- Toggler for mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navbar Content --}}
        <div class="collapse navbar-collapse" id="navbarNav">

            {{-- Center Links --}}
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/courseInfo') }}"><i class="fas fa-book-open"></i> Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a>
                </li>
            </ul>

            {{-- Right Side Auth Buttons --}}
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary btn-sm btn-auth" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item ms-2">
                        <a class="btn btn-danger btn-sm btn-auth" href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>