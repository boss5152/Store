<?php
/* Smarty version 3.1.33, created on 2019-08-16 08:23:22
  from 'C:\xampp\htdocs\Store\Controller\View\admin\book\showBook.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d564bdad518f8_37474295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30c2250f3f768e335592838e9e94aa0492cb0b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\admin\\book\\showBook.html',
      1 => 1565935630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d564bdad518f8_37474295 (Smarty_Internal_Template $_smarty_tpl) {
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
    .tips {
        color:red;
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
                    <th style="text-align: center" class="col-md-1">當前庫存</th>
                    <th style="text-align: center" class="col-md-1">修改</th>
                    <th style="text-align: center" class="col-md-1">刪除</th>
                </tr>
            </thead>
            <tbody class="List">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bookArrays']->value, 'bookArray');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bookArray']->value) {
?>
                <tr>
                    <td style="text-align: center">
                        <input type="hidden" id="showBookPhotoName<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPhoto'];?>
">
                        <img src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPhoto'];?>
" class="img-circle" height="55"
                            width="55">
                    </td>
                    <td>
                        <p id="showBookName<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookName'];?>
</p>
                    </td>
                    <td>
                        <p id="showBookAuthor<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookAuthor'];?>
</p>
                    </td>
                    <td>
                        <p id="showBookInfo<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookInfo'];?>
</p>

                    </td>
                    <td style="text-align: center">
                        <p id="showBookPrice<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPrice'];?>
</p>
                    </td>
                    <td style="text-align: center">
                        <p id="showBookInStock<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
"><?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookInStock'];?>
</p>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
"
                            name="btnShowUpdateBook" id="btnShowUpdateBook">修改
                        </button>
                    </td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-default" value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookId'];?>
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

    <!-- 新增modal -->
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
                            <input type="text" class="form-control" name="addBookName" id="addBookName">
                            <p id="tipsAddBookName" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>作者 : </label>
                            <input type="text" class="form-control" name="addBookAuthor" id="addBookAuthor">
                            <p id="tipsAddBookAuthor" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>書本介紹 : </label>
                            <input type="text" class="form-control" name="addBookInfo" id="addBookInfo">
                            <p id="tipsAddBookInfo" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>價格 : </label>
                            <input type="text" class="form-control" name="addBookPrice" id="addBookPrice">
                            <p id="tipsAddBookPrice" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>當前庫存 : </label>
                            <input type="text" class="form-control" name="addBookInStock" id="addBookInStock">
                            <p id="tipsAddBookInStock" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label class="btn btn-info">
                                <input style="display:none;" type="file" name="addBookPhoto" id="addBookPhoto">
                                <span class="glyphicon glyphicon-picture"></span>
                                上傳圖片
                            </label>
                            <br>
                            <label>書本預覽上傳 : </label>
                            <br>
                            <img id="addBookPhotoDemo" height="150" width="130">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btnBookAdd" name="btnBookAdd" disabled="false">新增</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 修改model -->
    <div class="modal fade" id="modalUpdateBook" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">修改商品</h4>
                </div>
                <div class="modal-body">
                    <form id="formUpdateBook">
                        <div>
                            <input type="hidden" id="bookId" name="bookId" value="">
                        </div>
                        <div class="form-group">
                            <label>書名 : </label>
                            <input type="text" class="form-control" name="updateBookName" id="updateBookName" value="">
                            <p id="tipsUpdateBookName" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>作者 : </label>
                            <input type="text" class="form-control" name="updateBookAuthor" id="updateBookAuthor"
                                value="">
                            <p id="tipsUpdateBookAuthor" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>書本介紹 : </label>
                            <textarea style="height: 300px;" type="text" class="form-control" name="updateBookInfo"
                                id="updateBookInfo"></textarea>
                            <p id="tipsUpdateBookInfo" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>價格 : </label>
                            <input type="text" class="form-control" name="updateBookPrice" id="updateBookPrice"
                                value="">
                            <p id="tipsUpdateBookPrice" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label>當前庫存 : </label>
                            <input type="text" class="form-control" name="updateBookInStock" id="updateBookInStock" 
                                value="">
                            <p id="tipsUpdateBookInStock" class="tips"></p>
                        </div>
                        <div class="form-group">
                            <label class="btn btn-info">
                                <input type="hidden" name="updateBookPhotoName" id="updateBookPhotoName" value="">
                                <input style="display:none;" type="file" name="updateBookPhoto" id="updateBookPhoto">
                                <span class="glyphicon glyphicon-picture"></span>
                                上傳圖片
                            </label>
                            <br>
                            <label>書本預覽上傳 : </label>
                            <br>
                            <img id="updateBookPhotoDemo" src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPhoto'];?>
"
                                height="150" width="130">
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
    <hr>
    <div class="text-center">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAddBook" 
            id="btnBookAdd" name="btnBookAdd">新增商品</button>
    </div>
    <hr>
    <div class="text-center text-center">
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
                    <li><a href="/Store/Controller/admin/book/showBook.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
                    <li><a href="/Store/Controller/admin/book/showBook.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/book/showBook.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/book/addBook.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/book/updateBook.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>

</html><?php }
}
