<nav class="navbar navbar-expand-lg sticky-top custom-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-gradient" href="{{ url('/user') }}">
            <div class="brand-icon">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <span>PWL<span class="text-primary-accent">Portal</span></span>
        </a>
        
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto ms-lg-4 mb-2 mb-lg-0 gap-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user') ? 'active' : '' }}" href="{{ url('/user') }}">
                        <i class="fa-solid fa-users me-1 fs-6"></i> Daftar User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user/create') ? 'active' : '' }}" href="{{ url('/user/create') }}">
                        <i class="fa-solid fa-user-plus me-1 fs-6"></i> Tambah User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile*') ? 'active' : '' }}" href="{{ url('/profile') }}">
                        <i class="fa-solid fa-id-card me-1 fs-6"></i> Profile
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                <a href="{{ url('/user/create') }}" class="btn btn-gradient btn-sm px-3 rounded-pill d-inline-flex align-items-center gap-2 shadow-sm">
                    <i class="fa-solid fa-plus fs-6"></i>
                    <span>Pengguna Baru</span>
                </a>
            </div>
        </div>
    </div>
</nav>
