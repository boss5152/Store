<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$tips = "";
$isEdit = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "admin") {
        if ((!empty($_POST["password"])) && 
            (!empty($_POST["oldPassword"]))) {
            $password = $_POST["password"];
            $oldPassword = $_POST["oldPassword"];
            $password = md5($password);
            $oldPassword = md5($oldPassword);
            ## 檢查舊密碼是否正確
            $token = $_COOKIE['token'];
            $checkOldPassword = $useCommonMethod->useMemberTable->checkOldPassword($oldPassword, $token);
            if ($checkOldPassword === true) {
                $array_UserData = [
                    'password' => $password
                ];
                $editUserInfo = $useCommonMethod->useMemberTable->editUserInfo($array_UserData, $token);
                if ($editUserInfo === false) {
                    $tips = "修改失敗，請重新操作一次";
                } else {
                    $tips = "修改成功";
                    $isEdit = true;
                }
            } else {
                $tips = "舊密碼錯誤";
            }
        }
    } else {
        $tips = "登入逾時，請重新登入";
    }
    echo json_encode(array(
        'isEdit' => $isEdit,
        'tips' => $tips,
        'isLogin' => $useCommonMethod->check['isLogin']
    ));
}
