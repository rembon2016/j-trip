@extends("landing-page.layouts.master")
@section('title', 'Home')

@section('content')

<div style="display:none" class="hero-video-popup">
    <div data-w-id="2e863ef6-e482-6b96-bc88-10737fc02bf5" style="background-color:rgba(15,19,38,0)" class="flyout-overlay"></div>
    <div style="-webkit-transform:translate3d(0, 80px, 0) scale3d(0.95, 0.95, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 3deg);-moz-transform:translate3d(0, 80px, 0) scale3d(0.95, 0.95, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 3deg);-ms-transform:translate3d(0, 80px, 0) scale3d(0.95, 0.95, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 3deg);transform:translate3d(0, 80px, 0) scale3d(0.95, 0.95, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 3deg);opacity:0" class="hero-video-wrapper">
        <div bind="b45b2c9f-c040-a432-bd86-ed974e5ce341" id="w-node-b45b2c9f-c040-a432-bd86-ed974e5ce341-1fc93e1d" style="padding-top:56.17021276595745%" class="w-embed-youtubevideo youtube">
            <iframe src="https://www.youtube.com/embed/Ojiv9Smi4XE?rel=0&amp;controls=0&amp;autoplay=0&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen="" title="If life were like web design - Webflow"></iframe>
        </div>
        <a data-w-id="198456e5-2799-851b-5ca6-caf3f237dd59" href="#" class="close-link w-inline-block"><img src="{{ asset('assets/landing-page/images/close.svg') }}" loading="lazy" width="18" id="w-node-b2b6fcff-2256-7008-e1f2-ac5bd83d761f-1fc93e1d" alt="">
            <div>Close</div>
        </a>
    </div>
</div>

<div class="home-hero">
    <div class="grid-wrapper">
        <div id="w-node-bdc50d02-a8e6-7b91-2785-9db5368500c9-1fc93e1d" class="home-hero-content">
            <div id="w-node-d9699e8d-5b86-d263-ba3a-4083a13e67b1-1fc93e1d" style="opacity:1" class="home-hero-intro">
                <div class="home-hero-title">
                    <div class="subtitle white">{{ $home->text_top_banner }}</div>
                    <h1 class="xxl-heading">{{ $home->title_banner }}</h1>
                </div>
                <a id="w-node-_25de05f7-08d0-50ef-c5bb-1fe7c0bf0591-1fc93e1d" href="{{ route('landing-page.contact') }}" class="button white w-inline-block">
                    <div id="w-node-df0925e9-a1d7-37c2-e250-10ca7c519c36-1fc93e1d">Contact us</div>
                </a>
            </div>

            <div id="w-node-_7d85c290-4594-ba2d-819b-8cc7e4136051-1fc93e1d" class="hero-video-button">
                <div data-w-id="92419f24-4dfe-75b7-3b18-05ee740b1ce8" class="video-button-verlay"></div>
                <div data-w-id="d885e8b6-584a-9045-40e3-d4c0934671a1" class="video-button-background">
                    <div data-poster-url="https://uploads-ssl.webflow.com/60675f13ea324fdd4af9ef2a/60785e47c656dc751d6416ef_Video002-poster-00001.jpg" data-video-urls="{{ asset('assets/landing-page/videos/Video002-transcode.mp4') }},{{ asset('assets/landing-page/videos/Video002-transcode.webm') }}" data-autoplay="true" data-loop="true" data-wf-ignore="true" data-w-id="89794eb1-1b46-f009-1590-985be62574a8" class="button-video w-background-video w-background-video-atom">
                        <video id="89794eb1-1b46-f009-1590-985be62574a8-video" autoplay="" loop="" style="background-image:url(&quot;https://uploads-ssl.webflow.com/60675f13ea324fdd4af9ef2a/60785e47c656dc751d6416ef_Video002-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source src="{{ asset('assets/landing-page/videos/Video002-transcode.mp4') }}" data-wf-ignore="true">
                            <source src="{{ asset('assets/landing-page/videos/Video002-transcode.webm') }}" data-wf-ignore="true">
                        </video>
                        <div class="overlay light"></div>
                    </div>
                </div>

                <div data-w-id="ca3be69e-e051-32b2-4f5c-7e6dc5a38341" class="video-hover-button">
                    <div data-w-id="ea6d82c1-9c45-719b-d93b-ec56aa0de7d4" class="video-icon-wrapper">
                        <img src="{{ asset('assets/landing-page/images/play-icon.svg') }}" loading="lazy" width="14" alt="" class="video-icon">
                    </div>
                </div>

                <div data-w-id="57e10d4d-c29f-5efb-aa5b-30eaf959431b" class="video-button-waves">
                    <div data-w-id="31614083-e546-96c1-6895-83f7ed6ef726" class="wave-one"></div>
                    <div data-w-id="c3b9a84c-9578-968e-259e-578078085788" class="wave-two"></div>
                </div>
            </div>

            <div id="w-node-_405918fc-54de-0cd2-288a-94f88ac10719-1fc93e1d" class="subtitle-intro-wrapper">
                <div id="w-node-_405918fc-54de-0cd2-288a-94f88ac1071a-1fc93e1d" class="subtitle white">Rekomendasi tour</div>
                <div id="w-node-_405918fc-54de-0cd2-288a-94f88ac1071c-1fc93e1d" class="horizontal-line"></div>
            </div>

        </div>
        <div data-delay="4000" data-animation="over" class="hero-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true" id="w-node-c48b0112-662b-903b-413b-ccc63315bf6b-1fc93e1d">
            <div class="hero-slider-mask w-slider-mask">
                <div class="hero-slide w-slide">
                    <div bind="046de11e-34eb-e247-1191-52218888fd80" class="hero-collection-wrapper w-dyn-list">
                        <div bind="046de11e-34eb-e247-1191-52218888fd81" role="list" class="w-dyn-items">
                            <div bind="046de11e-34eb-e247-1191-52218888fd82" role="listitem" class="w-dyn-item">
                                <div class="slider-background-wrapper hero-wrapper">
                                    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="slider-background">
                                        <div bind="c48b0112-662b-903b-413b-ccc63315bf70" class="background one" style="background-image:url({{ asset($home->slider_banner) }}) !important">
                                            <div class="overlay"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-bottom">
                                    <div class="bottom-grid-wrapper">
                                        <a bind="e7257dc0-d99c-fd78-3059-6e0e6195bcb3" id="w-node-e7257dc0-d99c-fd78-3059-6e0e6195bcb3-1fc93e1d" href="#" class="featured-location w-inline-block">
                                            <div class="location-dynamic-text">
                                                <h3 bind="e7257dc0-d99c-fd78-3059-6e0e6195bcb4" class="featured-location-heading"></h3>
                                            </div>
                                            <div class="featured-location-price">
                                                <div class="subtitle black">Starting at</div>
                                                <div class="price-grid">
                                                    <div class="dolar-sign">Rp.</div>
                                                    <div bind="e7257dc0-d99c-fd78-3059-6e0e6195bcbc" class="subtitle black"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <a bind="e7257dc0-d99c-fd78-3059-6e0e6195bcbe" id="w-node-e7257dc0-d99c-fd78-3059-6e0e6195bcbe-1fc93e1d" href="#" class="featured-location-icon w-inline-block">
                                            <img src="{{ asset('assets/landing-page/images/chevron-right24x242x.svg') }}" loading="lazy" style="-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="featured-icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div bind="046de11e-34eb-e247-1191-52218888fd83" class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                </div>

                <div class="hero-slide w-slide">
                    <div bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c8a" class="hero-collection-wrapper w-dyn-list">
                        <div bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c8b" role="list" class="w-dyn-items">
                            <div bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c8c" role="listitem" class="w-dyn-item">
                                <div class="slider-background-wrapper hero-wrapper">
                                    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="slider-background">
                                        <div bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c8f" class="background one">
                                            <div class="overlay"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-bottom">
                                    <div class="bottom-grid-wrapper">
                                        <a bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c93" id="w-node-ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c93-1fc93e1d" href="#" class="featured-location w-inline-block">
                                            <div class="location-dynamic-text">
                                                <h3 bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c95" class="featured-location-heading"></h3>
                                            </div>
                                            <div class="featured-location-price">
                                                <div class="subtitle black">Starting at</div>
                                                <div class="price-grid">
                                                    <div class="dolar-sign">Rp.</div>
                                                    <div bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2c9f" class="subtitle black"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <a bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2ca0" id="w-node-ce78cdb6-2ef0-cf25-7e75-7d8eb44c2ca0-1fc93e1d" href="#" class="featured-location-icon w-inline-block">
                                            <img src="{{ asset('assets/landing-page/images/chevron-right24x242x.svg') }}" loading="lazy" style="-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="featured-icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div bind="ce78cdb6-2ef0-cf25-7e75-7d8eb44c2ca2" class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-slide w-slide">
                    <div bind="32f1e4d4-94da-0389-f78c-5ef8eeb3605e" class="hero-collection-wrapper w-dyn-list">
                        <div bind="32f1e4d4-94da-0389-f78c-5ef8eeb3605f" role="list" class="w-dyn-items">
                            <div bind="32f1e4d4-94da-0389-f78c-5ef8eeb36060" role="listitem" class="w-dyn-item">
                                <div class="slider-background-wrapper hero-wrapper">
                                    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="slider-background">
                                        <div bind="32f1e4d4-94da-0389-f78c-5ef8eeb36063" class="background one">
                                            <div class="overlay"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-bottom">
                                    <div class="bottom-grid-wrapper">
                                        <a bind="32f1e4d4-94da-0389-f78c-5ef8eeb36067" id="w-node-_32f1e4d4-94da-0389-f78c-5ef8eeb36067-1fc93e1d" href="#" class="featured-location w-inline-block">
                                            <div class="location-dynamic-text">
                                                <h3 bind="32f1e4d4-94da-0389-f78c-5ef8eeb36069" class="featured-location-heading"></h3>
                                            </div>
                                            <div class="featured-location-price">
                                                <div class="subtitle black">Starting at</div>
                                                <div class="price-grid">
                                                    <div class="dolar-sign">Rp.</div>
                                                    <div bind="32f1e4d4-94da-0389-f78c-5ef8eeb36073" class="subtitle black"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <a bind="32f1e4d4-94da-0389-f78c-5ef8eeb36074" id="w-node-_32f1e4d4-94da-0389-f78c-5ef8eeb36074-1fc93e1d" href="#" class="featured-location-icon w-inline-block">
                                            <img src="{{ asset('assets/landing-page/images/chevron-right24x242x.svg') }}" loading="lazy" style="-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="featured-icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div bind="32f1e4d4-94da-0389-f78c-5ef8eeb36076" class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-id="c48b0112-662b-903b-413b-ccc63315bf7c" class="hero-slide-arrow w-slider-arrow-left">
                <img src="{{ asset('assets/landing-page/images/arrow-left24x242x-1.svg') }}" loading="lazy" data-w-id="c48b0112-662b-903b-413b-ccc63315bf7d" alt="" class="slider-arrow-icon">
            </div>
            <div data-w-id="c48b0112-662b-903b-413b-ccc63315bf7e" class="hero-slide-arrow left w-slider-arrow-right">
                <img src="{{ asset('assets/landing-page/images/arrow-right24x242x-1.svg') }}" loading="lazy" data-w-id="c48b0112-662b-903b-413b-ccc63315bf7f" alt="" class="slider-arrow-icon">
            </div>
            <div class="slide-nav w-slider-nav w-round"></div>
        </div>
    </div>
</div>

<div data-w-id="cd8b84e2-122f-2f95-3814-e1cc5811be8c" class="section no-padding">
    <div class="grid-wrapper">
        <div id="w-node-_5257c1c1-1242-fc82-3993-e7d0a581a745-1fc93e1d" class="grey-cover"></div>
            <div id="w-node-_73bfb911-5abf-b83c-0719-b8511c35c819-1fc93e1d" class="benefits-wrapper">
            <div class="intro-wrapper">
                <div id="w-node-d087621d-ac8d-a0ed-6c48-e29cbc4d0e33-1fc93e1d" class="intro-content">
                    <div id="w-node-fa000883-e681-1f32-b4fb-41a4628d3517-1fc93e1d">
                        <div class="subtitle-wrapper">
                            <div class="subtitle">Jtrip</div>
                        </div>
                        <div class="stacked-intro">
                            <h1>{{ $home->title_section_one }}</h1>
                            <div class="body-display large">{{ $home->desc_section_one }}</div>
                        </div>
                    </div>
                    <div id="w-node-f71590a7-bfd7-02c9-56d1-c040e0a4ad80-1fc93e1d" class="nav-button">
                        <a href="#contact" id="w-node-b448bacd-6c54-1516-cf4a-e6e6629a18ba-1fc93e1d" class="dropdown-button w-inline-block">
                            <div class="text-block-2">Mulai perjalanan bersama kami</div>
                        </a>
                    </div>
                </div>
                <div class="intro-right-image">
                    <div class="hero-background-image benefit-intro-background" style="background-image:url({{ asset($home->image_section_one) }}) !important">
                        <div style="display:block;-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="background-load-top"></div>
                        <div style="display:block;-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="background-load-bottom"></div>
                    </div>
                </div>
            </div>
            <div class="benefits-bottom">
                <div id="w-node-_0184a814-a10f-e92b-1ff1-ee723d0afa95-1fc93e1d" class="subtitle-intro-wrapper">
                    <div class="subtitle">Kenapa harus kami?</div>
                    <div id="w-node-_0184a814-a10f-e92b-1ff1-ee723d0afa98-1fc93e1d" class="horizontal-line"></div>
                </div>
                <div class="benefits-box">
                    <div class="benefit-card">
                        <div id="w-node-e4ae49cb-ae7c-509e-0507-b89bbec7dd33-1fc93e1d" class="benefit-icon"><img src="{{ asset($home->icon_one) }}" loading="lazy" alt=""></div>
                        <div class="benefit-description">
                            <h3>{{ $home->title_one }}</h3>
                            <div class="body-display small">{{ $home->desc_one }}</div>
                        </div>
                    </div>

                    <div class="verticle-line"></div>

                    <div class="benefit-card">
                        <div id="w-node-_4f395442-08b8-de95-696a-6c7cef4c3d56-1fc93e1d" class="benefit-icon"><img src="{{ asset($home->icon_two) }}" loading="lazy" alt=""></div>
                        <div class="benefit-description">
                            <h3>{{ $home->title_two }}</h3>
                            <div class="body-display small">{{ $home->desc_two }}</div>
                        </div>
                    </div>

                    <div id="w-node-_18ca4256-5f73-dd86-9407-a28c2397089a-1fc93e1d" class="verticle-line"></div>
                    
                    <div class="benefit-card">
                        <div id="w-node-_749848ad-5740-e571-8d39-3d396d1bd41b-1fc93e1d" class="benefit-icon"><img src="{{ asset($home->icon_three) }}" loading="lazy" alt=""></div>
                        <div class="benefit-description">
                            <h3>{{ $home->title_three }}</h3>
                            <div class="body-display small">{{ $home->desc_three }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="steps" class="section-2">
    <div class="grid-wrapper">
        <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721d4-1fc93e1d" class="steps-grid">
            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721d5-1fc93e1d" data-w-id="53cce03b-08df-9ab5-9bba-a960c77721d5" class="steps-sticky-card-2">
                <div class="how-to-image">
                    <div class="hero-background-image steps-background" style="background-image:url({{ asset($home->image_section_three) }}) !important">
                        <div style="display:block;-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="background-load-top"></div>
                        <div style="display:block;-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="background-load-bottom"></div>
                    </div>
                </div>
                <div class="steps-intro">
                    <div class="steps-description">
                        <div>
                            <div class="subtitle-wrapper">
                                <div class="subtitle">Private tour</div>
                            </div>
                            <h2>{{ $home->title_section_three }}</h2>
                        </div>
                        <div class="body-display-2 large">{{ $home->desc_section_three }}</div>
                    </div>
                </div>
            </div>
            
            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721e7-1fc93e1d" class="steps-cards">
                <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721e8-1fc93e1d" class="subtitle-intro-wrapper">
                    <div class="subtitle">Bagaimana untuk booking?</div>
                    <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721eb-1fc93e1d" class="horizontal-line-2"></div>
                </div>

                <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721ec-1fc93e1d" class="steps-tracker-2">
                    <div class="how-it-works-fill-2"></div>
                </div>
                
                <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721ee-1fc93e1d" class="steps-card-wrapper">
                    <div class="steps-card-2">
                        <div class="steps-circle-2">
                            <div class="steps-dot-2"></div>
                            <div class="card-arrow-2"></div>
                            <div class="steps-circle-outline-2"></div>
                        </div>
                        <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721f4-1fc93e1d" class="steps-content">
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721f5-1fc93e1d" class="steps-icon-2">
                                <div>1</div>
                            </div>
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c77721f8-1fc93e1d" class="steps-description">
                                <h3>{{ $home->title_step_one }}</h3>
                                <div class="body-display-2">{{ $home->desc_step_one }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="steps-card-2">
                        <div class="steps-circle-2 center">
                            <div class="card-arrow-2"></div>
                            <div class="steps-circle-outline-2 two"></div>
                            <div class="steps-dot-2"></div>
                        </div>

                        <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c7772202-1fc93e1d" class="steps-content">
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c7772203-1fc93e1d" class="steps-icon-2">
                                <div>2</div>
                            </div>
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c7772206-1fc93e1d" class="steps-description">
                                <h3>{{ $home->title_step_two }}</h3>
                                <div class="body-display-2">{{ $home->desc_step_two }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="steps-card-2">
                        <div class="steps-circle-2 center">
                            <div class="card-arrow-2"></div>
                            <div class="steps-circle-outline-2 three"></div>
                            <div class="steps-dot-2"></div>
                        </div>
                        <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c7772210-1fc93e1d" class="steps-content">
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c7772211-1fc93e1d" class="steps-icon-2">
                                <div>3</div>
                            </div>
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c7772214-1fc93e1d" class="steps-description">
                                <h3>{{ $home->title_step_three }}</h3>
                                <div class="body-display-2">{{ $home->desc_step_three }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="steps-card-2">
                        <div class="steps-circle-2 end">
                            <div class="card-arrow-2"></div>
                            <div class="steps-circle-outline-2 four"></div>
                            <div class="steps-dot-2"></div>
                        </div>
                        <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c777221e-1fc93e1d" class="steps-content">
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c777221f-1fc93e1d" class="steps-icon-2">
                                <div>4</div>
                            </div>
                            <div id="w-node-_53cce03b-08df-9ab5-9bba-a960c7772222-1fc93e1d" class="steps-description">
                                <h3>{{ $home->title_step_four }}</h3>
                                <div class="body-display-2">{{ $home->desc_step_four }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="grid-wrapper">
        <div id="w-node-_84d4702d-fca5-006a-d0b9-2b5ea654f940-1fc93e1d" class="centered-intro">
            <div class="subtitle">Destination</div>
            <h1>Destinasi untuk dikunjungi</h1>
        </div>
    </div>
    
    <div class="grid-wrapper">
        <div id="w-node-f819eacc-a4ec-5719-f0e0-94cdc3d50da2-1fc93e1d" data-w-id="f819eacc-a4ec-5719-f0e0-94cdc3d50da2" class="slider-wrapper">
            @if ($destinations->count() > 0)
                <div data-delay="10" data-animation="slide" class="location-card-slider w-slider" data-autoplay="true" data-easing="ease-out-expo" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="1" data-nav-spacing="3" data-duration="1800" data-infinite="true">
                    <div class="location-mask w-slider-mask">
                        @foreach($destinations as $destination)
                            <div class="location-slide w-slide">
                                <div bind="a1d57eeb-26af-5680-c657-f8f3b5deaab6" class="w-dyn-list">
                                    <div bind="a1d57eeb-26af-5680-c657-f8f3b5deaab7" role="list" class="w-dyn-items">
                                        <div bind="a1d57eeb-26af-5680-c657-f8f3b5deaab8" role="listitem" class="w-dyn-item">
                                            <a bind="95ff51c3-76bc-6d43-84ac-ac2021202aad" href="{{ route('landing-page.destination.detail', $destination->slug) }}" class="location-card-wrapper w-inline-block">
                                                <div class="location-image-wrapper">
                                                    <div bind="95ff51c3-76bc-6d43-84ac-ac2021202aae" class="location-image" style="background-image: url('{{ $destination->getImageURL() }}');">
                                                        <div class="background-load-top grey"></div>
                                                        <div class="background-load-bottom grey"></div>
                                                        <div class="gradient-overlay"></div>
                                                    </div>
                                                </div>
                                                <div class="location-card-content">
                                                    <div class="location-card-bottom">
                                                        <div id="w-node-_71cb5a78-86bf-9e29-4b8c-fa819c9cdb83-1fc93e1d" class="subtitle-dynamic-text">
                                                            <div bind="71cb5a78-86bf-9e29-4b8c-fa819c9cdb84" class="subtitle"></div>
                                                            <div bind="71cb5a78-86bf-9e29-4b8c-fa819c9cdb85" class="subtitle putih">{{ $destination->tours_count }} vacations</div>
                                                        </div>
                                                        <h2 bind="95ff51c3-76bc-6d43-84ac-ac2021202ab4">{{ $destination->title }}</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="location-slide w-slide">
                            <div bind="a1d57eeb-26af-5680-c657-f8f3b5deaab6" class="w-dyn-list">
                                <div bind="a1d57eeb-26af-5680-c657-f8f3b5deaab7" role="list" class="w-dyn-items">
                                    <div bind="a1d57eeb-26af-5680-c657-f8f3b5deaab8" role="listitem" class="w-dyn-item">
                                        <a bind="95ff51c3-76bc-6d43-84ac-ac2021202aad" href="{{ route('landing-page.destination.detail', 'tes') }}" class="location-card-wrapper w-inline-block">
                                            <div class="location-image-wrapper">
                                                <div bind="95ff51c3-76bc-6d43-84ac-ac2021202aae" class="location-image">
                                                    <div class="background-load-top grey"></div>
                                                    <div class="background-load-bottom grey"></div>
                                                    <div class="gradient-overlay"></div>
                                                </div>
                                            </div>
                                            <div class="location-card-content">
                                                <div class="location-card-bottom">
                                                    <div id="w-node-_71cb5a78-86bf-9e29-4b8c-fa819c9cdb83-1fc93e1d" class="subtitle-dynamic-text">
                                                        <div bind="71cb5a78-86bf-9e29-4b8c-fa819c9cdb84" class="subtitle"></div>
                                                        <div bind="71cb5a78-86bf-9e29-4b8c-fa819c9cdb85" class="subtitle putih">vacations</div>
                                                    </div>
                                                    <h2 bind="95ff51c3-76bc-6d43-84ac-ac2021202ab4"></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div bind="a1d57eeb-26af-5680-c657-f8f3b5deaab9" class="w-dyn-empty">
                                    <div>No items found.</div>
                                </div>
                            </div>
                        </div>
                        <div class="location-slide w-slide">
                            <div bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad026" class="w-dyn-list">
                                <div bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad027" role="list" class="w-dyn-items">
                                    <div bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad028" role="listitem" class="w-dyn-item">
                                        <a bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad029" href="{{ route('landing-page.destination.detail', 'tes') }}" class="location-card-wrapper w-inline-block">
                                            <div class="location-image-wrapper">
                                                <div bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad02b" class="location-image">
                                                    <div class="background-load-bottom grey"></div>
                                                    <div class="background-load-top grey"></div>
                                                    <div class="gradient-overlay"></div>
                                                </div>
                                            </div>
                                            <div class="location-card-content">
                                                <div class="location-card-bottom">
                                                    <div id="w-node-b1d50b6f-bddf-013e-c1d5-9a060c9ad02f-1fc93e1d" class="subtitle-dynamic-text">
                                                        <div bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad030" class="subtitle"></div>
                                                        <div bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad031" class="subtitle putih">vacations</div>
                                                    </div>
                                                    <h2 bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad033"></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div bind="b1d50b6f-bddf-013e-c1d5-9a060c9ad034" class="w-dyn-empty">
                                    <div>No items found.</div>
                                </div>
                            </div>
                        </div>
                        <div class="location-slide w-slide">
                            <div bind="8eb9e19c-cf84-cb15-4640-2a43498e05f7" class="w-dyn-list">
                                <div bind="8eb9e19c-cf84-cb15-4640-2a43498e05f8" role="list" class="w-dyn-items">
                                    <div bind="8eb9e19c-cf84-cb15-4640-2a43498e05f9" role="listitem" class="w-dyn-item">
                                        <a bind="8eb9e19c-cf84-cb15-4640-2a43498e05fa" href="{{ route('landing-page.destination.detail', 'tes') }}" class="location-card-wrapper w-inline-block">
                                            <div class="location-image-wrapper">
                                                <div class="background-load-top grey"></div>
                                                <div class="background-load-bottom grey"></div>
                                                <div bind="8eb9e19c-cf84-cb15-4640-2a43498e05fc" class="location-image">
                                                    <div class="gradient-overlay"></div>
                                                </div>
                                            </div>
                                            <div class="location-card-content">
                                                <div class="location-card-bottom">
                                                    <div id="w-node-_8eb9e19c-cf84-cb15-4640-2a43498e0600-1fc93e1d" class="subtitle-dynamic-text">
                                                        <div bind="8eb9e19c-cf84-cb15-4640-2a43498e0601" class="subtitle"></div>
                                                        <div bind="8eb9e19c-cf84-cb15-4640-2a43498e0602" class="subtitle putih">vacations</div>
                                                    </div>
                                                    <h2 bind="8eb9e19c-cf84-cb15-4640-2a43498e0604"></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div bind="8eb9e19c-cf84-cb15-4640-2a43498e0605" class="w-dyn-empty">
                                    <div>No items found.</div>
                                </div>
                            </div>
                        </div>
                        <div class="location-slide w-slide">
                            <div bind="27196b6a-53dd-d360-4c77-4e88f6891243" class="w-dyn-list">
                                <div bind="27196b6a-53dd-d360-4c77-4e88f6891244" role="list" class="w-dyn-items">
                                    <div bind="27196b6a-53dd-d360-4c77-4e88f6891245" role="listitem" class="w-dyn-item">
                                        <a bind="27196b6a-53dd-d360-4c77-4e88f6891246" href="{{ route('landing-page.destination.detail', 'tes') }}" class="location-card-wrapper w-inline-block">
                                            <div class="location-image-wrapper">
                                                <div class="background-load-bottom grey"></div>
                                                <div class="background-load-top grey"></div>
                                                <div bind="27196b6a-53dd-d360-4c77-4e88f6891248" class="location-image">
                                                    <div class="gradient-overlay"></div>
                                                </div>
                                            </div>
                                            <div class="location-card-content">
                                                <div class="location-card-bottom">
                                                    <div id="w-node-_27196b6a-53dd-d360-4c77-4e88f689124c-1fc93e1d" class="subtitle-dynamic-text">
                                                        <div bind="27196b6a-53dd-d360-4c77-4e88f689124d" class="subtitle"></div>
                                                        <div bind="27196b6a-53dd-d360-4c77-4e88f689124e" class="subtitle putih">vacations</div>
                                                    </div>
                                                    <h2 bind="27196b6a-53dd-d360-4c77-4e88f6891250"></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div bind="27196b6a-53dd-d360-4c77-4e88f6891251" class="w-dyn-empty">
                                    <div>No items found.</div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    @if ($destinations->count() > 1)
                        <div data-w-id="27a3bea2-d12a-ba11-93c3-9ee6aac4cbd0" class="slider-arrow w-slider-arrow-left">
                            <img src="{{ asset('assets/landing-page/images/arrow-left24x242x-1.svg') }}" loading="lazy" alt="" class="slider-arrow-icon">
                        </div>
                        <div class="slider-arrow right w-slider-arrow-right">
                            <img src="{{ asset('assets/landing-page/images/arrow-right24x242x-1.svg') }}" loading="lazy" alt="" class="slider-arrow-icon">
                        </div>
                        <div class="slide-nav w-slider-nav w-round"></div>
                    @endif
                </div>
            @else
                <div bind="8eb9e19c-cf84-cb15-4640-2a43498e0605" class="w-dyn-empty">
                    <div>No items found.</div>
                </div>
            @endif

        </div>
    </div>
</div>

@if ($testimonials->count() > 0)
    <div data-w-id="8ac66b88-23bd-7efa-9eac-ef7fb6ad860b" class="testimonial-section">
        <div class="grid-wrapper">
            <div id="w-node-_853f48eb-fa46-765d-8d1c-f2bad72f3ec2-1fc93e1d" class="testimonial-wrapper">
                <div data-delay="4000" data-animation="fade" class="testimonial-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="700" data-infinite="true">
                    {{-- <div class="testimonial-tracker">
                        @foreach($testimonials as $testimonial)
                            <div class="tracker-item">
                                <div>{{ $loop->iteration }}</div>

                                @if ($loop->iteration == 1)
                                    <div class="tracker-fill"></div>
                                @endif
                            </div>
                        @endforeach
                    </div> --}}
                    <div class="testimonial-mask w-slider-mask">
                        @foreach ($testimonials as $testimonial)
                            <div data-w-id="{{ $testimonial->id }}" class="testimonial-slide w-slide">
                                <div class="testimonial-slide-wrapper">
                                    {{-- <div class="testimonial-tracker in-slider">
                                        <div id="w-node-_198ff5d2-5a08-0656-0130-2ef9dbf11426-1fc93e1d" class="tracker-item in-slider">
                                            <div>{{ $loop->iteration }}</div>
                                        </div>
                                    </div> --}}
                                    <div class="testimonial-content">
                                        <div class="body-display large white">{{ $testimonial->message }}</div>
                                        <h3 class="testimonial-client">{{ $testimonial->person_name }}</h3>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                        {{-- <div data-w-id="bccfc712-9bc4-fa66-fa83-a12f1ccee408" class="testimonial-slide w-slide">
                            <div class="testimonial-slide-wrapper">
                                <div class="testimonial-tracker in-slider">
                                    <div id="w-node-bccfc712-9bc4-fa66-fa83-a12f1ccee40b-1fc93e1d" class="tracker-item in-slider">
                                        <div>2</div>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="body-display large white">Terima kasih untuk Jtrip atas turnya, kami jadi tahu destinasi-destinasi tour Jepang yang selama ini kita belum tahu</div>
                                    <h3 class="testimonial-client">Mr. Rianto &amp; Friends</h3>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="testimonial-arrow w-slider-arrow-left">
                        <img src="{{ asset('assets/landing-page/images/arrow-left24x242x-1.svg') }}" loading="lazy" alt="" class="slider-arrow-icon">
                    </div>
                    <div class="testimonial-arrow right w-slider-arrow-right">
                        <img src="{{ asset('assets/landing-page/images/arrow-right24x242x-1.svg') }}" loading="lazy" alt="" class="slider-arrow-icon">
                    </div>
                    <div class="slide-nav w-slider-nav w-round"></div>
                </div>
            </div>
        </div>

        <div class="background-cover">
            <div class="paralax-background">
                <div class="overlay dark"></div>
            </div>
        </div>
    </div>
@endif

<div class="section">
    <div class="grid-wrapper">
        <div id="w-node-_927528b0-6e0e-4b2c-6fb1-5dd4759e9ab4-1fc93e1d" class="membership-plans-wrapper">
            <div class="subtitle-intro-wrapper">
                <div id="w-node-e8d16186-dd05-131f-a1df-8804f13ad981-1fc93e1d" class="subtitle">Destinasi populer</div>
                <div id="w-node-e8d16186-dd05-131f-a1df-8804f13ad983-1fc93e1d" class="horizontal-line light"></div>
            </div>
            <div class="popular-vacations">
                <div class="vacations-tabs-wrapper">
                    <div data-duration-out="500" data-duration-in="500" data-current="Tab 1" data-easing="ease" class="vacations-tabs w-tabs">
                        <div class="vacations-tab-menu w-tab-menu">
                            @foreach ($destinations as $destination)
                                <a data-w-tab="Tab {{ $loop->iteration }}" id="w-node-_1cc7a0b4-f0a7-f8be-56e7-66fd8ffb1c9f-1fc93e1d" data-w-id="{{ $destination->id }}" class="vacations-tab-link w-inline-block w-tab-link @if($loop->iteration == 1) w--current @endif">
                                    <div class="membership-circle">
                                        <div class="membership-dot one"></div>
                                        <div class="membership-outline-circle"></div>
                                    </div>
                                    <div>{{ $destination->title }}</div>
                                </a>
                            @endforeach
                            {{-- <a data-w-tab="Tab 2" id="w-node-_1cc7a0b4-f0a7-f8be-56e7-66fd8ffb1ca5-1fc93e1d" data-w-id="1cc7a0b4-f0a7-f8be-56e7-66fd8ffb1ca5" class="vacations-tab-link w-inline-block w-tab-link">
                                <div class="membership-circle">
                                    <div class="membership-dot two"></div>
                                    <div class="membership-outline-circle"></div>
                                </div>
                                <div>Osaka</div>
                            </a>
                            <a data-w-tab="Tab 3" id="w-node-_39c403db-acbe-6505-7e69-7f7049339549-1fc93e1d" data-w-id="39c403db-acbe-6505-7e69-7f7049339549" class="vacations-tab-link w-inline-block w-tab-link">
                                <div class="membership-circle">
                                    <div class="membership-dot three"></div>
                                    <div class="membership-outline-circle"></div>
                                </div>
                                <div>Mt Fuji</div>
                            </a>
                            <a data-w-tab="Tab 4" id="w-node-_997e4316-3809-459f-0550-db78bd9b6f0c-1fc93e1d" data-w-id="997e4316-3809-459f-0550-db78bd9b6f0c" class="vacations-tab-link w-inline-block w-tab-link">
                                <div class="membership-circle">
                                    <div class="membership-dot four"></div>
                                    <div class="membership-outline-circle"></div>
                                </div>
                                <div>Kyoto</div>
                            </a> --}}
                        </div>
                        <div class="vacations-tabs-content w-tab-content">
                            @foreach ($destinations as $destination)
                                <div data-w-tab="Tab {{ $loop->iteration }}" class="w-tab-pane @if($loop->iteration == 1) w--tab-active @endif">
                                    <div bind="1a8ae3fa-816d-0096-5f84-a6afc94ceb46" class="collection-list-wrapper w-dyn-list">
                                        @if ($destination->tours->count() > 0)
                                            <div bind="1a8ae3fa-816d-0096-5f84-a6afc94ceb47" role="list" class="popular-vacations-wrapper w-dyn-items">
                                                @foreach ($destination->tours as $tour)
                                                    <div bind="1a8ae3fa-816d-0096-5f84-a6afc94ceb48" role="listitem" class="popular-location-item w-dyn-item">
                                                        <div data-w-id="d5cb7e54-02ce-4aa9-84b2-096ae6645eeb" class="vacations-verticle-card">
                                                            <div class="verticle-card-image">
                                                                <div bind="d5cb7e54-02ce-4aa9-84b2-096ae6645eed" data-w-id="d5cb7e54-02ce-4aa9-84b2-096ae6645eed" class="hero-background-image" style="background-image: url('{{ $tour->getImageURL() }}')"></div>
                                                            </div>
                                                            <div class="vacation-card-bottom">
                                                                <div class="vacation-card-info">
                                                                    <h3 bind="d5cb7e54-02ce-4aa9-84b2-096ae6645ef0">{{ $tour->title }}</h3>
                                                                    <div bind="d5cb7e54-02ce-4aa9-84b2-096ae6645ef2" class="body-display small">{{ $tour->type->title }}</div>
                                                                </div>
                                                                <div class="vacation-details">
                                                                    <div id="w-node-d5cb7e54-02ce-4aa9-84b2-096ae6645ef5-1fc93e1d" class="vacation-price">
                                                                        <div class="subtitle small">Rates from</div>
                                                                        <div class="dynamic-price-text">
                                                                            <div>@idr($tour->price)</div>
                                                                            <div bind="757eccdd-9287-375d-39c4-0329fff528d9"></div>
                                                                        </div>
                                                                    </div>
                                                                    <a bind="d5cb7e54-02ce-4aa9-84b2-096ae6645efa" href="{{ route('landing-page.tour.detail', $tour->slug) }}" class="outline-button small w-inline-block">
                                                                        <div>Details</div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div bind="1a8ae3fa-816d-0096-5f84-a6afc94ceb49" class="w-dyn-empty">
                                                <div>No items found.</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            
                            <div data-w-tab="Tab 2" class="w-tab-pane">
                                <div bind="d86ed033-6748-7d0c-1688-f5aaa5a62640" class="collection-list-wrapper w-dyn-list">
                                    <div bind="d86ed033-6748-7d0c-1688-f5aaa5a62641" role="list" class="popular-vacations-wrapper w-dyn-items">
                                        <div bind="d86ed033-6748-7d0c-1688-f5aaa5a62642" role="listitem" class="popular-location-item w-dyn-item">
                                            <div data-w-id="d86ed033-6748-7d0c-1688-f5aaa5a62643" class="vacations-verticle-card">
                                                <div class="verticle-card-image">
                                                    <div bind="d86ed033-6748-7d0c-1688-f5aaa5a62645" data-w-id="d86ed033-6748-7d0c-1688-f5aaa5a62645" class="hero-background-image"></div>
                                                </div>
                                                <div class="vacation-card-bottom">
                                                    <div class="vacation-card-info">
                                                        <h3 bind="d86ed033-6748-7d0c-1688-f5aaa5a62648"></h3>
                                                        <div bind="d86ed033-6748-7d0c-1688-f5aaa5a62649" class="body-display small"></div>
                                                    </div>
                                                    <div class="vacation-details">
                                                        <div id="w-node-d86ed033-6748-7d0c-1688-f5aaa5a6264b-1fc93e1d" class="vacation-price">
                                                            <div class="subtitle small">Rates from</div>
                                                            <div class="dynamic-price-text">
                                                                <div>Rp</div>
                                                                <div bind="d86ed033-6748-7d0c-1688-f5aaa5a62651"></div>
                                                            </div>
                                                        </div>
                                                        <a bind="d86ed033-6748-7d0c-1688-f5aaa5a62652" href="#" class="outline-button small w-inline-block">
                                                            <div>Details</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div bind="d86ed033-6748-7d0c-1688-f5aaa5a62655" class="w-dyn-empty">
                                        <div>No items found.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div data-w-tab="Tab 3" class="w-tab-pane">
                                <div bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7ea" class="collection-list-wrapper w-dyn-list">
                                    <div bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7eb" role="list" class="popular-vacations-wrapper w-dyn-items">
                                        <div bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7ec" role="listitem" class="popular-location-item w-dyn-item">
                                            <div data-w-id="e44119d0-4aa0-47d3-c3c7-943b58ecd7ed" class="vacations-verticle-card">
                                                <div class="verticle-card-image">
                                                    <div bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7ef" data-w-id="e44119d0-4aa0-47d3-c3c7-943b58ecd7ef" class="hero-background-image"></div>
                                                </div>
                                                <div class="vacation-card-bottom">
                                                    <div class="vacation-card-info">
                                                        <h3 bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7f2"></h3>
                                                        <div bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7f3" class="body-display small"></div>
                                                    </div>
                                                    <div class="vacation-details">
                                                        <div id="w-node-e44119d0-4aa0-47d3-c3c7-943b58ecd7f5-1fc93e1d" class="vacation-price">
                                                            <div class="subtitle small">Rates from</div>
                                                            <div class="dynamic-price-text">
                                                                <div>Rp</div>
                                                                <div bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7fb"></div>
                                                            </div>
                                                        </div>
                                                        <a bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7fc" href="#" class="outline-button small w-inline-block">
                                                            <div>Details</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div bind="e44119d0-4aa0-47d3-c3c7-943b58ecd7ff" class="w-dyn-empty">
                                        <div>No items found.</div>
                                    </div>
                                </div>
                            </div>
                            <div data-w-tab="Tab 4" class="w-tab-pane">
                                <div bind="07f7822a-effe-0e5a-b64e-5c72915fe71b" class="collection-list-wrapper w-dyn-list">
                                    <div bind="07f7822a-effe-0e5a-b64e-5c72915fe71c" role="list" class="popular-vacations-wrapper w-dyn-items">
                                        <div bind="07f7822a-effe-0e5a-b64e-5c72915fe71d" role="listitem" class="popular-location-item w-dyn-item">
                                            <div data-w-id="07f7822a-effe-0e5a-b64e-5c72915fe71e" class="vacations-verticle-card">
                                                <div class="verticle-card-image">
                                                    <div bind="07f7822a-effe-0e5a-b64e-5c72915fe720" data-w-id="07f7822a-effe-0e5a-b64e-5c72915fe720" class="hero-background-image"></div>
                                                </div>
                                                <div class="vacation-card-bottom">
                                                    <div class="vacation-card-info">
                                                        <h3 bind="07f7822a-effe-0e5a-b64e-5c72915fe723"></h3>
                                                        <div bind="07f7822a-effe-0e5a-b64e-5c72915fe724" class="body-display small"></div>
                                                    </div>
                                                    <div class="vacation-details">
                                                        <div id="w-node-_07f7822a-effe-0e5a-b64e-5c72915fe726-1fc93e1d" class="vacation-price">
                                                            <div class="subtitle small">Rates from</div>
                                                            <div class="dynamic-price-text">
                                                                <div id="w-node-_07f7822a-effe-0e5a-b64e-5c72915fe72a-1fc93e1d">Rp</div>
                                                                <div bind="07f7822a-effe-0e5a-b64e-5c72915fe72c"></div>
                                                            </div>
                                                        </div>
                                                        <a bind="07f7822a-effe-0e5a-b64e-5c72915fe72d" href="#" class="outline-button small w-inline-block">
                                                            <div>Details</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div bind="07f7822a-effe-0e5a-b64e-5c72915fe730" class="w-dyn-empty">
                                        <div>No items found.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-indicator">
                        <div style="width:25%" class="location-indicator-fill"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section no-top-padding">
    <div class="grid-wrapper">
        <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bcb-1fc93e1d" class="featured-journal-wrapper">
            <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bcc" class="w-dyn-list">
                @if ($blogs->count() > 0)
                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bcd" role="list" class="large-journal-list w-dyn-items">
                        <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bce" role="listitem" class="large-journal-item w-dyn-item">
                            <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bcf" class="large-journal-post">
                                <div class="large-journal-image">
                                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd1" class="hero-background-image" style="background-image: url('{{ $blogs->first()->getImageURL() }}');"></div>
                                </div>
                                <div class="journal-post-info">
                                    <div class="large-journal-content">
                                        <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd4-1fc93e1d" class="journal-category-tag">
                                            <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd5">{{ $blogs->first()->created_at?->translatedFormat('F d, Y') }}</div>
                                        </div>
                                        <h2 bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd6">{{ $blogs->first()->title }}</h2>
                                        <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd7" class="body-display">
                                            {{-- {{ $blogs->first()->description }} --}}
                                        </div>
                                    </div>
                                    <a bind="33e6d6c0-7e21-5986-07d7-5931a21eb67a" id="w-node-_33e6d6c0-7e21-5986-07d7-5931a21eb67a-1fc93e1d" href="{{ route('landing-page.blog.detail', $blogs->first()->slug) }}" class="outline-button small w-inline-block">
                                        <div>Baca Selengkapnya</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd8" class="w-dyn-empty">
                        <div>No items found.</div>
                    </div>
                @endif
            </div>

            <div class="journal-right-wrapper">
                <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bdc-1fc93e1d" class="subtitle-intro-wrapper">
                    <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bdd-1fc93e1d" class="subtitle">Blog</div>
                    <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bdf-1fc93e1d" class="horizontal-line"></div>
                </div>
                <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be0" class="w-dyn-list">
                    @if ($blogs->count() > 1)
                        @foreach ($blogs as $blog)
                            @if ($loop->iteration != 1)
                                <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be1" role="list" class="recent-journal-list w-dyn-items">
                                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be2" role="listitem" class="w-dyn-item">
                                        <a bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be3" href="{{ route('landing-page.blog.detail', $blog->slug) }}" class="journal-list-item w-inline-block">
                                            <div class="journal-list-image">
                                                <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be5" class="hero-background-image" style="background-image: url('{{ $blog->getImageURL() }}');"></div>
                                            </div>
                                            <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be6-1fc93e1d" class="journal-list-item-content">
                                                <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be7-1fc93e1d" class="journal-category-tag">
                                                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be8">{{ $blog->created_at?->translatedFormat('F d, Y') }}</div>
                                                </div>
                                                <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9be9-1fc93e1d" class="journal-list-info">
                                                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bea">{{ $blog->title }}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif                            
                        @endforeach
                    @else
                        <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9beb" class="w-dyn-empty">
                            <div>No items found.</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div data-w-id="181de59c-8994-d31d-8757-822aa0749971" class="section no-padding">
    <div class="grid-wrapper">
        <div id="w-node-_0ec51e82-e255-1b52-e2d8-8f022c520994-1fc93e1d" class="grey-cover">
            <div class="paralax-background two" style="background-image:url({{ asset($home->promise_banner) }}) !important">
                <div class="overlay dark"></div>
            </div>
        </div>
        <div id="w-node-_779e935c-1f87-d5fa-f190-8d357821fef7-1fc93e1d" class="section-intro">
            <div class="promise-intro">
                <div id="w-node-e2508b86-a517-c488-5088-c688f3c57520-1fc93e1d">
                    <div class="subtitle-wrapper">
                        <div class="subtitle putih">jtrip Promise</div>
                    </div>
                    <h1>{{ $home->promise }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@include('landing-page.components.contact-form')

@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $(".vacations-tab-link").on('click', function () {
                const currentIndex = $(this).index();
                const position = currentIndex + 1;
                const tabMenu = $(this).parents(".vacations-tab-menu");
                const tabs = $(this).parents('.vacations-tabs');

                const totalExistingTab = $(tabMenu).children('.vacations-tab-link').length;
                const progressPercentage = (position / totalExistingTab) * 100;
                const locationIndicator = $(tabs).parents('.vacations-tabs-wrapper').find('.location-indicator');

                $(locationIndicator).find(".location-indicator-fill").css("width", `${progressPercentage}%`);
            })
        });
    </script>
@endpush