<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useOrderBookTable = new OrderBook();

## 驗證登入
if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];
    $checkToken = $useMemberTable->checkToken($token);
    if ($checkToken === true) {
        ##取資料用於顯示meun暱稱
        $memberData = $useMemberTable->getAll($token);
    }
}
if (isset($memberData)) {
    ## 顯示左上角暱稱
    $smarty->assign('account', $memberData['account']);
}

## 獲得所有訂單
$orderBookObj = $useOrderBookTable->showAll();

$smarty->assign('orderBookObj', $orderBookObj);
$smarty->assign('memberData', $memberData);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/home/showUserOrder.html");