-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 08:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hyscaler`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `adminpassword`) VALUES
(1, 'paresh@admin.com', 'Admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `landPic` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `email`, `contact`, `landPic`, `price`) VALUES
(5, 'Paresh singh rajput', 'Singhparesh417@gmail.com', '9090878756', 'house5.jpeg', '8,98,67,465'),
(7, ' Barsha mishra', 'barsamishra@gmail.com', '7878764565', 'house4.jpeg', '9,09,08,987'),
(8, ' Hemant Barik', 'hemantbarik@gmail.com', '9898786765', 'house3.jpg', '98,76,545'),
(9, ' Hemant Barik', 'hemantbarik@gmail.com', '9090876567', 'land2.jpg', '12,34,56,543'),
(10, ' Santanu Mohanty', 'santanumohanty@gmail.com', '7878908787', 'land5.jpg', '34,56,545'),
(11, ' Harihar Dey', 'harihardey@gmail.com', '9090876566', 'house1.jpg', '6,75,645'),
(12, ' Harihar Dey', 'harihardey@gmail.com', '7878908787', 'land3.jpg', '7,86,756'),
(16, ' Paresh singh', 'Singhparesh417@gmail.com', '7878765654', 'house4.jpeg', '89,89,767'),
(17, ' Paresh singh', 'Singhparesh417@gmail.com', '9898786765', 'land5.jpg', '45,65,456'),
(18, ' Subhashree Ojha', 'subhashree@gmail.com', '7878908787', 'land2.jpg', '23,45,365'),
(19, ' Subhashree Ojha', 'subhashree@gmail.com', '9898786765', 'house4.jpeg', '23,43,827');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Paresh singh  Rajput', 'Singhparesh417@gmail.com', '6371620044', 'Punu@7788'),
(2, 'Barsha mishra', 'barsamishra@gmail.com', '7875647490', 'Barsa@7788'),
(3, 'Hemant Barik', 'hemantbarik@gmail.com', '9090876554', 'Hemant@7788'),
(4, 'Santanu Mohanty', 'santanumohanty@gmail.com', '6767565454', 'Santanu@7788'),
(5, 'Harihar Dey', 'harihardey@gmail.com', '8787676567', 'Harihar@7788'),
(6, 'Subhashree Ojha', 'subhashree@gmail.com', '9090876547', 'Subha@7788');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
