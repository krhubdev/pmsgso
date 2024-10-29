-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 04:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gso`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_items`
--

CREATE TABLE `article_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `acquisition_date` date DEFAULT NULL,
  `property_number_x` varchar(255) DEFAULT NULL,
  `property_number_y` varchar(255) DEFAULT NULL,
  `unit_measure` varchar(255) DEFAULT NULL,
  `unit_value` decimal(10,2) DEFAULT NULL,
  `quantity_per_property_card` int(11) DEFAULT NULL,
  `quantity_per_physical_count` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `accountable_officer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_items`
--

INSERT INTO `article_items` (`id`, `article`, `description`, `acquisition_date`, `property_number_x`, `property_number_y`, `unit_measure`, `unit_value`, `quantity_per_property_card`, `quantity_per_physical_count`, `location`, `condition`, `accountable_officer`, `created_at`, `updated_at`) VALUES
(1, 'Monitor', 'Acer', NULL, NULL, '2021-05-030-0515A-8831', 'Unit', '27137.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 17:02:36', '2024-10-28 17:02:36'),
(2, 'System Unit', 'Acer SR#47133292645488', NULL, NULL, '2021-05-030-0515A-8831', 'Unit', '3137.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 17:03:36', '2024-10-28 17:03:36'),
(3, 'Monitor', 'Acer', NULL, NULL, '2021-05-030-0516A-8831', 'Unit', '3137.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 17:04:28', '2024-10-28 17:04:28'),
(4, 'Office Table', 'Wooden', '2018-08-28', '2020-2021', '2021-07-010-067A-8831', 'Unit', '14000.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 17:05:37', '2024-10-28 17:05:37'),
(5, 'Printer', 'Epson L565', '2018-08-28', '2020-2021', '2021-07-010-068A-8831', 'Unit', '12000.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 17:10:42', '2024-10-28 17:10:42'),
(6, 'Cabinet', 'Wooden (2 Doors)', NULL, '2020-2132', '2021-07-010-073', 'Unit', '2500.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 19:29:58', '2024-10-28 19:29:58'),
(7, 'Wall Fan', 'Hanabishi White', NULL, '2021-05-020-018', '2021-07-010-079', 'Unit', '1699.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 19:30:36', '2024-10-28 19:30:36'),
(8, 'Air conditioner', 'Condura', NULL, '2021-05-020-018', '2021-07-010-078', 'Unit', '14590.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 19:31:10', '2024-10-28 19:31:10'),
(9, 'Ceiling Fan', 'Nikon White/Blue', NULL, '2021-05-020-088', '2021-07-010-082', 'Unit', '2500.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 19:31:44', '2024-10-28 19:31:44'),
(10, 'Bookshelves', '4 Division Wooden', NULL, '2021-07-010-083', '2021-07-010-083', 'Unit', '3500.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 19:32:22', '2024-10-28 19:32:22'),
(11, 'Drawer', 'With Glass 12 Doors', NULL, '2021-07-010-085', '2021-07-010-085', 'Unit', '2500.00', 1, 1, 'BSBA', 'Serviceable', 'Merilyn Tangon', '2024-10-28 19:33:02', '2024-10-28 19:33:02');

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
('6c5a6291270da9accc4b4ec5817d4b83', 'i:1;', 1730163122),
('6c5a6291270da9accc4b4ec5817d4b83:timer', 'i:1730163122;', 1730163122);

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
-- Table structure for table `custodians`
--

CREATE TABLE `custodians` (
  `custodian_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custodians`
--

INSERT INTO `custodians` (`custodian_id`, `name`, `position`, `office`, `created_at`, `updated_at`) VALUES
(1, '123', '123', '123', '2024-10-28 16:54:50', '2024-10-28 16:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `position`, `office`, `created_at`, `updated_at`) VALUES
(1, '12312', '132', '123', '132', '2024-10-28 16:55:10', '2024-10-28 16:55:10');

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `unit_cost` decimal(10,2) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `inventory_item_no` varchar(255) NOT NULL,
  `estimated_useful_life` int(11) DEFAULT NULL,
  `ics_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `description`, `qty`, `unit`, `unit_cost`, `total_cost`, `inventory_item_no`, `estimated_useful_life`, `ics_id`, `created_at`, `updated_at`) VALUES
(1, '123', 132, '132', '132.00', '132.00', '132', 132, 132, '2024-10-28 16:54:35', '2024-10-28 16:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_slips`
--

CREATE TABLE `inventory_slips` (
  `ics_id` bigint(20) UNSIGNED NOT NULL,
  `lgu` varchar(255) NOT NULL,
  `fund` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `date_acquired` date NOT NULL,
  `custodian_id` bigint(20) UNSIGNED NOT NULL,
  `recipient_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_slips`
--

INSERT INTO `inventory_slips` (`ics_id`, `lgu`, `fund`, `office`, `date_acquired`, `custodian_id`, `recipient_id`, `created_at`, `updated_at`) VALUES
(1, '123', '321', '312', '2024-10-23', 1, 1, '2024-10-28 16:55:28', '2024-10-28 16:55:28');

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
(4, '2024_09_14_064113_add_two_factor_columns_to_users_table', 1),
(5, '2024_09_14_064145_create_personal_access_tokens_table', 1),
(6, '2024_10_11_004615_create_inventory_table', 1),
(7, '2024_10_11_004636_create_custodians_table', 1),
(8, '2024_10_11_004651_create_recipients_table', 1),
(9, '2024_10_11_005421_create_inventory_slips_table', 1),
(10, '2024_10_11_010039_create_property_acknowledgements_table', 1),
(11, '2024_10_11_010250_create_employees_table', 1),
(12, '2024_10_11_010519_create_article_items_table', 1),
(13, '2024_10_29_004909_create_t_inventory_items_table', 2);

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
-- Table structure for table `property_acknowledgements`
--

CREATE TABLE `property_acknowledgements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lgu` varchar(255) NOT NULL,
  `fund` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `par_no` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `property_number` varchar(255) DEFAULT NULL,
  `date_acquired` date NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `received_by` bigint(20) UNSIGNED NOT NULL,
  `issued_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE `recipients` (
  `recipient_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`recipient_id`, `name`, `position`, `created_at`, `updated_at`) VALUES
(1, '123', '123', '2024-10-28 16:55:15', '2024-10-28 16:55:15');

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
('bNwQkQRnotxNLQ8Cpi1Rvmkb8eJ4rhfdCml4wSXa', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUW1aNFpHZXJNcjhvNnlnV0JmWEdWeUtXcW85WmwxSU9mZUpvQzJYayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnRpY2xlLWl0ZW1zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiQ3bjhrZ0wxOC9kZFo1cmFLbGVOWXhPckMzc202ZThJLk9hZU9SUkxrSkJySFdudGdqSjVXNiI7fQ==', 1730172989);

-- --------------------------------------------------------

--
-- Table structure for table `t_inventory_items`
--

CREATE TABLE `t_inventory_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_item` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date_acquisition` date DEFAULT NULL,
  `old_property_no` varchar(255) DEFAULT NULL,
  `old_property_no_2020` varchar(255) DEFAULT NULL,
  `new_property_no_2021` varchar(255) DEFAULT NULL,
  `unit_of_measures` varchar(255) DEFAULT NULL,
  `unit_value` decimal(15,2) DEFAULT NULL,
  `quantity_per_property_card` int(11) DEFAULT NULL,
  `quantity_per_physical_card` int(11) DEFAULT NULL,
  `location_whereabouts` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `remarks_accountable_officer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Kent Russell Casiño', 'kent@tcc.edu.ph', NULL, '$2y$12$7n8kgL18/ddZ5raKleNYxOrC3sm6e8I.OaeORRLkJBrHWntgjJ5W6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-10 17:13:35', '2024-10-10 17:13:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_items`
--
ALTER TABLE `article_items`
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
-- Indexes for table `custodians`
--
ALTER TABLE `custodians`
  ADD PRIMARY KEY (`custodian_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD UNIQUE KEY `inventory_inventory_item_no_unique` (`inventory_item_no`);

--
-- Indexes for table `inventory_slips`
--
ALTER TABLE `inventory_slips`
  ADD PRIMARY KEY (`ics_id`);

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
-- Indexes for table `property_acknowledgements`
--
ALTER TABLE `property_acknowledgements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `property_acknowledgements_par_no_unique` (`par_no`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`recipient_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `t_inventory_items`
--
ALTER TABLE `t_inventory_items`
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
-- AUTO_INCREMENT for table `article_items`
--
ALTER TABLE `article_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `custodians`
--
ALTER TABLE `custodians`
  MODIFY `custodian_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory_slips`
--
ALTER TABLE `inventory_slips`
  MODIFY `ics_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_acknowledgements`
--
ALTER TABLE `property_acknowledgements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `recipient_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_inventory_items`
--
ALTER TABLE `t_inventory_items`
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
