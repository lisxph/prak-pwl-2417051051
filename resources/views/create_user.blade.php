@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7 col-md-9">
        
        <!-- Header Banner -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1">✨ Buat Pengguna Baru ✨</h2>
                <p class="text-muted small mb-0 fw-semibold">Isi formulir gemas di bawah ini untuk menambahkan mahasiswa baru! 🌸</p>
            </div>
            <a href="{{ url('/user') }}" class="btn btn-outline-cute btn-sm rounded-pill px-3">
                <span>👈 Kembali</span>
            </a>
        </div>

        <!-- Form Card -->
        <div class="card custom-card border-0 p-3 p-md-4">
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <!-- Field Nama -->
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-bold text-dark fs-6">
                            <span>👤 Nama Lengkap Mahasiswa:</span>
                        </label>
                        <input type="text" class="form-control form-control-lg rounded-4 fs-6" id="nama" name="nama" placeholder="Masukkan nama mahasiswa..." required>
                    </div>

                    <!-- Field NPM -->
                    <div class="mb-4">
                        <label for="npm" class="form-label fw-bold text-dark fs-6">
                            <span>🆔 NPM (Nomor Pokok Mahasiswa):</span>
                        </label>
                        <input type="text" class="form-control form-control-lg rounded-4 fs-6 font-monospace" id="npm" name="npm" placeholder="Contoh: 2417051051" required>
                    </div>

                    <!-- Field Kelas -->
                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-bold text-dark fs-6">
                            <span>🏫 Pilih Kelas Practical:</span>
                        </label>
                        <select name="kelas_id" id="kelas_id" class="form-select form-select-lg rounded-4 fs-6" required>
                            <option value="" disabled selected>-- 🌸 Pilih Kelas Mahasiswa 🌸 --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">✨ Kelas {{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid pt-2">
                        <button type="submit" class="btn btn-gradient btn-lg rounded-pill fw-bold fs-6 shadow">
                            <span>💖 Submit Data Pengguna 🚀</span>
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
@endsection
