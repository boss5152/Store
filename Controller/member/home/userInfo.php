<?php

require_once('../toolBox/commonMethod.php');

$useMemberTable = new Member();
$useBookTable = new Book();

## 驗證登入
if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];
    $checkToken = $useMemberTable->checkToken($token);
    if ($checkToken === true) {
        ##取資料用於顯示meun暱稱
        $memberData = $useMemberTable->getAll($token);
    }
}
if (isset($memberData)) {
    ## 顯示左上角暱稱
    $smarty->assign('account', $memberData['account']);
}

## 獲得所有書單
$bookObj = $useBookTable->showAll();

$smarty->assign('bookObj', $bookObj);
$smarty->assign('memberData', $memberData);
$smarty->display("../templates/home/header.html");
$smarty->display("../templates/home/userInfo.html");