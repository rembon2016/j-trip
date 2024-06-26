@extends('admin.layouts.master')
@section('title', 'Staff')

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/lightbox/css/lightbox.min.css') }}">
@endpush

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Staff</li>
    </ol>
</nav>

<!-- Tabel Staff -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4  ">
        <h5 class="card-header mb-0">Staff</h5>
        <div class="d-flex align-items-center gap-2">
            @has('manage-staff')
            <a href="{{ route('admin.users.staff.create') }}" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Tambah Staff">
                <i class="bx bx-plus-circle"></i>
            </a>
            @endhas
        </div>
    </div>
    <div class="card-body pt-1">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover simple-dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                        <th>Tanggal Dibuat</th>

                        @has('manage-staff')
                            <th class="text-center">Opsi</th>
                        @endhas
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone ?? '-' }}</td>
                        <td>
                            <span title="{{ $item->address }}">
                                {{ \Illuminate\Support\Str::limit($item->address ?? '-', 50, '...') }}
                            </span>
                        </td>
                        <td>{{ $item->created_at?->translatedFormat('d F Y H:i:s') }}</td>

                        @has('manage-staff')
                            <td>
                                <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                                    <a href="{{ route('admin.users.staff.edit', $item->id) }}" class="btn btn-info btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Ubah Staff">
                                        <i class="bx bx-edit-alt"></i>
                                    </a>
                                    <a href="{{ route('admin.users.staff.delete', $item->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Hapus Staff">
                                        <i class="bx bx-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        @endhas
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Tabel Staff -->
@endsection

@push('script')
<script src="{{ asset('assets/admin/vendor/libs/lightbox/js/lightbox.min.js') }}"></script>
<script>
    $(document).ready(function (event) {

    });
</script>
@endpush