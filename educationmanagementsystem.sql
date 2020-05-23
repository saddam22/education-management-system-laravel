-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 03:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_forms`
--

CREATE TABLE `class_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_routine_forms`
--

CREATE TABLE `class_routine_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_user_id` int(11) NOT NULL,
  `second_user_id` int(11) NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_forms`
--

CREATE TABLE `exam_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `grade_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_upto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule_forms`
--

CREATE TABLE `exam_schedule_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_forms`
--

CREATE TABLE `expense_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `conversation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_conversations`
--

CREATE TABLE `group_conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_users`
--

CREATE TABLE `group_users` (
  `group_conversation_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_forms`
--

CREATE TABLE `hostel_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `hostel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_per_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Error reading data for table educationmanagementsystem.hostel_forms: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `educationmanagementsystem`.`hostel_forms`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `conversation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_forms`
--

CREATE TABLE `message_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_16_084042_create_conversations_table', 1),
(4, '2017_10_16_091956_create_messages_table', 1),
(5, '2017_10_21_165446_create_group_conversations_table', 1),
(6, '2017_10_21_172616_create_group_users_table', 1),
(7, '2017_10_25_165610_add_is_accepted_column_to_conversation_table', 1),
(8, '2017_11_07_224816_create_files_table', 1),
(10, '2020_05_18_094719_create_type_forms_table', 2),
(11, '2020_05_18_094827_create_sub_type_forms_table', 2),
(12, '2020_05_19_170340_create_parent_forms_table', 3),
(13, '2020_05_19_173422_create_student_forms_table', 4),
(14, '2020_05_19_175253_create_subject_forms_table', 5),
(15, '2020_05_19_180320_create_teacher_forms_table', 6),
(16, '2020_05_19_181151_create_class_forms_table', 7),
(17, '2020_05_19_181644_create_class_routine_forms_table', 8),
(18, '2020_05_19_182334_create_exam_schedule_forms_table', 9),
(19, '2020_05_19_182356_create_exam_forms_table', 9),
(20, '2020_05_19_184303_create_staff_forms_table', 10),
(21, '2020_05_19_184701_create_expense_forms_table', 11),
(22, '2020_05_19_185733_create_transport_forms_table', 12),
(23, '2020_05_19_190626_create_hostel_forms_table', 13),
(24, '2020_05_19_191339_create_notice_forms_table', 14),
(25, '2020_05_19_191537_create_message_forms_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notice_forms`
--

CREATE TABLE `notice_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_forms`
--

CREATE TABLE `parent_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `staff_forms`
--

CREATE TABLE `staff_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_forms`
--

CREATE TABLE `student_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_forms`
--

CREATE TABLE `subject_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_type_forms`
--

CREATE TABLE `sub_type_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_type_forms`
--

INSERT INTO `sub_type_forms` (`id`, `type_id`, `subtype`, `created_at`, `updated_at`) VALUES
(2, 1, 'Four', '2020-05-18 19:03:47', '2020-05-19 04:11:11'),
(3, 1, 'Two', '2020-05-18 19:05:26', '2020-05-18 19:05:26'),
(4, 10, 'Teacher', '2020-05-19 04:12:12', '2020-05-19 04:12:12'),
(5, 4, 'Physics', '2020-05-19 10:31:00', '2020-05-19 10:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_forms`
--

CREATE TABLE `teacher_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_forms`
--

CREATE TABLE `transport_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `subtype_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_forms`
--

CREATE TABLE `type_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_forms`
--

INSERT INTO `type_forms` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Class', '2020-05-18 12:04:45', '2020-05-18 12:54:25'),
(2, 'Designation', '2020-05-18 12:15:07', '2020-05-18 12:44:03'),
(4, 'Subject', '2020-05-18 16:56:03', '2020-05-18 16:56:03'),
(5, 'Code', '2020-05-18 16:57:44', '2020-05-18 16:57:44'),
(7, 'Gender', '2020-05-18 16:59:49', '2020-05-18 16:59:49'),
(10, 'Poll', '2020-05-19 04:11:41', '2020-05-19 04:11:41'),
(11, 'Chocolate', '2020-05-19 04:36:46', '2020-05-19 04:36:46'),
(12, 'Panda', '2020-05-19 04:36:54', '2020-05-19 04:36:54'),
(13, 'Fruit', '2020-05-19 04:37:02', '2020-05-19 04:37:02'),
(14, 'Dominate', '2020-05-19 04:37:18', '2020-05-19 04:37:18'),
(15, 'Finger', '2020-05-19 04:37:33', '2020-05-19 04:37:33'),
(16, 'class', '2020-05-19 10:29:26', '2020-05-19 10:29:26');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_forms`
--
ALTER TABLE `class_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_forms_type_id_foreign` (`type_id`),
  ADD KEY `class_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `class_forms_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `class_routine_forms`
--
ALTER TABLE `class_routine_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_routine_forms_type_id_foreign` (`type_id`),
  ADD KEY `class_routine_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `class_routine_forms_teacher_id_foreign` (`teacher_id`),
  ADD KEY `class_routine_forms_class_id_foreign` (`class_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_forms`
--
ALTER TABLE `exam_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_forms_type_id_foreign` (`type_id`),
  ADD KEY `exam_forms_subtype_id_foreign` (`subtype_id`);

--
-- Indexes for table `exam_schedule_forms`
--
ALTER TABLE `exam_schedule_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_schedule_forms_type_id_foreign` (`type_id`),
  ADD KEY `exam_schedule_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `exam_schedule_forms_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `expense_forms`
--
ALTER TABLE `expense_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_forms_type_id_foreign` (`type_id`),
  ADD KEY `expense_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `expense_forms_student_id_foreign` (`student_id`),
  ADD KEY `expense_forms_parent_id_foreign` (`parent_id`),
  ADD KEY `expense_forms_teacher_id_foreign` (`teacher_id`),
  ADD KEY `expense_forms_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_conversations`
--
ALTER TABLE `group_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_forms`
--
ALTER TABLE `hostel_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel_forms_type_id_foreign` (`type_id`),
  ADD KEY `hostel_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `hostel_forms_student_id_foreign` (`student_id`),
  ADD KEY `hostel_forms_parent_id_foreign` (`parent_id`),
  ADD KEY `hostel_forms_teacher_id_foreign` (`teacher_id`),
  ADD KEY `hostel_forms_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_forms`
--
ALTER TABLE `message_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_forms_student_id_foreign` (`student_id`),
  ADD KEY `message_forms_parent_id_foreign` (`parent_id`),
  ADD KEY `message_forms_teacher_id_foreign` (`teacher_id`),
  ADD KEY `message_forms_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_forms`
--
ALTER TABLE `notice_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notice_forms_teacher_id_foreign` (`teacher_id`),
  ADD KEY `notice_forms_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `parent_forms`
--
ALTER TABLE `parent_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_forms_email_unique` (`email`),
  ADD UNIQUE KEY `parent_forms_phone_unique` (`phone`),
  ADD UNIQUE KEY `parent_forms_image_unique` (`image`),
  ADD KEY `parent_forms_type_id_foreign` (`type_id`),
  ADD KEY `parent_forms_subtype_id_foreign` (`subtype_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `staff_forms`
--
ALTER TABLE `staff_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_forms_email_unique` (`email`),
  ADD UNIQUE KEY `staff_forms_phone_unique` (`phone`),
  ADD UNIQUE KEY `staff_forms_image_unique` (`image`),
  ADD KEY `staff_forms_type_id_foreign` (`type_id`),
  ADD KEY `staff_forms_subtype_id_foreign` (`subtype_id`);

--
-- Indexes for table `student_forms`
--
ALTER TABLE `student_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_forms_roll_unique` (`roll`),
  ADD UNIQUE KEY `student_forms_email_unique` (`email`),
  ADD UNIQUE KEY `student_forms_phone_unique` (`phone`),
  ADD UNIQUE KEY `student_forms_image_unique` (`image`),
  ADD KEY `student_forms_type_id_foreign` (`type_id`),
  ADD KEY `student_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `student_forms_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `subject_forms`
--
ALTER TABLE `subject_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_forms_type_id_foreign` (`type_id`),
  ADD KEY `subject_forms_subtype_id_foreign` (`subtype_id`);

--
-- Indexes for table `sub_type_forms`
--
ALTER TABLE `sub_type_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_type_forms_type_id_foreign` (`type_id`);

--
-- Indexes for table `teacher_forms`
--
ALTER TABLE `teacher_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_forms_email_unique` (`email`),
  ADD UNIQUE KEY `teacher_forms_phone_unique` (`phone`),
  ADD UNIQUE KEY `teacher_forms_image_unique` (`image`),
  ADD KEY `teacher_forms_type_id_foreign` (`type_id`),
  ADD KEY `teacher_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `teacher_forms_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `transport_forms`
--
ALTER TABLE `transport_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_forms_type_id_foreign` (`type_id`),
  ADD KEY `transport_forms_subtype_id_foreign` (`subtype_id`),
  ADD KEY `transport_forms_student_id_foreign` (`student_id`),
  ADD KEY `transport_forms_parent_id_foreign` (`parent_id`),
  ADD KEY `transport_forms_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `type_forms`
--
ALTER TABLE `type_forms`
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
-- AUTO_INCREMENT for table `class_forms`
--
ALTER TABLE `class_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_routine_forms`
--
ALTER TABLE `class_routine_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_forms`
--
ALTER TABLE `exam_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_schedule_forms`
--
ALTER TABLE `exam_schedule_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_forms`
--
ALTER TABLE `expense_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_conversations`
--
ALTER TABLE `group_conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_forms`
--
ALTER TABLE `hostel_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_forms`
--
ALTER TABLE `message_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notice_forms`
--
ALTER TABLE `notice_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_forms`
--
ALTER TABLE `parent_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_forms`
--
ALTER TABLE `staff_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_forms`
--
ALTER TABLE `student_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_forms`
--
ALTER TABLE `subject_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_type_forms`
--
ALTER TABLE `sub_type_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_forms`
--
ALTER TABLE `teacher_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_forms`
--
ALTER TABLE `transport_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_forms`
--
ALTER TABLE `type_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_forms`
--
ALTER TABLE `class_forms`
  ADD CONSTRAINT `class_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_forms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_routine_forms`
--
ALTER TABLE `class_routine_forms`
  ADD CONSTRAINT `class_routine_forms_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_routine_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_routine_forms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_routine_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_forms`
--
ALTER TABLE `exam_forms`
  ADD CONSTRAINT `exam_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_schedule_forms`
--
ALTER TABLE `exam_schedule_forms`
  ADD CONSTRAINT `exam_schedule_forms_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subject_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_schedule_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_schedule_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expense_forms`
--
ALTER TABLE `expense_forms`
  ADD CONSTRAINT `expense_forms_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parent_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expense_forms_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expense_forms_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expense_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expense_forms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expense_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hostel_forms`
--
ALTER TABLE `hostel_forms`
  ADD CONSTRAINT `hostel_forms_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parent_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hostel_forms_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hostel_forms_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hostel_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hostel_forms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hostel_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message_forms`
--
ALTER TABLE `message_forms`
  ADD CONSTRAINT `message_forms_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parent_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_forms_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_forms_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_forms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notice_forms`
--
ALTER TABLE `notice_forms`
  ADD CONSTRAINT `notice_forms_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notice_forms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent_forms`
--
ALTER TABLE `parent_forms`
  ADD CONSTRAINT `parent_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_forms`
--
ALTER TABLE `staff_forms`
  ADD CONSTRAINT `staff_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_forms`
--
ALTER TABLE `student_forms`
  ADD CONSTRAINT `student_forms_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parent_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_forms`
--
ALTER TABLE `subject_forms`
  ADD CONSTRAINT `subject_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_type_forms`
--
ALTER TABLE `sub_type_forms`
  ADD CONSTRAINT `sub_type_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_forms`
--
ALTER TABLE `teacher_forms`
  ADD CONSTRAINT `teacher_forms_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subject_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transport_forms`
--
ALTER TABLE `transport_forms`
  ADD CONSTRAINT `transport_forms_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parent_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transport_forms_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transport_forms_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transport_forms_subtype_id_foreign` FOREIGN KEY (`subtype_id`) REFERENCES `sub_type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transport_forms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type_forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
