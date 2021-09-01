-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 04:12 AM
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
(17, 'แม่น้ำชี', 1, 1, 1, 6, 'โครงการ', '', 'ใช้งบประมาณ', '2565', 'ศ.บ.ค', 'ขอนแก่น', 'ประชาชน', 'เพื่อแก้ภัยแล้ง', 'ทำฝายกั้นน้ำ', '', 200000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'file_612ed990026a5.');

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

--
-- Dumping data for table `project_sub`
--

INSERT INTO `project_sub` (`project_sub_id`, `project_sub_name`, `project_main_id`) VALUES
(1, '1.1.1.พัฒนาการใช้นํ้าโขงเพื่อการบรรเทาวิกฤติภัยแล้งในพื้นที่ลุ่มนํ้าห้วยหลวงและลุ่มนํ้าข้างเคียง', 1),
(2, '1.1.2. ผันนํ้าโขง-เลย-ชี-มูลโดยแรงโน้มถ่วง', 1),
(3, '1.1.3. ก่อสร้างอ่างเก็บนํ้าขนาดใหญ่', 1),
(4, '1.1.4. ก่อสร้างอ่างเก็บนํ้าขนาดเล็ก', 1),
(5, '1.1.5. พัฒนาแก้มลิงพร้อมอาคารประกอบ', 1),
(6, '1.1.6. พัฒนาลุ่มนํ้าชี', 1),
(7, '1.1.7. พัฒนาคลองส่งนํ้าเพื่อการเกษตร', 1),
(8, '1.1.8. สถานีสูบนํ้าด้วยไฟฟ้า พร้อมระบบส่งนํ้า', 1),
(9, '1.1.9. ก่อสร้างฝาย และผนังป้องกันตลิ่ง', 1),
(10, '1.1.10. ก่อสร้างระบบกระจายนํ้า', 1),
(11, '4.1.1. ส่งเสริมการพัฒนาปัจจัยการผลิต', 10),
(12, '4.1.2. เพิ่มประสิทธิภาพการผลิต', 10),
(13, '4.1.3. วิจัยและพัฒนาเทคโนโลยีในการผลิต', 10),
(14, '4.1.4. พัฒนาองค์ความรู้ให้เกษตรกร', 10),
(15, '4.1.5. การสร้างความเข้มแข็งกลุ่มเกษตร องค์กรเกษตรกร และสถาบันเกษตรกร', 10),
(16, '4.1.6. การบริหารจัดการพื้นที่การเกษตรด้วยเทคโนโลยีภูมิสารสนเทศ', 10),
(17, '4.1.7. ส่งเสริมการผลิตข้าวสู่มาตราฐานเกษตรอินทรีย์', 10),
(18, '4.1.8. ส่งเสริมการทำเกษตรแปลงใหญ่', 10),
(19, '4.1.9. พัฒนาแหล่งนํ้าเพื่อการเกษตร', 10),
(20, '4.1.10. ส่งเสริมการแปรรูปข้าวและผลิตภัณฑ์จากข้าว', 10),
(21, '4.1.11. เชื่อมโยงเครือข่ายด้านการผลิตและการตลาดในสถาบันเกษตร', 10),
(22, '4.2.1. ส่งเสริมการปลูกอ้อยในพื้นที่นาไม่เหมาะสม', 11),
(23, '4.2.2. เพิ่มผลผลิตอ้อย', 11),
(24, '4.2.3. ปรับปรุงอ้อยพันธ์ุดี', 11),
(25, '4.2.4. ส่งเสริมการผลิตอ้อยอินทรีย์', 11),
(26, '4.2.5. การปรับปรุงบำรุงดิน', 11),
(27, '4.3.1. ส่งเสริมมัมสำปะหลังพันธุ์ดี', 12),
(28, '4.3.2. พัฒนานวัตกรรมมันสำปะหลังแปลงเป็นนํ้าตาล', 12),
(29, '4.3.3. การแปรรุปมันสำปะหลังเพื่อสร้างมูลค่าเพิ่ม', 12),
(30, '4.3.4. ส่งเสริมการปลูกมันสำปะหลังคุณภาพในรุปแปลงใหญ่', 12),
(31, '4.3.5. การปรับปรุงบำรุงดิน', 12),
(32, '4.4.1. ส่งเสริมการรักษาโคแม่พันธ์◌ุเพื่อผลิตโคขุนคุณภาพดี', 13),
(33, '4.4.2. เพิ่มประสิทธิภาพการเลี้ยงโคขุนคุณภาพแบบแปลงใหญ่', 13),
(34, '4.4.3. ประกวดโคขุณเพื่อเพิ่มมูลค่าและส่งเสริมการเลี้ยงโคขุตคุณภาพสนองความต้องการตลาด', 13),
(35, '4.4.4. ส่งเสริมการใช้พลังงานแสงอาทิตย์เพื่อลดค่าใช้จ่ายในฟาร์มปศุสัตว์', 13),
(36, '4.4.5. ส่งเสริมและพัฒนาโรงฆ่าสัตว์และแปรรูปเนื้อโคขุน', 13),
(37, '4.4.6. การบริหารจัดการตลาดโคขุนคุณภาพทั้งในและต่างประเทศ', 13),
(38, '4.4.7. จัดหาและเพิ่มช่องทางตลาดโคขุนคุณภาพทั้งในและต่างประเทศ', 13),
(39, '4.4.8. ผลิตและแปรรูปโคขุน', 13),
(40, '4.4.9. ศูนย์จำหน่ายผลิตภัณฑ์โคขุน', 13),
(41, '5.2.1. สร้างต้นแบบนวัตกรรมการใช้พลังานเพื่อการเกษตร', 15),
(42, '5.3.1. ยกระดับการผลิตพีชสมุนไพรมาตราฐาน GAP/อินทรีย์', 16),
(43, '5.3.2. สร้างมูลค่าเพิ่มในการแปรรูปสมุนไพร', 16),
(44, '5.3.3. วิจัยการแพทย์แผนไทยและสมุนไพร', 16),
(45, '5.3.4. ศึกษาสาระสำคัญพีชสมุนไพรที่เหมาะสมกับพื้นที่', 16),
(46, '5.3.5. วิจัยและพัฒนาผลิตภัณฑ์สมุนไพรในท้องถิ่นสู่ผลิตภัณฑ์ Best Product', 16),
(47, '5.3.6. ส่งเสริมการใช้ยาสมุนไพรในระบบบริการสาธารณสุข', 16),
(48, '5.3.7. พัฒนาศักยภาพแพทย์แผนไทยเพื่อสร้างอาชีพ', 16),
(49, '5.3.8. วิจัยตลาดสมุนไพร', 16),
(50, '5.3.9. พัฒนาผลิตภัณฑ์สปาจากมันแกวบรบือ ไผ่ ทานาคาอีสาน และดอกไม้หอมจำปาลาว', 16),
(51, '5.3.10. ส่งเสริมสถานประกอบการให้ผ่านมาตราฐานสากล 7 กิจการ', 16),
(52, '5.3.10. ขับเคลื่อนเมื่องสมุนไพร', 16),
(53, '6.1.1. ส่งเสริมและพัฒนาการผลิตตามระบบเกษตรกรรมยั่งยืน', 17),
(54, '6.1.2. ส่งเสริมและพัฒนาแหล่งเรียนรู้การเกษตรในระบบเกษตรยั่งยืน', 17),
(55, '6.1.3. เกษตรกรรมยั่งยืนได้และสามารถเกื้อกูลเชื่อมโยงสื่อสาร', 17),
(56, '6.1.4. ส่งเสริมการจัดทำระบบการรับรองแบบมีส่วนร่วม(PGS)', 17),
(57, '6.1.5. สร้างต้นแบบนวัตกรรมการใช้พลังงานเพื่อการเกษตร', 17),
(58, '6.1.6. การพัมนาตราสัญลักษณ์และบรรจุภัณฑ์', 17),
(59, '6.2.1. เพิ่มศักยภาพการผลิตสินค้าเกษตรปลอดภัย และเกษตรอินทรีย์สู่ระดับสินค้าคุณภาพสูง', 18),
(60, '6.2.2. ส่งเสริมการตลาดและมหกรรมอาหารปลอดภัยและเกษตรอินทรีย์กลุ่มจังหวัด', 18),
(61, '6.2.3. พัฒนาศักยภาพผู้ประกอบการและผู้ผลิตและสร้างเครือข่ายผู้ประกอบการภัตตาคารร้านอาหารมาตราฐาน', 18),
(62, '7.2.1. เชื่อมโยงเครือข่ายด้านการผลิตและการตลาดในสถาบันเกษตร', 20),
(63, '7.2.2. ส่งเสริมและพัมนาตลาดสินค้าเกษตรรองรับระบบเศรษฐกิจดิจิทัล', 20),
(64, '7.2.3. การจัดงานเทศกาลวันข้าวห้อมมะลิโลก', 20),
(65, '7.2.4. การพัฒนาระบบค้าส่งกลุ่มจังหวัดเชื่อมโยงตรงกับผู้ซื้อและการตลาดสมัยใหม่แบบหลายช่องทาง', 20),
(66, '1.1.1. พัฒนาผู้ประกอบการเชิงรุก (Smart Traders)', 21),
(67, '1.1.2. พัฒนาเครือข่าย SMEs และผู้ประกอบการบนเส้นทาง EWEC', 21),
(68, '1.1.3. เพิ่มศักยภาพ SMEs และผู้ประกอบการแปรรูปผลิตภัณฑ์กลุ่มจังหวัด', 21),
(69, '1.1.4. พัฒนากลุ่ม BIZ Club', 21),
(70, '1.4.1. พัมนาคุณภาพผลิตภัณฑ์ผ้าให้ได้มาตราฐานผลิตภัณฑ์ชุมชน(มผช.)', 24),
(71, '2.1.1. พัฒนาระบบขนส่งทางบก 1) พัฒนาโครงข่ายคมนาคมขนส่งเส้นทางสายหลัก', 25),
(72, '2.1.1. พัฒนาระบบขนส่งทางบก 2) พัฒนาโครงข่ายคมนาคมขนส่งเส้นทางสายรอง', 25),
(73, '2.1.2. พัฒนาระบบขนส่งทางอากาศ 1) พัฒนาท่าอากาศยานขอนแก่น', 25),
(74, '2.1.2. พัฒนาระบบขนส่งทางอากาศ 2) พัฒนาท่าอากาศยานร้อยเอ็ด', 25),
(75, '2.2.1. การพัฒนาด้านบุคลากรโลจิสติกส์ที่มีทักษะขั้นสูง', 26),
(76, '2.2.2. พัฒนาฐานข้อมูลกลางด้านโลจิสติกส์ของกลุ่มจังหวัด เพื่อรองรับ digital transformation', 26),
(77, '2.2.3. การพัมนาโครงข่ายคมนาคมเชื่อมโยงระดับจังหวัดระดับภาค ระดับชาติ และระดับภูมิภาค', 26),
(78, '2.2.4. ยกระดับผู้ประกอบการและเพิ่มประสิทธิภาพเครือข่ายผู้ประกอบการโลจิสติกส์', 26),
(79, '2.3.1. พัฒนาระบบขนส่งระบบรางร้อยแก่นสารสินธุ์  Railway Innopolis', 27),
(80, '2.3.2. สถาบันวิจัยและพัฒนาอุตสากรรมระบบราง', 27),
(81, '2.3.3. ห้องทดลองระบบรางและต้นแบบรถแทรมขนาดเท่าของจริง:โครงการแทรมน้อยรอบบึงแก่นนคร', 27),
(82, '2.3.4. นิคมอุสาหกรรมระบบราง', 27),
(83, '2.3.5. ท่าเรือบก', 27),
(84, '2.3.6. ยกระดับ มทร. อีสานวิทยาเขตขอนแก่นเป็นมหาวิทยาลัยระบบราง', 27),
(85, '2.4.1. อุตสาหกรรมอากาศยานและการบินจังหวัดขอนแก่น', 28),
(86, '3.1.1. ยกระดับฝีมือแรงงาน', 29),
(87, '3.1.2. พัฒนาศักยภาพแรงงานเกี่ยวกับอุตสาหกรรมเครื่องจักรกลหนัก', 29),
(88, '3.1.3. พัฒนาประสิทธิภาพผู้ประกอบการโลจิสติกส์ กลุ่มจังหวัด', 29),
(89, '3.1.4. พัฒนาเครือข่ายผู้ประกอบการโลจิสติกส์ทั้ในและนอกกลุ่มจังหวัด', 29),
(90, '4.1.1. ส่งเสริมการตลาดผลิตภัณฑ์กลุ่มจังหวัดในประเทศ', 30),
(91, '4.1.2. ส่งเสริมการตลาดผลิตภัณฑ์กลุ่มจังหวัดในต่างประเทศ', 30),
(92, '4.1.3. ส่งเสริมการตลาดพีชผลการเกษตรกลุ่มจังหวัด', 30),
(93, '4.1.4. การจัดแสดงและจำหน่ายสินค้ากลุ่มจังหวัดในและนอกภูมิภาค', 30),
(94, '4.1.5. มหกรรมของดีผลิตภัณฑ์กลุ่มร้อยแก่นสารสินธุ์', 30),
(95, '4.2.1. โครงการตลาดดิจิทัล', 31),
(96, '4.2.2. โครงการส่งเสริมเศรษฐกิจแบบแบ่งปัน(Sharing Economy)พัฒนาตัวกลางผู้ให้บริการเชื่อมโยงผู้ผลิต และผู้ซื้อ', 31),
(97, '1.1.1. พัฒนาและฟื้นฟูแหล่งท่องเที่ยวสำคัญของกลุ่มจังหวัด', 32),
(98, '1.1.2. พัฒนาสิ่งอำนวยสะดวกด้านการท่องเทียว', 32),
(99, '1.1.3. พัฒนาเส้นทางเพื่อเชื่อมโยงแหล่งท่องเที่ยว', 32),
(100, '1.1.4. สร้าง landmark สถานที่◌่ท่องเที่ยวกลุ่มจังหวัด', 32),
(101, '1.1.5. โครงการส่งเสริมการท่องเที่ยวไปยังพื้นที่ใหม่ และการท่องเที่ยวในช่วงนอกฤดูกาล', 32),
(102, '1.1.6. โครงการพัฒนาท่องเที่ยวชุมชนเน้นกลุ่มลูกค้าองค์กร', 32),
(103, '1.1.7. โครงการส่งเสริมและสนับสนุนมาตราฐานคุณภาพอาหารเพื่อตอบสนองต่ออุตสาหกรรมการท่องเที่ยวกลุ่มจังหวัด', 32),
(104, '1.1.8. เพิ่มประสิทธิภาพการรักษาความปลอดภัยและการสื่อสารที่ทันสมัยเพื่อการท่องเที่ยว', 32),
(105, '2.1.1. พัฒนาสถานประกอบการด้านบริการการท่องเที่ยวให้ได้มาตราฐาน', 33),
(106, '2.1.2. พัฒนาขีดความสามารถของบุคลากรด้านการท่องเที่ยวสู่ความเป็นเลิศด้านการบริการ', 33),
(107, '2.1.3. พัฒนาผลิตภัณฑ์ที่เกี่ยวเนื่องกับการท่องเที่ยว', 33),
(108, '2.2.1. การยกระดับการท่องเที่ยวเชิงสุขภาพและสมุนไพร', 34),
(109, '2.2.2. การพัฒนาศักยภาพทรัพยากรบุคคลสู่ตลาดแรงงานส่งเสริมการท่องเที่ยว', 34),
(110, '2.2.3. การเพิ่มช่องทางการจำหน่ายสินค้าผลิตภัณฑ์สมุนไพรและบริการแพทย์แผนไทยในจังหวัด/ประเทศ/นอกประเทศ', 34),
(111, '2.2.4. การส่งเสริมและพัฒนากลุ่มวิสาหกิจด้านสมุนไพรผลิตภัณฑ์สมันไพร และภูมิปัญญาท้องถิ่นเพื่อรองรับการท่องเที่ยว', 34),
(112, '2.3.1. โครงการพัฒนา Platformเชื่อมโยงธุรกิจและบูรณาการตลาดท่องเที่ยวกลุ่มจังหวัด', 35),
(113, '2.3.2. โครงการพัฒนาบุคลากรการท่องเที่ยวในอุตสาหกรรมท่องเที่ยวทั้งระบบ', 35),
(114, '2.3.3. โครงการสร้างเครือข่ายการท่องเที่ยวกลุ่มจังหวัดสู่คนไทยทุกกลุ่ม', 35),
(115, '3.1.1. ประชาสัมพันธ์การท่องเที่ยวกลุ่มจังหวัด 1) เอกสารประชาสัมพันธ์การท่องเที่ยว', 36),
(116, '3.1.1. ประชาสัมพันธ์การท่องเที่ยวกลุ่มจังหวัด 2) ประชาสัมพันธ์การท่องเที่ยวแบบ digital', 36),
(117, '3.1.1. ประชาสัมพันธ์การท่องเที่ยวกลุ่มจังหวัด 3) ป้ายประชาสัมพันธ์การท่องเที่ยว', 36),
(118, '3.1.1. ประชาสัมพันธ์การท่องเที่ยวกลุ่มจังหวัด 4) สื่อสร้างสรรค์ส่งเสริมกาาท่องเที่ยว', 36),
(119, '3.1.1. ประชาสัมพันธ์การท่องเที่ยวกลุ่มจังหวัด 5)จัดกิจกรรมส่งเสริมการขายสินค้าและบริการด้านการท่องเที่ยว(road show) ของกลุ่มจังหวัด', 36),
(120, '3.1.2. ส่งเสริมการท่องเที่ยวกลุ่มจังหวัด 1) กิจกรรมการท่องเที่ยวิถีชุมชน', 36),
(121, '3.1.2. ส่งเสริมการท่องเที่ยวกลุ่มจังหวัด 2) กิจกรรมท่องเที่ยวสไตล์แบบลึกซึ้ง', 36),
(122, '3.1.2. ส่งเสริมการท่องเที่ยวกลุ่มจังหวัด 3) กิจกรรมการท่องเที่ยวเชิงประเพณีวัฒนธรรม', 36),
(123, '3.1.2. ส่งเสริมการท่องเที่ยวกลุ่มจังหวัด 4) กิจกรรมท่องเที่ยวเชิงเกษตร', 36),
(124, '3.1.2. ส่งเสริมการท่องเที่ยวกลุ่มจังหวัด 5) กิจกรรมท่องเที่ยวยุคก่อนประวัติศาสตร์ด้านการศึกษาวิทยาศาสตร์ ธรณีวิทยา', 36),
(125, '3.1.2. ส่งเสริมการท่องเที่ยวกลุ่มจังหวัด 6)พัฒนาระบบฐานข้อมูล Digital ด้านการท่องเที่ยวกลุ่มจังหวัด (Big Data)', 36),
(126, '3.1.2. ส่งเสริมการท่องเที่ยวกลุ่มจังหวัด 7) สำรวจแหล่งท่องเที่ยวใหม่ เพื่อสร้าง Story และจัดเส้นทางท่องเที่ยว', 36),
(127, '4.1.1. พัฒนานักออกแบบรุ่นใหม่ (Young Designer) ของผลิตภัณฑ์ชุมชน', 37),
(128, '4.1.2. อนุรักษ์สินทรัพย์ทางวัฒนธรรมและภูมิปัญญาท้องถิ่นเพื่อส่งเสริมการท่องเที่ยวโดยชุมชน', 37),
(129, '4.1.3. ออกแบบและพัฒนาผลิตภัณฑ์ผ้าด้วยเทคโนโลยีเชิงสร้างสรรค์', 37),
(130, '4.1.4. ส่งเสริมพัฒนาตลาดผ้าไหมกลุ่มจังหวัด', 37);

-- --------------------------------------------------------

--
-- Table structure for table `project_v2`
--

CREATE TABLE `project_v2` (
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
-- Dumping data for table `project_v2`
--

INSERT INTO `project_v2` (`project_id`, `project_name`, `development_subject`, `project_roadmap`, `project_main`, `project_sub`, `operation_type`, `project_code`, `use_budget`, `budget_year`, `institution`, `province`, `target_user`, `project_objective`, `project_result`, `project_additional`, `budget_province_plan`, `budget_province_receive`, `budget_province_use`, `budget_department_plan`, `budget_department_receive`, `budget_department_use`, `budget_local_plan`, `budget_local_receive`, `budget_local_use`, `budget_private_plan`, `budget_private_receive`, `budget_private_use`, `user_id`, `file_path`) VALUES
(1, 'ergearg', 1, 1, 1, 1, 'asdf', 'asdf', 'as', 'fsadf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, '');

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `development_subject` (`development_subject`),
  ADD KEY `project_roadmap` (`project_roadmap`),
  ADD KEY `project_main` (`project_main`),
  ADD KEY `project_sub` (`project_sub`);

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `development_subject` (`development_subject`),
  ADD KEY `project_roadmap` (`project_roadmap`),
  ADD KEY `project_sub` (`project_sub`),
  ADD KEY `project_main` (`project_main`);

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
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `project_draft`
--
ALTER TABLE `project_draft`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_sub`
--
ALTER TABLE `project_sub`
  MODIFY `project_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `project_v2`
--
ALTER TABLE `project_v2`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`development_subject`) REFERENCES `development_subject` (`development_id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`project_roadmap`) REFERENCES `project_roadmap` (`project_roadmap_id`),
  ADD CONSTRAINT `project_ibfk_4` FOREIGN KEY (`project_main`) REFERENCES `project_main` (`project_main_id`),
  ADD CONSTRAINT `project_ibfk_5` FOREIGN KEY (`project_sub`) REFERENCES `project_sub` (`project_sub_id`);

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
  ADD CONSTRAINT `project_v2_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `project_v2_ibfk_2` FOREIGN KEY (`development_subject`) REFERENCES `development_subject` (`development_id`),
  ADD CONSTRAINT `project_v2_ibfk_3` FOREIGN KEY (`project_roadmap`) REFERENCES `project_roadmap` (`project_roadmap_id`),
  ADD CONSTRAINT `project_v2_ibfk_4` FOREIGN KEY (`project_sub`) REFERENCES `project_sub` (`project_sub_id`),
  ADD CONSTRAINT `project_v2_ibfk_5` FOREIGN KEY (`project_main`) REFERENCES `project_main` (`project_main_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
