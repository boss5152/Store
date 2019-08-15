<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$page = $useCommonMethod->page;

## 檢查該分頁是否有資料
$checkPage = $useCommonMethod->useBookTable->checkPage($page, 10);
## 沒有則導回首頁page1
if ($checkPage === false) {
    $page = 1;
}

## 分頁籤讓他亮
$nowPage = $page;
## 接收分頁碼並判斷
($page != 1) ? ($page = ($page - 1) * 10) : ($page = 0);

if ($useCommonMethod->identity === "member") {
    if (isset($_GET['userOrderSearch'])) {
        $keyword = $_GET['userOrderSearch'];
        ## 搜尋顯示10筆
        $orderBookArrays = $useCommonMethod->useOrderBookTable->searchUserOrderLimitCount($keyword, $useCommonMethod->account, $page);
        $searchAllCount = $useCommonMethod->useOrderBookTable->searchUserOrderCount($useCommonMethod->account, 10);
        ($searchAllCount % 10 == 0) ? ($pageCount = $searchAllCount / 10) : ($pageCount = $searchAllCount / 10 + 1);
    } else {
        ## 正常顯示
        $orderBookArrays = $useCommonMethod->useOrderBookTable->showUserOrderLimit($useCommonMethod->account, $page, 10);
        $allUserOrderCount = $useCommonMethod->useOrderBookTable->allUserOrderCount($useCommonMethod->account);
        ($allUserOrderCount % 10 == 0) ? ($pageCount = $allUserOrderCount / 10) : ($pageCount = $allUserOrderCount / 10 + 1);
    }
    $pageCount = intval($pageCount);
    if (isset($keyword)) {
        $smarty->assign('keyword', $keyword);
    }
    $smarty->assign('account', $useCommonMethod->account);
    $smarty->assign('nowPage', $nowPage);
    $smarty->assign('pageCount', $pageCount);
    $smarty->assign('orderBookArrays', $orderBookArrays);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/userOrderHeader.html"); 
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/order/showUserOrder.html");
} else {
    header("Location: /Store/Controller/index/index.php");
}
