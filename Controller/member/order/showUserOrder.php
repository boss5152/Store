<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useOrderBookTable = new OrderBook();
$useCommonMethod = new CommonMethod();

$isLogin = $useCommonMethod->checkLogin();
if ($isLogin === true) {
    ##取資料用於顯示meun暱稱
    $memberData = $useMemberTable->getAll($_COOKIE['token']);
    ## 顯示左上角暱稱
    $smarty->assign('account', $memberData['account']);
    ## 獲得所有訂單
    $orderBookArrays = $useOrderBookTable->showUserOrder($memberData['account']);
    
    $smarty->assign('orderBookArrays', $orderBookArrays);
    $smarty->assign('memberData', $memberData);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/userHeader.html"); 
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/order/showUserOrder.html");
} else {
    header("Location: /Store/Controller/index/index.php");
}
