-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 04:30 AM
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
-- Database: `webbanhangproject3`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `totalPrice`, `created_at`, `updated_at`) VALUES
(1, 11750000, '2019-12-19 21:30:36', '2019-12-19 21:30:36'),
(2, 11750000, '2019-12-19 21:38:31', '2019-12-19 21:38:31'),
(3, 11750000, '2019-12-19 21:39:26', '2019-12-19 21:39:26'),
(4, 11750000, '2019-12-19 21:49:48', '2019-12-19 21:49:48'),
(5, 3100000, '2019-12-24 23:52:16', '2019-12-24 23:52:16'),
(6, 3100000, '2019-12-24 23:55:43', '2019-12-24 23:55:43'),
(7, 3100000, '2019-12-24 23:57:04', '2019-12-24 23:57:04'),
(8, 3100000, '2019-12-24 23:57:45', '2019-12-24 23:57:45'),
(9, 3100000, '2019-12-24 23:58:09', '2019-12-24 23:58:09'),
(10, 3100000, '2019-12-24 23:58:55', '2019-12-24 23:58:55'),
(11, 3300000, '2019-12-25 01:00:19', '2019-12-25 01:00:19'),
(12, 2800000, '2019-12-26 02:22:40', '2019-12-26 02:22:40'),
(13, 11200000, '2019-12-28 03:00:32', '2019-12-28 03:00:32'),
(14, 3700000, '2019-12-28 03:11:43', '2019-12-28 03:11:43'),
(15, 6200000, '2019-12-28 08:03:07', '2019-12-28 08:03:07'),
(16, 6200000, '2019-12-28 08:03:39', '2019-12-28 08:03:39'),
(17, 6200000, '2019-12-28 08:04:49', '2019-12-28 08:04:49'),
(18, 6200000, '2019-12-28 08:05:40', '2019-12-28 08:05:40'),
(19, 6200000, '2019-12-28 08:13:34', '2019-12-28 08:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`id`, `cart_id`, `product_id`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 56, 1, '2019-12-19 21:30:36', '2019-12-19 21:30:36'),
(2, 2, 20, 56, 1, '2019-12-19 21:38:31', '2019-12-19 21:38:31'),
(3, 3, 7, 50, 3, '2019-12-19 21:39:26', '2019-12-19 21:39:26'),
(4, 3, 7, 48, 1, '2019-12-19 21:39:26', '2019-12-19 21:39:26'),
(5, 3, 20, 56, 1, '2019-12-19 21:39:26', '2019-12-19 21:39:26'),
(6, 4, 7, 50, 3, '2019-12-19 21:49:48', '2019-12-19 21:49:48'),
(7, 4, 7, 48, 1, '2019-12-19 21:49:48', '2019-12-19 21:49:48'),
(8, 4, 20, 56, 1, '2019-12-19 21:49:48', '2019-12-19 21:49:48'),
(9, 5, 33, 48, 1, '2019-12-24 23:52:16', '2019-12-24 23:52:16'),
(10, 5, 15, 50, 1, '2019-12-24 23:52:16', '2019-12-24 23:52:16'),
(11, 6, 33, 48, 1, '2019-12-24 23:55:43', '2019-12-24 23:55:43'),
(12, 6, 15, 50, 1, '2019-12-24 23:55:43', '2019-12-24 23:55:43'),
(13, 7, 33, 48, 1, '2019-12-24 23:57:04', '2019-12-24 23:57:04'),
(14, 7, 15, 50, 1, '2019-12-24 23:57:04', '2019-12-24 23:57:04'),
(15, 8, 33, 48, 1, '2019-12-24 23:57:45', '2019-12-24 23:57:45'),
(16, 8, 15, 50, 1, '2019-12-24 23:57:45', '2019-12-24 23:57:45'),
(17, 9, 33, 48, 1, '2019-12-24 23:58:09', '2019-12-24 23:58:09'),
(18, 9, 15, 50, 1, '2019-12-24 23:58:09', '2019-12-24 23:58:09'),
(19, 10, 33, 48, 1, '2019-12-24 23:58:55', '2019-12-24 23:58:55'),
(20, 10, 15, 50, 1, '2019-12-24 23:58:55', '2019-12-24 23:58:55'),
(21, 11, 13, 50, 1, '2019-12-25 01:00:19', '2019-12-25 01:00:19'),
(22, 11, 19, 54, 1, '2019-12-25 01:00:19', '2019-12-25 01:00:19'),
(23, 12, 12, 52, 1, '2019-12-26 02:22:40', '2019-12-26 02:22:40'),
(24, 13, 12, 48, 1, '2019-12-28 03:00:32', '2019-12-28 03:00:32'),
(25, 13, 7, 48, 3, '2019-12-28 03:00:32', '2019-12-28 03:00:32'),
(26, 14, 15, 48, 1, '2019-12-28 03:11:43', '2019-12-28 03:11:43'),
(27, 14, 29, 32, 1, '2019-12-28 03:11:43', '2019-12-28 03:11:43'),
(28, 14, 33, 42, 1, '2019-12-28 03:11:43', '2019-12-28 03:11:43'),
(29, 18, 6, 48, 2, '2019-12-28 08:05:40', '2019-12-28 08:05:40');

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
(1, 'VEST', 'vest', 20, 0, 'vest', 'VEST Nam', '2019-11-17 06:16:00', '2019-11-17 06:16:00'),
(2, 'VEST Công sở', 'vest-cong-so', 20, 1, 'vest cong so', 'VEST công sở', '2019-11-17 06:17:45', '2019-11-17 06:17:45'),
(3, 'VEST Cưới', 'vest-cuoi', 20, 1, 'vest cuoi', 'VEST cưới', '2019-11-17 06:18:13', '2019-11-17 06:18:13'),
(4, 'Áo', 'ao', 20, 0, 'ao', 'Áo nam', '2019-11-17 06:19:55', '2019-11-17 06:19:55'),
(5, 'Áo len', 'ao-len', 20, 4, 'ao len', 'Áo len nam', '2019-11-17 06:20:24', '2019-11-17 06:20:24'),
(6, 'Áo da', 'ao-da', 20, 4, 'ao da', 'Áo da nam', '2019-11-17 06:20:38', '2019-11-17 06:20:38'),
(7, 'Áo sơ mi', 'ao-so-mi', 20, 4, 'so mi', 'Áo sơ mi nam', '2019-11-17 06:21:07', '2019-11-17 06:21:07'),
(8, 'Quần', 'quan', 20, 0, 'quan', 'Quần nam', '2019-11-17 06:22:28', '2019-11-17 06:22:28'),
(9, 'Quần âu', 'quan-au', 20, 8, 'quan au', 'Quần âu nam', '2019-11-17 06:22:51', '2019-11-17 06:22:51'),
(10, 'Giày', 'giay', 20, 0, 'giay', 'GIay', '2019-11-17 06:23:26', '2019-11-17 06:23:26'),
(11, 'Giày da', 'giay-da', 20, 10, 'giay da', 'Giày da nam', '2019-11-17 06:23:42', '2019-11-17 06:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_cart_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` int(11) NOT NULL,
  `status_payment` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `note` text CHARACTER SET utf8 DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `user_cart_id`, `name`, `street`, `district`, `city`, `phone`, `email`, `payment`, `status_payment`, `status`, `note`, `sale_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nguyen Duy Su', 'So nha 35 ngo 80 Kim giang', 'Dai Kim', 'Ha Noi', '0962302616', 'su.nguyenduy.nb@gmail.com', 0, 0, 0, '', 1, '2019-12-19 21:38:31', '2019-12-25 00:55:20'),
(2, 2, 'Nguyen Duy Su', 'So nha 35 ngo 80 Kim giang', 'Dai Kim', 'Ha Noi', '0962302616', 'su.nguyenduy.nb@gmail.com', 0, 1, 0, '', 2, '2019-12-19 21:39:26', '2019-12-24 23:47:50'),
(3, 3, 'Nguyen Duy Su', 'So nha 35 ngo 80 Kim giang', 'Dai Kim', 'Ha Noi', '0962302616', 'su@gmail.com', 0, 0, 1, '', 1, '2019-12-19 21:49:48', '2019-12-25 00:55:01'),
(4, 9, 'Diệp Vấn', 'So nha 35 ngo 80 Kim giang', 'Dai Kim', 'Ha Noi', '123456789', 'dinh@gmail.com', 0, 1, 2, NULL, 2, '2019-12-24 23:58:55', '2019-12-28 06:45:19'),
(5, 10, 'Nguyen Duy Su', 'So nha 35 ngo 80 Kim giang', 'Dai Kim', 'Hà Nội', '0962302616', 'su.nguyenduy.nb@gmail.com', 0, 0, 1, NULL, 2, '2019-12-25 01:00:19', '2019-12-28 06:46:31'),
(6, 11, 'Nguyễn Duy Sự', 'So nha 35 ngo 80 Kim giang', 'Hoang Mai', 'Ha Noi', '0962302616', 'su.nguyenduy.nb@gmail.com', 0, 0, 0, NULL, NULL, '2019-12-26 02:22:41', '2019-12-26 02:22:41'),
(7, 12, 'Dinh ngoc dinh', 'So nha 35 ngo 80 Kim giang', 'Hoang Mai', 'Hà Nội', '0123456789', 'dinh@gmail.com', 0, 0, 0, NULL, NULL, '2019-12-28 03:00:32', '2019-12-28 03:00:32'),
(8, 13, 'Dinh ngoc dinh', 'So nha 35 ngo 80 Kim giang', 'Hoang Mai', 'Hà Nội', '0987654321', 'dinh@gmail.com', 0, 0, 0, NULL, NULL, '2019-12-28 03:11:43', '2019-12-28 03:11:43'),
(9, 14, 'Le Dinh Hai', 'So nha 35 ngo 80 Kim giang', 'Hoang Mai', 'Hà Nội', '123456789', 'haild@gmail.com', 0, 0, 0, NULL, NULL, '2019-12-28 08:05:40', '2019-12-28 08:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_13_133035_create_cates_table', 1),
(5, '2019_10_13_133700_create_products_table', 1),
(6, '2019_10_13_134427_create_product_images_table', 1),
(7, '2019_11_18_035907_create_product_size_quantity_table', 1),
(8, '2019_12_19_150336_create_carts_table', 1),
(9, '2019_12_19_150607_create_user_cart_table', 1),
(10, '2019_12_19_150728_create_cart_product_table', 1),
(11, '2019_12_20_024805_create_deals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(6, 'ÁO VEST CÔNG SỞ ĐẸP XANH DƯƠNG 2 KHUY', 'ao-vest-cong-so-dep-xanh-duong-2-khuy', 3100000, '<h1>ÁO VEST CÔNG SỞ ĐẸP XANH DƯƠNG 2 KHUY</h1>', '', 'vest-xanh-2-khuy.jpg', 'vcs01', 'Áo vest công sở xanh dương 2 khuy may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 3.100.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest công sở xanh dương 2 khuy có thể mặc trong các', 1, 2, '2019-11-17 14:48:44', '2019-11-17 14:48:44'),
(7, 'ÁO VEST CÔNG SỞ KẺ GHI', 'ao-vest-cong-so-ke-ghi', 2800000, '<h1>ÁO VEST CÔNG SỞ KẺ GHI</h1>', '', 'vest-ke-ghi.jpg', 'vcs02', 'Áo vest công sở kẻ ghi may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.800.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest công sở kẻ ghi có thể mặc trong các buổi tiệc quan trọng,', 1, 2, '2019-11-17 15:00:22', '2019-11-17 15:00:22'),
(8, 'ÁO VEST CÔNG SỞ NAM XANH TÍM THAN', 'ao-vest-cong-so-nam-xanh-tim-than', 2800000, '<h1>ÁO VEST CÔNG SỞ NAM XANH TÍM THAN</h1>', '', 'vest-nam-xanh-tim.jpg', 'vcs03', 'Áo vest công sở nam xanh tím than may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest công sở nam xanh tím than có thể mặc trong các', 1, 2, '2019-11-17 15:03:28', '2019-11-17 15:03:28'),
(9, 'ÁO VEST NAM 2019 NÂU MỚI', 'ao-vest-nam-2019-nau-moi', 2400000, '<h1>ÁO VEST NAM 2019 NÂU MỚI</h1>', '', 'vest-nau-2019.jpg', 'vcs04', 'Áo vest nam 2019 nâu mới may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam 2019 nâu mới có thể mặc trong các buổi tiệc quan tr', 1, 2, '2019-11-17 15:05:51', '2019-11-17 15:05:51'),
(10, 'ÁO VEST NAM ĐẸP XANH KẺ CAM MỚI', 'ao-vest-nam-dep-xanh-ke-cam-moi', 2800000, '<h1>ÁO VEST NAM ĐẸP XANH KẺ CAM MỚI</h1>', '', 'vest-xanh-ke-cam.jpg', 'vc01', 'Áo vest nam đẹp xanh kẻ cam mới may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam đẹp xanh kẻ cam mới có thể mặc trong các buổ', 1, 3, '2019-11-17 15:49:38', '2019-11-17 15:49:38'),
(11, 'ÁO VEST ĐẸP XANH NHŨ 1 KHUY', 'ao-vest-dep-xanh-nhu-1-khuy', 2800000, '<h1>ÁO VEST ĐẸP XANH NHŨ 1 KHUY</h1>', '', 'vest-xanh-nhu-1-khuy.jpg', 'vc02', 'Áo vest đẹp xanh nhũ 1 khuy may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest đẹp xanh nhũ 1 khuy có thể mặc trong các buổi tiệc q', 1, 3, '2019-11-21 01:30:15', '2019-11-21 01:30:15'),
(12, 'ÁO VEST NAM XANH SẪM', 'ao-vest-nam-xanh-sam', 2800000, '<h1>ÁO VEST NAM XANH SẪM</h1>', '', 'vest-nam-xanh-sam.jpg', 'vc03', 'Áo vest nam xanh sẫm may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam xanh sẫm có thể mặc trong các buổi tiệc quan trọng, đi ', 1, 3, '2019-11-21 01:34:02', '2019-11-21 01:34:02'),
(13, 'ÁO VEST NAM HÀN QUỐC XANH SÁNG', 'ao-vest-nam-han-quoc-xanh-sang', 2800000, '<h1>ÁO VEST NAM HÀN QUỐC XANH SÁNG</h1>', '', 'vest-nam-han-quoc-xanh-sang.jpg', 'vc04', 'Áo vest nam Hàn Quốc xanh sáng may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Hàn Quốc xanh sáng có thể mặc trong các buổi ', 1, 3, '2019-11-21 01:36:13', '2019-11-21 01:36:13'),
(14, 'ÁO DA GHI XƯỚC', 'ao-da-ghi-xuoc', 1500000, '<p>&nbsp;ÁO DA GHI XƯỚC</p>', '', 'ao-da-ghi-xuoc.jpg', 'ad01', '', 1, 6, '2019-11-21 01:43:39', '2019-11-21 01:43:39'),
(15, 'ÁO DA BÒ MÀU MẬN', 'ao-da-bo-mau-man', 1500000, '<p>ÁO DA BÒ MÀU MẬN</p>', '', 'ao-da-bo-man.jpg', 'ad02', '', 1, 6, '2019-11-21 01:46:27', '2019-11-21 01:46:27'),
(16, 'ÁO DA NÂU XƯỚC', 'ao-da-nau-xuoc', 1500000, '<p>ÁO DA NÂU XƯỚC</p>', '', 'ao-da-nau-xuoc.jpg', 'ad03', '', 1, 6, '2019-11-21 01:48:25', '2019-11-21 01:48:25'),
(17, 'ÁO DA NÂU NHẠT', 'ao-da-nau-nhat', 1500000, '<p>ÁO DA NÂU NHẠT</p>', '', 'ao-da-nau-nhat.jpg', 'ad04', '', 1, 6, '2019-11-21 01:50:16', '2019-11-21 01:50:16'),
(18, 'ĐEN CHỈ XANH-VÀNG', 'den-chi-xanh-vang', 650000, '<h1>ĐEN CHỈ XANH-VÀNG</h1>', '', 'ao-len-den-chi-xanh-vang.jpg', 'len01', '', 1, 5, '2019-11-21 01:53:46', '2019-11-21 01:53:46'),
(19, 'ĐEN CỔ LỌ', 'den-co-lo', 500000, '<p>ĐEN CỔ LỌ</p>', '', 'den-co-lo.jpg', 'AL02', '', 1, 5, '2019-11-21 01:56:48', '2019-11-21 01:56:48'),
(20, 'ĐEN KẺ NGANG TO', 'den-ke-ngang-to', 550000, '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:24px; letter-spacing:3px; text-transform:uppercase\">ĐEN KẺ NGANG TO</span></p>', '', 'den-ke-ngang-to.jpg', 'AL03', '', 1, 5, '2019-11-21 01:58:56', '2019-11-21 01:58:56'),
(21, 'ĐEN KẺ XANH NGANG', 'den-ke-xanh-ngang', 550000, '<h1>ĐEN KẺ XANH NGANG</h1>', '', 'den-ke-xanh-ngang.jpg', 'AL04', '', 1, 5, '2019-11-21 02:00:24', '2019-11-21 02:00:24'),
(22, 'ÁO SƠ MI BBR CAO CẤP NÂU SÁNG KẺ', 'ao-so-mi-bbr-cao-cap-nau-sang-ke', 700000, '<h1>ÁO SƠ MI BBR CAO CẤP NÂU SÁNG KẺ</h1>', '', 'so-mi-bbr-cao-cap-nau-sang.jpg', 'SM01', 'Áo sơ mi BBR cao cấp nâu sáng kẻ tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi BBR cao cấp nâu sáng kẻ sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù ', 1, 7, '2019-11-21 02:04:11', '2019-11-21 02:04:11'),
(23, 'ÁO SƠ MI CAO CẤP GHI VÂN VÀNG', 'ao-so-mi-cao-cap-ghi-van-vang', 650000, '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:24px; letter-spacing:3px; text-transform:uppercase\">ÁO SƠ MI CAO CẤP GHI VÂN VÀNG</span></p>', '', 'ao-so-mi-cao-cap-ghi-van-vang.jpg', 'SM02', 'Áo sơ mi cao cấp ghi vân vàng tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi cao cấp ghi vân vàng sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù hạn ch', 1, 7, '2019-11-21 02:07:38', '2019-11-21 02:07:38'),
(24, 'ÁO SƠ MI CAO CẤP KẺ XANH', 'ao-so-mi-cao-cap-ke-xanh', 500000, '<h1>ÁO SƠ MI CAO CẤP KẺ XANH</h1>', '', 'so-mi-cao-cap-ke-xanh.jpg', 'SM03', 'Áo sơ mi cao cấp kẻ xanh tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi cao cấp kẻ xanh sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù hạn chế nhăn nhà', 1, 7, '2019-11-21 02:09:05', '2019-11-21 02:09:05'),
(25, 'ÁO SƠ MI ĐEN NAM', 'ao-so-mi-den-nam', 500000, '<h1>ÁO SƠ MI ĐEN NAM</h1>', '', 'so-mi-den-nam.jpg', 'SM04', 'Áo sơ mi nam đen Adam Store tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi nam đen Adam Store sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù hạn chế nh', 1, 7, '2019-11-21 02:11:27', '2019-11-21 02:11:27'),
(26, 'QUẦN ÂU CAO CẤP XANH ÁNH', 'quan-au-cao-cap-xanh-anh', 700000, '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:24px; letter-spacing:3px; text-transform:uppercase\">QUẦN ÂU CAO CẤP XANH ÁNH</span></p>', '', 'quan-au-cao-cap-xanh-anh.jpg', 'QU01', 'Quần âu Adam cao cấp xanh ánh may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu Adam cao cấp xanh ánh kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày tây,... phù hợp trong các buổi tiệc quan trọng, đi làm công sở hoặc đi ', 1, 9, '2019-11-21 02:14:32', '2019-11-21 02:14:32'),
(27, 'QUẦN ÂU CAO CẤP XANH RÊU', 'quan-au-cao-cap-xanh-reu', 600000, '<h1>QUẦN ÂU CAO CẤP XANH RÊU</h1>', '', 'quan-au-cao-cap-xanh-reu.jpg', 'QU02', '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:14px\">Quần âu Adam cao cấp xanh rêu may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu Adam cao cấp xanh rêu kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày', 1, 9, '2019-11-21 02:16:35', '2019-11-21 02:16:35'),
(28, 'QUẦN ÂU CAO CẤP KẺ NHỎ', 'quan-au-cao-cap-ke-nho', 700000, '<h1>QUẦN ÂU CAO CẤP KẺ NHỎ</h1>', '', 'quan-au-cao-cap-ke-nho.jpg', 'QU03', 'Quần âu cao cấp kẻ nhỏ may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu cao cấp kẻ nhỏ kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày tây,... phù hợp trong các buổi tiệc quan trọng, đi làm công sở hoặc đi chơi. Chất liệ', 1, 9, '2019-11-21 02:21:46', '2019-11-21 02:21:46'),
(29, 'QUÂN ÂU HÀN QUỐC GHI SÁNG 177', 'quan-au-han-quoc-ghi-sang-177', 600000, '<h1>QUÂN ÂU HÀN QUỐC GHI SÁNG 177</h1>', '', 'quan-au-han-quoc-ghi-sang-177.jpg', 'QU04', 'Quần âu Hàn Quốc ghi sáng may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu Hàn Quốc ghi sáng kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày tây,... phù hợp trong các buổi tiệc quan trọng, đi làm công sở hoặc đi chơi. Ch', 1, 9, '2019-11-21 02:24:15', '2019-11-21 02:24:15'),
(30, 'GIÀY ÂU NAM CHẤM NHỎ TAG GUCCI', 'giay-au-nam-cham-nho-tag-gucci', 1650000, '<h1>GIÀY ÂU NAM CHẤM NHỎ TAG GUCCI</h1>', '', 'giay-da-nam-cham-nho-tag-gucci.jpg', 'G01', 'Giày âu nam kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ Công nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân. Giày âu nam sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ngày. Size: 39 ', 1, 11, '2019-11-21 02:27:39', '2019-11-21 02:27:39'),
(31, 'GIÀY ÂU NAM ĐEN TAG TRẮNG', 'giay-au-nam-den-tag-trang', 1650000, '<h1>GIÀY ÂU NAM ĐEN TAG TRẮNG</h1>', '', 'giay-da-nam-den-tag-trang.jpg', 'G02', 'Giày âu nam kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ.Công nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân.Giày âu nam sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ngày.', 1, 11, '2019-11-21 02:29:41', '2019-11-21 02:29:41'),
(32, 'GIÀY ÂU NAM ĐEN THỪNG KÉP', 'giay-au-nam-den-thung-kep', 1600000, '<h1>GIÀY ÂU NAM ĐEN THỪNG KÉP</h1>', '', 'giay-da-nam-thung-kep.jpg', 'G03', 'Giày âu nam đen kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ.\r\n\r\nCông nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân.\r\n\r\nGiày âu nam đen sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ', 1, 11, '2019-11-21 02:31:23', '2019-11-21 02:31:23'),
(33, 'GIÀY ÂU NAM NÂU HOẠ TIẾT THỪNG KÉP', 'giay-au-nam-nau-hoa-tiet-thung-kep', 1600000, '<h1>GIÀY ÂU NAM NÂU HOẠ TIẾT THỪNG KÉP</h1>', '', 'giay-da-nam-nau-thung-kep.jpg', 'G04', 'Giày âu nam kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ.\r\n\r\nCông nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân.\r\n\r\nGiày âu nam sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ngày.', 1, 11, '2019-11-21 02:32:54', '2019-11-21 02:32:54');

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

-- --------------------------------------------------------

--
-- Table structure for table `product_size_quantity`
--

CREATE TABLE `product_size_quantity` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size_quantity`
--

INSERT INTO `product_size_quantity` (`id`, `product_id`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(3, 6, 48, 18, '2019-11-17 14:48:44', '2019-12-28 08:05:40'),
(4, 6, 50, 20, '2019-11-17 14:48:44', '2019-11-17 14:48:44'),
(5, 6, 52, 20, '2019-11-17 14:48:44', '2019-11-17 14:48:44'),
(6, 6, 54, 20, '2019-11-17 14:48:44', '2019-11-17 14:48:44'),
(7, 6, 56, 20, '2019-11-17 14:48:44', '2019-11-17 14:48:44'),
(8, 7, 48, 20, '2019-11-17 15:00:22', '2019-11-17 15:00:22'),
(9, 7, 50, 20, '2019-11-17 15:00:22', '2019-11-17 15:00:22'),
(10, 7, 52, 20, '2019-11-17 15:00:22', '2019-11-17 15:00:22'),
(11, 7, 54, 20, '2019-11-17 15:00:22', '2019-11-17 15:00:22'),
(12, 7, 56, 20, '2019-11-17 15:00:22', '2019-11-17 15:00:22'),
(13, 8, 48, 20, '2019-11-17 15:03:28', '2019-11-17 15:03:28'),
(14, 8, 50, 20, '2019-11-17 15:03:28', '2019-11-17 15:03:28'),
(15, 8, 52, 20, '2019-11-17 15:03:28', '2019-11-17 15:03:28'),
(16, 8, 54, 20, '2019-11-17 15:03:28', '2019-11-17 15:03:28'),
(17, 8, 56, 20, '2019-11-17 15:03:28', '2019-11-17 15:03:28'),
(18, 9, 48, 20, '2019-11-17 15:05:51', '2019-11-17 15:05:51'),
(19, 9, 50, 20, '2019-11-17 15:05:51', '2019-11-17 15:05:51'),
(20, 9, 52, 20, '2019-11-17 15:05:51', '2019-11-17 15:05:51'),
(21, 9, 54, 20, '2019-11-17 15:05:51', '2019-11-17 15:05:51'),
(22, 9, 56, 20, '2019-11-17 15:05:51', '2019-11-17 15:05:51'),
(23, 10, 48, 20, '2019-11-17 15:49:38', '2019-11-17 15:49:38'),
(24, 10, 50, 20, '2019-11-17 15:49:38', '2019-11-17 15:49:38'),
(25, 10, 52, 20, '2019-11-17 15:49:38', '2019-11-17 15:49:38'),
(26, 10, 54, 20, '2019-11-17 15:49:38', '2019-11-17 15:49:38'),
(27, 10, 56, 20, '2019-11-17 15:49:38', '2019-11-17 15:49:38'),
(28, 11, 48, 20, '2019-11-21 01:30:15', '2019-11-21 01:30:15'),
(29, 11, 50, 20, '2019-11-21 01:30:15', '2019-11-21 01:30:15'),
(30, 11, 52, 20, '2019-11-21 01:30:15', '2019-11-21 01:30:15'),
(31, 11, 54, 20, '2019-11-21 01:30:15', '2019-11-21 01:30:15'),
(32, 11, 56, 20, '2019-11-21 01:30:15', '2019-11-21 01:30:15'),
(33, 12, 48, 20, '2019-11-21 01:34:02', '2019-11-21 01:34:02'),
(34, 12, 50, 20, '2019-11-21 01:34:02', '2019-11-21 01:34:02'),
(35, 12, 52, 20, '2019-11-21 01:34:02', '2019-11-21 01:34:02'),
(36, 12, 54, 20, '2019-11-21 01:34:02', '2019-11-21 01:34:02'),
(37, 12, 56, 20, '2019-11-21 01:34:02', '2019-11-21 01:34:02'),
(38, 13, 48, 20, '2019-11-21 01:36:13', '2019-11-21 01:36:13'),
(39, 13, 50, 20, '2019-11-21 01:36:13', '2019-11-21 01:36:13'),
(40, 13, 52, 20, '2019-11-21 01:36:13', '2019-11-21 01:36:13'),
(41, 13, 54, 20, '2019-11-21 01:36:13', '2019-11-21 01:36:13'),
(42, 13, 56, 20, '2019-11-21 01:36:13', '2019-11-21 01:36:13'),
(43, 14, 48, 20, '2019-11-21 01:43:39', '2019-11-21 01:43:39'),
(44, 14, 50, 20, '2019-11-21 01:43:39', '2019-11-21 01:43:39'),
(45, 14, 52, 20, '2019-11-21 01:43:39', '2019-11-21 01:43:39'),
(46, 14, 54, 20, '2019-11-21 01:43:39', '2019-11-21 01:43:39'),
(47, 14, 56, 20, '2019-11-21 01:43:39', '2019-11-21 01:43:39'),
(48, 15, 48, 20, '2019-11-21 01:46:27', '2019-11-21 01:46:27'),
(49, 15, 50, 20, '2019-11-21 01:46:27', '2019-11-21 01:46:27'),
(50, 15, 52, 20, '2019-11-21 01:46:27', '2019-11-21 01:46:27'),
(51, 15, 54, 20, '2019-11-21 01:46:27', '2019-11-21 01:46:27'),
(52, 15, 56, 20, '2019-11-21 01:46:27', '2019-11-21 01:46:27'),
(53, 16, 48, 20, '2019-11-21 01:48:25', '2019-11-21 01:48:25'),
(54, 16, 50, 20, '2019-11-21 01:48:25', '2019-11-21 01:48:25'),
(55, 16, 52, 20, '2019-11-21 01:48:25', '2019-11-21 01:48:25'),
(56, 16, 54, 20, '2019-11-21 01:48:25', '2019-11-21 01:48:25'),
(57, 16, 56, 20, '2019-11-21 01:48:25', '2019-11-21 01:48:25'),
(58, 17, 48, 20, '2019-11-21 01:50:16', '2019-11-21 01:50:16'),
(59, 17, 50, 20, '2019-11-21 01:50:16', '2019-11-21 01:50:16'),
(60, 17, 52, 20, '2019-11-21 01:50:16', '2019-11-21 01:50:16'),
(61, 17, 54, 20, '2019-11-21 01:50:16', '2019-11-21 01:50:16'),
(62, 17, 56, 20, '2019-11-21 01:50:16', '2019-11-21 01:50:16'),
(63, 18, 48, 20, '2019-11-21 01:53:46', '2019-11-21 01:53:46'),
(64, 18, 50, 20, '2019-11-21 01:53:46', '2019-11-21 01:53:46'),
(65, 18, 52, 20, '2019-11-21 01:53:46', '2019-11-21 01:53:46'),
(66, 18, 54, 20, '2019-11-21 01:53:46', '2019-11-21 01:53:46'),
(67, 18, 56, 20, '2019-11-21 01:53:46', '2019-11-21 01:53:46'),
(68, 19, 48, 20, '2019-11-21 01:56:48', '2019-11-21 01:56:48'),
(69, 19, 50, 20, '2019-11-21 01:56:48', '2019-11-21 01:56:48'),
(70, 19, 52, 20, '2019-11-21 01:56:48', '2019-11-21 01:56:48'),
(71, 19, 54, 20, '2019-11-21 01:56:48', '2019-11-21 01:56:48'),
(72, 19, 56, 20, '2019-11-21 01:56:48', '2019-11-21 01:56:48'),
(73, 20, 48, 20, '2019-11-21 01:58:56', '2019-11-21 01:58:56'),
(74, 20, 50, 20, '2019-11-21 01:58:56', '2019-11-21 01:58:56'),
(75, 20, 52, 20, '2019-11-21 01:58:56', '2019-11-21 01:58:56'),
(76, 20, 54, 20, '2019-11-21 01:58:56', '2019-11-21 01:58:56'),
(77, 20, 56, 20, '2019-11-21 01:58:56', '2019-11-21 01:58:56'),
(78, 21, 48, 20, '2019-11-21 02:00:24', '2019-11-21 02:00:24'),
(79, 21, 50, 20, '2019-11-21 02:00:24', '2019-11-21 02:00:24'),
(80, 21, 52, 20, '2019-11-21 02:00:24', '2019-11-21 02:00:24'),
(81, 21, 54, 20, '2019-11-21 02:00:24', '2019-11-21 02:00:24'),
(82, 21, 56, 20, '2019-11-21 02:00:24', '2019-11-21 02:00:24'),
(83, 22, 48, 20, '2019-11-21 02:04:11', '2019-11-21 02:04:11'),
(84, 22, 50, 20, '2019-11-21 02:04:12', '2019-11-21 02:04:12'),
(85, 22, 52, 20, '2019-11-21 02:04:12', '2019-11-21 02:04:12'),
(86, 22, 54, 20, '2019-11-21 02:04:12', '2019-11-21 02:04:12'),
(87, 22, 56, 20, '2019-11-21 02:04:12', '2019-11-21 02:04:12'),
(88, 23, 48, 20, '2019-11-21 02:07:38', '2019-11-21 02:07:38'),
(89, 23, 50, 20, '2019-11-21 02:07:38', '2019-11-21 02:07:38'),
(90, 23, 52, 20, '2019-11-21 02:07:38', '2019-11-21 02:07:38'),
(91, 23, 54, 20, '2019-11-21 02:07:38', '2019-11-21 02:07:38'),
(92, 23, 56, 20, '2019-11-21 02:07:38', '2019-11-21 02:07:38'),
(93, 24, 48, 20, '2019-11-21 02:09:05', '2019-11-21 02:09:05'),
(94, 24, 50, 20, '2019-11-21 02:09:05', '2019-11-21 02:09:05'),
(95, 24, 52, 20, '2019-11-21 02:09:05', '2019-11-21 02:09:05'),
(96, 24, 54, 20, '2019-11-21 02:09:05', '2019-11-21 02:09:05'),
(97, 24, 56, 20, '2019-11-21 02:09:05', '2019-11-21 02:09:05'),
(98, 25, 48, 20, '2019-11-21 02:11:27', '2019-11-21 02:11:27'),
(99, 25, 50, 20, '2019-11-21 02:11:27', '2019-11-21 02:11:27'),
(100, 25, 52, 20, '2019-11-21 02:11:27', '2019-11-21 02:11:27'),
(101, 25, 54, 20, '2019-11-21 02:11:27', '2019-11-21 02:11:27'),
(102, 25, 56, 20, '2019-11-21 02:11:27', '2019-11-21 02:11:27'),
(103, 26, 28, 20, '2019-11-21 02:14:32', '2019-11-21 02:14:32'),
(104, 26, 29, 20, '2019-11-21 02:14:32', '2019-11-21 02:14:32'),
(105, 26, 30, 20, '2019-11-21 02:14:32', '2019-11-21 02:14:32'),
(106, 26, 31, 20, '2019-11-21 02:14:32', '2019-11-21 02:14:32'),
(107, 26, 32, 20, '2019-11-21 02:14:32', '2019-11-21 02:14:32'),
(108, 27, 28, 20, '2019-11-21 02:16:35', '2019-11-21 02:16:35'),
(109, 27, 29, 20, '2019-11-21 02:16:35', '2019-11-21 02:16:35'),
(110, 27, 30, 20, '2019-11-21 02:16:35', '2019-11-21 02:16:35'),
(111, 27, 31, 20, '2019-11-21 02:16:35', '2019-11-21 02:16:35'),
(112, 27, 32, 20, '2019-11-21 02:16:35', '2019-11-21 02:16:35'),
(113, 28, 28, 20, '2019-11-21 02:21:46', '2019-11-21 02:21:46'),
(114, 28, 29, 20, '2019-11-21 02:21:46', '2019-11-21 02:21:46'),
(115, 28, 30, 20, '2019-11-21 02:21:46', '2019-11-21 02:21:46'),
(116, 28, 31, 20, '2019-11-21 02:21:46', '2019-11-21 02:21:46'),
(117, 28, 32, 20, '2019-11-21 02:21:46', '2019-11-21 02:21:46'),
(118, 29, 29, 20, '2019-11-21 02:24:15', '2019-11-21 02:24:15'),
(119, 29, 29, 20, '2019-11-21 02:24:15', '2019-11-21 02:24:15'),
(120, 29, 30, 20, '2019-11-21 02:24:15', '2019-11-21 02:24:15'),
(121, 29, 31, 20, '2019-11-21 02:24:15', '2019-11-21 02:24:15'),
(122, 29, 32, 20, '2019-11-21 02:24:15', '2019-11-21 02:24:15'),
(123, 30, 38, 20, '2019-11-21 02:27:39', '2019-11-21 02:27:39'),
(124, 30, 39, 20, '2019-11-21 02:27:39', '2019-11-21 02:27:39'),
(125, 30, 40, 20, '2019-11-21 02:27:39', '2019-11-21 02:27:39'),
(126, 30, 41, 20, '2019-11-21 02:27:39', '2019-11-21 02:27:39'),
(127, 30, 42, 20, '2019-11-21 02:27:39', '2019-11-21 02:27:39'),
(128, 30, 43, 20, '2019-11-21 02:27:39', '2019-11-21 02:27:39'),
(129, 31, 38, 20, '2019-11-21 02:29:41', '2019-11-21 02:29:41'),
(130, 31, 39, 20, '2019-11-21 02:29:41', '2019-11-21 02:29:41'),
(131, 31, 40, 20, '2019-11-21 02:29:41', '2019-11-21 02:29:41'),
(132, 31, 41, 20, '2019-11-21 02:29:41', '2019-11-21 02:29:41'),
(133, 31, 42, 20, '2019-11-21 02:29:41', '2019-11-21 02:29:41'),
(134, 31, 43, 20, '2019-11-21 02:29:41', '2019-11-21 02:29:41'),
(135, 32, 38, 20, '2019-11-21 02:31:23', '2019-11-21 02:31:23'),
(136, 32, 39, 20, '2019-11-21 02:31:23', '2019-11-21 02:31:23'),
(137, 32, 40, 20, '2019-11-21 02:31:23', '2019-11-21 02:31:23'),
(138, 32, 41, 20, '2019-11-21 02:31:23', '2019-11-21 02:31:23'),
(139, 32, 42, 20, '2019-11-21 02:31:23', '2019-11-21 02:31:23'),
(140, 32, 43, 20, '2019-11-21 02:31:23', '2019-11-21 02:31:23'),
(141, 33, 38, 20, '2019-11-21 02:32:54', '2019-11-21 02:32:54'),
(142, 33, 39, 20, '2019-11-21 02:32:54', '2019-11-21 02:32:54'),
(143, 33, 40, 20, '2019-11-21 02:32:54', '2019-11-21 02:32:54'),
(144, 33, 41, 20, '2019-11-21 02:32:54', '2019-11-21 02:32:54'),
(145, 33, 42, 20, '2019-11-21 02:32:54', '2019-11-21 02:32:54'),
(146, 33, 43, 20, '2019-11-21 02:32:54', '2019-11-21 02:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SUND_ADMIN', '$2y$10$VmzBAjhBBfBxThzMy6vBpeHnJpbFRnZwiTnZnKR1HZhyauUs9kQAm', 'su.nguyenduy.nb@gmail.com', 1, NULL, '2019-11-17 21:04:31', '2019-11-17 21:04:31'),
(2, 'HAILD_EMPLOYER', '$2y$10$UEmRV3NAblcm/u/swD8cUO70hkj5dDGH1R0d5zI5AZtR07ZaOdIBW', 'haild@gmail.com', 2, NULL, '2019-11-25 07:38:38', '2019-11-25 07:38:38'),
(3, 'DINHND_MEMBER', '$2y$10$apBq2z1i94YzBHUF.RJ.NeBQsnliI3OQhidHBEZO8V1QfFX6Mglh2', 'dinh@gmail.com', 3, NULL, '2019-11-25 07:38:55', '2019-12-29 19:29:48'),
(4, 'ANDD_ADMIN', '$2y$10$kSP4LriKwjh3O3q72aEYwOjER46brIVeH2zSwElAg3Yh1GateAnpm', 'an@gmail.com', 1, NULL, '2019-11-25 07:39:52', '2019-11-25 07:39:52'),
(5, 'honghanh95', '$2y$10$yxKzBRzEWkxgFd7RpCIt5uaCzuwkuY3OnbHozaNHELfINI1yFbP8a', 'honghanh@gmail.com', 3, NULL, '2019-12-25 02:33:55', '2019-12-25 02:33:55'),
(6, 'mylinh97', '$2y$10$Gv.wBtUu2WioEwtX49n0VuRXAsr97t5kgu2PMpCKt2vgvcjXs560i', 'linh@gmail.com', 3, NULL, '2019-12-25 02:42:50', '2019-12-25 02:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `user_id`, `cart_id`, `created_at`, `updated_at`) VALUES
(4, 1, 5, '2019-12-24 23:52:16', '2019-12-24 23:52:16'),
(5, 1, 6, '2019-12-24 23:55:43', '2019-12-24 23:55:43'),
(6, 1, 7, '2019-12-24 23:57:04', '2019-12-24 23:57:04'),
(7, 1, 8, '2019-12-24 23:57:45', '2019-12-24 23:57:45'),
(8, 1, 9, '2019-12-24 23:58:09', '2019-12-24 23:58:09'),
(9, 1, 10, '2019-12-24 23:58:55', '2019-12-24 23:58:55'),
(10, 1, 11, '2019-12-25 01:00:19', '2019-12-25 01:00:19'),
(11, 1, 12, '2019-12-26 02:22:41', '2019-12-26 02:22:41'),
(12, 3, 13, '2019-12-28 03:00:32', '2019-12-28 03:00:32'),
(13, 3, 14, '2019-12-28 03:11:43', '2019-12-28 03:11:43'),
(14, 2, 18, '2019-12-28 08:05:40', '2019-12-28 08:05:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size_quantity`
--
ALTER TABLE `product_size_quantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_size_quantity`
--
ALTER TABLE `product_size_quantity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
