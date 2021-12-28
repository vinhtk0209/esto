function addToCart(id) {
    $.ajax({
        url: "/add-to-cart",
        type: "GET",
        data: {
            id: id,
        },
        success: function (response) {
            if (response.status == 200) {
                $("#qty_cart").html(response.qty);
                swal({ title: "Thêm giỏ hàng thành công", type: "success" });
            }
        },
    });
}
