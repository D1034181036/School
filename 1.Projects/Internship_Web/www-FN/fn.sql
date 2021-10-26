-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2020-02-13 07:15:25
-- 伺服器版本: 5.7.11
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fn`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `no` int(8) NOT NULL,
  `id` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`no`, `id`, `pw`, `name`) VALUES
(2, 'imsohappysc', '62e9e6c6d56284553b5368ee7e21ed27', 'ImSoHappySC'),
(3, 'iftrush', '202cb962ac59075b964b07152d234b70', 'FN-PTTIFT'),
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin');

-- --------------------------------------------------------

--
-- 資料表結構 `playlist`
--

CREATE TABLE `playlist` (
  `no` int(8) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `singer` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `memo` text COLLATE utf8_unicode_ci,
  `createid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `create_datetime` datetime NOT NULL,
  `isdeleted` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `playlist`
--

INSERT INTO `playlist` (`no`, `title`, `singer`, `memo`, `createid`, `create_datetime`, `isdeleted`) VALUES
(1, '誕生日2', '熊木杏里', '', 'imsohappysc', '2017-10-13 18:11:10', '1'),
(22, 'Fight', ' 熊木杏里', '', 'admin', '2017-10-13 19:09:13', '1'),
(23, '桜', '熊木杏里', '', 'admin', '2017-10-13 19:09:35', '1'),
(24, 'Love Letter', '熊木杏里', '', 'admin', '2017-10-13 19:09:50', '2'),
(25, '糸', '一青窈', '', 'admin', '2017-10-13 19:10:18', '2'),
(26, 'ハナミズキ', '一青窈', '', 'admin', '2017-10-13 19:10:30', '1'),
(27, '誕生日', '熊木杏里', '', 'admin', '2017-10-13 19:10:58', '1');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`no`);

--
-- 資料表索引 `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`no`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `playlist`
--
ALTER TABLE `playlist`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
