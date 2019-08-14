<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$bookIdArray = $_POST['bookIdArray'];
$bookCountArray = $_POST['bookCountArray'];
$tips = "";
$isBuy = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "member") {
        ## 取資料用於存入userId
        $memberData = $useCommonMethod->useMemberTable->getAll($useCommonMethod->check['token']);
        ## 抓購物車
        $userCartArrays = $useCommonMethod->useCartTable->getCartList($memberData['userId']);
        ## 把訂單利用迴圈方式一筆筆存入資料庫
        foreach ($bookIdArray as $key => $bookId) {
            if ($bookCountArray[$key] == 0 ){
                continue;
            }
            $bookData = $useCommonMethod->useBookTable->getAll($bookId);
            $buyCount = $bookCountArray[$key];
            $bookTotalPrice = $buyCount * $bookData['bookPrice'];
            ## 存入訂單資料庫
            $arrayBuyBook = [
                'userAccount' => $memberData['account'],
                'bookName' => $bookData['bookName'],
                'bookPrice' => $bookData['bookPrice'],
                'buyCount' => $buyCount,
                'totalPrice' => $bookTotalPrice                
            ];
            $checkBuyBook = $useCommonMethod->useOrderBookTable->insert($arrayBuyBook);
            if ($checkBuyBook === true) {
                $tips = "購買成功 ! ";
                ## 扣除庫存
                $newInStock = $bookData['bookInStock'] - $buyCount;
                $arraySubInStock = [
                    'bookId' => $bookId,
                    'bookInStock' => $newInStock
                ];
                $checkUpdate = $useCommonMethod->useBookTable->updateInStock($arraySubInStock);
                if ($checkUpdate === true) {
                    $isBuy = true;
                } else {
                    $tips = "庫存扣除失敗";
                }
            } else {
                $tips = "購買失敗，請重新操作";
            }
        }
    } else {
        $tips = "登入逾時，請重新登入";
    }
    echo json_encode(array(
        'isBuy' => $isBuy,
        'tips' => $tips,
        'isLogin' => $useCommonMethod->check['isLogin']
    ));
}

