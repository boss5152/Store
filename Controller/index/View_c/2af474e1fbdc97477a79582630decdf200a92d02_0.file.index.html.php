<?php
/* Smarty version 3.1.33, created on 2019-08-16 11:27:54
  from 'C:\xampp\htdocs\Store\Controller\View\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d56771a5760c0_65405791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af474e1fbdc97477a79582630decdf200a92d02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\index\\index.html',
      1 => 1565947673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d56771a5760c0_65405791 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="utf-8">

<head>
    <title>書</title>
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
        .carousel-inner img {
            width: 100%;
            /* Set width to 100% */
            min-height: 200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h3>商品</h3>
        <br>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newBookArrays']->value, 'newBookArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['newBookArray']->value) {
?>
            <div class="col-sm-3">
                <div style="display: flex; align-items: center; justify-content: center;">
                    <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['bookPhoto'];?>
"
                        style="height: 200px; width: 200px; text-align: center;" class="img-responsive img-thumbnail"
                        alt="Image">
                </div>
                <h5><strong>《<?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['bookName'];?>
》</strong></h5>
                <div style="display: flex; align-items: center; justify-content: center;">
                    <div class="well" style="height: 150px; width: 250px;">
                        <p><?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['bookInfo'];?>
</p>
                    </div>
                </div>
                <p class="bookPrice"><?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['bookPrice'];?>
 NTD</p>
                <!-- 加入購物車按鈕 -->
                <!-- 已加入關掉不給按 -->
                <!-- 沒登入就不顯示了 -->
                <?php if (isset($_smarty_tpl->tpl_vars['newBookArray']->value['isAddCart'])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['newBookArray']->value['isAddCart'] === "加入購物車") {?>
                    <button type="button" class="btn btn-success" value="<?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['bookId'];?>
" id="btnAddCart"
                        name="btnAddCart">
                        <?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['isAddCart'];?>

                    </button>
                    <?php } else { ?>
                    <button type="button" class="btn btn-success" disabled="true">
                        <?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['isAddCart'];?>

                    </button>
                    <?php }?>
                <?php }?>
                <!-- 加入購物車按鈕 -->
                <hr>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div>
            <ul class="pagination">
                <?php if ('bookNameSearch' == '') {?>
                    <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pageCount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pageCount']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['nowPage']->value) {?>
                        <li class="active"><a role="button" id="nowPage" name="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                        <?php } else { ?>
                        <li><a href="/Store/Controller/index/index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
                        <li><a href="/Store/Controller/index/index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&bookNameSearch=<?php echo $_smarty_tpl->tpl_vars['bookNameSearch']->value;?>
" role="button" id="page" name="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                        <?php }?>
                    <?php }
}
?>
                <?php }?>
            </ul>
        </div>
    </div>
</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/index/page.js"><?php echo '</script'; ?>
>

</html><?php }
}
