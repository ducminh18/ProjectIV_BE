const route = "products";
extendController = function ($scope, $http, $location) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    $scope.categories = [];
    {
        const categoryId = params.category;
        if (categoryId) $scope.extendQuerys = "category=" + categoryId;
    }
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
    $scope.extendQuerys = "visible_only=true&consumable_only=true";
    $scope.searchValue = params.search??'';
    $scope.$watch(
        "location.search()",
        function () {
            console.log($location.search());
        },
        true
    );
};
