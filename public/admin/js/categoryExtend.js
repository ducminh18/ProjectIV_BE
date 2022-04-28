const route = "categories";
extendController = ($scope, $http) => {
    // $scope.name = '';
    // $scope.visible = true;
    $scope.fields = [
        { field: "name", display: "Tên loại", default: "" },
        { field: "visible", display: "Hiển thị", default: true },
    ];

    for (let field of $scope.fields) {
        $scope[field.field] = field.default;
    }
    $scope.id = 0;

    $scope.showEdit = (item) => {
        $scope.name = item.name;
        $scope.visible = item.visible;
        $scope.id = item.id;
        $scope.editting = true;
        $scope.formVisible = true;
        $scope.deleting = false;
    };

    $scope.showAddNew = () => {
        $scope.name = "";
        $scope.visible = true;
        $scope.editting = false;
        $scope.deleting = false;
    };
    $scope.save = () => {
<<<<<<< HEAD
        $scope.name = document.getElementById("name").value;
=======
        $scope.name = document.getElementById('name').value;
>>>>>>> 7dca136466195f76199f1f30319a1b5f0164bd44
        if ($scope.editting) {
            $scope.update($scope.id, {
                name: $scope.name,
                visible: $scope.visible,
            });
        } else if ($scope.deleting) {
            $scope.delete($scope.id);
        } else {
            $scope.create({ name: $scope.name, visible: $scope.visible });
        }
    };
    $scope.showDelete = (id) => {
        $scope.id = id;
        $scope.deleting = true;
    };
};
