<?php
    
require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();

$bookObj = $useBookTable->showAll();

$smarty->assign('bookObj', $bookObj);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/admin/book/header.html');
$smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/admin/book/showBook.html');