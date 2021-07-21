-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 06:55 PM
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
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `ca_id` int(10) NOT NULL,
  `court` varchar(30) DEFAULT NULL,
  `cnr` varchar(30) DEFAULT NULL,
  `casetype` varchar(50) DEFAULT NULL,
  `filldate` date DEFAULT NULL,
  `regno` varchar(30) DEFAULT NULL,
  `fillno` varchar(30) DEFAULT NULL,
  `act` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `police` varchar(100) NOT NULL,
  `firno` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `casedesc` varchar(500) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_case`
--

INSERT INTO `tbl_case` (`ca_id`, `court`, `cnr`, `casetype`, `filldate`, `regno`, `fillno`, `act`, `title`, `model`, `police`, `firno`, `year`, `casedesc`, `l_id`, `c_id`, `status`) VALUES
(8, 'District Court', '8476845', 'Civil Appeal', '2020-01-11', '3878743', '387473', '24,321,144', 'Appeal', 'Respondent', '', '', 0, 'kjfdekrkje sndjegrje', 38, 5, 1),
(9, 'Supreme Court', '643874', 'Arbitrary Case', '2019-10-02', '564565', '3487873', '234,55,134', 'Adulteration of food or drink intended for sale', 'Respondent', '', '', 0, 'aaaaaaa', 39, 8, 1),
(12, 'High Court', '643874', 'Application', '2020-01-03', '487874', '3487873', '325,21A', 'Adulteration of food or drink intended for sale', 'Petitioner', '', '', 0, 'wwwwwww', 39, 7, 1),
(13, 'District Court', '45456', 'Challan Act', '2020-02-08', '3878743', '464565', '75', 'Bail Request', 'Respondent', 'kalupur , Ahmedabad', '101', 2018, 'jfkjdsnf kjdfkjdf', 40, 9, 1),
(15, 'High Court', '643874', 'Civil Appeal', '2020-02-15', '564565', '3487873', '51', 'Negligent act likely to spread infection of diseas', 'Respondent', '', '', 0, 'kdje kjr', 38, 11, 1),
(17, 'Other', '2312', 'Challan Act', '2020-02-01', '3878743', '487874', '75', 'Malignant act likely to spread infection of diseas', 'Respondent', '', '', 0, 'jdf jshdgeh', 55, 15, 1),
(18, 'Supreme Court', '45456', 'Application', '2019-12-24', '487874', '3487873', '51', 'Negligent act likely to spread infection of diseas', 'Petitioner', 'sabarmati ', '1489', 2017, ' sdjkerhe', 55, 14, 1),
(19, 'Supreme Court', '30001', 'Arbitrary Case', '2004-01-01', '789', '44', '125,66', 'arbitry', 'Petitioner', '', '', 2017, 'ghj', 55, 13, 1),
(20, 'Supreme Court', '007', 'Application', '2020-02-05', '3456', '7765', '70', 'Appeal', 'Respondent', 'danger', '108', 2017, 'asdfg', 55, 16, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`ca_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `ca_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
