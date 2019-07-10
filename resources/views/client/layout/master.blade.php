<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/assets/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/images/apple-touch-icon-114x114-precomposed.png">
    <!-- Base Css -->
    <link href="/assets/css/base.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
</head>
    <body>
        <div class="se-pre-con"></div>
        <div id="page-content">
            @include('client.partial.nav')
            @yield('content')
        </div>
        @include('client.partial.footer')
        @yield('modal')
        <script src="/assets/js/jquery.min.js" type="text/javascript"></script>
        <!-- jquery ui js -->
        <script src="/assets/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- fraction slider js -->
        <script src="/assets/js/jquery.fractionslider.js" type="text/javascript"></script>
        <!-- owl carousel js --> 
        <script src="/assets/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- counter -->
        <script src="/assets/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="/assets/js/waypoints.js" type="text/javascript"></script>
        <!-- filter portfolio -->
        <script src="/assets/js/jquery.shuffle.min.js" type="text/javascript"></script>
        <script src="/assets/js/portfolio.js" type="text/javascript"></script>
        <!-- magnific popup -->
        <script src="/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!-- range slider -->
        <script src="/assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
        <script src="/assets/js/jquery.easing.min.js" type="text/javascript"></script>
        <!-- custom -->
        <script src="/assets/js/custom.js" type="text/javascript"></script>
        @yield('script')
    </body>
    
    </html>        