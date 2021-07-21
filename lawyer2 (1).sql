-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 06:18 AM
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
-- Database: `lawyer2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `l_id`) VALUES
(2, 60),
(3, 67),
(4, 69),
(8, 79),
(9, 82);

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE `case_status` (
  `s_id` int(6) NOT NULL,
  `ldate` date DEFAULT NULL,
  `stage` varchar(100) DEFAULT NULL,
  `courtno` varchar(100) DEFAULT NULL,
  `ca_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`s_id`, `ldate`, `stage`, `courtno`, `ca_id`) VALUES
(11, '2020-02-11', 'grd', 'jkl', 17),
(12, '2020-02-04', 'ahmd', 'fxgd', 18),
(13, '2020-02-10', 'gnd', 'ccc', 19),
(14, '2020-05-11', 'odhav', 'ahmd', 20),
(15, '2020-02-12', 'Disposed', 'xyz', 21),
(16, '2020-02-18', 'nsjkw', 'district', 22);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `enrol` varchar(50) DEFAULT NULL,
  `msg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `phone`, `enrol`, `msg`) VALUES
(1, 'zinal', 'zinal@gmail.com', '9825953542', '1234', 'ekjfkje');

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
(27, 'aadhar card', 'nfded', '2024.pdf', 284983, 1, '2020-02-15', 16, 3),
(29, 'xyz', 'hshj', 'tom_jerry.jpg', 11475, 0, '2020-02-22', 31, 5),
(30, 'pan ', 'jdfkjr', '2024.pdf', 284983, 1, '2020-02-08', 16, 3),
(31, 'abc', 'ejfkjew', 'logo.png', 18111, 0, '2020-02-15', 32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(10) NOT NULL,
  `f_description` varchar(255) NOT NULL,
  `c_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_description`, `c_id`) VALUES
(4, 'ygvgft', 16),
(5, 'Nice lawyer ', 15);

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
(38, 'District Court', '2020-03-18', '2020-02-17', 'murder', 20),
(39, 'jjhgg', '2020-02-05', '2020-02-10', 'hfhgc', 20),
(40, 'abcd', '2020-02-06', '2020-02-28', 'Evidence', 21),
(41, 'abcd', '2020-02-14', '2020-02-29', 'Evidence', 20),
(42, 'District', '2020-02-07', '2020-02-06', 'Evidenc\r\n', 22),
(43, 'xyz', '2020-02-04', '2020-03-12', 'nmdnw', 22);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `law_id` int(20) NOT NULL,
  `log_in` varchar(50) NOT NULL,
  `l_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`law_id`, `log_in`, `l_id`) VALUES
(1, 'Offline', 43),
(2, 'Offline', 44),
(3, 'Offline', 55),
(4, 'Offline', 68),
(5, 'Offline', 42);

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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(30) DEFAULT NULL,
  `a_add` varchar(200) DEFAULT NULL,
  `a_gender` varchar(10) DEFAULT NULL,
  `a_img` varchar(50) DEFAULT NULL,
  `active` int(10) NOT NULL,
  `l_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_name`, `a_add`, `a_gender`, `a_img`, `active`, `l_id`, `admin_id`) VALUES
(2, 'hitesh', 'ahmedabad', 'male', 'photos/Default.png', 1, 60, 2),
(3, 'dipali', 'sjfdhjew', 'male', 'photos/Default.png', 0, 67, 3),
(4, 'dhruv', 'dmfnkje', 'male', 'photos/Default.png', 0, 69, 2),
(7, 'pqr', 'jckjfe', 'male', 'photos/Default.png', 0, 82, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advocate`
--

CREATE TABLE `tbl_advocate` (
  `adv_id` int(10) NOT NULL,
  `l_id` int(10) NOT NULL,
  `law_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(13, 'District Court', '45456', 'Challan Act', '2020-02-08', '3878743', '464565', '75', 'Bail Request', 'Respondent', 'kalupur , Ahmedabad', '101', 2018, 'jfkjdsnf kjdfkjdf', 40, 9, 1),
(15, 'High Court', '643874', 'Civil Appeal', '2020-02-15', '564565', '3487873', '51', 'Negligent act likely to spread infection of diseas', 'Respondent', '', '', 0, 'kdje kjr', 38, 11, 1),
(17, 'Other', '2312', 'Challan Act', '2020-02-01', '3878743', '487874', '75', 'Malignant act likely to spread infection of diseas', 'Respondent', '', '', 0, 'jdf jshdgeh', 55, 15, 1),
(18, 'Supreme Court', '45456', 'Application', '2019-12-24', '487874', '3487873', '51', 'Negligent act likely to spread infection of diseas', 'Petitioner', 'sabarmati ', '1489', 2017, ' sdjkerhe', 55, 14, 1),
(19, 'Supreme Court', '30001', 'Arbitrary Case', '2004-01-01', '789', '44', '125,66', 'arbitry', 'Petitioner', '', '', 0, 'ghj', 55, 13, 0),
(20, 'Suprem', '009', 'Application', '2020-02-05', '3456', '7765', '75', 'Appeal', 'Respondent', 'danger', '108', 2017, 'asdfg', 55, 16, 1),
(21, 'Supreme Court', '643874', 'Bail Application', '2020-02-29', '564561', '464565', '32', 'Bail Appeal', 'Petitioner', '', '', 0, 'djfkjfk', 55, 20, 0),
(22, 'District Court', '643812', 'Arbitrary Case', '2020-02-29', '487877', '3487878', '51', 'Disobedience to quarantine rule', 'Petitioner', '', '', 0, 'mdjwek', 42, 31, 1);

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
  `log_in` varchar(50) NOT NULL,
  `l_id` int(11) DEFAULT NULL,
  `law_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`c_id`, `name`, `address`, `gender`, `img`, `log_in`, `l_id`, `law_id`) VALUES
(6, 'lkj', 'lkj', 'male', 0x70686f746f732f6a6979612e6a7067, 'Offline', 48, 2),
(7, 'apatel1611', 'ap1611', 'male', 0x70686f746f732f6a6979612e6a7067, 'Offline', 49, 1),
(8, 'lk', 'lk', 'male', 0x70686f746f732f6a6979612e6a7067, 'Offline', 50, 1),
(9, 'zt', 'zt', 'female', 0x70686f746f732f6a6979612e6a7067, 'Offline', 51, 1),
(10, 'kk', '12', 'male', 0x70686f746f732f44656661756c742e706e67, 'Offline', 52, 1),
(11, 'harshil', 'harshil', 'male', 0x70686f746f732f656d706c6f7965655f69636f6e2e706e67, 'Offline', 53, 1),
(13, 'hiren', 'hiren123', 'male', 0x70686f746f732f656d706c6f7965655f69636f6e2e706e67, 'Offline', 56, 3),
(14, 'zomby', 'zomby', 'male', 0x70686f746f732f7736392e6a7067, 'Offline', 57, 3),
(15, 'abc', 'abc', 'male', 0x70686f746f732f7768312e6a7067, 'Offline', 58, 3),
(16, 'zeel thakkar1', 'zeel', 'female', 0x70686f746f732f746f6d5f6a657272792e6a7067, 'Offline', 61, 3),
(20, 'Mr shah', 'hhjed', 'male', 0x70686f746f732f44656661756c742e706e67, 'Offline', 66, 3),
(31, 'nishi', 'dsfbkje', 'female', 0x70686f746f732f44656661756c742e706e67, 'Offline', 75, 5),
(32, 'niki', 'nsjwdw', 'female', 0x70686f746f732f44656661756c742e706e67, 'Offline', 81, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(6) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
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
(40, 'manish@gmail.com', 992832846, 'manish', 1, 2, 1),
(41, 'xyz@gmail.com', 99999999, '123', 1, 2, 1),
(42, 'kabir@gmail.com', 2147483647, 'kabir', 1, 2, 1),
(43, 'pa@gmail.com', 7878675678, 'pa', 1, 2, 1),
(44, 'kp@gmail.com', 7867567898, 'kp', 1, 2, 1),
(48, 'lkj@gmail.com', 8987656789, 'lkj', 1, 3, 1),
(49, 'apatel1611@gmail.com', 9876567876, 'ap', 1, 3, 1),
(50, 'lk@gmail.com', 6787656789, 'lk', 1, 3, 1),
(51, 'zt@gmail.com', 7878987656, 'zt', 1, 3, 1),
(52, 'k@gmail.com', 7147483649, '12', 1, 3, 1),
(53, 'harshil@gmail.com', 9825953542, 'harshil', 1, 3, 1),
(55, 'zinal@gmail.com', 9426119272, 'zinal', 1, 2, 1),
(56, 'hirenroyal123@gmail.com', 9928328466, 'hiren', 1, 3, 1),
(57, 'zomby@gmail.com', 9825953546, 'zomby', 1, 3, 1),
(58, 'abc@gmail.com', 9825953549, 'abc', 1, 3, 1),
(60, 'hitesh@gmail.com', 8142562891, 'hitesh', 1, 1, 1),
(61, 'zeel@gmail.com', 7898765670, 'zeel', 1, 3, 1),
(66, 'shah@gmail.com', 9825953536, 'shah', 1, 3, 0),
(67, 'dipali@gmail.com', 9825953542, 'dipali', 1, 1, 1),
(68, 'rudra@gmail.com', 9825953584, 'rudra', 1, 2, 1),
(69, 'dhruv@gmail.com', 9825953508, 'dhruv', 1, 1, 1),
(75, 'nishi@gmail.com', 9825953594, 'nishi', 1, 3, 1),
(79, 'nirav@gmail.com', 9825953832, 'nirav', 1, 1, 0),
(81, 'niki@gmail.com', 9825953086, 'niki', 1, 3, 1),
(82, 'pqr@gmail.com', 9825953235, 'pqr', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opponent`
--

CREATE TABLE `tbl_opponent` (
  `opp_id` int(10) NOT NULL,
  `opp_name` varchar(20) NOT NULL,
  `opp_email` varchar(25) NOT NULL,
  `opp_phone_no` bigint(10) NOT NULL,
  `oadv_name` varchar(20) NOT NULL,
  `oadv_email` varchar(25) NOT NULL,
  `oadv_phone` bigint(10) NOT NULL,
  `c_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_opponent`
--

INSERT INTO `tbl_opponent` (`opp_id`, `opp_name`, `opp_email`, `opp_phone_no`, `oadv_name`, `oadv_email`, `oadv_phone`, `c_id`) VALUES
(6, 'kl', 'kl@gmail.com', 7856456782, 'kl1', 'kl1@gmail.com', 7806789052, 8),
(7, 'ap11', 'ap11@gmail.com', 6788776655, 'ap121', 'ap121@gmail.com', 6788986655, 7),
(8, 'Mr shah', 'shah@gmail.com', 9823456781, 'Mr patel', 'patel23@gmail.com', 9785654545, 11),
(9, 'manish', 'manish@gmail.com', 9823456781, 'xyz', 'xyz@gmail.com', 9785654545, 13),
(10, 'ssqq', 'ss@gmail.com', 9823456782, 'Preet ', 'preet@gmail.com', 9785654544, 14),
(11, 'pagal', 'pagal@gmail.com', 8877668985, 'boss1', 'boss@gmail.com', 7877889983, 16),
(12, 'manish', 'manish@gmail.com', 9823456783, 'Preet ', 'preet123@gmail.com', 9785654544, 20),
(13, 'nivan', 'nivan@gmail.com', 9823456787, 'nishan', 'nishan@gmail.com', 9785654545, 31),
(14, 'nishith', 'nishith@gmail.com', 9823456781, 'jdjsk', 'abcde@gmail.com', 9785654545, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `r_id` int(6) NOT NULL,
  `l_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `enrol` varchar(50) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`r_id`, `l_id`, `name`, `gender`, `address`, `enrol`, `img`) VALUES
(67, 38, 'kaumil', 'male', 'ahmedabad', '76445323', ''),
(69, 40, 'manish', 'male', 'ahmedabad', '73248734', ''),
(71, 42, 'kabir', 'male', 'yuio', '800', ''),
(72, 43, 'pa', 'male', 'pa', '605', ''),
(73, 44, 'kp', 'male', 'kp', '709', ''),
(74, 55, 'zinal', 'female', 'zinal\r\n', '9857892', 'photos/jiya.jpg'),
(77, 68, 'rudra', 'male', 'wqnkjer', '3845', '');

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
(9, '276', 'Sale of drug as a different dr', 'Whoever knowingly sells, or offers or\r\nexposes for sale, or issues from a dispensary for medicinal purposes, any drug or medical preparation, as a\r\ndifferent drug or medical preparation, shall be punished with imprisonment of either description for a\r\nterm which may extend to six months, or with fine which may extend to one thousand rupees, or with\r\nboth.'),
(10, '296', 'Disturbing religious assembly', 'Whoever voluntarily causes disturbance to any assembly\r\nlawfully engaged in the performance of religious worship, or religious ceremonies, shall be punished with\r\nimprisonment of either description for a term which may extend to one year, or with fine, or with both.');

-- --------------------------------------------------------

--
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(50) NOT NULL,
  `receiver_username` varchar(50) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_chat`
--

INSERT INTO `users_chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_content`, `msg_status`, `msg_date`) VALUES
(233, 'Zinal', 'Kaumil', 'hi', 'read', '2020-02-11 13:51:21'),
(234, 'Kaumil', 'Zinal', 'hello', 'read', '2020-02-24 11:31:04'),
(258, 'hiren', 'zomby', 'zomby', 'unread', '2020-02-26 06:34:19'),
(259, 'hiren', 'zomby', '1', 'unread', '2020-02-26 06:38:09'),
(260, 'hiren', 'zomby', '2', 'unread', '2020-02-26 06:38:15'),
(261, 'zinal', 'zinal', 'hii', 'read', '2020-02-26 07:45:23'),
(262, 'hiren', 'zeel pagal', 'hii', 'unread', '2020-02-26 07:45:59'),
(263, 'hiren', 'zeel pagal', 'ho', 'unread', '2020-02-26 07:47:29'),
(264, '', 'zeel pagal', 'hi', 'read', '2020-02-26 07:56:13'),
(265, 'hiren', 'zeel pagal', 'h', 'unread', '2020-02-26 07:58:10'),
(266, 'zinal', 'zeel pagal', 'hi', 'read', '2020-02-26 08:09:07'),
(267, 'zeel pagal', 'zinal', 'hi', 'read', '2020-02-26 08:13:24'),
(268, 'zinal', 'zeel pagal', 'bolo', 'read', '2020-02-26 09:50:12'),
(269, 'zinal', 'zeel pagal', 'kkkkk', 'read', '2020-02-27 03:55:53'),
(270, 'zinal', 'zeel pagal', 'hi', 'read', '2020-02-27 06:13:42'),
(271, 'zeel pagal', 'zinal', 'hjg', 'read', '2020-02-27 15:56:36'),
(272, 'zinal', 'niki', 'hiii', 'read', '2020-02-28 00:53:30'),
(273, 'niki', 'zinal', 'yeah hii', 'read', '2020-02-28 00:55:34'),
(274, 'zinal', 'hiren', 'hi', 'unread', '2020-02-28 06:53:33'),
(275, 'zinal', 'hiren', 'your case hearing is tomorrow', 'unread', '2020-02-28 06:55:03'),
(276, 'zinal', 'hiren', 'so be present', 'unread', '2020-02-28 06:55:18'),
(277, 'zinal', 'zeel thakkar1', 'hii', 'read', '2020-02-28 07:10:48'),
(278, 'zinal', 'zeel thakkar1', 'Your next hearing is tomorrow so be present on time ', 'read', '2020-02-28 07:11:14'),
(279, 'zeel thakkar1', 'zinal', 'ok ', 'read', '2020-02-28 07:13:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `case_status`
--
ALTER TABLE `case_status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `law_id` (`law_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `hearing`
--
ALTER TABLE `hearing`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`law_id`),
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `otp_tbl`
--
ALTER TABLE `otp_tbl`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_advocate`
--
ALTER TABLE `tbl_advocate`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `l_id` (`l_id`),
  ADD KEY `law_id` (`law_id`);

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `l_id` (`l_id`),
  ADD KEY `law_id` (`law_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_opponent`
--
ALTER TABLE `tbl_opponent`
  ADD PRIMARY KEY (`opp_id`),
  ADD KEY `c_id` (`c_id`);

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
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `s_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hearing`
--
ALTER TABLE `hearing`
  MODIFY `h_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `law_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `otp_tbl`
--
ALTER TABLE `otp_tbl`
  MODIFY `otp_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_advocate`
--
ALTER TABLE `tbl_advocate`
  MODIFY `adv_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `ca_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `c_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_opponent`
--
ALTER TABLE `tbl_opponent`
  MODIFY `opp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_rule`
--
ALTER TABLE `tbl_rule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_client` (`c_id`),
  ADD CONSTRAINT `document_ibfk_2` FOREIGN KEY (`law_id`) REFERENCES `lawyer` (`law_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_client` (`c_id`);

--
-- Constraints for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD CONSTRAINT `lawyer_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`);

--
-- Constraints for table `tbl_advocate`
--
ALTER TABLE `tbl_advocate`
  ADD CONSTRAINT `tbl_advocate_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`),
  ADD CONSTRAINT `tbl_advocate_ibfk_2` FOREIGN KEY (`law_id`) REFERENCES `lawyer` (`law_id`);

--
-- Constraints for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD CONSTRAINT `tbl_client_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`),
  ADD CONSTRAINT `tbl_client_ibfk_2` FOREIGN KEY (`law_id`) REFERENCES `lawyer` (`law_id`);

--
-- Constraints for table `tbl_opponent`
--
ALTER TABLE `tbl_opponent`
  ADD CONSTRAINT `tbl_opponent_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_client` (`c_id`);

--
-- Constraints for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD CONSTRAINT `tbl_register_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `tbl_login` (`l_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
