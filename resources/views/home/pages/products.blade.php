@extends('home.layouts.home-layout')
@section('title')
    Sản phẩm
@endsection
@section('page-title')
    Sản phẩm
@endsection

@section('content')
    @include('home/partial/extend_header')
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Loại</h4>
                            <ul>
                                <li ng-repeat="cate in categories"><a
                                        href="/products?category=@{{ cate.id }}">@{{ cate.name }}</a></li>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Mới nhất</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a ng-repeat="x in data.slice(0,3)" href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic w-50">
                                                <img src="@{{ baseUrl + '/api/files/' + x.image.file_path }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>@{{ x.name }}</h6>
                                                <span>@{{ x.min_price | number }}đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div ng-if="data.length > 3" class="latest-prdouct__slider__item">
                                        <a ng-repeat="x in data.slice(3,3)" href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic w-50">
                                                <img src="@{{ baseUrl + '/api/files/' + x.image.file_path }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>@{{ x.name }}</h6>
                                                <span>@{{ x.min_price | number }}đ</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="">
                        <div class="section-title product__discount__title">
                            <h2>Sản phẩm</h2>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select onchange="console.log(event)">
                                        <option value="">Mặc định</option>
                                        <option value="created_at">Ngày ra mắt</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>@{{ data.length }}</span> Sản phẩm</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                {{-- <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div ng-repeat="item in data" class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="@{{ baseUrl + 'api/files/' + item.image.file_path }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="/products/@{{ item.id }}"><i class="fa fa-search"></i></a>
                                        </li>
                                        <li><a href="javascript:;" ng-click="addCart(item.default_detail)"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">@{{ item.name }}</a></h6>
                                    <h5>@{{ item.min_price | number }}đ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="javascript:;" ng-repeat="i in [] | page: page : totalRecords: limit" ng-click="loadPage(i)"
                            ng-class="i == page ? 'page-item active' : 'page-item'">@{{ i }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
@section('scripts')
    <script src="/assets/home/js/productExtend.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
