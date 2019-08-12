/**
 * 隨數量變動總價格
 */
$(document).ready(function () {
    $("input").change(function () {
        var bookId = $(this).attr("data-bookid");
        var count = Number($('#showBookCount' + bookId).val());
        var price = Number($('#showBookPrice' + bookId).html());
        var inStock = Number($('#showBookInStock' + bookId).html());
        if (count > inStock) {
            count = inStock;
            $('#showBookCount' + bookId).val(count);
        } else if (isNaN(count)){
            count = 0;
            $('#showBookCount' + bookId).val(count);
        } else if (count < 0 ) {
            count = 0;
            $('#showBookCount' + bookId).val(count);
        }
        var total = count * price ;
        (total > 0) ? $("#btnBuyBook").attr('disabled', false) : $("#btnBuyBook").attr('disabled', true);
        $('#showBookTotal' + bookId).html(total);
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/member/cart/changeCart.php",
            dataType: "json",
            data: {
                'bookId': bookId,
                'count': count,
                'bookTotalPrice': total
            },
            success: function (data) {
                if (data.isUpdate === true) {
                    $('#cartTotal').html(data.total);
                } else {
                    alert(data.tips);
                }
            },
            error: function () {
                alert("錯誤請求");
            }
        })
    })
})

/**
 * 購買書本
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnBuyBook") {
            var bookId = $(this).val();
            var buyCount = $("#buyCount" + bookId).val();
            $.ajax({
                type: "POST",
                url: "http://localhost/Store/Controller/member/cart/buyBook.php",
                dataType: "json",
                data: {
                    'bookId': bookId,
                    'buyCount': buyCount
                },
                success: function (data) {
                    if (data.isBuy === true) {
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
