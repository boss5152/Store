<?php

require_once("smarty.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Member.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Book.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Cart.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/OrderBook.php");

class CommonMethod
{
    public function __construct()
    {
        $this->useMemberTable = new Member();
        $this->useOrderBookTable = new OrderBook();
    }

    /*
     * 判斷是否登入
     */
    public function checkLogin()
    {
        if (isset($_COOKIE['token'])) {
            return $this->useMemberTable->checkToken($_COOKIE['token']);
        }
    }

    /*
     * 判斷身分 
     */
    public function checkAdmin()
    {
        if (isset($_COOKIE['token'])) {
            return $checkAdmin = $this->useMemberTable->checkAdmin($_COOKIE['token']);
        }
    }
}
