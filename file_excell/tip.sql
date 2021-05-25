-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 11:50 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectstudenv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `appoint_id` int(255) NOT NULL,
  `project_id` int(15) NOT NULL,
  `appoint_date_start` datetime NOT NULL,
  `appoint_date_end` datetime NOT NULL,
  `appoint_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(15) NOT NULL,
  `appoint_status` int(2) NOT NULL,
  `recorder` int(15) NOT NULL,
  `appoint_recorder` datetime NOT NULL DEFAULT current_timestamp(),
  `meet_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`appoint_id`, `project_id`, `appoint_date_start`, `appoint_date_end`, `appoint_comment`, `teacher_id`, `appoint_status`, `recorder`, `appoint_recorder`, `meet_link`) VALUES
(1, 631590208, '2021-05-23 09:38:00', '2021-05-23 14:40:00', 'ส่งฐานข้อมูลและER เพื่อความถูกต้องก่อนเขียนโปรแกรม  ', 6408, 4, 594235002, '2021-05-19 23:40:37', '</h2>'),
(4, 631590208, '2021-05-25 14:41:00', '2021-05-25 16:19:00', 'ส่งหน้าออกแบบเว็บไซต์', 6408, 2, 594235008, '2021-05-20 00:12:00', ''),
(5, 631590208, '2021-05-26 10:36:00', '2021-05-26 14:33:00', 'ส่งหน้าระบบ การจัดการข้อมูลการนัดพบของอาจารย์ที่ปรึกษาโครงงาน', 6408, 1, 594235008, '2021-05-20 13:38:28', 'https://meet.google.com/fme-ewcx-ryy'),
(6, 631590208, '2021-05-27 11:30:00', '2021-05-27 15:00:00', 'ส่งงานระบบในsส่วนอาจารย์ประจำวิชา ส่งงานระบบในsส่วนอาจารย์ประจำวิชา ส่งงานระบบในsส่วนอาจารย์ประจำวิชาส่งงานระบบในsส่วนอาจารย์ประจำวิชาส่งงานระบบในsส่วนอาจารย์ประจำวิชาส่งงานระบบในsส่วนอาจารย์ประจำวิชา', 6408, 1, 594235008, '2021-05-20 13:42:00', ''),
(7, 631595200, '2021-05-28 12:24:00', '2021-05-28 14:22:00', 'เขียนโปรแกรมเชื่อมต่ออุปกรณ์', 6408, 1, 594235052, '2021-05-20 14:23:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `appoint_status`
--

CREATE TABLE `appoint_status` (
  `appoint_status_id` int(2) NOT NULL,
  `appoint_status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appoint_status_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_calendar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ionic_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appoint_status`
--

INSERT INTO `appoint_status` (`appoint_status_id`, `appoint_status_name`, `appoint_status_class`, `color_calendar`, `ionic_icon`) VALUES
(1, 'รอยืนยัน', 'warning text-dark', 'Orange', 'time-outline'),
(2, 'ยืนยัน', 'success', 'Blue', 'checkmark-circle-outline'),
(3, 'ยกเลิก', 'light text-dark', 'Orange', 'close-circle-outline'),
(4, 'เสร็จสิ้น', 'primary', 'Green', 'checkmark-done-circle-outline'),
(5, 'เปลี่ยน', 'info', 'red', 'shuffle-outline'),
(6, 'ผิดนัด', 'danger', 'Orange', 'close-circle-outline');

-- --------------------------------------------------------

--
-- Table structure for table `com05`
--

CREATE TABLE `com05` (
  `com05_id` int(255) NOT NULL,
  `appoint_id` int(255) NOT NULL,
  `project_id` int(15) NOT NULL,
  `comment_teacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment_assign` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `meet_check` int(2) NOT NULL,
  `teacher_id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `com05`
--

INSERT INTO `com05` (`com05_id`, `appoint_id`, `project_id`, `comment_teacher`, `comment_assign`, `score`, `meet_check`, `teacher_id`, `student_id`) VALUES
(1, 1, 631590208, 'ER ยังมีข้อผิดพลาดปรับแก้เล็กน้อย', 'ออกแบบหน้าเว็บไซต์', 4, 1, 6408, 594235002);

-- --------------------------------------------------------

--
-- Table structure for table `filee`
--

CREATE TABLE `filee` (
  `file_id` int(255) NOT NULL,
  `project_id` int(255) NOT NULL,
  `file_type` int(255) NOT NULL,
  `file_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_apporve` int(2) NOT NULL DEFAULT 1,
  `teacher_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `filee`
--

INSERT INTO `filee` (`file_id`, `project_id`, `file_type`, `file_link`, `file_apporve`, `teacher_id`) VALUES
(1, 631590208, 1, 'https://drive.google.com/file/d/1PYlwlsOY30kN5GjWCLmPzzZTeX-NYhBC/view?usp=sharing', 1, 6410),
(2, 631590208, 3, 'https://drive.google.com/file/d/1MNUHHuvez6AT6vVuXwVooZeRk6nbEefR/view?usp=sharing', 1, 6410);

-- --------------------------------------------------------

--
-- Table structure for table `file_type`
--

CREATE TABLE `file_type` (
  `file_type_id` int(11) NOT NULL,
  `file_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_type_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file_type`
--

INSERT INTO `file_type` (`file_type_id`, `file_type_name`, `file_type_icon`, `file_detail`) VALUES
(1, 'COM-04', 'far fa-star', 'ขออนุญาตดำเนินงานโครงงาน'),
(3, 'COM-04-3', 'far fa-paper-plane', 'เอกสารการนำเสนอและขอสอบเค้าโครงโครงงาน ฉบับสมบูรณ์');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `student_major_id` int(2) NOT NULL,
  `student_major_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`student_major_id`, `student_major_name`) VALUES
(1, 'เทคโนโลยีสารสนเทศ'),
(2, 'วิทยาการคอมพิวเตอร์');

-- --------------------------------------------------------

--
-- Table structure for table `meet_check`
--

CREATE TABLE `meet_check` (
  `meet_check_id` int(2) NOT NULL,
  `meet_check_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meet_check`
--

INSERT INTO `meet_check` (`meet_check_id`, `meet_check_name`) VALUES
(1, 'มาตามนัด'),
(2, 'มาสาย');

-- --------------------------------------------------------

--
-- Table structure for table `pr`
--

CREATE TABLE `pr` (
  `pr_id` int(11) NOT NULL,
  `pr_header` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pr_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pr_record` int(10) NOT NULL,
  `pr_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pr`
--

INSERT INTO `pr` (`pr_id`, `pr_header`, `pr_content`, `pr_record`, `pr_date`) VALUES
(1, 'แจ้งกำหนดการสอบ 3/2563', 'ทดสอบประชาสัมพันธ์ทดสอบประชาสัมพันธ์ทดสอบประชาสัมพันธ์ทดสอบประชาสัมพันธ์ทดสอบประชาสัมพันธ์', 999999999, '2021-05-22 05:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(15) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_type` int(2) NOT NULL,
  `project_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_type`, `project_status`) VALUES
(631590208, 'ระบบบันทึกการเข้าพบอาจารย์ที่ปรึกษาโครงงาน', 1, 1),
(631592127, 'แอนิเมชัน 3 มิติ เรื่อง ตำนานมวยไทย', 3, 1),
(631594348, 'ระบบจัดการเนื้อหา กรณีศึกษา เพอร์เฟคแอคเคาท์ติ้ง', 1, 1),
(631594565, 'สื่อแอนิเมชัน 2 มิติ เรื่อง 1 วันรอบเมืองสงขลา', 3, 1),
(631594600, 'ระบบจัดการการบริการของแผนกทันตกรรมโรงพยาบาลเมืองสงขลา', 1, 1),
(631595200, ' เครื่องให้อาหารเป็ดอัจฉริยะด้วยอินเทอร์เน็ตทุกสรรสิ่ง', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_has_adviser`
--

CREATE TABLE `project_has_adviser` (
  `pha_key` int(50) NOT NULL,
  `pha_project_id` int(15) NOT NULL,
  `pha_teacher_id` int(15) NOT NULL,
  `pha_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_has_adviser`
--

INSERT INTO `project_has_adviser` (`pha_key`, `pha_project_id`, `pha_teacher_id`, `pha_type`) VALUES
(3, 631594600, 6405, 1),
(4, 631595200, 6411, 1),
(5, 631592127, 6418, 1),
(6, 631592127, 6413, 2),
(7, 631594348, 6419, 1),
(8, 631594565, 6418, 1),
(9, 631594565, 6413, 2),
(11, 631590208, 6408, 1),
(12, 631590208, 6410, 2),
(13, 631595200, 6408, 2);

-- --------------------------------------------------------

--
-- Table structure for table `project_has_student`
--

CREATE TABLE `project_has_student` (
  `phs_key` int(50) NOT NULL,
  `phs_project_id` int(15) NOT NULL,
  `phs_student_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_has_student`
--

INSERT INTO `project_has_student` (`phs_key`, `phs_project_id`, `phs_student_id`) VALUES
(2, 631594600, 594235046),
(3, 631594600, 594235000),
(4, 631595200, 594235052),
(5, 631592127, 594235021),
(6, 631592127, 594235027),
(7, 631594348, 594235043),
(8, 631594348, 594235048),
(9, 631594565, 594235045),
(10, 631594565, 594235065),
(13, 631590208, 594235002),
(14, 631590208, 594235008);

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `project_status_id` int(2) NOT NULL,
  `project_status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_status_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`project_status_id`, `project_status_name`, `project_status_class`) VALUES
(1, 'ดำเนินการ', 'warning text-dark'),
(2, 'เสร็จสิ้น', 'success'),
(3, 'ยกเลิก', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `project_type_id` int(2) NOT NULL,
  `project_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`project_type_id`, `project_type_name`) VALUES
(1, 'ระบบ'),
(2, 'วิจัย'),
(3, 'อเนมิชั่น'),
(4, 'IOT');

-- --------------------------------------------------------

--
-- Table structure for table `regis_project`
--

CREATE TABLE `regis_project` (
  `id` int(100) NOT NULL,
  `subject_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `major_id` int(2) NOT NULL,
  `project_id` int(15) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_type` int(2) NOT NULL,
  `student1_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `student1_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student1_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student1_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student2_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `student2_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student2_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student2_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher1_id` int(10) NOT NULL,
  `teacher2_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regis_project`
--

INSERT INTO `regis_project` (`id`, `subject_id`, `major_id`, `project_id`, `project_name`, `project_type`, `student1_id`, `student1_title`, `student1_name`, `student1_lastname`, `student2_id`, `student2_title`, `student2_name`, `student2_lastname`, `teacher1_id`, `teacher2_id`) VALUES
(1, 'EXJWaX', 1, 631594600, 'ระบบจัดการการบริการของแผนกทันตกรรมโรงพยาบาลเมืองสงขลา', 1, '594235046', 'นางสาว', 'นิลุบล', 'ศรีจันทร์งาม', '594235056', 'นางสาว', 'รุ่งอาทิตา', 'รอดแสง', 6405, 0),
(2, 'EXJWax', 1, 631595200, ' เครื่องให้อาหารเป็ดอัจฉริยะด้วยอินเทอร์เน็ตทุกสรรสิ่ง', 4, '594235052', 'นาย', 'มูฮำหมัดพันดี', 'ดอโบ๊ะ ', '000000000', '', '', '', 6411, 0),
(3, 'EXJWaX', 1, 631592127, 'แอนิเมชัน 3 มิติ เรื่อง ตำนานมวยไทย', 3, '594235021', 'นางสาว', 'รัตนาภรณ์', 'รักนวล', '594235027', 'นางสาว', 'ศิริณญา', 'เกตุแก้ว', 6418, 6413),
(4, 'EXJWaX', 1, 631594348, 'ระบบจัดการเนื้อหา กรณีศึกษา เพอร์เฟคแอคเคาท์ติ้ง', 1, '594235043', 'นาย', 'ธนวัฒน์', 'ปานเล่ห์', '594235048', 'นาย', 'ปฐมพร', 'อติวัฒนวงศ์', 6419, 0),
(5, 'EXJWaX', 1, 631594565, 'สื่อแอนิเมชัน 2 มิติ เรื่อง 1 วันรอบเมืองสงขลา', 3, '594235045', 'นางสาว', 'นาเดีย', 'ไชยแก้ว', '594235065', 'นางสาว', 'อริษา', 'ขุนพล', 6418, 0),
(6, 'EXJWaX', 1, 631591447, 'ระบบรับสมัครโรงเรียนแสงธรรมวิทยา', 0, '594235014', 'คำนำหน้า', 'นุรอาซิกีน', 'บือซา', '594235047', 'นางสาว', 'นุูรูฮิดายะห์', 'ยา', 6404, 0),
(7, 'EXJWaX', 1, 631590208, 'ระบบบันทึกการเข้าพบอาจารย์ที่ปรึกษาโครงงาน', 1, '594235002', 'นางสาว', 'ขวัญทิพย์', 'ภูวดลรังสรรค์', '594235008', 'นาย', 'ดานิยาน', 'พร้อมมูล', 6408, 6411);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `score_score` int(3) NOT NULL,
  `score_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `score_score`, `score_detail`) VALUES
(1, 1, 'มีความก้าวหน้า แต่งานออกมาไม่ดี ไม่ตรงกับความต้องการ'),
(2, 2, 'มีความก้าวหน้า งานออกมาตรงความต้องการ แต่งานน้อยไป'),
(3, 3, 'มีความก้าวหน้าปานกลาง อยู่ในระดับที่น่าพอใจ'),
(4, 4, 'มีความก้าวหน้าของงานอยู่ในขั้นดี ตรงตามที่อาจารย์ที่ปรึกษากำหนดไว้'),
(5, 5, 'มีความก้าวหน้าของงานอยู่ในขั้นดีมาก ตรงตามที่อาจารย์ที่ปรึกษากำหนดไว้ มาตรงตามนัด'),
(6, 0, 'ไม่มีความก้าวหน้าของงานเลย');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(15) NOT NULL,
  `student_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_major` int(2) NOT NULL,
  `student_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0000000000',
  `student_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg',
  `student_type` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_title`, `student_name`, `student_major`, `student_lastname`, `student_phone`, `student_email`, `student_password`, `student_photo`, `student_type`) VALUES
(594235000, 'นางสาว', 'รุ่งอาทิตา', 1, 'รอดแสง', '0000000000', '594235000@parichat.skru.ac.th', 'f36e291139eba70d36742c31ea3467f9', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235002, 'นางสาว', 'ขวัญทิพย์', 1, 'ภูวดลรังสรรค์', '0000000000', '594235002@parichat.skru.ac.th', 'dd81847bacec236afa81d327087af80b', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235008, 'นาย', 'ดานิยาน', 1, 'พร้อมมูล', '0000000000', '594235008@parichat.skru.ac.th', '1b141834cd8071a8ed9b1682a60b8a33', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235014, 'คำนำหน้า', 'นุรอาซิกีน', 1, 'บือซา', '0000000000', '594235014@parichat.skru.ac.th', 'f150bd63c87e7f577e1ffd49101cce6d', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235021, 'นางสาว', 'รัตนาภรณ์', 1, 'รักนวล', '0000000000', '594235021@parichat.skru.ac.th', 'c2844b4253e2852cd66cbde55afd98db', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235027, 'นางสาว', 'ศิริณญา', 1, 'เกตุแก้ว', '0000000000', '594235027@parichat.skru.ac.th', '395e622ea5f9a3ce0a808d52ba3b6b29', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235043, 'นาย', 'ธนวัฒน์', 1, 'ปานเล่ห์', '0000000000', '594235043@parichat.skru.ac.th', '73e3b4e5cb3674f28228c53d030283ab', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235045, 'นางสาว', 'นาเดีย', 1, 'ไชยแก้ว', '0000000000', '594235045@parichat.skru.ac.th', '4da32dd14197c7764edfc04067702622', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235046, 'นางสาว', 'นิลุบล', 1, 'ศรีจันทร์งาม', '0000000000', '594235046@parichat.skru.ac.th', 'a713bd6f052d26d6dc3b712c044dd59f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235047, 'นางสาว', 'นุูรูฮิดายะห์', 1, 'ยา', '0000000000', '594235047@parichat.skru.ac.th', '6c24e7a5a85520620cace974b5354993', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235048, 'นาย', 'ปฐมพร', 1, 'อติวัฒนวงศ์', '0000000000', '594235048@parichat.skru.ac.th', '34ec182e56d3b4b4671faa1b4d1ce912', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235052, 'นาย', 'มูฮำหมัดพันดี', 1, 'ดอโบ๊ะ ', '0000000000', '594235052@parichat.skru.ac.th', '7d387051ef7af1bb6f02822ba6366056', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235065, 'นางสาว', 'อริษา', 1, 'ขุนพล', '0000000000', '594235065@parichat.skru.ac.th', '9299342467f34a399a26c47595538e73', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_active`
--

CREATE TABLE `student_active` (
  `active_id` int(2) NOT NULL,
  `active_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_active`
--

INSERT INTO `student_active` (`active_id`, `active_name`) VALUES
(1, 'ปกติ'),
(2, 'ปิดการใช้งาน');

-- --------------------------------------------------------

--
-- Table structure for table `subject_day`
--

CREATE TABLE `subject_day` (
  `day_id` int(2) NOT NULL,
  `day_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_day`
--

INSERT INTO `subject_day` (`day_id`, `day_name`) VALUES
(1, 'จันทร์'),
(2, 'อังคาร'),
(3, 'พุธ'),
(4, 'พฤหัสบดี'),
(5, 'ศุกร์');

-- --------------------------------------------------------

--
-- Table structure for table `subject_hash_project`
--

CREATE TABLE `subject_hash_project` (
  `sp_id` int(20) NOT NULL,
  `sp_subject_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sp_project_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_hash_project`
--

INSERT INTO `subject_hash_project` (`sp_id`, `sp_subject_id`, `sp_project_id`) VALUES
(2, 'EXJWaX', 631594600),
(3, 'EXJWax', 631595200),
(4, 'EXJWaX', 631592127),
(5, 'EXJWaX', 631594348),
(6, 'EXJWaX', 631594565),
(8, 'EXJWaX', 631590208);

-- --------------------------------------------------------

--
-- Table structure for table `subject_hash_student`
--

CREATE TABLE `subject_hash_student` (
  `ss_id` int(20) NOT NULL,
  `ss_subject_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ss_student_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_hash_student`
--

INSERT INTO `subject_hash_student` (`ss_id`, `ss_subject_id`, `ss_student_id`) VALUES
(3, 'EXJWaX', 594235046),
(4, 'EXJWaX', 594235000),
(5, 'EXJWax', 594235052),
(7, 'EXJWaX', 594235021),
(8, 'EXJWaX', 594235027),
(9, 'EXJWaX', 594235043),
(10, 'EXJWaX', 594235048),
(11, 'EXJWaX', 594235045),
(12, 'EXJWaX', 594235065),
(13, 'EXJWaX', 594235014),
(14, 'EXJWaX', 594235047),
(15, 'EXJWaX', 594235002),
(16, 'EXJWaX', 594235008);

-- --------------------------------------------------------

--
-- Table structure for table `subject_project`
--

CREATE TABLE `subject_project` (
  `subject_key` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subject_classroom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_semester` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `subject_year` int(5) NOT NULL,
  `subject_sec` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `subject_day` int(2) NOT NULL,
  `subject_teacher` int(10) NOT NULL,
  `subject_record` datetime NOT NULL DEFAULT current_timestamp(),
  `subject_time_start` time NOT NULL,
  `subject_time_end` time NOT NULL,
  `status_regis` int(2) NOT NULL DEFAULT 1,
  `status_file` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_project`
--

INSERT INTO `subject_project` (`subject_key`, `subject_id2`, `subject_classroom`, `subject_name`, `subject_semester`, `subject_year`, `subject_sec`, `subject_day`, `subject_teacher`, `subject_record`, `subject_time_start`, `subject_time_end`, `status_regis`, `status_file`) VALUES
('EXJWaX', '4664301', 'esnqmkk', 'โครงงานทางเทคโนโลยีสารสนเทศ 2', '3', 2563, '01', 2, 6410, '2021-05-19 22:50:37', '08:00:00', '19:00:00', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`) VALUES
(1, 'Bruce Tom', '656 Edsel Road\r\nSherman Oaks, CA 91403', 'Male', 'Driver', 36),
(5, 'Clara Gilliam', '63 Woodridge Lane\r\nMemphis, TN 38138', 'Female', 'Programmer', 24),
(6, 'Barbra K. Hurley', '1241 Canis Heights Drive\r\nLos Angeles, CA 90017', 'Female', 'Service technician', 26),
(7, 'Antonio J. Forbes', '403 Snyder Avenue\r\nCharlotte, NC 28208', 'Male', 'Faller', 32),
(8, 'Charles D. Horst', '1636 Walnut Hill Drive\r\nCincinnati, OH 45202', 'Male', 'Financial investigator', 29),
(9, 'Beau L. Clayton', '3588 Karen Lane\r\nLouisville, KY 40223', 'Male', 'Extractive metallurgical engin', 33),
(10, 'Ramona W. Burns', '2170 Ocala Street\r\nOrlando, FL 32801', 'Female', 'Electronic typesetting machine operator', 27),
(11, 'Jennifer A. Morrison', '2135 Lakeland Terrace\r\nPlymouth, MI 48170', 'Female', 'Rigging chaser', 29),
(12, 'Susan M. Juarez', '3177 Horseshoe Lane\r\nNorristown, PA 19403', 'Female', 'Control and valve installer', 25),
(13, 'Ellan D. Downie', '384 Flynn Street\r\nStrongsville, OH 44136', 'Female', 'Education and training manager', 26),
(14, 'Larry T. Williamson', '1424 Andell Road\r\nBrentwood, TN 37027', 'Male', 'Teaching assistant', 30),
(15, 'Lauren M. Reynolds', '4798 Echo Lane\r\nKentwood, MI 49512', 'Female', 'Internet developer', 22),
(16, 'Joseph L. Judge', '3717 Junkins Avenue\r\nMoultrie, GA 31768', 'Male', 'Refrigeration mechanic', 35),
(17, 'Eric C. Lavelle', '1120 Whitetail Lane\r\nDallas, TX 75207', 'Male', 'Model', 21),
(18, 'Cheryl T. Smithers', '1203 Abia Martin Drive\r\nCommack, NY 11725', 'Female', 'Personal banker', 23),
(19, 'Tonia J. Diaz', '4724 Rocky Road\r\nPhiladelphia, PA 19107', 'Female', 'Facilitator', 29),
(20, 'Stephanie P. Lederman', '2117 Larry Street\r\nWaukesha, WI 53186', 'Female', 'Mental health aide', 27),
(21, 'Edward F. Sanchez', '2313 Elliott Street\r\nManchester, NH 03101', 'Male', 'Marine oiler', 28);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(10) NOT NULL,
  `teacher_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'https://i.ibb.co/HFB65Yz/asa.png',
  `teacher_type` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_title`, `teacher_name`, `teacher_lastname`, `teacher_email`, `teacher_password`, `teacher_photo`, `teacher_type`) VALUES
(6401, 'ผศ. ดร.', 'ทวีรัตน์', 'นวลช่วย', 'taweerat.nu@skru.ac.th', '012d9fe15b2493f21902cd55603382ec', 'https://it.skru.ac.th/images/teachers/1_IMG_0225.JPG', 1),
(6402, 'ผศ. ดร.', 'อำนาจ', 'ทองขาว', 'aumnat.to@skru.ac.th', '72c25197b6a491816d9a84b42d7205f0', 'https://it.skru.ac.th/images/teachers/2_IMG_9797.JPG', 1),
(6403, 'ผศ.', 'พิกุล ', 'สมจิตต์', 'pikul.so@skru.ac.th', 'eae15aabaa768ae4a5993a8a4f4fa6e4', 'https://it.skru.ac.th/images/teachers/9_IMG_0200.JPG', 1),
(6404, 'ผศ. ดร.', 'ศศลักษณ์', 'ทองขาว', 'sasalak.to@skru.ac.th', 'd994e3728ba5e28defb88a3289cd7ee8', 'https://it.skru.ac.th/images/teachers/Sasalak_IMG_0579.JPG', 1),
(6405, 'ผศ.', 'สารภี', 'จุลแก้ว', 'sarapee.ch@skru.ac.th', 'b58f7d184743106a8a66028b7a28937c', 'https://it.skru.ac.th/images/teachers/10_IMG_0770.JPG', 1),
(6406, 'ผศ.', 'นลินี อินทมะโน', 'อินทมะโน', 'nalinee.in@skru.ac.th', '99cad265a1768cc2dd013f0e740300ae', 'https://it.skru.ac.th/images/teachers/Nalinee_IMG_0282_OK_Good.JPG', 1),
(6407, 'ผศ.', 'กฤษณ์วรา', 'รัตนโอภาส', 'kriwara.ra@skru.ac.th', '90365351ccc7437a1309dc64e4db32a3', 'https://it.skru.ac.th/images/teachers/6_Kritwara_IMG_0545.JPG', 1),
(6408, 'ผศ.', 'ดินาถ', 'หลำสุบ', 'dinat.la@skru.ac.th', '828b1eb30921659e22e53a9edc92c4c4', 'https://it.skru.ac.th/images/teachers/Dinat_IMG_9872.JPG', 1),
(6409, 'อ.', 'สกรร', 'รอดคร้าย', 'sakan.ro@skru.ac.th', '0b7a9d54deeb611edc4540d286e9a042', 'https://it.skru.ac.th/images/teachers/5_Sakan_IMG_0571.JPG', 1),
(6410, 'อ.', 'พัฒนะ', 'วรรณวิไล', 'pattana.wa@skru.ac.th', '713fd63d76c8a57b16fc433fb4ae718a', 'https://it.skru.ac.th/images/teachers/3_IMG_0361.JPG', 2),
(6411, 'อ.', 'ญาณพัฒน์', 'ชูชื่น', 'yanapat.ch@skru.ac.th', '8091588a3968da46e3e43a76bf3b3a98', 'https://it.skru.ac.th/images/teachers/10_IMG_0096.JPG', 1),
(6412, 'อ.', 'จักสิทธิ์', 'โอฬาริกชาติ', 'jaksit.ol@skru.ac.th', 'cdf66a6a7a04d87d865335701790c3e3', 'https://it.skru.ac.th/images/teachers/7_Jaksit_IMG_0416.JPG', 1),
(6413, 'อ.', 'ยุพดี', 'อินทสร', 'youppadee.in@skru.ac.th', 'a543c921889f9dcddaff0ce4ca955293', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(6414, 'อ.', 'เสรี', 'ชนะ', 'seree.ch@skru.ac.th', '1ee942c6b182d0f041a2312947385b23', 'https://it.skru.ac.th/images/teachers/Seree_IMG_9879.JPG', 1),
(6415, 'อ.', 'โชติธรรม', 'ธารรักษ์', 'chotitham.th@skru.ac.th', '0993b7960f34c29b1fdb6516be27046f', 'https://it.skru.ac.th/images/teachers/8_Chotitum_IMG_0439.JPG', 1),
(6416, 'อ. ดร.', 'เกศินี', 'บุญช่วย', 'kesinee.bo@skru.ac.th', '8e77b3768b440a281c5101ca7941d5e0', 'https://it.skru.ac.th/images/teachers/kesinee.jpg', 1),
(6417, 'อ. ดร.', 'ศศิน', 'จันทร์พวงทอง', 'sasin.ch@skru.ac.th', '8830c97ab60254cd05628c6e61e8c54c', 'https://it.skru.ac.th/images/teachers/11_IMG_0531.JPG', 1),
(6418, 'อ.', 'คมกฤช', 'เจริญ', 'komkrit.ch@skru.ac.th', '0f0ee3310223fe38a989b2c818709393', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(6419, 'อ.', 'ภานุกร', 'ภูริปัญญานันท์', 'panukorn.pu@skru.ac.th', '288cd2567953f06e460a33951f55daaf', 'https://it.skru.ac.th/images/teachers/4_IMG_9703.JPG', 1),
(999999999, '', 'ผู้ดูแลระบบ', '0', 'admin@admin.com', 'c8c605999f3d8352d7bb792cf3fdb25b', 'https://i.ibb.co/HFB65Yz/asa.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_type`
--

CREATE TABLE `teacher_type` (
  `teacher_type_id` int(5) NOT NULL,
  `teacher_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_type`
--

INSERT INTO `teacher_type` (`teacher_type_id`, `teacher_type_name`) VALUES
(1, 'อาจารย์'),
(2, 'อาจารย์ประจำวิชา'),
(3, 'ผู้ดูแลระบบ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`appoint_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `recorder` (`recorder`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `appoint_status` (`appoint_status`);

--
-- Indexes for table `appoint_status`
--
ALTER TABLE `appoint_status`
  ADD PRIMARY KEY (`appoint_status_id`);

--
-- Indexes for table `com05`
--
ALTER TABLE `com05`
  ADD PRIMARY KEY (`com05_id`),
  ADD KEY `appoint_id` (`appoint_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `score` (`score`),
  ADD KEY `meet_check` (`meet_check`);

--
-- Indexes for table `filee`
--
ALTER TABLE `filee`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `file_type` (`file_type`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `file_apporve` (`file_apporve`);

--
-- Indexes for table `file_type`
--
ALTER TABLE `file_type`
  ADD PRIMARY KEY (`file_type_id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`student_major_id`);

--
-- Indexes for table `meet_check`
--
ALTER TABLE `meet_check`
  ADD PRIMARY KEY (`meet_check_id`);

--
-- Indexes for table `pr`
--
ALTER TABLE `pr`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `pr_record` (`pr_record`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `project_type` (`project_type`),
  ADD KEY `project_status` (`project_status`);

--
-- Indexes for table `project_has_adviser`
--
ALTER TABLE `project_has_adviser`
  ADD PRIMARY KEY (`pha_key`),
  ADD KEY `pha_project_id` (`pha_project_id`),
  ADD KEY `pha_teacher_id` (`pha_teacher_id`);

--
-- Indexes for table `project_has_student`
--
ALTER TABLE `project_has_student`
  ADD PRIMARY KEY (`phs_key`),
  ADD KEY `phs_project_id` (`phs_project_id`),
  ADD KEY `phs_student_id` (`phs_student_id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`project_status_id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`project_type_id`);

--
-- Indexes for table `regis_project`
--
ALTER TABLE `regis_project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_id` (`project_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_major` (`student_major`),
  ADD KEY `student_type` (`student_type`);

--
-- Indexes for table `student_active`
--
ALTER TABLE `student_active`
  ADD PRIMARY KEY (`active_id`);

--
-- Indexes for table `subject_day`
--
ALTER TABLE `subject_day`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `subject_hash_project`
--
ALTER TABLE `subject_hash_project`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `sp_project_id` (`sp_project_id`),
  ADD KEY `sp_subject_id` (`sp_subject_id`);

--
-- Indexes for table `subject_hash_student`
--
ALTER TABLE `subject_hash_student`
  ADD PRIMARY KEY (`ss_id`),
  ADD KEY `ss_subject_id` (`ss_subject_id`),
  ADD KEY `ss_student_id` (`ss_student_id`);

--
-- Indexes for table `subject_project`
--
ALTER TABLE `subject_project`
  ADD PRIMARY KEY (`subject_key`),
  ADD KEY `subject_teacher` (`subject_teacher`),
  ADD KEY `subject_day` (`subject_day`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `teacher_type` (`teacher_type`);

--
-- Indexes for table `teacher_type`
--
ALTER TABLE `teacher_type`
  ADD PRIMARY KEY (`teacher_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `appoint_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `com05`
--
ALTER TABLE `com05`
  MODIFY `com05_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filee`
--
ALTER TABLE `filee`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pr`
--
ALTER TABLE `pr`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_has_adviser`
--
ALTER TABLE `project_has_adviser`
  MODIFY `pha_key` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project_has_student`
--
ALTER TABLE `project_has_student`
  MODIFY `phs_key` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `regis_project`
--
ALTER TABLE `regis_project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject_hash_project`
--
ALTER TABLE `subject_hash_project`
  MODIFY `sp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject_hash_student`
--
ALTER TABLE `subject_hash_student`
  MODIFY `ss_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoint`
--
ALTER TABLE `appoint`
  ADD CONSTRAINT `appoint_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `appoint_ibfk_2` FOREIGN KEY (`recorder`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `appoint_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `appoint_ibfk_4` FOREIGN KEY (`appoint_status`) REFERENCES `appoint_status` (`appoint_status_id`);

--
-- Constraints for table `com05`
--
ALTER TABLE `com05`
  ADD CONSTRAINT `com05_ibfk_1` FOREIGN KEY (`appoint_id`) REFERENCES `appoint` (`appoint_id`),
  ADD CONSTRAINT `com05_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `com05_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `com05_ibfk_4` FOREIGN KEY (`score`) REFERENCES `score` (`score_id`),
  ADD CONSTRAINT `com05_ibfk_5` FOREIGN KEY (`meet_check`) REFERENCES `meet_check` (`meet_check_id`);

--
-- Constraints for table `filee`
--
ALTER TABLE `filee`
  ADD CONSTRAINT `filee_ibfk_1` FOREIGN KEY (`file_type`) REFERENCES `file_type` (`file_type_id`),
  ADD CONSTRAINT `filee_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `pr`
--
ALTER TABLE `pr`
  ADD CONSTRAINT `pr_ibfk_1` FOREIGN KEY (`pr_record`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`project_type`) REFERENCES `project_type` (`project_type_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`project_status`) REFERENCES `project_status` (`project_status_id`);

--
-- Constraints for table `project_has_adviser`
--
ALTER TABLE `project_has_adviser`
  ADD CONSTRAINT `project_has_adviser_ibfk_1` FOREIGN KEY (`pha_project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `project_has_adviser_ibfk_2` FOREIGN KEY (`pha_teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `project_has_student`
--
ALTER TABLE `project_has_student`
  ADD CONSTRAINT `project_has_student_ibfk_1` FOREIGN KEY (`phs_project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `project_has_student_ibfk_2` FOREIGN KEY (`phs_student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student_major`) REFERENCES `major` (`student_major_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`student_type`) REFERENCES `student_active` (`active_id`);

--
-- Constraints for table `subject_hash_project`
--
ALTER TABLE `subject_hash_project`
  ADD CONSTRAINT `subject_hash_project_ibfk_1` FOREIGN KEY (`sp_project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `subject_hash_project_ibfk_2` FOREIGN KEY (`sp_subject_id`) REFERENCES `subject_project` (`subject_key`);

--
-- Constraints for table `subject_hash_student`
--
ALTER TABLE `subject_hash_student`
  ADD CONSTRAINT `subject_hash_student_ibfk_1` FOREIGN KEY (`ss_subject_id`) REFERENCES `subject_project` (`subject_key`),
  ADD CONSTRAINT `subject_hash_student_ibfk_2` FOREIGN KEY (`ss_student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `subject_project`
--
ALTER TABLE `subject_project`
  ADD CONSTRAINT `subject_project_ibfk_1` FOREIGN KEY (`subject_teacher`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `subject_project_ibfk_2` FOREIGN KEY (`subject_day`) REFERENCES `subject_day` (`day_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`teacher_type`) REFERENCES `teacher_type` (`teacher_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
