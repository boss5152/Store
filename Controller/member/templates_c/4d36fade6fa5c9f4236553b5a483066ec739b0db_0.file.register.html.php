<?php
/* Smarty version 3.1.33, created on 2019-07-31 11:05:51
  from 'C:\xampp\htdocs\Store\Controller\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4159ef1eb6d8_83106523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d36fade6fa5c9f4236553b5a483066ec739b0db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\register.html',
      1 => 1564563950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4159ef1eb6d8_83106523 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8"/>
        <title>註冊</title>
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
        <?php echo '<script'; ?>
 src="http://localhost/msg/Controller/javascript/tool.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">去購物</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>        
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../member/register.php"><span class="glyphicon glyphicon-user"></span> 帳戶管理 </a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> 我的購物車 </a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <p></p>
        <div class="container col-md-4 col-md-offset-4">
                <div class="form-group">
                    <label for="account">帳號 : </label>
                    <input type="text" class="form-control" name="account" id="account" placeholder="英數2碼以上12碼以下">
                    <p id="tipsAccount">帳號需介於2到12字且不可有空白等特殊字元</p>
                </div>
                <div class="form-group">
                    <label for="password">密碼 : </label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="英數2碼以上12碼以下">
                    <p id="tipsPassword">密碼需介於2到12字且不可有空白等特殊字元</p>
                </div>
                <div class="form-group">
                    <label for="password">電子郵箱 : </label>
                    <input type="password" class="form-control" name="email" id="email" placeholder="example@mail.com">
                    <p id="tipsEmail"></p>
                </div>
                <div class="form-group">
                    <button id="btnRegister" type="button" class="btn btn-primary offset-sm-3" disabled="true">註冊</button>
                    <a href="index.php?page=1" class="btn btn-danger offset-sm-3" role="button">取消</a>
                </div>
        </div>
    </body>
</html><?php }
}
