-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 01:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delta`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rentcars`
--

CREATE TABLE `rentcars` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentcars`
--

INSERT INTO `rentcars` (`id`, `title`, `price`, `image`) VALUES
(1, 'هيونداي النترا', 400, 'alantra_rent,alantra_rent2,alantra_rent3,alantra_rent4'),
(2, 'شيفروليه افيو', 275, 'aveo_rent,aveo_rent2,,aveo_rent3,aveo_rent4'),
(3, 'ميتسوبيشي لانسر', 325, 'lancer_rent,lancer_rent2,lancer_rent3,lancer_rent,lancer_rent5'),
(4, 'فولكس فاجن باسات', 430, 'passat_rent,passat_rent2,passat_rent3,passat_rent4,passat_rent5'),
(5, 'كيا سيراتو', 400, 'cerato_rent,cerato_rent2,cerato_rent3'),
(6, 'مرسيديس E250', 550, 'E250_rent,E250_rent2,E250_rent3,E250_rent4,E250_rent5'),
(7, 'مرسيديس C200', 640, 'C200_rent,C200_rent2,C200_rent3,C200_rent4,C200_rent5,C200_rent6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentcars`
--
ALTER TABLE `rentcars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentcars`
--
ALTER TABLE `rentcars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
