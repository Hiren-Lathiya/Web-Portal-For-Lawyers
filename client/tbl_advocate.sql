-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 06:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advocate`
--

CREATE TABLE `tbl_advocate` (
  `adv_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `law_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_advocate`
--

INSERT INTO `tbl_advocate` (`adv_id`, `l_id`, `law_id`) VALUES
(1, 62, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_advocate`
--
ALTER TABLE `tbl_advocate`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `l_id` (`l_id`),
  ADD KEY `law_id` (`law_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_advocate`
--
ALTER TABLE `tbl_advocate`
  MODIFY `adv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_advocate`
--
ALTER TABLE `tbl_advocate`
  ADD CONSTRAINT `tbl_advocate_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`),
  ADD CONSTRAINT `tbl_advocate_ibfk_2` FOREIGN KEY (`law_id`) REFERENCES `lawyer` (`law_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
