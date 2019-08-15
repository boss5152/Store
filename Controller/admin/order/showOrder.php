<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

## 檢查該分頁是否有資料
$checkPage = $useCommonMethod->useOrderBookTable->checkPage($page, 10);
## 沒有則導回首頁page1
if ($checkPage === false) {
    $page = 1;
}

## 分頁籤讓他亮
$nowPage = $page;
## 接收分頁碼並判斷
($page != 1) ? ($page = ($page - 1) * 10) : ($page = 0);

if ($useCommonMethod->identity === "admin") {
    if (isset($_GET['orderSearch'])) {
        $keyword = $_GET['orderSearch'];
        ## 搜尋顯示10筆
        $orderBookArrays = $useCommonMethod->useOrderBookTable->searchOrderLimitCount($keyword, $page, 10);
        $searchAllCount = $useCommonMethod->useOrderBookTable->searchAllOrderCount($keyword, 10);
        ($searchAllCount % 10 == 0) ? ($pageCount = $searchAllCount / 10) : ($pageCount = $searchAllCount / 10 + 1);
    } else {
        ## 正常顯示
        $orderBookArrays = $useCommonMethod->useOrderBookTable->showOrderLimit($page, 10);
        $allOrderCount = $useCommonMethod->useOrderBookTable->allOrderCount();
        ($allOrderCount % 10 == 0) ? ($pageCount = $allOrderCount / 10) : ($pageCount = $allOrderCount / 10 + 1);
    }
    $pageCount = intval($pageCount);
    if (isset($keyword)) {
        $smarty->assign('keyword', $keyword);
    }
    $smarty->assign('account', $useCommonMethod->account);
    $smarty->assign('nowPage', $nowPage);
    $smarty->assign('pageCount', $pageCount);
    $smarty->assign('orderBookArrays', $orderBookArrays);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/orderHeader.html');
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/order/showOrder.html");
} else {
    header("Location: /Store/Controller/index/index.php");
}
