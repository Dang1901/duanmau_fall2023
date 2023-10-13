-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 06:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanma2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(7, 'Samsung'),
(8, 'Xiaomi'),
(9, 'Iphone'),
(10, 'Oppo'),
(11, 'VIvo');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `namesp` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `namesp`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(1, 'Xiaomi 13T Pro 5G (12GB - 512GB)', 15.99, 'xiami-13t-xanh-la-01_1_1.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nNhiếp ảnh chuyên ngiệp, nắm giữ tuyệt tác trong tầm tay - Cụm camera đến, ống kính Leica với 2 phong cách ảnh\r\nHiệu năng bất chấp mọi tác vụ - Bộ vi xử lý Dimensity 9200+ Ultra mạnh mẽ cùng RAM 12GB cho đa nhiệm mượt mà\r\nNăng lượng bất tận cả ngày - Pin 5000mAh cùng sạc nhanh 120W, sạc đầy chỉ trong 19 phút\r\nMàn hình sáng rực rỡ, cuộn lướt thật mượt mà - Màn hình 144hz cùng công nghệ AMOLED CrystalRes\r\nXiaomi 13T Pro là flagship mới nhất nhà Xiaomi, mạnh mẽ ấn tượng với chip MediaTek Dimensity 9200+, cùng với đó là RAM 12GB và bộ nhớ trong lên tới 512GB. Đặc biệt, khả năng chụp ảnh đỉnh cao nhờ cụm camera siêu chất, viên pin lớn 5000mAh cùng sạc nhanh 120W. Tất cả sẽ mang tới một siêu phẩm đình đám giúp bạn có được trải nghiệm độc đáo và khẳng định được cá tính của mình.', 0, 10),
(2, 'Xiaomi Redmi Note 12 Pro 5G', 8.49, 'gtt7766.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế hiện đại, trẻ trung với mặt lưng kính thời thượng và khung viền kim loại vuông vức sang trọng\r\nTấm nền AMOLED cho khả năng hiển thị rõ nét, tần số quét 120Hz giúp mọi thao tác trở nên mượt mà\r\nChinh chiến mọi tựa game, tha hồ đa nhiệm với bộ vi xử lý Dimensity 1080 5G kết hợp với RAM 8 GB\r\nBắt trọn mọi khoảnh khắc với cảm biến chính Sony IMX766 độ phân giải 50 MP hỗ trợ chống rung OIS\r\nXiaomi Redmi Note 12 Pro sở hữu cấu hình vượt trội gồm chip MediaTek Dimensity 1080, hệ thống ba camera với cảm biến chính 50MP và mạng 5G. Ngoài ra, màn hình Note 12 Pro 5G có kích thước khá lớn khoảng 6.67 inch, tấm nền AMOLED, tần số quét 120Hz khiến chiếc điện thoại nổi bật trong tầm giá dưới 8 triệu.', 0, 8),
(3, 'Xiaomi 13 Lite', 9.49, '13_liteee.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nHệ thống camera hàng đầu - Camera kép selfie cùng khung hình động đem lại những bức ảnh kiệt tác\r\nThiết kế mỏng nhẹ, đem lại sự thoải mái trong cầm nắm\r\nĐắm chìm vào không gian giải trí sống động - AMOLED 120Hz giúp thao tác cuộn mượt mà\r\nSnapdragon 7 Gen 1 dẫn đầu - Siêu nhanh và tiết kiệm năng lượng, đa nhiệm mượt mà, chiến game cực đã\r\nSạc nhanh 67W, sạc đầy 100% chỉ trong 40 phút\r\nXiaomi 13 Lite nổi bật nhờ cấu hình mạnh với chip Snapdragon 7 Gen 1, RAM 8GB LPDDR4x, ROM 256 GB. Ngoài ra, Mi 13 Lite còn sở hữu màn hình Full HD+ AMOLED 6.55 inch, tần số quét 120 Hz, phần khuyết đục lỗ chứa 2 camera selfie 32 MP.\r\n\r\nNgay từ khi xuất hiện những thông tin rò rỉ đầu tiên Xiaomi 13 Lite đã thu hút được đông đảo người dùng. Được thiết kế với vẻ ngoài sang trọng cùng hiệu năng mạnh mẽ hơn thế giá thành lại vô cùng ấn tượng. Chắc chắn đây sẽ là đối thủ đáng gờm của rất nhiều cái tên khác trên thị trường.', 0, 8),
(4, 'iPhone 15 128GB', 21.99, 'vn_iphone_15_pink_pdp_image_position-1a_pink_color_2.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế thời thượng và bền bỉ - Mặt lưng kính được pha màu xu hướng cùng khung viền nhôm bền bỉ\r\nDynamic Island hiển thị linh động mọi thông báo ngay lập tức giúp bạn nắm bắt mọi thông tin\r\nChụp ảnh đẹp nức lòng - Camera chính 48MP, Độ phân giải lên đến 4x và Tele 2x chụp chân dung hoàn hảo\r\nPin dùng cả ngày không lắng lo - Thời gian xem video lên đến 20 giờ và sạc nhanh qua cổng USB-C tiện lợi\r\nCải tiến hiệu năng vượt bậc - A16 Bionic mạnh mẽ giúp bạn cân mọi tác vụ dù có yêu cầu đồ hoạ cao\r\niPhone 15 128GB được trang bị màn hình Dynamic Island kích thước 6.1 inch với công nghệ hiển thị Super Retina XDR màn lại trải nghiệm hình ảnh vượt trội. Điện thoại với mặt lưng kính nhám chống bám mồ hôi cùng 5 phiên bản màu sắc lựa chọn: Hồng, Vàng, Xanh lá, Xanh dương và đen. Camera trên iPhone 15 series cũng được nâng cấp lên cảm biến 48MP cùng tính năng chụp zoom quang học tới 2x. Cùng với thiết kế cổng sạc thay đổi từ lightning sang USB-C vô cùng ấn tượng', 0, 9),
(5, 'iPhone 15 Pro Max 256GB', 34.99, 'iphone-15-pro-max_2__5.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế khung viền từ titan chuẩn hàng không vũ trụ - Cực nhẹ, bền cùng viền cạnh mỏng cầm nắm thoải mái\r\nHiệu năng Pro chiến game thả ga - Chip A17 Pro mang lại hiệu năng đồ họa vô cùng sống động và chân thực\r\nThoả sức sáng tạo và quay phim chuyên nghiệp - Cụm 3 camera sau đến 48MP và nhiều chế độ tiên tiến\r\nNút tác vụ mới giúp nhanh chóng kích hoạt tính năng yêu thích của bạn\r\niPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc. Khả năng chụp ảnh đỉnh cao của iPhone 15 bản Pro Max đến từ camera chính 48MP, camera UltraWide 12MP và camera telephoto có khả năng zoom quang học đến 5x. Bên cạnh đó, iPhone 15 ProMax sử dụng chip A17 Pro mới mạnh mẽ. Xem thêm chi tiết những điểm nổi bật của sản phẩm qua thông tin sau!', 0, 9),
(6, 'iPhone 14 Pro Max 128GB', 26.39, 't_m_18.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nMàn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display\r\nCấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic\r\nLàm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động\r\nPin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến\r\niPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6GB đa nhiệm vượt trội. Cùng phân tích chi tiết thông số siêu phẩm này ngay sau đây.', 0, 9),
(7, 'Samsung Galaxy S23 Ultra 256GB', 25.99, 's23-ultra-xanh.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nThoả sức chụp ảnh, quay video chuyên nghiệp - Camera đến 200MP, chế độ chụp đêm cải tiến, bộ xử lí ảnh thông minh\r\nChiến game bùng nổ - chip Snapdragon 8 Gen 2 8 nhân tăng tốc độ xử lí, màn hình 120Hz, pin 5.000mAh\r\nNâng cao hiệu suất làm việc với Siêu bút S Pen tích hợp, dễ dàng đánh dấu sự kiện từ hình ảnh hoặc video\r\nThiết kế bền bỉ, thân thiện - Màu sắc lấy cảm hứng từ thiên nhiên, chất liệu kính và lớp phim phủ PET tái chế\r\nSau sự đổ bộ thành công của Samsung Galaxy S22 những chiếc điện thoại dòng Flagship tiếp theo - Điện thoại Samsung Galaxy S23 Ultra là đối tượng được Samfans hết mực săn đón. Kiểu dáng thanh lịch sang chảnh kết hợp với những bước đột phá trong công nghệ đã kiến tạo nên siêu phẩm Flagship nhà Samsung.', 0, 7),
(8, 'Samsung Galaxy Z Flip5 512GB', 25.99, 'd4a672c5-4709-4056-9f7f-72d6d70c2c1d_1.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nThần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ thiên nhiên với màu sắc thời thượng, xu hướng\r\nThiết kế thu hút ánh nhìn - Gập không kẽ hỡ, dẫn đầu công nghệ bản lề Flex\r\nTuyệt tác selfie thoả sức sáng tạo - Camera sau hỗ trợ AI xử lí cực sắc nét ngay cả trên màn hình ngoài\r\nBền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IP68 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước\r\nSamsung Z Flip 5 có màn chính hình rộng 6.7 inch, với độ phân giải Full HD+ (1080 x 2636 Pixels), cụm camera trước 10MP và camera sau 12MP, rõ đến từng chi tiết. Cấu hình của sản phẩm mạnh mẽ nhờ hệ điều hành Android 10, con chipset mạnh mẽ Snapdragon 8 gen 2, với chip đồ họa tạo hình ảnh hiển thị hàng triệu màu sắc khác nhau. Sản phẩm có RAM 8GB, bộ nhớ trong 512GB.', 0, 7),
(9, 'Samsung Galaxy Z Fold5 12GB 256GB', 36.99, 'galaxy-z-fold-5-xanh-1.jpg', 'ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế tinh tế với nếp gấp vô hình - Cải tiến nếp gấp thẩm mĩ hơn và gập không kẽ hở\r\nBền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IP68 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước\r\nMở ra không gian giải trí cực đại với màn hình trong 7.6\"\" cùng bản lề Flex dẫn đầu công nghệ\r\nThoải mái sáng tạo mọi lúc - Bút Spen tiện dụng giúp bạn phác hoạ và ghi chép không cần đến sổ tay\r\nHiệu năng cân mọi tác vụ - Snapdragon® 8 Gen 2 for Galaxy xử lí mượt mà, đa nhiệm mượt mà\r\nSamsung Galaxy Z Fold5 12GB 256GB tạo nên trải nghiệm xử lý tác vụ siêu mượt mà thông qua chipset Snapdragon 8 Gen 2 đỉnh cao cùng dung lượng RAM lên tới 12GB. Máy được trang bị công nghệ màn hình Dynamic AMOLED 2X 120Hz với kích thước có thể lên tới 7.6 inch khi mở, đem lại trải nghiệm hình ảnh sắc nét trong từng điểm ảnh. Bên cạnh đó, phân khúc smartphone gập này còn sở hữu cụm camera hiện đại với độ sắc nét đạt tới 50MP cùng viên pin 4400mAh.', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'nauda19', '19012003', 'phamhaidang190123@gmail.com', 'ktx my dinh', '0918019768', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iddm_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_iddm_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
