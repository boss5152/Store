<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = "View";
$smarty->compile_dir = "View_c";

$smarty->left_delimiter = "{{"; 
$smarty->right_delimiter = "}}";

