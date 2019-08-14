<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity === "admin") {
    ## 獲得所有訂單
    $orderBookArrays = $useCommonMethod->useOrderBookTable->showAll();
    $smarty->assign('orderBookArrays', $orderBookArrays);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/adminHeader.html');
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/order/showOrder.html");
} else {
    header("Location: /Store/Controller/index/index.php");
}
