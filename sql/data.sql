-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 05:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sn` int(11) NOT NULL,
  `name_company` varchar(40) DEFAULT NULL,
  `name_manager` varchar(30) DEFAULT NULL,
  `location_country` varchar(20) DEFAULT NULL,
  `location_city` varchar(20) DEFAULT NULL,
  `location_street` varchar(20) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `foods` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sn`, `name_company`, `name_manager`, `location_country`, `location_city`, `location_street`, `number`, `foods`) VALUES
(1, 'lamachaur khaja ghar.', 'raj kumar shrestha', 'nepal', 'pokhara', 'lamachaur', '9814148108', '2,4,3,7,9'),
(2, 'on shai.', 'ajaya jaishi', 'nepal', 'pokhara', 'lamachour', '9814148108', '1,2,4,6,5,8'),
(3, 'anzan food.', 'anzan poudel', 'nepal', 'pokhara', 'lamachaur', '0001981414', '1,2,4,6,5,8'),
(4, 'bibek food co.', 'bibek chalise', 'nepal', 'pokhara', 'lamachaur', '9814148108', '1,2,4,6,5,8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
