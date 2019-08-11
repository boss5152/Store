<?php
/* Smarty version 3.1.33, created on 2019-08-10 10:53:59
  from 'C:\xampp\htdocs\Store\Controller\View\header\userHeader.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4e8627429330_32637333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb45bc470c2473bdffb7b580f4fdc0d3443cd88a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\header\\userHeader.html',
      1 => 1565427131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4e8627429330_32637333 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- 菜單 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href=""><?php echo $_smarty_tpl->tpl_vars['account']->value;?>
</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/Store/Controller/index/index.php">首頁</a></li>
            </ul>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        帳戶管理
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/Store/Controller/member/aboutLogin/showEdituserInfo.php">修改資料</a></li>
                        <li><a type="button" id="btnLogout" name="btnLogout">登出</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/Store/Controller/member/cart/showCart.php">
                        <span class="glyphicon glyphicon-shopping-cart"></span> 我的購物車
                    </a>
                </li>
                <li>
                    <a href="/Store/Controller/member/order/showUserOrder.php">
                        <span class="glyphicon glyphicon-envelope"></span> 我的訂單
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- 菜單 --><?php }
}
