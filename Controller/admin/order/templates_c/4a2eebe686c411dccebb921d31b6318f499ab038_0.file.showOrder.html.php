<?php
/* Smarty version 3.1.33, created on 2019-08-07 11:29:28
  from 'C:\xampp\htdocs\Store\Controller\templates\admin\order\showOrder.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4a99f8c953f7_38687049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2eebe686c411dccebb921d31b6318f499ab038' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\admin\\order\\showOrder.html',
      1 => 1565170167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4a99f8c953f7_38687049 (Smarty_Internal_Template $_smarty_tpl) {
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
        text-align: center;
    }
</style>


<body>
    <!-- 菜單在header裡 -->
    <div>
        <table class="table">
            <thead style="background-color: #AAAAAA">
                <tr>
                    <th style="text-align: center" class="col-md-1">用戶帳號</th>
                    <th style="text-align: center" class="col-md-1">書名</th>
                    <th style="text-align: center" class="col-md-1">單價</th>
                    <th style="text-align: center" class="col-md-1">數量</th>
                    <th style="text-align: center" class="col-md-1">總價</th>
                    <th style="text-align: center" class="col-md-1">下單日期</th>
                    <th style="text-align: center" class="col-md-1">修改</th>
                    <th style="text-align: center" class="col-md-1">刪除</th>
                </tr>
            </thead>
            <tbody class="List">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderBookObj']->value, 'orderBookArrays');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['orderBookArrays']->value) {
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArrays']->value['userAccount'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArrays']->value['bookName'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArrays']->value['bookPrice'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArrays']->value['buyCount'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArrays']->value['totalPrice'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArrays']->value['orderDate'];?>

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
</body>

</html><?php }
}
