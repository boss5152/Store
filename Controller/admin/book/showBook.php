<?php
    
require_once('C:/xampp/htdocs/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();

$bookObj = $useBookTable->getAll();

$smarty->assign('bookObj', $bookObj);
$smarty->display('C:/xampp/htdocs/Store/Controller/templates/admin/book/header.html');
$smarty->display('C:/xampp/htdocs/Store/Controller/templates/admin/book/showBook.html');