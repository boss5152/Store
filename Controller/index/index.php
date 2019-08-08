<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();
$useCartTable = new Cart();
$useOrderBookTable = new OrderBook();
$useCommonMethod = new CommonMethod();

## 新書上榜部分
$bookArrays = $useBookTable->getLimit(4);

## 暢銷排行部分
// $useOrderBook = $useOrderBook->

$isLogin = $useCommonMethod->checkLogin();

if ($isLogin === true) {

    $token = $_COOKIE['token'];
    $memberData = $useMemberTable->getAll($token);
    $cartListArray = $useCartTable->getCartList($memberData['userId']);
    ## 這邊拆解查詢物件重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
    $newBookArrays = [];
    foreach ($bookArrays as $newBookArray) {
        $newBookArray['isAddCart'] = (in_array($newBookArray['bookId'], $cartListArray)) ? true : false;
        array_push($newBookArrays, $newBookArray); 
    }
    ## 有登入給能顯示購物車的版本
    $smarty->assign('newBookArrays', $newBookArrays);
    ## 顯示左上角ID
    $smarty->assign('account', $memberData['account']);
} else {
    ## 沒登入給不能顯示購物車的版本
    $smarty->assign('newBookArrays', $bookArrays);
}

$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/header.html"); 
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
