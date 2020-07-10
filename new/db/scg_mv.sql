-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 02:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
(10, 'supermaster', '$2y$10$MCq3kqg5TpP5rvviemVayuO4Hvfxh3/JJ4mylf6IsX7rhT3gagTee', 'Super Master', '1059', 1, 0, '2020-04-14 21:59:24', 0, '2020-04-15 02:56:23', 0, 0, 0, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'en', '2020-07-10 11:14:51', 1);

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `p_cat` int(11) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT '1',
  `level` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `p_cat`, `remark`, `status`, `level`) VALUES
(1, 'Petrol', 3, 'IT', 1, 1),
(2, 'Diesel', 3, 'IT', 1, 1),
(3, 'Other', 1, 'IT', 1, 1),
(4, 'Kerosene', 3, 'IT', 1, 1),
(5, 'Oil', 3, 'IT', 1, 1),
(6, 'Wash', 1, 'IT', 1, 1),
(7, 'G / N', 2, 'IT', 1, 1),
(8, 'Filter', 1, 'IT', 1, 1),
(9, 'OTHER SERVICE 1', 1, 'IT', 1, 1),
(10, 'OTHER SERVICE', 1, 'IT', 1, 1),
(11, 'English', 1, 'asdasasdasdas', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `co_id` int(11) NOT NULL,
  `co_video` int(11) NOT NULL,
  `co_user` int(11) NOT NULL,
  `co_comment` varchar(255) DEFAULT NULL,
  `co_date` varchar(100) NOT NULL,
  `co_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`co_id`, `co_video`, `co_user`, `co_comment`, `co_date`, `co_status`) VALUES
(1, 1, 1, 'à·Šà·’à·à·Šà·’à·à·Šà·’à·à·Šà·', '2020-07-08', 0),
(2, 1, 1, 'asdadasdasd asdsadsa sadsadsad asd', '2020-07-08', 1),
(3, 1, 1, 'Note: to improve web accessibility, we recommend using aria-hidden=\"true\" to hide icons used purely for decoration.', '2020-07-08', 1),
(4, 1, 1, 'Post your Comments :', '2020-07-08', 1),
(5, 1, 1, 'wdwdewd', '2020-07-09', 1),
(6, 2, 1, 'dewdwedewf ', '2020-07-09', 0),
(7, 1, 5, 'abc abc abc', '2020-07-09', 1),
(8, 1, 1, 'egasdasdasdasd asd', '2020-07-09', 0),
(9, 2, 1, 'asdsadas', '2020-07-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(255) DEFAULT NULL,
  `u_username` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_country` varchar(100) DEFAULT NULL,
  `u_registerdt` varchar(100) DEFAULT NULL,
  `u_status` int(11) NOT NULL DEFAULT '0',
  `u_email` varchar(255) DEFAULT NULL,
  `u_lname` varchar(30) DEFAULT NULL,
  `u_phone` varchar(12) DEFAULT NULL,
  `u_ppic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fname`, `u_username`, `u_password`, `u_country`, `u_registerdt`, `u_status`, `u_email`, `u_lname`, `u_phone`, `u_ppic`) VALUES
(1, 'test', 'test', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, 1, 'test@sdf.ghg', 'asdasdasd', '', '964936_4.jpg');

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
  `v_detail` varchar(255) DEFAULT NULL,
  `v_post_date` varchar(100) DEFAULT NULL,
  `v_status` int(11) DEFAULT NULL,
  `v_updatedt` varchar(255) DEFAULT NULL,
  `category_id` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `v_title`, `v_user`, `v_video`, `v_cover`, `v_detail`, `v_post_date`, `v_status`, `v_updatedt`, `category_id`) VALUES
(1, 'sdfsfsdf', 1, 'uploads/user/files/video/videoplayback-4.mp4', './uploads/user/files/img/15943700421.jpg', '<p>dsfsdfds</p>', '2020-07-10 16:33:17', 0, NULL, 1),
(2, 'adsadas', 1, 'uploads/user/files/video/videoplayback-3.mp4', './uploads/user/files/img/15943702231.jpg', '<p>dasdasds</p>', '2020-07-10 16:36:29', 0, NULL, 1),
(3, 'asdasdasdas', 1, 'uploads/user/files/video/videoplayback.webm', './uploads/user/files/img/15943750571.jpg', '<p>asdasdasdsa</p>', '2020-07-10 17:57:02', 0, NULL, 5);

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
