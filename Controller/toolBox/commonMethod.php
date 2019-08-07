<?php

require_once("smarty.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/Member.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/book.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/cart.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/admin.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Model/orderBook.php");

class CommonMethod
{
    ## 設定
    private $useMemberTable;
    private $useBookTable;
    private $useCartTable;
    private $useAdminTable;
    private $useOrderBookTable;

    public function __construct()
    {
        $this->useMemberTable = new Member();
        $this->useBookTable = new Member();
        $this->useCartTable = new Member();
        $this->useAdminTable = new Member();
        $this->useOrderBookTable = new Member();
    }
    ## 判斷是否登入
    public function checkLogin()
    {
        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];
            $checkToken = $this->useMemberTable->checkToken($token);
            return ($checkToken === true) ? true : false;   
        }
    }
}
