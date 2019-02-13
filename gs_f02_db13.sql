-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2019 at 03:33 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_f02_db13`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(1, '医療4.0（第4次産業革命時代の医療）', 'https://www.amazon.co.jp/%E5%8C%BB%E7%99%824-0-%E7%AC%AC4%E6%AC%A1%E7%94%A3%E6%A5%AD%E9%9D%A9%E5%91%BD%E6%99%82%E4%BB%A3%E3%81%AE%E5%8C%BB%E7%99%82-%E5%8A%A0%E8%97%A4-%E6%B5%A9%E6%99%83/dp/4822256103', 'ギルドの平下さんオススメの書籍。デジハリ客員教授の加藤先生が著者。', '2019-02-02 17:38:30'),
(3, '一切なりゆき 樹木希林のことば (文春新書)', 'https://www.amazon.co.jp/%E4%B8%80%E5%88%87%E3%81%AA%E3%82%8A%E3%82%86%E3%81%8D-%E6%A8%B9%E6%9C%A8%E5%B8%8C%E6%9E%97%E3%81%AE%E3%81%93%E3%81%A8%E3%81%B0-%E6%96%87%E6%98%A5%E6%96%B0%E6%9B%B8-%E6%A8%B9%E6%9C%A8-%E5%B8%8C%E6%9E%97/dp/4166611941/ref=sr_1_1?ie=UTF8&qid=1549169726&sr=8-1&keywords=%E4%B8%80%E5%88%87%E6%88%90%E3%82%8A%E8%A1%8C%E3%81%8D+%E6%A8%B9%E6%9C%A8%E5%B8%8C%E6%9E%97', '', '2019-02-03 13:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `myakushin_table`
--

CREATE TABLE `myakushin_table` (
  `id` int(12) NOT NULL,
  `shurui` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `henka` text COLLATE utf8_unicode_ci,
  `syndrome` text COLLATE utf8_unicode_ci,
  `therapy` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `myakushin_table`
--

INSERT INTO `myakushin_table` (`id`, `shurui`, `name`, `henka`, `syndrome`, `therapy`, `indate`, `user_id`) VALUES
(13, '脈位の異常ーテスト', '沈脈', '軽取・中取ではあまりはっきり触れず、重按すると明瞭に触れる脈である', '裏実、裏虚（陽気不足）', '', '2019-02-06 19:52:17', 0),
(16, '脈位の異常', '伏脈', '軽取・中取ではあまりはっきり触れず、重按すると明瞭に触れる脈である', '邪閉・強極（激しい疼痛）、厥証（強い嘔吐・下痢などの後や脳卒中発作）', '', '2019-02-06 19:59:42', 0),
(17, '至脈の異常', '遅脈', '脈拍数が1分間60回に満たないものである。沈脈を呈することが多い。（スポーツマンで病状が無ければ病脈ではない）', '？？', '', '2019-02-06 20:24:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(12) NOT NULL,
  `task` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `indate`) VALUES
(12, '決起会', '2019-02-04', '', '2019-02-02 16:29:24'),
(13, '卒業制作', '2019-05-17', '', '2019-02-02 16:34:36'),
(14, 'gs_f01_卒業式', '2019-02-02', '', '2019-02-02 16:35:12'),
(15, '開発合宿', '2019-02-10', '頑張る！', '2019-02-02 16:37:53'),
(17, 'ガッキーBD', '2019-02-09', '', '2019-02-09 14:42:40'),
(18, 'CICEI☆BD', '2019-09-05', '', '2019-02-09 17:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(3, 'SHIRINンンン', 'sk', '19871102', 19871102, 19871102),
(4, 'SHIRIN', 'sk', '19871102', 19871102, 19871102),
(5, 'SHIRIN', 'sk', '19871102', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myakushin_table`
--
ALTER TABLE `myakushin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `myakushin_table`
--
ALTER TABLE `myakushin_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
