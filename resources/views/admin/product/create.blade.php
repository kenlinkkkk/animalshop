@extends('admin.layout')

@section('title')
    <title>Tạo sản phẩm</title>
@endsection

@section('content_header')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
                    Thông tin sản phẩm
                </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="#" class="kt-subheader__breadcrumbs-link">
                        Thêm mới
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Thông tin sản phẩm</h3>
                            </div>
                        </div>

                        <form class="kt-form kt-form--label-right" method="post" action="{{ route('admin.product.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Thông tin sản phẩm</h3>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Tên</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="old_pass">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Ảnh sản phẩm</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2" name="myDropzone">
                                                    <div class="dropzone-msg dz-message needsclick">
                                                        <h3 class="dropzone-msg-title">Kéo file ảnh</h3>
                                                    </div>
{{--                                                    <input type="file" name="pictures[]" multiple>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Gõ lại mật khẩu mới</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="password" name="confirm_password">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" class="btn btn-success">Cập nhật</button>&nbsp;
                                            <button type="reset" class="btn btn-secondary">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End:: App Content-->
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('assets/js/pages/crud/file-upload/dropzonejs.js') }}"></script>
    <script>
        {{--$("#kt_dropzone_2").dropzone({--}}
        {{--    headers: {--}}
        {{--        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--    },--}}
        {{--    url: "{{ route('admin.upload') }}",--}}
        {{--    paramName: "file",--}}
        {{--    maxFiles: 10,--}}
        {{--    maxFilesize: 10,--}}
        {{--    addRemoveLinks: !0,--}}
        {{--    accept: function (e, o) {--}}
        {{--        "justinbieber.jpg" == e.name ? o("Naha, you don't.") : o()--}}
        {{--    }--}}
        {{--})--}}
    </script>
@endsection
