<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

## 接收分頁碼並判斷
(isset($_POST['page'])) ? ($page = ($_POST['page'] - 1) * 8) : ($page = 0);
## 分頁籤讓他亮
(isset($_POST['page'])) ? ($nowPage = $_POST['page']) : ($nowPage = 1);

## 部分
$bookArrays = $useCommonMethod->useBookTable->showBookLimit($page);
## 分頁實作
## 取得主資料有幾筆
$allBookCount = $useCommonMethod->useBookTable->allBookCount();
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

$smarty->assign('account', $useCommonMethod->account);
$smarty->assign('nowPage', $nowPage);
$smarty->assign('pageCount', $pageCount);
$smarty->assign('newBookArrays', $bookArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/header.html");
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
