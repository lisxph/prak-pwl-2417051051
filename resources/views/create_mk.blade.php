@extends('layouts.app')

@section('content')
<div class="form-card-container">
    
    <!-- Hero Header Card -->
    <div class="card card-aesthetic mb-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 40%, #ffffff 100%); padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid rgba(244, 63, 94, 0.15);">
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
            
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="width: 46px; height: 46px; min-width: 46px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.25); flex-shrink: 0;">
                    <i class="fa-solid fa-book-bookmark"></i>
                </div>
                <div>
                    <h1 style="font-weight: 800; color: #0f172a; margin: 0; font-size: 1.35rem; letter-spacing: -0.02em; line-height: 1.2;">Buat Mata Kuliah Baru</h1>
                    <p style="color: #64748b; margin: 0.25rem 0 0 0; font-size: 0.875rem; font-weight: 500;">Isi formulir di bawah ini untuk menambahkan mata kuliah baru ke database.</p>
                </div>
            </div>

            <div>
                <a href="{{ url('/matakuliah') }}" class="btn-outline-rose">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Kembali</span>
                </a>
            </div>

        </div>
    </div>

    <!-- Form Card -->
    <div class="card-aesthetic">
        <div style="padding: 2rem;">
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf

                <!-- Field Nama MK -->
                <div class="form-group mb-3">
                    <label for="nama_mk" class="form-label-clean">
                        <i class="fa-solid fa-book text-danger me-1"></i> Nama Mata Kuliah:
                    </label>
                    <br>
                    <input type="text" class="form-control-clean" id="nama_mk" name="nama_mk" placeholder="Masukkan nama mata kuliah" required>
                </div>

                <!-- Field SKS -->
                <div class="form-group mb-3">
                    <label for="sks" class="form-label-clean">
                        <i class="fa-solid fa-graduation-cap text-danger me-1"></i> SKS:
                    </label>
                    <br>
                    <input type="number" class="form-control-clean" id="sks" name="sks" placeholder="Masukkan jumlah SKS" required>
                </div>

                <!-- Submit Button -->
                <div style="margin-top: 1.75rem;">
                    <button type="submit" class="btn-submit-clean">
                        <i class="fa-solid fa-paper-plane me-1.5"></i> Submit
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
