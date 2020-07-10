-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:50 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scg_mv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(250) NOT NULL,
  `a_password` varchar(250) NOT NULL,
  `a_name` varchar(250) NOT NULL,
  `a_sec_key` varchar(250) DEFAULT NULL,
  `a_type` int(11) NOT NULL,
  `a_registered_by` int(11) DEFAULT NULL,
  `a_register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a_updated_by` int(11) DEFAULT NULL,
  `a_updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a_type1_by` int(11) DEFAULT '0',
  `a_type2_by` int(11) DEFAULT '0',
  `a_type3_by` int(11) DEFAULT '0',
  `a_type4_by` int(11) DEFAULT '0',
  `a_type5_by` int(11) DEFAULT '0',
  `a_upline` int(11) DEFAULT '0',
  `a_currency` int(11) NOT NULL DEFAULT '0',
  `a_bank_name` varchar(255) DEFAULT NULL,
  `a_bank_account_no` varchar(255) DEFAULT NULL,
  `a_bank_branach` varchar(255) DEFAULT NULL,
  `a_address` varchar(255) DEFAULT NULL,
  `a_country` varchar(255) DEFAULT NULL,
  `a_city` varchar(255) DEFAULT NULL,
  `a_phone` varchar(255) DEFAULT NULL,
  `a_email` varchar(255) DEFAULT NULL,
  `a_state` varchar(255) DEFAULT NULL,
  `a_ref` int(11) DEFAULT '0',
  `a_img` varchar(255) DEFAULT NULL,
  `a_lang` varchar(10) DEFAULT NULL,
  `a_last_log` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_username`, `a_password`, `a_name`, `a_sec_key`, `a_type`, `a_registered_by`, `a_register_date`, `a_updated_by`, `a_updated_date`, `a_type1_by`, `a_type2_by`, `a_type3_by`, `a_type4_by`, `a_type5_by`, `a_upline`, `a_currency`, `a_bank_name`, `a_bank_account_no`, `a_bank_branach`, `a_address`, `a_country`, `a_city`, `a_phone`, `a_email`, `a_state`, `a_ref`, `a_img`, `a_lang`, `a_last_log`, `a_status`) VALUES
(10, 'supermaster', '$2y$10$MCq3kqg5TpP5rvviemVayuO4Hvfxh3/JJ4mylf6IsX7rhT3gagTee', 'Super Master', '5991', 1, 0, '2020-04-14 21:59:24', 0, '2020-04-15 02:56:23', 0, 0, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'en', '2020-07-06 14:02:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_types`
--

CREATE TABLE `admin_types` (
  `at_id` int(11) NOT NULL,
  `at_name` varchar(100) NOT NULL,
  `at_level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_types`
--

INSERT INTO `admin_types` (`at_id`, `at_name`, `at_level`) VALUES
(1, 'supermaster', '1'),
(2, 'Admin', '2'),
(3, 'Distributor', '3'),
(4, 'Agency', '4'),
(5, 'Member', '5');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int(11) NOT NULL,
  `v_title` varchar(255) DEFAULT NULL,
  `v_user` int(11) NOT NULL,
  `v_video` varchar(255) DEFAULT NULL,
  `v_cover` varchar(255) DEFAULT NULL,
  `v_post_date` varchar(100) DEFAULT NULL,
  `v_status` int(11) DEFAULT NULL,
  `v_updatedt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin_types`
--
ALTER TABLE `admin_types`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin_types`
--
ALTER TABLE `admin_types`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
