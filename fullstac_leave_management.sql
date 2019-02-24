-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2018 at 01:22 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstac_leave_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'leave@2018');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(10) NOT NULL,
  `perid` varchar(10) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `department` text NOT NULL,
  `mobileno` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `perid`, `fullname`, `email`, `password`, `gender`, `department`, `mobileno`) VALUES
('1', '51600', 'Dr B.D.DEEBAK', 'deebakbd@gmail.com', 'deebak@1980', 'MALE', 'CSE', '9603782482'),
('2', '50170', 'DR. VENKATA RAMANA A', 'hod_cse@gmrit.org', '50170', 'MALE', 'CSE', '8919035319'),
('3', '50872', 'Dr.V.SREERAM MURTHY', 'sreereammurthy.v@gmrit.org', '50872', 'MALE', 'CSE', '8333952536'),
('4', '50861', 'Dr.SASANKO SEKHAR GANTAYAT', 'gantayat.s@gmrit.org', '50861', 'MALE', 'CSE', '9876543210'),
('5', '51398', 'Dr.R.PRIYA VAIJAYANTHI', 'priyavaijayanthi.r@gmrit.org', '51398', 'FEMALE', 'CSE', '8976543210'),
('6', '51530', 'Dr.V.PRASAD', 'prasad.v@gmrit.org', '51530', 'MALE', 'CSE', '7894561230'),
('7', '50410', 'Mr.M.BALAJEE', 'balajee.m@gmrit.org', '50410', 'MALE', 'CSE', '8597463210'),
('8', '50184', 'Mrs.S.VANI KUMARI', 'vanikumari.s@gmrit.org', '50184', 'FEMALE', 'CSE', '8654791230'),
('9', '50229', 'Mr.V.SRINADH', 'srinadh.v@gmrit.org', '50229', 'MALE', 'CSE', '9786541320'),
('10', '50149', 'Mrs.I.SRILAKSHMI', 'srilakshmi.i@gmrit.org', '50149', 'FEMALE', 'CSE', '7896541230');

-- --------------------------------------------------------

--
-- Table structure for table `leave_apply`
--

CREATE TABLE `leave_apply` (
  `slno` varchar(10) NOT NULL,
  `perid` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `leavetype` text NOT NULL,
  `purpose` text NOT NULL,
  `dates` text NOT NULL,
  `timestamp` text NOT NULL,
  `status` text NOT NULL,
  `adj` text NOT NULL,
  `cnt` text NOT NULL,
  `lcnt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_apply`
--

INSERT INTO `leave_apply` (`slno`, `perid`, `name`, `leavetype`, `purpose`, `dates`, `timestamp`, `status`, `adj`, `cnt`, `lcnt`) VALUES
('1', '51600', 'Dr B.D.DEEBAK', 'Casual Leave', 'health related issue', '26-03-2018,27-03-2018', '2018-03-30 11:30:59', 'Not Approved', 'Dr.V.SREERAM MURTHY,26-03-2018at9:00-9:50,3A^Dr.SASANKO SEKHAR GANTAYAT,26-03-2018at9:50-10:40,2C^Dr.V.PRASAD,26-03-2018at11:40-12:30,2B^DR. VENKATA RAMANA A,26-03-2018at14:20-15:10,4A^DR. VENKATA RAMANA A,26-03-2018at16:00-16:50,2A^Dr.V.SREERAM MURTHY,27-03-2018at9:00-9:50,3A^Dr.R.PRIYA VAIJAYANTHI,27-03-2018at9:50-10:40,2C^Dr.SASANKO SEKHAR GANTAYAT,27-03-2018at11:40-12:30,2B^DR. VENKATA RAMANA A,27-03-2018at14:20-15:10,4A^DR. VENKATA RAMANA A,27-03-2018at16:00-16:50,2A^', '1', '0'),
('2', '51600', 'Dr B.D.DEEBAK', 'Casual Leave', 'personal work', '02-04-2018,03-04-2018', '2018-03-30 17:54:27', 'Approved', 'Dr.V.SREERAM MURTHY,02-04-2018at9:00-9:50,3A^Dr.SASANKO SEKHAR GANTAYAT,02-04-2018at9:50-10:40,2C^Dr.V.PRASAD,02-04-2018at11:40-12:30,2B^Mrs.S.VANI KUMARI,02-04-2018at14:20-15:10,4A^Mr.M.BALAJEE,02-04-2018at16:00-16:50,2A^Dr.V.SREERAM MURTHY,03-04-2018at9:00-9:50,3A^Dr.R.PRIYA VAIJAYANTHI,03-04-2018at9:50-10:40,2C^Dr.SASANKO SEKHAR GANTAYAT,03-04-2018at11:40-12:30,2B^DR. VENKATA RAMANA A,03-04-2018at14:20-15:10,4A^Mr.M.BALAJEE,03-04-2018at16:00-16:50,2A^', '1', '0'),
('3', '51600', 'Dr B.D.DEEBAK', 'Casual Leave', 'personal work', '05-04-2018', '2018-03-30 18:59:33', 'Pending', 'Mr.V.SRINADH,05-04-2018at9:00-9:50,3A^Dr.R.PRIYA VAIJAYANTHI,05-04-2018at9:50-10:40,2C^Mr.V.SRINADH,05-04-2018at11:40-12:30,2B^Mrs.S.VANI KUMARI,05-04-2018at14:20-15:10,4A^Dr.V.PRASAD,05-04-2018at16:00-16:50,2A^', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `perid` int(11) NOT NULL,
  `name` text NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  `p3` text NOT NULL,
  `p4` text NOT NULL,
  `p5` text NOT NULL,
  `p6` text NOT NULL,
  `p7` text NOT NULL,
  `p8` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`perid`, `name`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`) VALUES
(50170, 'DR. VENKATA RAMANA A', '1', '1', '1', '0', '1', '0', '1', '0'),
(50872, 'Dr.V.SREERAM MURTHY', '0', '1', '0', '1', '1', '0', '1', '0'),
(50861, 'Dr.SASANKO SEKHAR GANTAYAT', '1', '0', '1', '0', '1', '0', '0', '1'),
(51398, 'Dr.R.PRIYA VAIJAYANTHI', '0', '0', '1', '1', '0', '1', '0', '1'),
(51600, 'Dr B.D.DEEBAK', '1,3A,9:00-9:50', '1,2C,9:50-10:40', '0', '1,2B,11:40-12:30', '0', '1,4A,14:20-15:10', '0', '1,2A,16:00-16:50'),
(51530, 'Dr.V.PRASAD', '1', '0', '1', '0', '0', '1', '1', '0'),
(50410, 'Mr.M.BALAJEE', '0', '1', '0', '1', '0', '1', '1', '0'),
(50184, 'Mrs.S.VANI KUMARI', '1', '1', '1', '0', '1', '0', '0', '1'),
(50229, 'Mr.V.SRINADH', '0', '1', '1', '0', '0', '1', '1', '1'),
(50149, 'Mrs.I.SRILAKSHMI', '0', '0', '1', '1', '0', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_apply`
--
ALTER TABLE `leave_apply`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`perid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
