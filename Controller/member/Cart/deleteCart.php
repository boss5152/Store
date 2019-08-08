<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCartTable = new Cart();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $bookId = $_POST["bookId"];
    $checkDelete = $useCartTable->delete($bookId);
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