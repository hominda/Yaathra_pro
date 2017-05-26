-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 05:15 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin` (
    `id` int(250) NOT NULL,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `age` int(150) NOT NULL,
    `city` varchar(100) NOT NULL,
    `mobile_no` int(10) NOT NULL,
    `nic` varchar(10) NOT NULL,
    `uname` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `age`, `city`, `mobile_no`, `nic`, `uname`,  `email`, `pass`) VALUES
(1, 'hominda', 'marasinghe', 23, 'kurunagala', 719862492, '931234698V', 'homi', 'admin@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
    `id` int(250) NOT NULL,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `age` int(150) NOT NULL,
    `city` varchar(100) NOT NULL,
    `mobile_no` int(10) NOT NULL,
    `nic` varchar(10) NOT NULL,
    `uname` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_tbl`
--

INSERT INTO `prof` (`id`, `first_name`, `last_name`, `age`, `city`, `mobile_no`, `nic`, `uname`, `email`, `pass`) VALUES
(1, 'Praneeth', 'Perera', 23, 'Ja-ela', 719862492, '931234698V', 'paniya', 'pro@gmail.com', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student` (
    `id` int(250) NOT NULL,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `age` int(150) NOT NULL,
    `city` varchar(100) NOT NULL,
    `mobile_no` int(10) NOT NULL,
    `nic` varchar(10) NOT NULL,
    `uname` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `age`, `city`, `mobile_no`, `nic`, `uname`, `email`, `pass`) VALUES
(1, 'ravi', 'kule', 23, 'colombo', 0711234567, '931234567V', 'test', 't@gmail.com', 'test'),
(2, 'Lahiru', 'Kulatunga', 24, 'mathugama', 719872492, '931234698V', 'laiya', 'student@gmail.com', 's');

-- --------------------------------------------------------

--
-- Table structure for table `Answers`
--

CREATE TABLE `answers` (
    `id` int(250) NOT NULL,
    `answer` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_tbl`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--

-- Indexes for table `Answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_tbl`
--
ALTER TABLE `prof`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--

--
ALTER TABLE `answers`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher_tbl`
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
