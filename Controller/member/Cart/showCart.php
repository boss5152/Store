<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();
$useMemberTable = new Member();
$useBookTable = new Book();
$useCommonMethod = new CommonMethod();

$isLogin = $useCommonMethod->checkLogin();

if ($isLogin === true) {
    ## 取資料用於顯示meun暱稱
    $memberData = $useMemberTable->getAll($_COOKIE['token']);
    ## 從購物車取出bookId給下一行撈出整個購物車資訊
    $userCartListArrays = $useCartTable->getCartList($memberData['userId']);
    ## 獲取總價格
    $allTotalPrice = $useCartTable->getCartAllTotal($memberData['userId']);
    $smarty->assign('account', $memberData['account']);
    $smarty->assign('userCartListArrays', $userCartListArrays);
    $smarty->assign('allTotalPrice', $allTotalPrice['sum(bookTotalPrice)']);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/userHeader.html"); 
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/cart/showCart.html");
}


