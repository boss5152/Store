$(document).ready(function () {

    var addBookNameOk = "";
    var addBookAuthorOk = "";
    var addBookInfoOk = "";
    var addBookPriceOk = "";
    var addBookInStockOk = "";
    //圖片預覽
    $("#addBookPhoto").change(function () {
        var reader = new FileReader();
        reader.onload = function (event) {
            $("#addBookPhotoDemo").attr("src", event.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
    
    // 書名
    $("#addBookName").keyup(function () {
        var stringBookName = $("#addBookName").val();
        ((stringBookName.length > 0) && (stringBookName.length < 31))
            ? (addBookNameOk = checkAddBookName(true))
            : (addBookNameOk = checkAddBookName(false));
        checkAddBookBtn(addBookNameOk, addBookAuthorOk, addBookInfoOk, addBookPriceOk, addBookInStockOk);
    });

    // 作者
    $("#addBookAuthor").keyup(function () {
        var stringBookAuthor = $("#addBookAuthor").val();
        ((stringBookAuthor.length > 0) && (stringBookAuthor.length < 21))
            ? (addBookAuthorOk = checkAddBookAuthor(true))
            : (addBookAuthorOk = checkAddBookAuthor(false));
        checkAddBookBtn(addBookNameOk, addBookAuthorOk, addBookInfoOk, addBookPriceOk, addBookInStockOk);

    });

    // 書本介紹
    $("#addBookInfo").keyup(function () {
        var stringBookInfo = $("#addBookInfo").val();
        ((stringBookInfo.length > 0) && (stringBookInfo.length < 101))
            ? (addBookInfoOk = checkAddBookInfo(true))
            : (addBookInfoOk = checkAddBookInfo(false, stringBookInfo.length));
        checkAddBookBtn(addBookNameOk, addBookAuthorOk, addBookInfoOk, addBookPriceOk, addBookInStockOk);

    });

    // 價格
    $("#addBookPrice").keyup(function () {
        var stringBookPrice = $("#addBookPrice").val();
        ((stringBookPrice.length > 0) && (stringBookPrice.length < 11) && (/[0-9]/.test(stringBookPrice)))
            ? (addBookPriceOk = checkAddBookPrice(true))
            : (addBookPriceOk = checkAddBookPrice(false));
            checkAddBookBtn(addBookNameOk, addBookAuthorOk, addBookInfoOk, addBookPriceOk, addBookInStockOk);
    });

    // 庫存
    $("#addBookInStock").keyup(function () {
        var stringBookInStock = $("#addBookInStock").val();
        ((stringBookInStock.length > 0) && (stringBookInStock.length < 3) && (/[0-9]/.test(stringBookInStock)))
            ? (addBookInStockOk = checkAddBookInStock(true))
            : (addBookInStockOk = checkAddBookInStock(false));
        checkAddBookBtn(addBookNameOk, addBookAuthorOk, addBookInfoOk, addBookPriceOk, addBookInStockOk);
    });

});

// 書名驗證
function checkAddBookName(bool) {
    if (bool === false) {
        $("#tipsAddBookName").html("此欄位必填，且不可超過30字");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsAddBookName").html("");
        return true;
    }
}

// 作者驗證
function checkAddBookAuthor(bool) {
    if (bool === false) {
        $("#tipsAddBookAuthor").html("此欄位必填，且不可超過20字");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsAddBookAuthor").html("");
        return true;
    }
}

// 書本介紹驗證
function checkAddBookInfo(bool, bookInfoLength) {
    if (bool === false) {
        $("#tipsAddBookInfo").html("此欄位必填，且不可超過100字，您當前為" + bookInfoLength + "字");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsAddBookInfo").html("");
        return true;
    }
}

// 價格驗證
function checkAddBookPrice(bool) {
    if (bool === false) {
        $("#tipsAddBookPrice").html("此欄位必填，且只可為不大於10位數之正整數");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsAddBookPrice").html("");
        return true;
    }
}

// 庫存驗證
function checkAddBookInStock(bool) {
    if (bool === false) {
        $("#tipsAddBookInStock").html("此欄位必填，且只可為不大於100之正整數");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsAddBookInStock").html("");
        return true;
    }
}

//新增商品可不可以按
function checkAddBookBtn(addBookNameOk, addBookAuthorOk, addBookInfoOk, addBookPriceOk, addBookInStockOk) {
    if ((addBookNameOk === true) && (addBookAuthorOk === true) && (addBookInfoOk === true) && (addBookPriceOk === true) && (addBookInStockOk === true)) {
        $("#btnBookAdd").attr('disabled', false);
    } else {
        $("#btnBookAdd").attr('disabled', true);
    }
}


/*
 * 新增商品
 */
$(document).ready(function () {
    $("#btnBookAdd").click(function () {
        var formData = new FormData(formAddBook);
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/book/actionAddBook.php",
            dataType: "json",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.isAdd === true) {
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
    })
});