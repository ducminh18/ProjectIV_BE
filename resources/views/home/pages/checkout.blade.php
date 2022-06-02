@extends('home.layouts.home-layout')
@section('title')
    Thanh toán
@endsection
@section('page-title')
    Thanh toán
@endsection

@section('content')
    @include('home/partial/extend_header')
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div> --}}
            <div class="checkout__form">
                <h4>Thông tin đơn hàng</h4>
                <form onsubmit="event.preventDefault()" ng-submit="saveInvoice()">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Tên khách hàng<span>*</span></p>
                                <input required type="text" name="name" ng-model="customer.name">
                            </div>
                            <div class="checkout__input">
                                <p>Số điện thoại<span>*</span></p>
                                <input required type="text" name="phone_number" ng-model="customer.phone">
                            </div>
                            <div class="checkout__input">
                                <p>Tỉnh/Thành phố<span>*</span></p>
                                <input required type="text"  name="town" ng-model="customer.town">
                            </div>
                            <div class="checkout__input">
                                <p>Quận/Huyện<span>*</span></p>
                                <input required type="text"  name="district" ng-model="customer.district">
                            </div>
                            <div class="checkout__input">
                                <p>Xã/Phường<span>*</span></p>
                                <input required type="text"  name="commune" ng-model="customer.commune">
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input required type="text"  name="address" ng-model="customer.address">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Tạo tài khoản mới?
                                    <input type="checkbox" id="acc" ng-model="createAccount">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Tạo một tài khoản với thông tin đăng nhâp bên dưới. Nếu bạn đã có tài khoản, hãy đăng nhập.
                            </p>
                            <div ng-if="createAccount" class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="email"  name="email"  ng-model="customer.email">
                            </div>
                            <div ng-if="createAccount" class="checkout__input">
                                <p>Mật khẩu<span>*</span></p>
                                <input type="text" ng-model="customer.password">
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <input  name="note" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Tiền</span></div>
                                <ul>
                                    <li ng-repeat="c in cart track by $index">@{{ c.product.product.name + ' ' + c.product.size }}
                                        <span>@{{ c.quantity * c.product.out_price | number }}đ</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Tạm tính <span>@{{ totalCart | number }}đ</span></div>
                                <div class="checkout__order__total">Tổng tiền <span>@{{ totalCart | number }}đ</span></div>
                                <p>Cảm ơn bạn đã tin tưởng sử dụng dịnh vụ của chúng tôi.</p>
                                <button style="font-family: 'Roboto'" type="submit" class="site-btn">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
@section('scripts')
    <script src="/assets/home/js/checkoutController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
