-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2023 lúc 05:06 PM
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
-- Cơ sở dữ liệu: `fruistdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(2, 1, 2, 6, '2023-05-19 08:23:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_keywords`, `created_at`) VALUES
(2, 'Vegetables', 'fruilt', '         Fruilt', 0, 1, '1683963601.jpg', '         Fruilt Fruilt Fruilt', '2023-05-13 07:40:01'),
(3, 'Functional foods', 'Functional foods', 'Thực phẩm chức năng là các sản phẩm có nguồn gốc tự nhiên hoặc là thực phẩm trong quá trình chế biến được bổ sung thêm các chất \"chức năng\". Cũng như thực phẩm thuốc, thực phẩm chức năng nằm ở nơi giao thoa giữa thực phẩm và thuốc và người ta cũng gọi thực phẩm chức năng là thực phẩm thuốc.', 0, 1, '1684080319.jpg', 'Functional foods', '2023-05-13 08:45:38'),
(12, 'xuan', 'xuan', ' xuan ha thu dong', 0, 1, '1685128307.jpg', '4444aa', '2023-05-26 19:11:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(28, 'FruistVN113108846828', 4, 'hieu', 'dotrunghieu14022001@gmail.com', '0908846828', 'hcm', 56008, 14, 'COD', '', 0, NULL, '2023-06-21 08:28:43'),
(29, 'FruistVN595608846828', 4, 'xuan', 'dotrunghieu14022001@gmail.com', '0908846828', 'aaa', 111, 14, 'COD', '', 0, NULL, '2023-06-21 08:30:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, 18, 9, 6, 10, '2023-05-30 16:29:10'),
(2, 18, 5, 4, 10, '2023-05-30 16:29:10'),
(3, 18, 2, 7, 4, '2023-05-30 16:29:10'),
(4, 19, 9, 6, 10, '2023-05-30 16:32:31'),
(5, 19, 5, 4, 10, '2023-05-30 16:32:31'),
(6, 19, 2, 7, 4, '2023-05-30 16:32:31'),
(7, 20, 2, 5, 4, '2023-06-03 09:04:23'),
(8, 21, 2, 1, 4, '2023-06-04 10:50:21'),
(9, 22, 5, 1, 10, '2023-06-07 04:31:55'),
(10, 23, 2, 1, 4, '2023-06-11 05:15:31'),
(11, 24, 2, 1, 4, '2023-06-14 04:09:19'),
(12, 26, 5, 1, 10, '2023-06-14 04:25:48'),
(13, 27, 2, 1, 4, '2023-06-18 08:05:03'),
(14, 28, 11, 1, 10, '2023-06-21 08:28:43'),
(15, 28, 2, 1, 4, '2023-06-21 08:28:43'),
(16, 29, 11, 1, 10, '2023-06-21 08:30:11'),
(17, 29, 2, 1, 4, '2023-06-21 08:30:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_keywords`, `created_at`) VALUES
(2, 2, 'xoai', 'fruilt', 'Xoài là một loại trái cây vị ngọt thuộc chi Xoài, bao gồm rất nhiều quả cây nhiệt đới, được trồng chủ yếu như trái cây ăn được. Phần lớn các loài được tìm thấy trong tự nhiên là các loại xoài hoang dã.', 'Xoài là một loại trái cây vị ngọt thuộc chi Xoài, bao gồm rất nhiều quả cây nhiệt đới, được trồng chủ yếu như trái cây ăn được. Phần lớn các loài được tìm thấy trong tự nhiên là các loại xoài hoang dã. Tất cả đều thuộc họ thực vật có hoa Anacardiaceae. Xoài có nguồn gốc ở Nam Á và Đông Nam Á, từ đó nó đã được phân phối trên toàn thế giới để trở thành một trong những loại trái cây được trồng hầu hết ở vùng nhiệt đới. Mật độ cao nhất của chi Xoài (Magifera) ở phía tây của Malesia (Sumatra, Java và Borneo) và ở Myanmar và Ấn Độ.[1] Trong khi loài Mangifera khác (ví dụ như xoài ngựa, M. Foetida) cũng được phát triển trên cơ sở địa phương hơn, Mangifera indica - \"xoài thường\" hoặc \"xoài Ấn Độ\" - là cây xoài thường chỉ được trồng ở nhiều vùng nhiệt đới và cận nhiệt đới. Nó có nguồn gốc ở Ấn Độ và Myanmar.[2] Nó là hoa quả quốc gia của Ấn Độ, Pakistan, Philippines, và cây quốc gia của Bangladesh.[3] Trong một số nền văn hóa, trái cây và lá của nó được sử dụng như là nghi lễ trang trí tại các đám cưới, lễ kỷ niệm, và nghi lễ tôn giáo.', 3, 4, '1684057033.jpg', 89, 0, 1, 'chua , ngọt , xoài cát , xoài', '2023-06-21 08:30:11'),
(5, 3, 'granola', 'granola', 'Granola là một loại thực phẩm bao gồm yến mạch cán mỏng, các loại hạt, hạt, mật ong hoặc các chất làm ngọt khác như đường nâu, và đôi khi là gạo phồng, thường được nướng cho đến khi giòn, nướng và có màu vàng nâu', 'Granola là món ăn quen thuộc của người Mỹ vào buổi sáng, đây là hỗn hợp của nhiều thực phẩm lành lạnh với hàm lượng chất dinh dưỡng cao, nhất là giàu protein.\r\nGranola gồm các loại hạt dinh dưỡng, trái cây khô, yến mạch,…. và được nướng giòn với màu nâu vàng trông rất đẹp mắt.\r\nCách chế biến granola rất đơn giản, bạn trộn tất cả các nguyên liệu cơ bản như: Yến mạch, các hạt dinh dưỡng, trái cây khô, mật ong, dầu ô liu và muối lại với nhau. Sau đó nướng trong lò nướng hoặc rang bằng chảo chống dính.\r\n\r\nGranola sau khi chết biến sẽ có độ giòn và màu vàng nâu hấp dẫn. Bạn có thể ăn ngay sau khi chế biến xong hoặc bảo quản trong tủ lạnh để dùng dần.\r\nThời gian bảo quản granola có thể lên đến 1 tháng, nhưng tốt nhất bạn nên làm granola với lượng vừa phải để dùng trong khoảng 7 ngày, nhằm tránh các hạt và yến mạch bị yểu trong trường hợp bạn đậy nắp không kín sau khi sử dụng.', 8, 10, '1685130662.jpg', 9, 0, 1, 'Yến mạch Úc, Quả óc chó Chile, Hạnh nhân Mỹ, Hạt bí xanh Ấn Độ, Hạt điều, Táo đỏ, Mật ong rừng', '2023-06-14 04:25:48'),
(6, 3, 'Ngũ cốc Granola ăn kiêng Baker Baking siêu hạt', 'granola', 'Granola là một loại thực phẩm bao gồm yến mạch cán mỏng, các loại hạt, hạt, mật ong hoặc các chất làm ngọt khác như đường nâu, và đôi khi là gạo phồng, thường được nướng cho đến khi giòn, nướng và có màu vàng nâu', 'Ngũ cốc Granola ăn kiêng Baker Baking siêu hạt, không đường dành cho mẹ bầu, tiểu đường, healthy 300-500g với thành phẩm được sản xuất trên dây chuyền sản xuất hiện đại, đáp ứng đầy đủ các tiêu chuẩn về an toàn thực phẩm và nguồn gốc xuất xứ đảm bảo sự thơm ngon, bắt mắt khi đến tay người tiêu dùng.', 7, 8, '1685130785.jpg', 20, 0, 1, 'Yến mạch Úc, Quả óc chó Chile, Hạnh nhân Mỹ, Hạt bí xanh Ấn Độ, Hạt điều, Táo đỏ, Mật ong rừng', '2023-05-26 19:53:05'),
(7, 3, 'Granola yến mạch mix 7 loại hạt dinh dưỡng, ngũ cốc ăn kiêng giảm cân Beemo', 'granola', 'Granola yến mạch mix 7 loại hạt dinh dưỡng, ngũ cốc ăn kiêng giảm cân Beemo là món ăn quen thuộc của người Mỹ vào buổi sáng, đây là hỗn hợp của nhiều loại hạt với hàm lượng chất dinh dưỡng cao, nhất là giàu protein. ', 'Granola yến mạch mix 7 loại hạt dinh dưỡng, ngũ cốc ăn kiêng giảm cân Beemo là món ăn quen thuộc của người Mỹ vào buổi sáng, đây là hỗn hợp của nhiều loại hạt với hàm lượng chất dinh dưỡng cao, nhất là giàu protein. Granola gồm các loại hạt dinh dưỡng, trái cây khô, yến mạch… được nướng giòn với mật ong, hoàn toàn không có đường rất phù hợp cho chế đố ăn kiêng giảm cân.', 8, 12, '1685130859.jpg', 50, 0, 1, 'Yến mạch Úc\r\nHạt hạnh nhân\r\nNho Chille\r\nNhân óc chó\r\nHạt điều\r\nDừa sấy\r\nHạt bí xanh\r\nMật ong', '2023-05-26 19:54:19'),
(8, 3, 'Granola nướng chậm 2 lần DK Harvest - Ngũ cốc giảm cân', 'granola', 'Granola rất phổ biến và gần như là một món ăn sáng, ăn nhẹ quen thuộc tại Mỹ. Chỉ mới trong những năm trở lại đây, tại Việt Nam, món ngũ cốc này mới thực sự được nhiều người biết đến và ưa chuộng. ', 'Granola rất phổ biến và gần như là một món ăn sáng, ăn nhẹ quen thuộc tại Mỹ. Chỉ mới trong những năm trở lại đây, tại Việt Nam, món ngũ cốc này mới thực sự được nhiều người biết đến và ưa chuộng. Granola DK HARVEST đảm bảo vừa giữ nguyên những điểm đặc biệt trong công thức truyền thống, vừa phá cách một chút để tăng thêm vị ngon và sự mới lạ.', 10, 8, '1685130995.jpg', 12, 0, 1, 'Với nguyên liệu chính bao gồm yến mạch cán dẹt, hạt bí xanh tách vỏ, hạt hạnh nhân, nhân hạt điều, nho khô và mật ong', '2023-05-26 19:56:35'),
(10, 2, 'chuối', 'fruilt', 'chuối ', 'chuối', 5, 6, '1687073462.jpg', 2, 0, 1, '123', '2023-06-18 07:31:02'),
(11, 3, 'Bột thức uống lúa mạch ', 'Bột thức uống lúa mạch ', 'Thức uống cacao lúa mạch của thương hiệu ngũ cốc Milo từ mầm lúa mạch nguyên cám có tác dụng cung cấp nguồn năng lượng hoạt động lâu dài hơn cho việc học tập,', 'Thức uống cacao lúa mạch của thương hiệu ngũ cốc Milo từ mầm lúa mạch nguyên cám có tác dụng cung cấp nguồn năng lượng hoạt động lâu dài hơn cho việc học tập, chơi thể thao và các hoạt động thể chất. Bột thức uống lúa mạch 3in1 Milo Active Go bịch 330g dạng bột mịn dễ hòa tan, bịch 15 gói tiết kiệm.', 9, 10, '1687332832.jpg', 48, 0, 1, 'Milo ', '2023-06-21 08:30:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role_as`, `created_at`) VALUES
(4, 'Hieu', 'dotrunghieu14022001@gmail.com', 907861402, 'anhbanmg01', 1, '2023-05-12 06:41:12'),
(14, 'nam', 'nam@gmail.com', 900863182, 'anhbanmg0', 0, '2023-05-12 08:07:23'),
(15, 'king', 'king@gmail.com', 907861402, '12345', 0, '2023-06-13 12:11:20'),
(16, 'admin', 'hoan@gmail.com', 2147483647, '12345', 0, '2023-06-13 12:14:23'),
(17, 'test', 'test123@gmail.com', 908846828, 'test123', 0, '2023-06-21 06:03:55');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
