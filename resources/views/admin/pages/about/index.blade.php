@extends('admin.layouts.master')
@section('title', 'Home Page')

@push('head')
<style>
.title-section{
    background-color:#a52f4c;
    padding-top:5px;
    padding-left:10px;
    color:white;
    border-radius:10px;
    margin-bottom:10px
}
.title-section h5{
    color:#ffffff;   
}
</style>
@endpush
@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            About
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <div class="d-flex flex-column gap-2">
            <h5 class="card-title mb-0">About</h5>
            <div class="">
                @if (!is_null($data->updated_at))
                    <small class="inline-flex align-items-center text-muted">
                        <i class="bx bx-time me-1"></i> Terakhir Diperbarui {{ $data->updated_at->diffForHumans() }} 
                        @if (!is_null($data->updated_by)) oleh {{ $data->updatedBy?->name }} @endif
                    </small>
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.about.edit', $data->id) }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title-section">
            <h5 >Banner</h5>
            </div>
            <div class="col-6 mb-3">
                <label for="title_banner" class="form-label required">Title</label>
                <input type="text" name="title_about" id="title_about" class="form-control @error('title_about') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_about', $data->title_about) }}" required>
                @error('title_about')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                <label for="title_section_one" class="form-label required">Banner/Image</label>
                <input type="file" name="banner_about" id="banner_about" class="form-control @error('banner_about') is-invalid @enderror" placeholder="Masukkan Banner" value="{{ old('banner_about', $data->banner_about) }}" >
                @error('banner_about')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
           <div class="title-section">
            <h5>About JTRIP</h5>
            </div>
            <div class="col-6 mb-3">
                <label for="title_section_one" class="form-label required">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title', $data->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
             <div class="col-6 mb-3">
                <label for="title_section_one" class="form-label required">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Masukkan Photo" value="{{ old('photo', $data->photo) }}" >
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="desc_section_one" class="form-label required">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan Description" required>{!! old('description', $data->description) !!}</textarea>
                @error('description')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
            
            <div class="title-section">
            <h5>Mission</h5>
            </div>

            <div class="col-6 mb-3">
                <label for="title_section_one" class="form-label required">Title</label>
                <input type="text" name="mission_title" id="mission_title" class="form-control @error('mission_title') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('mission_title', $data->mission_title) }}" required>
                @error('mission_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-12 mb-3">
                <label for="desc_section_one" class="form-label required">Description</label>
                <textarea name="mission_description" id="mission_description" rows="5" class="form-control @error('mission_description') is-invalid @enderror" placeholder="Masukkan Description" required>{!! old('mission_description', $data->mission_description) !!}</textarea>
                @error('mission_description')
                    <div class="invalid-feedback"></div>
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