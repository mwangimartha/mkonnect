-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 02:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mkonnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL,
  `password` varchar(60) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `phonenumber`, `job_type`, `password`, `Date of registration`, `user_id`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, 'Auditor', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-27 07:10:47', 0),
(2, 'james kae', 'jameskae69@gmail.com', 726886334, 'Accounting Assistant', '9ba36afc4e560bf811caefc0c7fddddf', '2016-10-31 09:59:19', 0),
(3, 'winnie', 'winnieprof@gmail.com', 2147483647, 'Budget Analyst', 'ccbbaecfd08e750cba16728f30971838', '2016-10-31 11:54:22', 0),
(4, 'Rufus Nganga', 'rufusnga@yahoo.com', 2147483647, 'Auditor', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-31 12:42:44', 0),
(5, 'ruuri elly', 'ruuri@gmail.com', 2147483647, 'Accounting Clerk', '25a2091a3244f4cdfee1f0dd2d6d4a56', '2016-10-31 12:53:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `1d` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`1d`, `email`, `password`) VALUES
(1, 'rufusngash@gmail.com', '2ae5b2c60fda1477fa9665bed54ae5ae');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE IF NOT EXISTS `cvs` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `path` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cv_writing`
--

CREATE TABLE IF NOT EXISTS `cv_writing` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv_writing`
--

INSERT INTO `cv_writing` (`id`, `name`, `email`, `phonenumber`, `Date of registration`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmai', 724816442, '2016-09-26 08:46:39'),
(2, 'Rufus Nganga', 'rufusngash@gmai', 724816442, '2016-09-26 08:46:39'),
(3, 'Rufus Nganga', 'rufusngash@gmai', 724816442, '2016-09-26 08:46:39'),
(4, 'Rufus Nganga', 'rufusngash@gmai', 724816442, '2016-09-26 08:46:39'),
(5, 'Rufus Nganga', 'rufusngash@gmai', 724816442, '2016-09-26 08:46:39'),
(6, 'Rufus Nganga', 'rufusngash@gmai', 2147483647, '2016-09-26 08:46:39'),
(7, 'Rufus Nganga', 'rufusngash@gmai', 724816442, '2016-09-26 08:46:39'),
(8, 'Rufus Nganga', 'rufusngash@gmai', 0, '2016-09-28 09:03:46'),
(9, 'Rufus Nganga', 'rufusngash@gmai', 0, '2016-09-29 07:16:22'),
(10, 'Rufus Nganga', 'rufusnga@yahoo.', 0, '2016-09-29 09:06:35'),
(11, 'Rufus Nganga', 'rufusnga@yahoo.', 0, '2016-09-29 09:09:04'),
(12, 'Rufus Nganga', 'rufusnga@yahoo.', 0, '2016-09-29 09:17:49'),
(13, 'james kae', 'jameskae69@gmai', 0, '2016-09-29 12:37:01'),
(14, 'Rufus Nganga', 'rufusngash@gmai', 0, '2016-09-29 12:45:23'),
(15, 'Rufus Nganga', 'rufusngash@gmai', 0, '2016-09-30 05:28:02'),
(16, 'Rufus', 'rufusngash@gmai', 2147483647, '2016-10-01 08:14:25'),
(17, 'ruddy12', 'rufusnga@yahoo.', 724816442, '2016-10-01 08:18:47'),
(18, 'Rufus Nganga', 'rufusnga@yahoo.', 2147483647, '2016-10-01 08:19:32'),
(19, 'Rufus Nganga', 'rufusnga@yahoo.', 2147483647, '2016-10-01 08:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE IF NOT EXISTS `engineering` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering`
--

INSERT INTO `engineering` (`id`, `name`, `email`, `phonenumber`, `job_type`, `password`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, 'Cost Accountant Credit', '2ae5b2c60fda1477fa9665bed54ae5ae');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `Date of upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(9) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `Date of upload`, `user_id`) VALUES
(126, 'Picture6.png', 'uploads/.Picture6.png', '2016-11-01 07:38:24', 0),
(127, 'Picture.png', 'uploads/.Picture.png', '2016-11-01 07:38:24', 0),
(124, 'Picture1.png', 'uploads/.Picture1.png', '2016-11-01 07:38:24', 0),
(125, 'Picture4.png', 'uploads/.Picture4.png', '2016-11-01 07:38:24', 0),
(122, 'HP0003.jpg', 'upload/uploads/HP0003.jpg', '2016-11-01 07:38:24', 0),
(123, 'Picture.png', 'uploads/.Picture.png', '2016-11-01 07:38:24', 0),
(120, 'HP0001.jpg', 'upload/uploads/HP0001.jpg', '2016-11-01 07:38:24', 0),
(121, 'HP0002.jpg', 'upload/uploads/HP0002.jpg', '2016-11-01 07:38:24', 0),
(128, 'ruffy.jpg', 'uploads/.ruffy.jpg', '2016-11-01 07:40:57', 0),
(129, 'CURRICULUMN VITAE.docx', 'uploads/.CURRICULUMN VITAE.docx', '2016-11-01 07:51:21', 0),
(130, 'CURRICULUMN VITAE.docx', 'uploads/.CURRICULUMN VITAE.docx', '2016-11-01 08:17:34', 0),
(131, 'CURRICULUMN VITAE.docx', 'uploads/.CURRICULUMN VITAE.docx', '2016-11-01 12:37:02', 0),
(132, 'CV2.docx', 'uploads/.CV2.docx', '2016-11-01 12:38:19', 5),
(133, 'CURRICULUMN VITAE.docx', 'uploads/.CURRICULUMN VITAE.docx', '2016-11-01 12:38:38', 5),
(134, 'CV2.docx', 'uploads/.CV2.docx', '2016-11-02 13:02:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE IF NOT EXISTS `ict` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL,
  `password` varchar(60) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict`
--

INSERT INTO `ict` (`user_id`, `name`, `email`, `phonenumber`, `job_type`, `password`, `Date of registration`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, 'Web Developer', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-27 07:15:06'),
(2, 'james kae', 'jameskae69@gmail.com', 726886334, 'Database Adminstrator', '9ba36afc4e560bf811caefc0c7fddddf', '2016-10-27 07:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `interview_skills`
--

CREATE TABLE IF NOT EXISTS `interview_skills` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_skills`
--

INSERT INTO `interview_skills` (`id`, `name`, `email`, `phonenumber`, `Date of registration`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(2, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, '2016-10-01 09:53:53'),
(4, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(5, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(6, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(7, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(8, 'ruddy12', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(9, 'Rufus', 'rufusngash@gmail.com', 725334889, '2016-10-01 09:53:53'),
(10, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(11, 'ruddy12', 'rufusngash@gmail.com', 2147483647, '2016-10-01 09:53:53'),
(12, 'Rufus', 'rufusngash@gmail.com', 2147483647, '2016-10-01 09:53:53'),
(13, 'Rufus Nganga', 'rufusnga@yahoo.com', 2147483647, '2016-10-18 08:51:00'),
(15, 'Onion', 'onion12@gmail.com', 2147483647, '2016-10-26 12:39:56'),
(16, 'Onion', 'onion12@gmail.com', 2147483647, '2016-10-26 12:39:57'),
(17, 'winnie', 'winnieprof@gmail.com', 724816442, '2016-10-26 12:43:12'),
(18, 'winnie', 'winnieprof@gmail.com', 724816442, '2016-10-26 12:43:12'),
(20, 'james kae', 'jameskae69@gmail.com', 2147483647, '2016-10-26 14:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(14) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE IF NOT EXISTS `marketing` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL,
  `password` varchar(60) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CV` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id`, `name`, `email`, `phonenumber`, `job_type`, `password`, `Date of registration`, `CV`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, 'Accountant', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:06:05', ''),
(2, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, 'Accountant', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:09:34', ''),
(3, 'james kae', 'rufusngash@gmail.com', 2147483647, 'Accountant', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:29:26', ''),
(4, 'James kae', 'rufusngash@gmail.com', 2147483647, 'Accountant', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:30:55', ''),
(5, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, 'Accountant', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:33:22', ''),
(6, 'James', 'rufusngash@gmail.com', 2147483647, 'Accountant', '713fa5dde2a537e39647d421d0136385', '2016-10-06 08:35:50', ''),
(7, 'James', 'rufusngash@gmail.com', 2147483647, 'Accountant', '713fa5dde2a537e39647d421d0136385', '2016-10-06 08:43:55', ''),
(8, 'James', 'rufusngash@gmail.com', 2147483647, 'Accountant', '713fa5dde2a537e39647d421d0136385', '2016-10-06 08:45:51', ''),
(9, 'Eli ruuri', 'rufusnga@yahoo.com', 2147483647, 'Accountant', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:46:27', ''),
(10, 'Eli ruuri', 'rufusnga@yahoo.com', 2147483647, 'Accountant', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:57:11', ''),
(11, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, 'Clerk', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 08:57:53', ''),
(12, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, 'Clerk', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 09:01:13', ''),
(13, 'hashim', 'rufusnga@yahoo.com', 2147483647, 'Banker', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 09:01:49', ''),
(14, 'hashim', 'rufusnga@yahoo.com', 2147483647, 'Banker', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 09:02:29', ''),
(15, 'ramsey', 'rufusngash@gmail.com', 2147483647, 'Cashier', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:03:09', ''),
(16, 'ramsey', 'rufusngash@gmail.com', 2147483647, 'Cashier', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:05:04', ''),
(17, 'Joe muchiri', 'rufusnga@yahoo.com', 2147483647, 'Cashier', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:05:50', ''),
(18, 'Joe muchiri', 'rufusnga@yahoo.com', 2147483647, 'Cashier', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:07:08', ''),
(19, 'Joe muchiri', 'rufusnga@yahoo.com', 2147483647, 'Cashier', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:14:07', ''),
(20, 'Joe muchiri', 'rufusnga@yahoo.com', 2147483647, 'Cashier', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:21:17', ''),
(21, 'RUUri elly', 'rufusnga@yahoo.com', 2147483647, 'Digital Brand Manager', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 09:33:52', ''),
(22, 'RUUri elly', 'rufusnga@yahoo.com', 2147483647, 'Digital Brand Manager', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 09:39:22', ''),
(23, 'Rufus Nganga', 'rufusnga@gmail.com', 2147483647, 'Sales Representative', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:44:35', ''),
(24, 'eddie', 'rufusngash@gmail.com', 2147483647, 'Internet Marketing Director', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:47:33', ''),
(25, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, 'Senior Product Manager', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 09:54:31', ''),
(26, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, 'Senior Product Manager', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-06 09:55:22', ''),
(27, 'ruddy12', 'rufusnga@yahoo.com', 2147483647, 'Sales Engineer', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:56:52', ''),
(28, 'teddy', 'rufusnga@gmail.com', 2147483647, 'Internet Marketing Coordinator', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:58:09', ''),
(31, 'winnie', 'winnieprof@gmail.com', 724816442, 'Senior Product Manager', 'a7ecc0382b8e629aca547542604404ba', '2016-10-26 08:43:13', ''),
(33, 'winnie', 'winnieprof@gmail.com', 726456788, 'Digital Brand Manager', 'a7ecc0382b8e629aca547542604404ba', '2016-10-26 08:44:26', ''),
(34, 'winnie', 'winnieprof@gmail.com', 726456788, 'Digital Brand Manager', 'a7ecc0382b8e629aca547542604404ba', '2016-10-26 08:44:26', ''),
(59, 'ruuri', 'ruuri@gmail.com', 2147483647, 'Sales Director', '25a2091a3244f4cdfee1f0dd2d6d4a56', '2016-10-31 12:06:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE IF NOT EXISTS `mechanic` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL,
  `password` varchar(60) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CV` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`id`, `name`, `email`, `phonenumber`, `job_type`, `password`, `Date of registration`, `CV`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, 'Body Paint', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-27 06:56:38', ''),
(2, 'Rufus Nganga', 'rufusngash@gmail.com', 726886334, 'Auditor', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-27 06:56:38', ''),
(3, 'ruddy12', 'rufusngash@gmail.com', 724816442, 'Budget Analyst', '2ae5b2c60fda1477fa9665bed54ae5ae', '2016-10-27 06:56:38', ''),
(4, 'james kae', 'jameskae69@gmail.com', 726886334, 'Credit Analyst', '9ba36afc4e560bf811caefc0c7fddddf', '2016-10-27 07:02:38', '');

-- --------------------------------------------------------

--
-- Table structure for table `telecom`
--

CREATE TABLE IF NOT EXISTS `telecom` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL,
  `password` varchar(60) NOT NULL,
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CV` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telecom`
--

INSERT INTO `telecom` (`id`, `name`, `email`, `phonenumber`, `job_type`, `password`, `Date of registration`, `CV`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, 'Digital Marketing Manager', '2ae5b2c60fda1477fa9665bed54ae5ae', '0000-00-00 00:00:00', ''),
(2, 'james kae', 'jameskae69@gmail.com', 726886334, 'Senior Brand Manager', '9ba36afc4e560bf811caefc0c7fddddf', '2016-10-27 06:03:17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`1d`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cv_writing`
--
ALTER TABLE `cv_writing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineering`
--
ALTER TABLE `engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ict`
--
ALTER TABLE `ict`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `interview_skills`
--
ALTER TABLE `interview_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telecom`
--
ALTER TABLE `telecom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `1d` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cv_writing`
--
ALTER TABLE `cv_writing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `engineering`
--
ALTER TABLE `engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `ict`
--
ALTER TABLE `ict`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `interview_skills`
--
ALTER TABLE `interview_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `telecom`
--
ALTER TABLE `telecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
