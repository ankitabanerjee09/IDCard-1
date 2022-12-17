-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 05:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `idno` int(10) NOT NULL,
  `name` text NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gen` text NOT NULL,
  `adrs` varchar(30) NOT NULL,
  `ph` int(10) NOT NULL,
  `bld` text NOT NULL,
  `dept` varchar(10) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `idno`, `name`, `dob`, `gen`, `adrs`, `ph`, `bld`, `dept`, `file`) VALUES
(1, 1, 'dsfas', '11/02/2000', 'm', 'dwfew', 846787868, 'o', 'ee', ''),
(2, 2, 'aaasd', '2022-12-08', 'Female', 'asda', 3, 'A+', 'EE', 'myself2.JPG'),
(3, 3, 'aaasd', '2022-12-08', 'Female', 'asda', 3, 'A+', 'EE', 'myself.JPG'),
(4, 4, 'aaasd', '2022-12-08', 'Female', 'asda', 3, 'A+', 'EE', 'meself3.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
