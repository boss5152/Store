<?php
/* Smarty version 3.1.33, created on 2019-08-13 05:09:02
  from 'C:\xampp\htdocs\Store\Controller\View\member\aboutLogin\showEditUserInfo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5229ce699053_92873779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b90f6940254f0fc55d5913ef4554537f2ab827' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\member\\aboutLogin\\showEditUserInfo.html',
      1 => 1565665641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5229ce699053_92873779 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<title>修改資料</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<style>
    #tipsPassword,
    #tipsOldPassword,
    #tipsEmail {
        color: red;
    }
</style>

<body>
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
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
                <input type="password" class="form-control" name="oldPassword" id="oldPassword"
                    placeholder="英數2碼以上12碼以下">
                <p id="tipsOldPassword"></p>
            </div>
            <div class="form-group">
                <label>電子郵箱 : </label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['memberData']->value['email'];?>
"
                    placeholder="example@mail.com">
                <p id="tipsEmail"></p>
            </div>
            <div class="form-group">
                <button id="btnActionEditUserInfo" type="button" class="btn btn-primary" disabled="true">完成</button>
                <a href="/Store/Controller/index/index.php" class="btn btn-danger" role="button">取消</a>
            </div>
        </div>
    </div>
</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>

</html><?php }
}
