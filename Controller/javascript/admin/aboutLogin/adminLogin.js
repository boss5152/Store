$(document).ready(function () {
    var accountOk = "";
    var passwordOk = "";

    $("#account").keyup(function () {
        var stringAccount = $("#account").val();
        ((stringAccount.length <= 12) && (stringAccount.length > 1) && !(/[^A-Za-z0-9]/.test(stringAccount)))
            ? (accountOk = checkAccount(true))
            : (accountOk = checkAccount(false));
            checkAdminLoginBtn(accountOk, passwordOk);
    });

    // 密碼
    $("#password").keyup(function () {
        var stringPassword = $("#password").val();
        ((stringPassword.length <= 12) && (stringPassword.length > 1) && !(/[^A-Za-z0-9]/.test(stringPassword)))
            ? (passwordOk = checkPassword(true))
            : (passwordOk = checkPassword(false));
            checkAdminLoginBtn(accountOk, passwordOk);
    });

});

// 帳號驗證
function checkAccount(bool) {
    if (bool === false) {
        $("#tipsAccount").html("帳號需介於2到12字且不可有空白等特殊字元");
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
        return false;
    } else {
        $("#tipsPassword").html("");
        return true;
    }
}

//管理者登入的按鈕可不可以按
function checkAdminLoginBtn(accountOk, passwordOk) {
    if ((accountOk === true) && (passwordOk === true)) {
        $("#btnAdminLogin").attr('disabled', false);
    } else {
        $("#btnAdminLogin").attr('disabled', true);
    }
}

/*
 *  管理者登入
 */
$(document).ready(function () {
    $("#btnAdminLogin").click(function () {
        var account = $("#account").val();
        var password = $("#password").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/aboutLogin/actionAdminLogin.php",
            dataType: "json",
            data: {
                'account': account,
                'password': password
            },
            success: function (data) {
                if (data.isAdminLogin === true) {
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