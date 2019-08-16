<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity != "admin") {
    header("Location: /Store/Controller/index/index.php");
}

$getPage = (isset($_GET['page'])) ? $_GET['page'] : 1;
$page = $useCommonMethod->pageStupid($getPage);
$orderSearch = (!empty($_GET['orderSearch'])) ? $_GET['orderSearch'] : '';
$count = 10;

## 檢查該分頁是否有資料
$page = ($useCommonMethod->useOrderBookTable->checkPage($page, $count)) ? $page : 1;
$nowPage = $page;

## 接收分頁碼並判斷
($page != 1) ? ($page = ($page - 1) * $count) : ($page = 0);

$orderBookArrays = $useCommonMethod->useOrderBookTable->searchOrderLimit($orderSearch, $page, $count);
$searchAllCount = $useCommonMethod->useOrderBookTable->searchAllOrderCount($orderSearch, $count);
$pageCount = ($searchAllCount % $count == 0) ? ($searchAllCount / $count) : ($searchAllCount / $count + 1);
$pageCount = intval($pageCount);
$smarty->assign('orderSearch', $orderSearch);
$smarty->assign('account', $useCommonMethod->account);
$smarty->assign('nowPage', $nowPage);
$smarty->assign('pageCount', $pageCount);
$smarty->assign('orderBookArrays', $orderBookArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/orderHeader.html');
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/order/showOrder.html");
