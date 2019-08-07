<?php

require_once('C:/xampp/htdocs/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();
$useOrderBookTable = new OrderBook();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    ## 驗證登入
    if (isset($_COOKIE['token'])) {
        $token = $_COOKIE['token'];
        $checkToken = $useMemberTable->checkToken($token);
        if ($checkToken === true) {
            ## 取資料用於存入userId
            $memberData = $useMemberTable->getAll($token);
            ## 接bookId
            $bookId = $_POST['bookId'];
            $bookData = $useBookTable->getAll($bookId);
            ## 拿購買筆數
            $buyCount = $_POST['buyCount'];
            ## 計算總價格
            $totalPrice = $bookData['bookPrice'] * $buyCount;
            ## 存入訂單資料庫
            $arrayBuyBook = [
                'userId' => $memberData['userId'],
                'bookName' => $bookData['bookName'],
                'bookPrice' => $bookData['bookPrice'],
                'buyCount' => $buyCount,
                'totalPrice' => $totalPrice                
            ];
            $checkBuyBook = $useOrderBookTable->insert($arrayBuyBook);
            if ($checkBuyBook === true) {
                $tips = "購買成功 ! ";
                $isBuy = true;
            } else {
                $tips = "購買失敗，請重新操作";
            }
        }
    }
    ## 回傳
    echo json_encode(array(
        'isBuy' => $isBuy,
        'tips' => $tips
    ));
}
