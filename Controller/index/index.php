<?php

require_once('../toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();
$useCartTable = new Cart();

## 驗證登入
if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];
    $checkToken = $useMemberTable->checkToken($token);
    if ($checkToken === true) {
        ## 取資料用於顯示meun暱稱
        $memberData = $useMemberTable->getAll($token);
        ## 取購物車資料表判斷
        $cartData = $useCartTable->getCartList($memberData['userId']);
        ## 將購物清單取出
        $cartList = $cartData['cartList'];
        ## 支解成陣列，再丟給前端做比對
        $cartListArray = explode(",", $cartList);
    }
}

## 顯示左上角ID
if (isset($memberData)) {
    $smarty->assign('account', $memberData['account']);
}

## 新書上榜部分
$newBookObj = $useBookTable->getLimit(4);



## smarty
$smarty->assign('newBookObj', $newBookObj);
$smarty->assign('cartListArray', $cartListArray);

$smarty->display("../templates/index/header.html"); 
$smarty->display("../templates/index/index.html"); 
