<?php

require_once("connectDb.php");

class Member extends ConnectDb
{
    /*
     * 註冊
     */
    public function register($array)
    {
        $field = '';
        $value = '';
        foreach ($array as $key => $v) {
            //key
            $field .= $key . ",";
            //value
            $value .= "'" . $v . "',";
        }
        //-1表示去掉最後一個','
        $field = substr($field, 0, -1);
        $value = substr($value, 0, -1);
        //執行
        $sql = "INSERT INTO member ($field) VALUES ($value)";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 檢查申請的密碼有無重複
     */
    public function checkPassword($password)
    {
        $sql = "SELECT userId FROM member WHERE password = '" . $password . "'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false;
    }

    /*
     * 檢查申請的信箱有無重複
     */
    public function checkEmail($email)
    {
        $sql = "SELECT userId FROM member WHERE email = '" . $email . "'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false;
    }

    /*
     * 檢查修改的信箱有無重複
     */
    public function checkEditEmail($email, $token)
    {
        $sql = "SELECT userId FROM member WHERE email = '" . $email . "' AND token NOT IN (" . $token . ")";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 0) ? true : false;
    }

    /*
     * 檢查token是否合法
     */
    public function checkToken($token)
    {
        $sql = "SELECT userId FROM member WHERE token = " . $token;
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false;
    }

    /*
     * 檢查舊密碼是否正確
     */
    public function checkOldPassword($oldPassword, $token)
    {
        $sql = "SELECT userId FROM member WHERE password = '" . $oldPassword . "' AND token = " . $token;
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 1) ? true : false;
    }

    /*
     * 取資料
     */
    public function getAll($token){
        $sql = "SELECT * FROM member WHERE token = " . $token;
        $result = $this->executeSql($sql);
        $row_result = mysqli_fetch_assoc($result);
        return $row_result;
    }
    
    /*
     * 登入
     */
    public function login($array){
        $check = '';
        foreach ($array as $key => $value) {
            $check .= $key . "='" . $value . "' AND ";
        }
        $check = substr($check, 0, -5);
        $sql = "SELECT userId FROM member WHERE $check";
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
        $sql = "SELECT userId FROM member WHERE $check";
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
        $sql = "UPDATE member set token = $token WHERE $update";
        $result = $this->executeSql($sql);
        return $result;
    }

    /**
     * 登出
     */
    public function logout($token){
        $sql = "UPDATE member set token = 0 WHERE token = $token";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 修改使用者資訊
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
        $sql = "UPDATE member set $update WHERE token = " . $token;
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }
}
