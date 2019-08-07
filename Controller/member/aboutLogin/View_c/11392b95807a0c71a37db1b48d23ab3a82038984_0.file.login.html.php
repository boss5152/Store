<?php
/* Smarty version 3.1.33, created on 2019-08-07 15:24:00
  from 'C:\xampp\htdocs\Store\Controller\View\member\aboutLogin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4ad0f0b7f138_39647840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11392b95807a0c71a37db1b48d23ab3a82038984' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\member\\aboutLogin\\login.html',
      1 => 1565182845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ad0f0b7f138_39647840 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登入</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.4.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/twitter-bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>
</head>
<style>
    p {
        color:red;
    }
</style>

<body>
    <!-- 菜單在header裡 -->
    <p></p>
    <div class="container">
        <div class="col-md-5 col-md-offset-3">
            <h2>登入</h2>
            <hr>
            <div class="form-group">
                <label>帳號 : </label>
                <input type="text" class="form-control" name="account" id="account" placeholder="英數2碼以上12碼以下">
                <p id="tipsAccount"></p>
            </div>
            <div class="form-group">
                <label>密碼 : </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="英數2碼以上12碼以下">
                <p id="tipsPassword"></p>
            </div>
            <div class="form-group">
                <label>電子郵箱 : </label>
                <input type="text" class="form-control" name="email" id="email" placeholder="example@mail.com">
                <p id="tipsEmail"></p>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary offset-sm-3" id="btnLogin" disabled="true">登入</button>
                <a href="/Store/Controller/index/index.php" class="btn btn-danger offset-sm-2" role="button">取消</a>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
