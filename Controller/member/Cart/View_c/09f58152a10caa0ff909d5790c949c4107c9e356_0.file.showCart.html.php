<?php
/* Smarty version 3.1.33, created on 2019-08-08 06:22:29
  from 'C:\xampp\htdocs\Store\Controller\View\member\cart\showCart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4ba385986777_04232748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f58152a10caa0ff909d5790c949c4107c9e356' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\member\\cart\\showCart.html',
      1 => 1565237897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ba385986777_04232748 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="utf-8">

<head>
    <title>購物車</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<body>

    <!-- 菜單在header裡 -->
    <div class="jumbotron">
        <div class="container text-center">
            <h1>您的購物清單</h1>
        </div>
    </div>

    <div class="container-fluid bg-3 text-center">
        <div class="col">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userCartListArrays']->value, 'usercartListArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usercartListArray']->value) {
?>
                <div class="col-sm-3">
                    <div style="display: flex;" class="well">
                        <div>
                        <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookPhoto'];?>
" class="img-responsive"
                            style="height: 150pt; width:140pt" alt="Image">
                        </div>
                        <div class="col-sm-8">
                            <h4><?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookAuthor'];?>
</h4>
                            <h4>《<?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookName'];?>
》</h4>
                            <h4>價格 : <?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookPrice'];?>
</h4>
                            <h4>數量 : 
                                <input type="text" style="height: 30px; width:50px; border: black solid; text-align: center"
                                    maxlength="2" id="buyCount<?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookId'];?>
" name="buyCount<?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookId'];?>
" value="1"></h4>
                            <button type="button" class="btn btn-success col" id="btnBuyBook" name="btnBuyBook" value="<?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookId'];?>
">訂購</button>
                            <button type="button" class="btn btn-danger" id="btnDeleteCart" name="btnDeleteCart" value="<?php echo $_smarty_tpl->tpl_vars['usercartListArray']->value['bookId'];?>
">刪除</button>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div><br><br>
</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>

</html><?php }
}
