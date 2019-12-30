-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 03:44 PM
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
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'vest-xanh-2-khuy-detail.jpg', 6, NULL, NULL),
(2, 'vest-ke-ghi-detail.jpg', 7, NULL, NULL),
(3, 'vest-nam-xanh-tim-detail.jpg', 8, NULL, NULL),
(4, 'vest-nau-2019-detail.jpg', 9, NULL, NULL),
(5, 'vest-nam-xanh-ke-cam-detail.jpg', 10, NULL, NULL),
(6, 'vest-xanh-nhu-1-khuy-detail.jpg', 11, NULL, NULL),
(7, 'vest-nam-xanh-sam-detail.jpg', 12, NULL, NULL),
(8, 'vest-nam-han-quoc-xanh-sang-detail.jpg', 13, NULL, NULL),
(9, 'ao-da-ghi-xuoc-detail.jpg', 14, NULL, NULL),
(10, 'ao-da-bo-man-detail.jpg', 15, NULL, NULL),
(11, 'ao-da-nau-xuoc-detail.jpg', 16, NULL, NULL),
(12, 'ao-da-nau-nhat-detail.jpg', 17, NULL, NULL),
(13, 'ao-len-den-chi-xanh-vang-detail.jpg', 18, NULL, NULL),
(14, 'den-co-lo-detail.jpg', 19, NULL, NULL),
(15, 'den-ke-ngang-to-detail.jpg', 20, NULL, NULL),
(16, 'den-ke-xanh-ngang-detail.jpg', 21, NULL, NULL),
(17, 'so-mi-bbr-cao-cap-nau-sang-detail.jpg', 22, NULL, NULL),
(18, 'ao-so-mi-cao-cap-ghi-van-vang-detail.jpg', 23, NULL, NULL),
(19, 'so-mi-cao-cap-ke-xanh-detail.jpg', 24, NULL, NULL),
(20, 'so-mi-den-nam-detail.jpg', 25, NULL, NULL),
(21, 'quan-au-cao-cap-xanh-anh-detail.jpg', 26, NULL, NULL),
(22, 'quan-au-cao-cap-xanh-reu-detail.jpg', 27, NULL, NULL),
(23, 'quan-au-cao-cap-ke-nho-detail.jpg', 28, NULL, NULL),
(24, 'quan-au-han-quoc-ghi-sang-177-detail.jpg', 29, NULL, NULL),
(25, 'giay-da-nam-cham-nho-tag-gucci-detail.jpg', 30, NULL, NULL),
(26, 'giay-da-nam-den-tag-trang-detail.jpg', 31, NULL, NULL),
(27, 'giay-da-nam-thung-kep-detail.jpg', 32, NULL, NULL),
(28, 'giay-da-nam-nau-thung-kep-detail.jpg', 33, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
