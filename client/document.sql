-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 06:51 PM
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
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(6) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `doc` varchar(50) NOT NULL,
  `size` int(22) NOT NULL,
  `download` int(11) NOT NULL,
  `upload_date` date NOT NULL,
  `c_id` int(20) NOT NULL,
  `law_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `title`, `description`, `doc`, `size`, `download`, `upload_date`, `c_id`, `law_id`) VALUES
(2, 'Appeal', 'appwal', 'photos/hetvi-chart.jpg', 0, 0, '2020-01-19', 13, 3),
(3, 'arbitry', 'arbitry12', 'photos/hetvi-chart.jpg', 0, 0, '2020-03-19', 13, 3),
(4, 'Appeal1', 'appeal2', 'photos/hetvi-chart.jpg', 0, 0, '2020-02-21', 15, 3),
(11, 'iiiiiiiiiii', 'jbkjb', '2024.pdf', 284983, 0, '2020-02-19', 16, 3),
(16, 'sukan', 'sukan', '2024.pdf', 284983, 0, '2001-01-01', 16, 3),
(17, 'su', 'su', '2024.pdf', 284983, 1, '2014-06-06', 16, 3),
(18, 'kkk', 'kkkkk', '2024.pdf', 284983, 4, '2014-03-31', 16, 3),
(19, 'xyz', 'jskje', '2024.pdf', 284983, 2, '2020-02-22', 16, 3),
(20, 'sukan11', 'sukan11', 'ws_on_arduino1_thumb.jpg', 240990, 2, '2001-11-22', 16, 3),
(21, 'finally', 'finally', 'Default.png', 27445, 6, '2020-02-15', 16, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `law_id` (`law_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_client` (`c_id`),
  ADD CONSTRAINT `document_ibfk_2` FOREIGN KEY (`law_id`) REFERENCES `lawyer` (`law_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
