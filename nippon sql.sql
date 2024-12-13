-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 08:33 AM
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
-- Database: `nippon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2024-05-18 06:29:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2CLCGULt25', NULL, NULL, '2024-05-18 06:29:16', '2024-05-18 06:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_quantity` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `first_name`, `last_name`, `email`, `date_of_birth`, `home_address`, `product_title`, `product_quantity`, `product_price`, `product_image`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Lukmaan', 'Kamiz', 'kamiz@gmail.com', '2001-04-20', NULL, 'United Kingdom', '2', '700000', '1716035874.jpg', '1', '1', '2024-06-06 23:11:50', '2024-06-06 23:11:50'),
(3, 'Lukmaan', 'Kamiz', 'kamiz@gmail.com', '2001-04-20', NULL, 'Canada', '2', '640000', '1716035923.jpg', '2', '1', '2024-06-06 23:11:57', '2024-06-06 23:11:57');

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 2),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(4, '2024_01_29_155121_create_sessions_table', 2),
(5, '2024_01_29_170139_create_admins_table', 2),
(6, '2024_05_13_111439_create_products_table', 2),
(7, '2024_05_13_124651_create_visacategories_table', 2),
(8, '2024_05_14_114010_create_carts_table', 2),
(9, '2024_05_14_121002_create_users_table', 2),
(10, '2024_05_18_141308_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_quantity` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `date_of_birth`, `home_address`, `product_title`, `product_quantity`, `product_price`, `product_image`, `product_id`, `user_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'Lukmaan', 'Kamiz', 'kamiz@gmail.com', '2001-04-20', NULL, 'United Kingdom', '3', '1050000', NULL, '1', '1', 'Processing', '2024-06-05 12:32:13', '2024-06-05 12:32:13');

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
  `Title` varchar(255) DEFAULT NULL,
  `Description` varchar(5000) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Quantity` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Title`, `Description`, `Image`, `Category`, `Quantity`, `Price`, `created_at`, `updated_at`) VALUES
(1, 'United Kingdom', 'University education in the UK is renowned for its quality, featuring prestigious institutions like Oxford and Cambridge. The system offers diverse programs, emphasizing research-based learning, critical thinking, and innovation. Students benefit from a global recognition of qualifications and a culturally rich environment, with numerous academic and extracurricular opportunities available.', '1716035874.jpg', 'Student Visa', '1', '350000', '2024-05-18 07:07:54', '2024-05-18 07:07:54'),
(2, 'Canada', 'Canada\'s universities offer top-notch education in a diverse and welcoming environment. They excel globally, emphasizing research and critical thinking. With a multicultural atmosphere, these institutions attract students worldwide, providing excellent facilities and experienced faculty. Known for practical skill development, Canada\'s universities are a top choice for quality education.', '1716035923.jpg', 'Student Visa', '1', '320000', '2024-05-18 07:08:43', '2024-05-18 07:08:43'),
(3, 'Australia', 'Australia\'s university education is renowned for its high quality and global recognition. With world-class institutions, cutting-edge research, and diverse courses, Australia attracts students from across the globe. The education system focuses on innovation, critical thinking, and practical skills. Additionally, the vibrant cultural landscape and welcoming atmosphere make Australia a popular destination for international students seeking a top-tier education.', '1716035965.jpg', 'Student Visa', '1', '330000', '2024-05-18 07:09:25', '2024-05-18 07:09:25'),
(4, 'United States', 'The United States of America offer a diverse and excellent university education, with a wide range of institutions. Known for its emphasis on research and practical skills, the U.S. higher education system provides a vibrant campus life. Students worldwide are attracted to the culturally diverse environment, making it a popular destination for learning.', '1716036008.jpg', 'Student Visa', '1', '375000', '2024-05-18 07:10:08', '2024-05-18 07:10:08'),
(5, 'Japan', 'Work in Japan is marked by a strong commitment to teamwork and dedication. Employees typically have long hours, emphasizing punctuality and attention to detail. The \"salaryman\" culture values loyalty, often leading to lifetime employment in a single company. The workplace promotes harmony and community through group activities, blending tradition with a modern approach', '1716036087.png', 'Business Visa', '1', '175000', '2024-05-18 07:11:27', '2024-05-18 07:11:27'),
(6, 'South Korea', 'In South Korea, work revolves around a dedicated and hierarchical corporate culture. Long working hours showcase the commitment to hard work, while respect for authority and teamwork are essential. The workplace emphasizes community, and social interactions are crucial for building relationships. The professional landscape combines traditional values with a focus on technology, creating a dynamic and competitive atmosphere.', '1716036130.jpg', 'Business Visa', '1', '140000', '2024-05-18 07:12:10', '2024-05-18 07:12:10'),
(8, 'United Kingdom', 'Tourism in the UK is a captivating mix of history, diverse cultures, and stunning landscapes. From London\'s iconic landmarks to Scotland and Wales\' picturesque countryside, the UK offers various experiences. Explore centuries-old castles, and enjoy the charm of villages. With a blend of tradition and modernity, the UK is a top destination for a journey through time and vibrant contemporary life.', '1716036241.jpg', 'Tourist Visa', '1', '135000', '2024-05-18 07:14:01', '2024-05-18 07:14:01'),
(9, 'Japan', 'Japan, a unique fusion of tradition and modernity, offers a captivating travel experience. Explore historic temples, embrace the allure of cherry blossoms, and dive into the excitement of dynamic cities like Tokyo. From ancient traditions to cutting-edge technology, Japan\'s diverse landscapes and warm hospitality create a journey that seamlessly intertwines the old and the new, promising unforgettable moments of exploration and discovery.', '1716036297.jpg', 'Tourist Visa', '1', '125000', '2024-05-18 07:14:57', '2024-05-18 07:14:57'),
(10, 'Italy', 'Italy, invites travelers with its rich history, stunning scenery, and delicious food. From Rome\'s Colosseum to Venice\'s canals, each spot tells a tale of art, history, and romance. Enjoy Michelangelo\'s masterpieces, relish authentic pasta and gelato, and picturesque villages. Italy\'s allure spans from Pompeii\'s ruins to the sunny Amalfi Coast, offering an enriching experience for art lovers, history enthusiasts, and foodies.', '1716036349.jpg', 'Tourist Visa', '1', '140000', '2024-05-18 07:15:49', '2024-05-18 07:15:49'),
(11, 'Spain', 'Spain beckons with vibrant culture, historic sites, and diverse landscapes. From the lively energy of flamenco to iconic landmarks like Sagrada Familia, every corner tells a story. Enjoy sunny days on Costa del Sol, indulge in flavorful tapas, and join festive events such as La Tomatina. Spain seamlessly combines modernity with tradition, creating a perfect setting for art, history, and lively atmospheres.', '1716036404.jpg', 'Tourist Visa', '1', '145000', '2024-05-18 07:16:44', '2024-05-18 07:16:44'),
(12, 'Turkey', 'Turkey, a captivating blend of East and West, invites travelers to explore its rich history, culture, and natural beauty. From the ancient marvels of Istanbul to the surreal landscapes of Cappadocia, and the turquoise waters of its coasts, Turkey offers a diverse and welcoming experience. Enjoy Turkish hospitality, delicious cuisine, and vibrant bazaars in this transcontinental gem.', '1716036442.jpg', 'Tourist Visa', '1', '130000', '2024-05-18 07:17:22', '2024-05-18 07:17:22'),
(13, 'Greece', 'Greece welcomes visitors with its historic wonders, scenic landscapes, and vibrant culture. From exploring ancient sites in Athens to relaxing on picturesque beaches, the country offers a diverse and charming experience. Enjoy Mediterranean cuisine, discover archaeological gems like the Acropolis, and immerse yourself in the lively traditions. Greece is a captivating destination, promising a delightful mix of history, beauty, and warm hospitality', '1716036477.jpg', 'Tourist Visa', '1', '145000', '2024-05-18 07:17:57', '2024-05-18 07:17:57');

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
('KQ9t2hlFv7Vrov7aabkYFstVc1mY6GN22X3Iv2vt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQk1XSks0RFpvdjlIZDJRandDejgwRFY2VlhGcUI5NXpHRWlORUJ0dyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1717741742);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `email_verified_at`, `date_of_birth`, `home_address`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Lukmaan', 'Kamiz', 'kamiz@gmail.com', 752072772, NULL, '2001-04-20', NULL, '$2y$12$A9X3FBQoR0wbKgk5MtBLAeI88/.5PUn5ljobzY1KIGCrKn5jZL3jW', NULL, NULL, NULL, '2024-05-18 06:38:55', '2024-05-18 06:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `visacategories`
--

CREATE TABLE `visacategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Visa_Category_Name` varchar(255) NOT NULL,
  `Validity_Period_in_Days` int(11) DEFAULT NULL,
  `Max_Length_of_Stay_in_Days` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visacategories`
--

INSERT INTO `visacategories` (`id`, `Visa_Category_Name`, `Validity_Period_in_Days`, `Max_Length_of_Stay_in_Days`, `created_at`, `updated_at`) VALUES
(1, 'Student Visa', 365, 365, '2024-05-18 07:05:34', '2024-05-18 07:05:34'),
(2, 'Business Visa', 90, 90, '2024-05-18 07:05:49', '2024-05-18 07:05:49'),
(3, 'Tourist Visa', 60, 60, '2024-05-18 07:06:05', '2024-05-18 07:06:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `visacategories`
--
ALTER TABLE `visacategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visacategories`
--
ALTER TABLE `visacategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
