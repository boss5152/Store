<?php
/* Smarty version 3.1.33, created on 2019-08-12 12:30:11
  from 'C:\xampp\htdocs\Store\Controller\View\header\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d513fb3975875_10147631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de56fa6fb1c6cdd9bc827d23e18bb15b02305f4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\header\\header.html',
      1 => 1565600950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d513fb3975875_10147631 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>

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
                        <input type="text" class="form-control" placeholder="Search.." id="searchWhat">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="btnSearch">
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
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/search.js"><?php echo '</script'; ?>
>
<!-- 菜單 --><?php }
}
