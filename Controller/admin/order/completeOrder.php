<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useOrderTable = new OrderBook();
$useCommonMethod = new CommonMethod();

$isAdmin = $useCommonMethod->checkAdmin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isAdmin === true) {
        $orderId = $_POST["orderId"];
        $checkComplete = $useOrderTable->complete($orderId);
        if ($checkComplete === true) {
            $tips = "成功結單";
            echo json_encode(array(
                'isComplete' => true,
                'tips' => $tips
            ));
        } else {
            $tips = "結單失敗";
            echo json_encode(array(
                'isComplete' => false,
                'tips' => $tips
            ));
        }
    }
}