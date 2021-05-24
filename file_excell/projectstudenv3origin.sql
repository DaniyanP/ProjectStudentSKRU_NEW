-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 04:30 PM
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
(1, 63026, '2021-05-12 10:30:00', '2021-05-12 15:30:00', 'ส่งงานการเพิ่มข้อมูล และหน้าล็อกอิน', 6415, 6, 594235039, '2021-05-07 19:26:07', ''),
(2, 63026, '2021-05-13 09:31:00', '2021-05-13 11:32:00', 'ส่งงานหน้ารายการจอง', 6414, 1, 594235039, '2021-05-07 19:32:45', ''),
(3, 63026, '2021-05-20 09:37:00', '2021-05-20 10:37:00', 'สร้างหน้าแจ้งไปยังแอดมินเมื่อมีคนจองเข้ามา', 6415, 3, 594235037, '2021-05-07 19:38:01', ''),
(4, 63026, '2021-05-13 09:00:00', '2021-05-13 11:29:00', 'ทดสอบการนัดหมาย', 6415, 2, 594235037, '2021-05-09 20:01:24', 'https://meet.google.com/tui-sjvr-zhy'),
(7, 63026, '2021-05-15 15:00:00', '2021-05-15 19:29:00', 'ส่งความคืบหน้าหน้าจอระบบ', 6415, 5, 594235037, '2021-05-09 20:01:24', ''),
(8, 63026, '2021-05-20 09:00:00', '2021-05-20 11:29:00', 'ส่งงานการเขียนโปรแกรมเพิ่มเติม', 6415, 2, 594235037, '2021-05-09 20:01:24', 'https://meet.google.com/tui-sjvr-zhy'),
(9, 641001002, '2021-05-19 15:21:00', '2021-05-19 16:22:00', 'ส่งฐานข้อมูล', 6401, 4, 594235001, '2021-05-15 14:25:53', 'https://meet.google.com/prp-mpia-ypo'),
(10, 641001002, '2021-05-20 08:34:00', '2021-05-20 11:34:00', 'ส่ง ER ที่ผ่านการแก้ไขมาด้วย', 6401, 2, 594235002, '2021-05-15 14:34:53', ''),
(14, 641001002, '2021-05-25 08:55:00', '2021-05-25 10:55:00', 'ccccc', 6401, 3, 594235001, '2021-05-18 00:55:32', ''),
(15, 641001002, '2021-05-21 06:56:00', '2021-05-21 00:00:00', 'dddd', 6401, 2, 594235001, '2021-05-18 00:56:17', ''),
(16, 641001002, '2021-05-29 00:57:00', '2021-05-29 00:57:00', 'nnnnn', 6401, 4, 594235001, '2021-05-18 00:57:59', ''),
(17, 641001002, '2021-05-28 00:59:00', '2021-05-28 05:00:00', 'qqq', 6402, 1, 594235001, '2021-05-18 01:00:06', ''),
(18, 641001002, '2021-05-27 06:03:00', '2021-05-27 03:02:00', 'zzzzzzz', 6401, 1, 594235001, '2021-05-18 01:03:16', ''),
(19, 641001002, '2021-05-28 06:03:00', '2021-05-28 08:03:00', '', 6401, 1, 594235001, '2021-05-18 01:03:32', ''),
(20, 641001002, '2021-05-27 01:05:00', '2021-05-27 01:09:00', 'mmmmmmmm', 6401, 1, 594235001, '2021-05-18 01:05:43', ''),
(21, 641001002, '2021-05-26 07:08:00', '2021-05-26 01:08:00', 'fvfvvfvfv', 6402, 1, 594235001, '2021-05-18 01:08:34', ''),
(22, 641001002, '2021-05-21 06:13:00', '2021-05-21 04:12:00', 'ddvdvdv', 6401, 1, 594235001, '2021-05-18 01:13:21', ''),
(23, 641001002, '2021-05-21 20:30:00', '2021-05-21 06:29:00', 'ssssssss', 6401, 1, 594235001, '2021-05-18 01:30:15', ''),
(24, 641001002, '2021-05-27 01:33:00', '2021-05-27 05:33:00', 'gggg', 6401, 1, 594235001, '2021-05-18 01:33:12', ''),
(25, 641001002, '2021-05-28 05:40:00', '2021-05-28 05:40:00', 'vvvvvv', 6401, 1, 594235001, '2021-05-18 01:47:53', ''),
(26, 641001002, '2021-05-22 05:47:00', '2021-05-22 04:48:00', 'ddddddddd', 6401, 1, 594235001, '2021-05-18 01:49:06', ''),
(27, 641001002, '2021-05-22 12:01:00', '2021-05-22 11:01:00', 'ddddddddddddddd', 6401, 1, 594235001, '2021-05-18 02:02:08', ''),
(28, 641001002, '2021-05-22 16:03:00', '2021-05-22 14:03:00', 'ccccccccc', 6401, 1, 594235001, '2021-05-18 02:04:20', ''),
(29, 641001002, '2021-05-22 13:04:00', '2021-05-22 05:04:00', 'zzzzzzzz', 6401, 1, 594235001, '2021-05-18 02:05:10', ''),
(30, 641001002, '2021-05-26 13:08:00', '2021-05-26 15:08:00', 'xxxxxx', 6401, 4, 594235001, '2021-05-18 02:09:03', ''),
(31, 641001002, '2021-05-28 13:46:00', '2021-05-28 13:47:00', 'pppppppppp', 6401, 1, 594235001, '2021-05-18 08:48:20', ''),
(32, 641001002, '2021-05-24 08:34:00', '2021-05-24 11:34:00', 'ส่ง ER ที่ผ่านการแก้ไขมาด้วย', 6401, 3, 594235002, '2021-05-15 14:34:53', ''),
(47, 641001002, '2021-05-24 09:00:00', '2021-05-24 10:00:00', 'aaaaaaaaaaa', 6401, 4, 594235001, '2021-05-18 13:22:14', ''),
(48, 63016, '2021-05-26 16:07:00', '2021-05-26 16:11:00', 'zzzzzzz', 6401, 4, 594235008, '2021-05-18 15:08:22', ''),
(49, 63016, '2021-05-25 09:42:00', '2021-05-25 10:40:00', 'ssssssssss', 6401, 4, 594235008, '2021-05-18 15:42:17', ''),
(50, 641001002, '2021-06-24 10:02:00', '2021-06-24 12:02:00', 'xxxxxxxxxxxx', 6401, 4, 594235001, '2021-05-18 16:03:15', ''),
(51, 63026, '2021-05-29 10:43:00', '2021-05-29 12:11:00', 'หหหหหห', 6415, 3, 594235037, '2021-05-19 16:45:25', ''),
(52, 63026, '2021-05-29 11:40:00', '2021-05-29 11:41:00', 'สสสสสสสสสสสสสสสส', 6415, 1, 594235037, '2021-05-19 16:48:47', '');

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
(1, 1, 63026, 'ควรเพิ่มการจัดวางข้อมูลให้เหมาะสมกว่านี้ ระบบการทำงานดีขึ้น', 'สร้างหน้าแจ้งไปยังแอดมินเมื่อมีคนจองเข้ามา', 2, 2, 6415, 0),
(2, 3, 63026, 'ฐานข้อมูลยังไม่ลงตัว การเชื่อม FK PK ยังไม่ถูกต้อง', 'ปรับปรุงฐานข้อมูลใหม่ให้สอดคล้องกับระบบ', 3, 1, 6415, 594235037),
(3, 3, 63026, 'ฐานข้อมูลยังไม่ลงตัว การเชื่อม FK PK ยังไม่ถูกต้อง', 'ปรับปรุงฐานข้อมูลใหม่ให้สอดคล้องกับระบบ', 3, 1, 6415, 594235035),
(4, 4, 63026, 'งานเรียบร้อยดี โปรแกรมทำงานได้ตรงความต้องการ', 'ส่งเล่มรายงาน', 4, 1, 6415, 594235037),
(6, 9, 641001002, 'มีความก้าวหน้า', 'ส่ง ER ที่ผ่านการแก้ไขมาด้วย', 4, 1, 6401, 594235001),
(7, 30, 641001002, 'scccccccccccccccccc', 'sssssssssss', 4, 1, 6401, 594235001),
(8, 49, 63016, 'dddddddddd', 'ddddddd', 2, 1, 6401, 594235008),
(9, 48, 63016, 'sssssssssss', 'cccccccccccccc', 1, 2, 6401, 594235008),
(10, 47, 641001002, 'xxxxxxxxxxx', 'xxxxxxxxxxxx', 2, 1, 6401, 594235001),
(11, 50, 641001002, 'dddddddd', 'ddddddddd', 2, 1, 6401, 594235001),
(12, 16, 641001002, 'dddddddddd', 'ddddddddddddd', 3, 2, 6401, 594235001);

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
(1, 63026, 1, 'http://127.0.0.1/phpmyadmin/index.php?route=/table/sql&db=projectstudenv3&table=pr', 1, 0),
(2, 641001002, 1, 'https://skruacth-my.sharepoint.com/:b:/g/personal/594235002_parichat_skru_ac_th/EUHsWD9B53ZEoBnnCPIbCZkBc-b-kkH0goGjk3ZW0_qzMg?e=alPGli', 2, 0),
(4, 641001002, 3, 'https://meet.google.com/', 1, 6410),
(5, 641001002, 3, 'https://meet.google.com/', 2, 6410),
(6, 641001002, 1, 'https://meet.google.com/', 1, 6410),
(7, 63016, 1, 'https://it.skru.ac.th/teacher.php#', 1, 6410),
(8, 63016, 3, 'http://43.229.151.126/ProjectStudentSKRU_NEW/pages/project_detail/file_add.php', 1, 6410),
(9, 63016, 1, 'https://meet.google.com/', 1, 6410);

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
(1, 'กำหนดการสอบจบ 3/2563', 'ทดสอบ', 999999999, '2021-05-09 08:38:23'),
(2, 'ทดสอบประกาศข่าว1', 'ทดสอบประกาศข่าว1', 999999999, '2021-05-09 08:38:38'),
(3, 'ทดสอบประกาศข่าว3', 'ทดสอบประกาศข่าว3', 999999999, '2021-05-09 08:38:47');

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
(1, 'ssds', 1, 1),
(4, 'fgfg', 1, 1),
(40, 'lll', 1, 1),
(41, 'o;;', 1, 1),
(42, 'ioio', 2, 1),
(43, 'klkl', 1, 1),
(2323, 'sdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsds', 1, 1),
(4242, 'ooo', 1, 1),
(5511, 'ระบบจัดการควบคุมน้ำเสียด้วยระบบคอมพิวเตอร์ ลดปัญหาการเข้าพื้นที่อับอากาศ ', 1, 2),
(5512, 'ระบบขายหวยออนไลน์', 1, 3),
(5588, 'ระบบไฟฟ้าพลังงานหมุนเวียน', 1, 1),
(7777, 'ไไกไก', 1, 1),
(7979, 'ำกำกำก', 2, 1),
(8400, 'a', 1, 1),
(8401, 'b', 1, 1),
(8402, 'c', 2, 1),
(8403, 'd', 3, 1),
(8404, 'e', 4, 1),
(8405, 'f', 2, 1),
(8406, 'g', 4, 1),
(8407, 'h', 2, 1),
(8408, 'j', 2, 1),
(8409, 'k', 3, 1),
(8410, 'l', 4, 1),
(8411, 'm', 4, 1),
(8412, 'r', 4, 1),
(8501, 'ทดสอบ1', 1, 1),
(8502, 'ทดสอบ2', 1, 1),
(8503, 'ทดสอบ3', 2, 1),
(8504, 'ทดสอบ4', 3, 1),
(8505, 'ทดสอบ5', 4, 1),
(8506, 'ทดสอบ6', 2, 1),
(8507, 'ทดสอบ7', 4, 1),
(8508, 'ทดสอบ8', 2, 1),
(8509, 'ทดสอบ9', 2, 1),
(8510, 'ทดสอบ10', 3, 1),
(8511, 'ทดสอบ11', 4, 1),
(8512, 'ทดสอบ12', 4, 1),
(8513, 'ทดสอบ13', 4, 1),
(63001, 'เว็บร้านเจนจิราอุปกรณ์สัตว์และอาหารสัตว์', 1, 1),
(63002, 'เว็บซื้อ-ขายหนังสือ ร้านหนังสืออุดรศึกษา', 1, 1),
(63003, 'เว็บบริหารงานร้านศิริโชติคาร์แคร์', 1, 1),
(63004, 'เว็บจำหน่ายจิ้งหรีดของกลุ่มที่ตั้งวิสาหกิจชุมชนผู้เลี้ยงจิ้งหรีด', 1, 1),
(63005, 'เว็บบริหารจัดการร้านสมรฟาร์มเห็ด ', 1, 1),
(63006, 'เว็บขายตุ๊กตา ร้านอรสา', 1, 1),
(63007, 'เว็บขายหนังสือ ร้าน All comics', 1, 1),
(63008, 'เว็บองค์การบริหารส่วนตำบลโคกสี', 1, 1),
(63009, 'เว็บจัดการหอพักอำนวยพร', 1, 1),
(63010, 'เว็บขายเครื่องปั้นดินเผา กรณีศึกษาร้านเครื่องปั้น', 1, 1),
(63011, 'เว็บจำหน่ายสินค้า บริษัท อันนาย จำกัด', 1, 1),
(63012, 'เว็บร้านแจกันดอกไม้', 1, 1),
(63013, 'ยืม-คืน หนังสือผ่านอินเตอร์เน็ต  สำหรับห้องสมุดโรงเรียนสมเด็จพระญาณสังวร', 1, 1),
(63014, 'เว็บจำหน่ายวีซีดีและซีดี ร้านบิ๊กมาร์ท', 1, 1),
(63015, 'เว็บโรงเรียนกันทรวิชัย', 1, 1),
(63016, 'เว็บขายสินค้าโอท็อป ตำบลท่าสองคอน', 1, 1),
(63017, 'ตลาดกลางสินค้า OTOP ผ่าน Internet', 1, 1),
(63018, 'เว็บขายกระเป๋าร้าน Angle shop', 1, 1),
(63019, 'เว็บผ้าไหมออนไลน์กลุ่มแม่บ้านบ้านหนองดู่', 1, 1),
(63020, 'เว็บพิพิธภัณฑ์เมืองมหาสารคาม', 1, 1),
(63021, 'เว็บไซด์เช็คปั๊ม หัวฉีดร้านปรีชาดีเซล', 1, 1),
(63022, 'ซื้อขายอุปกรณ์ก่อสร้างร้านกุมภวาปีค้าไม้ผ่านอินเตอร์เน็ต', 1, 1),
(63023, 'เว็บโรงเรียนบ้านเอื้องโนนไร่โนนสาวิทยา', 1, 1),
(63024, 'เว็บจำหน่ายผลิตภัณฑ์ศูนย์ของฝากเจ๊รัช', 1, 1),
(63025, 'เว็บเรียนรู้สุภาษิต คำพังเพย ผ่านสื่อมัลติมีเดีย', 1, 1),
(63026, 'เว็บหอพัก  IT Apartment ', 1, 1),
(63027, 'การซื้อขายสินค้าออนไลน์ของร้านกานต์บิวตี้', 1, 1),
(63028, 'เว็บและบทเรียนออนไลน์ โรงเรียนวัดนางลือ', 1, 1),
(63029, 'ขายสินค้าออนไลน์ กลุ่มสตรีทอผ้ากาบบัวบ้านคำขวาง', 1, 1),
(63030, 'เว็บขายน้ำเชื้อพ่อวัวนาเชือกใต้ฟาร์ม', 1, 1),
(63031, 'เว็บขายดอกไม้ กรณีศึกษาร้านแคลล่าลิลรี่ ', 1, 1),
(63032, 'เว็บบริการจัดเลี้ยงแบบโต๊ะจีน บุฟเฟต์ ร้านครัวสามพี่น้อง', 1, 1),
(63033, 'เว็บบริหารจัดการหอพักแม่ก้านทอง', 1, 1),
(63034, 'เว็บไซด์จำหน่ายเสื้อผ้าแฟชั่นออนไลน์ ร้านเมธานิธิ', 1, 1),
(63035, 'จำหน่ายคอมพิวเตอร์ผ่านอินเตอร์เน็ต(E-Commerce)', 1, 1),
(63036, 'เวปไซต์ขายน้ำพริกร้านกรองทอง', 1, 1),
(63037, 'เว็บจองห้องพักโรงแรมริมปาว', 1, 1),
(63038, 'เว็บร้านโหน่งมหาชัยปลาร้าบอง', 1, 1),
(63039, 'เว็บร้านทองสุวรรณาลูกสาวแม่กิมกี่', 1, 1),
(63040, 'เว็บร้านหนังสือชัยชนะ', 1, 1),
(63041, 'อุปกรณ์ ตัดสัญญาณ Wifi (Wi-Fi Jamming) ด้วย Nodemcu esp8266', 4, 1),
(63042, 'วัดอุณหภูมิ DHT22 แสดงผ่านหน้าจอ LCD ด้วย Nodemcu และ Arduino', 4, 1),
(63043, 'กล้องกันขโมยส่งสัญญาณแจ้งเตือนผ่าน Notify Line', 4, 1),
(63044, 'รถบังคับ Rc Car wifi ด้วย Nodemcu esp8266 Arduino IDE ควบคุมผ่านมือถือ android', 4, 1),
(63045, 'เปิดปิดไฟ ผ่าน App android ด้วย Bluetooth', 4, 1),
(63046, 'Nodemcu แจ้งเตือน น้ำท่วม น้ำล้น ผ่าน Line Notify', 4, 1),
(63050, 'สื่อการสอนบ้านอารมณ์ดี', 3, 1),
(63051, 'ประวัติความเป็นมาสตูล', 3, 1),
(63052, 'เมืองลับแลแห่งบานา', 3, 1),
(63053, 'สมุทรสาครเมืองน่าเที่ยว', 3, 1),
(63054, 'ทดสอบการทำงานของเว็บไซต์', 2, 1),
(63055, 'เปรียบเทียบการทำงานคอมพิวเตอรื', 2, 1),
(63056, 'การพัฒนาสื่อปฏิสัมพันธ์แนะแนวศึกษาต่อหลักสูตรคอมพิวเตอร์แอนิเมชันและเกมโดยใช้ทฤษฎีมนุษย์เป็นศูนย์กลางการออกแบบ', 2, 1),
(63057, 'การพัฒนาระบบการแจ้งซ่อมบำรุงคอมพิวเตอร์โดยใช้กระบวนการเอ็กซ์ทรีมโปรแกรมมิ่ง', 2, 1),
(651001, 'ดนตรีไทยแสนสนุก', 3, 1),
(651002, 'ความหลากหลายของสิ่งมีชีวิต', 3, 1),
(651003, 'ฝึกอ่านออกเสียงภาษาอังกฤษ', 3, 1),
(651004, 'สำนวนไทยพาสนุก', 3, 1),
(651005, 'ระบบแฟ้มฐานข้อมูลผู้เรียน', 1, 1),
(651006, 'เครื่องช่วยคนพิการแขนอ่านหนังสือ', 4, 1),
(651007, 'ระบบจัดการออเดอร์และสต๊อกสินค้า', 1, 1),
(651008, 'การตรวจกระดาษคำตอบแบบปรนัยโดยใช้หลักการบล็อกคัลเลอร์ริงและทฤษฎีเบย์เซียน', 2, 1),
(651009, ' แอปพลิเคชันแหล่งข่าวเกมอัตโนมัติ', 1, 1),
(651010, ' ระบบแชทบอทและร้านค้าออนไลน์บนแอปพลิเคชันไลน์', 1, 2),
(651011, 'การประมาณราคาก่อสร้างบ้านพักอาศัยโดยเทคนิคโครงข่ายประสาทเทียม', 2, 1),
(3343434, 'sdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsdssdsds', 1, 1),
(8799955, 'ระบบบริหารงานภายใน', 1, 1),
(641001002, 'ระบบจัดการลานจอดรถ', 1, 1),
(641640102, 'ทดสอบใส่โปรเจค', 2, 1),
(641640304, 'ทดสอบใส่โครงงาน2', 2, 1),
(641640506, 'โครงงานทำการบ้าน', 1, 1),
(641641011, 'ทดสอบนักศึกษาโครงงาน1', 1, 1),
(641650208, 'ระบบจัดการน้ำเสีย', 1, 1);

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
(2, 63017, 6403, 1),
(3, 63030, 6416, 1),
(4, 63056, 6417, 1),
(5, 63044, 6416, 1),
(6, 63019, 6401, 1),
(7, 63026, 6415, 1),
(8, 63018, 6418, 1),
(9, 63043, 6417, 1),
(10, 63050, 6418, 1),
(11, 63026, 6414, 2),
(13, 63018, 6405, 2),
(14, 63050, 6410, 2),
(18, 641001002, 6401, 1),
(19, 641001002, 6402, 2),
(20, 651005, 6407, 1),
(21, 651004, 65010, 1),
(22, 651007, 6416, 1),
(23, 63016, 6401, 1),
(26, 641641011, 6417, 1),
(27, 641641011, 6418, 2),
(30, 641650208, 6408, 1),
(31, 641650208, 6410, 2);

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
(1, 63018, 594235035),
(2, 63026, 594235039),
(3, 63018, 594235036),
(7, 63017, 594235037),
(8, 63029, 594235050),
(9, 63030, 594235058),
(10, 63026, 594235037),
(12, 651001, 654234001),
(13, 651001, 654234002),
(15, 651007, 654235001),
(16, 651006, 654235003),
(17, 651011, 654235014),
(18, 641001002, 594235001),
(19, 641001002, 594235002),
(20, 63016, 594235008),
(22, 641641011, 644235010),
(23, 641641011, 644235011),
(26, 641650208, 654235002),
(27, 641650208, 654235008);

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
(31, 'Sy1lkb', 1, 641590900, 'sss', 1, '594235009', '232', '22', '22', '000000000', '', '', '', 6417, 6418),
(40, 'uiyfN6', 1, 641660102, 'หหกหกห', 2, '664235001', 'นาย', 'สมไทย', 'สง่างาม', '664235002', 'นางสาว', 'สมศรี', 'ศรีผล', 6419, 6413);

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
(33001001, 'นางสาว', 'ชื่อนางสาว', 1, 'นามสุกล', '0000000000', '33001001@parichat.skru.ac.th', '79d1af2e29e9fb10b91e31b2ca41b351', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001002, 'นาย', 'ชื่อนาย', 1, 'นามสุกล', '0000000000', '33001002@parichat.skru.ac.th', '388edfc1a82ce976200a803cac45c309', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001003, 'นาย', 'ชื่อนาย', 1, 'นามสุกล', '0000000000', '33001003@parichat.skru.ac.th', '2eef5d1770184c66d4e1cce74d7b364e', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001004, 'นาย', 'ชื่อนาย', 2, 'นามสุกล', '0000000000', '33001004@parichat.skru.ac.th', 'd9e1131a947f20277df20a8cd4940e25', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001005, 'นางสาว', 'ชื่อนางสาว', 2, 'นามสุกล', '0000000000', '33001005@parichat.skru.ac.th', '04147ef49e17fa83e4aac8c1a1163291', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001006, 'นางสาว', 'ชื่อนางสาว', 2, 'นามสุกล', '0000000000', '33001006@parichat.skru.ac.th', '97511b179a972f31eb55580a6044a89e', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001007, 'นาย', 'ชื่อนาย', 1, 'นามสุกล', '0000000000', '33001007@parichat.skru.ac.th', 'da07ff92d24bf09263422b24ce9609d0', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001008, 'นาย', 'ชื่อนาย', 1, 'นามสุกล', '0000000000', '33001008@parichat.skru.ac.th', '8ccb73ae2f871743b0186d376a687f56', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001009, 'นาย', 'ชื่อนาย', 1, 'นามสุกล', '0000000000', '33001009@parichat.skru.ac.th', 'd2ddc329091c5e96b4a2f782cd149256', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(33001010, 'นางสาว', 'ชื่อนางสาว', 1, 'นามสุกล', '0000000000', '33001010@parichat.skru.ac.th', '67b5ffbbbff418c73cf34c2780072015', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(111000111, 'นาย', 'ปกกร', 1, 'อนุสร', '02200', 'sd@efef.kk', 'd84af1b124929ff7aa0ef2917b37c78c', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235001, 'นางสาว', 'กชกร', 1, 'จ่าวิสูตร', '0000000000', '594235001@parichat.skru.ac.th', '9f90a47cb51caff93bf179beebc5994f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235002, '', ' นางสาวขวัญทิพย์ ภูวดลรังสรรค์', 1, '', '0000000000', '594235002@parichat.skru.ac.th', 'dd81847bacec236afa81d327087af80b', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235004, '', ' นายชยธร ขวัญทุม', 1, '', '0000000000', '594235004@parichat.skru.ac.th', '5bb34bc3ba6dc59cf547eea4f31de6b5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235008, '', ' นายดานิยาน พร้อมมูล', 1, '', '0000000000', '594235008@parichat.skru.ac.th', '1b141834cd8071a8ed9b1682a60b8a33', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235010, '', ' นายธนรัตน์ ดุกสุกแก้ว', 1, '', '0000000000', '594235010@parichat.skru.ac.th', 'b6941dbf6c6b7b41f02821ef70c4abd2', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235011, '', ' นายธรรมชาติ บุญช่วย', 1, '', '0000000000', '594235011@parichat.skru.ac.th', 'c984e714343ec2312e27210b79e45764', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235014, '', ' นางสาวนุรอาซิกีน บือซา', 1, '', '0000000000', '594235014@parichat.skru.ac.th', 'f150bd63c87e7f577e1ffd49101cce6d', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235016, '', ' นางสาวปอรรัช ทองโอ', 1, '', '0000000000', '594235016@parichat.skru.ac.th', '282f050c711fc1b04d0ac13647ccf96c', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235018, '', ' นางสาวภัควดี ธารทองสกุล', 1, '', '0000000000', '594235018@parichat.skru.ac.th', '6b87ed017385c3e7a0e6e88840a3865b', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235019, '', ' นางสาวมุมีนะห์ อับดุลดานิง', 1, '', '0000000000', '594235019@parichat.skru.ac.th', 'd07d21eb1ba407704ec7d0f1ad9a7fb1', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235021, '', ' นางสาวรัตนาภรณ์ รักนวล', 1, '', '0000000000', '594235021@parichat.skru.ac.th', 'c2844b4253e2852cd66cbde55afd98db', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235022, '', ' นางสาววนิตา บุตรจีนยิ้ว', 1, '', '0000000000', '594235022@parichat.skru.ac.th', 'bc71def4175d30f2af88c867a377a03b', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235024, '', ' นางสาววัลลภา พลแสง', 1, '', '0000000000', '594235024@parichat.skru.ac.th', '22bf9f8a600ffea810520f7b0c100a36', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235025, '', ' นางสาววิรัตนา แก้วจินดา', 1, '', '0000000000', '594235025@parichat.skru.ac.th', 'ff60cd73d06c9caeebbfb622b1caab65', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235027, '', ' นางสาวศิริณญา เกตุแก้ว', 1, '', '0000000000', '594235027@parichat.skru.ac.th', '395e622ea5f9a3ce0a808d52ba3b6b29', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235030, '', ' นางสาวสุดาวรรณ์ กิมนิ่ง', 1, '', '0000000000', '594235030@parichat.skru.ac.th', '9e4daa4ebde4034d2c1d2db73409653f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235031, '', ' นางสาวสุพิชญา เส้งหวัด', 1, '', '0000000000', '594235031@parichat.skru.ac.th', '4c79e4327a5087da10e0be5eff21253d', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235033, '', ' นายอิลฮาน สาและปาเซ', 1, '', '0000000000', '594235033@parichat.skru.ac.th', '133224e484b83b02cc94c8484d233047', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235035, '', ' นางสาวคอลีเยาะ เต๊ะโร๊ะ', 1, '', '0000000000', '594235035@parichat.skru.ac.th', '7b1735f70e030fbed68259550de54cb6', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235036, '', ' นางสาวจุฑามาศ สอนทอง', 1, '', '0000000000', '594235036@parichat.skru.ac.th', '5329d379b28051fd407878b10ac3dcc9', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235037, 'นางสาว', 'ชลธิชา', 1, 'เส็นอาลามีน', '0000000000', '594235037@parichat.skru.ac.th', 'ff0e1b8243bc5fc3c199d352f0e206d0', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235039, '', ' นางสาวโซเฟีย ยูโซะ', 1, '', '0000000000', '594235039@parichat.skru.ac.th', 'ca4bacc59ee1109cd5c9858f97684fd9', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235040, '', ' นายดนัยกานต์ หลงกลาง', 1, '', '0000000000', '594235040@parichat.skru.ac.th', '300f253e237d287d660cb70adfbb7f97', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235042, '', ' นายเทพนรินทร์ จริงบำรุง', 1, '', '0000000000', '594235042@parichat.skru.ac.th', '77affd93902307dbc7e78718b1c9d017', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235043, '', ' นายธนวัฒน์ ปานเล่ห์', 1, '', '0000000000', '594235043@parichat.skru.ac.th', '73e3b4e5cb3674f28228c53d030283ab', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235044, '', ' นางสาวนันทิมา หมาดสาหรน', 1, '', '0000000000', '594235044@parichat.skru.ac.th', '1765ab329608766e65a142f380cb3384', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235045, '', ' นางสาวนาเดีย ไชยแก้ว', 1, '', '0000000000', '594235045@parichat.skru.ac.th', '4da32dd14197c7764edfc04067702622', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235046, '', ' นางสาวนิลุบล ศรีจันทร์งาม', 1, '', '0000000000', '594235046@parichat.skru.ac.th', 'a713bd6f052d26d6dc3b712c044dd59f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235047, '', ' นางสาวนูรูฮีดายะห์ ยา', 1, '', '0000000000', '594235047@parichat.skru.ac.th', '6c24e7a5a85520620cace974b5354993', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235048, '', ' นายปฐมพร อติวัฒนวงศ์', 1, '', '0000000000', '594235048@parichat.skru.ac.th', '34ec182e56d3b4b4671faa1b4d1ce912', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235049, '', ' นายพาครูดิง มะมา', 1, '', '0000000000', '594235049@parichat.skru.ac.th', '7a5421d0464267c0b4d3777b9e47d97a', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235050, '', ' นางสาวฟิรดาวส์ ซา', 1, '', '0000000000', '594235050@parichat.skru.ac.th', 'e55eff39e929809039cb8d151a3f63a1', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235051, '', ' นายมุกตา หมานเหม', 1, '', '0000000000', '594235051@parichat.skru.ac.th', 'a795606c14dca1b42d071f1026eec04f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235052, '', ' นายมูฮำหมัดพันดี ดอโบ๊ะ', 1, '', '0000000000', '594235052@parichat.skru.ac.th', '7d387051ef7af1bb6f02822ba6366056', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235054, '', ' นางสาวรุ่งอาทิตา รอดแสง', 1, '', '0000000000', '594235054@parichat.skru.ac.th', 'd2c5db89cbc555bb070687bd85028010', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235058, '', ' นายวุฒิชัย จงรักษ์', 1, '', '0000000000', '594235058@parichat.skru.ac.th', 'c86fe3107b9f33b017a75e228592eac2', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235062, '', ' นางสาวสีตีมีเน๊าะ เด็ง', 1, '', '0000000000', '594235062@parichat.skru.ac.th', 'b0944683bbf51bb514b56fee785dde64', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235065, '', ' นางสาวอริษา ขุนพล', 1, '', '0000000000', '594235065@parichat.skru.ac.th', '9299342467f34a399a26c47595538e73', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235080, 'นาย', 'วรวิทย์', 1, 'ทองคำใส', '0000000000', '594235080@parichat.skru.ac.th', '3d2173260fbab34b09799904727c08f5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235089, 'นาย', 'มรดก', 1, 'ตกทอด', '0000000000', '594235089@parichat.skru.ac.th', 'f63def287435802a45db15534bdc9925', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235099, 'นางสาว', 'ทองใส', 1, 'เปล่งแสง', '0000000000', '594235099@parichat.skru.ac.th', 'f63def287435802a45db15534bdc9925', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235001, '', ' นางสาวกนิษฐา เกียรติพงษ์', 1, '', '0000000000', '604235001@parichat.skru.ac.th', 'f64d12443f481a60fd6d3ba555510a67', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235003, '', ' นายครองรัฐ บุญสุวรรณ', 1, '', '0000000000', '604235003@parichat.skru.ac.th', '692b0f42ddd3df2cdd2da915b2cd6960', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235004, '', ' นายจักรกฤษณ์ ตันเฉลิม', 1, '', '0000000000', '604235004@parichat.skru.ac.th', 'a22dad03e868a7527fc711b41435a41a', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235005, '', ' นางสาวจิราลักษณ์ หมวกแก้ว', 1, '', '0000000000', '604235005@parichat.skru.ac.th', '477e49ad7b2f3bd19b43fed13d882374', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235006, '', ' นายซอลีฮีน บินเจ๊ะโย๊ะ', 1, '', '0000000000', '604235006@parichat.skru.ac.th', '908554e4b9212074dbe9800d29befa06', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235007, '', ' นางสาวซูไรดา กามา', 1, '', '0000000000', '604235007@parichat.skru.ac.th', '4dd9d4ecb67a62935336cf89894a8e27', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235008, '', ' นางสาวณัฐติกาญจน์ นิลพัฒน์', 1, '', '0000000000', '604235008@parichat.skru.ac.th', '3e3c1c6cb8a6b91db3df3c2431cdde55', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235010, '', ' นายธนภัทร จันทร์อิน', 1, '', '0000000000', '604235010@parichat.skru.ac.th', 'fd134e452f2737e1fc2f83e29d5ca8bc', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235011, '', ' นายธวัชชัย เอียดเสถียร', 1, '', '0000000000', '604235011@parichat.skru.ac.th', '78b9b8e8e1e77d8fff2c6563498f484c', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235013, '', ' นางสาวนัสริน ยูโซะ', 1, '', '0000000000', '604235013@parichat.skru.ac.th', 'd37eba5e98eaa630102ca90b0740388b', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235014, '', ' นายนิติธร ยอดแก้ว', 1, '', '0000000000', '604235014@parichat.skru.ac.th', 'ff634cc48ca996a31eca806ab493f29f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235016, '', ' นางสาวพรลภัส ซะตา', 1, '', '0000000000', '604235016@parichat.skru.ac.th', '897ee5533477a80cf09ddab82e04d11d', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235018, '', ' นางสาวภัททิยา กำแหงเดช', 1, '', '0000000000', '604235018@parichat.skru.ac.th', '1285702de31d9b15c0099679d0524389', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235022, '', ' นายริซกี หวังจิ', 1, '', '0000000000', '604235022@parichat.skru.ac.th', '8aa7278d34eed8a46e62d5cc161b0457', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235023, '', ' นายเรวัต สุวรรณเมือง', 1, '', '0000000000', '604235023@parichat.skru.ac.th', 'c90d4bab90142726ab57ecfd8f287ea3', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235024, '', ' นางสาววัลวิภา ซ้ายขวัญ', 1, '', '0000000000', '604235024@parichat.skru.ac.th', '334dce587493226f9659e0cd07fdf958', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235025, '', ' นางสาววิลัยลักษณ์ เกิดทรัพย์', 1, '', '0000000000', '604235025@parichat.skru.ac.th', '9dc7d48786f95c1cda22a85f9e976716', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235026, '', ' นายศิรวัฒน์ หมาดเต๊ะ', 1, '', '0000000000', '604235026@parichat.skru.ac.th', '9ef67df8fb69492a6e1541c112c52fa5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235027, '', ' นางสาวสาริณี แสงสว่าง', 1, '', '0000000000', '604235027@parichat.skru.ac.th', '1ec435fc08ad7b88ad7563b4e4eb07b5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235028, '', ' นางสาวสุตาภัทร นวลคำ', 1, '', '0000000000', '604235028@parichat.skru.ac.th', '904eb8e97ad2b24f01af35969627fb79', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235029, '', ' นายสุไลมาน เเซ่อุ่ย', 1, '', '0000000000', '604235029@parichat.skru.ac.th', '37d746a1530a5142d582ab421dea729d', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235030, '', ' นายอนิรุทธ์ จีนชาวนา', 1, '', '0000000000', '604235030@parichat.skru.ac.th', 'bb22e63305819ca5ca846335f2f33833', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235031, '', ' นายอัซรอน บินล่าเต๊ะ', 1, '', '0000000000', '604235031@parichat.skru.ac.th', '74edc431fae213fdf3f647504cd91652', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235032, '', ' นายอัมรูดีน มะเกะ', 1, '', '0000000000', '604235032@parichat.skru.ac.th', '27748f3b79fbfd08bd6a9c095c7b398c', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235036, '', ' นายอาลาวี ยูโซะ', 1, '', '0000000000', '604235036@parichat.skru.ac.th', '8969d4018c0119b4655a6f99003b29ac', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235037, '', ' นางสาวฮาลีซา มะเระ', 1, '', '0000000000', '604235037@parichat.skru.ac.th', 'bb4f6afb0d08b19b70d41674e4bbd297', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(604235049, 'นาย', 'ปฐมวง', 1, 'ศรีเมือง', '0000000000', '604235049@parichat.skru.ac.th', 'c1c9aa9337cc752a53bbf144a4a19340', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235001, 'นาย', 'สมพร', 1, 'สนามชัย', '0000000000', '644235001@parichat.skru.ac.th', '63807e53e93d5e539d7f47485804507f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235002, 'นางสาว', 'อิรวดี', 1, 'สร้อยมาลา', '0000000000', '644235002@parichat.skru.ac.th', '63807e53e93d5e539d7f47485804507f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235003, 'นาย', 'กรกพร', 1, 'ชัยพรม', '0000000000', '644235003@parichat.skru.ac.th', '0acfb41937cad7baffd00abb1712af66', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235004, 'นางสาว', 'ลันณภา', 1, 'สภาวง', '0000000000', '644235004@parichat.skru.ac.th', '0acfb41937cad7baffd00abb1712af66', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235005, 'นาย', 'อดิศกิ์', 1, 'รุจิเรจ', '0000000000', '644235005@parichat.skru.ac.th', '77b2850d103956df1b10e8de980c8076', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235006, 'นางสาว', 'สุวันสร้อย', 1, 'ห้อยสลึง', '0000000000', '644235006@parichat.skru.ac.th', '77b2850d103956df1b10e8de980c8076', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235010, 'นาย', 'สมรัก', 1, 'คำสร้อย', '0000000000', '644235010@parichat.skru.ac.th', 'a103c142ab2c69737ed3f8f8101c1209', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(644235011, 'นาย', 'แสงจัน', 1, 'มณีแสง', '0000000000', '644235011@parichat.skru.ac.th', 'a103c142ab2c69737ed3f8f8101c1209', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234001, '', 'นายรัฐพล  พลภักดี', 2, '', '0000000000', '654234001@parichat.skru.ac.th', 'aba1896f0d40174df7e6555d6c257a85', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234002, '', 'นางสาวรัตนภรณ์  ชาลวัลย์', 2, '', '0000000000', '654234002@parichat.skru.ac.th', 'e588648a693a07dd9994e6a1503f34c8', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234003, '', 'นางสาวคันธรส  แก้วมณีโสม', 2, '', '0000000000', '654234003@parichat.skru.ac.th', '6c4eea0e0099fad440fb127a73f011a5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234004, '', 'นางสาวสุพัตรา  ชาญยนต์', 2, '', '0000000000', '654234004@parichat.skru.ac.th', '8e700caef944a5e7ff0b8798409cda1e', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234005, '', 'นางสาวพรพิมล  ชูมณี', 2, '', '0000000000', '654234005@parichat.skru.ac.th', '70f4e72e93b99af3c377ed8940620dd3', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234006, '', 'นางสาวจตุพร  องอาจ', 2, '', '0000000000', '654234006@parichat.skru.ac.th', '2a52aff9d8031611ae7659535db9d483', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234007, '', 'นางสาวศิรินาถ  กิ่งรัตน์', 2, '', '0000000000', '654234007@parichat.skru.ac.th', 'd83f32f61fcda0fd53e50494052e5d36', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234008, '', 'นางสาวพรนิภา  สุ่มมาตย์', 2, '', '0000000000', '654234008@parichat.skru.ac.th', '3274eb25ae1f8e0d787c9a3a46c5c068', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234009, '', 'นางสาวจุฑามาส  จันทรณะ', 2, '', '0000000000', '654234009@parichat.skru.ac.th', '15164f1a86a6f91a3f0188b8b742a205', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234010, '', 'นางสาวสุดารัตน์  ยอดพิจิตร', 2, '', '0000000000', '654234010@parichat.skru.ac.th', 'a7f9b37943d7746f3257ef9116ab2005', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234011, '', 'นางสาวพัชรีย์  บัติโยธา', 2, '', '0000000000', '654234011@parichat.skru.ac.th', '2bc0735ef0e11985b3c3fb961ddeb28f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654234012, '', 'นางสาวพิญาดา  อินทร์จันทร์', 2, '', '0000000000', '654234012@parichat.skru.ac.th', '02cfdfe66bd83d1f34da445315b17a08', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235001, '', 'นางสาววริศรา  แสนโสม', 1, '', '0000000000', '654235001@parichat.skru.ac.th', '069913ec14cb0f37798fdab11e992fd1', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235002, '', 'นางสาวกรกนก  หนูช่วย', 1, '', '0000000000', '654235002@parichat.skru.ac.th', 'a79980e12f3d43da535cd4f68fc8408d', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235003, '', 'นางสาวกนกวรรณ  หนูแก้ว', 1, '', '0000000000', '654235003@parichat.skru.ac.th', '807ffa8e067b8fe8614358e7c9ec21b7', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235004, '', 'นางสาวหทัยรัตน์  ซ้ายเบี้ยว', 1, '', '0000000000', '654235004@parichat.skru.ac.th', '5da1b7d786f38b967283cd851dee19c4', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235005, '', 'นายธันวา  แซ่หล้าย', 1, '', '0000000000', '654235005@parichat.skru.ac.th', 'f59974516db2267215d27d607e000574', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235006, '', 'นายอาทิติพงษ์  ขุนวงศ์', 1, '', '0000000000', '654235006@parichat.skru.ac.th', 'fbac9ae4c9f39804b827b85034a9aff5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235007, '', 'นายพงศ์พณิช  ราชกิจ', 1, '', '0000000000', '654235007@parichat.skru.ac.th', 'c5e12b352ae795a3920729a1bc170d21', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235008, '', 'นางสาวปิยธิดา  แก้วคงคา', 1, '', '0000000000', '654235008@parichat.skru.ac.th', '9d907231f1967b608d7b1c7bfc556f13', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235009, '', 'นางสาวสุธาสินี  ศรีสุข', 1, '', '0000000000', '654235009@parichat.skru.ac.th', 'ba3a2373bda1f866d1bab3c9984bf3a5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235010, '', 'นางสาวสุภาพร  สาลี', 1, '', '0000000000', '654235010@parichat.skru.ac.th', '67a50b7951284a398474de2bd237ea38', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235011, '', 'นางสาวกนกวรรณ  จันทร์เอียด', 1, '', '0000000000', '654235011@parichat.skru.ac.th', '5c72b7a550b57c88eaf7dafb58f77304', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235012, '', 'นายทัศน์พล  สุทธิมาศ', 1, '', '0000000000', '654235012@parichat.skru.ac.th', 'a716278db055ee433ed2a7fdabecfc74', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235013, '', 'นางสาววิรวรรณ  แมนวงศ์', 1, '', '0000000000', '654235013@parichat.skru.ac.th', 'ef29e5ef0521192bc6ddba3aea9f7c41', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235014, '', 'นางสาววรรณวิษา  ช่อสม', 1, '', '0000000000', '654235014@parichat.skru.ac.th', '6a1a2c053b3a4e81e910e9dac78fe346', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235015, '', 'นางสาวศศิวิมล  บุญร่ม', 1, '', '0000000000', '654235015@parichat.skru.ac.th', '50624208750fddc3efd4962559119545', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(654235016, '', 'นางสาวกุสุมา  บัวเกตุ', 1, '', '0000000000', '654235016@parichat.skru.ac.th', '827a4ab47e08ea5981b3b54259a97c59', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1);

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
(2, '6H0gFs', 63001),
(3, '6H0gFs', 63002),
(4, '6H0gFs', 63003),
(5, '6H0gFs', 63004),
(6, '6H0gFs', 63005),
(7, '6H0gFs', 63006),
(8, '6H0gFs', 63007),
(9, '6H0gFs', 63008),
(10, '6H0gFs', 63009),
(11, '6H0gFs', 63010),
(12, '6H0gFs', 63011),
(13, '6H0gFs', 63012),
(14, '6H0gFs', 63013),
(15, '6H0gFs', 63014),
(16, '6H0gFs', 63015),
(17, '6H0gFs', 63045),
(18, '6H0gFs', 63046),
(19, '6H0gFs', 63053),
(20, '6H0gFs', 63054),
(21, '6H0gFs', 63055),
(23, 'rWwy5T', 63031),
(24, 'rWwy5T', 63032),
(25, 'rWwy5T', 63033),
(26, 'rWwy5T', 63034),
(27, 'rWwy5T', 63035),
(28, 'rWwy5T', 63036),
(29, 'rWwy5T', 63037),
(30, 'rWwy5T', 63038),
(31, 'rWwy5T', 63039),
(32, 'rWwy5T', 63040),
(33, 'rWwy5T', 63041),
(34, 'rWwy5T', 63042),
(35, 'rWwy5T', 63052),
(36, 'rWwy5T', 63057),
(38, 'Sy1lkb', 63018),
(39, 'Sy1lkb', 63019),
(40, 'Sy1lkb', 63020),
(41, 'Sy1lkb', 63021),
(42, 'Sy1lkb', 63022),
(43, 'Sy1lkb', 63023),
(44, 'Sy1lkb', 63024),
(45, 'Sy1lkb', 63025),
(46, 'Sy1lkb', 63026),
(47, 'Sy1lkb', 63027),
(48, 'Sy1lkb', 63028),
(49, 'Sy1lkb', 63029),
(50, 'Sy1lkb', 63030),
(51, 'Sy1lkb', 63016),
(52, 'Sy1lkb', 63017),
(53, 'Sy1lkb', 63043),
(54, 'Sy1lkb', 63044),
(55, 'Sy1lkb', 63050),
(56, 'Sy1lkb', 63051),
(57, 'Sy1lkb', 63056),
(59, 'F3oe4s', 651001),
(60, 'F3oe4s', 651002),
(61, 'F3oe4s', 651003),
(62, 'F3oe4s', 651004),
(63, 'F3oe4s', 651005),
(64, 'F3oe4s', 651006),
(65, 'F3oe4s', 651007),
(66, 'F3oe4s', 651008),
(67, 'F3oe4s', 651009),
(68, 'F3oe4s', 651010),
(69, 'F3oe4s', 651011),
(70, 'F3oe4s', 641001002),
(72, 'n9GsxG', 641640304),
(73, 'n9GsxG', 641640506),
(75, 'n9GsxG', 641641011),
(78, 'n9GsxG', 641650208);

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
(7, 'Sy1lkb', 594235035),
(8, 'Sy1lkb', 594235036),
(10, 'Sy1lkb', 594235039),
(11, 'Sy1lkb', 594235040),
(12, 'Sy1lkb', 594235042),
(13, 'Sy1lkb', 594235043),
(14, 'Sy1lkb', 594235044),
(15, 'Sy1lkb', 594235045),
(16, 'Sy1lkb', 594235046),
(17, 'Sy1lkb', 594235047),
(18, 'Sy1lkb', 594235048),
(19, 'Sy1lkb', 594235049),
(20, 'Sy1lkb', 594235050),
(21, 'Sy1lkb', 594235051),
(22, 'Sy1lkb', 594235052),
(23, 'Sy1lkb', 594235054),
(24, 'Sy1lkb', 594235058),
(25, 'Sy1lkb', 594235062),
(26, 'Sy1lkb', 594235065),
(28, 'rWwy5T', 594235001),
(29, 'rWwy5T', 594235002),
(30, 'rWwy5T', 594235004),
(31, 'rWwy5T', 594235008),
(32, 'rWwy5T', 594235010),
(33, 'rWwy5T', 594235011),
(34, 'rWwy5T', 594235014),
(35, 'rWwy5T', 594235016),
(36, 'rWwy5T', 594235018),
(37, 'rWwy5T', 594235019),
(38, 'rWwy5T', 594235021),
(39, 'rWwy5T', 594235022),
(40, 'rWwy5T', 594235024),
(41, 'rWwy5T', 594235025),
(42, 'rWwy5T', 594235027),
(43, 'rWwy5T', 594235030),
(44, 'rWwy5T', 594235031),
(45, 'rWwy5T', 594235033),
(47, '6H0gFs', 604235001),
(48, '6H0gFs', 604235003),
(49, '6H0gFs', 604235004),
(50, '6H0gFs', 604235005),
(51, '6H0gFs', 604235006),
(52, '6H0gFs', 604235007),
(53, '6H0gFs', 604235008),
(54, '6H0gFs', 604235010),
(55, '6H0gFs', 604235011),
(56, '6H0gFs', 604235013),
(57, '6H0gFs', 604235014),
(58, '6H0gFs', 604235016),
(59, '6H0gFs', 604235018),
(60, '6H0gFs', 604235022),
(61, '6H0gFs', 604235023),
(62, '6H0gFs', 604235024),
(63, '6H0gFs', 604235025),
(64, '6H0gFs', 604235026),
(65, '6H0gFs', 604235027),
(66, '6H0gFs', 604235028),
(67, '6H0gFs', 604235029),
(68, '6H0gFs', 604235030),
(69, '6H0gFs', 604235031),
(70, '6H0gFs', 604235032),
(72, '6H0gFs', 604235036),
(73, '6H0gFs', 604235037),
(74, 'Sy1lkb', 594235033),
(76, 'Sy1lkb', 594235037),
(79, 'F3oe4s', 654235001),
(80, 'F3oe4s', 654235002),
(81, 'F3oe4s', 654235003),
(82, 'F3oe4s', 654235004),
(83, 'F3oe4s', 654235005),
(84, 'F3oe4s', 654235006),
(85, 'F3oe4s', 654235007),
(86, 'F3oe4s', 654235008),
(87, 'F3oe4s', 654235009),
(88, 'F3oe4s', 654235010),
(89, 'F3oe4s', 654235011),
(90, 'F3oe4s', 654235012),
(91, 'F3oe4s', 654235013),
(92, 'F3oe4s', 654235014),
(93, 'F3oe4s', 654235015),
(94, 'F3oe4s', 654235016),
(95, 'F3oe4s', 654234001),
(96, 'F3oe4s', 654234002),
(97, 'F3oe4s', 654234003),
(98, 'F3oe4s', 654234004),
(99, 'F3oe4s', 654234005),
(100, 'F3oe4s', 654234006),
(101, 'F3oe4s', 654234007),
(102, 'F3oe4s', 654234008),
(103, 'F3oe4s', 654234009),
(104, 'F3oe4s', 654234010),
(105, 'F3oe4s', 654234011),
(106, 'F3oe4s', 654234012),
(109, 'F3oe4s', 594235001),
(110, 'F3oe4s', 594235002),
(111, 'Sy1lkb', 594235008),
(113, 'Sy1lkb', 594235080),
(115, 'uiyfN6', 33001001),
(116, 'uiyfN6', 33001002),
(117, 'uiyfN6', 33001003),
(118, 'uiyfN6', 33001004),
(119, 'uiyfN6', 33001005),
(120, 'uiyfN6', 33001006),
(121, 'uiyfN6', 33001007),
(122, 'uiyfN6', 33001008),
(123, 'uiyfN6', 33001009),
(124, 'uiyfN6', 33001010),
(127, 'n9GsxG', 594235049),
(129, 'n9GsxG', 604235049),
(132, 'n9GsxG', 594235089),
(133, 'n9GsxG', 594235099),
(136, 'n9GsxG', 644235001),
(137, 'n9GsxG', 644235002),
(140, 'n9GsxG', 644235003),
(141, 'n9GsxG', 644235004),
(144, 'n9GsxG', 644235005),
(145, 'n9GsxG', 644235006),
(148, 'n9GsxG', 644235010),
(149, 'n9GsxG', 644235011),
(154, 'n9GsxG', 654235002),
(155, 'n9GsxG', 654235008);

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
('6H0gFs', '4664317', 'rfsuuhr', 'โครงงานทางเทคโนโลยีสารสนเทศ 2', '3', 2564, '1', 1, 6410, '2021-05-07 11:59:28', '20:00:00', '05:00:00', 2, 1),
('F3oe4s', '466301', 'kfprdw', 'โครงงานทางเทคโนโลยีสารสนเทศ2', '1', 2565, '1', 2, 65002, '2021-05-15 13:26:18', '05:25:00', '07:26:00', 1, 1),
('n9GsxG', '466301', 'wesdsd', 'โครงงานทางเทคโนโลยีสารสนเทศ2', '03', 2564, '03', 1, 6410, '2021-05-19 13:33:46', '09:35:00', '22:38:00', 2, 1),
('rWwy5T', '4664301', 'esnqmkk', 'โครงงานทางเทคโนโลยีสารสนเทศ 2', '3', 2564, '1', 2, 6410, '2021-05-07 11:56:45', '20:00:00', '05:56:00', 2, 2),
('Sy1lkb', '4664301', 'swffey', 'โครงงานทางเทคโนโลยีสารสนเทศ 2', '3', 2564, '2', 3, 6410, '2021-05-07 12:20:04', '21:00:00', '05:19:00', 2, 1),
('uiyfN6', '466301', 'dfdfdf', 'ทดสอบ', '01', 110, '01', 2, 6410, '2021-05-17 19:38:21', '11:38:00', '00:38:00', 2, 2);

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
(6401, 'ผศ.ดร.', 'ทวีรัตน์', 'นวลช่วย', 'taweerat.nu@skru.ac.th', '012d9fe15b2493f21902cd55603382ec', 'https://it.skru.ac.th/images/teachers/1_IMG_0225.JPG', 1),
(6402, '', 'ผศ.ดร.อำนาจ ทองขาว', '0', 'aumnat.to@skru.ac.th', '72c25197b6a491816d9a84b42d7205f0', 'https://it.skru.ac.th/images/teachers/2_IMG_9797.JPG', 1),
(6403, '', 'ผศ.พิกุล สมจิตต์', '0', 'pikul.so@skru.ac.th', 'eae15aabaa768ae4a5993a8a4f4fa6e4', 'https://it.skru.ac.th/images/teachers/9_IMG_0200.JPG', 1),
(6404, '', 'ผศ.ดร. ศศลักษณ์ ทองขาว', '0', 'sasalak.to@skru.ac.th', 'd994e3728ba5e28defb88a3289cd7ee8', 'https://it.skru.ac.th/images/teachers/Sasalak_IMG_0579.JPG', 1),
(6405, '', 'ผศ.สารภี จุลแก้ว', '0', 'sarapee.ch@skru.ac.th', 'b58f7d184743106a8a66028b7a28937c', 'https://it.skru.ac.th/images/teachers/10_IMG_0770.JPG', 1),
(6406, '', 'ผศ.นลินี อินทมะโน', '0', 'nalinee.in@skru.ac.th', '99cad265a1768cc2dd013f0e740300ae', 'https://it.skru.ac.th/images/teachers/Nalinee_IMG_0282_OK_Good.JPG', 1),
(6407, '', 'ผศ.กฤษณ์วรา รัตนโอภาส', '0', 'kriwara.ra@skru.ac.th', '90365351ccc7437a1309dc64e4db32a3', 'https://it.skru.ac.th/images/teachers/6_Kritwara_IMG_0545.JPG', 1),
(6408, '', 'ผศ.ดินาถ หลำสุบ', '0', 'dinat.la@skru.ac.th', '828b1eb30921659e22e53a9edc92c4c4', 'https://it.skru.ac.th/images/teachers/Dinat_IMG_9872.JPG', 1),
(6409, '', 'อ.สกรร รอดคร้าย', '0', 'sakan.ro@skru.ac.th', '0b7a9d54deeb611edc4540d286e9a042', 'https://it.skru.ac.th/images/teachers/5_Sakan_IMG_0571.JPG', 1),
(6410, 'อ.', 'พัฒนะ ', 'วรรณวิไล', 'pattana.wa@skru.ac.th', '713fd63d76c8a57b16fc433fb4ae718a', 'https://it.skru.ac.th/images/teachers/3_IMG_0361.JPG', 2),
(6411, '', 'อ.ญาณพัฒน์ ชูชื่น', '0', 'yanapat.ch@skru.ac.th', '8091588a3968da46e3e43a76bf3b3a98', 'https://it.skru.ac.th/images/teachers/10_IMG_0096.JPG', 1),
(6412, '', 'อ.จักสิทธิ์ โอฬาริกชาติ', '0', 'jaksit.ol@skru.ac.th', 'cdf66a6a7a04d87d865335701790c3e3', 'https://it.skru.ac.th/images/teachers/7_Jaksit_IMG_0416.JPG', 1),
(6413, '', 'อ.ยุพดี อินทสร', '0', 'youppadee.in@skru.ac.th', 'a543c921889f9dcddaff0ce4ca955293', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(6414, '', 'อ.เสรี ชนะ', '0', 'seree.ch@skru.ac.th', '1ee942c6b182d0f041a2312947385b23', 'https://it.skru.ac.th/images/teachers/Seree_IMG_9879.JPG', 1),
(6415, 'อ.', 'โชติธรรม', 'ธารรักษ์', 'chotitham.th@skru.ac.th', '0993b7960f34c29b1fdb6516be27046f', 'https://it.skru.ac.th/images/teachers/8_Chotitum_IMG_0439.JPG', 1),
(6416, '', 'อ. ดร.เกศินี บุญช่วย', '0', 'kesinee.bo@skru.ac.th', '8e77b3768b440a281c5101ca7941d5e0', 'https://it.skru.ac.th/images/teachers/kesinee.jpg', 1),
(6417, '', 'อ. ดร.ศศิน จันทร์พวงทอง', '0', 'sasin.ch@skru.ac.th', '8830c97ab60254cd05628c6e61e8c54c', 'https://it.skru.ac.th/images/teachers/11_IMG_0531.JPG', 1),
(6418, '', 'อ.คมกฤช เจริญ', '0', 'komkrit.ch@skru.ac.th', '0f0ee3310223fe38a989b2c818709393', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(6419, '', 'อ.ภานุกร ภูริปัญญานันท์', '0', 'panukorn.pu@skru.ac.th', '288cd2567953f06e460a33951f55daaf', 'https://it.skru.ac.th/images/teachers/4_IMG_9703.JPG', 1),
(14242, 'นาย', '14242', '1424214242', '14242@sdsd', '24988d9aa627ea723a4769c83e481a76', 'https://i.ibb.co/HFB65Yz/asa.png', 3),
(22303, '', 'ผู้ดูแลระบบ1', '0', 'admin@ss.com', '2bc33f317d4f25b10e2a2a55392b11cb', 'https://i.ibb.co/HFB65Yz/asa.png', 3),
(65002, '', 'ผศ.ดร.ศจี  สุวรรณศรี', '0', '65002@parichat.skru.ac.th', '1718880b078a0967507fba367e65cff7', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(65003, '', 'ดร.จันทร์ทิภา   จบศรี', '0', '65003@parichat.skru.ac.th', '68b6750f851a563726df638d91c73c5f', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65004, '', 'ดร.ภก.ศราวุฒิ  อู่พุฒินันท์', '0', '65004@parichat.skru.ac.th', '1dbc14c2bef0ada4bddacc86f3d9205e', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65005, '', 'ผศ.ดร.สกลวรรณ  ประพฤติบัติ', '0', '65005@parichat.skru.ac.th', 'ac6ee3bee3110f902273dd14defaf907', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65006, '', 'ดร.อรนันท์  เกิดพินธ์', '0', '65006@parichat.skru.ac.th', 'e6c69d8c19af0650db7eecca23b724b1', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65007, '', 'ดร.เพ็ญศรี   เจริญสิทธิ์', '0', '65007@parichat.skru.ac.th', '62c8d20b2faabeb536d16d0cfdfdffd6', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65008, '', 'รศ.ดร.อรสร   สารพันโชติวิทยา', '0', '65008@parichat.skru.ac.th', 'dd7923906c2afdc38e1c3f6a3b0c020e', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65009, '', 'ดร.สุดาพร   วงค์วาร', '0', '65009@parichat.skru.ac.th', '9ec66d686af106f0bdd9e2d22ff25897', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65010, '', 'ผศ.จุไรรัตน์  โสภา', '0', '65010@parichat.skru.ac.th', 'a5030fe899ddd939afcb36fb981b20b1', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65011, '', 'ดร.จิตติมา   นาคีเภท', '0', '65011@parichat.skru.ac.th', '0093d33617e8d18786c3e3b5bae009a3', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65012, '', 'ผศ.วรารัชต์   มหามนตรี', '0', '65012@parichat.skru.ac.th', '0b9ad296faa8930bfad91f2c8e809cf6', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(65013, '', 'ผศ.ดร.สุดสรวง   ยุทธนา', '0', '65013@parichat.skru.ac.th', '90f8018a1bc43e4077ce574d1eb1053f', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(88001, '', 'อ.สมศัก', '0', 'somsak250@gamil.com', 'e64c339f7c2467931a01e638bf8c0568', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(88002, '', 'อ.สมชาย', '0', 'somchai.41@gmail.com', '1a533824835928b905516253b309366e', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(88003, '', 'อ.วิชัย', '0', 'vichai2350@gmail.com', '8d59d24b83c4fd89ea2ce4a7644818bd', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(445855, 'ผศ.', 'กิตตินัน', 'มณีฉายแสง', 'kittinan@ss.dd', '6c1fad8eb52d006358bc6cb832d03240', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(654420, '', 'ผศ.ดร.ทวีรัตน์ นวลช่วย', '0', 'admin@ss.com', 'aeffb2774f1b57c7de13444369ffc184', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(14524242, 'อ.', 'ดรุณี', 'มะแสงฉาย', 'admin@ss.com', 'e064e5044d1d5baacdbabd26cfa0d652', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
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
  MODIFY `appoint_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `com05`
--
ALTER TABLE `com05`
  MODIFY `com05_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `filee`
--
ALTER TABLE `filee`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pr`
--
ALTER TABLE `pr`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_has_adviser`
--
ALTER TABLE `project_has_adviser`
  MODIFY `pha_key` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `project_has_student`
--
ALTER TABLE `project_has_student`
  MODIFY `phs_key` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `regis_project`
--
ALTER TABLE `regis_project`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subject_hash_project`
--
ALTER TABLE `subject_hash_project`
  MODIFY `sp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `subject_hash_student`
--
ALTER TABLE `subject_hash_student`
  MODIFY `ss_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

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
