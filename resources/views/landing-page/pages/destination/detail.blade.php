@extends('landing-page.layouts.master')
@section('title')
    {{ "{$data->title} Destination" }}
@endsection

@section('content')
<div class="vacations-section">
    <div class="grid-wrapper">
        <div id="w-node-_2eba15a8-4071-27a1-1a68-7a1e83c7046a-1fc93e2a" class="vacations-dual-grid">
            <div class="sticky-vacation-right">
                <div class="location-slider-top"></div>
                <div class="vacation-slider-content">
                    <div class="locations-slide-content">
                        <div class="featured-vacation-info">
                            <div id="w-node-df40ad2f-3368-f2de-bb49-416501525314-1fc93e2a">
                                <div class="subtitle-wrapper">
                                    <div class="subtitle putih">Featured Tour</div>
                                </div>
                                <h1 bind="76f4b8c8-b383-01e0-8c5a-b7d3465c79dc">{{ $featuredTours->first()?->title }}</h1>
                            </div>
                            <a bind="4a8b5a0d-1a67-05ea-1df9-edc44a8554fc"
                                id="w-node-_4a8b5a0d-1a67-05ea-1df9-edc44a8554fc-1fc93e2a" href="{{ route('landing-page.tour.detail', $featuredTours->first()?->slug ?? 'empty') }}"
                                class="button white w-inline-block">
                                <div>View Tour</div>
                            </a>
                        </div>
                    </div>
                    <div data-delay="4000" data-animation="over" class="vacations-slider w-slider"
                        data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false"
                        data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
                        <div class="locations-slider-mask w-slider-mask">
                            @if (($featuredTours->first()?->galleries->count() ?? 0) > 0)
                                @foreach ($featuredTours->first()->galleries as $gallery)
                                    <div class="location-page-slide w-slide">
                                        <div class="slider-background-wrapper hero-wrapper">
                                            <div bind="b225a07e-3ff8-c890-6cec-fd2c136c7b53"
                                                class="slider-background locations-background">
                                                <div bind="b225a07e-3ff8-c890-6cec-fd2c136c7b54" class="background two" style="background-image: url('{{ $gallery->getImageURL() }}')">
                                                    <div class="slide-three-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="location-page-slide w-slide">
                                    <div class="slider-background-wrapper hero-wrapper">
                                        <div class="slider-background locations-background">
                                            <div bind="2d7d5fc8-c1fd-4796-34fc-0898ae2cdaad" class="background one" style="background-image: url('{{ $featuredTours->first()?->getImageURL() }}')">
                                                <div class="slide-three-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        @if (($featuredTours->first()?->galleries->count() ?? 0) > 0)
                        <div class="vacation-slide-arrow w-slider-arrow-left"><img
                                src="{{ asset('assets/landing-page/images/arrow-left24x242x-1.svg') }}" loading="lazy" alt=""
                                class="slider-arrow-icon"></div>
                        <div class="vacation-slide-arrow right w-slider-arrow-right"><img
                                src="{{ asset('assets/landing-page/images/arrow-right24x242x-1.svg') }}" loading="lazy" alt=""
                                class="slider-arrow-icon"></div>
                        <div class="slide-nav w-slider-nav w-round"></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="vacation-items">
                <div class="vacation-results">
                    <div id="w-node-_119ce2d8-cc65-774c-5a8b-478ccd5761e0-1fc93e2a" class="locations-results-top">
                        <div class="heading-title-grid">
                            <h1 bind="51b9c1a9-2782-2500-d9fb-1b111c96a17e">Vacations in {{ $data->title }}</h1>
                            <h1 bind="dac2f2f9-f306-6359-7038-fe41eff26160"></h1>
                        </div>
                    </div>
                    <div id="w-node-_935bed8d-3a45-30de-8dee-c42be8d1d9c4-1fc93e2a" class="subtitle-intro-wrapper">
                        <div class="subtitle-dynamic-text">
                            <div bind="935bed8d-3a45-30de-8dee-c42be8d1d9c5" class="subtitle"></div>
                            <div bind="d0315f52-4530-c684-dbb3-e00d80d8a02e" class="subtitle">Recommended vacations
                            </div>
                        </div>
                        <div id="w-node-_935bed8d-3a45-30de-8dee-c42be8d1d9c7-1fc93e2a" class="horizontal-line">
                        </div>
                    </div>
                    <div bind="186df1f4-4665-286c-cb34-77919aa554ea" class="w-dyn-list">
                        @if ($featuredTours->count() > 0)
                            <div bind="186df1f4-4665-286c-cb34-77919aa554eb" role="list"
                                class="vacation-items-grid w-dyn-items">
                                @foreach ($featuredTours as $tour)
                                    <div bind="186df1f4-4665-286c-cb34-77919aa554ec" role="listitem" class="w-dyn-item">
                                        <div class="vacation-item">
                                            <div class="vacation-image">
                                                <div bind="fe51a2d6-e097-ff27-8b12-0270e26fb28f"
                                                    class="hero-background-image" style="background-image: url('{{ $tour->getImageURL() }}')">
                                                    <div class="overlay light"></div>
                                                </div>
                                            </div>
                                            <div class="vacation-item-info">
                                                <div id="w-node-fe51a2d6-e097-ff27-8b12-0270e26fb298-1fc93e2a"
                                                    class="vacation-item-top">
                                                    <div class="subtitle">{{ $tour->type->title }}</div>
                                                    <h3 bind="fe51a2d6-e097-ff27-8b12-0270e26fb29b">{{ $tour->title  }}</h3>
                                                    <div bind="fe51a2d6-e097-ff27-8b12-0270e26fb29d"
                                                        class="body-display small">
                                                        {{ Str::limit(strip_tags($tour->description), 100) }}
                                                    </div>
                                                </div>
                                                <div id="w-node-fe51a2d6-e097-ff27-8b12-0270e26fb29f-1fc93e2a"
                                                    class="price">
                                                    <div id="w-node-fe51a2d6-e097-ff27-8b12-0270e26fb2a0-1fc93e2a"
                                                        class="subtitle small">Starts at</div>
                                                    <div>@idr($tour->price)</div>
                                                    <div bind="fe51a2d6-e097-ff27-8b12-0270e26fb2a4"></div>
                                                </div>
                                                <a bind="fe51a2d6-e097-ff27-8b12-0270e26fb2a6"
                                                    id="w-node-fe51a2d6-e097-ff27-8b12-0270e26fb2a6-1fc93e2a" href="{{ route('landing-page.tour.detail', $tour->slug) }}"
                                                    class="outline-button small w-inline-block">
                                                    <div>Details</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div bind="186df1f4-4665-286c-cb34-77919aa554ed" class="w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        @endif
                    </div>
                    <div id="w-node-_88c4dfa8-adcb-e591-dc25-708926bbe895-1fc93e2a" class="subtitle-intro-wrapper">
                        <div bind="88c4dfa8-adcb-e591-dc25-708926bbe896" class="subtitle">Other vacations</div>
                        <div id="w-node-_88c4dfa8-adcb-e591-dc25-708926bbe898-1fc93e2a" class="horizontal-line">
                        </div>
                    </div>
                    <div bind="f66bb280-a82c-37ec-d2bd-18018f952dca" class="w-dyn-list">
                        @if ($tours->count() > 0)
                            <div bind="f66bb280-a82c-37ec-d2bd-18018f952dcb" role="list"
                                class="locations-wrapper w-dyn-items">
                                @foreach($tours as $tour)
                                    <div bind="f66bb280-a82c-37ec-d2bd-18018f952dcc" role="listitem" class="w-dyn-item">
                                        <a bind="316c2703-518a-5fa6-a7d6-86e4d7f24e5e" href="{{ route('landing-page.tour.detail', $tour->slug) }}"
                                            class="location-card w-inline-block">
                                            <div class="location-name">
                                                <h4 bind="316c2703-518a-5fa6-a7d6-86e4d7f24e60">{{ $tour->title }}</h4>
                                                <div class="subtitle putih">{{ $tour->type->title }}</div>
                                            </div>
                                            <div id="w-node-_316c2703-518a-5fa6-a7d6-86e4d7f24e64-1fc93e2a"
                                                class="card-arrow-icon"><img
                                                    src="{{ asset('assets/landing-page/images/arrowhead-right-icon-dark-light.svg') }}" loading="lazy" alt=""
                                                    class="vacation-card-arrow"></div>
                                            <div bind="316c2703-518a-5fa6-a7d6-86e4d7f24e65"
                                                class="location-card-background" style="background-image: url('{{ $tour->getImageURL() }}')">
                                                <div class="overlay"></div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div bind="f66bb280-a82c-37ec-d2bd-18018f952dcd" class="w-dyn-empty">
                                <div>No items found.</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection