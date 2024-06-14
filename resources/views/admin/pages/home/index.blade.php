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
            Home
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <div class="d-flex flex-column gap-2">
            <h5 class="card-title mb-0">Home</h5>
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
        <form action="{{ route('admin.home.edit', $data->id) }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title-section">
            <h5 >Banner</h5>
            </div>
            <div class="col-6 mb-3">
                <label for="title_section_one" class="form-label required">Banner/Slider</label>
                <input type="file" name="slider_banner" id="slider_banner" class="form-control @error('slider_banner') is-invalid @enderror" placeholder="Masukkan Banner" value="{{ old('slider_banner', $data->slider_banner) }}">
                @error('slider_banner')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                <label for="text_top_banner" class="form-label required">Text Top</label>
                <input type="text" name="text_top_banner" id="text_top_banner" class="form-control @error('text_top_banner') is-invalid @enderror" placeholder="Masukkan Text Top" value="{{ old('text_top_banner', $data->text_top_banner) }}" required>
                @error('text_top_banner')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="title_banner" class="form-label required">Title</label>
                <input type="text" name="title_banner" id="title_banner" class="form-control @error('title_banner') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_banner', $data->title_banner) }}" required>
                @error('title_banner')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
           <div class="title-section">
            <h5>About JTRIP</h5>
            </div>
            <div class="col-12 mb-3">
                <label for="title_section_one" class="form-label required">Title</label>
                <input type="text" name="title_section_one" id="title_section_one" class="form-control @error('title_section_one') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_section_one', $data->title_section_one) }}" required>
                @error('title_section_one')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="desc_section_one" class="form-label required">Description</label>
                <textarea name="desc_section_one" id="desc_section_one" rows="5" class="form-control @error('desc_section_one') is-invalid @enderror" placeholder="Masukkan Description" required>{!! old('desc_section_one', $data->desc_section_one) !!}</textarea>
                @error('desc_section_one')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="title_section_one" class="form-label required">Banner/Image</label>
                <input type="file" name="image_section_one" id="image_section_one" class="form-control @error('image_section_one') is-invalid @enderror" placeholder="Masukkan Banner" value="{{ old('image_section_one', $data->image_section_one) }}">
                @error('image_section_one')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="title-section">
            <h5>Kenapa Harus Kami ?</h5>
            </div>
             <h6>Pertama</h6>
             <hr>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Icon</label>
                <div class="input-group input-group-merge">
                    <input type="file" name="icon_one" id="icon_one" class="form-control @error('icon_one') is-invalid @enderror" placeholder="Masukkan Icon" value="{{ old('icon_one', $data->icon_one) }}" >
                </div>
                @error('icon_one')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_one" id="title_one" class="form-control @error('title_one') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_one', $data->title_one) }}" required>
                </div>
                @error('title_one')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="desc_one" class="form-label required">Description</label>
                <textarea name="desc_one" id="desc_one" rows="5" class="form-control @error('desc_one') is-invalid @enderror" placeholder="Masukkan desc_one" required>{!! old('desc_one', $data->desc_one) !!}</textarea>
                @error('desc_one')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
             <h6>Kedua</h6>
             <hr>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Icon</label>
                <div class="input-group input-group-merge">
                    <input type="file" name="icon_two" id="icon_two" class="form-control @error('icon_two') is-invalid @enderror" placeholder="Masukkan Icon" value="{{ old('icon_two', $data->icon_two) }}">
                </div>
                @error('icon_two')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_two" id="title_two" class="form-control @error('title_two') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_two', $data->title_two) }}" required>
                </div>
                @error('title_two')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="desc_one" class="form-label required">Description</label>
                <textarea name="desc_two" id="desc_two" rows="5" class="form-control @error('desc_two') is-invalid @enderror" placeholder="Masukkan Description" required>{!! old('desc_two', $data->desc_two) !!}</textarea>
                @error('desc_two')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
             <h6>Ketiga</h6>
             <hr>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Icon</label>
                <div class="input-group input-group-merge">
                    <input type="file" name="icon_three" id="icon_three" class="form-control @error('icon_three') is-invalid @enderror" placeholder="Masukkan Icon" value="{{ old('icon_three', $data->icon_three) }}" >
                </div>
                @error('icon_three')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_three" id="title_three" class="form-control @error('title_three') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_three', $data->title_three) }}" required>
                </div>
                @error('title_three')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="desc_one" class="form-label required">Description</label>
                <textarea name="desc_three" id="desc_three" rows="5" class="form-control @error('desc_three') is-invalid @enderror" placeholder="Masukkan Deskripsi" required>{!! old('desc_three', $data->desc_three) !!}</textarea>
                @error('desc_three')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
            <div class="title-section">
            <h5>Bagaimana Untuk Booking ?</h5>
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Image</label>
                <div class="input-group input-group-merge">
                    <input type="file" name="image_section_three" id="image_section_three" class="form-control @error('image_section_three') is-invalid @enderror" placeholder="Masukkan Image" value="{{ old('image_section_three', $data->image_section_three) }}" >
                </div>
                @error('image_section_three')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_section_three" id="title_section_three" class="form-control @error('title_three') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_section_three', $data->title_section_three) }}" required>
                </div>
                @error('title_section_three')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="desc_one" class="form-label required">Description</label>
                <textarea name="desc_section_three" id="desc_section_three" rows="5" class="form-control @error('desc_section_three') is-invalid @enderror" placeholder="Masukkan Deskripsi" required>{!! old('desc_section_three', $data->desc_section_three) !!}</textarea>
                @error('desc_three')
                    <div class="invalid-feedback"></div>
                @enderror
            </div>
            <h6>Step 1</h6>
             <hr>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_step_one" id="title_step_one" class="form-control @error('title_step_one') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_step_one', $data->title_step_one) }}" required>
                </div>
                @error('title_step_one')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Description</label>
                <textarea name="desc_step_one" id="desc_step_one" rows="5" class="form-control @error('desc_step_one') is-invalid @enderror" placeholder="Masukkan Deskripsi" required>{!! old('desc_step_one', $data->desc_step_one) !!}</textarea>
                @error('desc_step_one')
                    <div class="invalid-feedback"></div>
                @enderror
                
            </div>
            <h6>Step 2</h6>
             <hr>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_step_two" id="title_step_two" class="form-control @error('title_step_two') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_step_two', $data->title_step_two) }}" required>
                </div>
                @error('title_step_two')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Description</label>
                <textarea name="desc_step_two" id="desc_step_two" rows="5" class="form-control @error('desc_step_two') is-invalid @enderror" placeholder="Masukkan Deskripsi" required>{!! old('desc_step_two', $data->desc_step_two) !!}</textarea>
                @error('desc_step_two')
                    <div class="invalid-feedback"></div>
                @enderror
                
            </div>
            <h6>Step 3</h6>
             <hr>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_step_three" id="title_step_three" class="form-control @error('title_step_three') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_step_three', $data->title_step_three) }}" required>
                </div>
                @error('title_step_three')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Description</label>
                <textarea name="desc_step_three" id="desc_step_three" rows="5" class="form-control @error('desc_step_three') is-invalid @enderror" placeholder="Masukkan Deskripsi" required>{!! old('desc_step_three', $data->desc_step_three) !!}</textarea>
                @error('desc_step_three')
                    <div class="invalid-feedback"></div>
                @enderror
                
            </div>
            <h6>Step 4</h6>
             <hr>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="title_step_four" id="title_step_four" class="form-control @error('title_step_four') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('title_step_four', $data->title_step_four) }}" required>
                </div>
                @error('title_step_four')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="whatsapp_number" class="form-label required">Description</label>
                <textarea name="desc_step_four" id="desc_step_four" rows="5" class="form-control @error('desc_step_four') is-invalid @enderror" placeholder="Masukkan Deskripsi" required>{!! old('desc_step_four', $data->desc_step_four) !!}</textarea>
                @error('desc_step_four')
                    <div class="invalid-feedback"></div>
                @enderror
                
            </div>
            <div class="title-section">
                <h5>JTRIP PROMISE</h5>
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Banner</label>
                <div class="input-group input-group-merge">
                    <input type="file" name="promise_banner" id="promise_banner" class="form-control @error('promise_banner') is-invalid @enderror" placeholder="Masukkan banner" value="{{ old('promise_banner', $data->promise_banner) }}" >
                </div>
                @error('promise_banner')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="whatsapp_number" class="form-label required">Title</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="promise" id="promise" class="form-control @error('promise') is-invalid @enderror" placeholder="Masukkan Title" value="{{ old('promise', $data->promise) }}" required>
                </div>
                @error('promise')
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