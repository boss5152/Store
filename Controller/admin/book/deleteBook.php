<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();
$useCommonMethod = new CommonMethod();

$isAdmin = $useCommonMethod->checkAdmin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isAdmin === true) {
        $bookId = $_POST["bookId"];
        $checkDelete = $useBookTable->delete($bookId);
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
