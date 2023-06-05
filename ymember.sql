-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 29, 2023 at 03:01 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ymember`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `act_id` int(10) UNSIGNED NOT NULL,
  `act_title` varchar(255) NOT NULL,
  `act_start_date` datetime DEFAULT NULL,
  `act_end_date` datetime DEFAULT NULL,
  `refs_category_id` int(11) DEFAULT NULL,
  `act_created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`act_id`, `act_title`, `act_start_date`, `act_end_date`, `refs_category_id`, `act_created_at`) VALUES
(1, 'อบรมพัฒนาทักษะการพูด', '2020-08-20 09:00:00', '2020-08-21 17:00:00', 401, '2023-05-22 05:44:13'),
(2, 'อบรมเยาวชน ศาลายา', '2020-09-03 14:00:00', '2020-09-03 17:00:00', 401, '2023-05-22 05:44:13'),
(3, 'ysdn กรุงเทพฯ', '2020-07-16 09:00:00', '2020-07-16 11:00:00', 402, '2023-05-22 05:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `clu_id` int(10) UNSIGNED NOT NULL,
  `clu_title` varchar(255) NOT NULL,
  `clu_description` varchar(1000) NOT NULL,
  `clu_created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`clu_id`, `clu_title`, `clu_description`, `clu_created_at`) VALUES
(1, 'ภาคเหนือตอนบน', '', '2023-05-22 05:45:19'),
(2, 'ภาคเหนือตอนล่าง', '', '2023-05-22 05:45:19'),
(3, 'ภาคใต้ตอนบน', '', '2023-05-22 05:45:19'),
(4, 'ภาคใต้ตอนล่าง', '', '2023-05-27 17:44:27'),
(5, 'ภาคกลาง', '', '2023-05-27 17:44:33'),
(6, 'กรุงเทพฯ', '', '2023-05-27 17:45:30'),
(7, 'ภาคอีสานตอนบน', '', '2023-05-27 17:45:30'),
(8, 'ภาคอีสานตอนล่าง', '', '2023-05-27 17:45:50'),
(9, 'ภาคตะวันออก', '', '2023-05-27 17:49:34'),
(10, 'ภาคตะวันตก', '', '2023-05-27 17:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `phone` text,
  `religion` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `firstname`, `lastname`, `nickname`, `dob`, `gender_id`, `club_id`, `phone`, `religion`, `avatar`, `created_at`) VALUES
(13, 'ยงยุทธ																																																		', 'ยอดจารย์																																																		', 'yut2																																																		', '1981-02-03', 202, 3, '0859387714																			', '502', '/ysdn_thailand/ysdn/member/avatars/97f16f1d0f391c28adb3967f11596d13.JPG', '2023-05-27 13:39:03'),
(14, 'yellow1																																																																																								', 'ยอดจารย์																																																																																										', 'yellow12	223																																																																																									', '1983-02-12', 203, 8, '0859387714																														', '502', '/ysdn_thailand/ysdn/member/avatars/6a4c4da3c14de8bb657f99d2e60c08c5.jpg', '2023-05-27 13:39:37'),
(15, 'yellow5																														', 'ยอดจารย์																														', 'evo																														', '1985-12-11', 201, 1, '0859387714										', '501', '/ysdn_thailand/ysdn/member/avatars/a2742b04fa4588d7b2f946b559b49a26.jpeg', '2023-05-27 14:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `refs`
--

CREATE TABLE `refs` (
  `ref_id` int(11) NOT NULL,
  `ref_title` varchar(255) NOT NULL,
  `ref_color` varchar(255) NOT NULL,
  `ref_group_id` int(11) DEFAULT NULL,
  `ref_created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refs`
--

INSERT INTO `refs` (`ref_id`, `ref_title`, `ref_color`, `ref_group_id`, `ref_created_at`) VALUES
(101, 'นาย', 'primary', 1, '2023-05-22 05:47:33'),
(102, 'นาง', 'info', 1, '2023-05-22 05:47:33'),
(103, 'นางสาว', 'danger', 1, '2023-05-22 05:47:33'),
(104, 'อื่น ๆ', 'warning', 1, '2023-05-22 05:47:33'),
(201, 'LGBTQ', 'warning', 2, '2023-05-22 05:47:33'),
(202, 'ชาย', 'info', 2, '2023-05-22 05:47:33'),
(203, 'หญิง', 'danger', 2, '2023-05-22 05:47:33'),
(301, 'กีฬา', 'primary', 3, '2023-05-22 05:47:33'),
(302, 'ดนตรี', 'info', 3, '2023-05-22 05:47:33'),
(303, 'DIY', 'warning', 3, '2023-05-22 05:47:33'),
(401, 'Training', 'primary', 4, '2023-05-22 05:47:33'),
(402, 'Meeting', 'info', 4, '2023-05-22 05:47:33'),
(501, 'ศาสนาพุทธ', 'danger', 5, '2023-05-28 14:59:15'),
(502, 'ศาสนาคริสต์', 'info', 5, '2023-05-28 14:59:15'),
(503, 'ศาสนาอิสลาม', 'warning', 5, '2023-05-28 15:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `ref_groups`
--

CREATE TABLE `ref_groups` (
  `g_id` int(10) UNSIGNED NOT NULL,
  `g_title` varchar(255) NOT NULL,
  `g_created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ref_groups`
--

INSERT INTO `ref_groups` (`g_id`, `g_title`, `g_created_at`) VALUES
(1, 'คำนำหน้า', '2023-05-22 05:46:55'),
(2, 'เพศ', '2023-05-22 05:46:55'),
(3, 'ภูมิภาค', '2023-05-22 05:46:55'),
(4, 'ประเภทกิจกรรม', '2023-05-22 05:46:55'),
(5, 'ศาสนา', '2023-05-28 15:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `paid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `activity_id`, `person_id`, `paid`, `created_at`) VALUES
(1, 1, 1, NULL, '2023-05-22 05:48:17'),
(2, 1, 2, NULL, '2023-05-22 05:48:17'),
(3, 1, 4, NULL, '2023-05-22 05:48:17'),
(4, 1, 5, NULL, '2023-05-22 05:48:17'),
(5, 1, 8, NULL, '2023-05-22 05:48:17'),
(6, 1, 9, NULL, '2023-05-22 05:48:17'),
(7, 2, 1, NULL, '2023-05-22 05:48:17'),
(8, 2, 2, NULL, '2023-05-22 05:48:17'),
(9, 2, 3, NULL, '2023-05-22 05:48:17'),
(10, 2, 6, NULL, '2023-05-22 05:48:17'),
(11, 2, 8, NULL, '2023-05-22 05:48:17'),
(12, 2, 9, NULL, '2023-05-22 05:48:17'),
(13, 3, 2, NULL, '2023-05-22 05:48:17'),
(14, 3, 3, NULL, '2023-05-22 05:48:17'),
(15, 3, 4, NULL, '2023-05-22 05:48:17'),
(16, 3, 5, NULL, '2023-05-22 05:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT 'member',
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'yellow', 'sdn.warehouse@gmail.com', '$2y$10$V3dZ2GTczARg/dnRl0tBhOEHHnYsBG7dcUFVaQQsuRyc7NBgtctkG', 'admin', NULL, '2023-05-22 19:35:58', NULL),
(3, 'yellow', 'hd.blacksnow@gmail.com', '$2y$10$kau/BRNucKJfssOleKPbUO8P7HvCFckOjuskmsObcBCJ.vqmD0ja2', 'member', NULL, '2023-05-26 19:20:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`clu_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refs`
--
ALTER TABLE `refs`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `ref_groups`
--
ALTER TABLE `ref_groups`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `act_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ref_groups`
--
ALTER TABLE `ref_groups`
  MODIFY `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
