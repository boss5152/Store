<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$page = $useCommonMethod->page;
## 檢查該分頁是否有資料
$checkPage = $useCommonMethod->useBookTable->checkPage($page, 8);
## 沒有則導回首頁page1
if ($checkPage === false) {
    $page = 1;
}

## 分頁籤讓他亮
$nowPage = $page;
## 接收分頁碼並判斷
$page = ($page != 1) ? (($page - 1) * 8) : 0 ;

## 如果有搜尋值，換成搜尋的
## 判斷keyword
if (isset($_GET['indexSearch'])) {
    $keyword = $_GET['indexSearch'];
    $bookArrays = $useCommonMethod->useBookTable->searchBookNameLimitCount($keyword, $page, 8);
    $allBookCount = $useCommonMethod->useBookTable->searchAllBookNameCount($keyword, 8);
} else {
    ## 無，取得八筆書本資訊
    $bookArrays = $useCommonMethod->useBookTable->showBookLimit($page, 8);
    $allBookCount = $useCommonMethod->useBookTable->allBookCount();
}

($allBookCount % 8 == 0) ? ($pageCount = $allBookCount / 8) : ($pageCount = $allBookCount / 8 + 1);
$pageCount = intval($pageCount);

if ($useCommonMethod->check['isLogin'] && $useCommonMethod->check['isToken']) {
    $memberData = $useCommonMethod->useMemberTable->getAll($useCommonMethod->check['token']);
    $cartListArray = $useCommonMethod->useCartTable->getCartBookId($memberData['userId']);
    ## 這邊拆解查詢陣列重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
    if ($useCommonMethod->check['isAdmin'] === false) {
        $newBookArrays = [];
        foreach ($bookArrays as $newBookArray) {
            $newBookArray['isAddCart'] = (in_array($newBookArray['bookId'], $cartListArray)) ? true : false;
            array_push($newBookArrays, $newBookArray); 
        }
        $bookArrays = $newBookArrays;
    }
}

if (isset($keyword)) {
    $smarty->assign('keyword', $keyword);
}
$smarty->assign('account', $useCommonMethod->account);
$smarty->assign('nowPage', $nowPage);
$smarty->assign('pageCount', $pageCount);
$smarty->assign('newBookArrays', $bookArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/indexHeader.html");
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
