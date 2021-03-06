<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
    </div>
    <!--    Mobile Menu Start   -->
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
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
    <!--    Mobile Menu End    -->

    <!--    Offset Sidebar Start   -->
    <div class="sidebar-widget-wrapper">
        <!-- start side widget -->
        <div class="sidebar-widget logo-side">
            <a href="{{ route('home.index') }}">
                <img src="{{ asset('assets/client/img/logo/logo.png') }}" alt="logo">
            </a>
        </div>
        <!-- end side widget -->

        <!-- start side widget -->
        <div class="sidebar-widget">
            <div class="info-wdget">
                <h4 class="widget-title">Office Address</h4>
                <p>
                    23/A, Miranda City Likaoli Prikano, Dope
                </p>
            </div>
        </div>
        <!-- end side widget -->

        <!-- start side widget -->
        <div class="sidebar-widget">
            <div class="info-wdget">
                <h4 class="widget-title">Phone Number</h4>
                <p> +0989 7876 9865 9 </p>
                <p> +(090) 8765 86543 85 </p>
            </div>
        </div>
        <!-- end side widget -->

        <!-- start side widget -->
        <div class="sidebar-widget">
            <div class="info-wdget">
                <h4 class="widget-title">Email Address</h4>
                <p> <a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a33343c351a3f223b372a363f74393537">[email&#160;protected]</a> </p>
                <p> <a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e2879a838f928e87cc8f838b8ea28a978fcc818d8f">[email&#160;protected]</a> </p>
            </div>
        </div>
        <!-- end side widget -->

        <!-- start side widget -->
        <div class="sidebar-widget">
            <div class="instagram">
                <a href="#">
                    <img src="{{ asset('assets/client/img/widget/instagram-1.jpg') }}" alt="instagram">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/client/img/widget/instagram-2.jpg') }}" alt="instagram">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/client/img/widget/instagram-3.jpg') }}" alt="instagram">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/client/img/widget/instagram-4.jpg') }}" alt="instagram">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/client/img/widget/instagram-5.jpg') }}" alt="instagram">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/client/img/widget/instagram-6.jpg') }}" alt="instagram">
                </a>
            </div>
        </div>
        <!-- end side widget -->

        <!-- start side widget -->
        <div class="sidebar-widget">
            <div class="social-widget">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <!-- end side widget -->
    </div>
    <!--    Offset Sidebar End    -->
</aside>