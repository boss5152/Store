$(document).ready(function () {
    /**
     * 隨數量變動總價格
     */
    $("input").change(function () {
        var allBookTotal = 0;
        var bookId = $(this).attr("data-bookid");
        var count = Number($('#showBookCount' + bookId).val());
        var price = Number($('#showBookPrice' + bookId).html());
        var inStock = Number($('#showBookInStock' + bookId).html());
        if (count > inStock) {
            count = inStock;
            $('#showBookCount' + bookId).val(count);
        } else if ((!(/\d/.test(count))) || (count < 0) || (count == 0)) {
            count = 0;
            $('#showBookCount' + bookId).val(count);
        }
        var total = count * price;
        $('#showBookTotal' + bookId).html(total);
        $('.showBookTotal').each(function () {
            allBookTotal = Number($(this).html()) + allBookTotal;
        });
        $('#cartTotal').html(allBookTotal);
        (allBookTotal > 0) ? $("#btnBuyBook").attr('disabled', false) : $("#btnBuyBook").attr('disabled', true);
    })

    /**
     * 購買書本
     */
    $("button").click(function () {
        if ((this.name) === "btnBuyBook") {
            var bookIdArray = [];
            var bookCountArray = [];
            $('.bookId').each(function () {
                bookId = $(this).val();
                bookIdArray.push(bookId);
            });
            $('.bookCount').each(function () {
                bookCount = Number($(this).val());
                bookCountArray.push(bookCount);
            });
            $.ajax({
                type: "POST",
                url: "http://localhost/Store/Controller/member/cart/buyBook.php",
                dataType: "json",
                data: {
                    'bookIdArray': bookIdArray,
                    'bookCountArray': bookCountArray
                },
                success: function (data) {
                    if (data.isBuy === true) {
                        alert(data.tips);
                        location = "http://localhost/Store/Controller/member/order/showUserOrder.php";
                    } else {
                        alert(data.tips);
                        location = location;
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
