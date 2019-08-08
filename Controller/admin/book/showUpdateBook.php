<?php
    
require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();

$bookId = $_POST['bookId'];
$bookArray = $useBookTable->getAll($bookId);

$smarty->assign('bookArray', $bookArray);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/View/admin/book/updateBook.html');