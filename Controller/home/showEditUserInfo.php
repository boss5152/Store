<?php

require_once('../toolBox/commonMethod.php');

$useMemberTable = new Member();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tips = '';
    ## 顯示
    $token = $_COOKIE['token'];
    $memberData = $useMemberTable->getAll($token);

    $smarty->assign("memberData", $memberData);
    $smarty->display("../templates/home/showEditUserInfo.html"); 
}
