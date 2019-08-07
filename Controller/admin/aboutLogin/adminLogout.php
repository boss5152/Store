<?php

require_once('../toolBox/commonMethod.php');

$useAdminTable = new Admin();
$token = $_COOKIE['token'];
$useAdminTable->logout($token);

setcookie("token", "", time()-3600, "/");

header("Location: ../index/index.php?");
