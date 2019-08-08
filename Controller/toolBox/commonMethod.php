<?php

require_once("smarty.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Member.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Book.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Cart.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Admin.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/OrderBook.php");

class CommonMethod
{
    public function __construct()
    {
        $this->useMemberTable = new Member();
        $this->useBookTable = new Book();
        $this->useCartTable = new Cart();
        $this->useAdminTable = new Admin();
        $this->useOrderBookTable = new OrderBook();
    }
    /*
     * 判斷是否登入
     */
    public function checkLogin()
    {
        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];
            $checkToken = $this->useMemberTable->checkToken($token);
            return ($checkToken === true) ? true : false;   
        }
    }
}
