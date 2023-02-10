-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2022 lúc 03:36 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webguitar`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` char(11) NOT NULL,
  `TenDM` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
('1000', 'GUITAR'),
('1001', 'Guitar'),
('1002', 'Piano'),
('1003', 'Trống'),
('1004', 'Ukulele'),
('1005', 'Cajon'),
('1006', 'Organ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` char(11) NOT NULL,
  `TenNCC` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`) VALUES
('2001', 'FENDER'),
('2002', 'TAKAMINE'),
('2003', 'YAMAHA'),
('2004', 'ROLAND'),
('2005', 'KAWAI'),
('2006', 'SAMICK'),
('2007', 'PREMIER'),
('2008', 'DW'),
('2009', 'LUDWID SNARES'),
('2010', 'LANIKAI'),
('2011', 'KALA'),
('2012', 'MEINL'),
('2013', 'CASIO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

CREATE TABLE `quantrivien` (
  `Taikhoan` char(11) NOT NULL,
  `Matkhau` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quantrivien`
--

INSERT INTO `quantrivien` (`Taikhoan`, `Matkhau`) VALUES
('lap', 'lap123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaDM` char(11) DEFAULT NULL,
  `MaNCC` char(11) DEFAULT NULL,
  `TenSP` varchar(50) DEFAULT NULL,
  `AnhSP` varchar(50) DEFAULT NULL,
  `Soluong` int(255) DEFAULT NULL,
  `Mota` varchar(255) DEFAULT NULL,
  `Dongia` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaDM`, `MaNCC`, `TenSP`, `AnhSP`, `Soluong`, `Mota`, `Dongia`) VALUES
(3001, '1001', '2001', 'Đàn Guitar Fender CC-60SCE', 'fender-CC-60SCE-0970153006-01-400x400.jpg', 56, 'Nhỏ gọn và thoải mái, CC-60SCE lý tưởng cho người mới chơi. Mặt trước bằng gỗ spruce nguyên khối, cần đàn thoải mái, và mặt sau và mặt gỗ gụ làm cho CC-60SCE trở thành lựa chọn hoàn hảo để chơi ở bãi biển, sân vườn hoặc quán cà phê.', '6990000'),
(3002, '1001', '2001', 'Đàn Guitar FENDER FSR CD-60S', 'fender-fsr-cd-60s-flm-ext-sb-wn-01-400x400.jpg', 50, 'CD-60S là một trong những mẫu acoustic phổ biến nhất của Fender, mang đến giai điệu và khả năng chơi tuyệt vời với giá cả phải chăng. Mẫu FSR (Fender Special Run)  này có mặt Top bằng Spruce chắc chắn, được kết hợp với mặt sau và mặt bên của Flame Maple.', '6900000'),
(3003, '1001', '2001', 'Đàn Guitar Fender FSR V3 CD60', 'fender-fsr-v3-cd60-chy-wn-01-400x400.jpg', 24, 'CD-60 là một trong những mô hình phổ biến nhất của Fender và lý tưởng cho những người chơi đang tìm kiếm một cây đàn dáng dreadnought chất lượng cao giá cả phải chăng với giai điệu cùng khả năng chơi tuyệt vời. ', '4900000'),
(3004, '1001', '2002', 'Đàn Guitar Takamine GD51', 'TAKAMINE-GD51NAT-1-400x400-400x400.jpg', 29, 'Đàn Guitar Takamine GD51 NAT nổi bật từ thiết kế bên ngoài của đàn cho đến âm thanh được tạo ra từ đàn. Chắc chắn cây đàn này sẽ khiến người yêu nhạc phải ngất ngây.', '7870000'),
(3005, '1001', '2002', 'Đàn Guitar Takamine GN51CE', 'Takamine-GN51CE.jpg', 7, 'Đàn Guitar Takamine GN51CE nổi bật với kiểu dáng NEX. Đây là giáng đàn rất được ưa chuộng hiện nay, giúp cân bằng âm thanh và hỗ trợ giọng hát tuyệt vời.', '10770000'),
(3006, '1001', '2002', 'Đàn Guitar Takamine GD15CE-BLK', 'takamine-gd15ce-blk.jpg', 24, 'Một sự lựa chọn tuyệt vời cho người mới bắt đầu hoặc bất kỳ ai đang tìm kiếm một cây đàn guitar acoustic-điện hợp túi tiền với mức giá tuyệt vời. GD15CE-BLK với mặt trên bằng vân sam, mặt sau và các cạnh bằng gỗ gụ tạo ra một sự ấm áp và ngọt ngào', '8510000'),
(3007, '1001', '2003', 'Đàn Guitar Classic Yamaha CG142C', 'dan-guitar-classic-yamaha-cg-142c-22-500x500.jpg', 34, 'Đàn guitar cổ điển Yamaha CG142C có kích thước đầy đủ cho nhiều giai điệu táo bạo được cân bằng từ mức thấp đến mức cao, với một chút nhấn mạnh vào dải trung để thêm cú đấm.', '6330000'),
(3008, '1001', '2003', 'Đàn Guitar Classic Yamaha CGS102A', 'dan-guitar-classic-yamaha-cgs102a-11-500x500.jpg', 22, 'Đàn Guitar Yamaha CGS102 là phiên bản guitar trường học, size nhỏ, dành cho học sinh tầm tuổi học. Series sản phẩm CGS của Yamaha là dòng guitar dành cho trường học, được phát triển nhờ kinh nghiệm am hiểu sâu sắc nhu cầu của người học trong hàng thập kỷ ', '2700000'),
(3009, '1001', '2003', 'Đàn Guitar Yamaha Acoustic F310 Cherry Sunburst', 'dan-guitar-yamaha-f310-cherry-sunburst-dd.webp', 12, 'Yamaha F310 mang âm thanh trầm ấm và đầy đặn cực kì phù hợp cho những người mới làm quen với đàn guitar và muốn hướng đến phong cách chơi đệm hát.', '3400000');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`Taikhoan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
