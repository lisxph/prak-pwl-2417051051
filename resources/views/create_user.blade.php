@extends('layouts.app')

@section('content')
<div class="form-card-container">
    
    <!-- Hero Header Card -->
    <div class="card card-aesthetic mb-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 50%, #ffffff 100%); padding: 1.5rem 1.75rem; border-radius: 18px; border: 1px solid rgba(244, 63, 94, 0.15);">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div class="d-flex align-items-center gap-3">
                <div style="width: 44px; height: 44px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.15rem; box-shadow: 0 4px 14px rgba(225, 29, 72, 0.3); flex-shrink: 0;">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div>
                    <h3 style="font-weight: 800; color: #0f172a; margin: 0; font-size: 1.3rem; letter-spacing: -0.02em;">Buat Pengguna Baru</h3>
                    <p style="color: #64748b; margin: 0; font-size: 0.875rem; font-weight: 500;">Isi formulir di bawah ini untuk menambahkan mahasiswa ke database.</p>
                </div>
            </div>
            <a href="{{ url('/user') }}" class="btn btn-outline-danger btn-outline-rose">
                <i class="fa-solid fa-arrow-left me-1"></i>
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
                <div style="margin-top: 1.75rem;">
                    <button type="submit" class="btn-submit-clean">
                        <i class="fa-solid fa-paper-plane me-1.5"></i> Submit Data Pengguna
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
