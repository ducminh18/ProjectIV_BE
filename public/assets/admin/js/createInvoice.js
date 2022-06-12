const route = "product-details";
extendController = ($scope, $http) => {
    // $scope.name = '';
    // $scope.visible = true;
    $scope.status = [
        { name: "Đang duyệt", id: 0 },
        { name: "Đã duyệt", id: 1 },
        { name: "Đang giao", id: 2 },
        { name: "Từ chối", id: 3 },
        { name: "Hoàn thành", id: 4 },
    ];

    $scope.fields = [
        {
            hidden: false,
            field: "product_detail.product.name",
            column: "",
            display: "Tên sản phẩm",
            default: "",
            type: "text",
            readonly: true,
        },
        {
            hidden: false,
            field: "product_detail.color",
            column: "",
            display: "Màu sắc",
            default: "",
            readonly: true,
            type: "text",
        },
        {
            hidden: false,
            field: "product_detail.size",
            column: "",
            display: "Kích thước",
            default: "",
            readonly: true,
            type: "text",
        },
        {
            hidden: false,
            field: "price",
            column: "",
            display: "Giá bán",
            default: 0,
            readonly: true,
            type: "number",
        },
        {
            hidden: false,
            field: "quantity",
            display: "Số lượng",
            default: "",
            type: "text",
        },
        {
            hidden: false,
            field: "product_detail.remaining_quantity",
            column: "",
            display: "Số lượng còn",
            default: "",
            readonly: true,
            type: "text",
        },
        {
            hidden: false,
            field: "product_detail.default_image.file_path",
            column: "",
            display: "Ảnh",
            default: "",
            type: "file",
            readonly: true,
        },
        {
            hidden: false,
            field: "product_detail.unit",
            column: "",
            display: "ĐVT",
            default: "",
            readonly: true,
            type: "text",
        },
    ];

    $scope.invoice = {
        total: 0,
    };
    $scope.id = 0;
    $scope.item = {};
    $scope.selectedStatus = $scope.status[0];
    $scope.selectedProduct = {};
    for (let field of $scope.fields.filter((v) => !v.readonly)) {
        $scope.item[field.field] = field.default;
    }
    const idInput = document.getElementById("product_id");
    $scope.extendQuerys = "with_detail=true";
    $scope.showAddNew = () => {
        $scope.newDetail = {};
        document.querySelectorAll("tr input[type=radio]").forEach((i) => {
            i.checked = false;
        });
        $scope.editting = false;
        $scope.deleting = false;
    };
    $scope.save = () => {
        if ($scope.deleting) {
            const detail = $scope.details[$scope.id];
            $scope.invoice.total -= detail.quantity * detail.product_detail.out_price;
            $scope.details.splice($scope.id, 1);
        } else {
            $scope.addDetail();
        }
    };
    $scope.saveInovoice = () => {
        const url = $scope.baseUrl + "/api/admin/invoices";
        $scope.invoice.status = $scope.selectedStatus?.id;
        $http.post(url, $scope.invoice).then((res) => {
            if (res.data.status == true) {
                const id = res.data.data;
                const addDetailUrl =
                    $scope.baseUrl + "/api/admin/invoice-details";
                $scope.details.forEach((detail) => {
                    $http.post(addDetailUrl, {
                        product_detail_id: detail.product_detail_id,
                        invoice_id: id,
                        quantity: detail.quantity,
                    });
                });
                alert("Thêm hóa đơn thành công.");
                window.location.href= "/admin/invoice";
            }
        });
    };
    $scope.showDelete = (id) => {
        $scope.id = id;
        $scope.deleting = true;
    };
    $scope.details = [];
    $scope.newDetail = {};
    $scope.addDetail = () => {
        const radio = document.querySelector("tr input[type=radio]:checked");
        const id = radio.value;
        if ($scope.newDetail.quantity && radio != null) {
            const product_detail = $scope.data.find((i) => {
                return i.id == id;
            });
            $scope.details.push({
                product_detail: product_detail,
                product_detail_id: id,
                quantity: $scope.newDetail.quantity,
                price: product_detail.out_price,
            });
            $scope.invoice.total +=
                product_detail.out_price * $scope.newDetail.quantity;
        }
    };
};

function rowSelect(e) {
    e.currentTarget.children[0].children[0].checked = true;
}
