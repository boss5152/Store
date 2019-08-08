<?php
/* Smarty version 3.1.33, created on 2019-08-08 16:09:12
  from 'C:\xampp\htdocs\Store\Controller\View\admin\book\showBook.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4c2d082fd777_55971819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30c2250f3f768e335592838e9e94aa0492cb0b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\admin\\book\\showBook.html',
      1 => 1565273300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4c2d082fd777_55971819 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <th class="col-md-6">書本介紹</th>
                    <th style="text-align: center" class="col-md-1">價格</th>
                    <th style="text-align: center" class="col-md-1">修改</th>
                    <th style="text-align: center" class="col-md-1">刪除</th>
                </tr>
            </thead>
            <tbody class="List">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookObj']->value, 'bookArrays');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bookArrays']->value) {
?>
                <tr>
                    <td style="text-align: center">
                        <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookPhoto'];?>
" class="img-circle" height="55"
                            width="55">
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookName'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookAuthor'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookInfo'];?>

                    </td>
                    <td style="text-align: center">
                        <?php echo $_smarty_tpl->tpl_vars['bookArrays']->value['bookPrice'];?>

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
    <!-- model -->
    <div class="container" id="mainModal">
        <div class="modal fade" id="modelUpdateBook" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">修改商品</h4>
                    </div>
                    <div class="modal-body">
                        <form id="formUpdateBook">
                            <div>
                                <input type="hidden" id="bookId" name="bookId" value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
">
                            </div>
                            <div class="form-group">
                                <label>書名 : </label>
                                <input type="text" class="form-control" name="bookName" id="bookName"
                                    value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookName'];?>
">
                                <p id="tipsBookName"></p>
                            </div>
                            <div class="form-group">
                                <label>作者 : </label>
                                <input type="text" class="form-control" name="bookAuthor" id="bookAuthor"
                                    value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookAuthor'];?>
">
                                <p id="tipsBookAuthor"></p>
                            </div>
                            <div class="form-group">
                                <label>書本介紹 : </label>
                                <textarea style="height: 300px;" type="text" class="form-control" name="bookInfo"
                                    id="bookInfo"><?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookInfo'];?>
</textarea>
                                <p id="tipsBookInfo"></p>
                            </div>
                            <div class="form-group">
                                <label>價格 : </label>
                                <input type="text" class="form-control" name="bookPrice" id="bookPrice"
                                    value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPrice'];?>
">
                                <p id="tipsBookPrice"></p>
                            </div>
                            <div class="form-group">
                                <label>書本預覽上傳 : </label>
                                <label class="btn btn-info">
                                    <input type="hidden" name="bookPhotoName" id="bookPhotoName"
                                        value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPhoto'];?>
">
                                    <input style="display:none;" type="file" name="bookPhoto" id="bookPhoto">
                                    <span class="glyphicon glyphicon-picture"></span>
                                    上傳圖片
                                </label>
                                <br>
                                <img id="bookPhotoDemo" src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPhoto'];?>
"
                                    height="150" width="130">
                                <p id="tipsbookPhoto"></p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="btnActionBookUpdate"
                            name="btnActionBookUpdate">修改</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAddBook" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">新增商品</h4>
                </div>
                <div class="modal-body">
                    <form id="formAddBook">
                        <div class="form-group">
                            <label>書名 : </label>
                            <input type="text" class="form-control" name="bookName" id="bookName">
                            <p id="tipsBookName"></p>
                        </div>
                        <div class="form-group">
                            <label>作者 : </label>
                            <input type="text" class="form-control" name="bookAuthor" id="bookAuthor">
                            <p id="tipsBookAuthor"></p>
                        </div>
                        <div class="form-group">
                            <label>書本介紹 : </label>
                            <input type="text" class="form-control" name="bookInfo" id="bookInfo">
                            <p id="tipsBookInfo"></p>
                        </div>
                        <div class="form-group">
                            <label>價格 : </label>
                            <input type="text" class="form-control" name="bookPrice" id="bookPrice">
                            <p id="tipsBookPrice"></p>
                        </div>
                        <div class="form-group">
                            <label>書本預覽上傳 : </label>
                            <label class="btn btn-info">
                                <input style="display:none;" type="file" name="bookPhoto" id="bookPhoto">
                                <span class="glyphicon glyphicon-picture"></span>
                                上傳圖片
                            </label>
                            <br>
                            <img id="bookPhotoDemo">
                            <p id="tipsbookPhoto"></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btnBookAdd" name="btnBookAdd"
                        disabled="true">新增</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
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
