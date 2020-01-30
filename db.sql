-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 09:15 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `photo`, `date`, `time`, `location`, `skill`, `created_at`, `updated_at`, `description`, `user_id`) VALUES
(1, 'DevFest', 'dsc_1579585177.jpg', '02/12/2020', '10: 00 am', 'JKUAT LH4', 'Beginner', '2020-01-21 02:39:37', '2020-01-21 02:39:37', 'We dive into all technologies', 1),
(2, 'Kotlin Everywhere', 'android_1579586499.jpg', '10/2/2020', '12:20', 'JKUAT LH1', 'Intermediate', '2020-01-21 03:01:39', '2020-01-21 03:01:39', 'This is a refresher course for all Koltineers', 1),
(3, 'Laracon', 'diversity dsc_1579609385.png', '10/03/2020', '16: 00', 'JKUAT LH2', 'Expert', '2020-01-21 09:23:05', '2020-01-21 09:23:05', 'This is all to do with Laravel', 1),
(4, 'Cyber Security Meetup', 'underconstructiongif_1579941518.gif', '1/2/2020', '16: 00 pm', 'JKUAT ROOM 30', 'Beginner', '2020-01-25 05:38:39', '2020-01-25 05:38:39', 'This is your refresher for all things Cyber Sec', 1),
(10, 'Nairobi Gophers', 'IMG_20191124_122317 (1)_1580150459.jpg', '10/2/2020', '16:00', 'iHub', 'Intermediate', '2020-01-27 15:40:59', '2020-01-27 15:40:59', 'Trust me, this is the place to Go.', 1),
(11, 'Django Con', 'favicon_1580150709.png', '10/03/2020', '12:20', 'Decoded Africa', 'Beginner', '2020-01-27 15:45:09', '2020-01-27 15:45:09', 'This is not your ordinary django, I mean jungle.', 1),
(13, 'Deep Learning.ai', 'deep_1580204493.png', '10/03/2020', '10:00 am', 'JKUAT LH3', 'Beginner', '2020-01-28 06:41:33', '2020-01-28 06:41:33', 'Wanna know about Ai and deep learning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_user`
--

CREATE TABLE `event_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_user`
--

INSERT INTO `event_user` (`id`, `user_id`, `event_id`, `created_at`, `updated_at`) VALUES
(4, 6, 2, NULL, NULL),
(6, 1, 3, NULL, NULL),
(8, 1, 1, NULL, NULL),
(9, 1, 2, NULL, NULL),
(10, 6, 3, NULL, NULL),
(11, 1, 11, NULL, NULL),
(14, 27, 10, NULL, NULL),
(15, 27, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_13_114313_create_posts_table', 1),
(5, '2020_01_15_072153_add_userid_to_posts', 2),
(6, '2020_01_15_095125_add_cover_image_to_posts', 3),
(7, '2020_01_20_092106_create_events_table', 4),
(8, '2020_01_20_093014_add_phone_no_to_users', 5),
(9, '2020_01_20_093600_add_phone_no_to_users', 6),
(10, '2020_01_20_102432_remove_body_from_events', 7),
(11, '2020_01_20_103520_add_description_to_events', 8),
(12, '2020_01_21_055718_add_user_id_to_events', 9),
(13, '2020_01_24_103518_create_attendance_table', 10),
(14, '2020_01_27_180119_create_resources_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('grishon.nganga01@gmail.com', '$2y$10$sDbThvKGifVYQByUg/TwceaHfB4xbB/YkArOJ.QwbmY/4vcpD956u', '2020-01-27 05:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(15, 'Post Two', '<p>This is the body for post two</p>', '2020-01-15 09:30:56', '2020-01-15 09:49:06', 2, 'home-icon-vector-png-5_1579092546.jpg'),
(16, 'Has no picture', '<p>This has no pic</p>', '2020-01-15 10:10:26', '2020-01-15 10:10:26', 2, 'nocover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `event_id`, `file_name`, `uploaded_at`, `created_at`, `updated_at`) VALUES
(4, 10, 'practice_problem_1580150459.pdf', '2020-01-27 18:42:46', '2020-01-27 15:40:59', '2020-01-27 15:40:59'),
(5, 10, 'Laravel_1580150459.pdf', '2020-01-27 18:42:51', '2020-01-27 15:40:59', '2020-01-27 15:40:59'),
(6, 10, 'Laravel_1580150459.csv', '2020-01-27 18:42:54', '2020-01-27 15:40:59', '2020-01-27 15:40:59'),
(7, 11, 'KEITH-MARTIN TRANSCRIPTS_1580150709.pdf', '2020-01-27 18:45:09', '2020-01-27 15:45:09', '2020-01-27 15:45:09'),
(8, 11, 'jpg2pdf_1580150709.pdf', '2020-01-27 18:45:09', '2020-01-27 15:45:09', '2020-01-27 15:45:09'),
(9, 11, 'sta-2200-N_1580150709.pdf', '2020-01-27 18:45:09', '2020-01-27 15:45:09', '2020-01-27 15:45:09'),
(13, 13, 'practice_problem_1580204493.pdf', '2020-01-28 09:41:33', '2020-01-28 06:41:33', '2020-01-28 06:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'Grishon Nganga', 'grishon.nganga01@gmail.com', '2020-01-27 13:38:33', '$2y$10$JzbbT5rSAAeT6ddZ2QI3BOgWLJVvOnuoCJq9OpvQFdQ3823r6cdMy', NULL, '2020-01-14 08:52:05', '2020-01-27 13:38:33', ''),
(2, 'Grishon Gikish', 'kishy.gikish@gmail.com', '2020-01-29 14:47:15', '$2y$10$oc1iqHbVNWDgsocCO.BNl.KBTj37/fGF/FKe7u9IhDfskTjKA1fYu', NULL, '2020-01-14 09:42:55', '2020-01-29 14:47:15', ''),
(3, 'Kelvin', 'kelvin@gmail.com', NULL, '$2y$10$Ch3eN57hSlea4Bpi008DSOgm0MZuNMzEWsO91/9UIR3aKGbbyrIwm', NULL, '2020-01-19 07:48:49', '2020-01-19 07:48:49', ''),
(4, 'Onesmus Kiamba', 'ones@gmail.com', NULL, '$2y$10$N9YNn2uHO6EpeSewxqSCSO6Hd3aYPdbU5bJ1838THfPvQFqXpz33.', NULL, '2020-01-19 09:41:34', '2020-01-19 09:41:34', ''),
(5, 'keithmartin Kinyua', 'keith@gmail.com', NULL, '$2y$10$Acs7d1MElhKPrTr6t1Fd2u3DG1I3lAjexIvPUJhsxtt1OBvfbKTnW', NULL, '2020-01-19 14:39:57', '2020-01-19 14:39:57', ''),
(6, 'shay\'s say', 'sharron.njoroge@gmail.com', NULL, '$2y$10$wL9lKyUJaabASgzhs9Oio.rkoiBeEWrG0j/l/hlfdAS9oAwEjN.1e', NULL, '2020-01-24 05:49:32', '2020-01-24 05:49:32', '0713873297'),
(7, 'Violet Oganda', 'vio@gmail.com', NULL, '$2y$10$wdGNHp08P.MUaXKfjmmE4OftPDaNVGGMxlIkW4O0wRJIWTWiyvUR6', NULL, '2020-01-25 06:32:08', '2020-01-25 06:32:08', '0729400426'),
(26, 'Nerd Africa', 'nerdafrica01@gmail.com', NULL, '$2y$10$FU9YsrVvsNk4Sgh81zgZx.kPfD8Js8pv4ZqJe9qDmpRB5bDTI1DRe', NULL, '2020-01-29 14:39:49', '2020-01-29 14:39:49', '0729400426'),
(27, 'PRISCILLAH NJERI', 'priscillah.nganga97@gmail.com', '2020-01-29 17:29:26', '$2y$10$V78XpcZvOWy9Lo3EfXHC8uKAXAJFBStZ64f.MbiGn49vPzVAyKclC', NULL, '2020-01-29 17:24:53', '2020-01-29 17:29:26', '0700848715');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_user`
--
ALTER TABLE `event_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_user`
--
ALTER TABLE `event_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
