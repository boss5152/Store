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
        return $result;
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
     * 新書上榜 
     */
    public function getLimit($count)
    {
        $sql = "SELECT * FROM Book ORDER BY releaseDate LIMIT 0,$count";
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

}
