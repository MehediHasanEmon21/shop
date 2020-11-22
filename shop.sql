-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 11:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `category`, `blog`, `report`, `contact`, `coupon`, `order`, `role`, `comment`, `product`, `other`, `return`, `setting`, `stock`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '017866587762', 'admin@gmail.com', NULL, '$2y$10$BZXslWUmd2ykTQ5r3mZMRunNBBtPEW66o1g1Z4F93PoHOGcxHQBLq', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
(2, 'Samin', '01675543246', 'samim@gmail.com', NULL, '$2y$10$.HCssz9YVwRrJdnMktdKM.fb/RjfiYsMWV7oBA8qJNdhH5APKu6eK', NULL, '1', NULL, '1', NULL, '1', '1', '1', NULL, '1', '1', NULL, NULL, '1', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Samsung', 'backend/images/brand/12_10_19_48.png', NULL, NULL, 'samsung'),
(4, 'Sony', 'backend/images/brand/121019_15_06_56.jpg', NULL, NULL, 'sony'),
(5, 'Huawei', 'backend/images/brand/121019_16_29_06.jpg', NULL, NULL, 'huawei'),
(6, 'Rado', 'backend/images/brand/171019_14_37_17.png', NULL, NULL, 'rado'),
(7, 'Lenovo', 'backend/images/brand/231019_15_14_36.jpg', NULL, NULL, 'lenovo'),
(8, 'Assus', 'backend/images/brand/231019_15_25_36.png', NULL, NULL, 'assus'),
(9, 'Canon', 'backend/images/brand/231019_15_42_36.png', NULL, NULL, 'canon'),
(10, 'Cats eye', 'backend/images/brand/231019_15_55_36.png', NULL, NULL, 'cats-eye'),
(11, 'DELL', 'backend/images/brand/231019_15_10_37.png', NULL, NULL, 'dell'),
(12, 'Pluspoint', 'backend/images/brand/231019_15_29_37.jpg', NULL, NULL, 'pluspoint'),
(13, 'Mens World', 'backend/images/brand/231019_15_40_37.png', NULL, NULL, 'mens-world'),
(14, 'Jamuna', 'backend/images/brand/231019_15_51_37.jpg', NULL, NULL, 'jamuna'),
(15, 'Kelvinator', 'backend/images/brand/231019_15_06_38.png', NULL, NULL, 'kelvinator'),
(16, 'Walton', 'backend/images/brand/231019_15_16_38.png', NULL, NULL, 'walton'),
(17, 'Xiaomi', 'backend/images/brand/231019_15_09_39.png', NULL, NULL, 'xiaomi'),
(18, 'Apple', 'backend/images/brand/231019_15_52_39.png', NULL, NULL, 'apple'),
(19, 'Otobi', 'backend/images/brand/291019_15_31_58.png', NULL, NULL, 'otobi'),
(20, 'Yellow', 'backend/images/brand/GmWSvQ5tpJ.png', NULL, '2020-04-04 07:02:36', 'yellow'),
(21, 'Bloom', 'backend/images/brand/291019_17_18_02.png', NULL, NULL, 'bloom'),
(22, 'Pond\'s', 'backend/images/brand/rJ8Jm5gOaN.jpg', '2020-04-04 04:53:55', '2020-04-04 04:53:55', 'pond\'s'),
(23, 'Adidas', 'backend/images/brand/1EyhJSxMpM.png', '2020-04-04 05:48:06', '2020-04-04 05:48:06', 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`, `slug`) VALUES
(8, 'Men\'s Fashion', '2020-04-03 23:35:45', '2020-04-04 00:44:45', 'men\'s-fashion'),
(9, 'Women\'s Fashion', '2020-04-03 23:37:03', '2020-04-04 00:44:33', 'women\'s-fashion'),
(10, 'Child\'s', '2020-04-03 23:37:26', '2020-04-04 00:45:02', 'child\'s'),
(11, 'Watch', '2020-04-03 23:37:55', '2020-04-03 23:37:55', 'watch'),
(12, 'Furniture', '2020-04-03 23:38:12', '2020-04-03 23:38:12', 'furniture'),
(13, 'Electronics', '2020-04-03 23:38:21', '2020-04-03 23:38:21', 'electronics'),
(14, 'Health', '2020-04-03 23:38:30', '2020-04-03 23:38:30', 'health'),
(15, 'Beauty', '2020-04-03 23:38:40', '2020-04-03 23:38:40', 'beauty'),
(16, 'Sports & Outdoor', '2020-04-03 23:38:53', '2020-04-03 23:38:53', 'sports-&-outdoor');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'emon5', 5.00, '2020-03-30 22:05:52', '2020-03-30 22:05:52'),
(2, 'emon10', 10.00, '2020-03-30 22:10:08', '2020-03-30 22:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2020_03_22_200030_create_categories_table', 1),
(6, '2020_03_22_200055_create_sub_categories_table', 1),
(7, '2020_03_22_200109_create_brands_table', 1),
(8, '2020_03_23_183817_add_column_to_categories_table', 2),
(9, '2020_03_23_184344_add_column_to_sub_categories_table', 2),
(10, '2020_03_23_184534_add_column_to_brands_table', 2),
(11, '2020_03_31_033945_create_coupons_table', 3),
(12, '2020_04_01_003751_create_newslaters_table', 4),
(14, '2020_04_02_010617_create_products_table', 5),
(15, '2020_04_04_042942_create_post_category_table', 6),
(16, '2020_04_04_043018_create_posts_table', 6),
(18, '2020_04_06_044053_create_wishlists_table', 7),
(22, '2020_05_10_015532_create_orders_table', 8),
(23, '2020_05_10_015543_create_order_details_table', 8),
(24, '2020_05_10_015644_create_shippings_table', 8),
(25, '2020_10_17_050222_create_sitesetting_table', 9),
(26, '2020_10_17_050950_create_seo_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'emon@gmail.com', '2020-03-31 19:16:54', '2020-03-31 19:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` double DEFAULT NULL,
  `blnc_transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `shipping` double DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `status_code` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `paying_amount`, `blnc_transection`, `stripe_order_id`, `subtotal`, `shipping`, `payment_type`, `vat`, `total`, `status_code`, `status`, `month`, `date`, `year`, `return_order`, `created_at`, `updated_at`) VALUES
(6, 3, 'card_1HOrPsJlWaDQlLwWpFL1n8HS', 220, 'txn_1HOrPtJlWaDQlLwWDyqaBQC7', '5f569eecd46c7', 210, 10, 'stripe', 0, 220, 1234, '3', 'September', '07-09-20', '2020', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `singleprice` double DEFAULT NULL,
  `totalprice` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_color`, `product_size`, `product_quantity`, `singleprice`, `totalprice`, `created_at`, `updated_at`) VALUES
(7, 6, 33, 'Panjabi latest collection', 'black', NULL, 2, 100, 200, NULL, NULL),
(8, 6, 31, 'New stylish tshirt', 'red', 'xl', 2, 10, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `post_title_en`, `post_title_bn`, `post_image`, `details_en`, `details_bn`, `created_at`, `updated_at`) VALUES
(3, 2, 'hello learn hunter', 'হ্যালো শিকারী শিখুন', 'public/backend/images/post/1648020855193806.jpg', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span>', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের স্ট্যান্ডার্ড ডামি পাঠ্যরূপে রয়েছেন, যখন কোনও অজানা প্রিন্টার একটি প্রকারের গ্যালি নেন এবং কোনও ধরণের নমুনার বই তৈরি করতে স্ক্র্যাম্বল করে bled এটি কেবল পাঁচটি শতাব্দীই বেঁচে নেই, বৈদ্যুতিন টাইপসেটেটিংয়ে ঝাঁপিয়ে পড়েছে, মূলত অপরিবর্তিত রয়েছে। ১৯60০ এর দশকে এটি লোরেম ইপসাম প্যাসেজ সহ লেটারসেট শীট প্রকাশের সাথে জনপ্রিয় হয়েছিল এবং আরও সম্প্রতি এলডাস', NULL, NULL),
(4, 2, 'This is the second post of ecommerce', 'এটি ইকমার্সের দ্বিতীয় পোস্ট', 'public/backend/images/post/1650702364583191.png', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</span>', '<div><br></div><div><span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 24px; white-space: pre-wrap; background-color: rgb(248, 249, 250);\">এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে কোনও পৃষ্ঠার বিন্যাসটি দেখার সময় পাঠকের পাঠযোগ্য সামগ্রী দ্বারা বিভ্রান্ত হবে racted লরেম ইপসাম ব্যবহারের বিষয়টি হ\'ল এটিতে চিঠিপত্রের কম-বেশি স্বাভাবিক বিতরণ থাকে, যেমন \'এখানে সামগ্রী, এখানে সামগ্রী\' ব্যবহার করার বিপরীতে, এটি পড়ার মতো ইংরাজির মতো দেখায়। অনেক ডেস্কটপ প্রকাশনা প্যাকেজ এবং ওয়েব পৃষ্ঠার সম্পাদক এখন লোরেম ইপসামকে তাদের ডিফল্ট মডেল পাঠ্য হিসাবে ব্যবহার করেন এবং \'লরেম ইপসাম\' অনুসন্ধানের ফলে তাদের শৈশবকালীন অনেকগুলি ওয়েবসাইট উন্মোচিত হবে। বিভিন্ন সংস্করণ কয়েক বছর ধরে বিকশিত হয়েছে, কখনও দুর্ঘটনার দ্বারা, কখনও কখনও উদ্দেশ্য (ইনজেকশনের হাস্যরস এবং এর মতো</span><br></div>', NULL, NULL),
(5, 3, 'This is the third post of ecommerce', 'এটি ইকমার্সের তৃতীয় পোস্ট', 'public/backend/images/post/1650702829671403.png', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 24px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 283px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><span tabindex=\"0\" lang=\"bn\">এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে কোনও পৃষ্ঠার বিন্যাসটি দেখার সময় পাঠকের পাঠযোগ্য সামগ্রী দ্বারা বিভ্রান্ত হবে racted লরেম ইপসাম ব্যবহারের বিষয়টি হ\'ল এটিতে চিঠিপত্রের কম-বেশি স্বাভাবিক বিতরণ থাকে, যেমন \'এখানে সামগ্রী, এখানে সামগ্রী\' ব্যবহার করার বিপরীতে, এটি পড়ার মতো ইংরাজির মতো দেখায়। অনেক ডেস্কটপ প্রকাশনা প্যাকেজ এবং ওয়েব পৃষ্ঠার সম্পাদক এখন লোরেম ইপসামকে তাদের ডিফল্ট মডেল পাঠ্য হিসাবে ব্যবহার করেন এবং \'লরেম ইপসাম\' অনুসন্ধানের ফলে তাদের শৈশবকালীন অনেকগুলি ওয়েবসাইট উন্মোচিত হবে। বিভিন্ন সংস্করণ কয়েক বছর ধরে বিকশিত হয়েছে, কখনও দুর্ঘটনার দ্বারা, কখনও কখনও উদ্দেশ্য </span></pre>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `category_name_en`, `category_name_bn`, `created_at`, `updated_at`) VALUES
(1, 'Offer', 'অফার ', NULL, NULL),
(2, 'Service', 'সার্ভিস ', NULL, NULL),
(3, 'Event', 'ইভেন্ট ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` decimal(8,2) DEFAULT NULL,
  `discount_price` decimal(8,2) DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` int(11) DEFAULT NULL,
  `hot_deal` int(11) DEFAULT NULL,
  `best_rated` int(11) DEFAULT NULL,
  `mid_slider` int(11) DEFAULT NULL,
  `hot_new` int(11) DEFAULT NULL,
  `trend` int(11) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyone_getone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`, `slug`, `buyone_getone`) VALUES
(1, 3, 4, 2, 'Men\'s Black Watch u', 'w-100u', 100, 'details u<br>', 'red,black,golden', 'Medium,Small,Big', '2000.00', NULL, 'link u', 1, 1, 1, 1, 1, 1, 'backend/images/product/1662944035334681.jpg', 'backend/images/product/1662944035702712.jpg', 'backend/images/product/1662944139859099.jpg', 1, '2020-04-01 23:04:58', '2020-04-03 03:45:15', '', NULL),
(3, 13, 21, 18, 'Apple Iphone 6s', 'i-100', 10, '<p>                    \r\n                   </p><p data-spec=\"comment\">Also known as Apple iPhone 10, Apple iPhone Ten<br>\r\nVersions:<br>\r\nA1865 (USA, Hong Kong, Australia, New Zealand, China)<br>\r\nA1901 (EMEA, UAE, LATAM, Canada, USA - AT&T/T-Mobile, Singapore)<br>\r\nA1902 (Japan), A1903 (Unknown market)</p><p>\r\n\r\n\r\n</p><table style=\"max-height: 26px;\" cellspacing=\"0\">\r\n<tbody><tr class=\"tr-hover\">\r\n<th rowspan=\"15\" scope=\"row\">Network</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/network-bands.php3\">Technology</a></td>\r\n<td class=\"nfo\"><a href=\"https://www.gsmarena.com/apple_iphone_x-8858.php#\" class=\"link-network-detail collapse\" data-spec=\"nettech\">GSM / HSPA / LTE</a></td>\r\n</tr>\r\n\r\n\r\n\r\n	\r\n\r\n	\r\n\r\n\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"2\" scope=\"row\">Launch</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Announced</a></td>\r\n<td class=\"nfo\" data-spec=\"year\">2017, September</td>\r\n</tr>	\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=phone-life-cycle\">Status</a></td>\r\n<td class=\"nfo\" data-spec=\"status\">Available. Released 2017, October</td>\r\n</tr>\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"6\" scope=\"row\">Body</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/apple_iphone_x-8858.php#\">Dimensions</a></td>\r\n<td class=\"nfo\" data-spec=\"dimensions\">143.6 x 70.9 x 7.7 mm (5.65 x 2.79 x 0.30 in)</td>\r\n</tr><tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/apple_iphone_x-8858.php#\">Weight</a></td>\r\n<td class=\"nfo\" data-spec=\"weight\">174 g (6.14 oz)</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=build\">Build</a></td>\r\n<td class=\"nfo\" data-spec=\"build\">Glass front (Gorilla Glass), glass back (Gorilla Glass), stainless steel frame</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=sim\">SIM</a></td>\r\n<td class=\"nfo\" data-spec=\"sim\">Nano-SIM</td>\r\n</tr>\r\n<tr><td class=\"ttl\"> </td><td class=\"nfo\" data-spec=\"bodyother\">IP67 dust/water resistant (up to 1m for 30 mins)<br>\r\nApple Pay (Visa, MasterCard, AMEX certified)</td></tr>\r\n		\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"5\" scope=\"row\">Display</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=display-type\">Type</a></td>\r\n<td class=\"nfo\" data-spec=\"displaytype\">Super Retina OLED capacitive touchscreen, 16M colors</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/apple_iphone_x-8858.php#\">Size</a></td>\r\n<td class=\"nfo\" data-spec=\"displaysize\">5.8 inches, 84.4 cm<sup>2</sup> (~82.9% screen-to-body ratio)</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=resolution\">Resolution</a></td>\r\n<td class=\"nfo\" data-spec=\"displayresolution\">1125 x 2436 pixels, 19.5:9 ratio (~458 ppi density)</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=screen-protection\">Protection</a></td>\r\n<td class=\"nfo\" data-spec=\"displayprotection\">Scratch-resistant glass, oleophobic coating</td>\r\n</tr>\r\n<tr><td class=\"ttl\"> </td><td class=\"nfo\" data-spec=\"displayother\">625 nits max brightness (advertised)<br>\r\nDolby Vision<br>\r\nHDR10<br>\r\nWide color gamut<br>\r\n3D Touch<br>\r\nTrue-tone<br>\r\n120Hz touch-sensing</td></tr>\r\n		\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"4\" scope=\"row\">Platform</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=os\">OS</a></td>\r\n<td class=\"nfo\" data-spec=\"os\">iOS 11.1.1, upgradable to iOS 13.4</td>\r\n</tr>\r\n<tr><td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=chipset\">Chipset</a></td>\r\n<td class=\"nfo\" data-spec=\"chipset\">Apple A11 Bionic (10 nm)</td>\r\n</tr>\r\n<tr><td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=cpu\">CPU</a></td>\r\n<td class=\"nfo\" data-spec=\"cpu\">Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)</td>\r\n</tr>\r\n<tr><td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=gpu\">GPU</a></td>\r\n<td class=\"nfo\" data-spec=\"gpu\">Apple GPU (three-core graphics)</td>\r\n</tr>\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"5\" scope=\"row\">Memory</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=memory-card-slot\">Card slot</a></td>\r\n\r\n\r\n<td class=\"nfo\" data-spec=\"memoryslot\">No</td></tr>\r\n\r\n	\r\n\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=dynamic-memory\">Internal</a></td>\r\n<td class=\"nfo\" data-spec=\"internalmemory\">64GB 3GB RAM, 256GB 3GB RAM</td>\r\n</tr>\r\n	\r\n\r\n<tr><td class=\"ttl\"> </td><td class=\"nfo\" data-spec=\"memoryother\">NVMe</td></tr>\r\n			\r\n\r\n\r\n</tbody></table><p>\r\n\r\n\r\n	</p><table cellspacing=\"0\">\r\n	<tbody><tr>\r\n	<th rowspan=\"4\" scope=\"row\" class=\"small-line-height\">Main Camera</th>\r\n		<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=camera\">Dual</a></td>\r\n	<td class=\"nfo\" data-spec=\"cam1modules\">12 MP, f/1.8, 28mm (wide), 1/3\", 1.22µm, dual pixel PDAF, OIS<br>\r\n12 MP, f/2.4, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom</td>\r\n	</tr>\r\n		<tr>\r\n	<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=camera\">Features</a></td>\r\n	<td class=\"nfo\" data-spec=\"cam1features\">Quad-LED dual-tone flash, HDR (photo/panorama), panorama, HDR</td>\r\n	</tr>\r\n		<tr>\r\n	<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=camera\">Video</a></td>\r\n	<td class=\"nfo\" data-spec=\"cam1video\">2160p@24/30/60fps, 1080p@30/60/120/240fps</td>\r\n	</tr>\r\n		</tbody></table><p>\r\n\r\n\r\n	</p><table cellspacing=\"0\">\r\n	<tbody><tr>\r\n	<th rowspan=\"4\" scope=\"row\" class=\"small-line-height\">Selfie camera</th>\r\n		<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=secondary-camera\">Dual</a></td>\r\n	<td class=\"nfo\" data-spec=\"cam2modules\">7 MP, f/2.2, 32mm (standard)<br>\r\nSL 3D, (depth/biometrics sensor)</td>\r\n	</tr>\r\n		<tr>\r\n	<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=secondary-camera\">Features</a></td>\r\n	<td class=\"nfo\" data-spec=\"cam2features\">HDR</td>\r\n	</tr>\r\n		<tr>\r\n	<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=secondary-camera\">Video</a></td>\r\n	<td class=\"nfo\" data-spec=\"cam2video\">1080p@30fps</td>\r\n	</tr>\r\n		</tbody></table><p>\r\n\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"3\" scope=\"row\">Sound</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=loudspeaker\">Loudspeaker</a> </td>\r\n<td class=\"nfo\">Yes, with stereo speakers</td>\r\n</tr>\r\n\r\n	\r\n\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=audio-jack\">3.5mm jack</a> </td>\r\n<td class=\"nfo\">No</td>\r\n</tr>\r\n	\r\n\r\n	\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"9\" scope=\"row\">Comms</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=wi-fi\">WLAN</a></td>\r\n<td class=\"nfo\" data-spec=\"wlan\">Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=bluetooth\">Bluetooth</a></td>\r\n<td class=\"nfo\" data-spec=\"bluetooth\">5.0, A2DP, LE</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=gps\">GPS</a></td>\r\n<td class=\"nfo\" data-spec=\"gps\">Yes, with A-GPS, GLONASS, GALILEO, QZSS</td>\r\n</tr>  \r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=nfc\">NFC</a></td>\r\n<td class=\"nfo\" data-spec=\"nfc\">Yes</td>\r\n</tr>\r\n	\r\n	\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=fm-radio\">Radio</a></td>\r\n<td class=\"nfo\" data-spec=\"radio\">No</td>\r\n</tr>\r\n   \r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=usb\">USB</a></td>\r\n<td class=\"nfo\" data-spec=\"usb\">2.0, proprietary reversible connector</td>\r\n</tr>\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"9\" scope=\"row\">Features</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=sensors\">Sensors</a></td>\r\n<td class=\"nfo\" data-spec=\"sensors\">Face ID, accelerometer, gyro, proximity, compass, barometer</td>\r\n</tr>\r\n\r\n\r\n 	\r\n\r\n 	\r\n 	\r\n<tr><td class=\"ttl\"> </td><td class=\"nfo\" data-spec=\"featuresother\">Siri natural language commands and dictation</td></tr>\r\n	\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"7\" scope=\"row\">Battery</th>\r\n<td class=\"ttl\"> </td>\r\n<td class=\"nfo\" data-spec=\"batdescription1\">Non-removable Li-Ion 2716 mAh battery (10.35 Wh)</td>\r\n</tr>\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=battery-charging\">Charging</a></td>\r\n<td class=\"nfo\">Fast charging 15W, 50% in 30 min (advertised)<br>\r\nUSB Power Delivery 2.0<br>\r\nQi wireless charging</td>\r\n</tr>\r\n\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=talk-time\">Talk time</a></td>\r\n<td class=\"nfo\" data-spec=\"battalktime1\">Up to 21 h (3G)</td>\r\n</tr>\r\n\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=music-playback-time\">Music play</a></td>\r\n<td class=\"nfo\" data-spec=\"batmusicplayback1\">Up to 60 h</td>\r\n</tr>\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"6\" scope=\"row\">Misc</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=build\">Colors</a></td>\r\n<td class=\"nfo\" data-spec=\"colors\">Space Gray, Silver</td>\r\n</tr>\r\n\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=models\">Models</a></td>\r\n<td class=\"nfo\" data-spec=\"models\">A1865, A1901, A1902, A1903</td>\r\n</tr>\r\n\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=sar\">SAR</a></td>\r\n<td class=\"nfo\" data-spec=\"sar-us\">1.09 W/kg (head)     1.17 W/kg (body)     </td>\r\n</tr>\r\n\r\n\r\n<tr>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=price\">Price</a></td>\r\n<td class=\"nfo\" data-spec=\"price\"><a href=\"https://www.gsmarena.com/apple_iphone_x-price-8858.php\">$ 400.00 / € 452.37 / £ 468.99 / ₹ 69,999</a></td>\r\n</tr>\r\n</tbody></table><p>\r\n\r\n\r\n</p><table cellspacing=\"0\">\r\n<tbody><tr>\r\n<th rowspan=\"6\" scope=\"row\">Tests</th>\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/glossary.php3?term=benchmarking\">Performance</a></td>\r\n<td class=\"nfo\" data-spec=\"tbench\">\r\nAnTuTu: 233100 (v7)<br>\r\nGeekBench: 10215 (v4.4)<br>\r\nGFXBench: 28fps (ES 3.1 onscreen)</td>\r\n</tr><tr>\r\n\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p2.php\">Display</a></td>\r\n<td class=\"nfo\">\r\n<a class=\"noUnd\" href=\"https://www.gsmarena.com/apple_iphone_x-review-1681p3.php#dt\">Contrast ratio: Infinity (nominal), 5.013 (sunlight)</a></td>\r\n</tr><tr>\r\n\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p5.php\">Camera</a></td>\r\n<td class=\"nfo\">\r\n<a class=\"noUnd\" href=\"https://www.gsmarena.com/piccmp.php3?idType=1&idPhone1=8858&nSuggest=1\">Photo</a> / <a class=\"noUnd\" href=\"https://www.gsmarena.com/vidcmp.php3?idType=3&idPhone1=8858&nSuggest=1\">Video</a></td>\r\n</tr><tr>\r\n\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p7.php\">Loudspeaker</a></td>\r\n<td class=\"nfo\">\r\n<a class=\"noUnd\" href=\"https://www.gsmarena.com/apple_iphone_x-review-1681p6.php#lt\">Voice 68dB / Noise 74dB / Ring 76dB</a>\r\n\r\n</td>\r\n</tr><tr>\r\n\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p4.php\">Audio quality</a></td>\r\n<td class=\"nfo\">\r\n<a class=\"noUnd\" href=\"https://www.gsmarena.com/apple_iphone_x-review-1681p7.php#aq\">Noise -93.7dB / Crosstalk -82.8dB</a></td>\r\n</tr><tr>\r\n\r\n\r\n<td class=\"ttl\"><a href=\"https://www.gsmarena.com/gsmarena_lab_tests-review-751p6.php\">Battery life</a></td>\r\n<td class=\"nfo\" data-spec=\"batlife\">\r\n<div style=\"position:relative;\">\r\n<a href=\"https://www.gsmarena.com/apple_iphone_x-8858.php#\">Endurance rating 74h</a>\r\n</div>\r\n</td>\r\n</tr><tr>\r\n\r\n</tr></tbody></table><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"note\"><strong>Disclaimer.</strong> We can not guarantee that the information on this page is 100% correct. <a href=\"https://www.gsmarena.com/glossary.php3?term=data-disclaimer\">Read more</a></p><p><br></p>', 'red,black', 'Medium,Large', '120.00', '100.00', 'link', 1, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663024353099071.png', 'backend/images/product/1663024353738684.jpg', 'backend/images/product/1663024353791899.jpg', 1, '2020-04-04 01:00:13', '2020-04-04 03:42:20', '', NULL),
(4, 15, NULL, 21, 'Woman Cosmetics Skin Care', 'b-100', 10, '<p>                    \r\n                   &nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium aspernatur odio excepturi asperiores eum beatae voluptatem commodi dolorum vero eveniet laboriosam ab culpa voluptatibus quam vitae quibusdam, blanditiis iusto modi tenetur expedita ipsa alias aliquam illo cumque. Distinctio animi facere deserunt id quis soluta dolores perspiciatis, iure, iusto unde nemo! Doloribus quae ipsum, eaque iure voluptatum a incidunt consequuntur laboriosam, vitae, cupiditate quia! Autem porro suscipit voluptatem impedit provident beatae sint eligendi repudiandae quod. Commodi, temporibus quidem perferendis excepturi, ducimus aspernatur, assumenda perspiciatis iusto eum quibusdam consectetur velit a. Quaerat reiciendis, quidem, voluptas aperiam id minima ducimus in molestias quam iusto natus, quis tempora quod rem itaque asperiores pariatur perspiciatis molestiae, laudantium adipisci autem sint ipsum? Fugiat laborum adipisci cum esse. Earum autem perspiciatis est error sapiente, ut aliquid, beatae dolores minus cupiditate architecto, tempore ipsam! Labore culpa nostrum ducimus, minus numquam fugiat aliquid totam rem iste laboriosam eligendi veniam tenetur, ex commodi quae, necessitatibus voluptates adipisci a quis voluptatum corporis ipsam? Beatae velit aliquid rem, pariatur laboriosam deserunt quas architecto illum, tempore adipisci facilis, doloribus amet? Quas soluta facilis eius libero tenetur exercitationem porro, tempore autem! Necessitatibus, obcaecati. Hic quaerat voluptate consectetur deleniti laudantium, voluptates optio dolores minima nulla, velit labore. Totam nesciunt corporis ipsa beatae sit perspiciatis quis magni nisi laboriosam aut dolore quisquam eius, quos iste modi molestias, cumque cupiditate necessitatibus possimus harum sequi minus, consequuntur neque facere. Velit rerum reprehenderit officia sunt ab ducimus sed repudiandae aliquid similique, doloribus nulla facere voluptas vitae dignissimos enim dolore molestiae facilis, quae rem quos saepe distinctio, a maiores tenetur amet. Aliquid nemo, vero ex autem eligendi reiciendis? Libero repudiandae similique nobis rerum quasi unde. Excepturi vel, porro praesentium molestiae soluta ut assumenda, incidunt quaerat dolor velit in eaque eveniet, veritatis? Saepe, totam, eveniet. Reprehenderit officia dolorum amet unde aliquid fugiat eos quas esse rerum, harum facere eveniet consectetur, ipsa animi perferendis fugit. Omnis quod sint quisquam laboriosam cupiditate, excepturi, maxime natus velit laborum voluptatibus debitis sed doloremque ipsum pariatur delectus magnam consequuntur eos soluta, numquam voluptas illum commodi nesciunt. Eum voluptatum commodi repellendus culpa similique illum sunt. Quam, mollitia. Soluta dicta iusto aliquid fugiat doloribus ab cum quia necessitatibus et. Voluptatibus, cupiditate incidunt neque unde eveniet reprehenderit, blanditiis qui, deserunt tempore sapiente repudiandae nihil eos provident, modi ipsa architecto adipisci quia. Omnis minus necessitatibus quaerat, et porro. Soluta ducimus voluptates laborum sit necessitatibus laboriosam harum eum, placeat cupiditate incidunt quaerat? Similique vero alias autem sequi, culpa iure enim beatae fugit a fugiat libero, totam minus quo ullam molestias, est. Id natus possimus veniam temporibus iste pariatur ullam omnis, voluptas dicta nulla magni sit, quos eaque in, ducimus dolor eius iusto beatae. Accusantium omnis debitis quasi adipisci, minima tenetur rerum alias voluptas inventore, natus, culpa commodi error! Optio fugit aliquam qui eveniet hic, non, earum beatae veritatis sapiente commodi autem consectetur eos accusamus, perferendis amet minima obcaecati itaque doloribus in corporis magnam dolores voluptatibus eaque distinctio! Suscipit voluptas delectus voluptatum enim et inventore? Officiis ab pariatur, recusandae consequuntur provident atque.</p>', 'red,blue', NULL, '10.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663037887837152.jpg', 'backend/images/product/1663037887925181.jpg', 'backend/images/product/1663037887953683.jpg', 1, '2020-04-04 04:35:21', '2020-04-04 04:35:21', '', NULL),
(5, 15, NULL, 21, 'Nail Polish', 'b-101', 12, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis consequuntur deserunt, eaque porro ea architecto fuga, tenetur pariatur reiciendis nisi totam ullam quaerat quas? Consequatur quisquam, reiciendis impedit assumenda odio adipisci harum neque quasi rerum! Delectus accusamus voluptas vero veritatis sapiente, eum enim laudantium fugiat placeat quo, facere doloribus. Odio ea non, velit! Ipsa consectetur quasi delectus eaque eligendi natus quas voluptate repudiandae, sapiente reiciendis quo illum quaerat quae assumenda, minus possimus quis qui cumque velit numquam dolorem labore dolore! Quasi est voluptatem iusto adipisci esse, eum omnis. Ratione consequuntur ut commodi, repellendus illo natus quaerat provident pariatur cumque, quae. Incidunt deserunt libero, reprehenderit recusandae necessitatibus ex repellat dolorum rerum ipsa tenetur rem, quasi obcaecati numquam dolores sapiente minus, ipsum optio! Nemo error repellendus laboriosam quibusdam officiis sapiente, ad nobis, voluptatem quos, culpa harum libero doloremque, molestiae veniam tempora! Magnam dolor illo molestias facilis mollitia dignissimos sunt nihil unde, eveniet officia ab ducimus cupiditate praesentium quod aut sapiente perspiciatis labore inventore incidunt repudiandae. Rem adipisci iure atque, placeat natus reiciendis veritatis magnam dolorum minus nesciunt, numquam facere, et quia laborum perferendis earum reprehenderit obcaecati neque pariatur. Quas, asperiores totam aspernatur hic repellendus mollitia eum laudantium commodi eaque omnis soluta doloribus, voluptatem ratione, molestias. Accusantium earum ullam nam dolore quas quo accusamus. Consequatur maxime voluptate veniam labore commodi, quod minus quo deleniti earum voluptatum cumque nisi culpa similique velit hic. Recusandae distinctio nobis, adipisci nam sequi, cumque blanditiis porro, doloribus eligendi ex, voluptatem architecto ratione facere in non. Possimus corrupti earum at, obcaecati, debitis asperiores velit nostrum facilis ipsam quas sequi ipsum quo, sint numquam omnis impedit? Facere accusantium perferendis similique nisi nostrum minima aliquid, cupiditate incidunt consequuntur dolore quidem, animi, voluptatem temporibus recusandae optio nulla nihil neque? Laborum quia ipsum voluptate vitae, magnam numquam. Cum, quasi blanditiis pariatur molestiae, sapiente officia, labore sint cumque sunt aliquid dolorem iusto. Quam culpa incidunt vero, voluptatem architecto rerum accusamus libero voluptatum distinctio, ea quos porro sit omnis eos recusandae commodi labore ipsa voluptate eaque. Debitis cum aut aliquam omnis perferendis. Repellat nobis, eius blanditiis optio ipsam numquam fugiat eveniet assumenda autem beatae expedita excepturi vitae, cum earum id sed ullam quae tempora sunt porro. Atque impedit enim et omnis quia sequi maxime autem quo, ad obcaecati, rem aperiam itaque. Debitis quas architecto laborum quo repellat officiis distinctio modi corrupti quae tempora magnam iste ad illum impedit dolores sit, recusandae minima labore nam harum aut odio officia voluptatibus ipsa deserunt. Repellat sint vel consectetur perferendis obcaecati, eveniet a iste dolor iusto, possimus laboriosam voluptates tempora. Dolor sequi consectetur molestias laborum optio consequuntur tempora, assumenda at voluptates culpa repellat ullam ab cupiditate ratione impedit rerum quibusdam, a necessitatibus sunt harum provident temporibus perspiciatis officiis dignissimos. Dolor voluptates quos suscipit mollitia maiores assumenda aliquam laborum consectetur veniam fuga vero, praesentium enim laudantium, alias dignissimos, atque molestiae unde a nam ea nihil. Magni, necessitatibus mollitia delectus obcaecati unde. Numquam aperiam doloremque magnam in dolore tempora, iste minima quam excepturi cupiditate, dolorum odit omnis molestias expedita dolorem soluta!                    \r\n                   </p>', 'red,blue', NULL, '15.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663038378276368.jpg', 'backend/images/product/1663038378318008.jpg', 'backend/images/product/1663038378346354.jpg', 1, '2020-04-04 04:43:08', '2020-04-04 04:43:08', 'nail-polish', NULL),
(6, 15, NULL, 21, 'Night Cream', 'b-103', 12, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis consequuntur deserunt, eaque porro ea architecto fuga, tenetur pariatur reiciendis nisi totam ullam quaerat quas? Consequatur quisquam, reiciendis impedit assumenda odio adipisci harum neque quasi rerum! Delectus accusamus voluptas vero veritatis sapiente, eum enim laudantium fugiat placeat quo, facere doloribus. Odio ea non, velit! Ipsa consectetur quasi delectus eaque eligendi natus quas voluptate repudiandae, sapiente reiciendis quo illum quaerat quae assumenda, minus possimus quis qui cumque velit numquam dolorem labore dolore! Quasi est voluptatem iusto adipisci esse, eum omnis. Ratione consequuntur ut commodi, repellendus illo natus quaerat provident pariatur cumque, quae. Incidunt deserunt libero, reprehenderit recusandae necessitatibus ex repellat dolorum rerum ipsa tenetur rem, quasi obcaecati numquam dolores sapiente minus, ipsum optio! Nemo error repellendus laboriosam quibusdam officiis sapiente, ad nobis, voluptatem quos, culpa harum libero doloremque, molestiae veniam tempora! Magnam dolor illo molestias facilis mollitia dignissimos sunt nihil unde, eveniet officia ab ducimus cupiditate praesentium quod aut sapiente perspiciatis labore inventore incidunt repudiandae. Rem adipisci iure atque, placeat natus reiciendis veritatis magnam dolorum minus nesciunt, numquam facere, et quia laborum perferendis earum reprehenderit obcaecati neque pariatur. Quas, asperiores totam aspernatur hic repellendus mollitia eum laudantium commodi eaque omnis soluta doloribus, voluptatem ratione, molestias. Accusantium earum ullam nam dolore quas quo accusamus. Consequatur maxime voluptate veniam labore commodi, quod minus quo deleniti earum voluptatum cumque nisi culpa similique velit hic. Recusandae distinctio nobis, adipisci nam sequi, cumque blanditiis porro, doloribus eligendi ex, voluptatem architecto ratione facere in non. Possimus corrupti earum at, obcaecati, debitis asperiores velit nostrum facilis ipsam quas sequi ipsum quo, sint numquam omnis impedit? Facere accusantium perferendis similique nisi nostrum minima aliquid, cupiditate incidunt consequuntur dolore quidem, animi, voluptatem temporibus recusandae optio nulla nihil neque? Laborum quia ipsum voluptate vitae, magnam numquam. Cum, quasi blanditiis pariatur molestiae, sapiente officia, labore sint cumque sunt aliquid dolorem iusto. Quam culpa incidunt vero, voluptatem architecto rerum accusamus libero voluptatum distinctio, ea quos porro sit omnis eos recusandae commodi labore ipsa voluptate eaque. Debitis cum aut aliquam omnis perferendis. Repellat nobis, eius blanditiis optio ipsam numquam fugiat eveniet assumenda autem beatae expedita excepturi vitae, cum earum id sed ullam quae tempora sunt porro. Atque impedit enim et omnis quia sequi maxime autem quo, ad obcaecati, rem aperiam itaque. Debitis quas architecto laborum quo repellat officiis distinctio modi corrupti quae tempora magnam iste ad illum impedit dolores sit, recusandae minima labore nam harum aut odio officia voluptatibus ipsa deserunt. Repellat sint vel consectetur perferendis obcaecati, eveniet a iste dolor iusto, possimus laboriosam voluptates tempora. Dolor sequi consectetur molestias laborum optio consequuntur tempora, assumenda at voluptates culpa repellat ullam ab cupiditate ratione impedit rerum quibusdam, a necessitatibus sunt harum provident temporibus perspiciatis officiis dignissimos. Dolor voluptates quos suscipit mollitia maiores assumenda aliquam laborum consectetur veniam fuga vero, praesentium enim laudantium, alias dignissimos, atque molestiae unde a nam ea nihil. Magni, necessitatibus mollitia delectus obcaecati unde. Numquam aperiam doloremque magnam in dolore tempora, iste minima quam excepturi cupiditate, dolorum odit omnis molestias expedita dolorem soluta!</p>', NULL, NULL, '15.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663038944221263.png', 'backend/images/product/1663038944508879.jpg', 'backend/images/product/1663038944538284.jpg', 1, '2020-04-04 04:52:08', '2020-04-04 04:52:08', 'night-cream', NULL),
(7, 15, NULL, 22, 'Face wash', 'b-104', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis consequuntur deserunt, eaque porro ea architecto fuga, tenetur pariatur reiciendis nisi totam ullam quaerat quas? Consequatur quisquam, reiciendis impedit assumenda odio adipisci harum neque quasi rerum! Delectus accusamus voluptas vero veritatis sapiente, eum enim laudantium fugiat placeat quo, facere doloribus. Odio ea non, velit! Ipsa consectetur quasi delectus eaque eligendi natus quas voluptate repudiandae, sapiente reiciendis quo illum quaerat quae assumenda, minus possimus quis qui cumque velit numquam dolorem labore dolore! Quasi est voluptatem iusto adipisci esse, eum omnis. Ratione consequuntur ut commodi, repellendus illo natus quaerat provident pariatur cumque, quae. Incidunt deserunt libero, reprehenderit recusandae necessitatibus ex repellat dolorum rerum ipsa tenetur rem, quasi obcaecati numquam dolores sapiente minus, ipsum optio! Nemo error repellendus laboriosam quibusdam officiis sapiente, ad nobis, voluptatem quos, culpa harum libero doloremque, molestiae veniam tempora! Magnam dolor illo molestias facilis mollitia dignissimos sunt nihil unde, eveniet officia ab ducimus cupiditate praesentium quod aut sapiente perspiciatis labore inventore incidunt repudiandae. Rem adipisci iure atque, placeat natus reiciendis veritatis magnam dolorum minus nesciunt, numquam facere, et quia laborum perferendis earum reprehenderit obcaecati neque pariatur. Quas, asperiores totam aspernatur hic repellendus mollitia eum laudantium commodi eaque omnis soluta doloribus, voluptatem ratione, molestias. Accusantium earum ullam nam dolore quas quo accusamus. Consequatur maxime voluptate veniam labore commodi, quod minus quo deleniti earum voluptatum cumque nisi culpa similique velit hic. Recusandae distinctio nobis, adipisci nam sequi, cumque blanditiis porro, doloribus eligendi ex, voluptatem architecto ratione facere in non. Possimus corrupti earum at, obcaecati, debitis asperiores velit nostrum facilis ipsam quas sequi ipsum quo, sint numquam omnis impedit? Facere accusantium perferendis similique nisi nostrum minima aliquid, cupiditate incidunt consequuntur dolore quidem, animi, voluptatem temporibus recusandae optio nulla nihil neque? Laborum quia ipsum voluptate vitae, magnam numquam. Cum, quasi blanditiis pariatur molestiae, sapiente officia, labore sint cumque sunt aliquid dolorem iusto. Quam culpa incidunt vero, voluptatem architecto rerum accusamus libero voluptatum distinctio, ea quos porro sit omnis eos recusandae commodi labore ipsa voluptate eaque. Debitis cum aut aliquam omnis perferendis. Repellat nobis, eius blanditiis optio ipsam numquam fugiat eveniet assumenda autem beatae expedita excepturi vitae, cum earum id sed ullam quae tempora sunt porro. Atque impedit enim et omnis quia sequi maxime autem quo, ad obcaecati, rem aperiam itaque. Debitis quas architecto laborum quo repellat officiis distinctio modi corrupti quae tempora magnam iste ad illum impedit dolores sit, recusandae minima labore nam harum aut odio officia voluptatibus ipsa deserunt. Repellat sint vel consectetur perferendis obcaecati, eveniet a iste dolor iusto, possimus laboriosam voluptates tempora. Dolor sequi consectetur molestias laborum optio consequuntur tempora, assumenda at voluptates culpa repellat ullam ab cupiditate ratione impedit rerum quibusdam, a necessitatibus sunt harum provident temporibus perspiciatis officiis dignissimos. Dolor voluptates quos suscipit mollitia maiores assumenda aliquam laborum consectetur veniam fuga vero, praesentium enim laudantium, alias dignissimos, atque molestiae unde a nam ea nihil. Magni, necessitatibus mollitia delectus obcaecati unde. Numquam aperiam doloremque magnam in dolore tempora, iste minima quam excepturi cupiditate, dolorum odit omnis molestias expedita dolorem soluta!</p>', 'black,blue', NULL, '10.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663039180530843.jpg', 'backend/images/product/1663039180570801.webp', 'backend/images/product/1663039180706033.jpg', 1, '2020-04-04 04:55:53', '2020-04-04 04:55:53', 'face-wash', NULL),
(8, 15, NULL, 22, 'Face cream', 'b-105', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis consequuntur deserunt, eaque porro ea architecto fuga, tenetur pariatur reiciendis nisi totam ullam quaerat quas? Consequatur quisquam, reiciendis impedit assumenda odio adipisci harum neque quasi rerum! Delectus accusamus voluptas vero veritatis sapiente, eum enim laudantium fugiat placeat quo, facere doloribus. Odio ea non, velit! Ipsa consectetur quasi delectus eaque eligendi natus quas voluptate repudiandae, sapiente reiciendis quo illum quaerat quae assumenda, minus possimus quis qui cumque velit numquam dolorem labore dolore! Quasi est voluptatem iusto adipisci esse, eum omnis. Ratione consequuntur ut commodi, repellendus illo natus quaerat provident pariatur cumque, quae. Incidunt deserunt libero, reprehenderit recusandae necessitatibus ex repellat dolorum rerum ipsa tenetur rem, quasi obcaecati numquam dolores sapiente minus, ipsum optio! Nemo error repellendus laboriosam quibusdam officiis sapiente, ad nobis, voluptatem quos, culpa harum libero doloremque, molestiae veniam tempora! Magnam dolor illo molestias facilis mollitia dignissimos sunt nihil unde, eveniet officia ab ducimus cupiditate praesentium quod aut sapiente perspiciatis labore inventore incidunt repudiandae. Rem adipisci iure atque, placeat natus reiciendis veritatis magnam dolorum minus nesciunt, numquam facere, et quia laborum perferendis earum reprehenderit obcaecati neque pariatur. Quas, asperiores totam aspernatur hic repellendus mollitia eum laudantium commodi eaque omnis soluta doloribus, voluptatem ratione, molestias. Accusantium earum ullam nam dolore quas quo accusamus. Consequatur maxime voluptate veniam labore commodi, quod minus quo deleniti earum voluptatum cumque nisi culpa similique velit hic. Recusandae distinctio nobis, adipisci nam sequi, cumque blanditiis porro, doloribus eligendi ex, voluptatem architecto ratione facere in non. Possimus corrupti earum at, obcaecati, debitis asperiores velit nostrum facilis ipsam quas sequi ipsum quo, sint numquam omnis impedit? Facere accusantium perferendis similique nisi nostrum minima aliquid, cupiditate incidunt consequuntur dolore quidem, animi, voluptatem temporibus recusandae optio nulla nihil neque? Laborum quia ipsum voluptate vitae, magnam numquam. Cum, quasi blanditiis pariatur molestiae, sapiente officia, labore sint cumque sunt aliquid dolorem iusto. Quam culpa incidunt vero, voluptatem architecto rerum accusamus libero voluptatum distinctio, ea quos porro sit omnis eos recusandae commodi labore ipsa voluptate eaque. Debitis cum aut aliquam omnis perferendis. Repellat nobis, eius blanditiis optio ipsam numquam fugiat eveniet assumenda autem beatae expedita excepturi vitae, cum earum id sed ullam quae tempora sunt porro. Atque impedit enim et omnis quia sequi maxime autem quo, ad obcaecati, rem aperiam itaque. Debitis quas architecto laborum quo repellat officiis distinctio modi corrupti quae tempora magnam iste ad illum impedit dolores sit, recusandae minima labore nam harum aut odio officia voluptatibus ipsa deserunt. Repellat sint vel consectetur perferendis obcaecati, eveniet a iste dolor iusto, possimus laboriosam voluptates tempora. Dolor sequi consectetur molestias laborum optio consequuntur tempora, assumenda at voluptates culpa repellat ullam ab cupiditate ratione impedit rerum quibusdam, a necessitatibus sunt harum provident temporibus perspiciatis officiis dignissimos. Dolor voluptates quos suscipit mollitia maiores assumenda aliquam laborum consectetur veniam fuga vero, praesentium enim laudantium, alias dignissimos, atque molestiae unde a nam ea nihil. Magni, necessitatibus mollitia delectus obcaecati unde. Numquam aperiam doloremque magnam in dolore tempora, iste minima quam excepturi cupiditate, dolorum odit omnis molestias expedita dolorem soluta!</p>', 'black', NULL, '100.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663039275834587.jpg', 'backend/images/product/1663039276052134.jpg', 'backend/images/product/1663039276079950.jpg', 1, '2020-04-04 04:57:24', '2020-04-04 04:57:24', 'face-cream', NULL),
(9, 16, NULL, 23, 'cricket bat', 's-100', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dignissimos fugit, exercitationem, fuga ut sunt architecto repellendus maxime velit provident nesciunt adipisci quod doloremque facere minus eaque quisquam placeat corrupti voluptas deserunt error culpa quo. Quidem placeat ipsa laboriosam expedita voluptatibus iure architecto veniam at in quod, cupiditate animi voluptas harum, laudantium id sunt excepturi, beatae cumque fugit facilis! Molestiae earum quasi ipsam quaerat aut voluptates et cupiditate ea nihil accusantium, assumenda esse tenetur voluptatem, est, architecto asperiores perferendis voluptatibus illo sit reiciendis suscipit. Sed voluptatum sint commodi? Eius, et, delectus, laboriosam quisquam error harum minima obcaecati reiciendis, accusantium illum ratione fugiat. Eos quia veritatis natus ad alias hic. Aut vero suscipit architecto, sint voluptas provident delectus illo esse necessitatibus, expedita totam, dolorem nostrum quidem. Nihil ullam hic ea non repudiandae sint libero, ex ad sequi! Iusto dicta corporis expedita inventore laboriosam cumque voluptas ullam excepturi aspernatur facilis, alias, architecto omnis minima adipisci consequatur dolore. Expedita repellendus, obcaecati ad similique veritatis laboriosam quis molestiae autem doloremque sed delectus. Architecto laboriosam rem eius error repellat dignissimos aliquam vitae, magnam dolores atque voluptas culpa ducimus earum totam nostrum non cumque fugit nemo optio iure. At molestias voluptates deleniti culpa voluptas, incidunt perferendis architecto nostrum corrupti eos vel quas fugiat necessitatibus obcaecati ipsam similique. Cumque nesciunt dicta soluta, dolorum, doloribus dolorem id fugiat, quis assumenda aut rem similique. Eveniet explicabo accusamus quibusdam voluptatum nulla assumenda deleniti molestiae consequatur odit facere iusto, inventore distinctio neque error ipsum voluptates culpa laborum? Hic commodi dolorem dolores sint quasi, delectus cupiditate dolore doloribus ipsum voluptatibus, blanditiis reprehenderit voluptate vitae! Modi neque eius inventore reiciendis deserunt aliquam voluptates ratione, distinctio veritatis nostrum culpa impedit aspernatur quod laborum! Ullam fugiat soluta ut obcaecati exercitationem consequatur dignissimos deserunt quo voluptatibus dolorem et eveniet architecto recusandae, praesentium, illum est temporibus necessitatibus? Placeat dolorem tenetur maxime quam sequi, dolorum consectetur quaerat autem laudantium iste sit eum similique aspernatur dicta sed, eius voluptatem nulla aut dolor eligendi veritatis? Veritatis ullam autem, earum dolorem quo odio repellendus quae. Aperiam eius tenetur veniam corrupti consectetur, animi molestias. Nisi repudiandae magni qui eos, hic est ab nesciunt similique quos quae dolores expedita, ratione sequi reiciendis obcaecati! Rerum explicabo, dolor aut, nulla quas ab. Tempora, dolorem ipsum quae aperiam. Suscipit iste nobis repudiandae, amet, omnis accusantium necessitatibus placeat cupiditate impedit aliquid distinctio officiis voluptatum totam ut soluta modi! Suscipit magni consequuntur minus aliquid exercitationem reiciendis nostrum nobis nulla aliquam quidem, debitis? Recusandae praesentium quas, fugit magnam. Totam dignissimos id soluta maxime distinctio rem, delectus inventore, aspernatur quae harum corrupti corporis eius consequuntur alias velit incidunt itaque aut in consequatur. Veritatis, nisi, praesentium. Eveniet cum dolor ipsa, reprehenderit magni nihil suscipit, quisquam minus quod beatae error. Eligendi debitis minus sint inventore ducimus quod, repellat laborum et perferendis est nobis harum molestiae consequatur nostrum, tempora officiis, veniam velit. Doloribus neque officiis odit natus, perspiciatis ipsum deleniti, esse suscipit dolorum facilis laborum qui. Consectetur placeat nulla repellat ipsa tenetur officia aliquid quos, molestias quod cumque nesciunt tempora sint minus. Quae?<br></p>', 'white ,black', NULL, '30.00', NULL, 'www.https//video.com', NULL, NULL, 1, NULL, NULL, NULL, 'backend/images/product/1663042644110102.jpg', 'backend/images/product/1663042644588460.jpg', 'backend/images/product/1663042644638988.jpg', 1, '2020-04-04 05:50:57', '2020-04-04 05:50:57', 'cricket-bat', NULL),
(10, 16, NULL, 23, 'Football', 's-102', 12, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime in, dolore quibusdam tempore excepturi culpa eius rerum sint aliquam molestiae itaque explicabo nam commodi accusantium ipsum sapiente delectus voluptas sequi nesciunt eveniet dolores, fugiat dignissimos a? Laboriosam optio non, repellat dolorem, voluptatem quam voluptatibus doloribus saepe in dolor sapiente maiores sint mollitia vel debitis aperiam obcaecati atque, doloremque aspernatur, impedit ex eos qui vero quo. Cum minus, quasi, totam impedit optio quis dolore libero minima tenetur, esse dolor deserunt vitae cupiditate enim harum voluptates, est fuga. Praesentium distinctio harum hic ipsam amet veritatis perferendis quaerat eligendi ullam! Aliquam, eum!                    \r\n                   </p>', 'red,black', NULL, '10.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663043129195068.png', 'backend/images/product/1663043129286758.png', 'backend/images/product/1663043129362974.jpg', 1, '2020-04-04 05:58:39', '2020-04-04 05:58:39', 'football', NULL),
(11, 16, NULL, 23, 'Baseball bat', 's-103', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime in, dolore quibusdam tempore excepturi culpa eius rerum sint aliquam molestiae itaque explicabo nam commodi accusantium ipsum sapiente delectus voluptas sequi nesciunt eveniet dolores, fugiat dignissimos a? Laboriosam optio non, repellat dolorem, voluptatem quam voluptatibus doloribus saepe in dolor sapiente maiores sint mollitia vel debitis aperiam obcaecati atque, doloremque aspernatur, impedit ex eos qui vero quo. Cum minus, quasi, totam impedit optio quis dolore libero minima tenetur, esse dolor deserunt vitae cupiditate enim harum voluptates, est fuga. Praesentium distinctio harum hic ipsam amet veritatis perferendis quaerat eligendi ullam! Aliquam, eum!</p>', 'red', NULL, '10.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663043217463676.png', 'backend/images/product/1663043219004860.png', 'backend/images/product/1663043220729828.png', 1, '2020-04-04 06:00:08', '2020-04-04 06:00:08', 'baseball-bat', NULL),
(12, 16, NULL, 23, 'bassball new', 's-104', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime in, dolore quibusdam tempore excepturi culpa eius rerum sint aliquam molestiae itaque explicabo nam commodi accusantium ipsum sapiente delectus voluptas sequi nesciunt eveniet dolores, fugiat dignissimos a? Laboriosam optio non, repellat dolorem, voluptatem quam voluptatibus doloribus saepe in dolor sapiente maiores sint mollitia vel debitis aperiam obcaecati atque, doloremque aspernatur, impedit ex eos qui vero quo. Cum minus, quasi, totam impedit optio quis dolore libero minima tenetur, esse dolor deserunt vitae cupiditate enim harum voluptates, est fuga. Praesentium distinctio harum hic ipsam amet veritatis perferendis quaerat eligendi ullam! Aliquam, eum!</p>', 'red', NULL, '10.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663043285159230.webp', 'backend/images/product/1663043285309130.webp', 'backend/images/product/1663043285383646.webp', 1, '2020-04-04 06:01:08', '2020-04-04 06:01:08', 'bassball-new', NULL),
(13, 16, NULL, 23, 'Tennis bat', 's-109', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime in, dolore quibusdam tempore excepturi culpa eius rerum sint aliquam molestiae itaque explicabo nam commodi accusantium ipsum sapiente delectus voluptas sequi nesciunt eveniet dolores, fugiat dignissimos a? Laboriosam optio non, repellat dolorem, voluptatem quam voluptatibus doloribus saepe in dolor sapiente maiores sint mollitia vel debitis aperiam obcaecati atque, doloremque aspernatur, impedit ex eos qui vero quo. Cum minus, quasi, totam impedit optio quis dolore libero minima tenetur, esse dolor deserunt vitae cupiditate enim harum voluptates, est fuga. Praesentium distinctio harum hic ipsam amet veritatis perferendis quaerat eligendi ullam! Aliquam, eum!</p>', 'white', NULL, '10.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663043360173393.png', 'backend/images/product/1663043360276084.png', 'backend/images/product/1663043360360585.png', 1, '2020-04-04 06:02:19', '2020-04-04 06:02:19', 'tennis-bat', NULL),
(14, 13, 21, 17, 'Mi 9 pro', 'e-108', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime in, dolore quibusdam tempore excepturi culpa eius rerum sint aliquam molestiae itaque explicabo nam commodi accusantium ipsum sapiente delectus voluptas sequi nesciunt eveniet dolores, fugiat dignissimos a? Laboriosam optio non, repellat dolorem, voluptatem quam voluptatibus doloribus saepe in dolor sapiente maiores sint mollitia vel debitis aperiam obcaecati atque, doloremque aspernatur, impedit ex eos qui vero quo. Cum minus, quasi, totam impedit optio quis dolore libero minima tenetur, esse dolor deserunt vitae cupiditate enim harum voluptates, est fuga. Praesentium distinctio harum hic ipsam amet veritatis perferendis quaerat eligendi ullam! Aliquam, eum!</p>', NULL, NULL, '10.00', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 'backend/images/product/1663043640040162.webp', 'backend/images/product/1663043640130702.webp', 'backend/images/product/1663043640207003.webp', 1, '2020-04-04 06:06:46', '2020-04-04 21:14:59', 'mi-9-pro-HnAAzuCa1b', NULL),
(15, 13, 21, 17, 'Redmi note 7', 'e-198', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime in, dolore quibusdam tempore excepturi culpa eius rerum sint aliquam molestiae itaque explicabo nam commodi accusantium ipsum sapiente delectus voluptas sequi nesciunt eveniet dolores, fugiat dignissimos a? Laboriosam optio non, repellat dolorem, voluptatem quam voluptatibus doloribus saepe in dolor sapiente maiores sint mollitia vel debitis aperiam obcaecati atque, doloremque aspernatur, impedit ex eos qui vero quo. Cum minus, quasi, totam impedit optio quis dolore libero minima tenetur, esse dolor deserunt vitae cupiditate enim harum voluptates, est fuga. Praesentium distinctio harum hic ipsam amet veritatis perferendis quaerat eligendi ullam! Aliquam, eum!</p>', 'black', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, 1, NULL, 1, 'backend/images/product/1663043717908360.jpg', 'backend/images/product/1663043717972352.jpg', 'backend/images/product/1663043718017116.jpg', 1, '2020-04-04 06:08:01', '2020-04-04 21:15:16', 'redmi-note-7-Q1CSGUhU2G', NULL),
(16, 13, 21, 18, 'Iphone 11', 'e-187', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime in, dolore quibusdam tempore excepturi culpa eius rerum sint aliquam molestiae itaque explicabo nam commodi accusantium ipsum sapiente delectus voluptas sequi nesciunt eveniet dolores, fugiat dignissimos a? Laboriosam optio non, repellat dolorem, voluptatem quam voluptatibus doloribus saepe in dolor sapiente maiores sint mollitia vel debitis aperiam obcaecati atque, doloremque aspernatur, impedit ex eos qui vero quo. Cum minus, quasi, totam impedit optio quis dolore libero minima tenetur, esse dolor deserunt vitae cupiditate enim harum voluptates, est fuga. Praesentium distinctio harum hic ipsam amet veritatis perferendis quaerat eligendi ullam! Aliquam, eum!</p>', 'black', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663043919229934.jpg', 'backend/images/product/1663043919287942.jpg', 'backend/images/product/1663043919334001.jpg', 1, '2020-04-04 06:11:13', '2020-04-04 06:11:13', 'iphone-11', NULL),
(17, 13, 23, 8, 'Asus Desktop', 'w-101', 10, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.                    \r\n                   </p>', 'black', NULL, '2000.00', NULL, 'www.google.com', NULL, 1, 1, NULL, NULL, NULL, 'backend/images/product/1663044061311607.jpg', 'backend/images/product/1663044061419372.jpg', 'backend/images/product/1663044061514381.jpg', 1, '2020-04-04 06:13:28', '2020-04-04 21:13:50', 'asus-desktop-OK5bRo87aU', NULL);
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`, `slug`, `buyone_getone`) VALUES
(18, 13, 22, 1, 'New Laptop', 'l-109', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663044321175803.jpg', 'backend/images/product/1663044321287007.jpg', 'backend/images/product/1663044321374763.jpg', 1, '2020-04-04 06:17:36', '2020-04-04 06:17:36', 'new-laptop', NULL),
(19, 13, 25, 14, 'jamuna television', 'e-109', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 'backend/images/product/1663044445402713.jpg', 'backend/images/product/1663044445462929.jpg', 'backend/images/product/1663044445507128.jpg', 1, '2020-04-04 06:19:34', '2020-04-04 21:14:43', 'jamuna-television-Y62PBOI2mo', NULL),
(20, 13, 26, 15, 'Refrigarator', 'e-100', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black,blue', NULL, '200.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663044562316145.jpg', 'backend/images/product/1663044562432675.webp', 'backend/images/product/1663044562869706.png', 1, '2020-04-04 06:21:26', '2020-04-04 06:21:26', 'refrigarator', NULL),
(21, 10, 10, 12, 'Office furniture', 'f-100', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'brown', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663044663831940.jpg', 'backend/images/product/1663044663944705.jpg', 'backend/images/product/1663044663994010.jpg', 1, '2020-04-04 06:23:03', '2020-04-07 01:17:19', 'office-furniture-8ixE21tb96', 1),
(22, 12, 27, 19, 'Bed room furniture', 'f-101', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663044785444317.jpg', 'backend/images/product/1663044785546196.jpg', 'backend/images/product/1663044785588807.jpg', 1, '2020-04-04 06:24:59', '2020-04-04 06:24:59', 'bed-room-furniture', NULL),
(23, 12, 29, 19, 'Otobi new furniture', 'f-109', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663044883453421.jpg', 'backend/images/product/1663044883564392.jpg', 'backend/images/product/1663044883666729.jpg', 1, '2020-04-04 06:26:32', '2020-04-04 06:26:32', 'otobi-new-furniture', NULL),
(24, 11, 16, 6, 'Mens new collection', 'p-101', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, 1, NULL, NULL, NULL, 'backend/images/product/1663045728942351.webp', 'backend/images/product/1663045729122200.jpg', 'backend/images/product/1663045729165091.jpg', 1, '2020-04-04 06:39:58', '2020-04-04 06:39:58', 'mens-new-collection', NULL),
(25, 11, 17, 6, 'Women\'s watch', 'p-102', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black,lue', NULL, '100.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663045841281994.jpg', 'backend/images/product/1663045841328741.jpg', 'backend/images/product/1663045841466685.jpg', 1, '2020-04-04 06:41:46', '2020-04-04 06:41:46', 'women\'s-watch', NULL),
(26, 11, 18, 6, 'children black watch', 'p-103', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black,blue', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663045933283226.jpg', 'backend/images/product/1663045933386309.jpg', 'backend/images/product/1663045933431815.jpg', 1, '2020-04-04 06:43:13', '2020-04-04 06:43:13', 'children-black-watch', NULL),
(27, 14, NULL, 7, 'Pressure machine', 'p-109', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black,white', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, 1, NULL, NULL, NULL, 'backend/images/product/1663046034896746.jpg', 'backend/images/product/1663046034958465.jpg', 'backend/images/product/1663046035084473.jpg', 1, '2020-04-04 06:44:50', '2020-04-04 06:44:50', 'pressure-machine', NULL),
(28, 14, NULL, 7, 'Diabetes machine', 'p-107', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663046127733729.jpg', 'backend/images/product/1663046127792312.jpg', 'backend/images/product/1663046127836709.jpg', 1, '2020-04-04 06:46:19', '2020-04-04 06:46:19', 'diabetes-machine', NULL),
(29, 10, 10, 13, 'Baby frog', 'b-102', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black,red', 'x,xm', '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663046241795102.jpg', 'backend/images/product/1663046242209833.jpg', 'backend/images/product/1663046242367892.jpg', 1, '2020-04-04 06:48:08', '2020-04-07 01:17:49', 'baby-frog-poljwsLb9V', 1),
(30, 8, 10, 12, 'Men\'s stylish shirt', 'b-101', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black,red,blue', 'x,xl,xxl', '50.00', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'backend/images/product/1663046340255268.jpeg', 'backend/images/product/1663046340416463.jpg', 'backend/images/product/1663046340475396.jpg', 1, '2020-04-04 06:49:43', '2020-04-07 01:18:01', 'men\'s-stylish-shirt-guVRn1uaVb', 1),
(31, 8, 11, 13, 'New stylish tshirt', 'b-101', 8, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'red,blue', 'xl,xxxl', '10.00', NULL, 'www.google.com', NULL, 1, NULL, NULL, NULL, NULL, 'backend/images/product/1663046450278744.jpg', 'backend/images/product/1663046450343133.jpg', 'backend/images/product/1663046450394024.webp', 1, '2020-04-04 06:51:27', '2020-04-04 06:51:27', 'new-stylish-tshirt', NULL),
(32, 8, 12, 12, 'Black pants', 'b-101', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663046528847920.jpg', 'backend/images/product/1663046528909599.jpg', 'backend/images/product/1663046528953387.jpg', 1, '2020-04-04 06:52:41', '2020-04-04 06:52:41', 'black-pants', NULL),
(33, 8, 19, 10, 'Panjabi latest collection', 'b-102', 8, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663046589777822.jpeg', 'backend/images/product/1663046590157472.jpg', 'backend/images/product/1663046590323628.jpeg', 1, '2020-04-04 06:53:40', '2020-04-07 01:17:38', 'panjabi-latest-collection-KVAnd14Er9', 1),
(34, 9, 13, 20, 'Hijab collection', 'b-101', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'red', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, NULL, 'backend/images/product/1663046739212996.webp', 'backend/images/product/1663046739540077.jpg', 'backend/images/product/1663046739589609.jpg', 1, '2020-04-04 06:56:02', '2020-04-04 06:56:02', 'hijab-collection', NULL),
(35, 9, 14, 20, 'New three piece', 'b-101', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'red,black', NULL, '100.00', '50.00', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'backend/images/product/1663046815138722.webp', 'backend/images/product/1663046815314077.webp', 'backend/images/product/1663046815467651.webp', 1, '2020-04-04 06:57:15', '2020-04-04 19:44:01', 'new-three-piece-25USpzNgj8', NULL),
(36, 9, 15, 10, 'New women show', 'wc-100', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'black', NULL, '100.00', NULL, 'www.google.com', NULL, NULL, NULL, NULL, NULL, 1, 'backend/images/product/1663046893783165.jpg', 'backend/images/product/1663046893838532.jpg', 'backend/images/product/1663046893884853.jpg', 1, '2020-04-04 06:58:29', '2020-04-04 06:58:29', 'new-women-show', NULL),
(37, 9, 20, 10, 'New kurtis', 'b-101', 10, '<p>                    \r\n                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laudantium incidunt molestias sed, eius pariatur magni voluptate porro ea minima voluptates eligendi, officiis, animi qui consequatur iusto doloremque earum deleniti. Nobis esse sequi quod fugiat! Dolorem quis corporis, at maxime, debitis eos nemo sunt fuga aperiam quas dolor recusandae sequi. Facere quaerat officiis voluptates ut voluptate harum perferendis qui necessitatibus, cum similique aperiam, perspiciatis sint praesentium illum saepe nam maxime, tempora. Aspernatur laudantium quos, officia iste nesciunt deserunt dolor, fugit beatae ducimus aliquid? Animi necessitatibus veniam itaque quaerat exercitationem sint repellat tempora, illum mollitia perferendis cupiditate nulla! Minus, aut at.</p>', 'red,blue', NULL, '100.00', '80.00', 'www.google.com', NULL, 1, NULL, NULL, NULL, NULL, 'backend/images/product/1663046972109605.jpg', 'backend/images/product/1663046972174470.jpg', 'backend/images/product/1663046972228246.jpg', 1, '2020-04-04 06:59:44', '2020-04-04 19:43:44', 'new-kurtis-8Sr4i3851C', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `meta_author`, `meta_tag`, `meta_description`, `google_analytics`, `bing_analytics`, `created_at`, `updated_at`) VALUES
(1, 'LH Ecommerce', 'Learn Hunter', 'Ecommerce,Online Store', 'lorem ipsum etc etce ect ;learn hunter is one of the best youtibe channle .....', '112d12812891', '217312381', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `name`, `email`, `phone`, `address`, `city`, `created_at`, `updated_at`) VALUES
(4, 6, 'Emon', 'emonhasan@gmail.com', '016576464535', 'Dhaka', 'Narayangang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `youtube`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '01961363543', '01961363543', 'sohidulislam353@gmail.com', 'EchoStore', 'Dhaka Mirpur Hazir Biriyanispani', 'https://www.facebook.com/pie24', 'https://www.facebook.com/pie24', 'https://www.facebook.com/pie24', 'https://www.facebook.com/pie24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`, `slug`) VALUES
(10, 8, 'Shirt', '2020-04-03 23:55:07', '2020-04-03 23:55:07', 'shirt'),
(11, 8, 'T-shirt', '2020-04-03 23:55:37', '2020-04-03 23:55:37', 't-shirt'),
(12, 8, 'Pants', '2020-04-03 23:55:47', '2020-04-03 23:55:47', 'pants'),
(13, 9, 'Hijab and Scarf', '2020-04-03 23:56:20', '2020-04-03 23:56:20', 'hijab-and-scarf'),
(14, 9, 'Three piece', '2020-04-03 23:56:54', '2020-04-03 23:56:54', 'three-piece'),
(15, 9, 'Shoes', '2020-04-03 23:57:13', '2020-04-03 23:57:13', 'shoes'),
(16, 11, 'Men\'s Watch', '2020-04-03 23:57:30', '2020-04-04 00:51:19', 'men\'s-watch'),
(17, 11, 'Women\'s Watch', '2020-04-03 23:57:45', '2020-04-04 00:51:37', 'women\'s-watch'),
(18, 11, 'Child Watch', '2020-04-03 23:58:01', '2020-04-03 23:58:01', 'child-watch'),
(19, 8, 'Punjabi & Pajama', '2020-04-03 23:58:25', '2020-04-03 23:58:25', 'punjabi-&-pajama'),
(20, 9, 'Kurtis', '2020-04-03 23:58:40', '2020-04-04 05:06:21', 'kurtis-VpYrUhNi7g'),
(21, 13, 'Mobile & Tablet', '2020-04-04 00:00:13', '2020-04-04 00:00:13', 'mobile-&-tablet'),
(22, 13, 'Laptop', '2020-04-04 00:00:38', '2020-04-04 00:00:38', 'laptop'),
(23, 13, 'Desktop', '2020-04-04 00:01:12', '2020-04-04 00:01:12', 'desktop'),
(24, 9, 'Camera', '2020-04-04 00:01:34', '2020-04-04 00:01:34', 'camera'),
(25, 13, 'Television', '2020-04-04 00:02:11', '2020-04-04 00:02:11', 'television'),
(26, 13, 'Refrigerator', '2020-04-04 00:02:23', '2020-04-04 00:02:23', 'refrigerator'),
(27, 12, 'Bed Room', '2020-04-04 00:02:52', '2020-04-04 00:02:52', 'bed-room'),
(28, 12, 'Official', '2020-04-04 00:03:12', '2020-04-04 00:03:12', 'official'),
(29, 12, 'Dining', '2020-04-04 00:03:38', '2020-04-04 00:03:38', 'dining');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `provider`, `provider_id`, `updated_at`) VALUES
(3, 'test', '01765576546', 'emon@gmail.com', NULL, '$2y$10$.66cO3OAeSftdXnCTEKzzutgLfw1havYJDJJxZO7CWM7YfJ0YkTRi', NULL, '2020-04-05 19:06:01', NULL, NULL, '2020-04-05 19:06:01'),
(4, 'Mehedi Hasan', '01765576547', 'mh.emon2023@gmail.com', NULL, NULL, NULL, '2020-04-07 20:25:37', 'google', '106817135698695413475', '2020-04-07 20:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(6, 4, 37, NULL, NULL),
(7, 4, 35, NULL, NULL),
(8, 3, 35, NULL, NULL);

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
