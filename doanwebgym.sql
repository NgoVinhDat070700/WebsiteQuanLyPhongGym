-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 05:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanwebgym`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dichvu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `created_at`, `updated_at`, `tieude`, `video`, `noidung`, `dichvu_id`) VALUES
(1, '2021-05-18 03:14:06', '2021-05-18 03:14:06', '[DT12] Hướng Dẫn Tập Đùi trước Đúng Cách - Walking Lunges', 'J0W3-L_Ke3s', 'Xem video để biết thêm', 1),
(2, '2021-05-18 03:37:25', '2021-05-18 03:37:25', 'Tập luyện Boxing cơ bản tập 1', 'dXMUqghS4uo', 'Cách thủ đúng cách :\r\n1 thả lỏng cơ thể \r\n2 đưa chân thuận xuống, giảm diện tích\r\n3 hạ cằm\r\n4 hai tay nắm hờ bảo vệ phần đầu , đầy khuỷu tay xuống', 2),
(3, '2021-05-23 08:23:47', '2021-05-23 08:23:47', '[N1] Những nguyên tắc tập ngực hiệu quả trong gym / thể hình', 'Ls5HWkdtzqc', 'Xem video để hiểu rõ cách tập', 1),
(4, '2021-05-23 08:25:05', '2021-05-23 08:25:05', '[MO03] Tập mông - Hyperextension', 'fngZkO8aPA8', 'Hướng dẫn Tập Mông tại Swequity', 1),
(5, '2021-05-23 19:27:15', '2021-05-23 19:27:15', '[T2] Tối ưu hoá bài tập Tay với đầy đủ \"ROM\"', 'X-8rqO-nW-g', 'Hướng dẫn những kĩ năng tập tay hiệu quả (Xem chi tiết trên video)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenkhachhangmua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `luong` int(11) NOT NULL,
  `kinhnghiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dichvu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `created_at`, `updated_at`, `tenkhachhangmua`, `gioitinh`, `image`, `ngaysinh`, `luong`, `kinhnghiem`, `mota`, `dichvu_id`) VALUES
(1, '2021-05-17 18:50:48', '2021-05-17 18:50:48', 'Bùi Xuân Mạnh', 'Nam', '60a31d77e963d-Bùi Xuân Mạnh.jpg', '1996-05-02', 1500000, '2 năm', 'Chứng nhận từ Học Viện Y Học Thể Thao Quốc Gia (NASM) Hoa Kỳ\r\n25 năm huấn luyện thể thao tại Hoa Kỳ, Đức, Hồng Kông, Malaysia, Singapore, và hiện nay là Việt Nam tại California Fitness & Yoga Centers.\r\nHuấn luyện cho nhiều ngôi sao hàng đầu.', 1),
(2, '2021-05-17 19:22:42', '2021-05-17 19:22:42', 'Hoàng Mạnh Thắng', 'Nam', '60a324f20c247-Hoàng Mạnh Thắng.jpg', '1995-05-06', 20000000, '3 năm', 'ABACNCNAKAKA', 1),
(3, '2021-05-23 03:35:46', '2021-05-23 03:35:46', 'Nguyễn Thiên Đông', 'Nam', '60aa300282baa-Nguyễn Thiên Đông.jpg', '1995-05-19', 15000000, '2 năm', 'HLV quốc tế kỳ cựu Lesmills Brazil các bộ môn: Bodycombat, Bodypump, Bodystep, RPM, BodyAttack, Bodybalance, BodyVive, PowerJump.', 1),
(4, '2021-05-23 03:57:53', '2021-05-23 03:57:53', 'Trần Minh Hoàng', 'Nam', '60aa3531d8970-Trần Minh Hoàng.jpg', '1994-04-16', 15000000, '3 năm', 'Gặt hái nhiều thành tích về Marathon: hoàn thành đường chạy 42km trong 5 tiếng tại giải giải Danang International Marathon 2015, 42km địa hình trong 10 tiếng giải Vietnam Mountain Marathon 2015 diễn ra ở Sapa (Lào Cai), chặng 42km trong 6 tiếng tại giải Lăng Cô Marathon.', 1),
(5, '2021-05-23 04:00:18', '2021-05-23 04:00:18', 'Nguyễn Công Toàn', 'Nam', '60aa35c24f5e2-Nguyễn Công Toàn.jpg', '1993-05-04', 15000000, '3 năm', 'Từng tham gia các cuộc thi boxing Vietnam 2018 Hạng 8 Men Physique Musclecontest Philippines.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `created_at`, `updated_at`, `tendichvu`, `image`, `mota`, `gia`, `trangthai`) VALUES
(1, '2021-05-15 03:48:50', '2021-05-15 03:48:50', 'Gyms', '609fa712da4a5-Gyms.jpg', 'Tập luyện với các dụng cụ giúp bạn tăng cơ mới nhất', 2000000, 'Hoạt động'),
(2, '2021-05-18 03:16:19', '2021-05-18 03:16:19', 'Boxing', '60a393f32b572-Boxing.jpg', 'Học được cách bảo vệ bản thân khỏi kẻ xấu và giúp bạn có cơ thể săn chắc đốt mỡ hiệu quả', 3000000, 'Hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenkhachhangmua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thongtin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `created_at`, `updated_at`, `tenkhachhangmua`, `sodienthoai`, `diachi`, `thongtin`, `trangthai`) VALUES
(2, '2021-05-15 04:20:05', '2021-05-15 04:28:42', 'Ngô Vĩnh Đạt', '0969168364', 'Hà Nội', 'Gửi đến EPU', 'Đã thanh toán'),
(3, '2021-05-16 08:02:32', '2021-05-16 08:02:32', 'Nguyễn Minh Nghĩa', '0969123123', 'Hà Nội', 'Gửi tới 235 Hoàng Quốc Việt', 'Chưa thanh toán'),
(4, '2021-05-16 08:03:56', '2021-05-16 08:03:56', 'Kiều Văn Đạo', '0969123123', 'Hà Nội', 'ABNAMA', 'Chưa thanh toán'),
(5, '2021-05-16 08:17:38', '2021-06-03 04:36:04', 'Nguyễn Minh Nghĩa', '0969123123', 'Hà Nội', 'JHJAUJANH', 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhucau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dichvu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `created_at`, `updated_at`, `tenkhachhang`, `sodienthoai`, `email`, `nhucau`, `trangthai`, `dichvu_id`) VALUES
(1, '2021-05-20 07:55:52', '2021-05-20 07:55:52', 'Ngô Vĩnh Đạt', '0969168364', 'datdudan2k@gmail.com', 'ABVX', 'Chưa thanh toán', 2),
(2, '2021-05-20 08:01:57', '2021-05-20 08:01:57', 'Ngô Vĩnh Đạt', '0969168364', 'datdudan2k@gmail.com', 'ABVX', 'Chưa thanh toán', 2),
(3, '2021-05-20 08:04:19', '2021-05-20 08:04:19', 'Ngô Vĩnh Đạt', '0969168364', 'datdudan2k@gmail.com', 'ABVX', 'Chưa thanh toán', 2),
(14, '2021-05-20 08:35:55', '2021-05-20 08:35:55', 'Ngô Vĩnh Đạt', '0969168364', 'datdudan2k@gmail.com', 'ÂNJANA', 'Chưa thanh toán', 2),
(18, '2021-05-20 20:21:42', '2021-05-20 20:21:42', 'Đạt Ngô', '0969123123', 'datdudan2k@gmail.com', 'Giảm cân, tăng cơ', 'Đã thanh toán', 2),
(19, '2021-05-20 20:42:51', '2021-05-20 20:42:51', 'Đạo', '0969168364', 'ngovinhdat070700@gmail.com', 'ẠIAOJKAOKOA', 'Chưa thanh toán', 2),
(20, '2021-05-20 20:50:52', '2021-05-20 20:50:52', 'Tuấn', '0969123567', 'ngovinhdat070700@gmail.com', 'ABCJAKA', 'Chưa thanh toán', 2),
(21, '2021-05-20 20:51:38', '2021-05-20 20:51:38', 'Tuấn', '0969123567', 'ngovinhdat070700@gmail.com', 'ABCJAKA', 'Chưa thanh toán', 2),
(22, '2021-05-20 20:55:56', '2021-05-20 20:55:56', 'Tuấn', '0969123567', 'ngovinhdat070700@gmail.com', 'ABCJAKA', 'Chưa thanh toán', 2),
(23, '2021-05-21 02:35:11', '2021-05-21 02:35:11', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NÂNJA', 'Chưa thanh toán', 2),
(24, '2021-05-21 02:37:20', '2021-05-21 02:37:20', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NÂNJA', 'Chưa thanh toán', 2),
(25, '2021-05-21 02:42:07', '2021-05-21 02:42:07', 'Ngô Vĩnh Đạt', '0969168364', 'tuancacheppm6@gmail.com', 'ậokaoakoa', 'Chưa thanh toán', 2),
(26, '2021-05-21 02:46:39', '2021-05-21 02:46:39', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NÂNJA', 'Chưa thanh toán', 2),
(27, '2021-05-21 02:47:42', '2021-05-21 02:47:42', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'jnn', 'Chưa thanh toán', 1),
(28, '2021-05-21 03:30:12', '2021-05-21 03:30:12', 'Đạo', '0969123123', 'tuancacheppm6@gmail.com', 'ABCAJUNCBAIJN', 'Chưa thanh toán', 2),
(29, '2021-05-21 03:34:31', '2021-05-21 03:34:31', 'Đạo', '0969123123', 'tuancacheppm6@gmail.com', 'ABCAJUNCBAIJN', 'Chưa thanh toán', 2),
(30, '2021-05-21 03:39:03', '2021-05-21 03:39:03', 'Đạo', '0969123123', 'tuancacheppm6@gmail.com', 'ABCAJUNCBAIJN', 'Chưa thanh toán', 2),
(31, '2021-05-21 03:39:58', '2021-05-21 03:39:58', 'Đạo', '0969123123', 'tuancacheppm6@gmail.com', 'ABCAJUNCBAIJN', 'Chưa thanh toán', 2),
(32, '2021-05-21 17:22:14', '2021-05-21 17:22:14', 'Tuấn', '0969168364', 'datdudan2k@gmail.com', 'HẠHAANIAJM', 'Chưa thanh toán', 2),
(33, '2021-05-21 17:26:09', '2021-05-21 17:26:09', 'Tuấn', '0969168364', 'datdudan2k@gmail.com', 'HẠHAANIAJM', 'Chưa thanh toán', 2),
(34, '2021-05-21 17:34:16', '2021-05-21 17:34:16', 'Tuấn', '0969168364', 'datdudan2k@gmail.com', 'HẠHAANIAJM', 'Chưa thanh toán', 2),
(35, '2021-05-21 17:37:33', '2021-05-21 17:37:33', 'Tuấn', '0969168364', 'datdudan2k@gmail.com', 'HẠHAANIAJM', 'Chưa thanh toán', 2),
(36, '2021-05-21 17:45:04', '2021-05-21 17:45:04', 'Tuấn', '0969168364', 'datdudan2k@gmail.com', 'HẠHAANIAJM', 'Chưa thanh toán', 2),
(37, '2021-05-21 17:45:37', '2021-05-21 17:45:37', 'Đạo', '0969168364', 'datdudan2k@gmail.com', 'BẬBNAJNAJKAN', 'Chưa thanh toán', 2),
(38, '2021-05-21 17:49:15', '2021-05-21 17:49:15', 'Đạo', '0969168364', 'datdudan2k@gmail.com', 'BẬBNAJNAJKAN', 'Chưa thanh toán', 2),
(39, '2021-05-21 17:49:30', '2021-05-21 17:49:30', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'ADAC', 'Chưa thanh toán', 2),
(40, '2021-05-21 17:56:37', '2021-05-21 17:56:37', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'ADAC', 'Chưa thanh toán', 2),
(41, '2021-05-21 17:57:01', '2021-05-21 17:57:01', 'Tuấn', '0969168364', 'tuancacheppm6@gmail.com', 'AHBAJBAJA', 'Chưa thanh toán', 2),
(42, '2021-05-21 18:03:41', '2021-05-21 18:03:41', 'Tuấn', '0969168364', 'tuancacheppm6@gmail.com', 'AHBAJBAJA', 'Chưa thanh toán', 2),
(43, '2021-05-21 18:04:59', '2021-05-21 18:04:59', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'AKAMKAJOA', 'Chưa thanh toán', 2),
(44, '2021-05-21 18:08:57', '2021-05-21 18:08:57', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'AKAMKAJOA', 'Chưa thanh toán', 2),
(45, '2021-05-21 18:14:45', '2021-05-21 18:14:45', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'AKAMKAJOA', 'Chưa thanh toán', 2),
(46, '2021-05-21 18:14:49', '2021-05-21 18:14:49', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'AKAMKAJOA', 'Chưa thanh toán', 2),
(47, '2021-05-21 18:25:33', '2021-05-21 18:25:33', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NAUHAIAJAIAJ', 'Chưa thanh toán', 2),
(48, '2021-05-21 18:27:21', '2021-05-21 18:27:21', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NAUHAIAJAIAJ', 'Chưa thanh toán', 2),
(49, '2021-05-21 18:27:27', '2021-05-21 18:27:27', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NAUHAIAJAIAJ', 'Chưa thanh toán', 2),
(50, '2021-05-21 18:30:15', '2021-05-21 18:30:15', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NAUHAIAJAIAJ', 'Chưa thanh toán', 2),
(51, '2021-05-21 18:31:26', '2021-05-21 18:31:26', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'NAUHAIAJAIAJ', 'Chưa thanh toán', 2),
(52, '2021-05-22 07:13:50', '2021-05-22 07:13:50', 'Đạo', '0969123123', 'tuancacheppm6@gmail.com', 'ÂNNAIAKNMKA', 'Chưa thanh toán', 2),
(53, '2021-05-22 07:16:38', '2021-05-22 07:16:38', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'ẬNNJNACJANJKC', 'Chưa thanh toán', 2),
(54, '2021-05-22 07:20:14', '2021-05-22 07:20:14', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'ẬNNJNACJANJKC', 'Chưa thanh toán', 2),
(55, '2021-05-22 07:22:41', '2021-05-22 07:22:41', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'BÂHBJABJAB', 'Chưa thanh toán', 2),
(56, '2021-05-22 07:27:52', '2021-05-22 07:27:52', 'Tuấn', '0969123123', 'tuancacheppm6@gmail.com', 'BÂHBJABJAB', 'Chưa thanh toán', 2),
(57, '2021-05-22 07:29:24', '2021-05-22 07:29:24', 'Nghia', '0969123123', 'tuancacheppm6@gmail.com', 'ẬNNAKNAKIA', 'Chưa thanh toán', 2),
(58, '2021-05-22 07:35:47', '2021-05-22 07:35:47', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'AJANAJANAJ', 'Chưa thanh toán', 2),
(59, '2021-05-22 07:37:19', '2021-05-22 07:37:19', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'AJANAJANAJ', 'Chưa thanh toán', 2),
(60, '2021-05-22 07:42:42', '2021-05-22 07:42:42', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'AJANAJANAJ', 'Chưa thanh toán', 2),
(61, '2021-05-22 07:45:51', '2021-05-22 07:45:51', 'Ngô Vĩnh Đạt', '0969123123', 'tuancacheppm6@gmail.com', 'AJANAJANAJ', 'Chưa thanh toán', 2),
(62, '2021-05-22 20:59:33', '2021-05-22 20:59:33', 'Tuấn', '0969168364', 'tuancacheppm6@gmail.com', 'NAKNAKNXA', 'Chưa thanh toán', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenloaisanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `created_at`, `updated_at`, `tenloaisanpham`) VALUES
(1, '2021-05-15 03:49:05', '2021-05-15 03:49:05', 'Whey Proteins'),
(2, '2021-05-23 04:01:42', '2021-05-23 04:01:42', 'Mass'),
(3, '2021-05-23 04:02:23', '2021-05-23 04:02:23', 'BCAA');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2021_04_21_144920_create_dichvu_table', 1),
(28, '2021_04_21_145711_create_loaisanpham_table', 1),
(29, '2021_04_21_145905_create_giohang_table', 1),
(30, '2021_04_21_150652_create_coach_table', 1),
(31, '2021_04_21_151402_create_blog_table', 1),
(32, '2021_04_21_151728_create_khachhang_table', 1),
(33, '2021_04_21_152139_create_sanpham_table', 1),
(34, '2021_04_21_152614_create_spgiohang_table', 1),
(35, '2021_05_13_114835_add_soluong_to_spgiohang_table', 1),
(36, '2021_05_15_100027_delete_id_to_spgiohang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaisanpham_id` bigint(20) UNSIGNED NOT NULL,
  `dichvu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `created_at`, `updated_at`, `tensanpham`, `image`, `gia`, `mota`, `trangthai`, `loaisanpham_id`, `dichvu_id`) VALUES
(1, '2021-05-15 03:50:13', '2021-05-15 03:50:13', 'While Pro', '609fa7656eaaf-While Pro.jpg', 1650000, 'Tanngw cơ giảm đau', 'Còn', 1, 1),
(2, '2021-05-16 08:01:48', '2021-05-16 08:01:48', 'Mass', '60a133dcc8d48-Mass.jpg', 1500000, 'Tăng cơ', 'Còn', 1, 1),
(3, '2021-05-23 04:41:22', '2021-05-23 04:41:22', 'DYMATIZE SUPER MASS GAINER, 12 LBS (5,4 KG)', '60aa3f62d1f6b-DYMATIZE SUPER MASS GAINER, 12 LBS (5,4 KG).jpg', 1350000, 'Super Mass Gainer là một sản phẩm tăng cân chất lượng cao. Chứa hàm lượng Calories cao giúp bạn tăng cân dễ dàng hơn đồng thời sở hữu 1 bảng thành phần cực khủng khiến rất nhiều khách hàng đã tin tưởng và lựa chọn sản phẩm cho mục tiêu tăng cân của mình.', 'Còn', 2, 1),
(4, '2021-05-23 04:43:26', '2021-05-23 04:43:26', 'SỮA TĂNG CÂN ALLMAX NUTRITION QUICK MASS, 6 LBS (1', '60aa3fde9b135-SỮA TĂNG CÂN ALLMAX NUTRITION QUICK MASS, 6 LBS (1.jpg', 1150000, 'Allmax Quick Mass - dòng mass trung năng lượng, cao Protein, đến từ CANADA. Quick Mass là sản phẩm của 1 nghiên cứu khoa học thành công của trường Đại học California Hoa Kỳ - nơi sản sinh ra các công trình nghiên cứu khoa học hàng đầu thế giới. Đã được chứng minh tăng tới #3kg chỉ trong 8 tuần.', 'Còn', 2, 1),
(5, '2021-05-23 04:44:42', '2021-05-23 04:44:42', 'ELITELABS MASS MUSCLE GAINER, 20 LBS (9.07 KG)', '60aa402a50864-ELITELABS MASS MUSCLE GAINER, 20 LBS (9.07 KG).jpg', 2900000, 'Đối với tất cả những người gặp vấn đề khó tăng cân đều cảm thấy tự ti vì BODY của mình khi đi ra chỗ đông người. Đặc biệt hơn là đã cố gắng ăn rất nhiều nhưng cơ thể không thể nào hấp thụ và chuyển hóa được năng lượng vào trong cơ thể.', 'Còn', 2, 1),
(6, '2021-05-23 04:51:51', '2021-05-23 04:51:51', 'ON GOLD STANDARD 100% WHEY PROTEIN, 5 LBS', '60aa41d7e975e-ON GOLD STANDARD 100% WHEY PROTEIN, 5 LBS.jpg', 1450000, 'Whey Protein là thành phần chủ yếu trong sản phẩm sữa tăng cơ Whey Gold Standard và ngoài ra, còn một số chất dinh dưỡng khác là: 140 calo, 24G Protein , 1g chất béo, 3 carb, 1g đường, 5.5g BCAA, 4g glutamine và axit glutamic trong mỗi muỗng.', 'Còn', 1, 1),
(7, '2021-05-23 04:55:13', '2021-05-23 04:55:13', 'Impact whey isolate 2.5kg 100 servings', '60aa42a18ad5b-Impact whey isolate 2.5kg 100 servings.jpg', 1490000, 'Impact whey isolate 2.5kg 100 servings là sữa thể hình lý tưởng cho bất cứ ai tham gia vào tập luyện thường xuyên và đang tìm kiếm một nguồn protein chất lượng đáp ứng cho các buổi tập', 'Còn', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `spgiohang`
--

CREATE TABLE `spgiohang` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `giohang_id` bigint(20) UNSIGNED NOT NULL,
  `sanpham_id` bigint(20) UNSIGNED NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spgiohang`
--

INSERT INTO `spgiohang` (`created_at`, `updated_at`, `giohang_id`, `sanpham_id`, `gia`, `soluong`) VALUES
('2021-05-15 04:20:06', '2021-05-15 04:20:06', 2, 1, 1650000, 1),
('2021-05-16 08:02:32', '2021-05-16 08:02:32', 3, 1, 1650000, 1),
('2021-05-16 08:02:33', '2021-05-16 08:02:33', 3, 2, 1500000, 1),
('2021-05-16 08:03:56', '2021-05-16 08:03:56', 4, 1, 1650000, 1),
('2021-05-16 08:03:56', '2021-05-16 08:03:56', 4, 2, 1500000, 1),
('2021-05-16 08:17:38', '2021-05-16 08:17:38', 5, 1, 1650000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'VinhDat', 'datdudan2k@gmail.com', NULL, '$2y$10$gOL.EXSkZv9r1LfIZAEAgecSfJqTgwxp.h1fB22mhPs6dbuAU21Q2', NULL, '2021-05-18 21:15:47', '2021-05-18 21:15:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_dichvu_id_foreign` (`dichvu_id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coach_dichvu_id_foreign` (`dichvu_id`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khachhang_dichvu_id_foreign` (`dichvu_id`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_loaisanpham_id_foreign` (`loaisanpham_id`),
  ADD KEY `sanpham_dichvu_id_foreign` (`dichvu_id`);

--
-- Indexes for table `spgiohang`
--
ALTER TABLE `spgiohang`
  ADD KEY `spgiohang_giohang_id_foreign` (`giohang_id`),
  ADD KEY `spgiohang_sanpham_id_foreign` (`sanpham_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_dichvu_id_foreign` FOREIGN KEY (`dichvu_id`) REFERENCES `dichvu` (`id`);

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_dichvu_id_foreign` FOREIGN KEY (`dichvu_id`) REFERENCES `dichvu` (`id`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_dichvu_id_foreign` FOREIGN KEY (`dichvu_id`) REFERENCES `dichvu` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_dichvu_id_foreign` FOREIGN KEY (`dichvu_id`) REFERENCES `dichvu` (`id`),
  ADD CONSTRAINT `sanpham_loaisanpham_id_foreign` FOREIGN KEY (`loaisanpham_id`) REFERENCES `loaisanpham` (`id`);

--
-- Constraints for table `spgiohang`
--
ALTER TABLE `spgiohang`
  ADD CONSTRAINT `spgiohang_giohang_id_foreign` FOREIGN KEY (`giohang_id`) REFERENCES `giohang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `spgiohang_sanpham_id_foreign` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
