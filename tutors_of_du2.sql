-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 10:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutors_of_du`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `username_course` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `course` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`username_course`, `username`, `course`) VALUES
('rakhi#General Science\r\n', 'rakhi', 'General Science\r\n'),
('rakhi#Geography\r\n', 'rakhi', 'Geography\r\n'),
('rakhi#ICT\r\n', 'rakhi', 'ICT\r\n'),
('rakhi#Mathematics\r\n', 'rakhi', 'Mathematics\r\n'),
('rakhi#Physics\r\n', 'rakhi', 'Physics\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_hash`
--

CREATE TABLE `user_hash` (
  `username` varchar(15) NOT NULL,
  `hash` varchar(35) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_hash`
--

INSERT INTO `user_hash` (`username`, `hash`, `active`) VALUES
('rakhi', '58e4d44e550d0f7ee0a23d6b02d9b0db', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `phone_privacy` tinyint(1) DEFAULT NULL,
  `department` varchar(100) NOT NULL,
  `biography` longtext,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `isAvailable` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`username`, `email`, `name`, `password`, `gender`, `phone`, `phone_privacy`, `department`, `biography`, `verified`, `isAvailable`) VALUES
('rakhi', 'mahzabinrakhi@gmail.com', 'Sharmin Mahzabin', 'd0731c9310cbaecab74160a728a052ca', 'Female', '', 0, 'Department of Computer Science and Engineering\r\n', 'Hello!', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_location`
--

CREATE TABLE `user_location` (
  `username_location` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_location`
--

INSERT INTO `user_location` (`username_location`, `username`, `location`) VALUES
('rakhi#Tejgaon Industrial Area\r\n', 'rakhi', 'Tejgaon Industrial Area\r\n'),
('rakhi#Turag\r\n', 'rakhi', 'Turag\r\n'),
('rakhi#Uttar Khan\r\n', 'rakhi', 'Uttar Khan\r\n'),
('rakhi#Uttara\r\n', 'rakhi', 'Uttara\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_salary`
--

CREATE TABLE `user_salary` (
  `username` varchar(15) NOT NULL,
  `salary` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_salary`
--

INSERT INTO `user_salary` (`username`, `salary`) VALUES
('rakhi', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`username_course`);

--
-- Indexes for table `user_hash`
--
ALTER TABLE `user_hash`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_location`
--
ALTER TABLE `user_location`
  ADD PRIMARY KEY (`username_location`);

--
-- Indexes for table `user_salary`
--
ALTER TABLE `user_salary`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
