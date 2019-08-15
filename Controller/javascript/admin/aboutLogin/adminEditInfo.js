/**
 * 管理者前端檢查
 */
$(document).ready(function () {
    var passwordOk = false;
    var oldPasswordOk = false;
    // 密碼
    $("#password").keyup(function () {
        var stringPassword = $("#password").val();
        ((stringPassword.length <= 12) && (stringPassword.length > 1) && !(/[^A-Za-z0-9]/.test(stringPassword)))
            ? (passwordOk = checkPassword(true))
            : (passwordOk = checkPassword(false));
        checkAdminEditBtn(passwordOk, oldPasswordOk);
    });
    // 舊密碼
    $("#oldPassword").keyup(function () {
        var stringOldPassword = $("#oldPassword").val();
        ((stringOldPassword.length <= 12) && (stringOldPassword.length > 1) && !(/[^A-Za-z0-9]/.test(stringOldPassword)))
            ? (oldPasswordOk = checkOldPassword(true))
            : (oldPasswordOk = checkOldPassword(false));
        checkAdminEditBtn(passwordOk, oldPasswordOk);
    });
})

// 密碼驗證
function checkPassword(bool) {
    if (bool === false) {
        $("#tipsPassword").html("密碼格式為2到12字且不可有空白等特殊字元");
        $("#btnEditAdminInfo").attr('disabled', false);
        return false;
    } else {
        $("#tipsPassword").html("");
        return true;
    }
}

// 舊密碼驗證
function checkOldPassword(bool) {
    if (bool === false) {
        $("#tipsOldPassword").html("舊密碼格式為2到12字且不可有空白等特殊字元");
        $("#btnEditAdminInfo").attr('disabled', true);
        return false;
    } else {
        $("#tipsOldPassword").html("");
        return true;
    }
}

//管理者修改密碼的按鈕可不可以按
function checkAdminEditBtn(passwordOk, oldPasswordOk) {
    if ((passwordOk === true) && (oldPasswordOk === true)) {
        $("#btnEditAdminInfo").attr('disabled', false);
    } else {
        $("#btnEditAdminInfo").attr('disabled', true);
    }
}

/**
 * 編輯管理者資訊
 */
$(document).ready(function () {
    $("#btnEditAdminInfo").click(function () {
        var password = $("#password").val();
        var oldPassword = $("#oldPassword").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/admin/home/actionEditAdminInfo.php",
            dataType: "json",
            data: {
                'password': password,
                'oldPassword': oldPassword
            },
            success: function (data) {
                if (data.isEdit === true) {
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
    })
});