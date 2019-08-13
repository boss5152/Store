<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useOrderBookTable = new OrderBook();
$useCommonMethod = new CommonMethod();

$isAdmin = $useCommonMethod->checkAdmin();

if ($isAdmin === true) {
    ## 獲得所有訂單
    $orderBookObj = $useOrderBookTable->showAll();
    $smarty->assign('orderBookObj', $orderBookObj);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/adminHeader.html');
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/order/showOrder.html");
} else {
    header("Location: /Store/Controller/index/index.php");
}
