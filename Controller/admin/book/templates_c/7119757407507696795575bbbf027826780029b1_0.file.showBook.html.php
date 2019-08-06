<?php
/* Smarty version 3.1.33, created on 2019-08-06 05:20:18
  from 'C:\xampp\htdocs\Store\Controller\templates\admin\book\showBook.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d48f1f2e86177_34982221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7119757407507696795575bbbf027826780029b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\admin\\book\\showBook.html',
      1 => 1565061618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d48f1f2e86177_34982221 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品清單</title>
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
</head>
<style>
    td {
        background-color: #FDF5E6;
    }
</style>

<body>
    <!-- 菜單在header裡 -->
    <p></p>
    <div>
        <table class="table">
            <thead style="background-color: #AAAAAA">
                <tr>
                    <th style="text-align: center" class="col-md-1">預覽圖</th>
                    <th class="col-md-1">書名</th>
                    <th class="col-md-1">作者</th>
                    <th class="col-md-6">書本介紹</th>
                    <th style="text-align: center" class="col-md-1">價格</th>
                    <th style="text-align: center" class="col-md-1">修改</th>
                    <th style="text-align: center" class="col-md-1">刪除</th>
                </tr>
            </thead>
            <tbody class="List">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookObj']->value, 'bookArrays');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bookArrays']->value) {
?>
                <tr>
                    <td style="text-align: center">
                        <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookPhoto'];?>
" class="img-circle" height="55"
                            width="55">
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookName'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookAuthor'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookInfo'];?>

                    </td>
                    <td style="text-align: center">
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookPrice'];?>

                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookId'];?>
"
                            name="btnShowUpdateBook" id="btnShowUpdateBook">修改
                        </button>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookId'];?>
"
                            name="btnDeleteBook" id="btnDeleteBook">刪除
                        </button>
                    </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <!-- model -->
    <div class="container" id="mainModal">
    </div>
</body>


<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>


</html><?php }
}
