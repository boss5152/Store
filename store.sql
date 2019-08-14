-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 14 日 12:09
-- 伺服器版本： 10.1.40-MariaDB
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `store`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `bookId` int(10) UNSIGNED NOT NULL,
  `bookName` varchar(50) NOT NULL,
  `bookAuthor` text NOT NULL,
  `bookInfo` text NOT NULL,
  `bookPrice` int(10) NOT NULL,
  `bookPhoto` text NOT NULL,
  `releaseDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bookInStock` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`bookId`, `bookName`, `bookAuthor`, `bookInfo`, `bookPrice`, `bookPhoto`, `releaseDate`, `bookInStock`) VALUES
(1, '狂人日記', '魯迅', '一個正置中外文化相對衝突的年代；一個被古老文明熏陶了上千年的國度。', 50, 'a2fb6c26dd87ee5dee07a5784773.jpg', '2019-08-14 09:54:11', 3),
(2, '像我這樣的一個女子', '西西', '讀西西作品，知道她不徒追求表面技巧，而能相體裁衣，深刻描繪這一代人的悲和喜、矛盾和困惑、懦弱和堅強、冷漠和寬容，左右出入而永遠充滿感性的衝擊。\r\n', 150, '20180420201403-1ucstxhcmhxs.jpg', '2019-08-12 16:44:05', 9),
(3, '解憂雜貨店', '東野圭吾', '這裡不只賣日常生活用品，還提供消煩解憂的諮詢。困惑不安的你，糾結不已的你，歡迎來信討論心中的問題。', 50, 'getImage.jfif', '2019-08-12 16:00:35', 9),
(4, '在咖啡冷掉之前', '川口俊和', '拜託了，請讓我回到那一天！「聽說來這裡，就能回到過去，是真的嗎？」', 50, 'showThumbnail.jfif', '2019-08-14 09:23:32', 10),
(5, '哈利波特', 'J.K.羅琳', '在世界的另一個角落裡，有一個神秘的國度，裡面住滿了巫師，貓頭鷹是他們的信差，飛天掃帚是交通工具，西洋棋子會思考，幽靈頑皮鬼滿天飛，畫像裡的人還會跑出來串門子。', 100, 'magicstone.jfif', '2019-08-14 09:19:04', 0),
(8, '敦克爾克大撤退', '華特‧勞德', '一九四○年五月，一場史上最大的撤退行動扭轉了第二次世界大戰的未來。', 200, '4.jpg', '2019-08-12 14:06:14', 0),
(9, '斜陽', '太宰治', '描寫戰後混亂苦悶的社會中，一個貴族家庭的沒落過程，恰如太陽西沉', 200, 'getImage.jpg', '2019-08-14 17:55:09', 14),
(10, '達文西密碼', '丹‧布朗', '羅浮宮年高德邵的館長遭人謀殺，就在博物館內，屍體旁邊留下了一個令人困惑的密碼。', 150, 'getImage (1).jpg', '2019-08-13 09:25:35', 20),
(12, '天使與魔鬼', '丹．布朗', '故事敘述想以科學證明神確實存在的物理學家李歐納度．威特拉在公布他的重大成果「反物質」前夕遇害，不但眼珠子被挖掉，胸膛還被烙上一個神祕的印記。', 150, 'getImage (2).jpg', '2019-08-14 09:49:48', 12),
(13, '變形記', '法蘭茲‧卡夫卡', '他以寫實的手法描寫人世的荒謬與矛盾，藉由因現實生活的壓迫而遭「異化」的主人翁，表達現代人內心的疏離與寂寞、孤獨與絕望。', 100, 'getImage (3).jpg', '2019-08-13 12:05:20', 15);

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `cartId` int(10) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `bookId` int(5) NOT NULL,
  `bookCount` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `cart`
--

INSERT INTO `cart` (`cartId`, `userId`, `bookId`, `bookCount`) VALUES
(22, 1, 9, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `userId` int(10) UNSIGNED NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `token` varchar(50) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`userId`, `account`, `password`, `email`, `token`, `isAdmin`) VALUES
(1, '111', '698d51a19d8a121ce581499d7b701668', '111@mail.com', '2862', 0),
(2, '222', 'bcbe3365e6ac95ea2c0343a2395834dd', '222@mail.com', '0', 0),
(14, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@mail.com', '0', 1),
(17, 'jAmes', '200820e3227815ed1756a6b531e7e0d2', 'jjj@main.com', '0', 0),
(19, '000', 'c6f057b86584942e415435ffb1fa93d4', '000@mail.com', '0', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `orderbook`
--

CREATE TABLE `orderbook` (
  `orderId` int(10) UNSIGNED NOT NULL,
  `userAccount` varchar(50) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `bookPrice` int(10) UNSIGNED NOT NULL,
  `buyCount` int(10) UNSIGNED NOT NULL,
  `totalPrice` int(15) UNSIGNED NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orderStatus` varchar(10) NOT NULL DEFAULT '未出貨'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `orderbook`
--

INSERT INTO `orderbook` (`orderId`, `userAccount`, `bookName`, `bookPrice`, `buyCount`, `totalPrice`, `orderDate`, `orderStatus`) VALUES
(1, '111', '解憂雜貨店', 50, 3, 150, '2019-08-07 16:28:03', '未出貨'),
(2, '111', '狂人日記', 100, 2, 200, '2019-08-07 16:47:49', '未出貨'),
(6, '111', '解憂雜貨店', 50, 2, 100, '2019-08-12 13:34:12', '已出貨'),
(7, '111', '像我這樣的一個女子', 150, 1, 150, '2019-08-12 13:34:12', '已出貨'),
(8, '222', '解憂雜貨店', 50, 1, 50, '2019-08-12 15:08:49', '未出貨'),
(9, '222', '狂人日記', 100, 1, 100, '2019-08-12 15:08:49', '未出貨'),
(11, '222', '解憂雜貨店', 50, 1, 50, '2019-08-12 15:59:40', '已出貨'),
(19, '111', '像我這樣的一個女子', 150, 1, 150, '2019-08-12 16:43:15', '未出貨'),
(29, '111', '斜陽', 200, 1, 200, '2019-08-14 09:08:41', '未出貨'),
(30, '111', '哈利波特', 100, 2, 200, '2019-08-14 09:08:41', '未出貨'),
(33, '111', '天使與魔鬼', 150, 2, 300, '2019-08-14 09:49:48', '未出貨'),
(36, '111', '斜陽', 200, 1, 200, '2019-08-14 16:59:05', '未出貨'),
(37, '111', '斜陽', 200, 1, 200, '2019-08-14 17:55:09', '未出貨');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookId`);

--
-- 資料表索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`userId`);

--
-- 資料表索引 `orderbook`
--
ALTER TABLE `orderbook`
  ADD PRIMARY KEY (`orderId`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `book`
--
ALTER TABLE `book`
  MODIFY `bookId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `orderbook`
--
ALTER TABLE `orderbook`
  MODIFY `orderId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
