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
            $isDelete = true;
        } else {
            $tips = "刪除失敗";
            $isDelete = false;
        }
    } else {
        $tips = "登入逾時，請重新登入";
    }
    echo json_encode(array(
        'isDelete' => $isDelete,
        'tips' => $tips
    ));
}
