@extends('layouts.app')

@section('content')
<div class="card card-aesthetic mb-4 border-0 shadow-sm" style="background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 40%, #ffffff 100%); padding: 1.5rem 1.75rem; border-radius: 16px; border: 1px solid rgba(244, 63, 94, 0.15);">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        
        <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 46px; height: 46px; min-width: 46px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: white; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.25); flex-shrink: 0;">
                <i class="fa-solid fa-book"></i>
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

<div class="card-aesthetic overflow-hidden">
    <div class="table-responsive">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-hover align-middle mb-0 custom-user-table" style="border-collapse: collapse; width: 100%;">
            <thead class="bg-light">
                <tr>
                    <th scope="col" style="padding: 1rem 1.25rem; font-weight: 700; color: #475569; font-size: 0.85rem; text-transform: uppercase;">ID</th>
                    <th scope="col" style="padding: 1rem 1.25rem; font-weight: 700; color: #475569; font-size: 0.85rem; text-transform: uppercase;">Nama Mata Kuliah</th>
                    <th scope="col" style="padding: 1rem 1.25rem; font-weight: 700; color: #475569; font-size: 0.85rem; text-transform: uppercase;">SKS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                <tr>
                    <td style="padding: 1rem 1.25rem; font-family: monospace; font-size: 0.85rem; color: #e11d48; font-weight: 600;">{{ $mk->id }}</td>
                    <td style="padding: 1rem 1.25rem; font-weight: 600; color: #1e293b;">{{ $mk->nama_mk }}</td>
                    <td style="padding: 1rem 1.25rem;">
                        <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill font-weight-bold" style="font-size: 0.85rem;">
                            {{ $mk->sks }} SKS
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center py-4 text-muted">
                        Belum ada data mata kuliah. <a href="{{ route('matakuliah.create') }}" class="text-danger font-weight-bold">Tambah Mata Kuliah</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
