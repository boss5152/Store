<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useAdminTable = new Admin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tips = '';
    ## 顯示
    $token = $_COOKIE['token'];
    $adminData = $useAdminTable->getAll($token);

    $smarty->assign("adminData", $adminData);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/home/showEditAdminInfo.html"); 
}
