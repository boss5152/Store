<?php

require_once("smarty.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Member.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Book.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Cart.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/OrderBook.php");

class CommonMethod
{
    public $check = [];
    public $account = "visitor";
    public $identity = "visitor";
    public $token;
    public function __construct()
    {
        $this->useMemberTable = new Member();
        $this->useOrderBookTable = new OrderBook();
        $this->useBookTable = new Book();
        $this->useCartTable = new Cart();
        
        ## 基礎檢查是否有登入
        $this->check['isLogin'] = (isset($_COOKIE['token'])) ? true : false;
        if ($this->check['isLogin'] === true) {
            ## 進階檢查這token是否合法
            $token = $this->checkToken($_COOKIE['token']);
            if ($token) {
                ## 合法，撈資料，設定token
                $this->getAccount($token);
                $this->checkAdmin($token);
                $this->check['isAdmin'] = true;
                $this->check['token'] = $token;
            }
        }
    }

    /**
     * 判斷token是否合法
     */
    public function checkToken($token)
    {
        return ($this->useMemberTable->checkToken($token)) ? $token : false;
    }

    /*
     * 判斷身分 
     */
    public function checkAdmin($token)
    {
        $isAdmin = $this->useMemberTable->checkAdmin($token) ? true : false;
        $this->identity = ($isAdmin === true) ? ("admin") : ("member");
    }

    /**
     * 獲取account
     */
    public function getAccount($token)
    {
        $memberData = $this->useMemberTable->getAll($token);
        $this->account = $memberData['account'];
    }

    /**
     * 分頁防呆
     */
    public function pageStupid($getPage)
    {
        return (!is_numeric($getPage)) || ($getPage < 1) || ($_SERVER['QUERY_STRING'] === "") ? 1 : $getPage;
    }
}
