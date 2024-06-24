-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 02:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carchoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `categorytype` varchar(255) DEFAULT NULL,
  `blogtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `blogpost` text DEFAULT NULL,
  `vurl` varchar(255) DEFAULT NULL,
  `blogimg` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categorytype`, `blogtitle`, `description`, `blogpost`, `vurl`, `blogimg`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Car News', 'CAR OF THE YEAR', 'fdsgdf', '<p>gffdsgfd</p>', 'https://www.youtube.com/watch?v=spGSAeqxVUc', '1719047765_logo.png', '0', '2024-06-22 03:17:33', '2024-06-22 06:59:24'),
(4, 'Videos', 'THIS IS HOSPITAL BLOG', 'THIS IS HOSPITAL BLOG', '<p>THIS IS HOSPITAL BLOG</p>', 'https://www.youtube.com/watch?v=__2bjWbetsA', '1719048634_logo.png', '0', '2024-06-22 03:47:08', '2024-06-24 05:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('d3160cf376dcbf1f85bde27048f7d2e8', 'i:1;', 1719226690),
('d3160cf376dcbf1f85bde27048f7d2e8:timer', 'i:1719226690;', 1719226690);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `companylogo` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `citystateprovince` varchar(255) DEFAULT NULL,
  `postalcode` varchar(255) DEFAULT NULL,
  `fburl` varchar(255) DEFAULT NULL,
  `igurl` varchar(255) DEFAULT NULL,
  `yturl` varchar(255) DEFAULT NULL,
  `twurl` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `companyname`, `companylogo`, `email`, `phonenumber`, `citystateprovince`, `postalcode`, `fburl`, `igurl`, `yturl`, `twurl`, `linkurl`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Mukesh Private Limited', 'logos/PGshtUOJh3qF0qdDU0acnCa1twoQxBk5HdagxfXY.png', 'abc@gmail.com', '1234567899', 'Ajmer,Raj', '305001', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'https://www.flaticon.com/', 'dasdsadas', '2024-06-21 12:34:26', '2024-06-21 07:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_attributes`
--

CREATE TABLE `form_attributes` (
  `id` int(11) NOT NULL,
  `cartype` varchar(255) DEFAULT NULL,
  `formlabels` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `inputtype` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_attributes`
--

INSERT INTO `form_attributes` (`id`, `cartype`, `formlabels`, `value`, `inputtype`, `created_at`, `updated_at`) VALUES
(5, 'Old Car', 'Engine & Transmission', 'Max Speed', 'text', '2024-06-24 01:01:41', '2024-06-24 04:59:42'),
(8, 'Old Car', 'Engine & Transmission', 'Max Power (bhp@rpm)', 'text', '2024-06-24 05:00:35', '2024-06-24 05:00:35'),
(9, 'Old Car', 'Capacity', 'Doors', 'text', '2024-06-24 05:04:35', '2024-06-24 05:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Master',
  `iconimage` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `label`, `value`, `type`, `iconimage`, `created_at`, `updated_at`) VALUES
(24, 'E-Commerce', 'E-Commerce', 'Mopeds', '1718969247_logo.png', '2024-06-21 05:57:27', '2024-06-21 11:29:39'),
(25, 'demo', 'demo', 'Mopeds', '1718969332_wp6537938-lord-shiva-desktop-4k-wallpapers.jpg', '2024-06-21 05:58:52', '2024-06-21 05:58:52'),
(26, 'TATA', 'TATA', 'Trucks', '1718969720_logo.png', '2024-06-21 06:05:20', '2024-06-21 06:05:20'),
(27, 'Blog', 'Blog', 'Master', NULL, '2024-06-22 00:15:46', '2024-06-22 00:15:46'),
(29, 'Car News', 'Car News', 'Blog', NULL, '2024-06-22 00:17:00', '2024-06-22 00:17:00'),
(30, 'Videos', 'Videos', 'Blog', NULL, '2024-06-22 00:17:09', '2024-06-22 00:17:09'),
(34, 'Old Car', 'Old Car', 'Master', NULL, '2024-06-23 23:45:28', '2024-06-23 23:45:28'),
(35, 'New Car', 'New Car', 'Master', NULL, '2024-06-23 23:45:36', '2024-06-23 23:45:36'),
(36, 'Engine & Transmission', 'Engine & Transmission', 'Old Car', NULL, '2024-06-23 23:47:19', '2024-06-23 23:47:19'),
(37, 'Dimensions & Weight', 'Dimensions & Weight', 'Old Car', NULL, '2024-06-23 23:50:00', '2024-06-23 23:50:00'),
(38, 'Capacity', 'Capacity', 'Old Car', NULL, '2024-06-23 23:50:10', '2024-06-23 23:50:10'),
(39, 'Suspensions, Brakes, Steering & Tyres', 'Suspensions, Brakes, Steering & Tyres', 'Old Car', NULL, '2024-06-23 23:50:21', '2024-06-23 23:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_08_103015_add_two_factor_columns_to_users_table', 1),
(5, '2024_06_08_103043_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Y6jkwRx1yowp5NsK9WpSEOpPWOuom6fkRDHl28wn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6ImYzb1J2c2dCRVZMYTM4bUZBTHJXZUpjSnhVemxUdG5GcjEyQVhhZ0siO3M6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO319', 1719226642);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Mukesh', 'support@carchoice.com', NULL, '$2y$12$byVa7VvrsHOTcqpaEcjMnOWWO2ZvTvzOVBBSKNABqS0dwUPUqgWa6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-08 05:04:23', '2024-06-20 23:34:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_attributes`
--
ALTER TABLE `form_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_attributes`
--
ALTER TABLE `form_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
