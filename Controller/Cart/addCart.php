<?php

require_once('C:/xampp/htdocs/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();
$useMemberTable = new Member();

## 登入驗證

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tips = "";
    $isAdd = false;
    ## 拿bookId
    $bookId = $_POST['bookId'];
    ## 獲得查詢
    $cartData = $useCartTable->getCartList(1);
    ## 將購物清單取出
    $cartList = $cartData['cartList'];
    ## 支解，會成為一個個陣列
    $cartListArray = explode(",", $cartList);

    ## 比對是否已經在購物清單裡
    foreach ($cartListArray as $value) {
        if ($bookId === $value) {
            $tips = "這本書已在購物車裡";
        }
    }
    ## 沒重複，加入資料庫
    if ($tips === "") {
        $cartList .= $bookId . ",";
        $isAddCart = $useCartTable->update($cartList, 1);
        if ($isAddCart === true) {
            $tips = "加入購物車成功";
            $isAdd = true;
        } else {
            $tips = "新增失敗，請重新操作";
        }
    }

    ## 最後回傳請求，這裡成功不在前端alert，只丟json給前端讓button變色
    ## 錯誤才跳訊息
    echo json_encode(array(
        'isAdd' => $isAdd,
        'tips' => $tips
    ));

    $smarty->assign("cartListArray", $cartListArray);
}
