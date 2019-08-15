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
            url: "http://localhost/Store/Controller/member/aboutLogin/actionRegister.php",
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
            url: "http://localhost/Store/Controller/member/aboutLogin/actionLogin.php",
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

/**
 * 顯示編輯資訊
 */
$(document).ready(function () {
    $("#btnShowEditUserInfo").click(function () {
        var token = $("#btnShowEditUserInfo").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/member/home/showEditUserInfo.php",
            data: {
                'token': token
            },
            success: function (data) {
                if (data) {
                    $("#mainDiv").html(data);//要刷新的div
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
            url: "http://localhost/Store/Controller/member/aboutLogin/actionEditUserInfo.php",
            dataType: "json",
            data: {
                'password': password,
                'email': email,
                'oldPassword': oldPassword
            },
            success: function (data) {
                if (data.isEdit === true) {
                    alert(data.tips);
                    location = "http://localhost/Store/Controller/index/index.php";
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
});

/**
 * 顯示使用者訂單
 */
$(document).ready(function () {
    $("#bntShowOrderBook").click(function () {
        var token = $("#bntShowOrderBook").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/member/home/showUserOrder.php",
            data: {
                'token': token
            },
            success: function (data) {
                if (data) {
                    $("#mainDiv").html(data);//要刷新的div
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
});

/**
 * 顯示管理者編輯資訊
 */
$(document).ready(function () {
    $("#btnShowEditAdminInfo").click(function () {
        var token = $("#btnShowEditAdminInfo").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/home/showEditAdminInfo.php",
            data: {
                'token': token
            },
            success: function (data) {
                if (data) {
                    $("#mainDiv").html(data);//要刷新的div
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
});

/**
 * 加入購物車
 */
$(document).ready(function () {
    $("button").click(function () {
        if ((this.name) === "btnAddCart") {
            var bookId = $(this).val();
            $(this).attr("disabled", true);
            $(this).html("已納入購物車");
            $.ajax({
                type: "POST",
                url: "http://localhost/Store/Controller/member/cart/addCart.php",
                dataType: "json",
                data: {
                    'bookId': bookId
                },
                success: function (data) {
                    if (data.isAdd === true) {
                        alert(data.tips);
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
    })
})
