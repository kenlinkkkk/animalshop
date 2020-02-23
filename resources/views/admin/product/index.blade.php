@extends('admin.layout')

@section('title')
    <title>Thông tin sản phẩm</title>
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
                        All
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Thông tin sản phẩm
                    </h3>
                </div>
                <div class="kt-portlet__head--right pt-3">
                    <a class="btn btn-sm btn-success" href="{{ route('admin.product.add') }}">Thêm mới sản phẩm</a>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin::Section-->
                <div class="kt-section">
                    <div class="kt-section__content ">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Short tag</th>
                                <th scope="col">Đơn vị tính</th>
                                <th scope="col">Giá tiền</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td scope="col">{{ $product->id }}</td>
                                    <td scope="col">{{ $product->name }}</td>
                                    <td scope="col">{{ $product->short_tag }}</td>
                                    <td scope="col">{{ $product->unit_type }}</td>
                                    <td scope="col">{{ $product->price == null ? 'Liên hệ' : $product->price }}</td>
                                    <td scope="col">
                                        <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill kt-badge--rounded">{{ config('variables.product_status')[$product->status] }}</span>
                                    </td>
                                    <td scope="col">
                                        <a href="#" class="btn btn-success btn-sm">Sửa</a>
                                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
@endsection

@section('script')
@endsection
