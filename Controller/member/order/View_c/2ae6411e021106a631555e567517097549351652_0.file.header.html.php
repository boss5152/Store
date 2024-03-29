<?php
/* Smarty version 3.1.33, created on 2019-08-09 10:11:14
  from 'C:\xampp\htdocs\Store\Controller\View\member\order\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4d2aa2a3cdb1_38331940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae6411e021106a631555e567517097549351652' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\member\\order\\header.html',
      1 => 1565338256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4d2aa2a3cdb1_38331940 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- 菜單 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php if (isset($_smarty_tpl->tpl_vars['account']->value)) {?>
            <a class="navbar-brand" href="">Hello , <?php echo $_smarty_tpl->tpl_vars['account']->value;?>
</a>
            <?php } else { ?>
            <a class="navbar-brand" href="">Welcome</a>
            <?php }?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/Store/Controller/index/index.php">去購物</a></li>
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
                        <?php if (isset($_smarty_tpl->tpl_vars['account']->value)) {?>
                        <li><a href="/Store/Controller/member/home/userInfo.php">我的書櫃</a></li>
                        <li><a type="button" id="btnLogout" name="btnLogout">登出</a></li>
                        <?php } else { ?>
                        <li><a href="/Store/Controller/member/showRegister.php">註冊</a></li>
                        <li><a href="/Store/Controller/member/showlogin.php">登入</a></li>
                        <?php }?>
                    </ul>
                </li>
                <li>
                    <a href="/Store/Controller/member/cart/showCart.php">
                        <span class="glyphicon glyphicon-shopping-cart"></span> 我的購物車
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- 菜單 --><?php }
}
