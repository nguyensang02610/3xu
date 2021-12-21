-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2021 lúc 07:11 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text DEFAULT NULL,
  `product_image` text DEFAULT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `product_gr` varchar(255) DEFAULT NULL,
  `photo_2` varchar(255) DEFAULT NULL,
  `photo_3` varchar(255) DEFAULT NULL,
  `photo_4` varchar(255) DEFAULT NULL,
  `photo_5` varchar(255) DEFAULT NULL,
  `photo_6` varchar(255) DEFAULT NULL,
  `time_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_image`, `product_price`, `product_quantity`, `product_gr`, `photo_2`, `photo_3`, `photo_4`, `photo_5`, `photo_6`, `time_created`) VALUES
(76, 'LEATHER CHARM THỎ TRẮNG BUNNY', 'Leather Charm - thú nhồi bông bằng da là phụ kiện thời trang độc đáo và quà tặng lý tưởng cho các dịp sinh nhật, ngày kỉ niệm,.v.v.\r\nMỗi sản phẩm Leather Charm của 3XU đều được may hoàn toàn bằng tay vô cùng khéo léo và tỉ mẩn, mang đến nét độc đáo riêng cho mỗi bạn thú bông\r\nChất liệu da tổng hợp đã qua xử lý để đảm bảo độ bền đẹp theo thời gian\r\nĐiểm nổi bật của 3XU đó chính là thiết kế vô cùng ngộ nghĩnh kết hợp với màu sắc rực rỡ, đảm bảo mỗi bạn thú bông của chúng mình sẽ trở thành người bạn thân thiết cho chiếc túi xách hay chùm chìa khóa thân yêu của các bạn.\r\nĐặc biệt các bạn có thể đặt đóng dấu chữ cái tên của riêng bạn cho những chiếc tag nhỏ xinh đi kèm sản phẩm. (Tối đa 3 chữ cái)\r\nLưu ý:\r\n\r\nĐể đặt đóng chữ cái theo yêu cầu, bạn vui lòng để lại lưu ý khi thanh toán\r\nThời gian để đóng chữ cái sẽ mất từ 1-3 ngày làm việc, vì vậy đơn hàng của bạn có thể sẽ giao chậm hơn dự kiến 1-3 ngày!\r\nKích thước:\r\n\r\nThú nhồi bông da: 6cm x 5cm x 1.5cm\r\nDây: 14cm\r\nTag đóng dấu chữ cái: 2cm x 1cm', 'a3320fd0b077.jpg', 250000, 10, 'Leather charm', 'dac0a2ee5e2d.jpg', '73dd40c71e59.jpg', 'fc65327db877.jpg', 'fc65327db877.jpg', 'fc65327db877.jpg', '2021-12-10 14:58:00'),
(77, 'BỘ 2 LÓT LY ĐĨA THAN THE ROLLING STONES', '', '830f2145a56a.jpg', 130000, 10, 'Lót đĩa than', 'f08497de372b.jpg', 'b23314554619.jpg', 'fe3fc4f84930.jpg', 'fc65327db877.jpg', 'fc65327db877.jpg', '2021-12-10 16:19:33'),
(78, 'LEATHER CHARM CHUỘT TÚI KANGAROO', 'Leather Charm - thú nhồi bông bằng da là phụ kiện thời trang độc đáo và quà tặng lý tưởng cho các dịp sinh nhật, ngày kỉ niệm,.v.v.\r\nMỗi sản phẩm Leather Charm của 3XU đều được may hoàn toàn bằng tay vô cùng khéo léo và tỉ mẩn, mang đến nét độc đáo riêng cho mỗi bạn thú bông\r\nChất liệu da tổng hợp đã qua xử lý để đảm bảo độ bền đẹp theo thời gian\r\nĐiểm nổi bật của 3XU đó chính là thiết kế vô cùng ngộ nghĩnh kết hợp với màu sắc rực rỡ, đảm bảo mỗi bạn thú bông của chúng mình sẽ trở thành người bạn thân thiết cho chiếc túi xách hay chùm chìa khóa thân yêu của các bạn.\r\nĐặc biệt các bạn có thể đặt đóng dấu chữ cái tên của riêng bạn cho những chiếc tag nhỏ xinh đi kèm sản phẩm. (Tối đa 3 chữ cái)', '617c9d8aa547.jpg', 299000, 16, 'Leather charm', 'a185037fc2b1.jpg', 'f416845672c4.jpg', '947e2ba1f703.jpg', '', '', '2021-12-14 15:07:16'),
(79, 'LEATHER CHARM CON NGỰA ', '', '44c0a08310c4.jpg', 299000, 10, 'Leather charm', '5360bbeffa06.jpg', 'c80a5e26b0f4.jpg', '5635178320f9.jpg', '', '', '2021-12-14 15:13:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sId` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `product_name`, `quantity`, `sId`, `product_price`, `image`) VALUES
(0, 0, '', 0, 0, 0, ''),
(0, 0, '', 0, 0, 0, ''),
(0, 0, '', 0, 0, 0, ''),
(0, 0, '', 0, 0, 0, ''),
(0, 0, '', 0, 0, 0, ''),
(0, 0, '', 0, 0, 0, ''),
(0, 0, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_kh` int(11) NOT NULL,
  `ho` text NOT NULL,
  `ten` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `diachi` longtext NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `ho` varchar(25) NOT NULL,
  `ten` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `diachi` varchar(25) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `ho`, `ten`, `email`, `diachi`, `phone`, `password`) VALUES
(1, 'Huyền', 'Huyền', 'huyenkun@gmail.com', 'HN', 327328369, '718032855b3da48a1cf843972'),
(2, 'Hiền', 'Hiền', 'hien@gmail.com', 'TH', 327328369, '490b2834e65737c1fce95e468'),
(3, 'Linh', 'Linh', 'pig@gmail.com', 'VH', 327328369, 'b555773768bc1a672947d7f41'),
(4, 'Hoa', 'Hoa', 'min22@gmail.com', 'HN', 327328369, 'a6bbc91ae73dd21c0533f7354'),
(5, 'Huyền', 'Huyền', 'minmin38012001@gmail.com', 'HN', 327328369, '718032855b3da48a1cf843972'),
(6, 'Nguyệt', 'Nguyệt', 'mon11@gmail.com', 'HN', 327328369, '533107c202fe579936fb59f9b'),
(7, 'Đỗ ', 'Huyền', 'thuhuyensally2001@gmail.c', 'HN', 327328369, '718032855b3da48a1cf843972'),
(8, 'Đỗ', 'Huyền', 'kun@gmail.com', 'HN', 327328369, 'ce1b1e8ce920100d134d0212d'),
(10, 'Lê ', 'Hoa', 'mon11@gmail.com', 'HN', 327328369, '533107c202fe579936fb59f9b'),
(11, 'Đỗ ', 'Huyền', 'mon11@gmail.com', 'HN', 327328369, 'ce1b1e8ce920100d134d0212d');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `date_create` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `date_create`) VALUES
(10, 'Lót đĩa than', '2021-12-03 23:09:05'),
(11, 'Leather charm', '2021-12-03 23:09:05'),
(12, 'Boardgame', '2021-12-03 23:09:05'),
(19, 'Thiệp hộp diêm', '2021-12-10 00:08:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id_nhanvien` int(11) NOT NULL,
  `hoten` text NOT NULL,
  `diachi` longtext NOT NULL,
  `ngaysinh` date NOT NULL,
  `chucvu` text NOT NULL,
  `quyen` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`id_nhanvien`, `hoten`, `diachi`, `ngaysinh`, `chucvu`, `quyen`, `phone`, `password`, `image`) VALUES
(2, 'Ngô Nguyệt', 'BG', '2001-09-28', 'Quản lý', 0, 983728779, 'moon2809', '05c7663933.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_donhang` int(11) NOT NULL,
  `tenkh` text NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `trangthai` text NOT NULL,
  `soluongsp` int(11) NOT NULL,
  `tongtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id_donhang`, `tenkh`, `diachi`, `sodienthoai`, `trangthai`, `soluongsp`, `tongtien`) VALUES
(1, '', '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_kh`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_donhang`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
