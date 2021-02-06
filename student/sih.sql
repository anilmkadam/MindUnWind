-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 01:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `clgname` varchar(200) NOT NULL,
  `clgcode` varchar(50) NOT NULL,
  `std` varchar(50) NOT NULL,
  `clgaddr` varchar(500) NOT NULL,
  `prntcontact` varchar(20) NOT NULL,
  `prntemail` varchar(1000) NOT NULL,
  `resaddr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fname`, `mname`, `lname`, `email`, `password`, `phone`, `dob`, `age`, `gender`, `clgname`, `clgcode`, `std`, `clgaddr`, `prntcontact`, `prntemail`, `resaddr`) VALUES
(1, 'Anil', 'Manik', 'Kadam', 'anilkadam210@gmail.com', 'anilkadam', '9970053448', '18/04/1997', 20, 'male', 'walchand college of engineering sangli', 'wce', 'Third Year B.TECH', 'Vishrambag-Sangli,\r\nTal: Miraj,\r\nDist: Sangli,\r\nPin: 416 415', '9665319902', '', 'A/P: Shirdhon,\r\nTal: Kavathe Mahankal,\r\nDist: Sangli,\r\nPin: 416 419'),
(2, 'jeffy ', 'thomas', 'azhakathumannil', 'jeffythomas20@gmail.com', 'jeff123', '7038371809', '14/06/1997', 20, 'female', 'walchand college of engineering sangli', 'wce', '3rd year cse', 'vishrambagh, Sangli', '9049218566', 'dhairya@gmail.com', 'GTN Industries ltd, \r\nNagpur, Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `clgnames`
--

CREATE TABLE `clgnames` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `clgcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clgnames`
--

INSERT INTO `clgnames` (`id`, `name`, `clgcode`) VALUES
(1, 'walchand college of engineering sangli', 'wce'),
(2, 'walchand institute solapur', 'wis'),
(3, 'college of enginnering pune', 'coep'),
(4, 'college of enginnering aurangabad', 'coea'),
(5, 'college of enginnering amravati', 'coeam'),
(6, 'college of enginnering avsari', 'coeav');

-- --------------------------------------------------------

--
-- Table structure for table `moderator_account`
--

CREATE TABLE `moderator_account` (
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(75) NOT NULL,
  `institute_name` text NOT NULL,
  `institute_code` varchar(10) NOT NULL,
  `institute_email` varchar(50) NOT NULL,
  `institute_doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator_account`
--

INSERT INTO `moderator_account` (`email`, `password`, `name`, `institute_name`, `institute_code`, `institute_email`, `institute_doc`) VALUES
('anilkadam210@gmail.com', 'admin', 'admin', 'walchand college of engineering sangli', 'wce', 'a@ac.com', 'cs.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `spoj_login`
--

CREATE TABLE `spoj_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spoj_login`
--

INSERT INTO `spoj_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `umang_submission`
--

CREATE TABLE `umang_submission` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `institute_id` varchar(10) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umang_submission`
--

INSERT INTO `umang_submission` (`stud_id`, `stud_name`, `id`, `institute_id`, `descr`, `file_name`, `status`, `date`) VALUES
(2, 'Anil Manik Kadam', 13, 'wce', 'sdfg', '275cs.pdf', 'yes', '2018-03-30'),
(2, 'jeffy  thomas azhakathumannil', 16, 'wce', 'A web portal to support depressed and affected class students to overcome the situation and and nuture them socially.', '349cs.pdf', 'yes', '2018-03-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clgnames`
--
ALTER TABLE `clgnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderator_account`
--
ALTER TABLE `moderator_account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `umang_submission`
--
ALTER TABLE `umang_submission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clgnames`
--
ALTER TABLE `clgnames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `umang_submission`
--
ALTER TABLE `umang_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
