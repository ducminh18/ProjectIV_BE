@extends('home.layouts.home-layout')
@section('title')
    Thanh toán
@endsection
@section('page-title')
    Thanh toán
@endsection

@section('content')
    @include('home/partial/extend_header')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div ng-if="message" class="row">
                <div class="col-12">
                    <p style="font-size: 24px;">@{{message}}</p>
                </div>
                <div class="col-12">
                    <p style="font-size: 24px;">Mã đơn hàng của bạn là : <strong>@{{invoiceId}}</strong> <a href="/invoice?invoice=@{{invoiceId}}">Xem đơn hàng</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Số điện thoại</h4>
                        <p>+84 912.345.678</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Địa chỉ</h4>
                        <p>Trung Hưng, Yên Mỹ, Hưng Yên</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Mở cửa</h4>
                        <p>08:00 đến 21:00</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>balostore@ht.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
@section('scripts')
    <script src="/assets/home/js/contactController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
