<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/index/adminHeader.html');
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/admin/aboutLogin/adminLogin.html"); 
