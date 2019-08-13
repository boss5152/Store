/**
 * 搜尋
 */
$(document).ready(function () {
    $("#btnSearch").click(function () {
        var keyword = $('#searchWhat').val();
        $.ajax({
            type: "POST",
            url: "http://localhost/Store/Controller/index/search.php",
            data: {
                'keyword': keyword
            },
            success: function (data) {
                if (data) {
                    $("#mainDiv").html(data);
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
