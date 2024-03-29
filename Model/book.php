<?php

require_once("ConnectDb.php");

class Book extends ConnectDb
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
            //key
            $field .= "" . $key . ",";
            //value
            $value .= "'" . $v . "',";
        }
        //-1表示去掉最後一個','
        $field = substr($field, 0, -1);
        $value = substr($value, 0, -1);
        //執行
        $sql = "INSERT INTO Book ($field) VALUES ($value)";
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
        //-1表示去掉最後一個','
        $update = substr($update, 0, -1);
        //執行
        $sql = "UPDATE Book set $update WHERE bookId = $bookId";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 刪除
     */
    public function delete($bookId)
    {
        $sql = "DELETE FROM Book WHERE bookId = $bookId";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /*
     * 展示全Table
     */
    public function showAll()
    {
        $sql = "SELECT * FROM book";
        $result = $this->executeSql($sql);
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }     
        return $this->resultArray;
    }

    /*
     * 獲得一個欄位的全部值
     */
    public function getAll($bookId)
    {
        $sql = "SELECT * FROM book WHERE bookId = '" . $bookId . "'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_fetch_assoc($result);
        return $row_result;
    }

    /*
     * 抓庫存
     */
    public function getInStock($array)
    {
        $sql = "SELECT bookInStock FROM book WHERE bookId = '" . $bookId . "'";
        $result = $this->executeSql($sql);
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }
        return $this->resultArray;
    }

    /*
     * 顯示購物車所有書單
     */
    public function showUserCartList($array)
    {
        $select = '';
        foreach($array as $value){
            $select .= "bookid = '" . $value . "' OR ";
        }
        ## 去掉最後的OR與兩邊空白
        $select = substr($select, 0, -4);
        $sql = "SELECT * FROM book WHERE $select";
        $result = $this->executeSql($sql);
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }
        return $this->resultArray;
    }

    /**
     * 購買書本後更新庫存
     */
    public function updateInStock($array)
    {
        $sql = "UPDATE Book set bookInStock = '" . $array['bookInStock'] . "' WHERE bookId = '" . $array['bookId'] . "'";
        $result = $this->executeSql($sql);
        return ($result === true) ? true : false;
    }

    /**
     * 關鍵字搜尋查到的總比數
     */
    public function searchAllBookNameCount($keyword){
        $sql = "SELECT * FROM Book WHERE bookName LIKE '%$keyword%'";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return $row_result;
    }

    /**
     * 搜尋後每頁固定顯示八筆
     */
    public function searchBookNameLimit($keyword, $page, $count){
        $sql = "SELECT * FROM Book WHERE bookName LIKE '%$keyword%' ORDER BY bookId DESC LIMIT $page, $count";
        $result = $this->executeSql($sql);
        foreach ($result as $key => $value) {
            array_push($this->resultArray, $value);
        }     
        return $this->resultArray;
    }

    /**
     * 取得資料總筆數
     */
    public function allBookCount(){
        $sql = "SELECT * FROM Book";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return $row_result;
    }

    /**
     * 取幾筆資料
     */
    public function showBookLimit($page, $count){
        $sql = "SELECT * FROM Book Limit $page, $count";
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
        $sql = "SELECT bookId FROM Book LIMIT $page, $count";
        $result = $this->executeSql($sql);
        $row_result = mysqli_num_rows($result);
        return ($row_result === 0) ? false : true;
    }

}
