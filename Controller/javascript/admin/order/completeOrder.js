/**
 * 結單
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnCompleteOrder") {
            var orderId = $(this).val();
            var goComplete = confirm("您確定要出貨這筆訂單嗎 ?");
            if (goComplete === true) {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/Store/Controller/admin/order/completeOrder.php",
                    dataType: "json",
                    data: {
                        'orderId': orderId
                    },
                    success: function (data) {
                        if (data.isComplete === true) {
                            alert(data.tips);
                            location = location;
                        } else {
                            alert(data.tips);
                            if (data.isLogin === false) {
                                location = location;
                            }
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