<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();
$useCartTable = new Cart();
$useOrderBookTable = new OrderBook();
$useCommonMethod = new CommonMethod();

## 部分
$bookArrays = $useBookTable->showAll();
$isLogin = $useCommonMethod->checkLogin();
$isAdmin = $useCommonMethod->checkAdmin();
$user = "Welcome";

if ($isLogin === true) {
    ## 顯示左上角ID
    $memberData = $useMemberTable->getAll($_COOKIE['token']);
    $user = $memberData['account'];
    if ($isAdmin === false) {
        $cartListArray = $useCartTable->getCartList($memberData['userId']);
        ## 這邊拆解查詢物件重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
        $newBookArrays = [];
        foreach ($bookArrays as $newBookArray) {
            $newBookArray['isAddCart'] = (in_array($newBookArray['bookId'], $cartListArray)) ? true : false;
            array_push($newBookArrays, $newBookArray); 
        }
        $bookArrays = $newBookArrays;
    }
}

$smarty->assign('newBookArrays', $bookArrays);
$smarty->assign('user', $user);
if ($isAdmin === true) {
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/adminHeader.html"); 
} else {
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/header.html");
}
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
