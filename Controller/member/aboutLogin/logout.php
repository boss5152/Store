<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();
$token = $_COOKIE['token'];
$useMemberTable->logout($token);

setcookie("token", "", time()-3600, "/");

header($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/index/index.php?");
