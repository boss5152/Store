<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    var_dump($_POST['showBookName1']);
    echo "123";
}
