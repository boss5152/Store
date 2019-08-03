<?php
/* Smarty version 3.1.33, created on 2019-08-03 12:04:46
  from 'C:\xampp\htdocs\Store\Controller\templates\admin\home\adminHome.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d455c3e71dd25_15906485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '565dc7b6379e384b1cbe55b273ef2aa832213d6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Store\\Controller\\templates\\admin\\home\\adminHome.html',
      1 => 1564826657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d455c3e71dd25_15906485 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="utf-8">

<head>
    <title>管理者主頁</title>
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
                    <p><strong>管書的你</strong></p>
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
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <p>魯迅</p>
                                <img src="/Store/Controller/image/a2fb6c26dd87ee5dee07a5784773.jpg" class="img-circle" height="55" width="55" alt="狂人日記">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="well">
                                <p>《狂人日記》</p>
                                <text>一個正置中外文化相對衝突的年代；一個被古老文明熏陶了上千年的國度。</text>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <p>西西</p>
                                <img src="/Store/Controller/image/20180420201403-1ucstxhcmhxs.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="well">
                                <p>《像我這樣的一個女子》</p>
                                <text>讀西西作品，知道她不徒追求表面技巧，而能相體裁衣，深刻描繪這一代人的悲和喜、矛盾和困惑、懦弱和堅強、冷漠和寬容，左右出入而永遠充滿感性的衝擊。</text>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <p>東野圭吾</p>
                                <img src="/Store/Controller/image/getImage.jfif" class="img-circle" height="55" width="55" alt="Avatar">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="well">
                                <p>《解憂雜貨店》</p>
                                <text>
                                    這裡不只賣日常生活用品，還提供消煩解憂的諮詢。
                                    困惑不安的你，糾結不已的你，歡迎來信討論心中的問題。
                                </text>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <p>川口俊和</p>
                                <img src="/Store/Controller/image/showThumbnail.jfif" class="img-circle" height="55" width="55" alt="Avatar">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="well">
                                <p>《在咖啡冷掉之前》</p>
                                <text>
                                    拜託了，請讓我回到那一天！
                                    「聽說來這裡，就能回到過去，是真的嗎？」
                                </text>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <p>J.K.羅琳</p>
                                <img src="/Store/Controller/image/magicstone.jfif" class="img-circle" height="55" width="55" alt="Avatar">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="well">
                                <p>《哈利波特》</p>
                                <text>在世界的另一個角落裡，有一個神秘的國度，裡面住滿了巫師，貓頭鷹是他們的信差，飛天掃帚是交通工具，西洋棋子會思考，幽靈頑皮鬼滿天飛，畫像裡的人還會跑出來串門子。</text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 well">
                <div class="thumbnail">
                    <p>日期</p>
                </div>
                <div class="well">
                    <button class="btn btn-primary" type=button id="btnShowEditAdminInfo" name="btnShowEditAdminInfo" value="<?php echo $_smarty_tpl->tpl_vars['adminData']->value['token'];?>
">潤飾您的資訊</button>
                </div>
                <div class="well">
                    <a href="/Store/Controller/admin/book/showBook.php" class="btn btn-primary" role="button">讓新書上架</a>
                </div>
            </div>
        </div>
    </div>

</body>

<?php echo '<script'; ?>
 src="http://localhost/Store/Controller/javascript/tool.js"><?php echo '</script'; ?>
>

</html>
<?php }
}
