<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/assets/home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/assets/home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/assets/home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/home/css/style.css" type="text/css">
</head>

<body ng-app="myApp" ng-controller="myController">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="/assets/home/#"><img src="/assets/home/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                {{-- <li><a href="/assets/home/#"><i class="fa fa-heart"></i> <span>1</span></a></li> --}}
                <li><a href="/assets/home/#"><i class="fa fa-shopping-bag"></i> <span>@{{cart.length}}</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>@{{totalCart | number}}đ</span></div>
        </div>
        <div class="humberger__menu__widget">
            {{-- <div class="header__top__right__language">
                <img src="/assets/home/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="/assets/home/#">Spanis</a></li>
                    <li><a href="/assets/home/#">English</a></li>
                </ul>
            </div> --}}
            <div class="header__top__right__auth">
                <a href="/assets/home/#"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="/">Trang chủ</a></li>
                <li><a href="/products">Shop</a></li>
                <li><a href="/contact">Liên hệ</a></li>
                <li><a href="/invoice">Đơn hàng</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="/assets/home/#"><i class="fa fa-facebook"></i></a>
            <a href="/assets/home/#"><i class="fa fa-twitter"></i></a>
            <a href="/assets/home/#"><i class="fa fa-linkedin"></i></a>
            <a href="/assets/home/#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>  juice@tt.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

	@include("home/partial/header")

	@yield('content')

	@include("home/partial/footer")

    <!-- Js Plugins -->
    <script src="/assets/home/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/home/js/bootstrap.min.js"></script>
    <script src="/assets/home/js/jquery.nice-select.min.js"></script>
    <script src="/assets/home/js/jquery-ui.min.js"></script>
    <script src="/assets/home/js/jquery.slicknav.js"></script>
    <script src="/assets/home/js/mixitup.min.js"></script>
    <script src="/assets/home/js/owl.carousel.min.js"></script>
    <script src="/assets/home/js/main.js"></script>
	<script src="/assets/angular.min.js"></script>

	@yield('scripts')
</body>

</html>
