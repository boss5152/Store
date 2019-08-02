<?php

require_once("connectDb.php");

class Admin extends ConnectDb
{
    /*
     * 檢查token是否合法
     */
    public function checkToken($token)
    {
        $sql = "SELECT adminId FROM admin WHERE token = " . $token;
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false;
    }

    /*
     * 檢查管理者金鑰是否合法
     */
    public function checkAdminKey($adminKey)
    {
        $sql = "SELECT adminId FROM admin WHERE adminKey = '" . $adminKey . "'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false;
    }

    /*
     * 取資料
     * 用於顯示於html讓使用者知道自己名稱
     * 用於登入時給資料讓token存進對應user
     */
    public function getAll($token){
        $sql = "SELECT * FROM admin WHERE token = " . $token;
        $result = $this->executeSql($sql);
        $row_result = mysqli_fetch_assoc($result);
        return $row_result;
    }
    
    /*
     * 登入
     */
    public function adminLogin($array){
        $check = '';
        foreach ($array as $key => $value) {
            $check .= $key . "='" . $value . "' AND ";
        }
        $check = substr($check, 0, -5);
        $sql = "SELECT adminId FROM admin WHERE $check";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false ;
    }

    /*
     * 泛用檢查，可以藉由格式檢查任意東西
     */
    public function checkAny($array){
        $check = '';
        foreach ($array as $key => $value) {
            $check .= $key . "='" . $value . "' AND ";
        }
        $check = substr($check, 0, -5);
        $sql = "SELECT adminId FROM admin WHERE $check";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false ;
    }

    /*
     * 存token
     */
    public function saveToken($token, $array)
    {
        $update = '';
        foreach($array as $key => $value){
            $update .= $key . "='" . $value . "' AND ";
        }
        $update = substr($update, 0, -5);
        //執行
        $sql = "UPDATE admin set token = $token WHERE $update";
        $result = $this->executeSql($sql);
        return $result;
    }

    /**
     * 登出
     */
    public function logout($token){
        $sql = "UPDATE admin set token = 0 WHERE token = $token";
        $result = $this->executeSql($sql);
        return $result;
    }

    /*
     * 修改管理者資訊
     */
    public function editUserInfo($array, $token)
    {
        $update = '';
        foreach($array as $key => $value){
            $update .= $key . "='" . $value . "',";
        }
        //-1表示去掉最後一個','
        $update = substr($update, 0, -1);
        //執行
        $sql = "UPDATE admin set $update WHERE token = " . $token;
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 檢查舊密碼是否正確
     */
    public function checkOldPassword($oldPassword, $token)
    {
        $sql = "SELECT adminId FROM admin WHERE password = '" . $oldPassword . "' AND token = " . $token;
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false;
    }
}
