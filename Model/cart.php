<?php

require_once("ConnectDb.php");

class Cart extends ConnectDb
{
    //新增，會員一註冊完就給一台購物車
    public function insert($userId)
    {
        //執行
        $sql = "INSERT INTO Cart (userId) VALUES ($userId)";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false ;
    }

    // 加入，或單筆結帳都會用到
    public function update($cartList, $userId)
    {
        $sql = "UPDATE Cart set cartList = '" . $cartList . "' WHERE userId = $userId";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 獲得全部
     */
    public function showAll()
    {
        $sql = "SELECT * FROM Cart";
        $result = $this->executeSql($sql);
        return $result;
    }

    /*
     * 獲得全部
     */
    public function getCartList($userId)
    {
        $sql = "SELECT cartList FROM Cart WHERE userId = '" . $userId . "'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_fetch_assoc($result);
        return $row_result;
    }

}
