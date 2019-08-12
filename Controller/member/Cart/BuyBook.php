<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();
$useOrderBookTable = new OrderBook();
$useCartTable = new Cart();
$useCommonMethod = new CommonMethod();

$isLogin = $useCommonMethod->checkLogin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isLogin === true) {
        $token = $_COOKIE['token'];
        $tips = "";
        $isBuy = false;
        ## 取資料用於存入userId
        $memberData = $useMemberTable->getAll($token);
        ## 抓購物車
        $userCartArrays = $useCartTable->getCartList($memberData['userId']);
        ## 把訂單利用迴圈方式一筆筆存入資料庫
        foreach ($userCartArrays as $userCartArray) {
            if ($userCartArray['bookCount'] == 0 ){
                continue;
            }
            $bookId = $userCartArray['bookId'];
            $bookData = $useBookTable->getAll($bookId);
            $buyCount = $userCartArray['bookCount'];
            $bookTotalPrice = $userCartArray['bookTotalPrice'];
            ## 存入訂單資料庫
            $arrayBuyBook = [
                'userAccount' => $memberData['account'],
                'bookName' => $bookData['bookName'],
                'bookPrice' => $bookData['bookPrice'],
                'buyCount' => $buyCount,
                'totalPrice' => $bookTotalPrice                
            ];
            $checkBuyBook = $useOrderBookTable->insert($arrayBuyBook);
            if ($checkBuyBook === true) {
                $tips = "購買成功 ! ";
                // $isBuy = true;
                ## 扣除庫存
                $newInStock = $bookData['bookInStock'] - $buyCount;
                $arraySubInStock = [
                    'bookId' => $bookId,
                    'bookInStock' => $newInStock
                ];
                $checkUpdate = $useBookTable->updateInStock($arraySubInStock);
                if ($checkUpdate === true) {
                    ## 重製訂單筆數
                    $checkInit = $useCartTable->initCart($bookId);
                    if ($checkInit === true) {
                        $isBuy = true;
                    } else {
                        $tips = "訂單重製失敗";
                    }
                } else {
                    $tips = "庫存扣除失敗";
                }
            } else {
                $tips = "購買失敗，請重新操作";
            }
        }
        ## 回傳
        echo json_encode(array(
            'isBuy' => $isBuy,
            'tips' => $tips
        ));
    }
}

