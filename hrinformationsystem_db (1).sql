-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 04:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrinformationsystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches_table`
--

CREATE TABLE `branches_table` (
  `branches_id` int(11) NOT NULL,
  `branches_name` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches_table`
--

INSERT INTO `branches_table` (`branches_id`, `branches_name`, `date_created`) VALUES
(1, 'Villasis Branch', '2020-10-03 06:03:10'),
(2, 'Solsona Branch', '2020-10-03 06:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_table`
--

CREATE TABLE `corporate_table` (
  `corporate_id` int(11) NOT NULL,
  `corporate_name` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_table`
--

INSERT INTO `corporate_table` (`corporate_id`, `corporate_name`, `date_created`) VALUES
(1, 'Risk Department', '2020-10-03 04:41:47'),
(2, 'Credit Department', '2020-10-03 04:43:18'),
(3, 'Asset Management Department', '2020-10-03 04:44:09'),
(4, 'Finance Department', '2020-10-03 04:44:34'),
(5, 'Accounting Department', '2020-10-03 04:46:14'),
(6, 'Customer Relation Management', '2020-10-03 04:46:53'),
(7, 'HR Department', '2020-10-03 04:47:14'),
(8, 'IT Department', '2020-10-03 04:47:33'),
(9, 'Audit Department', '2020-10-03 04:47:58'),
(10, 'Complience Department', '2020-10-03 04:48:24'),
(11, 'Corporate Secretary\'s Office', '2020-10-03 04:50:15'),
(12, 'President\'s Office', '2020-10-03 04:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_id` int(11) NOT NULL,
  `employee_companyid` varchar(255) DEFAULT NULL,
  `employee_firstname` varchar(255) DEFAULT NULL,
  `employee_lastname` varchar(255) DEFAULT NULL,
  `employee_middlename` varchar(255) DEFAULT NULL,
  `branches_datefrom` varchar(255) DEFAULT NULL,
  `branches_recentdate` varchar(255) DEFAULT NULL,
  `employee_department` varchar(255) DEFAULT NULL,
  `employee_branches` varchar(255) DEFAULT NULL,
  `employee_position` varchar(255) DEFAULT NULL,
  `employee_contact` varchar(255) DEFAULT NULL,
  `employee_sss` varchar(255) DEFAULT NULL,
  `employee_tin` varchar(255) DEFAULT NULL,
  `employee_hdmf_pagibig` varchar(255) DEFAULT NULL,
  `employee_gsis` varchar(255) DEFAULT NULL,
  `employee_file201` text CHARACTER SET utf8 DEFAULT NULL,
  `employee_image` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `employee_companyid`, `employee_firstname`, `employee_lastname`, `employee_middlename`, `branches_datefrom`, `branches_recentdate`, `employee_department`, `employee_branches`, `employee_position`, `employee_contact`, `employee_sss`, `employee_tin`, `employee_hdmf_pagibig`, `employee_gsis`, `employee_file201`, `employee_image`) VALUES
(1, '321-3123', 'junil', 'toledo', 'a', '2020-10-27', '2020-10-13', 'Accounting Department', 'Villasis Branch', 'programmer', '09534534534', '3123-1312-323', '123-131-3123', '2423-24-34324', '35-353453-54', '../file_upload/202010031601732440_java_tutorial.pdf', '../image_upload/202010031601732440_anduin.png'),
(3, '123123', 'emil', 'nario3', 'luis', '2020-10-21', '2020-10-07', 'Credit Department', 'Villasis Branch', 'encoder', '09645654646', '3123-321-333', '123-312-3123', '123-1321-123', '2342-2342-234', '../file_upload/202010041601785372_payroll_4.pdf', '../image_upload/202010041601785372_4a5b2e54af1a42287e7d0af80fdc60c3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hr_member`
--

CREATE TABLE `hr_member` (
  `hr_id` int(11) NOT NULL,
  `hr_companyid` varchar(255) DEFAULT NULL,
  `hr_firstname` varchar(255) DEFAULT NULL,
  `hr_lastname` varchar(255) DEFAULT NULL,
  `hr_middlename` varchar(255) DEFAULT NULL,
  `hr_contactno` varchar(255) DEFAULT NULL,
  `hr_email` varchar(100) NOT NULL,
  `hr_password` varchar(100) NOT NULL,
  `hr_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_member`
--

INSERT INTO `hr_member` (`hr_id`, `hr_companyid`, `hr_firstname`, `hr_lastname`, `hr_middlename`, `hr_contactno`, `hr_email`, `hr_password`, `hr_type`) VALUES
(2, '1232133', 'hr officer', 'hr officer', 'h', '09777777777', 'hrofficer@gmail.com', 'hrofficer@123', 'HR Officer'),
(4, '3123213', 'hrhead', 'hrhead', 'a', '09978987978', 'hrhead@gmail.com', 'hrhead@123', 'HR Head'),
(5, '64564', 'layla', 'tank', 'a', '09789789789', 'hrassistant@gmail.com', 'hrassistant@123', 'HR Assistant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches_table`
--
ALTER TABLE `branches_table`
  ADD PRIMARY KEY (`branches_id`);

--
-- Indexes for table `corporate_table`
--
ALTER TABLE `corporate_table`
  ADD PRIMARY KEY (`corporate_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `hr_member`
--
ALTER TABLE `hr_member`
  ADD PRIMARY KEY (`hr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches_table`
--
ALTER TABLE `branches_table`
  MODIFY `branches_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `corporate_table`
--
ALTER TABLE `corporate_table`
  MODIFY `corporate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hr_member`
--
ALTER TABLE `hr_member`
  MODIFY `hr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
