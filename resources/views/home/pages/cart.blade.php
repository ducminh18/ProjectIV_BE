@extends('home.layouts.home-layout')
@section('title')
    Sản phẩm
@endsection
@section('page-title')
    Sản phẩm
@endsection

@section('content')
    @include('home/partial/extend_header')
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Size</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="item in cart track by $index">
                                    <td class="shoping__cart__item">
                                        <img height="100" width="100" src="@{{ baseUrl + 'api/files/' + item.product.image.file_path }}" alt="">
                                        <h5>@{{ item.product.product.name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        @{{ item.product.size }}
                                    </td>
                                    <td class="shoping__cart__price">
                                        @{{ item.product.out_price | number }}đ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty"><span class="dec qtybtn"
                                                    ng-click="deleteCart(item.product)">-</span>
                                                <input type="text" ng-model="item.quantity"
                                                    class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                                <span class="inc qtybtn" ng-click="addCart(item.product)">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        @{{ item.quantity * item.product.out_price | number }}đ
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span ng-click="deleteCart(item.product, item.quantity)"
                                            class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="/products" class="primary-btn cart-btn">Tiếp tục mua hàng</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right" style="opacity: 0;"><span
                                class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng giá trị giỏ hàng</h5>
                        <ul>
                            <li>Tạm tính <span>@{{ totalCart | number }}đ</span></li>
                            <li>Tổng đơn <span>@{{ totalCart | number }}đ</span></li>
                        </ul>
                        <a href="/checkout" class="primary-btn">Tiến hành đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
@section('scripts')
    <script src="/assets/home/js/cartController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
