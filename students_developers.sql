-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 03:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students.developers`
--

CREATE TABLE `students.developers` (
  `id` int(255) NOT NULL,
  `name` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `lastname` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `age` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `gender` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `phone` int(7) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
