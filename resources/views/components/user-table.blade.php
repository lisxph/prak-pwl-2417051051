<div class="card custom-card border-0 overflow-hidden">
    <div class="card-header bg-white py-3.5 px-4 d-flex align-items-center justify-content-between border-bottom">
        <div class="d-flex align-items-center gap-3">
            <div class="p-2.5 bg-danger-subtle text-danger rounded-4 fs-4">
                🎀
            </div>
            <div>
                <h5 class="mb-0 fw-bold text-dark fs-5">Data Pengguna Terdaftar ✨</h5>
                <span class="text-muted fs-7 fw-semibold">Daftar seluruh mahasiswa kelas praktikum yang aktif 🌸</span>
            </div>
        </div>
        <span class="badge badge-cute-pink rounded-pill px-3.5 py-2.5 fw-bold fs-7 shadow-sm">
            🍧 Total: {{ count($users) }} Pengguna
        </span>
    </div>
    
    <div class="table-responsive">
        <table class="table align-middle mb-0 custom-table">
            <thead>
                <tr>
                    <th scope="col" class="ps-4 text-uppercase fw-bold" style="width: 85px;"># ID</th>
                    <th scope="col" class="text-uppercase fw-bold">Mahasiswa 🐾</th>
                    <th scope="col" class="text-uppercase fw-bold">NPM 💳</th>
                    <th scope="col" class="text-uppercase fw-bold">Kelas 📚</th>
                    <th scope="col" class="pe-4 text-end text-uppercase fw-bold">Status ⭐️</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="ps-4 fw-bold text-secondary font-monospace">
                            #{{ sprintf('%02d', $user->id) }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar-circle">
                                    {{ strtoupper(substr($user->nama, 0, 1)) }}
                                </div>
                                <div>
                                    <div class="fw-bold text-dark fs-6 mb-0">{{ $user->nama }}</div>
                                    <span class="text-muted fs-7 fw-semibold">Mahasiswa S1 Ilmu Komputer Unila 🎓</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-white text-dark border border-danger-subtle px-3 py-2 font-monospace fs-7 rounded-pill shadow-sm">
                                🆔 {{ $user->npm ?? $user->nim }}
                            </span>
                        </td>
                        <td>
                            @php
                                $classBadge = match(strtoupper($user->nama_kelas)) {
                                    'A' => 'badge-class-a',
                                    'B' => 'badge-class-b',
                                    'C' => 'badge-class-c',
                                    'D' => 'badge-class-d',
                                    default => 'badge-class-a'
                                };
                            @endphp
                            <span class="badge {{ $classBadge }} rounded-pill px-3 py-2 fw-bold fs-7 shadow-sm">
                                🏫 Kelas {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td class="pe-4 text-end">
                            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1.5 fs-7 d-inline-flex align-items-center gap-1.5 fw-bold shadow-sm">
                                <span class="dot-pulse"></span>
                                <span>Aktif ✨</span>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <div class="empty-state py-4">
                                <span class="display-3 mb-3 d-block">🐱</span>
                                <h5 class="fw-bold text-secondary mb-1">Belum Ada Data Pengguna Gemas</h5>
                                <p class="text-muted small mb-3">Yuk tambahkan data pengguna baru melalui tombol cantik di bawah ini! 💖</p>
                                <a href="{{ url('/user/create') }}" class="btn btn-gradient btn-sm px-4 rounded-pill">
                                    <span>➕ Tambah Pengguna</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
