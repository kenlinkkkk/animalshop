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

    <title>Fudee - Organic Food HTML5 Template</title>
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
    <!--    slider-area start    -->
    <div class="slider-area">
        <div class="home-slider">
            <div class="home-slide" style="background-image: url('{{ asset('assets/client/img/slider/slider-1.jpg') }}')">
                <div class="container">
                    <div class="row justify-content-xl-start justify-content-lg-start justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="home-slide-text">
                                <div class="home-slide-cat" data-animation="fadeInDown" data-delay="0.5s">
                                    <a href="blog.html">Food & Vegetables</a>
                                </div>
                                <div class="home-slide-title" data-animation="fadeInDown" data-delay="0.8s">
                                    <h3><span>Organic</span> Food Providers</h3>
                                </div>
                                <div class="home-slide-btn" data-animation="fadeInDown" data-delay="1.1s">
                                    <a href="blog.html" class="a-btn">learn more <i class="fas fa-plus"></i></a>
                                    <a href="https://www.youtube.com/watch?v=oF5y2uLFoX0" class="play-btn popup-video">
                                        <i class="far fa-play-circle"></i>
                                        <span>watch videos</span>
                                    </a>
                                </div>
                                <div class="home-slide-shape" data-animation="zoomIn" data-delay="0.2s">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="659px" height="657px">
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                              d="M404.619,98.175 C435.465,137.384 470.409,169.818 506.015,194.454 C541.384,219.602 577.416,236.952 604.940,257.895 C632.599,278.653 651.758,302.991 656.547,337.786 C661.846,371.693 652.776,416.057 635.756,456.388 C562.446,626.457 369.620,701.287 201.054,630.161 C32.989,558.367 -44.639,362.971 27.363,195.425 C45.542,152.856 71.175,116.687 102.501,84.718 C133.643,53.202 170.478,25.887 206.801,11.504 C243.244,-3.033 279.180,-4.649 311.323,11.602 C343.892,27.086 372.668,60.438 404.619,98.175 L404.619,98.175 Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slide" style="background-image: url('{{ asset('assets/client/img/slider/slider-1.jpg') }}')">
                <div class="container">
                    <div class="row justify-content-xl-start justify-content-lg-start justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="home-slide-text">
                                <div class="home-slide-cat" data-animation="fadeInDown" data-delay="0.5s">
                                    <a href="blog.html">Food & Vegetables</a>
                                </div>
                                <div class="home-slide-title" data-animation="fadeInDown" data-delay="0.8s">
                                    <h3><span>Organic</span> Food Providers</h3>
                                </div>
                                <div class="home-slide-btn" data-animation="fadeInDown" data-delay="1.1s">
                                    <a href="blog.html" class="a-btn">learn more <i class="fas fa-plus"></i></a>
                                    <a href="https://www.youtube.com/watch?v=oF5y2uLFoX0" class="play-btn popup-video"><i class="far fa-play-circle"></i>
                                        <span>watch videos</span></a>
                                </div>
                                <div class="home-slide-shape" data-animation="zoomIn" data-delay="0.2s">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="659px" height="657px">
                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                              d="M404.619,98.175 C435.465,137.384 470.409,169.818 506.015,194.454 C541.384,219.602 577.416,236.952 604.940,257.895 C632.599,278.653 651.758,302.991 656.547,337.786 C661.846,371.693 652.776,416.057 635.756,456.388 C562.446,626.457 369.620,701.287 201.054,630.161 C32.989,558.367 -44.639,362.971 27.363,195.425 C45.542,152.856 71.175,116.687 102.501,84.718 C133.643,53.202 170.478,25.887 206.801,11.504 C243.244,-3.033 279.180,-4.649 311.323,11.602 C343.892,27.086 372.668,60.438 404.619,98.175 L404.619,98.175 Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    slider-area end    -->

    <!--    service-area start    -->
    <div class="service-area">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-xl-3 col-md-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="{{ asset('assets/client/img/icon/icon-1.png') }}" alt="icon">
                        </div>
                        <div class="service-details">
                            <h4><a href="service-details.html">Organic Food</a></h4>
                            <p>
                                Sed ut perspiciatis omnis iste
                                natus error sit voluptate accusa
                                ntiuy dolorem laudantium
                            </p>
                        </div>
                        <div class="service-shape"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="{{ asset('assets/client/img/icon/icon-2.png') }}" alt="icon">
                        </div>
                        <div class="service-details">
                            <h4><a href="service-details.html">Gardening</a></h4>
                            <p>
                                Sed ut perspiciatis omnis iste
                                natus error sit voluptate accusa
                                ntiuy dolorem laudantium
                            </p>
                        </div>
                        <div class="service-shape"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="{{ asset('assets/client/img/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="service-details">
                            <h4><a href="service-details.html">Fresh & Organic</a></h4>
                            <p>
                                Sed ut perspiciatis omnis iste
                                natus error sit voluptate accusa
                                ntiuy dolorem laudantium
                            </p>
                        </div>
                        <div class="service-shape"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="{{ asset('assets/client/img/icon/icon-4.png') }}" alt="icon">
                        </div>
                        <div class="service-details">
                            <h4><a href="service-details.html">Landscaping</a></h4>
                            <p>
                                Sed ut perspiciatis omnis iste
                                natus error sit voluptate accusa
                                ntiuy dolorem laudantium
                            </p>
                        </div>
                        <div class="service-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    service-area end    -->

    <!--    product-area start    -->
    <div class="product-area product-area-shape product-filter-wrapper pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center mb-55">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center">
                        <h5>Our Product</h5>
                        <h3>We Provide Different Organic Healthy Foods</h3>
                        <div class="icon">
                            <img src="{{ asset('assets/client/img/icon/icon-5.png') }}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="product-filter-nav">
                        <button class="active" data-filter="*">
                            <i class="flaticon-vegetable"></i>
                            <span>Vegetables</span>
                        </button>
                        <button data-filter=".orange">
                            <i class="flaticon-lemon-1"></i>
                            <span>Orange</span>
                        </button>
                        <button data-filter=".shallot">
                            <i class="flaticon-cabbage"></i>
                            <span>Shallot</span>
                        </button>
                        <button data-filter=".pumpkin">
                            <i class="flaticon-tomato-1"></i>
                            <span>Pumpkin</span>
                        </button>
                        <button data-filter=".meat">
                            <i class="flaticon-fruit-2"></i>
                            <span>Meat</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row product-filter-grid">
                <div class="col-xl-3 col-md-6 grid-item orange meat">
                    <div class="product-wrap">
                        <div class="product-thumb">
                            <a href="shop.html"><img src="{{ asset('assets/client/img/product/product-1.jpg') }}" alt="product"></a>
                        </div>
                        <div class="product-details">
                            <h5><a href="shop.html">Fresh Orange</a></h5>
                            <ul class="product-rating">
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                            <span class="product-price"> $49.99 </span>
                        </div>
                        <div class="product-hover">
                            <ul class="product-btns">
                                <li><a href="#"><i class="far fa-expand"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-repeat"></i></a></li>
                            </ul>
                            <a href="shop.html" class="a-btn">
                                Add to cart <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 grid-item shallot orange">
                    <div class="product-wrap">
                        <div class="product-thumb">
                            <a href="shop.html"><img src="{{ asset('assets/client/img/product/product-2.jpg') }}" alt="product"></a>
                        </div>
                        <div class="product-details">
                            <h5><a href="shop.html">Fresh banana</a></h5>
                            <ul class="product-rating">
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                            <span class="product-price"> $49.99 </span>
                        </div>
                        <div class="product-hover">
                            <ul class="product-btns">
                                <li><a href="#"><i class="far fa-expand"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-repeat"></i></a></li>
                            </ul>
                            <a href="shop.html" class="a-btn">
                                Add to cart <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 grid-item pumpkin orange">
                    <div class="product-wrap">
                        <div class="product-thumb">
                            <a href="shop.html"><img src="{{ asset('assets/client/img/product/product-3.jpg') }}" alt="product"></a>
                        </div>
                        <div class="product-details">
                            <h5><a href="shop.html">Seasoned Beans</a></h5>
                            <ul class="product-rating">
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                            <span class="product-price"> $49.99 </span>
                        </div>
                        <div class="product-hover">
                            <ul class="product-btns">
                                <li><a href="#"><i class="far fa-expand"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-repeat"></i></a></li>
                            </ul>
                            <a href="shop.html" class="a-btn">
                                Add to cart <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 grid-item meat orange shallot">
                    <div class="product-wrap">
                        <div class="product-thumb">
                            <a href="shop.html"><img src="{{ asset('assets/client/img/product/product-4.jpg') }}" alt="product"></a>
                        </div>
                        <div class="product-details">
                            <h5><a href="shop.html">Organic Tomato</a></h5>
                            <ul class="product-rating">
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                            <span class="product-price"> $49.99 </span>
                        </div>
                        <div class="product-hover">
                            <ul class="product-btns">
                                <li><a href="#"><i class="far fa-expand"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="far fa-repeat"></i></a></li>
                            </ul>
                            <a href="shop.html" class="a-btn">
                                Add to cart <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 text-center">
                    <a href="shop.html" class="a-btn btn-dark mt-50">
                        view more product <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="shape-1">
            <img src="{{ asset('assets/client/img/icon/icon-8.png') }}" alt="icon">
        </div>
        <div class="shape-2">
            <img src="{{ asset('assets/client/img/icon/icon-9.png') }}" alt="icon">
        </div>
        <div class="shape-3">
            <img src="{{ asset('assets/client/img/icon/icon-10.png') }}" alt="icon">
        </div>
        <div class="shape-4">
            <img src="{{ asset('assets/client/img/icon/icon-11.png') }}" alt="icon">
        </div>
    </div>
    <!--    product-area end    -->

    <!--    blog-area start    -->
    <div class="blog-area pt-130 pb-100 bg-fix" style="background-image: url('{{ asset('assets/client/img/bg/map-bg.png') }}')">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="section-title text-center">
                        <h5>Articles & Tips</h5>
                        <h3>Let’s Read Our Latest News & Blog</h3>
                        <div class="icon">
                            <img src="{{ asset('assets/client/img/icon/icon-5.png') }}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-box-wrap">
                        <div class="blog-box-thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/client/img/thumb/blog-1.jpg') }}" alt="blog">
                            </a>
                            <div class="blog-box-date">
                                30
                                <span>apr</span>
                            </div>
                        </div>
                        <div class="blog-box-details">
                            <h4>
                                <a href="blog-details.html">Building Killer Robots Game Sehavior iOS With Fuzzy</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">read more <i
                                        class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-box-wrap">
                        <div class="blog-box-thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/client/img/thumb/blog-2.jpg') }}" alt="blog">
                            </a>
                            <div class="blog-box-date">
                                30
                                <span>apr</span>
                            </div>
                        </div>
                        <div class="blog-box-details">
                            <h4>
                                <a href="blog-details.html">Make Em Shine How To Use Illustrations To Elicits</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">read more <i
                                        class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-box-wrap">
                        <div class="blog-box-thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/client/img/thumb/blog-3.jpg') }}" alt="blog">
                            </a>
                            <div class="blog-box-date">
                                30
                                <span>apr</span>
                            </div>
                        </div>
                        <div class="blog-box-details">
                            <h4>
                                <a href="blog-details.html">Just Keep Scrolling How To Design Lengthy Lengthy</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">read more <i
                                        class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    blog-area end    -->

    <!--    brand-area start    -->
    <div class="brand-area pt-80 pb-80 bg-fix" style="background-image: url('{{ asset('assets/client/img/bg/brand-bg.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-slider">
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-1.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-2.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-3.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-4.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-5.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-1.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-2.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-3.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-4.png') }}" alt="brand">
                            </div>
                        </div>
                        <div class="brand-slide">
                            <div class="brand-wrap">
                                <img src="{{ asset('assets/client/img/brand/brand-5.png') }}" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    brand-area end    -->
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
<script src="{{ asset('assets/client/js/script.js') }}"></script>
</body>


<!-- Mirrored from bdevs.net/fudee/fudee/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:55:58 GMT -->
</html>