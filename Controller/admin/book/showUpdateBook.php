<?php
    
require_once('C:/xampp/htdocs/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();

$bookId = $_POST['bookId'];
$bookArray = $useBookTable->getAll($bookId);

$smarty->assign('bookArray', $bookArray);
$smarty->display('C:/xampp/htdocs/Store/Controller/templates/admin/book/updateBook.html');