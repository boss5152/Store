<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity === "admin") {
    header("Location: /Store/Controller/index/index.php");
}

$adminData = $useCommonMethod->useMemberTable->getAll($useCommonMethod->check['token']);
$smarty->assign("adminData", $adminData);
$smarty->assign('account', $useCommonMethod->account);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/loginHeader.html"); 
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/aboutLogin/showEditAdminInfo.html"); 
