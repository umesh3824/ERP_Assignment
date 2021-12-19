-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 07:36 AM
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
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'USER',
  `activity_name` varchar(30) NOT NULL,
  `subActivity` varchar(20) NOT NULL,
  `plant` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `assignto` varchar(20) NOT NULL,
  `a_date` date DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `followup` varchar(60) NOT NULL,
  `close_date` date DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `emailId`, `contactNo`, `password`, `role`, `activity_name`, `subActivity`, `plant`, `location`, `floor`, `department`, `assignto`, `a_date`, `status`, `reason`, `followup`, `close_date`, `quantity`, `remark`) VALUES
(1, 'Atul Patil ', 'admin@gmail.com', '5555555', 'RhdFSUM=', 'ADMIN', '', '', '', '', '', '', '', NULL, '', '', '', NULL, 0, ''),
(556, 'umesh hhhhhhhhhh', 'sdfjhg@djh.dfhhhhhhhhhhhh', '1111111111', 'mjhdfsj@jhg.tertert', 'USER', '1', '1', '1', '1', '1', 'kiuyt', '1', '2021-02-26', '1', '1', '1', '2021-02-28', 1, 'kiuyt'),
(558, 'UJHTGRFDAWSDFGH', 'sdfjhg@djh.df', '5236987410', 'hsdgfjsgdf@hjdf.sddf', 'USER', '1', '1', '1', '1', '1', 'kiuyt', '1', '2021-02-17', '1', '1', '1', '2021-02-18', 1, 'jkuytre'),
(560, 'atul', 'sdfjhg@djh.df', '1234567894', 'Umesh@3824hgsgf.sdfg', 'USER', '1', '1', '1', '1', '1', 'jhgfcffcgvhbn', '1', '2021-02-18', '1', '1', '1', '2021-02-25', 1, 'fghg'),
(561, 'UMesh', 'abc@gmail.com', '1234569870', '123', 'USER', '1', '1', '1', '1', '1', 'iuytr', '1', '2021-02-19', '1', '1', '1', '2021-02-04', 1, 'dsfgh'),
(562, 'atul', 'CrowdcyAdmin@hjsd.sf', '62655', 'admin123', 'USER', '1', '1', '1', '1', '1', 'liuytre', '1', '2021-02-24', '1', '1', '1', '2021-02-10', 1, 'kjuytd'),
(565, 'atul', 'jhsdfjg@hj.dfg', '54654654', 'admin123', 'USER', '1', '1', 'Plant 1', 'Location 1', 'Floor 1', 'ljkhgf', 'User 1', '2021-02-17', 'Status 1', 'Reason 1', 'Follow Up Activity 1', '2021-02-18', 1, 'kiuygf');

-- --------------------------------------------------------

--
-- Table structure for table `manage_activity`
--

CREATE TABLE `manage_activity` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_activity`
--

INSERT INTO `manage_activity` (`id`, `title`) VALUES
(1, 'Acivity 1'),
(2, 'Acivity 2');

-- --------------------------------------------------------

--
-- Table structure for table `subactivity`
--

CREATE TABLE `subactivity` (
  `id` int(11) NOT NULL,
  `activityId` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subactivity`
--

INSERT INTO `subactivity` (`id`, `activityId`, `title`) VALUES
(1, 1, 'sub Activity A'),
(2, 1, 'sub Activity B'),
(3, 2, 'sub Activity SS'),
(4, 2, 'sub Activity NN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contactNo` (`contactNo`);

--
-- Indexes for table `manage_activity`
--
ALTER TABLE `manage_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subactivity`
--
ALTER TABLE `subactivity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- AUTO_INCREMENT for table `manage_activity`
--
ALTER TABLE `manage_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subactivity`
--
ALTER TABLE `subactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
