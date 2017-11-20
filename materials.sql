-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 11:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LaravelAssessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `major_metal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `combinations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `major_metal`, `due_date`, `description`, `image_url`, `combinations`, `created_at`, `updated_at`) VALUES
(1, 'Iron', '1995-12-04', 'description1', 'Image/Url', 'Copper', '2017-11-20 01:25:48', '2017-11-20 04:18:16'),
(2, 'Copper', '1995-12-04', 'description2', 'Image/Url', 'CopperAluminium', '2017-11-20 01:28:18', '2017-11-20 01:28:18'),
(3, 'Aluminium', '1995-12-04', 'description3', 'Image/Url', 'IronCopperAluminium', '2017-11-20 01:32:17', '2017-11-20 01:32:17'),
(6, 'Iron', '2006-06-06', 'description4', 'http://localhost/LaravelAssessment/public/images/1511172629.jpg', 'IronCopper', '2017-11-20 04:27:19', '2017-11-20 04:40:29'),
(7, 'Aluminium', '2005-05-05', 'description5', 'http://localhost/LaravelAssessment/public/images/1511172481.png', 'IronCopperAluminium', '2017-11-20 04:38:01', '2017-11-20 04:38:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
