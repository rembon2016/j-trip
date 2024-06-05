<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<html data-wf-page="65af9bd818d9ae9f1fc93e1f" data-wf-site="60a267dcf8769e251a2be896">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }} - Not Found</title>
        <meta content="Not Found" property="og:title">
        <meta content="Not Found" property="twitter:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">

        <link href="{{ asset('assets/landing-page/css/normalize.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/landing-page/css/webflow.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/landing-page/css/jtrip-tour.webflow.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({  google: {families: ["Inter:300,regular,500,600,700,800","Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,700,800,900"]  }});</script>
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

        <link href="{{ asset('assets/landing-page/images/favicon.jpg') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('assets/landing-page/images/webclip.jpg') }}" rel="apple-touch-icon">
    </head>
    <body>
        <div bind="3218ce1e-c6e2-2ba4-e1b9-bd399773b879" class="preloader">
            <div class="preloader-indicator">
                <div class="prloader-fill"></div>
            </div>
            <div class="preloader-top"></div>
            <div class="preloader-bottom"></div>
        </div>

        <div class="utility-page-wrap">
            <div bind="607cb81e7d41643493667bf900000000000b" class="utility-page-content w-form">
                <div class="utility-page-form">
                    <div class="_404-page-info">
                        <div>
                            <div class="subtitle-wrapper">
                                <div class="subtitle large">404 page not found</div>
                            </div>
                            <h2 class="xxl-heading">Oops! This page<br>isn&#x27;t available.</h2>
                        </div>
                        <a id="w-node-c24fff76-73ef-fefd-c904-7403c5ee1ab1-1fc93e1f" href="{{ route('landing-page.home') }}" class="button white w-inline-block">
                            <div>Go to the home page</div>
                        </a>
                    </div>
                    <div class="hero-background-image">
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60a267dcf8769e251a2be896" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/landing-page/js/webflow.js') }}" type="text/javascript"></script>
    </body>
</html>