-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 08:11 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aprisonmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `pass`) VALUES
(1111, 'aa'),
(2001, 'aa'),
(2002, 'aa'),
(2003, 'aa'),
(2020101, 'aa'),
(2020102, 'aa'),
(2020103, 'aa'),
(2020104, 'aa'),
(2020105, 'aa'),
(2020106, 'aa'),
(2020107, 'aa'),
(2020108, 'aa'),
(2020109, 'aa'),
(2020110, 'aa'),
(2020111, 'aa'),
(2020112, 'aa'),
(2020113, 'aa'),
(2020114, 'aa'),
(2020115, 'aa'),
(2020116, 'aa'),
(2020117, 'aa'),
(2020118, 'aa'),
(2020119, 'aa'),
(2020120, 'aa'),
(2020121, 'aa'),
(2020122, 'aa'),
(2020123, 'aa'),
(2020124, 'aa'),
(2020125, 'aa'),
(2020126, 'aa'),
(2020127, 'aa'),
(2020128, 'aa'),
(2020129, 'aa'),
(2020130, 'aa'),
(2020131, 'aa'),
(2020132, 'aa'),
(2020133, 'aa'),
(2020134, 'aa'),
(2020135, 'aa'),
(2020136, 'aa'),
(2020137, 'aa'),
(2020138, 'aa'),
(2020139, 'aa'),
(2020140, 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `actcode` int(10) NOT NULL,
  `actname` varchar(20) NOT NULL,
  `actpoint` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`actcode`, `actname`, `actpoint`) VALUES
(11, 'Prayer Session', 5),
(12, 'Reading Session', 5),
(13, 'Bathing Session', 5),
(14, 'Blood Donation', 15),
(15, 'Sewing Session', 5),
(16, 'Sports Session', 5),
(17, 'Long Prayer Session', 10),
(21, 'fightinginjail', -5),
(22, 'stealinginjail', -5),
(23, 'escapingattempt', -40),
(24, 'sexualassaultinjail', -20),
(25, 'badbehavioring', -2),
(26, 'grouping', -5),
(27, 'relatedtodrug', -15),
(91, 'Murder', -600),
(92, 'rape', -450),
(93, 'murder & rape', -800),
(94, 'robbery', -250),
(95, 'stealing', -200);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `salary` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `fname`, `lname`, `salary`) VALUES
(2001, 'Mia', 'Khan', 10000),
(2002, 'Kabir', 'Patwary', 20000),
(2003, 'Ahnaf', 'Ahmed', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `amalnama`
--

CREATE TABLE `amalnama` (
  `andiary` int(10) UNSIGNED NOT NULL,
  `actcode` int(10) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amalnama`
--

INSERT INTO `amalnama` (`andiary`, `actcode`, `pid`) VALUES
(1, 91, 2020101),
(2, 92, 2020102),
(3, 95, 2020103),
(4, 94, 2020104),
(5, 91, 2020105),
(6, 91, 2020106),
(7, 91, 2020107),
(8, 91, 2020109),
(9, 91, 2020110),
(10, 91, 2020111),
(11, 91, 2020112),
(12, 91, 2020113),
(13, 91, 2020114),
(14, 92, 2020115),
(15, 92, 2020116),
(16, 92, 2020117),
(17, 92, 2020118),
(18, 92, 2020119),
(19, 92, 2020120),
(20, 92, 2020121),
(21, 95, 2020122),
(22, 95, 2020123),
(23, 95, 2020124),
(24, 95, 2020125),
(25, 95, 2020126),
(26, 94, 2020127),
(27, 95, 2020128),
(28, 94, 2020129),
(29, 94, 2020130),
(30, 94, 2020131),
(31, 94, 2020132),
(32, 94, 2020133),
(33, 94, 2020134),
(34, 94, 2020135),
(35, 94, 2020136),
(36, 94, 2020137),
(37, 94, 2020138),
(38, 94, 2020139),
(39, 94, 2020140),
(123, 14, 2020122),
(124, 21, 2020137),
(291, 21, 2020101);

-- --------------------------------------------------------

--
-- Table structure for table `balanceof`
--

CREATE TABLE `balanceof` (
  `pid` int(10) NOT NULL,
  `balance` int(10) NOT NULL,
  `rank` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jailer`
--

CREATE TABLE `jailer` (
  `jid` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jailer`
--

INSERT INTO `jailer` (`jid`, `fname`, `lname`) VALUES
(1111, 'Jailer', 'Intisar');

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `lid` int(10) NOT NULL,
  `salaryph` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `pid` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `convictedfor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`pid`, `fname`, `lname`, `convictedfor`) VALUES
(2020101, 'Abul', 'Kabir', 'Murder'),
(2020102, 'Abul', 'uddin', 'Rape'),
(2020103, 'Shopon', 'Kabir', 'Stealing'),
(2020104, 'Shoumik', 'Kabir', 'Robbery'),
(2020105, 'Rafik', 'Khan', 'Murder'),
(2020106, 'Nafiis', 'Mia', 'Murder'),
(2020107, 'Abul', 'Jahangir', 'Murder'),
(2020108, 'Jahangir', 'Kabir', 'Murder'),
(2020109, 'Abu', 'Kabir', 'Murder'),
(2020110, 'Alamgir', 'Kabir', 'Murder'),
(2020111, 'Mojumder', 'Kabir', 'Murder'),
(2020112, 'Rahmat', 'Kabir', 'Murder'),
(2020113, 'Shihab', 'Kabir', 'Murder'),
(2020114, 'Uddin', 'Kabir', 'Murder'),
(2020115, 'Shagor', 'Kabir', 'Rape'),
(2020116, 'Shagur', 'Kabir', 'Rape'),
(2020117, 'Saifur', 'Kabir', 'Rape'),
(2020118, 'Saiful', 'Kabir', 'Rape'),
(2020119, 'Sourov', 'Kabir', 'Rape'),
(2020120, 'Sowrov', 'Kabir', 'Rape'),
(2020121, 'Akash', 'Kabir', 'Rape'),
(2020122, 'Batash', 'Kabir', 'Stealing'),
(2020123, 'Pritom', 'Kabir', 'Stealing'),
(2020124, 'Kala', 'Mia', 'Stealing'),
(2020125, 'Enam', 'Kabir', 'Stealing'),
(2020126, 'Aman', 'Kabir', 'Stealing'),
(2020127, 'AB', 'Khan', 'Robbery'),
(2020128, 'CD', 'Khan', 'Stealing'),
(2020129, 'KK', 'Khan', 'Robbery'),
(2020130, 'Karim', 'Khan', 'Robbery'),
(2020131, 'Rahmat', 'Khan', 'Robbery'),
(2020132, 'Nowshad', 'Khan', 'Robbery'),
(2020133, 'Ratul', 'Khan', 'Robbery'),
(2020134, 'Protul', 'Khan', 'Robbery'),
(2020135, 'Rahim', 'Khan', 'Robbery'),
(2020136, 'Abal', 'Khan', 'Robbery'),
(2020137, 'Messi', 'Khan', 'Robbery'),
(2020138, 'Neymar', 'Khan', 'Robbery'),
(2020139, 'Ronaldo', 'Khan', 'Robbery'),
(2020140, 'Benjema', 'Khan', 'Robbery');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `uid` int(10) NOT NULL,
  `utype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `lid` int(10) NOT NULL,
  `wname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`actcode`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `amalnama`
--
ALTER TABLE `amalnama`
  ADD PRIMARY KEY (`andiary`,`pid`,`actcode`),
  ADD KEY `amal_fk01` (`pid`),
  ADD KEY `amal_fk02` (`actcode`);

--
-- Indexes for table `balanceof`
--
ALTER TABLE `balanceof`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`pid`,`fname`,`lname`);

--
-- Indexes for table `jailer`
--
ALTER TABLE `jailer`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`lid`,`wname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amalnama`
--
ALTER TABLE `amalnama`
  MODIFY `andiary` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_fk` FOREIGN KEY (`aid`) REFERENCES `account` (`id`);

--
-- Constraints for table `amalnama`
--
ALTER TABLE `amalnama`
  ADD CONSTRAINT `amal_fk01` FOREIGN KEY (`pid`) REFERENCES `prisoner` (`pid`),
  ADD CONSTRAINT `amal_fk02` FOREIGN KEY (`actcode`) REFERENCES `activity` (`actcode`);

--
-- Constraints for table `balanceof`
--
ALTER TABLE `balanceof`
  ADD CONSTRAINT `balanceof_fk` FOREIGN KEY (`pid`) REFERENCES `account` (`id`);

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `guardian_fk` FOREIGN KEY (`pid`) REFERENCES `account` (`id`);

--
-- Constraints for table `jailer`
--
ALTER TABLE `jailer`
  ADD CONSTRAINT `jailer_fk` FOREIGN KEY (`jid`) REFERENCES `account` (`id`);

--
-- Constraints for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD CONSTRAINT `prison_fk` FOREIGN KEY (`pid`) REFERENCES `account` (`id`);

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_fk` FOREIGN KEY (`lid`) REFERENCES `label` (`lid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
