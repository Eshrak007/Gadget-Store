-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 06:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalassessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `apitests`
--

CREATE TABLE `apitests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double(8,2) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apitests`
--

INSERT INTO `apitests` (`id`, `title`, `brand`, `description`, `price`, `rating`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 9', 'Apple', 'An apple mobile which is nothing like apple', 549.00, 549.00, 'https://i.dummyjson.com/data/products/1/thumbnail.jpg', '2023-03-27 11:38:36', '2023-03-27 11:38:36'),
(2, 'iPhone 9', 'Apple', 'An apple mobile which is nothing like apple', 549.00, 549.00, 'https://i.dummyjson.com/data/products/1/thumbnail.jpg', '2023-03-27 11:38:48', '2023-03-27 11:38:48'),
(3, 'iPhone 9', 'Apple', 'An apple mobile which is nothing like apple', 549.00, 549.00, 'https://i.dummyjson.com/data/products/1/thumbnail.jpg', '2023-03-27 23:20:03', '2023-03-27 23:20:03'),
(4, 'iPhone 9', 'Apple', 'An apple mobile which is nothing like apple', 549.00, 4.69, 'https://i.dummyjson.com/data/products/1/thumbnail.jpg', '2023-03-27 23:48:50', '2023-03-27 23:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(6, '2023_03_21_050521_create_products_table', 2),
(7, '2023_03_27_142145_create_apitests_table', 3),
(8, '2023_03_28_180010_create_categories_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 for Inactive, 2 for active',
  `selling_price` double(8,2) NOT NULL,
  `discount_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_name`, `brand_name`, `description`, `image`, `status`, `selling_price`, `discount_price`, `created_at`, `updated_at`) VALUES
(8, 'Samsung Galaxy s5', 'Mobile', 'Samsung', 'This is Samsung Mobile Brand', '281206681.jpg', 2, 25000.00, 23500.00, '2023-04-06 08:24:27', '2023-04-06 08:24:27'),
(9, 'Nokia Lumia 1320', 'Mobile', 'Nokia', 'This is Nokia Brand Mobile', '1543728512.jpg', 2, 19000.00, 16000.00, '2023-04-06 08:26:17', '2023-04-06 08:26:17'),
(10, 'LG Leon 2015', 'Mobile', 'LG', 'This is a Mobile Made by LG', '729936233.jpg', 2, 32000.00, 31500.00, '2023-04-06 08:29:23', '2023-04-06 08:29:23'),
(11, 'Sony Xperia Z1', 'Mobile', 'Sony', 'Cool Looking Mobile', '1574551691.jpg', 2, 54000.00, 53500.00, '2023-04-06 08:30:45', '2023-04-06 08:30:45'),
(12, 'Iphone 6s', 'Mobile', 'Apple', 'This is Apple Phone Iphone 6s', '725803145.jpg', 2, 75000.00, 73200.00, '2023-04-06 08:33:08', '2023-04-06 08:33:08'),
(13, 'Asus Monitor', 'Monitor', 'Asus', 'This is a used Monitor', '258463112.jpg', 2, 20000.00, 12000.00, '2023-04-06 08:35:32', '2023-04-06 08:35:32'),
(14, 'Dell Gaming Laptop', 'Laptop', 'Dell', 'Gaming Laptop with 3090ti Graphics card.', '1208263512.jpg', 1, 120000.00, 115000.00, '2023-04-06 08:36:57', '2023-04-06 08:37:23');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mir Mohaiminul Islam', 'mirmohaiminul786@gmail.com', NULL, '$2y$10$e3wzro457wt.KkhfQy7DUupCcyXQgFZkK.bBo1edqlqftRFFZhuGu', NULL, '2023-03-20 21:17:01', '2023-03-20 21:17:01'),
(2, 'Ahsanul Kabir Opy', 'opy@gmail.com', NULL, '$2y$10$sFy0xWcAfnpoBlqWxVBGtOURnmbC8q1T4vMpggnRqo2R/nXJ/jk7e', NULL, '2023-03-20 22:14:43', '2023-03-20 22:14:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apitests`
--
ALTER TABLE `apitests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `apitests`
--
ALTER TABLE `apitests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
