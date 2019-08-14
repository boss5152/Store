<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity === "member") {
    ##取資料用於顯示meun暱稱
    $memberData = $useCommonMethod->useMemberTable->getAll($useCommonMethod->check['token']);
    ## 顯示左上角暱稱
    $smarty->assign('account', $memberData['account']);
    ## 獲得所有訂單
    $orderBookArrays = $useCommonMethod->useOrderBookTable->showUserOrder($memberData['account']);
    
    $smarty->assign('orderBookArrays', $orderBookArrays);
    $smarty->assign('memberData', $memberData);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/header.html"); 
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/order/showUserOrder.html");
} else {
    header("Location: /Store/Controller/index/index.php");
}
