-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 04:09 AM
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
-- Table structure for table `development_subject`
--

CREATE TABLE `development_subject` (
  `development_id` int(11) NOT NULL,
  `development_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `development_subject`
--

INSERT INTO `development_subject` (`development_id`, `development_name`) VALUES
(1, 'ประเด็นการพัฒนาที่ 1 เพิ่มศักยภาพการผลิตการเกษตรและอุตสาหกรรมการเกษตรให้สามารถแข่งขันได้อย่างยั่งยืน'),
(2, 'ประเด็นการพัฒนาที่ 2 การพัฒนาขีดความสามารถทางการแข่งขันด้านการค้าการบริการ ระบบโลจิสติกส์ระบบราง\r\nและอุตสาหกรรมอากาศยาน'),
(3, 'ประเด็นการพัฒนาที่ 3 การเพิ่มศักยภาพและยกระดับคุณภาพการท่องเที่ยวอย่างครบวงจร');

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
  `user_id` int(11) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `development_subject`, `project_roadmap`, `project_main`, `project_sub`, `operation_type`, `project_code`, `use_budget`, `budget_year`, `institution`, `province`, `target_user`, `project_objective`, `project_result`, `project_additional`, `budget_province_plan`, `budget_province_receive`, `budget_province_use`, `budget_department_plan`, `budget_department_receive`, `budget_department_use`, `budget_local_plan`, `budget_local_receive`, `budget_local_use`, `budget_private_plan`, `budget_private_receive`, `budget_private_use`, `user_id`, `file_path`) VALUES
(14, 'กิจกรรมแก้มลิงหนองลิงแก พร้อมอาคารประกอบ ในเขตพื้นที่ อำเภอปทุมรัตต์จังหวัดร้อยเอ็ด', 'ประเด็นการพัฒนาที่ 1', 'แผนงาน 3', 'โครงการหลัก (ตามแผน) 2', 'โครงการ/กิจกรรมย่อย (ตามแผน) 2', 'โครงการ', '', 'option1', '2565', 'ศ.บ.ค', 'ร้อยเอ็ด', 'ประชาชน', 'เพื่อทำแก้มลิง', 'ทำแก้มลิงสำเร็จ', 'https://www.moicovid.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'flie_6128517976486.pdf'),
(15, 'กิจกรรมพัฒนาแหล่งน้าเพื่อการเกษตรและแก้ปัญหาภัยแล้ง จังหวัดกาฬสินธุ์', 'ประเด็นการพัฒนาที่ 2', 'แผนงาน 2', 'โครงการหลัก (ตามแผน) 3', 'โครงการ/กิจกรรมย่อย (ตามแผน) 4', 'โครงการ', '', 'ใช้งบประมาณ', '2565', 'อบต.', 'กาฬสินธุ์', 'ประชาชน', 'เพื่อแก้ภัยแล้ง', 'ทำฝายกั้นน้ำ', '', NULL, NULL, NULL, NULL, NULL, 123, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'file_61285497e5f5e.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `project_draft`
--

CREATE TABLE `project_draft` (
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
  `user_id` int(11) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_main`
--

CREATE TABLE `project_main` (
  `project_main_id` int(11) NOT NULL,
  `project_main_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `project_roadmap_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_main`
--

INSERT INTO `project_main` (`project_main_id`, `project_main_name`, `project_roadmap_id`) VALUES
(1, '1.1. โครงการเพิ่มปริมาณนํ้าเก็บกัก และระบบส่งนํ้า/ระบบกระจายนํ้าเพื่อสนับสนุนการผลิตสินค้าเกษตรและแก้ปัญหานํ้าท่วมนํ้าแล้ง', 1),
(2, '1.2.โครงการสนับสนุนการบริหารจัดการพื้นที่การเกษตรด้วยเทคโนโลยีภูมิสารสนเทศ', 1),
(3, '2.1.โครงการปลูกป่าเพื่อพลังงานทดแทนและอุตสาหกรรมเกษตรสาขาป่าไม่เชื่อมโยง 4 จังหวัด', 2),
(4, '3.1. โครงการส่งเสริมการวิจัยการผลิตการแปรรูปคุณภาพสูงในสินค้าเกษตร เป้าหมายสู่เกษตรกรผู้ประกอบการเชิงพาณิชย์', 3),
(5, '3.2.โครงการเพิ่มศักยภาพเกษตรกรเพื่อเป็นผู้ประกอบการแปรรูปผลิตภัณฑ์ด้วยนวัตกรรม', 3),
(6, '3.3. โครงการพัฒนาเกษตรกรรุ่นใหม่ (Smart Farmer and Young Smart Farmer และอาสาเกษตรกร ) ในการสร้างองค์ความรู้และความคิดสร้างสรรค์', 3),
(7, '3.4. โครงการเพิ่มประสิทธิภาพการท่องเที่ยวเชิงเกษตรเชื่อมโยงกลุ่มจังหวัด', 3),
(8, '3.5. โครงการพัฒนาศักยภาพการท่องเที่ยวเชิงเกษตรลุ่มนํ้าชีอย่างยั่งยืน', 3),
(9, '3.6. โครงการเพิ่มทักษะการบริหารจัดการและเทคโนโลยีเครื่องจักรกลเพื่อเพิ่มผลผลิตภาพแรงงานเกษตร', 3),
(10, '4.1. โครงการพัฒนาคุณภาพการผลิตและเพิ่มมูลค่าผลผลิตข้าวครบวงจร', 4),
(11, '4.2. โครงการพัฒนาคุณภาพและเพิ่มมูลค่าการผลิตอ้อยโรงงาน', 4),
(12, '4.3. โครงการพัฒนาคุณภาพและเพิ่มมูลค่าการผลิตมันสำปะหลัง', 4),
(13, '4.4. โครงการเพิ่มประสิทธิภาพการผลิตโคเนื้อคุณภาพครบวงจร', 4),
(14, '5.1. โครงการส่งเสริมเทคโนโลยีและนวัตกรรมและงานวิจัยการเกษตรตลอดห่วงโซ่', 5),
(15, '5.2. โครงการพัฒนาศักยภาพพลังงานทดแทนจากพืชเกษตร', 5),
(16, '5.3. โครงการพัฒนาเศรฐกิจด้านเกษตรสมุนไพรและการพัฒนาเมืองสมุนไพรกลุ่มจังหวัดร้อยแก่นสารสินธุ์', 5),
(17, '6.1. โครงการส่งเสริมและพัฒนาเกษตรกรรมยั่งยืน', 6),
(18, '6.2. โครงการพัฒนาอาหารเกษตรปลอดภัยและเกษตรอินทรีย์', 6),
(19, '7.1. โครงการเพิ่มประสิทธิาภพการบริหารจัดการห่วงโซ่อุปทานและการตลาดสินค้าเกษตร ครบวงจร', 7),
(20, '7.2. โครงการพัฒนาศักยภาพตลาดสินค้าการเกษตรกลุ่มจังหวัดรองรับระบบเศรษฐกิจดิจิทัล', 7),
(21, '1.1. โครงการพัฒนา SMEs และเครือข่ายผู้ประกอบการอย่างบุรณาการ', 8),
(22, '1.2. โครงการสร้างและพัฒนาเครือข่ายอุตสาหกรรมรักษ์สิ่งแวดล้อมร้อยแก่นสารสินธุ์', 8),
(23, '1.3.โครงการพัมนาขีดความสามารถทางการแข่งขันด้านการค้าการบริการ ร้อยแก่นสารสิทธุ์', 8),
(24, '1.4. โครงการพัฒนาและยกระดับคุณภาพผลิตภัณฑ์ชุมชนให้ได้มาตรฐาน', 8),
(25, '2.1. โครงการพัฒนาโครงข่ายคมนาคมกลุ่มจังหวัดอย่างเป็นระบบเพื่อสนับสนุนการค้าการลงทุน การอุตสาหกรรม และการท่องเทียว', 9),
(26, '2.2. โครงการเพิ่มขึดความสามารถทางการแข่งขันกลุ่มจังหวัดด้วยระบบโลจิสติกส์เชื่อมโยงโครงข่ายระดับภาค ระดับชาติ และระดับภูมิภาค', 9),
(27, '2.3. โครงการร้อยแก่นสารสินธุ์ (Railway Innapolis)', 9),
(28, '2.4. โครงการอุตสาหกรรมอากาศยานและการบิน', 9),
(29, '3.1. โครงการยกระดับฝีมือแรงงาน', 10),
(30, '4.1. โครงการพัฒนาระบบตลาดผลิตภัณฑ์กลุ่มจังหวัดแบบหลายช่องทาง', 11),
(31, '4.2. โครงการเพิ่มศักยภาพตลาดผลิตภัณฑ์กลุ่มจังหวัดเพื่อรองรับ digital transformation', 11),
(32, '1.1. โครงการพัมนาศักยภาพและยกระดับคุณภาพแหล่งท่องเที่ยวและกิจกรรมท่องเที่ยวเชิงสร้างสรรค์', 12),
(33, '2.1. โครงการพัฒนายกระดับบริการการท่องเที่ยวกลุ่มจังหวัดให้ได้มาตรฐาน', 13),
(34, '2.2. โครงการยกระดับบริการการท่องเที่ยวโดยใช้ผลิตภัณฑ์สมุนไพร', 13),
(35, '2.3. โครงการพัฒนาธุรกิจบริการและสร้างเครือข่ายอุตสาหกรรมการท่องเที่ยว', 13),
(36, '3.1. โครงการพัฒนาตลาดท่องเที่ยวและผลิตภัณฑ์ที่เกี่ยวเนื่องกับการท่องเที่ยว', 14),
(37, '4.1. โครงการพัฒนาและยกระดับผลิตภัณฑ์ชุมชนให้ได้มาตราฐาน', 15),
(38, '4.2. โครงการยกระดับผ้าไหมกลุ่มจังหวัดสู่นานาชาติ', 15);

-- --------------------------------------------------------

--
-- Table structure for table `project_roadmap`
--

CREATE TABLE `project_roadmap` (
  `project_roadmap_id` int(11) NOT NULL,
  `project_roadmap_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `development_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_roadmap`
--

INSERT INTO `project_roadmap` (`project_roadmap_id`, `project_roadmap_name`, `development_id`) VALUES
(1, '1.แผนงานการบริหารจัดการพื้นที่เกษตรและเพิ่มประสิทธิภาพการบริหารจัดการนํ้าเพื่อการพัฒนาที่ยั่งยืน', 1),
(2, '2.แผนงานส่งเสริมการปลูกป่า เพิ่มพื้นที่สีเขียวและอุตสาหกรรมเกษตรสาขาป่าไม้ เชื่อมโยง 4 จังหวัด', 1),
(3, '3.แผนงานพัฒนาขีดความสามารถทางการแข่งขันของเกษตรกรและเพิ่มผลิตภาพแรงงานเกษตร', 1),
(4, '4.แผนงานเพิ่มประสิทธิภาพและมาตราฐานการผลิตของสินค้าเกษตร', 1),
(5, '5.แผนงานส่งเสริมอุตสาหกรรมเกษตรภายใต้แนวคิดเศรฐกิจชีวภาพ', 1),
(6, '6.แผนงานส่งเสริมและพัฒนาเกษตรยั่งยืน', 1),
(7, '7.แผนงานเพิ่มประสิทธิภาพการบริหารจัดการห่วงโช่อุปทานและการตลาดสินค้าเกษตร ครบวงจร', 1),
(8, '1.แผนงานพัฒนาศักยภาพ SMEs เพิ่มขีดความสามารถทางการแข่งขันด้านการค้าการบริการและพัฒนาเครือข่ายผู้ประกอบการอย่างบูรณาการ', 2),
(9, '2.แผนงานพัฒนาและเชื่อมโยงโครงข่ายคมนาคมเพื่อเพิ่มประสิทธิภาพระบบโลจิสติกส์ระบบรางและอุตสาหกรรมอากาศยาน', 2),
(10, '3.แผนงานพัฒนาคุณภาพฝีมือแรงงานและเพิ่มทักษะแก่ผู้ประกอบการเพื่อเพิ่มขีดความสามารถทางการแข่งขัน', 2),
(11, '4.แผนงานพัฒนาระบบตลาดผลิตภัณฑ์กลุ่มจังหวัดเพื่อขับเคลื่อนเศรษฐกิจดิจิทัล', 2),
(12, '1.แผนงานพัฒนาศักยภาพและยกระดับคุณภาพแหล่งท่องเทียวและกิจกรรมท่องเที่ยวกลุ่มจังหวัด', 3),
(13, '2.แผนงานพัฒนาเครือข่ายอุตสาหกรรมการท่องเที่ยวและบริการกลุ่มจังหวัด', 3),
(14, '3.แผนงานส่งเสริมกิจกรรมและประชาสัมพันธ์และการตลาดการท่องเที่ยวกลุ่มจังหวัด', 3),
(15, '4.แผนงานพัฒนาและยกระดับผลิตภัณฑ์ชุมชนให้ได้มาตราฐานและเป็นศูนย์กลางแฟชั่นผ้าไหมนานาชาติ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `project_sub`
--

CREATE TABLE `project_sub` (
  `project_sub_id` int(11) NOT NULL,
  `project_sub_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `project_main_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_v2`
--

CREATE TABLE `project_v2` (
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
  `user_id` int(11) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'user1', '1111@hotmail.com', '1234'),
(2, 'user2', '2222@hotmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `development_subject`
--
ALTER TABLE `development_subject`
  ADD PRIMARY KEY (`development_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project_draft`
--
ALTER TABLE `project_draft`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project_main`
--
ALTER TABLE `project_main`
  ADD PRIMARY KEY (`project_main_id`),
  ADD KEY `project_roadmap_id` (`project_roadmap_id`);

--
-- Indexes for table `project_roadmap`
--
ALTER TABLE `project_roadmap`
  ADD PRIMARY KEY (`project_roadmap_id`),
  ADD KEY `development_id` (`development_id`);

--
-- Indexes for table `project_sub`
--
ALTER TABLE `project_sub`
  ADD PRIMARY KEY (`project_sub_id`),
  ADD KEY `project_main_id` (`project_main_id`);

--
-- Indexes for table `project_v2`
--
ALTER TABLE `project_v2`
  ADD PRIMARY KEY (`project_id`),
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
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project_draft`
--
ALTER TABLE `project_draft`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_v2`
--
ALTER TABLE `project_v2`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `project_draft`
--
ALTER TABLE `project_draft`
  ADD CONSTRAINT `project_draft_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `project_main`
--
ALTER TABLE `project_main`
  ADD CONSTRAINT `project_main_ibfk_1` FOREIGN KEY (`project_roadmap_id`) REFERENCES `project_roadmap` (`project_roadmap_id`);

--
-- Constraints for table `project_roadmap`
--
ALTER TABLE `project_roadmap`
  ADD CONSTRAINT `project_roadmap_ibfk_1` FOREIGN KEY (`development_id`) REFERENCES `development_subject` (`development_id`);

--
-- Constraints for table `project_sub`
--
ALTER TABLE `project_sub`
  ADD CONSTRAINT `project_sub_ibfk_1` FOREIGN KEY (`project_main_id`) REFERENCES `project_main` (`project_main_id`);

--
-- Constraints for table `project_v2`
--
ALTER TABLE `project_v2`
  ADD CONSTRAINT `project_v2_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
