<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();
$useCartTable = new Cart();
$useCommonMethod = new CommonMethod();

## 接收分頁碼並判斷
(isset($_POST['page'])) ? ($page = ($_POST['page'] - 1) * 8) : ($page = 0);
## 分頁籤讓他亮
(isset($_POST['page'])) ? ($nowPage = $_POST['page']) : ($nowPage = 1);

## 部分
$bookArrays = $useBookTable->showBookLimit($page);
$isLogin = $useCommonMethod->checkLogin();
$isAdmin = $useCommonMethod->checkAdmin();
$identity = false;

## 分頁實作
## 取得主資料有幾筆
$allBookCount = $useBookTable->allBookCount();
($allBookCount % 8 == 0) ? ($pageCount = $allBookCount / 8) : ($pageCount = $allBookCount / 8 + 1);
$pageCount = intval($pageCount);

if ($isLogin === true) {
    if ($isAdmin === true) {
        $identity = "admin";
    } else {
        ## 顯示左上角ID
        $memberData = $useMemberTable->getAll($_COOKIE['token']);
        $account = $memberData['account'];
        $identity = "member";
        $cartListArray = $useCartTable->getCartBookId($memberData['userId']);
        ## 這邊拆解查詢物件重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
        $newBookArrays = [];
        foreach ($bookArrays as $newBookArray) {
            $newBookArray['isAddCart'] = (in_array($newBookArray['bookId'], $cartListArray)) ? true : false;
            array_push($newBookArrays, $newBookArray); 
        }
        $bookArrays = $newBookArrays;
        $smarty->assign('account', $account);
    }
}

$smarty->assign('nowPage', $nowPage);
$smarty->assign('pageCount', $pageCount);
$smarty->assign('newBookArrays', $bookArrays);
if ($identity === false) {
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/header.html");
} elseif ($identity === "member") {
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/userIndexHeader.html");
} elseif ($identity === "admin") {
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/adminIndexHeader.html"); 
}
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
