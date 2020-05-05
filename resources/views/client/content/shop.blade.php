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
                        <h3 class="title">Sản phẩm</h3>
                        <ul>
                            <li><a href="{{ route('home.index') }}">Trang chủ</a></li>
                            <li class="active">Sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    breadcrumb-area end    -->

    <!--    product-area start    -->
    <div class="product-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-6 col-sm-7">
                    <div class="product-showing">
                        <p>Showing 1–22 of 32 results</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-5">
                    <div class="pro-filter mb-40 f-right">
                        <form action="#">
                            <select name="pro-filter" id="pro-filter">
                                <option value="1">Shop By</option>
                                <option value="2">Top Sales</option>
                                <option value="3">New Product</option>
                                <option value="4">A to Z Product</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row product-filter-grid">
                <div class="col-xl-3 col-md-6">
                    <div class="product-wrap">
                        <div class="product-thumb">
                            <a href="#"><img src="{{ asset('assets/client/img/product/product-1.jpg') }}" alt="product"></a>
                        </div>
                        <div class="product-details">
                            <h5><a href="#">Fresh Orange</a></h5>
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
                            <a href="#" class="a-btn">
                                Thêm vào giỏ <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-pagination text-center">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    product-area end    -->
@endsection

@section('script')

@endsection