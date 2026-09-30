@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">
        
        <!-- Header Banner -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1">Buat Pengguna Baru</h2>
                <p class="text-muted small mb-0">Isi formulir di bawah ini untuk menambahkan mahasiswa ke database.</p>
            </div>
            <a href="{{ url('/user') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                <i class="fa-solid fa-arrow-left me-1"></i> Kembali
            </a>
        </div>

        <!-- Form Card -->
        <div class="card custom-card border-0 shadow-sm p-3 p-md-4">
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <!-- Field Nama -->
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-semibold text-dark">
                            <i class="fa-solid fa-user text-primary me-1"></i> Nama Lengkap:
                        </label>
                        <input type="text" class="form-control form-control-lg rounded-3 fs-6" id="nama" name="nama" placeholder="Masukkan nama mahasiswa" required>
                    </div>

                    <!-- Field NPM -->
                    <div class="mb-4">
                        <label for="npm" class="form-label fw-semibold text-dark">
                            <i class="fa-solid fa-id-card text-primary me-1"></i> NPM:
                        </label>
                        <input type="text" class="form-control form-control-lg rounded-3 fs-6 font-monospace" id="npm" name="npm" placeholder="Contoh: 2417051051" required>
                    </div>

                    <!-- Field Kelas -->
                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold text-dark">
                            <i class="fa-solid fa-chalkboard-user text-primary me-1"></i> Kelas:
                        </label>
                        <select name="kelas_id" id="kelas_id" class="form-select form-select-lg rounded-3 fs-6" required>
                            <option value="" disabled selected>-- Pilih Kelas Mahasiswa --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">Kelas {{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid pt-2">
                        <button type="submit" class="btn btn-gradient btn-lg rounded-3 fw-bold fs-6">
                            <i class="fa-solid fa-paper-plane me-2"></i> Submit Data
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
@endsection
