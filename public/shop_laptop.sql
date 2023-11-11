-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 06:30 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `order_code` varchar(50) NOT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `status_bill` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id_bill`, `id_customer`, `date_order`, `order_code`, `total`, `payment`, `status_bill`) VALUES
(132, 139, '2020-11-29', 'a269b', 15000, 'ATM', 2),
(134, 141, '2020-12-01', '24bee', 120000, 'COD', 1),
(137, 144, '2021-02-27', '0b4be', 24000, 'ATM', 1),
(138, 145, '2021-03-03', '4100e', 12000, 'COD', 1),
(139, 146, '2021-03-03', '91fdd', 12000, 'COD', 1),
(140, 147, '2021-04-06', '2e52f', 420000, 'COD', 0),
(141, 148, '2021-03-09', '05ff8', 30000, 'COD', 1),
(142, 149, '2021-03-11', '6fa57', 30000, 'COD', 1),
(143, 150, '2021-03-13', '25a6f', 29000, 'COD', 1),
(144, 151, '2021-03-13', '4cb98', 30000, 'ATM', 1),
(145, 152, '2021-04-01', 'f2282', 22000, 'COD', 1),
(146, 153, '2021-04-02', 'ee61f', 12000, 'COD', 1),
(149, 156, '2021-04-05', '80cdd', 3000000, 'COD', 0),
(147, 154, '2021-04-03', '01011', 12000, 'COD', 1),
(148, 155, '2021-04-04', '277be', 20000000, 'COD', 0),
(150, 157, '2021-04-06', '6355b', 120000, 'COD', 0),
(151, 164, '2021-04-07', '118f3', 2700000, 'COD', 0),
(152, 165, '2021-04-08', '58863', 21560, 'COD', 0),
(153, 166, '2021-04-09', '7b65c', 21560, 'COD', 0),
(154, 167, '2021-04-10', '5f3ac', 22000, 'COD', 0),
(155, 168, '2021-04-29', '296f1', 2850000, 'COD', 0),
(156, 169, '2021-04-30', '42863', 2850000, 'COD', 1),
(157, 170, '2021-05-02', '0361d', 2850000, 'COD', 0),
(158, 171, '2021-05-01', '96781', 12000, 'COD', 0),
(159, 174, '2021-05-01', 'f6e74', 120000, 'COD', 0),
(160, 175, '2021-04-13', '7fede', 120000, 'COD', 0),
(161, 176, '2021-04-14', 'a18aa', 32000, 'COD', 0),
(162, 177, '2021-04-15', '9fc23', 24000, 'COD', 1),
(163, 178, '2021-05-01', 'dbd76', 10000000, 'COD', 1),
(167, 181, '2021-05-01', 'ecda9', 1200000, 'ATM', 1),
(168, 181, '2021-05-02', '2f829', 12000000, 'ATM', 1),
(169, 182, '2021-05-04', 'd8611', 24000000, 'ATM', 1),
(170, 183, '2021-05-13', '4f49d', 9900000, 'ATM', 0),
(171, 184, '2021-05-13', '5960c', 9000000, 'ATM', 0),
(172, 185, '2021-05-13', '2ec8d', 12000000, 'ATM', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_bill_detail` int(11) UNSIGNED NOT NULL,
  `id_bill` int(10) DEFAULT NULL,
  `id_product` int(10) DEFAULT NULL,
  `id_post_bill_detail` int(11) NOT NULL,
  `order_code` varchar(50) NOT NULL,
  `quantity` int(10) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill_detail`, `id_bill`, `id_product`, `id_post_bill_detail`, `order_code`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(75, 132, 90, 16, 'a269b', 1, 15000, '2020-11-29 13:50:09', '2020-11-29 13:50:09'),
(77, 134, 16, 5, '24bee', 1, 120000, '2020-12-01 02:58:19', '2020-12-01 02:58:19'),
(110, 168, 77, 4, '2f829', 1, 12000000, '2021-05-02 02:46:51', '2021-05-02 02:46:51'),
(80, 137, 74, 1, '0b4be', 2, 12000, '2021-02-27 06:22:44', '2021-02-27 06:22:44'),
(81, 138, 74, 1, '4100e', 1, 12000, '2021-03-03 08:17:51', '2021-03-03 08:17:51'),
(82, 139, 74, 1, '91fdd', 1, 12000, '2021-03-03 08:21:01', '2021-03-03 08:21:01'),
(83, 140, 13, 7, '2e52f', 1, 300000, '2021-03-06 05:46:18', '2021-03-06 05:46:18'),
(84, 140, 16, 5, '2e52f', 1, 120000, '2021-03-06 05:46:18', '2021-03-06 05:46:18'),
(85, 141, 74, 1, '05ff8', 1, 30000, '2021-03-09 02:29:34', '2021-03-09 02:29:34'),
(86, 142, 74, 1, '6fa57', 1, 30000, '2021-03-11 03:28:46', '2021-03-11 03:28:46'),
(87, 143, 87, 9, '25a6f', 1, 29000, '2021-03-13 10:05:38', '2021-03-13 10:05:38'),
(88, 144, 74, 1, '4cb98', 1, 30000, '2021-03-13 10:07:53', '2021-03-13 10:07:53'),
(89, 145, 88, 11, 'f2282', 1, 22000, '2021-03-13 10:38:13', '2021-03-13 10:38:13'),
(90, 146, 75, 3, 'ee61f', 1, 12000, '2021-03-13 11:28:40', '2021-03-13 11:28:40'),
(91, 147, 75, 3, '01011', 1, 12000, '2021-03-30 13:17:25', '2021-03-30 13:17:25'),
(92, 148, 99, 1, '277be', 1, 20000000, '2021-03-30 13:19:20', '2021-03-30 13:19:20'),
(93, 149, 74, 1, '80cdd', 1, 3000000, '2021-03-31 14:19:30', '2021-03-31 14:19:30'),
(94, 150, 16, 5, '6355b', 1, 120000, '2021-04-01 01:22:49', '2021-04-01 01:22:49'),
(95, 151, 13, 7, '118f3', 2, 3000000, '2021-04-01 01:43:16', '2021-04-01 01:43:16'),
(96, 152, 88, 11, '58863', 1, 22000, '2021-04-02 10:51:32', '2021-04-02 10:51:32'),
(97, 153, 88, 11, '7b65c', 1, 22000, '2021-04-02 10:52:53', '2021-04-02 10:52:53'),
(98, 154, 88, 11, '5f3ac', 1, 22000, '2021-04-02 10:53:35', '2021-04-02 10:53:35'),
(99, 155, 74, 1, '296f1', 1, 3000000, '2021-04-06 05:10:04', '2021-04-06 05:10:04'),
(100, 156, 74, 1, '42863', 1, 3000000, '2021-04-06 05:10:05', '2021-04-06 05:10:05'),
(101, 157, 74, 1, '0361d', 1, 3000000, '2021-04-06 05:10:07', '2021-04-06 05:10:07'),
(102, 158, 74, 1, '96781', 1, 12000, '2021-04-06 05:10:08', '2021-04-06 05:10:08'),
(103, 159, 16, 5, 'f6e74', 1, 120000, '2021-04-06 05:16:10', '2021-04-06 05:16:10'),
(104, 160, 16, 5, '7fede', 1, 120000, '2021-04-06 05:19:15', '2021-04-06 05:19:15'),
(105, 161, 98, 19, 'a18aa', 1, 32000, '2021-04-06 05:36:00', '2021-04-06 05:36:00'),
(106, 162, 77, 4, '9fc23', 2, 12000, '2021-04-06 05:41:04', '2021-04-06 05:41:04'),
(107, 163, 96, 8, 'dbd76', 1, 10000000, '2021-04-06 05:56:48', '2021-04-06 05:56:48'),
(109, 167, 16, 5, 'ecda9', 1, 1200000, '2021-05-02 02:42:39', '2021-05-02 02:42:39'),
(111, 169, 77, 4, 'd8611', 2, 12000000, '2021-05-02 10:45:08', '2021-05-02 10:45:08'),
(112, 170, 91, 15, '4f49d', 1, 11000000, '2021-05-13 13:40:44', '2021-05-13 13:40:44'),
(113, 171, 77, 4, '5960c', 1, 10000000, '2021-05-13 13:56:58', '2021-05-13 13:56:58'),
(114, 172, 86, 2, '2ec8d', 1, 12000000, '2021-05-13 13:58:46', '2021-05-13 13:58:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_qty` int(50) NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  `coupon_date_start` varchar(50) NOT NULL,
  `coupon_date_end` varchar(50) NOT NULL,
  `coupon_status` int(10) NOT NULL,
  `coupon_used` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_name`, `coupon_qty`, `coupon_number`, `coupon_code`, `coupon_condition`, `coupon_date_start`, `coupon_date_end`, `coupon_status`, `coupon_used`) VALUES
(1, 'Giảm Thôi', 51, 20, 'nam000', 0, '19-04-2021', '29-04-2021', 0, ''),
(2, 'Giảm COVID-19', 5, 100000, 'nam002', 1, '03-04-2021', '09-05-2021', 0, ',10'),
(3, 'Giảm Chơi', 10, 1, 'nam003', 0, '01-04-2021', '11-06-2021', 0, ',10'),
(4, 'Giảm Chơi Thôi Mà', 12, 6, 'PVCOVIT', 0, '01-05-2021', '04-05-2021', 0, ',27'),
(5, 'Giảm la Giam thôi', 5, 10, 'sale3', 0, '01-05-2021', '24-05-2021', 0, ',36'),
(6, 'xx', 7, 3, 'quangdb2ffffff', 0, '29-03-2021', '29-04-2021', 0, NULL),
(7, 'ccc', 17, 4, 'quangdb2sss', 0, '29-03-2021', '29-04-2021', 0, NULL),
(8, 'test', 7, 3, 'sale1', 0, '29-04-2021', '11-05-2021', 0, NULL),
(9, 'test1', 17, 4, 'sale2', 0, '29-04-2021', '11-10-2021', 0, NULL),
(10, 'dwdw', 12, 2, 'nam001sssssss', 0, '11-10-2021', '13-10-2021', 0, NULL),
(11, 'sqsqs', 13, 4, 'nam002ddddddd', 0, '11-10-2021', '30-10-2021', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(139, 'SWSW', 'nữ', 'npn0208@gmail.com', 'xsxsxs', '0773654033', 'xsx', '2020-11-29 13:50:09', '2020-11-29 13:50:09'),
(141, 'xsxs', 'nam', 'namnguyen@gmail.com', 'dfdf', '077365403', NULL, '2021-03-06 05:44:22', '2020-12-01 02:58:19'),
(181, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-05-02 02:46:51', '2021-05-02 02:46:51'),
(144, 'qqqqqqqqqqqqqqqqqqqqqq', 'nữ', 'namnguyen.08@gmail.com', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '0773654031', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '2021-03-06 05:44:41', '2021-02-27 06:22:44'),
(145, 'ccce', 'nam', 'namnguyen.02.08@gmail.com', 'xssxaxsa', '03333333333', 'dedw', '2021-03-06 05:44:47', '2021-03-03 08:17:51'),
(146, 'cdcdc', 'nam', 'namnguyen99@gmail.com', 'dcdcdcdcdc', '1111111111222222', 'ded', '2021-03-06 05:44:54', '2021-03-03 08:21:01'),
(147, 'namphuong 12', 'nam', 'namnguyen.02.08.99@gmail.com', 'Binh Dinh', '0773654033', NULL, '2021-03-06 05:46:18', '2021-03-06 05:46:18'),
(148, 'namphuong', 'nam', 'namnguyen.02.08.99@gmail.com', 'Binh Dinh', '0773654033', NULL, '2021-03-09 02:29:34', '2021-03-09 02:29:34'),
(149, 'Nam Admin', 'nam', 'namnguyen.02.08.99@gmail.com', 'bình duong', '0773654033', NULL, '2021-03-11 03:28:46', '2021-03-11 03:28:46'),
(150, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-03-13 10:05:38', '2021-03-13 10:05:38'),
(151, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-03-13 10:07:53', '2021-03-13 10:07:53'),
(152, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-03-13 10:38:13', '2021-03-13 10:38:13'),
(153, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-03-13 11:28:40', '2021-03-13 11:28:40'),
(154, 'Nam Admin', 'nam', 'npn0208@gmail.com', 'bình duong', '0773654033', NULL, '2021-03-30 13:17:25', '2021-03-30 13:17:25'),
(155, 'Nam Admin', 'nam', 'namnguyen.02.08.99@gmail.com', 'bình duong', '0773654033', NULL, '2021-03-30 13:19:20', '2021-03-30 13:19:20'),
(156, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', 'ghi chú nè', '2021-03-31 14:19:30', '2021-03-31 14:19:30'),
(157, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:22:49', '2021-04-01 01:22:49'),
(158, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:30:23', '2021-04-01 01:30:23'),
(159, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:30:57', '2021-04-01 01:30:57'),
(160, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:32:51', '2021-04-01 01:32:51'),
(161, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:34:25', '2021-04-01 01:34:25'),
(162, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:34:39', '2021-04-01 01:34:39'),
(163, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:42:25', '2021-04-01 01:42:25'),
(164, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-01 01:43:16', '2021-04-01 01:43:16'),
(165, 'Nam Admin', 'nam', 'npn0208@gmail.com', 'bình duong', '0773654033', NULL, '2021-04-02 10:51:32', '2021-04-02 10:51:32'),
(166, 'Nam Admin', 'nam', 'npn0208@gmail.com', 'bình duong', '0773654033', NULL, '2021-04-02 10:52:53', '2021-04-02 10:52:53'),
(167, 'Nam Admin', 'nam', 'npn0208@gmail.com', 'bình duong', '0773654033', NULL, '2021-04-02 10:53:35', '2021-04-02 10:53:35'),
(168, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:10:04', '2021-04-06 05:10:04'),
(169, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:10:05', '2021-04-06 05:10:05'),
(170, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:10:07', '2021-04-06 05:10:07'),
(171, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:10:08', '2021-04-06 05:10:08'),
(172, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:10:09', '2021-04-06 05:10:09'),
(173, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:11:07', '2021-04-06 05:11:07'),
(174, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:16:10', '2021-04-06 05:16:10'),
(175, '22222222222222', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', '2222222222', '2021-04-06 05:19:15', '2021-04-06 05:19:15'),
(176, '44444444', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:36:00', '2021-04-06 05:36:00'),
(177, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:41:04', '2021-04-06 05:41:04'),
(178, '0000000000000000', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-04-06 05:56:48', '2021-04-06 05:56:48'),
(180, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-05-02 02:42:39', '2021-05-02 02:42:39'),
(182, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-05-02 10:45:08', '2021-05-02 10:45:08'),
(183, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-05-13 13:40:44', '2021-05-13 13:40:44'),
(184, 'test1', 'nam', 'test1@gmail.com', 'sqsqs', '0773654059', NULL, '2021-05-13 13:56:58', '2021-05-13 13:56:58'),
(185, 'Nguyễn Phương Nam', 'nam', '2nmusic02@gmail.com', '312/3/4 tổ 5 khu 3 Phú Hòa', '0773654031', NULL, '2021-05-13 13:58:46', '2021-05-13 13:58:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(255) NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `gallery_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `gallery_image`, `gallery_product_id`) VALUES
(1, '80_jj', '80_1635395636_bannerlaptopthang12_800x450-600x400.png', 103),
(2, '77_1635395636_banner-web-2.jpg', '77_1635395636_banner-web-2.jpg', 103),
(3, '24_1635395636_banner-web-laptop-11.png', '24_1635395636_banner-web-laptop-11.png', 103),
(4, '55_1635395864_banner1.jpg', '55_1635395864_banner1.jpg', 103),
(5, '33_1635395864_banner2.jpg', '33_1635395864_banner2.jpg', 103);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id_payment` int(10) NOT NULL,
  `id_customer` varchar(255) NOT NULL,
  `id_post_payment` int(11) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `code_bank` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id_payment`, `id_customer`, `id_post_payment`, `order_code`, `code_bank`, `time`) VALUES
(1, '182', 5, 'ecda9', 'NCB', '02-05-2021 09:42:39'),
(2, '182', 4, '2f829', 'NCB', '02-05-2021 09:46:51'),
(3, '182', 4, 'd8611', 'NCB', '02-05-2021 17:45:08'),
(4, '183', 15, '4f49d', 'NCB', '13-05-2021 20:40:44'),
(5, '184', 4, '5960c', 'NCB', '13-05-2021 20:56:58'),
(6, '185', 2, '2ec8d', 'NCB', '13-05-2021 20:58:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(10) NOT NULL,
  `sp_vi` varchar(255) NOT NULL,
  `sp_en` varchar(255) NOT NULL,
  `description_vi` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `product_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `sp_vi`, `sp_en`, `description_vi`, `description_en`, `product_slug`) VALUES
(1, 'Sản Phẩm 1', 'Product 1', '<p>D&ograve;ng m&aacute;y Thinkpad T460S thiết kế sang trọng v&agrave; cứng c&aacute;p</p>\r\n\r\n<p>CPU: Intel Core i3-10210U (thế hệ thứ 10).</p>\r\n\r\n<p>RAM: DDR4 8 GB&nbsp;(On board 4 GB +1 khe 4 GB).</p>\r\n\r\n<p>Ổ cứng: SSD 120GB M.2 PCIe, hỗ trợ khe cắm HDD SATA.</p>\r\n\r\n<p>Card đồ họa rời:&nbsp;NVIDIA GeForce MX250 2 GB.</p>', '<p>description 1</p>', 'san-pham-1'),
(2, 'Sản Phẩm 2', 'Product 2', '<p>CPU: Intel Core i5-10210U (thế hệ thứ 10).</p>\r\n\r\n<p>RAM: DDR4 8 GB&nbsp;(On board 4 GB +1 khe 4 GB).</p>\r\n\r\n<p>Ổ cứng: SSD 512 GB M.2 PCIe, hỗ trợ khe cắm HDD SATA.</p>\r\n\r\n<p>Card đồ họa rời:&nbsp;NVIDIA GeForce MX250 2 GB.</p>', '<p>description 2</p>', 'san-pham-2'),
(3, 'Sản Phẩm 3', 'Product 3', '<p>D&ograve;ng sản phẩm: MacBook</p>  <p>Tốc độ CPU: 2.0GHz</p>  <p>Bộ xử l&yacute; đồ họa (GPU): NVIDIA GeForce 9400M</p>  <p>Độ lớn m&agrave;n h&igrave;nh (inch): 13.3 inch</p>  <p>Ổ cứng (HDD): 160GB</p>  <p>Loại bộ vi xử l&yacute; (CPU): Intel Core 2 Duo</p>  <p>Dung lượng bộ nhớ ch&iacute;nh (RAM): 2.0GB</p>', 'description 3', 'san-pham-3'),
(4, 'Sản Phẩm 4', 'Product 4', '<p>CPU: Intel Core i7 720QM 4 nh&acirc;n x 1,6Ghz, Turboboost 2,8Ghz.</p>  <p>RAM: 2GB x 2 DD3 8500 1066Mhz.<br /> Card đồ họa: nVidia GTX260, 1GB VRAM<br /> Ổ cứng: 2 x 500GB, 7200 v&ograve;ng.<br /> Ổ đĩa: đọc Bluray, đọc + ghi DVD/CD.<br /> Giao tiếp: 4 cổng USB, ng&otilde; nhập/xuất audio, microphone, khe đọc thẻ SD/MMC/MS, Express Card 54, HDMI, eSata, mini-FireWire, cổng VGA.<br /> Pin: 6 cell, 4800mAh</p>', 'description 4', 'san-pham-4'),
(5, 'Sản Phẩm 5', 'Product 5', '<p>CPU: Intel Core i7 2630QM, 2.00 GHz<br />\r\nBộ nhớ: DDR3, 8 GB.<br />\r\nỔ đĩa 750GB 7200Rpm<br />\r\nM&agrave;n h&igrave;nh: 15.6 inch Led HD 1366- 768<br />\r\nĐồ họa: NVIDIA GeForce GTX 460M, 1.5 GB Uptu 3GB 192Bit&nbsp;<br />\r\n&Acirc;m thanh 2.1 C&ocirc;ng nghệ EAX Advanced HD 5.0, THX TruStudio Pro</p>', '<p>description 5</p>', 'san-pham-5'),
(6, 'Sản Phẩm 6', 'Product 6', '<p>CPU: Intel Core i7 2630QM, 2.00 GHz<br />\r\nBộ nhớ: DDR3, 8 GB.<br />\r\nỔ đĩa 750GB 7200Rpm<br />\r\nM&agrave;n h&igrave;nh: 15.6 inch Led HD 1366- 768<br />\r\nĐồ họa: NVIDIA GeForce GTX 460M, 1.5 GB Uptu 3GB 192Bit&nbsp;<br />\r\n&Acirc;m thanh 2.1 C&ocirc;ng nghệ EAX Advanced HD 5.0, THX TruStudio Pro</p>', '<p>description 6</p>', 'san-pham-6'),
(7, 'Sản Phẩm 7', 'Product 7', '<p>CPU: Intel Core i5-10210U (thế hệ thứ 10).</p>\r\n\r\n<p>RAM: DDR4 8 GB&nbsp;(On board 4 GB +1 khe 4 GB).</p>\r\n\r\n<p>Ổ cứng: SSD 512 GB M.2 PCIe, hỗ trợ khe cắm HDD SATA.</p>\r\n\r\n<p>Card đồ họa rời:&nbsp;NVIDIA GeForce MX250 2 GB.</p>', '<p>description 7</p>', 'san-pham-7'),
(8, 'Sản Phẩm 8', 'Product 8', '<p>bgfbgf</p>', 'description 8', 'san-pham-8'),
(9, 'Sản Phẩm 9', 'Product 9', '<p>Dell XPS 13 7390 I5 10210U 8GB 256SS 13.3FHD W10 Finger Silver</p>', 'description 9', 'san-pham-9'),
(10, 'Sản Phẩm 10', 'Product 10', 'frferwfrwferfe', 'description 10', 'san-pham-10'),
(11, 'Sản Phẩm 11', 'Product 11', '<p>HP Envy 13 ba1027TU i5 1135G7/8GB/256GB/Office H&amp;S2019/Win10 (2K0B1PA)</p>', 'description 11', 'san-pham-11'),
(13, 'Sản Phẩm 12', 'Product 12', 'Lenovo Thinkpad T490s', 'description 12', 'san-pham-12'),
(14, 'Sản Phẩm 13', 'Product 13', '<p>ssssssssssss</p>', 'description 13', 'san-pham-13'),
(15, 'Sản Phẩm 14', 'Product 14', '<p>CPU: Intel&reg;&nbsp; Core&trade; i3-7130U</p>  <p>RAM: 4GB DDR44</p>  <p>M&agrave;n h&igrave;nh:&nbsp;14&Prime; FHD IPS LCD with glass</p>  <p>Cổng kết nối:&nbsp;1 x USB 3.1 Type C Gen 1 5Gbps, 2 x USB 3.0 ( One with off-line charger), 1 x USB 2.0, 1 x SD Card Reader, 1 x HDMI (v1.4), 1 x DC-In, 1 x Headphone Jack, 1 x K-lock, Fingerprint reader.</p>', 'description 14', 'san-pham-14'),
(16, 'Sản Phẩm 15', 'Product 15', '<p>THE NEW RAZER BLADE 15 ADVANCE 2020</p>', 'description 15', 'san-pham-15'),
(17, 'Sản Phẩm 16', 'Product 16', '<p><em><strong>xcdcdc</strong></em></p>', 'description 16', 'san-pham-16'),
(18, 'Sản phẩm 17', 'Product 17', '<p>CPU: Intel Core i7-10210U (thế hệ thứ 10).</p>', 'description 17', 'san-pham-17'),
(19, 'Sản Phẩm 18', 'Product 18', '<p>Sản Phẩm 18</p>', 'description 18', 'san-pham-18'),
(24, 'Sản Phẩm 19', 'Product 19', '<p>Sản Phẩm 19</p>', 'description 19', 'san-pham-19'),
(25, 'Sản Phẩm 20', 'Product 20', '<p>Sản Phẩm 20</p>', 'description 20', 'san-pham-20'),
(26, 'Sản Phẩm 21', 'Product 21', '<p>Sản Phẩm 21</p>', 'description 21', 'san-pham-21'),
(27, 'Sản Phẩm 22', 'Product 22', '<p>22222222222222</p>', 'description 22', 'san-pham-22'),
(28, 'Sản Phẩm 23', 'Product 23', '<p>Sản Phẩm 23</p>', '<p>Product 23</p>', 'san-pham-23'),
(29, 'sqsqsq', 'sqsqs', '<p>sqsq</p>', '<p>sqsq</p>', 'sqsqsq'),
(30, 'xwwxw', 'xwxwxwx', '<p>xwxw</p>', '<p>xwxw</p>', 'xwwxw'),
(31, 'bgbgbg', 'bgbgb', '<p>bgbg</p>', '<p>bgbg</p>', 'bgbgbg'),
(32, 'frfrf', 'frfrf', '<p>frfr</p>', '<p>frfr</p>', 'frfrf'),
(33, 'crcrc', 'crcrc', '<p>crcrcr</p>', '<p>crcr</p>', 'crcrc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `id_post` int(10) DEFAULT NULL,
  `product_quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_soid` int(11) NOT NULL,
  `unit_price` int(100) DEFAULT NULL,
  `promotion_price` int(100) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(4) DEFAULT 0,
  `date_sale` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hours_sale` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_type`, `id_post`, `product_quantity`, `product_soid`, `unit_price`, `promotion_price`, `image`, `sub_image`, `new`, `date_sale`, `hours_sale`, `created_at`, `updated_at`) VALUES
(13, 2, 7, '0', 0, 3000000, 2700000, '1619760945.1afe610e80ac771a43941adfe2f8ac5b38405c2d82.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEvfHDYHNAFV3QnNLkSF_0Kl7fpjA4xdU4zA&usqp=CAU', 1, '2021/05/15', '22:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 5, '5', 1, 1500000, 1200000, '1619761795.ASUS-TUF-Gaming-F1558.jpg', '', 1, '2021/05/10', '19:28', '2020-11-01 13:00:25', '2021-03-31 05:15:32'),
(74, 1, 1, '26', 8, 14500000, 0, '1619762352.16771-laptop-acer-swift-3-sf314-57-52gb-176.jpg', '', 1, '2021/04/30', '20:29', '2020-11-21 11:42:06', '2021-04-01 06:18:47'),
(75, 3, 3, '3', 2, 19000000, 17000000, '1619762517.macbook 13inch63.jpg', '', 0, '2021/04/20', '19:28', '2020-11-22 02:28:07', '2021-03-13 11:37:33'),
(77, 2, 4, '4', 5, 15000000, 10000000, '1619761818.23b98f8a489c5b537975ab4f013d912797.jpg', '', 0, '2021/05/26', '19:28', '2020-11-22 11:45:10', '2020-12-08 08:18:53'),
(78, 2, 6, '10', 0, 16000000, 0, '1635389516_a337464d-11d0-4ab0-8d73-e75ca910d122_200x200.png', '', 1, '2021/10/29', '12:50', '2020-11-22 13:18:01', '2020-12-08 08:19:04'),
(86, 1, 2, '9', 1, 19000000, 12000000, '1619761062.acer-nitro-5-an515-54-main42.png', '', 1, '2021/05/29', '19:28', '2020-11-23 13:41:34', '2020-12-08 08:19:14'),
(87, 4, 9, '9', 1, 29000000, 0, '1619762061.637436514731163376_dell-inspiron-n5406-xam-145.png', '', 1, NULL, '12:53', '2020-11-23 13:44:10', '2020-12-08 08:19:24'),
(88, 7, 11, '6', 1, 22000000, 0, '1619761581.big_365667_untitled-132.jpg', '', 1, NULL, '12:41', '2020-11-23 14:03:09', '2021-04-02 11:16:03'),
(89, 5, 13, '4', 0, 16000000, 14000000, '1606791910.lenovo48.jpg', '', 1, '2021/04/12 ', '19:28', '2020-11-23 14:04:28', '2020-12-01 03:05:10'),
(90, 2, 16, '10', 0, 15000000, 0, '1619761926.NATION4GAMERSa-01-123.png', '', 1, NULL, '12:51', '2020-11-23 14:05:55', '2021-03-31 05:14:56'),
(91, 4, 15, '3', 0, 12000000, 11000000, '1619760916.70899.jpg', NULL, 1, '2021/05/23', '14:06', '2021-02-28 10:53:04', '2021-03-06 11:23:19'),
(93, 7, 17, '10', 0, 5000000, 0, '1619761611.HP_Pavilion_Gaming_15-254.jpg', NULL, 0, NULL, '12:46', '2021-02-28 11:03:42', '2021-03-06 11:26:27'),
(94, 7, 14, '10', 0, 5000000, 4000000, '1619761777.5de0fa5b2500004f19d2e9d026.jpg', NULL, 1, NULL, '12:46', '2021-02-28 11:07:47', '2021-03-06 11:26:44'),
(95, 6, 10, '10', 0, 20000000, 19000000, '1615638903.razer-book91.jpg', NULL, 0, NULL, '13:01', '2021-02-28 11:10:39', '2021-03-13 12:35:03'),
(96, 3, 8, '8', 1, 10000000, 0, '1619762534.12472_laptop_apple_macbook_air_mvfn2sa_gold_cpu_i5_132.jpg', NULL, 1, NULL, '13:01', '2021-02-28 11:29:20', '2021-03-13 12:40:52'),
(97, 1, 18, '10', 0, 5000000, 3500000, '1619760931.410F458D-FBAB-4A29-BC17-54DF85F6137D57.png', NULL, 1, '2021/05/18', '20:32', '2021-03-06 10:47:45', '2021-03-12 10:45:31'),
(98, 4, 19, '10', 0, 32000000, 0, '1619762082.unnamed92.jpg', NULL, 1, NULL, '12:54', '2021-03-06 11:06:33', '2021-03-12 13:29:38'),
(99, 6, 27, '10', 0, 20000000, 0, '1615638734.shopping (1)69.png', NULL, 0, NULL, '13:08', '2021-03-06 11:07:12', '2021-03-13 12:35:34'),
(100, 2, 24, '2', 0, 20000000, 18000000, '1617244911.ausu67.png', NULL, 1, '2021/05/30', '20:32', '2021-04-01 02:41:51', '2021-04-01 03:08:14'),
(101, 5, 25, '2', 0, 10000000, 0, '1619761264.lenovo-ideapad-l34028.png', NULL, 0, NULL, '12:37', '2021-04-03 05:20:51', '2021-04-03 05:20:51'),
(102, 5, 26, '2', 0, 20000000, 10000000, '1619761280.66603-511057-product_original-laptop-lenovo-legion-5-15arh05-82b500agpb-16gb-1tbssd-ryzen-7-4800h-156fhd-16gb-512ssd-1000ssd-gtx1650-noos54.jpg', NULL, 1, '2021/05/09', '22:11', NULL, NULL),
(103, 15, 28, '10', 0, 50000000, 0, '1620389257.Microsoft-Surface-Pro-7-PVR-00021-1237.jpg', NULL, 1, '2021/05/08', '11:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`rating_id`, `product_id`, `rating_number`) VALUES
(1, 16, 2),
(2, 16, 4),
(3, 77, 3),
(4, 74, 3),
(5, 74, 1),
(6, 91, 4),
(7, 91, 3),
(8, 91, 3),
(9, 91, 3),
(10, 91, 4),
(11, 91, 4),
(12, 91, 4),
(13, 91, 3),
(14, 91, 2),
(15, 91, 1),
(16, 91, 1),
(17, 91, 1),
(18, 100, 3),
(19, 100, 3),
(20, 86, 3),
(21, 95, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `status_slide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`, `status_slide`) VALUES
(18, NULL, '1620138936.dell_pro_hpb___web_banner30.jpg', 0),
(19, 'http://hiepsiit.com/', '1620177863.banner00361.jpg', 0),
(20, NULL, '1606225287.banner-web-laptop-1199.png', 1),
(22, 'http://hiepsiit.com/', '1606225797.banner417.jpg', 0),
(23, 'http://localhost:8081/shoplaptop_1/public/chi-tiet-san-pham/74', '1606791963.banner399.jpg', 1),
(24, NULL, '1615196388.gs75-20190107-152.jpg', 0),
(25, NULL, '1635481716.banner292.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social`
--

CREATE TABLE `social` (
  `social_id` int(10) NOT NULL,
  `provider_user_id` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `social`
--

INSERT INTO `social` (`social_id`, `provider_user_id`, `provider`, `user`) VALUES
(1, '100417728284693981439', 'GOOGLE', 27),
(2, '108072461302466486528', 'GOOGLE', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `id_statistic` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `sales` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `statistical`
--

INSERT INTO `statistical` (`id_statistic`, `order_date`, `sales`, `profit`, `quantity`, `total_order`) VALUES
(1, '2021-03-06', '10000000', '9999000', 1, 1),
(2, '2021-03-05', '30000000', '29999000', 2, 1),
(3, '2021-03-27', '29000000', '28999000', 2, 1),
(4, '2021-03-03', '29000000', '28998000', 2, 2),
(5, '2021-03-09', '14500000', '14499000', 1, 1),
(6, '2021-03-11', '14500000', '14499000', 1, 1),
(7, '2021-03-13', '43500000', '43498000', 2, 2),
(8, '2021-04-01', '22000000', '21999000', 1, 1),
(9, '2021-04-02', '19000000', '18999000', 1, 1),
(10, '2021-05-03', '19000000', '18999000', 1, 1),
(11, '2021-05-01', '1500000', '1499000', 1, 1),
(12, '2021-05-02', '15000000', '14999000', 1, 1),
(13, '2021-04-30', '14500000', '14499000', 1, 1),
(14, '2021-04-15', '30000000', '29999000', 2, 1),
(15, '2021-05-13', '19000000', '18999000', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name_type`, `image`) VALUES
(1, 'Acer', '1620386954.acer-logo-icon41.png'),
(2, 'Asus', 'asus.png'),
(3, 'Apple', '37150-apple-logo-icon-vector-icon-vector-eps.png'),
(4, 'Dell', 'dell-4-569248.png'),
(5, 'Lenovo', 'lenovo-226431.png'),
(6, 'Razer', 'razer-1-285174.png'),
(7, 'HP', '1024px-HP_logo_2012.png'),
(13, 'MSI', 'msi-1-286075.png'),
(14, 'Toshiba', 'toshiba-1-282829.png'),
(15, 'Microsoft', 'microsoft-26-722716.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_token` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `user_token`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(11, 'namphuong1a', 'bac@gmail.com', '$2y$10$f9T36WpzK80pllMnookQ0eGbOpy5/ri6Dmgsx2PN2z80FJC2JZ68q', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-13 09:41:44', '2021-04-26 10:12:35'),
(13, 'namphuong11', 'npn123@gmail.com', '$2y$10$Mmc.GBGffmiGqjVCH8Z8wOY2bH6iYST5S4C8aXudkdv2FWh0hwlMS', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-14 02:56:24', '2021-04-02 14:34:11'),
(19, 'Nam Admin 3', 'npn020811@gmail.com', '$2y$10$Ya3ks9kmawTCBgFz/n8coeUPgSgovIE8DkxElnUcvSGcHyxMY83ue', '0773654033', 'binh duong', NULL, NULL, 1, '2020-11-16 14:31:38', '2021-04-07 10:43:12'),
(20, 'namPhuong023', 'npn0211@gmail.com', '$2y$10$qp1SGtLzEOSsraCD7HDxnuTuclGncfcH6ZQURXhJ3KuJ7SZoAZhB.', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-17 02:45:54', '2021-04-02 14:34:17'),
(22, 'namPhuong021111', 'bac123@gmail.com', '$2y$10$Ls4KGY3DszKcL/2v.b5J.OpEAmHYkg30oexpJFg1UY4CfVAv.2MyW', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-18 06:13:32', '2021-04-02 14:34:20'),
(30, 'CaT CaT', '2nmusic020899@gmail.com', '$2y$10$JGcARn9I2Y93.JKpZQ0Icuh3vMK04uPFvPkm8ezk6wvxo3kmcgG2m', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-03-14 07:40:05', '2021-04-02 14:34:26'),
(31, 'Test Test Test', '2nmusic024444@gmail.com', '$2y$10$MDHnnvf6yjitmH2AmxsFv.7wO9MIWw7e3pqMaJHj.RZHlir21NjeG', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-04-03 12:41:35', '2021-04-07 10:35:38'),
(32, 'Nam Admin 4', 'admin@gmail.com', '$2y$10$JAOJihKYDwzmgWL.psvJXepGnrkQPbSS51L2zwGKGPmgUtTN8j5/2', '0773654036', 'binh duong', NULL, NULL, 1, NULL, NULL),
(33, 'demo', 'demo@gmail.com', '$2y$10$r4U2d26bJjuYrz3FhEiXLOuYpD/uJZq3Y4NJw6FWtH1qjyuYJlfcu', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:28:55', '2021-05-13 13:28:55'),
(34, 'demo2', 'demo2@gmail.com', '$2y$10$yegCn6Zw3Z8mZNwD9N9m8.p02pbYMmp1sTdvT0k.cvhM1hsW.oNXW', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:32:16', '2021-05-13 13:32:16'),
(35, 'demo1', 'demo1@gmail.com', '$2y$10$hZK69jLVFtkr5oEBPgTN2OqoER5DXfBowRprVnVY2c9Ejfomaj7BC', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:37:00', '2021-05-13 13:37:00'),
(36, 'test1', 'test1@gmail.com', '$2y$10$EYD5NyEMCBR9HJE3TE1Jx..yxL5Awoou5YdK.KZq4nF.KxMDEnidu', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:54:50', '2021-05-13 13:54:50'),
(37, 'aaaaaaaa', 'aaa@gmail.com', '$2y$10$yEsnwQ08/CocnGgVaV8f/e/wkjPlk8Gc3Y65E0jZdvI4SXS95kBMO', '11212121212', 'aaaaaaa', NULL, NULL, 2, '2021-10-23 07:46:43', '2021-10-23 07:46:43'),
(38, 'swswswsws', 'swswsw@gmail.com', '$2y$10$SubC6y6bbibovVgeGsoMo.bBob/MaWeM6zqx.ztsslRZZt9oyWn7a', '121212121', 'wswswswsw', NULL, NULL, 2, '2021-10-23 07:47:36', '2021-10-23 07:47:36'),
(39, 'dwdwdw', 'dwdwdwdwdwdwd@gmail.com', '$2y$10$OZSkKEvoO42Il11bQcLpXOJcNU4a8TpoSNi3wPuu.4xSPL0yKZdm2', '12212121212', 'dwdwdw', NULL, NULL, 2, '2021-10-23 07:49:59', '2021-10-23 07:49:59'),
(40, 'wdwdwd', 'zzzzzzz@gmail.com', '$2y$10$0AQ.cpqcuJTPsowg16deteoKe4fXbIGemdhZq/yCqJbnYz1uB22o6', '121212121212', 'dwdwdw', NULL, NULL, 2, '2021-10-23 07:51:59', '2021-10-23 07:51:59'),
(41, 'dededededed', 'edededededededede@gmail.com', '$2y$10$E2omuishuNKKG2wInyvxj.HNXc5mWGs9pTsCB5J8VxmD/AjwOaxeG', '2121212121', 'ddeded', NULL, NULL, 2, '2021-10-23 08:01:00', '2021-10-23 08:01:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `visitors`
--

CREATE TABLE `visitors` (
  `id_visitors` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date_visitor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `visitors`
--

INSERT INTO `visitors` (`id_visitors`, `ip_address`, `date_visitor`) VALUES
(1, '192.168.2.1', '2021-01-03'),
(2, '192.168.1.1', '2021-03-11'),
(3, '::1', '2021-03-30'),
(4, '127.0.0.1', '2021-05-12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id_bill_detail`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `gallery_product_id` (`gallery_product_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_payment`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `zazaza` (`id_post`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

--
-- Chỉ mục cho bảng `statistical`
--
ALTER TABLE `statistical`
  ADD PRIMARY KEY (`id_statistic`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id_visitors`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id_bill_detail` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id_payment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `statistical`
--
ALTER TABLE `statistical`
  MODIFY `id_statistic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id_visitors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`gallery_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`),
  ADD CONSTRAINT `zazaza` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
