-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 01:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `reg_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `password`, `email`, `address`, `gender`, `reg_at`) VALUES
(1, 'Kayan IbraHem', 'kio', '202cb962ac59075b964b07152d234b70', 'kio@gmail.com', 'Mansoura', 0, '2022-11-01 23:05:00'),
(2, 'Porio', 'porio', '202cb962ac59075b964b07152d234b70', 'porio@gmail.com', 'mansoura', 0, '2022-11-01 23:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `user_id`, `pro_id`, `quantity`) VALUES
(1, 20, 208, 10),
(2, 20, 210, 20),
(4, 20, 211, 1),
(5, 20, 210, 1),
(6, 20, 214, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Mobiles'),
(2, 'Computers'),
(3, 'Clothes'),
(4, 'Shoes'),
(5, 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`, `pro_id`) VALUES
(46, '63619993cec5f.jpg,63619993ced4e.jpg,63619993cedf7.jpg', 208),
(47, '63619a0aa01f7.jpg,63619a0aa02be.jpg,63619a0aa0357.jpg', 209),
(48, '63619a1d03648.jpg', 210),
(49, '63619afbee485.jpg,63619afbee55b.jpg,63619afbee5fe.jpg', 211),
(50, '63619b132512a.jpg,63619b1325202.jpg,63619b132529d.jpg', 212),
(51, '63619e1027721.jpg,63619e1027600.jpg,63619e10277cc.jpg', 213),
(52, '6361a2eb172e4.jpg', 214),
(53, '6362de23a9fc5.jpg', 215),
(54, '6368070fc30e6.jpg', 216),
(55, '6368437c6e1bb.jpg', 217),
(56, '636846a8e7539.jpg', 218),
(57, '63684769b2980.jpg', 219),
(58, '63684792a0176.jpg', 220),
(59, '63684795e9631.jpg', 221),
(60, '636847dfea42c.jpg', 222),
(61, '6368489fd61f4.jpg', 223),
(62, '636848bcdbd69.jpg', 224),
(63, '636848e037969.jpg', 225),
(64, '636849044406e.jpg', 226),
(65, '63684a3c850ba.jpg', 227),
(66, '63684a52e3c90.jpg', 228),
(67, '63684a641f0de.jpg', 229),
(68, '63684a72aa323.jpg', 230),
(69, '63684a826988e.jpg', 231),
(70, '63684a9711aa4.jpg', 232),
(71, '63684aa3483fa.jpg', 233),
(72, '63684ab765764.jpg', 234),
(73, '63684b66dfb77.jpg', 235),
(74, '63684b97dd5d6.jpg', 236),
(75, '63684ba3c421c.jpg', 237);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `view` int(11) NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `message`, `view`, `send_time`) VALUES
(1, 'Kayan', '01000000', 'kayan@gmail.com', 'hello kayanLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2022-10-30 11:38:16'),
(2, 'Kayan2', '01000000', 'kayan@gmail.com', 'hello kayan2', 1, '2022-10-29 18:17:52'),
(3, 'Kayan3', '01000000', 'kayan@gmail.com', 'hello kayan3', 1, '2022-10-29 22:36:09'),
(4, 'Kayan4', '01000000', 'kayan@gmail.com', 'hello kayan4', 1, '2022-10-29 18:12:15'),
(5, 'Kayan5', '01000000', 'kayan@gmail.com', 'hello kayan5', 1, '2022-10-30 11:37:35'),
(6, 'Kayan6', '01000000', 'kayan@gmail.com', 'hello kayan6', 1, '2022-10-29 18:17:47'),
(7, 'Kayan7', '01000000', 'kayan@gmail.com', 'hello kayan7', 1, '2022-10-29 18:13:00'),
(8, 'Kayan8', '01000000', 'kayan@gmail.com', 'hello kayan8', 1, '2022-11-01 23:07:25'),
(9, 'Kayan9', '01000000', 'kayan@gmail.com', 'hello kayan9', 1, '2022-10-29 18:13:17'),
(10, '1', '1', '1', '1', 1, '2022-10-29 18:13:20'),
(11, '2', '1', '1', '1', 1, '2022-11-01 23:07:29'),
(12, 'test12', '11', '2', '2', 0, '2022-10-29 16:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `priv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `img`, `description`, `cat_id`) VALUES
(208, 'TestProductOne', '100', '2', '', 'ddddddddddd', 5),
(209, 'fuqojo@mailinator.com', 'nuri@mailinator.com', 'poramip@mailinator.com', '', 'syvyzaka@mailinator.com', 4),
(210, 'TestProductTwo', '200', 'toroh@mailinator.com', '', 'niva@mailinator.com', 5),
(211, 'vufo@mailinator.com', '20', 'howyl@mailinator.com', '', 'vedej@mailinator.com', 4),
(212, 'wuwu@mailinator.com', 'rasuvokub@mailinator.com', 'qiboxy@mailinator.com', '', 'socaveso@mailinator.com', 1),
(213, 'SamsungA12', '5600', '200', '', 'OPPO 125 GB mobile', 1),
(214, 'test', 'sycuvekese@mailinator.com', 'huqajalyt@mailinator.com', '', 'manez@mailinator.com', 2),
(215, 'pudesefo@mailinator.com', 'jemynokuq@mailinator.com', 'rehufaqomy@mailinator.com', '', 'lezakygan@mailinator.com', 4),
(216, 'cisok@mailinator.com', '233', '13', '', 'quduh@mailinator.com', 2),
(217, 'hatujuho@mailinator.com', '1', '1', '', 'babaparen@mailinator.com', 2),
(218, 'nedysu@mailinator.com', '1', '1', '', 'gebed@mailinator.com', 4),
(219, 'jacysil@mailinator.com', 'diroryk@mailinator.com', 'rivymuvul@mailinator.com', '', 'guqemeci@mailinator.com', 1),
(220, 'bidetavaze@mailinator.com', 'sarehuw@mailinator.com', 'teneb@mailinator.com', '', 'guty@mailinator.com', 3),
(221, 'bidetavaze@mailinator.com', 'sarehuw@mailinator.com', 'teneb@mailinator.com', '', 'guty@mailinator.com', 3),
(222, 'jocen@mailinator.com', 'toximoqe@mailinator.com', 'cofej@mailinator.com', '', 'posejyvymo@mailinator.com', 1),
(223, 'jedufyqe@mailinator.com', 'vyqolyn@mailinator.com', 'domy@mailinator.com', '', 'gocogebana@mailinator.com', 4),
(224, 'zoxuhi@mailinator.com', 'qutecupez@mailinator.com', 'sibihyby@mailinator.com', '', 'syno@mailinator.com', 5),
(225, 'tiheryti@mailinator.com', 'quwenumiw@mailinator.com', 'cyrotunoze@mailinator.com', '', 'pynudi@mailinator.com', 2),
(226, 'sytanicin@mailinator.com', 'macivema@mailinator.com', 'kujyzuby@mailinator.com', '', 'rediqir@mailinator.com', 4),
(227, 'lohut@mailinator.com', 'tokeca@mailinator.com', 'disadu@mailinator.com', '', 'gehizadide@mailinator.com', 2),
(228, 'hile@mailinator.com', 'zifi@mailinator.com', 'nuqaz@mailinator.com', '', 'cubafomone@mailinator.com', 1),
(229, 'hyrawywoc@mailinator.com', 'zuhijozon@mailinator.com', 'xybeher@mailinator.com', '', 'gowiziho@mailinator.com', 3),
(230, 'test1', 'magefifime@mailinator.com', 'nexasyq@mailinator.com', '', 'nyvip@mailinator.com', 1),
(231, 'test2', 'kawaviti@mailinator.com', 'tuvyv@mailinator.com', '', 'gidoke@mailinator.com', 2),
(232, 'test3', 'cyfum@mailinator.com', 'jedoma@mailinator.com', '', 'cocuc@mailinator.com', 2),
(233, 'test4', 'fitedes@mailinator.com', 'rime@mailinator.com', '', 'cocesiguxy@mailinator.com', 1),
(234, 'test4', 'gomufiqum@mailinator.com', 'kodomyquw@mailinator.com', '', 'monenuwyno@mailinator.com', 2),
(235, 'test5', 'fepego@mailinator.com', 'sycopyd@mailinator.com', '', 'dorumuqaz@mailinator.com', 4),
(236, 'test6', 'kukyfegesy@mailinator.com', 'puteqy@mailinator.com', '', 'cywejo@mailinator.com', 5),
(237, 'test7', 'caryq@mailinator.com', 'lagil@mailinator.com', '', 'qacoce@mailinator.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `priv` tinyint(4) NOT NULL,
  `reg_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `email`, `address`, `gender`, `priv`, `reg_at`) VALUES
(3, 'Ahmed', '123', '10000000', 'Ahmed@g.com', 'Mansoura', 0, 1, '2022-10-04 16:09:33'),
(4, 'Mohamed', '123', '01212121212', 'mohamed@gmail.com', 'Alex', 0, 0, '2022-10-04 16:16:09'),
(5, 'Mostafa', '202cb962ac59075b964b07152d234b70', '01212121212', 'kayan@gmail.com', 'Mansoura', 0, 0, '2022-10-04 17:09:53'),
(7, 'ahmed', '202cb962ac59075b964b07152d234b70', '01222222222222222', 'test@gmail.com', 'test', 0, 0, '2022-10-04 18:12:53'),
(8, 'test1', '202cb962ac59075b964b07152d234b70', '01222222222222222', 'test@gmail.com', 'test', 0, 0, '2022-10-04 18:13:22'),
(9, 'test2', '202cb962ac59075b964b07152d234b70', '01222222222222222', 'test@gmail.com', 'test', 0, 0, '2022-10-04 18:13:33'),
(14, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0, 0, '2022-10-09 22:00:54'),
(15, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0, 0, '2022-10-09 22:02:30'),
(16, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0, 0, '2022-10-09 22:03:37'),
(17, 'ver', '9bf9e7052992467f671d923e9444624e', 'er', 'eman@g.com', 'test', 0, 0, '2022-10-09 22:31:20'),
(18, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0, 0, '2022-10-09 22:35:31'),
(19, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 0, 0, '2022-10-09 22:35:34'),
(20, 'kayan', '202cb962ac59075b964b07152d234b70', '010000000', 'kayan@gmail.com', 'mansoura', 0, 0, '2022-11-01 19:21:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imgtopro` (`pro_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProToCat` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cards_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `ProToCat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
