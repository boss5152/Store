<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useMemberTable = new Member();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    ## 初始化回傳值
    $tips = "";
    $isAdminLogin = false;
    if ((!empty($_POST["account"])) && 
        (!empty($_POST["password"]))) {
             ## 檢查是否有特殊字元
            if (preg_match("/^([0-9A-Za-z]+)$/", $_POST["account"]) && 
            preg_match("/^([0-9A-Za-z]+)$/", $_POST["password"])) {
                $account = $_POST["account"];
                $password = $_POST["password"];
                $password = md5($password);
                $array_adminLoginData = [
                    'account' => $account,
                    'password' => $password
                ];
                $checkAdminLogin = $useMemberTable->adminLogin($array_adminLoginData);
                ## 錯誤會回傳0
                if ($checkAdminLogin === false) {
                    $tips = "帳號密碼錯誤";
                } else {
                    ## 設置簡單token判斷是否登入
                    $token = rand(1,100000);
                    ## 將token存入資料庫
                    $useMemberTable->saveToken($token, $array_adminLoginData);
                    $tips = "登入成功";
                    $isAdminLogin = true;
                    setcookie("token", $token, time()+36000, "/");
                }
            }
    } else {
        $tips = "帳號密碼不得為空";
    }
}

## 最後回傳請求
echo json_encode(array(
    'isAdminLogin' => $isAdminLogin,
    'tips' => $tips
));
