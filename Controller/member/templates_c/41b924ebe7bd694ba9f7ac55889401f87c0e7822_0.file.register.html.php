<?php
/* Smarty version 3.1.33, created on 2019-08-02 06:16:08
  from 'C:\xampp\htdocs\Store\Controller\templates\member\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d43b908e04785_74344760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b924ebe7bd694ba9f7ac55889401f87c0e7822' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\member\\register.html',
      1 => 1564719367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d43b908e04785_74344760 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>註冊</title>
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
    <div class="container col-md-4 col-md-offset-4">
        <h2>註冊</h2>
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
            <button id="btnRegister" type="button" class="btn btn-primary" disabled="true">註冊</button>
            <a href="/Store/Controller/index/index.php" class="btn btn-danger" role="button">取消</a>
        </div>
    </div>
</body>

</html><?php }
}
