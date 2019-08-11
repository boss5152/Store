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
        ## 這個陣列用來記錄購物車修改資料用
        $totalArray = [
            'totalInit' => 0
        ];
    }
}

## 顯示左上角ID
if (isset($memberData)) {
    $smarty->assign('account', $memberData['account']);
}
$smarty->assign('totalArray', $totalArray);
$smarty->assign('userCartListArrays', $userCartListArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/userHeader.html"); 
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/cart/showCart.html");
