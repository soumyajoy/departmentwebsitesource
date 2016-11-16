-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2016 at 01:17 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `deptsite1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `adm_no` int(11) DEFAULT NULL,
  `sem` varchar(50) DEFAULT NULL,
  `month1` varchar(50) DEFAULT NULL,
  `month2` varchar(50) DEFAULT NULL,
  `month3` varchar(50) DEFAULT NULL,
  `month4` varchar(50) DEFAULT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `branch`, `year`, `adm_no`, `sem`, `month1`, `month2`, `month3`, `month4`, `total`) VALUES
(8, 'CA', '2013', 180, '2', '11|78', '0|67', '1|97', '2|68', 0),
(2, 'CE', '2014', 144, '2', '2|5', '2|5|5', '10|55', '9|55', 0),
(3, 'CA', '2013', 191, '5', '11|87', '11|87|68', '1|72', '2|76', 0),
(4, 'CA', '2013', 192, '1', '5|78', '6|89', '7|90', '8|87', 0),
(5, 'CA', '2013', 193, '2', '11|78', '0|79', '1|90', '2|86', 0),
(9, 'CA', '2013', 180, '3', '5|67', '6|65', '7|89', '8|90', 0),
(7, 'CA', '2013', 192, '2', '11|67', '0|90', '1|89', '2|67', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'sports'),
(2, 'ritu'),
(3, 'curricular'),
(11, 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `category`) VALUES
(7, 'Lighthouse.jpg', 'sports'),
(8, '20150225_102139.jpg', 'ritu'),
(9, '44.jpg', 'ritu'),
(10, 'Tulips.jpg', 'ritu'),
(11, 'Chrysanthemum.jpg', 'ritu'),
(12, '44.jpg', 'sss'),
(13, '13141_479037305497000_1090461031_n.jpg', 'sss'),
(14, 'Hydrangeas.jpg', 'aaa'),
(15, 'Koala.jpg', 'aaa'),
(16, 'Penguins.jpg', 'jjj'),
(17, 'Tulips.jpg', 'jjj'),
(18, '44.jpg', 'jjj'),
(19, '44.jpg', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `internal`
--

CREATE TABLE IF NOT EXISTS `internal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `adno` int(50) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `sub_1` int(4) DEFAULT NULL,
  `sub_2` int(4) DEFAULT NULL,
  `sub_3` int(4) DEFAULT NULL,
  `sub_4` int(4) DEFAULT NULL,
  `sub_5` int(4) DEFAULT NULL,
  `sub_6` int(4) DEFAULT NULL,
  `sub_7` int(4) DEFAULT NULL,
  `sbmark_1` int(4) DEFAULT NULL,
  `sbmark_2` int(4) DEFAULT NULL,
  `sbmark_3` int(4) DEFAULT NULL,
  `sbmark_4` int(4) DEFAULT NULL,
  `sbmark_5` int(4) DEFAULT NULL,
  `sbmark_6` int(4) DEFAULT NULL,
  `sbmark_7` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `internal`
--

INSERT INTO `internal` (`id`, `branch`, `year`, `adno`, `sem`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `sub_7`, `sbmark_1`, `sbmark_2`, `sbmark_3`, `sbmark_4`, `sbmark_5`, `sbmark_6`, `sbmark_7`) VALUES
(1, 'CA', '2013', 180, '1', 6, 7, 8, 9, 10, 11, 12, 20, 21, 18, 22, 21, 22, 24),
(2, 'CA', '2013', 139, '1', 6, 7, 8, 9, 10, 11, 12, 21, 22, 21, 24, 24, 22, 21),
(3, 'CA', '2013', 141, '2', 13, 14, 15, 16, 17, 18, 19, 21, 22, 23, 22, 21, 22, 2),
(4, 'CA', '2013', 136, '2', 13, 14, 15, 16, 17, 18, 19, 18, 19, 20, 21, 22, 23, 24),
(5, 'CA', '2013', 180, '6', 42, 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`, `status`) VALUES
(63, 'tomsypaul@gmail.com', 'dk#yBCw@', 'staff', 2),
(64, 'kumarcsathish@gmail.com', '28atWwgG', 'staff', 2),
(65, 'padmakumar@rit.ac.in', 'j!vftWEz', 'techstaff', 2),
(67, 'anjanasekhar99@gmail.com', 'G6NSK#IL', 'staff', 2),
(68, 'ppreetha_1001@yahoo.co.in', 'tr8MhTIx', 'techstaff', 2),
(70, 'admin@mca.rit.ac.in', 'abc', 'admin@mca.rit.ac.in', 2),
(83, 'sisirabose11@gmail.com', 'Ijn#3Z0m', 'staff', 2),
(93, 'josonjoy17@gmail.com', '35AK7@qM', 'staff', 2),
(94, 'santhoshms01@gmail.com', '87TE&i!%', 'staff', 1),
(95, 'josonjoy17@gmail.com', '5&FEApeY', 'staff', 1),
(96, 'gggggggkkkkk@hnj.com', 'brt2$9FV', 'staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_for` int(11) NOT NULL,
  `msg_title` varchar(50) NOT NULL,
  `msg_details` varchar(200) NOT NULL,
  `msg_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `msg_for`, `msg_title`, `msg_details`, `msg_date`) VALUES
(2, 5, 'Assignment Submission', 'All students must submit their linux assignment on or before next monday(05/09/2016). Topics are given below\r\n1. shell commands\r\n2. directory commands', '2016-09-03'),
(3, 4, 'Record submission', 'all students should submit their java record on or before next mondy.', '2016-09-05'),
(4, 1, 'record submission', 'All students should submit their C lab record on or before 10/09/2016. ', '2016-09-06'),
(5, 6, 'project review', 'waghscn', '2016-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `profile` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `tid`, `profile`) VALUES
(155, 63, 'profile/profile63tomsypaul@gmail.com.php'),
(156, 64, 'profile/profile64kumarcsathish@gmail.com.php'),
(157, 65, 'profile/profile65padmakumar@rit.ac.in.php'),
(158, 67, 'profile/profile67anjanasekhar99@gmail.com.php'),
(183, 93, 'profile/profile93josonjoy17@gmail.com.php');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `sname`, `pname`, `description`, `year`) VALUES
(5, 'soumya joy', 'website for mca department', '', '2013'),
(6, 'amala', 'smart park', '', '2013'),
(7, 'Anju Augustine', 'Android Law System', '', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `designation` varchar(50) NOT NULL,
  `course_studied` varchar(200) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `area_of_interest` varchar(200) NOT NULL,
  `training` varchar(100) NOT NULL,
  `papers_published` varchar(300) NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `profile_photo` varchar(100) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `gender`, `dob`, `designation`, `course_studied`, `experience`, `area_of_interest`, `training`, `papers_published`, `mobile_no`, `e_mail`, `profile_photo`, `loginid`) VALUES
(28, 'Tomsy paul', 'male', '1975-05-23', 'Assistant Professor', 'M tech in Computer & Information Science MG university(2000) , B tech in Computer Science & Engineering, Cusat(2009),', '10 years of teaching experience', 'Parallel Processing Languages (Research Area), Safe Contiki OS, Sudoku solving using Graph coloring, Algorithm Design - Backtracking & Branch and Bound, All areas of Computer Science!', 'Nill', '3', 9446917617, 'tomsypaul@gmail.com', 'Tomsysir_2.jpg', 63),
(29, 'Dr. C. Sathish Kumar', 'male', '1967-06-22', 'Professor & Head', 'Ph.D in Electrical & Electronics Engineering(Bharathiar University),M.Tech in Electrical Engineering with Control & Instrumentation(IIT Bombay),B.Tech in Electronics & Communication Engineering', '18 years of\r\nIndustrial Experience and 1 year 8 months of teaching experience', 'Biomedical Signal Processing, Applications of Soft Computing', 'Nill', '4', 9447637773, 'kumarcsathish@gmail.com', 'HOD_2.jpg', 64),
(30, 'Padmakumar P A', 'male', '1960-11-12', 'System Analyst', 'Msc in  Mathematics (kerala university-1987),\r\nPGDCA Computer Applications(state board-1989)', '25 Years of teaching experience', 'Linux Networking', 'Nill', 'Nill', 9447090995, 'padmakumar@rit.ac.in', 'padmakumarsir_2.jpg', 65),
(31, 'Anjana Sekhar', 'female', '1990-05-23', 'Assistant Professor (Adhoc)', 'B tech in Computer Science and Engineering (Cochin University of Science and Technology-2012),M.Tech in Communication and Network Technology(Mahathma Gandhi University-2014)', '4 months of teaching experience', 'java', 'Nill', 'Nill', 8289859682, 'anjanasekhar99@gmail.com', 'anjanamiss_2.jpg', 67),
(32, 'Preetha P', 'female', '1975-01-18', 'Trade Instructor', 'Bsc Mathematics (MG university-1991),\r\nDiploma in Computer Engineering(Technical Education-2009)', '9 years of teaching experience', 'Nill', 'Nill', 'Nill', 9496159731, 'ppreetha_1001@yahoo.co.in', 'preetha_2.jpg', 68),
(33, 'Sumi S Nair', 'female', '2011-03-30', 'Asst Prof', 'M.Tech.', '* in CET\r\n* In COE', 'Linguistics', 'Nil', 'Nil', 1234512345, 'josonjoy17@gmail.com', '13141_479037305497000_1090461031_n.jpg', 93);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_no` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `ad_no`, `email`, `pwd`) VALUES
(1, 0, '', ''),
(2, 235, 'dsfg@xcv.dxf', ''),
(3, 0, 'dfgbh@dfgh.dfh', ''),
(4, 333, 'eee', ''),
(5, 0, 'xcv', ''),
(6, 0, 'gsdgsdgsg', ''),
(7, 333, 'eee', ''),
(8, 11, 'eee', ''),
(9, 0, 'sdf@qwetder.gkhdfg', ''),
(10, 11, '111', ''),
(11, 0, 'dfgdfsdfg@sdfgfdg.sdfg', ''),
(12, 0, '', ''),
(13, 0, '', ''),
(14, 0, 'xcvb', ''),
(15, 0, '', ''),
(16, 0, 'xcv', ''),
(17, 222, 'ss@gmail.com', '123'),
(30, 192, 'sherin@gmail.com', 'sherin'),
(34, 191, 'athira@gmail.com', '191'),
(29, 193, 'soumyajoy19@gmail.com', '193'),
(35, 190, 'jes@gmail.com', '190'),
(36, 0, '', ''),
(37, 0, '', ''),
(32, 0, '', ''),
(33, 0, '', ''),
(38, 0, '', ''),
(39, 126, 'nitin@gmail.com', 'nitin'),
(40, 180, 'pramila@gmail.com', '180'),
(41, 136, 'akhil@gmail.com', 'sara');

-- --------------------------------------------------------

--
-- Table structure for table `student_sem`
--

CREATE TABLE IF NOT EXISTS `student_sem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sub_code` varchar(100) DEFAULT NULL,
  `sub_name` varchar(100) DEFAULT NULL,
  `sub_sem` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sid`, `sub_code`, `sub_name`, `sub_sem`) VALUES
(6, 'mca101', 'Mathematical Foundations of Computer Science', '1'),
(7, 'mca102', 'Digital Systems & Logic Design', '1'),
(8, 'mca103', 'Computer Organization & Architecture', '1'),
(9, 'mca104', ' Principles of Management & Accounting', '1'),
(10, 'mca105', 'Structured Programming in C', '1'),
(11, 'mca106', 'C Programming Lab', '1'),
(12, 'mca107', 'PC Hardware Lab', '1'),
(13, 'mca201', 'Probability and Statistics', '2'),
(14, 'mca202', 'Data Structures and Analysys of Computer Algorithms ', '2'),
(15, 'mca203', ' Microprocessors and Embedded Systems', '2'),
(16, 'mca204', 'Operating Systems', '2'),
(17, 'mca205', 'Object Oriented Programming with C++', '2'),
(18, 'mca206', 'C++ Lab', '2'),
(19, 'mca207', 'Data Structures LAB in C', '2'),
(20, 'mca301', 'Java and Web Programming', '3'),
(21, 'mca302', 'Software Engineering', '3'),
(22, 'mca303', 'System Software', '3'),
(23, 'mca304', 'Database Management Systems ', '3'),
(24, 'mca305', 'Data Communications', '3'),
(25, 'mca306', 'Java Programming LAB', '3'),
(26, 'mca307', 'DBMS Lab', '3'),
(27, 'mca401', 'OPERATIONS RESEARCH', '4'),
(28, 'mca402', 'COMPUTER NETWORKS ', '4'),
(29, 'mca403', 'LINUX AND SHELL PROGRAMMING ', '4'),
(30, 'mca404', 'OBJECT ORIENTED MODELING AND DESIGN', '4'),
(31, 'mca405', 'NEURAL NETWORKS AND FUZZY LOGIC ', '4'),
(32, 'mca406', 'Linux Lab ', '4'),
(33, 'mca407', 'Open Source Lab - Python', '4'),
(34, 'mca501', 'Computer Security', '5'),
(35, 'mca502', 'INTERNET TECHNOLOGY AND DISTRIBUTED APPLICATIONS ', '5'),
(36, 'mca503', 'COMPUTER GRAPHICS ', '5'),
(37, 'mca504', 'DATA MINING ', '5'),
(38, 'mca505', ' EMBEDDED SYSTEMS ', '5'),
(39, 'mca506', 'COMPUTER GRAPHICS Lab (using OpenGL)', '5'),
(40, 'mca507', 'MINI PROJECT', '5'),
(41, 'mca508', 'SEMINAR', '5'),
(42, 'mca601', 'MAIN PROJECT', '6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
