<?php
/* Smarty version 3.1.33, created on 2019-08-05 11:32:35
  from 'C:\xampp\htdocs\Store\Controller\templates\admin\book\updateBook.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d47f7b3bd3564_87125721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2e8d65cd00665bd9566f504870ff15cc37b3a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\admin\\book\\updateBook.html',
      1 => 1564997539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d47f7b3bd3564_87125721 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<!-- model -->
<body>
    <div class="container">
        <div class="modal fade" id="modelUpdateBook" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">修改商品</h4>
                    </div>
                    <div class="modal-body">
                        <form id="formAddBook">
                            <div class="form-group">
                                <label>書名 : </label>
                                <input type="text" class="form-control" name="bookName" id="bookName">
                                <?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookName'];?>

                                <p id="tipsBookName"></p>
                            </div>
                            <div class="form-group">
                                <label>作者 : </label>
                                <input type="text" class="form-control" name="bookAuthor" id="bookAuthor">
                                212
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
    </div>
</body>

</html><?php }
}
