@extends('admin.layouts.master')
@section('title', 'Ubah Web Setting')

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Web Setting
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <div class="d-flex flex-column gap-2">
            <h5 class="card-title mb-0">Web Setting</h5>
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
        <form action="{{ route('admin.setting.store') }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="col-12 mb-3">
                <label for="email" class="form-label required">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ old('email', $data->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="address" class="form-label required">Alamat</label>
                <textarea name="address" id="address" rows="5" class="form-control @error('address') is-invalid @enderror" placeholder="Masukkan Alamat" required>{!! old('address', $data->address) !!}</textarea>
                @error('address')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">No. Whatsapp</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">+62</span>
                    <input type="tel" name="whatsapp_number" id="whatsapp_number" class="form-control @error('whatsapp_number') is-invalid @enderror" placeholder="Masukkan No. Whatsapp" value="{{ old('whatsapp_number', $data->formatWhatsappNumber) }}" required>
                </div>
                @error('whatsapp_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label required">No. Telepon</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">+62</span>
                    <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Masukkan No. Telepon" value="{{ old('phone', $data->formatPhoneNumber) }}" required>
                </div>
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="instagram_url" class="form-label required">Instagram</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bxl-instagram"></i></span>
                    <input type="tel" name="instagram_url" id="instagram_url" class="form-control @error('instagram_url') is-invalid @enderror" placeholder="Masukkan Link Instagram" value="{{ old('instagram_url', $data->instagram_url) }}" required>
                </div>
                @error('instagram_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="facebook_url" class="form-label required">Facebook</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bxl-facebook-circle"></i></span>
                    <input type="tel" name="facebook_url" id="facebook_url" class="form-control @error('facebook_url') is-invalid @enderror" placeholder="Masukkan Link Facebook" value="{{ old('facebook_url', $data->facebook_url) }}" required>
                </div>
                @error('facebook_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <label for="tiktok_url" class="form-label required">Tiktok</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bxl-tiktok"></i></span>
                    <input type="tel" name="tiktok_url" id="tiktok_url" class="form-control @error('tiktok_url') is-invalid @enderror" placeholder="Masukkan Link Tiktok" value="{{ old('tiktok_url', $data->tiktok_url) }}" required>
                </div>
                @error('tiktok_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <label for="linkedin_url" class="form-label required">LinkedIn</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bxl-linkedin"></i></span>
                    <input type="tel" name="linkedin_url" id="linkedin_url" class="form-control @error('linkedin_url') is-invalid @enderror" placeholder="Masukkan Link LinkedIn" value="{{ old('linkedin_url', $data->linkedin_url) }}" required>
                </div>
                @error('linkedin_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-12 mb-3">
                <label for="twitter_url" class="form-label required">Twitter / X</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bxl-twitter"></i></span>
                    <input type="tel" name="twitter_url" id="twitter_url" class="form-control @error('twitter_url') is-invalid @enderror" placeholder="Masukkan Link Twitter / X" value="{{ old('twitter_url', $data->twitter_url) }}" required>
                </div>
                @error('twitter_url')
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