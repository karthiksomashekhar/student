-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 03:24 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(200) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `password`) VALUES
('asdf', 'asdf@sadf', '312'),
('asdf', 'kolkar.arshad@gmail.com', 'asdf'),
('asdfsd', 'sdf@asdfsf', '2313'),
('asdf', 'asdf@ggg', 'asdf'),
('aaaaaaaaaa', 'aaa@dsfg', '123'),
('Arshad k', 'asdf@asdf', 'f123'),
('arshad', 'asdf@hhh', 'asdf'),
('asdfee', 'asdf@tttt', 'asdf'),
('Mohammed Arshad k', 'kolkar.arshad@gmail.com', 'sdf'),
('asdf', 'kolkar.arshad@gmail.com', 'fdfdf'),
('asf', 'kolkar.arshad@gmail.com', '123'),
('asdf', 'kolkar.arshad@gmail.com', '456456'),
('asdf', 'maktravel007@gmail.com', '23333333'),
('bbbbbbb', 'bbbbbbb@fffffff', 'ff4444'),
('df', 'kolkar.arshad@gmail.com', 'f1122212121'),
('sdfg', 'sdfgdfg@dfg', '88998989'),
('Mohammed Arshad k', 'kolkar.arshad@gmail.com', '617796'),
('Mohammed Arshad k', 'kolkar.arshad@gmail.com', '617796'),
('kk', 'argie@cxcxc', '00121200'),
('klasjf', 'alkjf@laksf', 'lsdjfiieieieiei'),
('Vamshi', 'alkjf@laksf', 'sdsadf'),
('hhh', 'hh', '89887777777'),
('Arshad', 'adrrii@kkdij', '35555987774'),
('adkl', 'lasdf@kdkdi', '89788ddd'),
('asdf', 'asdf@gmail', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `marks_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `usn` varchar(30) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `sub1` varchar(30) DEFAULT NULL,
  `sub2` varchar(30) DEFAULT NULL,
  `sub3` varchar(30) DEFAULT NULL,
  `sub4` varchar(30) DEFAULT NULL,
  `sub5` varchar(30) DEFAULT NULL,
  `sub6` varchar(30) DEFAULT NULL,
  `sub7` varchar(30) DEFAULT NULL,
  `sub8` varchar(30) DEFAULT NULL,
  `marks1` varchar(30) DEFAULT NULL,
  `marks2` varchar(30) DEFAULT NULL,
  `marks3` varchar(30) DEFAULT NULL,
  `marks4` varchar(30) DEFAULT NULL,
  `marks5` varchar(30) DEFAULT NULL,
  `marks6` varchar(30) DEFAULT NULL,
  `marks7` varchar(30) DEFAULT NULL,
  `marks8` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`marks_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `name`, `usn`, `semester`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `marks1`, `marks2`, `marks3`, `marks4`, `marks5`, `marks6`, `marks7`, `marks8`) VALUES
(1, 'sonu', '123456', '1', 'Sub1', 'Sub2', 'Sub3', 'Sub4', 'Sub5', 'Sub6', 'Sub7', 'Sub8', '10', '20', '30', '40', '50', '60', '70', '80'),
(2, 'sonu', '123456', '6', 'Sub1', 'Sub2', 'Sub3', 'Sub4', 'Sub5', 'Sub6', 'Sub7', 'Sub8', '10', '', '', '', '', '', '', ''),
(3, 'sonu', 'ccc', '2', 'Sub1', 'Sub2', 'Sub3', 'Sub4', 'Sub5', 'Sub6', 'Sub7', 'Sub8', '355', '45', '44', '33', '66', '66', '66', '66'),
(4, 'Arshad', '3vc14mca07', '4', 'Sub1', 'Sub2', 'Sub3', 'Sub4', 'sub5', 'Sub6', 'Sub7', 'Sub8', '56', '58', '59', '60', '62', '68', '80', '90'),
(5, 'Arshad', '3vc14mca07', '1', 'Problem Solving Using C', 'Discrete Mathematics Structure', 'Fundamental of computer orgina', 'Introduction to Unix', 'Introduction to Web Technologi', 'C Programming Laboratory', 'Unix Programming Laboratory', 'Web Programming Laboratory', '80', '80', '80', '80', '80', '80', '80', '80'),
(6, 'Arshad', '3vc14mca07', '1', '13MCA11', '13MCA12', '13MCA13', '13MCA14', '13MCA15', '13MCA16', '13MCA17', '13MCA18', '90', '90', '90', '90', '90', '90', '90', '90'),
(7, 'Arshad', '3vc14mca07', '1', '13MCA11', '13MCA12', '13MCA13', '13MCA14', '13MCA15', '13MCA16', '13MCA17', '13MCA18', '80', '58', '80', '80', '90', '68', '80', '90'),
(8, 'A', '3vc14mca07', '1', '13MCA11', '13MCA12', '13MCA13', '13MCA14', '13MCA15', '13MCA16', '13MCA17', '13MCA18', '80', '58', '80', '80', '62', '68', '80', '90');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) DEFAULT NULL,
  `student_pwd` varchar(50) DEFAULT NULL,
  `usn` varchar(50) DEFAULT NULL,
  `mobile` mediumtext,
  `email_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_pwd`, `usn`, `mobile`, `email_id`) VALUES
(1, 'sonu', 'sonu', '123456', '9916255509', 'sonu@gmail.com'),
(2, 'sonu', '332', 'ccc', '9699', 'cc@dd'),
(3, 'Arshad', '1234', '3vc14mca07', '8553184586', 'kolkar.arshad@gmail.com'),
(4, 'Nazim shaik kolkar', '617796', '3vc13me055', '8762095097', 'maktravel007@gmail.com'),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentd`
--

CREATE TABLE IF NOT EXISTS `studentd` (
  `name` varchar(15) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `phno` int(10) NOT NULL,
  PRIMARY KEY (`phno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentd`
--

INSERT INTO `studentd` (`name`, `usn`, `sem`, `phno`) VALUES
('Mohammed Arshad', 'eee', 'sem1', 0),
('monsters', 'mkdo', 'sem1', 1),
('Mohammed Arshad', 'asdf', 'sem2', 3),
('Mohammed Arshad', '3vc13me055', 'sem2', 8),
('dfdf', 'ffe', 'sem2', 66),
('asdf', 'asdf', 'sem1', 4568),
('lll', 'kkk', 'sem1', 5555),
('asdf', '3vc13me055', 'sem1', 8566),
('asdf', 'sdf', 'sem6', 95097),
('asf', '65', 'sem3', 325598),
('asdf', 'asdf', 'sem4', 12345678),
('asdf', 'dtytyt', 'sem1', 464600000),
('Arshad', 'kkkkk', 'sem1', 996540000),
('Mohammed Arshad', '3vc14mca07', 'sem3', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(30) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(30) NOT NULL,
  `semister` varchar(30) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `semister`) VALUES
(1, 'ADA', '4'),
(2, 'AJAVA', '4'),
(3, 'AWEB', '4'),
(4, 'ERP', '4'),
(5, 'DM&DW', '4'),
(6, 'algorithm_lab', '4'),
(7, 'ajavalab', '4'),
(8, 'awplab', '4'),
(9, '', ''),
(10, 'c', '1'),
(11, 'fco', '1'),
(12, 'web', '1'),
(13, 'dms', '1'),
(14, 'unix', '1'),
(15, 'unixlab', '1'),
(16, 'weblab', '1'),
(17, 'c_lab', '1'),
(18, 'os', '2'),
(19, 'cpp', '2'),
(20, 'dbms', '2'),
(21, 'sp', '2'),
(22, 'dsc', '2'),
(23, 'dbms_lab', '2'),
(24, 'dsc_lab', '2'),
(25, 'cpp_lab', '2'),
(26, 'mis', '3'),
(27, 'se', '3'),
(28, 'cg', '3'),
(29, 'java', '3'),
(30, 'cn', '3'),
(31, 'cn_lab', '3'),
(32, 'cg_lab', '3'),
(33, 'java_lab', '3'),
(34, 'project', '6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
