-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 06:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `development_subject` varchar(200) NOT NULL,
  `project_roadmap` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_main` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_sub` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
  `budget_private_use` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `development_subject`, `project_roadmap`, `project_main`, `project_sub`, `operation_type`, `project_code`, `use_budget`, `budget_year`, `institution`, `province`, `target_user`, `project_objective`, `project_result`, `project_additional`, `budget_province_plan`, `budget_province_receive`, `budget_province_use`, `budget_department_plan`, `budget_department_receive`, `budget_department_use`, `budget_local_plan`, `budget_local_receive`, `budget_local_use`, `budget_private_plan`, `budget_private_receive`, `budget_private_use`, `user_id`) VALUES
(3, 'ทดสอบโครงการ', '1', 'แบบแผน', 'หลัก', 'ย่อย', '1', 'พงด00152484', '10000', '0000-00-00', 'ศศศ', 'ขอนแก่น', 'นักศึกษา', 'เก่ง', 'เก่งจริง', 'ไม่มี', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'jay', '0', 'แผนงาน 3', 'โครงการหลัก (ตามแผน) 4', 'โครงการ/กิจกรรมย่อย (ตามแผน) 2', 'การดำเนินงาน', '123456', 'option2', '0000-00-00', 'asdasd', 'ร้อยเอ็ด', 'asdasd', 'asdasdasdasd', 'asdsad', 'asdasdasd', 2000, 200, 200, 2000, 200, 2000, 200, 2000, 200, 200, 2000, 200, 0),
(5, 'jay', '0', 'แผนงาน 3', 'โครงการหลัก (ตามแผน) 2', 'โครงการ/กิจกรรมย่อย (ตามแผน) 3', 'โครงการ', '123456', 'option1', '0000-00-00', 'ไม่รู้', 'กาฬสินธุ์', 'ประชาชน', 'กกกกห', 'asdasdasd', 'asdasdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 'jay', '0', 'แผนงาน 2', 'โครงการหลัก (ตามแผน) 3', 'โครงการ/กิจกรรมย่อย (ตามแผน) 3', 'โครงการ', '123456', 'option1', '0000-00-00', 'ไม่รู้', 'ขอนแก่น', 'ประชาชน', 'กกกกห', 'ฟหกฟหกฟหก', 'asdasdsad', 2000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, 'jay', '0', 'แผนงาน 3', 'โครงการหลัก (ตามแผน) 2', 'โครงการ/กิจกรรมย่อย (ตามแผน) 2', 'โครงการ', '123456', 'option1', '2542', 'ไม่รู้', 'กาฬสินธุ์', 'นักเรียน', 'asdasd', 'sadasdsad', 'asdasdsad', 2000, 20000, 2000, 2000, 20000, 2000, 200, 20000, 200, 200, 2000, 2000, 0),
(10, 'www', '0', 'แผนงาน 1', 'โครงการหลัก (ตามแผน) 2', 'โครงการ/กิจกรรมย่อย (ตามแผน) 2', 'โครงการ', '55555', 'option1', '2015', 'นักเรียน', 'มหาสารคาม', 'นักเรียน', 'asdasdasdasdasasd', 'asdasd', 'asdsad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(11, 'o10', 'ประเด็นการพัฒนาที่ 2', 'แผนงาน 2', 'โครงการหลัก (ตามแผน) 2', 'โครงการ/กิจกรรมย่อย (ตามแผน) 4', 'โครงการ', '123456', 'ไม่ใช้งบประมาณ', '2015', 'ไม่รู้', 'ร้อยเอ็ด', 'นักเรียน', 'asdasd', 'asdasd', 'asdasdasd', 100, 10000, 1000, 1000, 1000, 1000, 1000, 1000, 10000, 1000, 1000, 10000, 1),
(12, 'ตู๋', '0', 'แผนงาน 2', 'โครงการหลัก (ตามแผน) 2', 'โครงการ/กิจกรรมย่อย (ตามแผน) 3', 'การดำเนินงาน', '123456', 'ไม่ใช้งบประมาณ', '2015', 'นักเรียน', 'มหาสารคาม', 'นักเรียน', 'ฟหกหฟก', 'หฟกฟหกฟกห', 'ฟหกหฟก', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(13, 'kkk', '2', 'แผนงาน 3', 'โครงการหลัก (ตามแผน) 3', 'โครงการ/กิจกรรมย่อย (ตามแผน) 4', 'โครงการ', '123456', 'option1', '123', 'นักเรียน', 'ขอนแก่น', 'นักเรียน', 'asdasdasdasdasasd', 'asdasd', 'yttyrtytry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2);

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
(1, 'admin123', 'admin123@mail.com', '1234'),
(2, '', 'jay@hotmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
