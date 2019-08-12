<?php

require_once("ConnectDb.php");

class Cart extends ConnectDb
{
    private $resultArray = [];
    /*
     * 新增
     */
    public function insert($array)
    {
        $fieldName = '';
        $fieldValue = '';
        foreach($array as $key => $value){
            $fieldName .= "" . $key . ",";
            $fieldValue .= "'" . $value . "',";
        }
        $fieldName = substr($fieldName, 0, -1);
        $fieldValue = substr($fieldValue, 0, -1);
        //執行
        $sql = "INSERT INTO Cart ($fieldName) VALUES ($fieldValue)";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false ;
    }

    /*
     * 更新
     */
    public function update($array)
    {
        $sql = "UPDATE Cart set bookCount = '" . $array['count'] . "', bookTotalPrice = '" . $array['bookTotalPrice'] . "' WHERE userId = '" . $array['userId'] . "' AND bookId = '" . $array['bookId'] . "'";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 刪除 
     */
    public function delete($bookId)
    {
        $sql = "DELETE FROM Cart WHERE bookId = $bookId";
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
    public function getCartBookId($userId)
    {
        $sql = "SELECT bookId FROM Cart WHERE userId = '" . $userId . "'";
        $result = $this->executeSql($sql);
        $resultDoubleArray = mysqli_fetch_all($result);
        ## 把二維拆一維，然後重組成一個key=>bookId的一維陣列
        foreach ($resultDoubleArray as $resultSingleArray) {
            foreach ($resultSingleArray as $value) {
                array_push($this->resultArray, $value);
            }
        }
        return $this->resultArray;
    }

    /*
     * 獲得全部
     */
    public function getCartList($userId)
    {
        $sql = "SELECT * FROM cart LEFT JOIN book on cart.bookId = book.bookId WHERE cart.userId = '" . $userId . "'";
        $result = $this->executeSql($sql);
        return $result;
    }

    /**
     * 計算總價
     */
    public function getCartAllTotal($userId)
    {
        $sql = "SELECT sum(bookTotalPrice) FROM cart LEFT JOIN book on cart.bookId = book.bookId WHERE cart.userId = '" . $userId . "'";
        $result = $this->executeSql($sql);
        $resultArray = mysqli_fetch_array($result);
        return $resultArray;
    }

    /**
     * 重製訂單比數
     */
    public function initCart($bookId){
        $sql = "Update cart set bookCount = '0', bookTotalPrice = '0' WHERE bookId = '" . $bookId . "'" ;
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }
}

