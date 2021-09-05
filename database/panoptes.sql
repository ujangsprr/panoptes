-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2021 at 10:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panoptes`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `icon`) VALUES
(1, 'Assault Rifle', 'assault'),
(2, 'Handgun', 'handgun'),
(3, 'Sniper Rifle', 'sniper'),
(4, 'Grenade', 'grenade'),
(5, 'Attachment', 'attachment'),
(6, 'Equipment', 'equipment');

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

CREATE TABLE `command` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statut` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `command`
--

INSERT INTO `command` (`id`, `id_produit`, `quantity`, `dat`, `statut`, `id_user`) VALUES
(127, 1, 4, '2020-06-12 15:51:53', 'paid', 14),
(128, 2, 3, '2020-06-12 15:51:53', 'paid', 14),
(129, 6, 1, '2020-06-12 15:51:53', 'paid', 14),
(130, 8, 2, '2020-06-12 15:51:53', 'paid', 14),
(131, 10, 1, '2020-06-12 15:51:53', 'paid', 14),
(133, 11, 3, '2020-06-12 15:51:53', 'paid', 14),
(134, 3, 1, '2020-06-12 15:56:54', 'paid', 14),
(135, 7, 1, '2020-06-12 15:56:54', 'paid', 14),
(139, 5, 1, '2020-06-14 16:51:51', 'paid', 19),
(140, 12, 2, '2020-06-14 16:55:27', 'paid', 15),
(141, 1, 1, '2020-06-14 16:56:46', 'paid', 15),
(142, 2, 2, '2020-06-16 16:09:59', 'paid', 1),
(143, 1, 5, '2020-06-16 16:09:59', 'paid', 1),
(155, 10, 2, '2020-06-16 16:49:24', 'paid', 27),
(154, 6, 1, '2020-06-16 16:34:38', 'paid', 26),
(146, 12, 2, '2020-06-16 16:17:18', 'paid', 1),
(153, 10, 1, '2020-06-16 16:34:38', 'paid', 26),
(152, 12, 1, '2020-06-16 16:34:38', 'paid', 26),
(151, 2, 1, '2020-06-16 16:31:10', 'paid', 14),
(156, 5, 2, '2020-06-16 16:49:24', 'paid', 27),
(157, 9, 3, '2020-06-16 16:49:24', 'paid', 27),
(158, 7, 4, '2020-06-16 16:57:24', 'paid', 27),
(159, 2, 1, '2020-06-16 17:30:25', 'paid', 27),
(160, 2, 3, '2021-08-30 07:06:34', 'ordered', 29);

-- --------------------------------------------------------

--
-- Table structure for table `details_command`
--

CREATE TABLE `details_command` (
  `id` int(11) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id_command` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `country` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `statut` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details_command`
--

INSERT INTO `details_command` (`id`, `product`, `quantity`, `price`, `id_command`, `id_user`, `user`, `address`, `country`, `city`, `statut`) VALUES
(33, 'Academy M4A1 CARBIN SEMI Automatic', 4, 480, 127, 14, 'User Test', 'Jalan jalan nomor 12', '', 'Surabaya', 'done'),
(34, 'Colt Python Revolver .177', 3, 240, 128, 14, 'User Test', 'Jalan jalan nomor 12', '', 'Surabaya', 'done'),
(35, 'Umarex 3-9X32 Fuel Combo Air Gun', 1, 181, 129, 14, 'User Test', 'Jalan jalan nomor 12', '', 'Surabaya', 'done'),
(36, 'SportPro Remote Detonating Spring Powered BB', 2, 114, 130, 14, 'User Test', 'Jalan jalan nomor 12', '', 'Surabaya', 'done'),
(37, 'BARSKA Mil-Dot Airgun Scope', 1, 29, 131, 14, 'User Test', 'Jalan jalan nomor 12', '', 'Surabaya', 'done'),
(38, 'UTG Tactical OP Bipod', 1, 33, 132, 14, 'User Test', 'Jalan jalan nomor 12', '', 'Surabaya', 'done'),
(39, 'vAv YAKEDA Tactical Vest Military Airsof Vest', 3, 222, 133, 14, 'User Test', 'Jalan jalan nomor 12', '', 'Surabaya', 'done'),
(40, 'Taurus PT92 CO2 Airsoft Pistol', 1, 40, 134, 14, 'User Test', 'Jalan jalan nomor 12', 'Indonesia', 'Surabaya', 'done'),
(41, 'SportPro 210 Round Spring Powered BB', 1, 28, 135, 14, 'User Test', 'Jalan jalan nomor 12', 'Indonesia', 'Surabaya', 'done'),
(42, 'Sig Sauer 1911', 1, 90, 136, 14, 'User Test', 'Jalan jalan nomor 12', 'Indonesia', 'Surabaya', 'done'),
(43, 'Sig Sauer 1911', 1, 90, 138, 14, 'User Test', 'Jalan jalan nomor 12', 'Singapore', 'Surabaya', 'done'),
(44, 'Umarex Ruger Targis Hunter', 1, 150, 139, 19, 'Ridho Fatoni', 'Jalan ke Bojonegoro', 'Indonesia', 'Bojonegoro', 'done'),
(45, 'Sig Sauer 1911', 2, 180, 140, 15, 'Vega Kurnia', 'Jalan ke Jember', 'Singapore', 'Jember', 'done'),
(46, 'Academy M4A1 CARBIN SEMI Automatic', 1, 120, 141, 15, 'Vega Kurnia', 'Jalan ke Jember', 'Singapore', 'Jember', 'done'),
(47, 'Colt Python Revolver .177', 2, 160, 142, 1, 'Ujang Supriyadi', 'Jl. Syamsul Arifin', 'Singapore', 'Sampang', 'done'),
(48, 'Academy M4A1 CARBIN SEMI Automatic', 5, 600, 143, 1, 'Ujang Supriyadi', 'Jl. Syamsul Arifin', 'Singapore', 'Sampang', 'done'),
(49, 'Sig Sauer 1911', 2, 180, 146, 1, 'Ujang Supriyadi', 'Jl. Syamsul Arifin', 'Singapore', 'Sampang', 'done'),
(50, 'Umarex 3-9X32 Fuel Combo Air Gun', 1, 181, 144, 25, 'jihan hanun', 'Kamigamo Sakuraicho', '', 'Kyoto', 'done'),
(51, 'BARSKA Mil-Dot Airgun Scope', 1, 29, 145, 25, 'jihan hanun', 'Kamigamo Sakuraicho', '', 'Kyoto', 'done'),
(52, 'Umarex 3-9X32 Fuel Combo Air Gun', 1, 181, 147, 25, 'jihan hanun', 'Kamigamo Sakuraicho', '', 'Kyoto', 'done'),
(53, 'BARSKA Mil-Dot Airgun Scope', 1, 29, 148, 25, 'jihan hanun', 'Kamigamo Sakuraicho', '', 'Kyoto', 'done'),
(54, 'Sig Sauer 1911', 1, 90, 150, 25, 'jihan hanun', 'Kamigamo Sakuraicho', '', 'Kyoto', 'done'),
(55, 'Colt Python Revolver .177', 1, 80, 151, 14, 'User Test', 'Jalan jalan nomor 12', 'Jepang', 'Surabaya', 'done'),
(56, 'Umarex 3-9X32 Fuel Combo Air Gun', 1, 181, 154, 26, 'jihan hanun', 'Kamigamo Sakuraicho', 'Jepang', 'Kyoto', 'ready'),
(57, 'BARSKA Mil-Dot Airgun Scope', 1, 29, 153, 26, 'jihan hanun', 'Kamigamo Sakuraicho', 'Jepang', 'Kyoto', 'ready'),
(58, 'Sig Sauer 1911', 1, 90, 152, 26, 'jihan hanun', 'Kamigamo Sakuraicho', 'Jepang', 'Kyoto', 'ready'),
(59, 'BARSKA Mil-Dot Airgun Scope', 2, 58, 155, 27, 'Michael Jordan', 'JL osss waaeee lah', 'United States', 'Los Angeles', 'done'),
(60, 'Umarex Ruger Targis Hunter', 2, 300, 156, 27, 'Michael Jordan', 'JL osss waaeee lah', 'United States', 'Los Angeles', 'done'),
(61, 'UTG Tactical OP Bipod', 3, 99, 157, 27, 'Michael Jordan', 'JL osss waaeee lah', 'United States', 'Los Angeles', 'done'),
(62, 'SportPro 210 Round Spring Powered BB', 4, 112, 158, 27, 'Michael Jordan', 'JL osss waaeee lah', 'United States', 'Los Angeles', 'done'),
(63, 'Colt Python Revolver .177', 1, 80, 159, 27, 'Michael Jordan', 'JL osss waaeee lah', 'United States', 'Los Angeles', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `picture`, `id_produit`) VALUES
(27, '61EsR4QA0PL._SL1500_.jpg', 10),
(49, '519mcgChX+L._AC_.jpg', 19),
(50, '71eQHTPSL8L._AC_SL1240_.jpg', 19),
(51, '51rulPg-vdL._AC_.jpg', 19),
(52, '61quiyxHm2L._AC_SL1500_.jpg', 20),
(53, '61520rVZYqL._AC_SL1500_.jpg', 20),
(54, '61W1iNjiYSL._AC_SL1500_.jpg', 20),
(55, '61K6+5PNtjL._AC_SL1223_.jpg', 21),
(56, '71-Td7JisgL._AC_SL1500_.jpg', 21),
(57, '61-EJrVHezL._AC_SL1070_.jpg', 21),
(58, '51BS+LFvXyL._AC_SL1500_.jpg', 22),
(59, '61V4o7pHJ8L._AC_SL1500_.jpg', 22),
(60, '31uFDX5wPKL._AC_.jpg', 22),
(61, '616wCyZVy1L._AC_SL1500_.jpg', 23),
(62, '618q3BoA37L._AC_SL1500_.jpg', 23),
(63, '619aj2dILGL._AC_SL1500_.jpg', 23),
(64, '610x8+1FNJL._AC_SL1500_.jpg', 24),
(65, '616wCyZVy1L._AC_SL1500_.jpg', 24),
(66, '618q3BoA37L._AC_SL1500_.jpg', 24),
(67, '61ob90ADYrL._AC_SL1100_.jpg', 25),
(68, '712bZKHQ0eL._AC_SL1100_.jpg', 25),
(69, '61B79xZ-QiL._AC_SL1100_.jpg', 25),
(70, '61GCGBC6cqL._AC_SL1405_.jpg', 26),
(71, '61eaFvAyVKL._AC_SL1500_.jpg', 26),
(72, '61ZLhr4ibVL._AC_SL1426_.jpg', 26),
(73, '61SQ1l4y5RL._AC_SL1000_.jpg', 27),
(74, '710czK9Xj9L._AC_SL1500_.jpg', 27),
(75, '71Rm2DrUFoL._AC_SL1500_.jpg', 27),
(76, '714ukWL2SsL._AC_SL1500_.jpg', 28),
(77, '71BL2G04pIL._AC_SL1500_.jpg', 28),
(78, '71M6IOQAfwL._AC_SL1500_.jpg', 28),
(79, '71fRDlIUXLL._AC_SL1100_.jpg', 29),
(80, '71ZL63ytskL._AC_SL1100_.jpg', 29),
(81, '61Mtn6SFkrL._AC_SL1001_.jpg', 29),
(82, 'fb4d625c0dcb4d684ad076636bb0bacf.jpg', 30),
(83, 's-l400.jpg', 30),
(84, 'PY-4888_Sig-Sauer-1911-Spartan_1554749006.jpg', 30),
(85, '71Y5xg9dDFL._AC_SL1500_.jpg', 31),
(86, '518Jp3weNIL._AC_SL1448_.jpg', 31),
(87, '61XvIsD6+nL._AC_SL1500_.jpg', 31),
(88, '61Enon-eRVL._AC_SL1001_.jpg', 32),
(89, '61I53pKWr+L._AC_SL1001_.jpg', 32),
(90, '61Svq6wilcL._AC_SL1001_.jpg', 32);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `id_picture` int(11) NOT NULL,
  `thumbnail` varchar(1000) NOT NULL,
  `promo` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_category`, `name`, `description`, `price`, `id_picture`, `thumbnail`, `promo`) VALUES
(1, 1, 'Academy M4A1 CARBIN SEMI Automatic', 'Electric Powered <br>\r\nSemi automatic <br>\r\nMaximum BB Capacity: 300 <br>\r\nRequires 6 AA Batteries to run (not included) <br>\r\nAdopting New Gearbox', 120, 1, 'Untitled-9.jpg', ''),
(2, 2, 'Colt Python Revolver .177', '10-shot, revolver-style .177 caliber BB air pistol <br>\r\nPowered by a 12-gram CO2 cartridge (CO2 NOT included) <br>\r\nShoots .177 caliber steel BBs at up to 410 fps <br>', 80, 20, 'Untitled-4.jpg', ''),
(3, 2, 'Taurus PT92 CO2 Airsoft Pistol', 'Included Components: Taurus Pistol <br>\r\nSport Type: Soft Air - Hunting <br>', 40, 21, 'Untitled-3.jpg', ''),
(4, 1, 'Umarex Steel-Force Automatic .177 Caliber', 'Operates on reliable and easy-to-find 12 gram CO2 cartridges (CO2 NOT included) <br> \r\nBB reservoir holds 300-rounds <br>\r\nChoose between single shot mode or 6-round \"full-auto\" burst mode <br>\r\nShoots .177 caliber steel BBs at up to 430 fps', 132, 22, 'Untitled-1.jpg', ''),
(5, 3, 'Umarex Ruger Targis Hunter', 'Features the Umarex exclusive integral Nucleus Rail Platform engineered to reduce scope movement and vibration, preserving its zero shot after shot; Includes 3-9x32mm adjustable objective air rifle scope', 150, 23, 'Untitled-6.jpg', ''),
(6, 3, 'Umarex 3-9X32 Fuel Combo Air Gun', 'Included Components: Airsoft Rifle <br>\r\nMetal Picatinny rail <br>\r\nRifled barrel accuracy <br>\r\nTactical, integrated bi-pod', 181, 24, 'Untitled-5.jpg', ''),
(7, 4, 'SportPro 210 Round Spring Powered BB', 'Polymer Exterior, \r\nSpring Powered and 210 Round Capacity, \r\n6mm BB Do Not Included', 28, 25, 'Untitled-11.jpg', ''),
(8, 4, 'SportPro Remote Detonating Spring Powered BB', 'Polymer Exterior <br>\r\nSpring Powered <br>\r\n200 Round Capacity', 57, 26, 'Untitled-10.jpg', ''),
(9, 5, 'UTG Tactical OP Bipod', 'Fully Adjustable Legs with 7 Extension Notches for Most Secured Positions, Further Supported by Lockable Thumb Wheel, \r\nFinger-friendly Push Buttons for Rapid Retraction of Leg Extensions and Foldable Arms with Robust External Spring Tension Control', 33, 27, 'Untitled-14.jpg', ''),
(10, 5, 'BARSKA Mil-Dot Airgun Scope', 'Precision Aiming: The 2-7x magnification scope features 1/4 MOA click adjustments for precision accuracy.', 29, 28, 'Untitled-13.jpg', ''),
(11, 6, 'vAv YAKEDA Tactical Vest Military Airsof Vest', '1000D Nylon,The special structure of the fabric gives it excellent wear resistance, tear resistance, unmatched strength, light weight, softness and easy care.', 74, 29, 'Untitled-15.jpg', ''),
(12, 2, 'Sig Sauer 1911', 'The original that started it all - a Classic .45ACP handgun now available in a BB pistol, \r\nOil-rubbed slide and frame bring the true history of the SIG SAUER original to life, \r\nWith custom Spartan grips and skeletonized trigger, this BB gun will have you training like a warrior', 90, 30, 'Untitled-2.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `role`) VALUES
(1, 'ujang.supriyadi568@gmail.com', 'Ujang', 'Supriyadi', '416d07c6075b83e829f5caa29891cdf2', 'admin'),
(41, 'bambank@gmail.com', 'Bambank', 'Pamungkas', 'c4ca4238a0b923820dcc509a6f75849b', 'client'),
(38, 'ujang.supriyadi568@gmail.com', 'Ujang', 'Supriyadi', 'c4ca4238a0b923820dcc509a6f75849b', 'client'),
(42, 'adit@gmail.com', 'Adit', 'Walujo', 'c4ca4238a0b923820dcc509a6f75849b', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_command`
--
ALTER TABLE `details_command`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `command`
--
ALTER TABLE `command`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `details_command`
--
ALTER TABLE `details_command`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
