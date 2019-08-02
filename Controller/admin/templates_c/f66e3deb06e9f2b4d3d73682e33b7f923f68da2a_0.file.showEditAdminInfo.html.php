<?php
/* Smarty version 3.1.33, created on 2019-08-02 10:15:43
  from 'C:\xampp\htdocs\Store\Controller\templates\admin\home\showEditAdminInfo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d43f12f279a66_08835379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f66e3deb06e9f2b4d3d73682e33b7f923f68da2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\admin\\home\\showEditAdminInfo.html',
      1 => 1564733739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d43f12f279a66_08835379 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>
<html>
<style>
    #tipsPassword,
    #tipsOldPassword,
    #tipsAdminKey {
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
                        <?php echo $_smarty_tpl->tpl_vars['adminData']->value['account'];?>

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
                <label>管理者金鑰 : </label>
                <input type="password" class="form-control" name="adminKey" id="adminKey" placeholder="此欄位必填">
                <p id="tipsAdminKey"></p>
            </div>
            <div class="form-group">
                <button id="btnEditAdminInfo" type="button" class="btn btn-primary" disabled="true">完成</button>
                <a href="" class="btn btn-danger" role="button">取消</a>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
