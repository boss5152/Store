<?php
/* Smarty version 3.1.33, created on 2019-08-14 11:23:26
  from 'C:\xampp\htdocs\Store\Controller\View\header\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53d30ed7d586_20592458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8bdfbd7ad7b56f7e4820db28ae2aef3f87eed83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\header\\header.html',
      1 => 1565764481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d53d30ed7d586_20592458 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>

<!-- 菜單 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
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
                <?php if ($_smarty_tpl->tpl_vars['account']->value === 'visitor') {?>
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
                <?php } elseif ($_smarty_tpl->tpl_vars['account']->value === 'admin') {?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"></span>
                            帳戶管理(<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
)
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/Store/Controller/admin/aboutLogin/showEditAdminInfo.php">修改資料</a></li>
                            <li><a type="button" id="btnLogout" name="btnLogout">登出</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/Store/Controller/admin/book/showBook.php">
                            <span class="glyphicon glyphicon-shopping-cart"></span> 管理商品
                        </a>
                    </li>
                    <li>
                        <a href="/Store/Controller/admin/order/showOrder.php">
                            <span class="glyphicon glyphicon-envelope"></span> 管理訂單
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">
                            <span class="glyphicon glyphicon-user"></span>
                            帳戶管理(<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
)
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/Store/Controller/member/aboutLogin/showEditUserInfo.php">修改資料</a></li>
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
                <?php }?>
            </ul>
        </div>
    </div>
</nav>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/header/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/header/logout.js"><?php echo '</script'; ?>
>

<!-- 菜單 --><?php }
}