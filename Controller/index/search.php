<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();
$useBookTable = new Book();
$useMemberTable = new Member();
$useCommonMethod = new CommonMethod();

$keyword = $_POST["keyword"];
$searchArrays = $useBookTable->searchBookName($keyword);
$isLogin = $useCommonMethod->checkLogin();
$isAdmin = $useCommonMethod->checkAdmin();

if ($isLogin === true && $isAdmin === false) {
    $memberData = $useMemberTable->getAll($_COOKIE['token']);
    $cartListArray = $useCartTable->getCartBookId($memberData['userId']);
    ## 這邊拆解查詢物件重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
    $newBookArrays = [];
    foreach ($searchArrays as $newBookArray) {
        $newBookArray['isAddCart'] = (in_array($newBookArray['bookId'], $cartListArray)) ? true : false;
        array_push($newBookArrays, $newBookArray); 
    }
    $searchArrays = $newBookArrays;
}

$smarty->assign('newBookArrays', $searchArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/index/index.html"); 
