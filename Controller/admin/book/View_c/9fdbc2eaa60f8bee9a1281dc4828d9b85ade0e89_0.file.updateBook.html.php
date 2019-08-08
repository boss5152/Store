<?php
/* Smarty version 3.1.33, created on 2019-08-08 03:32:13
  from 'C:\xampp\htdocs\Store\Controller\View\admin\book\updateBook.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4b7b9dd00875_22246952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fdbc2eaa60f8bee9a1281dc4828d9b85ade0e89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\View\\admin\\book\\updateBook.html',
      1 => 1565227931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4b7b9dd00875_22246952 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<!-- model -->
<body>
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
                                <input type="text" class="form-control" name="bookName" id="bookName" value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookName'];?>
">
                                <p id="tipsBookName"></p>
                            </div>
                            <div class="form-group">
                                <label>作者 : </label>
                                <input type="text" class="form-control" name="bookAuthor" id="bookAuthor" value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookAuthor'];?>
">
                                <p id="tipsBookAuthor"></p>
                            </div>
                            <div class="form-group">
                                <label>書本介紹 : </label>
                                <textarea style="height: 300px;"type="text" class="form-control" name="bookInfo" id="bookInfo" ><?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookInfo'];?>
</textarea>
                                <p id="tipsBookInfo"></p>
                            </div>
                            <div class="form-group">
                                <label>價格 : </label>
                                <input type="text" class="form-control" name="bookPrice" id="bookPrice" value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPrice'];?>
">
                                <p id="tipsBookPrice"></p>
                            </div>
                            <div class="form-group">
                                <label>書本預覽上傳 : </label>
                                <label class="btn btn-info">
                                    <input type="hidden" name="bookPhotoName" id="bookPhotoName" value="<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPhoto'];?>
">
                                    <input style="display:none;" type="file" name="bookPhoto" id="bookPhoto">
                                    <span class="glyphicon glyphicon-picture"></span>
                                    上傳圖片
                                </label>
                                <br>
                                <img id="bookPhotoDemo" src="/Store/Controller/image/<?php echo $_smarty_tpl->tpl_vars['bookArray']->value['bookPhoto'];?>
" height="150" width="130">
                                <p id="tipsbookPhoto"></p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="btnActionBookUpdate" name="btnActionBookUpdate"
                            >修改</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- <?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
> -->

</html><?php }
}
