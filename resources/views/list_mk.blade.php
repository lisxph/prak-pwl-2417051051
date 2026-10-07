@extends('layouts.app')

@section('content')
<!-- Hero Header Card -->
<div class="card card-aesthetic mb-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 40%, #ffffff 100%); padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid rgba(244, 63, 94, 0.15);">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        
        <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 46px; height: 46px; min-width: 46px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.25); flex-shrink: 0;">
                <i class="fa-solid fa-book-open"></i>
            </div>
            <div>
                <h1 style="font-weight: 800; color: #0f172a; margin: 0; font-size: 1.35rem; letter-spacing: -0.02em; line-height: 1.2;">Daftar Mata Kuliah</h1>
                <p style="color: #64748b; margin: 0.25rem 0 0 0; font-size: 0.875rem; font-weight: 500;">Daftar seluruh mata kuliah yang telah terdaftar dalam sistem.</p>
            </div>
        </div>

        <div>
            <a href="{{ route('matakuliah.create') }}" class="btn-rose">
                <i class="fa-solid fa-plus fs-7"></i>
                <span>Tambah Mata Kuliah Baru</span>
            </a>
        </div>

    </div>
</div>

<!-- Alert Sukses / Error -->
@if (session('success'))
<div class="alert-custom alert-custom-success alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center gap-2">
        <i class="fa-solid fa-circle-check fs-5"></i>
        <span class="fw-semibold">{{ session('success') }}</span>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
<div class="alert-custom alert-custom-error alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-center gap-2">
        <i class="fa-solid fa-circle-exclamation fs-5"></i>
        <span class="fw-semibold">{{ session('error') }}</span>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- Table Container -->
<div class="card-aesthetic">
    <div class="card-header-clean">
        <div>
            <h5>Katalog Mata Kuliah</h5>
            <p>Kelola data mata kuliah beserta bobot SKS</p>
        </div>
        <span class="total-badge">
            <i class="fa-solid fa-book-bookmark me-1"></i> {{ count($mks) }} Mata Kuliah
        </span>
    </div>

    <div class="table-responsive">
        <table class="table-clean">
            <thead>
                <tr>
                    <th style="width: 320px;">ID (UUID)</th>
                    <th>Nama Mata Kuliah</th>
                    <th style="width: 120px;">SKS</th>
                    <th style="width: 180px; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                <tr>
                    <td>
                        <span class="badge-uuid" title="{{ $mk->id }}">
                            <i class="fa-solid fa-key opacity-75"></i>
                            <span>{{ $mk->id }}</span>
                        </span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-mk">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 0.95rem;">{{ $mk->nama_mk }}</div>
                                <div class="text-muted small">Program Studi Ilmu Komputer</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge-sks">
                            <i class="fa-solid fa-layer-group"></i>
                            <span>{{ $mk->sks }} SKS</span>
                        </span>
                    </td>
                    <td style="text-align: center;">
                        <div class="btn-action-group justify-content-center">
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn-action-edit" title="Edit Mata Kuliah">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span>Edit</span>
                            </a>
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus mata kuliah &quot;{{ $mk->nama_mk }}&quot;?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action-delete" title="Hapus Mata Kuliah">
                                    <i class="fa-solid fa-trash-can"></i>
                                    <span>Hapus</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align: center; padding: 3rem 1rem;">
                        <div style="color: #94a3b8; font-size: 0.9rem;">
                            <i class="fa-solid fa-book-open-reader display-6 mb-2 text-muted d-block"></i>
                            <strong>Belum Ada Data Mata Kuliah</strong>
                            <p class="small mb-3">Silakan tambahkan mata kuliah baru melalui tombol di atas.</p>
                            <a href="{{ route('matakuliah.create') }}" class="btn-rose">
                                <i class="fa-solid fa-plus fs-7"></i> Tambah Mata Kuliah
                            </a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
