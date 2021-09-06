-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 05:27 AM
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
-- Database: `pcp_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project_draft` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `development_subject` int(11) NOT NULL,
  `project_roadmap` int(11) NOT NULL,
  `project_main` int(11) NOT NULL,
  `project_sub` int(11) NOT NULL,
  `operation_type` varchar(200) NOT NULL,
  `project_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `use_budget` varchar(200) NOT NULL,
  `budget_year` varchar(200) NOT NULL,
  `institution` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_user` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_objective` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_result` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_additional` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `budget_province_plan` float DEFAULT 0,
  `budget_province_receive` float DEFAULT 0,
  `budget_province_use` float DEFAULT 0,
  `budget_department_plan` float DEFAULT 0,
  `budget_department_receive` float DEFAULT 0,
  `budget_department_use` float DEFAULT 0,
  `budget_local_plan` float DEFAULT 0,
  `budget_local_receive` float DEFAULT 0,
  `budget_local_use` float DEFAULT 0,
  `budget_private_plan` float DEFAULT 0,
  `budget_private_receive` float DEFAULT 0,
  `budget_private_use` float DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `development_subject`, `project_roadmap`, `project_main`, `project_sub`, `operation_type`, `project_code`, `use_budget`, `budget_year`, `institution`, `province`, `target_user`, `project_objective`, `project_result`, `project_additional`, `budget_province_plan`, `budget_province_receive`, `budget_province_use`, `budget_department_plan`, `budget_department_receive`, `budget_department_use`, `budget_local_plan`, `budget_local_receive`, `budget_local_use`, `budget_private_plan`, `budget_private_receive`, `budget_private_use`, `user_id`, `file_path`) VALUES
(18, 'adsasdf', 2, 9, 26, 76, 'โครงการ', '', 'ใช้งบประมาณ', '2345', 'สสส.', 'ร้อยเอ็ด', 'ประชาชน', 'fa', 'fa', '', 20000000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'file_612eee000f48c.'),
(19, 'sdfsd', 1, 2, 3, 999, 'โครงการ', 'ergt', 'ใช้งบประมาณ', '2345', 's', 'ร้อยเอ็ด', 'ert', 'wef', 'WEF', '', 60000000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'file_612ef1b2b1e2f.'),
(20, 'rthrth', 1, 2, 3, 999, 'โครงการ', 'rth', 'ใช้งบประมาณ', 'rth', 'rsths', 'มหาสารคาม', 'srth', 'srth', 'srth', '', 3000000000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'file_612ef1d9298e6.'),
(21, 'arewrar', 2, 9, 26, 76, 'โครงการ', 'aerg', 'ใช้งบประมาณ', 'aerg', 'areg', 'มหาสารคาม', 'aerg', 'earg', 'aerg', '', 3000000000, NULL, NULL, 3378790000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `development_subject` (`development_subject`),
  ADD KEY `project_roadmap` (`project_roadmap`),
  ADD KEY `project_main` (`project_main`),
  ADD KEY `project_sub` (`project_sub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`development_subject`) REFERENCES `development_subject` (`development_id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`project_roadmap`) REFERENCES `project_roadmap` (`project_roadmap_id`),
  ADD CONSTRAINT `project_ibfk_4` FOREIGN KEY (`project_main`) REFERENCES `project_main` (`project_main_id`),
  ADD CONSTRAINT `project_ibfk_5` FOREIGN KEY (`project_sub`) REFERENCES `project_sub` (`project_sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
