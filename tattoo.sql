-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 05:51 PM
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
-- Database: `tattoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sec_title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `a_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `sec_title`, `subtitle`, `desc`, `a_image`, `created_at`, `updated_at`) VALUES
(1, 'CREATORS', 'TATTOO', 'ESTABLISHED 1985', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<ul>\r\n	<li>Comfortable and relaxing environment</li>\r\n	<li>Experienced artist input on your tattoo</li>\r\n	<li>Top of the line cleaning and safety protocols</li>\r\n	<li>Full aftercare instructions for a well-healed tattoo</li>\r\n</ul>', 'about-2409_1688371372.jpg', '2023-06-30 06:44:33', '2023-07-03 08:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aftercares`
--

CREATE TABLE `aftercares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `ac_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aftercares`
--

INSERT INTO `aftercares` (`id`, `title`, `desc`, `ac_image`, `created_at`, `updated_at`) VALUES
(1, 'TATTOO AFTERCARE', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<ul>\r\n	<li>Following these tattoo aftercare instructions will help to ensure its vibrance and quality as it heals.</li>\r\n	<li>Wash hands thoroughly prior to touching your tattoo for any reason.</li>\r\n	<li>Pat dry with a clean cloth or towel.</li>\r\n	<li>Apply a small amount of ointment to tattoo for the first 4 days.</li>\r\n	<li>Continue this regiment until the tattoo is fully under the skin.</li>\r\n	<li>For any questions, concerns, or continued care, reach out to us online, or walk-in to the shop</li>\r\n</ul>', 'ac-2032_1688157272.jpg', '2023-06-30 20:34:32', '2023-06-30 20:55:24'),
(2, 'PIERCING AFTERCARE', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<ul>\r\n	<li>Wash your hands thoroughly prior to cleaning or touching your piercing for any reason.</li>\r\n	<li>Using mild (fragrance-free, alcohol-free) soap, gently lather around the piercing.</li>\r\n	<li>Rinse area thoroughly to remove all traces of soap from the piercing.</li>\r\n	<li>Use saline rinse 2 times daily during healing on the front and back of your piercing.</li>\r\n	<li>Refrain from unnecessary handling of the piercing.</li>\r\n	<li>For any questions, concerns, or continued care, reach out to us online, or walk-in to the shop.</li>\r\n	<li>When in doubt, wash and spray twice a day</li>\r\n</ul>', 'ac-5942_1688157438.jpg', '2023-06-30 20:36:59', '2023-06-30 20:37:18'),
(4, 'TATTOO AFTERCARE', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<ul>\r\n	<li>Following these tattoo aftercare instructions will help to ensure its vibrance and quality as it heals.</li>\r\n	<li>Wash hands thoroughly prior to touching your tattoo for any reason.</li>\r\n	<li>Pat dry with a clean cloth or towel.</li>\r\n	<li>Apply a small amount of ointment to tattoo for the first 4 days.</li>\r\n	<li>Continue this regiment until the tattoo is fully under the skin.</li>\r\n	<li>For any questions, concerns, or continued care, reach out to us online, or walk-in to the shop</li>\r\n</ul>', 'ac-2032_1688157272.jpg', '2023-06-30 20:34:32', '2023-06-30 20:55:24'),
(5, 'PIERCING AFTERCARE', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<ul>\r\n	<li>Wash your hands thoroughly prior to cleaning or touching your piercing for any reason.</li>\r\n	<li>Using mild (fragrance-free, alcohol-free) soap, gently lather around the piercing.</li>\r\n	<li>Rinse area thoroughly to remove all traces of soap from the piercing.</li>\r\n	<li>Use saline rinse 2 times daily during healing on the front and back of your piercing.</li>\r\n	<li>Refrain from unnecessary handling of the piercing.</li>\r\n	<li>For any questions, concerns, or continued care, reach out to us online, or walk-in to the shop.</li>\r\n	<li>When in doubt, wash and spray twice a day</li>\r\n</ul>', 'ac-5942_1688157438.jpg', '2023-06-30 20:36:59', '2023-06-30 20:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phone`, `email`, `date`, `service`, `artist`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'Akhil Haldar', '8514089435', 'akhilhaldar121@gmail.com', '2023-10-05', '2', '1', 'hjkcghk', '2023-07-04 07:51:12', '2023-08-08 18:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_serv_art`
--

CREATE TABLE `appointment_serv_art` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_serv_art`
--

INSERT INTO `appointment_serv_art` (`id`, `service`, `artist`, `created_at`, `updated_at`) VALUES
(1, 'Tattooing', 'Andreas', '2023-07-03 11:49:18', '2023-07-03 11:49:18'),
(2, 'Piercing', 'Daniel', '2023-07-03 11:49:22', '2023-07-03 11:49:22'),
(3, 'Tattoo design', 'Jason', '2023-07-03 11:49:26', '2023-07-03 11:49:26'),
(4, 'Tattoo cover up', NULL, '2023-07-03 11:49:28', '2023-07-03 11:49:28'),
(5, 'Tattooing', 'Andreas', '2023-07-05 06:24:56', '2023-07-05 06:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `b_image`, `created_at`, `updated_at`) VALUES
(2, 'banner-3722_1688468646.jpg', '2023-07-04 08:18:17', '2023-07-04 11:05:35'),
(3, 'banner-899_1688468639.jpg', '2023-07-04 08:18:26', '2023-07-04 11:03:59'),
(4, 'banner-3564_1689231135.jpg', '2023-07-13 06:52:15', '2023-07-13 06:52:15'),
(5, 'banner-1699_1689231234.jpg', '2023-07-13 06:53:54', '2023-07-13 06:53:54');

-- --------------------------------------------------------

--
-- Table structure for table `banner_titles`
--

CREATE TABLE `banner_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_subtitle` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_titles`
--

INSERT INTO `banner_titles` (`id`, `b_title`, `b_subtitle`, `created_at`, `updated_at`) VALUES
(1, 'BE PROUD OF YOUR', 'NEW TATTOO', '2023-07-04 11:49:36', '2023-07-04 11:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `shrt_desc` text NOT NULL,
  `long_desc` longtext NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `slug`, `blog_image`, `shrt_desc`, `long_desc`, `date`, `created_at`, `updated_at`) VALUES
(2, 'TOP TEN TATTOO STYLES', 'top-ten-tattoo-styles', 'blog-2348_1688019685.jpg', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2023-09-07', '2023-07-29 06:21:25', '2023-06-29 06:38:46'),
(3, 'Best Tattoo Back Ideas', 'best-tattoo-back-ideas', 'blog-5181_1688020951.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2023-05-10', '2023-07-29 06:42:31', '2023-07-03 05:09:39'),
(4, 'Best Wrap Around Tattoo Ideas', 'best-wrap-around-tattoo-ideas', 'blog-8916_1688021444.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2023-08-15', '2023-07-29 06:50:44', '2023-06-30 07:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `blog_mul_images`
--

CREATE TABLE `blog_mul_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_id` int(11) NOT NULL,
  `blog_mul_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_mul_images`
--

INSERT INTO `blog_mul_images` (`id`, `b_id`, `blog_mul_image`, `created_at`, `updated_at`) VALUES
(9, 4, 'blogmul-9985_1688027309.jpg', '2023-06-29 08:28:29', '2023-06-29 08:28:29'),
(11, 3, 'blogmul-3124_1688027322.jpg', '2023-06-29 08:28:42', '2023-06-29 08:28:42'),
(12, 3, 'blogmul-9413_1688027322.jpg', '2023-06-29 08:28:42', '2023-06-29 08:28:42'),
(13, 2, 'blogmul-7985_1688027331.jpg', '2023-06-29 08:28:51', '2023-06-29 08:28:51'),
(14, 2, 'blogmul-913_1688027331.jpg', '2023-06-29 08:28:51', '2023-06-29 08:28:51'),
(15, 4, 'blogmul-253_1688108590.jpg', '2023-06-30 07:03:10', '2023-06-30 07:03:10'),
(18, 6, 'blogmul-5807_1688625844.jpg', '2023-07-06 06:44:04', '2023-07-06 06:44:04'),
(19, 6, 'blogmul-9866_1688625844.jpg', '2023-07-06 06:44:04', '2023-07-06 06:44:04'),
(20, 6, 'blogmul-5494_1688625844.jpg', '2023-07-06 06:44:04', '2023-07-06 06:44:04'),
(21, 7, 'blogmul-678_1688626047.jpg', '2023-07-06 06:47:27', '2023-07-06 06:47:27'),
(22, 7, 'blogmul-4477_1688626047.jpg', '2023-07-06 06:47:27', '2023-07-06 06:47:27'),
(23, 7, 'blogmul-3157_1688626047.jpg', '2023-07-06 06:47:27', '2023-07-06 06:47:27'),
(24, 8, 'blogmul-8732_1688626161.jpg', '2023-07-06 06:49:21', '2023-07-06 06:49:21'),
(25, 8, 'blogmul-908_1688626161.jpg', '2023-07-06 06:49:21', '2023-07-06 06:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `date`, `created_at`, `updated_at`) VALUES
(1, 'ORNAMENT', '2023-08-08', '2023-08-08 11:13:41', '2023-08-08 11:13:41'),
(2, 'MINIMALISTIS', '2023-08-08', '2023-08-08 11:13:59', '2023-08-08 11:13:59'),
(3, 'BLACKWHITE', '2023-08-08', '2023-08-08 11:14:13', '2023-08-08 11:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'ORNAMENT', '2023-08-07 11:40:34', '2023-08-07 11:40:34'),
(2, 'MINIMALISTIS', '2023-08-07 11:40:39', '2023-08-07 11:40:39'),
(3, 'BLACKWHITE', '2023-08-07 11:40:42', '2023-08-07 11:40:42'),
(4, 'OTHER', '2023-08-07 11:40:45', '2023-08-07 11:40:45'),
(5, 'E', '2023-08-07 11:40:48', '2023-08-07 11:40:48'),
(6, 'F', '2023-08-07 11:40:51', '2023-08-07 11:40:51'),
(7, 'jnbdshaldsva', '2023-08-07 14:54:35', '2023-08-07 14:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `c_image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'client-3875_1688038885.png', NULL, '2023-06-29 11:41:25', '2023-06-29 11:41:25'),
(2, 'client-8531_1688038888.png', 'https://www.alienstattoo.com/', '2023-06-29 11:41:28', '2023-07-01 07:53:42'),
(3, 'client-3748_1688038891.png', 'https://www.alienstattoo.com/', '2023-06-29 11:41:31', '2023-07-01 07:53:33'),
(4, 'client-3738_1688038895.png', 'https://www.alienstattoo.com/', '2023-06-29 11:41:35', '2023-07-01 07:53:27'),
(5, 'client-3401_1688038899.png', 'https://www.alienstattoo.com/', '2023-06-29 11:41:39', '2023-07-01 07:53:21'),
(6, 'client-7568_1688038902.png', 'https://www.alienstattoo.com/', '2023-06-29 11:41:42', '2023-07-01 07:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Amar', 'admin@gmail.com', '1234567890', 'bhfhgthf', 'gfadgggggge', '2023-07-01 19:06:05', '2023-07-01 19:06:05'),
(5, 'Akhil Haldar', 'akhilhaldar121@gmail.com', '08514089435', 'abcd', 'dvfzgfds', '2023-07-04 08:40:51', '2023-07-04 08:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact_dtls`
--

CREATE TABLE `contact_dtls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_dtls`
--

INSERT INTO `contact_dtls` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'CREATORS TATTOO STUDIO', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '2023-07-01 19:01:50', '2023-07-01 19:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `wp_no` varchar(255) NOT NULL,
  `pay_done` double(8,2) DEFAULT NULL,
  `pay_due` double(8,2) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `pre_image` varchar(255) DEFAULT NULL,
  `post_image` varchar(255) NOT NULL,
  `after_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `name`, `dob`, `phone`, `wp_no`, `pay_done`, `pay_due`, `remark`, `pre_image`, `post_image`, `after_image`, `created_at`, `updated_at`) VALUES
(1, 'Amal', '2023-07-01', '8597931682', '1546546544', 500.00, 100.00, NULL, 'img1-9974_1689229477.jpg', 'img2-8894_1689229477.jpg', 'img3-1652_1689229477.jpg', '2023-07-13 06:24:37', '2023-07-13 06:51:24'),
(2, 'Amar', '2023-07-22', '8597931682', '1234567890', 300.00, NULL, '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', NULL, 'img2-3704_1689230493.jpg', NULL, '2023-07-13 06:41:33', '2023-07-13 06:51:03'),
(3, 'Andreas Martin', '2023-07-01', '0851408943', '1234567890', 300.00, 100.00, NULL, NULL, 'post-4699_1690438346.jpeg', NULL, '2023-07-27 06:12:26', '2023-07-27 06:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'How can i book a tattoo?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:25:02', '2023-07-01 07:25:02'),
(2, 'How should i prepare for my appointment?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:25:21', '2023-07-01 07:25:21'),
(3, 'Can i get tattooed if i am pregnant?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:25:33', '2023-07-01 07:25:33'),
(4, 'Can i get tattooed if i am under 18?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:25:42', '2023-07-01 07:25:42'),
(5, 'Can i bring a friend to my appointment?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:25:56', '2023-07-01 07:25:56'),
(6, 'Do you tattoo the hands, neck and face?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:26:19', '2023-07-01 07:26:19'),
(7, 'Can i see my design prior to my appointment?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:35:15', '2023-07-01 07:35:15'),
(8, 'How should i pay for my tattoo?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:36:49', '2023-07-01 07:36:49'),
(9, 'Do you do piercings?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:38:38', '2023-07-01 07:38:38'),
(11, 'How should i look after my tattoo?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.</p>', '2023-07-01 07:43:34', '2023-07-01 07:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `cat_id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"Red, Rose, Golap\"]', '2023-08-08 11:13:41', '2023-08-08 11:13:41'),
(2, 2, '[\"Lal, Nil, Sabuj\"]', '2023-08-08 11:13:59', '2023-08-08 11:13:59'),
(3, 3, '[\"lal, green, yellow,\"]', '2023-08-08 11:14:13', '2023-08-08 11:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_mul_imgs`
--

CREATE TABLE `gallery_mul_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gal_id` int(11) NOT NULL,
  `gal_mul_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_mul_imgs`
--

INSERT INTO `gallery_mul_imgs` (`id`, `gal_id`, `gal_mul_img`, `created_at`, `updated_at`) VALUES
(1, 1, 'gal-8929_1691493221.jpg', '2023-08-08 11:13:41', '2023-08-08 11:13:41'),
(2, 1, 'gal-2929_1691493222.jpg', '2023-08-08 11:13:42', '2023-08-08 11:13:42'),
(3, 2, 'gal-6801_1691493239.jpg', '2023-08-08 11:13:59', '2023-08-08 11:13:59'),
(4, 2, 'gal-1423_1691493239.jpg', '2023-08-08 11:13:59', '2023-08-08 11:13:59'),
(5, 2, 'gal-4407_1691493239.jpeg', '2023-08-08 11:13:59', '2023-08-08 11:13:59'),
(6, 3, 'gal-8146_1691493253.jpg', '2023-08-08 11:14:13', '2023-08-08 11:14:13'),
(7, 3, 'gal-922_1691493253.jpg', '2023-08-08 11:14:13', '2023-08-08 11:14:13'),
(8, 3, 'gal-8059_1691493253.jpg', '2023-08-08 11:14:13', '2023-08-08 11:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `latest_works`
--

CREATE TABLE `latest_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_id` int(11) NOT NULL,
  `latest_work_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_works`
--

INSERT INTO `latest_works` (`id`, `t_id`, `latest_work_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'latest_work-8890_1688107956.jpg', '2023-06-30 06:52:36', '2023-06-30 06:52:36'),
(2, 1, 'latest_work-6305_1688107956.jpg', '2023-06-30 06:52:36', '2023-06-30 06:52:36'),
(3, 1, 'latest_work-7149_1688107956.jpg', '2023-06-30 06:52:36', '2023-06-30 06:52:36'),
(10, 1, 'latest_work-3281_1688109081.jpg', '2023-06-30 07:11:21', '2023-06-30 07:11:21'),
(11, 2, 'latest_work-9415_1688109601.jpg', '2023-06-30 07:20:01', '2023-06-30 07:20:01'),
(12, 2, 'latest_work-5828_1688109601.jpg', '2023-06-30 07:20:01', '2023-06-30 07:20:01'),
(13, 2, 'latest_work-94_1688109601.jpg', '2023-06-30 07:20:01', '2023-06-30 07:20:01'),
(14, 2, 'latest_work-9810_1688109601.jpg', '2023-06-30 07:20:01', '2023-06-30 07:20:01'),
(15, 3, 'latest_work-3763_1688109684.jpg', '2023-06-30 07:21:24', '2023-06-30 07:21:24'),
(16, 3, 'latest_work-7695_1688109684.jpg', '2023-06-30 07:21:24', '2023-06-30 07:21:24'),
(17, 3, 'latest_work-6543_1688109684.jpg', '2023-06-30 07:21:24', '2023-06-30 07:21:24'),
(18, 3, 'latest_work-3458_1688109684.jpg', '2023-06-30 07:21:24', '2023-06-30 07:21:24');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_29_163059_create_admins_table', 1),
(3, '2023_05_29_225155_create_entries_table', 1),
(4, '2023_05_29_233532_create_galleries_table', 1),
(5, '2023_05_30_002718_create_testimonials_table', 1),
(6, '2023_05_30_075914_create_blogs_table', 1),
(7, '2023_05_30_082514_create_profiles_table', 1),
(8, '2023_05_30_113754_create_contacts_table', 1),
(9, '2023_05_30_122052_create_subgalleries_table', 1),
(10, '2023_06_19_151753_create_tags_table', 1),
(11, '2023_06_25_104623_create_categories_table', 2),
(12, '2023_06_29_110828_create_blogs_table', 3),
(13, '2023_06_29_131443_create_blog_mul_images_table', 4),
(14, '2023_06_29_165237_create_clients_table', 5),
(15, '2023_06_30_000420_create_abouts_table', 6),
(16, '2023_06_30_104007_create_teams_table', 7),
(17, '2023_06_30_105643_create_latest_works_table', 8),
(18, '2023_06_30_131811_create_team_work_images_table', 9),
(19, '2023_06_30_164725_create_services_table', 10),
(20, '2023_06_30_164739_create_service_mul_images_table', 10),
(21, '2023_07_01_010248_create_pricings_table', 11),
(22, '2023_07_01_015355_create_aftercares_table', 12),
(23, '2023_07_01_121944_create_faqs_table', 13),
(24, '2023_07_01_143301_create_settings_table', 14),
(25, '2023_07_01_151946_create_settings_table', 15),
(26, '2023_07_01_230859_create_pages_table', 16),
(27, '2023_07_02_000042_create_contact_dtls_table', 17),
(28, '2023_07_03_153628_create_appointments_table', 18),
(29, '2023_07_03_170054_create_appointment_serv_art_table', 19),
(30, '2023_07_03_170442_create_appointments_table', 20),
(31, '2023_07_03_173300_create_processes_table', 21),
(32, '2023_07_04_133538_create_banners_table', 22),
(33, '2023_07_04_165925_create_banner_titles_table', 23),
(34, '2023_07_05_114401_create_portfolio_imgs_table', 24),
(35, '2023_07_05_114407_create_portfolio_vids_table', 24),
(36, '2023_07_05_152716_create_gallery_mul_imgs_table', 25),
(37, '2023_07_13_114953_create_entries_table', 26),
(38, '2023_07_13_115121_create_entries_table', 27),
(39, '2023_08_07_162732_create_cats_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text DEFAULT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `desc`, `p_image`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-114_1688362189.jpg', '2023-07-01 17:48:27', '2023-07-03 05:29:49'),
(2, 'SERVICES', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-129_1688362174.jpg', '2023-07-01 17:49:06', '2023-07-03 05:29:34'),
(3, 'GALLERY', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-433_1688362161.jpg', '2023-07-01 17:49:25', '2023-07-03 09:00:29'),
(4, 'TEAM', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-4910_1688362145.jpg', '2023-07-01 17:49:40', '2023-07-03 05:29:05'),
(5, 'PORTFOLIO', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-8818_1688362112.jpg', '2023-07-01 17:49:56', '2023-07-03 05:28:32'),
(6, 'AFTERCARE', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-4616_1688362094.jpg', '2023-07-01 17:50:13', '2023-07-03 05:28:14'),
(7, 'BLOG', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-7893_1688362073.jpg', '2023-07-01 17:50:31', '2023-07-03 05:27:53'),
(8, 'CONTACT US', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'pages-9905_1688362037.jpg', '2023-07-01 17:50:48', '2023-07-03 05:27:17'),
(9, 'APPOINTMENT', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', NULL, '2023-07-03 09:50:21', '2023-07-03 09:50:21'),
(10, 'HOW IT WORKS', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<ul>\r\n	<li>We&#39;re professional and certified tattoo</li>\r\n	<li>We care about our customers satisfaction</li>\r\n</ul>', NULL, '2023-07-03 11:03:05', '2023-07-03 11:03:05'),
(11, 'PROCESS', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<ul>\r\n	<li>We&#39;re professional and certified tattoo</li>\r\n	<li>We care about our customers satisfaction</li>\r\n</ul>', NULL, '2023-07-03 11:56:51', '2023-07-03 11:56:51');

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
-- Table structure for table `portfolio_imgs`
--

CREATE TABLE `portfolio_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_imgs`
--

INSERT INTO `portfolio_imgs` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'portfolio-1202_1688538922.jpg', '2023-07-05 06:35:22', '2023-07-05 06:35:22'),
(2, 'portfolio-7085_1688538942.jpg', '2023-07-05 06:35:42', '2023-07-05 06:35:42'),
(3, 'portfolio-1155_1688538945.jpg', '2023-07-05 06:35:45', '2023-07-05 06:35:45'),
(4, 'portfolio-9846_1688538948.jpg', '2023-07-05 06:35:48', '2023-07-05 06:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_vids`
--

CREATE TABLE `portfolio_vids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_vids`
--

INSERT INTO `portfolio_vids` (`id`, `video`, `created_at`, `updated_at`) VALUES
(1, 'FXyif88TH78', '2023-07-05 06:43:45', '2023-07-05 06:49:23'),
(2, 'BBmJXTASsRA', '2023-07-05 06:51:23', '2023-07-05 06:51:23'),
(3, 'BBmJXTASsRA', '2023-07-05 06:51:31', '2023-07-05 06:51:31'),
(4, 'UCRNVgJJ97w', '2023-07-05 06:53:16', '2023-07-05 06:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `title`, `currency`, `amount`, `created_at`, `updated_at`) VALUES
(2, 'Tattooing', '<i class=\"fa fa-dollar\"></i>', '60', '2023-06-30 20:05:32', '2023-06-30 20:05:32'),
(3, 'Tattoo Cover Up', '<i class=\"fa fa-dollar\"></i>', '45', '2023-06-30 20:05:39', '2023-06-30 20:05:39'),
(4, 'Piercing', '<i class=\"fa fa-dollar\"></i>', '30', '2023-06-30 20:05:58', '2023-06-30 20:05:58'),
(5, 'Laser Removal', '<i class=\"fa fa-dollar\"></i>', '75', '2023-06-30 20:06:04', '2023-06-30 20:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'FREE CONSULTATION', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '2023-07-03 12:08:22', '2023-07-03 12:08:22'),
(2, 'BOOK AN APPOINTMENT', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '2023-07-03 12:08:36', '2023-07-03 12:08:36'),
(3, 'GET YOUR TATTOO', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '2023-07-03 12:08:44', '2023-07-03 12:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'pro-9990_1687244456.jpg', NULL, '2023-06-20 07:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `shrt_desc` text NOT NULL,
  `long_desc` longtext NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `shrt_desc`, `long_desc`, `s_image`, `created_at`, `updated_at`) VALUES
(1, 'TATTOOING', 'tattooing', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'service-2305_1688126211.jpg', '2023-06-30 11:56:51', '2023-06-30 11:56:51'),
(2, 'PIERCING', 'piercing', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'service-532_1688126245.jpg', '2023-06-30 11:57:25', '2023-06-30 11:57:25'),
(3, 'LASER REMOVAL', 'laser-removal', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'service-8345_1688126277.jpg', '2023-06-30 11:57:57', '2023-06-30 11:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `service_mul_images`
--

CREATE TABLE `service_mul_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_id` int(11) NOT NULL,
  `ser_mul_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_mul_images`
--

INSERT INTO `service_mul_images` (`id`, `s_id`, `ser_mul_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'ser_mul-6863_1688126168.jpg', '2023-06-30 11:56:08', '2023-06-30 11:56:08'),
(2, 1, 'ser_mul-6371_1688126169.jpg', '2023-06-30 11:56:09', '2023-06-30 11:56:09'),
(3, 1, 'ser_mul-5706_1688126211.jpg', '2023-06-30 11:56:51', '2023-06-30 11:56:51'),
(4, 1, 'ser_mul-3318_1688126211.jpg', '2023-06-30 11:56:51', '2023-06-30 11:56:51'),
(5, 1, 'ser_mul-6553_1688126211.jpg', '2023-06-30 11:56:51', '2023-06-30 11:56:51'),
(6, 1, 'ser_mul-2514_1688126211.jpg', '2023-06-30 11:56:51', '2023-06-30 11:56:51'),
(7, 2, 'ser_mul-6604_1688126245.jpg', '2023-06-30 11:57:25', '2023-06-30 11:57:25'),
(8, 2, 'ser_mul-7629_1688126245.jpg', '2023-06-30 11:57:25', '2023-06-30 11:57:25'),
(9, 2, 'ser_mul-3493_1688126245.jpg', '2023-06-30 11:57:25', '2023-06-30 11:57:25'),
(10, 2, 'ser_mul-5536_1688126245.jpg', '2023-06-30 11:57:25', '2023-06-30 11:57:25'),
(11, 3, 'ser_mul-271_1688126277.jpg', '2023-06-30 11:57:57', '2023-06-30 11:57:57'),
(12, 3, 'ser_mul-2958_1688126277.jpg', '2023-06-30 11:57:57', '2023-06-30 11:57:57'),
(13, 3, 'ser_mul-4501_1688126277.jpg', '2023-06-30 11:57:57', '2023-06-30 11:57:57'),
(15, 3, 'ser_mul-6287_1688126347.jpg', '2023-06-30 11:59:07', '2023-06-30 11:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sec_address` varchar(255) DEFAULT NULL,
  `gmail` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mon` varchar(255) DEFAULT NULL,
  `tue` varchar(255) DEFAULT NULL,
  `wed` varchar(255) DEFAULT NULL,
  `thu` varchar(255) DEFAULT NULL,
  `fri` varchar(255) DEFAULT NULL,
  `sat` varchar(255) DEFAULT NULL,
  `weekend` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `insta` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `promo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `title`, `subtitle`, `address`, `sec_address`, `gmail`, `phone`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `weekend`, `facebook`, `youtube`, `twitter`, `insta`, `pinterest`, `promo`, `created_at`, `updated_at`) VALUES
(1, 'logo-4632_1688535586.png', 'Creators', 'Tattoo Studio', '0665 Broadway NY, 10001 USA', '0665 Broadway NY, New York 10001 United States of America', 'info@tattoo.com', '85510044', '10:20 - 10:20', '10:20 - 10:20', '10:20 - 10:20', '10:20 - 10:20', '10:20 - 10:20', '10:20 - 10:20', 'Close', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://investor.pinterestinc.com/investor-overview/default.aspx', 'https://www.youtube.com/watch?v=yAYS57tGstY', '2023-07-13 06:58:50', '2023-07-13 06:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `about_me` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `slug`, `designation`, `desc`, `email`, `phone`, `facebook`, `youtube`, `twitter`, `insta`, `about_me`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Andreas Martin', 'andreas-martin', 'Tattoo Artist', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>\r\n\r\n<ul>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n	<li>I care about the satisfaction of my customers.</li>\r\n</ul>', 'jennifer@tattoo.com', '1234567890', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/login', 'https://www.instagram.com', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<ul>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n	<li>I care about the satisfaction of my customers.</li>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n	<li>I care about the satisfaction of my customers.</li>\r\n</ul>', 'team-552_1689057740.jpg', '2023-06-30 08:00:20', '2023-07-11 06:42:20'),
(2, 'Daniel Brown', 'daniel-brown', 'Tattoo Artist', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>\r\n\r\n<ul>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n	<li>I care about the satisfaction of my customers.</li>\r\n</ul>', 'jennifer@tattoo.com', '1234567890', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/login', 'https://www.instagram.com', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<ul>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n	<li>I care about the satisfaction of my customers.</li>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n</ul>', 'team-168_1689057715.jpg', '2023-06-30 08:01:32', '2023-07-11 06:41:55'),
(3, 'Jason White', 'jason-white', 'Tattoo Artist', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English.</p>\r\n\r\n<ul>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n	<li>I care about the satisfaction of my customers.</li>\r\n</ul>', 'jennifer@tattoo.com', '1234567890', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/login', 'https://www.instagram.com', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<ul>\r\n	<li>I&#39;m a professional and certified tattoo.</li>\r\n	<li>I care about the satisfaction of my customers.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'team-9170_1689057676.jpg', '2023-06-30 08:02:44', '2023-07-11 06:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `team_work_images`
--

CREATE TABLE `team_work_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_id` int(11) NOT NULL,
  `team_work_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_work_images`
--

INSERT INTO `team_work_images` (`id`, `t_id`, `team_work_image`, `created_at`, `updated_at`) VALUES
(13, 3, 'team_work-2390_1689057676.jpg', '2023-07-11 06:41:16', '2023-07-11 06:41:16'),
(14, 3, 'team_work-6201_1689057676.jpg', '2023-07-11 06:41:16', '2023-07-11 06:41:16'),
(15, 3, 'team_work-7156_1689057676.jpg', '2023-07-11 06:41:16', '2023-07-11 06:41:16'),
(16, 3, 'team_work-4830_1689057676.jpg', '2023-07-11 06:41:16', '2023-07-11 06:41:16'),
(17, 2, 'team_work-1193_1689057715.jpg', '2023-07-11 06:41:55', '2023-07-11 06:41:55'),
(18, 2, 'team_work-927_1689057715.jpg', '2023-07-11 06:41:55', '2023-07-11 06:41:55'),
(19, 2, 'team_work-1597_1689057715.jpg', '2023-07-11 06:41:55', '2023-07-11 06:41:55'),
(20, 2, 'team_work-7060_1689057715.jpg', '2023-07-11 06:41:55', '2023-07-11 06:41:55'),
(21, 1, 'team_work-6189_1689057740.jpg', '2023-07-11 06:42:20', '2023-07-11 06:42:20'),
(22, 1, 'team_work-899_1689057740.jpg', '2023-07-11 06:42:20', '2023-07-11 06:42:20'),
(23, 1, 'team_work-3798_1689057740.jpg', '2023-07-11 06:42:20', '2023-07-11 06:42:20'),
(24, 1, 'team_work-8747_1689057740.jpg', '2023-07-11 06:42:20', '2023-07-11 06:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `testimonial` longtext NOT NULL,
  `t_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`, `t_image`, `created_at`, `updated_at`) VALUES
(1, 'Jason Brown', '<p>Tattoo viverra tristique duis vitae dias the nesueten niva aestan ateuene artines duruna setlie suscena fermen uisque sed tellus man lorem nullaman the rana tortor in the felis fermen.</p>', 'testi-5885_1688035879.jpg', '2023-06-29 10:51:19', '2023-06-29 10:51:19'),
(2, 'William Henry', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', 'testi-2277_1688036434.jpg', '2023-06-29 10:53:15', '2023-06-29 11:00:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aftercares`
--
ALTER TABLE `aftercares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_serv_art`
--
ALTER TABLE `appointment_serv_art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_titles`
--
ALTER TABLE `banner_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_mul_images`
--
ALTER TABLE `blog_mul_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_dtls`
--
ALTER TABLE `contact_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_mul_imgs`
--
ALTER TABLE `gallery_mul_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_works`
--
ALTER TABLE `latest_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio_imgs`
--
ALTER TABLE `portfolio_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_vids`
--
ALTER TABLE `portfolio_vids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_mul_images`
--
ALTER TABLE `service_mul_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_work_images`
--
ALTER TABLE `team_work_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aftercares`
--
ALTER TABLE `aftercares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment_serv_art`
--
ALTER TABLE `appointment_serv_art`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner_titles`
--
ALTER TABLE `banner_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_mul_images`
--
ALTER TABLE `blog_mul_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_dtls`
--
ALTER TABLE `contact_dtls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_mul_imgs`
--
ALTER TABLE `gallery_mul_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `latest_works`
--
ALTER TABLE `latest_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_imgs`
--
ALTER TABLE `portfolio_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_vids`
--
ALTER TABLE `portfolio_vids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_mul_images`
--
ALTER TABLE `service_mul_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_work_images`
--
ALTER TABLE `team_work_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
