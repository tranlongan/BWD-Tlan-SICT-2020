-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2020 lúc 06:19 AM
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
  `username` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `title` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `category` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `link_image` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `allowed` tinyint(1) NOT NULL,
  `content_post` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `material` int(8) NOT NULL,
  `cost` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `time_do` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `chooseLevel` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `username`, `title`, `category`, `status`, `link_image`, `allowed`, `content_post`, `material`, `cost`, `time_do`, `chooseLevel`) VALUES
(14, 'Norman', 'Trang trí chiếc cốc bằng cách vẽ', '#Trang trí', 'Đề xuất ý tưởng', 'img_uploads/23150609072020.jpg', 1, 'null', 0, NULL, '', ''),
(20, 'Norman', 'Thảm tập Yoga và đèn chụp sơn móng tay', '#Trang trí', 'Đề xuất ý tưởng', 'img_uploads/09335010072020.jpg', 0, 'null', 0, NULL, '', ''),
(21, 'Norman', 'Tôi đang gặp vấn đề việc trang trí rèm cửa', '#Cửa sổ, #Xây dựng', 'Cần tư vấn', 'img_uploads/09345410072020.jpg', 1, 'null', 0, NULL, '', ''),
(29, 'Norman', 'Trang trí phòng bếp của bạn', 'aaaaaaaaaaaaaaa', 'Đề xuất ý tưởng', 'img_uploads/07510616072020.jpg', 0, 'null', 0, NULL, '', ''),
(30, 'Norman', 'Phòng tắm của bạn như thế nào', '#Phòng tắm', 'Cần tư vấn', 'img_uploads/14424917072020.jpg', 1, 'null', 0, NULL, '', ''),
(71, 'Norman', 'Norman', '123', 'Ý tưởng đã hoàn thiện', 'img_uploads/12012027072020.jpg', 0, '<p>1</p>', 0, '1', '', ''),
(74, 'Norman', 'aNew', '#Test', 'Ý tưởng đã hoàn thiện', 'img_uploads/16063428072020.jpg', 0, '<p>a</p><figure class=\"image\"><img src=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/39b8885e4c4e58938ccb98d7411ec1a7a9103e2bdf2d3110.jpg\" srcset=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/39b8885e4c4e58938ccb98d7411ec1a7a9103e2bdf2d3110.jpg/w_100 100w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/39b8885e4c4e58938ccb98d7411ec1a7a9103e2bdf2d3110.jpg/w_180 180w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/39b8885e4c4e58938ccb98d7411ec1a7a9103e2bdf2d3110.jpg/w_260 260w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/39b8885e4c4e58938ccb98d7411ec1a7a9103e2bdf2d3110.jpg/w_340 340w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/39b8885e4c4e58938ccb98d7411ec1a7a9103e2bdf2d3110.jpg/w_420 420w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/39b8885e4c4e58938ccb98d7411ec1a7a9103e2bdf2d3110.jpg/w_500 500w\" sizes=\"100vw\" width=\"500\"></figure>', 11, '$12', '1 giờ', 'Trung bình'),
(86, 'Norman', 'Cách củng cố vườn của bạn bằng cách lát đá', '#Xây dựng,#Vườn', 'Ý tưởng đã hoàn thiện', 'img_uploads/22062528072020.jpg', 1, '<p>Phần 2 của Bảo trì vườn thấp mô tả một giai đoạn khác của dự án lạch khô của chúng tôi.</p><p>Tôi đã nói rất ngắn gọn về tính bền vững việc xé cỏ và thay thế nó bằng một lạch khô trong phần 1. Xây dựng một khu vườn đá tiếp tục với mục tiêu của chúng tôi là giảm bảo trì và tăng tính bền vững trong sân của chúng tôi: các đồn điền đều chịu hạn và không bị hạn hán không cần tưới nước thêm để giữ cho chúng phát triển mạnh. Một khu vườn đá là một cách tuyệt vời để đưa vào thực tế!</p><figure class=\"image\"><img src=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg\" srcset=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_80 80w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_160 160w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_240 240w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_320 320w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_400 400w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_480 480w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_560 560w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_640 640w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/9e594003e935d0946ecfa60b0f64f1d2bc9ab9d7ebc3ce45.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p>Khi chúng tôi có một cái lạch khô tại chỗ, góc vườn của chúng tôi nơi hàng rào giao nhau cần một chút quan tâm. Tôi không muốn lấp đầy góc đó bằng gỗ tuyết tùng hoặc cây thường xanh vì tôi không thích chúng lắm. Thay vào đó, chúng tôi xây dựng một khu vườn đá để bổ sung cho góc sau của sân sau nhỏ bé của chúng tôi.</p><p>Để hiểu được khu vực chúng tôi phải làm việc, đây là một cảnh quay trên góc của sân nơi chúng tôi xây dựng khu vườn đá của chúng tôi.</p><figure class=\"image\"><img src=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg\" srcset=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_80 80w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_160 160w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_240 240w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_320 320w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_400 400w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_480 480w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_560 560w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_640 640w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/f457284dda9f63ac626fc2156e764d6d1bfee6a0620b1f3e.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p>Để bắt đầu xây dựng, đầu tiên chúng tôi xây dựng các bảng dự phòng được đặt chống lại hàng rào để chứa đất đến độ cao mà chúng tôi muốn nâng cao khu vườn đá. Hubs quyết định xây dựng nó thành một mảnh trong nhà để xe và sau đó di chuyển nó vào sân sau như một đơn vị. Ông đã sử dụng dây đai kim loại mạ kẽm và nẹp góc để giữ tất cả lại với nhau (ngoài keo).</p><figure class=\"image\"><img src=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg\" srcset=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_80 80w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_160 160w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_240 240w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_320 320w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_400 400w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_480 480w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_560 560w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_640 640w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/70dccb677f9da0e5c60d657d92add43c61003514b9e7a416.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p>Các trung tâm đã chôn tấm ván lót phía dưới hàng rào và lái một số cọc gỗ phía trước để giữ an toàn, đảm bảo nó được san bằng. Anh ta đã không vặn nó vào hàng rào vì nó dựa vào hai sân sau của hàng xóm chúng tôi và nó cần phải độc lập trong trường hợp họ quyết định sửa chữa hoặc thay thế bất kỳ hàng rào nào.</p><figure class=\"image\"><img src=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg\" srcset=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg/w_154 154w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg/w_234 234w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg/w_314 314w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg/w_394 394w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg/w_474 474w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg/w_554 554w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/dfd98994669bec854b46254afb56e0136f98be316b6df084.jpg/w_634 634w\" sizes=\"100vw\" width=\"634\"></figure><p>Chúng tôi làm khô các tảng đá xếp chồng lên nhau theo mô hình bán nguyệt kéo dài từ một góc của bảng dự phòng sang góc khác (bạn có thể thấy hình dạng trên tổng quan về kế hoạch của chúng tôi dưới đây).</p><figure class=\"image\"><img src=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg\" srcset=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_80 80w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_160 160w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_240 240w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_320 320w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_400 400w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_480 480w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_560 560w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_640 640w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/308578db6964cdb37d7a9663e6be6ebfcebd93c8ee4f1cc9.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p>Góc đông nam của sân sau của chúng tôi đã đi từ một đám cỏ cô đơn đến không gian xanh tươi tốt này.</p><figure class=\"image\"><img src=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg\" srcset=\"https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_80 80w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_160 160w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_240 240w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_320 320w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_400 400w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_480 480w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_560 560w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_640 640w, https://73493.cdn.cke-cs.com/Hfh85xGZu6mCWHP32Lqm/images/fa3efd545219199b76af112bf507b3ba0f0cb7141683a908.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p><strong>Tài liệu gợi ý:</strong></p><figure class=\"table\"><table><tbody><tr><td>Tên vật liệu cần đến</td><td>Chỗ có thể mua</td></tr><tr><td>Vật liệu A</td><td>Địa chỉ A</td></tr><tr><td>Vật liệu B</td><td>Địa chỉ B</td></tr></tbody></table></figure>', 2, '$5', '2 ngày', 'Trung bình');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
