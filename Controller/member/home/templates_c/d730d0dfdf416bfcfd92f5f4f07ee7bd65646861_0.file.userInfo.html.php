<?php
/* Smarty version 3.1.33, created on 2019-08-07 10:46:45
  from 'C:\xampp\htdocs\Store\Controller\templates\home\userInfo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4a8ff5194906_94064004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd730d0dfdf416bfcfd92f5f4f07ee7bd65646861' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\home\\userInfo.html',
      1 => 1565167604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4a8ff5194906_94064004 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="utf-8">

<head>
    <title>我的書櫃</title>
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
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3 well">
                <div class="well">
                    <p><strong>愛書的你</strong></p>
                    <img src="/Store/Controller/image/user_default_150x150.png" class="img-circle" height="65" width="65" alt="Avatar">
                </div>
                <div class="well">
                    <p><strong>您感興趣的文類</strong></p>
                    <p>
                        <span class="label label-default">存在主義</span>
                        <span class="label label-primary">政治</span>
                        <span class="label label-success">社會</span>
                        <span class="label label-info">輕文學</span>
                        <span class="label label-warning">懸疑</span>
                        <span class="label label-danger">驚聳</span>
                    </p>
                </div>
                <div class="alert alert-success fade in">
                    <p><strong>貴安 !</strong></p>
                    該為您的書櫃增添幾本新書了 !!
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default text-left">
                            <div class="panel-body">
                                <p contenteditable="true">您喜歡的作者出新書了</p>
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mainDiv">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookObj']->value, 'bookArrays');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bookArrays']->value) {
?>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <p><?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookAuthor'];?>
</p>
                                <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookPhoto'];?>
" class="img-circle" height="55" width="55" alt="狂人日記">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="well">
                                <p>《<?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookName'];?>
》</p>
                                <text><?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookInfo'];?>
</text>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="col-sm-2 well">
                <div class="thumbnail">
                    <p>日期</p>
                </div>
                <div class="well">
                    <button class="btn btn-primary" type=button id="btnShowEditUserInfo" name="btnShowEditUserInfo" value="<?php echo $_smarty_tpl->tpl_vars['memberData']->value['token'];?>
">潤飾您的資訊</button>
                </div>
                <div class="well">
                    <button class="btn btn-primary" type=button id="bntShowOrderBook" name="bntShowOrderBook" value="<?php echo $_smarty_tpl->tpl_vars['memberData']->value['token'];?>
">回憶您的訂單</button>
                </div>
                <div class="well">
                    <a href=""><button class="btn btn-primary" type=button id="" name="">好書推薦</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>

</html><?php }
}
