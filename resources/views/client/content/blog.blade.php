@extends('client.index')
@section('title') {{ 'Cửa hàng' }} @endsection

@section('content')
    <!--    breadcrumb-area start    -->
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="dark"
             data-opacity="7" style="background-image: url('{{ asset('assets/client/img/bg/breadcrumb-bg.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Bài viết</h3>
                        <ul>
                            <li><a href="{{ route('home.index') }}">Trang chủ</a></li>
                            <li class="active">Bài viết</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    breadcrumb-area end    -->

    <!--    about-area start    -->
    <div class="blog-grid-area pt-130 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <article class="blog-single-wrap mb-40">
                        <div class="blog-wrap-thumb">
                            <a href="#">
                                <img src="assets/img/blog/blog-2.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-wrap-details">
                            <div class="blog-wrap-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> September 15, 2018 </span>
                                <span><a href="#"><i class="far fa-user"></i> Diboli B. Joly</a></span>
                                <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h3 class="blog-wrap-title">
                                <a href="#">
                                    Practical Suggestions To Improve Usability Landing Sages With Animation From Slides.
                                </a>
                            </h3>
                            <div class="blog-wrap-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </p>
                                <p>
                                    Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                    est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                    quaerat voluptatem.
                                </p>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        cing elit, sed do eiusmod tempor.</p>
                                    <footer>- Rosalina Pong</footer>
                                </blockquote>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt.
                                </p>
                                <div class="blog-inner-img mb-30 mt-30">
                                    <img src="assets/img/blog/blog-3.jpg" alt="blog image">
                                </div>
                                <div class="inner-content">
                                    <h4>A cleansing hot shower or bath</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia.
                                    </p>
                                </div>
                                <div class="inner-content">
                                    <h4>Setting the mood with incense</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia.
                                    </p>
                                </div>
                                <div class="row mt-50">
                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                        <div class="blog-post-tag">
                                            <span>Releted Tags</span>
                                            <a href="#">organic</a>
                                            <a href="#">Foods</a>
                                            <a href="#">tasty</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="blog-share-icon text-left text-md-right">
                                            <span>Share: </span>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author mt-80 mb-40">
                            <div class="author-img text-center">
                                <img src="assets/img/thumb/author-2.png" alt="thumb">
                            </div>
                            <div class="author-text text-center">
                                <h3>MD. Salim Rana</h3>
                                <div class="author-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance-square"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure
                                    dolor.
                                </p>
                            </div>
                        </div>
                        <div class="blog-comments">
                            <div class="blog-comment-title mb-30">
                                <h2>03 Comments</h2>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/thumb/author-4.png" alt="thumb">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Karon Balina</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="children">
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/thumb/author-3.png" alt="thumb">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Julias Roy</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/thumb/author-4.png" alt="thumb">

                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Arista Williamson</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-comments-form">
                            <div class="post-comments-title">
                                <h2>Post Comments</h2>
                            </div>
                            <form id="contacts-form" class="conatct-post-form" action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-message">
											<textarea name="comments" id="comments" cols="30" rows="10"
                                                      placeholder="Your Comments...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-name">
                                            <input type="text" placeholder="Your Name.... ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-email">
                                            <input type="email" placeholder="Your Email....">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <button class="a-btn btn-theme" type="submit">Post comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-10">
                    <div class="blog-sidebar">
                        <div class="blog-widget">
                            <h3 class="widget-title">Search Objects</h3>
                            <form class="search-widget">
                                <input type="text" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-widget">
                            <h3 class="widget-title">Popular Feeds</h3>
                            <ul class="recent-posts">
                                <li>
                                    <div class="recent-posts-thumb">
                                        <a href="#"><img src="assets/img/widget/w-blog-1.jpg" alt="blog"></a>
                                    </div>
                                    <div class="recent-posts-details">
                                        <h6>
                                            <a href="#">
                                                Smashing Bringing Person Is lity Back To The Web.
                                            </a>
                                        </h6>
                                        <span>October 18, 2018 </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-posts-thumb">
                                        <a href="#"><img src="assets/img/widget/w-blog-2.jpg" alt="blog"></a>
                                    </div>
                                    <div class="recent-posts-details">
                                        <h6>
                                            <a href="#">
                                                Smashing Bringing Person Is lity Back To The Web.
                                            </a>
                                        </h6>
                                        <span>October 18, 2018 </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-posts-thumb">
                                        <a href="#"><img src="assets/img/widget/w-blog-3.jpg" alt="blog"></a>
                                    </div>
                                    <div class="recent-posts-details">
                                        <h6>
                                            <a href="#">
                                                Smashing Bringing Person Is lity Back To The Web.
                                            </a>
                                        </h6>
                                        <span>October 18, 2018 </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="categories-widget">
                                <li>
                                    <a href="#">Lifestyle <span>78</span></a>
                                </li>
                                <li>
                                    <a href="#">Travel <span>42</span></a>
                                </li>
                                <li>
                                    <a href="#">Fashion <span>32</span></a>
                                </li>
                                <li>
                                    <a href="#">Music <span>85</span></a>
                                </li>
                                <li>
                                    <a href="#">Branding <span>05</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-widget">
                            <h3 class="widget-title">Social Profile</h3>
                            <div class="social-profile">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h3 class="widget-title">Social Profile</h3>
                            <div class="tag-widget">
                                <a href="#">Popular</a>
                                <a href="#">desgin</a>
                                <a href="#">usability</a>
                                <a href="#">develop</a>
                                <a href="#">consult</a>
                                <a href="#">icon</a>
                                <a href="#">HTML</a>
                                <a href="#">ux</a>
                                <a href="#">business</a>
                                <a href="#">kit</a>
                                <a href="#">keyboard</a>
                                <a href="#">tech</a>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <div class="banner-widget">
                                <a href="#"><img src="assets/img/thumb/add-banner.jpg" alt="thumb"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    about-area end    -->
@endsection

@section('script')

@endsection