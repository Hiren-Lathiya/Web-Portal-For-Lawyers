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
-- Table structure for table `hearing`
--

CREATE TABLE `hearing` (
  `h_id` int(10) NOT NULL,
  `courtno` varchar(50) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `hdate` date DEFAULT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `ca_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hearing`
--

INSERT INTO `hearing` (`h_id`, `courtno`, `bdate`, `hdate`, `purpose`, `ca_id`) VALUES
(1, '734873 jdkfjdmfndc', '2020-01-01', '2020-01-03', 'sjjhe', 9),
(29, 'ghjk', '2020-05-05', '0000-00-00', 'kkkkkk', 17),
(32, 'qqqqq', '2020-03-11', '2020-02-12', 'kkkk11', 0),
(33, 'fxgd', '2020-02-17', '2020-02-19', 'gggg', 0),
(34, 'uyth', '2020-02-05', '2020-02-15', 'jjjjjj', 0),
(35, 'xyz', '2020-02-01', '2020-02-12', 'Evidence', 0),
(36, 'xyz', '2020-02-15', '2020-02-14', 'Evidence', 17),
(37, 'abcd', '2020-02-15', '2020-02-27', 'hdgfuewrgee', 17),
(38, 'gundo', '2020-03-18', '2020-02-17', 'murder12', 20),
(39, 'jjhgg', '2020-02-05', '2020-02-10', 'hfhgc', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hearing`
--
ALTER TABLE `hearing`
  ADD PRIMARY KEY (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hearing`
--
ALTER TABLE `hearing`
  MODIFY `h_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
