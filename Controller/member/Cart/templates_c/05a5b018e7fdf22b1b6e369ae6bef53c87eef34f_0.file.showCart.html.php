<?php
/* Smarty version 3.1.33, created on 2019-08-07 10:01:42
  from 'C:\xampp\htdocs\Store\Controller\templates\member\showCart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4a8566e330e2_41989255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a5b018e7fdf22b1b6e369ae6bef53c87eef34f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\member\\showCart.html',
      1 => 1565164782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4a8566e330e2_41989255 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>

<body>

    <!-- 菜單 -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/Store/Controller/index/index.php">去購物</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <form class="navbar-form" role="search">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"></span>
                            帳戶管理
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">註冊</a></li>
                            <li><a href="">登入</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <span class="glyphicon glyphicon-shopping-cart"></span> 我的購物車
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 菜單 -->

    <div class="jumbotron">
        <div class="container text-center">
            <h1>您的購物清單</h1>
        </div>
    </div>

    <div class="container-fluid bg-3 text-center">
        <div class="col">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartListObj']->value, 'cartListArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cartListArray']->value) {
?>
                <div class="col-sm-3">
                    <div style="display: flex;" class="well">
                        <div>
                        <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['cartListArray']->value['bookPhoto'];?>
" class="img-responsive"
                            style="height: 150pt; width:140pt" alt="Image">
                        </div>
                        <div class="col-sm-8">
                            <h4><?php echo $_smarty_tpl->tpl_vars['cartListArray']->value['bookAuthor'];?>
</h4>
                            <h4>《<?php echo $_smarty_tpl->tpl_vars['cartListArray']->value['bookName'];?>
》</h4>
                            <h4>價格 : <?php echo $_smarty_tpl->tpl_vars['cartListArray']->value['bookPrice'];?>
</h4>
                            <h4>數量 : 
                                <input type="text" style="height: 30px; width:50px; border: black solid; text-align: center"
                                    maxlength="2" id="buyCount<?php echo $_smarty_tpl->tpl_vars['cartListArray']->value['bookId'];?>
" name="buyCount<?php echo $_smarty_tpl->tpl_vars['cartListArray']->value['bookId'];?>
" value="1"></h4>
                            <button type="button" class="btn btn-success col" id="btnBuyBook" name="btnBuyBook" value="<?php echo $_smarty_tpl->tpl_vars['cartListArray']->value['bookId'];?>
">訂購</button>
                            <button type="button" class="btn btn-danger">刪除</button>
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
