@extends('admin.layouts.master')
@section('title', 'Tambah Testimoni')

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.testimonial.index') }}">Testimoni</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Testimoni
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Tambah Testimoni</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.testimonial.store') }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12 mb-3">
                <label for="person_name" class="form-label required">Nama Orang/Instansi</label>
                <input type="text" name="person_name" id="person_name" class="form-control @error('person_name') is-invalid @enderror" placeholder="Masukkan Nama Orang/Instansi" value="{{ old('person_name') }}" required>
                @error('person_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="message" class="form-label required">Pesan Testimoni</label>
                <textarea name="message" id="message" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="Masukkan Pesan Testimoni" required>{!! old('message') !!}</textarea>
                @error('message')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                    <span class="tf-icons bx bx-plus me-1"></span> Tambahkan Testimoni
                </button>
            </div>
        </form>
    </div>
</div>
@endsection