@extends('layouts.app')

@section('content')
<div class="form-card-container">
    
    <!-- Hero Header Card (Icon Box & Title Side-by-Side) -->
    <div class="card card-aesthetic mb-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 40%, #ffffff 100%); padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid rgba(244, 63, 94, 0.15);">
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
            
            <!-- Left: Icon Box + Title Side by Side -->
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 46px; height: 46px; min-width: 46px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.25); flex-shrink: 0;">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div>
                    <h3 style="font-weight: 800; color: #0f172a; margin: 0; font-size: 1.35rem; letter-spacing: -0.02em; line-height: 1.2;">Buat Pengguna Baru</h3>
                    <p style="color: #64748b; margin: 0.25rem 0 0 0; font-size: 0.875rem; font-weight: 500;">Isi formulir di bawah ini untuk menambahkan mahasiswa ke database.</p>
                </div>
            </div>

            <!-- Right: Back Button -->
            <div>
                <a href="{{ url('/user') }}" class="btn-outline-rose">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Kembali</span>
                </a>
            </div>

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
