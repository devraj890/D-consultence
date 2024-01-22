-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 05:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbconsulting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin123', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`Sno`, `Name`, `Phone`, `Email`, `Comment`) VALUES
(1, 'nawab', 9876543210, 'nawab1@gmail.com', 'This is the first user comment for test'),
(2, 'raju', 1112223334, 'raju11@gmail.com', 'this is raju copmment'),
(3, 'dev', 9827779823, 'devv@gmail.com', 'developer'),
(6, 'nawab', 9876543210, 'nawab1@gmail.com', 'test comment');

-- --------------------------------------------------------

--
-- Table structure for table `tb_country`
--

CREATE TABLE `tb_country` (
  `conid` int(4) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_country`
--

INSERT INTO `tb_country` (`conid`, `country`) VALUES
(1, 'USA'),
(2, 'CANADA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `cid` int(4) NOT NULL,
  `program_id` int(4) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`cid`, `program_id`, `course`) VALUES
(1, 1, 'Bachelor of Science in Agriculture (BSc (Ag))'),
(2, 1, ' Bachelor of Architecture (BArch)'),
(3, 1, 'Bachelor of Engineering'),
(4, 1, 'Bachelor of Computing (BComp)'),
(5, 1, ' Bachelor of Science'),
(6, 1, 'Bachelor of Computer Applications (BCA)'),
(7, 2, 'Master of Business Administration (M.B.A.)'),
(8, 2, 'Master of Engineering (M.Eng.)'),
(9, 2, 'Master of Science (M.Sc.)'),
(10, 2, 'Master of Architecture (M.Arch.)'),
(11, 2, 'Master of Computer Applications (M.C.A.)'),
(12, 3, 'Doctor of Business Administration'),
(13, 3, 'Doctor of Science'),
(14, 3, 'Doctor of Education'),
(15, 3, 'Doctor of Psychology'),
(16, 4, ' Bachelor of Dentistry (BDent)'),
(17, 4, 'Bachelor of Physiotherapy (BPT)'),
(18, 4, ' M.B.B.S'),
(19, 4, ' BM BCH');

-- --------------------------------------------------------

--
-- Table structure for table `tb_enroll`
--

CREATE TABLE `tb_enroll` (
  `Enroll_id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Gendar` varchar(10) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Father_Name` varchar(30) NOT NULL,
  `Mother_Name` varchar(30) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Local_Address` text NOT NULL,
  `Parmanent_Address` text NOT NULL,
  `Highest_Education` varchar(20) NOT NULL,
  `Marksheet` varchar(255) NOT NULL,
  `Aadhar_No` bigint(12) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `Pan_No` varchar(12) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `Passport_No` varchar(12) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `Study_Program` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `University` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_enroll`
--

INSERT INTO `tb_enroll` (`Enroll_id`, `First_Name`, `Last_Name`, `Gendar`, `Date_of_Birth`, `Father_Name`, `Mother_Name`, `Phone`, `Email`, `Local_Address`, `Parmanent_Address`, `Highest_Education`, `Marksheet`, `Aadhar_No`, `aadhar`, `Pan_No`, `pan`, `Passport_No`, `passport`, `Study_Program`, `Course`, `Country`, `University`) VALUES
(1, 'Raju             ', 'Sharma', 'Male', '2000-02-14', 'Shyam Sharma', ' Priya Sharma', 9998887770, 'raju123@gmail.com', '123 rishi nagar ujjain madhya pradesh', '123 rishi nagar ujjain madhya pradesh', '12th', 'demomarksheet.jpg', 999888777456, 'demoaadhar.jpg', 'ABCPD1234D', 'demopan.png', 'A2190457', 'demopassport.jpg', 'Undergraduate', 'Bachelor of Engineering', 'USA', 'Stanford University'),
(6, 'rajesh ', 'verma', 'Male', '1998-12-12', 'raj verma', 'mohini verma', 9898731250, 'rajesh1@gmail.com', '3/2 police line indore', '3/2 police line indore', 'MCA', 'demomarksheet.jpg', 987654327614, 'demoaadhar.jpg', 'ADBPD1234D', 'demopan.png', 'A2190950', 'demopassport.jpg', 'PHD', 'Doctor of Science', 'CANADA', 'Toronto University');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `fid` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`fid`, `name`, `course`, `country`, `university`, `message`) VALUES
(2, 'Vikas Jaiswal', 'Master of Computer Applications (M.C.A.)', 'USA', 'Stanford University', 'The D consultancy are provide best way to create own futures with study in best university in foreign country. Thank you D consultancy...  '),
(3, 'Dev Rajput', 'Master of Business Administration (M.B.A.)', 'CANADA', 'British Columbia University', 'The D consultancy are provide best way to create own futures with study in best university in foreign country. Thank you D consultancy....');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sprogram`
--

CREATE TABLE `tb_sprogram` (
  `spid` int(4) NOT NULL,
  `program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sprogram`
--

INSERT INTO `tb_sprogram` (`spid`, `program`) VALUES
(1, 'Undergraduate'),
(2, 'Postgraduate'),
(3, 'PHD'),
(4, 'Doctorate');

-- --------------------------------------------------------

--
-- Table structure for table `tb_university`
--

CREATE TABLE `tb_university` (
  `uid` int(4) NOT NULL,
  `country_id` int(4) NOT NULL,
  `university` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_university`
--

INSERT INTO `tb_university` (`uid`, `country_id`, `university`) VALUES
(1, 1, 'Stanford University'),
(2, 1, 'Harvard University'),
(3, 2, 'Toronto University'),
(4, 2, 'British Columbia University');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `uid` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`uid`, `name`, `gender`, `phone`, `email`, `address`, `username`, `password`) VALUES
(1, 'raju', 'Male', 9876543210, 'raju123@gmail.com', '3/2 ujjain mp', 'raju123', 'raju123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `tb_country`
--
ALTER TABLE `tb_country`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tb_enroll`
--
ALTER TABLE `tb_enroll`
  ADD PRIMARY KEY (`Enroll_id`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tb_sprogram`
--
ALTER TABLE `tb_sprogram`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `tb_university`
--
ALTER TABLE `tb_university`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_country`
--
ALTER TABLE `tb_country`
  MODIFY `conid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_enroll`
--
ALTER TABLE `tb_enroll`
  MODIFY `Enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `fid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sprogram`
--
ALTER TABLE `tb_sprogram`
  MODIFY `spid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_university`
--
ALTER TABLE `tb_university`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
