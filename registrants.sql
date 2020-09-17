-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 08:04 AM
-- Server version: 5.7.12-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almazaya_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrants`
--

CREATE TABLE `registrants` (
  `id` int(11) NOT NULL,
  `first_school_year` int(11) NOT NULL,
  `last_school_year` int(11) NOT NULL,
  `school_level` varchar(15) NOT NULL,
  `major` varchar(15) DEFAULT NULL,
  `full_name` varchar(300) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL,
  `nkk` int(11) DEFAULT NULL,
  `nik` int(11) NOT NULL,
  `akta_number` int(11) DEFAULT NULL,
  `birth_place` varchar(60) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `village` varchar(60) DEFAULT NULL,
  `sub_district` varchar(60) DEFAULT NULL,
  `district` varchar(60) DEFAULT NULL,
  `prev_school` varchar(200) DEFAULT NULL,
  `graduation_year` int(11) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `father_name` varchar(300) NOT NULL,
  `father_nik` int(11) NOT NULL,
  `father_phone` varchar(60) DEFAULT NULL,
  `father_employment` varchar(60) DEFAULT NULL,
  `mother_name` varchar(300) NOT NULL,
  `mother_nik` int(11) NOT NULL,
  `mother_phone` varchar(60) DEFAULT NULL,
  `mother_employment` varchar(60) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `head_cir` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `traveling_time` int(11) DEFAULT NULL,
  `sibling_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrants`
--
ALTER TABLE `registrants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrants`
--
ALTER TABLE `registrants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
