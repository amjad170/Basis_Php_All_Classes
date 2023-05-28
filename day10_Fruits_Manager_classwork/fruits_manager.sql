-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 07:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruits_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruittable`
--

CREATE TABLE `fruittable` (
  `id` int(11) NOT NULL,
  `fruitname` varchar(100) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `fruitimage` varchar(100) NOT NULL,
  `fruitprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fruittable`
--

INSERT INTO `fruittable` (`id`, `fruitname`, `Qty`, `fruitimage`, `fruitprice`) VALUES
(27, 'Mango', '100', 'f5.jpg', '5000'),
(28, 'Watermelon', '20', 'f3.jpg', '4000'),
(29, 'Apple', '100', 'f1.jpg', '1000'),
(30, 'Pomegranate', '100', 'f4.jpg', '5000'),
(31, 'Strawberry', '200', 'f2.jpg', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `laptoptable`
--

CREATE TABLE `laptoptable` (
  `id` int(11) NOT NULL,
  `mobilename` varchar(100) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `mobileimage` varchar(100) NOT NULL,
  `mobileprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptoptable`
--

INSERT INTO `laptoptable` (`id`, `mobilename`, `Qty`, `mobileimage`, `mobileprice`) VALUES
(11, 'Apple Macbook Pro 13', '1', 'l5.jpg', '150000'),
(12, 'ThinkBook 16 Gen 4', '1', 'l1.jpg', '80000'),
(13, 'IdeaPad Slim 3i 12th Gen', '1', 'l2.jpg', '70000'),
(14, 'HP 15s-fq2597TU', '1', 'l3.jpg', '65000'),
(15, 'IdeaPad Gaming 3 Gen 6', '1', 'l4.jpg', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `mobiletable`
--

CREATE TABLE `mobiletable` (
  `id` int(11) NOT NULL,
  `mobilename` varchar(100) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `mobileimage` varchar(100) NOT NULL,
  `mobileprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobiletable`
--

INSERT INTO `mobiletable` (`id`, `mobilename`, `Qty`, `mobileimage`, `mobileprice`) VALUES
(11, 'Iphone 1', '1', 'm1.jpg', '75000'),
(12, 'Iphone 2', '1', 'm2.jpg', '80000'),
(13, 'Iphone 3', '1', 'm3.jpg', '90000'),
(16, 'Iphone 4', '1', 'm4.jpg', '100000'),
(18, 'Iphone 5', '1', 'm5.jpg', '120000');

-- --------------------------------------------------------

--
-- Table structure for table `sporttable`
--

CREATE TABLE `sporttable` (
  `id` int(11) NOT NULL,
  `mobilename` varchar(100) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `mobileimage` varchar(100) NOT NULL,
  `mobileprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sporttable`
--

INSERT INTO `sporttable` (`id`, `mobilename`, `Qty`, `mobileimage`, `mobileprice`) VALUES
(11, 'Football', '1', 's1.jpg', '2500'),
(12, 'Bat', '1', 's2.jpg', '5000'),
(13, 'Gloves', '1', 's4.jpg', '2700'),
(14, 'Crecket ball', '1', 's3.jpg', '3500'),
(15, 'Padd', '1', 's5.jpg', '4500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruittable`
--
ALTER TABLE `fruittable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptoptable`
--
ALTER TABLE `laptoptable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiletable`
--
ALTER TABLE `mobiletable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sporttable`
--
ALTER TABLE `sporttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruittable`
--
ALTER TABLE `fruittable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `laptoptable`
--
ALTER TABLE `laptoptable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mobiletable`
--
ALTER TABLE `mobiletable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sporttable`
--
ALTER TABLE `sporttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
