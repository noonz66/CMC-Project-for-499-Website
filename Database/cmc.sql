-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2020 at 12:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', 'Test', 'test@test.com'),
(2, 'llymer1', 'UR1oFWgcKag5', 'agasgarth1@weebly.com'),
(3, 'rpates2', 'Latfnh', 'tshatliffe2@ovh.net'),
(4, 'ninkin3', 'jsCpIy', 'hhuby3@pinterest.com'),
(5, 'amurrey4', 'cVE7YUjfbA', 'hmabe4@parallels.com'),
(6, 'wlefleming5', 'sLH4rQLhC', 'bfury5@whitehouse.gov'),
(7, 'rferreira6', 'MWk6z0bvLZo', 'kcops6@cam.ac.uk'),
(8, 'ecarrington7', 'TcC4ybp', 'vrustedge7@sciencedaily.com'),
(9, 'kemm8', 'LNxGD3Vf', 'hchatband8@biblegateway.com'),
(10, 'kquig9', 'RN04wP3oL', 'sculleford9@cocolog-nifty.com'),
(11, 'gzarfatia', '3bQeGnsdG3', 'bstycha@patch.com'),
(12, 'ckaasb', 'y93jeT', 'dnardrupb@npr.org'),
(13, 'dduddanc', 'IYlHn1yHG', 'jausielloc@amazonaws.com'),
(14, 'lwellsd', 'KXAJub', 'bbuggyd@w3.org'),
(15, 'cdummigane', '2lnQ3ArXwope', 'hhoylande@mapquest.com'),
(16, 'pbourgourdf', 'SYIwyjSR', 'ismealf@japanpost.jp'),
(17, 'mquerrardg', 'cSI1zF', 'nbailieg@macromedia.com'),
(18, 'bmcshaneh', 'W3TmtgFvsWFO', 'awhiteheadh@ox.ac.uk'),
(19, 'tcurrani', 'YLR5bd', 'tjouhandeaui@phoca.cz'),
(20, 'jbartoszinskij', '7WlgqCKcY1Ua', 'tpenticootj@google.it'),
(21, 'lphiferk', 'dxavuoB0ozKs', 'rgarrisonk@wordpress.org'),
(22, 'gedowesl', 'Iec1FpBE3Fdq', 'kraulstonl@purevolume.com'),
(23, 'btrokem', 'T6cxpIyyNMi', 'jrevillm@wikipedia.org'),
(24, 'dollien', 'el8FN0nokoZ5', 'tzellickn@sakura.ne.jp'),
(25, 'thoricko', 'RdSPFR', 'mklimpo@uiuc.edu'),
(26, 'ebradfieldp', 'egiEdVn7', 'bdodsp@sphinn.com'),
(27, 'ssuermeiersq', 'P55gITrc3A', 'cdossettq@google.co.uk'),
(28, 'dkeoghr', 'gk3BgQ6EgX', 'sdeelayr@unblog.fr'),
(29, 'sfawlteys', 'nEourL', 'atadgells@123-reg.co.uk'),
(30, 'cmockettt', 'zxZMM2E8WLCh', 'dianillit@exblog.jp'),
(31, 'amcgaugieu', 'oujGzFHbFoi', 'eosseltonu@whitehouse.gov'),
(32, 'pwilsherev', 'J9p9gV', 'rsongerv@java.com'),
(33, 'nmeronw', 'LQ13bjiZ', 'udoneldw@live.com'),
(34, 'mhallawaysx', 'JKcOTiBF', 'tferonx@xinhuanet.com'),
(35, 'ltittershilly', 'kbgRPoshrA', 'rbressony@topsy.com'),
(36, 'gleinsterz', 'iC7272Tm', 'msmizz@opera.com'),
(37, 'vcorradetti10', 'neKuJU', 'fjaggers10@miibeian.gov.cn'),
(38, 'apancost11', 'HFUU1L', 'nmullany11@census.gov'),
(39, 'hbavridge12', 'XL8OQN9UmeU', 'lainge12@time.com'),
(40, 'lricoald13', 'HVpIWJ', 'mdolle13@xing.com'),
(41, 'csaggs14', 'Dg3jpk', 'amidgely14@paginegialle.it'),
(42, 'dpowney15', '9QcGFenb', 'bhewson15@indiegogo.com'),
(43, 'cshepcutt16', 'XRrxCaZM5Oc', 'aborzone16@amazon.co.uk'),
(44, 'ahartzogs17', 'v0frxIptg', 'glardnar17@goodreads.com'),
(45, 'kmeneely18', 'y9t1R79xY', 'rchilver18@gmpg.org'),
(46, 'aromaynes19', 'i90QRGcgGYVn', 'tstares19@usnews.com'),
(47, 'jklimowicz1a', '82Em03ih5m8K', 'fletertre1a@goo.gl'),
(48, 'wcouronne1b', 'JLfQgaS', 'wmelonby1b@google.fr'),
(49, 'fduffett1c', 'eO4zHsQPv6WM', 'dchristy1c@wired.com'),
(50, 'falvey1d', 'bKcesqWBjZ', 'slengthorn1d@trellian.com'),
(51, 'ahail1e', 'aWOjXpg', 'wfontel1e@reddit.com');

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
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
