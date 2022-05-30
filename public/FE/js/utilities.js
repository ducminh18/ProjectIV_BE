window.addEventListener("load", () => {
    const jsAddWishes = document.querySelectorAll(".js-addwish-b2");
    jsAddWishes.forEach((ele) => {
        ele.addEventListener("click", (e) => {
            e.preventDefault();
            if (ele.classList.contains("js-addedwish-b2")) {
                ele.classList.remove("js-addedwish-b2");
            } else {
                ele.classList.add("js-addedwish-b2");
            }
            // ele.removeEventListener();
        });
    });

    const tempStorage = () => {
        const dataStore = JSON.stringify({
            wishList: ["111"],
            carts: ["hi"],
        });
        localStorage.setItem("testStorage", dataStore);
        const dataStorage = localStorage.getItem("testStorage");
        console.log(JSON.parse(dataStorage));
    };

    tempStorage();
});

// $(".js-addwish-b2").on("click", function (e) {
//     e.preventDefault();
// });

// $(".js-addwish-b2").each(function () {
//     var nameProduct = $(this).parent().parent().find(".js-name-b2").html();
//     $(this).on("click", function () {
//         swal(nameProduct, "is added to wishlist !", "success");
//         $(this).addClass("js-addedwish-b2");
//         $(this).off("click");
//     });
// });

$(".js-addwish-detail").each(function () {
    var nameProduct = $(this)
        .parent()
        .parent()
        .parent()
        .find(".js-name-detail")
        .html();

    $(this).on("click", function () {
        swal(nameProduct, "is added to wishlist !", "success");
        $(this).addClass("js-addedwish-detail");
    });
});

$(".js-addcart-detail").each(function () {
    var nameProduct = $(this)
        .parent()
        .parent()
        .parent()
        .parent()
        .find(".js-name-detail")
        .html();
    $(this).on("click", function () {
        swal(nameProduct, "is added to cart !", "success");
    });
});

/*---------------------------------------------*/

$(".js-pscroll").each(function () {
    $(this).css("position", "relative");
    $(this).css("overflow", "hidden");
    var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
    });

    $(window).on("resize", function () {
        ps.update();
    });
});

/*---------------------------------------------*/

$(".parallax100").parallax100();

/*---------------------------------------------*/

$(".gallery-lb").each(function () {
    // the containers for all your galleries
    $(this).magnificPopup({
        delegate: "a", // the selector for gallery item
        type: "image",
        gallery: {
            enabled: true,
        },
        mainClass: "mfp-fade",
    });
});

/*---------------------------------------------*/

$(".js-select2").each(function () {
    $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next(".dropDownSelect2"),
    });
});
