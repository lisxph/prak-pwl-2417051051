@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="page-header-title">
        <h2>Daftar Pengguna</h2>
        <p>Kelola data seluruh mahasiswa yang terdaftar dalam sistem praktikum.</p>
    </div>
    <div>
        <a href="{{ url('/user/create') }}" class="btn-rose">
            <i class="fa-solid fa-user-plus fs-7"></i>
            <span>Tambah Pengguna</span>
        </a>
    </div>
</div>

<!-- Dynamic Component User Table -->
@include('components.user-table', ['users' => $users])
@endsection
