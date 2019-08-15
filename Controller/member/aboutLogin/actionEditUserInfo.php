<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

$tips = "";
$isEdit = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($useCommonMethod->identity === "member") {
        if ((!empty($_POST["password"])) && 
            (!empty($_POST["oldPassword"])) &&
            (!empty($_POST["email"]))) {
            $password = $_POST["password"];
            $email = $_POST["email"];
            $oldPassword = $_POST["oldPassword"];
            $password = md5($password);
            $oldPassword = md5($oldPassword);
            ## 檢查舊密碼是否正確
            $token = $_COOKIE['token'];
            $checkOldPassword = $useCommonMethod->useMemberTable->checkOldPassword($oldPassword, $token);
            if ($checkOldPassword === true) {
                ## 檢查Email有無重複
                $checkEditEmail = $useCommonMethod->useMemberTable->checkEditEmail($email, $token);
                if ($checkEditEmail === false) {
                    $tips = "此郵箱已有人註冊";
                } else {
                    ## 列入修改資訊
                    $array_UserData = [
                        'password' => $password,
                        'email' => $email
                    ];
                    $editUserInfo = $useCommonMethod->useMemberTable->editUserInfo($array_UserData, $token);
                    ## 錯誤會回傳0
                    if ($editUserInfo === false) {
                        $tips = "修改失敗，請重新操作一次";
                    } else {
                        $tips = "修改成功";
                        $isEdit = true;
                    }
                }
            } else {
                $tips = "舊密碼錯誤";
            }
        } else {
            $tips = "帳號密碼不得為空";
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
