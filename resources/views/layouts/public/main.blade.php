
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="VarunDavda" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ @asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ @asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ @asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ @asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ @asset('css/animate.css') }}" type="text/css" />
    @yield('extra-css')
    <link rel="stylesheet" href="{{ @asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ @asset('css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    @yield('title')

</head>


<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
@include('layouts.public.header')

@yield('slider')

<!-- Content
    ============================================= -->
@yield('content')

<!-- Footer
    ============================================= -->
    @include('layouts.public.footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{ @asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ @asset('js/plugins.js') }}"></script>

@yield('extra-scripts')

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ @asset('js/functions.js') }}"></script>

@yield('extra-js')

</body>
</html>