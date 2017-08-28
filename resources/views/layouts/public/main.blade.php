<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="VarunDavda"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ @asset('css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ @asset('style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ @asset('css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ @asset('css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ @asset('css/animate.css') }}" type="text/css"/>
    @yield('extra-css')
    <link rel="stylesheet" href="{{ @asset('css/magnific-popup.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ @asset('css/responsive.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Document Title
    ============================================= -->
    @yield('title')

</head>

<style>

    #top-search-input {
        float: right;
        margin: 33px 0 33px 15px;
        -webkit-transition: margin .4s ease;
        -o-transition: margin .4s ease;
        transition: margin .4s ease;
    }

    #top-search-input form {
        width: 160px;
        height: 34px;
        padding: 0;
        margin: 0;
    }

    #header.sticky-header #top-search-input { margin: 13px 0 13px 15px; }

    @media (max-width: 991px) {

        #top-search-input {
            float: none;
            margin: 20px 0;
        }

        #top-search-input form {
            margin: 0 auto;
            width: 300px;
        }

    }

    .device-xs #top-search-input form { width: 100%; }

</style>
<body class="stretched">
<div id="app">

    <div id="wrapper" class="clearfix">
        @include('layouts.public.header')

        @yield('page-title')

        @yield('slider')

        @yield('content')
    </div>

    @include('layouts.public.footer')

</div>

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>


<!-- External JavaScripts
============================================= -->
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ @asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ @asset('js/plugins.js') }}"></script>

@yield('extra-scripts')

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ @asset('js/functions.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
@yield('extra-js')

</body>
</html>