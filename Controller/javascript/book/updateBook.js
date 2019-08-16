$(document).ready(function () {
    var updateBookNameOk = true;
    var updateBookAuthorOk = true;
    var updateBookInfoOk = true;
    var updateBookPriceOk = true;
    var updateBookInStockOk = true;

    //圖片預覽
    $("#updateBookPhoto").change(function () {
        var reader = new FileReader();
        reader.onload = function (event) {
            $("#updateBookPhotoDemo").attr("src", event.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    $(':file').change(function () {
        var file = this.files[0];
        name = file.name;
        size = file.size;
        type = file.type;
        if (file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') { 
            alert("檔案格式不符合: png, jpg");
            $(this).val('');
        } else if (file.size > 10240000) {
            alert("圖片上限10MB!!");
            $(this).val('');
        }
    });

    // 書名
    $("#updateBookName").keyup(function () {
        var stringBookName = $("#updateBookName").val();
        ((stringBookName.length > 0) && (stringBookName.length < 31))
            ? (updateBookNameOk = checkUpdateBookName(true))
            : (updateBookNameOk = checkUpdateBookName(false));
        checkUpdateBookBtn(updateBookNameOk, updateBookAuthorOk, updateBookInfoOk, updateBookPriceOk, updateBookInStockOk);
    });

    // 作者
    $("#updateBookAuthor").keyup(function () {
        var stringBookAuthor = $("#updateBookAuthor").val();
        ((stringBookAuthor.length > 0) && (stringBookAuthor.length < 21))
            ? (updateBookAuthorOk = checkUpdateBookAuthor(true))
            : (updateBookAuthorOk = checkUpdateBookAuthor(false));
        checkUpdateBookBtn(updateBookNameOk, updateBookAuthorOk, updateBookInfoOk, updateBookPriceOk, updateBookInStockOk);
    });

    // 書本介紹
    $("#updateBookInfo").keyup(function () {
        var stringBookInfo = $("#updateBookInfo").val();
        ((stringBookInfo.length > 0) && (stringBookInfo.length < 101))
            ? (updateBookInfoOk = checkUpdateBookInfo(true))
            : (updateBookInfoOk = checkUpdateBookInfo(false, stringBookInfo.length));
        checkUpdateBookBtn(updateBookNameOk, updateBookAuthorOk, updateBookInfoOk, updateBookPriceOk, updateBookInStockOk);
    });

    // 價格
    $("#updateBookPrice").keyup(function () {
        var stringBookPrice = $("#updateBookPrice").val();
        ((stringBookPrice.length > 0) && (stringBookPrice.length < 11) && (/^[0-9]*$/.test(stringBookPrice)))
            ? (updateBookPriceOk = checkUpdateBookPrice(true))
            : (updateBookPriceOk = checkUpdateBookPrice(false));
        checkUpdateBookBtn(updateBookNameOk, updateBookAuthorOk, updateBookInfoOk, updateBookPriceOk, updateBookInStockOk);
    });

    // 庫存
    $("#updateBookInStock").keyup(function () {
        console.log(123);
        var stringBookInStock = $("#updateBookInStock").val();
        ((stringBookInStock.length >= 0) && (stringBookInStock.length < 3) && (/^[0-9]*$/.test(stringBookInStock)))
            ? (updateBookInStockOk = checkUpdateBookInStock(true))
            : (updateBookInStockOk = checkUpdateBookInStock(false));
        checkUpdateBookBtn(updateBookNameOk, updateBookAuthorOk, updateBookInfoOk, updateBookPriceOk, updateBookInStockOk);
    });

});

// 書名驗證
function checkUpdateBookName(bool) {
    if (bool === false) {
        $("#tipsUpdateBookName").html("此欄位必填，且不可超過30字");
        $("#btnActionBookUpdate").attr('disabled', true);
        return false;
    } else {
        $("#tipsUpdateBookName").html("");
        return true;
    }
}

// 作者驗證
function checkUpdateBookAuthor(bool) {
    if (bool === false) {
        $("#tipsUpdateBookAuthor").html("此欄位必填，且不可超過20字");
        $("#btnActionBookUpdate").attr('disabled', true);
        return false;
    } else {
        $("#tipsUpdateBookAuthor").html("");
        return true;
    }
}

// 書本介紹驗證
function checkUpdateBookInfo(bool, bookInfoLength) {
    if (bool === false) {
        $("#tipsUpdateBookInfo").html("此欄位必填，且不可超過100字，您當前為" + bookInfoLength + "字");
        $("#btnActionBookUpdate").attr('disabled', true);
        return false;
    } else {
        $("#tipsUpdateBookInfo").html("");
        return true;
    }
}

// 價格驗證
function checkUpdateBookPrice(bool) {
    if (bool === false) {
        $("#tipsUpdateBookPrice").html("此欄位必填，且只可為不大於10位數之正整數");
        $("#btnActionBookUpdate").attr('disabled', true);
        return false;
    } else {
        $("#tipsUpdateBookPrice").html("");
        return true;
    }
}

// 庫存驗證
function checkUpdateBookInStock(bool) {
    if (bool === false) {
        $("#tipsUpdateBookInStock").html("此欄位必填，且只可為0或不大於99之正整數");
        $("#btnActionBookUpdate").attr('disabled', true);
        return false;
    } else {
        $("#tipsUpdateBookInStock").html("");
        return true;
    }
}

// 修改按鈕可不可以按
function checkUpdateBookBtn(bookNameOk, bookAuthorOk, bookInfoOk, bookPriceOk, bookInStockOk) {
    if ((bookNameOk === true) && (bookAuthorOk === true) && (bookInfoOk === true) && (bookPriceOk === true) && (bookInStockOk === true)) {
        $("#btnActionBookUpdate").attr('disabled', false);
    } else {
        $("#btnActionBookUpdate").attr('disabled', true);
    }
}

/*
 * 執行商品修改
 */
$("#btnActionBookUpdate").click(function () {
    var formData = new FormData(formUpdateBook);
    $.ajax({
        type: "POST",
        url: "http://localhost/Store/Controller/admin/book/actionUpdateBook.php",
        dataType: "json",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.isUpdate === true) {
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
})
