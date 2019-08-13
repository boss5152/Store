<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();
$useOrderBookTable = new OrderBook();
$useCommonMethod = new CommonMethod();
$useCartTable = new Cart();

$isLogin = $useCommonMethod->checkLogin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isLogin === true) {
        $total = "";
        $tips = "";
        $isUpdate = false;
        $token = $_COOKIE['token'];
        $memberData = $useMemberTable->getAll($token);
        $userId = $memberData['userId'];
        $bookId = $_POST['bookId'];
        $count = $_POST['count'];
        $bookTotalPrice = $_POST['bookTotalPrice'];
        $array = [
            'userId' => $userId,
            'bookId' => $bookId,
            'count' => $count,
            'bookTotalPrice' => $bookTotalPrice
        ];
        $checkUpdate = $useCartTable->update($array);
        if ($checkUpdate === true) {
            $allTotalPrice = $useCartTable->getCartAllTotal($memberData['userId']);
            $isUpdate = true;
            $total = $allTotalPrice['sum(bookTotalPrice)'];
        } else {
            $tips = "更新失敗，請重新操作";
        }
    } else {
        $tips = "登入逾時，請重新登入";
    }
    echo json_encode(array(
        'isUpdate' => $isUpdate,
        'total' => $total,
        'tips' => $tips
    ));

}
