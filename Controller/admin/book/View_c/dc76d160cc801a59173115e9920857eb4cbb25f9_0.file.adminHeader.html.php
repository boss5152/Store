<?php
/* Smarty version 3.1.33, created on 2019-08-14 03:22:08
  from 'C:\xampp\htdocs\Store\Controller\View\header\adminHeader.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d536240d8c192_02966854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc76d160cc801a59173115e9920857eb4cbb25f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\header\\adminHeader.html',
      1 => 1565745472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d536240d8c192_02966854 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>

<!-- 菜單 -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/Store/Controller/index/index.php">首頁</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        帳戶管理(adimin)
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
