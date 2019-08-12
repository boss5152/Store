<?php
/* Smarty version 3.1.33, created on 2019-08-12 08:53:27
  from 'C:\xampp\htdocs\Store\Controller\View\admin\order\showOrder.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d510ce7152774_12323753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b27d67c712319ceb88fda2595a41f3afa754bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\admin\\order\\showOrder.html',
      1 => 1565592806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d510ce7152774_12323753 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <th style="text-align: center" class="col-md-1">結單</th>
                    <th style="text-align: center" class="col-md-1">刪除</th>
                </tr>
            </thead>
            <tbody class="List">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderBookObj']->value, 'orderBookArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['orderBookArray']->value) {
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['userAccount'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['bookName'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['bookPrice'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['buyCount'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['totalPrice'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderDate'];?>

                    </td>
                    <td style="text-align: center">
                        <?php if ($_smarty_tpl->tpl_vars['orderBookArray']->value['orderStatus'] == "已出貨") {?>
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnCompleteOrder" id="btnCompleteOrder" disabled="true">已結單
                        </button>
                        <?php } else { ?>
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnCompleteOrder" id="btnCompleteOrder">結單
                        </button>
                        <?php }?>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnDeleteOrder" id="btnDeleteOrder">刪除
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

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/admin/order/deleteOrder.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/admin/order/completeOrder.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>


</html><?php }
}
