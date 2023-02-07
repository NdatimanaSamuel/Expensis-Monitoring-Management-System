-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `doneon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `fullname`, `email`, `phone`, `password`, `type`, `address`, `doneon`) VALUES
(1, 'Admin', 'admin@gmail.com', '+250781110784', '1234567', 'Admin', 'rubavu', ''),
(2, 'Accountentone', 'accountentone@gmail.com', '+250781110784', '1234567', 'Accountent', 'Musanze', '2022-09-02'),
(3, 'Site Manager', 'sitemanagerone@gmail.com', '+250781110789', '1234567', 'Site Manager', 'Rubavu', '2022-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `common_expense`
--

CREATE TABLE `common_expense` (
  `common_id` int(11) NOT NULL,
  `common_code` varchar(255) NOT NULL,
  `category` varchar(200) NOT NULL,
  `listname` varchar(200) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `common_expense`
--

INSERT INTO `common_expense` (`common_id`, `common_code`, `category`, `listname`, `added_date`) VALUES
(2, '529452016', 'Expenses', 'Steal', '2021-09-09 17:12:55'),
(3, '1772138604', 'Expenses', 'Water', '2021-09-09 18:34:58'),
(4, '1166778297', 'Expenses', 'Transport Employee', '2021-09-10 07:16:28'),
(5, '1840721319', 'Expenses', 'Cement', '2021-09-10 08:38:22'),
(6, '1804496017', 'Expenses', 'whellebow', '2021-09-10 13:27:56'),
(8, '770848041', 'Expenses', 'Inka', '2022-06-22 09:50:08'),
(9, '1141555542', 'Expenses', 'Inka', '2022-06-22 09:50:18'),
(10, '199131874', 'Expenses', 'Inka', '2022-06-22 09:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `expense_type` varchar(100) NOT NULL,
  `expense_item` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL,
  `date_given` varchar(200) NOT NULL,
  `expense` varchar(200) NOT NULL,
  `requesteby` varchar(100) NOT NULL,
  `accountent` varchar(100) NOT NULL,
  `describe_expense` varchar(255) NOT NULL,
  `done_by` varchar(100) NOT NULL,
  `donestatus` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `project_id`, `expense_type`, `expense_item`, `seller`, `date_given`, `expense`, `requesteby`, `accountent`, `describe_expense`, `done_by`, `donestatus`) VALUES
(1, 1, 'Water', 'water', 'Divine', '2022-06-09', '10000', 'Eng Eric', '', 'it is good', 'Uwase Divine', ''),
(2, 1, 'Cement', 'Metal', 'Samuel', '2022-06-16', '15000', 'kazungu', '', 'it is good', 'Uwase Divine', ''),
(3, 3, 'Steal', 'feba', 'Samuel', '2022-08-19', '5000', 'manager', '', 'it is good', 'Uwase Divine', ''),
(4, 3, 'Steal', 'feba', 'Samuel', '2022-08-19', '5000', 'manager', '', 'it is good', 'Uwase Divine', ''),
(5, 1, 'Cement', 'steal metal', 'Divine', '2022-08-19', '5000', 'manager', '', 'oky', 'Uwase Divine', ''),
(6, 6, 'Water', 'water', 'Divine', '2022-09-02', '5000', 'sitemanagerone@gmail.com', 'accountentone@gmail.com', 'it is good', 'Site Manager', 'Manager Accepted'),
(7, 7, 'whellebow', 'tyles', 'Samuel', '2022-09-03', '5000', 'sitemanagerone@gmail.com', 'accountentone@gmail.com', 'oky', 'Site Manager', 'Manager Accepted'),
(8, 8, 'Cement', 'cement', 'Samuel', '2022-09-06', '10000', 'sitemanagerone@gmail.com', 'accountentone@gmail.com', 'it is good', 'Site Manager', 'Manager Accepted'),
(9, 8, 'Water', 'water', 'Divine', '2022-09-06', '5000', 'sitemanagerone@gmail.com', 'accountentone@gmail.com', 'oky', 'Site Manager', 'Manager Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `startdate` varchar(200) NOT NULL,
  `enddate` varchar(200) NOT NULL,
  `project_cost` varchar(200) NOT NULL,
  `project_status` varchar(100) NOT NULL,
  `project_expense` varchar(200) NOT NULL,
  `describeproject` varchar(200) NOT NULL,
  `remaindmoney` varchar(200) NOT NULL,
  `acountentname` varchar(100) NOT NULL,
  `sitemananame` varchar(100) NOT NULL,
  `accountentstatus` varchar(20) NOT NULL,
  `sitestatus` varchar(20) NOT NULL,
  `addedon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `startdate`, `enddate`, `project_cost`, `project_status`, `project_expense`, `describeproject`, `remaindmoney`, `acountentname`, `sitemananame`, `accountentstatus`, `sitestatus`, `addedon`) VALUES
(1, 'Bridge', '2022-08-31', '2022-09-30', '30000', 'FINISHED', '30000', 'it is good', '0', '', '', '', '', '2022-06-06'),
(2, 'Kubaka', '2022-08-29', '2023-11-22', '20000', 'ONPROCCESSING', '0', 'it is good', '20000', '', '', '', '', '2022-06-21'),
(3, 'Nyabarongo brige', '2022-08-04', '2022-08-31', '10000', 'ONPROCCESSING\r\n', '10000', 'it is good', '0', '', '', '', '', '2022-08-04'),
(6, 'Kubaka', '2022-09-03', '2022-09-30', '10000', 'ONPROCCESSING', '5000', 'it is good', '5000', 'accountentone@gmail.com', 'sitemanagerone@gmail.com', 'Accepted', 'Accepted', '2022-09-02'),
(7, 'Bugarama brige', '2022-09-07', '2022-09-24', '20000', 'FINISHED', '5000', 'it is good', '15000', 'accountentone@gmail.com', 'sitemanagerone@gmail.com', 'Accepted', 'Accepted', '2022-09-03'),
(8, 'Buildings School', '2022-09-07', '2022-09-30', '20000', 'ONPROCCESSING', '15000', 'it is good', '5000', 'accountentone@gmail.com', 'sitemanagerone@gmail.com', 'Accepted', 'Accepted', '2022-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `sellercode` varchar(255) NOT NULL,
  `sellername` varchar(200) NOT NULL,
  `seller_tin` varchar(100) NOT NULL,
  `seller_address` varchar(200) NOT NULL,
  `seller_phone` varchar(20) NOT NULL,
  `seller_remarks` varchar(30) NOT NULL,
  `added_day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `sellercode`, `sellername`, `seller_tin`, `seller_address`, `seller_phone`, `seller_remarks`, `added_day`) VALUES
(1, '162292641', 'Samuel', '123255', 'Kigali', '0781110784', 'No', '2021-09-09 19:17:09'),
(3, '1845133189', 'Divine', '2344646', 'Musanze', '0781110784', 'Yes', '2021-09-10 13:28:32'),
(4, '727825898', 'gg', '1234567890', 'gfgghgh', '0781110784', 'oky', '2022-06-22 09:56:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `common_expense`
--
ALTER TABLE `common_expense`
  ADD PRIMARY KEY (`common_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `common_expense`
--
ALTER TABLE `common_expense`
  MODIFY `common_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
