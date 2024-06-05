<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Thu Feb 01 2024 07:42:05 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="65af9bd818d9ae9f1fc93e1e" data-wf-site="60a267dcf8769e251a2be896">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }} - Protected page</title>
        
        <meta content="Protected page" property="og:title">
        <meta content="Protected page" property="twitter:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">

        <link href="{{ asset('assets/landing-page/css/normalize.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/landing-page/css/webflow.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/landing-page/css/jtrip-tour.webflow.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700,800","Poppins:200,200italic,300,300italic,regular,italic,500,500italic,600,700,800,900"]  }});</script>
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
        <div class="utility-page-content w-password-page w-form">
            <form action="/.wf_auth" method="post" id="email-form" name="email-form" data-name="Email Form" class="utility-page-form w-password-page" data-wf-page-id="65af9bd818d9ae9f1fc93e1e" data-wf-element-id="607c95a95186a26b47cc815300000000000c">
                <div class="password-hero">
                    <div id="w-node-_18f8cf41-07d7-80fd-d338-324c9b57fe0b-1fc93e1e" class="hero-intro">
                        <div class="subtitle large">Protected page</div>
                        <h1 class="xxl-heading">Please use your account to login</h1>
                    </div>
                    {{-- <div id="w-node-eeddaf6f-c404-aebc-3778-2d8a247d11ff-1fc93e1e" class="password-wrapper"><input class="password-field w-password-page w-input" autofocus="true" maxlength="256" name="pass" data-name="field" placeholder="Enter your password" type="password" id="pass">
                        <input type="submit" data-wait="Please wait..." class="password-button w-password-page w-button" value="Submit">
                    </div> --}}
                    <a id="w-node-_472c3fef-b927-9a73-550c-be72cb01f47c-1fc93e1e" href="{{ route("landing-page.home") }}" class="close-link w-inline-block">
                        <div>Go to the home page</div>
                        <img src="images/arrowhead-right-icon-dark-light.svg" loading="lazy" alt="">
                    </a>
                </div>
                <div class="w-password-page w-form-fail">
                    <div>Incorrect password. Please try again.</div>
                </div>
                <div style="display:none" bind="607c95a95186a26b47cc8153000000000017" class="w-password-page w-embed w-script"><input type="hidden" name="path" value="<%WF_FORM_VALUE_PATH%>"><input type="hidden" name="page" value="<%WF_FORM_VALUE_PAGE%>"></div>
                <div style="display:none" bind="607c95a95186a26b47cc8153000000000018" class="w-password-page w-embed w-script">
                    <script type="application/javascript">
                        (function _handlePasswordPageOnload() {
                            if (/[?&]e=1(&|$)/.test(document.location.search)) {
                            document.querySelector('.w-password-page.w-form-fail').style.display = 'block';
                            }
                        })()
                    </script>
                </div>
                <div class="hero-background-image password-background">
                    <div class="overlay"></div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60a267dcf8769e251a2be896" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/landing-page/js/webflow.js') }}" type="text/javascript"></script>

    </body>
</html>