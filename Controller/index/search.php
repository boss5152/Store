<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();
$useBookTable = new Book();
$useMemberTable = new Member();
$useCommonMethod = new CommonMethod();

## 接收分頁碼並判斷
(isset($_POST['page'])) ? ($page = ($_POST['page'] - 1) * 8) : ($page = 0);
## 分頁籤讓他亮
(isset($_POST['page'])) ? ($nowPage = $_POST['page']) : ($nowPage = 1);

$keyword = $_POST["keyword"];
$search8Count = $useBookTable->searchBookNameLimitCount($keyword, $page);
$isLogin = $useCommonMethod->checkLogin();
$isAdmin = $useCommonMethod->checkAdmin();

## 搜尋結果的分頁
## 取得搜尋資料有幾筆
$searchAllCount = $useBookTable->searchAllBookNameCount($keyword);
($searchAllCount % 8 == 0) ? ($pageCount = $searchAllCount / 8) : ($pageCount = $searchAllCount / 8 + 1);
$pageCount = intval($pageCount);

if ($isLogin === true && $isAdmin === false) {
    $memberData = $useMemberTable->getAll($_COOKIE['token']);
    $cartListArray = $useCartTable->getCartBookId($memberData['userId']);
    ## 這邊拆解查詢物件重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
    $newBookArrays = [];
    foreach ($search8Count as $newBookArray) {
        $newBookArray['isAddCart'] = (in_array($newBookArray['bookId'], $cartListArray)) ? true : false;
        array_push($newBookArrays, $newBookArray); 
    }
    $search8Count = $newBookArrays;
}

$smarty->assign('nowPage', $nowPage);
$smarty->assign('pageCount', $pageCount);
$smarty->assign('newBookArrays', $search8Count);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
