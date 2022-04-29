-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 11:33 AM
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
-- Database: `tasc`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `birthdate` varchar(200) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `admin_id`, `password`, `fullname`, `birthdate`, `contact`, `email`) VALUES
(2, 'a61930587', 'bcd776620706f44c4c4281e408334449', 'John Paul Villa', 'April 25, 2001', '09123456123', 'jvilla.a61930587@umak.edu.ph');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
