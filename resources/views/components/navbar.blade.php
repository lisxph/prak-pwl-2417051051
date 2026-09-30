<nav class="navbar navbar-expand-lg sticky-top custom-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2.5 fw-bold text-gradient" href="{{ url('/user') }}">
            <div class="brand-icon">
                🎓
            </div>
            <span class="fs-4">PWL<span class="text-primary-accent">Portal ✨</span></span>
        </a>
        
        <button class="navbar-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fs-3">🌸</span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav me-auto ms-lg-4 mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user') ? 'active' : '' }}" href="{{ url('/user') }}">
                        <span class="me-1.5">🎀</span> Daftar User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user/create') ? 'active' : '' }}" href="{{ url('/user/create') }}">
                        <span class="me-1.5">✨</span> Tambah User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile*') ? 'active' : '' }}" href="{{ url('/profile') }}">
                        <span class="me-1.5">🐾</span> Profile
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                <a href="{{ url('/user/create') }}" class="btn btn-gradient btn-sm px-4 rounded-pill d-inline-flex align-items-center gap-2 shadow-sm">
                    <span>➕ Pengguna Baru</span>
                    <span>💖</span>
                </a>
            </div>
        </div>
    </div>
</nav>
