const route = "products";
extendController = function ($scope, $http) {
    $scope.change = () => {
        console.log($scope.file);
    };
    $scope.page = 1;
    $scope.limit = 4;
    $scope.column = "created_at";
    $scope.sort = "desc";
    $scope.extendQuerys = "visible_only=true&consumable_only=true";
};
