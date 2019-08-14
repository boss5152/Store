<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$tips = "";
$isAdd = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "member") {
        $bookId = $_POST['bookId'];
        $memberData = $useCommonMethod->useMemberTable->getAll($_COOKIE['token']);
        $userId = $memberData['userId'];
        $cartBookIdArray = $useCommonMethod->useCartTable->getCartBookId($userId);
        ## 取書本價格用
        $bookData = $useCommonMethod->useBookTable->getAll($bookId);
        $tips = in_array($bookId, $cartBookIdArray) ? ("這本書已在購物車裡") : ("");
        ## 沒重複，加入資料庫
        if ($tips === "") {
            $addCartArray = [
                'userId' => $userId,
                'bookId' => $bookId
            ];
            $isAddCart = $useCommonMethod->useCartTable->insert($addCartArray);
            if ($isAddCart === true) {
                $tips = "加入購物車成功";
                $isAdd = true;
            } else {
                $tips = "新增失敗，請重新操作";
            }
        }
    } else {
        $tips = "登入逾時，請重新登入";
    } 

    echo json_encode(array(
        'isAdd' => $isAdd,
        'tips' => $tips,
        'isLogin' => $useCommonMethod->check['isLogin']
    ));
}
