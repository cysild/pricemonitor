-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 09:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crawler`
--

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `key` varchar(250) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `url`, `title`, `price`, `desc`, `created_at`, `updated_at`) VALUES
(3, 'https://fabelio.com/ip/meja-makan-tobi-6-seater.html', 'Meja Makan Tobi 6 Seater', '3.999.000', 'Suasana Makan Cozy Bersama Keluarga', '2019-01-24 08:54:50', '2019-01-24 08:54:50'),
(4, 'https://fabelio.com/ip/elis-dining-table.html', 'Meja Makan Elis', '2.999.000', 'Membawa Kelas Pada Ruang Makan Anda', '2019-01-24 09:05:18', '2019-01-24 09:05:18'),
(5, 'https://fabelio.com/ip/simo-dining-chair.html', 'Kursi Makan Simo', '599.000', 'Serba guna,ringan, dan minimalis. Simo Dining Chair dapat digunakan untuk berbagai macam situasi dan fungsi. Selain aman untuk digunakan oleh seluruh anggota keluarga Anda, termasuk si kecil, Anda juga bisa menaruhnya di ruangan apa saja - terutama ruang makanan - untuk fungsi yang tidak pernah terpikirkan sebelumnya. Dibuat dari kayu dan besi, Anda pasti akan langsung ingin membawanya pulang.', '2019-01-24 09:08:35', '2019-01-24 09:08:35'),
(6, 'https://fabelio.com/ip/cessi-chair.html', 'Kursi Makan Cessi', '379.000', 'Cessi Dining Chair memiliki tampilan minimalis dan warna-warna yang netral untuk ruangan Anda. Kursi yang akan cocok untuk suasana ruang makan apapun. Kaki kursi yang ramping dan tegas menyeimbangkan kesederhanaan yang tampak kental pada kursi ini. Letakkan kursi makan ini dengan gaya meja makan apapun, tampilannya akan memberikan suasana eksentrik di rumah Anda. Ayo pesan sebelum harga naik!', '2019-01-24 09:11:10', '2019-01-24 09:11:10'),
(7, 'https://fabelio.com/ip/cersei-working-desk.html', 'Meja Kantor Cersei', '1.999.000', 'Bekerja tentu membutuhkan konsentrasi dan tenaga yang cukup. Namun, pernahkah Anda memikirkan kenyamanan ruang kerja Anda? Cersei Working Desk memiliki penampang yang cukup luas untuk menampung komputer dan perlengkapan penting lainnya dalam satu tempat. Pada bagian belakang meja ini terdapat laci-laci tambahan, memastikan semua barang dapat diletakkan rapi dan Anda tak akan kehilangan jejak akan dokumen berharga Anda.', '2019-01-24 09:11:54', '2019-01-24 09:11:54'),
(8, 'https://fabelio.com/ip/set-meja-makan-4-seater-mutoyo-simo.html', 'Set Meja Makan 4 Seater Mutoyo Simo', '4.999.000', 'Mutoyo Simo 4 Seater Dining Set terdiri dari:', '2019-01-26 23:24:58', '2019-01-26 23:24:58'),
(10, 'https://fabelio.com/ip/luny-basket-natural-large.html', 'Keranjang Luny Natural - Large', '229.000', 'Daripada membeli keranjang plastik yang tidak matching dengan dekorasi sekitar, lebih baik Anda menjatuhkan pilihan pada Luny Basket. Keranjang dari material rotan terbaik ini memiliki warna netral yang cocok dipadukan dengan berbagai latar belakang.', '2019-01-27 01:39:39', '2019-01-27 01:39:39'),
(11, 'https://fabelio.com/ip/meja-kerja-smurf-120.html', 'Meja Kerja Smurf', '799.000', 'Dengan desainnya yang ramping dan minimalis, Meja Kerja Smurf cocok diletakkan di kantor ataupun di ruang kerja rumah Anda. Penampang Meja Kerja Smurf yang terbuat dari honeycomb board membuat meja kerja ini kuat untuk menjadi wadah dari segala peralatan kerja Anda.', '2019-01-27 01:40:04', '2019-01-27 01:40:04'),
(12, 'https://fabelio.com/ip/meja-samping-troli-smurf.html', 'Meja Samping Troli Smurf', '799.000', 'NB:&nbsp;Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.', '2019-01-27 02:27:12', '2019-01-27 02:27:12'),
(13, 'https://fabelio.com/ip/tuscany-dining-table.html', 'Meja Makan Tuscany 4 kursi', '5.999.000', 'Meja Geometris nan Aesthetic', '2019-01-27 02:33:02', '2019-01-27 02:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_reports`
--

CREATE TABLE `product_reports` (
  `id` int(11) NOT NULL,
  `price` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_reports`
--

INSERT INTO `product_reports` (`id`, `price`, `product_id`, `created_at`, `updated_at`, `time`, `date`) VALUES
(26, ' 3.999.000 ', 3, '2019-01-26 23:25:25', '2019-01-26 23:25:25', '04:55:25', '2019-01-27'),
(27, ' 2.999.000 ', 4, '2019-01-26 23:25:26', '2019-01-26 23:25:26', '04:55:26', '2019-01-27'),
(28, ' 599.000 ', 5, '2019-01-26 23:25:28', '2019-01-26 23:25:28', '04:55:28', '2019-01-27'),
(29, ' 379.000 ', 6, '2019-01-26 23:25:29', '2019-01-26 23:25:29', '04:55:29', '2019-01-27'),
(30, ' 1.999.000 ', 7, '2019-01-26 23:25:30', '2019-01-26 23:25:30', '04:55:30', '2019-01-27'),
(31, ' 4.999.000 ', 8, '2019-01-26 23:25:32', '2019-01-26 23:25:32', '04:55:32', '2019-01-27'),
(32, ' 3.999.000 ', 3, '2019-01-26 23:31:46', '2019-01-26 23:31:46', '05:01:46', '2019-01-27'),
(33, ' 2.999.000 ', 4, '2019-01-26 23:31:47', '2019-01-26 23:31:47', '05:01:47', '2019-01-27'),
(34, ' 599.000 ', 5, '2019-01-26 23:31:50', '2019-01-26 23:31:50', '05:01:50', '2019-01-27'),
(35, ' 379.000 ', 6, '2019-01-26 23:31:51', '2019-01-26 23:31:51', '05:01:51', '2019-01-27'),
(36, ' 1.999.000 ', 7, '2019-01-26 23:31:52', '2019-01-26 23:31:52', '05:01:52', '2019-01-27'),
(37, ' 4.999.000 ', 8, '2019-01-26 23:31:53', '2019-01-26 23:31:53', '05:01:53', '2019-01-27'),
(38, ' 3.999.000 ', 3, '2019-01-26 23:46:44', '2019-01-26 23:46:44', '05:16:44', '2019-01-27'),
(39, ' 2.999.000 ', 4, '2019-01-26 23:46:45', '2019-01-26 23:46:45', '05:16:45', '2019-01-27'),
(40, ' 599.000 ', 5, '2019-01-26 23:46:46', '2019-01-26 23:46:46', '05:16:46', '2019-01-27'),
(41, ' 379.000 ', 6, '2019-01-26 23:46:47', '2019-01-26 23:46:47', '05:16:47', '2019-01-27'),
(42, ' 1.999.000 ', 7, '2019-01-26 23:46:48', '2019-01-26 23:46:48', '05:16:48', '2019-01-27'),
(43, ' 4.999.000 ', 8, '2019-01-26 23:46:49', '2019-01-26 23:46:49', '05:16:49', '2019-01-27'),
(44, ' 3.999.000 ', 3, '2019-01-27 00:24:08', '2019-01-27 00:24:08', '05:54:08', '2019-01-27'),
(45, ' 2.999.000 ', 4, '2019-01-27 00:24:10', '2019-01-27 00:24:10', '05:54:10', '2019-01-27'),
(46, ' 599.000 ', 5, '2019-01-27 00:24:14', '2019-01-27 00:24:14', '05:54:14', '2019-01-27'),
(47, ' 379.000 ', 6, '2019-01-27 00:24:19', '2019-01-27 00:24:19', '05:54:19', '2019-01-27'),
(48, ' 1.999.000 ', 7, '2019-01-27 00:24:20', '2019-01-27 00:24:20', '05:54:20', '2019-01-27'),
(49, ' 4.999.000 ', 8, '2019-01-27 00:24:20', '2019-01-27 00:24:20', '05:54:20', '2019-01-27'),
(50, ' 3.999.000 ', 3, '2019-01-27 01:50:05', '2019-01-27 01:50:05', '07:20:05', '2019-01-27'),
(51, ' 1.999.000 ', 7, '2019-01-27 01:51:29', '2019-01-27 01:51:29', '07:21:29', '2019-01-27'),
(52, ' 229.000 ', 10, '2019-01-27 01:52:19', '2019-01-27 01:52:19', '07:22:19', '2019-01-27'),
(53, ' 229.000 ', 10, '2019-01-27 01:52:26', '2019-01-27 01:52:26', '07:22:26', '2019-01-27'),
(54, ' 229.000 ', 10, '2019-01-27 01:52:45', '2019-01-27 01:52:45', '07:22:45', '2019-01-27'),
(55, ' 229.000 ', 10, '2019-01-27 01:52:59', '2019-01-27 01:52:59', '07:22:59', '2019-01-27'),
(56, ' 379.000 ', 6, '2019-01-27 01:55:31', '2019-01-27 01:55:31', '07:25:31', '2019-01-27'),
(57, ' 599.000 ', 5, '2019-01-27 01:56:39', '2019-01-27 01:56:39', '07:26:39', '2019-01-27'),
(58, ' 799.000 ', 11, '2019-01-27 02:00:49', '2019-01-27 02:00:49', '07:30:49', '2019-01-27'),
(59, ' 799.000 ', 11, '2019-01-27 02:24:28', '2019-01-27 02:24:28', '07:54:28', '2019-01-27'),
(60, ' 799.000 ', 11, '2019-01-27 02:24:41', '2019-01-27 02:24:41', '07:54:41', '2019-01-27'),
(61, ' 799.000 ', 12, '2019-01-27 02:27:29', '2019-01-27 02:27:29', '07:57:29', '2019-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'shop\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `shop_management`
--

CREATE TABLE `shop_management` (
  `id` int(11) NOT NULL,
  `name` varchar(245) DEFAULT NULL,
  `address` text,
  `is_enable` tinyint(4) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `contact1` varchar(100) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_management`
--

INSERT INTO `shop_management` (`id`, `name`, `address`, `is_enable`, `contact`, `contact1`, `is_delete`, `created_at`, `updated_at`, `users_id`) VALUES
(1, 'shop1', 'Line1: - line1 Address Line2:- line2 City\r\nsfcvv', 1, '7777778898', 'sfds', 1, '2018-12-04 08:17:23', '2018-12-04 08:17:23', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(195) DEFAULT NULL,
  `email` varchar(195) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$3idHpMiI83W1mTBcDG1iT.TITOiNyQfaoUljh/AU0qtNakSyEz8yy', 'w0oj1cSXdmcUNjZKiF3SsRYWjTW2zfFxbKFJUaEg1GhlmSCN6lyoVEhpSDrj', NULL, '2018-12-05 04:47:23'),
(4, 'shop', 'shop@food.com', '$2y$10$3idHpMiI83W1mTBcDG1iT.TITOiNyQfaoUljh/AU0qtNakSyEz8yy', NULL, '2018-12-04 08:17:23', '2018-12-04 08:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `users_has_roles`
--

CREATE TABLE `users_has_roles` (
  `users_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_has_roles`
--

INSERT INTO `users_has_roles` (`users_id`, `roles_id`, `shop_id`) VALUES
(1, 1, NULL),
(4, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reports`
--
ALTER TABLE `product_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_management`
--
ALTER TABLE `shop_management`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_shop_management_users1_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_has_roles`
--
ALTER TABLE `users_has_roles`
  ADD PRIMARY KEY (`users_id`,`roles_id`),
  ADD KEY `fk_users_has_roles_roles1_idx` (`roles_id`),
  ADD KEY `fk_users_has_roles_users1_idx` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_reports`
--
ALTER TABLE `product_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `shop_management`
--
ALTER TABLE `shop_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `shop_management`
--
ALTER TABLE `shop_management`
  ADD CONSTRAINT `fk_shop_management_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_has_roles`
--
ALTER TABLE `users_has_roles`
  ADD CONSTRAINT `fk_users_has_roles_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_roles_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
