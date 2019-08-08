<?php
/* Smarty version 3.1.33, created on 2019-08-08 15:49:05
  from 'C:\xampp\htdocs\Store\Controller\View\admin\book\addBook.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4c28513860c6_65076929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42d55256d0bb573b44f22477989600530b23e5f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\admin\\book\\addBook.html',
      1 => 1565267957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4c28513860c6_65076929 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<!-- model -->

<body>
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
