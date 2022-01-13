-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-01-13 06:26:39
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sotsuken`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `size` int(11) NOT NULL,
  `method` int(11) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `size`, `method`, `image`, `address`) VALUES
(1, '流山北運動会', '2021-12-01', 49, 1, '', 'hoge@gmail.com'),
(24, '柏運動会', '2022-01-21', 56, 1, '', 'piyo@gmail.com'),
(25, '柏運動会', '2022-01-20', 10, 1, 'a.jpg', 'hoge@gmail.com'),
(26, '流山花火', '2022-01-14', 10, 1, '', 'hoge@gmail.com');

-- --------------------------------------------------------

--
-- テーブルの構造 `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `eventId` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `reserve`
--

INSERT INTO `reserve` (`id`, `name`, `mail`, `pass`, `eventId`, `number`) VALUES
(4, '小林　タイガー', 'piyo@gmail.com', 'hsaa', 1, 2),
(7, '小林　タイガー', 'koba@gmail.com', 'hsaa', 3, 3),
(8, '竹井　一馬', 'koba@gmail.com', 'hsaa', 3, 3),
(9, '小林　大雅', 'koba@gmail.com', 'hsaa', 3, 3),
(22, 'コバヤシタイガ', 'hoge@gmail.com', 'aaa', 24, 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- テーブルのAUTO_INCREMENT `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
