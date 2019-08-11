<?php
/* Smarty version 3.1.33, created on 2019-08-11 09:01:00
  from 'C:\xampp\htdocs\Store\Controller\View\header\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4fbd2c942ae3_37881151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b131d6229c9685425408b4f0626a7563c66f73db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\header\\header.html',
      1 => 1565506743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4fbd2c942ae3_37881151 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- 菜單 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Welcome</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/Store/Controller/index/index.php">首頁</a></li>
        </ul>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <form class="navbar-form" role="search">
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                        <span class="glyphicon glyphicon-user"></span>
                        帳戶管理
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/Store/Controller/member/aboutLogin/showRegister.php">註冊</a></li>
                        <li><a href="/Store/Controller/member/aboutLogin/showlogin.php">登入</a></li>
                        <li><a href="/Store/Controller/admin/aboutLogin/showAdminLogin.php">我是管理者</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- 菜單 --><?php }
}
