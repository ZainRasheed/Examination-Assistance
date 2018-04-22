-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 02:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ai_tea`
--

CREATE TABLE `ai_tea` (
  `user` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ai_tea`
--

INSERT INTO `ai_tea` (`user`, `name`, `pass`, `email`, `file`) VALUES
('CSE004', 'Jerry', '1234', 'jerry@presidencyuniversity.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `amos_tea`
--

CREATE TABLE `amos_tea` (
  `user` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amos_tea`
--

INSERT INTO `amos_tea` (`user`, `name`, `pass`, `email`, `file`) VALUES
('MEC002', 'ijkl', '1234', 'ijkl@presidencyuniversity.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `cd_tea`
--

CREATE TABLE `cd_tea` (
  `user` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd_tea`
--

INSERT INTO `cd_tea` (`user`, `name`, `pass`, `email`, `file`) VALUES
('CSE003', 'Dr. Mehala', '1234', 'mehala@presidencyuniversity.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse_ic`
--

CREATE TABLE `cse_ic` (
  `user` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse_ic`
--

INSERT INTO `cse_ic` (`user`, `name`, `pass`, `sub`, `email`, `file`) VALUES
('CSE001', 'Dr. Venkatesh', '1234', 'Artificial Intelligence', 'venkatesh@presidencyuniversity.in', ''),
('CSE002', 'Garima', '1234', 'Compiler Design', 'garima@presidencyuniversity.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse_sub`
--

CREATE TABLE `cse_sub` (
  `ccode` varchar(10) NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse_sub`
--

INSERT INTO `cse_sub` (`ccode`, `cname`) VALUES
('CSE217', 'Compiler Design'),
('CSE222', 'Artificial Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`name`) VALUES
('CSE'),
('MEC');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `user` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` text NOT NULL,
  `dept` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`user`, `name`, `pass`, `dept`, `email`, `file`) VALUES
('CSE01', 'Dr.Mohan', '1234', 'CSE', 'mohan@presidencyuniversity.in', ''),
('MEC01', 'Abc', '1234', 'MEE', 'abc@presidencyuniversity.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `mec_ic`
--

CREATE TABLE `mec_ic` (
  `user` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mec_ic`
--

INSERT INTO `mec_ic` (`user`, `name`, `pass`, `sub`, `email`, `file`) VALUES
('MEC001', 'Abcd', '1234', 'Mechanical Vibrations', 'abcd@presidencyuniversity.in', ''),
('MEC002', 'efgh', '1234', 'Advance Mechanics of Solids', 'efgh@presidencyuniversity.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `mec_sub`
--

CREATE TABLE `mec_sub` (
  `ccode` varchar(10) NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mec_sub`
--

INSERT INTO `mec_sub` (`ccode`, `cname`) VALUES
('MEC212', 'Mechanical Vibrations'),
('MEC218', 'Advanced Mechanics of Solids');

-- --------------------------------------------------------

--
-- Table structure for table `mv_tea`
--

CREATE TABLE `mv_tea` (
  `user` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mv_tea`
--

INSERT INTO `mv_tea` (`user`, `name`, `pass`, `email`, `file`) VALUES
('MEC004', 'lmno', '1234', 'lmno@presidencyuniversity.in', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `ai_tea`
--
ALTER TABLE `ai_tea`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `amos_tea`
--
ALTER TABLE `amos_tea`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `cd_tea`
--
ALTER TABLE `cd_tea`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `cse_ic`
--
ALTER TABLE `cse_ic`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `cse_sub`
--
ALTER TABLE `cse_sub`
  ADD PRIMARY KEY (`ccode`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `mec_ic`
--
ALTER TABLE `mec_ic`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `mec_sub`
--
ALTER TABLE `mec_sub`
  ADD PRIMARY KEY (`ccode`);

--
-- Indexes for table `mv_tea`
--
ALTER TABLE `mv_tea`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
