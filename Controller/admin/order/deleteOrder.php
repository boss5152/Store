<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$isDelete = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "admin") {
        $orderId = $_POST["orderId"];
        $checkDelete = $useCommonMethod->useOrderBookTable->logout($orderId);
        if ($checkDelete === true) {
            $tips = "註銷成功";
            $isDelete = true;
        } else {
            $tips = "註銷失敗，請重新操作";
        }
    } else {
        $tips = "登入逾時，請重新登入";
    }
    echo json_encode(array(
        'isDelete' => $isDelete,
        'tips' => $tips,
        'isLogin' => $useCommonMethod->check['isLogin']
    ));
}
