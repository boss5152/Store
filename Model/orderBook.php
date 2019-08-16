<?php

require_once("ConnectDb.php");

class OrderBook extends ConnectDb
{
    private $resultArray = [];
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
        // echo $sql;
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false ;
    }

    /*
     * 結單
     */ 
    public function complete($orderId)
    {
        $sql = "UPDATE OrderBook set orderStatus = '已出貨' WHERE orderId = $orderId";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 註銷
     */ 
    public function logout($orderId)
    {
        $sql = "UPDATE OrderBook set orderStatus = '已註銷' WHERE orderId = $orderId";
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
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }     
        return $this->resultArray;
    }

    /**
     * 關鍵字搜尋到的使用者訂單總比數
     */
    public function searchUserOrderCount($userAccount, $keyword){
        $sql = "SELECT * FROM orderBook WHERE userAccount = '" . $userAccount . "' AND bookName LIKE '%$keyword%'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return $row_result;
    }

    /**
     * 搜尋後每頁固定顯示count筆使用者訂單
     */
    public function searchUserOrderLimit($keyword, $userAccount, $page, $count){
        $sql = "SELECT * FROM orderBook WHERE userAccount = '" . $userAccount . "' AND bookName LIKE '%$keyword%' ORDER BY orderId DESC LIMIT $page, $count";
        $result = $this->executeSql($sql);
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }     
        return $this->resultArray;
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
     * 關鍵字搜尋查到的總比數
     */
    public function searchAllOrderCount($keyword){
        $sql = "SELECT * FROM orderBook WHERE userAccount LIKE '%$keyword%'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return $row_result;
    }

    /**
     * 搜尋後每頁固定顯示count筆
     */
    public function searchOrderLimit($keyword, $page, $count){
        $sql = "SELECT * FROM orderBook WHERE userAccount LIKE '%$keyword%' ORDER BY orderId DESC LIMIT $page, $count";
        $result = $this->executeSql($sql);
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }     
        return $this->resultArray;
    }

    /**
     * 取得資料總筆數
     */
    public function allOrderCount(){
        $sql = "SELECT * FROM orderBook";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return $row_result;
    }

    /**
     * 取幾筆資料
     */
    public function showOrderLimit($page, $count){
        $sql = "SELECT * FROM orderBook Limit $page, $count";
        $result = $this->executeSql($sql);
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }     
        return $this->resultArray;
    }

    /**
     * 檢查分頁有無資料
     */
    public function checkPage($page, $count)
    {
        $sql = "SELECT orderId FROM orderBook LIMIT $page, $count";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 0) ? false : true;
    }
}
