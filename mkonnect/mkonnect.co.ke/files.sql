-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 01:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skiza_upoads`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`) VALUES
(1, 'Picture1.png', './images/Picture1.png'),
(2, 'Picture2.png', './images/Picture2.png'),
(5, 'SPOKEN WORD - INFLATION.mp3', './images/SPOKEN WORD - INFLATION.mp3'),
(6, 'SPOKEN WORD - BEAUTIFULE.mp3', './images/SPOKEN WORD - BEAUTIFULE.mp3'),
(7, 'SPOKEN WORD - BEAUTIFULE.mp3', './images/SPOKEN WORD - BEAUTIFULE.mp3'),
(8, 'SPOKEN WORD - BEAUTIFULE.mp3', './spoken/SPOKEN WORD - BEAUTIFULE.mp3'),
(9, 'SPOKEN WORD - HIGH COURT.mp3', './spoken/SPOKEN WORD - HIGH COURT.mp3'),
(10, 'SPOKEN WORD - IMMORTAL.mp3', './spoken/SPOKEN WORD - IMMORTAL.mp3'),
(11, 'SPOKEN WORD - BEAUTIFULE.mp3', './spoken/SPOKEN WORD - BEAUTIFULE.mp3'),
(12, 'SPOKEN WORD - HIGH COURT.mp3', './spoken/SPOKEN WORD - HIGH COURT.mp3'),
(13, 'SPOKEN WORD - IMMORTAL.mp3', './spoken/SPOKEN WORD - IMMORTAL.mp3'),
(14, 'SPOKEN WORD - BEAUTIFULE.mp3', './spoken/SPOKEN WORD - BEAUTIFULE.mp3'),
(15, 'SPOKEN WORD - HIGH COURT.mp3', './spoken/SPOKEN WORD - HIGH COURT.mp3'),
(16, 'SPOKEN WORD - IMMORTAL.mp3', './spoken/SPOKEN WORD - IMMORTAL.mp3'),
(17, 'SPOKEN WORD - BEAUTIFULE.mp3', './spoken/SPOKEN WORD - BEAUTIFULE.mp3'),
(18, 'SPOKEN WORD - HIGH COURT.mp3', './spoken/SPOKEN WORD - HIGH COURT.mp3'),
(19, 'SPOKEN WORD - IMMORTAL.mp3', './spoken/SPOKEN WORD - IMMORTAL.mp3'),
(20, '', './spoken/'),
(21, 'SPOKEN WORD - BEAUTIFULE.mp3', './spoken/SPOKEN WORD - BEAUTIFULE.mp3'),
(22, 'SPOKEN WORD - HIGH COURT.mp3', './spoken/SPOKEN WORD - HIGH COURT.mp3'),
(23, 'SPOKEN WORD - IMMORTAL.mp3', './spoken/SPOKEN WORD - IMMORTAL.mp3'),
(24, '', './spoken/'),
(25, 'S', './spoken/S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
