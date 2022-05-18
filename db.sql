-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022-05-18 19:09:57
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `commodity`
--

CREATE TABLE `commodity` (
  `ID` int(11) NOT NULL,
  `Name` char(64) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Price` int(11) NOT NULL,
  `Updatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Uploadtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `stock` int(11) NOT NULL,
  `Picture` longblob NOT NULL DEFAULT '\'http://616pic.com/sucai/vr7imdgl1.html\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `commodity`
--

INSERT INTO `commodity` (`ID`, `Name`, `Description`, `Price`, `Updatetime`, `Uploadtime`, `stock`, `Picture`) VALUES
(27, '時光機', '還卡在時光裂縫李', 150, '2021-06-17 01:14:29', '2021-06-17 01:12:55', 23, 0x3232373435372e6a7067),
(28, '一臉矇逼', '一臉矇逼', 150, '2021-06-17 01:13:16', '2021-06-17 01:13:16', 23, 0x3436373334302e706e67),
(29, '馬大師', '練閃電五連鞭中', 123, '2021-06-17 01:13:49', '2021-06-17 01:13:49', 22, 0x38333435382e6a7067),
(30, '狗', '背後有火', 160, '2021-06-17 01:14:13', '2021-06-17 01:14:13', 44, 0x3234333039332e706e67);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `commodity`
--
ALTER TABLE `commodity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
