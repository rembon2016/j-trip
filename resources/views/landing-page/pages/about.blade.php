@extends('landing-page.layouts.master')
@section('title', 'About')

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/lightbox/css/lightbox.min.css') }}">
    <style>
        .team-images {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            list-style: none;
        }

        .team-images .gallery-box {
            height: 300px;
            flex: 1 1 auto;
            transition: all .15s linear;
        }

        .team-images .gallery-box img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            vertical-align: middle;
            border-radius: 5px;
            filter: grayscale(0);
        }

        .team-images .gallery-box:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.25);
            transform: translateY(-5px);
        }
    </style>
@endpush

@section('content')
<div class="hero-video-popup">
    <div class="flyout-overlay"></div>
    <div class="video-flyout">
        <div class="hero-video-wrapper">
            <div bind="56ddabc3-1225-825f-7f63-81ed551f0d00" style="padding-top:56.17021276595745%"
                class="w-embed-youtubevideo youtube"><iframe
                    src="https://www.youtube.com/embed/Ojiv9Smi4XE?rel=0&amp;controls=0&amp;autoplay=0&amp;mute=0&amp;start=0"
                    frameborder="0"
                    style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto"
                    allow="autoplay; encrypted-media" allowfullscreen=""
                    title="If life were like web design - Webflow"></iframe></div>
        </div>
    </div>
</div>
<div class="inner-page-hero">
    <div class="grid-wrapper">
        <div id="w-node-_783bbe3f-cd97-203e-588a-2e9b724c47ab-1fc93e20" class="inner-page-intro">
            <div id="w-node-_783bbe3f-cd97-203e-588a-2e9b724c47ac-1fc93e20" class="hero-intro">
                <div class="subtitle large">About J-trip</div>
                <h1 class="xxl-heading">{{ $about->title_about }}</h1>
            </div>
        </div>
    </div>
    <div class="hero-background-image about-hero-background" style="background-image:url({{ asset($about->banner_about) }}) !important">
        <div class="overlay dark"></div>
    </div>
</div>
<div class="section no-top-padding">
    <div class="grid-wrapper">
        <div id="w-node-_05ba988a-3d2b-3085-0a0f-234f4fa569fd-1fc93e20" class="about-us-intro">
            <div id="w-node-_801534d5-ba04-46f3-411c-673c54c00a87-1fc93e20" class="subtitle">the future of travel
            </div>
            <div class="intro-wrapper">
                <div id="w-node-ac3990dc-2eec-4ade-30bc-298d8b8dae42-1fc93e20" class="intro-content">
                    <div id="w-node-ac3990dc-2eec-4ade-30bc-298d8b8dae43-1fc93e20">
                        <div class="stacked-intro">
                            <h1>{{ $about->title }}</h1>
                            <div class="body-display large">{{ $about->description }}<br>‍</div>
                        </div>
                    </div>
                    <a id="w-node-ac3990dc-2eec-4ade-30bc-298d8b8dae4c-1fc93e20" href="{{ route('landing-page.contact') }}"
                        class="button w-inline-block">
                        <div>Contact us</div>
                    </a>
                </div>
                <div class="intro-right-image">
                    <div class="hero-background-image about-intro-background" style="background-image:url({{ asset($about->photo) }}) !important"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us-section">
    <div data-w-id="1e0731bf-724d-a468-c0ef-985cabb97b94" class="grid-wrapper">
        <div id="w-node-_1e0731bf-724d-a468-c0ef-985cabb97b95-1fc93e20" class="grey-cover"></div>
        <div id="w-node-_9e28f383-e08d-dd4f-1ce6-757c9e96fdc8-1fc93e20" class="mission-wrapper">
            <div id="w-node-fe90ca16-b977-8c59-e31a-b5bdad909786-1fc93e20" class="centered-intro">
                <div>
                    <div class="subtitle-wrapper">
                        <div class="subtitle">Our mission</div>
                    </div>
                    <h1>{{ $about->mission_title }}</h1>
                </div>
                <div class="body-display large">{{ $about->mission_description }}</div>
            </div>
            <div data-w-id="9d1c4b15-d541-b452-d535-fdcf19169a3b" class="team-images">
                @foreach ($galleries as $gallery)
                    <a href="{{ $gallery->getImageURL() }}" data-lightbox="image-1" data-title="{{ $gallery->caption }}" class="gallery-box">
                        <img src="{{ $gallery->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" loading="lazy" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('landing-page.components.contact-form')

@endsection

@push('script')
<script src="{{ asset('assets/admin/vendor/libs/lightbox/js/lightbox.min.js') }}"></script>
@endpush