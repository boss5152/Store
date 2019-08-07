<?php

require_once('C:/xampp/htdocs/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();
$useMemberTable = new Member();
$useBookTable = new Book();

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
        ## 去掉最後一個逗點
        $cartList = substr($cartList, 0, -1);
        ## 支解成陣列
        $cartListArray = explode(",", $cartList);
        ## 去資料庫抓出
        $cartListObj = $useBookTable->showCartList($cartListArray);        
    }
}

## 顯示左上角ID
if (isset($memberData)) {
    $smarty->assign('account', $memberData['account']);
}

## smarty
$smarty->assign('cartListObj', $cartListObj);
$smarty->display("../templates/home/header.html");
$smarty->display('C:/xampp/htdocs/Store/Controller/templates/home/showCart.html');
