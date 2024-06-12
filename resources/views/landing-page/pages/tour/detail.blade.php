@extends('landing-page.layouts.master')
@section('title')
    {{ $data->title }}
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/lightbox/css/lightbox.min.css') }}">
@endpush

@section('content')

<div class="vacation-hero">
    <div class="grid-wrapper">
        <div id="w-node-_21a73135-ae5d-bce8-1441-6df1bec9e5fa-1fc93e2e" class="product-hero-content">
            <div class="vacation-hero-intro">
                <div class="subtitle-text-wrapper">{{ $data->destination->title }}</div>
                <h1 bind="21a73135-ae5d-bce8-1441-6df1bec9e5fc" class="xxl-heading">{{ $data->title }}</h1>
            </div>
        </div>
        <div data-delay="4000" data-animation="over" class="hero-slider w-slider" data-autoplay="false"
            data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
            data-nav-spacing="3" data-duration="0" data-infinite="true"
            id="w-node-_21a73135-ae5d-bce8-1441-6df1bec9e5fe-1fc93e2e">
            <div class="hero-slider-mask w-slider-mask">
                <div class="hero-slide w-slide">
                    <div class="slider-background-wrapper hero-wrapper">
                        <div class="slider-background">
                            <div bind="21a73135-ae5d-bce8-1441-6df1bec9e603" class="background" style="background-image: url('{{ $data->getImageURL() }}')">
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="hero-slide w-slide">
                    <div class="slider-background-wrapper hero-wrapper">
                        <div class="slider-background">
                            <div bind="62f32ab2-f636-c36b-e495-f2545c54c733" class="background">
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide w-slide">
                    <div class="slider-background-wrapper hero-wrapper">
                        <div class="slider-background">
                            <div bind="6a4d3bc4-b0de-80b0-bfee-4b6ca2e5763a" class="background">
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="product-slider-arrow left w-slider-arrow-left"><img src="{{ asset('assets/landing-page/images/arrow-left24x242x-1.svg') }}"
                    loading="lazy" alt="" class="slider-arrow-icon"></div>
            <div class="product-slider-arrow w-slider-arrow-right"><img src="{{ asset('assets/landing-page/images/arrow-right24x242x-1.svg') }}"
                    loading="lazy" alt="" class="slider-arrow-icon"></div>
            <div class="slide-nav w-slider-nav w-round"></div> --}}
        </div>
    </div>
</div>
<div>
    <div class="grid-wrapper">
        <div id="w-node-e62bc3cd-5135-ad6b-ea6e-9d66a9b9d99d-1fc93e2e" class="vacation-features">
            <div class="feature-item">
                <div id="w-node-a91dd53f-68a2-cdfa-c36c-482c46607fdd-1fc93e2e" class="feature-icon"><img
                        src="{{ asset('assets/landing-page/images/room002.svg') }}" loading="lazy" alt="" class="vacation-icon"></div>
                <div id="w-node-_2cd1b510-6197-d6a4-e2a4-c8320b100d46-1fc93e2e" class="feature-text">
                    <div class="subtitle black">Room type</div>
                    <div bind="d5825f94-a977-90f3-33a1-cafd1420e3de">{{ $data->room_type }}</div>
                </div>
            </div>
            <div class="verticle-line"></div>
            <div class="feature-item">
                <div id="w-node-c76993b6-f388-189d-6e16-b0525de00599-1fc93e2e" class="feature-icon"><img
                        src="{{ asset('assets/landing-page/images/Excursions.svg') }}" loading="lazy" alt="" class="vacation-icon"></div>
                <div id="w-node-c76993b6-f388-189d-6e16-b0525de0059a-1fc93e2e" class="feature-text">
                    <div class="subtitle black">Destinations</div>
                    <div bind="c76993b6-f388-189d-6e16-b0525de0059d">{{ $data->total_destination }}</div>
                </div>
            </div>
            <div id="w-node-_84d8f0a4-0f3e-bad8-a6b6-b6079facb944-1fc93e2e" class="verticle-line"></div>
            <div class="feature-item">
                <div id="w-node-_3d571470-2c5f-f56f-d5dc-ace0e0226399-1fc93e2e" class="feature-icon"><img
                        src="{{ asset('assets/landing-page/images/Transportation.svg') }}" loading="lazy" alt="" class="vacation-icon"></div>
                <div id="w-node-_3d571470-2c5f-f56f-d5dc-ace0e022639a-1fc93e2e" class="feature-text">
                    <div class="subtitle black">Transportation</div>
                    <div>{{ $data->transportation }}</div>
                </div>
            </div>
            <div class="verticle-line"></div>
            <div class="feature-item">
                <div id="w-node-ca603036-1de6-8e7b-c1e4-638574f5300f-1fc93e2e" class="feature-icon"><img
                        src="{{ asset('assets/landing-page/images/Guideno.svg') }}" loading="lazy" bind="c4bb9eb2-2ec9-3e07-0f89-c2d614c092ec" alt=""
                        class="vacation-icon"><img src="{{ asset('assets/landing-page/images/Guideyes.svg') }}" loading="lazy"
                        bind="de9cc203-6945-047a-f582-acb72168a20a" alt="" class="vacation-icon"></div>
                <div id="w-node-ca603036-1de6-8e7b-c1e4-638574f53010-1fc93e2e" class="feature-text">
                    <div class="subtitle black">Tour guide</div>
                    <div bind="ca603036-1de6-8e7b-c1e4-638574f53013">{{ $data->tour_guide }}</div>
                </div>
            </div>
        </div>
        <div id="w-node-_9ec3fe01-adae-faff-0772-7c2387d3d521-1fc93e2e" class="horizontal-line left"></div>
    </div>
</div>

@if ($data->galleries->count() > 0)
    <div class="product-images-row">
        <div class="grid-wrapper">
            <div id="w-node-d2061ad0-5899-1e1a-4f90-c5f927733ede-1fc93e2e" class="vacation-images">
                <div class="large-vacation-image">
                    <a href="{{ $data->galleries->first()->getImageURL() }}" data-lightbox="image-1" data-title="{{ $data->title }} - Gambar 1" class="tour-link-gallery">
                        <img src="{{ $data->galleries->first()->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" class="tour-gallery" alt="">
                    </a>
                </div>
                
                <div bind="379dacf7-e3a1-5edd-7214-b67167607926" class="w-dyn-list">
                    @if ($data->galleries->count() > 1)
                        <div bind="379dacf7-e3a1-5edd-7214-b67167607927" role="list" class="small-image-grid w-dyn-items">
                            @foreach ($data->galleries as $gallery)
                                @if ($loop->iteration != 1)
                                    <div bind="379dacf7-e3a1-5edd-7214-b67167607928" role="listitem" class="w-dyn-item">
                                        <div class="small-vacation-image tour-gallery-box">
                                            <a href="{{ $gallery->getImageURL() }}" data-lightbox="image-1" data-title="{{ $data->title }} - Gambar {{ $loop->iteration }}" class="tour-link-gallery">
                                                <img src="{{ $gallery->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" class="tour-gallery" alt="">
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            {{-- <div bind="379dacf7-e3a1-5edd-7214-b67167607928" role="listitem" class="w-dyn-item">
                                <div class="small-vacation-image tour-gallery-box">
                                    <a href="{{ $data->getImageURL() }}" data-lightbox="image-1" data-title="{{ $data->title }}" class="tour-link-gallery">
                                        <img src="{{ $data->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" class="tour-gallery" alt="">
                                    </a>
                                </div>
                            </div>
                            <div bind="379dacf7-e3a1-5edd-7214-b67167607928" role="listitem" class="w-dyn-item">
                                <div class="small-vacation-image tour-gallery-box">
                                    <a href="{{ $data->getImageURL() }}" data-lightbox="image-1" data-title="{{ $data->title }}" class="tour-link-gallery">
                                        <img src="{{ $data->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" class="tour-gallery" alt="">
                                    </a>
                                </div>
                            </div>
                            <div bind="379dacf7-e3a1-5edd-7214-b67167607928" role="listitem" class="w-dyn-item">
                                <div class="small-vacation-image tour-gallery-box">
                                    <a href="{{ $data->getImageURL() }}" data-lightbox="image-1" data-title="{{ $data->title }}" class="tour-link-gallery">
                                        <img src="{{ $data->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" class="tour-gallery" alt="">
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    @else
                        <div bind="379dacf7-e3a1-5edd-7214-b67167607929" class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif

<div class="vacation-info">
    <div class="grid-wrapper">
        <div id="w-node-_8fbdfe59-b1e5-732b-4591-ecaad86e5865-1fc93e2e" class="vacation-content">
            <div id="w-node-_32a8c887-6766-a3e0-4779-4f1835f5e5e9-1fc93e2e" class="vacation-body">
                {{-- <div sym-bind="{&quot;children&quot;:{&quot;type&quot;:&quot;Call&quot;,&quot;val&quot;:{&quot;fun&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:[&quot;DynamoGateway&quot;,&quot;dynamoRichTextToRichTextChildren&quot;]},&quot;arg&quot;:{&quot;type&quot;:&quot;Select&quot;,&quot;val&quot;:{&quot;from&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:&quot;Dynamo&quot;},&quot;prop&quot;:&quot;body-description&quot;}}}}}"
                    class="rich-text w-dyn-bind-empty w-richtext">
                </div> --}}

                <div class="tour-content">
                    {!! $data->description !!}
                </div>
            </div>
            <div id="w-node-dccf8652-1582-27e9-9b28-67ebbfc6c9f1-1fc93e2e" class="inquire-card">
                <div class="price-grid vacations">
                    <div><strong class="field-label">Price</strong></div>
                    <div bind="6ab3c684-ac9a-4cf1-b559-d92f238a0cea" class="text-price">@idr($data->price)</div>
                </div>
                <a href="https://wa.me/{{ $setting->whatsapp_number }}" target="_blank"
                    class="quick-link-item whatsapp w-inline-block">
                    <div id="w-node-_8eadd785-7b52-993c-1499-9e188ef2d282-1fc93e2e" class="text-block-4 putih">Whatsapp Us
                    </div><img src="{{ asset('assets/landing-page/images/icons8-whatsapp-1.svg') }}" loading="lazy" width="25"
                        id="w-node-_8eadd785-7b52-993c-1499-9e188ef2d284-1fc93e2e" alt="">
                </a>
                <div class="inquire-form-wrapper">
                    <div bind="9aa7f5e8-b7ee-2e8d-8149-60cb3399a7b8" class="inquire-form w-form">
                        <div class="text-block-3"><strong>Booking Form</strong></div>
                        <form id="wf-form-Inquire-Form" name="wf-form-Inquire-Form" data-name="Inquire Form"
                            method="get" class="form" data-wf-page-id="65af9bd818d9ae9f1fc93e2e"
                            data-wf-element-id="9aa7f5e8-b7ee-2e8d-8149-60cb3399a7bc">
                            <div class="contact-fields">
                                <div class="contact-field-wrapper"><label for="First-name-3"
                                        id="w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7bf-1fc93e2e"
                                        class="field-label">Name</label><input
                                        class="text-field w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7c1-1fc93e2e w-input"
                                        maxlength="256" name="First-name-2" data-name="First Name 2"
                                        placeholder="First name" type="text" id="First-name-2"><input
                                        class="text-field w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7c2-1fc93e2e w-input"
                                        maxlength="256" name="Last-name-2" data-name="Last Name 2"
                                        placeholder="Last name" type="text" id="Last-name-2"></div>
                                <div class="contact-field-wrapper"><label for="Email-3"
                                        id="w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7c4-1fc93e2e"
                                        class="field-label">Email</label><input
                                        class="text-field w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7c6-1fc93e2e w-input"
                                        maxlength="256" name="Email-3" data-name="Email 3" placeholder="Your email"
                                        type="email" id="Email-3"></div>
                                <div class="contact-field-wrapper"><label for="Phone-3"
                                        id="w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7c8-1fc93e2e"
                                        class="field-label">Phone</label><input
                                        class="text-field w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7ca-1fc93e2e w-input"
                                        maxlength="256" name="Phone-2" data-name="Phone 2"
                                        placeholder="(555) 555-5555" type="tel" id="Phone-2"></div>
                            </div><input type="submit" data-wait="Please wait..."
                                id="w-node-_9aa7f5e8-b7ee-2e8d-8149-60cb3399a7cb-1fc93e2e"
                                class="submit-button w-button" value="Inquire">
                        </form>
                        <div class="success-message grey w-form-done">
                            <div class="success-message-content">
                                <h3>Thank you!</h3>
                                <div>Your message has been received!</div>
                            </div>
                        </div>
                        <div class="error-state w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map-section">
    <div class="grid-wrapper">
        <div id="w-node-_0fc8157e-8b47-270b-f1cc-1eca6a0634ca-1fc93e2e" class="map-wrapper">
            <div sym-bind="{&quot;children&quot;:{&quot;type&quot;:&quot;Call&quot;,&quot;val&quot;:{&quot;fun&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:[&quot;DynamoGateway&quot;,&quot;dynamoRichTextToRichTextChildren&quot;]},&quot;arg&quot;:{&quot;type&quot;:&quot;Select&quot;,&quot;val&quot;:{&quot;from&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:&quot;Dynamo&quot;},&quot;prop&quot;:&quot;map&quot;}}}}}"
                class="map w-dyn-bind-empty w-richtext"></div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{ asset('assets/admin/vendor/libs/lightbox/js/lightbox.min.js') }}"></script>
<script>

</script>
@endpush