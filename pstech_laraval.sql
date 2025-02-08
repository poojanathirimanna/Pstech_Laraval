-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 12:16 PM
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
-- Database: `pstech_laraval`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(19, 3, 5, 1, '2025-02-03 02:50:20', '2025-02-03 02:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Laptops', NULL, NULL),
(2, 'Graphic Cards', NULL, NULL),
(3, 'RAM', NULL, NULL),
(4, 'Processors', NULL, NULL),
(5, 'Motherboards', NULL, NULL);

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
(4, '2025_02_01_121153_add_role_to_users_table', 1),
(5, '2025_02_01_215350_create_categories_table', 1),
(6, '2025_02_01_215502_create_products_table', 1),
(7, '2025_02_01_215540_create_orders_table', 1),
(8, '2025_02_01_215638_create_cart_table', 1),
(9, '2025_02_02_085802_create_carts_table', 2),
(10, '2025_02_02_125828_create_carts_table', 3),
(11, '2025_02_02_155302_create_orders_table', 4),
(12, '2025_02_02_230138_create_orders_table', 5),
(13, '2025_02_03_035308_create_orders_table', 6),
(14, '2025_02_03_074429_create_orders_table', 7),
(15, '2025_02_03_075814_create_orders_table', 8),
(16, '2025_02_03_090817_create_personal_access_tokens_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `product_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`product_ids`)),
  `total_price` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `customer_name`, `customer_email`, `customer_address`, `customer_phone`, `product_ids`, `total_price`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 3, 'Poojana Thirimanna', 'psthirimanna@gmail.com', '213,stanly thilakarathne mw,nugegoda', '0772333473', '[2]', 0.00, 'Cash on Delivery', '2025-02-03 02:39:28', '2025-02-03 02:39:28'),
(2, 3, 'Poojana Thirimanna', 'psthirimanna@gmail.com', '213,stanly thilakarathne mw,nugegoda', '0772333473', '[2,6]', 0.00, 'Cash on Delivery', '2025-02-03 02:44:38', '2025-02-03 02:44:38');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 5, 'alex5@gmail.com', '81a7aa1b102ee6d890677e0bf5d77b300a65eea640f1abe281ba2f2adaee2515', '[\"*\"]', NULL, NULL, '2025-02-03 04:22:17', '2025-02-03 04:22:17'),
(2, 'App\\Models\\User', 6, 'alex2@gmail.com', '9a4cb41db1e9b4d39bf4e1dfaeb1be12fa1dbd99859fce7523272ee0794a9004', '[\"*\"]', NULL, NULL, '2025-02-03 04:26:02', '2025-02-03 04:26:02'),
(3, 'App\\Models\\User', 7, 'alex99@gmail.com', 'd43b49c98fba6f06133a00055c922f75ce660655eef24afd5254c9a706c23424', '[\"*\"]', NULL, NULL, '2025-02-03 04:34:35', '2025-02-03 04:34:35'),
(4, 'App\\Models\\User', 7, 'alex99@gmail.com', 'ed34b3790d9bdde10d6957202c581c18c9d06268ebc802235f2e904cbeaaa760', '[\"*\"]', NULL, NULL, '2025-02-03 04:41:26', '2025-02-03 04:41:26'),
(5, 'App\\Models\\User', 7, 'alex99@gmail.com', 'c0224f0875595753556722d60c216a4f4060ab905af5bc0cf1036711224899f1', '[\"*\"]', NULL, NULL, '2025-02-03 04:41:28', '2025-02-03 04:41:28'),
(6, 'App\\Models\\User', 8, 'psthirimanna@gmail.com', '049f0d37e4583a669a5f372a8087439d5ca7376eb476008b14fec33e6b896e29', '[\"*\"]', NULL, NULL, '2025-02-03 04:42:29', '2025-02-03 04:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 'est quos eos', 'Sed repellat sed vel est et. Accusamus dignissimos rerum corrupti incidunt ducimus.', 649.14, 91, 2, 'https://via.placeholder.com/150', '2025-02-02 15:11:54', '2025-02-02 15:11:54'),
(7, 'molestias veniam cumque', 'Numquam quia et ut quo dolorem dicta esse. Numquam dolor ipsum repellat iure repellat. Soluta earum libero numquam ut ipsa consequatur ullam. Ut commodi dolor occaecati.', 678.13, 78, 2, 'https://via.placeholder.com/150', '2025-02-02 15:11:54', '2025-02-02 15:11:54'),
(10, 'eum maiores quia', 'Blanditiis excepturi fuga tempore vitae corporis dolore dolorem possimus. Laboriosam nesciunt nihil vel non est. Quaerat fugiat sit consequatur illo in itaque perferendis. Maxime repellendus enim ipsa dignissimos occaecati mollitia exercitationem.', 659.26, 68, 1, 'https://via.placeholder.com/150', '2025-02-02 15:11:54', '2025-02-02 15:11:54'),
(16, 'tenetur ipsa ullam', 'Eos rerum inventore autem ea dolorum. Sapiente ut soluta cum. Consequuntur ut ex ut dolorem asperiores reprehenderit. Minima incidunt qui repudiandae qui. Eos fugiat beatae quisquam at voluptatem tempore.', 503.38, 40, 1, 'https://via.placeholder.com/150', '2025-02-02 15:11:54', '2025-02-02 15:11:54'),
(19, 'sequi aut porro', 'Dolor itaque non aut eius ut. Velit eaque impedit delectus in. Aut rerum nihil dicta non officiis corporis impedit. Eius impedit et ut sint non voluptate sit.', 52.54, 47, 4, 'https://via.placeholder.com/150', '2025-02-02 15:11:54', '2025-02-02 15:11:54'),
(20, 'numquam impedit aliquam', 'Expedita ut ut quia aut eaque. Commodi nulla aut mollitia accusantium harum possimus omnis molestiae. Molestiae quae aut esse sit. Ut quia hic eos soluta aut ipsam tenetur.', 629.67, 28, 5, 'https://via.placeholder.com/150', '2025-02-02 15:11:54', '2025-02-02 15:11:54'),
(22, 'ut aut qui', 'Et esse rerum tempore modi adipisci dolorum tenetur. Maiores in quidem doloremque ut. Aut vel necessitatibus nihil iusto non quia commodi dolorem.', 45.59, 13, 4, 'https://via.placeholder.com/150', '2025-02-02 15:11:54', '2025-02-02 15:11:54'),
(23, 'Laptop3', 'laptop3', 10000.00, 5, 1, 'images/LMumrLh4uQzGrAzYaorEOlcZIoFq1j7QmYdtCLEg.png', '2025-02-03 01:56:15', '2025-02-03 01:56:15'),
(24, 'Laptop3', 'laptop3', 10000.00, 5, 1, 'images/B7gBPrQzuMBrgVxDPPpLIzAAAQVyzF3Y3Fdwe7uf.png', '2025-02-03 01:57:51', '2025-02-03 01:57:51');

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
('u53NmYDWnEIqJMzPjyymJjkr0Mb9dInJeO5cFXoW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjNQOUxjSDRBalRNR0xqMGg2YU96eWRhdGwySDJBMWYwSUlvMU5YTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1738581099);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Test User', 'test@example.com', '2025-02-01 18:44:36', '$2y$12$.ynQHw9wn08d2l2mkqKf8.waFpVJBakdgcDk8uHdWF9Ncqf2MaXz6', '9hqdpKqIp2', '2025-02-01 18:44:36', '2025-02-01 18:44:36', 'user'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$dxHOy7WKG46WVYyvooXw1.EWy2WS1jwHyq8ik7K4xmOOt37oynN8.', NULL, '2025-02-01 18:45:27', '2025-02-01 18:45:27', 'admin'),
(3, 'user1', 'user1@gmail.com', NULL, '$2y$12$ybZYy0fgmo4V.6cJttH9buIglJCCHZivnFoKZ0IpiAxE.DL.Nv09G', NULL, '2025-02-01 18:52:00', '2025-02-01 18:52:00', 'user'),
(4, 'Alex Chamara', 'alex@gmail.com', NULL, '$2y$12$Up.svRN2e1aycARZFN3lQeSdCv5Cu/e4phEEapq2XqNzbliY1dNMW', NULL, '2025-02-03 04:08:15', '2025-02-03 04:08:15', 'user'),
(5, 'Alex Chamara', 'alex5@gmail.com', NULL, '$2y$12$zdRumsX6t.sqijXJu4SQaetKAa7P6B0jEkM/K2.RcDApIWB6FyliS', NULL, '2025-02-03 04:22:17', '2025-02-03 04:22:17', 'user'),
(6, 'Alex Chamara', 'alex2@gmail.com', NULL, '$2y$12$WOQScH4q4Lnu60Z22ZDSPuZRq/Z8HczhQbh180Hy83WWHG.mbKD3W', NULL, '2025-02-03 04:26:02', '2025-02-03 04:26:02', 'user'),
(7, 'Alex Chamara', 'alex99@gmail.com', NULL, '$2y$12$KBa8vKeSG/yCxqsya5wTw.fqHJJ/5R32OvBBdEodQ0nPKn3LrV.8K', NULL, '2025-02-03 04:34:35', '2025-02-03 04:34:35', 'user'),
(8, 'Poojana Thirimanna111', 'psthirimanna@gmail.com', NULL, '$2y$12$rhjnYd795RgqNF9hqPxFBu8aw/GuozpGfKglqV1/1E3S1OxxxTiti', NULL, '2025-02-03 04:42:29', '2025-02-03 04:42:29', 'user'),
(9, 'Poojana Thirimanna1111', 'sethmialwis19@gmail.com', NULL, '$2y$12$Fxpqv5R5.47WZLRDskjPGOCS1JdCIQXkJIwyYPSLLw1DQDMgnpCDy', NULL, '2025-02-03 04:44:16', '2025-02-03 04:44:16', 'user'),
(10, 'alwis', 'alwis@gmail.com', NULL, '$2y$12$8z5whAE/HNpZdbIc97WU8.cPTZ/7IKHgsUEAj4bBORRlxuP7fG0HC', NULL, '2025-02-03 04:51:34', '2025-02-03 04:51:34', 'user');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
