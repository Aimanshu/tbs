-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2018 at 09:52 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbspoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `image_title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Your Service Expert In Noida', 'Get instant access to reliable and affordable services', 'image/4rEKW7LHanAy3b9YBz2m7XYi6rsTH5dhKCAo3MPt.png', 1, '2018-04-24 13:14:58', '2018-05-12 08:49:04'),
(2, 'Your Service Expert In India', 'Get instant access to reliable and affordable services', 'image/ohcJEWkXUXMRD5GaNOKb3NcwyJS1GMUqd17YNWPV.png', 1, '2018-04-24 13:14:58', '2018-04-24 15:00:09'),
(3, 'Your Service Expert In Delhi', 'About Service', 'image/bUYdwu2R1nBGYPZbZAT10F3PIytVXScT0ZbFdgl7.jpeg', 1, '2018-04-24 14:10:43', '2018-04-24 15:02:39'),
(4, 'Your Service Expert In India', 'Get instant access to reliable and affordable services', 'image/GwFcOj7pKizd5Z4LXjU3C4OFJjhM00HEzTQ4q5Km.jpeg', 1, '2018-04-24 14:28:18', '2018-04-24 14:28:18'),
(5, 'Office Furniture', 'Add of office furniture by ABC', 'image/osqifC3j0OLBUpvd0LyvNNmGHfHTFDLHGxGvE1Kn.jpeg', 0, '2018-05-12 08:45:03', '2018-05-14 14:15:30'),
(6, 'Furniture', 'Home furniture by XYZ', 'image/pbGmdcrOdtcn9bnqPPl779hhg5wsdLvSn5T14KLo.jpeg', 1, '2018-05-12 08:45:36', '2018-05-12 08:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `main_category_id`, `name`, `description`, `slug`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'AC Service and Repair', 'AC Service and Repair', 'ac-service-and-repair', 1, 'image/cgY95lwMAu7jafqNQRJlVOuuHqzr4d46cxha15cD.jpeg', '2018-05-11 13:11:26', '2018-05-11 13:11:26'),
(2, 1, 'Salon at Home', 'Salon at Home', 'salon-at-home', 1, 'image/tTCGWNaHy59oCKU60Ukv3VK1CbAHiOIXMRTDptai.png', '2018-05-11 13:13:43', '2018-05-11 13:13:43'),
(3, 12, 'Information Technology', 'Information Technology', 'information-technology', 1, 'image/CXhk6mPIcFaSmiGAgTPGcrxCfmkWneUH8TADVdS2.png', '2018-05-11 13:16:40', '2018-05-11 13:16:40'),
(4, 13, 'Astrologer', 'Astrologer', 'astrologer', 1, 'image/ye2zb9EWP3xYXcszCGnWbokC6ndL0ceNWa246N8P.png', '2018-05-11 13:37:58', '2018-05-11 13:37:58'),
(5, 14, 'Mobiles', 'Any type of mobiles', 'mobiles', 1, 'image/Wda5H5CJ8T1nKnEIJeHwWTTVXUixBnM6imDLh3UM.png', '2018-05-12 07:52:07', '2018-05-12 07:52:07'),
(6, 14, 'Laptops', 'All laptops', 'laptops', 1, 'image/CVUeApGSzKpV9CJlGKDNme8Jiyo9QPk4rML1koVW.png', '2018-05-12 07:53:10', '2018-05-12 07:53:10'),
(7, 14, 'TV and Screen', 'TV', 'tv-and-screen', 1, 'image/rvCUceBeAAqg99qyIakVHURBsiTKg70pTXDO2ZCx.jpeg', '2018-05-12 08:15:00', '2018-05-12 08:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_admins`
--

CREATE TABLE `category_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_category_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_admins`
--

INSERT INTO `category_admins` (`id`, `main_category_id`, `category_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 6, '2018-05-11 13:19:11', '2018-05-11 13:19:11'),
(2, 13, NULL, 9, '2018-05-11 13:37:00', '2018-05-11 13:37:00'),
(3, 14, NULL, 12, '2018-05-12 07:54:26', '2018-05-12 07:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `jsondata` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `assigned` tinyint(1) NOT NULL DEFAULT '0',
  `isQuestioned` tinyint(1) NOT NULL DEFAULT '1',
  `location` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `user_id`, `category_id`, `jsondata`, `status`, `assigned`, `isQuestioned`, `location`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '[{\"question\":{\"id\":47,\"category_id\":\"1\",\"title\":\"Gender\",\"description\":\"know about\",\"answer_type\":1,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":\\\"Male\\\"},{\\\"value\\\":2,\\\"lable\\\":\\\"Female\\\"}]\",\"status\":1,\"created_at\":\"2018-05-09 10:15:26\",\"updated_at\":\"2018-05-09 10:20:58\"},\"answer\":\"1\"}]', 0, 1, 1, NULL, '2018-05-11 13:22:46', '2018-05-11 14:01:13'),
(2, 11, 4, '[{\"question\":{\"id\":6,\"category_id\":\"4\",\"title\":\"What Is Your Name\",\"description\":\"Name Asking\",\"answer_type\":3,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":null}]\",\"status\":1,\"created_at\":\"2018-03-30 18:43:08\",\"updated_at\":\"2018-03-30 18:43:08\"},\"answer\":\"hiM\"}]', 0, 0, 1, NULL, '2018-05-11 13:42:52', '2018-05-11 13:42:52'),
(3, 1, 3, '[{\"question\":{\"id\":7,\"category_id\":\"3\",\"title\":\"Let us know your occasion\",\"description\":\"de\",\"answer_type\":1,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":\\\"My wedding \\\\\\/ wedding functions\\\"},{\\\"value\\\":2,\\\"lable\\\":\\\"Attending a wedding\\\"},{\\\"value\\\":3,\\\"lable\\\":\\\"Other Party \\\\\\/ Event\\\"}]\",\"status\":1,\"created_at\":\"2018-03-30 18:56:17\",\"updated_at\":\"2018-03-30 18:56:17\"},\"answer\":\"1\"},{\"question\":{\"id\":8,\"category_id\":\"3\",\"title\":\"You need the makeup for your:\",\"description\":\"22\",\"answer_type\":1,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":\\\"Wedding Day Only wedding day\\\"}]\",\"status\":1,\"created_at\":\"2018-03-30 18:56:56\",\"updated_at\":\"2018-03-30 18:56:56\"},\"answer\":\"1\"},{\"question\":{\"id\":9,\"category_id\":\"3\",\"title\":\"You need the makeup for your:\",\"description\":\"22\",\"answer_type\":1,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":\\\"Wedding Day  Only wedding day\\\"}]\",\"status\":1,\"created_at\":\"2018-03-30 18:57:19\",\"updated_at\":\"2018-03-30 18:57:19\"},\"answer\":\"1\"}]', 0, 0, 1, NULL, '2018-05-21 09:26:39', '2018-05-21 09:26:39'),
(4, 1, 3, '[{\"question\":{\"id\":7,\"category_id\":\"3\",\"title\":\"Let us know your occasion\",\"description\":\"de\",\"answer_type\":1,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":\\\"My wedding \\\\\\/ wedding functions\\\"},{\\\"value\\\":2,\\\"lable\\\":\\\"Attending a wedding\\\"},{\\\"value\\\":3,\\\"lable\\\":\\\"Other Party \\\\\\/ Event\\\"}]\",\"status\":1,\"created_at\":\"2018-03-30 18:56:17\",\"updated_at\":\"2018-03-30 18:56:17\"},\"answer\":\"2\"},{\"question\":{\"id\":8,\"category_id\":\"3\",\"title\":\"You need the makeup for your:\",\"description\":\"22\",\"answer_type\":1,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":\\\"Wedding Day Only wedding day\\\"}]\",\"status\":1,\"created_at\":\"2018-03-30 18:56:56\",\"updated_at\":\"2018-03-30 18:56:56\"},\"answer\":\"1\"},{\"question\":{\"id\":9,\"category_id\":\"3\",\"title\":\"You need the makeup for your:\",\"description\":\"22\",\"answer_type\":1,\"options\":\"[{\\\"value\\\":1,\\\"lable\\\":\\\"Wedding Day  Only wedding day\\\"}]\",\"status\":1,\"created_at\":\"2018-03-30 18:57:19\",\"updated_at\":\"2018-03-30 18:57:19\"},\"answer\":\"1\"}]', 0, 0, 1, NULL, '2018-05-21 09:26:56', '2018-05-21 09:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_user`
--

CREATE TABLE `enquiry_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry_user`
--

INSERT INTO `enquiry_user` (`id`, `enquiry_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, NULL, NULL),
(2, 1, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `name`, `slug`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Recommended Services', 'recommended-services', 'image/wEvglmfvaEdLmeb9UEZnC4F6wsJtty53RTvj2BFS.png', 'Recommended Services Description', 1, '2018-03-14 05:58:45', '2018-04-16 12:39:17'),
(2, 'Health & Wellness', 'health-wellness', 'image/aJqPemCY905xFAqKwVT4Sj5JWxMJpIdkDkbavrer.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-22 18:22:11'),
(3, 'Home Cleaning', 'home-cleaning', 'image/MV7V7KS5wHeVfX8J8TY00Qd5XbGJblHoUnpDpQDD.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-22 18:22:43'),
(4, 'Repairs', 'repairs', 'image/9cYTLcySgQhMs6UCtMu38zxNu9qWaGhFXtNhNq76.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-22 18:22:54'),
(5, 'Shifting Homes', 'shifting-homes', 'image/wEvglmfvaEdLmeb9UEZnC4F6wsJtty53RTvj2BFS.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-21 18:02:15'),
(6, 'Home Design & Construction', 'home-design-construction', 'image/aJqPemCY905xFAqKwVT4Sj5JWxMJpIdkDkbavrer.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-21 18:02:32'),
(7, 'Wedding Services', 'wedding-services', 'image/aJqPemCY905xFAqKwVT4Sj5JWxMJpIdkDkbavrer.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-21 18:02:46'),
(8, 'Party and Event Services', 'party-and-event-services', 'image/wEvglmfvaEdLmeb9UEZnC4F6wsJtty53RTvj2BFS.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-21 18:03:06'),
(9, 'Help For Your Business', 'help-for-your-business', 'image/wEvglmfvaEdLmeb9UEZnC4F6wsJtty53RTvj2BFS.png', NULL, 1, '2018-03-14 05:58:45', '2018-03-21 18:03:17'),
(10, 'AC service (50% OFF)', 'ac-service-50-off', 'image/BF4YZAEjhOJLuGIBQgfv3RittSMTvgOc2L0PRYiq.png', 'AC service (50% OFF)', 0, '2018-04-04 10:45:39', '2018-04-04 11:05:27'),
(11, 'LOAN', 'loan', 'image/7fhslZu68OOZ2RVaR93meKi5ihK9FCelFfXr7zSr.jpeg', 'LOAN, CREDIT CARD', 1, '2018-04-05 09:52:15', '2018-04-06 11:48:53'),
(12, 'Training and Workshop', 'training-and-workshop', 'image/L38KuekyB8maUx9JXQBT2sQok9DHlKsMSfTton4r.png', 'Individual and corporate training', 1, '2018-05-08 09:33:09', '2018-05-08 09:33:09'),
(13, 'Personal &  More', 'personal-more', 'image/5cslxvNmYXqyPEWVMtihNJA0YeKi7p5gK0rAEI2Q.jpeg', 'Personal &  More', 1, '2018-05-11 09:17:31', '2018-05-11 09:17:31'),
(14, 'Electronics', 'electronics', 'image/uxCfvrH17DHMCH57CYJ9TSBotUcicIShS3GA7moG.jpeg', 'All electrics Items', 1, '2018-05-12 07:49:43', '2018-05-12 07:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `main_category_category`
--

CREATE TABLE `main_category_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_category_category`
--

INSERT INTO `main_category_category` (`id`, `category_id`, `main_category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-05-11 13:11:26', '2018-05-11 13:11:26'),
(2, 2, 1, '2018-05-11 13:13:43', '2018-05-11 13:13:43'),
(3, 3, 12, '2018-05-11 13:16:40', '2018-05-11 13:16:40'),
(4, 4, 13, '2018-05-11 13:37:58', '2018-05-11 13:37:58'),
(5, 5, 14, '2018-05-12 07:52:07', '2018-05-12 07:52:07'),
(6, 6, 14, '2018-05-12 07:53:10', '2018-05-12 07:53:10'),
(7, 7, 14, '2018-05-12 08:15:00', '2018-05-12 08:15:00');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_03_08_052014_create_category_admins_table', 2),
(10, '2014_10_12_000000_create_users_table', 2),
(11, '2018_03_05_124554_create_profiles_table', 3),
(12, '2018_03_06_123429_create_categories_table', 3),
(13, '2018_03_06_121716_create_user_profiles_table', 4),
(16, '2018_03_12_072430_create_requests_table', 5),
(22, '2018_03_14_053253_create_main_categories_table', 8),
(23, '2018_03_14_055952_create_main_category_category_table', 9),
(25, '2018_03_14_094753_create_questions_table', 10),
(26, '2018_03_12_093854_create_enquiries_table', 11),
(27, '2018_03_14_053949_create_enquiry_user_table', 11),
(29, '2018_04_24_082814_create_advertisements_table', 12),
(30, '2018_04_28_073238_create_proposals_table', 13),
(31, '2018_05_05_051925_create_payments_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('himanshu.nikhil.gupta@gmail.com', '$2y$10$KtfQuyJcpG7rxvcMw/t7CORLj3SdTKRazL.euPhJH5IHgWbHrFlLq', '2018-04-09 05:29:18'),
('himanshu@aresedge.com', 'dQ01zRJwUrc4ZyS49rF4phoxqTVG4vTsQwowLS4xZtYMP6eCGNdwvyOzAwUC', NULL),
('super_admin@aresedge.com', '32U39DfHFMru7dVO0AnpNy4dsughdJ4htH2ylYIyAYWubnqxLTZgSTGvqutT', '2018-04-10 06:44:27'),
('himanshu@aresedge.com', 'CD1OrJNWeNI4AVykQc0dd2LKmpnOCZktPSxov5GI04uloY6NHmJqOFtX8NwP', '2018-04-10 07:06:21'),
('sachin@aresedge.com', 'KJzFnaMpWtm0Wn76LKxVex30S8k2Srpxerwe0uRAFt1Nrq4xuiZR2PHHdQPK', '2018-04-10 07:07:53'),
('himanshu@aresedge.com', 'EQQ76WjpJ2Me1fOu1iNW7kDQgWZBwFp87irC6PI9t1JHAIwiW32YMELgkQZF', '2018-04-10 10:37:16'),
('himanshu@aresedge.com', 'OYiBrlTr1mc9JaR31ydqXFktOG5uuY7OqrN4HvUnVUXEQhcBd9zomiysnxun', '2018-04-10 10:53:55'),
('super_admin@aresedge.com', 'RP5IfJ4dRCeVDCSaCl9rqw4fSmYS6ptikI6d88LAwkgItzeuEdK2bfNp8H0H', '2018-04-10 10:56:22'),
('himanshu@aresedge.com', '9BrMYpPAmbOLgUkodCZfkGHEQwIJfcZ1xH4RYpP1DuDmHqnOnZ0S5bQpP8JJ', '2018-04-10 12:29:28'),
('himanshu@aresedge.com', 'Erkq498Yz4IvGyagi9sICCUFlyIhJLZM4hELNLxyuKvpqAqbnB4qRiBBHfW0', '2018-04-10 13:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `traders_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `traders_id`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PAY-29J87586PC2637130LLYCHPY', 11, 6000, 0, '2018-05-07 10:00:31', '2018-05-07 10:00:31'),
(3, 'PAY-3KU04226J6337970LLLYCKEQ', 11, 6000, 1, '2018-05-07 10:06:10', '2018-05-07 10:06:33'),
(6, 'PAY-7HS602706E7391920LLYFVWY', 44, 6000, 1, '2018-05-07 13:55:39', '2018-05-07 13:56:26'),
(7, 'PAY-7AJ72391F7565223PLLYHPIA', 46, 6000, 1, '2018-05-07 15:58:24', '2018-05-07 15:59:15'),
(10, 'PAY-9VT60487HF375174PLLZQFGQ', 63, 0, 0, '2018-05-09 14:15:54', '2018-05-09 14:15:54'),
(11, 'PAY-2YV86386AU2430115LLZQGHA', 10, 0, 1, '2018-05-09 14:18:04', '2018-05-09 14:18:58'),
(13, 'PAY-0DA792412E930493KLLZRIJA', 10, 0, 0, '2018-05-09 15:30:44', '2018-05-09 15:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `isOwner` tinyint(1) NOT NULL DEFAULT '0',
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_cont_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `types_of_business` int(11) NOT NULL,
  `prod_or_serv_offe` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `isOwner`, `business_name`, `business_email`, `business_cont_no`, `website`, `location`, `occupation`, `full_address`, `types_of_business`, `prod_or_serv_offe`, `created_at`, `updated_at`) VALUES
(1, 7, 0, 'baba', 'tradersbus@gmail.com', '1122334455', 'aresege.com', 'Delhi, India', 'ddd', 'New Ashiok NAger', 1, '[\"1\",\"2\"]', '2018-05-11 13:21:10', '2018-05-11 13:21:10'),
(2, 8, 0, 'baba', 'traders2@gmail.com', '8979515205', 'aresege.com', 'GA, USA', 'aaaa', 'New Ashiok NAger', 1, '[\"1\"]', '2018-05-11 13:28:10', '2018-05-11 13:28:10'),
(3, 10, 0, 'baba', 'hmmoonn@gmail.com', '1122334466', 'aresege.com', 'FL, USA', 'Developer', 'New Ashiok NAger', 3, '[\"4\"]', '2018-05-11 13:40:13', '2018-05-11 13:40:13'),
(4, 15, 0, 'ABC Electronics', 'amit@gmail.com', '8826681621', 'www.amit.com', 'Delhi, India', 'Executive', 'ABC', 1, '[\"5\"]', '2018-05-12 08:00:17', '2018-05-12 08:00:17'),
(5, 16, 0, 'baba', 'hima@gmail.com', '8979988999', 'a', 'Kuala Lumpur, Federal Territory of Kuala Lumpur, Malaysia', 'ede', 'New Ashiok NAger', 1, '[\"4\"]', '2018-05-12 08:17:28', '2018-05-12 08:17:28'),
(6, 17, 0, 'RAVI Electronics', 'ravi@gmail.com', '4455667788', 'NA', 'Delhi, India', 'Delhi', 'Delhi', 3, '[\"6\"]', '2018-05-12 08:18:19', '2018-05-12 08:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int(10) UNSIGNED NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `traders_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issadmin_approved` int(11) NOT NULL DEFAULT '0',
  `issuser_accept` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `enquiry_id`, `traders_id`, `description`, `files`, `file_type`, `issadmin_approved`, `issuser_accept`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '<p>I am tradersbus@gmail.com this traders and send proposal</p>', NULL, NULL, 1, 1, '2018-05-11 14:03:05', '2018-05-11 15:34:05'),
(2, 1, 8, '<p>traders2@gmail.com &nbsp;i ma sending proposal</p>', 'image/3fvHjIhEB2FpMAnpgrh5W7uAYTyTFncuqSTu8wYY.jpeg', '0', 1, 0, '2018-05-11 14:16:00', '2018-05-11 14:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_type` int(11) NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `title`, `description`, `answer_type`, `options`, `status`, `created_at`, `updated_at`) VALUES
(2, '2', 'You need Yoga Trainer for:', 'About Yoga', 2, '[{\"value\":1,\"lable\":\"Weight Loss\"},{\"value\":2,\"lable\":\"General Fitness\"},{\"value\":3,\"lable\":\"Others\"}]', 1, '2018-03-20 12:05:13', '2018-03-20 12:05:13'),
(3, '2', 'Age of the trainee:', 'traine', 1, '[{\"value\":1,\"lable\":\"Less than 25 years\"},{\"value\":2,\"lable\":\"25 - 30 years\"},{\"value\":3,\"lable\":\"31 - 40 years\"},{\"value\":4,\"lable\":\"41+ years\"}]', 1, '2018-03-20 12:12:24', '2018-03-20 12:12:24'),
(4, '2', 'Question Input', 'demo', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-20 12:16:54', '2018-03-20 12:16:54'),
(5, '5', 'Your gender:', 'test', 1, '[{\"value\":1,\"lable\":\"Male\"},{\"value\":2,\"lable\":\"female\"},{\"value\":3,\"lable\":\"other\"}]', 1, '2018-03-20 12:38:29', '2018-05-09 10:12:25'),
(6, '4', 'What Is Your Name', 'Name Asking', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-30 18:43:08', '2018-03-30 18:43:08'),
(7, '3', 'Let us know your occasion', 'de', 2, '[{\"value\":1,\"lable\":\"My wedding \\/ wedding functions\"},{\"value\":2,\"lable\":\"Attending a wedding\"},{\"value\":3,\"lable\":\"Other Party \\/ Event\"}]', 1, '2018-03-30 18:56:17', '2018-05-21 09:31:12'),
(8, '3', 'You need the makeup for your:', '22', 1, '[{\"value\":1,\"lable\":\"Wedding Day Only wedding day\"}]', 1, '2018-03-30 18:56:56', '2018-03-30 18:56:56'),
(9, '3', 'You need the makeup for your:', '22', 1, '[{\"value\":1,\"lable\":\"Wedding Day  Only wedding day\"}]', 1, '2018-03-30 18:57:19', '2018-03-30 18:57:19'),
(10, '6', 'What is the brand of your Computer?', 'check band', 1, '[{\"value\":1,\"lable\":\"Assembled Computer\"},{\"value\":2,\"lable\":\"HP\"},{\"value\":3,\"lable\":\"Dell\"},{\"value\":4,\"lable\":\"Lenovo\"},{\"value\":5,\"lable\":\"Acer\"},{\"value\":6,\"lable\":\"Asus\"},{\"value\":7,\"lable\":\"Sony\"},{\"value\":8,\"lable\":\"Toshiba\"},{\"value\":9,\"lable\":\"Other\"}]', 1, '2018-03-30 19:03:54', '2018-03-30 19:03:54'),
(11, '6', 'Which is/are the issue(s) with the device?', 'Check Problum', 2, '[{\"value\":1,\"lable\":\"I dont Know\"},{\"value\":2,\"lable\":\"Battery\"},{\"value\":3,\"lable\":\"Hard Disk\"},{\"value\":4,\"lable\":\"KeyBoard\"},{\"value\":5,\"lable\":\"Mic\\/Speaker not working\"},{\"value\":6,\"lable\":\"MotherBoard\"},{\"value\":7,\"lable\":\"Software\\/OS\"},{\"value\":8,\"lable\":\"Trackpad\"},{\"value\":9,\"lable\":\"Display\"},{\"value\":10,\"lable\":\"Other\"}]', 1, '2018-03-30 19:05:29', '2018-03-30 19:05:29'),
(12, '6', 'Where do you require the service?(Address)', 'Address', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-30 19:06:18', '2018-03-30 19:06:18'),
(14, '7', 'What CCTV services do you require:', 'check requrment', 1, '[{\"value\":1,\"lable\":\"Purchase and Installation\"},{\"value\":2,\"lable\":\"Only installation (Rs 400-600 per camera)\"},{\"value\":3,\"lable\":\"Repair of faulty cameras\"}]', 1, '2018-03-30 19:28:51', '2018-03-30 19:28:51'),
(15, '7', 'Number of Cameras to be Installed', 'no', 1, '[{\"value\":1,\"lable\":\"1 - 2 cameras\"},{\"value\":2,\"lable\":\"3 - 4 cameras\"},{\"value\":3,\"lable\":\"5 - 6 cameras\"},{\"value\":4,\"lable\":\"7 - 8 cameras\"},{\"value\":5,\"lable\":\"9 Cameras\"}]', 1, '2018-03-30 19:30:06', '2018-03-30 19:30:06'),
(16, '8', 'Select the size of your home:', 'reurment', 1, '[{\"value\":1,\"lable\":\"1 BHK\"},{\"value\":2,\"lable\":\"2 BHK\"},{\"value\":3,\"lable\":\"3 BHK\"},{\"value\":4,\"lable\":\"4 BHK\"},{\"value\":5,\"lable\":\"5 BHK\"}]', 1, '2018-03-30 19:31:34', '2018-03-30 19:31:34'),
(17, '8', 'Where do you require the service?(Address)', 'Address', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-30 19:32:04', '2018-03-30 19:32:04'),
(19, '10', 'Where do you require the service?(Address)', 'Name Asking', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-30 19:34:39', '2018-03-30 19:34:39'),
(20, '10', 'What Is Your Name', 'Name Asking', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-30 19:34:50', '2018-03-30 19:34:50'),
(21, '13', 'Who is getting married?', 'about', 1, '[{\"value\":1,\"lable\":\"I am\"},{\"value\":2,\"lable\":\"Someone I know\"}]', 1, '2018-03-30 19:37:08', '2018-03-30 19:37:08'),
(22, '14', 'Who is getting married?', 'about', 1, '[{\"value\":1,\"lable\":\"I am\"},{\"value\":2,\"lable\":\"Someone I know\"}]', 1, '2018-03-30 19:37:18', '2018-03-30 19:37:18'),
(23, '15', 'Who is getting married?', 'weddinh', 1, '[{\"value\":1,\"lable\":\"I am\"},{\"value\":2,\"lable\":\"Someone I know\"}]', 1, '2018-03-30 19:37:23', '2018-03-30 19:37:23'),
(24, '14', 'Select your choice of photographer:', 'photo', 1, '[{\"value\":1,\"lable\":\"Good Photographers (\\u20b9) Candid Photography at \\u20b9 8,000 - \\u20b9 10,000\\/day\"},{\"value\":2,\"lable\":\"Best Photographers (\\u20b9\\u20b9) Candid Photography at \\u20b9 15,000 - \\u20b9 17,000\\/day\"}]', 1, '2018-03-30 20:00:48', '2018-03-30 20:00:48'),
(25, '14', 'Location where you need the photographer:', 'Address', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-30 20:01:12', '2018-03-30 20:01:12'),
(29, '16', 'Your budget per person (excluding travel charges):', 'check', 1, '[{\"value\":1,\"lable\":\"Light Makeup Rs.1,800 - 2,50\"},{\"value\":2,\"lable\":\"Standard Makeup Rs.2,500 - 3,500\"},{\"value\":3,\"lable\":\"Detailed Makeup Rs.3,500 - 5,000\"},{\"value\":4,\"lable\":\"Expert Detailed Makeup Rs.5,000 - 8,000\"}]', 1, '2018-03-31 09:20:08', '2018-03-31 09:20:08'),
(30, '16', 'How many people need the makeup?', 'How many people need the makeup?', 1, '[{\"value\":1,\"lable\":\"1 person\"},{\"value\":2,\"lable\":\"2 person\"},{\"value\":3,\"lable\":\"3+ person\"}]', 1, '2018-03-31 09:20:39', '2018-03-31 09:20:39'),
(31, '16', 'How soon would you like to hire?', 'How soon would you like to hire?', 1, '[{\"value\":1,\"lable\":\"Not sure, just exploring prices\"},{\"value\":2,\"lable\":\"Within a month\"},{\"value\":3,\"lable\":\"Immediately\"}]', 1, '2018-03-31 09:21:29', '2018-03-31 09:21:29'),
(32, '12', 'Address', 'Address', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-31 09:25:11', '2018-03-31 09:25:11'),
(33, '11', 'Type of service you require?', 'Type of service you require?', 1, '[{\"value\":1,\"lable\":\"GST\\/Tax Filing\"},{\"value\":2,\"lable\":\"GST Registration\"},{\"value\":3,\"lable\":\"GST Migration with implementation and compliance\"}]', 1, '2018-03-31 09:26:14', '2018-03-31 09:26:14'),
(34, '11', 'Other services:', 'Other services:', 2, '[{\"value\":1,\"lable\":\"Complete CA Services (Bookkeeping & Accounting, Financial statements, Tax Filing & Auditing)\"},{\"value\":2,\"lable\":\"Company Registration\"},{\"value\":3,\"lable\":\"GST\\/Tax Return Filing\"},{\"value\":4,\"lable\":\"Account preparation\\/Book-keeping\"},{\"value\":5,\"lable\":\"Financial statement preparation\"},{\"value\":6,\"lable\":\"None\"}]', 1, '2018-03-31 09:27:11', '2018-03-31 09:27:11'),
(35, '5', 'Where do you require the service?(Address)', 'a', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-03-31 09:58:02', '2018-03-31 09:58:02'),
(36, '17', 'Please identify yourself.', 'know who are yo', 1, '[{\"value\":1,\"lable\":\"I am a Parent\\/Guardian\"},{\"value\":2,\"lable\":\"I am a Student\"},{\"value\":3,\"lable\":\"I am a Tutor\\/Teacher looking for students\"}]', 1, '2018-04-04 09:23:49', '2018-04-04 09:23:49'),
(37, '17', 'Which class is the student in?', 'know about student', 1, '[{\"value\":1,\"lable\":\"Class I\"},{\"value\":2,\"lable\":\"Class II\"},{\"value\":3,\"lable\":\"Class III\"},{\"value\":4,\"lable\":\"Class IV\"},{\"value\":5,\"lable\":\"Class V\"},{\"value\":6,\"lable\":\"Class VI\"},{\"value\":7,\"lable\":\"Class VII\"},{\"value\":8,\"lable\":\"Class VIII\"},{\"value\":9,\"lable\":\"Class IX\"}]', 1, '2018-04-04 09:26:54', '2018-04-04 09:26:54'),
(38, '17', 'Which board is the school affiliated to?', 'know about board', 1, '[{\"value\":1,\"lable\":\"CBSE\"},{\"value\":2,\"lable\":\"ICSE\"},{\"value\":3,\"lable\":\"IB \\/ IGCSE\"},{\"value\":4,\"lable\":\"State Board\"}]', 1, '2018-04-04 09:27:31', '2018-04-04 09:27:31'),
(39, '17', 'Name of the school(Optional) :', 'school name', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-04-04 09:27:47', '2018-04-04 09:27:47'),
(40, '17', 'Which subject does the student need help with?', 'help into subject', 1, '[{\"value\":1,\"lable\":\"All Subjects\"},{\"value\":2,\"lable\":\"Mathematics\"},{\"value\":3,\"lable\":\"Science\"},{\"value\":4,\"lable\":\"English\"},{\"value\":5,\"lable\":\"Social Studies\"},{\"value\":6,\"lable\":\"Hindi\"}]', 1, '2018-04-04 09:28:47', '2018-04-04 09:28:47'),
(41, '17', 'What time is the student available to take the classes?', 'time', 2, '[{\"value\":1,\"lable\":\"Morning (8 AM to 12 PM)\"},{\"value\":2,\"lable\":\"Early Afternoon (12 PM to 3 PM)\"},{\"value\":3,\"lable\":\"Late Afternoon (3 PM to 5 PM)\"},{\"value\":4,\"lable\":\"Early Evening (5 PM to 7 PM)\"},{\"value\":5,\"lable\":\"Late Evening (7 PM to 10 PM)\"}]', 1, '2018-04-04 09:29:54', '2018-04-04 09:29:54'),
(42, '17', 'What is your approximate per session budget?', 'know budget', 1, '[{\"value\":1,\"lable\":\"Basic       Rs.250 - 350\"},{\"value\":2,\"lable\":\"Standard      Rs.350 - 450\"},{\"value\":3,\"lable\":\"Premium    Rs.450 - 550\"}]', 1, '2018-04-04 09:30:53', '2018-04-04 09:30:53'),
(44, '9', 'I want to see :', 'I want to see :', 2, '[{\"value\":1,\"lable\":\"Sofa Cleaning Packages\"},{\"value\":2,\"lable\":\"Individual Services\"}]', 1, '2018-04-16 07:26:50', '2018-04-16 07:26:50'),
(45, '18', 'Occeputio', 'Know About Job', 1, '[{\"value\":1,\"lable\":\"Developer\"},{\"value\":2,\"lable\":\"Docoter\"},{\"value\":3,\"lable\":\"It Profficinal\"}]', 1, '2018-04-18 08:19:02', '2018-04-18 08:19:02'),
(46, '18', 'How Much Loan Amount Your Are Looking', 'aa', 3, '[{\"value\":1,\"lable\":null}]', 1, '2018-04-18 08:20:11', '2018-04-18 08:20:11'),
(47, '1', 'Gender', 'know about', 1, '[{\"value\":1,\"lable\":\"Male\"},{\"value\":2,\"lable\":\"Female\"}]', 1, '2018-05-09 10:15:26', '2018-05-09 10:20:58'),
(48, '25', 'Technology', 'about Technology', 2, '[{\"value\":1,\"lable\":\".net\"},{\"value\":2,\"lable\":\"Sql Server\"},{\"value\":3,\"lable\":\"Big Data\"},{\"value\":4,\"lable\":\"Data Science\"}]', 1, '2018-05-11 08:13:12', '2018-05-11 08:13:12'),
(49, '27', 'What is Your Age', 'know about age', 2, '[{\"value\":1,\"lable\":\"10-20\"},{\"value\":2,\"lable\":\"20-25\"},{\"value\":3,\"lable\":\"25-30\"},{\"value\":4,\"lable\":\"30-35\"}]', 1, '2018-05-11 12:24:48', '2018-05-11 12:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issadmin` int(100) NOT NULL DEFAULT '0',
  `register_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `business`, `status`, `password`, `role`, `remember_token`, `issadmin`, `register_type`, `created_at`, `updated_at`) VALUES
(1, 'Vipin', 'super_admin@aresedge.com', '8979515255', 0, 1, '$2y$10$IkEcG2YtZgIJblky5.jpPezu1Il.mLpXW0w6aAHGbXuyiCQpMAodK', 1, 'LaXEFrqGfj04ZHSmRJHbgvR57Hl5fE5rNOtfUgBRTTOQV10voN0FHUUyys2g', 0, NULL, NULL, NULL),
(5, 'Himanshu Gupta', 'user@gmail.com', '8979515250', NULL, 1, '$2y$10$rXeLXZRF8FrapvPONsek8OdqPBLDJzlrvLThvGpepcNDRCsPTe5Mu', 4, 'MPpYxzbZeRa5Lu2XKugWLNcWydJ9tDjiPe7oTuIh1ezlqIK1ThAsDJqvt6kQ', 2, NULL, '2018-05-11 11:39:12', '2018-05-11 11:54:28'),
(6, 'Admin Recomanded Servise', 'admin@aresedge.com', '8979515253', NULL, 1, '$2y$10$IZ6UFcvsjxJm.kEsTurShOE6EOkxBi6U.LO59.H5aXFBMyHfzZpW6', 2, '7l60y2qHsrzkeNdNbBLE7hO3U4MlYyXYj1wSPXMCgiXCsbxYJafEwRPwZLhx', 0, NULL, '2018-05-11 13:19:11', '2018-05-11 13:19:11'),
(7, 'Traders Re', 'tradersbus@gmail.com', '1122334455', NULL, 1, '$2y$10$rXeLXZRF8FrapvPONsek8OdqPBLDJzlrvLThvGpepcNDRCsPTe5Mu', 3, 'HMq2aKdxmbEtoZUsr0VVWJM6u9wFQ5cIwZr8kQ4x3DY7t6h3oGlxRcZTbm8O', 6, NULL, '2018-05-11 13:21:10', '2018-05-11 13:21:10'),
(8, 'Traders Re2', 'traders2@gmail.com', '8979515205', NULL, 1, '$2y$10$IZ6UFcvsjxJm.kEsTurShOE6EOkxBi6U.LO59.H5aXFBMyHfzZpW6', 3, 'jgZnknbjaTfUDxMK64rk668XuHwoONtjWUBROMYrUDPOpLy91QD2s23AI3Qk', 6, NULL, '2018-05-11 13:28:10', '2018-05-11 13:28:10'),
(9, 'Admin Personal & More', 'adminper@gmail.com', '8979515151', NULL, 1, '$2y$10$W/Ysau2hG9585taGiP2jXe1D2bntLod.gn8iijV9qWIHbUlHAoY9q', 2, 'uw0DY5uLO2hzQSUrlOxhR99J4ts9uBuJBCSQxIe6H6vU8tIvwRhC2kfVUL1s', 0, NULL, '2018-05-11 13:37:00', '2018-05-11 13:37:00'),
(10, 'Trader Astr', 'traders3@gmail.com', '1122334466', NULL, 1, '$2y$10$/ZI1evy2MT/iufvzRicdfuiyzFwdUjRs7AjbyxOlRLZAWZsl2E7cq', 3, NULL, 9, NULL, '2018-05-11 13:40:13', '2018-05-11 13:40:13'),
(11, 'Himanshu Gupta', 'himanshu.nikhil.gupta@gmail.com', NULL, NULL, 1, '$2y$10$IZ6UFcvsjxJm.kEsTurShOE6EOkxBi6U.LO59.H5aXFBMyHfzZpW6', 4, 'ibo4XFUtC7fxtzsbu8kX9OrWS8AdRU2K4HwmvyPPCR6nonStW3LxkddWgqoX', 0, 'google', '2018-05-11 13:41:47', '2018-05-11 13:41:47'),
(12, 'Vishal Rajput', 'hemant.rai@prepscan.in', '8826681625', NULL, 1, '$2y$10$uU4CeDC3wTmBeR/bBqtgL.7Sjp/KqFezxSoyQh6RZ5D.LjFtpLgqu', 2, 'FrgGbXLN31dT5STkOhwaoIyjroGZY3aKz9OKNSQg9nKBGUdQ3ACZIHIyeiaM', 0, NULL, '2018-05-12 07:54:26', '2018-05-12 07:54:26'),
(15, 'Amit', 'hemant@gmail.com', '8826681621', NULL, 1, '$2y$10$Jlylgfn19UAKmSzJo5UxEO5ydPZnqf2FaGyV3fRX2xPIqGd4HX/im', 3, NULL, 0, NULL, '2018-05-12 08:00:17', '2018-05-12 08:00:17'),
(16, 'Himanshu Gupta', 'hima@gmail.com', '8979988999', NULL, 1, '$2y$10$HS2KuQzXfftp6A.su5viTeeHzQs90tAarOTPB14f.ODEDslZoiqZW', 3, NULL, 0, NULL, '2018-05-12 08:17:28', '2018-05-12 08:17:28'),
(17, 'Ravi', 'ravi@gmail.com', '1485236974', NULL, 1, '$2y$10$NjGDvJHpw5UFdMqY/RmHVe4arD536TnZuMVbwYNFwZZ492hY/q.Ci', 3, NULL, 0, NULL, '2018-05-12 08:18:19', '2018-05-12 08:18:19'),
(18, 'Amit', 'abc@gmail.com', '2233445566', NULL, 1, '$2y$10$UA7zm8cItWSzBfU2AKmic.4FdoRgzrq9bzScM.WRGmx7HAxyk0LKC', 4, NULL, 0, NULL, '2018-05-21 09:14:01', '2018-05-21 09:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `location`, `occupation`, `created_at`, `updated_at`) VALUES
(1, 5, 'Dubai - United Arab Emirates', 'Developers', '2018-05-11 11:39:12', '2018-05-11 11:54:28'),
(2, 18, 'Delhi, India', 'Business', '2018-05-21 09:14:01', '2018-05-21 09:14:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category_admins`
--
ALTER TABLE `category_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_admins_category_id_index` (`category_id`),
  ADD KEY `category_admins_admin_id_index` (`admin_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_user`
--
ALTER TABLE `enquiry_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiry_user_enquiry_id_index` (`enquiry_id`),
  ADD KEY `enquiry_user_user_id_index` (`user_id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `main_category_category`
--
ALTER TABLE `main_category_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_category_category_category_id_index` (`category_id`),
  ADD KEY `main_category_category_main_category_id_index` (`main_category_id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_business_email_unique` (`business_email`),
  ADD UNIQUE KEY `profiles_business_cont_no_unique` (`business_cont_no`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `category_admins`
--
ALTER TABLE `category_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `enquiry_user`
--
ALTER TABLE `enquiry_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `main_category_category`
--
ALTER TABLE `main_category_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
