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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(6, 'ÁO VEST CÔNG SỞ ĐẸP XANH DƯƠNG 2 KHUY', 'ao-vest-cong-so-dep-xanh-duong-2-khuy', 3100000, '<h1>ÁO VEST CÔNG SỞ ĐẸP XANH DƯƠNG 2 KHUY</h1>', '', 'vest-xanh-2-khuy.jpg', 'vcs01', 'Áo vest công sở xanh dương 2 khuy may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 3.100.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest công sở xanh dương 2 khuy có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu', 1, 2, '2019-11-17 21:48:44', '2019-11-17 21:48:44'),
(7, 'ÁO VEST CÔNG SỞ KẺ GHI', 'ao-vest-cong-so-ke-ghi', 2800000, '<h1>ÁO VEST CÔNG SỞ KẺ GHI</h1>', '', 'vest-ke-ghi.jpg', 'vcs02', 'Áo vest công sở kẻ ghi may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.800.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest công sở kẻ ghi có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu.', 1, 2, '2019-11-17 22:00:22', '2019-11-17 22:00:22'),
(8, 'ÁO VEST CÔNG SỞ NAM XANH TÍM THAN', 'ao-vest-cong-so-nam-xanh-tim-than', 2800000, '<h1>ÁO VEST CÔNG SỞ NAM XANH TÍM THAN</h1>', '', 'vest-nam-xanh-tim.jpg', 'vcs03', 'Áo vest công sở nam xanh tím than may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest công sở nam xanh tím than có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu.', 1, 2, '2019-11-17 22:03:28', '2019-11-17 22:03:28'),
(9, 'ÁO VEST NAM 2019 NÂU MỚI', 'ao-vest-nam-2019-nau-moi', 2400000, '<h1>ÁO VEST NAM 2019 NÂU MỚI</h1>', '', 'vest-nau-2019.jpg', 'vcs04', 'Áo vest nam 2019 nâu mới may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam 2019 nâu mới có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu.', 1, 2, '2019-11-17 22:05:51', '2019-11-17 22:05:51'),
(10, 'ÁO VEST NAM ĐẸP XANH KẺ CAM MỚI', 'ao-vest-nam-dep-xanh-ke-cam-moi', 2800000, '<h1>ÁO VEST NAM ĐẸP XANH KẺ CAM MỚI</h1>', '', 'vest-xanh-ke-cam.jpg', 'vc01', 'Áo vest nam đẹp xanh kẻ cam mới may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam đẹp xanh kẻ cam mới có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu.', 1, 3, '2019-11-17 22:49:38', '2019-11-17 22:49:38'),
(11, 'ÁO VEST ĐẸP XANH NHŨ 1 KHUY', 'ao-vest-dep-xanh-nhu-1-khuy', 2800000, '<h1>ÁO VEST ĐẸP XANH NHŨ 1 KHUY</h1>', '', 'vest-xanh-nhu-1-khuy.jpg', 'vc02', 'Áo vest đẹp xanh nhũ 1 khuy may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest đẹp xanh nhũ 1 khuy có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu.', 1, 3, '2019-11-21 08:30:15', '2019-11-21 08:30:15'),
(12, 'ÁO VEST NAM XANH SẪM', 'ao-vest-nam-xanh-sam', 2800000, '<h1>ÁO VEST NAM XANH SẪM</h1>', '', 'vest-nam-xanh-sam.jpg', 'vc03', 'Áo vest nam xanh sẫm may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam xanh sẫm có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu.', 1, 3, '2019-11-21 08:34:02', '2019-11-21 08:34:02'),
(13, 'ÁO VEST NAM HÀN QUỐC XANH SÁNG', 'ao-vest-nam-han-quoc-xanh-sang', 2800000, '<h1>ÁO VEST NAM HÀN QUỐC XANH SÁNG</h1>', '', 'vest-nam-han-quoc-xanh-sang.jpg', 'vc04', 'Áo vest nam Hàn Quốc xanh sáng may sẵn tôn dáng đủ size từ 50- 85kg trẻ trung, lịch sự chỉ từ 2.500.000đ Chất liệu vải nhập khẩu cao cấp không bai xù, nhăn co, màu sắc đa dạng, độ bóng đẹp sắc nét. Áo vest nam Hàn Quốc xanh sáng có thể mặc trong các buổi tiệc quan trọng, đi làm công sở hay đi chơi dạo phố. Lưu ý: Giá sản phẩm chỉ bao gồm áo vest chưa bao gồm quần âu.', 1, 3, '2019-11-21 08:36:13', '2019-11-21 08:36:13'),
(14, 'ÁO DA GHI XƯỚC', 'ao-da-ghi-xuoc', 1500000, '<p>&nbsp;ÁO DA GHI XƯỚC</p>', '', 'ao-da-ghi-xuoc.jpg', 'ad01', NULL, 1, 6, '2019-11-21 08:43:39', '2019-11-21 08:43:39'),
(15, 'ÁO DA BÒ MÀU MẬN', 'ao-da-bo-mau-man', 1500000, '<p>ÁO DA BÒ MÀU MẬN</p>', '', 'ao-da-bo-man.jpg', 'ad02', NULL, 1, 6, '2019-11-21 08:46:27', '2019-11-21 08:46:27'),
(16, 'ÁO DA NÂU XƯỚC', 'ao-da-nau-xuoc', 1500000, '<p>ÁO DA NÂU XƯỚC</p>', '', 'ao-da-nau-xuoc.jpg', 'ad03', NULL, 1, 6, '2019-11-21 08:48:25', '2019-11-21 08:48:25'),
(17, 'ÁO DA NÂU NHẠT', 'ao-da-nau-nhat', 1500000, '<p>ÁO DA NÂU NHẠT</p>', '', 'ao-da-nau-nhat.jpg', 'ad04', NULL, 1, 6, '2019-11-21 08:50:16', '2019-11-21 08:50:16'),
(18, 'ĐEN CHỈ XANH-VÀNG', 'den-chi-xanh-vang', 650000, '<h1>ĐEN CHỈ XANH-VÀNG</h1>', '', 'ao-len-den-chi-xanh-vang.jpg', 'len01', NULL, 1, 5, '2019-11-21 08:53:46', '2019-11-21 08:53:46'),
(19, 'ĐEN CỔ LỌ', 'den-co-lo', 500000, '<p>ĐEN CỔ LỌ</p>', '', 'den-co-lo.jpg', 'AL02', NULL, 1, 5, '2019-11-21 08:56:48', '2019-11-21 08:56:48'),
(20, 'ĐEN KẺ NGANG TO', 'den-ke-ngang-to', 550000, '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:24px; letter-spacing:3px; text-transform:uppercase\">ĐEN KẺ NGANG TO</span></p>', '', 'den-ke-ngang-to.jpg', 'AL03', NULL, 1, 5, '2019-11-21 08:58:56', '2019-11-21 08:58:56'),
(21, 'ĐEN KẺ XANH NGANG', 'den-ke-xanh-ngang', 550000, '<h1>ĐEN KẺ XANH NGANG</h1>', '', 'den-ke-xanh-ngang.jpg', 'AL04', NULL, 1, 5, '2019-11-21 09:00:24', '2019-11-21 09:00:24'),
(22, 'ÁO SƠ MI BBR CAO CẤP NÂU SÁNG KẺ', 'ao-so-mi-bbr-cao-cap-nau-sang-ke', 700000, '<h1>ÁO SƠ MI BBR CAO CẤP NÂU SÁNG KẺ</h1>', '', 'so-mi-bbr-cao-cap-nau-sang.jpg', 'SM01', 'Áo sơ mi BBR cao cấp nâu sáng kẻ tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi BBR cao cấp nâu sáng kẻ sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù hạn chế nhăn nhàu, thấm hút tuyệt đối.', 1, 7, '2019-11-21 09:04:11', '2019-11-21 09:04:11'),
(23, 'ÁO SƠ MI CAO CẤP GHI VÂN VÀNG', 'ao-so-mi-cao-cap-ghi-van-vang', 650000, '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:24px; letter-spacing:3px; text-transform:uppercase\">ÁO SƠ MI CAO CẤP GHI VÂN VÀNG</span></p>', '', 'ao-so-mi-cao-cap-ghi-van-vang.jpg', 'SM02', 'Áo sơ mi cao cấp ghi vân vàng tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi cao cấp ghi vân vàng sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù hạn chế nhăn nhàu, thấm hút tuyệt đối.', 1, 7, '2019-11-21 09:07:38', '2019-11-21 09:07:38'),
(24, 'ÁO SƠ MI CAO CẤP KẺ XANH', 'ao-so-mi-cao-cap-ke-xanh', 500000, '<h1>ÁO SƠ MI CAO CẤP KẺ XANH</h1>', '', 'so-mi-cao-cap-ke-xanh.jpg', 'SM03', 'Áo sơ mi cao cấp kẻ xanh tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi cao cấp kẻ xanh sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù hạn chế nhăn nhàu, thấm hút tuyệt đối.', 1, 7, '2019-11-21 09:09:05', '2019-11-21 09:09:05'),
(25, 'ÁO SƠ MI ĐEN NAM', 'ao-so-mi-den-nam', 500000, '<h1>ÁO SƠ MI ĐEN NAM</h1>', '', 'so-mi-den-nam.jpg', 'SM04', 'Áo sơ mi nam đen Adam Store tôn dáng trẻ trung lịch lãm chỉ từ 550.000đ, size áo sơ mi nam đủ từ 50-85kg. Áo sơ mi nam đen Adam Store sang trọng, lịch sự phù hợp mặc sự kiện, đi làm hoặc đi chơi. Chất liệu cotton cao cấp thoáng mát không bai xù hạn chế nhăn nhàu, thấm hút tuyệt đối.', 1, 7, '2019-11-21 09:11:27', '2019-11-21 09:11:27'),
(26, 'QUẦN ÂU CAO CẤP XANH ÁNH', 'quan-au-cao-cap-xanh-anh', 700000, '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:24px; letter-spacing:3px; text-transform:uppercase\">QUẦN ÂU CAO CẤP XANH ÁNH</span></p>', '', 'quan-au-cao-cap-xanh-anh.jpg', 'QU01', 'Quần âu Adam cao cấp xanh ánh may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu Adam cao cấp xanh ánh kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày tây,... phù hợp trong các buổi tiệc quan trọng, đi làm công sở hoặc đi chơi. Chất liệu nhập khẩu cao cấp, thoáng, thấm hút tốt, màu sắc đẹp sắc nét.', 1, 9, '2019-11-21 09:14:32', '2019-11-21 09:14:32'),
(27, 'QUẦN ÂU CAO CẤP XANH RÊU', 'quan-au-cao-cap-xanh-reu', 600000, '<h1>QUẦN ÂU CAO CẤP XANH RÊU</h1>', '', 'quan-au-cao-cap-xanh-reu.jpg', 'QU02', '<p><span style=\"color:rgb(0, 0, 0); font-family:roboto; font-size:14px\">Quần âu Adam cao cấp xanh rêu may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu Adam cao cấp xanh rêu kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày tây,... phù hợp trong các buổi tiệc quan trọng, đi làm công sở hoặc đi chơi. Chất liệu nhập khẩu cao cấp, thoáng, thấm hút tốt, màu sắc đẹp sắc nét.</span></p>', 1, 9, '2019-11-21 09:16:35', '2019-11-21 09:16:35'),
(28, 'QUẦN ÂU CAO CẤP KẺ NHỎ', 'quan-au-cao-cap-ke-nho', 700000, '<h1>QUẦN ÂU CAO CẤP KẺ NHỎ</h1>', '', 'quan-au-cao-cap-ke-nho.jpg', 'QU03', 'Quần âu cao cấp kẻ nhỏ may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu cao cấp kẻ nhỏ kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày tây,... phù hợp trong các buổi tiệc quan trọng, đi làm công sở hoặc đi chơi. Chất liệu nhập khẩu cao cấp, thoáng, thấm hút tốt, màu sắc đẹp sắc nét.', 1, 9, '2019-11-21 09:21:46', '2019-11-21 09:21:46'),
(29, 'QUÂN ÂU HÀN QUỐC GHI SÁNG 177', 'quan-au-han-quoc-ghi-sang-177', 600000, '<h1>QUÂN ÂU HÀN QUỐC GHI SÁNG 177</h1>', '', 'quan-au-han-quoc-ghi-sang-177.jpg', 'QU04', 'Quần âu Hàn Quốc ghi sáng may sẵn tôn dáng đủ size từ 50- 85kg giá tốt chỉ từ 600.000đ Quần âu Hàn Quốc ghi sáng kiểu dáng sang trọng, lịch sự dễ dàng phối đồ cùng sơ mi, giày tây,... phù hợp trong các buổi tiệc quan trọng, đi làm công sở hoặc đi chơi. Chất liệu nhập khẩu cao cấp, thoáng, thấm hút tốt, màu sắc đẹp sắc nét.', 1, 9, '2019-11-21 09:24:15', '2019-11-21 09:24:15'),
(30, 'GIÀY ÂU NAM CHẤM NHỎ TAG GUCCI', 'giay-au-nam-cham-nho-tag-gucci', 1650000, '<h1>GIÀY ÂU NAM CHẤM NHỎ TAG GUCCI</h1>', '', 'giay-da-nam-cham-nho-tag-gucci.jpg', 'G01', 'Giày âu nam kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ Công nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân. Giày âu nam sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ngày. Size: 39 - 43', 1, 11, '2019-11-21 09:27:39', '2019-11-21 09:27:39'),
(31, 'GIÀY ÂU NAM ĐEN TAG TRẮNG', 'giay-au-nam-den-tag-trang', 1650000, '<h1>GIÀY ÂU NAM ĐEN TAG TRẮNG</h1>', '', 'giay-da-nam-den-tag-trang.jpg', 'G02', 'Giày âu nam kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ.Công nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân.Giày âu nam sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ngày.', 1, 11, '2019-11-21 09:29:41', '2019-11-21 09:29:41'),
(32, 'GIÀY ÂU NAM ĐEN THỪNG KÉP', 'giay-au-nam-den-thung-kep', 1600000, '<h1>GIÀY ÂU NAM ĐEN THỪNG KÉP</h1>', '', 'giay-da-nam-thung-kep.jpg', 'G03', 'Giày âu nam đen kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ.\r\n\r\nCông nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân.\r\n\r\nGiày âu nam đen sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ngày.', 1, 11, '2019-11-21 09:31:23', '2019-11-21 09:31:23'),
(33, 'GIÀY ÂU NAM NÂU HOẠ TIẾT THỪNG KÉP', 'giay-au-nam-nau-hoa-tiet-thung-kep', 1600000, '<h1>GIÀY ÂU NAM NÂU HOẠ TIẾT THỪNG KÉP</h1>', '', 'giay-da-nam-nau-thung-kep.jpg', 'G04', 'Giày âu nam kiểu dáng đa dạng lịch sự sang trọng chỉ từ 1.550.000đ.\r\n\r\nCông nghệ phủ nano giúp giày luôn mới. Đế giày chắc chắn chất liệu biền bỉ hạn chế đau mỏi chân.\r\n\r\nGiày âu nam sử dụng được trong nhiều dịp quan trọng tới đi làm công sở hàng ngày.', 1, 11, '2019-11-21 09:32:54', '2019-11-21 09:32:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
