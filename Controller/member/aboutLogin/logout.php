<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tips = "";
    $isLogout = false;
    $token = $_COOKIE['token'];
    $checkLogout = $useMemberTable->logout($token);
    if ($checkLogout === true) {
        setcookie("token", "", time()-36000, "/");
        $tips = "登出成功";
        $isLogout = true;
    } else {
        $tips = "登出失敗，請重新操作";
    }

    echo json_encode(array(
        'isLogout' => $isLogout,
        'tips' => $tips
    ));    

}
