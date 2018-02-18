-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:06 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hakeem`
--

-- --------------------------------------------------------

--
-- Table structure for table `career_messages`
--

CREATE TABLE `career_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career_messages`
--

INSERT INTO `career_messages` (`id`, `name`, `email`, `number`, `created_at`, `updated_at`) VALUES
(5, 'Ahmed Rabea', 'arabea169@gmail.com', '', '2017-08-07 23:06:08', '2017-08-07 23:06:08'),
(8, 'mohamed', 'elbiheiry2@gmail.com', '', '2017-08-09 05:28:28', '2017-08-09 05:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `career_statics`
--

CREATE TABLE `career_statics` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career_statics`
--

INSERT INTO `career_statics` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'Careers-logo.png', '2017-08-09 07:20:43', '2017-08-09 05:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `career_static_details`
--

CREATE TABLE `career_static_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career_static_details`
--

INSERT INTO `career_static_details` (`id`, `master_id`, `title`, `paragraph`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, '                                                                                                                        We are changing healthcare map in Middle East to better for everyone in middle east\r\n                                    \r\n                                    \r\n                                    \r\n                                    ', 'We believe in people who can trust', 'en', '2017-08-09 07:21:34', '2017-08-09 05:21:34'),
(2, 1, ' نحن نقوم بتغيير خارطة الإعتناء بالصحة فى الشرق الأوسط لتكون أفضل للجميع في الشرق الاوسط', 'نحن نؤمن بمن يستطيع ويؤمن', 'ar', '2017-08-09 07:21:34', '2017-08-09 05:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'footer-img.png', '2017-08-09 07:24:58', '2017-08-09 05:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `footer_details`
--

CREATE TABLE `footer_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer_details`
--

INSERT INTO `footer_details` (`id`, `master_id`, `title`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'If you are a 5 star doctor, clinic or hospital join us!', 'en', '2017-08-09 07:24:58', '2017-08-09 05:24:58'),
(2, 1, 'إذا كنت طبيب , عيادة أو مستشفى 5 نجوم انضم إلينا', 'ar', '2017-08-09 07:24:58', '2017-08-09 05:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `home_statics`
--

CREATE TABLE `home_statics` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_statics`
--

INSERT INTO `home_statics` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'image.png', '2017-08-08 10:38:22', '2017-08-08 08:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `home_static_details`
--

CREATE TABLE `home_static_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_static_details`
--

INSERT INTO `home_static_details` (`id`, `master_id`, `title`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gathering the best doctors in one place for you and your aid', 'en', '2017-08-09 07:53:17', '2017-08-09 05:53:17'),
(2, 1, ' انت تجميع أفضل الأطباء فى مكان واحد من أجلك ومن اجل مساعدتك', 'ar', '2017-08-09 07:53:17', '2017-08-09 05:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_08_01_123037_create_settings_table', 1),
('2017_08_03_080845_create_home_statics_table', 2),
('2017_08_03_081015_create_home_static_details_table', 2),
('2017_08_03_100705_create_career_statics_table', 3),
('2017_08_03_100726_create_career_static_details_table', 3),
('2017_08_03_131829_partners', 4),
('2017_08_03_132004_create_partner_details_table', 4),
('2017_08_06_140022_create_socials_table', 5),
('2017_08_06_145358_create_partner_messages_table', 6),
('2017_08_06_225005_create_career_messages_table', 7),
('2017_08_07_105713_create_footers_table', 8),
('2017_08_07_105730_create_footer_details_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'image.png', '2017-08-08 11:16:53', '2017-08-08 09:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `partner_details`
--

CREATE TABLE `partner_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner_details`
--

INSERT INTO `partner_details` (`id`, `master_id`, `title`, `paragraph`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Want to become a partner', 'fill the down form and we will make sure to give you a call', 'en', '2017-08-09 07:24:02', '2017-08-09 05:24:02'),
(2, 1, 'هل تريد أن تصبح شريكا', 'قم بتعبئة الإستمارة وسنتأكد أنك ستحصل على اتصال', 'ar', '2017-08-09 07:24:02', '2017-08-09 05:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `partner_messages`
--

CREATE TABLE `partner_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner_messages`
--

INSERT INTO `partner_messages` (`id`, `full_name`, `speciality`, `email`, `phone_num`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Rabea', 'Dentisty', 'arabea169@gmail.com', '01011093385', '2017-08-09 05:43:45', '2017-08-09 05:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` text COLLATE utf8_unicode_ci NOT NULL,
  `site_url` text COLLATE utf8_unicode_ci NOT NULL,
  `site_name_search` text COLLATE utf8_unicode_ci NOT NULL,
  `site_email` text COLLATE utf8_unicode_ci NOT NULL,
  `site_lang` text COLLATE utf8_unicode_ci NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_url`, `site_name_search`, `site_email`, `site_lang`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'HakEEEM169@gmail.com', 'localhost://hakeem/homsa/ahmed', 'HAKEEM', 'HakEEM169@gmail.com', 'English', 'home-logo.png', NULL, '2017-08-09 05:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/mohamed.elbiheiry', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', '2017-08-09 07:26:22', '2017-08-09 05:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Homsa', 'arabea169@gmail.com', '$2y$10$vUYVqpT7CBN8gZWpflBe8.YozFtli4N7FmUHWOWGDNTS2rHQxElB6', 'dEhHUs0eEaGnap7cAd3VcqPpXVnd4mG1kQ1xUx7n6GuvN7REZjzQ80Vl1qM0', '2017-08-06 18:27:31', '2017-08-09 05:37:07'),
(4, 'Marawan Mahmoud', 'marawan45@gmail.com', '$2y$10$66q6h4CXycEGv45spbWhrexdzvO.r4kfsCsUGrDwG.HA5YM4bm3rS', NULL, '2017-08-06 19:05:23', '2017-08-06 19:05:23'),
(6, 'elbiheiry', 'elbiheiry2@gmail.com', '$2y$10$2Pd/Ap/Ky2vHapbsHf2SIORUsp8xuJfB1TZmOr.ojHLFIKakSMtq2', 'jNvJP1l8llaj5WnV4mfWd6XiZ6D3oFKLfVtNrA4AAJmzUELWprfWTP5EGy8u', '2017-08-09 05:36:59', '2017-08-09 05:53:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career_messages`
--
ALTER TABLE `career_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_statics`
--
ALTER TABLE `career_statics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_static_details`
--
ALTER TABLE `career_static_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_details`
--
ALTER TABLE `footer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_statics`
--
ALTER TABLE `home_statics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_static_details`
--
ALTER TABLE `home_static_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_details`
--
ALTER TABLE `partner_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_messages`
--
ALTER TABLE `partner_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career_messages`
--
ALTER TABLE `career_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `career_statics`
--
ALTER TABLE `career_statics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `career_static_details`
--
ALTER TABLE `career_static_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `footer_details`
--
ALTER TABLE `footer_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home_statics`
--
ALTER TABLE `home_statics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_static_details`
--
ALTER TABLE `home_static_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `partner_details`
--
ALTER TABLE `partner_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partner_messages`
--
ALTER TABLE `partner_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
