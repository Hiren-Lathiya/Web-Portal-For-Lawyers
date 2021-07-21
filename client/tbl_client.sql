-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 06:52 PM
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
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `c_id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(90) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `img` blob,
  `l_id` int(11) DEFAULT NULL,
  `law_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`c_id`, `name`, `address`, `gender`, `img`, `l_id`, `law_id`) VALUES
(5, '', '', '', 0x70686f746f732f44656661756c742e706e67, 47, 2),
(6, 'lkj', 'lkj', 'male', 0x70686f746f732f6a6979612e6a7067, 48, 2),
(7, 'apatel1611', 'ap1611', 'male', 0x70686f746f732f6a6979612e6a7067, 49, 1),
(8, 'lk', 'lk', 'male', 0x70686f746f732f6a6979612e6a7067, 50, 1),
(9, 'zt', 'zt', 'female', 0x70686f746f732f6a6979612e6a7067, 51, 1),
(10, 'kk', '12', 'male', 0x70686f746f732f44656661756c742e706e67, 52, 1),
(11, 'harshil', 'harshil', 'male', 0x70686f746f732f656d706c6f7965655f69636f6e2e706e67, 53, 1),
(13, 'hiren', 'hiren123', 'male', 0x70686f746f732f656d706c6f7965655f69636f6e2e706e67, 56, 3),
(14, 'zomby', 'zomby', 'male', 0x70686f746f732f7736392e6a7067, 57, 3),
(15, 'abc', 'abc', 'male', 0x70686f746f732f7768312e6a7067, 58, 3),
(16, 'zeel pagal', 'zeel', 'female', 0x70686f746f732f44656661756c742e706e67, 61, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `l_id` (`l_id`),
  ADD KEY `law_id` (`law_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `c_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD CONSTRAINT `tbl_client_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`),
  ADD CONSTRAINT `tbl_client_ibfk_2` FOREIGN KEY (`law_id`) REFERENCES `lawyer` (`law_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
