-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 03:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectstudenv2`
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
  `apooint_minute` int(3) NOT NULL,
  `appoint_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(15) NOT NULL,
  `appoint_status` int(2) NOT NULL,
  `recorder` int(15) NOT NULL,
  `appoint_recorder` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`appoint_id`, `project_id`, `appoint_date_start`, `appoint_date_end`, `apooint_minute`, `appoint_comment`, `teacher_id`, `appoint_status`, `recorder`, `appoint_recorder`) VALUES
(3, 2222, '2021-01-13 14:57:00', '2021-01-13 18:03:00', 0, 'dfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf', 1, 3, 11221, '2021-01-22 14:57:30'),
(4, 1111, '2021-01-29 19:59:00', '2021-01-29 19:05:00', 0, 'sdsdsd', 1, 4, 11221, '2021-01-22 14:59:09'),
(5, 2222, '2021-01-13 14:57:00', '2021-01-13 18:03:00', 0, 'dfdfdfdfdfddfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdffdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf', 1, 2, 11221, '2021-01-22 14:57:30'),
(6, 2222, '2021-01-22 22:46:00', '2021-01-22 23:46:00', 0, 'กก\r\nกก\r\nหกกห\r\nหกหก\r\n', 1, 3, 11221, '2021-01-22 18:46:51'),
(7, 2222, '2021-01-23 22:00:00', '2021-01-23 22:30:00', 0, '2222', 1, 3, 11221, '2021-01-23 19:38:29'),
(8, 2222, '2021-01-23 22:00:00', '2021-01-23 22:10:00', 0, '222', 1, 3, 11221, '2021-01-23 19:40:50'),
(9, 2222, '2021-01-14 14:50:00', '2021-01-14 15:00:00', 0, 'rrwrwrwrwrrw', 1, 4, 11221, '2021-01-23 19:45:54'),
(10, 2222, '2021-01-30 12:50:00', '2021-01-30 13:00:00', 0, 'wewewewe', 2, 2, 11221, '2021-01-23 19:47:31'),
(11, 2222, '2021-01-29 02:25:00', '2021-01-29 03:24:00', 59, 'xxxxxxxxxxxxx', 2, 2, 11221, '2021-01-24 08:14:19'),
(12, 2222, '2021-01-09 04:54:00', '2021-01-09 05:27:00', 33, 'Oooooo', 1, 2, 11221, '2021-01-24 10:36:35'),
(13, 2222, '2021-01-29 19:02:00', '2021-01-29 19:22:00', 20, 'หหดหดหด', 1, 2, 11221, '2021-01-24 15:57:34'),
(14, 2222, '2021-01-29 19:02:00', '2021-01-29 19:22:00', 20, 'หหดหดหด', 1, 6, 11221, '2021-01-24 15:57:34'),
(15, 59033031, '2021-01-28 19:30:00', '2021-01-28 20:29:00', 59, 'หหหหหห', 2, 4, 594235001, '2021-01-24 20:30:35'),
(16, 59033031, '2021-01-16 22:20:00', '2021-01-16 22:50:00', 20, 'ok', 2, 5, 594235001, '2021-01-25 21:06:43'),
(17, 2222, '2021-01-24 14:52:00', '2021-01-24 15:00:00', 8, 'Oooooo', 1, 2, 11221, '2021-01-24 10:36:35'),
(18, 2222, '2021-03-25 14:52:00', '2021-03-25 15:17:00', 8, 'Oooooo', 1, 2, 11221, '2021-01-24 10:36:35'),
(19, 2222, '2021-01-06 17:52:00', '2021-01-06 18:12:00', 8, 'Oooooo', 1, 3, 11221, '2021-01-24 10:36:35'),
(20, 59033031, '2021-01-30 09:30:00', '2021-01-30 10:00:00', 15, 'zszszszss', 2, 4, 594235001, '2021-01-29 10:25:22'),
(21, 59033031, '2021-02-27 14:28:00', '2021-02-27 14:48:00', 20, 'aaaa', 2, 2, 594235001, '2021-02-02 22:28:19'),
(23, 2222, '2021-03-10 22:16:00', '2021-03-10 22:36:00', 20, '', 1, 3, 11221, '2021-03-10 22:08:11');

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
  `teacher_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `com05`
--

INSERT INTO `com05` (`com05_id`, `appoint_id`, `project_id`, `comment_teacher`, `comment_assign`, `score`, `meet_check`, `teacher_id`) VALUES
(1, 3, 2222, 'comment_teacher	varchar(255)', 'comment_assign	varchar(255)', 2, 2, 1),
(2, 3, 59033031, 'comment_teacher	varchar(255) comment_teacher	varchar(255)comment_teacher	varchar(255)', 'comment_assign	varchar(255) comment_assign	varchar(255) comment_assign	varchar(255) comment_assign	varchar(255)', 2, 1, 1),
(6, 3, 59033031, 'comment_teacher	varchar(255) comment_teacher	varchar(255)comment_teacher	varchar(255)', 'comment_assign	varchar(255) comment_assign	varchar(255) comment_assign	varchar(255) comment_assign	varchar(255)', 4, 2, 1),
(7, 18, 2222, '111', '222', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `filee`
--

CREATE TABLE `filee` (
  `file_id` int(255) NOT NULL,
  `project_id` int(255) NOT NULL,
  `file_type` int(255) NOT NULL,
  `file_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_apporve` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `filee`
--

INSERT INTO `filee` (`file_id`, `project_id`, `file_type`, `file_link`, `file_apporve`) VALUES
(23, 2222, 1, 'https://www.google.com/', 1),
(24, 2222, 1, 'https://www.google.com/', 1),
(25, 2222, 3, 'https://www.google.com/2233', 1),
(26, 2222, 3, 'https://www.google.com/22', 2),
(28, 2222, 3, 'https://www.google.com/22', 1),
(30, 2222, 3, 'https://www.youtube.com/', 1),
(32, 59033031, 1, 'https://www.google.com/', 1),
(33, 59033032, 3, 'https://stackoverflow.com/questions/24975043/rollback-uncommitted-changes-in-github-desktop-or-github-for-windows', 1);

-- --------------------------------------------------------

--
-- Table structure for table `file_apporve`
--

CREATE TABLE `file_apporve` (
  `apporve_id` int(2) NOT NULL,
  `apporve_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file_apporve`
--

INSERT INTO `file_apporve` (`apporve_id`, `apporve_name`) VALUES
(1, 'รอยืนยัน'),
(2, 'ยืนยันแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `file_type`
--

CREATE TABLE `file_type` (
  `file_type_id` int(11) NOT NULL,
  `file_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_type_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file_type`
--

INSERT INTO `file_type` (`file_type_id`, `file_type_name`, `file_type_icon`) VALUES
(1, 'COM-01', 'far fa-star'),
(3, 'COM-04', 'far fa-paper-plane');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `units` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `code`, `name`, `price`, `units`) VALUES
(1, 'B10', 'HP C4844A BLACK (10)', 1300, 'ตลับ'),
(2, 'C11', 'HP C4836A CYAN (11)', 1220, 'ตลับ'),
(3, 'Y11', 'HP C4838A YELLOW (11)', 1220, 'ตลับ'),
(4, 'C920XL', 'HP CD972A CYAN (920XL)', 450, 'ตลับ'),
(5, 'B920XL', 'HP CD975A BLACK (920XL)', 930, 'ตลับ'),
(6, 'TZ631', 'BROTHER TZ 631', 800, 'ตลับ'),
(7, 'LQ2190', 'EPSON LQ 2190', 550, 'ตลับ'),
(8, 'LQ300', 'EPSON LQ 300+', 180, 'ตลับ'),
(9, 'L800LC', 'EPSON L800 L-CYAN', 470, 'ขวด'),
(10, 'L800LM', 'EPSON L800 L-MAGEN', 470, 'ขวด');

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
(2, 'cs');

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
-- Table structure for table `notifications_student`
--

CREATE TABLE `notifications_student` (
  `notifications_id` int(11) NOT NULL,
  `notifications_sender` int(11) NOT NULL,
  `notifications_recipient` int(11) NOT NULL,
  `notifications_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifications_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications_teacher`
--

CREATE TABLE `notifications_teacher` (
  `notifications_id` int(255) NOT NULL,
  `notifications_sender` int(15) NOT NULL,
  `notifications_project` int(15) NOT NULL,
  `notifications_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifications_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_stu`
--

CREATE TABLE `notification_stu` (
  `notification_id` int(255) NOT NULL,
  `notification_teacher` int(15) NOT NULL,
  `notification_action` varchar(255) NOT NULL,
  `notification_appoint_date` datetime NOT NULL,
  `notification_date` datetime NOT NULL DEFAULT current_timestamp(),
  `notification_project` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification_stu`
--

INSERT INTO `notification_stu` (`notification_id`, `notification_teacher`, `notification_action`, `notification_appoint_date`, `notification_date`, `notification_project`) VALUES
(1, 1, 'ยืนยัน', '2021-02-16 23:16:14', '2021-02-14 23:17:21', 59033031),
(2, 1, 'ยืนยัน', '2021-02-16 23:16:14', '2021-02-14 23:17:45', 59033031),
(3, 1, 'ยืนยัน', '2021-02-16 23:16:14', '2021-02-14 23:20:00', 59033031);

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
(1, 'ทดสอบ', 'ทดสอบบบบบออ', 330004, '2021-03-04 09:17:50'),
(2, 'ทดสอบ', 'ทดสอบบบบบออ', 330004, '2021-03-04 09:17:50'),
(3, 'ทดสอบ', 'ทดสอบบบบบออ', 330004, '2021-03-04 09:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(15) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_type` int(2) NOT NULL,
  `project_adviser1` int(15) NOT NULL,
  `project_adviser2` int(15) NOT NULL,
  `project_status` int(2) NOT NULL DEFAULT 1,
  `project_record` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_type`, `project_adviser1`, `project_adviser2`, `project_status`, `project_record`) VALUES
(1111, 'รอปรับปรุงข้อมูล', 1, 1111, 3, 3, 1),
(2222, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 2, 1, 3, 1, 1),
(5588, 'ระบบไฟฟ้าพลังงานหมุนเวียน', 2, 2, 4, 3, 1),
(55478, 'ssdsd', 1, 1, 2, 2, 1),
(59033031, 'ระบบค้นหาช่างภาพ', 1, 1, 2, 1, 1),
(59033032, 'ระบบค้นหาช่างภาพ', 1, 4, 1, 2, 1);

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
(1, 1, 'aaa'),
(2, 2, 'aalla'),
(3, 3, 'aasdsda'),
(4, 4, 'asdsdaa'),
(5, 5, 'aasdsa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(15) NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_major` int(2) NOT NULL,
  `student_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0000000000',
  `student_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg',
  `student_project` int(15) NOT NULL DEFAULT 1111,
  `student_type` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_major`, `student_phone`, `student_email`, `student_password`, `student_photo`, `student_project`, `student_type`) VALUES
(12, '', 1, '1414141', '594235052@parichat.skru.ac.th', '', 'student_photo', 59033031, 1),
(59, 'ดานิยาน  พร้อมมูล', 1, '0821414145', '594235008@hhhh.ccc', '08f8e0260c64418510cefb2b06eee5cd', '', 59033032, 1),
(1111, 'somsak lettakun', 1, '74747474', '594235008@parichat.skru.ac.th', 'aaa', 'student_photo', 59033031, 1),
(9999, 'อาจารย์ที่ปรึกษาโครงงาน', 1, '11111111', '1sss@ddd', 'c8c605999f3d8352d7bb792cf3fdb25b', 'student_photo', 59033031, 1),
(11221, 'somsak lettakun', 1, '44144qq', '59000@parichat.skru.ac.thqq', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 2222, 2),
(574235001, 'นายสมพร สุวรรณมณี', 1, '0000000000', '574235001@parichat.skru.ac.th', '1ee1c9b2ba5aa6960ec85aed77bae1d5', '', 2222, 1),
(574235002, 'นายแดง ชัยศรี', 1, '0000000000', '574235002@parichat.skru.ac.th', 'cbcd536ec5742ce3c7e35bb7153438e2', '', 5588, 1),
(574235003, 'นางสาวกิตติยา ทองมณี', 1, '0000000000', '574235003@parichat.skru.ac.th', '5b862d22b22489b132b362e406f401b6', '', 2222, 1),
(574235004, 'นางสาววิภาวัลย์ ทองดี', 2, '0000000000', '574235004@parichat.skru.ac.th', '2b5d646dd5c3cead9b057948aee8f692', '', 2222, 1),
(574235005, 'นายสมศักดิ์ นบดินบดี', 1, '0000000000', '574235005@parichat.skru.ac.th', 'a2f30c39b40205308756fd95a10cdd22', '', 5588, 1),
(574235006, 'นายวราชิต บางลาง', 2, '0000000000', '', 'd06dce656e2fd9dc1b0b0d1249795438', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 2222, 1),
(574235007, 'นายกิตติศักดิ์ กมลา', 2, '0000000000', '', '430d3aa9b23700417ea9b78e2a62e5fa', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 2222, 1),
(574235008, 'นางสาวพรภิมล พฤษภา', 1, '0000000000', '574235008@parichat.skru.ac.th', '0e3a9a806f2100a14197841c813c535c', '', 2222, 1),
(594235001, 'กชกร จ่าวิสูตร', 1, '0811555532', '594235001@parichat.skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/ZJHGHvx/594235001.jpg', 59033031, 1),
(594235002, 'ขวัญทิพย์ สส', 1, '0824364892', '594235002@parichat.skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 55478, 1),
(594235008, 'ดานิยาน พร้อมมูล', 1, '0869624129', '594235008@parichat.skru.ac.th', 'b0baee9d279d34fa1dfd71aadb908c3f', 'https://i.ibb.co/HFB65Yz/asa.png', 2222, 1),
(594235033, 'สุพิชญา  เส้งหวัด', 1, '081154417117', '594235033@parichat.skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/1fcKRpT/594235033001.jpg', 59033031, 1);

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
(42, '7ZxTlc', 2222),
(43, 'u3BDNX', 59033032),
(44, 'u3BDNX', 59033031),
(45, 'u3BDNX', 2222),
(46, '7ZxTlc', 59033032),
(47, '7ZxTlc', 59033031),
(59, '7ZxTlc', 55478);

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
(3, 'u3BDNX', 594235001),
(15, '7ZxTlc', 594235001),
(16, '7ZxTlc', 594235033),
(22, '7ZxTlc', 594235008),
(23, '7ZxTlc', 594235002),
(26, '40ooP7', 574235001),
(27, '40ooP7', 574235002),
(28, '40ooP7', 574235003),
(29, '40ooP7', 574235004),
(30, '40ooP7', 574235005),
(33, '40ooP7', 574235008),
(34, 'u3BDNX', 574235001);

-- --------------------------------------------------------

--
-- Table structure for table `subject_project`
--

CREATE TABLE `subject_project` (
  `subject_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
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
  `subject_time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_project`
--

INSERT INTO `subject_project` (`subject_id`, `subject_id2`, `subject_classroom`, `subject_name`, `subject_semester`, `subject_year`, `subject_sec`, `subject_day`, `subject_teacher`, `subject_record`, `subject_time_start`, `subject_time_end`) VALUES
('40ooP7', '3434', 'afdzdvz', 'sdsdscsvsf', '4', 4444, 'sgsfg', 2, 1, '2021-03-10 21:16:58', '23:19:00', '01:21:00'),
('7ZxTlc', 'qqq', '1', 'qqqq', '1', 1, '1', 1, 1, '2021-02-07 11:39:29', '00:00:00', '00:00:00'),
('k4CC66', '4122250', 'cgcnnnny41', 'hjcxvxbxbxb', '1', 23, '04', 2, 1, '2021-03-10 21:15:32', '00:00:00', '13:15:00'),
('u3BDNX', 'ada22', 'sdsdxssxa', 'ddd', '', 2564, '1', 1, 1, '2021-02-07 11:37:33', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL,
  `names` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `names`, `descriptionf`, `email`, `date`) VALUES
(1, 'ddddd', 'B', 'C', '2021-01-24 08:21:35'),
(2, 'ddddd', 'student', 'dadad@wdwd.com', '2021-01-24 08:22:10'),
(3, 'ddddd', 'พร้อมมูล', 'ww@el', '2021-01-24 08:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(10) NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'https://i.ibb.co/HFB65Yz/asa.png',
  `teacher_type` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`, `teacher_photo`, `teacher_type`) VALUES
(1, 'ผศ.ทองมณี สุวรรณภาลัย', 'bbbbbb11@rrr', 'f3abb86bd34cf4d52698f14c0da1dc60', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(2, 'ผศ.ปรวิศ สิทธกร', 'bbbbbb', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(3, 'ไม่มีอาจารย์ที่ปรึกษาร่วม', 'bbsssssssssssssssssssssssssssssssssssssssssss', '', '', 2),
(4, 'ผศ.แสงดาว ฉายแสง', 'bbbbbb', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(1111, 'รอปรับปรุงข้อมูล', 'รอปรับปรุงข้อมูล', '', '', 1),
(330002, 'สมศักดิ์ ศรีสะอาด', 'somsak@ss', '6762371870c04b6c3e89dde3084076e8', 'https://i.ibb.co/HFB65Yz/asa.png', 1),
(330004, 'สมรักษ์ คำสิงห์', 'somsak@ss', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 3);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `telephone`, `email`) VALUES
(594235002, 'daniyan', '11111', '0936681712', '594235002@parichat.skru.ac.th');

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
-- Indexes for table `file_apporve`
--
ALTER TABLE `file_apporve`
  ADD PRIMARY KEY (`apporve_id`);

--
-- Indexes for table `file_type`
--
ALTER TABLE `file_type`
  ADD PRIMARY KEY (`file_type_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications_student`
--
ALTER TABLE `notifications_student`
  ADD PRIMARY KEY (`notifications_id`),
  ADD KEY `notifications_sender` (`notifications_sender`),
  ADD KEY `notifications_recipient` (`notifications_recipient`);

--
-- Indexes for table `notifications_teacher`
--
ALTER TABLE `notifications_teacher`
  ADD PRIMARY KEY (`notifications_id`),
  ADD KEY `notifications_project` (`notifications_project`),
  ADD KEY `notifications_sender` (`notifications_sender`);

--
-- Indexes for table `notification_stu`
--
ALTER TABLE `notification_stu`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `notification_project` (`notification_project`),
  ADD KEY `notification_teacher` (`notification_teacher`);

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
  ADD KEY `project_status` (`project_status`),
  ADD KEY `project_adviser1` (`project_adviser1`),
  ADD KEY `project_adviser2` (`project_adviser2`),
  ADD KEY `project_record` (`project_record`);

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
  ADD KEY `student_project` (`student_project`),
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
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `subject_teacher` (`subject_teacher`),
  ADD KEY `subject_day` (`subject_day`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `appoint_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `com05`
--
ALTER TABLE `com05`
  MODIFY `com05_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `filee`
--
ALTER TABLE `filee`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications_student`
--
ALTER TABLE `notifications_student`
  MODIFY `notifications_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications_teacher`
--
ALTER TABLE `notifications_teacher`
  MODIFY `notifications_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_stu`
--
ALTER TABLE `notification_stu`
  MODIFY `notification_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pr`
--
ALTER TABLE `pr`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject_hash_project`
--
ALTER TABLE `subject_hash_project`
  MODIFY `sp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `subject_hash_student`
--
ALTER TABLE `subject_hash_student`
  MODIFY `ss_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=594235003;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoint`
--
ALTER TABLE `appoint`
  ADD CONSTRAINT `appoint_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `appoint_ibfk_2` FOREIGN KEY (`recorder`) REFERENCES `student` (`student_id`),
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
  ADD CONSTRAINT `filee_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `filee_ibfk_3` FOREIGN KEY (`file_apporve`) REFERENCES `file_apporve` (`apporve_id`);

--
-- Constraints for table `notifications_student`
--
ALTER TABLE `notifications_student`
  ADD CONSTRAINT `notifications_student_ibfk_1` FOREIGN KEY (`notifications_sender`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `notifications_student_ibfk_2` FOREIGN KEY (`notifications_recipient`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `notifications_teacher`
--
ALTER TABLE `notifications_teacher`
  ADD CONSTRAINT `notifications_teacher_ibfk_1` FOREIGN KEY (`notifications_project`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `notifications_teacher_ibfk_2` FOREIGN KEY (`notifications_sender`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `notification_stu`
--
ALTER TABLE `notification_stu`
  ADD CONSTRAINT `notification_stu_ibfk_1` FOREIGN KEY (`notification_project`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `notification_stu_ibfk_2` FOREIGN KEY (`notification_teacher`) REFERENCES `teacher` (`teacher_id`);

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
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`project_status`) REFERENCES `project_status` (`project_status_id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`project_adviser1`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `project_ibfk_4` FOREIGN KEY (`project_adviser2`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `project_ibfk_5` FOREIGN KEY (`project_record`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student_major`) REFERENCES `major` (`student_major_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`student_project`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`student_type`) REFERENCES `student_active` (`active_id`);

--
-- Constraints for table `subject_hash_project`
--
ALTER TABLE `subject_hash_project`
  ADD CONSTRAINT `subject_hash_project_ibfk_1` FOREIGN KEY (`sp_project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `subject_hash_student`
--
ALTER TABLE `subject_hash_student`
  ADD CONSTRAINT `subject_hash_student_ibfk_1` FOREIGN KEY (`ss_subject_id`) REFERENCES `subject_project` (`subject_id`),
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
