/**
 * 隨數量變動總價格
 */
$(document).ready(function () {
    $("input").change(function () {
        var bookId = $(this).attr("data-bookid");
        var count = $('#showBookCount' + bookId).val();
        var price = $('#showBookPrice' + bookId).html();
        var total = count * price ;
        $('#showBookTotal' + bookId).html(total);
    })
})

/**
 * 購買書本
 */
$(document).ready(function () {
    $("button").click(function () {
        console.log($("#showBookTotal1").html());
        // if ((this.name) === "btnBuyBook") {
        //     var bookId = $(this).val();
        //     var buyCount = $("#buyCount" + bookId).val();
        //     $.ajax({
        //         type: "POST",
        //         url: "http://localhost/Store/Controller/member/cart/buyBook.php",
        //         dataType: "json",
        //         data: {
        //             'bookId': bookId,
        //             'buyCount': buyCount
        //         },
        //         success: function (data) {
        //             if (data.isBuy === true) {
        //                 alert(data.tips);
        //             } else {
        //                 alert(data.tips);
        //             }
        //         },
        //         error: function () {
        //             alert("錯誤請求");
        //         }
        //     })
        // }
    })
})

/**
 * 刪除購物車品項
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnDeleteCart") {
            var bookId = $(this).val();
            var goDelete = confirm("您確定要將這項商品移除購物車嗎 ?");
            if (goDelete === true) {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/Store/Controller/member/cart/deleteCart.php",
                    dataType: "json",
                    data: {
                        'bookId': bookId
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
