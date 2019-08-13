/*
 * 登出
 */
$(document).ready(function () {
    $("#btnLogout").click(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/member/aboutLogin/logout.php",
            dataType: "json",
            data: {},
            success: function (data) {
                if (data.isLogout === true) {
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