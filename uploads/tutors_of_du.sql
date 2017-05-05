-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 09:23 PM
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
('maliha', 'f90f2aca5c640289d0a29417bcb63a37', 1),
('rakhi', '2421fcb1263b9530df88f7f002e78ea5', 0);

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
('tanz', 'tanzir@pial.com', 'Tanzir Islam', 'tanzir', 'Male', '', 0, 'Computer Science And Engineering', '', 0, 1);

--
-- Indexes for dumped tables
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
