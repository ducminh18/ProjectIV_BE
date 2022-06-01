@extends('home.layouts.home-layout')
@section('title')
    Juice Fruit
@endsection
@section('page-title')
@endsection

@section('content')
    @include('home/partial/extend_header')
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="@{{ baseUrl + '/api/files/' + product.image.file_path }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="@{{ baseUrl + '/api/files/' + product.image.file_path }}" src="@{{ baseUrl + '/api/files/' + product.image.file_path }}" alt="">
                            <img ng-repeat="d in product.details" data-imgbigurl="@{{ baseUrl + '/api/files/' + d.image.file_path }}"
                                src="@{{ baseUrl + '/api/files/' + d.image.file_path }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>@{{ product.name }}</h3>
                        {{-- <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div> --}}
                        <div class="product__details__price">@{{ price | number }}đ</div>

                        <div class="mb-3">
                            <a ng-repeat="d in product.details" href="javascript:;" ng-class="d.id == detail.id ? 'active' : ''" class="product_select"
                                ng-click="setDetail(d)">@{{ d.size }}</span></a>
                        </div>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <span class="dec qtybtn" ng-click="quantity = quantity - 1">-</span>
                                    <input type="text" ng-model="quantity">
                                    <span class="inc qtybtn" ng-click="quantity = quantity + 1">+</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn" ng-click="addCart(detail, quantity)">Thêm vào giỏ hàng</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Tình trạng</b> <span>@{{ product.quantity > 0 ? 'Có sẵn' : 'Hết' }}</span></li>
                            <li><b>Chia sẻ qua</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Mô tả sản phẩm</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div ng-bind-html="product.description"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div ng-repeat="item in data" class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="@{{ baseUrl + '/api/files/' + item.image.file_path }}">
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
        </div>
    </section>
    <!-- Related Product Section End -->
@endsection
@section('scripts')
    <script src="/assets/home/js/productDetailController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
