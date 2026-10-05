<div class="card-aesthetic">
    <div class="card-header-clean">
        <div>
            <h5>Data Pengguna Terdaftar</h5>
            <p>Daftar seluruh mahasiswa praktikum</p>
        </div>
        <span class="total-badge">
            <i class="fa-solid fa-database me-1"></i> {{ count($users) }} Pengguna
        </span>
    </div>
    
    <div class="table-responsive">
        <table class="table-clean">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th>Nama Pengguna</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th style="text-align: right;">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="font-monospace fw-semibold text-secondary">
                            #{{ sprintf('%02d', $user->id) }}
                        </td>
                        <td>
                            <div class="user-info">
                                <div class="avatar-rose">
                                    {{ strtoupper(substr($user->nama, 0, 1)) }}
                                </div>
                                <div>
                                    <div class="user-name">{{ $user->nama }}</div>
                                    <div class="user-sub">Mahasiswa S1 Ilmu Komputer</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-npm">
                                <i class="fa-solid fa-id-card text-muted"></i>
                                <span>{{ $user->npm ?? $user->nim }}</span>
                            </span>
                        </td>
                        <td>
                            <span class="badge-kelas">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <span>Kelas {{ $user->nama_kelas }}</span>
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <span class="badge-status">
                                <span class="status-dot"></span>
                                <span>Aktif</span>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 3rem 1rem;">
                            <div style="color: #94a3b8; font-size: 0.9rem;">
                                <i class="fa-solid fa-folder-open display-6 mb-2 text-muted d-block"></i>
                                <strong>Belum Ada Data Pengguna</strong>
                                <p class="small mb-3">Silakan tambahkan data pengguna baru melalui tombol di atas.</p>
                                <a href="{{ url('/user/create') }}" class="btn-rose">
                                    <i class="fa-solid fa-plus fs-7"></i> Tambah Pengguna
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
