<?php
/* Smarty version 3.1.33, created on 2019-08-01 11:58:43
  from 'C:\xampp\htdocs\Store\Controller\templates\member\editUser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42b7d3137579_65870510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5473281e0a95484efcd825c75bca750edef0de7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\member\\editUser.html',
      1 => 1564653517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42b7d3137579_65870510 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<body>
    <div class="row">
        <div class="container col-md-10 col-md-offset-1">
            <h2>修改</h2>
            <hr>
            <div class="form-group">
                <label>帳號 : </label>
                <input type="text" class="form-control" name="account" id="account" value="<?php echo $_smarty_tpl->tpl_vars['memberData']->value['account'];?>
" placeholder="英數2碼以上12碼以下">
                <p id="tipsAccount">帳號需介於2到12字且不可有空白等特殊字元</p>
            </div>
            <div class="form-group">
                <label>您的新密碼 : </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="英數2碼以上12碼以下">
                <p id="tipsPassword">密碼需介於2到12字且不可有空白等特殊字元</p>
            </div>
            <div class="form-group">
                <label>您的舊密碼 : </label>
                <input type="oldPassword" class="form-control" name="password" id="password" placeholder="英數2碼以上12碼以下">
                <p id="tipsPassword">密碼需介於2到12字且不可有空白等特殊字元</p>
            </div>
            <div class="form-group">
                <label>電子郵箱 : </label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['memberData']->value['email'];?>
" placeholder="example@mail.com">
                <p id="tipsEmail">email格式須為example@mail.com</p>
            </div>
            <div class="form-group">
                <button id="btnEditUserInfo" type="button" class="btn btn-primary" disabled="true">完成</button>
                <a href="" class="btn btn-danger" role="button">取消</a>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
