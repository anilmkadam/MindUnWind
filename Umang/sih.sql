-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 01:49 PM
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
(6, 'college of enginnering avsari', 'coeav'),
(7, 'JSS Acadamy of Technical Education, Noida', 'JSSN'),
(8, 'Indian Institute of Technology, Mumbai', 'IITB');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clgnames`
--
ALTER TABLE `clgnames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `umang_submission`
--
ALTER TABLE `umang_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
