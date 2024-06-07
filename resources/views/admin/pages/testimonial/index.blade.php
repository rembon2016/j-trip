@extends('admin.layouts.master')
@section('title', 'Testimoni')

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Testimoni</li>
    </ol>
</nav>

<!-- Tabel Testimoni -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4">
        <h5 class="card-header mb-0">Testimoni</h5>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('admin.testimonial.create') }}" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Tambah Testimoni">
                <i class="bx bx-plus-circle"></i>
            </a>
        </div>
    </div>
    <div class="card-body pt-1">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover simple-dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Pesan Testimoni</th>
                        <th>Dibuat Oleh</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->person_name }}</td>
                        <td>
                            <span title="{{ $item->message }}">
                                {{ \Illuminate\Support\Str::limit($item->message ?? '-', 50, '...') }}
                            </span>
                        </td>
                        <td>{{ $item->createdBy?->name }}</td>
                        <td>
                            <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                                <a href="{{ route('admin.testimonial.edit', $item->id) }}" class="btn btn-info btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Ubah Testimoni">
                                    <i class="bx bx-edit-alt"></i>
                                </a>
                                <a href="{{ route('admin.testimonial.delete', $item->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Hapus Testimoni">
                                    <i class="bx bx-trash-alt"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Tabel Testimoni -->
@endsection