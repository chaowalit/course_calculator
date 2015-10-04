-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2015 at 12:58 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_course_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) unsigned NOT NULL,
  `users_id` int(11) NOT NULL,
  `term_course_id` int(11) NOT NULL,
  `number_course` varchar(255) NOT NULL,
  `name_course` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL,
  `groups` int(11) NOT NULL,
  `number_instructors` int(11) NOT NULL,
  `number_student` int(11) NOT NULL,
  `date_teach` varchar(255) NOT NULL,
  `time_teach` varchar(255) NOT NULL,
  `hour_practice` int(11) NOT NULL,
  `hour_describe` int(11) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `users_id`, `term_course_id`, `number_course`, `name_course`, `credits`, `groups`, `number_instructors`, `number_student`, `date_teach`, `time_teach`, `hour_practice`, `hour_describe`, `room_number`, `created_at`, `updated_at`) VALUES
(4, 1, 1, 'sut0002', 'สร้างเสริมประสบการณ์ชีวิต', '3(2-2-5)', 102, 1, 40, 'อ', '08 : 30 : 00 - 12 : 20 : 00', 2, 2, '', '2015-09-05 11:06:20', '2015-09-13 04:30:02'),
(5, 1, 1, 'sut0001', 'โปรแกรมเมอร์เบื้ยงต้น', '3(2-2-5)', 103, 1, 50, 'จ', '13 : 10 : 00 - 16 : 40 : 00', 2, 2, '', '2015-09-05 11:16:22', '2015-09-19 05:52:45'),
(6, 1, 1, 'ปปป', 'ปปป', '3(2-2-2)', 111, 11, 22, 'พฤ', '17 : 30 : 00 - 20 : 50 : 00', 3, 3, 'cctv', '2015-09-20 00:36:43', '2015-10-01 13:25:14'),
(7, 1, 1, '123456', 'xxxxxxxxxx', '8(3-3-2)', 777, 56, 90, 'ส', '08 : 30 : 00 - 11 : 00 : 00', 3, 3, 'cctv1234', '2015-10-01 13:32:13', '2015-10-01 13:35:17'),
(8, 1, 1, '343434', 'ffddgghhtt', '6(2-2-2)', 7, 2, 70, 'อา', '11 : 30 : 00 - 15 : 50 : 00', 2, 2, 'xxx007', '2015-10-01 13:41:13', '2015-10-01 13:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_08_13_171154_create_users_table', 1),
('2015_08_22_220352_create_course_table', 1),
('2015_08_30_160706_create_term_course_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `term_course`
--

CREATE TABLE IF NOT EXISTS `term_course` (
  `id` int(10) unsigned NOT NULL,
  `year` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_course`
--

INSERT INTO `term_course` (`id`, `year`, `term`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(1, 2558, 1, '2015-09-07', '2015-12-27', '0000-00-00 00:00:00', '2015-09-20 07:40:11'),
(2, 2558, 2, '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2559, 1, '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2559, 2, '0000-00-00', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(80) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `hour_level` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `faculty`, `hour_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dekchaowalit_123@hotmail.com', '$2y$10$/SRGD9mkmTfE/Mcr3Pz6suA6rHZqwSXBF3WlNifGmtKaeX18.49eK', 'เชาวลิต กองคำ', 'วิศวกรรมศาสตร์', 9, 'zgAolW5BYQZZ0brOWV6KCITufIGLxIpGgwK1fIzfDzmtHqfo4OKoWIcnCeqQ', '2015-08-30 09:27:22', '2015-10-01 14:58:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_course`
--
ALTER TABLE `term_course`
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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `term_course`
--
ALTER TABLE `term_course`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
