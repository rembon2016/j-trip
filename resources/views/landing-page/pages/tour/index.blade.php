@extends('landing-page.layouts.master')
@section('title', 'Tour')

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
                <div class="subtitle large">J-trip Tour</div>
                <h1 class="xxl-heading">Rekomendasi Tour Terbaik Yang Kami Tawarkan </h1>
            </div>
        </div>
    </div>
    <div class="hero-background-image about-hero-background">
        <div class="overlay dark"></div>
    </div>
</div>

<div class="section">
    <div class="grid-wrapper">
        <div id="w-node-_84d4702d-fca5-006a-d0b9-2b5ea654f940-1fc93e1d" class="centered-intro">
            <div class="subtitle">Tour</div>
            <h1>Rekomendasi tour terbaik yang kami tawarkan</h1>
        </div>
    </div>
    <div class="grid-wrapper tour-section-wrapper">
        <div></div>
        <div class="tour-card-wrapper">
            <div bind="1a8ae3fa-816d-0096-5f84-a6afc94ceb47" role="list" class="popular-vacations-wrapper w-dyn-items">
                @foreach ($data as $item)
                    <div bind="1a8ae3fa-816d-0096-5f84-a6afc94ceb48" role="listitem" class="popular-location-item w-dyn-item">
                        <div data-w-id="d5cb7e54-02ce-4aa9-84b2-096ae6645eeb" class="vacations-verticle-card">
                            <div class="verticle-card-image">
                                <div bind="d5cb7e54-02ce-4aa9-84b2-096ae6645eed" data-w-id="d5cb7e54-02ce-4aa9-84b2-096ae6645eed" class="hero-background-image" style="background-image: url('{{ $item->getImageURL() }}')"></div>
                            </div>
                            <div class="vacation-card-bottom">
                                <div class="vacation-card-info">
                                    <h3 bind="d5cb7e54-02ce-4aa9-84b2-096ae6645ef0">{{ $item->title }}</h3>
                                    <div bind="d5cb7e54-02ce-4aa9-84b2-096ae6645ef2" class="body-display small">{{ $item->destination->title }}</div>
                                </div>
                                <div class="vacation-details">
                                    <div id="w-node-d5cb7e54-02ce-4aa9-84b2-096ae6645ef5-1fc93e1d" class="vacation-price">
                                        <div class="subtitle small">Rates from</div>
                                        <div class="dynamic-price-text">
                                            <div>@idr($item->price)</div>
                                            <div bind="757eccdd-9287-375d-39c4-0329fff528d9"></div>
                                        </div>
                                    </div>
                                    <a bind="d5cb7e54-02ce-4aa9-84b2-096ae6645efa" href="{{ route('landing-page.tour.detail', $item->slug) }}" class="outline-button small w-inline-block">
                                        <div>Details</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $data->links('landing-page.components.blog-pagination') }}
        </div>
        <div></div>
        
    </div>
</div>
@endsection