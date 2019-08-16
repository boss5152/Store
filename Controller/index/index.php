<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$count = 8;
$getPage = (isset($_GET['page'])) ? $_GET['page'] : 1;
$page = $useCommonMethod->pageStupid($getPage);
$bookNameSearch = (!empty($_GET['bookNameSearch'])) ? $_GET['bookNameSearch'] : '';

## 檢查該分頁是否有資料
$page = ($useCommonMethod->useBookTable->checkPage($page, $count)) ? $page : 1;
$nowPage = $page;

## 接收分頁碼並判斷
($page != 1) ? ($page = ($page - 1) * $count) : ($page = 0);

$bookArrays = $useCommonMethod->useBookTable->searchBookNameLimit($bookNameSearch, $page, $count);
$allBookCount = $useCommonMethod->useBookTable->searchAllBookNameCount($bookNameSearch, $count);
$pageCount =  ($allBookCount % $count == 0) ? ($allBookCount / $count) : ($allBookCount / $count + 1);
$pageCount = intval($pageCount);

if ($useCommonMethod->identity == "member") {
    $memberData = $useCommonMethod->useMemberTable->getAll($useCommonMethod->check['token']);
    $cartListArray = $useCommonMethod->useCartTable->getCartBookId($memberData['userId']);
    ## 這邊拆解查詢陣列重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
    $newBookArrays = [];
    foreach ($bookArrays as $newBookArray) {
        $newBookArray['isAddCart'] = (in_array($newBookArray['bookId'], $cartListArray)) ? "已納入購物車" : "加入購物車";
        $newBookArray['isAddCart'] = ($newBookArray['bookInStock'] == 0 && $newBookArray['isAddCart'] == "加入購物車") ? "庫存不足" : $newBookArray['isAddCart'];
        array_push($newBookArrays, $newBookArray); 
    }
    $bookArrays = $newBookArrays;
}

$smarty->assign('bookNameSearch', $bookNameSearch);
$smarty->assign('account', $useCommonMethod->account);
$smarty->assign('nowPage', $nowPage);
$smarty->assign('pageCount', $pageCount);
$smarty->assign('newBookArrays', $bookArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/indexHeader.html");
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
