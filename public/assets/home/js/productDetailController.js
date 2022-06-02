const route = "products";
extendController = function ($scope, $http, $location) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    const paths = location.pathname.trim("/").split("/");
    const productId = paths[paths.length - 1];
    if (!isNaN(Number(productId))) {
        $http.get(baseUrl + "/api/admin/products/" + productId).then((res) => {
            if (res.data.status == true) {
                $scope.product = res.data.data;
                $scope.search($scope.product.name);
                $scope.href = $scope.product.name;
                $scope.detail = $scope.product.details.find(
                    (d) => d.out_price == $scope.product.min_price
                );
                setTimeout(() => {
                    $(".product__details__pic__slider").owlCarousel({
                        loop: true,
                        margin: 20,
                        items: 4,
                        dots: true,
                        smartSpeed: 1200,
                        autoHeight: false,
                        autoplay: true,
                    });
                    $(".product__details__pic__slider img").on(
                        "click",
                        function () {
                            var imgurl = $(this).data("imgbigurl");
                            var bigImg = $(
                                ".product__details__pic__item--large"
                            ).attr("src");
                            if (imgurl != bigImg) {
                                $(".product__details__pic__item--large").attr({
                                    src: imgurl,
                                });
                            }
                        }
                    );
                }, 200);
            }
        });
    }
    $scope.categories = [];
    {
        const categoryId = params.category;
        if (categoryId) $scope.extendQuerys = "category=" + categoryId;
    }
    $scope.quantity = 1;
    $scope.page = 1;
    $scope.limit = 5;
    $scope.column = "created_at";
    $scope.sort = "desc";
    $scope.href = "Sản phẩm";
    $scope.extendQuerys = "visible_only=true&consumable_only=true";
    $scope.$watch("quantity", function (value) {
        if (value < 1) {
            $scope.quantity = 1;
        }
    });
    $scope.$watch("data", function (value) {
        const index = $scope.data.findIndex((v) => v.id == productId);
        if (index >= 0) $scope.data.splice(index, 1);
        else $scope.data.pop();
    });
    $scope.$watch("detail", function (value) {
        $scope.price = value?.out_price ?? 0;
    });
    $scope.setDetail = (d) => {
        $scope.detail = d;
    };
};
