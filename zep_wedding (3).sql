-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2024 at 11:55 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zep_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_listing`
--

DROP TABLE IF EXISTS `add_listing`;
CREATE TABLE IF NOT EXISTS `add_listing` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `other_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `threads_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities_for_booking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('approve','pending','reject') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_listing`
--

INSERT INTO `add_listing` (`id`, `user_id`, `other_city`, `name`, `contact_no`, `address`, `email`, `website_link`, `facebook_link`, `instagram_link`, `linkedin_link`, `youtube_link`, `twitter_link`, `threads_link`, `google_map_link`, `amenities_for_booking`, `capacity`, `from_time_slot`, `to_time_slot`, `description`, `banner_image`, `front_page_image`, `category_id`, `amenities`, `contact_person_name`, `contact_person_number`, `price`, `show_price`, `vendor_name`, `vendor_description`, `vendor_price`, `vendor_image`, `location_city`, `location_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 66, NULL, 'Zhep Marriage Hall', '9766658802', 'Ganesh bhavan behind jain hostel, Maltekdi Road, Amravati', 'zhepservices@gmail.com', 'https://www.zhepcab.com', 'https://www.facebook.com/zhepcab/', NULL, NULL, NULL, 'https://x.com/zhep13', 'https://www.threads.net/@zhepcabservice', 'https://maps.app.goo.gl/X8qcnECjwxghxBPa8', NULL, NULL, '[\"17:00\",\"10:57\",\"15:57\"]', '[\"17:00\",\"10:57\",\"10:57\"]', 'Best Wedding Place', '[\"5541718020110_mauli-point-party-hall-dastur-nagar-amravati-banquet-halls-gkpur2mlkg.avif\"]', '1718020110.jpg', '[\"3\",\"2\",\"3\"]', '[\"1\",\"2\",\"3\",\"4\"]', 'kunal', '9766658802', NULL, 'yes', NULL, NULL, NULL, NULL, '1', 'Ganesh Bhavan, Behind Jain Hostel, Maltekdi Road, Amravati', 'approve', '2024-06-10 06:18:30', '2024-10-01 11:33:58'),
(3, 75, 'Khamgaon', 'X Marriage Hall', '8983458802', 'Zhep Cabs, Shankar Nagar, Khamgaon, Maharashtra, India', 'zhepcabservice@gmail.com', 'https://www.zhepcabs.com', NULL, NULL, NULL, NULL, NULL, NULL, 'https://maps.app.goo.gl/X8qcnECjwxghxBPa8', NULL, NULL, '[\"17:00\",\"17:00\"]', '[\"00:00\",\"17:00\"]', 'wow', '[\"9841720078575_DSC_1897.JPG\"]', '1720078575.png', '[\"2\",\"3\"]', '[\"1\",\"4\"]', 'Kapil', '7276064876', NULL, 'no', NULL, NULL, NULL, NULL, '2', 'Zhep Cabs, Shankar Nagar, Khamgaon, Maharashtra, India', 'approve', '2024-07-04 02:06:15', '2024-07-11 04:10:54'),
(4, 76, NULL, 'Lotus Inn Marriage Hall', '8668239084', 'Rahatgaon Ring Road Amravati', 'shibakhan1970@gmail.com', NULL, 'https://www.facebook.com/lotusinnMarrigehall/', 'https://www.instagram.com/lotus_inn_marriage_hall_/?hl=en', NULL, 'https://youtu.be/vkzAljmOEN4?si=ooS0d2zGSpt3q4k3', NULL, NULL, 'https://maps.app.goo.gl/75hb9GPenxscX2427', NULL, NULL, '[\"19:30\",\"17:00\"]', '[\"17:00\",\"23:00\"]', 'Lotus Inn Marriage Hall is modern and popular wedding hall  suitable for hosting a variety of events such as  engagement ceremonies, weddings, receptions, corporate events, birthday parties etc. They are beautifully designed and decorated to create an elegant ambience for any event you are hosting. Banquet halls can be booked for a stipulated time period during which the event has to take place.', '[\"1781726395112_127456601_164558832042967_1746123264265777244_n.jpg\",\"1181726395128_127186903_164558868709630_8265264610383449199_n.jpg\",\"8871726395138_127065207_164558952042955_1294826277264896440_n.jpg\"]', '1726395025.webp', '[\"3\",\"2\"]', '[\"1\",\"2\",\"3\",\"4\"]', 'Aditya Fuladi', '8668239084', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'Lotus Inn Marriage Hall', 'approve', '2024-09-15 01:43:39', '2024-09-17 05:18:44'),
(5, 66, NULL, 'Rae Cote', '7364567676', 'Iusto et omnis quae', 'qykyla@mailinator.com', 'https://www.gebuluvyp.us', 'Aperiam suscipit con', 'Molestiae autem ex l', 'Voluptatem officiis', 'Eius culpa excepteur', 'Adipisci magna vero', 'Est quo nostrud poss', 'Odit cum magnam nihi', NULL, NULL, '[\"04:47\"]', '[\"21:35\"]', 'Dignissimos qui dolo', '[\"9551726492052_2021-01-11.jpg\",\"7711726492052_download (1).jpg\",\"7691726492052_DSC_1897.JPG\"]', '1726492052.JPG', '[\"2\"]', '[\"2\",\"4\"]', 'Craig Preston', '7767767567', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'amravati', 'approve', '2024-09-16 07:37:32', '2024-09-30 05:54:52'),
(6, 78, NULL, 'Muktai Palace', '7558661593', 'Ring Road, Rahatgaon, Amravati - 444602', 'sanketmahulkar470@gmail.com', NULL, 'https://www.facebook.com/lotusinnMarrigehall/', 'https://www.instagram.com/lotus_inn_marriage_hall_/?hl=en', NULL, NULL, NULL, NULL, 'https://maps.app.goo.gl/Y5wa8vVk36rw7xPx9', NULL, NULL, '[\"17:00\",\"19:00\"]', '[\"00:00\",\"17:00\"]', '\"Muktai Palace is a one stop destination for all your special occasions. It is perfect for weddings, sangeet, mehndi , haldi rasam , bachelor and bachelorette parties, private parties , family get togethers , seminars , conferences , exhibitions , and corporate gateways', '[\"1941726681813_muktai-palace-2681659.webp\",\"8741726681813_muktai-palace-rahatgaon-amravati-banquet-halls-17o1rtvzsb.jpg\",\"5791726681813_muktai-palace.jpeg\",\"8911726681813_muktai-palace-rahatgaon-amravati-banquet-halls-ydnzvy1ami.jpg\"]', '1726681813.webp', '[\"2\",\"3\"]', '[\"1\",\"3\",\"4\"]', 'Sanket Mahulkar', '7558661593', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/BSPVu2ZdqYaquWxM8?g_st=ac', 'approve', '2024-09-18 00:51:33', '2024-09-18 12:20:13'),
(7, 84, NULL, 'Rajwada Palace', '8806826000', 'Shegaon - Rahatgaon Road, Amravati - 444602', 'asdamol@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://maps.app.goo.gl/XX5bofKxNnJ7bzBu7', NULL, NULL, '[\"19:30\"]', '[\"17:30\"]', 'Equipped with good amenities like AC, elevator, LEDs, and nice ventilation.Clean and well-decorated hall making it attractive.Perfect place for dream wedding', '[\"1531726679755_2020-02-03.jpg\",\"661726679755_274572931_1902706399921295_5398045556956227118_n.jpg\",\"2191726679755_315992648_566226935508292_6641827648788025819_n.jpg\"]', '1726679755.jpg', '[\"3\"]', '[\"1\",\"3\",\"4\"]', 'Amol Deshmukh', '8806826000', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/LjyTNPQdN3y3ytn26', 'approve', '2024-09-18 02:10:35', '2024-09-19 03:57:51'),
(8, 84, NULL, 'Deshmukh Lawn and Marriage Hall', '8806826000', 'Shegaon - Rahatgaon Rd, Amravati, Maharashtra 444602', 'asdamol@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://maps.app.goo.gl/ppoxk9idVf6DbQrx9', NULL, NULL, '[\"17:00\",\"19:00\"]', '[\"00:00\",\"17:00\"]', 'Deshmukh Lawns in Amravati is one of the best place known for Marriage, Reception, Birthday Party Lawns, Lawns For Event', '[\"2911726683592_2017-12-16.jpg\"]', '1726683592.jpg', '[\"2\",\"3\"]', '[\"1\",\"4\"]', 'Amol Deshmukh', '8806826000', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/2qMWJVvhstJmJDPWA?g_st=ac', 'approve', '2024-09-18 12:48:29', '2024-09-19 04:27:38'),
(9, 86, NULL, 'Hotel Shri Harichand Mangalam', '9834419954', 'Saturna, Amravati, Maharashtra 444607', 'piyush.sharma555@rediffmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://maps.app.goo.gl/JPD4QV3b5owgGT1D7?g_st=ac', NULL, NULL, '[\"19:00\"]', '[\"17:00\"]', 'HARICHAND MANGALAM & LAWN offers the ideal setting for events of every size, from intimate get-togethers to lavish wedding festivities. We provides the ideal ambiance, competent service, excellent food, and well-kept locations to turn any occasion into a gorgeous and outstanding event. This is the place to pick if you\'re seeking for a gorgeous location to hold any of your nuptial ceremonies with elegance.', '[\"321727069497_IMG_20231204_111744.jpg\",\"3151727069710_IMG_20231126_194914.jpg\",\"7891727069743_2024-05-21 (1).jpg\",\"4631727069760_2024-05-21.jpg\",\"5221727069783_IMG_20231204_111833.jpg\"]', '1727069497.jpg', '[\"3\"]', '[\"1\",\"3\",\"4\"]', 'Piyush Sharma', '9834419954', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/GZbTcrgbqcJkWEC49?g_st=ac', 'approve', '2024-09-21 03:46:45', '2024-09-23 00:06:23'),
(10, 87, NULL, 'Maniratna Resort', '9423124301', 'Mumbai - Kolkata Hwy, Amravati - 444901', 'maniratnaconventions@gmail.com', NULL, 'https://www.facebook.com/maniratnaconventions/', 'https://www.instagram.com/maniratnaresort_amravati/', NULL, 'https://youtu.be/gNuLeOdGDI4?si=VP10HQeFZRQAOHj3', NULL, NULL, 'https://maps.app.goo.gl/y4hg39hAzNbLPhd59', NULL, NULL, '[\"19:00\",\"17:00\"]', '[\"17:00\",\"00:00\"]', 'Celebrate your wedding moments at ManiRatna hotels and resort.\r\nBring your friends and family and rejoice the day here with our hospitality, love and care.\r\nWell furnished and decorated hall equipped with high quality air conditioners.', '[\"771726938059_202303261456038550-6540df241cb811ee8fa70a58a9feac02.jpg\",\"1641726938060_202303261456038550-82d62dae1caf11eea5bf0a58a9feac02.jpg\",\"9971726938061_44ed37c81cb711eea23e0a58a9feac02.jpeg\",\"6501726938062_images (9).jpeg\",\"8101726938062_images (8)', '1726938064.jpg', '[\"3\",\"2\"]', '[\"1\",\"2\",\"3\",\"4\"]', 'Maniratna Resort', '9423124301', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/y4hg39hAzNbLPhd59', 'pending', '2024-09-21 11:31:05', '2024-09-21 11:31:05'),
(11, 87, NULL, 'Maniratna Resort', '9423124301', 'Mumbai - Kolkata Hwy, Amravati - 444901', 'maniratnaconventions@gmail.com', NULL, 'https://www.facebook.com/maniratnaconventions/', 'https://www.instagram.com/maniratnaresort_amravati/', NULL, 'https://youtu.be/gNuLeOdGDI4?si=VP10HQeFZRQAOHj3', NULL, NULL, 'https://maps.app.goo.gl/y4hg39hAzNbLPhd59', NULL, NULL, '[\"19:00\",\"19:00\"]', '[\"17:00\",\"00:00\"]', 'Celebrate your wedding moments at ManiRatna hotels and resort.\r\nBring your friends and family and rejoice the day here with our hospitality, love and care.\r\nWell furnished and decorated hall equipped with high quality air conditioners.', '[\"9521726938256_202303261456038550-6540df241cb811ee8fa70a58a9feac02.jpg\",\"4621726938257_202303261456038550-82d62dae1caf11eea5bf0a58a9feac02.jpg\",\"1711726938259_images (8).jpeg\",\"1241726938259_202303261456038550-f1e371221cb711eeb6340a58a9feac02.jpg\"]', '1726938260.jpg', '[\"3\",\"2\"]', '[\"1\",\"2\",\"3\",\"4\"]', 'Maniratna Resort', '9423124301', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/y4hg39hAzNbLPhd59', 'pending', '2024-09-21 11:34:21', '2024-09-21 11:34:21'),
(12, 87, NULL, 'Maniratna Resort', '9423124301', 'Mumbai - Kolkata Hwy, Amravati - 444901', 'maniratnaconventions@gmail.com', NULL, 'https://www.facebook.com/maniratnaconventions/', 'https://www.instagram.com/maniratnaresort_amravati/', NULL, 'https://youtu.be/gNuLeOdGDI4?si=VP10HQeFZRQAOHj3', NULL, NULL, 'https://maps.app.goo.gl/y4hg39hAzNbLPhd59', NULL, NULL, '[\"19:00\",\"19:00\"]', '[\"00:00\",\"17:00\"]', 'Celebrate your wedding moments at ManiRatna hotels and resort.\r\nBring your friends and family and rejoice the day here with our hospitality, love and care.\r\nWell furnished and decorated hall equipped with high quality air conditioners.', '[\"8241726938383_202303261456038550-6540df241cb811ee8fa70a58a9feac02.jpg\",\"3441726938384_202303261456038550-82d62dae1caf11eea5bf0a58a9feac02.jpg\",\"901726938385_images (8).jpeg\",\"1191726938385_202303261456038550-f1e371221cb711eeb6340a58a9feac02.jpg\"]', '1726938387.jpg', '[\"2\",\"3\"]', '[\"1\",\"2\",\"3\",\"4\"]', 'Maniratna Resort', '9423124301', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/y4hg39hAzNbLPhd59', 'approve', '2024-09-21 11:36:28', '2024-09-21 11:40:41'),
(13, 85, NULL, 'Mahendra Lawn', '9921832588', 'Saturna, Amravati, Maharashtra 444607', 'amolg0008@gmail.com', NULL, 'https://www.facebook.com/pages/Mahendra%20Lawn/778090749064200/', 'https://www.instagram.com/explore/locations/778090749064200/mahendra-lawn/recent/', NULL, NULL, NULL, NULL, 'https://maps.app.goo.gl/2usn49y1VWFqRpLE6?g_st=ac', NULL, NULL, '[\"17:00\"]', '[\"00:00\"]', 'Mahendra Lawn is an Wedding Venues in Amravati city and it is available to offer their services at your occasions  We are in best for services in anniversary, birthday party, brunch / lunch, corporate events, dinner party, engagement party, get togethers, mehendi party, retirement / farewell, sangeet ceremony, wedding, welcome / reception, other ceremony.', '[\"6581727087797_2021-02-07.jpg\",\"8241727087797_2023-12-12.jpg\",\"1911727087797_20230529_101827.jpg\",\"2061727088096_DSC_4938.JPG\"]', '1727087797.jpg', '[\"2\"]', '[\"1\",\"4\"]', 'Amol', '9921832588', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/2usn49y1VWFqRpLE6?g_st=ac', 'approve', '2024-09-23 01:08:18', '2024-09-23 05:14:59'),
(14, 88, NULL, 'Jai Bharat Mangalam', '9529124463', 'Saturna, Badnera Rd, Amravati, Maharashtra 444607', 'vallabhmehare@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://maps.app.goo.gl/bmv3diRbYu5388F87?g_st=ac', NULL, NULL, '[\"19:00\"]', '[\"17:00\"]', 'A banquet hall and function hall for your special day of wedding, reception,anniversary and corporate events \r\nSpacious interiors: Most AC banquet halls have spacious interiors, offering ample room for guests to move around, socialise, and enjoy the event.', '[\"4841727088724_2018-07-21.jpg\",\"831727088724_2020-05-11.jpg\",\"5331727088724_2022-03-23.jpg\",\"9251727088724_2022-04-15.jpg\",\"8171727088724_IMG_20171201_164000.jpg\"]', '1727088724.jpg', '[\"3\"]', '[\"1\",\"4\"]', 'Vallabh', '9529124463', NULL, 'no', NULL, NULL, NULL, NULL, '1', 'https://maps.app.goo.gl/bmv3diRbYu5388F87?g_st=ac', 'approve', '2024-09-23 05:02:10', '2024-09-23 05:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `aminities`
--

DROP TABLE IF EXISTS `aminities`;
CREATE TABLE IF NOT EXISTS `aminities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aminities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aminities`
--

INSERT INTO `aminities` (`id`, `aminities`, `created_at`, `updated_at`) VALUES
(1, 'Free Parking', '2024-06-10 05:56:37', '2024-06-10 05:56:37'),
(2, 'Swimming Pool', '2024-06-10 05:57:00', '2024-06-10 05:57:00'),
(3, 'Air Condition', '2024-06-10 05:58:19', '2024-06-10 05:58:19'),
(4, 'Cooler', '2024-06-10 05:58:28', '2024-06-10 05:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_name_id` int(30) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenities_for_booking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `advance` double DEFAULT NULL,
  `guest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = requested from user\r\n1 = accept\r\n2= reject\r\n',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `listing_id`, `venue_name_id`, `date`, `name`, `contact_no`, `time_slot`, `amenities_for_booking`, `price`, `advance`, `guest`, `remark`, `status`, `created_at`, `updated_at`) VALUES
(1, '70', '1', NULL, '2024-06-19', 'Sharique Sheikh', '7020734133', '17:00 - 17:00', '3', 140000, 5000, '500', 'coming to meet personally', '1', '2024-06-21 00:34:00', '2024-09-06 00:27:40'),
(2, '73', '1', NULL, '2024-07-10', 'Shubadha', '9632815464', '17:00 - 17:00', '3', 150000, NULL, '800', NULL, '2', '2024-07-01 06:23:15', '2024-07-11 03:46:03'),
(3, '74', '3', NULL, '2024-07-05', 'mohin', '1234567890', '17:00 - 17:00', '3', 150000, NULL, '1000', NULL, '1', '2024-07-04 02:30:15', '2024-07-04 02:31:44'),
(4, '69', '1', NULL, '2024-07-11', 'kunal', '8983458802', '17:00 - 17:00', '3', 150000, 5000, '1000', 'waiting for confirmation', '1', '2024-07-11 05:04:44', '2024-09-13 07:42:58'),
(5, '69', '1', NULL, '2024-08-30', 'test', '9592262626', '17:00 - 17:00', '3', 150000, NULL, '500', NULL, '2', '2024-08-21 08:51:12', '2024-09-06 00:43:35'),
(6, '69', '1', NULL, '2024-08-28', 'sk', '7845896857', '17:00 - 17:00', '3', 150000, NULL, '700', 'cost issue', '0', '2024-08-24 13:12:35', '2024-09-06 00:44:53'),
(7, '69', '1', NULL, '2024-09-28', 'SK', '9592262626', '17:00 - 17:00', '3', 150000, NULL, '500', NULL, '1', '2024-09-13 07:59:32', '2024-09-13 08:02:24'),
(8, '69', '4', NULL, '2024-09-20', 'sk', '9592262626', '19:30 - 17:00', '3', 181000, NULL, '1000', NULL, '2', '2024-09-16 07:12:22', '2024-09-17 01:33:52'),
(9, '70', '4', NULL, '2024-09-17', 'Kunal Dhoke', '9766658802', '19:30 - 17:00', '3', 181000, 10000, '1000', 'Waiting for advance payment', '1', '2024-09-17 01:14:40', '2024-09-17 01:23:53'),
(10, '69', '4', NULL, '2024-09-18', 'sk', '9766658802', '19:30 - 17:00', '3', 181000, NULL, '1000', NULL, '1', '2024-09-17 02:53:37', '2024-09-19 05:24:14'),
(11, '69', '4', NULL, '2024-09-20', 'sk', '9592262626', '19:30 - 17:00', '3', 181000, NULL, '1000', NULL, '0', '2024-09-17 05:44:43', '2024-09-19 04:20:08'),
(12, '69', '4', NULL, '2024-09-20', 'Kunal', '9766658802', '19:30 - 17:00', '3', 181000, NULL, '1000', NULL, '0', '2024-09-20 05:27:15', '2024-09-20 05:27:15'),
(13, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '100', NULL, '0', '2024-09-27 04:14:34', '2024-09-27 04:14:34'),
(14, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:15:40', '2024-09-27 04:15:40'),
(15, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:16:20', '2024-09-27 04:16:20'),
(16, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:16:57', '2024-09-27 04:16:57'),
(17, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:17:24', '2024-09-27 04:17:24'),
(18, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:17:53', '2024-09-27 04:17:53'),
(19, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:18:54', '2024-09-27 04:18:54'),
(20, '69', '4', 6, '2024-09-30', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '100', NULL, '0', '2024-09-27 04:23:04', '2024-09-27 04:23:04'),
(21, '69', '4', 6, '2024-10-01', 'shaikh11', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1500', NULL, '0', '2024-09-27 04:27:53', '2024-09-27 04:27:53'),
(22, '69', '4', 6, '2024-10-01', 'shaikh11', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1500', NULL, '0', '2024-09-27 04:28:19', '2024-09-27 04:28:19'),
(23, '69', '4', 6, '2024-10-01', 'shaikh11', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1500', NULL, '0', '2024-09-27 04:29:26', '2024-09-27 04:29:26'),
(24, '69', '4', 6, '2024-10-01', 'shaikh11', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1500', NULL, '0', '2024-09-27 04:32:04', '2024-09-27 04:32:04'),
(25, '69', '4', 7, '2024-10-02', 'sk', '1234567890', '17:00 - 23:00', '2', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:34:27', '2024-09-27 04:34:27'),
(26, '69', '4', 7, '2024-10-02', 'sk', '1234567890', '17:00 - 23:00', '2', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:35:43', '2024-09-27 04:35:43'),
(27, '69', '4', 6, '2024-10-01', 'sk', '9856748596', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:37:38', '2024-09-27 04:37:38'),
(28, '69', '4', 6, '2024-10-02', 'sk', '9856748596', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:39:35', '2024-09-27 04:39:35'),
(29, '69', '4', 7, '2024-09-30', 'sk', '9856748596', '17:00 - 23:00', '2', NULL, NULL, '1000', NULL, '0', '2024-09-27 04:44:05', '2024-09-27 04:44:05'),
(30, '69', '4', 7, '2024-09-30', 'sk', '9856748596', '17:00 - 23:00', NULL, NULL, NULL, '1000', NULL, '0', '2024-09-27 04:44:37', '2024-09-27 04:44:37'),
(31, '69', '4', 6, '2024-09-27', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '500', NULL, '0', '2024-09-27 10:23:28', '2024-09-27 10:23:28'),
(32, '69', '4', 6, '2024-09-26', 'shaikh', '9592262626', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 10:24:32', '2024-09-27 10:24:32'),
(33, '69', '4', 6, '2024-10-03', 'sk', '9856748596', '19:30 - 17:00', '3', NULL, NULL, '1000', NULL, '0', '2024-09-27 10:25:52', '2024-09-27 10:25:52'),
(34, '76', '4', 6, '1970-01-01', 'ss', '9592262626', '19:30 - 17:00', NULL, NULL, NULL, '1000', NULL, '0', '2024-09-27 13:14:22', '2024-09-27 13:14:22'),
(35, '76', '4', 6, '1970-01-01', 'h', '1234567890', '19:30 - 17:00', NULL, NULL, NULL, '500', NULL, '0', '2024-09-27 13:18:35', '2024-09-27 13:18:35'),
(36, '66', '5', 16, '1970-01-01', 'ms', '1234567890', '04:47 - 21:35', NULL, NULL, NULL, '1000', NULL, '0', '2024-09-30 05:42:14', '2024-09-30 05:42:14'),
(37, '66', '5', 16, '1970-01-01', 'ms', '1234567890', '04:47 - 21:35', NULL, NULL, NULL, '1000', NULL, '0', '2024-09-30 05:43:07', '2024-09-30 05:43:07'),
(38, '66', '1', 24, '1970-01-01', 'h', '9592262626', '17:00 - 17:00', NULL, NULL, NULL, '1000', NULL, '1', '2024-09-30 05:44:53', '2024-09-30 05:44:53'),
(39, '66', '1', 24, '1970-01-01', 'h', '9592262626', '17:00 - 17:00', NULL, NULL, NULL, '1000', NULL, '1', '2024-09-30 05:46:10', '2024-09-30 05:46:10'),
(40, '66', '1', 24, '1970-01-01', 'h', '1234567890', '17:00 - 17:00', NULL, NULL, NULL, '500', NULL, '1', '2024-09-30 05:46:34', '2024-09-30 05:46:34'),
(41, '66', '5', 16, '09/30/2024', 'ss', '1234567890', '04:47 - 21:35', NULL, NULL, NULL, '100', NULL, '1', '2024-09-30 06:02:20', '2024-09-30 06:02:20'),
(42, '66', '1', 25, '20-09-2024', 'shaikh', '9592262626', '10:57 - 10:57', NULL, NULL, NULL, '1500', NULL, '1', '2024-09-30 11:12:35', '2024-09-30 11:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(2, 'Lawn', '2024-06-10 05:56:23', '2024-06-10 05:56:23'),
(3, 'Hall', '2024-06-10 06:06:39', '2024-06-10 06:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `status`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Amravati, Maharashtra, India', 0, 20.9319821, 77.7523039, '2024-06-10 05:55:58', '2024-07-29 23:50:36'),
(2, 'Khamgaon, Maharashtra, India', 0, 20.7131695, 76.5650829, '2024-07-04 02:11:39', '2024-08-01 02:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listing_amenities`
--

DROP TABLE IF EXISTS `listing_amenities`;
CREATE TABLE IF NOT EXISTS `listing_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_amenities`
--

INSERT INTO `listing_amenities` (`id`, `listing_id`, `venue_name`, `amenity`, `capacity`, `price`, `created_at`, `updated_at`) VALUES
(3, '3', '', '3', '1500', '150000', '2024-07-04 02:06:15', '2024-07-04 02:06:15'),
(4, '3', '', '2', '1000', '70000', '2024-07-04 02:06:15', '2024-07-04 02:06:15'),
(6, '4', 'Lotus Inn Hall', '3', '1500', '181000', '2024-09-15 01:43:41', '2024-09-15 01:43:41'),
(7, '4', 'Lotus Inn Lawn', '2', '1200', '76000', '2024-09-15 01:43:42', '2024-09-15 01:43:42'),
(8, '5', 'sdfsdf', '2', '1000', '100000', '2024-09-16 07:37:32', '2024-09-16 07:37:32'),
(11, '7', 'Rajwada Hall', '3', '1500', '0', '2024-09-18 11:45:55', '2024-09-18 11:45:55'),
(12, '6', 'Muktai Hall', '3', '2000', '0', '2024-09-18 12:20:14', '2024-09-18 12:20:14'),
(13, '6', 'Muktai Lawn', '2', '1500', '0', '2024-09-18 12:20:14', '2024-09-18 12:20:14'),
(14, '8', 'Deshmukh Lawn', '2', '1500', '0', '2024-09-18 12:48:29', '2024-09-18 12:48:29'),
(15, '8', 'Deshmukh Hall', '3', '1500', '0', '2024-09-18 12:48:29', '2024-09-18 12:48:29'),
(16, '5', 'Rubby Lawn', '2', '1500', '150000', '2024-09-20 03:20:11', '2024-09-20 03:20:11'),
(17, '9', 'Harichand Lawn', '3', '2000', '0', '2024-09-21 03:46:45', '2024-09-21 03:46:45'),
(18, '9', 'Harichand Lawn', '2', '1000', '0', '2024-09-21 03:46:46', '2024-09-21 03:46:46'),
(19, '12', 'Maniratna Hall', '3', '2000', '0', '2024-09-21 11:36:28', '2024-09-21 11:36:28'),
(20, '12', 'Maniratna Lawn', '2', '2000', '0', '2024-09-21 11:36:28', '2024-09-21 11:36:28'),
(22, '14', 'Jai Bharat Mangalam', '3', '1000', '0', '2024-09-23 05:02:10', '2024-09-23 05:02:10'),
(23, '13', 'Mahendra Lawn', '2', '1000', '0', '2024-09-23 05:06:37', '2024-09-23 05:06:37'),
(24, '1', 'Royal Hall', '3', '1500', '200000', '2024-09-30 05:27:44', '2024-10-01 09:20:50'),
(25, '1', 'Taj Lawn', '2', '2000', '140000', '2024-09-30 05:27:44', '2024-10-01 09:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_111448_create_city_table', 1),
(6, '2024_03_13_111503_create_category_table', 1),
(7, '2024_03_13_111517_create_aminities_table', 1),
(8, '2024_03_13_111530_create_slider_table', 1),
(9, '2024_03_13_111541_create_slot_category_table', 1),
(10, '2024_03_14_060437_create_add_listing_table', 2),
(11, '2024_03_14_150108_create_vendor_information_table', 3),
(12, '2024_03_15_065847_create_booking_table', 4),
(13, '2024_03_19_173506_create_review_table', 5),
(14, '2024_09_22_132527_create_vendor_registrations_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `listing_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, '69', '1', '1', 'This is the best hall.....!\r\nOk I checked it', '2024-06-14 03:25:15', '2024-06-14 07:19:38'),
(4, '69', '1', '3', 'Second', '2024-06-14 07:20:00', '2024-06-14 07:20:00'),
(8, '70', '1', '4', 'gooooood', '2024-06-21 00:35:01', '2024-06-21 00:35:44'),
(9, '74', '3', '5', 'best', '2024-07-04 02:38:33', '2024-07-04 02:38:33'),
(12, '77', '4', '5', 'Best Ambience and Interior', '2024-09-15 05:41:23', '2024-09-15 05:41:23'),
(14, '69', '4', '5', 'best hall', '2024-09-16 07:12:48', '2024-09-16 07:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider`, `created_at`, `updated_at`) VALUES
(1, '1718019109.jpg', '2024-06-10 06:01:49', '2024-06-10 06:01:49'),
(6, '1718263581.jpeg', '2024-06-13 01:56:21', '2024-06-13 01:56:21'),
(7, '1718265363.jpeg', '2024-06-13 02:26:03', '2024-06-13 02:26:03'),
(10, '1718266159.jpeg', '2024-06-13 02:39:19', '2024-06-13 02:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `slot_category`
--

DROP TABLE IF EXISTS `slot_category`;
CREATE TABLE IF NOT EXISTS `slot_category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slot_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slot_category`
--

INSERT INTO `slot_category` (`id`, `slot_category`, `created_at`, `updated_at`) VALUES
(1, 'Evening', '2024-06-10 05:59:05', '2024-06-10 05:59:05'),
(3, 'Morning', '2024-06-10 06:07:10', '2024-06-10 06:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

DROP TABLE IF EXISTS `time_slot`;
CREATE TABLE IF NOT EXISTS `time_slot` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `listing_id`, `category_id`, `from_time_slot`, `to_time_slot`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '17:00', '17:00', '2024-06-10 06:18:30', '2024-06-10 06:18:30'),
(3, '3', '2', '17:00', '00:00', '2024-07-04 02:06:15', '2024-07-04 02:06:15'),
(4, '3', '3', '17:00', '17:00', '2024-07-04 02:06:15', '2024-07-04 02:06:15'),
(5, '4', '3', '19:30', '17:00', '2024-09-15 01:43:42', '2024-09-15 01:43:42'),
(6, '4', '2', '17:00', '23:00', '2024-09-15 01:43:42', '2024-09-15 01:43:42'),
(7, '5', '2', '04:47', '21:35', '2024-09-16 07:37:32', '2024-09-16 07:37:32'),
(8, '7', '3', '19:30', '17:30', '2024-09-18 02:10:36', '2024-09-18 02:10:36'),
(9, '6', '2', '17:00', '00:00', '2024-09-18 12:20:14', '2024-09-18 12:20:14'),
(10, '6', '3', '19:00', '17:00', '2024-09-18 12:20:14', '2024-09-18 12:20:14'),
(11, '8', '2', '17:00', '00:00', '2024-09-18 12:48:29', '2024-09-18 12:48:29'),
(12, '8', '3', '19:00', '17:00', '2024-09-18 12:48:29', '2024-09-18 12:48:29'),
(13, '9', '3', '19:00', '17:00', '2024-09-21 03:46:46', '2024-09-21 03:46:46'),
(14, '12', '2', '19:00', '00:00', '2024-09-21 11:36:28', '2024-09-21 11:36:28'),
(15, '12', '3', '19:00', '17:00', '2024-09-21 11:36:28', '2024-09-21 11:36:28'),
(16, '13', '2', '17:00', '00:00', '2024-09-23 01:08:18', '2024-09-23 01:08:18'),
(17, '14', '3', '19:00', '17:00', '2024-09-23 05:02:10', '2024-09-23 05:02:10'),
(18, '1', '2', '10:57', '10:57', '2024-09-30 05:27:44', '2024-09-30 05:27:44'),
(19, '1', '3', '15:57', '10:57', '2024-09-30 05:27:44', '2024-10-01 09:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `gender`, `contact_no`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'Male', '1234567890', NULL, '$2y$12$XlHaN1432TiOnHbze6m6dOzhJSFPFvxYZNPQPv87dqLnKoKG5y1XS', NULL, NULL, '2024-03-19 01:27:23', '2024-07-01 04:41:52'),
(66, 'business', 'Zhep Marriage Hall', 'zhepservices@gmail.com', 'Male', '9766658802', NULL, '$2y$12$Dc5YzFJmZ8uzhb/Z8mxu4.c3CFTc6tvjlL5uXTJwf58Y5SQYprtlm', NULL, NULL, '2024-06-10 05:41:20', '2024-08-01 02:24:31'),
(67, 'user', 'Mayuri', 'mayur@gmail.com', NULL, '9689022549', NULL, '$2y$12$3VDIcXCGtujFGo2XnNwuN.UZZ3OarnfM/bhnO3184m3.EL6QUA1my', NULL, NULL, '2024-06-11 04:15:01', '2024-07-01 07:22:58'),
(69, 'user', 'sk', 'sk@gmail.com', 'Male', '9307746947', NULL, '$2y$12$aPTZAoR3R3/00Rq6EbHIf.HEd79dOhs95SOkyBz6kRH9X.H1bCxwK', NULL, NULL, '2024-06-14 02:35:53', '2024-08-01 02:36:35'),
(70, 'user', 'Kunal', 'kunal.dhoke7@gmail.com', 'Male', '8983458802', NULL, '$2y$12$10EanxKLNsJtp3Sz4Ia7oevbIJLGAndeGwtfohwSWOEaB/tcTO7iq', NULL, NULL, '2024-06-21 00:04:05', '2024-09-17 01:12:35'),
(71, 'business', 'Mayuri Vadatkar', 'mayurivadatkar23@gmail.com', NULL, '9689022549', NULL, '$2y$12$exW9QxcD2rdp/WRSD6nISO174j4sqZXcSajj7K1Mvgm5eJvHVkhfq', NULL, NULL, '2024-07-01 04:47:25', '2024-07-01 04:47:25'),
(72, 'business', 'Mayuri Vadatkar', 'mayuri@gmail.com', NULL, '9665665026', NULL, '$2y$12$uzaO7gCK.d9Y/ITUyXwai.HMvZxbyTKVkUim.oyK2THA6q/5zSPn.', NULL, NULL, '2024-07-01 05:34:05', '2024-07-01 05:34:05'),
(73, 'user', 'Shubadha', 'Shubdha@gma.com', 'Female', '7666243858', NULL, '$2y$12$h809nDN2QSKdWCQVdURLnOsLoEA4S2IevvWK89aPYLRuxGpF/A.oq', NULL, NULL, '2024-07-01 05:45:05', '2024-07-01 05:45:05'),
(74, 'user', 'mohin khan', 'mohin@gmail.com', 'Male', '7385078839', NULL, '$2y$12$UzPtxh5pnv6LRvM59w2uJOc1dHPNVPaGk8bnUkNxEQtjmvGwz/pla', NULL, NULL, '2024-07-02 05:47:31', '2024-07-02 05:47:31'),
(75, 'business', 'X Marriage Hall', 'zheptoursandtravels@gmail.com', NULL, '8983458802', NULL, '$2y$12$rUeKsARfR3QjBOKOJUPq/upe0LQF1Tmb8OBh3eXfbclgYDhwBA.0e', NULL, NULL, '2024-07-04 01:57:51', '2024-07-04 01:57:51'),
(76, 'business', 'Lotus Inn Marriage Hall', 'adyfuladi@gmail.com', 'Male', '8668239084', NULL, '$2y$12$OBmi6LbWhiZRUjB.PgIHn.bVpSPirds8qJKXVhlwfpC/zMZxy/TsW', NULL, NULL, '2024-09-15 01:31:55', '2024-09-17 05:08:30'),
(77, 'user', 'Nikhil Raut', 'nikhilbabaraoraut1998@gmail.com', 'Male', '8788286050', NULL, '$2y$12$xYNE8qplxeHTe2Ov/ZXhSu80xBA1xbiWav0PDD0XyPBCurIYv1g8C', NULL, NULL, '2024-09-15 05:31:14', '2024-09-15 05:31:14'),
(78, 'business', 'Muktai Palace', 'Sanketmahulkar470@gmail.com', NULL, '7558661593', NULL, '$2y$12$ZUfjh25nx4JfGWmeRD/8JOWsvG1B0Eyw2ERo4bvGSPKlssfHD94rq', NULL, NULL, '2024-09-18 00:13:27', '2024-09-18 00:13:27'),
(82, 'business', 'test', 'test@gmail.com', NULL, '9307746947', NULL, '$2y$12$je.G7i8ZSJxGp59wh9u1oeJZhoBIpxHGpiBD5OgZjmnQHfvD/4yri', NULL, NULL, '2024-09-18 00:28:02', '2024-09-18 00:28:02'),
(83, 'business', 'Telai Celebrations', 'abhilokhande11@gmsil.com', NULL, '8698551501', NULL, '$2y$12$Mbffrco49Zyddhqjv4LXI.SVyHW12Tt3Ilckh1GJCFV/1Nl4As9w.', NULL, NULL, '2024-09-18 01:03:42', '2024-09-18 01:03:42'),
(84, 'business', 'Rajwada Palace', 'asdamol@yahoo.com', NULL, '8806826000', NULL, '$2y$12$TV3qRlEUyWJVTNeei7EObecUG0eQhKAxyhQBkx06gChERg2F7n5ZW', NULL, NULL, '2024-09-18 02:06:08', '2024-09-18 02:06:08'),
(85, 'business', 'Mahendra Lawn', 'amolg0008@gmail.com', NULL, '9822910449', NULL, '$2y$12$ML83WEoDZfXtQzyIVB2um.SiDRgXKChB2rOeT70ujcew/3rljXn02', NULL, NULL, '2024-09-21 02:45:09', '2024-09-21 02:45:09'),
(86, 'business', 'Hotel Shri Harichand Mangalam', 'piyush.sharma555@rediffmail.com', NULL, '9834419954', NULL, '$2y$12$wgxzBJ88PC4CF4OpOLhZruEVpHLHlqy1hBm64rDLj1mSXgEt0JbnG', NULL, NULL, '2024-09-21 03:18:38', '2024-09-21 03:18:38'),
(87, 'business', 'Maniratna Resort', 'maniratnaconventions@gmail.com', 'Male', '9423124301', NULL, '$2y$12$5IUdI0MDwCQSC9BucBGU9uGPvSocybuMtxsmY3b/YV8yhVYW4D2JS', NULL, NULL, '2024-09-21 11:04:11', '2024-09-26 01:15:08'),
(88, 'business', 'Jai Bharat Mangalam', 'vallabhmehare@gmail.com', NULL, '9529124463', NULL, '$2y$12$0w0LB0.Iv6gSt8.uC0W0UeTpf0IvTiMFctb9imhwrOCz.NnS7jUEa', NULL, NULL, '2024-09-23 04:46:12', '2024-09-23 04:46:12'),
(89, 'business', 'Tuljabhavani Marriage Hall', 'vijay40303raut@gmail.com', NULL, '9890936280', NULL, '$2y$12$5nQB6mhwjG4knhiXXj.Mv.TZtINJe1DCfFXIm9VQgnhkron8Dugnm', NULL, NULL, '2024-09-27 00:30:47', '2024-09-27 00:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_information`
--

DROP TABLE IF EXISTS `vendor_information`;
CREATE TABLE IF NOT EXISTS `vendor_information` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `add_listing_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_information`
--

INSERT INTO `vendor_information` (`id`, `add_listing_id`, `vendor_name`, `vendor_description`, `vendor_offer`, `vendor_discount`, `vendor_price`, `vendor_image`, `created_at`, `updated_at`) VALUES
(1, '1', '[\"hall\",\"zhep\"]', '[\"demo\",\"sfsf\"]', '[\"percent\",\"percent\"]', '[\"50\",\"10\"]', '[\"50000\",\"773\"]', '[\"v46101723124719.png\",null]', '2024-06-10 06:18:30', '2024-10-01 11:33:58'),
(3, '3', NULL, NULL, NULL, NULL, NULL, '[]', '2024-07-04 02:06:15', '2024-07-04 02:13:53'),
(4, '4', '[\"Zhep Cab\",\"grg\"]', '[\"Local Cab Service\",\"rdgr\"]', '[\"rupees\",\"percent\"]', '[\"50\",\"10\"]', '[\"810\",\"609\"]', '[null,\"v82711727429667.jpeg\"]', '2024-09-15 01:43:42', '2024-09-27 04:04:27'),
(5, '5', '[\"test\"]', '[\"dbgb\"]', '[\"percent\"]', '[\"20\"]', '[\"100000\"]', '[null]', '2024-09-16 07:37:32', '2024-09-27 01:52:10'),
(6, '7', '[\"Zhep Cab\"]', '[\"Local Cab Service\"]', '[\"rupees\"]', '[\"50\"]', '[\"80\"]', '[\"v82301726680887.jpeg\"]', '2024-09-18 02:10:36', '2024-09-18 12:04:47'),
(7, '8', '[\"Zhep Cab\"]', '[\"Local Cab Service\"]', '[\"rupees\"]', '[\"50\"]', '[\"80\"]', '[\"v21801726717163.jpeg\"]', '2024-09-18 12:48:29', '2024-09-18 22:09:23'),
(8, '9', '[\"Zhep Cab\"]', '[\"Local Taxi Service\"]', '[\"rupees\"]', '[\"50\"]', '[\"80\"]', '[\"v55601727069710.jpeg\"]', '2024-09-21 03:46:46', '2024-09-23 00:05:10'),
(9, '12', '[\"Zhep Cab\"]', '[\"Local Taxi Service\"]', '[\"rupees\"]', '[\"50\"]', '[\"80\"]', '[\"v43401726938468.jpeg\"]', '2024-09-21 11:36:28', '2024-09-21 11:37:48'),
(10, '13', '[\"Zhep Cab\"]', '[\"Local Taxi Service\"]', '[\"rupees\"]', '[\"50\"]', '[\"80\"]', '[\"v20801727087872.jpeg\"]', '2024-09-23 01:08:18', '2024-09-23 05:07:52'),
(11, '14', '[\"Zhep Cab\"]', '[\"Local Taxi Service\"]', '[\"rupees\"]', '[\"50\"]', '[\"80\"]', '[\"v41001727087530.jpeg\"]', '2024-09-23 05:02:10', '2024-09-23 05:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_registrations`
--

DROP TABLE IF EXISTS `vendor_registrations`;
CREATE TABLE IF NOT EXISTS `vendor_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star_count` int(25) DEFAULT NULL,
  `review_count` int(25) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Approved','Pending','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `verified` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_registrations`
--

INSERT INTO `vendor_registrations` (`id`, `name`, `state`, `city`, `category`, `email`, `phone_number`, `alternate_phone_number`, `address`, `star_count`, `review_count`, `password`, `image`, `status`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'sdvdv', 'Maharashtra', 'Amravati', 'Cars', 'sk@gmail.com', '33253333333', '7854859685', NULL, 4, 4, '1233', NULL, 'Approved', '0', NULL, '2024-10-02 10:55:30'),
(2, 'mayuri', 'Maharashtra', 'Amravati', 'Makeup', 'mayuri@gmail.com', '7020734133', '7854859687', 'near railway station road', 14, 6, '$2y$12$ieiL7K0ks074dbTczsmzxe9a.jxdmjbyYaYLuvMjV.U11TKj9yzmS', '1727701048.jpg', 'Approved', '1', '2024-09-27 12:03:30', '2024-10-01 10:37:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
