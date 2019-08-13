<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();
$useBookTable = new Book();
$useMemberTable = new Member();
$useCommonMethod = new CommonMethod();

$isLogin = $useCommonMethod->checkLogin();
$tips = "";
$isAdd = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isLogin === true) {
        $bookId = $_POST['bookId'];
        $memberData = $useMemberTable->getAll($_COOKIE['token']);
        $userId = $memberData['userId'];
        $cartBookIdArray = $useCartTable->getCartBookId($userId);
        ## 取書本價格用
        $bookData = $useBookTable->getAll($bookId);
        $tips = in_array($bookId, $cartBookIdArray) ? ("這本書已在購物車裡") : ("");
        ## 沒重複，加入資料庫
        if ($tips === "") {
            $addCartArray = [
                'userId' => $userId,
                'bookId' => $bookId,
                'bookTotalPrice' => 0
            ];
            $isAddCart = $useCartTable->insert($addCartArray);
            if ($isAddCart === true) {
                $tips = "加入購物車成功";
                $isAdd = true;
            } else {
                $tips = "新增失敗，請重新操作";
            }
        }
    } else {
        $tips = "登入逾時，請重新登入";
    } 
    ## 最後回傳請求，這裡成功不在前端alert，只丟json給前端讓button變色
    ## 錯誤才跳訊息
    echo json_encode(array(
        'isAdd' => $isAdd,
        'tips' => $tips
    ));
}
