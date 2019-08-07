<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tips = '';
    ## 顯示
    $token = $_COOKIE['token'];
    $memberData = $useMemberTable->getAll($token);

    $smarty->assign("memberData", $memberData);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/home/showEditUserInfo.html"); 
}
