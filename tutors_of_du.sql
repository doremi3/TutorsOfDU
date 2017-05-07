-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 09:23 PM
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
('deki#Array', 'deki', 'Array'),
('shizuka#Array', 'shizuka', '500'),
('testu#Array', 'testu', ''),
('vala#Acting', 'vala', 'Acting'),
('vala#Agricultural Studies\r\n', 'vala', 'Agricultural Studies\r\n'),
('vala#Arabic\r\n', 'vala', 'Arabic\r\n');

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
('deki', '30ef30b64204a3088a26bc2e6ecf7602', 1),
('maliha', 'f90f2aca5c640289d0a29417bcb63a37', 1),
('rakhi', '2421fcb1263b9530df88f7f002e78ea5', 0),
('shizuka', 'a64c94baaf368e1840a1324e839230de', 1),
('testu', 'c3c59e5f8b3e9753913f4d435b53c308', 1),
('vala', '9b72e31dac81715466cd580a448cf823', 1);

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
('angel', 'tahershah@angel.com', 'Taher shah', 'tanzir', 'Male', '', 0, 'Marketing', 'An angel with spectrum eyes :) ', 0, 1),
('barna', 'barna@habib.com', 'Barna Nasid Habib', 'barna', 'Female', '', 0, 'Computer Science And Engineering', 'hello!', 0, 1),
('deki', 'deki@zuki.com', 'dekizugi', 'deki', 'Male', '', 0, 'Department of Applied Chemistry & Chemical Engineering\r\n', '', 0, 1),
('jahid', 'jahid@hasan.com', 'Jahid Hasan', 'jahid', 'Male', '123456789', 1, 'Computer Science And Engineering', 'Hi , I am Jahid', 0, 1),
('mahir', 'mahir@gmail.com', 'Mahir Ashhab', 'mahir', 'Male', '', 0, 'Computer Science And Engineering', '', 0, 1),
('maliha', 'mahila@meb.com', 'Maliha Tashfia', 'maliha', 'Female', '', 0, 'Department of Computer Science and Engineering\r\n', '', 0, 1),
('pavel', 'pavel@pavel.com', 'Abir Mahmud Pavel', 'tanzir', 'Male', '', 0, 'Computer Science And Engineering', '', 0, 1),
('raisa', 'raisa@rm.com', 'Raisa Naser', 'raisa', 'Female', '01852808950', 0, 'Genetics', '', 0, 1),
('rakhi', 'mahzabinrakhi@gmail.com', 'Sharmin Mahzabin', 'doremi3', 'Female', '', 0, 'Computer Science And Engineering', '', 1, 1),
('ratri', 'roza@roga.com', 'Roza Tabassum', 'tanzir', 'Male', '', 0, 'Computer Science And Engineering', '', 0, 1),
('rmtonmoy', 'rmtonmoy232@gmail.com', 'Rezwan Mahmud', 'rmtonmoy', 'Male', '01852808950', 1, 'Computer Science And Engineering', '', 0, 1),
('roro', 'roro@teddy.com', 'roro bear', 'roro', 'Male', '01852808950', 0, 'Computer Science And Engineering', '', 0, 1),
('s.ruby', 'shirin@ruby.com', 'Shirin Akter', 'ruby', 'Female', '', 0, 'Genetics', '', 0, 1),
('shahreen', 'shahreen@salim.com', 'Shahreen Salim', 'salim', 'Female', '09876543243', 0, 'Computer Science And Engineering', 'B-)', 0, 1),
('shizuka', 'shizuka@nobi.com', 'Shizuka Minamoto', 'shizuka', 'Female', '', 0, 'Department of Bengali\r\n', 'lala', 0, 1),
('tanz', 'tanzir@pial.com', 'Tanzir Islam', 'tanzir', 'Male', '', 0, 'Computer Science And Engineering', '', 0, 1),
('testu', 'test@yacom', 'test test', 'mahir', 'Male', '', 0, 'Confucius Institute', '', 0, 1),
('vala', 'vala@na.com', 'valo na', 'mahir', 'Male', '', 0, 'Confucius Institute', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_location`
--

CREATE TABLE `user_location` (
  `username_location` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('deki', 0),
('shizuka', 500),
('testu', 0),
('vala', 0);

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
