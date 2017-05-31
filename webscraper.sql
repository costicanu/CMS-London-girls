-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mai 2017 la 14:02
-- Versiune server: 5.6.17-log
-- PHP Version: 5.6.25

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
-- Structura de tabel pentru tabelul `girls`
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
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `girls`
--

INSERT INTO `girls` (`id`, `is_active`, `name`, `own_words`, `interview_id`, `ower_comments`, `location`, `nearest_station`, `available_for`, `age`, `height`, `statistics`, `shoe_size`, `hair`, `eyes`, `nationality`, `languages`, `hobbies_sports`, `smoking`, `sexual_orientation`, `large_tattoos`, `intimate_piercings`, `duo_partner`, `favorite_restaurants`, `favorite_cuisine`, `favorite_drink`, `favorite_perfume`, `rate_1_hour`, `rate_1_5_hours`, `rate_2_hours`, `rate_3_hours`, `rate_dinner_date`, `rate_overnight_12_hours`, `rate_overnight_14_hours`, `rate_1_hour_outcall`, `rate_1_5_hours_outcall`, `rate_2_hours_outcall`, `rate_3_hours_outcall`, `rate_dinner_date_outcall`, `rate_overnight_12_hours_outcall`, `rate_overnight_14_hours_outcall`, `rate_24_hours`, `rate_48_hours`, `rate_additional_days`, `rate_24_hours_outcall`, `rate_48_hours_outcall`, `rate_additional_days_outcall`, `services`, `created_at`, `updated_at`) VALUES
(1, NULL, 'n1', 'own_words1', 0000000001, 'comments here', 'location here', 'station here', 'available for here', '21', '22', '23', '24', 'blonde', 'green', 'irish', 'english', 'swimming', 'no', 'straight', 'no tatoos', 'no piercing', '1,2,3', 'no restaurant', 'no cuisine', 'no drink', 'no perfume', '1', '1.5', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', NULL, NULL),
(2, NULL, '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-23 13:51:00', '2017-05-23 13:51:00'),
(3, NULL, 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-28 17:51:06', '2017-05-28 17:51:06'),
(4, NULL, 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-28 17:52:29', '2017-05-28 17:52:29'),
(5, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-30 12:17:55', '2017-05-30 12:17:55'),
(6, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-30 12:22:17', '2017-05-30 12:22:17'),
(7, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-30 12:23:47', '2017-05-30 12:23:47'),
(8, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-30 12:24:09', '2017-05-30 12:24:09'),
(9, NULL, 'test2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-30 13:20:53', '2017-05-30 13:20:53'),
(10, NULL, 'test3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-31 12:23:37', '2017-05-31 12:23:37');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `girl_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  `featured` tinyint(1) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `images`
--

INSERT INTO `images` (`id`, `girl_id`, `url`, `created_at`, `updated_at`, `featured`) VALUES
(1, 4, 'media/original/isabelle320170528055229.jpg', '2017-05-28 17:52:29', '2017-05-28 17:52:29', NULL),
(2, 4, 'media/original/isabelle520170528055229.jpg', '2017-05-28 17:52:29', '2017-05-28 17:52:29', NULL),
(3, 4, 'media/original/isabelle620170528055229.jpg', '2017-05-28 17:52:30', '2017-05-28 17:52:30', NULL),
(4, 8, 'media/original/transport20170530122409.jpg', '2017-05-30 12:24:09', '2017-05-30 12:24:09', NULL),
(5, 8, 'media/original/norvin120170530122409.jpg', '2017-05-30 12:24:09', '2017-05-30 12:24:09', NULL),
(6, 9, 'media/original/tracking.jpg', '2017-05-30 13:20:53', '2017-05-30 13:20:53', NULL),
(7, 9, 'media/original/calitate.jpg', '2017-05-30 13:20:53', '2017-05-30 13:20:53', NULL),
(8, 10, 'media/original/planograma20170531122337.jpg', '2017-05-31 12:23:38', '2017-05-31 12:23:38', NULL),
(9, 10, 'media/original/220170531122337.jpg', '2017-05-31 12:23:38', '2017-05-31 12:23:38', NULL);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `content` text,
  `created_at` varchar(40) DEFAULT NULL,
  `updated_at` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'aaa', '1111', NULL, NULL),
(2, 'bbbb', '2222', NULL, NULL),
(3, 'ccc', '3333', NULL, NULL),
(4, 'ddd', '4444', NULL, NULL),
(7, 'third title', '3just inserted via Eloquent', '2017-04-24 12:05:56', '2017-04-24 12:07:53');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(0, 'subscriber'),
(1, 'client'),
(2, 'administrator');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
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
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `role_id`, `is_active`) VALUES
(1, 'costicanu', 'costicanu@yahoo.com', '$2y$10$rAcSHj.8mRM4Y9XiU66TGezvnR1wJWizs1ua0.YE/R2wWVBxItSCe', '2017-05-07 15:04:50', '2017-05-16 13:16:39', 'CPKhckaXAM9LdYC0tobQQxgupAEsO3r9t1rqDYOV9ZLfDCrpE72GtMWKV1Cq', 2, 1),
(4, 'test', NULL, NULL, '2017-05-11 13:22:59', '2017-05-11 13:22:59', NULL, 2, NULL),
(6, 'test', NULL, NULL, '2017-05-11 13:23:55', '2017-05-11 13:23:55', NULL, 2, NULL),
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
