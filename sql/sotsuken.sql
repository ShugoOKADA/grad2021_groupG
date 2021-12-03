-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-11-29 02:55:08
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
  `image` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `size`, `method`, `image`) VALUES
(1, '柏小運動会', '2021-11-29', 100, 1, 'testimage.jpg'),
(2, '柏中学校', '2021-11-20', 110, 1, 'test_2image.jpg'),
(3, '柏中学校', '2021-11-20', 110, 1, 'test_2image.jpg');

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
(1, '小林　タイガー', 'hoge@gmail.com', 'hogepass', 1, 1),
(2, '竹井　一馬', 'hoge@gmail.com', 'aaa', 1, 1),
(3, '小林　大雅', 'hoge@gmail.com', 'hsaa', 1, 1),
(4, '小林　タイガー', 'piyo@gmail.com', 'hsaa', 2, 2),
(5, '竹井　一馬', 'piyo@gmail.com', 'hsaa', 2, 2),
(6, '小林　大雅', 'piyo@gmail.com', 'hsaa', 2, 2),
(7, '小林　タイガー', 'koba@gmail.com', 'hsaa', 3, 3),
(8, '竹井　一馬', 'koba@gmail.com', 'hsaa', 3, 3),
(9, '小林　大雅', 'koba@gmail.com', 'hsaa', 3, 3),
(10, 'aaa', 'hoge@gmail.com', 'aaaa', 1, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- テーブルのAUTO_INCREMENT `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
