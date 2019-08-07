<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useOrderBookTable = new OrderBook();

## 驗證登入
if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];
    $checkToken = $useMemberTable->checkToken($token);
    if ($checkToken === true) {
        
        
    }
}
## 獲得所有訂單
$orderBookObj = $useOrderBookTable->showAll();
$smarty->assign('orderBookObj', $orderBookObj);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/templates/admin/order/header.html");
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/templates/admin/order/showOrder.html");