<nav class="custom-navbar">
    <div class="container-centered">
        <div class="nav-content">
            <!-- Brand Logo -->
            <a class="brand-area" href="{{ url('/user') }}">
                <div class="brand-icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="brand-title">
                    PWL<span>Portal</span>
                </div>
            </a>
            
            <!-- Horizontal Links -->
            <ul class="nav-links">
                <li>
                    <a class="nav-item-link {{ request()->is('user') ? 'active' : '' }}" href="{{ url('/user') }}">
                        <i class="fa-solid fa-users opacity-75"></i>
                        <span>Daftar User</span>
                    </a>
                </li>
                <li>
                    <a class="nav-item-link {{ request()->is('user/create') ? 'active' : '' }}" href="{{ url('/user/create') }}">
                        <i class="fa-solid fa-user-plus opacity-75"></i>
                        <span>Tambah User</span>
                    </a>
                </li>
                <li>
                    <a class="nav-item-link {{ request()->is('profile*') ? 'active' : '' }}" href="{{ url('/profile') }}">
                        <i class="fa-solid fa-id-card opacity-75"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>

            <!-- Add User Solid Rose Button -->
            <div>
                <a href="{{ url('/user/create') }}" class="btn-rose">
                    <i class="fa-solid fa-plus fs-7"></i>
                    <span>Pengguna Baru</span>
                </a>
            </div>
        </div>
    </div>
</nav>
