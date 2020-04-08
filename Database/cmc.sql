-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 05:59 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `seqNo` bigint(20) UNSIGNED NOT NULL,
  `who_we_are` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `map` text NOT NULL,
  `social_media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events_info`
--

CREATE TABLE `events_info` (
  `seqNo` int(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `SeqNo` int(15) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `MName` varchar(255) DEFAULT NULL,
  `LName` varchar(50) NOT NULL,
  `Image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Image`)),
  `phone_no` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `SeqNo` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` text DEFAULT NULL,
  `date` date NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participant_info`
--

CREATE TABLE `participant_info` (
  `SeqNo` int(255) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects_info`
--

CREATE TABLE `projects_info` (
  `seqNo` int(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `area` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `map` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surveys_info`
--

CREATE TABLE `surveys_info` (
  `seqNo` int(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `surveyURL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `seqNo` (`seqNo`);

--
-- Indexes for table `events_info`
--
ALTER TABLE `events_info`
  ADD PRIMARY KEY (`seqNo`);

--
-- Indexes for table `participant_info`
--
ALTER TABLE `participant_info`
  ADD PRIMARY KEY (`SeqNo`);

--
-- Indexes for table `projects_info`
--
ALTER TABLE `projects_info`
  ADD PRIMARY KEY (`seqNo`);

--
-- Indexes for table `surveys_info`
--
ALTER TABLE `surveys_info`
  ADD PRIMARY KEY (`seqNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `seqNo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_info`
--
ALTER TABLE `events_info`
  MODIFY `seqNo` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participant_info`
--
ALTER TABLE `participant_info`
  MODIFY `SeqNo` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects_info`
--
ALTER TABLE `projects_info`
  MODIFY `seqNo` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveys_info`
--
ALTER TABLE `surveys_info`
  MODIFY `seqNo` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
