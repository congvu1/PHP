-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 15, 2023 lúc 04:53 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sitebanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(200) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `email`, `pass`) VALUES
(1, 'Admin', 'Admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_donhang`
--

CREATE TABLE `chitiet_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) DEFAULT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(11) NOT NULL,
  `thanhtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_donhang`
--

INSERT INTO `chitiet_donhang` (`id_donhang`, `id_sanpham`, `soluongmua`, `mausac`, `size`, `thanhtien`) VALUES
(175, 1, 100, 'Xanh', 35, 125000000),
(176, 20, 1, 'Kem', 35, 300000),
(176, 25, 2, 'Đen', 38, 1440000),
(177, 16, 10, 'Kem', 38, 7000000),
(178, 17, 20, 'Kem', 37, 12000000),
(178, 12, 1, 'Đỏ', 37, 2400000),
(179, 38, 1, 'Kem', 38, 2500000),
(180, 16, 3423, 'Kem', 35, 2147483647),
(180, 4, 1, 'Xanh', 35, 1550000),
(181, 44, 2, '', 35, 100000),
(182, 1, 1, 'Xanh', 35, 1799000),
(182, 3, 2, 'Xanh', 35, 220000),
(183, 14, 1, 'Kem', 35, 1990000),
(183, 2, 1, 'Xanh', 35, 1599000),
(184, 1, 1, 'Xanh', 35, 1799000),
(184, 4, 1, 'Xanh', 36, 930000),
(186, 36, 1, 'Kem', 35, 1333333),
(186, 4, 1, 'Xanh', 35, 930000),
(187, 40, 1, 'Kem', 35, 2390000),
(188, 3, 1, 'Xanh', 35, 110000),
(189, 1, 1, 'Xanh', 35, 1799000),
(189, 2, 1, 'Xanh', 35, 1599000),
(189, 3, 2, 'Xanh', 35, 220000),
(190, 3, 1, 'Xanh', 35, 110000),
(191, 3, 1, 'Xanh', 35, 110000),
(192, 2, 1, 'Xanh', 35, 1599000),
(193, 4, 1, 'Xanh', 35, 930000),
(194, 14, 1, 'Kem', 35, 1990000),
(194, 15, 1, 'Kem', 35, 1690000),
(194, 2, 1, 'Xanh', 35, 1599000),
(194, 3, 5, 'Xanh', 35, 550000),
(194, 4, 3, 'Xanh', 35, 2790000),
(195, 2, 2, 'Xanh', 35, 3198000),
(195, 3, 1, 'Xanh', 35, 110000),
(196, 3, 1, 'Xanh', 35, 110000),
(197, 4, 1, 'Xanh', 35, 930000),
(198, 3, 1, 'Xanh', 38, 110000),
(200, 13, 1, 'Kem', 35, 2890000),
(201, 38, 1, 'Kem', 35, 2290000),
(202, 3, 2, 'Xanh', 35, 220000),
(203, 3, 4, 'Xanh', 35, 440000),
(204, 3, 23, 'Xanh', 35, 2530000),
(205, 3, 3, 'Xanh', 35, 330000),
(205, 4, 1, 'Xanh', 35, 930000),
(206, 3, 23, 'Xanh', 35, 2530000),
(207, 3, 1, 'Xanh', 35, 110000),
(208, 4, 1, 'Xanh', 35, 930000),
(208, 3, 1, 'Xanh', 38, 110000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia_sanpham`
--

CREATE TABLE `danhgia_sanpham` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `binhluan` varchar(300) DEFAULT NULL,
  `rate` int(50) DEFAULT NULL,
  `ngaycmt` datetime DEFAULT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia_sanpham`
--

INSERT INTO `danhgia_sanpham` (`id`, `id_sanpham`, `user_id`, `binhluan`, `rate`, `ngaycmt`, `likes`) VALUES
(39, 23, 81, '', 2, '2023-03-02 19:22:31', NULL),
(40, 2, 81, '', 5, '2023-03-02 21:42:28', NULL),
(41, 15, 81, '', 2, '2023-03-03 17:39:35', NULL),
(42, 15, 81, '', 2, '2023-03-03 17:42:18', NULL),
(43, 15, 81, '', 2, '2023-03-03 17:42:38', NULL),
(44, 3, 81, '', 0, '2023-03-03 17:42:58', NULL),
(45, 4, 81, 'nice', 0, '2023-03-03 17:49:49', NULL),
(46, 4, 81, 'nice', 0, '2023-03-03 17:50:07', NULL),
(47, 4, 81, '', 5, '2023-03-03 17:50:10', NULL),
(48, 4, 81, '', 5, '2023-03-03 17:50:37', NULL),
(49, 4, 81, 'nice', 4, '2023-03-03 17:50:43', NULL),
(50, 4, 81, 'ga', 0, '2023-03-03 17:50:50', NULL),
(51, 4, 81, 'ga', 0, '2023-03-03 17:51:10', NULL),
(52, 4, 81, 'ga', 0, '2023-03-03 17:51:15', NULL),
(53, 4, 81, 'ga', 0, '2023-03-03 17:51:20', NULL),
(54, 1, 81, 'huhuhahah', 5, '2023-03-03 17:54:04', NULL),
(55, 3, 81, 'hay', 2, '2023-03-04 15:19:37', NULL),
(56, 1, 81, '', 2, '2023-03-04 15:31:03', NULL),
(57, 1, 81, '', 2, '2023-03-04 15:33:52', NULL),
(58, 1, 81, '', 2, '2023-03-04 15:35:05', NULL),
(59, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:26:03', NULL),
(60, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:26:46', NULL),
(61, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:26:57', NULL),
(62, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:27:25', NULL),
(63, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:27:30', NULL),
(64, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:27:39', NULL),
(65, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:28:21', NULL),
(66, 2, 84, 'San pham xau quac', 5, '2023-03-05 23:28:51', NULL),
(67, 14, 84, 'san pham xau thay ghe', 1, '2023-03-07 15:15:25', NULL),
(68, 49, 84, 'qua u la cute', 5, '2023-03-07 15:22:02', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `tendanhmuc`) VALUES
(1, 'Giày WILLIAM LOAFER'),
(2, 'Giày Da GNTA0219-D da bóng \r\n'),
(3, 'Phụ Kiện FRANK'),
(4, 'Ví Da'),
(5, 'Cặp Da'),
(6, 'SLING BAG'),
(7, 'CLUTCH'),
(8, 'BALO nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `ngaydat` date DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `id_user`, `ngaydat`, `thanhtien`, `trangthai`) VALUES
(171, 42, '2023-02-19', 1890000, 0),
(172, 42, '2023-02-19', 24300000, 0),
(174, 42, '2023-02-19', 17700000, 0),
(175, 42, '2023-02-20', 125000000, 0),
(176, 63, '2023-02-24', 4980000, 0),
(177, 63, '2023-02-24', 7000000, 0),
(178, 64, '2023-02-24', 14400000, 0),
(179, 64, '2023-02-24', 2500000, 0),
(180, 81, '2023-02-28', 2147483647, NULL),
(181, 81, '2023-03-02', 100000, NULL),
(182, 81, '2023-03-02', 2019000, NULL),
(183, 81, '2023-03-02', 3589000, NULL),
(184, 81, '2023-03-02', 2729000, NULL),
(185, 81, '2023-03-03', 840000, NULL),
(186, 81, '2023-03-03', 2263333, NULL),
(187, 81, '2023-03-04', 2390000, NULL),
(188, 81, '2023-03-04', 110000, NULL),
(189, 81, '2023-03-05', 4548000, NULL),
(190, 81, '2023-03-05', 110000, NULL),
(191, 81, '2023-03-05', 110000, NULL),
(192, 81, '2023-03-05', 1599000, NULL),
(193, 81, '2023-03-05', 930000, NULL),
(194, 81, '2023-03-05', 8619000, NULL),
(195, 81, '2023-03-05', 3308000, NULL),
(196, 84, '2023-03-05', 110000, NULL),
(197, 84, '2023-03-05', 930000, NULL),
(198, 84, '2023-03-06', 110000, NULL),
(199, 84, '2023-03-06', 840000, NULL),
(200, 84, '2023-03-06', 2890000, NULL),
(201, 84, '2023-03-06', 2290000, NULL),
(202, 81, '2023-03-07', 220000, NULL),
(203, 81, '2023-03-07', 440000, NULL),
(204, 81, '2023-03-07', 2530000, NULL),
(205, 81, '2023-03-07', 1260000, NULL),
(206, 81, '2023-03-07', 2530000, NULL),
(207, 84, '2023-03-07', 110000, NULL),
(208, 84, '2023-03-14', 1040000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(100) NOT NULL,
  `id_danhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`MaLoai`, `TenLoai`, `id_danhmuc`) VALUES
(1, 'Giày WILLIAM LOAFER', 2),
(2, 'Giày Da GNTA0219-D da bóng ', 1),
(4, 'Giày Converse One Star', 1),
(6, 'Phụ Kiện FRANK', 2),
(11, 'Sneaker Đế Cao', 1),
(19, 'Cặp Da', 1),
(20, 'Ví Da', 4),
(21, 'SLING BAG', 1),
(22, 'CLUTCH', 1),
(23, 'BALO nữ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(50) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `mota` varchar(300) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `giamgia` float DEFAULT NULL,
  `nhomsp` varchar(50) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `mausac` varchar(10) DEFAULT NULL,
  `slton` int(11) DEFAULT NULL,
  `id_loai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `mota`, `img`, `giamgia`, `nhomsp`, `size`, `mausac`, `slton`, `id_loai`) VALUES
(1, 'Giày WILLIAM LOAFER', 1799000, '', 'qq1.jpg', 0, 'spm', 35, 'Xanh', 897, 1),
(2, 'Giày EDEN MOCCASIN', 1599000, '', 'qq2.jpg', 0, 'spm', 36, 'Đỏ', 994, 1),
(3, 'Giày da Aristino', 110000, '', 'qq3.jpg', 0, 'spm', 37, 'Vàng', 928, 1),
(4, 'Giày da nam Chelsea Boot cổ họa tiết da bóng', 930000, '', 'qq4.jpg', 0, 'spm', 38, 'Đen', 989, 1),
(5, 'Giày lười da nam màu nâu quai ngang', 929999, '', 'spbc1.jpg', 0, 'spbc', 35, 'Kem ', 1000, 2),
(6, 'Giày tây da nam buộc dây phối màu nâu', 990000, '', 'spbc2.jpg', 0, 'spbc', 35, 'Xanh', 1000, 2),
(9, 'Giày độn nam quai da ngang', 710000, '', 'pb1.jpg', 0, 'sppb', 36, 'Đen', 1000, 2),
(10, 'Giày lười da nam màu nâu vân phối viền kẻ', 820000, '', 'pb2.jpg', 0, 'sppb', 37, 'Trắng', 1000, 2),
(11, 'Giày tây da nam mũi vuông vân đục lỗ', 930000, '', 'pb3.jpg', 0, 'sppb', 36, 'Đỏ', 1000, 2),
(12, 'Giày tây nam màu đen da bóng', 830000, '', 'pb4.jpg', 0, 'sppb', 37, 'Xanh', 999, 2),
(13, 'ANDERSON MESSENGER BAG', 2890000, '', 'kk1.jpg', 0, 'pkk', NULL, 'Kem', 999, 6),
(14, 'CILLIAN SLING BAG', 1990000, '', 'kk2.jpg', 0, 'pkk', NULL, 'Xanh', 998, 6),
(15, 'DANIEL SLING POUCH', 1690000, '', 'kk3.jpg', 0, 'pkk', NULL, 'Trắng', 999, 6),
(16, 'Giày tây nam buộc dây kiểu dáng Oxford GNTACS008-D', 490000, '', 'spm5.jpg', 0, 'pkk', 36, 'Đen', -2433, 2),
(17, 'Giày da nam dáng Derby', 9100000, '', 'kk5.jpg', 0, 'pkk', 35, 'Đỏ', 980, 2),
(18, 'Converse Star Chevron Jogger', 500000, '', 'pkk6.jpg', 0, 'pkk', 35, 'Kem', 1000, 4),
(19, 'Converse Collegiate Text SS Tee', 400000, '', 'pkk7.jpg', 0, 'pkk', 38, 'Xanh', 1000, 4),
(20, 'Converse “Metal CONS” Pull Over Hoodie', 300000, '', 'pkk8.jpg', 0, 'pkk', 38, 'Trắng', 999, 4),
(21, 'Cặp da công sở nam da thật cao cấp Lano CD116', 2250000, '', 'gg1.jpg', 1575000, 'spgg', NULL, 'Đen', 1000, 19),
(23, 'Cặp da công sở thời trang nam tính đựng laptop 14 ', 2200000, '', 'gg3.jpg', 1645000, 'spgg', NULL, ' Xanh', 1000, 19),
(24, 'Ví da cá sấu handmade 1 mặt thời trang nhỏ gọn', 1350000, '', 'gg4.jpg', 945000, 'spgg', NULL, 'Trắng', 1000, 20),
(25, 'Ví da nam handmade dáng đứng có ngăn khoá bí mật L', 950000, '', 'gg5.jpg', 665000, 'spgg', NULL, 'Kem', 998, 20),
(26, 'Ví da cá sấu khâu tay thủ công mẫu thiết kế Lano', 165000, '', 'gg6.jpg', 115500, 'spgg', NULL, 'Đỏ', 1000, 20),
(27, 'Túi da nam cầm tay kết hợp đeo chéo mẫu mới 2022', 1450000, '', 'gg7.jpg', 1015000, 'spgg', NULL, 'Đen', 1000, 22),
(29, 'Túi da đan cầm tay khoá số mẫu mới 2022 Lano', 1430000, '', 'gg9.jpg', 1001000, 'spgg', NULL, 'Trắng', 1000, 22),
(30, 'Túi đeo trước ngực nam Lano da bò thật 100% TDL37 ', 1200000, '', 'gg10.jpg', 800000, 'spgg', NULL, 'Đen', 1000, 21),
(31, 'Túi đeo ngực nam Lano da bò thời trang phong cách', 1150000, '', 'gg11.jpg', 805000, 'spgg', NULL, 'Đỏ', 1000, 21),
(32, 'Túi đeo bụng nam da bò nhỏ gọn tiện lợi', 1550000, '', 'gg12.jpg', 805000, 'spgg', NULL, 'Kem', 1000, 21),
(34, 'Balo da nữ cao cấp thời trang tiện lợi Lano ', 275000, '', 'gg14.jpg', 192500, 'spgg', NULL, 'Trắng', 990, 23),
(35, 'Balo da nữ cao cấp thời trang Lano mẫu mới 2021', 1620000, '', 'gg15.jpg', 1134000, 'spgg', NULL, 'Đen', 1000, 23),
(36, 'SANTIAGO M TOTE BAG', 1333333, '', 'kk9.jpg', 0, 'pkk', NULL, 'Kem', 999, 6),
(37, 'YOURNAME BAG CHARM & KEY HOLDER', 259000, '', 'kk10.jpg', 0, 'pkk', NULL, 'Trắng', 1000, 6),
(38, 'CHRIS DUO MESSENGER BAG', 2290000, '', 'kk11.jpg', 0, 'pkk', NULL, 'Đen', 998, 6),
(39, 'ANDREW BELT 30MM', 699000, '', 'kk12.jpg', 0, 'pkk', NULL, 'Xanh', 1000, 6),
(40, 'CALVIN MESSENGER BAG', 2390000, '', 'kk13.jpg', 0, 'pkk', NULL, 'Đỏ', 999, 6),
(44, 'WINSTON BELT 30MM', 899900, NULL, 'pkk14.jpg', 0, NULL, NULL, 'kem', 498, 6),
(45, 'OSLO BELT 30MM', 650000, NULL, 'pkk15.jpg', 0, NULL, NULL, 'Đen', 500, 6),
(49, 'cong dep zai ', 20000000, NULL, '2.jpg', 1000000, NULL, 36, 'xanh', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `username`
--

CREATE TABLE `username` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `diachi` text DEFAULT NULL,
  `dienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `username`
--

INSERT INTO `username` (`id`, `hoten`, `email`, `pass`, `diachi`, `dienthoai`) VALUES
(42, '1', 'h', '3d9c54f0f1691f80916c4b04045b17bc', 'Dak Nong', '02'),
(63, 'abczxd', 'abczxd@gmail.com', '4297f44b13955235245b2497399d7a93', 'Dak Nong', '0329597880'),
(64, 'qwe', 'qwe@gmail.com', '4297f44b13955235245b2497399d7a93', 'Dak Nong', '0329597880'),
(81, 'congvu123', '123@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '123'),
(82, 'konga', 'congvu2k.84772@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '0772135926'),
(83, 'hihihaha', 'hihihaha@gmail.com', '202cb962ac59075b964b07152d234b70', 'hihihaha', '111222'),
(84, 'tuilacong', 'congvu2k@gmail.com', '202cb962ac59075b964b07152d234b70', 'tp.hcm', '0772135926');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD PRIMARY KEY (`id_donhang`,`mausac`,`size`,`id_sanpham`),
  ADD KEY `id_donhang_2` (`id_donhang`,`id_sanpham`),
  ADD KEY `fk_cthd_idsanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhgia_sanpham`
--
ALTER TABLE `danhgia_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhgia_sanpham_user_fk` (`user_id`),
  ADD KEY `danhgia_sanpham_idsanpham_fk` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_iduser_fk` (`id_user`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_loai_sanpham` (`id_loai`);

--
-- Chỉ mục cho bảng `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhgia_sanpham`
--
ALTER TABLE `danhgia_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD CONSTRAINT `fk_cthd_iddonhang` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cthd_idsanpham` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia_sanpham`
--
ALTER TABLE `danhgia_sanpham`
  ADD CONSTRAINT `danhgia_sanpham_idsanpham_fk` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `danhgia_sanpham_user_fk` FOREIGN KEY (`user_id`) REFERENCES `username` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_iduser_fk` FOREIGN KEY (`id_user`) REFERENCES `username` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_id_loai_sanpham` FOREIGN KEY (`id_loai`) REFERENCES `loai` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
