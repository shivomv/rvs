-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 03:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `dis` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `photo`, `dis`) VALUES
(15, 'IMG-20210927-WA0010.jpg', ' test');

-- --------------------------------------------------------

--
-- Table structure for table `memberdata`
--

CREATE TABLE `memberdata` (
  `SN` int(11) NOT NULL,
  `jname` varchar(30) NOT NULL,
  `jfname` varchar(30) NOT NULL,
  `jdob` date NOT NULL,
  `jvname` varchar(50) NOT NULL,
  `jpost` varchar(50) NOT NULL,
  `jtehsil` varchar(50) NOT NULL,
  `jdistrict` varchar(50) NOT NULL,
  `jstate` varchar(50) NOT NULL,
  `jmobile` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberdata`
--

INSERT INTO `memberdata` (`SN`, `jname`, `jfname`, `jdob`, `jvname`, `jpost`, `jtehsil`, `jdistrict`, `jstate`, `jmobile`, `date`) VALUES
(129, 'Prabhat Verma', 'Jaykaran nath', '2003-04-02', 'daudapur', 'lashkarpur', 'biswan', 'sitapur', 'Uttar Pradesh', '7084312912', '2021-10-03'),
(131, 'Prabhat Verma', 'Jaykaran nath', '2021-09-28', 'daudapur', 'lashkarpur', 'biswan', 'sitapur', 'Uttar Pradesh', '09026773268', '2021-10-03'),
(132, 'Prabhat Verma', 'Jaykaran nath', '2021-10-01', 'daudapur', 'lashkarpur', 'biswan', 'sitapur', 'Uttar Pradesh', '123', '2021-10-03'),
(133, 'sv', 'Jaykaran nath', '2021-09-28', 'daudapur', 'lashkarpur', 'biswan', 'sitapur', 'Uttar Pradesh', '1111111', '2021-10-03'),
(134, 'Prabhat Verma', 'Jaykaran nath', '2021-09-28', 'daudapur', 'lashkarpur', 'biswan', 'sitapur', 'Uttar Pradesh', '99', '2021-10-04'),
(136, 'Shekhar verma', 'Ram kishor', '2003-05-13', 'daudapur', 'lashkarpur', 'biswan', 'sitapur', 'Uttar Pradesh', '9876543210', '2021-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `rvs_admin`
--

CREATE TABLE `rvs_admin` (
  `Sn` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rvs_admin`
--

INSERT INTO `rvs_admin` (`Sn`, `username`, `password`, `date`) VALUES
(1, 'admin@rvs', '$2y$10$eXpT1ZXt6V9btNU2p1INF.xF9mC3O0XRS1ssBYPQW0Er2r0PjKxDe', '2021-09-24 16:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `video_id` varchar(200) NOT NULL,
  `dis` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video_id`, `dis`) VALUES
(12, 'xocNf8dI2eA', 'बाल पोषण ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberdata`
--
ALTER TABLE `memberdata`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `rvs_admin`
--
ALTER TABLE `rvs_admin`
  ADD PRIMARY KEY (`Sn`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `Sn` (`Sn`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `memberdata`
--
ALTER TABLE `memberdata`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `rvs_admin`
--
ALTER TABLE `rvs_admin`
  MODIFY `Sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
