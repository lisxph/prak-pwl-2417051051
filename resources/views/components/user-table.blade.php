<div class="card custom-card border-0 overflow-hidden">
    <div class="card-header bg-white py-3.5 px-4 d-flex align-items-center justify-content-between border-bottom">
        <div class="d-flex align-items-center gap-2.5">
            <div class="p-2 bg-primary-subtle text-primary rounded-3">
                <i class="fa-solid fa-users-gear fs-6"></i>
            </div>
            <div>
                <h5 class="mb-0 fw-bold text-dark">Data Pengguna Terdaftar</h5>
                <span class="text-muted fs-7">Daftar seluruh mahasiswa kelas praktikum</span>
            </div>
        </div>
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-bold fs-7">
            <i class="fa-solid fa-database me-1.5"></i>{{ count($users) }} Pengguna
        </span>
    </div>
    
    <div class="table-responsive">
        <table class="table align-middle mb-0 custom-table">
            <thead>
                <tr>
                    <th scope="col" class="ps-4 text-secondary text-uppercase fw-bold" style="width: 80px;">ID</th>
                    <th scope="col" class="text-secondary text-uppercase fw-bold">Nama Pengguna</th>
                    <th scope="col" class="text-secondary text-uppercase fw-bold">NPM</th>
                    <th scope="col" class="text-secondary text-uppercase fw-bold">Kelas</th>
                    <th scope="col" class="pe-4 text-end text-secondary text-uppercase fw-bold">Status</th>
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
                                    <div class="fw-bold text-dark mb-0">{{ $user->nama }}</div>
                                    <span class="text-muted fs-7">Mahasiswa S1 Ilmu Komputer</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-body-tertiary text-dark border px-3 py-2 font-monospace fs-7 rounded-3">
                                <i class="fa-solid fa-id-card text-primary me-1.5 opacity-75"></i>{{ $user->npm ?? $user->nim }}
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
                            <span class="badge {{ $classBadge }} rounded-pill px-3 py-2 fw-bold fs-7">
                                <i class="fa-solid fa-chalkboard-user me-1.5"></i>Kelas {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td class="pe-4 text-end">
                            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1.5 fs-7 d-inline-flex align-items-center gap-1.5 fw-semibold">
                                <span class="dot-pulse"></span>
                                <span>Aktif</span>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <div class="empty-state py-4">
                                <i class="fa-solid fa-folder-open display-4 text-muted mb-3 d-block opacity-50"></i>
                                <h6 class="fw-bold text-secondary mb-1">Belum Ada Data Pengguna</h6>
                                <p class="text-muted small mb-3">Silakan tambahkan data pengguna baru melalui tombol dibawah ini.</p>
                                <a href="{{ url('/user/create') }}" class="btn btn-gradient btn-sm px-4 rounded-pill">
                                    <i class="fa-solid fa-plus me-1"></i>Tambah Pengguna
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
