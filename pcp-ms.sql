-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 08:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcp-ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(11) NOT NULL,
  `budget_province_plan` int(11) DEFAULT NULL,
  `budget_province_receive` int(11) DEFAULT NULL,
  `budget_province_use` int(11) DEFAULT NULL,
  `budget_department_plan` int(11) DEFAULT NULL,
  `budget_department_receive` int(11) DEFAULT NULL,
  `budget_department_use` int(11) DEFAULT NULL,
  `budget_local_plan` int(11) DEFAULT NULL,
  `budget_local_receive` int(11) DEFAULT NULL,
  `budget_local_use` int(11) DEFAULT NULL,
  `budget_private_plan` int(11) DEFAULT NULL,
  `budget_private_receive` int(11) DEFAULT NULL,
  `budget_private_use` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`budget_id`, `budget_province_plan`, `budget_province_receive`, `budget_province_use`, `budget_department_plan`, `budget_department_receive`, `budget_department_use`, `budget_local_plan`, `budget_local_receive`, `budget_local_use`, `budget_private_plan`, `budget_private_receive`, `budget_private_use`) VALUES
(1, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `development_subject` int(11) NOT NULL,
  `project_roadmap` varchar(100) NOT NULL,
  `project_main` varchar(100) NOT NULL,
  `project_sub` varchar(100) NOT NULL,
  `operation_type` int(11) NOT NULL,
  `project_code` varchar(100) NOT NULL,
  `use_budget` int(11) NOT NULL,
  `budget_id` int(11) DEFAULT NULL,
  `budget_year` date NOT NULL,
  `institution` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `project_objective` varchar(200) NOT NULL,
  `project_result` varchar(200) NOT NULL,
  `project_additional` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `user_id`, `project_name`, `development_subject`, `project_roadmap`, `project_main`, `project_sub`, `operation_type`, `project_code`, `use_budget`, `budget_id`, `budget_year`, `institution`, `province`, `target`, `project_objective`, `project_result`, `project_additional`) VALUES
(3, 1, 'ทดสอบโครงการ', 1, 'แบบแผน', 'หลัก', 'ย่อย', 1, 'พงด00152484', 10000, 1, '0000-00-00', 'ศศศ', 'ขอนแก่น', 'นักศึกษา', 'เก่ง', 'เก่งจริง', 'ไม่มี');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'admin123', 'admin123@mail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `budget_id` (`budget_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`budget_id`) REFERENCES `budget` (`budget_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
