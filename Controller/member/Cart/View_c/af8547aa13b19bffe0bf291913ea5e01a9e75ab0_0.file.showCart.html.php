<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:08:54
  from 'C:\xampp\htdocs\Store\Controller\View\member\cart\showCart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d511e96626d30_27756510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af8547aa13b19bffe0bf291913ea5e01a9e75ab0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\member\\cart\\showCart.html',
      1 => 1565597333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d511e96626d30_27756510 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <th style="text-align: center" class="col-md-1">當前庫存</th>
                    <th style="text-align: center" class="col-md-1">價格</th>
                    <th style="text-align: center" class="col-md-1">數量</th>
                    <th style="text-align: center" class="col-md-1">總價</th>
                    <th style="text-align: center" class="col-md-1">刪除</th>
                </tr>
            </thead>
            <tbody class="List">
                <form id="formCart">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userCartListArrays']->value, 'userCartListArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userCartListArray']->value) {
?>
                <tr>
                    <td style="text-align: center">
                        <input type="hidden" id="showBookPhotoName<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookPhoto'];?>
">
                        <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookPhoto'];?>
" class="img-circle"
                            height="55" width="55">
                    </td>
                    <td>
                        <p id="showBookName<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookName'];?>
</p>
                    </td>
                    <td>
                        <p id="showBookAuthor<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookAuthor'];?>
</p>
                    </td>
                    <td style="text-align: center">
                        <p id="showBookInStock<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookInStock'];?>
</p>
                    </td>
                    <td style="text-align: center">
                        <p id="showBookPrice<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookPrice'];?>
</p>
                    </td>
                    <td style="text-align: center">
                        <input type="text" style="height: 30px; width:50px; border: black solid; text-align: center"
                            maxlength="2" id="showBookCount<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
" data-bookid="<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
" 
                            value="<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookCount'];?>
">
                    </td>
                    <td style="text-align: center">
                        <p id="showBookTotal<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
" data-name="showBookTotal"><?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookTotalPrice'];?>
</p>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['userCartListArray']->value['bookId'];?>
"
                            name="btnDeleteCart" id="btnDeleteCart">刪除
                        </button>
                    </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </form>
            </tbody>
        </table>
        <hr>
        <div>
            <div class="well col-sm-2 col-sm-offset-9">
                <div><strong><h4>總價 : </h4></strong></div>
                <hr>
                NTD :<div class="col-md-offset-5"><h3 id="cartTotal"><?php echo $_smarty_tpl->tpl_vars['allTotalPrice']->value;?>
</h3></div>
                <hr>
                <div class="col-md-offset-9">
                    <?php if ($_smarty_tpl->tpl_vars['allTotalPrice']->value == 0) {?>
                    <button type="button" class="btn btn-success" id="btnBuyBook" name="btnBuyBook" disabled="true">訂購</button>
                    <?php } else { ?>
                    <button type="button" class="btn btn-success" id="btnBuyBook" name="btnBuyBook">訂購</button>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/cart/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>


</html>
<?php }
}
