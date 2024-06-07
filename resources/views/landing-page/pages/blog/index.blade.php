@extends('landing-page.layouts.master')
@section('title', 'Blog')

@section('content')

<div bind="9b3d0861-357f-c367-a479-19a8e9fb326d" class="scroll-indicator">
    <div id="w-node-_9b3d0861-357f-c367-a479-19a8e9fb326e-e9fb326d" class="indicator-wrapper">
        <div data-w-id="9b3d0861-357f-c367-a479-19a8e9fb326f" class="indicator-fill">
            <div class="indicator"></div>
        </div>
    </div>
    <div id="w-node-c731b8b6-3cab-0aea-30b7-7d5eb055e15c-e9fb326d" class="social-sidebar-icons">
        <a href="https://webflow.com" target="_blank" class="sidebar-icon w-inline-block"><img
                src="images/covilla-instagram.svg" loading="lazy" alt=""></a>
        <a href="https://webflow.com" target="_blank" class="sidebar-icon w-inline-block"><img
                src="images/covilla-facebook-f.svg" loading="lazy" alt=""></a>
        <a href="https://webflow.com" target="_blank" class="sidebar-icon w-inline-block"><img
                src="images/icons8-whatsapp-2.svg" loading="lazy" alt=""></a>
    </div>
</div>
<div class="inner-page-hero">
    <div class="grid-wrapper">
        <div id="w-node-_0da207b3-ad87-1e9e-f7c9-8f19d462fe85-1fc93e21" class="hero-intro">
            <div class="subtitle large">{{ config('app.name') }} blog</div>
            <h1 class="xxl-heading">Inspirasi dan Tips untuk Perjalanan Kamu ke Jepang</h1>
        </div>
    </div>
    <div class="hero-background-image journal-hero-background">
        <div class="overlay dark"></div>
    </div>
</div>
<div class="section no-top-padding">
    <div class="grid-wrapper">
        <div id="w-node-d68959ae-cef0-53ea-6276-b9ef47942760-1fc93e21" class="featured-journal-wrapper full-width">
            <div bind="d68959ae-cef0-53ea-6276-b9ef47942761" class="w-dyn-list">

                @if ($popularBlogs->count() > 0)
                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bcd" role="list" class="large-journal-list w-dyn-items">
                        <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bce" role="listitem" class="large-journal-item w-dyn-item">
                            <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bcf" class="large-journal-post">
                                <div class="large-journal-image">
                                    <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd1" class="hero-background-image" style="background-image: url('{{ $popularBlogs->first()->getImageURL() }}');"></div>
                                </div>
                                <div class="journal-post-info">
                                    <div class="large-journal-content">
                                        <div id="w-node-_2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd4-1fc93e1d" class="journal-category-tag">
                                            <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd5">{{ $popularBlogs->first()->created_at?->translatedFormat('F d, Y') }}</div>
                                        </div>
                                        <h2 bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd6">{{ $popularBlogs->first()->title }}</h2>
                                        <div bind="2e6b28ca-5bd4-9b6d-02bd-caeb9b0c9bd7" class="body-display">
                                            {{-- {{ $popularBlogs->first()->description }} --}}
                                        </div>
                                    </div>
                                    <a bind="33e6d6c0-7e21-5986-07d7-5931a21eb67a" id="w-node-_33e6d6c0-7e21-5986-07d7-5931a21eb67a-1fc93e1d" href="{{ route('landing-page.blog.detail', $popularBlogs->first()->slug) }}" class="outline-button small w-inline-block">
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
                {{-- <div bind="d68959ae-cef0-53ea-6276-b9ef47942762" role="list" class="large-journal-list w-dyn-items">
                    <div bind="d68959ae-cef0-53ea-6276-b9ef47942763" role="listitem"
                        class="large-journal-item w-dyn-item">
                        <div bind="d68959ae-cef0-53ea-6276-b9ef47942764" class="large-journal-post">
                            <div class="large-journal-image">
                                <div bind="d68959ae-cef0-53ea-6276-b9ef47942766" class="hero-background-image">
                                </div>
                            </div>
                            <div class="journal-post-info">
                                <div class="large-journal-content">
                                    <div id="w-node-d68959ae-cef0-53ea-6276-b9ef47942769-1fc93e21"
                                        class="journal-category-tag">
                                        <div bind="d68959ae-cef0-53ea-6276-b9ef4794276a"></div>
                                    </div>
                                    <h2 bind="d68959ae-cef0-53ea-6276-b9ef4794276b"></h2>
                                    <div bind="d68959ae-cef0-53ea-6276-b9ef4794276c" class="body-display"></div>
                                </div>
                                <a bind="d68959ae-cef0-53ea-6276-b9ef4794276d"
                                    id="w-node-d68959ae-cef0-53ea-6276-b9ef4794276d-1fc93e21" href="#"
                                    class="outline-button small w-inline-block">
                                    <div>Read more</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div bind="d68959ae-cef0-53ea-6276-b9ef47942770" class="w-dyn-empty">
                    <div>No items found.</div>
                </div> --}}
            </div>
            <div class="journal-right-wrapper">
                <div id="w-node-d68959ae-cef0-53ea-6276-b9ef47942774-1fc93e21" class="subtitle-intro-wrapper">
                    <div id="w-node-d68959ae-cef0-53ea-6276-b9ef47942775-1fc93e21" class="subtitle">Popular posts
                    </div>
                    <div id="w-node-d68959ae-cef0-53ea-6276-b9ef47942777-1fc93e21" class="horizontal-line"></div>
                </div>
                <div bind="d68959ae-cef0-53ea-6276-b9ef47942778" class="w-dyn-list">
                    @if ($popularBlogs->count() > 1)
                        @foreach ($popularBlogs as $blog)
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
                    {{-- <div bind="d68959ae-cef0-53ea-6276-b9ef47942779" role="list"
                        class="recent-journal-list w-dyn-items">
                        <div bind="d68959ae-cef0-53ea-6276-b9ef4794277a" role="listitem" class="w-dyn-item">
                            <a bind="d68959ae-cef0-53ea-6276-b9ef4794277b" href="#"
                                class="journal-list-item w-inline-block">
                                <div class="journal-list-image">
                                    <div bind="d68959ae-cef0-53ea-6276-b9ef4794277d" class="hero-background-image">
                                    </div>
                                </div>
                                <div id="w-node-d68959ae-cef0-53ea-6276-b9ef4794277e-1fc93e21"
                                    class="journal-list-item-content">
                                    <div id="w-node-d68959ae-cef0-53ea-6276-b9ef4794277f-1fc93e21"
                                        class="journal-category-tag">
                                        <div bind="d68959ae-cef0-53ea-6276-b9ef47942780"></div>
                                    </div>
                                    <div id="w-node-d68959ae-cef0-53ea-6276-b9ef47942781-1fc93e21"
                                        class="journal-list-info">
                                        <div bind="d68959ae-cef0-53ea-6276-b9ef47942782"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div bind="d68959ae-cef0-53ea-6276-b9ef47942783" class="w-dyn-empty">
                        <div>No items found.</div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section no-padding">
    <div class="grid-wrapper">
        <div id="w-node-e268af3c-b7e1-8cae-a853-a667c90ef24c-1fc93e21" class="all-journal-posts">
            <div class="left-intro">
                <div id="w-node-c27e6005-8a91-b1dc-81b2-601abb1e9606-1fc93e21" class="subtitle">Recent posts</div>
                <h1>Browse our Blog</h1>
            </div>
            <div bind="c519769b-9404-6865-f08b-fa37ab3e2d3a" class="w-dyn-list">
                @if ($recentBlogs->count() > 0)
                <div bind="c519769b-9404-6865-f08b-fa37ab3e2d3b" role="list" class="journal-cards w-dyn-items">
                        @foreach ($recentBlogs as $blog)
                        <div bind="c519769b-9404-6865-f08b-fa37ab3e2d3c" role="listitem" class="w-dyn-item">
                            <div bind="1449fabc-66d6-77fb-a892-4c9448bcb920"
                                data-w-id="1449fabc-66d6-77fb-a892-4c9448bcb920" class="journal-card">
                                <div class="journal-card-image">
                                    <div bind="1449fabc-66d6-77fb-a892-4c9448bcb922"
                                        data-w-id="1449fabc-66d6-77fb-a892-4c9448bcb922" class="hero-background-image" style="background-image: url('{{ asset($blog->getImageURL()) }}');">
                                    </div>
                                </div>
                                <div id="w-node-_1449fabc-66d6-77fb-a892-4c9448bcb923-1fc93e21"
                                    class="journal-card-info">
                                    <div id="w-node-d27d4e3b-0d1f-21d2-2e64-4b390a146434-1fc93e21"
                                        class="journal-category-tag">
                                        <div bind="d27d4e3b-0d1f-21d2-2e64-4b390a146435">{{ $blog->created_at?->translatedFormat('F d, Y') }}</div>
                                    </div>
                                    <div id="w-node-_505a43c1-fbea-6463-aa6a-94fbf3d0acae-1fc93e21"
                                        class="journal-card-description">
                                        <h3 bind="4ba4f99a-137b-fd24-c75f-2d220c6e97f3">{{ $blog->title }}</h3>
                                        <div bind="832922b9-19df-47fa-bac1-1fb2e2c68195" class="body-display small">
                                            {{-- {{ $blog->description }} --}}
                                        </div>
                                    </div>
                                    <a bind="7eefe1a0-6e1b-16fc-2373-b0b59b2541fd"
                                        id="w-node-_7eefe1a0-6e1b-16fc-2373-b0b59b2541fd-1fc93e21" href="{{ route('landing-page.blog.detail', $blog->slug) }}"
                                        class="outline-button small w-inline-block">
                                        <div>Read more</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {!! $recentBlogs->links('landing-page.components.blog-pagination') !!}
                @else
                    <div bind="c519769b-9404-6865-f08b-fa37ab3e2d3d" class="w-dyn-empty">
                        <div>No items found.</div>
                    </div>
                @endif
            </div>
        </div>
        <div id="w-node-_30618761-dfa2-e805-b156-91c050e803e3-1fc93e21" class="grey-cover"></div>
    </div>
</div>
<div data-w-id="f882a46f-905b-43c9-c19b-926de170e508" class="section no-padding">
    <div class="grid-wrapper">
        <div id="w-node-f882a46f-905b-43c9-c19b-926de170e50a-1fc93e21" class="grey-cover">
            <div class="paralax-background two">
                <div class="overlay dark"></div>
            </div>
        </div>
        <div id="w-node-f882a46f-905b-43c9-c19b-926de170e50d-1fc93e21" class="section-intro">
            <div id="w-node-_90f8eb2c-5d0a-a0ad-b0ba-05e06f88b3ae-1fc93e21" class="promise-intro">
                <div>
                    <div class="subtitle-wrapper">
                        <div class="subtitle white">J-trip promise</div>
                    </div>
                    <h1>Kami Berkomitmen untuk <br>Men-Jepangkan Kamu</h1>
                </div>
                <div id="w-node-f882a46f-905b-43c9-c19b-926de170e514-1fc93e21" class="dual-buttons">
                    <a href="{{ route('landing-page.contact') }}" class="button white w-inline-block">
                        <div>Contact us</div>
                    </a>
                    <a href="{{ route('landing-page.about') }}" class="outline-button white w-inline-block">
                        <div>About Us</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection