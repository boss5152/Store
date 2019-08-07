<?php

require_once('../toolBox/commonMethod.php');

$useMemberTable = new Member();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    ## 初始化回傳值
    $tips = "";
    $isLogin = false;
    if ((!empty($_POST["account"])) && 
        (!empty($_POST["password"])) && 
        (!empty($_POST["email"]))) {
        $account = $_POST["account"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $password = md5($password);
        ## 列入帳號密碼
        $array_loginData = [
            'account' => $account,
            'password' => $password,
            'email' => $email
        ];
        $checkLogin = $useMemberTable->login($array_loginData);
        ## 錯誤會回傳0
        if ($checkLogin === false) {
            $tips = "帳號密碼或信箱錯誤";
        } else {
            ## 設置簡單token判斷是否登入
            $token = rand(1,100000);
            ## 將token存入資料庫
            $useMemberTable->saveToken($token, $array_loginData);
            $tips = "登入成功";
            $isLogin = true;
            ## 儲存cookie，保存1小時
            setcookie("token", $token, time()+3600, "/");
        }
    } else {
        $tips = "帳號密碼不得為空";
    }
}

## 最後回傳請求
echo json_encode(array(
    'isLogin' => $isLogin,
    'tips' => $tips
));
