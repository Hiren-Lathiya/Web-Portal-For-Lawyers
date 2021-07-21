-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 06:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
-- Table structure for table `case_status`
--

CREATE TABLE `case_status` (
  `s_id` int(6) NOT NULL,
  `ldate` date DEFAULT NULL,
  `stage` varchar(100) DEFAULT NULL,
  `courtno` varchar(100) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`s_id`, `ldate`, `stage`, `courtno`, `c_id`) VALUES
(1, '2020-02-29', 'Evidence', 'abcd', 8),
(2, '2020-04-09', 'Procecution Evidence', 'xyz', 8),
(6, '2020-02-13', 'sdbsd', 'abcd', 8);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(6) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `doc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hearing`
--

INSERT INTO `hearing` (`h_id`, `courtno`, `bdate`, `hdate`, `purpose`, `c_id`) VALUES
(1, '734873 jdkfjdmfndc', '2020-01-01', '2020-01-03', 'sjjhe', 9),
(4, 'xyz', '2020-02-07', '2020-02-11', 'aaaaaaaa', 9),
(9, 'abcd', '2020-02-01', '2020-02-27', 'Defense Evidence', 12),
(10, 'abcd', '2020-02-01', '2020-02-02', 'qqqqqq', 9),
(11, 'kjdhd', '2020-02-01', '2020-02-10', 'tttaadd', 9),
(12, 'xyz', '2020-02-01', '2020-02-08', 'Client Evidence', 8),
(13, 'abcd', '2020-02-18', '2020-02-04', 'Opponent Evidence\r\n', 8);

-- --------------------------------------------------------

--
-- Table structure for table `otp_tbl`
--

CREATE TABLE `otp_tbl` (
  `otp_id` int(40) NOT NULL,
  `l_id` int(40) NOT NULL,
  `otp` int(40) NOT NULL,
  `otp_time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_tbl`
--

INSERT INTO `otp_tbl` (`otp_id`, `l_id`, `otp`, `otp_time`) VALUES
(18, 15, 517064, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `c_id` int(10) NOT NULL,
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
  `id` int(11) DEFAULT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_case`
--

INSERT INTO `tbl_case` (`c_id`, `court`, `cnr`, `casetype`, `filldate`, `regno`, `fillno`, `act`, `title`, `model`, `police`, `firno`, `year`, `casedesc`, `l_id`, `id`, `status`) VALUES
(8, 'District Court', '8476845', 'Civil Appeal', '2020-01-11', '3878743', '387473', '24,321,144', 'Appeal', 'Respondent', '', '', 0, 'kjfdekrkje sndjegrje', 38, 5, 1),
(9, 'Supreme Court', '643874', 'Arbitrary Case', '2019-10-02', '564565', '3487873', '234,55,134', 'Adulteration of food or drink intended for sale', 'Respondent', '', '', 0, 'aaaaaaa', 39, 8, 1),
(12, 'High Court', '643874', 'Application', '2020-01-03', '487874', '3487873', '325 , 21A', 'Adulteration of food or drink intended for sale', 'Petitioner', '', '', 0, 'wwwwwww', 39, 7, 1),
(13, 'District Court', '45456', 'Challan Act', '2020-02-08', '3878743', '464565', '75', 'Bail Request', 'Respondent', 'kalupur , Ahmedabad', '101', 2018, 'jfkjdsnf kjdfkjdf', 40, 9, 1),
(15, 'High Court', '643874', 'Civil Appeal', '2020-02-15', '564565', '3487873', '51', 'Negligent act likely to spread infection of diseas', 'Respondent', '', '', 0, 'kdje kjr', 38, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(10) NOT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_phone` int(20) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `o_name` varchar(30) DEFAULT NULL,
  `o_phone` int(20) DEFAULT NULL,
  `o_email` varchar(50) DEFAULT NULL,
  `oadv_name` varchar(30) DEFAULT NULL,
  `oadv_phone` int(20) DEFAULT NULL,
  `oadv_email` varchar(50) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `c_name`, `c_phone`, `c_email`, `o_name`, `o_phone`, `o_email`, `oadv_name`, `oadv_phone`, `oadv_email`, `l_id`) VALUES
(1, 'hiren', 9485985, 'hiren@gmail.com', 'xyz', 984543853, 'xyz@gmail.com', 'abc', 374732, 'b@gmail.com', NULL),
(2, 'kaumil', 975675745, 'kaumil@gmail.com', 'pqr', 9564564, 'pqr@gmail.com', 'lmn', 2147483647, 'lmn@gmail.com', NULL),
(3, 'hiren', 9485985, 'hiren@gmail.com', 'xyz', 984543853, 'xyz@gmail.com', 'abc', 374732, 'b@gmail.com', NULL),
(4, 'hiren', 9485985, 'hiren@gmail.com', 'pqr', 984543853, 'pqr@gmail.com', 'abc', 2147483647, 'b@gmail.com', NULL),
(5, 'harshil', 975675745, 'harshil@gmail.com', 'pqr', 984543853, 'pqr@gmail.com', 'abc', 2147483647, 'b@gmail.com', 38),
(7, 'Mr parekh', 975675745, 'parekh@gmail.com', 'Mr Mehta', 984543853, 'mehta@gmail.com', 'Mr patel', 2147483647, 'patel@gmail.com', 39),
(8, 'hiren', 975675745, 'hiren@gmail.com', 'xyz', 984543853, 'xyz@gmail.com', 'abc', 2147483647, 'b@gmail.com', 39),
(9, 'meet', 9485985, 'meet@gmail.com', 'harshil', 9564564, 'harshil@gmail.com', 'Mr patel', 2147483647, 'patel@gmail.com', 40),
(11, 'Mr shah', 975675745, 'shah@gmail.com', 'Dinesh', 984543853, 'dinesh@gmail.com', 'Preet ', 2147483647, 'P@gmail.com', 38);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(6) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `active` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `email`, `phone`, `pass`, `status`, `type`, `active`) VALUES
(38, 'kaumil@gmail.com', 992832846, 'kaumil', 1, 2, 1),
(39, 'zinal@gmail.com', 992832846, 'zinal', 1, 2, 1),
(40, 'manish@gmail.com', 992832846, 'manish', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `r_id` int(6) NOT NULL,
  `l_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `enrol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`r_id`, `l_id`, `name`, `dob`, `gender`, `address`, `enrol`) VALUES
(67, 38, 'kaumil', '2020-01-10', 'on', 'ahmedabad', '76445323'),
(68, 39, 'zinal', '2020-01-02', 'on', 'Ahmedabad', '73248734'),
(69, 40, 'manish', '2020-02-08', 'on', 'ahmedabad', '73248734');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rule`
--

CREATE TABLE `tbl_rule` (
  `id` int(10) NOT NULL,
  `s_no` varchar(30) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `s_desc` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rule`
--

INSERT INTO `tbl_rule` (`id`, `s_no`, `title`, `s_desc`) VALUES
(1, '272', 'Adulteration of food or drink ', 'Whoever adulterates any article of food or\r\ndrink, so as to make such article noxious as food or drink, intending to sell such article as food or drink,\r\nor knowing it to be likely that the same will be sold as food or drink, shall be punished with imprisonment\r\nof either description for a term which may extend to six months, or with fine which may extend to one\r\nthousand rupees, or with both.'),
(2, '271', 'Disobedience to quarantine rul', 'Whoever knowingly disobeys any rule made and\r\npromulgated 2[by the 3*** Government 4***] for putting any vessel into a state of quarantine, or for\r\nregulating the intercourse of vessels in a state of quarantine with the shore or with other vessels, for\r\nregulating the intercourse between places where an infectious disease prevails and other places, shall be\r\npunished with imprisonment of either description for a term which may extend to six months, or with\r\nfine, or with both.'),
(3, '268', 'Public nuisance', 'A person is guilty of a public nuisance who does any act or is guilty of an\r\nillegal omission which causes any common injury, danger or annoyance to the public or to the people in\r\ngeneral who dwell or occupy property in the vicinity, or which must necessarily cause injury, obstruction,\r\ndanger or annoyance to persons who may have occasion to use any public right.\r\n'),
(4, '269', 'Negligent act likely to spread', 'Whoever unlawfully or\r\nnegligently does any act which is, and which he knows or has reason to believe to be, likely to spread the\r\ninfection of any disease dangerous to life, shall be punished with imprisonment of either description for a\r\nterm which may extend to six months, or with fine, or with both.'),
(5, '270', 'Malignant act likely to spread', 'Whoever malignantly\r\ndoes any act which is, and which he knows or has reason the believe to be, likely to spread the infection\r\nof any disease dangerous to life, shall be punished with imprisonment of either description for a term\r\nwhich may extend to two years, or with fine, or with both.'),
(6, '273', 'Sale of noxious food or drink', 'Whoever sells, or offers or exposes for sale, as food or drink,\r\nany article which has been rendered or has become noxious, or is in a state unfit for food or drink,\r\nknowing or having reason to believe that the same is noxious as food or drink, shall be punished with\r\nimprisonment of either description for a term which may extend to six months, or with fine which may\r\nextend to one thousand rupees, or with both.'),
(7, '364', 'Kidnapping or abducting in ord', 'Whoever kidnaps or abducts any person in\r\norder that such person may be murdered or may be so disposed of as to be put in danger of being\r\nmurdered, shall be punished with 3[imprisonment for life] or rigorous imprisonment for a term which may\r\nextend to ten years, and shall also be liable to fine.'),
(8, '274', 'Adulteration of drugs', 'Whoever adulterates any drug or medical preparation in such a manner\r\nas to lessen the efficacy or change the operation of such drug or medical preparation, or to make it\r\nnoxious, intending that it shall be sold or used for, or knowing it to be likely that it will be sold or used\r\nfor, any medicinal purpose, as if it had not undergone such adulteration, shall be punished with\r\nimprisonment of either description for a term which may extend to six months, or with fine which may\r\nextend to one tho'),
(9, '276', 'Sale of drug as a different dr', 'Whoever knowingly sells, or offers or\r\nexposes for sale, or issues from a dispensary for medicinal purposes, any drug or medical preparation, as a\r\ndifferent drug or medical preparation, shall be punished with imprisonment of either description for a\r\nterm which may extend to six months, or with fine which may extend to one thousand rupees, or with\r\nboth.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_status`
--
ALTER TABLE `case_status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hearing`
--
ALTER TABLE `hearing`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `otp_tbl`
--
ALTER TABLE `otp_tbl`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `s_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hearing`
--
ALTER TABLE `hearing`
  MODIFY `h_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `otp_tbl`
--
ALTER TABLE `otp_tbl`
  MODIFY `otp_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD CONSTRAINT `tbl_register_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
