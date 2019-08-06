<?php
/* Smarty version 3.1.33, created on 2019-08-06 04:30:10
  from 'C:\xampp\htdocs\Store\Controller\templates\admin\book\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d48e6326bc840_98881547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e8cfa9bf001808315caa680800a6e31c94c6da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\admin\\book\\header.html',
      1 => 1565058609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d48e6326bc840_98881547 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- 菜單 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
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
                <!-- model -->
                <li>
                    <a role="button" class="btn" name="btnShowBookAdd" id="btnShowBookAdd">
                        <span class="glyphicon glyphicon-plus"></span> 新書上架
                    </a>
                </li>
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
