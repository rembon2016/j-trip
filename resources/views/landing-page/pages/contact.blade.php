@extends('landing-page.layouts.master')
@section('title', 'Contact')

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
        <div id="w-node-_783bbe3f-cd97-203e-588a-2e9b724c47ab-1fc93e25" class="inner-page-intro">
            <div id="w-node-_783bbe3f-cd97-203e-588a-2e9b724c47ac-1fc93e25" class="hero-intro">
                <div class="subtitle large">Hubungi Kami</div>
                <h1 id="w-node-_783bbe3f-cd97-203e-588a-2e9b724c47af-1fc93e25" class="xxl-heading">Punya Rencana ke
                    Jepang?</h1>
            </div>
        </div>
    </div>
    <div class="hero-background-image support-hero-background">
        <div class="overlay dark"></div>
    </div>
</div>

@include('landing-page.components.contact-form')
@endsection