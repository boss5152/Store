<?php

require_once('C:/xampp/htdocs/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    ## 檢查是否有空
    $tips = "";
    $isAdd = false;
    if (!empty($_POST["bookName"]) && (!empty($_POST["bookAuthor"]))
        && (!empty($_POST["bookInfo"])) && (!empty($_POST["bookPrice"]))) {
        ## 檢查長度
        $bookName = $_POST["bookName"];
        $bookAuthor = $_POST["bookAuthor"];
        $bookInfo = $_POST["bookInfo"];
        $bookPrice = $_POST["bookPrice"];
        # 檔名
        $bookPhoto =  $_FILES["bookPhoto"]["name"];
        if (mb_strlen($bookName, "utf-8") > 30) {
            $tips .= "書名不可超過30字，您的書名為" . mb_strlen($bookName, "utf-8") . "字";
        } elseif (mb_strlen($bookAuthor, "utf-8") > 20) {
            $tips .= "作者不可超過20字，您的作者名為" . mb_strlen($bookAuthor, "utf-8") . "字";
        } elseif (mb_strlen($bookInfo, "utf-8") > 100) {
            $tips .= "書本介紹內容不可超過100字，您的內容為" . mb_strlen($bookInfo, "utf-8") . "字";
        } elseif (mb_strlen($bookPrice, "utf-8") > 10) {
            $tips .= "價格不可超過10位數，您的價格為" . mb_strlen($bookPrice, "utf-8") . "字";
        } elseif (mb_strlen($bookPhoto, "utf-8") > 100) {
            $tips .= "圖檔名稱不可超過100字，您的檔名為" . mb_strlen($bookPhoto, "utf-8") . "字";
        } elseif ($tips === "") {
            ## 限定上傳type
            if ($_FILES["bookPhoto"]["type"] === "image/jpeg" || $_FILES["bookPhoto"]["type"] === "image/png") {
                ## 防注入
                $bookName = htmlentities($bookName, ENT_NOQUOTES, "UTF-8");
                $bookAuthor = htmlentities($bookAuthor, ENT_NOQUOTES, "UTF-8");
                $bookInfo = htmlentities($bookInfo, ENT_NOQUOTES, "UTF-8");
                $bookPrice = htmlentities($bookPrice, ENT_NOQUOTES, "UTF-8");
                $bookPhoto = htmlentities($bookPhoto, ENT_NOQUOTES, "UTF-8");
                $insertArray = [
                    'bookName' => $bookName, 
                    'bookAuthor' => $bookAuthor, 
                    'bookInfo' => $bookInfo,
                    'bookPrice' => $bookPrice,
                    'bookPhoto' => $bookPhoto
                ];
                $isInsert = $useBookTable->insert($insertArray);
                ## 回傳
                if ($isInsert === true) {
                    ## 移動圖片
                    move_uploaded_file(
                        $_FILES['bookPhoto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . 
                        "/Store/Controller/image/" . $_FILES['bookPhoto']['name']
                    );
                    $tips = "新增成功";
                    $isAdd = true;
                } else {
                    $tips = "失敗，請重新操作一次";
                }
            } else {
                $tips = "圖片格式只可為jpg/png";
            }
        }
    } else {
        $tips .= "任一欄位皆不得為空";
    }

    ## 最後回傳請求
    echo json_encode(array(
        'isAdd' => $isAdd,
        'tips' => $tips
    ));
}