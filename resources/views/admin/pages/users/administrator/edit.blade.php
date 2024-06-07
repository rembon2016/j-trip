@extends('admin.layouts.master')
@section('title', 'Ubah Administrator')

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.users.administrator.index') }}">Administrator</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Administrator
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Ubah Administrator</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.administrator.update', $data->id) }}" class="row" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            
            <div class="col-12 mb-3">
                <label for="name" class="form-label required">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $data->name) }}" placeholder="Masukkan Nama Lengkap" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label required">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', $data->email) }}" placeholder="Masukkan Email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">No. HP</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone', $data->phone) }}" placeholder="Masukkan Nomor HP">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Password">
                    <span class="input-group-text cursor-pointer see-password" data-target="#password">
                        <i class="bx bx-hide"></i>
                    </span>
                </div>

                <i class="d-block">
                    <small>*Kosongkan jika tidak ingin mengganti password</small>
                </i>

                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password">
                    <span class="input-group-text cursor-pointer see-password" data-target="#password_confirmation">
                        <i class="bx bx-hide"></i>
                    </span>
                </div>

                <i class="d-block">
                    <small>*Kosongkan jika tidak ingin mengganti password</small>
                </i>

                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="image" class="form-label">Foto Profil</label>
                <img src="{{ $data->getProfileImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Profil - {{ $data->name }}" class="preview-image" id="image-profile">
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'image-profile')" accept="image/*">
                <i class="d-block">
                    <small>*Kosongkan jika tidak ingin mengganti foto profil</small>
                </i>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="5" placeholder="Masukkan Alamat">{{ old('address', $data->address) }}</textarea>
                @error('address')
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