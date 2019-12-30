-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 03:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'VEST', 'vest', 20, 0, 'vest', 'VEST Nam', '2019-11-17 13:16:00', '2019-11-17 13:16:00'),
(2, 'VEST Công sở', 'vest-cong-so', 20, 1, 'vest cong so', 'VEST công sở', '2019-11-17 13:17:45', '2019-11-17 13:17:45'),
(3, 'VEST Cưới', 'vest-cuoi', 20, 1, 'vest cuoi', 'VEST cưới', '2019-11-17 13:18:13', '2019-11-17 13:18:13'),
(4, 'Áo', 'ao', 20, 0, 'ao', 'Áo nam', '2019-11-17 13:19:55', '2019-11-17 13:19:55'),
(5, 'Áo len', 'ao-len', 20, 4, 'ao len', 'Áo len nam', '2019-11-17 13:20:24', '2019-11-17 13:20:24'),
(6, 'Áo da', 'ao-da', 20, 4, 'ao da', 'Áo da nam', '2019-11-17 13:20:38', '2019-11-17 13:20:38'),
(7, 'Áo sơ mi', 'ao-so-mi', 20, 4, 'so mi', 'Áo sơ mi nam', '2019-11-17 13:21:07', '2019-11-17 13:21:07'),
(8, 'Quần', 'quan', 20, 0, 'quan', 'Quần nam', '2019-11-17 13:22:28', '2019-11-17 13:22:28'),
(9, 'Quần âu', 'quan-au', 20, 8, 'quan au', 'Quần âu nam', '2019-11-17 13:22:51', '2019-11-17 13:22:51'),
(10, 'Giày', 'giay', 20, 0, 'giay', 'GIay', '2019-11-17 13:23:26', '2019-11-17 13:23:26'),
(11, 'Giày da', 'giay-da', 20, 10, 'giay da', 'Giày da nam', '2019-11-17 13:23:42', '2019-11-17 13:23:42'),
(12, 'VEST Công sở màu đỏ', 'vest-cong-so-mau-do', 20, 2, 'vest', 'VEST Công sở màu đỏ', '2019-11-24 07:30:08', '2019-11-24 07:30:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
