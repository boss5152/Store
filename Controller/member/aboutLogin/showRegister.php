<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');
$useCommonMethod = new CommonMethod();

$smarty->assign('account', $useCommonMethod->account);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/loginHeader.html"); 
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/aboutLogin/register.html"); 
