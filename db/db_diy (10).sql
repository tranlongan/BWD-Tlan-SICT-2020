-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2020 lúc 06:41 AM
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
(8, 'user5 ', 'Norman ', '123', 'User'),
(9, 'user6 ', 'name_user4 ', '123', 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content_post`
--

CREATE TABLE `content_post` (
  `id` int(8) NOT NULL,
  `source_code` mediumtext COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `editor`
--

CREATE TABLE `editor` (
  `id` int(8) NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

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
  `chooseLevel` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `saved post` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `username`, `title`, `category`, `status`, `link_image`, `allowed`, `content_post`, `material`, `cost`, `time_do`, `chooseLevel`, `saved post`) VALUES
(14, 'Norman', 'Trang trí chiếc cốc bằng cách vẽ', '#Trang trí', 'Đề xuất ý tưởng', 'img_uploads/23150609072020.jpg', 1, 'null', 0, NULL, '', '', 0),
(20, 'Norman', 'Thảm tập Yoga và đèn chụp sơn móng tay', '#Trang trí', 'Đề xuất ý tưởng', 'img_uploads/09335010072020.jpg', 0, 'null', 0, NULL, '', '', 0),
(21, 'Norman', 'Tôi đang gặp vấn đề việc trang trí rèm cửa', '#Cửa sổ, #Xây dựng', 'Cần tư vấn', 'img_uploads/09345410072020.jpg', 1, 'null', 0, NULL, '', '', 0),
(29, 'Norman', 'Trang trí phòng bếp của bạn', 'aaaaaaaaaaaaaaa', 'Đề xuất ý tưởng', 'img_uploads/07510616072020.jpg', 0, 'null', 0, NULL, '', '', 0),
(71, 'Norman', 'Norman', '123', 'Ý tưởng đã hoàn thiện', 'img_uploads/12012027072020.jpg', 0, '<p>1</p>', 0, '1', '', '', 0),
(102, 'Norman', 'Cách củng cố vườn của bạn bằng cách lát đá', '#Xây dựng,#Vườn', 'Ý tưởng đã hoàn thiện', 'img_uploads/10441906102020.jpg', 1, '<p>Phần hai của Làm vườn Bảo trì Thấp mô tả một giai đoạn khác của dự án lòng sông cạn của chúng tôi.</p><p>Tôi đã nói rất ngắn gọn về tính bền vững của việc xé cỏ và thay thế bằng lòng lạch khô trong Phần 1. Việc xây dựng một khu vườn đá tiếp tục với mục tiêu của chúng tôi là giảm thiểu việc bảo trì và tăng tính bền vững trong sân của chúng tôi: tất cả các loại cây trồng đều chịu hạn và không không cần tưới thêm nước để giữ cho chúng phát triển mạnh. Một khu vườn đá là một cách tuyệt vời để áp dụng việc bảo tồn nước vào thực tế!</p><figure class=\"image\"><img src=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg\" srcset=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_80 80w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_160 160w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_240 240w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_320 320w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_400 400w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_480 480w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_560 560w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_640 640w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/3a7579d13805519f9fa50317ea19102b0c54410881c3fbc9.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p>Một khi chúng tôi đã có luống đất khô, góc vườn nơi các hàng rào giao nhau cần được quan tâm. Tôi không muốn lấp đầy góc đó bằng cây tuyết tùng hoặc cây thường xanh vì tôi không quá thích chúng. Thay vào đó, chúng tôi xây một khu vườn đá để bổ sung cho góc sau của sân sau nhỏ xíu của mình.</p><p>Để có cảm giác về khu vực chúng tôi phải làm việc, đây là ảnh chụp từ trên cao về góc sân nơi chúng tôi xây dựng khu vườn đá của mình.</p><figure class=\"image\"><img src=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg\" srcset=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_80 80w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_160 160w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_240 240w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_320 320w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_400 400w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_480 480w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_560 560w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_640 640w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/be83ac5d30bd2e5d4ef0531d4ea6dea5039a788e2ab7a98e.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p>Để bắt đầu xây dựng, trước tiên, chúng tôi xây dựng các tấm ván chống lưng được đặt trên hàng rào để chứa đất đến độ cao mà chúng tôi muốn nâng cao vườn đá. Hubs quyết định xây dựng nó thành một mảnh trong nhà để xe và sau đó chuyển nó vào sân sau thành một đơn vị. Anh ấy đã sử dụng dây đai kim loại mạ kẽm và nẹp góc để giữ tất cả lại với nhau (ngoài việc dán keo).</p><figure class=\"image\"><img src=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg\" srcset=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_80 80w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_160 160w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_240 240w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_320 320w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_400 400w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_480 480w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_560 560w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_640 640w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/afe242363c8b8b9051381026877da0013feb09988f5cad8c.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><p>Hubs chôn tấm ván hậu bên dưới hàng rào và đóng một số cọc gỗ phía trước để giữ cố định, đảm bảo nó bằng phẳng. Anh ta không vặn nó vào hàng rào vì nó dựa vào hai sân sau của hàng xóm chúng tôi và nó cần phải độc lập trong trường hợp họ quyết định sửa chữa hoặc thay thế bất kỳ hàng rào nào.</p><figure class=\"image\"><img src=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg\" srcset=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg/w_154 154w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg/w_234 234w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg/w_314 314w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg/w_394 394w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg/w_474 474w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg/w_554 554w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/bd38d903d4780010e3e01a6211098832b08b3dd8f926c01e.jpg/w_634 634w\" sizes=\"100vw\" width=\"634\"></figure><p>Chúng tôi làm khô các tảng đá xếp chồng lên nhau theo mô hình bán nguyệt kéo dài từ góc này sang góc khác của tấm ván lót nền (bạn có thể xem hình dạng trên tổng quan về kế hoạch của chúng tôi bên dưới).</p><figure class=\"image\"><img src=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/e75b5b0cd11dcf2709ea70a0c00c18dba22a42ecd2a3b003.jpg\" srcset=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/e75b5b0cd11dcf2709ea70a0c00c18dba22a42ecd2a3b003.jpg/w_121 121w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/e75b5b0cd11dcf2709ea70a0c00c18dba22a42ecd2a3b003.jpg/w_201 201w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/e75b5b0cd11dcf2709ea70a0c00c18dba22a42ecd2a3b003.jpg/w_281 281w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/e75b5b0cd11dcf2709ea70a0c00c18dba22a42ecd2a3b003.jpg/w_361 361w\" sizes=\"100vw\" width=\"361\"></figure><p>Sau đó chúng tôi xếp chồng lên hàng tảng thứ hai. Chúng tôi đặt hàng thứ hai này sâu hơn vào khu vườn đá hơn chúng tôi đặt hàng đầu tiên bằng cách thêm đất bên dưới để hỗ trợ nó dọc theo các cạnh phía sau. Chúng tôi gắn các tảng đá với nhau giống như trò chơi ghép hình, tuy nhiên chúng tôi không sử dụng bất kỳ loại keo nào. Chúng tôi không quá cầu kỳ với tính thẩm mỹ của việc xếp chồng những viên đá vì chúng tôi muốn nó trông mộc mạc và bị thời gian bào mòn. Chúng tôi đã lấp đầy toàn bộ không gian bằng bụi bẩn (giữ dưới mức của bảng hỗ trợ).</p><figure class=\"image\"><img src=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg\" srcset=\"https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_80 80w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_160 160w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_240 240w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_320 320w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_400 400w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_480 480w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_560 560w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_640 640w, https://75171.cdn.cke-cs.com/Pk9ZxSIlwxw14Mj80ZOy/images/2dfdabd3dcbe5f0efce374e2691b2b317d4197d99db76d1f.jpg/w_720 720w\" sizes=\"100vw\" width=\"720\"></figure><figure class=\"table\"><table><tbody><tr><td>Tên vật liệu&nbsp;</td><td>Nơi có thê mua</td><td>Link sản phẩm(nếu có)</td></tr><tr><td>Vật liệu A</td><td>Địa điểm A</td><td>Không có</td></tr><tr><td>Vật liệu B</td><td>Địa điểm B</td><td>Không có</td></tr></tbody></table></figure>', 2, '$10', '4 ngày', 'Trung bình', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `id` int(8) NOT NULL,
  `user_id` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `title`, `done`) VALUES
(16, 'Norman', 'Trang trí chiếc cốc bằng cách vẽ', 1),
(17, 'Norman', 'Norman', 1),
(18, 'Norman', 'sdfaf', 1),
(19, 'Norman', 'Cách củng cố vườn của bạn bằng cách lát đá', 1),
(20, 'Norman', 'Cách củng cố vườn của bạn bằng cách lát đá', 1),
(21, 'Norman', 'Phòng tắm của bạn như thế nào', 1),
(22, 'Norman', 'bbbbbbbbbb', 1),
(23, 'Norman', 'aNew', 1),
(24, 'Norman', 'aNew', 1),
(25, 'Norman', 'Phòng tắm của bạn như thế nào', 1),
(26, 'Norman', 'aaaaaaaaaaa', 1),
(27, 'Norman', 'aNew', 1),
(28, 'Norman', 'test', 1),
(29, 'Norman', 'test', 1),
(30, 'Norman', 'test', 1),
(31, 'Norman', 'aaaa', 1),
(32, 'Norman', 'Test', 1),
(33, 'Norman', 'b', 1),
(34, 'Norman', 'a', 1),
(35, 'Norman', 'a', 1),
(36, 'Norman', 'b', 1),
(37, 'Norman', 'a', 1),
(38, 'Norman', 'b', 1),
(39, 'Norman', 'ádáđá', 1),
(40, 'Norman', 'Cách củng cố vườn của bạn bằng cách lát đá', 1);

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
-- Chỉ mục cho bảng `content_post`
--
ALTER TABLE `content_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `content_post`
--
ALTER TABLE `content_post`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
