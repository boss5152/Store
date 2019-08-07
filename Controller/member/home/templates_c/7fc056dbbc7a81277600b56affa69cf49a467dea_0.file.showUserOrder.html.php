<?php
/* Smarty version 3.1.33, created on 2019-08-07 10:50:19
  from 'C:\xampp\htdocs\Store\Controller\templates\home\showUserOrder.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4a90cbe200e6_10579106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fc056dbbc7a81277600b56affa69cf49a467dea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\home\\showUserOrder.html',
      1 => 1565167818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4a90cbe200e6_10579106 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<style>
    td {
        background-color: #FDF5E6;
    }
</style>

<body>
    <!-- 菜單在header裡 -->
    <div>
        <table class="table">
            <thead style="background-color: #AAAAAA">
                <tr>
                    <th style="text-align: center" class="col-md-1">書名</th>
                    <th style="text-align: center" class="col-md-1">單價</th>
                    <th style="text-align: center" class="col-md-1">數量</th>
                    <th style="text-align: center" class="col-md-1">總價</th>
                    <th style="text-align: center" class="col-md-1">下單日期</th>
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
