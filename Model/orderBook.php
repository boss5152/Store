<?php

require_once("ConnectDb.php");

class OrderBook extends ConnectDb
{
    /*
     * 新增
     */ 
    public function insert($array)
    {
        $field = '';
        $value = '';
        foreach($array as $key => $v){
            ## key
            $field .= "" . $key . ",";
            ## value
            $value .= "'" . $v . "',";
        }
        ## -1表示去掉最後一個','
        $field = substr($field, 0, -1);
        $value = substr($value, 0, -1);
        ## 執行
        $sql = "INSERT INTO OrderBook ($field) VALUES ($value)";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false ;
    }

    /*
     * 修改
     */ 
    public function update($array, $bookId)
    {
        $update = '';
        foreach($array as $key => $value){
            $update .= $key . "='" . $value . "',";
        }
        ## -1表示去掉最後一個','
        $update = substr($update, 0, -1);
        ## 執行
        $sql = "UPDATE OrderBook set $update WHERE bookId = $bookId";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 刪除
     */ 
    public function delete($bookId)
    {
        $sql = "DELETE FROM OrderBook WHERE bookId = $bookId";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 獲得全部
     */
    public function showAll()
    {
        $sql = "SELECT * FROM OrderBook";
        $result = $this->executeSql($sql);
        return $result;
    }

    /*
     * 獲得全部
     */
    public function getAll($bookId)
    {
        $sql = "SELECT * FROM OrderBook WHERE bookId = '" . $bookId . "'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_fetch_assoc($result);
        return $row_result;
    }

    /**
     * 顯示購物車所有書單
     */
    public function showCartList($array)
    {
        $select = '';
        foreach($array as $value){
            $select .= "bookid = '" . $value . "' OR ";
        }
        ## 去掉最後的OR與兩邊空白
        $select = substr($select, 0, -4);
        $sql = "SELECT * FROM OrderBook WHERE $select";
        $result = $this->executeSql($sql);
        return $result;
    }

}
