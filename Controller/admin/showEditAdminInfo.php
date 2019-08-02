<?php

require_once('../toolBox/commonMethod.php');

$useAdminTable = new Admin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tips = '';
    ## 顯示
    $token = $_COOKIE['token'];
    $adminData = $useAdminTable->getAll($token);

    $smarty->assign("adminData", $adminData);
    $smarty->display("../templates/admin/home/showEditAdminInfo.html"); 
}
