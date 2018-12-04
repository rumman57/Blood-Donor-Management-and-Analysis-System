-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 04:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rumman', 'rumman142228@gmail.com', '$2y$10$HqnyPwSo2rCFYQ9GmriPmOV8eep.W6GXBk6vFD9ykTy2yOpt8Erbq', 'b0uwdWZ4OoqwODJURLfNe2rZTU6b90K1kZHLhYB3bUYCKEcxdzmtbjuf4oi3', '2018-10-28 07:09:55', '2018-10-28 07:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`id`, `name`, `phone`, `blood_group`, `amount`, `division`, `present_district`, `present_location`, `date`, `code`, `messages`, `created_at`, `updated_at`) VALUES
(64, 'Larry Kertzmann', '01717188175', 'A-', 5, 'Rajshahi', 'Sunamganj', 'Lorem Ipsum Dummy Content', '2018-12-08', 'rrr', NULL, '2018-10-05 04:46:12', '2018-11-13 08:40:23'),
(65, 'Stacey Oberbrunner Jr.', '01839765430', 'B-', 4, 'Rangpur', 'Noakhali', 'Lorem Ipsum Dummy Content', '2018-03-02', 'rrr', NULL, '2018-07-12 04:42:22', '2018-11-13 08:40:55'),
(66, 'Mr. Arjun Bode', '01769486757', 'O+', 2, 'Khulna', 'Bagerhat', 'Lorem Ipsum Dummy Content', '2018-09-20', 'rrr', NULL, '2017-09-05 05:44:51', '2018-11-13 08:40:55'),
(67, 'Miss Eda Champlin V', '01961512276', 'AB+', 4, 'Mymensingh', 'Lakshmipur', 'Lorem Ipsum Dummy Content', '2018-12-13', 'rrr', NULL, '2018-06-15 05:54:29', '2018-11-13 08:40:55'),
(68, 'Dr. Rosella Dach MD', '01988316862', 'A+', 1, 'Rangpur', 'Khulna', 'Lorem Ipsum Dummy Content', '2018-01-19', 'rrr', NULL, '2017-12-28 04:22:23', '2018-11-13 08:40:55'),
(69, 'Zackery Hodkiewicz', '01965389386', 'O-', 5, 'Khulna', 'Sherpur', 'Lorem Ipsum Dummy Content', '2018-04-25', 'rrr', NULL, '2017-09-05 05:36:46', '2018-11-13 08:40:55'),
(70, 'Tessie Mohr', '01928089235', 'A+', 3, 'Barisal', 'Lalmonirhat', 'Lorem Ipsum Dummy Content', '2018-11-10', 'rrr', NULL, '2018-11-16 05:23:55', '2018-11-13 08:40:55'),
(71, 'Prof. Gunner Muller Jr.', '01852179595', 'B-', 2, 'Rajshahi', 'Kishoreganj', 'Lorem Ipsum Dummy Content', '2018-10-06', 'rrr', NULL, '2018-12-27 05:22:42', '2018-11-13 08:40:55'),
(72, 'Brooklyn Feeney III', '01525267844', 'O-', 5, 'Barisal', 'Chapai Nawabganj', 'Lorem Ipsum Dummy Content', '2018-05-18', 'rrr', NULL, '2018-02-11 05:47:22', '2018-11-13 08:40:55'),
(73, 'Dr. Andrew Toy MD', '01943227650', 'A-', 5, 'Sylhet', 'Narsingdi', 'Lorem Ipsum Dummy Content', '2018-06-19', 'rrr', NULL, '2017-12-19 04:22:35', '2018-11-13 08:40:55'),
(74, 'Alexis Reichert MD', '01649565249', 'B+', 4, 'Khulna', 'Satkhira', 'Lorem Ipsum Dummy Content', '2018-02-02', 'rrr', NULL, '2017-09-14 05:16:12', '2018-11-13 08:40:55'),
(75, 'Austin Pfeffer', '01772318398', 'AB+', 2, 'Rajshahi', 'Bhola', 'Lorem Ipsum Dummy Content', '2018-08-17', 'rrr', NULL, '2017-08-06 04:17:21', '2018-11-13 08:40:55'),
(76, 'Ida Zieme', '01720997952', 'A-', 3, 'Mymensingh', 'Noakhali', 'Lorem Ipsum Dummy Content', '2018-12-22', 'rrr', NULL, '2018-04-27 04:19:36', '2018-11-13 08:40:55'),
(77, 'Reinhold Lang IV', '01849847420', 'A+', 3, 'Barisal', 'Gazipur', 'Lorem Ipsum Dummy Content', '2018-07-12', 'rrr', NULL, '2018-05-09 05:35:36', '2018-11-13 08:40:55'),
(78, 'Annamarie Halvorson', '01916247198', 'O-', 1, 'Mymensingh', 'Habiganj', 'Lorem Ipsum Dummy Content', '2018-06-10', 'rrr', NULL, '2017-10-19 05:11:13', '2018-11-13 08:40:55'),
(79, 'Geraldine Grant', '01799044268', 'B-', 5, 'Mymensingh', 'Cox\'s Bazar', 'Lorem Ipsum Dummy Content', '2018-08-03', 'rrr', NULL, '2017-07-03 04:36:43', '2018-11-13 08:40:55'),
(80, 'Johanna Kerluke', '01719282353', 'A+', 2, 'Chittagong', 'Shariatpur', 'Lorem Ipsum Dummy Content', '2018-03-15', 'rrr', NULL, '2018-10-01 04:34:42', '2018-11-13 08:40:55'),
(81, 'Ms. Kacie Macejkovic', '01572548712', 'A-', 3, 'Sylhet', 'Munshiganj', 'Lorem Ipsum Dummy Content', '2018-04-06', 'rrr', NULL, '2017-09-12 04:28:35', '2018-11-13 08:40:55'),
(82, 'Marlen Kassulke', '01755014173', 'A+', 1, 'Sylhet', 'Jessore', 'Lorem Ipsum Dummy Content', '2018-04-19', 'rrr', NULL, '2018-08-18 04:45:58', '2018-11-13 08:40:55'),
(83, 'Prof. Eric Cassin', '01711427885', 'B-', 3, 'Barisal', 'Meherpur', 'Lorem Ipsum Dummy Content', '2018-12-11', 'rrr', NULL, '2018-04-18 04:27:56', '2018-11-13 08:40:55'),
(84, 'Petra Moen II', '01780513364', 'B+', 2, 'Sylhet', 'Sirajganj', 'Lorem Ipsum Dummy Content', '2018-01-19', 'rrr', NULL, '2018-01-05 04:33:50', '2018-11-13 08:40:56'),
(85, 'Sofia Carter', '01539733439', 'O-', 3, 'Sylhet', 'Munshiganj', 'Lorem Ipsum Dummy Content', '2018-02-06', 'rrr', NULL, '2018-01-22 04:33:40', '2018-11-13 08:40:56'),
(86, 'Murray Skiles', '01680891420', 'A-', 3, 'Rajshahi', 'Pirojpur', 'Lorem Ipsum Dummy Content', '2018-09-24', 'rrr', NULL, '2017-03-26 05:14:32', '2018-11-13 08:40:56'),
(87, 'Anissa Rolfson', '01787288481', 'B-', 3, 'Rangpur', 'Moulvibazar', 'Lorem Ipsum Dummy Content', '2018-02-28', 'rrr', NULL, '2017-11-08 04:26:23', '2018-11-13 08:40:56'),
(88, 'Dr. Toni Bayer I', '01620813868', 'AB+', 5, 'Khulna', 'Jamalpur', 'Lorem Ipsum Dummy Content', '2018-05-02', 'rrr', NULL, '2017-09-24 04:39:43', '2018-11-13 08:40:56'),
(89, 'Giovanna Stiedemann', '01976387250', 'AB+', 2, 'Mymensingh', 'Bagerhat', 'Lorem Ipsum Dummy Content', '2018-11-13', 'rrr', NULL, '2018-04-26 05:38:56', '2018-11-13 08:40:56'),
(90, 'Mrs. Irma Skiles I', '01895828697', 'A-', 3, 'Sylhet', 'Gopalganj', 'Lorem Ipsum Dummy Content', '2018-11-28', 'rrr', NULL, '2018-03-15 05:39:25', '2018-11-13 08:40:56'),
(91, 'Birdie Barton', '01890933000', 'A-', 5, 'Khulna', 'Narail', 'Lorem Ipsum Dummy Content', '2018-04-04', 'rrr', NULL, '2018-05-04 04:53:17', '2018-11-13 08:40:56'),
(92, 'Jackie Crist', '01832719540', 'B+', 3, 'Chittagong', 'Gazipur', 'Lorem Ipsum Dummy Content', '2018-07-25', 'rrr', NULL, '2018-10-14 05:26:54', '2018-11-13 08:40:56'),
(93, 'Solon Dooley', '01520983530', 'AB-', 2, 'Sylhet', 'Narayanganj', 'Lorem Ipsum Dummy Content', '2018-02-01', 'rrr', NULL, '2018-01-21 04:51:37', '2018-11-13 08:40:56'),
(94, 'Melisa Willms', '01872719380', 'B-', 1, 'Dhaka', 'Faridpur', 'Lorem Ipsum Dummy Content', '2018-01-18', 'rrr', NULL, '2018-09-29 05:19:48', '2018-11-13 08:40:56'),
(95, 'Alfredo Dickinson', '01633325274', 'A-', 3, 'Sylhet', 'Pabna', 'Lorem Ipsum Dummy Content', '2018-07-29', 'rrr', NULL, '2017-06-21 05:36:16', '2018-11-13 08:40:56'),
(96, 'Ms. Kaylin Cummerata', '01959084331', 'O+', 5, 'Chittagong', 'Chapai Nawabganj', 'Lorem Ipsum Dummy Content', '2018-01-29', 'rrr', NULL, '2017-12-12 04:28:15', '2018-11-13 08:40:56'),
(97, 'Odessa Kovacek', '01987782762', 'AB+', 4, 'Barisal', 'Sylhet', 'Lorem Ipsum Dummy Content', '2018-02-06', 'rrr', NULL, '2017-12-04 05:55:55', '2018-11-13 08:40:56'),
(98, 'Prof. Kayden Wintheiser IV', '01920129006', 'B-', 2, 'Sylhet', 'Brahmanbaria', 'Lorem Ipsum Dummy Content', '2018-05-09', 'rrr', NULL, '2017-10-14 05:28:30', '2018-11-13 08:40:56'),
(99, 'Lina Abshire', '01814112779', 'B-', 1, 'Khulna', 'Moulvibazar', 'Lorem Ipsum Dummy Content', '2018-01-07', 'rrr', NULL, '2018-11-13 05:43:43', '2018-11-13 08:40:56'),
(100, 'Arthur Volkman', '01814711624', 'AB-', 3, 'Dhaka', 'Feni', 'Lorem Ipsum Dummy Content', '2018-11-02', 'rrr', NULL, '2018-06-30 04:48:19', '2018-11-13 08:40:56'),
(101, 'Mr. Easter Yost PhD', '01880734870', 'O-', 5, 'Rajshahi', 'Kishoreganj', 'Lorem Ipsum Dummy Content', '2018-01-08', 'rrr', NULL, '2018-01-30 04:31:31', '2018-11-13 08:40:56'),
(102, 'Jewell Rolfson', '01956874138', 'B-', 5, 'Rangpur', 'Bogra', 'Lorem Ipsum Dummy Content', '2018-01-15', 'rrr', NULL, '2017-02-13 04:56:31', '2018-11-13 08:40:56'),
(103, 'Arvid Schmeler', '01636742138', 'B+', 1, 'Khulna', 'Khulna', 'Lorem Ipsum Dummy Content', '2018-01-06', 'rrr', NULL, '2018-11-18 05:40:31', '2018-11-13 08:40:56'),
(104, 'Pink Prohaska', '01567868739', 'AB-', 4, 'Sylhet', 'Khulna', 'Lorem Ipsum Dummy Content', '2018-12-23', 'rrr', NULL, '2017-08-30 04:32:52', '2018-11-13 08:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Blood Relation', '2018-11-07 08:08:46', '2018-11-07 08:08:46'),
(2, 'AB- Blood Donor', '2018-11-07 08:08:54', '2018-11-07 08:08:54'),
(3, 'Keep Safe Blood', '2018-11-07 08:09:02', '2018-11-07 08:09:02'),
(4, 'Preserve Blood', '2018-11-07 08:09:09', '2018-11-07 08:09:09'),
(5, 'Donation Center', '2018-11-07 08:09:14', '2018-11-07 08:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `donation_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `user_id`, `donation_date`, `donation_to`, `donation_address`, `created_at`, `updated_at`) VALUES
(170, 202, '2018-01-05', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:07', '2018-11-13 09:03:07'),
(171, 189, '2017-08-05', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:07', '2018-11-13 09:03:07'),
(172, 190, '2018-07-06', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(173, 161, '2017-03-11', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(174, 171, '2018-04-07', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(175, 172, '2017-01-10', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(176, 188, '2017-03-08', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(177, 187, '2018-02-07', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(178, 195, '2018-08-10', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(179, 165, '2017-04-02', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(180, 168, '2018-10-05', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(181, 184, '2017-03-07', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(182, 201, '2018-11-09', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(183, 202, '2017-02-01', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(184, 176, '2017-07-05', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(185, 162, '2017-08-01', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(186, 160, '2018-08-03', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(187, 171, '2017-03-03', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(188, 165, '2017-09-10', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(189, 190, '2017-05-12', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(190, 196, '2017-01-03', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(191, 186, '2018-10-08', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(192, 205, '2018-11-11', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(193, 172, '2017-07-08', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(194, 156, '2017-07-04', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(195, 202, '2018-08-06', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:08', '2018-11-13 09:03:08'),
(196, 159, '2017-09-03', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(197, 183, '2018-11-09', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(198, 195, '2017-08-07', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(199, 166, '2017-03-12', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(200, 169, '2018-08-02', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(201, 174, '2018-04-02', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(202, 164, '2018-06-11', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(203, 157, '2018-09-02', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(204, 161, '2018-08-11', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(205, 177, '2017-11-01', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(206, 199, '2018-05-04', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(207, 203, '2017-11-01', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(208, 160, '2017-08-05', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(209, 179, '2018-06-07', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(210, 202, '2018-07-04', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(211, 168, '2018-11-07', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(212, 199, '2018-06-07', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(213, 188, '2018-11-06', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(214, 182, '2017-10-05', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(215, 185, '2017-01-04', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(216, 179, '2017-11-03', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(217, 203, '2018-07-03', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(218, 193, '2017-02-08', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(219, 173, '2018-09-10', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(220, 158, '2017-05-09', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:09', '2018-11-13 09:03:09'),
(221, 178, '2017-01-12', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(222, 163, '2018-02-09', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(223, 169, '2018-03-03', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(224, 163, '2017-07-02', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(225, 177, '2018-07-11', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(226, 171, '2018-06-06', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(227, 189, '2017-03-10', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(228, 158, '2017-10-11', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(229, 185, '2018-09-09', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(230, 164, '2018-01-09', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(231, 202, '2017-04-12', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(232, 184, '2017-09-12', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(233, 171, '2017-08-12', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(234, 185, '2017-10-07', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(235, 187, '2018-03-03', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(236, 162, '2018-08-07', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(237, 203, '2017-01-01', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(238, 190, '2017-08-10', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(239, 198, '2017-09-04', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(240, 174, '2018-02-04', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(241, 182, '2017-09-04', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(242, 160, '2018-02-02', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(243, 201, '2018-01-01', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(244, 202, '2018-06-04', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(245, 168, '2017-02-05', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:10', '2018-11-13 09:03:10'),
(246, 185, '2018-09-05', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:11', '2018-11-13 09:03:11'),
(247, 186, '2017-04-06', 'Direct To Blood Bank', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:11', '2018-11-13 09:03:11'),
(248, 201, '2018-08-12', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:11', '2018-11-13 09:03:11'),
(249, 180, '2018-11-08', 'Direct To Patient', 'Lorem Ipsum Dummy Content', '2018-11-13 09:03:11', '2018-11-13 09:03:11'),
(250, 169, '2018-11-15', 'Direct To Blood Bank', 'Noakhali, Maijdee', '2018-11-17 03:57:36', '2018-11-17 03:57:36');

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
(3, '2017_08_03_013345_create_admin_table', 1),
(5, '2018_11_03_181322_add_image_column_in_user_table', 2),
(6, '2018_11_04_190026_create_donations_table', 3),
(7, '2018_11_06_061751_create_blood_requests_table', 4),
(8, '2018_02_01_153028_category_migration', 5),
(9, '2018_02_07_060849_create_posts_table', 5),
(10, '2018_02_11_174158_create_social_links_table', 5),
(11, '2018_02_12_060522_create_site_options_table', 5),
(12, '2018_02_12_091751_crea_site_images_table', 5);

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
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_og_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'article',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `featured_image`, `category_id`, `meta_desc`, `meta_keywords`, `meta_og_type`, `created_at`, `updated_at`) VALUES
(2, 'Where does it come from?', 'where-does-it-come-from', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1541601046.jpg', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem, ipsum, lorem', 'article', '2018-11-07 08:18:47', '2018-11-07 08:30:46'),
(3, 'Attendance Allowance campaign', 'attendance-allowance-campaign', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1541601023.jpg', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem, ipsum, lorem', 'article', '2018-11-07 08:19:20', '2018-11-07 08:30:23'),
(4, 'Where can I get some?', 'where-can-i-get-some', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1541601067.jpg', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'lorem, ipsum, lorem', 'article', '2018-11-07 08:20:01', '2018-11-07 08:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `site_images`
--

CREATE TABLE `site_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_images`
--

INSERT INTO `site_images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1541601295.jpg', '2018-11-07 08:34:55', '2018-11-07 08:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

CREATE TABLE `site_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_desc` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `copyright`, `site_desc`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Copyright © 2018, All Right Reserved - by Rumman', NULL, '1541612110.png', NULL, '2018-11-07 11:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-facebook', '#', '2018-11-07 08:31:51', '2018-11-07 08:31:51'),
(2, 'fa fa-twitter', '#', '2018-11-07 08:32:03', '2018-11-07 08:32:03'),
(3, 'fa fa-google-plus', '#', '2018-11-07 08:32:13', '2018-11-07 08:32:13'),
(4, 'fa fa-instagram', '#', '2018-11-07 08:32:24', '2018-11-07 08:32:24'),
(5, 'fa fa-youtube', '#', '2018-11-07 08:32:36', '2018-11-07 08:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smoker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drugadd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currdistrict` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pradd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `is_show_profile` int(11) NOT NULL DEFAULT '1',
  `is_show_in_history` int(11) NOT NULL DEFAULT '1',
  `is_want_to_donate_now` int(11) NOT NULL DEFAULT '1',
  `is_wantto_rec_mail_for_admnistrative_purpose` int(11) NOT NULL DEFAULT '1',
  `is_wantto_rec_mail_for_blood_req` int(11) NOT NULL DEFAULT '1',
  `is_wantto_rec_mail_from_people` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `blood_group`, `division`, `district`, `phone`, `age`, `smoker`, `drugadd`, `gender`, `weight`, `dob`, `currdistrict`, `pradd`, `address`, `is_show_profile`, `is_show_in_history`, `is_want_to_donate_now`, `is_wantto_rec_mail_for_admnistrative_purpose`, `is_wantto_rec_mail_for_blood_req`, `is_wantto_rec_mail_from_people`, `remember_token`, `created_at`, `updated_at`) VALUES
(156, 'Vaughn Brekke', 'runolfsson.marlee@example.com', '$2y$10$SvGadg1RDUZH1XZ5aiEBwuOnr/NypYUOepP5g8tyOvmTGTcxdvhTm', '1541348720.jpg', 'B-', 'Chittagong', 'Patuakhali', '01848817196', '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 1, 'bQ16RF1azK', '2017-04-15 04:43:55', '2018-11-13 09:01:42'),
(157, 'Prof. Lee Krajcik', 'naufderhar@example.net', '$2y$10$Tkw66H6gFc00UnDWLPGbWetMnmqtpjuo5jWuNEWNclgNhpNdqNCJa', '1541348720.jpg', 'B+', 'Barisal', 'Moulvibazar', '01888397290', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 2, 'Z9zIRNQYuP', '2017-06-16 05:24:40', '2018-11-13 09:01:42'),
(158, 'Mrs. Burdette Gorczany', 'cordie70@example.org', '$2y$10$yNX6TNap8N1O4Wfi2JIqmOQZ/.0b8netMf6uguXwUO6vB7shYuYYi', '1541348720.jpg', 'B+', 'Rangpur', 'Sunamganj', '01844901848', '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 2, 'KKtIA7B5CA', '2017-12-14 04:25:26', '2018-11-13 09:01:42'),
(159, 'Kelly McLaughlin', 'ludwig03@example.org', '$2y$10$oJ0S4pUw8qyTaxSz9a3nPOHZ907aErf6ZhRVmPEWU3t8uC13EpT6C', '1541348720.jpg', 'AB+', 'Barisal', 'Natore', '01878418954', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 1, 'ah0u3chifl', '2017-08-05 04:16:18', '2018-11-13 09:01:43'),
(160, 'Leonora Sawayn', 'uhalvorson@example.net', '$2y$10$N/VgSZZOqr/Zsb7JmMUjyeLVQk6nqnfBjrfsNUVIrkukxhYmzbe66', '1541348720.jpg', 'B+', 'Sylhet', 'Patuakhali', '01642918596', '42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, 'HA31Bh6XDO', '2018-11-13 04:42:20', '2018-11-13 09:01:43'),
(161, 'Dianna Mayert', 'ettie61@example.com', '$2y$10$gxbmmfgm8B9hm2HSRIrR3uT3E37MYpZwgnO9RAWBthcPoQhe/VC9W', '1541348720.jpg', 'B+', 'Khulna', 'Khagrachhari', '01645028950', '47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 1, 'SP8GY8PAYQ', '2018-11-22 04:21:39', '2018-11-13 09:01:43'),
(162, 'Marisol Auer', 'laila.yost@example.com', '$2y$10$uB2or8cDhk9Hb7GSiAOWNOxADpE9VCLp2vBn/C6aFIpeEKdQyTWwa', '1541348720.jpg', 'O-', 'Rangpur', 'Rajbari', '01558507586', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 2, 'UplUhDqgBL', '2017-10-25 05:16:47', '2018-11-13 09:01:43'),
(163, 'Dr. Carlotta Hartmann', 'lynch.edythe@example.org', '$2y$10$fAQ2cD5X7R3odCxgtlCxb.bprLDznzaaMzhv9NSCDsZtH48RxxV1O', '1541348720.jpg', 'O+', 'Mymensingh', 'Bagerhat', '01722395380', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, '3i1SpMgRKm', '2017-06-01 04:29:28', '2018-11-13 09:01:43'),
(164, 'Don Hane', 'xtorp@example.org', '$2y$10$pS8b3JEl/.psDbPu90wkiOj30sB0M1ISj3m/MpUBwkpvaJ4UC2/dK', '1541348720.jpg', 'B+', 'Rangpur', 'Panchagarh', '01577619127', '36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, 'JtUfyRWPj8', '2018-04-11 04:41:42', '2018-11-13 09:01:43'),
(165, 'Mrs. Ardith Weber', 'ooconner@example.net', '$2y$10$yGZtepwQBXkKThOW2zHQcOGGqArQVG4N0vbnWjE8AbkpuczuLNpf2', '1541348720.jpg', 'O+', 'Mymensingh', 'Moulvibazar', '01665887497', '27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 1, 'IcvZs6OXdZ', '2017-05-29 04:16:40', '2018-11-13 09:01:43'),
(166, 'Lester Okuneva', 'araceli.runte@example.com', '$2y$10$MA.INMUbj7X2wWWYc84tNOlWN8mPGWlq/VPR4ipCNMFT7UwP3OXwe', '1541348720.jpg', 'B-', 'Barisal', 'Bhola', '01979688969', '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, 'TOKr00cv9C', '2017-01-25 05:40:32', '2018-11-13 09:01:43'),
(167, 'Madelynn Bartell', 'uhermann@example.com', '$2y$10$24KDnHTMzn0HcjIdhonYAOLL01/FfHvSHZgNLoUEBEcaC.ljniWH6', '1541348720.jpg', 'AB+', 'Mymensingh', 'Meherpur', '01616071529', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, 'hfP6pv8QKk', '2018-01-24 05:23:56', '2018-11-13 09:01:43'),
(168, 'Calista Bernier', 'reba24@example.org', '$2y$10$GVyopY3BPy7qg9gwtCAg6eVcCtck7nLSPMT7UDDz5rnIAi3OpVJqu', '1541348720.jpg', 'A-', 'Barisal', 'Chuadanga', '01721354405', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 1, 'Orw07zxPHq', '2018-11-06 04:43:43', '2018-11-13 09:01:43'),
(169, 'Angela Dibbert V', 'llittle@example.com', '$2y$10$ym8t..3wOdTwGG2IqcgpXePNb/O0n.LFcOayWhV1v5cRnexBD5iw2', '1541348720.jpg', 'A+', 'Barisal', 'Kushtia', '01934124093', '27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, 'LFZ9sgWioU', '2017-03-29 04:24:51', '2018-11-13 09:01:43'),
(170, 'Dr. Olaf Barton', 'herzog.estella@example.org', '$2y$10$DhkozxHQgeSKUvShLxD3W..8K3DfwTplZU6MHnpHkA6dC1zA4Irk6', '1541348720.jpg', 'B+', 'Barisal', 'Habiganj', '01739998113', '19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 2, 'WlV7052Isa', '2017-05-05 04:59:12', '2018-11-13 09:01:43'),
(171, 'Ms. Odie Bauch', 'tmcclure@example.net', '$2y$10$dDl6PIuHFuitjLEK09MitOjUvCLiRfhm3AF1mKxUlSHPD1BGb/XzK', '1541348720.jpg', 'B-', 'Mymensingh', 'Mymensingh', '01863545814', '39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, 'YyG6xVWpgT', '2017-09-27 04:40:50', '2018-11-13 09:01:43'),
(172, 'Barry Nienow', 'lea.pacocha@example.com', '$2y$10$7uv.1xWb7jM5K1oKZ.rl2eBFDH/zRwTYhlYOrMd9r5bL8IVZTAVWq', '1541348720.jpg', 'A-', 'Chittagong', 'Sylhet', '01764413133', '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, 'tEai43vtYv', '2017-12-25 05:48:19', '2018-11-13 09:01:43'),
(173, 'Jena Mohr', 'sheridan.pfannerstill@example.com', '$2y$10$L/UCtoD.7OLPjESNYJyo7eH0CwaaqluOTAQngKNrehmSCZjNcBs1y', '1541348720.jpg', 'A-', 'Dhaka', 'Natore', '01556428735', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 2, 'N7ZoRglOyP', '2018-09-16 05:38:46', '2018-11-13 09:01:43'),
(174, 'Geovanni Ernser', 'wshanahan@example.net', '$2y$10$34HSRhAI0wr6Nxzn2mzSPe78KHiCvHrjrZXQyEUHeJ9umm5AUpfI6', '1541348720.jpg', 'B-', 'Mymensingh', 'Kurigram', '01795495504', '26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, 'VIAcTnJCix', '2018-04-17 05:50:46', '2018-11-13 09:01:43'),
(175, 'Estel Roob', 'lang.ona@example.org', '$2y$10$9k.i4x6Gi4TMMv4dLQx5kuPrc6QQEiiGOpzmrNlwSoqJbBtRqr482', '1541348720.jpg', 'B-', 'Dhaka', 'Jhenaidah', '01666807496', '19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, 'vWHzp64uKe', '2018-03-01 05:29:17', '2018-11-13 09:01:43'),
(176, 'Madelyn Toy', 'lynn.bergnaum@example.net', '$2y$10$UXJ2iAO6TqlueZWZd0IiSuhysXDIVUxJ4l/Kq/NlvZ/35MKBZEgka', '1541348720.jpg', 'B-', 'Barisal', 'Chuadanga', '01546836618', '37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, 'Me5jPIfQi7', '2017-07-12 04:53:26', '2018-11-13 09:01:43'),
(177, 'Adelbert Wuckert', 'josianne.schulist@example.com', '$2y$10$HICBCoo9PnKWhwjt3UlbNuLH96ajkktiCruvyJ96hIlK6bDfpE6Aa', '1541348720.jpg', 'A-', 'Khulna', 'Nilphamari', '01762415836', '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 'Z35kH4RjxO', '2018-07-26 05:14:22', '2018-11-13 09:01:43'),
(178, 'Evelyn Strosin', 'wdaugherty@example.org', '$2y$10$h1CHz9n2ej/D83k..GgFJusZKzKJ4PoeQquij2woq15rR6dyhNJA2', '1541348720.jpg', 'AB-', 'Mymensingh', 'Habiganj', '01547283059', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 1, '3kR9u7KZmw', '2018-07-10 04:12:20', '2018-11-13 09:01:43'),
(179, 'Isadore Mertz', 'virginie39@example.org', '$2y$10$Fn.gBdMYjmRvtONXPAmitOHCjohrrmS55Q0Q0S8Es4raVXosihLZq', '1541348720.jpg', 'B+', 'Chittagong', 'Sherpur', '01589084697', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 1, 'WHMplfbvT5', '2017-04-18 04:18:39', '2018-11-13 09:01:43'),
(180, 'Dr. Ursula West IV', 'maudie.borer@example.com', '$2y$10$DmscFovDuyIuHhQVC5gYq.xEa6m7idaYnQOOenr9LjL4.fTvVvYwG', '1541348720.jpg', 'O-', 'Rangpur', 'Jhenaidah', '01617662109', '49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 'Q3BXm9Dt3L', '2018-06-26 05:30:14', '2018-11-13 09:01:43'),
(181, 'Rosamond Bergnaum V', 'llakin@example.com', '$2y$10$Ud3o17QN.ML3Bp11n75iUOaPQp8cVlcGcHvC7TVIZELDUb20C7pp.', '1541348720.jpg', 'B-', 'Sylhet', 'Lakshmipur', '01828559638', '47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 2, 'kGb9g93nBu', '2018-09-16 04:56:56', '2018-11-13 09:01:43'),
(182, 'Prof. Cleo Pfeffer', 'turner.rafaela@example.com', '$2y$10$Ni1zf9Yt4WV9eUgSjAp/CeltAFaJyQXtfdQdkig2lC.LoJyn5lxBe', '1541348720.jpg', 'B-', 'Sylhet', 'Manikganj', '01898713241', '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, 'GRoKppNzk8', '2017-02-01 05:45:30', '2018-11-13 09:01:43'),
(183, 'Tabitha Weimann', 'pinkie46@example.net', '$2y$10$p6yuERbYvyJeD20MyQMBW.GqQfDteV9EL1wZnBTR8zuUNgG3kpNqq', '1541348720.jpg', 'AB-', 'Barisal', 'Pirojpur', '01562365064', '32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 1, 'Iu5yw21Jyp', '2018-01-10 04:53:51', '2018-11-13 09:01:44'),
(184, 'Miss Reba Leuschke I', 'lerdman@example.net', '$2y$10$yuWIoeuSPfndQg.2HtO11e0nyaixP/4/fA4WLCHgzrKUulQo/eWdS', '1541348720.jpg', 'AB+', 'Rangpur', 'Moulvibazar', '01653964632', '38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, '9TEYkAznvN', '2017-08-04 05:37:29', '2018-11-13 09:01:44'),
(185, 'Dr. Macey Wilderman V', 'greg08@example.com', '$2y$10$02Re5u4YLvqPLtZ6kYerqO3rSajpWYKSPRYPNZ4Ha.F6KzAi4ei9S', '1541348720.jpg', 'O-', 'Dhaka', 'Dinajpur', '01863565258', '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, 'ESySQPAydB', '2018-04-21 05:18:42', '2018-11-13 09:01:44'),
(186, 'Xander Marvin', 'quinten96@example.com', '$2y$10$.R.3Qk/JzcbYOLl7v.cJqeYq/AwaNl2YkcMK3zwkKZkZekbFNLuoi', '1541348720.jpg', 'B+', 'Chittagong', 'Noakhali', '01889372803', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, 'pj8mheMWGG', '2018-12-25 05:37:30', '2018-11-13 09:01:44'),
(187, 'Miss Rubye Conroy', 'miller.lempi@example.com', '$2y$10$hC8UkKb1joBD2L8Y8YCunuUaoKuo2Wb9RJdqmMth8rCNmOkmqzn8y', '1541348720.jpg', 'A-', 'Chittagong', 'Bhola', '01733281947', '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, 'XAsqHu02Tz', '2017-05-14 04:41:26', '2018-11-13 09:01:44'),
(188, 'Miss Angeline VonRueden V', 'bschulist@example.org', '$2y$10$e4kJKpmRCw3kISDQrDV/pu0aXXTHhOBssEo1PlmrBLwddtZJl/lWS', '1541348720.jpg', 'B-', 'Rajshahi', 'Tangail', '01699509131', '19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 1, '64dPPd8oMX', '2017-04-25 04:16:32', '2018-11-13 09:01:44'),
(189, 'Breana Hahn', 'rafael.mayer@example.org', '$2y$10$Ugwxgplv9AtjAQ78p/TDgOCT4075LVkLYH76ngd.icXyoGsWA5a.y', '1541348720.jpg', 'O+', 'Mymensingh', 'Jamalpur', '01933529766', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 2, 'Jv8iG3diBM', '2017-06-05 04:42:55', '2018-11-13 09:01:44'),
(190, 'Theron Dare', 'mabelle00@example.net', '$2y$10$r6.kU7Wc/A1Krvp0lpXth.yeAYVpdiu3dOF9Z8WjLj8RmCKmJUsAe', '1541348720.jpg', 'B-', 'Dhaka', 'Kurigram', '01542462461', '48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, '1Kj0tqmXvK', '2018-09-15 04:13:49', '2018-11-13 09:01:44'),
(191, 'Whitney Flatley', 'johnnie.macejkovic@example.net', '$2y$10$/ZN7RcS5QkrW/K6196Wreuh0A4MeAmvTFtdcjGIefLS.0uyXkX8y6', '1541348720.jpg', 'A+', 'Mymensingh', 'Meherpur', '01825743022', '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, '9IGM4Btd5y', '2017-06-02 05:38:29', '2018-11-13 09:01:44'),
(192, 'Omer Dibbert', 'lrolfson@example.com', '$2y$10$XN45gA6Ara2QUYFodXfoh.EALoRUcLT.PqjP/ADcj8s9VkKdwH/r6', '1541348720.jpg', 'B+', 'Barisal', 'Natore', '01959762011', '42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, '2oEM0XA4Kq', '2018-04-20 04:21:37', '2018-11-13 09:01:44'),
(193, 'Garret Zulauf', 'jeanne46@example.com', '$2y$10$neObs.d.gwQ14rEl93pLMOZEOgDihtRqTq1TgpexI567o6usevLw6', '1541348720.jpg', 'B+', 'Barisal', 'Sherpur', '01977059032', '36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 2, 'd3zUiKNRNb', '2017-02-03 05:26:57', '2018-11-13 09:01:44'),
(194, 'Prof. German Jerde', 'wiza.shanon@example.net', '$2y$10$ik54lGy7UlhcPb8qQs1mV.Ed9.G3WyXGTQEVMhahj0.MM.avrdFrG', '1541348720.jpg', 'A+', 'Rajshahi', 'Chittagong', '01819737926', '41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, 'GPJOajlM0b', '2018-01-24 05:27:54', '2018-11-13 09:01:44'),
(195, 'Prof. Hunter Gutkowski III', 'maeve.nikolaus@example.org', '$2y$10$jyCjpiBzPpFxgBsvTRdDwuoIM6F9KF/lILqfpwg8GO/eLBJdJrYkW', '1541348720.jpg', 'B+', 'Rangpur', 'Magura', '01931912978', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 2, 'Ja3kGyCfHr', '2018-06-11 04:23:45', '2018-11-13 09:01:44'),
(196, 'Helen Schumm', 'dmckenzie@example.net', '$2y$10$pmqAXXcTYaL55gZmHINz7uGWJaFy4VI1dciuQHHRRTTBr0e3sD8Y2', '1541348720.jpg', 'A+', 'Dhaka', 'Noakhali', '01613403460', '42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, 'JcEJxGrS6n', '2017-08-01 04:48:14', '2018-11-13 09:01:44'),
(197, 'Aiden Langworth', 'magdalena28@example.org', '$2y$10$KcZxOECAq65FYHBslxvOiejeGhak6olI0yP1oU8AzPUtV8glQiggy', '1541348720.jpg', 'O+', 'Barisal', 'Lakshmipur', '01671563592', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 'hQo4g54eE5', '2018-02-19 05:39:15', '2018-11-13 09:01:44'),
(198, 'Prof. Gisselle Gleichner', 'rhiannon.konopelski@example.org', '$2y$10$Qr63VhKJ0Obt45SjMdvmB.hbSAx4BTfaPTTO5.ESKgR8ev25nvuwm', '1541348720.jpg', 'AB-', 'Rajshahi', 'Bogra', '01987049126', '31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, 'y73m7FhGmp', '2017-07-29 04:41:18', '2018-11-13 09:01:44'),
(199, 'Collin White DDS', 'reagan.stracke@example.com', '$2y$10$BaUuTsxF8d3xumx1z2b1deyaCZyPk0nubjjYxWAribckEji7ZsAzq', '1541348720.jpg', 'AB+', 'Khulna', 'Feni', '01679891145', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 'tSJpyQWiNB', '2017-07-16 04:22:11', '2018-11-13 09:01:44'),
(200, 'Mrs. Cayla Gerlach DDS', 'dickinson.precious@example.org', '$2y$10$yNXvULN21kkoffoSENPTPeg5NVUDFIJcsliYkWUJJED3Ty1SVUaJu', '1541348720.jpg', 'A+', 'Mymensingh', 'Gazipur', '01876918006', '35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 2, 'AVgsPU4ONn', '2018-11-03 04:28:59', '2018-11-13 09:01:44'),
(201, 'Matilda Sporer', 'janessa.king@example.net', '$2y$10$SqZycFiH07oJy59i3HYiO.t3R4vE96vZ7SHWWVFP34yTMRh8W4XQq', '1541348720.jpg', 'B+', 'Khulna', 'Khulna', '01867635057', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '3iKcZ83H0m', '2018-08-17 05:34:23', '2018-11-13 09:01:44'),
(202, 'Jaylan Mante', 'nfisher@example.com', '$2y$10$azc0yIH7Dg7emw0tvMNojOtUawWTtLirGsVgPOaXQfPZMuE2A7WWu', '1541348720.jpg', 'AB-', 'Rajshahi', 'Magura', '01568505057', '45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 2, 'aw2ssTcarq', '2017-01-12 04:55:43', '2018-11-13 09:01:44'),
(203, 'Brenden Russel Sr.', 'ondricka.jameson@example.net', '$2y$10$pO84QidC6NSX0uTWL7.i6exBVGwY0V.Da.nYa2gwrhqZhGAzZsjMe', '1541348720.jpg', 'B+', 'Barisal', 'Bandarban', '01918939157', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 2, 1, 'sYCz5ptKIa', '2017-01-10 04:24:55', '2018-11-13 09:01:44'),
(204, 'Prof. Blanche Lindgren', 'bahringer.mylene@example.net', '$2y$10$3vkCgdcfBgiwV4AsJTXAQO4BOWYKEdT78DFGd12TeOIDQzeGWm6.m', '1541348720.jpg', 'AB+', 'Barisal', 'Sunamganj', '01660894734', '39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 2, 1, '1FZsFQHA1a', '2018-07-01 04:54:54', '2018-11-13 09:01:44'),
(205, 'Kayla Doyle', 'pamela55@example.com', '$2y$10$KltWa3JSAtHmKRh.QDhN9elw97PIHcwH29N7UWG8xfRjQhxvjs/dq', '1541348720.jpg', 'A+', 'Mymensingh', 'Jhenaidah', '01764228950', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 1, 1, 1, 'MWLpdeDqYJ', '2018-07-19 04:13:57', '2018-11-13 09:01:44');

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
-- Indexes for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_images`
--
ALTER TABLE `site_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_options`
--
ALTER TABLE `site_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_requests`
--
ALTER TABLE `blood_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_images`
--
ALTER TABLE `site_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_options`
--
ALTER TABLE `site_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
