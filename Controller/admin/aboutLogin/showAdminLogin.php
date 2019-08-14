<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$smarty->assign('account', $useCommonMethod->account);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/header.html"); 
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/aboutLogin/adminLogin.html"); 
