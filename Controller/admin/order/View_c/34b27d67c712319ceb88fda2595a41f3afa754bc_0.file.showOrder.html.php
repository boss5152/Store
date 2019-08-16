<?php
/* Smarty version 3.1.33, created on 2019-08-16 10:38:17
  from 'C:\xampp\htdocs\Store\Controller\View\admin\order\showOrder.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d566b790eeba3_18471880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b27d67c712319ceb88fda2595a41f3afa754bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\admin\\order\\showOrder.html',
      1 => 1565944694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d566b790eeba3_18471880 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <th style="text-align: center" class="col-md-1">訂單編號</th>
                    <th style="text-align: center" class="col-md-1">用戶帳號</th>
                    <th style="text-align: center" class="col-md-1">書名</th>
                    <th style="text-align: center" class="col-md-1">單價</th>
                    <th style="text-align: center" class="col-md-1">數量</th>
                    <th style="text-align: center" class="col-md-1">總價</th>
                    <th style="text-align: center" class="col-md-1">下單日期</th>
                    <th style="text-align: center" class="col-md-1">出貨</th>
                    <th style="text-align: center" class="col-md-1">註銷</th>
                </tr>
            </thead>
            <tbody class="List">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderBookArrays']->value, 'orderBookArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['orderBookArray']->value) {
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>

                    </td>
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
                    <?php if ($_smarty_tpl->tpl_vars['orderBookArray']->value['orderStatus'] == "已出貨") {?>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnCompleteOrder" id="btnCompleteOrder" disabled="true">已出貨
                        </button>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnDeleteOrder" id="btnDeleteOrder" disabled="true">註銷
                        </button>
                    </td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['orderBookArray']->value['orderStatus'] == "已註銷") {?>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnCompleteOrder" id="btnCompleteOrder" disabled="true">出貨
                        </button>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnDeleteOrder" id="btnDeleteOrder" disabled="true">已註銷
                        </button>
                    </td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['orderBookArray']->value['orderStatus'] == "未出貨") {?>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnCompleteOrder" id="btnCompleteOrder">出貨
                        </button>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['orderBookArray']->value['orderId'];?>
"
                            name="btnDeleteOrder" id="btnDeleteOrder">註銷
                        </button>
                    </td>
                    <?php }?>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="text-center text-center">
        <ul class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['orderSearch']->value == '') {?>
                <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pageCount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pageCount']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['nowPage']->value) {?>
                    <li class="active"><a role="button" id="nowPage" name="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php } else { ?>
                    <li><a href="/Store/Controller/admin/order/showOrder.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" role="button" id="page" name="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php }?>
                <?php }
}
?>
            <?php } else { ?>
                <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pageCount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pageCount']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['nowPage']->value) {?>
                    <li class="active"><a role="button" id="nowPage" name="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php } else { ?>
                    <li><a href="/Store/Controller/admin/order/showOrder.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&orderSearch=<?php echo $_smarty_tpl->tpl_vars['orderSearch']->value;?>
" role="button" id="page" name="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php }?>
                <?php }
}
?>
            <?php }?>
        </ul>
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

</html>
<?php }
}
