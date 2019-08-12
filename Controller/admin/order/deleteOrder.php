<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useOrderTable = new OrderBook();
$useCommonMethod = new CommonMethod();

$isAdmin = $useCommonMethod->checkAdmin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isAdmin === true) {
        $orderId = $_POST["orderId"];
        $checkDelete = $useOrderTable->delete($orderId);
        if ($checkDelete === true) {
            $tips = "刪除成功";
            echo json_encode(array(
                'isDelete' => true,
                'tips' => $tips
            ));
        } else {
            $tips = "刪除失敗";
            echo json_encode(array(
                'isDelete' => false,
                'tips' => $tips
            ));
        }
    }
}
