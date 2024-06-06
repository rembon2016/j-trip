@extends('admin.layouts.master')
@section('title', 'Ubah Gambar')

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
            Ubah Gambar
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Ubah Gambar</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.gallery.update', $data->id) }}" class="row" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            
            <div class="col-12 mb-3">
                <label for="caption" class="form-label required">Judul</label>
                <input type="text" name="caption" id="caption" class="form-control @error('caption') is-invalid @enderror" placeholder="Masukkan Judul Gambar" value="{{ old('caption', $data->caption) }}" required>
                @error('caption')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="image" class="form-label">Preview Gambar</label>
                <img src="{{ $data->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Preview Gambar" class="preview-image" id="preview-image">
            </div>
            <div class="col-md-8 mb-3">
                <label for="" class="form-label">Upload Gambar</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'preview-image')" accept="image/*">
                <i><small>*Kosongkan jika tidak ingin mengganti gambar</small></i>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                    <span class="tf-icons bx bx-save me-1"></span> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection