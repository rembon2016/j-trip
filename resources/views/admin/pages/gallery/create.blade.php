@extends('admin.layouts.master')
@section('title', 'Tambah Gambar')

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.gallery.index') }}">Galeri</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Gambar
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Tambah Gambar</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.gallery.store') }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="caption" class="form-label required">Caption</label>
                <input type="text" name="caption" id="caption" class="form-control @error('caption') is-invalid @enderror" placeholder="Masukkan Caption Gambar" value="{{ old('caption') }}" required>
                @error('caption')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="image" class="form-label">Preview Gambar</label>
                <img src="#" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Preview Gambar Galeri" class="preview-image" id="preview-image">
            </div>
            <div class="col-md-8 mb-3">
                <label for="" class="form-label required">Upload Gambar</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'preview-image')" accept="image/*" required>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                    <span class="tf-icons bx bx-plus me-1"></span> Tambahkan Gambar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection