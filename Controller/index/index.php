<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

// $useMemberTable = new Member();
$useBookTable = new Book();
$useCartTable = new Cart();
$useCommonMethod = new CommonMethod();

## 新書上榜部分
$newBookObj = $useBookTable->getLimit(4);
$smarty->assign('newBookArrays', $newBookObj);

## 驗證登入
$isLogin = $useCommonMethod->checkLogin();
echo $isLogin;

if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];
    $checkToken = $useMemberTable->checkToken($token);
    if ($checkToken === true) {
        ## 取資料用於顯示meun暱稱
        $memberData = $useMemberTable->getAll($token);
        ## 取購物車資料表判斷
        $cartData = $useCartTable->getCartList($memberData['userId']);
        ## 將購物清單取出
        $cartList = $cartData['cartList'];
        ## 支解成陣列，再丟給前端做比對
        $cartListArray = explode(",", $cartList);       
        ## 這邊拆解查詢物件重組成一個二維陣列，並在其中裝上一個bool值來給前端button判斷給不給按
        $newBookArrays = [];
        foreach ($newBookObj as $key => $newBookArray) {
            foreach ($cartListArray as $cartSingle) {
                if ($newBookArray['bookId'] === $cartSingle) {
                    $newBookArray['isAddCart'] = true;
                    break;
                } else {
                    $newBookArray['isAddCart'] = false ;
                } 
            }
            array_push($newBookArrays, $newBookArray); 
        }
        ## smarty
        $smarty->assign('newBookArrays', $newBookArrays);
    }
} else {
}

## 顯示左上角ID
if (isset($memberData)) {
    $smarty->assign('account', $memberData['account']);
}
$smarty->display("../View/index/header.html"); 
$smarty->display("../View/index/index.html"); 
