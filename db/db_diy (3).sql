-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 23, 2020 lúc 08:30 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_diy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_admin`
--

CREATE TABLE `account_admin` (
  `id` int(8) NOT NULL,
  `username` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(36) COLLATE utf8_vietnamese_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `account_admin`
--

INSERT INTO `account_admin` (`id`, `username`, `password`, `title`) VALUES
(1, 'admin1', '123', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_login`
--

CREATE TABLE `account_login` (
  `id` int(8) NOT NULL,
  `username` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `nameAccount` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(36) COLLATE utf8_vietnamese_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `account_login`
--

INSERT INTO `account_login` (`id`, `username`, `nameAccount`, `password`, `title`) VALUES
(1, 'user1', 'name_user1', '123', 'User'),
(2, 'user2 ', 'name_user2 ', '123', 'User'),
(3, 'user3 ', 'name_user3 ', '123', 'User'),
(4, 'user4 ', 'name_user4 ', '123', 'User'),
(8, 'user5 ', 'Norman ', '123', 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(8) NOT NULL,
  `title` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `category` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `link_image` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `allowed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `category`, `status`, `link_image`, `allowed`) VALUES
(14, 'Norman', 'Trang trí chiếc cốc bằng cách vẽ', '#Trang trí', '-Ý tưởng đã hoàn thiện', 'img_uploads/23150609072020.jpg', 0),
(17, 'Norman', 'Cách củng cố vườn của bạn bằng cách lát đá', '#Lối vào, #Xây dựng', '-Ý tưởng chưa hoàn thiện', 'img_uploads/00082910072020.jpg', 1),
(18, 'Norman', 'Vệ sinh máy giặt chỉ bằng 2 sản phầm không độc hại', '#Dọn dẹp', '-Ý tưởng đã hoàn thiện', 'img_uploads/00095910072020.jpg', 1),
(20, 'Norman', 'Thảm tập Yoga và đèn chụp sơn móng tay', '#Trang trí', '-Ý tưởng đã hoàn thiện', 'img_uploads/09335010072020.jpg', 1),
(21, 'Norman', 'Tôi đang gặp vấn đề việc trang trí rèm cửa', '#Cửa sổ, #Xây dựng', '-Hỏi đáp', 'img_uploads/09345410072020.jpg', 1),
(29, 'Norman', 'Trang trí phòng bếp của bạn', 'aaaaaaaaaaaaaaa', '-Hỏi đáp', 'img_uploads/07510616072020.jpg', 0),
(30, 'Norman', 'Phòng tắm của bạn như thế nào', 'bbbbbbbbbbbb', '-Hỏi đáp', 'img_uploads/14424917072020.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new_post`
--

CREATE TABLE `new_post` (
  `id` int(8) NOT NULL,
  `username` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `category` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `new_post`
--

INSERT INTO `new_post` (`id`, `username`, `content`, `category`) VALUES
(1, 'Norman', 'a', 'a'),
(2, 'Norman', 'b', 'b'),
(3, 'Norman', 'c', 'c');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account_admin`
--
ALTER TABLE `account_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `account_login`
--
ALTER TABLE `account_login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `new_post`
--
ALTER TABLE `new_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account_admin`
--
ALTER TABLE `account_admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `account_login`
--
ALTER TABLE `account_login`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `new_post`
--
ALTER TABLE `new_post`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
