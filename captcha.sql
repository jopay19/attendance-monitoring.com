-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 03:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `captcha`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `id` int(11) NOT NULL,
  `1` varchar(200) NOT NULL,
  `2` varchar(200) NOT NULL,
  `3` varchar(200) NOT NULL,
  `4` varchar(200) NOT NULL,
  `5` varchar(200) NOT NULL,
  `6` varchar(200) NOT NULL,
  `7` varchar(200) NOT NULL,
  `8` varchar(200) NOT NULL,
  `9` varchar(200) NOT NULL,
  `hint` varchar(200) NOT NULL,
  `i` varchar(200) NOT NULL,
  `ans` varchar(200) NOT NULL,
  `folder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `hint`, `i`, `ans`, `folder`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Choose dog pics.', 'i', '2 4 6', 'dog'),
(2, '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Choose Red colour Only.', 'i', '2 4 6', 'colour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
