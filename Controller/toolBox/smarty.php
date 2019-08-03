<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

$smarty->left_delimiter = "{{"; 
$smarty->right_delimiter = "}}";

