-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 08:13 AM
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
  `CV` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE IF NOT EXISTS `ict` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` int(9) NOT NULL,
  `job_type` text NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_skills`
--

INSERT INTO `interview_skills` (`id`, `name`, `email`, `phonenumber`, `Date of registration`) VALUES
(1, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(2, 'Rufus Nganga', 'rufusngash@gmail.com', 2147483647, '2016-10-01 09:53:53'),
(3, 'Rufus Nganga', 'rufusnga@yahoo.com', 724816442, '2016-10-01 09:53:53'),
(4, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(5, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(6, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(7, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(8, 'ruddy12', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(9, 'Rufus', 'rufusngash@gmail.com', 725334889, '2016-10-01 09:53:53'),
(10, 'Rufus Nganga', 'rufusngash@gmail.com', 724816442, '2016-10-01 09:53:53'),
(11, 'ruddy12', 'rufusngash@gmail.com', 2147483647, '2016-10-01 09:53:53'),
(12, 'Rufus', 'rufusngash@gmail.com', 2147483647, '2016-10-01 09:53:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
(28, 'teddy', 'rufusnga@gmail.com', 2147483647, 'Internet Marketing Coordinator', '713fa5dde2a537e39647d421d0136385', '2016-10-06 09:58:09', '');

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
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Date of registration` blob NOT NULL,
  `CV` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `ict`
--
ALTER TABLE `ict`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `1d` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cv_writing`
--
ALTER TABLE `cv_writing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `engineering`
--
ALTER TABLE `engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ict`
--
ALTER TABLE `ict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interview_skills`
--
ALTER TABLE `interview_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `telecom`
--
ALTER TABLE `telecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
