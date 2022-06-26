@extends('home.layouts.home-layout')
@section('title')
    Trang chủ
@endsection
@section('page-title')
    Trang chủ
@endsection
@section('content')
    @include('home/partial/slider')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3" ng-repeat="cate in categories">
                        <div style="height: 50px; background-color: whitesmoke !important;"
                            class="d-flex justify-content-center align-items-center">
                            <h5><a style="color:black !important;font-size:18px;font-weight: 700;"
                                    href="/products?category=@{{ cate.id }}">@{{ cate.name }}</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6" ng-repeat="item in data">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="@{{ baseUrl }}/api/files/@{{ item.image.file_path }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="/products/@{{ item.id }}"><i class="fa fa-search"></i></a></li>
                                <li><a href="#" ng-click="item.default_detail.product = item;addCart(item.default_detail);"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">@{{ item.name }}</a></h6>
                            <h5>@{{ item.min_price | number }}đ</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    @include('home/partial/banner')
@endsection
@section('scripts')
    <script src="/assets/home/js/homeController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
