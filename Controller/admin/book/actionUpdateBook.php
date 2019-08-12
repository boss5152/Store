<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Store/Controller/toolBox/commonMethod.php');

$useBookTable = new Book();
$useCommonMethod = new CommonMethod();

$isAdmin = $useCommonMethod->checkAdmin();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($isAdmin === true) {
        ## 檢查是否有空
        $tips = "";
        $isUpdate = false;
        if (!empty($_POST["updateBookName"]) && (!empty($_POST["updateBookAuthor"]))
            && (!empty($_POST["updateBookInfo"])) && (!empty($_POST["updateBookPrice"]))
            && (!empty($_POST["updateBookInStock"]))) {
            ## 檢查長度
            $bookId = $_POST["bookId"];
            $bookName = $_POST["updateBookName"];
            $bookAuthor = $_POST["updateBookAuthor"];
            $bookInfo = $_POST["updateBookInfo"];
            $bookPrice = $_POST["updateBookPrice"];
            $bookInStock = $_POST["updateBookInStock"];
            # 檔名
            $bookPhoto =  $_FILES["updateBookPhoto"]["name"];
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
            } elseif ($tips === '') {
                ## 如果有改圖片則進行圖片格式驗證，沒有更改bookPhoto會為空字串
                if ($_FILES["updateBookPhoto"]["type"] === "image/jpeg" || $_FILES["updateBookPhoto"]["type"] === "image/png" || $bookPhoto === "" ) {
                    ## 防注入
                    $bookName = htmlentities($bookName, ENT_NOQUOTES, "UTF-8");
                    $bookAuthor = htmlentities($bookAuthor, ENT_NOQUOTES, "UTF-8");
                    $bookInfo = htmlentities($bookInfo, ENT_NOQUOTES, "UTF-8");
                    $bookPrice = htmlentities($bookPrice, ENT_NOQUOTES, "UTF-8");
                    $bookInStock = htmlentities($bookInStock, ENT_NOQUOTES, "UTF-8");
                    $bookPhoto = htmlentities($bookPhoto, ENT_NOQUOTES, "UTF-8");
                    if ($bookPhoto === "") {
                        $updateArray = [
                            'bookName' => $bookName, 
                            'bookAuthor' => $bookAuthor, 
                            'bookInfo' => $bookInfo,
                            'bookPrice' => $bookPrice,
                            'bookInStock' => $bookInStock
                        ];
                    } else {
                        $updateArray = [
                            'bookName' => $bookName, 
                            'bookAuthor' => $bookAuthor, 
                            'bookInfo' => $bookInfo,
                            'bookPrice' => $bookPrice,
                            'bookInStock' => $bookInStock,
                            'bookPhoto' => $bookPhoto
                        ];
                    }
                    $isUpdate = $useBookTable->update($updateArray, $bookId);
                    ## 回傳
                    if ($isUpdate === true) {
                        $tips = "編輯成功";
                        $isUpdate = true;
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
            'isUpdate' => $isUpdate,
            'tips' => $tips
        ));
    }

}