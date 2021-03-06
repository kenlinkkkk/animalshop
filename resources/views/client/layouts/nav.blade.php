<header class="header-area">
    <div class="header-top d-none d-xl-block d-lg-block d-md-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-7">
                    <div class="header-info-wrap">
                        <div class="header-info">
                            <i class="far fa-phone"></i>
                            <a href="tel:+012 (345) 789">+012 (345) 789</a>
                        </div>
                        <div class="header-info">
                            <i class="far fa-envelope-open"></i>
                            <a href="http://bdevs.net/cdn-cgi/l/email-protection#84f7f1f4f4ebf6f0c4e3e9e5ede8aae7ebe9"><span class="__cf_email__" data-cfemail="a8dbddd8d8c7dadce8cfc5c9c1c486cbc7c5">[email&#160;protected]</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-5">
                    <div class="header-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="logo">
                        <a href="{{ route('home.index') }}">
                            <img src="{{ asset('assets/client/img/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 d-none d-xl-block ">
                    <div class="main-menu-wrap">
                        <nav class="main-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home.index') }}">Trang chủ</a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">Cửa hàng</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Gallery Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('home.contact') }}">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-9 col-md-8 col-6 align-self-center">
                    <div class="header-btn">
                        <a href="#" class="a-btn">shop now <i class="fas fa-plus"></i></a>
                        <div class="open-mobile-menu">
                            <a href="javascript:void(0);">
                                <i class="far fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>