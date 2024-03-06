-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 07:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--






-- --------------------------------------------------------

--
-- Table structure for table `payment`
--
CREATE TABLE certificate (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `requester` VARCHAR(100) NOT NULL,
  `purpose` VARCHAR(100) NOT NULL,
  `appointment_date` DATE NOT NULL,
  `payment` VARCHAR(50) NOT NULL,
);
-----------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `bplace` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `civilstatus` enum('single','divorced','married','widowed','common-law') NOT NULL,
  `spousefname` varchar(100) NOT NULL,
  `spousemidname` varchar(100) NOT NULL,
  `spouselname` varchar(100) NOT NULL,
  `street` text NOT NULL,
  `barangay` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL,
  `cellnum` int(11) NOT NULL,
  `telnum` int(11) NOT NULL,
  `primeEmail` varchar(100) NOT NULL,
  `secEmail` text NOT NULL,
  `empStat` enum('employed (Private)','student','employed(public)','unemployed','freelancer','self employed','retired/resign from work') NOT NULL,
  `prime_ID_Type`enum('Barangay ID','Alien Certification') NOT NULL,
  `prime_ID_Photo` blob NOT NULL,
  `second_ID_Type` enum('Barangay Certification','Barangay Clearance') NOT NULL,
  `second_ID_Photo` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `Date`) VALUES
(8, 'jongko', 'jongko@jongko.com', '$2y$10$JNVCJqhUepviViWrbmOuEODWxh6U9AErfxNUs9.vNCSxogbjx947O', '2024-02-16 22:07:57'),
(9, 'Adia', 'adia@adia.com', '$2y$10$OUCUN7Y3Vz2rxHOitMrpcuOmkY1Nfxml95145Amkere0rbNUXSGg6', '2024-02-16 22:32:50'),
(12, 'ging2x', 'ging@ging.com', '$2y$10$eN1vzBhUkEP/7l/aha6UPO3d71Pn/OxUNYpzwSoelXD1xz8576qiC', '2024-02-17 12:19:38'),
(13, 'Rio', 'rio@rio.com', '$2y$10$n1TY0j5tVXZWX2CJC8cXEuaKWx71h4JtlIRnqRHx3mb2fjhGZydl6', '2024-02-17 12:26:50'),
(14, 'joel', 'joel@joel.com', '$2y$10$TTU.WFefelO6QxIJ78O6WucNv/bxb0dJ4wRIvfIjki4tIDCOpVHgC', '2024-02-17 15:04:42'),
(15, 'soonjin', 'soonjin@soonjin.com', '$2y$10$qhi7cOtQ3bT/.2GHv1T6j.Raa4O2AnvhCCRcGkWZiJlknB7LDQPyK', '2024-02-17 15:12:34'),
(16, 'test', 'test@test.com', '$2y$10$gTBG6pb4SdVRIU8xyFWTOeDW24.vUEKsAxHZKB7SuZdeSCxg57LBW', '2024-02-17 15:35:26'),
(17, 'test1', 'test1@test1.com', '$2y$10$BgsEVqPlOhUVzD38cs0nw.rblDir8.DV1UFVLiGImAI314bHR4IUK', '2024-02-17 15:40:47'),
(18, 'kulot', 'kulot@kulto.com', '$2y$10$txhljetxpg3OoObwSmatv.gsWuq0zizD/raYlYEW5wlTPQMzvQQHe', '2024-02-18 16:50:32'),
(19, 'Jasper', 'jasper@jasper.com', '$2y$10$aAvv9E6lObVPEoIDOHoB5uWNTs/CDjscqUntda6rSBf0D5PcTHUEa', '2024-02-19 12:23:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brgy_certificate`

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
