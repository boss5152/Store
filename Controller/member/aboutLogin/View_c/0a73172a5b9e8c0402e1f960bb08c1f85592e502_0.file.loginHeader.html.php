<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:40:00
  from 'C:\xampp\htdocs\Store\Controller\View\header\loginHeader.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d55287043ff70_02926777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a73172a5b9e8c0402e1f960bb08c1f85592e502' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\header\\loginHeader.html',
      1 => 1565860910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d55287043ff70_02926777 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="http://localhost/Store/Controller/javascript/header/logout.js"><?php echo '</script'; ?>
>

<!-- 菜單 --><?php }
}
