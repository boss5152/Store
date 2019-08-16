<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useCommonMethod = new CommonMethod();

if ($useCommonMethod->identity != "member") {
    header("Location: /Store/Controller/index/index.php");
}

$memberData = $useCommonMethod->useMemberTable->getAll($useCommonMethod->check['token']);
$userCartListArrays = $useCommonMethod->useCartTable->getCartList($memberData['userId']);

$smarty->assign('account', $useCommonMethod->account);
$smarty->assign('userCartListArrays', $userCartListArrays);
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/header/cartHeader.html"); 
$smarty->display($_SERVER['DOCUMENT_ROOT'] . "/Store/Controller/View/member/cart/showCart.html");
