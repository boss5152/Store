<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$isComplete = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "admin") {
        $orderId = $_POST["orderId"];
        $checkComplete = $useCommonMethod->useOrderBookTable->complete($orderId);
        if ($checkComplete === true) {
            $tips = "成功出貨";
            $isComplete = true;
        } else {
            $tips = "出貨失敗";
        }
    } else {
        $tips = "登入逾時，請重新登入";
    }
    echo json_encode(array(
        'isComplete' => $isComplete,
        'tips' => $tips,
        'isLogin' => $useCommonMethod->check['isLogin']
    ));
}
