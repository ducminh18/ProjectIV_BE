<<<<<<< HEAD
const route = "product-details";
=======
const route = 'product-details';
>>>>>>> 7dca136466195f76199f1f30319a1b5f0164bd44
extendController = ($scope, $http) => {
    // $scope.name = '';
    // $scope.visible = true;
    $scope.fields = [
<<<<<<< HEAD
        {
            hidden: false,
            field: "product.name",
            display: "Tên sản phẩm",
            default: "",
            type: "text",
            readonly: true,
        },
        {
            hidden: false,
            field: "option_name",
            display: "Tên CT",
            default: "",
            type: "text",
        },
        {
            hidden: false,
            field: "option_value",
            display: "Giá trị",
            default: "",
            type: "text",
        },
        {
            hidden: false,
            field: "remaining_quantity",
            display: "Số lượng còn",
            default: "",
            type: "text",
        },
        {
            hidden: false,
            field: "unit",
            display: "ĐVT",
            default: "",
            type: "text",
        },
        {
            hidden: false,
            field: "in_price",
            display: "Giá nhập",
            default: 0,
            type: "text",
        },
        {
            hidden: true,
            field: "out_price",
            display: "Giá bán",
            default: 0,
            type: "text",
        },
        {
            hidden: false,
            field: "default_image.file_path",
            display: "Ảnh",
            default: "",
            type: "file",
            readonly: false,
        },
        {
            hidden: true,
            field: "total_quantity",
            display: "Tổng số lượng",
            default: 0,
            type: "text",
            readonly: false,
        },
        {
            hidden: false,
            field: "visible",
            display: "Hiển thị",
            default: true,
            type: "checkbox",
        },
=======
        {hidden: false, field: 'product.name', display: 'Tên sản phẩm', default: '', type: 'text', readonly: true},
        {hidden: false, field: 'option_name', display: 'Tên CT', default: '', type: 'text'},
        {hidden: false, field: 'option_value', display: 'Giá trị', default: '', type: 'text'},
        {hidden: false, field: 'remaining_quantity', display: 'Số lượng còn', default: '', type: 'text'},
        {hidden: false, field: 'unit', display: 'ĐVT', default: '', type: 'text'},
        {hidden: false, field: 'in_price', display: 'Giá nhập', default: 0, type: 'text'},
        {hidden: true, field: 'out_price', display: 'Giá bán', default: 0, type: 'text'},
        {hidden: false, field: 'default_image.file_path', display: 'Ảnh', default: '', type: 'file', readonly: false},
        {hidden: true, field: 'total_quantity', display: 'Tổng số lượng', default: 0, type: 'text', readonly: false},
        {hidden: false, field: 'visible', display: 'Hiển thị', default: true, type: 'checkbox'},
>>>>>>> 7dca136466195f76199f1f30319a1b5f0164bd44
    ];
    $scope.id = 0;
    $scope.item = {};
    $scope.selectedProduct = {};

    // for (let field of $scope.fields.filter(v => !v.readonly)) {
    //     $scope.item[field.field] = field.default;
    // }

    $scope.showEdit = (item) => {
<<<<<<< HEAD
        document.getElementById("default_image.file_path").value = "";
        $scope.id = item.id;
        $scope.selectedProduct =
            $scope.products.find((v) => v.id == item.product.id) ?? {};
        for (let field of $scope.fields.filter((v) => !v.readonly)) {
=======
        document.getElementById('default_image.file_path').value = '';
        $scope.id = item.id;
        $scope.selectedProduct = $scope.products.find(v => v.id == item.product.id)??{};
        for (let field of $scope.fields.filter(v => !v.readonly)) {
>>>>>>> 7dca136466195f76199f1f30319a1b5f0164bd44
            $scope.item[field.field] = item[field.field];
        }
        $scope.editting = true;
        $scope.formVisible = true;
        $scope.deleting = false;
<<<<<<< HEAD
    };

    $scope.showAddNew = () => {
        for (let field of $scope.fields.filter((v) => !v.readonly)) {
            $scope.item[field.field] = field.default;
        }
        document.getElementById("default_image.file_path").value = "";
        $scope.editting = false;
        $scope.deleting = false;
    };
    $scope.save = () => {
        let file = document.getElementById("default_image.file_path").files[0];
        let item = {};
        for (let field of $scope.fields.filter((v) => !v.readonly)) {
            item[field.field] = $scope.item[field.field];
        }
        let index = document.getElementById("select").selectedIndex;
        $scope.selectedProduct = $scope.products[index];
        item.product_id = $scope.selectedProduct.id;
        if (file != undefined && file != null) {
            $scope.upLoadFile(file, "/api/upload").then((res) => {
                if (res.data.status == true) {
                    item.default_image = res.data.data.id;
                }
                if ($scope.editting) {
                    $scope.update($scope.id, item);
                } else if ($scope.deleting) {
                    $scope.delete($scope.id);
                } else {
                    $scope.create(item);
                }
            });
        } else {
=======
    }

    $scope.showAddNew = () => {
        for (let field of $scope.fields.filter(v => !v.readonly)) {
            $scope.item[field.field] = field.default;
        }
        document.getElementById('default_image.file_path').value = '';
        $scope.editting = false;
        $scope.deleting = false;
    }
    $scope.save = () => {
        let file = document.getElementById('default_image.file_path').files[0];
        let item = {};
        for (let field of $scope.fields.filter(v => !v.readonly)) {
            item[field.field] = $scope.item[field.field];
        }
        let index = document.getElementById('select').selectedIndex;
        $scope.selectedProduct = $scope.products[index];
        item.product_id = $scope.selectedProduct.id;
        if (file != undefined && file != null)
        {
            $scope.upLoadFile(file, '/api/upload')
                .then(res => {
                    if (res.data.status == true)
                    {
                        item.default_image = res.data.data.id;
                    }
                    if ($scope.editting) {
                        $scope.update($scope.id, item);
                    } else if ($scope.deleting) {
                        $scope.delete($scope.id);
                    } else {
                        $scope.create(item)
                    }
                });
        }
        else
        {
>>>>>>> 7dca136466195f76199f1f30319a1b5f0164bd44
            item.product_id = $scope.selectedProduct.id;
            if ($scope.editting) {
                $scope.update($scope.id, item);
            } else if ($scope.deleting) {
                $scope.delete($scope.id);
            } else {
<<<<<<< HEAD
                $scope.create(item);
            }
        }
    };
    $scope.showDelete = (id) => {
        $scope.id = id;
        $scope.deleting = true;
    };
    $scope.products = [];
    $http.get("/api/admin/products?page=1&limit=1000").then((res) => {
        if (res.data.status == true) {
            $scope.products = res.data.data;
        }
    });
    $scope.change = () => {
        console.log($scope.file);
    };
};
=======
                $scope.create(item)
            }
        }
    }
    $scope.showDelete = (id) => {
        $scope.id = id;
        $scope.deleting = true;
    }
    $scope.products = [];
    $http.get('/api/admin/products?page=1&limit=1000')
        .then(res => {
            if (res.data.status == true) {
                $scope.products = res.data.data;
            }
        });
    $scope.change = () => {
        console.log($scope.file);
    }
}
>>>>>>> 7dca136466195f76199f1f30319a1b5f0164bd44
