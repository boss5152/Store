<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$tips = '';
## 顯示
$token = $_COOKIE['token'];
$adminData = $useMemberTable->getAll($token);

$smarty->assign("adminData", $adminData);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/adminHeader.html"); 
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/aboutLogin/showEditAdminInfo.html"); 
