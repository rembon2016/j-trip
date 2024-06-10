@extends('admin.layouts.master')
@section('title', 'Tambah Destinasi')

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.destination.index') }}">Destinasi</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Destinasi
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Tambah Destinasi</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.destination.store') }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="title" class="form-label required">Nama Destinasi</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Nama Destinasi" value="{{ old('title') }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="col-12 mb-3">
                <label for="description" class="form-label required">Deskripsi</label>
                <textarea name="description" id="description" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Deskripsi Destinasi">{!! old('description') !!}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> --}}
            <div class="col-md-4 mb-3">
                <label for="image" class="form-label">Thumbnail</label>
                <img src="#" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Thumbnail Destinasi" class="preview-image" id="preview-image">
            </div>
            <div class="col-md-8 mb-3">
                <label for="" class="form-label required">Upload Thumbnail</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'preview-image')" accept="image/*" required>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                    <span class="tf-icons bx bx-plus me-1"></span> Tambahkan Destinasi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
@php
    $url = route('admin.content.upload', [
        '_token' => csrf_token()
    ]);
@endphp

<script src="{{ asset('assets/admin/vendor/libs/ckeditor/ckeditor.js') }}"></script>
<script>
    $(document).ready(function() {

    // ClassicEditor.create(document.querySelector('#description'), {
    //         ckfinder: {
    //             uploadUrl: "{{ $url }}",
    //         },
    //         toolbar: {
    //             items: [
    //                 'undo', 'redo',
    //                 '|', 'heading',
    //                 '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
    //                 '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
    //                 '|', 'link', 'uploadImage', 'blockQuote', 'codeBlock',
    //                 '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
    //             ],
    //             shouldNotGroupWhenFull: false
    //         }

    //     })
    //     .catch(error => {
    //         console.error(error);
    //     });
    })
</script>
@endpush