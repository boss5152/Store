<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $tips = "";
    $isRegister = false;
    ##檢查是否有空
    if ((!empty($_POST["account"])) && 
        (!empty($_POST["password"])) && 
        (!empty($_POST["email"]))) {
        ## 基礎檢查通過
        $account = $_POST["account"];
        $password = $_POST['password'];
        $email = $_POST['email'];
        ## 檢查是否有特殊字元
        if (preg_match("/^([0-9A-Za-z]+)$/", $account) && 
            preg_match("/^([0-9A-Za-z]+)$/", $password) && 
            preg_match("/([\w\_]+\@[\w\_]+\.[com]+)/", $email)) {
            ## 檢查長度
            if (strlen($email) > 25) {
                $tips .= "email長度不符。";
            } elseif (strlen($account) > 12 || strlen($account) < 2) {
                $tips .= "帳號長度不符。";
            } elseif (strlen($password) > 12 || strlen($password) < 2) {
                $tips .= "密碼長度不符。";
            } elseif ($tips === '') {
                ## 通過長度驗證，準備進行重複驗證
                ## 加密
                $password = md5($password);
                $registerArray = [
                    'account' => $account,
                    'password' => $password,
                    'email' => $email
                ];
                ## 檢查密碼有無重複
                $checkPassword = $useMemberTable->checkPassword($password);
                if ($checkPassword === true) {
                    $tips .= "此密碼已有人使用。";
                }
                ## 檢查email有無重複
                $checkEmail = $useMemberTable->checkEmail($email);
                if ($checkEmail === true) {
                    $tips .= "此郵箱已被註冊過。";
                }
                ##檢查完畢
                if ($tips === "") {
                    $isRegister = $useMemberTable->register($registerArray);
                    if ($isRegister === true) {
                        $tips = "註冊成功，請登入。";
                        $isRegister = true;
                    } else {
                        $tips = "註冊失敗，請重新操作一次。";
                    }
                }
            }
        } else {
            $tips .= "不得有特殊字元。";
        }
    } else {
        $tips .= "不得為空。" ;
    }
}

## 最後回傳請求
echo json_encode(array(
    'isRegister' => $isRegister,
    'tips' => $tips
));
