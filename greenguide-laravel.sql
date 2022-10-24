-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 03:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenguide-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$1P1Kp5L9a7u2oeo/xcdrweXKRDrXjyXeEN0iI2RufeSJIs9HsC2lK', '', NULL, NULL, '2022-03-01 08:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `advertise_carousel`
--

CREATE TABLE `advertise_carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertise_carousel`
--

INSERT INTO `advertise_carousel` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(2, '1662977968 ad1.jpg', 'Know Your Borough', '2022-09-12 05:19:28', '2022-09-12 05:19:28'),
(3, '1664377262-Perfect_Binding.jpg', 'Articles', '2022-09-12 05:19:42', '2022-09-28 14:01:33'),
(4, '1664377250-Perfect_Binding_Brochure_Mockup_1.jpg', 'Councillors', '2022-09-12 05:19:57', '2022-09-28 14:00:50'),
(5, '1664377236-Perfect_Binding_vouchers.jpg', 'Vouchers', '2022-09-12 05:20:09', '2022-09-28 14:00:36'),
(6, '1664377216-Perfect_Binding_Brochure_Mockup_2.jpg', 'Puzzles', '2022-09-12 05:20:25', '2022-09-28 14:00:16'),
(7, '1664377195-Perfect_Binding_Brochure.jpg', 'What’s on Calendar', '2022-09-12 05:20:43', '2022-09-28 13:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `advert_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advert_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `advert_size`, `advert_price`, `currency`, `created_at`, `updated_at`) VALUES
(4, 'A6', '525', '£', '2022-03-09 06:42:10', '2022-09-28 08:18:29'),
(5, 'A5', '950', '£', '2022-03-09 06:42:22', '2022-09-28 08:18:40'),
(6, 'A4', '1800', '£', '2022-03-09 06:42:33', '2022-09-28 08:18:47'),
(7, 'Double Spread', '3200', '£', '2022-03-09 06:42:45', '2022-09-28 08:18:57'),
(8, 'Voucher', '180', '£', '2022-03-09 06:43:09', '2022-03-09 06:43:09'),
(9, 'Premium Pages', '2400', '£', '2022-03-09 06:43:23', '2022-09-28 08:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `advert_designs`
--

CREATE TABLE `advert_designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `order_summery` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_total` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in-progress',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advert_designs`
--

INSERT INTO `advert_designs` (`id`, `userId`, `order_summery`, `quantity_total`, `total_amount`, `status`, `created_at`, `updated_at`) VALUES
(16, 26, '<li style=\"margin-bottom: 8px;\">A5 in the Q2 2023 issue</li><li style=\"margin-bottom: 8px;\">Double Spread in the Q2 2023 issue</li><li style=\"margin-bottom: 8px;\">A5 in the Q2 2023 issue</li><li style=\"margin-bottom: 8px;\">Voucher in the Q2 2023 issue</li>', '<li style=\"margin-bottom: 8px;\">A5 : 2</li><li style=\"margin-bottom: 8px;\">Double Spread : 1</li><li style=\"margin-bottom: 8px;\">Voucher : 1</li>', 855, 'processing', '2022-09-20 10:28:28', '2022-09-20 10:28:28'),
(17, 26, '<li style=\"margin-bottom: 8px;\">A5 in the Q4 2023 issue</li><li style=\"margin-bottom: 8px;\">A6 in the Q4 2023 issue</li><li style=\"margin-bottom: 8px;\">Voucher in the Q1 2024 issue</li><li style=\"margin-bottom: 8px;\">Double Spread in the Q1 2024 issue</li><li style=\"margin-bottom: 8px;\">Premium Pages in the Q1 2024 issue</li><li style=\"margin-bottom: 8px;\">Premium Pages in the Q1 2024 issue</li><li style=\"margin-bottom: 8px;\">A6 in the Q3 2023 issue</li><li style=\"margin-bottom: 8px;\">Double Spread in the Q3 2023 issue</li><li style=\"margin-bottom: 8px;\">Voucher in the Q3 2023 issue</li><li style=\"margin-bottom: 8px;\">A4 in the Q2 2023 issue</li><li style=\"margin-bottom: 8px;\">Voucher in the Q2 2023 issue</li>', '<li style=\"margin-bottom: 8px;\">A5 : 1</li><li style=\"margin-bottom: 8px;\">A6 : 2</li><li style=\"margin-bottom: 8px;\">Voucher : 3</li><li style=\"margin-bottom: 8px;\">Double Spread : 2</li><li style=\"margin-bottom: 8px;\">Premium Pages : 2</li><li style=\"margin-bottom: 8px;\">A4 : 1</li>', 1984, 'processing', '2022-09-20 10:29:27', '2022-09-20 10:29:27'),
(18, 26, '<li style=\"margin-bottom: 8px;\">A5 in the Q1 2024 issue</li><li style=\"margin-bottom: 8px;\">Voucher in the Q1 2024 issue</li><li style=\"margin-bottom: 8px;\">Double Spread in the Q1 2024 issue</li><li style=\"margin-bottom: 8px;\">Premium Pages in the Q4 2023 issue</li><li style=\"margin-bottom: 8px;\">A6 in the Q4 2023 issue</li><li style=\"margin-bottom: 8px;\">A5 in the Q4 2023 issue</li><li style=\"margin-bottom: 8px;\">Double Spread in the Q4 2023 issue</li>', '<li style=\"margin-bottom: 8px;\">A5 : 2</li><li style=\"margin-bottom: 8px;\">Voucher : 1</li><li style=\"margin-bottom: 8px;\">Double Spread : 2</li><li style=\"margin-bottom: 8px;\">Premium Pages : 1</li><li style=\"margin-bottom: 8px;\">A6 : 1</li>', 1246, 'processing', '2022-09-20 10:30:07', '2022-09-20 10:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `boroughs`
--

CREATE TABLE `boroughs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `borough` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boroughs`
--

INSERT INTO `boroughs` (`id`, `borough`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Croydon', 'live', '2022-09-15 23:51:25', '2022-09-15 23:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `business_directorys`
--

CREATE TABLE `business_directorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_premium` int(1) NOT NULL DEFAULT 0,
  `borough` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `company_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `directory_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `monday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_directorys`
--

INSERT INTO `business_directorys` (`id`, `userId`, `category`, `subcategory`, `sub_sub_category`, `is_premium`, `borough`, `logo`, `company_images`, `company_description`, `social`, `directory_status`, `monday_open`, `monday_close`, `tuesday_open`, `tuesday_close`, `wednesday_open`, `wednesday_close`, `thursday_open`, `thursday_close`, `friday_open`, `friday_close`, `saturday_open`, `saturday_close`, `sunday_open`, `sunday_close`, `holiday_open`, `holiday_close`, `created_at`, `updated_at`) VALUES
(3, 26, 'Food', 'Caterers', NULL, 0, 'Borough', '1647244384 img7.jpg', '[{\"name\":\"7411647339220438.jpg\"},{\"name\":\"8821647339220544.jpg\"},{\"name\":\"991647339220257.jpg\"},{\"name\":\"1571647339220510.jpg\"},{\"name\":\"1131647339220367.jpg\"},{\"name\":\"9871647339220966.jpg\"}]', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '[{\"links\":\"http:\\/\\/www.test.com\"},{\"links\":\"http:\\/\\/www.test.com\"},{\"links\":\"http:\\/\\/www.test.com\"},{\"links\":\"http:\\/\\/www.test.com\"},{\"links\":\"http:\\/\\/www.test.com\"}]', 'live', '22:50', '10:55', '02:50', '10:53', '22:50', '02:50', '10:50', '10:56', '10:54', '02:50', '10:56', '10:55', '10:54', '02:50', '02:51', '10:55', '2022-03-14 00:51:12', '2022-07-23 05:13:21'),
(4, 26, 'Food', 'Fast Food', 'Italian', 1, 'Borough', '1647246909 logo.png', '[{\"name\":\"4801647246909940.jpg\"},{\"name\":\"7751647246909493.jpg\"},{\"name\":\"4661647246909971.jpg\"},{\"name\":\"3161647246909544.jpg\"},{\"name\":\"261647246909342.jpg\"},{\"name\":\"9481647246909539.jpg\"}]', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '[{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"}]', 'live', '10:01', '03:57', '03:57', '10:04', '22:02', '03:57', '00:57', '10:03', '10:02', '10:02', '10:02', '10:03', '13:57', '10:02', '10:02', '10:01', '2022-03-14 00:58:09', '2022-07-23 05:14:42'),
(10, 26, 'Pets', 'Boarding Kennels', NULL, 0, 'Borough', '1647340903 Accepted.png', '[{\"name\":\"7761647340903745.png\"},{\"name\":\"8131647340903602.png\"},{\"name\":\"2341647340903211.png\"},{\"name\":\"170164734090332.png\"},{\"name\":\"3651647340903307.png\"}]', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '[{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"},{\"links\":\"https:\\/\\/www.example.com\"}]', 'live', '17:40', '18:40', '16:40', '17:40', '15:43', '15:45', '15:45', '15:44', '15:44', '19:40', '20:40', '19:40', '15:44', '19:40', '15:46', '17:40', '2022-03-15 05:41:43', '2022-03-15 09:12:06'),
(11, 40, 'Health & Wellbeing', 'Gyms', NULL, 0, 'Croydon', '1663685381 Logo Transparent.jpg', '[{\"name\":\"7721663685381903.png\"},{\"name\":\"9511663685381768.jpg\"},{\"name\":\"8131663685381506.png\"},{\"name\":\"937166368538130.png\"}]', '<p>Local Green Guide specialise in distributions be it blanket door 2 door, bespoke or direct mail, we deliver promotional material all over London and surrounding areas. At LGG Marketing we hire fit and athletic distributors or distribution athletes who move quickly and efficiently from door to door distributing your promotional material. Most important of all is our distribution athletes are managed throughout the day by distribution coordinators who oversee the entire delivery of your media.</p>', '[{\"links\":\"www.lggmarketing.co.uk\"},{\"links\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100083758106281\"},{\"links\":\"https:\\/\\/www.instagram.com\\/greenguide_magazine\\/\"},{\"links\":null},{\"links\":null}]', 'live', '09:00', '18:00', '09:00', '18:00', '09:00', '18:00', '09:00', '18:00', '09:00', '18:00', '00:00', '00:00', '00:00', '00:00', '00:00', '00:00', '2022-09-20 13:49:41', '2022-09-21 14:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(4, 'zeeshan', 'zeeshan@gmail.com', 'test subject', 'test messgae', '2022-02-24 06:16:06', '2022-02-24 06:16:06'),
(5, 'fdsf', 'test@gmail.com', 'test subject 2', 'testtttt', '2022-02-24 06:33:44', '2022-02-24 06:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `design_books`
--

CREATE TABLE `design_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `advertSize` bigint(20) UNSIGNED DEFAULT NULL,
  `upcomingIssue` bigint(20) UNSIGNED DEFAULT NULL,
  `brief_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in-progress',
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday_open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_books`
--

INSERT INTO `design_books` (`id`, `userId`, `advertSize`, `upcomingIssue`, `brief_desc`, `content`, `logo`, `images`, `website`, `status`, `fb`, `ins`, `tw`, `yt`, `monday_open`, `monday_close`, `tuesday_open`, `tuesday_close`, `wednesday_open`, `wednesday_close`, `thursday_open`, `thursday_close`, `friday_open`, `friday_close`, `saturday_open`, `saturday_close`, `sunday_open`, `sunday_close`, `holiday_open`, `holiday_close`, `created_at`, `updated_at`) VALUES
(1, 26, 4, 3, 'Hello', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '1648451516 img9.jpg', '[{\"name\":\"7381648451535508.jpg\"}]', 'example.com', 'in-progress', 'example.com', 'example.com', 'example.com', 'example.com', '22:50', '00:48', '02:48', '03:49', '10:48', '10:52', '02:48', '22:49', '10:48', '02:48', '10:52', '10:52', '10:54', '10:52', '10:52', '10:53', '2022-03-28 00:53:09', '2022-03-28 03:26:32'),
(4, 26, 5, 3, 'dsfsd', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '1648449417 logo.png', '[{\"name\":\"43516484494179.jpg\"},{\"name\":\"3591648449417270.jpg\"},{\"name\":\"3131648449417487.jpg\"},{\"name\":\"6601648449417550.jpg\"}]', 'example.com', 'in-progress', 'example.com', 'example.com', 'example.com', 'example.com', '22:50', '00:48', '02:48', '03:49', '10:48', '10:52', '02:48', '22:49', '10:48', '02:48', '10:52', '10:52', '10:54', '10:52', '10:52', '10:53', '2022-03-28 01:36:57', '2022-03-28 03:48:59'),
(5, 26, 5, 3, 'No', '<p>desc</p>', '1663661080-our-team-bg.jpg', '[{\"name\":\"4801663661080285.png\"},{\"name\":\"2121663661080362.png\"},{\"name\":\"9021663661080827.jpg\"}]', 'exampple.com', 'in-progress', 'exampple.com', 'exampple.com', 'exampple.com', 'exampple.com', '13:04', '13:03', '13:05', '13:07', '13:06', '16:03', '13:06', '18:04', '16:03', '13:04', '16:03', '13:03', '13:03', '13:05', '13:07', '13:05', '2022-09-20 03:04:40', '2022-09-20 03:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `directory_reviews`
--

CREATE TABLE `directory_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `directoryId` bigint(20) UNSIGNED NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directory_reviews`
--

INSERT INTO `directory_reviews` (`id`, `userId`, `directoryId`, `website`, `rating`, `review`, `review_status`, `created_at`, `updated_at`) VALUES
(1, 26, 10, 'http://www.example.com', 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'live', '2022-03-16 01:38:48', '2022-03-17 02:06:38'),
(3, 26, 10, 'dfsf', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'live', '2022-03-16 02:05:44', '2022-03-17 02:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `image`, `name`, `position`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, '1660804950 young-bearded-man-with-striped-shirt_273609-5677.webp', 'Alan Monre', 'CEO, Square Software', 'alanmonre@gmail.com', '<p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it</p>', '2022-08-18 01:42:30', '2022-08-18 01:45:23'),
(2, '1660805173 pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction_176420-15187.webp', 'Emmi', 'CEO, Square Software', 'emmi@gmail.com', '<p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it</p>', '2022-08-18 01:46:13', '2022-08-18 01:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventImages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `event_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `userId`, `event_title`, `event_category`, `event_date`, `event_time`, `event_start_date`, `event_end_date`, `event_location`, `event_website`, `event_description`, `event_main_image`, `eventImages`, `event_status`, `created_at`, `updated_at`) VALUES
(2, 26, 'Add few events which are UK Croydon based', 'Sports', '2022-03-08', '08:00', '2022-03-12', '2022-06-09', 'UK', 'http://test.com', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic dolor nisi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic dolor nisi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic dolor nisi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic dolor nisi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic dolor nisi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic dolor nisi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic dolor nisi!Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', '1646641560 img8.jpg', '[{\"name\":\"4831646641560559.jpg\"},{\"name\":\"8261646641560546.jpg\"},{\"name\":\"6031646641560673.jpg\"}]', 'closed', NULL, NULL),
(4, 26, 'Lorem ipsum dolor sit amet,', 'Music', '2022-03-18', '18:36', '2022-05-12', '2022-06-09', 'Pakistan', 'http://example.com', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias laudantium hic do</p>', '1646660052 img9.jpg', '[{\"name\":\"8721646660052301.jpg\"},{\"name\":\"7601646660052753.jpg\"},{\"name\":\"3811646660052700.jpg\"}]', 'closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fa_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `fa_question`, `fa_answer`, `role`, `created_at`, `updated_at`) VALUES
(3, 'Do I need experience?', '<p>No experience is required.</p>', 'Leaflet Distributor', '2022-03-01 02:58:17', '2022-03-12 06:57:52'),
(4, 'Do I need a car to work?', '<p>No. Everyday you will meet the supervisor at a pre-confirmed location which will be a station within the distribution area.</p>', 'Leaflet Distributor', '2022-03-01 03:08:14', '2022-03-12 06:59:14'),
(5, 'Can I work only in my area?', '<p>If you want to work frequently then you will need to be flexible with travel. We will always try and put you on a shift that is closest to your home.</p>', 'Leaflet Distributor', '2022-03-01 03:08:33', '2022-03-12 06:59:21'),
(6, 'What are some job perks?', '<p>Expenses paid stayover trips in the UK</p>\r\n\r\n<p>You choose the days you want to work</p>\r\n\r\n<p>&nbsp;Weekend work available</p>', 'Leaflet Distributor', '2022-03-01 03:09:11', '2022-03-12 06:59:31'),
(7, 'How do I get paid?', '<p>Payment structure will be explained in the interview. The first four weeks will be paid weekly. Take note of each shift that you work as you will need to fill out an invoice. Payment in cash option available.</p>', 'Leaflet Distributor', '2022-03-01 03:09:36', '2022-03-12 06:59:40'),
(8, 'Is the job full time or part time?', '<p>That&rsquo;s the great part. You can choose which days you work. If you want to work full time that is possible. Only want to work on the weekends, that&rsquo;s fine. Work around your studies can be achieved.</p>', 'Leaflet Distributor', '2022-03-01 03:09:56', '2022-03-12 06:59:46'),
(9, 'Do I need to go to the office everyday?', '<p>No. You will meet the supervisor in the pre-confirmed distribution area every day.</p>', 'Leaflet Distributor', '2022-03-01 03:10:12', '2022-03-12 06:59:53'),
(10, 'What hours will I work?', '<p>We work every day of the week including weekends. Distributions begin in early morning and when you finish your quota for the day you can go home or post extra leaflets to earn extra money.</p>', 'Leaflet Distributor', '2022-03-01 03:10:32', '2022-03-12 07:00:00'),
(11, 'How can I book an interview?', '<p>Fill out our online application form and someone will be in contact shortly.</p>', 'Leaflet Distributor', '2022-03-01 03:10:53', '2022-03-12 07:00:06'),
(12, 'What documents do I need to bring?', '<p>When you attend an interview you will need to bring along documents that support proof of right to work in the UK, proof of ID and National Insurance Number.</p>\r\n\r\n<p>Proof of right to work in the UK (any of the following);</p>\r\n\r\n<ul>\r\n	<li>British Passport</li>\r\n	<li>Share code of settlement status</li>\r\n</ul>\r\n\r\n<p>Permanent resident visa (that allows self employment)</p>\r\n\r\n<p>Proof of ID (any of the following);</p>\r\n\r\n<ul>\r\n	<li>Passport</li>\r\n	<li>ID Card</li>\r\n	<li>British Birth Certificate</li>\r\n</ul>\r\n\r\n<p>Please ensure you bring the original physical documents where applicable</p>', 'Leaflet Distributor', '2022-03-01 03:13:58', '2022-03-12 07:00:13'),
(13, 'How do I get to the interview?', '<p>All of our interviews are conducted in our office at Unit 1 Georgiou Business Park, Second Avenue N18 2PG.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Car:</strong> There is free off street parking if nearby our office.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bus: </strong>Bus 192 stops along Montague Road.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>North direction the bus stop is Jeremys Green (just before Montague Super Market). When off the bus continue walking North along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;South direction the bus stop is Edmonton Federation Cemetery (just after Montague Recreation Ground) When off the bus continue walking South along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp;Train:</strong> Closest tube station is Tottenham Hale Station then catch Bus 192 to Jeremys Green.</p>', 'Leaflet Distributor', '2022-03-01 03:15:29', '2022-03-12 07:00:21'),
(14, 'Do I need experience?', '<p>Experience in the leaflet distribution industry and managing small group of people is required. Good mapping skills and orientation are a must</p>', 'Distribution Manager', '2022-03-12 07:10:54', '2022-03-12 07:11:49'),
(15, 'Do I need a car to work?', '<p>Yes. You must own a vehicle and have a valid clean driving license</p>', 'Distribution Manager', '2022-03-12 07:12:23', '2022-03-12 07:12:23'),
(16, 'Can I work only in my area?', '<p>If you want to work frequently then you will need to be flexible with areas that you work. We will always try and put you on a shift that is closest to your home.</p>', 'Distribution Manager', '2022-03-12 07:26:32', '2022-03-12 07:26:32'),
(17, 'What are some job perks?', '<p>Expenses paid stayover trips in the UK</p>\r\n\r\n<p>You choose the days you want to work</p>\r\n\r\n<p>&nbsp;Weekend work available</p>', 'Distribution Manager', '2022-03-12 07:26:51', '2022-03-12 07:26:51'),
(18, 'How do I get paid?', '<p>Payment structure will be explained in the interview. The first four weeks will be paid weekly. Take note of each shift that you work as you will need to fill out an invoice.</p>', 'Distribution Manager', '2022-03-12 07:27:04', '2022-03-12 07:27:04'),
(19, 'Is the job full time or part time?', '<p>That&rsquo;s the great part. You can choose which days you work. If you want to work full time that is possible. Only want to work on the weekends, that&rsquo;s fine. Work around your studies can be achieved.</p>', 'Distribution Manager', '2022-03-12 07:27:14', '2022-03-12 07:27:14'),
(20, 'Do I need to go to the office everyday?', '<p>Yes. You will need to come into our warehouse each day to collect items necessary for your shift.</p>', 'Distribution Manager', '2022-03-12 07:27:26', '2022-03-12 07:27:26'),
(21, 'What hours will I work?', '<p>We work every day of the week including weekends. Distributions begin in early morning and will manage the shift until all of your distributors have completed their quota</p>', 'Distribution Manager', '2022-03-12 07:27:37', '2022-03-12 07:27:37'),
(22, 'How can I book an interview?', '<p>Fill out our online application form and someone will be in contact shortly.</p>', 'Distribution Manager', '2022-03-12 07:27:46', '2022-03-12 07:27:46'),
(23, 'What documents do I need to bring?', '<p>When you attend an interview you will need to bring along documents that support proof of right to work in the UK, proof of ID and National Insurance Number.</p>\r\n\r\n<p>Proof of right to work in the UK (any of the following);</p>\r\n\r\n<ul>\r\n	<li>British Passport</li>\r\n	<li>Share code of settlement status</li>\r\n</ul>\r\n\r\n<p>Permanent resident visa (that allows self employment)</p>\r\n\r\n<p>Proof of ID (any of the following);</p>\r\n\r\n<ul>\r\n	<li>Passport</li>\r\n	<li>ID Card</li>\r\n	<li>British Birth Certificate</li>\r\n</ul>\r\n\r\n<p>Valid Driving License</p>\r\n\r\n<p>Please ensure you bring the original physical documents where applicable</p>', 'Distribution Manager', '2022-03-12 07:28:06', '2022-03-12 07:28:06'),
(24, 'How do I get to the interview?', '<p>All of our interviews are conducted in our office at Unit 1 Georgiou Business Park, Second Avenue N18 2PG.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>Car:</strong></strong>&nbsp;There is free off street parking if nearby our office.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>Bus:&nbsp;</strong></strong>Bus 192 stops along Montague Road.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>North direction the bus stop is Jeremys Green (just before Montague Super Market). When off the bus continue walking North along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;South direction the bus stop is Edmonton Federation Cemetery (just after Montague Recreation Ground) When off the bus continue walking South along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>&nbsp;Train:</strong></strong>&nbsp;Closest tube station is Tottenham Hale Station then catch Bus 192 to Jeremys Green.</p>', 'Distribution Manager', '2022-03-12 07:28:17', '2022-03-12 07:28:43'),
(25, 'Do I need experience?', '<p>No experience is required</p>', 'Warehouse Assistant', '2022-03-12 07:29:05', '2022-03-12 07:29:05'),
(26, 'Do I need a valid driving license?', '<p>Yes. You may be required to courier leaflets or magazines to various locations.</p>', 'Warehouse Assistant', '2022-03-12 07:29:15', '2022-03-12 07:29:15'),
(27, 'Do I need a fork lift license?', '<p>Yes. You will be required to use a fork lift in the warehouse. &nbsp;</p>', 'Warehouse Assistant', '2022-03-12 07:29:23', '2022-03-12 07:29:23'),
(28, 'What will I be required to do?', '<p>Moving heavy boxes</p>\r\n\r\n<p>Loading vans</p>\r\n\r\n<p>Bundling leaflets</p>\r\n\r\n<p>Collecting or moving leaflets or magazines to various locations</p>', 'Warehouse Assistant', '2022-03-12 07:29:59', '2022-03-12 07:29:59'),
(29, 'How do I get paid?', '<p>Payment structure will be explained in the interview. The first four weeks will be paid weekly. Take note of each shift that you work as you will need to fill out an invoice.</p>', 'Warehouse Assistant', '2022-03-12 07:30:10', '2022-03-12 07:30:10'),
(30, 'What hours will I work?', '<p>Warehouse work commences at 9:30am and you will work until 5:30pm</p>', 'Warehouse Assistant', '2022-03-12 07:30:19', '2022-03-12 07:30:19'),
(31, 'How can I book an interview?', '<p>Fill out our online application form and someone will be in contact shortly.</p>', 'Warehouse Assistant', '2022-03-12 07:30:29', '2022-03-12 07:30:29'),
(32, 'What documents do I need to bring?', '<p>When you attend an interview you will need to bring along documents that support proof of right to work in the UK, proof of ID and National Insurance Number.</p>\r\n\r\n<p>Proof of right to work in the UK (any of the following);</p>\r\n\r\n<ul>\r\n	<li>British Passport</li>\r\n	<li>Share code of settlement status</li>\r\n</ul>\r\n\r\n<p>Permanent resident visa (that allows self employment)</p>\r\n\r\n<p>Proof of ID (any of the following);</p>\r\n\r\n<ul>\r\n	<li>Passport</li>\r\n	<li>ID Card</li>\r\n	<li>British Birth Certificate</li>\r\n</ul>\r\n\r\n<p>Please ensure you bring the original physical documents where applicable</p>', 'Warehouse Assistant', '2022-03-12 07:30:42', '2022-03-12 07:30:42'),
(33, 'How do I get to the interview?', '<p>All of our interviews are conducted in our office at Unit 1 Georgiou Business Park, Second Avenue N18 2PG.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>Car:</strong></strong>&nbsp;There is free off street parking if nearby our office.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>Bus:&nbsp;</strong></strong>Bus 192 stops along Montague Road.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>North direction the bus stop is Jeremys Green (just before Montague Super Market). When off the bus continue walking North along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;South direction the bus stop is Edmonton Federation Cemetery (just after Montague Recreation Ground) When off the bus continue walking South along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>&nbsp;Train:</strong></strong>&nbsp;Closest tube station is Tottenham Hale Station then catch Bus 192 to Jeremys Green.</p>', 'Warehouse Assistant', '2022-03-12 07:30:56', '2022-03-12 07:30:56'),
(34, 'What role is available?', '<p>We have various office based roles available which include receptionist, admin officer, account manager and HR assistance</p>', 'Administrator', '2022-03-12 07:31:07', '2022-03-12 07:31:07'),
(35, 'Do I need experience?', '<p>Experience in the leaflet or logistical industry is required.</p>\r\n\r\n<p>Office based experience</p>', 'Administrator', '2022-03-12 07:31:18', '2022-03-12 07:31:18'),
(36, 'Is the job full time or part time?', '<p>This will vary depending upon job role but the information will be provided before an interview is set up.</p>', 'Administrator', '2022-03-12 07:31:28', '2022-03-12 07:31:28'),
(37, 'What hours will I work?', '<p>Vary depending on role. Our office hours are Monday &ndash; Friday 9am &ndash; 6pm.</p>', 'Administrator', '2022-03-12 07:31:37', '2022-03-12 07:31:37'),
(38, 'How can I book an interview?', '<p>Fill out our online application form and someone will be in contact shortly.</p>', 'Administrator', '2022-03-12 07:31:45', '2022-03-12 07:31:45'),
(39, 'What documents do I need to bring?', '<p>When you attend an interview you will need to bring along documents that support proof of right to work in the UK, proof of ID and National Insurance Number.</p>\r\n\r\n<p>Proof of right to work in the UK (any of the following);</p>\r\n\r\n<ul>\r\n	<li>British Passport</li>\r\n	<li>Share code of settlement status</li>\r\n</ul>\r\n\r\n<p>Permanent resident visa (that allows self employment)</p>\r\n\r\n<p>Proof of ID (any of the following);</p>\r\n\r\n<ul>\r\n	<li>Passport</li>\r\n	<li>ID Card</li>\r\n	<li>British Birth Certificate</li>\r\n</ul>\r\n\r\n<p>Please ensure you bring the original physical documents where applicable</p>', 'Administrator', '2022-03-12 07:32:00', '2022-03-12 07:32:00'),
(40, 'How do I get to the interview?', '<p>All of our interviews are conducted in our office at Unit 1 Georgiou Business Park, Second Avenue N18 2PG.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>Car:</strong></strong>&nbsp;There is free off street parking if nearby our office.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>Bus:&nbsp;</strong></strong>Bus 192 stops along Montague Road.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>North direction the bus stop is Jeremys Green (just before Montague Super Market). When off the bus continue walking North along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;South direction the bus stop is Edmonton Federation Cemetery (just after Montague Recreation Ground) When off the bus continue walking South along Montague Road until you see Second Avenue on the right side. Ela Cafe is on the corner.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>&nbsp;Train:</strong></strong>&nbsp;Closest tube station is Tottenham Hale Station then catch Bus 192 to Jeremys Green</p>', 'Administrator', '2022-03-12 07:32:20', '2022-03-12 07:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Comments','Suggestions','Questions') COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `ui_heading_one` varchar(255) NOT NULL,
  `ui_heading_two` varchar(255) NOT NULL,
  `ui_heading_three` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `ui_heading_one`, `ui_heading_two`, `ui_heading_three`) VALUES
(1, 'Issue', 'Artwork and Payment Deadline', 'Distribution Commencement');

-- --------------------------------------------------------

--
-- Table structure for table `giveaways`
--

CREATE TABLE `giveaways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upcomingIssue` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giveaways`
--

INSERT INTO `giveaways` (`id`, `upcomingIssue`, `name`, `contact`, `email`, `address`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Zeeshan Ali', '456456456', 'zeeshan11@gmail.com', 'Basti Ali Purr RYK', 'This is test answer', 'pending', '2022-07-16 05:42:20', '2022-07-16 05:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `greenguide_team`
--

CREATE TABLE `greenguide_team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `greenguide_team`
--

INSERT INTO `greenguide_team` (`id`, `image`, `name`, `position`, `email`, `created_at`, `updated_at`) VALUES
(3, '1660631579 woman-takes-images-holding-photographic-camera-hands_176532-12497.webp', 'Elena Dinca', 'HR Assistant', 'hr@localgreenguide.com', '2022-08-16 01:32:59', '2022-09-29 14:58:08'),
(4, '1660631645 young-bearded-man-with-striped-shirt_273609-5677.webp', 'Richard Richards', 'Business Development Manager', 'richard@localgreenguide.com', '2022-08-16 01:34:05', '2022-09-29 14:56:47'),
(5, '1660631678 pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction_176420-15187.webp', 'Daniella Milusheva', 'HR Assistant Manager', 'hr@localgreenguide.com', '2022-08-16 01:34:38', '2022-09-29 14:57:22'),
(6, '1662704554-ourwork.jpg', 'Andrea Halsey', 'Sales Assistant Manager', 'magazine@localgreenguide.com', '2022-08-16 01:36:55', '2022-09-29 14:56:14'),
(7, '1664467328 Untitled (500 × 500 px).png', 'Kristina Kirilova', 'Head of Customer Service', 'info@localgreenguide.com', '2022-09-29 15:02:08', '2022-09-29 15:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `home_gallery`
--

CREATE TABLE `home_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_gallery`
--

INSERT INTO `home_gallery` (`id`, `title`, `desc`, `link`, `images`, `file_type`, `status`, `created_at`, `updated_at`) VALUES
(4, NULL, 'Delivering 156,000 magazines through letterboxes of Croydon Borough residents.', '/advertise', '[{\"name\":\"1611658489691950.png\"}]', 'image', 'active', '2022-07-22 06:34:51', '2022-09-28 11:04:42'),
(5, NULL, 'A4 premium residential magazine', '/advertise', '[{\"name\":\"1631664372906292.png\"}]', 'image', 'active', '2022-07-22 06:35:39', '2022-09-28 12:48:26'),
(6, 'What\'s on in the Croydon Borough ?', NULL, '/localevents', '[]', 'image', 'active', '2022-07-22 06:36:17', '2022-07-22 06:36:17'),
(7, 'Magazine advertising is low cost, high exposure marketing', NULL, '/advertise', '[]', 'image', 'active', '2022-07-22 06:36:40', '2022-09-28 11:07:40'),
(8, NULL, 'We are doing our part to offset the production of the Local Green Guide Croydon magazine', '/greeninitiative', '[{\"name\":\"8351664372390433.png\"},{\"name\":\"2931664372390561.png\"},{\"name\":\"503166437239061.png\"}]', 'image', 'active', '2022-07-22 06:37:15', '2022-09-28 12:39:50'),
(9, NULL, 'Local Green Guide Croydon magazine is distributed by the LGG Marketing team.', '/about', '[{\"name\":\"1931664370920127.png\"},{\"name\":\"3471664370920596.png\"},{\"name\":\"8681664370920540.png\"},{\"name\":\"5571664370920858.png\"}]', 'image', 'active', '2022-07-22 06:37:55', '2022-09-28 12:15:20'),
(10, NULL, 'Strengthen your online exposure by registering on our FREE business directory.', '/businessdirectory', '[{\"name\":\"751664366973744.png\"}]', 'image', 'active', '2022-07-22 06:38:47', '2022-09-28 12:44:31'),
(11, 'Local Green Guide magazine is a pathway for community growth', NULL, '/communitygrowth', '[{\"name\":\"9931658490104727.jpg\"}]', 'image', 'active', '2022-07-22 06:41:44', '2022-09-28 11:10:09'),
(12, NULL, NULL, NULL, '[{\"name\":\"5931664372446279.mp4\"}]', 'mp4', 'active', '2022-09-20 02:01:38', '2022-09-28 12:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_right_work_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_driving_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_fork_lift_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_own_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latest_issues`
--

CREATE TABLE `latest_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commencement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_issues`
--

INSERT INTO `latest_issues` (`id`, `issue`, `deadline`, `commencement`, `created_at`, `updated_at`) VALUES
(2, 'Christmas Special', '1st Oct 2022', '1st Nov 2022', '2022-09-13 00:50:30', '2022-09-13 00:50:30'),
(3, 'Spring 2023', '15th Feb 2023', '15th Mar 2023', '2022-09-13 00:51:22', '2022-09-13 00:51:22'),
(4, 'Summer 2023', '15th May 2023', '15th Jun 2023', '2022-09-13 00:51:58', '2022-09-13 00:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `lgg_wards_list`
--

CREATE TABLE `lgg_wards_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lgg_wards_list`
--

INSERT INTO `lgg_wards_list` (`id`, `ward_title`, `ward_status`, `created_at`, `updated_at`) VALUES
(2, 'Woodside', 'active', '2022-09-29 01:34:43', '2022-09-29 01:34:43'),
(3, 'West Thornton', 'active', '2022-09-29 01:34:49', '2022-09-29 01:34:49'),
(4, 'Waddon', 'active', '2022-09-29 01:35:07', '2022-09-29 01:35:07'),
(5, 'Thornton Heath', 'active', '2022-09-29 01:35:13', '2022-09-29 01:35:13'),
(6, 'South Norwood', 'active', '2022-09-29 01:35:19', '2022-09-29 01:35:19'),
(7, 'South Croydon', 'active', '2022-09-29 01:35:25', '2022-09-29 01:35:25'),
(8, 'Shirley South', 'active', '2022-09-29 01:35:30', '2022-09-29 01:35:30'),
(9, 'Shirley North', 'active', '2022-09-29 01:35:37', '2022-09-29 01:35:37'),
(10, 'Selsdon Vale & Forestdale', 'active', '2022-09-29 01:35:43', '2022-09-29 01:35:43'),
(11, 'Selsdon & Addington Village', 'active', '2022-09-29 01:35:50', '2022-09-29 01:35:50'),
(12, 'Selhurst', 'active', '2022-09-29 01:35:55', '2022-09-29 01:35:55'),
(13, 'Sanderstead', 'active', '2022-09-29 01:36:01', '2022-09-29 01:36:01'),
(14, 'Purley Oaks & Riddlesdown', 'active', '2022-09-29 01:36:06', '2022-09-29 01:36:06'),
(15, 'Purley & Woodcote', 'active', '2022-09-29 01:36:11', '2022-09-29 01:38:49'),
(16, 'Park Hill & Whitgift', 'active', '2022-09-29 01:36:17', '2022-09-29 01:36:17'),
(17, 'Old Coulsdon', 'active', '2022-09-29 01:36:23', '2022-09-29 01:36:23'),
(18, 'Norbury Park', 'active', '2022-09-29 01:36:29', '2022-09-29 01:36:29'),
(19, 'Norbury & Pollards Hill', 'active', '2022-09-29 01:36:46', '2022-09-29 01:36:46'),
(20, 'New Addington South', 'active', '2022-09-29 01:36:51', '2022-09-29 01:36:51'),
(21, 'New Addington North', 'active', '2022-09-29 01:36:57', '2022-09-29 01:36:57'),
(22, 'Kenley', 'active', '2022-09-29 01:37:02', '2022-09-29 01:37:02'),
(23, 'Fairfield', 'active', '2022-09-29 01:37:08', '2022-09-29 01:37:08'),
(24, 'Crystal Palace & Upper Norwood', 'active', '2022-09-29 01:37:13', '2022-09-29 01:37:13'),
(25, 'Coulsdon Town', 'active', '2022-09-29 01:37:18', '2022-09-29 01:37:18'),
(26, 'Broad Green', 'active', '2022-09-29 01:37:24', '2022-09-29 01:37:24'),
(27, 'Bensham Manor', 'active', '2022-09-29 01:37:33', '2022-09-29 01:37:33'),
(28, 'Addiscombe West', 'active', '2022-09-29 01:37:38', '2022-09-29 01:37:38'),
(29, 'Addiscombe East', 'active', '2022-09-29 01:37:43', '2022-09-29 01:37:43'),
(30, 'Cabinet Members', 'active', '2022-09-29 01:37:51', '2022-09-29 01:37:51'),
(31, 'Shadow Cabinet Members', 'active', '2022-09-29 01:37:57', '2022-09-29 01:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `lgg_ward_members`
--

CREATE TABLE `lgg_ward_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wardId` bigint(20) UNSIGNED DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lgg_ward_members`
--

INSERT INTO `lgg_ward_members` (`id`, `title`, `wardId`, `profile`, `name`, `party`, `landline`, `mobile`, `email`, `twitter`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Cabinet Member for Streets and Environment', 8, 'member-252658-1664452392-Scott Roche.jpg', 'Scott Roche', 'Conservative', NULL, NULL, 'scott.roche@croydon.gov.uk', '@cllrscottroche', 'active', '2022-09-29 10:53:12', '2022-09-29 10:53:12'),
(5, 'Cabinet Member for Community Safety', 22, 'member-646192-1664452543-Ola Kolade.jpg', 'Ola Kolade', 'Conservative', NULL, '07707277218', 'Ola.Kolade@croydon.gov.uk', '@MrOlaKolade', 'active', '2022-09-29 10:55:43', '2022-09-29 10:55:43'),
(6, 'Cabinet Member for Health and Adult Social Care', 13, 'member-622769-1664452640-Yvette Hopley.jpg', 'Yvette Hopley', 'Conservative', '020 8604 7033', NULL, 'yvette.hopley@croydon.gov.uk', '@YvetteHopley', 'active', '2022-09-29 10:57:20', '2022-09-29 10:57:20'),
(7, 'Statutory Deputy Mayor and Cabinet Member for Homes', 13, 'member-231203-1664452723-Lynne Hale.jpg', 'Lynne Hale', 'Conservative', NULL, '07710 183 588', 'lynne.hale@croydon.gov.uk', NULL, 'active', '2022-09-29 10:58:43', '2022-09-29 10:58:43'),
(8, 'Cabinet Member for Children and Young People', NULL, 'member-738777-1664452794-Maria Gatland.jpg', 'Maria Gatland', 'Conservative', '02084071327', NULL, 'maria.gatland@croydon.gov.uk', '@GatlandMaria', 'active', '2022-09-29 10:59:54', '2022-09-29 10:59:54'),
(9, 'Cabinet Member for Finance', 8, 'member-977858-1664452903-Jason Cummings.jpg', 'Jason Cummings', 'Conservative', '02086512575', NULL, 'jason.cummings@croydon.gov.uk', '@JasonCroydonCon', 'active', '2022-09-29 11:01:43', '2022-09-29 11:01:43'),
(10, 'Cabinet Member for Planning and Regeneration', 29, 'member-754856-1664453082-Jeet Bains.jpg', 'Jeet Bains', 'Conservative', '02086047036', '07710184923', 'jeet.bains@croydon.gov.uk', '@Jeet_Bains', 'active', '2022-09-29 11:04:42', '2022-09-29 11:04:42'),
(11, 'Deputy Leader of the Opposition and Shadow Cabinet Member for Finance', 5, 'member-644390-1664453266-Callton Young OBE.jpg', 'Callton Young OBE', 'Labour', NULL, '07710184928', 'callton.young@croydon.gov.uk', '@CalltonYoung', 'active', '2022-09-29 11:07:46', '2022-09-29 11:07:46'),
(12, 'Shadow Cabinet Member for Children and Young People', 2, 'member-289634-1664454572-Mike Bonello.jpg', 'Mike Bonello', 'Labour', NULL, '07707277223', 'Mike.Bonello@croydon.gov.uk', NULL, 'active', '2022-09-29 11:29:32', '2022-09-29 11:29:32'),
(13, 'Shadow Cabinet Member for Planning and Regeneration', 23, 'member-401798-1664454638-Chris Clark.jpg', 'Chris Clark', 'Labour', NULL, '07783152475', 'chris.clark2@croydon.gov.uk', NULL, 'active', '2022-09-29 11:30:38', '2022-09-29 11:30:38'),
(14, 'Deputy Leader of the Opposition and Shadow Cabinet Member for Health and Adult Social Care', 3, 'member-358978-1664454699-Janet Campbell.jpg', 'Janet Campbell', 'Labour', NULL, '07783152344', 'janet.campbell@croydon.gov.uk', NULL, 'active', '2022-09-29 11:31:39', '2022-09-29 11:31:39'),
(15, 'Shadow Cabinet Member for Streets and Environment', 24, 'member-813097-1664454765-Nina Degrads.jpg', 'Nina Degrads', 'Labour', NULL, '07783152356', 'nina.degrads@croydon.gov.uk', NULL, 'active', '2022-09-29 11:32:45', '2022-09-29 11:32:45'),
(16, 'Shadow Cabinet Member for Communities and Culture', 2, 'member-868890-1664454827-Brigitte Graham.jpg', 'Brigitte Graham', 'Labour', NULL, '07716 092464', 'Brigitte.Graham@croydon.gov.uk', '@BrigSiamina', 'active', '2022-09-29 11:33:47', '2022-09-29 11:33:47'),
(17, 'Leader of the Opposition', 3, 'member-321834-1664454885-Stuart King.jpg', 'Stuart King', 'Labour', NULL, '07710183612', 'stuart.king@croydon.gov.uk', '@Stuart_King', 'active', '2022-09-29 11:34:45', '2022-09-29 11:34:45'),
(18, 'Shadow Cabinet Member for Homes', 3, 'member-242359-1664454987-Chrishni Reshekaron.jpg', 'ChrishniReshekaron', 'Labour', NULL, '07716 092496', 'Chrishni.Reshekaron@croydon.gov.uk', NULL, 'active', '2022-09-29 11:36:27', '2022-09-29 11:36:27'),
(19, 'Shadow Cabinet Member for Community Safety', 27, 'member-169011-1664455073-Enid Mollyneaux.jpg', 'Enid Mollyneaux', 'Labour', NULL, '0771 609 2462', 'Enid.Mollyneaux@croydon.gov.uk', NULL, 'active', '2022-09-29 11:37:53', '2022-09-29 11:37:53'),
(20, NULL, 29, 'member-987178-1664513161-Maddie Henson.jpg', 'Maddie Henson', 'Labour', '02086047019', '07710183590', 'maddie.henson@croydon.gov.uk', '@MinsuR', 'active', '2022-09-30 03:46:01', '2022-09-30 03:46:01'),
(21, NULL, 28, 'member-211311-1664513296-Sean Fitzsimons.jpg', 'Sean Fitzsimons', 'Labour', '02088195597', NULL, 'sean.fitzsimons@croydon.gov.uk', '@CroydonSean', 'active', '2022-09-30 03:48:16', '2022-09-30 03:48:16'),
(22, NULL, 28, 'member-220227-1664513354-CLive Fraser.jpg', 'Clive Fraser', 'Labour', '020 8653 9618', '07783152322', 'clive.fraser@croydon.gov.uk', '@coopfraser', 'active', '2022-09-30 03:49:14', '2022-09-30 03:49:14'),
(23, NULL, NULL, 'member-240218-1664513389-Patricia Hay- Justice.jpg', 'Patricia Hay-Justice', 'Labour', '02088195597', NULL, 'patricia.hay-justice@croydon.gov.uk', NULL, 'active', '2022-09-30 03:49:49', '2022-09-30 03:49:49'),
(24, NULL, NULL, 'member-318364-1664513489-Humayun Kabir.jpg', 'Humayun Kabir', 'Labour', '02086651586', '07707 277 232', 'humayun.kabir@croydon.gov.uk', '@Cllr_Kabir', 'active', '2022-09-30 03:51:29', '2022-09-30 03:51:29'),
(25, NULL, NULL, 'member-419239-1664513542-Eunice O\'Dame.jpg', 'Enid Mollyneaux', 'Labour', NULL, '0771 609 2462', 'Enid.Mollyneaux@croydon.gov.uk', NULL, 'active', '2022-09-30 03:52:22', '2022-09-30 03:52:22'),
(26, NULL, NULL, 'member-948114-1664513593-Eunice O\'Dame.jpg', 'Eunice O’Dame', 'Labour', NULL, '07716 092485', 'eunice.o\'dame@croydon.gov.uk', '@EuniceDame', 'active', '2022-09-30 03:53:13', '2022-09-30 03:53:13'),
(27, NULL, 26, 'member-469842-1664514176-Sherwan Chowdhury.jpg', 'Sherwan Chowdhury', 'Labour', '020 8764 7606', NULL, 'sherwan.chowdhury@croydon.gov.uk', '@SherwanCroydon', 'active', '2022-09-30 04:02:56', '2022-09-30 04:02:56'),
(28, NULL, 26, 'member-457968-1664514233-Stuart Collins.jpg', 'Stuart Collins', 'Labour', NULL, '07789068870', 'stuart.collins@croydon.gov.uk', '@CleanStreetStu', 'active', '2022-09-30 04:03:53', '2022-09-30 04:03:53'),
(29, NULL, 26, 'member-295181-1664514282-Manju Shahul-Hameed.jpg', 'Manju Shahul-Hameed', 'Labour', '02086688328', NULL, 'manju.shahul-hameed@croydon.gov.uk', '@ManjuShahul', 'active', '2022-09-30 04:04:42', '2022-09-30 04:04:42'),
(30, NULL, 25, 'member-602058-1664514352-Mario Creatura.jpg', 'Mario Creatura', 'Conservative', '02036243142', NULL, 'mario.creatura@croydon.gov.uk', '@MarioCreatura', 'active', '2022-09-30 04:05:52', '2022-09-30 04:05:52'),
(31, NULL, 25, 'member-928016-1664515467-Ian Parker.jpg', 'Ian Parker', 'Conservative', '0208 660 0491', '07783152343', 'Ian.Parker@croydon.gov.uk', '@CllrIanParker', 'active', '2022-09-30 04:24:27', '2022-09-30 04:24:27'),
(32, NULL, 25, 'member-785193-1664515527-Luke Shortland.jpg', 'Luke Shortland', 'Conservative', NULL, '07716 092467', 'Luke.Shortland@croydon.gov.uk', '@LukeForCoulsdon', 'active', '2022-09-30 04:25:27', '2022-09-30 04:25:27'),
(33, NULL, 24, 'member-411685-1664515616-Patsy Cummings.jpg', 'Patsy Cummings', 'Labour', NULL, '07840385352', 'patsy.cummings@croydon.gov.uk', '@PatsyjCummings', 'active', '2022-09-30 04:26:56', '2022-09-30 04:26:56'),
(34, NULL, 24, 'member-894492-1664515699-Claire Bonham.jpg', 'Claire Bonham', 'Liberal Democrats', NULL, '07716 092460', 'claire.bonham@croydon.gov.uk', NULL, 'active', '2022-09-30 04:28:19', '2022-09-30 04:28:19'),
(35, NULL, 23, 'member-183962-1664515993-Ria Patel.jpg', 'Ria Patel', 'Green Party', NULL, '07716 092499', 'ria.patel@croydon.gov.uk', '@Ria__Patel', 'active', '2022-09-30 04:33:13', '2022-09-30 04:33:13'),
(36, NULL, 23, 'member-907412-1664516034-Esther Sutton.jpg', 'Esther Sutton', 'Fairfield', NULL, '07716 092493', 'Esther.Sutton@croydon.gov.uk', NULL, 'active', '2022-09-30 04:33:54', '2022-09-30 04:33:54'),
(37, NULL, 22, 'member-201538-1664516106-Gayle Gander.jpg', 'Gayle Gander', 'Conservative', NULL, '07716 092482', 'gayle.gander@croydon.gov.uk', NULL, 'active', '2022-09-30 04:35:06', '2022-09-30 04:35:06'),
(38, NULL, 21, 'member-416240-1664516176-Kola Agboola.jpg', 'Kola Agboola', 'Labour', NULL, '07707277222', 'Koala.Agboola@croydon.gov.uk', NULL, 'active', '2022-09-30 04:36:16', '2022-09-30 04:36:16'),
(39, NULL, 21, 'member-50847-1664516215-Adele Benson.jpg', 'Adele Benson', 'Conservative', NULL, '07415 377207', 'Adele.Benson@croydon.gov.uk', NULL, 'active', '2022-09-30 04:36:55', '2022-09-30 04:36:55'),
(40, NULL, 20, 'member-450933-1664516373-Lara Fish.jpg', 'Lara Fish', 'Conservative', NULL, '07716 092500', 'Lara.Fish@croydon.gov.uk', NULL, 'active', '2022-09-30 04:39:33', '2022-09-30 04:39:33'),
(41, NULL, 20, 'member-510987-1664516442-Tony Pearson.jpg', 'Tony Pearson', 'Conservative', NULL, '07716092459', 'Tony.Pearson@croydon.gov.uk', '@TonyP1967', 'active', '2022-09-30 04:40:42', '2022-09-30 04:40:42'),
(42, NULL, 19, 'member-26118-1664516709-Leila Ben- Hassel.jpg', 'Leila Ben-Hassel', 'Labour', NULL, '07562430010', 'leila.ben-hassel@croydon.gov.uk', '@Leila4Norbury', 'active', '2022-09-30 04:45:09', '2022-09-30 04:45:09'),
(43, NULL, 19, 'member-627966-1664516752-Matt Griffiths.jpg', 'Matt Griffiths', 'Labour', NULL, '07716 092494', 'matt.griffiths@croydon.gov.uk', '@_MattGriffiths_', 'active', '2022-09-30 04:45:52', '2022-09-30 04:45:52'),
(44, NULL, 18, 'member-742756-1664516821-Alisa Flemming.jpg', 'Alisa Flemming', 'Labour', '02087658072', '07738 984 888', 'alisa.flemming@croydon.gov.uk', '@Cllr_Alisa', 'active', '2022-09-30 04:47:01', '2022-09-30 04:47:01'),
(45, NULL, 18, 'member-224271-1664516862-Appu Srinivasan.jpg', 'Appu Srinivasan', 'Labour', NULL, '07716 092489', 'Appu.Srinivasan@croydon.gov.uk', '@AppuDhamodaran', 'active', '2022-09-30 04:47:42', '2022-09-30 04:47:42'),
(46, NULL, NULL, 'member-438128-1664516919-Margaret Bird.jpg', 'Margaret Bird', 'Conservative', '02086047035', '07710184942', 'margaret.bird@croydon.gov.uk', '@MargaretBird3', 'active', '2022-09-30 04:48:40', '2022-09-30 04:48:40'),
(47, NULL, 17, 'member-197464-1664516958-Nikhil Sherine Thampi.jpg', 'Nikhil SherineThampi', 'Conservative', NULL, '07716 092479', 'nikhil.sherinethampi@croydon.gov.uk', NULL, 'active', '2022-09-30 04:49:18', '2022-09-30 04:49:18'),
(48, NULL, 17, 'member-938070-1664517123-Margaret Bird.jpg', 'Margaret Bird', 'Conservative', '02086047035', '07710184942', 'margaret.bird@croydon.gov.uk', '@MargaretBird3', 'active', '2022-09-30 04:52:03', '2022-09-30 04:52:03'),
(49, NULL, 16, 'member-317350-1664517200-Jade Appleton.jpg', 'Jade Appleton', 'Conservative', NULL, '07707277216', 'Jade.Appleton@croydon.gov.uk', '@JadeParkhill', 'active', '2022-09-30 04:53:20', '2022-09-30 04:53:20'),
(50, NULL, 15, 'member-493811-1664517282-Simon Brew.jpg', 'Simon Brew', 'Conservative', NULL, '07803618096', 'simon.brew@croydon.gov.uk', '@Simon_Brew', 'active', '2022-09-30 04:54:42', '2022-09-30 04:54:42'),
(51, NULL, 15, 'member-111438-1664517327-Samir Dwesar.jpg', 'Samir Dwesar', 'Conservative', NULL, '07716 092471', 'samir.dwesar@croydon.gov.uk', '@SamirDwesar', 'active', '2022-09-30 04:55:27', '2022-09-30 04:55:27'),
(52, NULL, 15, 'member-395863-1664517363-Holly Ramsey.jpg', 'Holly Ramsey', 'Conservative', NULL, NULL, 'holly.ramsey@croydon.gov.uk', NULL, 'active', '2022-09-30 04:56:03', '2022-09-30 04:56:03'),
(53, NULL, 14, 'member-425716-1664517425-Endri Llabuti.jpg', 'EndriLlabuti', 'Conservative', NULL, '07716 092461', 'endri.llabuti@croydon.gov.uk', '@ELlabuti', 'active', '2022-09-30 04:57:05', '2022-09-30 04:57:05'),
(54, NULL, 14, 'member-503756-1664517473-Alasdair Stewart.jpg', 'Alasdair Stewart', 'Conservative', NULL, '07716 092472', 'alasdair.stewart@croydon.gov.uk', '@AlasdairIS', 'active', '2022-09-30 04:57:53', '2022-09-30 04:57:53'),
(55, NULL, 13, 'member-316071-1664517560-Helen Redfern.jpg', 'Helen Redfern', 'Conservative', NULL, '07783152334', 'helen.redfern@croydon.gov.uk', NULL, 'active', '2022-09-30 04:59:20', '2022-09-30 04:59:20'),
(56, NULL, 12, 'member-620009-1664517658-Mohammed Islam.jpg', 'Mohammed Islam', 'Labour', NULL, '07716092498', 'Mohammed.Islam@croydon.gov.uk', '@mohammedislam_1', 'active', '2022-09-30 05:00:58', '2022-09-30 05:00:58'),
(57, NULL, 12, 'member-803680-1664517696-Catherine Wilson.jpg', 'Catherine Wilson', 'Labour', NULL, '07716 092476', 'Catherine.Wilson@croydon.gov.uk', NULL, 'active', '2022-09-30 05:01:36', '2022-09-30 05:01:36'),
(58, NULL, 11, 'member-644802-1664517760-Joseph Lee.jpg', 'Joseph Lee', 'Conservative', NULL, '07716 092 463', 'Joseph.Lee@croydon.gov.uk', NULL, 'active', '2022-09-30 05:02:40', '2022-09-30 05:02:40'),
(59, NULL, 11, 'member-331277-1664517801-Robert Ward.jpg', 'Robert Ward', 'Conservative', NULL, '07783152363', 'robert.ward@croydon.gov.uk', '@moguloilman', 'active', '2022-09-30 05:03:21', '2022-09-30 05:03:21'),
(60, NULL, 10, 'member-430725-1664517889-Andy Stranack.jpg', 'Andy Stranack', 'Conservative', NULL, '07816123204', 'andy.stranack@croydon.gov.uk', '@AndyStranack', 'active', '2022-09-30 05:04:49', '2022-09-30 05:04:49'),
(61, NULL, 9, 'member-256346-1664517951-Sue Bennett.jpg', 'Sue Bennett', 'Conservative', '02087680561', NULL, 'sue.bennett@croydon.gov.uk', NULL, 'active', '2022-09-30 05:05:51', '2022-09-30 05:05:51'),
(62, NULL, 9, 'member-1766-1664517994-Richard Chatterjee.jpg', 'Richard Chatterjee', 'Conservative', '02084056719', NULL, 'richard.chatterjee@croydon.gov.uk', NULL, 'active', '2022-09-30 05:06:34', '2022-09-30 05:06:34'),
(63, NULL, NULL, 'member-594941-1664518033-Mark Johnson.jpg', 'Mark Johnson', 'Conservative', NULL, '07716 092484', 'Mark.Johnson@croydon.gov.uk', NULL, 'active', '2022-09-30 05:07:13', '2022-09-30 05:07:13'),
(64, NULL, 7, 'member-839293-1664518225-Danielle Denton.jpg', 'Danielle Denton', 'Conservative', NULL, NULL, 'Danielle.Denton@Croydon.gov.uk', NULL, 'active', '2022-09-30 05:10:25', '2022-09-30 05:10:25'),
(65, NULL, 7, 'member-313467-1664518303-Maria Gatland.jpg', 'Maria Gatland', 'Conservative', '02084071327', NULL, 'maria.gatland@croydon.gov.uk', '@GatlandMaria', 'active', '2022-09-30 05:11:43', '2022-09-30 05:11:43'),
(66, NULL, 7, 'member-223661-1664518363-Michael Neal.jpg', 'Michael Neal', 'Conservative', '02086880429', NULL, 'michael.neal@croydon.gov.uk', '@MichaelNeal15', 'active', '2022-09-30 05:12:43', '2022-09-30 05:12:43'),
(67, NULL, 6, 'member-355831-1664518440-Louis Carserides.jpg', 'Louis Carserides', 'Labour', NULL, '07707277225', 'Louis.Carserides@croydon.gov.uk', '@LouisCarserides', 'active', '2022-09-30 05:14:00', '2022-09-30 05:14:00'),
(68, NULL, 6, 'member-797173-1664518481-Christopher Herman.jpg', 'Christopher Herman', 'Labour', NULL, '07716 092473', 'Christopher.Herman@croydon.gov.uk', NULL, 'active', '2022-09-30 05:14:41', '2022-09-30 05:14:41'),
(69, NULL, 6, 'member-800363-1664518524-Stella Nabukeera.jpg', 'Stella Nabukeera', 'Labour', NULL, '07716 092502', 'stella.nabukeera@croydon.gov.uk', NULL, 'active', '2022-09-30 05:15:24', '2022-09-30 05:15:24'),
(70, NULL, 5, 'member-595535-1664518581-Karen Jewitt.jpg', 'Karen Jewitt', 'Labour', '02086534331', NULL, 'karen.jewitt@croydon.gov.uk', '@CllrKarenJewitt', 'active', '2022-09-30 05:16:21', '2022-09-30 05:16:21'),
(71, NULL, 5, 'member-872218-1664518627-Tamar Nwafor.jpg', 'Tamar Nwafor', 'Labour', NULL, '0771 609 2468', 'Tamar.Nwafor@croydon.gov.uk', NULL, 'active', '2022-09-30 05:17:07', '2022-09-30 05:17:07'),
(72, NULL, 4, 'member-852848-1664518727-Rowenna Davis.jpg', 'Rowenna Davis', 'Labour', NULL, '07716 092481', 'rowenna.davis@croydon.gov.uk', '@RowennaDavis', 'active', '2022-09-30 05:18:47', '2022-09-30 05:18:47'),
(73, NULL, 4, 'member-447124-1664518772-Simon Fox.jpg', 'Simon Fox', 'Conservative', NULL, '07716 092503', 'Simon.Fox@croydon.gov.uk', NULL, 'active', '2022-09-30 05:19:32', '2022-09-30 05:19:32'),
(74, NULL, 4, 'member-829102-1664518818-Ellily Ponnuthurai.jpg', 'Ellily Ponnuthurai', 'Labour', NULL, '07716 092474', 'ellily.ponnuthurai@croydon.gov.uk', '@Ellily2', 'active', '2022-09-30 05:20:18', '2022-09-30 05:20:18'),
(75, NULL, 2, 'member-222518-1664518981-Amy foster.jpg', 'Amy Foster', 'Labour', NULL, '07716 092486', 'amy.foster@croydon.gov.uk', '@AmyF0ster', 'active', '2022-09-30 05:23:01', '2022-09-30 05:23:01'),
(76, 'Mayor', NULL, 'member-822613-1664536793-Jason Perry.jpg', 'Jason Perry', 'Conservative', '02032532017', NULL, 'Mayor@croydon.gov.uk', '@JasonForCroydon', 'active', '2022-09-30 06:19:53', '2022-09-30 06:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `links_cards`
--

CREATE TABLE `links_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links_cards`
--

INSERT INTO `links_cards` (`id`, `image1`, `title1`, `details1`, `link1`, `image2`, `title2`, `details2`, `link2`, `image3`, `title3`, `details3`, `link3`, `created_at`, `updated_at`) VALUES
(1, '1664368490-2.png', 'Advertise in Magazine', 'Achieve your business goals by broadcasting your brand, values, and offers across the London Borough of Croydon. The Green Guide Magazine delivers to over 150,000 households in the Croydon Borough.', 'magzine-design-book', '1664368490-3.png', 'Business Listing', 'Promote your business by registering on our online business directory, completely free. Engage with local residents within the London Borough of Croydon and create a new listing of your business today.', 'businessdirectory', '1664368490-1.png', 'Events Listing', 'Publish your listing for free on our events calendar to help promote your activity. A free resource for residents to identify local activities, pop-up’s and events in the London Borough of Croydon.', 'localevents', NULL, '2022-09-28 11:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `london_borough_comming_soon_form`
--

CREATE TABLE `london_borough_comming_soon_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magazine_highlights`
--

CREATE TABLE `magazine_highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazine_highlights`
--

INSERT INTO `magazine_highlights` (`id`, `image`, `title`, `category_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, '1664365623-Perfect_Binding_Brochure_Mockup_2.jpg', 'Puzzles', 'Competitions', '<p>Nopw</p>', 'active', '2022-07-21 02:21:23', '2022-09-28 10:47:03'),
(4, '1664365650-Perfect_Binding_vouchers.jpg', 'Vouchers', 'Discounts', '<p>No</p>', 'active', '2022-07-21 02:23:02', '2022-09-28 10:47:30'),
(5, '1664365677-Perfect_Binding_Brochure_Mockup_1.jpg', 'Councillors', 'Contact', '<p>No</p>', 'active', '2022-07-21 02:23:29', '2022-09-28 10:47:57'),
(6, '1664365805-Perfect_Binding_Brochure.jpg', 'Events', 'What\'s On', '<p>No</p>', 'deactive', '2022-07-21 02:23:54', '2022-09-28 10:50:05'),
(7, '1664365831-Perfect_Binding.jpg', 'Articles', 'Features', '<p>No</p>', 'active', '2022-07-21 02:24:17', '2022-09-28 10:50:31'),
(8, '1660561540-1646028345 1280-279253-538798184.png', 'Free directory Listing', 'world', '<p>no</p>', 'deactive', '2022-07-21 02:24:41', '2022-08-15 06:05:40'),
(9, '1664366006-Perfect_Binding_Brochure.jpg', 'Events', 'What\'s On', '<p>No</p>', 'active', '2022-07-21 02:25:06', '2022-09-28 10:53:26');

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
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(30, '2022_02_21_085517_admin', 1),
(31, '2022_02_22_060424_page_home', 2),
(32, '2022_02_22_080310_page_about', 3),
(33, '2022_02_22_102132_add_ab_image_to_page_about', 4),
(34, '2022_02_22_104941_page_contact', 5),
(35, '2022_02_22_115311_posts', 6),
(36, '2022_02_24_055855_page_advertise', 7),
(37, '2022_02_24_082651_page_businessdirectory', 8),
(38, '2022_02_24_101342_contact', 9),
(39, '2022_02_28_052221_page_greeninitiative', 10),
(40, '2022_02_28_054638_page_greeninitiative', 11),
(41, '2022_02_28_063008_page_coummunitygrowth', 12),
(42, '2022_02_28_080318_user_details', 13),
(43, '2022_02_28_103816_user_details', 14),
(44, '2022_03_01_054918_page_job', 15),
(45, '2022_03_01_065702_faqs', 16),
(46, '2022_03_07_071512_create_events_table', 17),
(47, '2022_03_07_083957_add_event_status_to_events_table', 18),
(48, '2022_03_07_084357_add_event_status_to_events_table', 19),
(49, '2022_03_09_060839_create_jobs_table', 20),
(50, '2022_03_09_104811_create_adverts_table', 21),
(51, '2022_03_09_110610_add_currency_to_adverts_table', 22),
(52, '2022_03_09_110853_add_currency_to_adverts_table', 23),
(53, '2022_03_10_074041_create__business_directorys_table', 24),
(54, '2022_03_10_075102_create_business_directorys_table', 25),
(55, '2022_03_12_114247_add_role_to_faqs', 26),
(56, '2022_03_12_130302_add_job_role_to_jobs', 27),
(57, '2022_03_12_130455_add_has_fork_lift_license_to_jobs', 27),
(58, '2022_03_12_130616_add_has_own_car_to_jobs', 27),
(59, '2022_03_14_053202_add_company_images_to_business_directorys', 28),
(60, '2022_03_14_053442_add_company_description_to_business_directorys', 28),
(61, '2022_03_14_061415_add_directory_status_to_business_directorys', 29),
(62, '2022_03_16_053752_create_directory_reviews_table', 30),
(63, '2022_03_16_065108_add_review_status_to_directory_reviews', 31),
(64, '2022_03_19_063122_create_reviews_reply_table', 32),
(65, '2022_03_24_061925_create_upcomming_issues_table', 33),
(66, '2022_03_25_100856_create_boroughs_table', 34),
(67, '2022_03_25_115841_create_design_books_table', 35),
(68, '2022_04_04_052534_advert_designs', 36),
(69, '2022_04_11_075830_create_feedback_table', 37),
(70, '2022_04_14_042633_create_giveaways_table', 38),
(71, '2022_07_21_062819_create_magazine_highlights_table', 39),
(72, '2022_07_21_070639_create_magazine_highlights_table', 40),
(73, '2022_07_22_045159_create_links_cards_table', 41),
(74, '2022_07_22_050409_create_links_cards_table', 42),
(75, '2022_07_22_103943_create_home_gallery_table', 43),
(76, '2022_08_16_052639_create_greenguide_team_table', 44),
(77, '2022_08_17_045635_create_page_magazine_competition_table', 45),
(78, '2022_08_17_054032_create_page_magazine_giveaway_table', 46),
(79, '2022_08_18_053805_create_page_feedback_table', 47),
(80, '2022_08_18_062816_create_distributors_table', 48),
(81, '2022_08_20_071603_create_website_froms_table', 49),
(82, '2022_08_23_060814_create_page_advert_design_table', 50),
(83, '2022_08_24_045329_create_page_advertise_in_magazine_table', 51),
(84, '2022_08_25_095514_create_page_archive', 52),
(85, '2022_09_12_074051_create_advertise_carousel_table', 52),
(86, '2022_09_13_052640_create_latest_issues_table', 53),
(87, '2022_09_13_100326_create_page_local_events_table', 54),
(88, '2022_09_29_053230_create_lgg_wards_list_table', 55),
(89, '2022_09_29_070140_create__lgg_ward_members_table', 56),
(90, '2022_09_29_071535_create_lgg_ward_members_table', 57),
(91, '2022_10_24_055614_create_london_borough_comming_soon_form_table', 58);

-- --------------------------------------------------------

--
-- Table structure for table `page_about`
--

CREATE TABLE `page_about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ab_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_desc1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_desc2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_box1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_box2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_box3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ab_company_qt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_about`
--

INSERT INTO `page_about` (`id`, `ab_image`, `ab_title`, `ab_desc1`, `ab_desc2`, `ab_box1`, `ab_box2`, `ab_box3`, `ab_company`, `ab_company_qt`, `created_at`, `updated_at`) VALUES
(1, '1645537329 4.png', 'Local Green Guide Ltd', '<p class=\"MsoNormal\">Local Green Guide Ltd has been trading as LGG Marketing, a <span style=\"color:#3C4043\">leaflet design, print and distribution company for the\r\nlast seven years.&nbsp; Our dedicated\r\nmanagement team has been working in the distribution industry for more than 3\r\ndecades and we work collaboratively with various local authorities,\r\ncommunication companies and well-known national brands. As our company has\r\nrapidly grown we have analysed the market to indicate new opportunities that our\r\nexperience and skill sets can flourish within.&nbsp;&nbsp;<o:p></o:p></span></p>', '<p class=\"MsoNormal\"><span style=\"mso-bidi-font-family:Calibri;mso-bidi-theme-font:\r\nminor-latin;color:#3C4043\">We’re excited to bring our door to door expertise\r\ninto the manufacturing and publication of residential magazines for every\r\nLondon Borough. The first dedicated residential magazine will be within the\r\nLondon Borough of Croydon. The high quality publication will be an accumulation\r\nof local news and information along with a business directory. As we continue\r\ndown this path we will strive to help our clients expand their customer base which\r\nwill be supported by our professional customer service. &nbsp;<o:p></o:p></span></p>', 'To empower residents to know who they can connect with, who they can go to and who they can turn to.', 'To actively seek marketing avenues that enhance our clients brand exposure through professional and transparent services.', 'To be environmentally responsible by replenishing that which we use.', 'Delivering 150,000+ Local Green Guide magazine across the London Borough of Croydon', '<p class=\"MsoNormal\">&nbsp;The Local Green Guide magazine will be hand delivered by our experienced door to door distribution teams. Our years of experience and expertise in the industry enable us full control from creation to delivery, no need to rely on third party companies. LGG Marketing have been delivering the Your Croydon newsletter on behalf of the Croydon Council for the last six years which means our delivery maps are refined and empower us to produce smooth delivery campaigns, every quarter.| The Local Green Guide Croydon magazine will be posted to the following households;&nbsp;| Addiscombe, Broad Green, Crystal Palace,&nbsp;Coulsdon, Croydon, Kenley, Norbury, Purley,&nbsp; Old Coulsdon, Sanderstead, Selhurst, Selsdon, South Croydon, South Norwood, Shirley, Thornton Heath, Upper Norwood, Waddon, Woodside&nbsp;| SW16, SE19, SE25, CR0, CR2, CR5, CR6, CR7, CR8&nbsp;|&nbsp;</p>\r\n\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></p>', NULL, '2022-10-24 08:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `page_advertise`
--

CREATE TABLE `page_advertise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `add_hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_sec2_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_sec2_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_sec2_image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_sec2_image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_carusel_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_pathway_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_pathway_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_pathway_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_prices_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_service_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_service_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_services_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_upcomming_issue_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_benifits_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_benifits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_prices_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_booking_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_booking_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_further_info_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_further_info_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_advertise`
--

INSERT INTO `page_advertise` (`id`, `add_hero_image`, `ad_title`, `ad_subtitle`, `ad_sec2_heading`, `ad_sec2_desc`, `ad_sec2_image1`, `ad_sec2_image2`, `add_carusel_bg_image`, `ad_pathway_heading`, `ad_pathway_desc`, `ad_pathway_image`, `add_prices_heading`, `add_service_title`, `ad_service_desc`, `add_services_images`, `add_upcomming_issue_content`, `ad_benifits_title`, `ad_benifits`, `ad_prices_desc`, `add_booking_title`, `add_booking_desc`, `add_further_info_text`, `add_further_info_image`, `created_at`, `updated_at`) VALUES
(1, '1645685536 advertise.jpg', 'Local Green Guide magazine', 'Discover the potential of exceptional advertising', 'Why Advertise within the Local Green Guide magazine?', '<p><span style=\"color:#e74c3c\"><strong>READERSHIP</strong> </span>- Packed with useful features such as community news, events, local people of interest articles, competitions and giveaways which will bring value and increase retention of the magazine.| <strong><span style=\"color:#e74c3c\">EXPOSURE</span>&nbsp;</strong>- Posted to households throughout the London Borough of Croydon, that&#39;s brand exposure to over 150,000 households.| <strong><span style=\"color:#e74c3c\">ACCESSIBILITY</span>&nbsp;</strong>- Your advertisement can reach new audiences, particularly residents who do not regularly access online content. | <strong><span style=\"color:#e74c3c\">CONNECT</span>&nbsp;</strong>- Communicate directly to new and existing customers in the London Borough of Croydon. |&nbsp;<strong><span style=\"color:#e74c3c\">TRUST</span>&nbsp;</strong>- Rest assured the magazine will be delivered by experienced distribution teams because we&#39;ve been posting Your Croydon newsletter on behalf of Croydon Council for the last six years.&nbsp;</p>', '1664377127-Navy & Turquoise Modern Business Flyer Potrait (10.5 × 14.8 cm) (1).png', '1664376708-_Green Guide AD Champ for website (600 × 788 px) (4).png', '1664378818-PXL_20220128_152456940.jpg', 'Pathway for community growth', '<p>Filled with articles, news and events, a valuable and informative resource for local residents.| Connecting local residents with services and products available in their borough.| Advertisement within the Green Guide magazine will include a FREE premium listing in the Green Guide online local directory. This will direct more traffic to you and ensure your company&rsquo;s positioned as a key player in the local area. | Every quarter the Local Green Guide Croydon magazine will be posted to the following areas; Addiscombe, Broad Green, Crystal Palace, Coulsdon, Croydon, Kenley, Norbury, Purley, Old Coulsdon, Sanderstead, Selhurst, South Croydon, South Norwood, Shirley, Thornton Heath, Upper Norwood, Waddon, Woodside. SW16, SE19, SE25, CR0, CR2, CR5, CR6 C7, CR8</p>', '1664465419-Untitled design (9).png', 'Magazine Advertisement Prices', 'Advertisement Sizes', '<p>We offer a wide range of advertisement sizes to fit any budget.</p>', '[{\"name\":\"5391664463199851.png\"},{\"name\":\"5721664463199465.png\"},{\"name\":\"5821664463199296.png\"},{\"name\":\"4501664463199146.png\"},{\"name\":\"6181664463199628.png\"},{\"name\":\"7211664463199967.png\"}]', '<h1><span style=\"font-size:48px\"><span style=\"color:#000033\">Upcoming Issues</span></span></h1>\r\n\r\n<p>The Green Guide magazine is a unified publication of local messages, community initiatives and a business directory. Connecting residents with their local market to establish a pathway for community growth. Download the latest issue or access our archives.</p>', 'Benefits of advertising within the Green Guide Croydon magazine', '<p>Low cost marketing approach with various advert sizes for any budget.| High exposure rate with the magazine being posted by our own experienced distribution teams to ~156,000 households.| Your advert will be displayed within a high-quality publication.| User friendly magazine will enable the reader to locate your advert in a quick, hassle free manner.| When an advert is secured within our magazine your business will receive a premium online listing within our business directory.| Online access which will include, downloadable magazines, business directory and events calendar. Provide important information and messages to enhance readership of the magazine.</p>', '<p>Local Green Guide Magazine is a high quality, informative magazine that is posted to households across the London Borough of Croydon on a quarterly basis.</p>', 'Book your advertisement space', '<p><span style=\"font-size:18px\"><strong>Don&#39;t miss your opportunity to advertise to residents across the London Borough of Croydon.&nbsp;</strong></span></p>', '<p><strong>For further information about Local Green Guide Croydon magazine,</strong>&nbsp;download our Media Pack here.</p>', '1662964268 book-cover.png', NULL, '2022-09-29 14:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `page_advertise_in_magazine`
--

CREATE TABLE `page_advertise_in_magazine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sec1_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec1_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec2_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec3_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec3_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec4_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec4_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec5_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec5_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_advertise_in_magazine`
--

INSERT INTO `page_advertise_in_magazine` (`id`, `sec1_image`, `sec1_content`, `sec2_content`, `sec3_image`, `sec3_content`, `sec4_image`, `sec4_content`, `sec5_image`, `sec5_content`, `created_at`, `updated_at`) VALUES
(1, '1661318503 advertise-in-design.jpg', '<h2 style=\"text-align:center\">Green Guide Croydon Magazine</h2>\r\n\r\n<p><span style=\"font-size:16px\">We&#39;re helping build lives and livelihoods by combining our specialist knowledge in distribution with close collaborations with businesses to help local residents discover what amenities and services are at their disposal. The Green Guide Magazine will be posted to residents based in the London Borough of Croydon (~156,000 households) with the aim to help build community growth.</span></p>', '<h2 style=\"text-align:center\">Upcoming Issues</h2>\r\n\r\n<p><span style=\"font-size:16px\">The Green Guide magazine is a quarterly publication of local messages, community initiatives and a business directory which will be distributed across the London Borough of Croydon. We offer a range of advert sizes to accommodate any marketing budget.</span></p>', '1661318503 advertise-in-design.jpg', '<h2 style=\"text-align:center\">High exposure, low cost marketing approach</h2>\r\n\r\n<p><span style=\"font-size:16px\">Green Guide Magazine is a high quality, informative magazine that is posted to residents of the London Borough of Croydon on a quarterly basis. Take advantage of this amazing marketing avenue by placing your advert in a high exposure magazine that is delivered to ~156,000 households.</span></p>', '1661318503 advertise-in-design.jpg', '<h2 style=\"text-align:center\">Increase Your Sales</h2>\r\n\r\n<p><span style=\"font-size:16px\">A magazine delivers informative and useful information to the local resident which drives, brand awareness. Green Guide is a product that is focussed on building relationships with the audience which increases the level of trust for the adverts displayed within and exposes the businesses to a high volume of potential, customers.</span></p>', '1661318503 advertise-in-design.jpg', '<h2 style=\"text-align:center\">Premium Advert Designs</h2>\r\n\r\n<p><span style=\"font-size:16px\">Our professional designers can create a powerful and engaging advertisement at a low cost. All ads are printed on paper with a glossy finish to produce high quality advertisements. To ensure a memorable advert a sleek and creative design with a targeted message can help your brand flourish.</span></p>', NULL, '2022-08-24 00:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `page_advert_design`
--

CREATE TABLE `page_advert_design` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_sec_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_sec_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_sec_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_to_sec_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_to_sec_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_to_sec_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advertorial_sec_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advertorial_sec_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `advertorial_sec_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cards_section_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `artwork_specifications` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `advert_sizes_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section4_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section4_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_advert_design`
--

INSERT INTO `page_advert_design` (`id`, `hero_title`, `hero_subtitle`, `hero_image`, `section2_heading`, `section2_text`, `section2_image`, `content_sec_title`, `content_sec_desc`, `content_sec_image`, `call_to_sec_title`, `call_to_sec_desc`, `call_to_sec_image`, `advertorial_sec_title`, `advertorial_sec_desc`, `advertorial_sec_image`, `cards_section_text`, `design_images`, `artwork_specifications`, `advert_sizes_images`, `section3_heading`, `section3_text`, `section4_heading`, `section4_text`, `created_at`, `updated_at`) VALUES
(1, 'Advert Design', 'Check out our helpful design features and specificatons or if you don’t have artwork ready we can create for you.', '1661236938 book-mockup-with-minimal-design_23-2149350413.webp', 'Your Advert Design', '<p>Readers and customers want an advert to catch their eye and we recommend that your advert consists of content that a reader can gain useful information from. To maximise your exposure we recommend that your advert;</p>\r\n\r\n<ul>\r\n	<li>Be original.</li>\r\n	<li>High-quality images and content.</li>\r\n	<li>Insightful content with the subliminal impact of selling a product or service.</li>\r\n	<li>Call to action</li>\r\n	<li>Trackable code to measure your ROI</li>\r\n</ul>', '1664465986-Untitled design (9).png', 'Content', '<p>An essential element of your design is, the content. The core message that the reader will take away from your advertisement needs to be strong, bold and succinct. Your message needs to be easily digestible and informative, include key details and unique selling points that set you apart from your competitors and attract the interest from potential new customers. Advertising in the Local Green Guide Croydon is a fantastic opportunity to share your company story to residents across the London Borough of Croydon.</p>', '1664776063-1664465986-Untitled design (9).png', 'Call To Action', '<p>A powerful call to action can enhance your advertisement because it prompts the reader further. This can be in the form of a QR code, social links, discount code, promotional give-away, even the use of the word FREE can have a massive impact of interaction between your advertisement and the reader. A call to action can build a bridge between print media and digital technology or be a clever way to track the response from your advertisement in the form of a unique code.</p>\r\n\r\n<p>Secured advertisement spaces within the Local Green Guide Croydon magazine have the bonus benefit of free premium listing on our online business directory for the duration the issue is live, that&rsquo;s additional digital exposure for your business.</p>', '1664776063-1664465986-Untitled design (9).png', 'Advertorial', '<p>An advertorial is a great promotional tool to increase interest and sales. The content is focussed on the company story and educating prospective customers about the features of your product or service. You provide value first that benefits a reader, then channel them towards the sale. Readers generally pay greater attention to an advertorial than a traditional advertisement and it may be an effective way for you to market your company.</p>', '1664776063-1664465986-Untitled design (9).png', 'Maximise your exposure and capture the readers eye by using high quality images and vibrant colours. Make your advertisement pop out of the page.', '[{\"name\":\"4971664777531139.jpg\"},{\"name\":\"3671664777531573.jpg\"},{\"name\":\"2651664777531181.jpg\"},{\"name\":\"172166477753151.jpg\"},{\"name\":\"6091664777531232.jpg\"},{\"name\":\"5361664777531504.jpg\"}]', '<h2><span style=\"font-size:36px\"><span style=\"font-family:Calibri\"><span style=\"font-family:Calibri\">&nbsp;Artwork Specifications </span></span></span></h2>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri\">High Resolution: 300dpi</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri\">CMYK Format</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri\">Artwork submission format should be in PDF, EPS, JPEG. </span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri\">3mm bleed around your artwork </span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Calibri\">Email artwork to </span><a href=\"mailto:artwork@localgreenguide.com\"><u><span style=\"font-family:Calibri\"><span style=\"color:#0563c1\"><u>artwork@localgreenguide.com</u></span></span></u></a><span style=\"font-family:Calibri\">&nbsp;by artwork submission deadline, if artwork exceeds 20mb then send us a link of a shared folder such as dropbox, googledrive etc </span></span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; font-family:&quot;Times New Roman&quot;; font-size:13px; margin-left:9px; margin-right:9px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:109px\">\r\n			<p style=\"text-align:center\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Advert Size</span></span></span></span></strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:146px\">\r\n			<p style=\"text-align:center\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Artwork Dimensions </span></span></span></span></strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:109px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Voucher</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:146px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">70x42mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:109px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">A6</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:146px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">105 x148mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:109px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">A5</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:146px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">148x210mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:109px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">A4</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:146px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">210x297mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:109px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Double Spread</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:146px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">297x420mm</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:none; font-family:&quot;Times New Roman&quot;; font-size:13px; margin-left:9px; margin-right:9px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:72px\">\r\n			<p style=\"text-align:center\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Issue</span></span></span></span></strong></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:136px\">\r\n			<p style=\"text-align:center\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Artwork Deadlines</span></span></span></span></strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:72px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Q2 2023</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:136px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">6</span></span><sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">TH</span></span></sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">&nbsp;February 2023</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:72px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Q3 2023</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:136px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">8</span></span><sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">th</span></span></sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">&nbsp;May 2023</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:72px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Q4 2023</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:136px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">14</span></span><sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">th</span></span></sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">&nbsp;August 2023</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:72px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">Q1 2024</span></span></span></span></p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:136px\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">6</span></span><sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">th</span></span></sup><span style=\"font-size:11.0000pt\"><span style=\"font-family:Calibri\">&nbsp;November 2023</span></span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>\r\n\r\n<h2><span style=\"font-size:36px\"><span style=\"font-family:Calibri\"><span style=\"font-family:Calibri\">Our Design Prices </span></span></span></h2>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri\"><span style=\"font-family:Calibri\">Don&rsquo;t have your own artwork, no problem. One of our professional designers can create you a eye catching advertisement </span></span></span></p>\r\n\r\n<p>&nbsp;</p>', '[{\"name\":\"4651664778822475.png\"},{\"name\":\"8351664778822482.png\"},{\"name\":\"2451664778822895.png\"},{\"name\":\"4821664778822352.png\"},{\"name\":\"3021664778822540.png\"}]', 'Advert Design Prices', '<p>We offer design service for your magazine advertisement. Let us know the size of your advert and we will create a fabulous and vibrant design to promote your company.&nbsp;&nbsp;</p>\r\n\r\n<p>In printed magazines, your adverts can reach new audiences, particularly local residents who do not regularly access online content.</p>', 'Upcoming Issues', '<p>The Green Guide magazine is a unified publication of local messages, community initiatives and a business directory. Connecting residents with their local market to establish a pathway for community growth. Download the latest issue or access our archives.</p>', NULL, '2022-10-03 01:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `page_archive`
--

CREATE TABLE `page_archive` (
  `id` int(11) NOT NULL,
  `hero_image` varchar(255) NOT NULL,
  `hero_heading` varchar(255) NOT NULL,
  `hero_subheading` varchar(255) NOT NULL,
  `sec1_image` varchar(255) NOT NULL,
  `sec1_content` text NOT NULL,
  `sec2_content` text NOT NULL,
  `sec2_table` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_archive`
--

INSERT INTO `page_archive` (`id`, `hero_image`, `hero_heading`, `hero_subheading`, `sec1_image`, `sec1_content`, `sec2_content`, `sec2_table`) VALUES
(1, '1663046504 1645685536 advertise.jpg', 'Green Guide Archives', 'Discover the potential of exceptional advertising', '1661508495 advertise-in-design.jpg', '<h2 style=\"text-align:center\"><span style=\"font-size:28px\">Green Guide Croydon Magazine</span></h2>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">We&#39;re helping build lives and livelihoods by combining our specialist knowledge in distribution with close collaborations with businesses to help local residents discover what amenities and services are at their disposal. The Green Guide Magazine will be posted to residents based in the London Borough of Croydon (~156,000 households) with the aim to help build community growth.</span></p>', '<h2><span style=\"font-size:28px\">Upcoming Issues</span></h2>\r\n\r\n<h2><span style=\"font-size:16px\">The Green Guide magazine is a quarterly publication of local messages, community initiatives and a business directory which will be distributed across the London Borough of Croydon. We offer a range of advert sizes to accommodate any marketing budget.</span></h2>', '<div class=\"table-responsive\">\r\n<table class=\"table text-white\">\r\n	<thead>\r\n		<tr>\r\n			<th>Issue</th>\r\n			<th>Artwork and Payment Deadline</th>\r\n			<th>Distribution Commencement</th>\r\n			<th>Book</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Christmas Special</td>\r\n			<td>1st Oct 2022</td>\r\n			<td>1st Nov 2022</td>\r\n			<td><a class=\"btn btn-primary\" href=\"/advert-design-book/#book__addvertise\">Book Now</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Spring 2023</td>\r\n			<td>15th Feb 2023</td>\r\n			<td>15th Mar 2023</td>\r\n			<td><a class=\"btn btn-primary\" href=\"/advert-design-book/#book__addvertise\">Book Now</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Summer 2023</td>\r\n			<td>15th May 2023</td>\r\n			<td>15th Jun 2023</td>\r\n			<td><a class=\"btn btn-primary\" href=\"/advert-design-book/#book__addvertise\">Book Now</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `page_businessdirectory`
--

CREATE TABLE `page_businessdirectory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bd_hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_cat_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_cat_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec2_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec2_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_sec_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_sec3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_sec3_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_sec3_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_join_comunity_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_join_comunity_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_call_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_contact_form_side_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_businessdirectory`
--

INSERT INTO `page_businessdirectory` (`id`, `bd_hero_image`, `bd_title`, `bd_cat_title`, `bd_cat_desc`, `sec2_title`, `sec2_desc`, `sec2_image`, `categories_sec_title`, `bd_sec3_title`, `bd_sec3_desc`, `bd_sec3_image`, `bd_join_comunity_title`, `bd_join_comunity_desc`, `bd_call_label`, `bd_phone`, `bd_date`, `bd_contact_form_side_image`, `created_at`, `updated_at`) VALUES
(1, '1645693562 business-bg.jpg', 'Local Green Guide Directory', 'DIRECTORY CATEGORIES', 'Need to find a local business? We have a wide range of businesses registered on the Green Guide business directory.', 'Register Your Business', '<p>Want to expand your exposure to the Green Guide community? If you&#39;re a business owner and would like to add your business to the Green Guide directory, then register for FREE. We want to build an expansive business directory that offers free exposure for local businesses and provides an easy and helpful resource for local residents. Our online business directory listing form will only take a few minutes to complete and is easy to use. When you have submitted the listing it will be reviewed and if accepted will be published live onto the Green Guide website.</p>', '1660803730 BG_Register_your_business.png', '<h2><span style=\"color:#dddddd\">Business Categories&nbsp;<span style=\"font-size:16px\">What&#39;s on offer</span></span></h2>', 'Green Guide Croydon Magazine', '<p>A high quality A4 residential magazine delivered to household across the entire London Borough of Croydon. The Local Green Guide Croydon magazine will be a unified publication of local messages, community initiatives and a business directory. We want to connect residents with their local market in order to establish a pathway for community growth.&nbsp;</p>', '1645693562 business-directory-img1.png', 'Join our Community', '<p style=\"text-align:justify\">We want to eanble residents to know who they can go to, who they can turn</p>\r\n\r\n<p style=\"text-align:justify\">to and to connect with, that&#39;s our route to community growth.</p>\r\n\r\n<p style=\"text-align:justify\">Register your business, organization or community group today.</p>', 'or call', '0203 773 5835', 'Mon to Fri, 9am to 6pm', '1663220419-contact-us.jpg', NULL, '2022-09-29 16:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `page_communitygrowth`
--

CREATE TABLE `page_communitygrowth` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cg_hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cg_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cg_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cg_sec2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cg_sec2_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cg_sec2_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cg_sec3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cg_sec3_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_communitygrowth`
--

INSERT INTO `page_communitygrowth` (`id`, `cg_hero_image`, `cg_title`, `cg_subtitle`, `cg_sec2_title`, `cg_sec2_desc`, `cg_sec2_image`, `cg_sec3_title`, `cg_sec3_desc`, `created_at`, `updated_at`) VALUES
(1, '1646378562 group-three-modern-architects-min.jpg', 'Pathway for community growth', 'Green Guide Magazine', 'Quarterly Residential Magazine for the London Borough of Croydon', '<p>The team at LGG Marketing are pleased to announce the launch of a borough wide residential magazine across the entire Croydon Borough. The Green Guide magazine will be a unified publication of local messages, community initiatives and a business directory. We want to connect residents with their local market in order to establish a pathway for community growth.</p>', '1657688978 3256925.jpg', 'Advantages of working together with Green Guide team', 'The Green Guide Magazine is a one-stop-shop for design, print and distribution, giving residents and businesses a single point of contact, reducing stress and giving you are more fluid, more streamlined marketing process. | The Green Guide is a high-end quality printed magazine which has many useful features for residents, thus it is designed to ensure that residents keep it. | It is usually the case that, when canvassing local houses, you will have to deal with complaints pertaining to distribution, most of which have nothing to do with the brand or services offered. When advertising in the Green Guide, however, this is not the case. In fact, residents will get in touch with the Green Guide customer service team if they have any complaints with distribution. Our friendly, professional customer service team will respond and resolve any complaints that may arise. | The Green Guide campaign can be accessed via the online portal system, where you can locate daily reports, local distribution maps and other information pertaining to distribution that can enable local residents to track and calculate responses. | As well as creating a listing in the Green Guide magazine, businesses will also be given a FREE premium listing in the Green Guide online local directory. This will direct more traffic to you and ensure your company&rsquo;s position as a key player in the local area that is well-known to local residents. | Although it differs on the volumes used, the Green Guide will be an excellent, cost-effective addition to your marketing mix.', NULL, '2022-07-13 00:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `page_contact`
--

CREATE TABLE `page_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp_checkbox_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp_bottom_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_team_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_team_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_team_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_media_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_media_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finance_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finance_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operations_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operations_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hr_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contact`
--

INSERT INTO `page_contact` (`id`, `contact_hero_image`, `contact_title`, `contact_sub_title`, `contact_desc`, `contact_map`, `otp_checkbox_text`, `otp_bottom_text`, `contact_team_title`, `contact_team_desc`, `contact_team_bg_image`, `contact_media_title`, `contact_media_desc`, `finance_email`, `finance_phone`, `design_email`, `design_phone`, `operations_email`, `operations_phone`, `customer_email`, `customer_phone`, `sales_email`, `sales_phone`, `hr_email`, `hr_phone`, `facebook`, `skype`, `twitter`, `instagram`, `linkdin`, `youtube`, `vimeo`, `created_at`, `updated_at`) VALUES
(1, '1646374181 contact-us-hero.jpg', 'We’d Love to Hear From You', 'GET IN TOUCH', '&nbsp; &nbsp;', '<iframe\r\n                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.241881356656!2d-0.050808684338578!3d51.61877817965347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761e8ae036c7b1%3A0x85f7847126c3629f!2sLocal%20Green%20Guide%20Ltd%20-%20LGG%20Marketing!5e0!3m2!1sen!2s!4v1639087067763!5m2!1sen!2s\"\r\n                        style=\"border:0;widows: 100% !important; height: 50vh !important;\" allowfullscreen=\"\"\r\n                        loading=\"lazy\"></iframe>', 'I understand that when I click submit I will no longer receive the Local Green Guide magazine', '<h3><span style=\"font-size:22px\"><strong>Not happy about something?</strong></span></h3>\r\n\r\n<p><span style=\"font-size:16px\">Fill in the form to the left and our professional customer service team will be in touch. </span></p>\r\n\r\n<p><span style=\"font-size:16px\">If you wish to no longer recieve the Local Green Guide magazine please complete the opt out form below.&nbsp;</span></p>', 'Local Green Guide Team', 'You can rely on our amazing, professional and friendly customer service team.', '1663133771-our-team-bg.jpg', 'Media Partnerships', 'We love to support local events and have been chosen to be media partners for many of the best local festivals and events. The best partnerships include advertising, competitions, editorial, online and engagement at events.', 'accounts@localgreenguide.com', '02037735835', 'design@localgreenguide.com', '02037735835', 'magazine@localgreenguide.com', '02037735835', 'info@localgreenguide.com', '02037735835', 'sales@localgreenguide.com', '07846 639436', 'hr@localgreenguide.com', '07484 795416', 'https://facebook.com/profile.php?id=100083758106281', NULL, 'https://twitter.com/lggmarketing?lang=en', 'https://https://instagram.com/greenguide_magazine/', 'https://example.com', NULL, NULL, NULL, '2022-10-06 07:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `page_feedback`
--

CREATE TABLE `page_feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_feedback`
--

INSERT INTO `page_feedback` (`id`, `hero_title`, `hero_subtitle`, `hero_image`, `section2_heading`, `section2_text`, `created_at`, `updated_at`) VALUES
(1, 'Green Guide Feedback', 'Green Guide Feedback', '1660802741 smile-face-green-ball-with-golden-five-stars-customer-client-survey-satisfaction-after-use-product-service-concept-by-3d-render_616485-67.webp', 'Feedback Form', '<p>We would love to hear your thoughts, suggestionsm concerns and problems with anything so we can improve!</p>', NULL, '2022-08-18 01:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_greeninitiative`
--

CREATE TABLE `page_greeninitiative` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gi_hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_magazine_printed_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_magazine_printed_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_trees_planted_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_trees_planted_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_greenguide_box_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_greenguide_box_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_greenguide_forest_box_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_greenguide_forest_box_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec2_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec2_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec3_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec4_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec4_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec4_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec5_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec5_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec6_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec6_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gi_sec6_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_greeninitiative`
--

INSERT INTO `page_greeninitiative` (`id`, `gi_hero_image`, `gi_title`, `gi_subtitle`, `gi_desc`, `gi_magazine_printed_title`, `gi_magazine_printed_count`, `gi_trees_planted_title`, `gi_trees_planted_count`, `gi_greenguide_box_heading`, `gi_greenguide_box_content`, `gi_greenguide_forest_box_heading`, `gi_greenguide_forest_box_content`, `gi_sec2_title`, `gi_sec2_desc`, `gi_sec2_image`, `gi_sec3_title`, `gi_sec3_desc`, `gi_sec4_title`, `gi_sec4_desc`, `gi_sec4_image`, `gi_sec5_title`, `gi_sec5_desc`, `gi_sec6_title`, `gi_sec6_desc`, `gi_sec6_image`, `created_at`, `updated_at`) VALUES
(1, '1646028345 plainting-tree.jpg', 'We’re Doing Our Part To Care For The Earth', 'Trees planted with Forest Nation.', '1 tree replanted every 7535 pieces of media postedObjective is to replant a tree every 10000 pieces of media posted', 'Green Guide Magazine Printed', '156,000', 'TOTAL TREES PLANTED TO DATE', '15', 'Track the offset with trees planted with Forest Nation.', '<p style=\"text-align:center\"><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/green-guide-logo.png\" style=\"height:69px; width:120px\" /></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:22px\"><strong>&nbsp; &nbsp;Green Guide</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:22px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/edenproject-150x150.png\" style=\"height:70px; margin:0px 15px; width:70px\" /></strong></span><strong><span style=\"font-size:24px\">100</span>&nbsp;</strong><span style=\"font-size:24px\">|</span>&nbsp;<span style=\"font-size:16px\">Trees Planted</span></h2>\r\n\r\n<p style=\"text-align:center\"><strong><span style=\"font-size:22px\"><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/edenproject-150x150.png\" style=\"height:70px; margin:0px 15px; width:70px\" /></span><span style=\"font-size:24px\">3.75&nbsp;</span></strong><span style=\"font-size:24px\">|</span>&nbsp;<span style=\"font-size:16px\">Tons of CO2 absorbed yearly</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:22px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/edenproject-150x150.png\" style=\"height:70px; margin:0px 15px; width:70px\" /></strong></span><strong><span style=\"font-size:24px\">15.00&nbsp;</span></strong><span style=\"font-size:24px\">|</span>&nbsp;<span style=\"font-size:16px\">Tons of Oxygen created yearly</span></p>', 'Help fund our reforestation project', '<p style=\"text-align:center\"><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/green-guide-logo.png\" style=\"height:69px; width:120px\" /></p>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:22px\"><strong>&nbsp; &nbsp;Green Guide&nbsp;</strong></span></div>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:22px\"><strong>Forest</strong></span></div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:22px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/edenproject-150x150.png\" style=\"height:70px; margin:0px 15px; width:70px\" /></strong></span><strong><span style=\"font-size:24px\">100</span>&nbsp;</strong><span style=\"font-size:24px\">|</span>&nbsp;<span style=\"font-size:16px\">Trees Planted</span></h2>\r\n\r\n<p style=\"text-align:center\"><strong><span style=\"font-size:22px\"><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/edenproject-150x150.png\" style=\"height:70px; margin:0px 15px; width:70px\" /></span><span style=\"font-size:24px\">3.75&nbsp;</span></strong><span style=\"font-size:24px\">|</span>&nbsp;<span style=\"font-size:16px\">Tons of CO2 absorbed yearly</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:22px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/front/img/edenproject-150x150.png\" style=\"height:70px; margin:0px 15px; width:70px\" /></strong></span><strong><span style=\"font-size:24px\">15.00&nbsp;</span></strong><span style=\"font-size:24px\">|</span>&nbsp;<span style=\"font-size:16px\">Tons of Oxygen created yearly</span></p>', 'RECYCLING & ENVIRONMENT', '<p>Green Guide Ltd recognises the impact we have on the environment and acknoweldge our responsibility to improve it. We replant trees through our green partners to offset the production of the magazines. We hope that the Green Guide magazine reduces the number of leaflets going through residential letterboxes and that residents retain the magazine for a longer period of time because of useful information within. We will continue to develop and expand our environmental policies to ensure that we leave for our children, the same if not more than what was left for us&nbsp;</p>', '1646028345 1280-279253-538798184.png', 'RECYCLING & ENVIRONMENT', '<p>We at LGG Marketing understand our corporate responsibility on the importance of recycling because if done incorrectly it has a negative impact on our natural environment (OUR HOME). From our inception and for the duration of our company model, we will continue to play our part, along with other like minded organisations and on behalf of our clients, local councils and local residents to ensure we offset as much of our carbon footprint as possible. we will help keep the public informed of the latest recycling innovations known at the time.&nbsp;</p>', 'REFORESTATION AND ENVIRONMENT POLICY', '<p>We at LGG Marketing have decided to offset our carbon footprint and that of our clients, local councils and local residents by supporting as well as PARTICIPATING in various reforestation programs. At present we support and work with<strong> Forest Nation.&nbsp;<br />\r\nPlease click on the label above to more about what we do as well as to help towards the reforestation program yourself. It&#39;s easier to help and do your part for the environment than you may think.&nbsp;</strong></p>', '1646028345 3.png', 'CARBON OFFSET', '<p>The global target or scientific consensus at present is to aim to reduce our combined carbon emissions by 80 % by 2050. This reduction will avoid a temperature rise of more than 2 degrees Celsius, the smallest of offsetting activities will eventually prove to be important.<br />\r\nCarbon offsetting is a process of delivering/raising finance for essential renewable energy, forestry and resource conservation projects which generate reductions in greenhouse gas emissions. In order to ensure this finance delivers genuine results, the projects which are supported must be high quality and &ldquo;additional&rdquo; &ndash; (i.e they will not come to fruition without the need for carbon offsetting).<br />\r\nAll potential carbon offsetting projects must follow a comprehensive set of validation procedures to demonstrate that they are generating emission reductions and they are also monitored on a regular basis by independent third parties that don&rsquo;t have a vested interest otherwise.</p>', 'ECO FRIENDLY', '<p>At LGG Marketing we believe in being eco-friendly and have branded ourselves in healthy, rich, replenishing GREEN. As such we constantly engage in eco-friendly habits on a day to day basis such as using programmable thermostats so we only use heating or cooling when the premises is occupied as well as using recycled paper for internal printing.</p>\r\n\r\n<p><strong>Our premises are supplied by 100% renewable electricity and our vehicles have BlueEfficiency technology. </strong></p>\r\n\r\n<p>Please watch this space as we shall begin to list eco-friendly habits for all i.e both for residents as well as businesses to look at and see which you can apply to your day to day&nbsp;</p>', '1646028345 4@2x.png', NULL, '2022-09-30 03:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `page_home`
--

CREATE TABLE `page_home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_animated_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight_link_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b1_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b1_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b2_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b3_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b4_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b4_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b5_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b5_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_home`
--

INSERT INTO `page_home` (`id`, `hero_image`, `hero_title1`, `hero_title2`, `hero_animated_title`, `highlight_title`, `highlight_link_text`, `post_category_title1`, `post_category_title2`, `post_category_title3`, `post_category_image1`, `post_category_image2`, `post_category_image3`, `b1_title`, `b1_image`, `b2_title`, `b2_image`, `b3_title`, `b3_image`, `b4_title`, `b4_image`, `b5_title`, `b5_image`, `dir_title`, `dir_desc`, `created_at`, `updated_at`) VALUES
(1, '1660900390-herohome.jpg', 'Green Guide Croydon Magazine', 'We want to empower', 'residents to know who they can|go to.|turn to.|connect with.', 'Magazine Highlights', 'Advertise in Magazine', 'Spotlights', 'Companies', 'LGG Team', '1660900775-1645600589 4.png', '1660892929 1645600499 1.png', '1660892929 1645600616 2.png', 'Pathway for community growths', '', 'Produced and distributed by LGG', '', 'Borough wide quarterly residential magazine', '', 'Less waste more trees', '', 'Your Local Market', '', 'Business Directory', 'A local magazine enables you to communicate directly to potential customers in the local area..', NULL, '2022-09-28 11:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `page_job`
--

CREATE TABLE `page_job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec2_image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec2_image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec2_sdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec2_ldesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec3_sdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec4_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sec4_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_steps_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_step1_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_step2_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_step3_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_apply_form_left_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_job`
--

INSERT INTO `page_job` (`id`, `job_hero_image`, `job_title`, `job_subtitle`, `job_sec2_title`, `job_sec2_image1`, `job_sec2_image2`, `job_sec2_sdesc`, `job_sec2_ldesc`, `job_sec3_title`, `job_sec3_sdesc`, `job_sec4_title`, `job_sec4_subtitle`, `job_steps_bg_image`, `job_step1_text`, `job_step2_text`, `job_step3_text`, `job_apply_form_left_content`, `created_at`, `updated_at`) VALUES
(1, '1646398083 2107.q702.013.S.m005.c10.job search illustration-min.jpg', 'Leaflet Distributor', 'Join the Green Guide team TODAY', 'JOIN THE GREEN GUIDE TEAM', '1646116277 rsz_door-to-door-distributions-team.jpg', '1646116277 right-direction.jpg', '<p>We have a wide variety of job roles available within our fast growing company which include:</p>\r\n\r\n<ul>\r\n	<li>Leaflet Distributor Jobs in London</li>\r\n	<li>Distribution Manager Jobs in London</li>\r\n	<li>Warehouse Assistant Jobs in London</li>\r\n	<li>Admin Based Jobs&nbsp;in London</li>\r\n</ul>', '<p>If you are honest, hardworking and</p>\r\n\r\n<p>can work as part of a team then JOIN US today. All you need to do is</p>\r\n\r\n<p>fill out our application form and someone will be in contact.</p>', 'Are you still interested?', 'If you’re still interested in applying for a job with Local Green Guide, simply fill out the form on this page to begin the application process.', 'How our recruitment process works:', 'Here are the next steps to start earning money within days!', '1663055265 Area-we-cover-1.jpg', 'Fill out our online application form', 'Successful candidates are provided an in-person interview', 'Trial day – start to earn money', '<p><span style=\"font-size:18px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/uploads/icons/1.png\" style=\"float:left; height:45px; margin-top:-10px; margin:-10px 10px; width:45px\" /></strong></span><span style=\"font-size:18px\"><strong>Immediate Start</strong></span> &ndash;&nbsp;Interviews available daily</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/uploads/icons/2.png\" style=\"float:left; height:45px; margin:0px 10px; width:45px\" /></strong></span><span style=\"font-size:18px\"><strong>Job Growth </strong></span>&ndash;&nbsp;Opportunity to advance within the company and learn new roles and skills.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/uploads/icons/3.png\" style=\"float:left; height:45px; margin:0px 15px; width:45px\" />Great Pay</strong></span> &ndash;&nbsp;Paid on your ability to do the job with the possibility to earn more</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/uploads/icons/4.png\" style=\"float:left; height:45px; margin:0px 10px; width:45px\" /></strong></span><span style=\"font-size:18px\"><strong>Self Employed</strong></span> &ndash; Self employed jobs available</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/uploads/icons/5.png\" style=\"float:left; height:45px; margin:0px 10px; width:45px\" /></strong></span><span style=\"font-size:18px\"><strong>Multilingual teams</strong></span> &ndash;&nbsp;We have a diverse workforce</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong><img alt=\"\" src=\"https://kashifj17.sg-host.com/uploads/icons/6.png\" style=\"float:left; height:45px; margin:10px; width:45px\" /></strong></span><span style=\"font-size:18px\"><strong>Travel </strong></span>&ndash;&nbsp;Our distribution teams work all over London which allows you to see parts of London that you haven&rsquo;t seen before.&nbsp;</p>', NULL, '2022-09-29 15:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `page_local_events`
--

CREATE TABLE `page_local_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_title_small` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_title_large` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_sec3_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_sec3_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_sec3_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_local_events`
--

INSERT INTO `page_local_events` (`id`, `hero_image`, `hero_title_small`, `hero_title_large`, `event_sec3_title`, `event_sec3_desc`, `event_sec3_image`, `created_at`, `updated_at`) VALUES
(1, '1663066056-local-events.jpg', 'Now This Is', 'Your Time', 'Register Your Event', '<p>Croydon - a London Borough full of amazing events, architectural gems, street art and entertaining things to do even the longest residing have a hard time keeping track of what&#39;s available.&nbsp;</p>\r\n\r\n<p>To help local residents locate and plan their next outing, we&#39;ve created an events calendar full of activities, pop-ups and events in the area. Publish a listing for FREE and promote your latest attraction. Categories range from sport &amp; recreation, festivals, music, food &amp; wine, cultural and everyting in between.&nbsp;</p>', '1664469932-Untitled design (10).png', NULL, '2022-09-29 15:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `page_magazine_competition`
--

CREATE TABLE `page_magazine_competition` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_heading_online` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_heading_kidz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_magazine_competition`
--

INSERT INTO `page_magazine_competition` (`id`, `hero_title`, `hero_subtitle`, `hero_image`, `section2_text`, `section2_heading`, `section3_heading`, `section3_heading_online`, `section3_heading_kidz`, `created_at`, `updated_at`) VALUES
(1, 'Magazine Puzzle Competitions', 'In every publication of the Green Guide magazine there will a puzzle page for residents. To be in chance to win a Puzzles Competition Prize, fill out the Competition form below.', '1660714149 closeup-shot-gaming-table-one-las-vegas-casinos_181624-44655.webp', '<p>To enter your answer to our magazine giveway online fill out the below form. A prize will be drawn at random from the successful entries and contacted by email or phone. Alternatively you can write to us, Unit 1 Georgiou Business Park, Second Avenue, N18 2PG, entries must be recieved by midnight on the stated date. Please read our Competition <a href=\"/competition-terms-conditions\" target=\"_self\">Terms &amp; Conditions</a> before entry submission.</p>', 'Green Guide Puzzle Competitions', 'Play the magazine puzzles digitally', 'Online Puzzles', 'Kidz Corner', NULL, '2022-08-17 00:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `page_magazine_giveaway`
--

CREATE TABLE `page_magazine_giveaway` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_sponser_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section3_gift_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `section3_hamper_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_magazine_giveaway`
--

INSERT INTO `page_magazine_giveaway` (`id`, `hero_title`, `hero_subtitle`, `hero_image`, `section2_text`, `section2_heading`, `section3_heading`, `section3_sponser_name`, `section3_subtitle`, `section3_gift_images`, `section3_hamper_content`, `created_at`, `updated_at`) VALUES
(1, 'Green Guide Giveaway', 'In every publication of the Green Guide magazine there will be an interactive competition for all residents. To be in with a chance to win the Quarterly Giveaway fill out the Competition form below.', '1660716678 gift-box-with-flowers-green-background_185193-72157.webp', '<p>To enter your answer to our magazine giveway online fill out the below form. A prize will be drawn at random from the successful entries and contacted by email or phone. Alternatively you can write to us, Unit 1 Georgiou Business Park, Second Avenue, N18 2PG, entries must be recieved by midnight on the stated date. Please read our <a href=\"/competition-terms-conditions\">Competition Terms &amp; Conditions</a> before entry submission.</p>', 'Green Guide Giveaway', 'The latest issue giveaway is proudly sponsored by:', 'John Lewis', 'The Summer 2022 issue prize is proudly donated by John Lewis', '[{\"name\":\"7841660718069795.jpg\"},{\"name\":\"3761660718069344.jpg\"}]', '<h2>The hamper contains;</h2>\r\n\r\n<ul>\r\n	<li>Orange Grove Merlot Spain,75cl, 13.5%</li>\r\n	<li>Story White Grape &amp; Elderflower Sparkling Fruit Press&eacute;, 75cl</li>\r\n	<li>Teoni&rsquo;s Chocolate Oat Crumble Biscuits, 200g</li>\r\n	<li>Mr Filbert&rsquo;s Kalamata Olives, 65g</li>\r\n	<li>Cottage Delight Orange Marmalade, 227g plus Wooden Spoon</li>\r\n	<li>Cottage Delight Sweet Apple Chutney 210gm plus Wooden Spoon</li>\r\n	<li>The Dormen Dry Roasted Peanuts, 100g</li>\r\n	<li>Linden Lady Handmade Vanilla Fudge, 115g</li>\r\n	<li>Grate Britain All British Cheddar Biscuits, 100g</li>\r\n	<li>The Original Cake Company 4&rdquo; Round Fruit</li>\r\n</ul>', NULL, '2022-08-17 01:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_image`, `post_title`, `contact_desc`, `post_category`, `created_at`, `updated_at`) VALUES
(1, '1645606429 3.png', 'I’m really excited to read and show my grandparents the article written about me in the Green Guide', '<p>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'LGG Team', '2022-02-22 08:30:38', '2022-02-24 06:25:29'),
(2, '1645537416 3.png', 'I look forward to reading the spotlight on me and my company, we have worked for months on this production and I’m excited to get the word out', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Spotlights', '2022-02-22 08:43:36', '2022-02-23 03:53:27'),
(3, '1645600058 3.png', 'I want to be an ambassador for young females to try and expand their skills in professions that are male dominated', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Spotlights', '2022-02-23 02:07:38', '2022-02-23 02:07:38'),
(4, '1645600112 4.png', 'I’ve been a chef for 10 years and this is the first time my skills are being broadcasted to the general public', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Spotlights', '2022-02-23 02:08:32', '2022-02-23 02:08:32'),
(5, '1645600331 1.png', 'Companies  We have used LGG to post leaflets for years when we were approached about advertising in the magazine it seems a logical next step to expand our marketing approach', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Companies', '2022-02-23 02:12:12', '2022-02-23 02:12:12'),
(6, '1645600414 1.png', 'Seems like a great marketing option to increase product recognition to a large volume of customers, we have a discount code to track enquires from the magazine', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Companies', '2022-02-23 02:13:34', '2022-02-23 02:13:34'),
(7, '1645600448 2.png', 'We want to advertise in Green Guide to let local residents know that we have franchises across UK, it’s a great gift for friends and family', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Companies', '2022-02-23 02:14:08', '2022-02-23 02:14:08'),
(8, '1645600470 3.png', 'We offer Green Guide as a marketing avenue to our clients who what brand awareness to a large volume of consumers', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Companies', '2022-02-23 02:14:30', '2022-02-23 02:14:30'),
(9, '1645600499 1.png', 'I’ve been a distributor for LGG for three years and I enjoy walking and seeing different parts of London', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'LGG Team', '2022-02-23 02:14:59', '2022-02-23 02:14:59'),
(10, '1645600568 2.png', 'I started as a leaflet distributor and know I get to work within the recruitment department for Green Guide', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'LGG Team', '2022-02-23 02:16:08', '2022-02-23 02:16:08'),
(11, '1645600589 4.png', 'As a supervisor I get to interact with different clients and local residents on a daily basis', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'LGG Team', '2022-02-23 02:16:29', '2022-02-23 02:16:29'),
(12, '1645600616 2.png', 'I love to talk to residents and local people, I hope I’m a great representation of LGG for customers', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'LGG Team', '2022-02-23 02:16:56', '2022-02-23 02:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_reply`
--

CREATE TABLE `reviews_reply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `directoryId` bigint(20) UNSIGNED NOT NULL,
  `reviewId` bigint(20) UNSIGNED NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upcomming_issues`
--

CREATE TABLE `upcomming_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commencement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcomming_issues`
--

INSERT INTO `upcomming_issues` (`id`, `issue`, `deadline`, `commencement`, `created_at`, `updated_at`) VALUES
(2, 'Summer 2022', '15th May 2022', '15th Jun 2022', '2022-03-24 01:46:47', '2022-07-07 00:09:18'),
(3, 'Autumn 2022', '15th Aug 2022', '15th Sep 2022', '2022-03-24 01:47:09', '2022-03-24 02:20:16'),
(4, 'Winter 2022', '15th Nov 2022', '15th Dec 2022', '2022-03-24 01:47:30', '2022-03-24 01:47:30'),
(5, 'Christmas Special', '1st Oct 2022', '1st Nov 2022', '2022-03-24 01:48:02', '2022-03-24 01:48:02'),
(6, 'Spring 2023', '15th Feb 2023', '15th Mar 2023', '2022-03-24 01:48:29', '2022-03-24 01:48:29'),
(8, 'Summer 2023', '15th May 2023', '15th Jun 2023', '2022-03-24 02:21:32', '2022-03-24 02:21:32');

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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(26, 'User', 'user@gmail.com', NULL, '$2y$10$hH7iQ/2JOdX2EhJlla1Y0OHp5AGRSC5OrMT0kSg5izdQQ1R3eDW8q', NULL, 'active', '2022-03-07 01:45:21', '2022-07-21 01:16:08'),
(36, 'kashif', 'kashif@gmail.com', NULL, '$2y$10$LRppdBypjalw9dc1c9GOB.GER9WjrOkmkNBmojXGuRL651nqEuhdS', NULL, 'active', '2022-07-19 03:49:42', '2022-08-18 06:18:18'),
(40, 'andrea', 'andrea.halsey@lggmarketing.co.uk', NULL, '$2y$10$XoaLPku5sNwMp.yyyhN6auO93ue4vJVhP4l8mcsyWH0mxkCzQ0nW2', NULL, 'active', '2022-09-20 12:28:00', '2022-09-20 12:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_reg_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charity_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `userId`, `company_name`, `company_reg_no`, `phone`, `charity_number`, `billing_address`, `created_at`, `updated_at`) VALUES
(13, 26, 'LLG Green Guide', '923847', '984237498', 'SWE2897', 'My Address', NULL, NULL),
(22, 36, 'ZEX', '4543534', '03059677107', '345353', NULL, NULL, NULL),
(26, 40, 'Local Green Guide', '6567665', '02037735836', '445465767', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website_froms`
--

CREATE TABLE `website_froms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'live',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_froms`
--

INSERT INTO `website_froms` (`id`, `name`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Login', 'login', 'live', NULL, '2022-08-20 03:07:10'),
(2, 'Register', 'register', 'live', NULL, '2022-08-20 03:08:37'),
(3, 'Contact', 'contact', 'live', NULL, '2022-08-20 03:35:43'),
(4, 'Job', 'jobs#apply-job', 'live', NULL, '2022-08-20 03:44:20'),
(5, 'Add Event', 'events/add-event-form', 'live', NULL, '2022-08-20 03:51:58'),
(6, 'Magazine Design Book', 'magzine-design-book#book__addvertise', 'live', NULL, '2022-08-20 03:58:29'),
(7, 'Advert Design Book', 'advert-design-book/#book__addvertise', 'live', NULL, '2022-08-20 04:05:18'),
(8, 'Magzine Competition', 'magzine-competition', 'live', NULL, '2022-08-20 03:47:11'),
(9, 'Magzine Giveaway', 'magzine-giveaway', 'live', NULL, '2022-08-20 03:48:36'),
(10, 'Feedback', 'feedback', 'live', NULL, '2022-08-20 03:49:41');

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
-- Indexes for table `advertise_carousel`
--
ALTER TABLE `advertise_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advert_designs`
--
ALTER TABLE `advert_designs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advert_designs_userid_foreign` (`userId`);

--
-- Indexes for table `boroughs`
--
ALTER TABLE `boroughs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_directorys`
--
ALTER TABLE `business_directorys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_directorys_userid_foreign` (`userId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_books`
--
ALTER TABLE `design_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `design_books_advertsize_foreign` (`advertSize`),
  ADD KEY `design_books_upcomingissue_foreign` (`upcomingIssue`),
  ADD KEY `design_books_userid_foreign` (`userId`);

--
-- Indexes for table `directory_reviews`
--
ALTER TABLE `directory_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `directory_reviews_userid_foreign` (`userId`),
  ADD KEY `directory_reviews_directoryid_foreign` (`directoryId`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_userid_foreign` (`userId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giveaways`
--
ALTER TABLE `giveaways`
  ADD PRIMARY KEY (`id`),
  ADD KEY `giveaways_upcomingissue_foreign` (`upcomingIssue`);

--
-- Indexes for table `greenguide_team`
--
ALTER TABLE `greenguide_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_gallery`
--
ALTER TABLE `home_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_issues`
--
ALTER TABLE `latest_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lgg_wards_list`
--
ALTER TABLE `lgg_wards_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lgg_ward_members`
--
ALTER TABLE `lgg_ward_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lgg_ward_members_wardid_foreign` (`wardId`);

--
-- Indexes for table `links_cards`
--
ALTER TABLE `links_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `london_borough_comming_soon_form`
--
ALTER TABLE `london_borough_comming_soon_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazine_highlights`
--
ALTER TABLE `magazine_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_about`
--
ALTER TABLE `page_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_advertise`
--
ALTER TABLE `page_advertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_advertise_in_magazine`
--
ALTER TABLE `page_advertise_in_magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_advert_design`
--
ALTER TABLE `page_advert_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_archive`
--
ALTER TABLE `page_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_businessdirectory`
--
ALTER TABLE `page_businessdirectory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_communitygrowth`
--
ALTER TABLE `page_communitygrowth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contact`
--
ALTER TABLE `page_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_feedback`
--
ALTER TABLE `page_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_greeninitiative`
--
ALTER TABLE `page_greeninitiative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_home`
--
ALTER TABLE `page_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_job`
--
ALTER TABLE `page_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_local_events`
--
ALTER TABLE `page_local_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_magazine_competition`
--
ALTER TABLE `page_magazine_competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_magazine_giveaway`
--
ALTER TABLE `page_magazine_giveaway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews_reply`
--
ALTER TABLE `reviews_reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_reply_userid_foreign` (`userId`),
  ADD KEY `reviews_reply_directoryid_foreign` (`directoryId`),
  ADD KEY `reviews_reply_reviewid_foreign` (`reviewId`);

--
-- Indexes for table `upcomming_issues`
--
ALTER TABLE `upcomming_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_userid_foreign` (`userId`);

--
-- Indexes for table `website_froms`
--
ALTER TABLE `website_froms`
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
-- AUTO_INCREMENT for table `advertise_carousel`
--
ALTER TABLE `advertise_carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `advert_designs`
--
ALTER TABLE `advert_designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `boroughs`
--
ALTER TABLE `boroughs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_directorys`
--
ALTER TABLE `business_directorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `design_books`
--
ALTER TABLE `design_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `directory_reviews`
--
ALTER TABLE `directory_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giveaways`
--
ALTER TABLE `giveaways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `greenguide_team`
--
ALTER TABLE `greenguide_team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_gallery`
--
ALTER TABLE `home_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_issues`
--
ALTER TABLE `latest_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lgg_wards_list`
--
ALTER TABLE `lgg_wards_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `lgg_ward_members`
--
ALTER TABLE `lgg_ward_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `links_cards`
--
ALTER TABLE `links_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `london_borough_comming_soon_form`
--
ALTER TABLE `london_borough_comming_soon_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `magazine_highlights`
--
ALTER TABLE `magazine_highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `page_about`
--
ALTER TABLE `page_about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_advertise`
--
ALTER TABLE `page_advertise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_advertise_in_magazine`
--
ALTER TABLE `page_advertise_in_magazine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_advert_design`
--
ALTER TABLE `page_advert_design`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_archive`
--
ALTER TABLE `page_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_businessdirectory`
--
ALTER TABLE `page_businessdirectory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_communitygrowth`
--
ALTER TABLE `page_communitygrowth`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_contact`
--
ALTER TABLE `page_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_feedback`
--
ALTER TABLE `page_feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_greeninitiative`
--
ALTER TABLE `page_greeninitiative`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_home`
--
ALTER TABLE `page_home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_job`
--
ALTER TABLE `page_job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_local_events`
--
ALTER TABLE `page_local_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_magazine_competition`
--
ALTER TABLE `page_magazine_competition`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_magazine_giveaway`
--
ALTER TABLE `page_magazine_giveaway`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews_reply`
--
ALTER TABLE `reviews_reply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upcomming_issues`
--
ALTER TABLE `upcomming_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `website_froms`
--
ALTER TABLE `website_froms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advert_designs`
--
ALTER TABLE `advert_designs`
  ADD CONSTRAINT `advert_designs_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_directorys`
--
ALTER TABLE `business_directorys`
  ADD CONSTRAINT `business_directorys_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `design_books`
--
ALTER TABLE `design_books`
  ADD CONSTRAINT `design_books_advertsize_foreign` FOREIGN KEY (`advertSize`) REFERENCES `adverts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `design_books_upcomingissue_foreign` FOREIGN KEY (`upcomingIssue`) REFERENCES `upcomming_issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `design_books_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `directory_reviews`
--
ALTER TABLE `directory_reviews`
  ADD CONSTRAINT `directory_reviews_directoryid_foreign` FOREIGN KEY (`directoryId`) REFERENCES `business_directorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `directory_reviews_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giveaways`
--
ALTER TABLE `giveaways`
  ADD CONSTRAINT `giveaways_upcomingissue_foreign` FOREIGN KEY (`upcomingIssue`) REFERENCES `upcomming_issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lgg_ward_members`
--
ALTER TABLE `lgg_ward_members`
  ADD CONSTRAINT `lgg_ward_members_wardid_foreign` FOREIGN KEY (`wardId`) REFERENCES `lgg_wards_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews_reply`
--
ALTER TABLE `reviews_reply`
  ADD CONSTRAINT `reviews_reply_directoryid_foreign` FOREIGN KEY (`directoryId`) REFERENCES `business_directorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_reply_reviewid_foreign` FOREIGN KEY (`reviewId`) REFERENCES `directory_reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_reply_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
