-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 01:55 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `adhar` varchar(50) NOT NULL,
  `clgname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `mobile`, `email`, `year`, `gender`, `address`, `password`, `cpassword`, `adhar`, `clgname`, `category`, `status`) VALUES
(1, 'SUSHANT RAUT', '8600936313', 'RAUT5353@GMAIL.COM', 'BCA III', 'male', 'plot no 1', '123', '123', '', '', '', 1),
(2, 'Sarvadanya gabhe', '8987456525', 'sar@gmail.com', 'BCA III', 'male', 'sai nagar', '123', '123', '', '', '', 0),
(3, 'Varun Tawari', '8485878986', 'vt@gmail.com', 'BCA III', 'male', 'Namuna gali', '123', '123', '12354567744', '', 'Open', 1),
(5, 'Pranav Dhabarde', '9130826494', 'pranav@gmail.com', 'BCA III', 'male', 'Sai Nagar Amravati', '123', '123', '124545541212', 'HVPM', 'SC', 1),
(6, 'Nitesh Khasabage', '9855554545', 'nits@gmail.com', 'BCA III', 'male', 'Rajapeth', '132', '', '', '', 'OBC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(100) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `subyear` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `subyear`, `status`) VALUES
(1, 'Data Structures', 'BCA II', 1),
(2, 'OS', 'BCA II', 1),
(3, 'Mobile Computing', 'BCA III', 1),
(4, 'DBMS', 'BCA I', 1),
(5, 'VB.Net', 'BCA II', 1),
(6, 'SADMIS', 'BCA II', 1),
(7, 'C Language', 'BCA I', 1),
(8, 'CF&OS', 'BCA I', 1),
(9, 'ASP.Net', 'BCA III', 1),
(10, 'CGMA', 'BCA III', 1),
(11, 'Digital Tehnique', 'BCA I', 1),
(12, 'DCN', 'BCA I', 1),
(13, 'C++', 'BCA II', 1),
(14, '3', '', 1),
(15, '3', '', 1),
(16, '7', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `educ` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `aptnature` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherid`, `name`, `educ`, `address`, `gender`, `contact`, `email`, `designation`, `experience`, `aptnature`, `status`) VALUES
(1, 'Amarpal Chavan ', 'MCA', 'Arjun Nagar', 'male', '8600936313', 'amar@gmail.com', 'Assistant Professor', '5', 'ADHOC', 1),
(2, 'Jai Kale', 'MCA', 'Sai Nagar', 'male', '8983444382', 'jai@gmail.com', 'Assistant Professor', '5', 'ADHOC', 1),
(3, 'Sachin Tendulkar', 'MCA', 'mumbai', 'male', '8600936313', 'sach@gmail.com', '123', '5', 'Regular', 1),
(4, 'Sushant Raut', 'MCA', 'sawta colony', 'male', '8600936313', 'raut5353@gmail.com', 'Ass Prof', '5', 'Regular', 1),
(5, 'Kapil', 'PHD', 'panalal nagar', 'male', '8987746855', 'kap@gmail.com', '123', '2', 'Regular', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
