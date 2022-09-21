-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 01:52 PM
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
(3, 'dev', 9827779823, 'devv@gmail.com', 'developer');

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
  `Study_Program` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `University` varchar(30) NOT NULL,
  `Course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_enroll`
--

INSERT INTO `tb_enroll` (`Enroll_id`, `First_Name`, `Last_Name`, `Gendar`, `Date_of_Birth`, `Father_Name`, `Mother_Name`, `Phone`, `Email`, `Local_Address`, `Parmanent_Address`, `Highest_Education`, `Marksheet`, `Aadhar_No`, `aadhar`, `Pan_No`, `pan`, `Passport_No`, `passport`, `Study_Program`, `Country`, `University`, `Course`) VALUES
(1, 'raju', 'sharma', 'Male', '1999-02-14', 'shyam sharma', 'Priya sharma', 9998887770, 'raju123@gmail.com', 'ujjain', 'ujjain', 'bca', 'birth-certificate.jpg', 999888777456, 'enroll_logo.jpg', 'be1112223f', 'toronto1.jpeg', 'be123456', 'highschool.jpg', 'Post_Graduation', 'Canada', 'Stanford', 'MCA');

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
-- Indexes for table `tb_enroll`
--
ALTER TABLE `tb_enroll`
  ADD PRIMARY KEY (`Enroll_id`);

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
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_enroll`
--
ALTER TABLE `tb_enroll`
  MODIFY `Enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
