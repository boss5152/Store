<?php
    
require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();
$useCommonMethod = new CommonMethod();

$isAdmin = $useCommonMethod->checkAdmin();

if ($isAdmin === true) {
    $bookObj = $useBookTable->showAll();
    $smarty->assign('bookObj', $bookObj);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/adminHeader.html');
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/admin/book/showBook.html');
} else {
    header("Location: /Store/Controller/index/index.php");
}
