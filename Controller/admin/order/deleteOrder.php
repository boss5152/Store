<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$isDelete = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "admin") {
        $orderId = $_POST["orderId"];
        $checkDelete = $useCommonMethod->useOrderTable->delete($orderId);
        if ($checkDelete === true) {
            $tips = "刪除成功";
            $isDelete = true;
        } else {
            $tips = "刪除失敗，請重新操作";
        }
    }
    echo json_encode(array(
        'isDelete' => false,
        'tips' => $tips,
        'isLogin' => $useCommonMethod->check['isLogin']
    ));
}
