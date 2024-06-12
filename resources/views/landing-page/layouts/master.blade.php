<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Thu Feb 01 2024 07:42:05 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="65af9bd818d9ae9f1fc93e1d" data-wf-site="60a267dcf8769e251a2be896">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }} - @yield('title')</title>

        <meta content="Jtrip | Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang" property="og:title">
        <meta content="Jtrip | Mobil, Guide, Tur, dan Segala Keperluan pergi ke Jepang" property="twitter:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">

        <link href="{{ asset('assets/landing-page/css/normalize.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/landing-page/css/webflow.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/landing-page/css/jtrip-tour.webflow.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/landing-page/css/custom.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/libs/iziToast/css/iziToast.min.css') }}">

        <style>@media (min-width:992px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="d885e8b6-584a-9045-40e3-d4c0934671a1"] {-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);display:none;}html.w-mod-js:not(.w-mod-ix) [data-w-id="ea6d82c1-9c45-719b-d93b-ec56aa0de7d4"] {border-color:rgba(192,192,211,0.3);background-color:rgba(192,192,211,0.2);}html.w-mod-js:not(.w-mod-ix) [data-w-id="ca3be69e-e051-32b2-4f5c-7e6dc5a38341"] {border-color:rgba(192,192,211,0.3);-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);background-color:rgba(255,255,255,0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="89794eb1-1b46-f009-1590-985be62574a8"] {-webkit-transform:translate3d(0, 0, 0) scale3d(2, 2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(2, 2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(2, 2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(2, 2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="57e10d4d-c29f-5efb-aa5b-30eaf959431b"] {display:none;-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="31614083-e546-96c1-6895-83f7ed6ef726"] {opacity:0;-webkit-transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="c3b9a84c-9578-968e-259e-578078085788"] {opacity:0;-webkit-transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.8, 0.8, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="92419f24-4dfe-75b7-3b18-05ee740b1ce8"] {opacity:0;display:none;}html.w-mod-js:not(.w-mod-ix) [data-w-id="d5cb7e54-02ce-4aa9-84b2-096ae6645eeb"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);background-color:rgba(255,255,255,0);border-color:rgba(192,192,211,0.2);}html.w-mod-js:not(.w-mod-ix) [data-w-id="d5cb7e54-02ce-4aa9-84b2-096ae6645eed"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="d86ed033-6748-7d0c-1688-f5aaa5a62643"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);background-color:rgba(255,255,255,0);border-color:rgba(192,192,211,0.2);}html.w-mod-js:not(.w-mod-ix) [data-w-id="d86ed033-6748-7d0c-1688-f5aaa5a62645"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="e44119d0-4aa0-47d3-c3c7-943b58ecd7ed"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);background-color:rgba(255,255,255,0);border-color:rgba(192,192,211,0.2);}html.w-mod-js:not(.w-mod-ix) [data-w-id="e44119d0-4aa0-47d3-c3c7-943b58ecd7ef"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="07f7822a-effe-0e5a-b64e-5c72915fe71e"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);background-color:rgba(255,255,255,0);border-color:rgba(192,192,211,0.2);}html.w-mod-js:not(.w-mod-ix) [data-w-id="07f7822a-effe-0e5a-b64e-5c72915fe720"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="c48b0112-662b-903b-413b-ccc63315bf7f"] {-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="c48b0112-662b-903b-413b-ccc63315bf7d"] {-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}}</style>
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700,800","Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,700,800,900"]  }});</script>
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

        <link href="{{ asset('assets/landing-page/images/favicon.jpg') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('assets/landing-page/images/webclip.jpg') }}" rel="apple-touch-icon">

        @stack('head')
    </head>

    <body class="body">
        {{-- Preloader --}}
        @include('landing-page.components.loader-top')

        {{-- Scroll Indicator --}}
        @include('landing-page.components.scroll-indicator')

        {{-- Navbar --}}
        @include('landing-page.components.navbar')

        {{-- Content --}}
        @yield('content')

        {{-- Preloader Bottom --}}
        @include('landing-page.components.loader-bottom')

        {{-- Footer --}}
        @include('landing-page.components.footer')

        {{-- Whatsapp CTA Button --}}
        @include('landing-page.components.whatsapp-cta')
        
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60a267dcf8769e251a2be896" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/landing-page/js/webflow.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/admin/vendor/libs/iziToast/js/iziToast.min.js') }}"></script>
        <script>
            iziToast.settings({
                timeout: 3500,
                position: "topRight",
                pauseOnHover: false,
                transitionIn: "bounceInLeft",
                transitionOut: "fadeOutRight",
                transitionInMobile: "bounceInLeft",
                transitionOutMobile: "fadeOutRight",
            });
        </script>
        @include('admin.components.notification')
        

        @stack('script')
    </body>
</html>