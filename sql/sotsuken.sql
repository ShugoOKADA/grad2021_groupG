-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-02-10 04:07:10
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
-- テーブルの構造 `chuusen`
--

CREATE TABLE `chuusen` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `eventId` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `chuusen`
--

INSERT INTO `chuusen` (`id`, `name`, `mail`, `pass`, `eventId`, `number`) VALUES
(2, 'ふじ', 'fujitsuba1214@gmail.com', '1010', 39, 14),
(3, 'ふじつば', 'fujitsuba1214@gmail.com', '1010', 40, 1),
(4, 'q', 'fujitsuba1214@gmail.com', '1010', 41, 3),
(5, 'ふじつば', 'fujitsuba1214@gmail.com', '1010', 41, 1),
(6, '藤代翔', 'fujitsuba1214@gmail.com', '1010', 41, 1),
(7, 'こば', 'fujitsuba1214@gmail.com', '1010', 41, 1),
(8, 'あ', 'fujitsuba1214@gmail.com', '1010', 41, 2),
(9, 'い', 'fujitsuba1214@gmail.com', '1010', 41, 2),
(10, 'ｃ', 'fujitsuba1214@gmail.com', '1010', 40, 1),
(11, 'ｄ', 'fujitsuba1214@gmail.com', '1010', 40, 3),
(12, 'e', 'fujitsuba1214@gmail.com', '1010', 40, 2),
(13, 'f', 'fujitsuba1214@gmail.com', '1010', 40, 4),
(14, 'g', 'fujitsuba1214@gmail.com', '1010', 40, 2),
(15, 'h', 'fujitsuba1214@gmail.com', '1010', 40, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `tate` int(11) NOT NULL,
  `yoko` int(11) NOT NULL,
  `method` int(11) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `tate`, `yoko`, `method`, `image`, `address`) VALUES
(1, '流山北運動会', '2021-12-01', 10, 1, 1, '', 'hoge@gmail.com'),
(24, '柏運動会', '2022-01-21', 6, 1, 1, '', 'piyo@gmail.com'),
(25, '柏運動会', '2022-01-20', 10, 1, 1, 'a.jpg', 'hoge@gmail.com'),
(26, '流山花火', '2022-01-14', 10, 1, 1, '', 'hoge@gmail.com'),
(27, '馬橋高校運動会', '2022-01-20', 9, 1, 1, '', 'hoge@gmail.com'),
(28, '松戸運動会', '2022-01-27', 12, 12, 1, 'koba.img', 'hoge@gmail.com'),
(29, 'a', '2022-02-18', 8, 9, 1, 'cat1.jpg', 'hoge@gmail.com'),
(30, 'a', '2022-02-18', 8, 9, 1, 'cat1.jpg', 'hoge@gmail.com'),
(31, 'a', '2022-02-18', 6, 8, 1, '', 'hoge@gmail.com'),
(32, 'a', '2022-02-18', 6, 8, 1, '', 'hoge@gmail.com'),
(33, 'a', '2022-02-17', 5, 8, 1, 'cat1.jpg', 'hoge@gmail.com'),
(34, 'a', '2022-02-18', 2, 2, 1, '', 'hoge@gmail.com'),
(35, 'a', '2022-02-18', 2, 2, 1, '', 'hoge@gmail.com'),
(36, 'a', '2022-02-18', 2, 2, 1, '', 'hoge@gmail.com'),
(37, 'イベント', '2022-02-25', 3, 3, 1, '', 'hoge@gmail.com'),
(38, '抽選お試し', '2022-02-25', 5, 5, 2, '', 'hoge@gmail.com'),
(39, 'こば', '2022-02-17', 6, 6, 2, '', 'fujitsuba1214@gmail.com'),
(40, 'koba', '2022-02-18', 2, 2, 2, '', 'fujitsuba1214@gmail.com'),
(41, '藤代翔', '2022-02-09', 2, 2, 2, '', 'fujitsuba1214@gmail.com');

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
(25, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa', 28, 7),
(26, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa', 28, 7),
(27, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa', 28, 7),
(28, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa', 28, 7),
(29, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa', 28, 7),
(30, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa', 28, 7),
(31, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa', 28, 7),
(32, 'コバヤシタイガ', 'takei@mail.com', 'aaa', 1, 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `mail` varchar(256) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `userlist`
--

INSERT INTO `userlist` (`id`, `name`, `mail`, `pass`) VALUES
(1, 'ほげ', 'hoge@gmail.com', 'hogepass'),
(2, 'ふじ', 'fuji@gmail.com', 'fujipass'),
(3, 'ふじしろ', 'fuji@gmail.com', 'fujipass'),
(4, 'ふじしろ', '', 'fujipass'),
(5, '藤代翔', '', 'fujipass'),
(6, 'コバヤシタイガ', '', 'fujipass'),
(7, 'コバヤシタイガ', '', 'a'),
(8, 'コバヤシタイガ', '', 'a'),
(9, 'コバヤシタイガ', '', 'a'),
(10, 'jk大好き小林', 'piyo@gmail.com', 'a'),
(11, 'jk', '', 'aa'),
(12, 'コバヤシタイガ', 'takei@mail.com', 'aaa'),
(13, 'コバヤシタイガ', 'hoge@gmail.com', 'aaa'),
(14, 'コバヤシタイガ', 'takei@mail.com', 'aaa'),
(15, 'コバヤシタイガ', 'hoge@gmail.com', 'asd'),
(16, 'コバヤシタイガ', 'takei@mail.com', 'aaa'),
(17, 'コバヤシタイガ', 'takei@mail.com', 'aaa'),
(18, 'コバヤシタイガ', 'takei@mail.com', 'aaaaaa'),
(19, 'コバヤシタイガ', 'takei@mail.com', 'aaa'),
(20, 'コバヤシタイガ', 'takei@mail.com', 'aaa'),
(21, 'コバヤシタイガ', 'hoge@gmail.com', 'aaa'),
(22, 'コバヤシタイガ', 'hoge@gmail.com', 'aaa'),
(23, 'コバヤシタイガ', 'taiga.200201110@gmail.com', 'aaa'),
(24, 'コバヤシタイガ', 'takei@mail.com', 'aaa'),
(25, 'a', 'hoge@gmail.com', 'aaa'),
(26, 'hjk', 'hoge@gmail.com', 'ghj'),
(27, 'コバヤシタイガ', 'poyo@gmail.com', 'aaa'),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, 'あ', 'hoge@gmail.com', 'aaa'),
(32, 'a', 'hoge@gmail.com', 'aaa'),
(33, 'a', 'hoge@gmail.com', 'aaa'),
(34, 'コバヤシタイガ', 'hoge@gmail.com', 'aaa'),
(35, 'コバヤシタイガ', 'hoge@gmail.com', 'aaa'),
(36, '藤代翔', 'hoge@gmail.com', 'hogepass'),
(37, '藤代翔', 'hoge@gmail.com', 'hogepass'),
(38, '藤代翔', 'fujitsuba1214@gmail.com', '1010'),
(39, '藤代翔', 'fujitsuba1214@gmail.com', '1010'),
(40, '藤代翔', 'fujitsuba1214@gmail.com', 'aaaa'),
(41, '藤代翔', 'fujitsuba1214@gmail.com', 'aaaa'),
(42, 'ふじ', 'fujitsuba1214@gmail.com', '1010'),
(43, 'ふじつば', 'fujitsuba1214@gmail.com', '1010'),
(44, 'q', 'fujitsuba1214@gmail.com', '1010'),
(45, '藤代翔', 'fujitsuba1214@gmail.com', '1010'),
(46, '', '', ''),
(47, 'ふじつば', 'fujitsuba1214@gmail.com', '1010'),
(48, '藤代翔', 'fujitsuba1214@gmail.com', '1010'),
(49, 'こば', 'fujitsuba1214@gmail.com', '1010'),
(50, 'あ', 'fujitsuba1214@gmail.com', '1010'),
(51, 'い', 'fujitsuba1214@gmail.com', '1010'),
(52, 'ｃ', 'fujitsuba1214@gmail.com', '1010'),
(53, 'ｄ', 'fujitsuba1214@gmail.com', '1010'),
(54, 'e', 'fujitsuba1214@gmail.com', '1010'),
(55, 'f', 'fujitsuba1214@gmail.com', '1010'),
(56, 'g', 'fujitsuba1214@gmail.com', '1010'),
(57, 'h', 'fujitsuba1214@gmail.com', '1010');

-- --------------------------------------------------------

--
-- テーブルの構造 `zaseki`
--

CREATE TABLE `zaseki` (
  `id` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `sekiban` int(11) NOT NULL,
  `tukaeru` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `zaseki`
--

INSERT INTO `zaseki` (`id`, `eventId`, `sekiban`, `tukaeru`) VALUES
(8, 29, 1, 0),
(9, 29, 2, 0),
(10, 29, 3, 0),
(11, 29, 4, 0),
(12, 37, 1, 1),
(13, 37, 2, 1),
(14, 37, 3, 0),
(15, 37, 4, 1),
(16, 37, 5, 0),
(17, 37, 6, 1),
(18, 37, 7, 1),
(19, 37, 8, 0),
(20, 37, 9, 1),
(21, 38, 1, 1),
(22, 38, 2, 1),
(23, 38, 3, 1),
(24, 38, 4, 1),
(25, 38, 5, 1),
(26, 38, 6, 1),
(27, 38, 7, 1),
(28, 38, 8, 1),
(29, 38, 9, 1),
(30, 38, 10, 1),
(31, 38, 11, 1),
(32, 38, 12, 1),
(33, 38, 13, 1),
(34, 38, 14, 1),
(35, 38, 15, 1),
(36, 38, 16, 1),
(37, 38, 17, 1),
(38, 38, 18, 1),
(39, 38, 19, 1),
(40, 38, 20, 1),
(41, 38, 21, 1),
(42, 38, 22, 1),
(43, 38, 23, 1),
(44, 38, 24, 1),
(45, 38, 25, 1),
(46, 39, 1, 1),
(47, 39, 2, 1),
(48, 39, 3, 1),
(49, 39, 4, 1),
(50, 39, 5, 1),
(51, 39, 6, 1),
(52, 39, 7, 1),
(53, 39, 8, 1),
(54, 39, 9, 1),
(55, 39, 10, 1),
(56, 39, 11, 1),
(57, 39, 12, 1),
(58, 39, 13, 1),
(59, 39, 14, 1),
(60, 39, 15, 1),
(61, 39, 16, 1),
(62, 39, 17, 1),
(63, 39, 18, 1),
(64, 39, 19, 1),
(65, 39, 20, 1),
(66, 39, 21, 1),
(67, 39, 22, 1),
(68, 39, 23, 1),
(69, 39, 24, 1),
(70, 39, 25, 1),
(71, 39, 26, 1),
(72, 39, 27, 1),
(73, 39, 28, 1),
(74, 39, 29, 1),
(75, 39, 30, 1),
(76, 39, 31, 1),
(77, 39, 32, 1),
(78, 39, 33, 1),
(79, 39, 34, 1),
(80, 39, 35, 1),
(81, 39, 36, 1),
(82, 40, 1, 1),
(83, 40, 2, 1),
(84, 40, 3, 1),
(85, 40, 4, 1),
(86, 41, 1, 1),
(87, 41, 2, 1),
(88, 41, 3, 1),
(89, 41, 4, 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `chuusen`
--
ALTER TABLE `chuusen`
  ADD PRIMARY KEY (`id`);

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
-- テーブルのインデックス `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `zaseki`
--
ALTER TABLE `zaseki`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `chuusen`
--
ALTER TABLE `chuusen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルのAUTO_INCREMENT `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- テーブルのAUTO_INCREMENT `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- テーブルのAUTO_INCREMENT `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- テーブルのAUTO_INCREMENT `zaseki`
--
ALTER TABLE `zaseki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
