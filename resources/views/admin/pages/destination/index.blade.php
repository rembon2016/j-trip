@extends('admin.layouts.master')
@section('title', 'Destinasi')

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
        <li class="breadcrumb-item active">Destinasi</li>
    </ol>
</nav>

<!-- Tabel Destinasi -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4  ">
        <h5 class="card-header mb-0">Destinasi / Lokasi</h5>
        <div class="d-flex align-items-center gap-2">
            @has('manage-destination')
            <a href="{{ route('admin.destination.create') }}" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Tambah Destinasi">
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
                        <th>Thumbnail</th>
                        <th>Judul</th>
                        <th class="text-center">Visitor</th>
                        <th>Dibuat Oleh</th>

                        @has([
                            'see-destination',
                            'manage-destination'
                        ])
                            <th class="text-center">Opsi</th>
                        @endhas
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="{{ $item->getImageURL() }}" data-lightbox="image-1" data-title="{{ $item->title }}">
                                <img src="{{ $item->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" class="table-preview-image" alt="">
                            </a>
                        </td>
                        <td>{{ $item->title }}</td>
                        <td class="text-center">{{ $item->total_visitor }}</td>
                        <td>{{ $item->createdBy?->name }}</td>

                        @has([
                            'see-destination',
                            'manage-destination'
                        ])
                            <td>
                                <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                                    @has('see-destination')
                                    <a href="{{ route('landing-page.destination.detail', $item->slug) }}" class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Lihat Destinasi" target="_blank">
                                        <i class="bx bx-show"></i>
                                    </a>
                                    @endhas

                                    @has('manage-destination')
                                    <a href="{{ route('admin.destination.edit', $item->id) }}" class="btn btn-info btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Ubah Destinasi">
                                        <i class="bx bx-edit-alt"></i>
                                    </a>
                                    <a href="{{ route('admin.destination.delete', $item->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Hapus Destinasi">
                                        <i class="bx bx-trash-alt"></i>
                                    </a>
                                    @endhas
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
<!-- End Tabel Destinasi -->
@endsection

@push('script')
<script src="{{ asset('assets/admin/vendor/libs/lightbox/js/lightbox.min.js') }}"></script>
<script>
    $(document).ready(function (event) {

    });
</script>
@endpush