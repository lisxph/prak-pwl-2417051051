@extends('layouts.app')

@section('content')
<!-- Hero Header Card (Sleek Rose Design) -->
<div class="card card-aesthetic mb-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 50%, #ffffff 100%); padding: 1.75rem 2rem; border-radius: 18px; border: 1px solid rgba(244, 63, 94, 0.15);">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div class="d-flex align-items-center gap-3">
            <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: 0 4px 14px rgba(225, 29, 72, 0.3); flex-shrink: 0;">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <h3 style="font-weight: 800; color: #0f172a; margin: 0; font-size: 1.4rem; letter-spacing: -0.02em;">Daftar Pengguna</h3>
                <p style="color: #64748b; margin: 0; font-size: 0.9rem; font-weight: 500;">Kelola data seluruh mahasiswa yang terdaftar dalam sistem praktikum.</p>
            </div>
        </div>
        <a href="{{ url('/user/create') }}" class="btn btn-danger btn-rose">
            <i class="fa-solid fa-user-plus fs-7"></i>
            <span>Tambah Pengguna Baru</span>
        </a>
    </div>
</div>

<!-- Dynamic Component User Table -->
@include('components.user-table', ['users' => $users])
@endsection
