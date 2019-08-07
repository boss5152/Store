<?php
/* Smarty version 3.1.33, created on 2019-08-07 10:46:45
  from 'C:\xampp\htdocs\Store\Controller\templates\home\showEditUserInfo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4a8ff59c8e85_97408614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de83c25dca5d925e15b918340dc284131c5f4658' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\home\\showEditUserInfo.html',
      1 => 1565167594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4a8ff59c8e85_97408614 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<style>
    #tipsPassword,
    #tipsOldPassword,
    #tipsEmail {
        color: red;
    }
</style>
<body>
    <div class="row">
        <div class="container col-md-10 col-md-offset-1">
            <h2>修改</h2>
            <hr>
            <div class="form-group">
                <label>帳號 : </label>
                <text type="text" class="form-control" name="account" id="account" value="<?php echo $_smarty_tpl->tpl_vars['memberData']->value['account'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['memberData']->value['account'];?>

                </text>
            </div>
            <div class="form-group">
                <label>您的新密碼 : </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="英數2碼以上12碼以下">
                <p id="tipsPassword"></p>
            </div>
            <div class="form-group">
                <label>您的舊密碼 : </label>
                <input type="password" class="form-control" name="oldPassword" id="oldPassword" placeholder="英數2碼以上12碼以下">
                <p id="tipsOldPassword"></p>
            </div>
            <div class="form-group">
                <label>電子郵箱 : </label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['memberData']->value['email'];?>
" placeholder="example@mail.com">
                <p id="tipsEmail"></p>
            </div>
            <div class="form-group">
                <button id="btnActionEditUserInfo" type="button" class="btn btn-primary" disabled="true">完成</button>
                <a href="" class="btn btn-danger" role="button">取消</a>
            </div>
        </div>
    </div>
</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>

</html><?php }
}
