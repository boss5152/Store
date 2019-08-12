/**
 * 刪除訂單
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnDeleteOrder") {
            var orderId = $(this).val();
            var goDelete = confirm("您確定要刪除這筆訂單嗎 ?");
            if (goDelete === true) {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/Store/Controller/admin/order/deleteOrder.php",
                    dataType: "json",
                    data: {
                        'orderId': orderId
                    },
                    success: function (data) {
                        if (data.isDelete === true) {
                            alert(data.tips);
                            location = location;
                        } else {
                            alert(data.tips);
                        }
                    },
                    error: function () {
                        alert("錯誤請求");
                    }
                })
            }
        }
    });
});