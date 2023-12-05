-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2023 lúc 01:42 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travelfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sdt` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `point` double NOT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `sdt`, `email`, `password`, `address`, `point`, `role`) VALUES
(1, 'trung', 123, '', '75367', '1/1 quận 1', 0, 1),
(2, 'thịnh', 123, '', '75367', '2/2 quận 2', 0, 1),
(3, 'huy', 123, '', '75367', '3/3 quận 3', 0, 1),
(4, 'sang', 123, '', '75367', '4/4 quận 4', 0, 1),
(5, 'sang123', 1234567890, 'sangnmps34186@fpt.edu.vn', '53439', '', 0, 0),
(7, 'tuan', 123, '', '75367', '', 0, 1),
(10, 'sang123', 0, 'minhsangg0311@gmail.com', '20108', '', 0, 0),
(11, 'minhsang123', 123456789, 'sangnmps34186@fpt.edu.vn', 'sang123', '', 0, 0),
(12, 'jsjdjsf55', 123456789, 'ádasd', 'sadjasf566', '', 0, 0),
(13, 'jsjdjsf55', 123456789, 'ádasd', 'sjdhsjfh342', '', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
