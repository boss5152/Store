/*
 * 顯示新增商品頁面
 */
$(document).ready(function () {
    $("#btnShowBookAdd").click(function () {
        $("#modalAddBook").modal();
    })
});

/*
 * 顯示修改商品資訊
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnShowUpdateBook") {
            var bookId = $(this).val();
            var bookName = $("#showBookName" + bookId).html();
            var bookAuthor = $("#showBookAuthor" + bookId).html();
            var bookInfo = $("#showBookInfo" + bookId).html();
            var bookPrice = $("#showBookPrice" + bookId).html();
            var bookInStock = $("#showBookInStock" + bookId).html();
            var bookPhotoName = $("#showBookPhotoName" + bookId).val();
            var photoPath = "/Store/Controller/image/" + bookPhotoName;
            $("#bookId").val(bookId);
            $("#updateBookName").val(bookName);
            $("#updateBookAuthor").val(bookAuthor);
            $("#updateBookInfo").html(bookInfo);
            $("#updateBookPrice").val(bookPrice);
            $("#updateBookInStock").val(bookInStock);
            $("#updateBookPhotoDemo").attr('src', photoPath);
            $("#modalUpdateBook").modal();
        }
    });
});

/**
 * 刪除商品
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnDeleteBook") {
            var bookId = $(this).val();
            var goDelete = confirm("您確定要刪除這項商品嗎 ?");
            if (goDelete === true) {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/Store/Controller/admin/book/deleteBook.php",
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