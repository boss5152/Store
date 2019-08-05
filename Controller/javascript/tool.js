/*
 *  前端檢查
 */
$(document).ready(function () {
    // 帳號
    var accountOk = "";
    var passwordOk = "";
    var emailOk = "";
    var oldPasswordOk = "";
    //因為這貨一開始有值，所以給TRUE
    var editEmailOk = true;
    var adminKeyOk = "";
    var bookNameOk = "";
    var bookAuthorOk = "";
    var bookInfoOk = "";
    var bookPriceOk = "";
    var bookPhotoOk = "";

    $("#account").keyup(function () {
        var stringAccount = $("#account").val();
        ((stringAccount.length <= 12) && (stringAccount.length > 1) && !(/[^A-Za-z0-9]/.test(stringAccount)))
            ? (accountOk = checkAccount(true))
            : (accountOk = checkAccount(false));
        checkMemberBtn(accountOk, passwordOk, emailOk);
    });

    // 密碼
    $("#password").keyup(function () {
        var stringPassword = $("#password").val();
        ((stringPassword.length <= 12) && (stringPassword.length > 1) && !(/[^A-Za-z0-9]/.test(stringPassword)))
            ? (passwordOk = checkPassword(true))
            : (passwordOk = checkPassword(false));
        checkMemberBtn(accountOk, passwordOk, emailOk);
    });

    // 信箱 長度上限25
    $("#email").keyup(function () {
        var stringEmail = $("#email").val();
        ((stringEmail.length <= 25) && (/^([A-Za-z0-9])+\@([A-Za-z0-9])+\.(com)$/.test(stringEmail)))
            ? (emailOk = checkEmail(true))
            : (emailOk = checkEmail(false));
        checkMemberBtn(accountOk, passwordOk, emailOk);
    });

    // 舊密碼
    $("#oldPassword").keyup(function () {
        var stringOldPassword = $("#oldPassword").val();
        ((stringOldPassword.length <= 12) && (stringOldPassword.length > 1) && !(/[^A-Za-z0-9]/.test(stringOldPassword)))
            ? (oldPasswordOk = checkOldPassword(true))
            : (oldPasswordOk = checkOldPassword(false));
        checkEditMemberBtn(passwordOk, oldPasswordOk, editEmailOk);
    });

    // 編輯頁面的信箱欄位 長度上限25
    $("#editEmail").keyup(function () {
        var stringEditEmail = $("#editEmail").val();
        ((stringEditEmail.length <= 25) && (/^([A-Za-z0-9])+\@([A-Za-z0-9])+\.(com)$/.test(stringEditEmail)))
            ? (editEmailOk = checkEmail(true))
            : (editEmailOk = checkEmail(false));
        checkMemberBtn(passwordOk, oldPasswordOk, editEmailOk);
    });

    //管理者登入頁面的管理者金鑰
    $("#adminKey").keyup(function () {
        var stringAdminKey = $("#adminKey").val();
        (stringAdminKey.length > 0)
            ? (adminKeyOk = checkAdminKey(true))
            : (adminKeyOk = checkAdminKey(false));
        checkAdminLoginBtn(accountOk, passwordOk, adminKeyOk);
    });

    //管理者修改密碼頁面的管理者金鑰
    $("#adminKey").keyup(function () {
        var stringAdminKey = $("#adminKey").val();
        (stringAdminKey.length > 0)
            ? (adminKeyOk = checkAdminKey(true))
            : (adminKeyOk = checkAdminKey(false));
        checkAdminEditBtn(passwordOk, oldPasswordOk, adminKeyOk);
    });

    // 預覽圖片功能
    $("#bookPhoto").change(function () {
        var reader = new FileReader();
        reader.onload = function (event) {
            $("#bookPhotoDemo").attr("src", event.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    // 書名
    $("#bookName").keyup(function () {
        var stringBookName = $("#bookName").val();
        ((stringBookName.length > 0) && (stringBookName.length < 31))
            ? (bookNameOk = checkBookName(true))
            : (bookNameOk = checkBookName(false));
        checkAddBookBtn(bookNameOk, bookAuthorOk, bookInfoOk, bookPriceOk, bookPhotoOk);
    });

    // 作者
    $("#bookAuthor").keyup(function () {
        var stringBookAuthor = $("#bookAuthor").val();
        ((stringBookAuthor.length > 0) && (stringBookAuthor.length < 21))
            ? (bookAuthorOk = checkBookAuthor(true))
            : (bookAuthorOk = checkBookAuthor(false));
        checkAddBookBtn(bookNameOk, bookAuthorOk, bookInfoOk, bookPriceOk, bookPhotoOk);

    });

    // 書本介紹
    $("#bookInfo").keyup(function () {
        var stringBookInfo = $("#bookInfo").val();
        ((stringBookInfo.length > 0) && (stringBookInfo.length < 101))
            ? (bookInfoOk = checkBookInfo(true))
            : (bookInfoOk = checkBookInfo(false, stringBookInfo.length));
        checkAddBookBtn(bookNameOk, bookAuthorOk, bookInfoOk, bookPriceOk, bookPhotoOk);

    });

    // 價格
    $("#bookPrice").keyup(function () {
        var stringBookPrice = $("#bookPrice").val();
        ((stringBookPrice.length > 0) && (stringBookPrice.length < 11) && (/[0-9]/.test(stringBookPrice)))
            ? (bookPriceOk = checkBookPrice(true))
            : (bookPriceOk = checkBookPrice(false));
        checkAddBookBtn(bookNameOk, bookAuthorOk, bookInfoOk, bookPriceOk, bookPhotoOk);

    });

    // 預覽圖
    $("#bookPhoto").click(function () {
        bookPhotoOk = true;
        checkAddBookBtn(bookNameOk, bookAuthorOk, bookInfoOk, bookPriceOk, bookPhotoOk);
    });

});

// 帳號驗證
function checkAccount(bool) {
    if (bool === false) {
        $("#tipsAccount").html("帳號需介於2到12字且不可有空白等特殊字元");
        $("#btnRegister").attr('disabled', true);
        $("#btnLogin").attr('disabled', true);
        $("#btnEditUserInfo").attr('disabled', false);
        return false;
    } else {
        $("#tipsAccount").html("");
        return true;
    }
}

// 密碼驗證
function checkPassword(bool) {
    if (bool === false) {
        $("#tipsPassword").html("密碼需介於2到12字且不可有空白等特殊字元");
        $("#btnRegister").attr('disabled', true);
        $("#btnLogin").attr('disabled', true);
        $("#btnEditUserInfo").attr('disabled', false);
        return false;
    } else {
        $("#tipsPassword").html("");
        return true;
    }
}

// email驗證
function checkEmail(bool) {
    if (bool === false) {
        $("#tipsEmail").html("email格式須為example@mail.com");
        $("#btnRegister").attr('disabled', true);
        $("#btnLogin").attr('disabled', true);
        $("#btnEditUserInfo").attr('disabled', false);
        return false;
    } else {
        $("#tipsEmail").html("");
        return true;
    }
}

// 舊密碼驗證
function checkOldPassword(bool) {
    if (bool === false) {
        $("#tipsOldPassword").html("舊密碼格式為2到12字且不可有空白等特殊字元");
        $("#btnEditUserInfo").attr('disabled', true);
        return false;
    } else {
        $("#tipsOldPassword").html("");
        return true;
    }
}

// 管理者金鑰驗證
function checkAdminKey(bool) {
    if (bool === false) {
        $("#tipsAdminKey").html("此欄位必填");
        $("#btnAdminLogin").attr('disabled', true);
        return false;
    } else {
        $("#tipsAdminKey").html("");
        return true;
    }
}

// 書名驗證
function checkBookName(bool) {
    if (bool === false) {
        $("#tipsBookName").html("此欄位必填，且不可超過30字");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsBookName").html("");
        return true;
    }
}

// 作者驗證
function checkBookAuthor(bool) {
    if (bool === false) {
        $("#tipsBookAuthor").html("此欄位必填，且不可超過20字");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsBookAuthor").html("");
        return true;
    }
}

// 書本介紹驗證
function checkBookInfo(bool, bookInfoLength) {
    if (bool === false) {
        $("#tipsBookInfo").html("此欄位必填，且不可超過100字，您當前為" + bookInfoLength + "字");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsBookInfo").html("");
        return true;
    }
}

// 價格驗證
function checkBookPrice(bool) {
    if (bool === false) {
        $("#tipsBookPrice").html("此欄位必填，且只可為不大於10位數之正整數");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsBookPrice").html("");
        return true;
    }
}

// 預覽圖驗證
function checkBookPhoto(bool) {
    if (bool === false) {
        $("#tipsBookPhoto").html("此欄位必填，且檔名不可超過100字");
        $("#btnBookAdd").attr('disabled', true);
        return false;
    } else {
        $("#tipsBookPhoto").html("");
        return true;
    }
}

// 按鈕可不可以按
function checkMemberBtn(accountOk, passwordOk, emailOk) {
    if ((accountOk === true) && (passwordOk === true) && (emailOk === true)) {
        $("#btnRegister").attr('disabled', false);
        $("#btnLogin").attr('disabled', false);
    } else {
        $("#btnRegister").attr('disabled', true);
        $("#btnLogin").attr('disabled', true);
    }
}

// 修改的按鈕可不可以按
function checkEditMemberBtn(passwordOk, emailOk, oldPasswordOk) {
    if ((passwordOk === true) && (emailOk === true) && (oldPasswordOk === true)) {
        $("#btnActionEditUserInfo").attr('disabled', false);
    } else {
        $("#btnActionEditUserInfo").attr('disabled', true);
    }
}

//管理者登入的按鈕可不可以按
function checkAdminLoginBtn(accountOk, passwordOk, adminKeyOk) {
    if ((accountOk === true) && (passwordOk === true) && (adminKeyOk === true)) {
        $("#btnAdminLogin").attr('disabled', false);
    } else {
        $("#btnAdminLogin").attr('disabled', true);
    }
}

//管理者修改密碼的按鈕可不可以按
function checkAdminEditBtn(passwordOk, oldPasswordOk, adminKeyOk) {
    if ((passwordOk === true) && (oldPasswordOk === true) && (adminKeyOk === true)) {
        $("#btnEditAdminInfo").attr('disabled', false);
    } else {
        $("#btnEditAdminInfo").attr('disabled', true);
    }
}

//新增商品可不可以按
function checkAddBookBtn(bookNameOk, bookAuthorOk, bookInfoOk, bookPriceOk, bookPhotoOk) {
    if ((bookNameOk === true) && (bookAuthorOk === true) && (bookInfoOk === true) && (bookPriceOk === true) && (bookPhotoOk === true)) {
        $("#btnBookAdd").attr('disabled', false);
    } else {
        $("#btnBookAdd").attr('disabled', true);
    }
}

// 驗證結束-------------

/*
 *  註冊頁面
 */
$(document).ready(function () {
    $("#btnRegister").click(function () {
        var account = $("#account").val();
        var password = $("#password").val();
        var email = $("#email").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/member/actionRegister.php",
            dataType: "json",
            data: {
                'account': account,
                'password': password,
                'email': email
            },
            success: function (data) {
                if (data.isRegister === true) {
                    alert(data.tips);
                    self.location = "showlogin.php";
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

/*
 *  登入頁面
 */
$(document).ready(function () {
    $("#btnLogin").click(function () {
        var account = $("#account").val();
        var password = $("#password").val();
        var email = $("#email").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/member/actionLogin.php",
            dataType: "json",
            data: {
                'account': account,
                'password': password,
                'email': email
            },
            success: function (data) {
                if (data.isLogin === true) {
                    alert(data.tips);
                    location = "http://localhost/Store/Controller/index/index.php";
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

/*
 *  管理者登入頁面
 */
$(document).ready(function () {
    $("#btnAdminLogin").click(function () {
        var account = $("#account").val();
        var password = $("#password").val();
        var adminKey = $("#adminKey").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/actionAdminLogin.php",
            dataType: "json",
            data: {
                'account': account,
                'password': password,
                'adminKey': adminKey
            },
            success: function (data) {
                if (data.isAdminLogin === true) {
                    alert(data.tips);
                    location = "http://localhost/Store/Controller/admin/adminHome.php";
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

/**
 * 顯示編輯資訊
 */
$(document).ready(function () {
    $("#btnShowEditUserInfo").click(function () {
        var token = $("#btnShowEditUserInfo").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/home/showEditUserInfo.php",
            data: {
                'token': token
            },
            success: function (data) {
                if (data) {
                    $("#mainDiv").html(data);//要刷新的div
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

/**
 * 編輯資訊
 */
$(document).ready(function () {
    $("#btnActionEditUserInfo").click(function () {
        var password = $("#password").val();
        var oldPassword = $("#oldPassword").val();
        var email = $("#email").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/home/actionEditUserInfo.php",
            dataType: "json",
            data: {
                'password': password,
                'email': email,
                'oldPassword': oldPassword
            },
            success: function (data) {
                if (data.isEdit === true) {
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

/**
 * 顯示管理者編輯資訊
 */
$(document).ready(function () {
    $("#btnShowEditAdminInfo").click(function () {
        var token = $("#btnShowEditAdminInfo").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/showEditAdminInfo.php",
            data: {
                'token': token
            },
            success: function (data) {
                if (data) {
                    $("#mainDiv").html(data);//要刷新的div
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

/**
 * 編輯管理者資訊
 */
$(document).ready(function () {
    $("#btnEditAdminInfo").click(function () {
        var password = $("#password").val();
        var oldPassword = $("#oldPassword").val();
        var adminKey = $("#adminKey").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/actionEditAdminInfo.php",
            dataType: "json",
            data: {
                'password': password,
                'oldPassword': oldPassword,
                'adminKey': adminKey

            },
            success: function (data) {
                if (data.isEdit === true) {
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

/*
 * 新增商品
 */
$("#btnBookAdd").click(function () {
    var formData = new FormData(formAddBook);
    $.ajax({
        type: "POST",
        url: "http://localhost/Store/Controller/admin/book/addBook.php",
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

/*
 * 顯示修改書本資訊
 */
$(document).ready(function () {
    $("button").click(function () {
        var bookId = $(this).val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/book/showUpdateBook.php",
            data: {
                'bookId': bookId
            },
            success: function (data) {
                if (data) {
                    $("#mainDiv").html(data);//要刷新的div
                    $("#modelUpdateBook").modal();
                } else {
                    alert(data.tips);
                }
            },
            error: function () {
                alert("錯誤請求");
            }
        })
    });
});


