<?php
/* Smarty version 3.1.33, created on 2019-08-08 06:58:08
  from 'C:\xampp\htdocs\Store\Controller\View\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4babe0ca53c2_24924922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af474e1fbdc97477a79582630decdf200a92d02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\index\\index.html',
      1 => 1565240288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4babe0ca53c2_24924922 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- 最上方菜單在header裡 -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div style="display: flex; align-items: center; justify-content: center;">
                                <img src="/Store/Controller/image/book.png" alt="Image"
                                    style="height: 375px; width: 500px;">
                            </div>
                            <div class="carousel-caption">
                                <h3>暢銷冠軍</h3>
                                <p>狂人日記</p>
                            </div>
                        </div>

                        <div class="item ">
                            <div style="display: flex; align-items: center; justify-content: center;">
                                <img src="/Store/Controller/image/a2fb6c26dd87ee5dee07a5784773.jpg" alt="Image"
                                    style="height: 375px; width: 500px;">
                            </div>
                            <div class="carousel-caption">
                                <h3>暢銷亞軍</h3>
                                <p>像我這樣的一個女子</p>
                            </div>
                        </div>

                        <div class="item">
                            <div style="display: flex; align-items: center; justify-content: center;">
                                <img src="/Store/Controller/image/user_default_150x150.png" alt="Image"
                                    style="height: 375px; width: 500px;">
                            </div>
                            <div class="carousel-caption">
                                <h3>暢銷亞軍</h3>
                                <p>像我這樣的一個女子</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="well">
                    <p>歡迎蒞臨綠水文坊</p>
                </div>
                <div class="well">
                    <p>購買新書享有0%折扣</p>
                </div>
                <div class="well">
                    <p>限時活動 : 買下整間店免運費</p>
                </div>
                <div class="well">
                    <p>其他的優惠資訊</p>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container text-center">
        <h3>新書上榜</h3>
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
                <p><?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['bookPrice'];?>
 NTD</p>
                <!-- 加入購物車按鈕 -->
                <!-- 已加入關掉不給按 -->
                <!-- 沒登入就不顯示了 -->
                <?php if (isset($_smarty_tpl->tpl_vars['newBookArray']->value['isAddCart'])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['newBookArray']->value['isAddCart'] === true) {?>
                        <button type="button" class="btn btn-success" disabled="true">
                            已納入購物車
                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-success" value="<?php echo $_smarty_tpl->tpl_vars['newBookArray']->value['bookId'];?>
" id="btnAddCart"
                            name="btnAddCart">
                            加入購物車
                        </button>
                    <?php }?>
                <?php }?>
                <!-- 加入購物車按鈕 -->
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <hr>
    </div>

    <div class="container text-center">
        <h3>店長推薦</h3>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 1</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 2</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 3</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 4</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 5</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 6</p>
            </div>
        </div>
    </div><br>

</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>

</html><?php }
}
