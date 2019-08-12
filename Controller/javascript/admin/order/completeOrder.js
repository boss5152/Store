/**
 * 結單
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnCompleteOrder") {
            var orderId = $(this).val();
            var goComplete = confirm("您確定要將這筆訂單結案嗎 ?");
            if (goComplete === true) {
                $(this).attr("disabled", true);
                $(this).html("已結單");
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