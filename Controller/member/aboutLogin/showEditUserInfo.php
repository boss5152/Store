<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity === "member") {
    $memberData = $useCommonMethod->useMemberTable->getAll($useCommonMethod->check['token']);
    $smarty->assign("account", $memberData['account']);
    $smarty->assign("memberData", $memberData);
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/header.html"); 
    $smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/aboutLogin/showEditUserInfo.html"); 

} else {
    header("Location: /Store/Controller/index/index.php");
}
