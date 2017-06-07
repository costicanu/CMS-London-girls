-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 02:05 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.6.25

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webscraper`
--

-- --------------------------------------------------------

--
-- Table structure for table `girls`
--

CREATE TABLE `girls` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) UNSIGNED ZEROFILL DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `own_words` text,
  `interview_id` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `ower_comments` text,
  `location` varchar(50) DEFAULT NULL,
  `nearest_station` varchar(200) DEFAULT NULL,
  `available_for` varchar(255) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `statistics` varchar(255) DEFAULT NULL,
  `shoe_size` varchar(40) DEFAULT NULL,
  `hair` varchar(40) DEFAULT NULL,
  `eyes` varchar(40) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL,
  `hobbies_sports` varchar(100) DEFAULT NULL,
  `smoking` varchar(50) DEFAULT NULL,
  `sexual_orientation` varchar(40) DEFAULT NULL,
  `large_tattoos` varchar(20) DEFAULT NULL,
  `intimate_piercings` varchar(20) DEFAULT NULL,
  `duo_partner` varchar(100) DEFAULT NULL,
  `favorite_restaurants` varchar(100) DEFAULT NULL,
  `favorite_cuisine` varchar(100) DEFAULT NULL,
  `favorite_drink` varchar(100) DEFAULT NULL,
  `favorite_perfume` varchar(100) DEFAULT NULL,
  `rate_1_hour` varchar(10) DEFAULT NULL,
  `rate_1_5_hours` varchar(10) DEFAULT NULL,
  `rate_2_hours` varchar(10) DEFAULT NULL,
  `rate_3_hours` varchar(10) DEFAULT NULL,
  `rate_dinner_date` varchar(10) DEFAULT NULL,
  `rate_overnight_12_hours` varchar(10) DEFAULT NULL,
  `rate_overnight_14_hours` varchar(10) DEFAULT NULL,
  `rate_1_hour_outcall` varchar(10) DEFAULT NULL,
  `rate_1_5_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_2_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_3_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_dinner_date_outcall` varchar(10) DEFAULT NULL,
  `rate_overnight_12_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_overnight_14_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_24_hours` varchar(10) DEFAULT NULL,
  `rate_48_hours` varchar(10) DEFAULT NULL,
  `rate_additional_days` varchar(10) DEFAULT NULL,
  `rate_24_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_48_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_additional_days_outcall` varchar(10) DEFAULT NULL,
  `services` text,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `girls`
--

INSERT INTO `girls` (`id`, `is_active`, `name`, `own_words`, `interview_id`, `ower_comments`, `location`, `nearest_station`, `available_for`, `age`, `height`, `statistics`, `shoe_size`, `hair`, `eyes`, `nationality`, `languages`, `hobbies_sports`, `smoking`, `sexual_orientation`, `large_tattoos`, `intimate_piercings`, `duo_partner`, `favorite_restaurants`, `favorite_cuisine`, `favorite_drink`, `favorite_perfume`, `rate_1_hour`, `rate_1_5_hours`, `rate_2_hours`, `rate_3_hours`, `rate_dinner_date`, `rate_overnight_12_hours`, `rate_overnight_14_hours`, `rate_1_hour_outcall`, `rate_1_5_hours_outcall`, `rate_2_hours_outcall`, `rate_3_hours_outcall`, `rate_dinner_date_outcall`, `rate_overnight_12_hours_outcall`, `rate_overnight_14_hours_outcall`, `rate_24_hours`, `rate_48_hours`, `rate_additional_days`, `rate_24_hours_outcall`, `rate_48_hours_outcall`, `rate_additional_days_outcall`, `services`, `created_at`, `updated_at`, `url`) VALUES
(16, NULL, 'a1234', '<p>aasdfasdfas sa as fas fsd fas aas f</p>\r\n<p>as</p>\r\n<p>df</p>\r\n<p>asdf</p>\r\n<p>as</p>\r\n<p>f</p>\r\n<p>asdf</p>\r\n<p>xxxllll</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-02 12:53:47', '2017-06-02 13:13:52', NULL),
(17, NULL, 'test8', '<p>asdf asdf as f</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-06 10:40:53', '2017-06-06 10:40:53', NULL),
(18, NULL, 'aasdfasf', '<p>&nbsp;i\'m her own words</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 12:15:27', '2017-06-07 12:51:30', 'zzz'),
(19, 1, 'test10', '<p>testare</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 13:50:07', '2017-06-07 13:50:07', 'test10'),
(20, 1, 'test11', '<p>test11</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 13:52:49', '2017-06-07 13:52:49', 'test11'),
(21, 1, 'test12', '<p>test12</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 14:00:52', '2017-06-07 14:00:52', 'test12');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `girl_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  `featured` tinyint(1) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `girl_id`, `name`, `created_at`, `updated_at`, `featured`) VALUES
(69, 16, 'dog1-Copy.jpg', '2017-06-04 10:36:18', '2017-06-04 10:36:18', NULL),
(70, 16, 'dog120170604103615.jpg', '2017-06-04 10:36:18', '2017-06-04 10:36:18', NULL),
(72, 16, 'HappyOldMan.jpg', '2017-06-04 10:36:18', '2017-06-04 10:36:18', NULL),
(73, 17, 'reducere20170606104052.jpg', '2017-06-06 10:40:53', '2017-06-06 10:40:53', NULL),
(74, 17, 'nutraline1520170606104052.jpg', '2017-06-06 10:40:53', '2017-06-06 10:40:53', NULL),
(75, 18, 'reducere20170607121527.jpg', '2017-06-07 12:15:27', '2017-06-07 12:15:27', NULL),
(76, 18, 'nutraline1520170607121527.jpg', '2017-06-07 12:15:27', '2017-06-07 12:15:27', NULL),
(77, 18, 'maxi15.jpg', '2017-06-07 12:15:27', '2017-06-07 12:15:27', NULL),
(78, 19, 'inghetata-prezentare.jpg', '2017-06-07 13:50:07', '2017-06-07 13:50:07', NULL),
(79, 19, 'gelaterie.jpg', '2017-06-07 13:50:07', '2017-06-07 13:50:07', NULL),
(80, 19, 'PETEXPERTLITIERAHAPPYBASICGREY.png', '2017-06-07 13:50:07', '2017-06-07 13:50:07', NULL),
(81, 20, 'norvin1.jpg', '2017-06-07 13:52:49', '2017-06-07 13:52:49', NULL),
(82, 20, 'royal-bannerx2.jpg', '2017-06-07 13:52:49', '2017-06-07 13:52:49', NULL),
(83, 20, 'belcando-bannerx.jpg', '2017-06-07 13:52:49', '2017-06-07 13:52:49', NULL),
(84, 20, 'junior.jpg', '2017-06-07 13:52:49', '2017-06-07 13:52:49', NULL),
(86, 20, 'ice-cream-month--758e32da6500562720170607015443.jpg', '2017-06-07 13:54:44', '2017-06-07 13:54:44', NULL),
(87, 21, 'ice-cream-month--758e32da6500562720170607020051.jpg', '2017-06-07 14:00:52', '2017-06-07 14:00:52', NULL),
(88, 21, 'maxi1520170607020051.jpg', '2017-06-07 14:00:52', '2017-06-07 14:00:52', NULL),
(89, 21, '12.png', '2017-06-07 14:00:52', '2017-06-07 14:00:52', NULL),
(90, 21, 'gelaterie20170607020051.jpg', '2017-06-07 14:00:52', '2017-06-07 14:00:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `content` text,
  `created_at` varchar(40) DEFAULT NULL,
  `updated_at` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'aaa', '1111', NULL, NULL),
(2, 'bbbb', '2222', NULL, NULL),
(3, 'ccc', '3333', NULL, NULL),
(4, 'ddd', '4444', NULL, NULL),
(7, 'third title', '3just inserted via Eloquent', '2017-04-24 12:05:56', '2017-04-24 12:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(0, 'subscriber'),
(1, 'client'),
(2, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT '',
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `role_id`, `is_active`) VALUES
(1, 'costicanu', 'costicanu@yahoo.com', '$2y$10$rAcSHj.8mRM4Y9XiU66TGezvnR1wJWizs1ua0.YE/R2wWVBxItSCe', '2017-05-07 15:04:50', '2017-05-16 13:16:39', 'CPKhckaXAM9LdYC0tobQQxgupAEsO3r9t1rqDYOV9ZLfDCrpE72GtMWKV1Cq', 2, 1),
(7, 'test', NULL, NULL, '2017-05-11 13:23:59', '2017-05-11 13:23:59', NULL, 2, NULL),
(8, 'test', NULL, NULL, '2017-05-11 13:24:16', '2017-05-11 13:24:16', NULL, 2, NULL),
(11, 'test', NULL, NULL, '2017-05-11 13:25:54', '2017-05-11 13:25:54', NULL, 2, NULL),
(13, 'cozmel2', 'costicanu7@gmail.com', NULL, '2017-05-15 12:04:40', '2017-05-17 11:09:43', NULL, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `girls`
--
ALTER TABLE `girls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `girl_id` (`girl_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `girls`
--
ALTER TABLE `girls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `girl_id` FOREIGN KEY (`girl_id`) REFERENCES `girls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
