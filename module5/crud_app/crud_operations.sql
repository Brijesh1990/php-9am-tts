-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 06:54 AM
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
-- Database: `crud_operations`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addtask`
--

CREATE TABLE `tbl_addtask` (
  `task_id` int(11) NOT NULL,
  `taskname` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addtask`
--

INSERT INTO `tbl_addtask` (`task_id`, `taskname`, `added_date`) VALUES
(1, 'just ride a BMW car', '05/09/2024 10:04:52 am'),
(2, 'just rid a alto 800', '05/09/2024 10:05:37 am'),
(3, 'jsut performed php mvc crud oeprations', '05/09/2024 10:05:50 am'),
(4, 'just completed the task', '05/09/2024 10:19:08 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addtask`
--
ALTER TABLE `tbl_addtask`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addtask`
--
ALTER TABLE `tbl_addtask`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
