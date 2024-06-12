@extends('admin.layouts.master')
@section('title', 'Ubah Destinasi')

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.tour.index') }}">Destinasi</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Destinasi
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Ubah Destinasi</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.tour.update', $data->id) }}" class="row" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            
            <div class="col-12 mb-3">
                <label for="title" class="form-label required">Nama Tour</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Nama Tour" value="{{ old('title', $data->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="destination_id" class="form-label required">Destinasi / Lokasi</label>
                <select name="destination_id" id="destination_id" class="form-select select2 @error('destination_id') is-invalid @enderror" required>
                    <option value="" @selected(is_null(old('destination_id', $data->destination_id)))>Pilih Destinasi / Lokasi</option>
                    @foreach ($destinations as $item)
                        <option value="{{ $item->id }}" @selected(old('destination_id', $data->destination_id) == $item->id)>{{ $item->title }}</option>
                    @endforeach
                </select>
                @error('destination_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="tour_type_id" class="form-label required">Tipe Tour</label>
                <select name="tour_type_id" id="tour_type_id" class="form-select select2 @error('tour_type_id') is-invalid @enderror" required>
                    <option value="" @selected(is_null(old('tour_type_id', $data->tour_type_id)))>Pilih Tipe Tour</option>
                    @foreach ($types as $item)
                        <option value="{{ $item->id }}" @selected(old('tour_type_id', $data->tour_type_id) == $item->id)>{{ $item->title }}</option>
                    @endforeach
                </select>
                @error('tour_type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mb-3">
                <label for="description" class="form-label required">Deskripsi</label>
                <textarea name="description" id="description" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Deskripsi Tour">{!! old('description', $data->description) !!}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="price" class="form-label required">Harga</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Rp</span>
                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="0" value="{{ old('price', $data->price) }}" min="0" required>
                </div>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="total_destination" class="form-label required">Jumlah Destinasi</label>
                <div class="input-group input-group-merge">
                    <input type="text" name="total_destination" id="total_destination" class="form-control @error('total_destination') is-invalid @enderror" placeholder="0" min="0" value="{{ old('total_destination', $data->total_destination) }}" required>
                    <span class="input-group-text">Destinasi</span>
                </div>
                @error('total_destination')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <label for="room_type" class="form-label required">Tipe Kamar</label>
                <input type="text" name="room_type" id="room_type" class="form-control @error('room_type') is-invalid @enderror" placeholder="Masukkan Tipe Kamar" value="{{ old('room_type', $data->room_type) }}" required>
                @error('room_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <label for="transportation" class="form-label required">Transportasi</label>
                <input type="text" name="transportation" id="transportation" class="form-control @error('transportation') is-invalid @enderror" placeholder="Masukkan Transportasi" value="{{ old('transportation', $data->transportation) }}" required>
                @error('transportation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-lg-4 mb-3">
                <label for="tour_guide" class="form-label required">Tour Guide</label>
                <input type="text" name="tour_guide" id="tour_guide" class="form-control @error('tour_guide') is-invalid @enderror" placeholder="Masukkan Tour Guide" value="{{ old('tour_guide', $data->tour_guide) }}" required>
                @error('tour_guide')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="col-12 mb-3">
                <label for="galleries" class="form-label required">Galeri</label>
                <div class="dz-message needsclick">
                    Drop files here or click to upload
                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
                </div>
                <div class="fallback">
                    <input name="file" type="file" />
                </div>
            </div> --}}

            <div class="col-md-4 mb-3">
                <label for="image" class="form-label">Thumbnail</label>
                <img src="{{ $data->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Thumbnail Tour" class="preview-image" id="preview-image">
            </div>

            <div class="col-md-8 mb-3">
                <div class="mb-3">
                    <label for="" class="form-label">Upload Thumbnail</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'preview-image')" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    @php
                        $isFeatured = $data->is_featured ? 'true' : 'false';
                    @endphp
                    <label for="is_featured" class="form-label required">Fiturkan Tour Ini?</label>
                    <label class="switch">
                        <input type="checkbox" name="is_featured" id="is_featured" value="true" class="switch-input" @checked(old('is_featured', $isFeatured) == 'true') />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Fiturkan</span>
                    </label>
                </div>
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

@push('script')
@php
    $url = route('admin.content.upload', [
        '_token' => csrf_token()
    ]);
@endphp

<script src="{{ asset('assets/admin/vendor/libs/ckeditor/ckeditor.js') }}"></script>
<script>
    $(document).ready(function() {

        ClassicEditor.create(document.querySelector('#description'), {
            ckfinder: {
                uploadUrl: "{{ $url }}",
            },
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'uploadImage', 'blockQuote', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                ],
                shouldNotGroupWhenFull: false
            }

        })
        .catch(error => {
            console.error(error);
        });
    })
</script>
@endpush