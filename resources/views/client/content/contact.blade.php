@extends('client.index')
@section('title') {{ 'Liên hệ' }} @endsection

@section('content')
    <!--    breadcrumb-area start    -->
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="dark"
             data-opacity="7" style="background-image: url('{{ asset('assets/client/img/bg/breadcrumb-bg.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Contact Us</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    breadcrumb-area end    -->


    <!--    contact-address-area start    -->
    <div class="contact-address-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="contact-address-wrapper mb-30">
                        <div class="contact-address-title">
                            <h3>London</h3>
                        </div>
                        <ul class="contact-link">
                            <li>82 Bernie Greens Apt. 210, <br> Hendon Way, London, UK</li>
                            <li><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4d2c1d0d1d1f4d1ccd5d9c4d8d19ad7dbd9">[email&#160;protected]</a></li>
                            <li>+53 213 5941 295</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="contact-address-wrapper mb-30">
                        <div class="contact-address-title">
                            <h3>New York</h3>
                        </div>
                        <ul class="contact-link">
                            <li>205 Bernie Greens Apt. 210, <br> Hendon Way, London, UK</li>
                            <li><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="583e2d3c3d3d183d20393528343d763b3735">[email&#160;protected]</a></li>
                            <li>+53 213 5941 295</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="contact-address-wrapper mb-30">
                        <div class="contact-address-title">
                            <h3>Paris</h3>
                        </div>
                        <ul class="contact-link">
                            <li>82 Bernie Greens Apt. 210, <br> Hendon Way, London, UK</li>
                            <li><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="25435041404065405d44485549400b464a48">[email&#160;protected]</a></li>
                            <li>+53 213 5941 295</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    contact-address-area end    -->

    <!--    contact-area Start   -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-bg pt-90 pb-70" style="background-image:url('{{ asset('assets/client/img/bg/counter-bg.png') }}')">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-title text-center mb-35">
                            <h3>Leave a Message</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-wrapper mb-30">
                            <form action="http://bdevs.net/fudee/fudee/mail.php" id="contact-us-form">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <input name="name" placeholder="Name :" type="text">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <input name="email" placeholder="Email :" type="email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <input name="website" placeholder="Website :" type="text">
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
										<textarea name="message" cols="30" rows="10"
                                                  placeholder="Write your comments :"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-button text-center">
                                            <button class="a-btn" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                                <p class="ajax-response"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   contact-area End    -->

    <!--    map-wrapper Start   -->
    <div class="map-wrapper">
        <div class="contact-map" id="contact-map"></div>
    </div>
    <!--    map-wrapper End    -->
@endsection

@section('script')

@endsection