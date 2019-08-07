<?php

require_once('../toolBox/commonMethod.php');

$useAdminTable = new Admin();

## 驗證登入
if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];
    $checkToken = $useAdminTable->checkToken($token);
    if ($checkToken === true) {
        ##取資料用於顯示meun暱稱
        $adminData = $useAdminTable->getAll($token);
    }
}
if (isset($adminData)) {
    ## 顯示左上角暱稱
    $smarty->assign('account', $adminData['account']);
}

$smarty->display("../../templates/admin/home/header.html");
$smarty->display("../../templates/admin/home/adminHome.html");