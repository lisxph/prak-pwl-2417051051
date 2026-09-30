@extends('layouts.app')

@section('content')
<div class="form-card-container">
    
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-title">
            <h2>Buat Pengguna Baru</h2>
            <p>Isi formulir di bawah ini untuk menambahkan mahasiswa ke database.</p>
        </div>
        <div>
            <a href="{{ url('/user') }}" class="btn-back-clean">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Kembali</span>
            </a>
        </div>
    </div>

    <!-- Form Card -->
    <div class="card-aesthetic">
        <div style="padding: 2rem;">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <!-- Field Nama -->
                <div class="form-group">
                    <label for="nama" class="form-label-clean">
                        <i class="fa-solid fa-user text-danger me-1"></i> Nama Lengkap:
                    </label>
                    <input type="text" class="form-control-clean" id="nama" name="nama" placeholder="Masukkan nama mahasiswa" required>
                </div>

                <!-- Field NPM -->
                <div class="form-group">
                    <label for="npm" class="form-label-clean">
                        <i class="fa-solid fa-id-card text-danger me-1"></i> NPM (Nomor Pokok Mahasiswa):
                    </label>
                    <input type="text" class="form-control-clean font-monospace" id="npm" name="npm" placeholder="Contoh: 2417051051" required>
                </div>

                <!-- Field Kelas -->
                <div class="form-group">
                    <label for="kelas_id" class="form-label-clean">
                        <i class="fa-solid fa-chalkboard-user text-danger me-1"></i> Kelas:
                    </label>
                    <select name="kelas_id" id="kelas_id" class="form-select-clean" required>
                        <option value="" disabled selected>-- Pilih Kelas Mahasiswa --</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">Kelas {{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <div style="margin-top: 1.5rem;">
                    <button type="submit" class="btn-submit-clean">
                        <i class="fa-solid fa-paper-plane me-1.5"></i> Submit Data Pengguna
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
