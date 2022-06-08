    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Loại sản phẩm
                    </h4>

                    <ul>
                        <li ng-reqeat="cate in categories" class="p-b-10">
                            <a href="/products?category=@{{ cate.id }}" class="stext-107 cl7 hov-cl1 trans-04">
                                @{{ cate.name }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Liên kết
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="/track-order" class="stext-107 cl7 hov-cl1 trans-04">
                                Theo dõi đơn hàng
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="/contact" class="stext-107 cl7 hov-cl1 trans-04">
                                Liên hệ
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="/cart" class="stext-107 cl7 hov-cl1 trans-04">
                                Giỏ hàng
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Thông tin liên hệ
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Mọi câu hỏi xin gửi về cho chúng tôi tại địa chỉ Mỹ Hào, Phố Nối, Hưng Yên hoặc gọi vào số điện
                        thoại +84 987.654.321
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Đăng ký nhận tin
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Đăng ký 
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-01.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-02.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-03.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-04.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="/assets/home/images/icons/icon-pay-05.png" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="/assets/home/https://colorlib.com"
                        target="_blank">Colorlib</a> &amp; distributed by <a href="/assets/home/https://themewagon.com"
                        target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>
