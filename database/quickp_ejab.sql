-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2023 at 03:15 PM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickp_ejab`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'In the year 1959, Late Engineer Ejabuddin Ahmed gave birth to Ejab Group with the establishment of National Construction Company (now defunct), National Jute Mills Limited (1968) and over the years gained recognition with Himadri Limited (1974), a potato cold storage and finally Rabeya Flour Mills Limited in 1978. Involving itself in the fields of Jute based products, Edible Oil Mill, Rice Mill and Potato Cold Storages, Ejab Group went a step ahead with adding wide range of processed food products. Adding another new venture is its own Seed processing expertise by which we produce potato, rice, maize, wheat and vegetable seeds. Through our distribution network, we not only distribute our own products but also distribute Cepsa Lubricants, a product of Spain. The group is also involved in Real Estate and Housing Development under the name of Ejab Developers Ltd. (EDL).', '1694690095.jpg', NULL, '2023-09-14 10:56:13', '2023-09-14 11:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_pages`
--

CREATE TABLE `about_us_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sec_1_headline` varchar(255) DEFAULT NULL,
  `sec_1_desc` longtext DEFAULT NULL,
  `sec_1_link` varchar(255) DEFAULT NULL,
  `sec_1_image` varchar(255) DEFAULT NULL,
  `sec_2_image` varchar(255) DEFAULT NULL,
  `sec_2_box_text` varchar(255) DEFAULT NULL,
  `sec_2_headline` varchar(255) DEFAULT NULL,
  `sec_2_desc` longtext DEFAULT NULL,
  `sec_2_link` varchar(255) DEFAULT NULL,
  `sec_3_box_text` varchar(255) DEFAULT NULL COMMENT 'round box',
  `sec_3_headline` varchar(255) DEFAULT NULL,
  `sec_3_box_1_headline` varchar(255) DEFAULT NULL,
  `sec_3_box_1_detl` varchar(255) DEFAULT NULL,
  `sec_3_box_2_headline` varchar(255) DEFAULT NULL,
  `sec_3_box_2_detl` varchar(255) DEFAULT NULL,
  `sec_3_box_3_headline` varchar(255) DEFAULT NULL,
  `sec_3_box_3_detl` varchar(255) DEFAULT NULL,
  `sec_3_box_4_headline` varchar(255) DEFAULT NULL,
  `sec_3_box_4_detl` varchar(255) DEFAULT NULL,
  `sec_3_image` varchar(255) DEFAULT NULL,
  `sec_4_image` varchar(255) DEFAULT NULL,
  `sec_4_headline` varchar(255) DEFAULT NULL,
  `sec_4_link1` varchar(255) DEFAULT NULL,
  `sec_4_link2` varchar(255) DEFAULT NULL,
  `sec_4_link3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_pages`
--

INSERT INTO `about_us_pages` (`id`, `description`, `image`, `sec_1_headline`, `sec_1_desc`, `sec_1_link`, `sec_1_image`, `sec_2_image`, `sec_2_box_text`, `sec_2_headline`, `sec_2_desc`, `sec_2_link`, `sec_3_box_text`, `sec_3_headline`, `sec_3_box_1_headline`, `sec_3_box_1_detl`, `sec_3_box_2_headline`, `sec_3_box_2_detl`, `sec_3_box_3_headline`, `sec_3_box_3_detl`, `sec_3_box_4_headline`, `sec_3_box_4_detl`, `sec_3_image`, `sec_4_image`, `sec_4_headline`, `sec_4_link1`, `sec_4_link2`, `sec_4_link3`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-14 10:56:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading_text` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `heading_text`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, '1694691039.webp', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', NULL, '2023-09-14 11:30:39', '2023-09-14 11:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1694690372.png', '2023-09-14 11:19:32', '2023-09-14 11:19:32'),
(2, '1694923364.jpg', '2023-09-17 04:02:45', '2023-09-17 04:02:45'),
(3, '1694923472.jpg', '2023-09-17 04:04:32', '2023-09-17 04:04:32'),
(4, '1694923496.png', '2023-09-17 04:04:56', '2023-09-17 04:04:56'),
(5, '1694923601.png', '2023-09-17 04:06:41', '2023-09-17 04:06:41');

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
-- Table structure for table `front_menus`
--

CREATE TABLE `front_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_type` int(11) NOT NULL COMMENT '1 page 2 list page',
  `rang` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `name` varchar(500) DEFAULT NULL,
  `href` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2013_11_01_070215_create_roles_table', 1),
(2, '2013_11_12_000000_create_users_table', 1),
(3, '2013_11_12_171027_create_user_details_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_12_05_113613_create_sliders_table', 1),
(8, '2022_12_06_093502_create_our_members_table', 1),
(9, '2022_12_18_103324_create_photo_gallary_categories_table', 1),
(10, '2022_12_18_103405_create_photo_gallaries_table', 1),
(11, '2022_12_18_105047_create_video_gallary_categories_table', 1),
(12, '2022_12_18_113342_create_video_galleries_table', 1),
(13, '2023_02_15_215811_create_scroll_notices_table', 1),
(14, '2023_02_16_143546_create_pages_table', 1),
(15, '2023_02_18_124204_create_front_menus_table', 1),
(16, '2023_02_22_182200_create_years_table', 1),
(17, '2023_02_26_214224_add_year_to_photo_gallary_categories_table', 1),
(18, '2023_02_28_202636_add_year_to_video_gallary_categories_table', 1),
(19, '2023_08_16_150301_add_files_to_our_members_table', 1),
(20, '2023_09_11_121843_create_notices_table', 1),
(21, '2023_09_13_143213_create_abouts_table', 1),
(22, '2023_09_13_145319_create_brands_table', 1),
(23, '2023_09_13_145621_create_partners_table', 1),
(24, '2023_09_13_145739_create_blogs_table', 1),
(25, '2023_09_13_145833_create_our_businesses_table', 1),
(26, '2023_09_14_131404_create_about_us_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_subject` varchar(255) DEFAULT NULL,
  `notice_details` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active , 0 => Inactive',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_businesses`
--

CREATE TABLE `our_businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading_text` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_businesses`
--

INSERT INTO `our_businesses` (`id`, `image`, `heading_text`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, '1694690498.png', 'Ejab Agro Ltd.', 'jab Agro Ltd. (formed in 2010) is involved in following activities: Tissue Culture Lab, seed production and marketing. The products of this company are potato plantlet, potato mini tuber, potato seed of different generation (starting from basic to certified), high yielding rice seed, hybrid rice seed, etc. although our seed business started in 2007 under the banner of Northern Agricultural & Industrial Co. Ltd. But eventually Ejab Agro Ltd. was formed to give it more focus and emphasis on the seed business.', NULL, '2023-09-14 11:21:38', '2023-09-14 11:21:38'),
(2, '1694690988.png', 'Himadri Limited', 'Under “Himadri Limited” and “Multipurpose Himadri Agro- Processing Co. Ltd”, we currently have 6 potato cold storages all in the North of Bangladesh, in Rangpur, Shibganj, Upson (Bogra), Battoli (Khetlal, Joypurhat), Jagannathpur (Thakurgaon), Komorpur (Birganj, Dinajpur). Future plan is to increase the number of cold storages in different locations of Bangladesh and also expand the product range of items that can be stored other than potatoes like some fruits and vegetables.', NULL, '2023-09-14 11:29:48', '2023-09-14 11:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `our_members`
--

CREATE TABLE `our_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `given_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `member_id` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `anniversary` varchar(255) DEFAULT NULL,
  `name_of_spouse` varchar(255) DEFAULT NULL,
  `occupation_of_spouse` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `cell_number` varchar(255) DEFAULT NULL,
  `tel_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `nid` text DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `passport` text DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `name_of_institute` varchar(255) DEFAULT NULL,
  `e_tin_number` varchar(255) DEFAULT NULL,
  `etin` text DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `police_station` varchar(255) DEFAULT NULL,
  `post_office` varchar(255) DEFAULT NULL,
  `postalCode` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `perVillage` varchar(255) DEFAULT NULL,
  `perBlock` varchar(255) DEFAULT NULL,
  `perPoliceStation` varchar(255) DEFAULT NULL,
  `perPostOffice` varchar(255) DEFAULT NULL,
  `perPostalCode` varchar(255) DEFAULT NULL,
  `perDistrict` varchar(255) DEFAULT NULL,
  `perCountry` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `profVillage` varchar(255) DEFAULT NULL,
  `profBlock` varchar(255) DEFAULT NULL,
  `profPoliceStation` varchar(255) DEFAULT NULL,
  `profPostOffice` varchar(255) DEFAULT NULL,
  `profPostalCode` varchar(255) DEFAULT NULL,
  `profDistrict` varchar(255) DEFAULT NULL,
  `profCountry` varchar(255) DEFAULT NULL,
  `membership_applied` varchar(255) DEFAULT NULL,
  `proposed_name` varchar(255) DEFAULT NULL,
  `proposed_membership_id` varchar(255) DEFAULT NULL,
  `club_designation` varchar(255) DEFAULT NULL,
  `membership_no` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `show_font` int(11) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `published` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `short_text`, `created_at`, `updated_at`) VALUES
(1, '1694924779.jpg', 'Belgin is one of the leading lubricant producers in Turkey with its deep technical expertise and long-term cooperation with its business partners dating from 1953 to the present day.', '2023-09-14 11:20:43', '2023-09-17 04:31:49'),
(2, '1694924882.jpg', 'CEPSA is a Spanish multinational oil and gas company. CEPSA produces a wide range of petroleum-based products, including gasoline, diesel, aviation fuel, and lubricants.', '2023-09-17 04:28:03', '2023-09-17 04:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `photo_gallaries`
--

CREATE TABLE `photo_gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Caption` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `photo_gallary_category_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallary_categories`
--

CREATE TABLE `photo_gallary_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year_id` varchar(255) NOT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `type`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-09-14 10:56:13', NULL),
(2, 'Admin', 'admin', '2023-09-14 10:56:13', NULL),
(3, 'Humar Resource Execu', 'hrexecutive', '2023-09-14 10:56:13', NULL),
(4, 'Accountant', 'accountant', '2023-09-14 10:56:13', NULL),
(5, 'General User', 'user', '2023-09-14 10:56:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scroll_notices`
--

CREATE TABLE `scroll_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `published_date` varchar(255) NOT NULL,
  `unpublished_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scroll_notices`
--

INSERT INTO `scroll_notices` (`id`, `text`, `published_date`, `unpublished_date`, `created_at`, `updated_at`) VALUES
(1, 'This is dummy notice', '2023-09-14', '2023-09-30', '2023-09-14 11:07:23', '2023-09-14 11:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` text DEFAULT NULL,
  `short_title` text DEFAULT NULL,
  `long_title` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `link`, `short_title`, `long_title`, `created_at`, `updated_at`) VALUES
(1, '', NULL, 'WELCOME TO EJAB GROUP', 'Ejab Group with the establishment of National Construction Company', '2023-09-14 11:08:07', '2023-09-14 11:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>Logged 0 => Inactive',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `contact_no`, `role_id`, `password`, `image`, `status`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Superadmin', 'superadmin', 'superadmin@email.com', '01600000000', 1, '55057a011158053a051aaabd870e79447d477055', NULL, 1, 1, NULL, NULL, '2023-09-14 10:56:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `acc_type` text DEFAULT '1',
  `photo` varchar(255) DEFAULT NULL,
  `address1` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `zip` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_gallary_categories`
--

CREATE TABLE `video_gallary_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year_id` varchar(255) NOT NULL,
  `feature_img` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `video_gallary_category_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `feature_photo` varchar(255) DEFAULT NULL,
  `feature_video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_pages`
--
ALTER TABLE `about_us_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_menus`
--
ALTER TABLE `front_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_businesses`
--
ALTER TABLE `our_businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_members`
--
ALTER TABLE `our_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `our_members_email_unique` (`email`),
  ADD UNIQUE KEY `our_members_membership_no_unique` (`membership_no`),
  ADD KEY `our_members_role_id_index` (`role_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
-- Indexes for table `photo_gallaries`
--
ALTER TABLE `photo_gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallary_categories`
--
ALTER TABLE `photo_gallary_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_type_unique` (`type`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `scroll_notices`
--
ALTER TABLE `scroll_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_contact_no_unique` (`contact_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallary_categories`
--
ALTER TABLE `video_gallary_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
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
-- AUTO_INCREMENT for table `about_us_pages`
--
ALTER TABLE `about_us_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_menus`
--
ALTER TABLE `front_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_businesses`
--
ALTER TABLE `our_businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_members`
--
ALTER TABLE `our_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_gallaries`
--
ALTER TABLE `photo_gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_gallary_categories`
--
ALTER TABLE `photo_gallary_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scroll_notices`
--
ALTER TABLE `scroll_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_gallary_categories`
--
ALTER TABLE `video_gallary_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `our_members`
--
ALTER TABLE `our_members`
  ADD CONSTRAINT `our_members_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
