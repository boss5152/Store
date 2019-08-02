<?php

require_once('../toolBox/commonMethod.php');

$useMemberTable = new Member();

## 驗證登入
if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];
    $checkToken = $useMemberTable->checkToken($token);
    if ($checkToken === true) {
        ##取資料用於顯示meun暱稱
        $memberData = $useMemberTable->getAll($token);
    }
}

## 顯示左上角ID
if (isset($memberData)) {
    $smarty->assign('account', $memberData['account']);
}
$smarty->display("../templates/index/header.html"); 
$smarty->display("../templates/index/index.html"); 
