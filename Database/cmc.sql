-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2020 at 12:42 AM
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
  `full_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `full_name`, `username`, `password`, `email`) VALUES
(1, 'Testy Tester', 'test', 'Test', 'test@email.com'),
(2, 'Alessandra McCool', 'amccool1', 'wqXhqjbw', 'amccool1@illinois.edu'),
(3, 'Shirl Sugg', 'ssugg2', 'lRDjy6xNQxx', 'ssugg2@nationalgeographic.com'),
(4, 'Frants Quadri', 'fquadri3', 'Sd48pSdT', 'fquadri3@cnet.com'),
(5, 'Zachariah Eberts', 'zeberts4', '3uJT6rre4x9n', 'zeberts4@sfgate.com'),
(6, 'Brennan Vase', 'bvase5', 'vL3KB2m', 'bvase5@usda.gov'),
(7, 'Hercules Mashal', 'hmashal6', 'GvdBfG', 'hmashal6@fda.gov'),
(8, 'Gillan Devigne', 'gdevigne7', 'ZfGAVF', 'gdevigne7@mozilla.org'),
(9, 'Sheelagh Joe', 'sjoe8', 'jer24fgYnHI', 'sjoe8@delicious.com'),
(10, 'Richard Blaxeland', 'rblaxeland9', 'rJM5iqO2', 'rblaxeland9@huffingtonpost.com'),
(11, 'Duff Manoelli', 'dmanoellia', 'EXu2xNRL2J5J', 'dmanoellia@acquirethisname.com'),
(12, 'Penn Sibbald', 'psibbaldb', 'PWjGDS', 'psibbaldb@bravesites.com'),
(13, 'Cally Twitty', 'ctwittyc', 'agnjB6', 'ctwittyc@go.com'),
(14, 'Annice Riglar', 'ariglard', 'tmYk68lvf7u', 'ariglard@seesaa.net'),
(15, 'Jessalyn Evason', 'jevasone', '2CvwfSUm', 'jevasone@jiathis.com'),
(16, 'Hendrik Beirne', 'hbeirnef', 'VKPLdbFn1jtI', 'hbeirnef@pcworld.com'),
(17, 'Ced Tinsley', 'ctinsleyg', 'iz3dhx', 'ctinsleyg@smugmug.com'),
(18, 'Aurie Courson', 'acoursonh', 'JlLVxPJxBKU', 'acoursonh@washingtonpost.com'),
(19, 'Gale Simnell', 'gsimnelli', '87r5OPJQF', 'gsimnelli@ocn.ne.jp'),
(20, 'Bell Beckers', 'bbeckersj', 'Q0z0B1WMk', 'bbeckersj@hostgator.com'),
(21, 'Estelle Sayce', 'esaycek', 'QoxRrY', 'esaycek@state.tx.us'),
(22, 'Emelita Sustins', 'esustinsl', '6zL90ZWciVSz', 'esustinsl@nasa.gov'),
(23, 'Corny Kenlin', 'ckenlinm', 'SQZdVjl', 'ckenlinm@mapy.cz'),
(24, 'Carce Linggood', 'clinggoodn', 'pfbtBZDaiZ', 'clinggoodn@google.co.uk'),
(25, 'Callie Hawkett', 'chawketto', 'X4jMaG6qR1', 'chawketto@wikia.com'),
(26, 'Delcina Skewis', 'dskewisp', 'JsT0jD', 'dskewisp@posterous.com'),
(27, 'Zorina Cardinale', 'zcardinaleq', 'XZOiYeH7lisK', 'zcardinaleq@yellowbook.com'),
(28, 'Annmarie Arnefield', 'aarnefieldr', 'uM5S55wCI', 'aarnefieldr@cbslocal.com'),
(29, 'Dina Bosma', 'dbosmas', 'LmUS3BS', 'dbosmas@prlog.org'),
(30, 'Stacie Svanini', 'ssvaninit', 'LrXheUXtS', 'ssvaninit@prnewswire.com'),
(31, 'Nicola Nightingale', 'nnightingaleu', 'dumrGhDWUd', 'nnightingaleu@tripod.com'),
(32, 'Howard Burke', 'hburkev', '3PGfVPRf6aNd', 'hburkev@newyorker.com'),
(33, 'Arlyne Cordes', 'acordesw', 'PP3MfOoKipI', 'acordesw@theglobeandmail.com'),
(34, 'Eldridge Penman', 'epenmanx', '04U27CA8w7', 'epenmanx@nba.com'),
(35, 'Hestia Uden', 'hudeny', 'oj6jVCzWmmOs', 'hudeny@google.ca'),
(36, 'Shelton Jankovsky', 'sjankovskyz', 'LW7PIO', 'sjankovskyz@ebay.com'),
(37, 'Livvyy Bassick', 'lbassick10', 'ccHZHUW7sc', 'lbassick10@nydailynews.com'),
(38, 'Wendell Batiste', 'wbatiste11', 'H0RvqdBLD1', 'wbatiste11@nbcnews.com'),
(39, 'Uriel Bordiss', 'ubordiss12', 'ud3rq6P5', 'ubordiss12@addthis.com'),
(40, 'Suzi Minucci', 'sminucci13', 'IOUbU36YGk6', 'sminucci13@indiegogo.com'),
(41, 'Jeni Scyner', 'jscyner14', 'WWlJ9RY', 'jscyner14@tinyurl.com'),
(42, 'Worthington Fairburn', 'wfairburn15', 'b9RbBw2LDfa', 'wfairburn15@github.io'),
(43, 'Hilary Balsellie', 'hbalsellie16', '529CHDXgWk', 'hbalsellie16@booking.com'),
(44, 'Rhonda Jex', 'rjex17', '11ZnTFPis', 'rjex17@wufoo.com'),
(45, 'Jethro Kampshell', 'jkampshell18', '7S6suxXh', 'jkampshell18@simplemachines.org'),
(46, 'Allis Pitone', 'apitone19', 'BRCt1ZDBTFn', 'apitone19@privacy.gov.au'),
(47, 'Ber Pes', 'bpes1a', 'nFHWkKwt0f', 'bpes1a@engadget.com'),
(48, 'Anita Luthwood', 'aluthwood1b', 'aDQrCbQO', 'aluthwood1b@usda.gov'),
(49, 'Emanuele Rogans', 'erogans1c', 'w7fHx0HN5Opd', 'erogans1c@lulu.com'),
(50, 'Randi Traise', 'rtraise1d', 'B4GHpaxgaKM', 'rtraise1d@google.co.uk'),
(51, 'Arnie Robottom', 'arobottom1e', 'ndtTcr4Y78XE', 'arobottom1e@cloudflare.com'),
(52, 'Blakelee Bestwick', 'bbestwick1f', 'SATEJQq', 'bbestwick1f@surveymonkey.com'),
(53, 'Caren Matis', 'cmatis1g', 'eUpJwz7p', 'cmatis1g@weebly.com'),
(54, 'Clair Danielou', 'cdanielou1h', '84vmFs8', 'cdanielou1h@ft.com'),
(55, 'Theadora Paffley', 'tpaffley1i', '5AdIqEeMyB', 'tpaffley1i@globo.com'),
(56, 'Danie Falkous', 'dfalkous1j', '6TILIrvE', 'dfalkous1j@ezinearticles.com'),
(57, 'Leonhard Spencer', 'lspencer1k', 'QFMKbp', 'lspencer1k@sohu.com'),
(58, 'Mariele Pasquale', 'mpasquale1l', 'qcoqreRa', 'mpasquale1l@comcast.net'),
(59, 'Rozanne Leiden', 'rleiden1m', '027yNmmH6Z', 'rleiden1m@e-recht24.de'),
(60, 'Frasco Itzhak', 'fitzhak1n', 'TnHi7LPV', 'fitzhak1n@nbcnews.com'),
(61, 'Lissa Jelphs', 'ljelphs1o', 'dwlH0C', 'ljelphs1o@buzzfeed.com'),
(62, 'Marion Mordey', 'mmordey1p', 'xum5Syb1A', 'mmordey1p@wikimedia.org'),
(63, 'Ingrim Dwelly', 'idwelly1q', 'EJO3bQ', 'idwelly1q@businessweek.com'),
(64, 'Keelia Frenchum', 'kfrenchum1r', '9s8BvCZ7ds1', 'kfrenchum1r@boston.com'),
(65, 'Beryle Tunnow', 'btunnow1s', 'OBuEDimy', 'btunnow1s@loc.gov'),
(66, 'Bondy Print', 'bprint1t', 'OSyyhaJU4Pm', 'bprint1t@simplemachines.org'),
(67, 'Timoteo Hackley', 'thackley1u', 'zMwzR0', 'thackley1u@reuters.com'),
(68, 'Keely Charrington', 'kcharrington1v', 'PK7dnc8dz', 'kcharrington1v@dion.ne.jp'),
(69, 'Dionne Casaletto', 'dcasaletto1w', 'NzthKn0jb', 'dcasaletto1w@hatena.ne.jp'),
(70, 'Faina Ajsik', 'fajsik1x', 'aczFEz', 'fajsik1x@fda.gov'),
(71, 'Karlie Du Plantier', 'kdu1y', 'AJu0VYDPRXGY', 'kdu1y@netvibes.com'),
(72, 'Reeva Vlies', 'rvlies1z', 'uP9sux', 'rvlies1z@howstuffworks.com'),
(73, 'Mariejeanne Wibberley', 'mwibberley20', 'oVGVDVw', 'mwibberley20@usa.gov'),
(74, 'Richard Lahy', 'rlahy21', '1aprYMB9JL', 'rlahy21@wp.com'),
(75, 'Engelbert MacGuffie', 'emacguffie22', 'WucVukTo0an', 'emacguffie22@japanpost.jp'),
(76, 'Patty Merida', 'pmerida23', 'FCRhWD', 'pmerida23@spiegel.de'),
(77, 'Fiorenze Impey', 'fimpey24', 'nkMRiGZ', 'fimpey24@flavors.me'),
(78, 'Winfield Baffin', 'wbaffin25', 'HHfs7V47OV', 'wbaffin25@blogs.com'),
(79, 'Mirna Seer', 'mseer26', 'BtaTcgsRy3', 'mseer26@php.net'),
(80, 'Chane Piggins', 'cpiggins27', 'q7d0kh', 'cpiggins27@linkedin.com'),
(81, 'Susannah Buick', 'sbuick28', '0p9EwOLhmBV', 'sbuick28@wired.com'),
(82, 'Gavan McGeown', 'gmcgeown29', 'plrmfkf', 'gmcgeown29@smh.com.au'),
(83, 'Stefa Leblanc', 'sleblanc2a', 'GqENSOIg', 'sleblanc2a@boston.com'),
(84, 'Kendrick Beecheno', 'kbeecheno2b', 'Olt3pFDn', 'kbeecheno2b@tmall.com'),
(85, 'Haroun Wickwar', 'hwickwar2c', 'etr61cNWjtLv', 'hwickwar2c@chron.com'),
(86, 'Kayla Baltzar', 'kbaltzar2d', 'l4Lwq09Pa1n', 'kbaltzar2d@ovh.net'),
(87, 'Frayda Blucher', 'fblucher2e', 'yCNPl3tc', 'fblucher2e@hc360.com'),
(88, 'Natasha Cardozo', 'ncardozo2f', '5qynIp7Z', 'ncardozo2f@deviantart.com'),
(89, 'Ermengarde Tyres', 'etyres2g', 'yemC4NZnQagx', 'etyres2g@ehow.com'),
(90, 'Atlante Tassel', 'atassel2h', 'dfszQwLfzWzs', 'atassel2h@lycos.com'),
(91, 'Paten Harragin', 'pharragin2i', 'iduL5Q9c7SR', 'pharragin2i@house.gov'),
(92, 'Wes Beards', 'wbeards2j', '5H5WwRpT', 'wbeards2j@e-recht24.de'),
(93, 'Kimble Bourtoumieux', 'kbourtoumieux2k', 'I1lerDqy', 'kbourtoumieux2k@aboutads.info'),
(94, 'Herminia Mart', 'hmart2l', 'KWFihsE0wjX', 'hmart2l@scribd.com'),
(95, 'Frannie Madge', 'fmadge2m', 'lsDkngf', 'fmadge2m@pinterest.com'),
(96, 'Emmanuel Mish', 'emish2n', 'O9LCeKWHl', 'emish2n@washingtonpost.com'),
(97, 'Henrietta Boram', 'hboram2o', 'c85QndfyHAV', 'hboram2o@unblog.fr'),
(98, 'Courtnay Frail', 'cfrail2p', 'XabsvlJ', 'cfrail2p@mozilla.org'),
(99, 'Craggie Bodesson', 'cbodesson2q', 'p4SgqITndmI', 'cbodesson2q@hc360.com'),
(100, 'Vanny Durdle', 'vdurdle2r', 'IY7dliGma', 'vdurdle2r@discovery.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
