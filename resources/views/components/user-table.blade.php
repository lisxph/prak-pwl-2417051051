<div class="card custom-card border-0 shadow-sm overflow-hidden">
    <div class="card-header bg-white py-3 px-4 d-flex align-items-center justify-content-between border-bottom">
        <div class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-list-check text-primary fs-5"></i>
            <h5 class="mb-0 fw-bold">Data Pengguna Terdaftar</h5>
        </div>
        <span class="badge bg-primary rounded-pill px-3 py-2 fw-semibold">
            Total: {{ count($users) }} User
        </span>
    </div>
    
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0 custom-table">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="ps-4 text-secondary text-uppercase fs-7 fw-bold" style="width: 70px;">ID</th>
                    <th scope="col" class="text-secondary text-uppercase fs-7 fw-bold">Nama Pengguna</th>
                    <th scope="col" class="text-secondary text-uppercase fs-7 fw-bold">NPM</th>
                    <th scope="col" class="text-secondary text-uppercase fs-7 fw-bold">Kelas</th>
                    <th scope="col" class="pe-4 text-end text-secondary text-uppercase fs-7 fw-bold">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="ps-4 fw-semibold text-secondary">
                            #{{ $user->id }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar-circle">
                                    {{ strtoupper(substr($user->nama, 0, 1)) }}
                                </div>
                                <div>
                                    <div class="fw-bold text-dark mb-0">{{ $user->nama }}</div>
                                    <span class="text-muted fs-7">Mahasiswa Unila</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light text-dark border px-2.5 py-1.5 font-monospace fs-7">
                                <i class="fa-solid fa-id-card text-muted me-1"></i>{{ $user->npm ?? $user->nim }}
                            </span>
                        </td>
                        <td>
                            @php
                                $classColor = match(strtoupper($user->nama_kelas)) {
                                    'A' => 'bg-info-subtle text-info border-info-subtle',
                                    'B' => 'bg-success-subtle text-success border-success-subtle',
                                    'C' => 'bg-warning-subtle text-warning border-warning-subtle',
                                    'D' => 'bg-purple-subtle text-purple border-purple-subtle',
                                    default => 'bg-primary-subtle text-primary border-primary-subtle'
                                };
                            @endphp
                            <span class="badge {{ $classColor }} border rounded-pill px-3 py-1.5 fw-semibold">
                                <i class="fa-solid fa-chalkboard-user me-1"></i>Kelas {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td class="pe-4 text-end">
                            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2.5 py-1 fs-7">
                                <i class="fa-solid fa-circle-check me-1"></i>Aktif
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
                                <a href="{{ url('/user/create') }}" class="btn btn-primary btn-sm px-4 rounded-pill">
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
