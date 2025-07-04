-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2025 at 04:16 PM
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
-- Database: `laravel-doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profiles`
--

CREATE TABLE `doctor_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `languages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`languages`)),
  `profile_image` varchar(255) DEFAULT NULL,
  `memberships` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`memberships`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `logo`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cleveland Hospital', '01JZAPWCVQ3GAWSMNX0Q6NG8ZT.svg', 'Minneapolis, MN', 'Active', '2025-07-04 07:34:18', '2025-07-04 07:34:18'),
(2, 'Apollo Hospital', '01JZAPYJFXWYZ2W05XQHDMBTK9.svg', 'Philadelphia, PA', 'Active', '2025-07-04 07:35:29', '2025-07-04 07:35:29'),
(3, 'Asian Institute', '01JZAPZRX180F5VNRF7QPM4Q11.svg', 'Piscataway, NJ', 'Inactive', '2025-07-04 07:36:09', '2025-07-04 07:36:09'),
(4, 'Manipal North Side', '01JZAQ0WM5Z7RWVR8THTHHTQN1.svg', 'Albuquerque, NM', 'Active', '2025-07-04 07:36:45', '2025-07-04 07:36:45'),
(5, 'Johns Hopkins Hospital', '01JZAQ27PKGMRFH0FEBCPBA4HZ.svg', 'Roswell, GA', 'Active', '2025-07-04 07:37:29', '2025-07-04 07:37:29'),
(6, 'Athol Hospital', '01JZAQ31JHJ8E7ZEHSBXZHZ9M4.svg', 'Chesterfield, IL', 'Active', '2025-07-04 07:37:56', '2025-07-04 07:37:56'),
(7, 'Austen Riggs Center', '01JZAQ42783BZ1S20QTNYC6P6K.svg', 'Atlanta, GA', 'Inactive', '2025-07-04 07:38:29', '2025-07-04 07:38:29'),
(8, 'Baldpate Hospital', '01JZAQ4SEHF7A1PQSQTZQDE8EW.svg', 'Burbank, CA', 'Active', '2025-07-04 07:38:53', '2025-07-04 07:38:53'),
(9, 'Baystate Noble Hospital', '01JZAQ5NP5MGKHY2CVWNW87FP8.svg', 'Lena, IL', 'Active', '2025-07-04 07:39:22', '2025-07-04 07:39:22'),
(10, 'Berkshire Medical Center', '01JZAQ6H54MSF8NHEVVMC3YB4A.svg', 'Saginaw, MI', 'Inactive', '2025-07-04 07:39:50', '2025-07-04 07:39:50'),
(11, 'Beverly Hospital', '01JZAQ79B07C52HD0RQZH6X1SR.svg', 'Westchester, IL', 'Active', '2025-07-04 07:40:15', '2025-07-04 07:40:15'),
(12, 'Good Health City Hospital', '01JZAQ814W91KX4MWW450F4P13.svg', 'Santa Fe Springs, CA', 'Active', '2025-07-04 07:40:39', '2025-07-04 07:40:39');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_07_01_080834_create_roles_table', 2),
(6, '2025_07_01_081728_add_column_to_users_table', 3),
(7, '2025_07_04_091454_create_doctor_profiles_table', 4),
(8, '2025_07_04_110535_create_specialities_table', 5),
(9, '2025_07_04_121934_create_hospitals_table', 6),
(10, '2025_07_04_141434_create_clinics_table', 7);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2025-07-01 03:11:49', '2025-07-01 03:11:49'),
(2, 'patient', '2025-07-01 03:11:55', '2025-07-01 03:11:55'),
(3, 'doctor', '2025-07-01 03:12:21', '2025-07-01 03:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `name`, `image`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Cardiology', '01JZAJPC5WK9YFMRQDGHVWG73V.svg', '01JZAJPC733Z1DX643SJ07YAGC.jpg', '2025-07-04 06:21:07', '2025-07-04 06:21:07'),
(2, 'Orthopedics', '01JZAKHT1WDTP0TYNZSQE81PYS.svg', '01JZAKHT2A063VCZ3QDADMFEPS.jpg', '2025-07-04 06:36:05', '2025-07-04 06:36:05'),
(3, 'Neurology', '01JZAKVYJ8YZG6YYAZSX65ZKAV.svg', '01JZAKVYJCZEQTHEP47SK2XCVF.jpg', '2025-07-04 06:41:38', '2025-07-04 06:41:38'),
(4, 'Pediatrics', '01JZAM2B6V6VAZV5V9ETBR5NPX.svg', '01JZAM2B716PJN72N1TNQTWQW1.jpg', '2025-07-04 06:45:07', '2025-07-04 06:45:07'),
(5, 'Psychiatry', '01JZAMA8TP5DJ2KZC07XS3X89B.svg', '01JZAMA8TWCB375XZVQPZT4CKE.jpg', '2025-07-04 06:49:27', '2025-07-04 06:49:27'),
(6, 'Endocrinology', '01JZAMD60K4XVAPAN29AQRC3Z9.svg', '01JZAMD610Y3H1M0VJ8J9PSQT3.jpg', '2025-07-04 06:51:02', '2025-07-04 06:51:02'),
(7, 'Pulmonology', '01JZAMER4BERRF0PFQMGMJ2FNZ.svg', '01JZAMER4GJCD9JQQGWABN6EC4.jpg', '2025-07-04 06:51:54', '2025-07-04 06:51:54'),
(8, 'Urology', '01JZAMNYHJN6TV46DK5DZCCSC1.svg', '01JZAMNYHRKT4AMH8YM7V3YR25.jpg', '2025-07-04 06:55:50', '2025-07-04 06:55:50'),
(9, 'General Medicine', '01JZAMQN3JZ62H1A7VJ9SHGFTJ.svg', '01JZAMQN3QANZEX8RJNVP5XMXS.png', '2025-07-04 06:56:46', '2025-07-04 06:56:46'),
(10, 'ENT', '01JZAMVAQ03XDKH9VSZ780ZB4C.svg', '01JZAMVAQ5MQWWQE8G21FRPGZQ.jpg', '2025-07-04 06:58:46', '2025-07-04 06:58:46'),
(11, 'Fertility', '01JZAMX84K8BZV09ZCCKTKQ43V.svg', '01JZAMX84R5899DP865H7SS4FW.jpg', '2025-07-04 06:59:49', '2025-07-04 06:59:49'),
(12, 'Family Medicine', '01JZAMYKWW4QB043MP0F2CCAFM.svg', '01JZAMYKX3GCP9QDVTA5TJ7H8X.png', '2025-07-04 07:00:34', '2025-07-04 07:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', '2025-07-01 08:03:47', '$2y$10$oDupabXZNJFqwGo6kFsYmeeVoXxRyfyE56polf89/FkWWN4CE1WIK', NULL, '2025-07-01 08:03:47', NULL),
(2, 2, 'Patient', 'patient@gmail.com', '2025-07-01 08:26:55', '$2y$10$yxC00xuWcbU6Vht7inwLjO3KxiWY5L0fiZiFZTJaq12yun9sk4L1G', NULL, '2025-07-01 08:26:55', NULL),
(8, 3, 'Clinton Ray', 'mivulygy@mailinator.com', NULL, '$2y$12$dLHfwy64JX2Y1dt3q1eQq.6pfdMiiQoExxvo3mpN4zq/QdxdNN7zi', NULL, '2025-07-01 10:25:44', '2025-07-01 10:25:44'),
(9, 3, 'Troy Bowen', 'wekiwuvov@mailinator.com', NULL, '$2y$12$TK1Fkk6GRolbpFJbFBXG4OMSB/k//UntAO9XnTrMpxgzXkTTLl8S.', NULL, '2025-07-02 02:52:44', '2025-07-02 02:52:44'),
(10, 2, 'Odette Sims', 'nuvavo@mailinator.com', NULL, '$2y$12$pldBcJ8q.J.XAzxmUl6pZegqex/JKsuZkdBTRq/kDZQsS7GHfSZJy', NULL, '2025-07-02 03:16:39', '2025-07-02 03:16:39'),
(11, 3, 'Isaac Donovan', 'wifeme@mailinator.com', NULL, '$2y$12$pTzmDOpFKROfYnq3rLpL4.F8L9ih1dtcvzQ.2sBxdx3pVH5.pfy.m', NULL, '2025-07-02 03:20:55', '2025-07-02 03:20:55'),
(12, 3, 'Beverly Malone', 'kyqehy@mailinator.com', NULL, '$2y$12$pRKRU7V0gYhSex.1bh77TenUR8TarKYMjFPfhJAk4xZk7J40LNtM.', NULL, '2025-07-03 07:10:01', '2025-07-03 07:10:01'),
(13, 3, 'Armand Jimenez', 'hylat@mailinator.com', NULL, '$2y$12$VZ0dMhUyXMxNhXKHvgDcmuJVUlHGLoC8vp.6M7m1wXapeJrm9nI7C', NULL, '2025-07-04 04:32:22', '2025-07-04 04:32:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_profiles`
--
ALTER TABLE `doctor_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctor_profiles_doctor_id_unique` (`doctor_id`),
  ADD KEY `doctor_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_profiles`
--
ALTER TABLE `doctor_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_profiles`
--
ALTER TABLE `doctor_profiles`
  ADD CONSTRAINT `doctor_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
