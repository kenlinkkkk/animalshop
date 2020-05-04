<!doctype html>
<html lang="en">

<!-- Mirrored from bdevs.net/fudee/fudee/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:54:23 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/client/img/logo/favicon.png') }}">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/icon-fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/main.css') }}">

    <title>@yield('title')</title>
</head>

<body>
<!-- preloader -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>
<!-- preloader end  -->

<!--    header-area start    -->
@include('client.layouts.nav')
<!--    header-area end    -->

<!--    slide-bar Start   -->
@include('client.layouts.aside')

<div class="body-overlay"></div>
<!--    slide-bar End    -->

<!--    main-area start    -->
<main>
    @yield('content')
    @include('client.layouts.brand-footer')
</main>
<!--    main-area end    -->

<!--    footer-area start    -->
@include('client.layouts.footer')
<!--    footer-area end    -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script data-cfasync="false" src="{{ asset('assets/client/js/email-decode.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/client/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/client/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/client/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/client/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/client/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/client/js/jquery.final-countdown.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
<script src="{{ asset('assets/client/js/script.js') }}"></script>
@yield('script')
</body>


<!-- Mirrored from bdevs.net/fudee/fudee/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:55:58 GMT -->
</html>