<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

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
        $cartListArray = $useCartTable->getCartList($memberData['userId']);
        ## 去資料庫抓出
        $userCartListArrays = $useBookTable->showUserCartList($cartListArray);   
    }
}

## 顯示左上角ID
if (isset($memberData)) {
    $smarty->assign('account', $memberData['account']);
}

## smarty
$smarty->assign('userCartListArrays', $userCartListArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/cart/header.html");
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/cart/showCart.html");
