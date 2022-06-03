const route = "products";
var $grid;
extendController = function ($scope, $http, $location) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    $scope.categories = [];
    $scope.extendQuerys = "visible_only=true&consumable_only=true";
    const categoryId = params.category;
    if (categoryId) $scope.extendQuerys = "category=" + categoryId + "&";
    $http
        .get(baseUrl + "/api/admin/categories?page=1&limit=1000")
        .then((res) => {
            if (res.data.status == true) {
                $scope.categories = res.data.data;
            }
        });
    $scope.page = 1;
    $scope.limit = 12;
    $scope.column = "created_at";
    $scope.sort = "desc";
    $scope.href = "Shop";
    $scope.searchValue = params.search ?? "";
    $scope.$watchCollection(
        "data",
        function () {
            setTimeout(() => {}, 200);
        },
        true
    );
    $scope.showModal = (item) => {
        $scope.currentProd = item;
        $http.get(baseUrl + '/api/product-details?limit=999&product_id=' + item.id).then(res => {
            if (res.data.status == true)
            {
                $scope.currentProd.details = res.data.data;
            }
        })
        $(".js-modal1").addClass("show-modal1");
    };
    $scope.hideModal = () => {
        $(".js-modal1").removeClass("show-modal1");
    };
    $scope.sortByTime = function () {
        $grid.isotope({ sortBy: "createTime", sortAscending: false });
    };
    $scope.ascPrice = function () {
        $grid.isotope({ sortBy: "price", sortAscending: true });
    };
    $scope.descPrice = function () {
        $grid.isotope({ sortBy: "price", sortAscending: false });
    };
};
