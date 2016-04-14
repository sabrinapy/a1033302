-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-04-14 04:01:35
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sabrina`
--

-- --------------------------------------------------------

--
-- 資料表結構 `a`
--

CREATE TABLE `a` (
  `account` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(10) NOT NULL,
  `logtimes` int(5) NOT NULL,
  `lasttime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `a`
--

INSERT INTO `a` (`account`, `pwd`, `email`, `phone`, `logtimes`, `lasttime`) VALUES
('', '', '', '', 0, '0000-00-00 00:00:00.000000'),
('aa', '213', '', '', 0, '0000-00-00 00:00:00.000000'),
('root', '123456', '', '', 0, '0000-00-00 00:00:00.000000');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
