<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$isComplete = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "admin") {
        $orderId = $_POST["orderId"];
        $checkComplete = $useCommonMethod->useOrderTable->complete($orderId);
        if ($checkComplete === true) {
            $tips = "成功結單";
            $isComplete = true;
        } else {
            $tips = "結單失敗";
        }
    }
    echo json_encode(array(
        'isComplete' => $isComplete,
        'tips' => $tips,
        'isLogin' => $useCommonMethod->check['isLogin']
    ));
}