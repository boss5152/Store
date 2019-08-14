<?php
    
require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity === "admin") {
    $bookArrays = $useCommonMethod->useBookTable->showAll();
    $smarty->assign('account', $useCommonMethod->account);
    $smarty->assign('bookArrays', $bookArrays);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/header/header.html');
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/admin/book/showBook.html');
} else {
    header("Location: /Store/Controller/index/index.php");
}
