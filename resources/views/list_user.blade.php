@extends('layouts.app')

@section('content')
<!-- Hero Header Card (Icon & Title Side-by-Side) -->
<div class="card card-aesthetic mb-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 40%, #ffffff 100%); padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid rgba(244, 63, 94, 0.15);">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        
        <!-- Left: Icon Box + Title Side by Side -->
        <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 46px; height: 46px; min-width: 46px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.25); flex-shrink: 0;">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <h3 style="font-weight: 800; color: #0f172a; margin: 0; font-size: 1.35rem; letter-spacing: -0.02em; line-height: 1.2;">Daftar Pengguna</h3>
                <p style="color: #64748b; margin: 0.25rem 0 0 0; font-size: 0.875rem; font-weight: 500;">Kelola data seluruh mahasiswa yang terdaftar dalam sistem praktikum.</p>
            </div>
        </div>

        <!-- Right: Action Button -->
        <div>
            <a href="{{ url('/user/create') }}" class="btn-rose">
                <i class="fa-solid fa-user-plus fs-7"></i>
                <span>Tambah Pengguna Baru</span>
            </a>
        </div>

    </div>
</div>

<!-- Dynamic Component User Table -->
@include('components.user-table', ['users' => $users])
@endsection
