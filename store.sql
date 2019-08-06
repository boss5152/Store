-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 06 日 12:19
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
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `adminId` int(10) UNSIGNED NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adminKey` varchar(10) NOT NULL,
  `token` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`adminId`, `account`, `password`, `adminKey`, `token`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000', 66310);

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
  `releaseDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`bookId`, `bookName`, `bookAuthor`, `bookInfo`, `bookPrice`, `bookPhoto`, `releaseDate`) VALUES
(1, '狂人日記', '魯迅', '一個正置中外文化相對衝突的年代；一個被古老文明熏陶了上千年的國度。', 100, 'a2fb6c26dd87ee5dee07a5784773.jpg', '2019-08-05 16:03:21'),
(2, '像我這樣的一個女子', '西西', '讀西西作品，知道她不徒追求表面技巧，而能相體裁衣，深刻描繪這一代人的悲和喜、矛盾和困惑、懦弱和堅強、冷漠和寬容，左右出入而永遠充滿感性的衝擊。\r\n', 150, '20180420201403-1ucstxhcmhxs.jpg', '2019-08-05 16:03:22'),
(3, '解憂雜貨店', '東野圭吾', '這裡不只賣日常生活用品，還提供消煩解憂的諮詢。困惑不安的你，糾結不已的你，歡迎來信討論心中的問題。', 50, 'getImage.jfif', '2019-08-05 16:03:23'),
(4, '在咖啡冷掉之前', '川口俊和', '拜託了，請讓我回到那一天！「聽說來這裡，就能回到過去，是真的嗎？」', 50, 'showThumbnail.jfif', '2019-08-05 16:03:24'),
(5, '哈利波特', 'J.K.羅琳', '在世界的另一個角落裡，有一個神秘的國度，裡面住滿了巫師，貓頭鷹是他們的信差，飛天掃帚是交通工具，西洋棋子會思考，幽靈頑皮鬼滿天飛，畫像裡的人還會跑出來串門子。', 100, 'magicstone.jfif', '2019-08-05 16:03:25'),
(9, '111', '111', '111', 111, 'book.png', '2019-08-06 18:19:40'),
(10, '222', '222', '222', 222, 'book.png', '2019-08-06 14:11:11'),
(11, '333', '333', '333', 333, 'user_default_150x150.png', '2019-08-06 06:35:17'),
(12, '444', '444', '444', 444, 'getImage.jfif', '2019-08-06 03:06:22');

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `cartList` text NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `cart`
--

INSERT INTO `cart` (`cartId`, `cartList`, `userId`) VALUES
(1, '1,2,3,', 1),
(2, '1', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `userId` int(10) UNSIGNED NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `token` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`userId`, `account`, `password`, `email`, `token`) VALUES
(1, '111', '698d51a19d8a121ce581499d7b701668', '111@mail.com', 72928),
(2, '222', 'bcbe3365e6ac95ea2c0343a2395834dd', '222@mail.com', 78760),
(4, '333', '310dcbbf4cce62f762a2aaa148d556bd', '333@mail.com', 0),
(7, '444', '550a141f12de6341fba65b0ad0433500', '444@mail.com', 0),
(14, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@mail.com', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

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
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `book`
--
ALTER TABLE `book`
  MODIFY `bookId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
