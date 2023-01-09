-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2022 at 04:55 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20000382_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `scandiweb`
--

CREATE TABLE `scandiweb` (
  `sku` varchar(40) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(40) NOT NULL,
  `type` text NOT NULL,
  `attributes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scandiweb`
--

INSERT INTO `scandiweb` (`sku`, `name`, `price`, `type`, `attributes`) VALUES
('adfasasf', '2342', '234.23 $', 'Furniture', 'Dimension: 234x2342x2323'),
('asdfa23', 'IKES', '220 $', 'Book', 'Weight: 2KG'),
('dsadfa3rwqe', 'asdfwasd232', '232.2 $', 'DVD', 'Size: 1000MB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scandiweb`
--
ALTER TABLE `scandiweb`
  ADD PRIMARY KEY (`sku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
