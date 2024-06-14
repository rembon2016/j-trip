@extends('landing-page.layouts.master')
@section('title')
    {{ $data->title }}
@endsection

@section('content')

<div bind="9b3d0861-357f-c367-a479-19a8e9fb326d" class="scroll-indicator">
    <div id="w-node-_9b3d0861-357f-c367-a479-19a8e9fb326e-e9fb326d" class="indicator-wrapper">
        <div data-w-id="9b3d0861-357f-c367-a479-19a8e9fb326f" class="indicator-fill">
            <div class="indicator"></div>
        </div>
    </div>
    <div id="w-node-c731b8b6-3cab-0aea-30b7-7d5eb055e15c-e9fb326d" class="social-sidebar-icons">
        <a href="https://webflow.com" target="_blank" class="sidebar-icon w-inline-block"><img
                src="{{ asset('assets/landing-page/images/covilla-instagram.svg') }}" loading="lazy" alt=""></a>
        <a href="https://webflow.com" target="_blank" class="sidebar-icon w-inline-block"><img
                src="{{ asset('assets/landing-page/images/covilla-facebook-f.svg') }}" loading="lazy" alt=""></a>
        <a href="https://webflow.com" target="_blank" class="sidebar-icon w-inline-block"><img
                src="{{ asset('assets/landing-page/images/icons8-whatsapp-2.svg') }}" loading="lazy" alt=""></a>
    </div>
</div>
<div class="inner-page-hero">
    <div class="grid-wrapper">
        <div id="w-node-ba64b070-9c69-4fd2-4515-5ce85630b360-1fc93e29" class="journal-hero"></div>
        <div id="w-node-c9b8eaa7-ab2f-1177-57f0-1744d914798f-1fc93e29" class="journal-intro">
            <div bind="c9b8eaa7-ab2f-1177-57f0-1744d9147990" class="subtitle large">{{ $data->created_at?->translatedFormat('F d, Y') }}</div>
            <h1 bind="c9b8eaa7-ab2f-1177-57f0-1744d9147992" class="xxl-heading">{{ $data->title  }}</h1>
        </div>
    </div>
    <div bind="7c1a7a90-edea-ff29-a4ec-ff42b8bfe157" class="hero-background-image" style="background-image: url('{{ $data->getImageURL() }}');">
        <div class="overlay dark"></div>
    </div>
</div>
<div class="section no-top-padding">
    <div class="grid-wrapper">
        <div id="w-node-f3432b60-fc60-ea80-296a-c45ed124cbec-1fc93e29" class="journal-post">
            <a bind="79b34619-971d-15eb-e78b-1a7227fe4619"
                id="w-node-_79b34619-971d-15eb-e78b-1a7227fe4619-1fc93e29"
                data-w-id="79b34619-971d-15eb-e78b-1a7227fe4619" href="{{ route("landing-page.tour.detail", $data->tour->slug) }}" class="related-vacation w-inline-block">
                <div bind="f0e350cf-f140-1b6a-ff04-d504d248d9a0" data-w-id="f0e350cf-f140-1b6a-ff04-d504d248d9a0"
                    class="location-image" style="background-image: url('{{ $data->tour->getImageURL() }}')" >
                    <div class="overlay dark"></div>
                </div>
                <div id="w-node-_3588e91f-ddc6-fbf9-7eb0-712fa1914fa8-1fc93e29" class="featured-vacation-tag">
                    <div>Featured vacation</div>
                </div>
                <div id="w-node-_819d4798-af5e-fef6-c3eb-c49fc5727489-1fc93e29" class="related-vacation-info">
                    <h3 bind="3772b6ce-9893-02f1-e75c-a067f2574def">{{ $data->tour->title }}</h3>
                    <div id="w-node-_30831fb5-55a7-cdc6-ef84-0dd55290f1b3-1fc93e29" class="featured-location-price">
                        <div bind="ff23b3a2-0c47-4ecd-a034-c1ac803f3a37" class="subtitle putih">@idr($data->tour->price)</div>
                        <div class="price-grid">
                            <div bind="e7912a84-d31a-323a-6a10-c92422afdcdd" class="dolar-sign"></div>
                            <div bind="2855cd57-cf28-36e7-b960-3c51d39943ab" class="subtitle putih"></div>
                        </div>
                    </div>
                    <div id="w-node-_782c3184-703d-8f2f-dccf-839b606e92ae-1fc93e29" class="related-vacation-arrow">
                        <img src="{{ asset('assets/landing-page/images/arrowhead-right-icon-dark001.svg') }}" loading="lazy" alt=""></div>
                </div>
            </a>
            <div class="journal-content blog-content">
                {!! $data->description !!}
                {{-- <div sym-bind="{&quot;children&quot;:{&quot;type&quot;:&quot;Call&quot;,&quot;val&quot;:{&quot;fun&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:[&quot;DynamoGateway&quot;,&quot;dynamoRichTextToRichTextChildren&quot;]},&quot;arg&quot;:{&quot;type&quot;:&quot;Select&quot;,&quot;val&quot;:{&quot;from&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:&quot;Dynamo&quot;},&quot;prop&quot;:&quot;journal-body&quot;}}}}}"
                    class="rich-text w-dyn-bind-empty w-richtext"></div> --}}
            </div>
        </div>
    </div>
</div>
<div data-w-id="b9b9bf85-d74c-68ee-d2a5-1fe594ca8920" class="team-banner">
    <div class="grid-wrapper">
        <div id="w-node-b9b9bf85-d74c-68ee-d2a5-1fe594ca8922-1fc93e29" class="centered-intro">
            <div>
                <div class="subtitle-wrapper">
                    <div class="subtitle">Jtrip promise</div>
                </div>
                <h1>Kami berkomitmen untuk menjepangkan Anda</h1>
            </div>
            <div id="w-node-_3ee0131d-22ec-f499-3dbd-4a1dbc63b210-1fc93e29" class="dual-buttons">
                <a href="{{ route('landing-page.contact') }}" class="button white w-inline-block">
                    <div>Contact us</div>
                </a>
            </div>
        </div>
    </div>
    <div class="paralax-background journal-footer-background">
        <div class="overlay dark"></div>
    </div>
</div>
<div class="section no-top-padding">
    <div class="grid-wrapper">
        <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe59a-1fc93e29" class="featured-journal-wrapper full-width">
            <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe59b" class="w-dyn-list">

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
                {{-- <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe59c" role="list" class="large-journal-list w-dyn-items">
                    <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe59d" role="listitem"
                        class="large-journal-item w-dyn-item">
                        <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe59e" class="large-journal-post">
                            <div class="large-journal-image">
                                <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5a0" class="hero-background-image">
                                </div>
                            </div>
                            <div class="journal-post-info">
                                <div class="large-journal-content">
                                    <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5a3-1fc93e29"
                                        class="journal-category-tag">
                                        <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5a4"></div>
                                    </div>
                                    <h2 bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5a5"></h2>
                                    <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5a6" class="body-display"></div>
                                </div>
                                <a bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5a7"
                                    id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5a7-1fc93e29" href="#"
                                    class="outline-button small w-inline-block">
                                    <div>Read more</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5aa" class="w-dyn-empty">
                    <div>No items found.</div>
                </div> --}}
            </div>
            <div class="journal-right-wrapper">
                <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5ae-1fc93e29" class="subtitle-intro-wrapper">
                    <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5af-1fc93e29" class="subtitle">Popular posts
                    </div>
                    <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b1-1fc93e29" class="horizontal-line"></div>
                </div>
                <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b2" class="w-dyn-list">
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
                    {{-- <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b3" role="list"
                        class="recent-journal-list w-dyn-items">
                        <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b4" role="listitem" class="w-dyn-item">
                            <a bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b5" href="#"
                                class="journal-list-item w-inline-block">
                                <div class="journal-list-image">
                                    <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b7" class="hero-background-image">
                                    </div>
                                </div>
                                <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b8-1fc93e29"
                                    class="journal-list-item-content">
                                    <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5b9-1fc93e29"
                                        class="journal-category-tag">
                                        <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5ba"></div>
                                    </div>
                                    <div id="w-node-c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5bb-1fc93e29"
                                        class="journal-list-info">
                                        <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5bc"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div bind="c1dcfdcd-e948-be5a-fc1d-5ac11b6fe5bd" class="w-dyn-empty">
                        <div>No items found.</div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection