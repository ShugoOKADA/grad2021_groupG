-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-11-19 06:08:39
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
(3, '柏中学校', '2021-11-20', 110, 1, 'test_2image.jpg'),
(4, '竹井一馬', '2021-11-11', 1, 2, 'test.jpg'),
(5, '映画ドラえもん のび太の新恐竜', '2021-11-26', 1, 1, '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
