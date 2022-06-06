    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Loại sản phẩm</span>
                        </div>
                        <ul ng-repeat="cate in categories">
                            <li><a href="/products?category=@{{ cate.id }}">@{{ cate.name }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="/products">
                                <input type="text" name="search" placeholder="Bạn cần tìm gì?">
                                <button type="submit" class="site-btn">Tìm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 912.345.678</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: auto !important" class="hero__item">
                        <img src="/assets/home/img/hero/banner-newata-1.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
