<?php
/* Smarty version 3.1.33, created on 2019-08-03 11:43:35
  from 'C:\xampp\htdocs\Store\Controller\templates\admin\home\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d455747048e81_76123649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3bb37039e7b15772ac2244160f9e20be226e0ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\admin\\home\\header.html',
      1 => 1564823337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d455747048e81_76123649 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- 菜單 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Hello , <?php echo $_smarty_tpl->tpl_vars['account']->value;?>
</a>
        </div>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        帳戶管理
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/Store/Controller/home/userInfo.php">我的書櫃</a></li>
                        <li><a href="/Store/Controller/member/logout.php">登出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- 菜單 --><?php }
}
