/**
 * 分頁功能
 */
$(document).ready(function () {
    $("a").click(function () {
        var keyword = $('#searchWhat').val();
        if (this.name == "page" && (keyword == "")) {
            var page = $(this).html();
            $.ajax({
                type: "POST",
                url: "http://localhost/Store/Controller/index/index.php",
                data: {
                    'page': page,
                    'identity': "noNeed"
                },
                success: function (data) {
                    $("#mainDiv").html(data);
                },
                error: function () {
                    alert("錯誤請求");
                }
            })
        }
    })
})

/**
 * 查詢結果的分頁功能
 */
$(document).ready(function () {
    $("a").click(function () {
        var keyword = $('#searchWhat').val();
        if (this.name == "page" && keyword) {
            var page = $(this).html();
            $.ajax({
                type: "POST",
                url: "http://localhost/Store/Controller/index/search.php",
                data: {
                    'page': page,
                    'keyword': keyword
                },
                success: function (data) {
                    $("#mainDiv").html(data);
                },
                error: function () {
                    alert("錯誤請求");
                }
            })
        }
    })
})