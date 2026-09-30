@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h2 class="fw-bold text-dark mb-1">🌸 Daftar Pengguna 🌸</h2>
        <p class="text-muted small mb-0 fw-semibold">Kelola data seluruh mahasiswa praktikum dengan tampilan gemas dan rapi ✨</p>
    </div>
    <div class="d-flex align-items-center gap-2">
        <a href="{{ url('/user/create') }}" class="btn btn-gradient rounded-pill px-4 py-2.5 fw-bold d-inline-flex align-items-center gap-2 shadow">
            <span>✨ Tambah Pengguna</span>
            <span>💖</span>
        </a>
    </div>
</div>

<!-- Dynamic Component User Table (Bonus Option Task #5) -->
@include('components.user-table', ['users' => $users])
@endsection
