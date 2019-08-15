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

if ($useCommonMethod->identity === "admin") {
    if (isset($_GET['bookSearch'])) {
        $keyword = $_GET['bookSearch'];
        ## 搜尋顯示10筆
        $bookArrays = $useCommonMethod->useBookTable->searchBookNameLimitCount($keyword, $page, 10);
        $searchAllCount = $useCommonMethod->useBookTable->searchAllBookNameCount($keyword, 10);
        ($searchAllCount % 10 == 0) ? ($pageCount = $searchAllCount / 10) : ($pageCount = $searchAllCount / 10 + 1);
    } else {
        ## 正常顯示
        $bookArrays = $useCommonMethod->useBookTable->showBookLimit($page, 10);
        $allBookCount = $useCommonMethod->useBookTable->allBookCount();
        ($allBookCount % 10 == 0) ? ($pageCount = $allBookCount / 10) : ($pageCount = $allBookCount / 10 + 1);
    }
    $pageCount = intval($pageCount);
    $smarty->assign('account', $useCommonMethod->account);
    $smarty->assign('nowPage', $nowPage);
    $smarty->assign('pageCount', $pageCount);
    $smarty->assign('bookArrays', $bookArrays);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/bookHeader.html');
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/admin/book/showBook.html');
} else {
    header("Location: /Store/Controller/index/index.php");
}
