<?php
    
require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity != "admin") {
    header("Location: /Store/Controller/index/index.php");
}

$count = 10;
$getPage = (isset($_GET['page'])) ? $_GET['page'] : 1;
$page = $useCommonMethod->pageStupid($getPage);
$bookNameSearch = (!empty($_GET['bookNameSearch'])) ? $_GET['bookNameSearch'] : '';

## 檢查該分頁是否有資料
$page = ($useCommonMethod->useBookTable->checkPage($page, $count)) ? $page : 1;
$nowPage = $page;

## 接收分頁碼並判斷
($page != 1) ? ($page = ($page - 1) * $count) : ($page = 0);

$bookArrays = $useCommonMethod->useBookTable->searchBookNameLimit($bookNameSearch, $page, $count);
$searchAllCount = $useCommonMethod->useBookTable->searchAllBookNameCount($bookNameSearch, $count);
$pageCount = ($searchAllCount % $count == 0) ? ($searchAllCount / $count) : ($searchAllCount / $count + 1);
$pageCount = intval($pageCount);

$smarty->assign('bookNameSearch', $bookNameSearch);
$smarty->assign('account', $useCommonMethod->account);
$smarty->assign('nowPage', $nowPage);
$smarty->assign('pageCount', $pageCount);
$smarty->assign('bookArrays', $bookArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/bookHeader.html');
$smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/admin/book/showBook.html');
