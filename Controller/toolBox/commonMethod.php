<?php

require_once("smarty.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Member.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Book.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Cart.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/OrderBook.php");

class CommonMethod
{
    public $check = [];
    public $page;
    public $account = "visitor";
    public $identity = "visitor";
    public function __construct()
    {
        $this->useMemberTable = new Member();
        $this->useOrderBookTable = new OrderBook();
        $this->useBookTable = new Book();
        $this->useCartTable = new Cart();
        ## 基礎檢查是否有登入
        $this->checkLogin();
        if ($this->check['isLogin'] === true) {
            ## 進階檢查這token是否合法
            $this->checkToken();
            if ($this->check['isToken'] === true) {
                ## 都通過才做獲取或顯示的方法
                $this->identity = "member";
                $this->getToken();
                $this->getAccount();
                ## 確認admin，成功的話這裡會覆蓋掉account為admin
                $this->checkAdmin();
            }
        }
        ## 分頁防呆
        $this->page = $this->checkPage();
    }

    /*
     * 判斷是否登入
     */
    public function checkLogin()
    {
        $this->check['isLogin'] = (isset($_COOKIE['token'])) ? true : false;
    }

    /**
     * 判斷token是否合法
     */
    public function checkToken()
    {
        $this->check['isToken'] = $this->useMemberTable->checkToken($_COOKIE['token']) ? true : false;
    }

    /*
     * 判斷身分 
     */
    public function checkAdmin()
    {
        $this->check['isAdmin'] = $this->useMemberTable->checkAdmin($_COOKIE['token']) ? true : false;
        if ($this->check['isAdmin'] === true) {
            $this->identity = "admin";
        }
    }

    /**
     * 獲得token
     */
    public function getToken()
    {
        $this->check['token'] = $this->check['isToken'] ? $_COOKIE['token'] : "errorToken";
    }

    /**
     * 獲取account
     */
    public function getAccount()
    {
        $memberData = $this->useMemberTable->getAll($this->check['token']);
        $this->account = $memberData['account'];
    }

    /**
     * 分頁防呆
     */
    public function checkPage()
    {
        if (isset($_GET['page'])) {
            if ((!is_numeric($_GET['page'])) || ($_GET['page'] < 1) || ($_SERVER['QUERY_STRING'] === "")) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
        } else {
            $page = 1;
        }
        return $page;
    }
}
