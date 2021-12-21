/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : 127.0.0.1:3306
 Source Schema         : web_mysqli

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 22/12/2021 02:36:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `product_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `product_price` int NOT NULL,
  `product_quantity` int NULL DEFAULT NULL,
  `product_gr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `photo_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `photo_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `photo_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `photo_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `photo_6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `time_created` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 80 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (76, 'LEATHER CHARM THỎ TRẮNG BUNNY', 'Leather Charm - thú nhồi bông bằng da là phụ kiện thời trang độc đáo và quà tặng lý tưởng cho các dịp sinh nhật, ngày kỉ niệm,.v.v.\r\nMỗi sản phẩm Leather Charm của 3XU đều được may hoàn toàn bằng tay vô cùng khéo léo và tỉ mẩn, mang đến nét độc đáo riêng cho mỗi bạn thú bông\r\nChất liệu da tổng hợp đã qua xử lý để đảm bảo độ bền đẹp theo thời gian\r\nĐiểm nổi bật của 3XU đó chính là thiết kế vô cùng ngộ nghĩnh kết hợp với màu sắc rực rỡ, đảm bảo mỗi bạn thú bông của chúng mình sẽ trở thành người bạn thân thiết cho chiếc túi xách hay chùm chìa khóa thân yêu của các bạn.\r\nĐặc biệt các bạn có thể đặt đóng dấu chữ cái tên của riêng bạn cho những chiếc tag nhỏ xinh đi kèm sản phẩm. (Tối đa 3 chữ cái)\r\nLưu ý:\r\n\r\nĐể đặt đóng chữ cái theo yêu cầu, bạn vui lòng để lại lưu ý khi thanh toán\r\nThời gian để đóng chữ cái sẽ mất từ 1-3 ngày làm việc, vì vậy đơn hàng của bạn có thể sẽ giao chậm hơn dự kiến 1-3 ngày!\r\nKích thước:\r\n\r\nThú nhồi bông da: 6cm x 5cm x 1.5cm\r\nDây: 14cm\r\nTag đóng dấu chữ cái: 2cm x 1cm', 'a3320fd0b077.jpg', 250000, 10, 'Leather charm', 'dac0a2ee5e2d.jpg', '73dd40c71e59.jpg', 'fc65327db877.jpg', 'fc65327db877.jpg', 'fc65327db877.jpg', '2021-12-10 14:58:00');
INSERT INTO `product` VALUES (77, 'BỘ 2 LÓT LY ĐĨA THAN THE ROLLING STONES', '', '830f2145a56a.jpg', 130000, 10, 'Lót đĩa than', 'f08497de372b.jpg', 'b23314554619.jpg', 'fe3fc4f84930.jpg', 'fc65327db877.jpg', 'fc65327db877.jpg', '2021-12-10 16:19:33');
INSERT INTO `product` VALUES (78, 'LEATHER CHARM CHUỘT TÚI KANGAROO', 'Leather Charm - thú nhồi bông bằng da là phụ kiện thời trang độc đáo và quà tặng lý tưởng cho các dịp sinh nhật, ngày kỉ niệm,.v.v.\r\nMỗi sản phẩm Leather Charm của 3XU đều được may hoàn toàn bằng tay vô cùng khéo léo và tỉ mẩn, mang đến nét độc đáo riêng cho mỗi bạn thú bông\r\nChất liệu da tổng hợp đã qua xử lý để đảm bảo độ bền đẹp theo thời gian\r\nĐiểm nổi bật của 3XU đó chính là thiết kế vô cùng ngộ nghĩnh kết hợp với màu sắc rực rỡ, đảm bảo mỗi bạn thú bông của chúng mình sẽ trở thành người bạn thân thiết cho chiếc túi xách hay chùm chìa khóa thân yêu của các bạn.\r\nĐặc biệt các bạn có thể đặt đóng dấu chữ cái tên của riêng bạn cho những chiếc tag nhỏ xinh đi kèm sản phẩm. (Tối đa 3 chữ cái)', '617c9d8aa547.jpg', 299000, 16, 'Leather charm', 'a185037fc2b1.jpg', 'f416845672c4.jpg', '947e2ba1f703.jpg', '', '', '2021-12-14 15:07:16');
INSERT INTO `product` VALUES (79, 'LEATHER CHARM CON NGỰA ', '', '44c0a08310c4.jpg', 299000, 10, 'Leather charm', '5360bbeffa06.jpg', 'c80a5e26b0f4.jpg', '5635178320f9.jpg', '', '', '2021-12-14 15:13:09');

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin`  (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_status` int NOT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES (1, 'admin', '1', 1);

-- ----------------------------
-- Table structure for tbl_cart
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE `tbl_cart`  (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `product_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `sId` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` int NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cart_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_cart
-- ----------------------------
INSERT INTO `tbl_cart` VALUES (7, 0, '', 0, '', 0, '');

-- ----------------------------
-- Table structure for tbl_customer
-- ----------------------------
DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE `tbl_customer`  (
  `id_kh` int NOT NULL AUTO_INCREMENT,
  `ho` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ten` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kh`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_customer
-- ----------------------------
INSERT INTO `tbl_customer` VALUES (1, 'Nguyễn Thị', 'Thùy ', '1', '1', 'Ngọc Châu - Tân Yên - Bắc Giang', '02147483647');
INSERT INTO `tbl_customer` VALUES (2, 'Nguyễn Thị', 'Anh', 'tristana.nguyen@gmail.com', '1', 'Ngọc Châu - Tân Yên - Bắc Giang', '0192312312');

-- ----------------------------
-- Table structure for tbl_dangky
-- ----------------------------
DROP TABLE IF EXISTS `tbl_dangky`;
CREATE TABLE `tbl_dangky`  (
  `id_dangky` int NOT NULL AUTO_INCREMENT,
  `ho` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ten` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_dangky`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_dangky
-- ----------------------------
INSERT INTO `tbl_dangky` VALUES (1, 'Huyền', 'Huyền', 'huyenkun@gmail.com', 'HN', '327328369', '718032855b3da48a1cf843972');
INSERT INTO `tbl_dangky` VALUES (2, 'Hiền', 'Hiền', 'hien@gmail.com', 'TH', '327328369', '490b2834e65737c1fce95e468');
INSERT INTO `tbl_dangky` VALUES (3, 'Linh', 'Linh', 'pig@gmail.com', 'VH', '327328369', 'b555773768bc1a672947d7f41');
INSERT INTO `tbl_dangky` VALUES (4, 'Hoa', 'Hoa', 'min22@gmail.com', 'HN', '327328369', 'a6bbc91ae73dd21c0533f7354');
INSERT INTO `tbl_dangky` VALUES (5, 'Huyền', 'Huyền', 'minmin38012001@gmail.com', 'HN', '327328369', '718032855b3da48a1cf843972');
INSERT INTO `tbl_dangky` VALUES (6, 'Nguyệt', 'Nguyệt', 'mon11@gmail.com', 'HN', '327328369', '533107c202fe579936fb59f9b');
INSERT INTO `tbl_dangky` VALUES (7, 'Đỗ ', 'Huyền', 'thuhuyensally2001@gmail.c', 'HN', '327328369', '718032855b3da48a1cf843972');
INSERT INTO `tbl_dangky` VALUES (8, 'Đỗ', 'Huyền', 'kun@gmail.com', 'HN', '327328369', 'ce1b1e8ce920100d134d0212d');
INSERT INTO `tbl_dangky` VALUES (10, 'Lê ', 'Hoa', 'mon11@gmail.com', 'HN', '327328369', '533107c202fe579936fb59f9b');
INSERT INTO `tbl_dangky` VALUES (11, 'Đỗ ', 'Huyền', 'mon11@gmail.com', 'HN', '327328369', 'ce1b1e8ce920100d134d0212d');
INSERT INTO `tbl_dangky` VALUES (12, 'Nguyễn Thị', 'Thùy Linh', 'tristana.nguyen@gmail.com', 'Ngọc Châu - Tân Yên - Bắc', '2147483647', 'c4ca4238a0b923820dcc509a6');
INSERT INTO `tbl_dangky` VALUES (13, 'Nguyễn Thị', 'Thùy Linh', 'tristana.nguyen@gmail.com', 'Ngọc Châu - Tân Yên - Bắc', '2147483647', 'c4ca4238a0b923820dcc509a6');

-- ----------------------------
-- Table structure for tbl_danhmuc
-- ----------------------------
DROP TABLE IF EXISTS `tbl_danhmuc`;
CREATE TABLE `tbl_danhmuc`  (
  `id_danhmuc` int NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_create` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id_danhmuc`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_danhmuc
-- ----------------------------
INSERT INTO `tbl_danhmuc` VALUES (10, 'Lót đĩa than', '2021-12-03 23:09:05');
INSERT INTO `tbl_danhmuc` VALUES (11, 'Leather charm', '2021-12-03 23:09:05');
INSERT INTO `tbl_danhmuc` VALUES (12, 'Boardgame', '2021-12-03 23:09:05');
INSERT INTO `tbl_danhmuc` VALUES (19, 'Thiệp hộp diêm', '2021-12-10 00:08:17');

-- ----------------------------
-- Table structure for tbl_nhanvien
-- ----------------------------
DROP TABLE IF EXISTS `tbl_nhanvien`;
CREATE TABLE `tbl_nhanvien`  (
  `id_nhanvien` int NOT NULL AUTO_INCREMENT,
  `hoten` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `chucvu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quyen` int NOT NULL,
  `phone` int NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_nhanvien`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_nhanvien
-- ----------------------------
INSERT INTO `tbl_nhanvien` VALUES (2, 'Ngô Nguyệt', 'BG', '2001-09-28', 'Quản lý', 0, 983728779, 'moon2809', '05c7663933.jpg');

-- ----------------------------
-- Table structure for tbl_order
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE `tbl_order`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT 0,
  `date_order` datetime(0) NOT NULL DEFAULT current_timestamp(0),
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ho_ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `customer_id`(`customer_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_order
-- ----------------------------
INSERT INTO `tbl_order` VALUES (38, 1, 2, '429000', 2, '2021-12-22 02:09:24', 'Ngọc Châu - Tân Yên - Bắc Giang', '02147483647', 'Nguyễn Thị Thùy ', '6b7ca5a9df');
INSERT INTO `tbl_order` VALUES (39, 1, 1, '250000', 2, '2021-12-22 02:32:43', 'Ngọc Châu - Tân Yên - Bắc Giang', '2147483647', 'Nguyễn Thị Thùy ', 'ad825d6b92');

-- ----------------------------
-- Table structure for tbl_order_details
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order_details`;
CREATE TABLE `tbl_order_details`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_order` int NULL DEFAULT NULL,
  `id_sanpham` int NULL DEFAULT NULL,
  `tensp` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `soluong` int NULL DEFAULT NULL,
  `thanhtien` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_order_details
-- ----------------------------
INSERT INTO `tbl_order_details` VALUES (28, 38, 78, 'LEATHER CHARM CHUỘT TÚI KANGAROO', 1, 299000);
INSERT INTO `tbl_order_details` VALUES (29, 38, 77, 'BỘ 2 LÓT LY ĐĨA THAN THE ROLLING STONES', 1, 130000);
INSERT INTO `tbl_order_details` VALUES (30, 39, 76, 'LEATHER CHARM THỎ TRẮNG BUNNY', 1, 250000);

SET FOREIGN_KEY_CHECKS = 1;
