<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();
$useCommonMethod = new CommonMethod();

$isLogin = $useCommonMethod->checkLogin();

$tips = "";
$isDelete = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isLogin === true) {
        $bookId = $_POST["bookId"];
        $checkDelete = $useCartTable->delete($bookId);
        if ($checkDelete === true) {
            $tips = "刪除成功";
            $isDelete = true;
        } else {
            $tips = "刪除失敗";
        }
    } else {
        $tips = "登入逾時，請重新登入";
    }
    echo json_encode(array(
        'isDelete' => $isDelete,
        'tips' => $tips
    ));
}
