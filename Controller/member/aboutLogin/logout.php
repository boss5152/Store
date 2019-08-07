<?php

require_once('../toolBox/commonMethod.php');

$useMemberTable = new Member();
$token = $_COOKIE['token'];
$useMemberTable->logout($token);

setcookie("token", "", time()-3600, "/");

header("Location: ../index/index.php?");
