-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1

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
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `totalPayment` double(10,3) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_eatery` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
  `tendm` varchar(50) NOT NULL,
  `uutien` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(1, 'Món Việt'),
(2, 'Món Nhật'),
(3, 'Nước uống'),
(4, 'Món chay');
INSERT INTO `catalog` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(9, 'Tất cả', 0, 1),
(10, 'Đồ ăn', 0, 1),
(11, 'Đồ uống', 0, 1),
(12, 'Đồ chay', 0, 1),
(13, 'Tráng miệng', 0, 1),
(14, 'Bánh kem', 0, 1),
(15, 'Món lẩu', 0, 1),
(17, 'Đồ ăn nhanh', 0, 1),
(18, 'Phở', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `information` varchar(255) NOT NULL,
  `postdate` date NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_dish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail`
--

CREATE TABLE `detail` (
  `id` int(10) NOT NULL,
  `quantity` int(20) NOT NULL,
  `totalPayment` double(10,3) NOT NULL,
  `id_dish` int(10) NOT NULL,
  `id_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dish`
--

CREATE TABLE `dish` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `price` double(10,3) NOT NULL,
  `id_eatery` int(10) NOT NULL,
  `id_catalog` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- Đang đổ dữ liệu cho bảng `dish`
--

INSERT INTO `dish` (`id`, `name`, `img`, `price`, `id_eatery`, `id_catalog`) VALUES
(1, 'Bún đậu cô 3, ít bún nhiều đậu', 'bun-dau.jpeg', 100.000, 4, 1),
(2, 'Cơm trộn Hàn Quốc', 'com-tron.jpeg', 30.000, 5, 1),
(3, 'Phở Hà Nội xưa', 'pho-hanoi.jpg', 30.000, 5, 1),
(4, 'xôi', 'xoi-chien.jpg', 25.000, 5, 1);
  `price` double NOT NULL,
  `id_eatery` int(10) NOT NULL,
  `id_catalog` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `eatery`
--

CREATE TABLE `eatery` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sdt` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `eatery`
--

INSERT INTO `eatery` (`id`, `name`, `address`, `sdt`) VALUES
(4, 'Bún đậu cô 3', '146/3 Nguyễn Văn Trỗi, Phú Nhuận', 9131415),
(5, 'Cờm sườn chú sáu', '142/2 Phạm Văn Đồng', 9161718);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sdt` int(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `point` double NOT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `sdt`, `password`, `address`, `point`, `role`) VALUES
(1, 'trung', 0, '123', '1/1 quận 1', 0, 1),
(2, 'thinh', 0, '123', '2/2 quận 2', 0, 1),
(3, 'huy', 0, '123', '3/3 quận 3', 0, 1),
(4, 'sang', 0, '123', '4/4 quận 4', 0, 1),
(5, 'tuan', 0, '123', '', 0, 1);
INSERT INTO `user` (`id`, `name`, `sdt`, `address`, `point`, `role`) VALUES
(1, 'Nguyễn Thành Trung', 1010101, '1/1 quận 1', 0, 0),
(2, 'Lê Minh Thịnh', 2020202, '2/2 quận 2', 0, 0),
(3, 'Nguyễn Văn GIa Huy', 3030303, '3/3 quận 3', 0, 0),
(4, 'Nguyễn Minh Sang', 4040404, '4/4 quận 4', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`id_user`),
  ADD KEY `fk_bil_eatery` (`id_eatery`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_dish` (`id_dish`),
  ADD KEY `fk_detail_bill` (`id_bill`);

--
-- Chỉ mục cho bảng `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dish_catalog` (`id_catalog`),
  ADD KEY `fk_dish_eatery` (`id_eatery`);

--
-- Chỉ mục cho bảng `eatery`
--
ALTER TABLE `eatery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `eatery`
--
ALTER TABLE `eatery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bil_eatery` FOREIGN KEY (`id_eatery`) REFERENCES `eatery` (`id`),
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `fk_detail_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_detail_dish` FOREIGN KEY (`id_dish`) REFERENCES `dish` (`id`);

--
-- Các ràng buộc cho bảng `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `fk_dish_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`),
  ADD CONSTRAINT `fk_dish_eatery` FOREIGN KEY (`id_eatery`) REFERENCES `eatery` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
