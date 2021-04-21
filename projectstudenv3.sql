-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 07:14 AM
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
-- Database: `projectstudenv3`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `23`
-- (See below for the actual view)
--
CREATE TABLE `23` (
`appoint_id` int(255)
,`project_id` int(15)
,`appoint_date_start` datetime
,`appoint_date_end` datetime
,`apooint_minute` int(3)
,`appoint_comment` varchar(255)
,`teacher_id` int(15)
,`appoint_status` int(2)
,`recorder` int(15)
,`appoint_recorder` datetime
);

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
(4, 5511, '2021-03-26 16:54:00', '2021-03-26 17:24:00', 30, 'eeeeee', 99001, 4, 594235001, '2021-03-12 23:50:04'),
(5, 5512, '2021-03-16 00:29:00', '2021-03-16 00:59:00', 30, 'ss', 99001, 4, 594235001, '2021-03-13 00:24:11'),
(6, 5512, '2021-03-31 21:27:00', '2021-03-31 21:30:00', 3, '4411', 99001, 6, 594235002, '2021-03-14 21:27:50'),
(7, 5512, '2021-03-16 00:29:00', '2021-03-16 00:59:00', 30, 'ss', 99001, 4, 594235003, '2021-03-13 00:24:11'),
(11, 5588, '2021-03-31 17:11:00', '2021-03-31 17:21:00', 10, 'llllllllllllll', 99001, 2, 574235001, '2021-03-20 17:11:48'),
(12, 5588, '2021-03-23 17:11:00', '2021-03-23 17:12:00', 1, '111', 99001, 2, 574235001, '2021-03-20 17:39:06'),
(13, 5588, '2021-03-25 17:39:00', '2021-03-25 17:49:00', 10, '10', 99001, 2, 574235001, '2021-03-20 17:42:34'),
(14, 5588, '2021-03-26 17:42:00', '2021-03-26 17:53:00', 30, 'vfv', 99001, 2, 574235001, '2021-03-20 17:55:37'),
(15, 5588, '2021-03-26 17:55:00', '2021-03-26 18:15:00', 20, 'dv', 99001, 2, 574235001, '2021-03-20 17:56:24'),
(16, 5588, '2021-04-09 18:57:00', '2021-04-09 19:27:00', 30, 'แกแ', 99001, 2, 574235001, '2021-03-20 18:57:44'),
(17, 5588, '2021-03-26 18:58:00', '2021-03-26 19:08:00', 10, 'าใา', 99001, 4, 574235001, '2021-03-20 18:58:33'),
(18, 5588, '2021-04-01 21:07:00', '2021-04-01 21:47:00', 40, 'ด้ด้้', 99001, 6, 574235001, '2021-03-20 19:07:59'),
(19, 5588, '2021-03-24 19:07:00', '2021-03-24 19:47:00', 40, 'ด้ด้้dcdcdcdcdcd rrrrrttttt bggb', 99001, 6, 574235001, '2021-03-20 19:08:49'),
(20, 5588, '2021-03-25 19:08:00', '2021-03-25 19:48:00', 40, 'รารารา', 99001, 4, 574235001, '2021-03-20 19:08:59'),
(21, 5588, '2021-03-26 19:08:00', '2021-03-26 19:20:00', 40, 'รารารา', 99001, 4, 574235001, '2021-03-20 19:10:15'),
(22, 5588, '2021-03-25 19:10:00', '2021-03-25 19:54:00', 44, 'ยวววววว', 99001, 6, 574235001, '2021-03-20 19:10:26'),
(23, 5588, '2021-03-26 19:15:00', '2021-03-26 19:16:00', 1, 'ำดดำดำดำด', 99001, 4, 574235001, '2021-03-20 19:15:52'),
(24, 5588, '2021-03-24 19:18:00', '2021-03-24 19:38:00', 20, 'พะพะพะพะ', 99001, 4, 574235001, '2021-03-20 19:18:12'),
(25, 5588, '2021-03-25 21:59:00', '2021-03-25 22:19:00', 20, 'Kiklkkkkkmmmmmmmmmmmmmmmmmmm', 99001, 4, 574235001, '2021-03-20 22:00:38'),
(26, 5588, '2021-03-25 22:38:00', '2021-03-25 23:03:00', 25, 'ฟฟฟฟฟฟฟฟฟฟฟ', 99001, 4, 574235001, '2021-03-20 22:39:56'),
(27, 5511, '2021-03-25 13:15:00', '2021-03-25 13:45:00', 30, 'O', 99001, 6, 574235007, '2021-03-22 13:15:47'),
(28, 5511, '2021-03-25 13:15:00', '2021-03-25 13:45:00', 30, 'P', 99001, 3, 574235007, '2021-03-22 13:16:09'),
(29, 5511, '2021-03-27 13:16:00', '2021-03-27 13:46:00', 30, 'I', 99001, 3, 574235007, '2021-03-22 13:16:38');

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
(1, 4, 5512, 'aaa', 'sss', 2, 1, 99001),
(2, 5, 5512, 'sxaaa', 'asaaqqq', 1, 1, 99001),
(44, 25, 5588, 'deddde', 'ededed', 2, 1, 99001),
(49, 22, 5588, 'ff', 'fff', 1, 1, 99001),
(54, 22, 5588, 'dvdvd', 'dvdv', 1, 1, 99001),
(55, 22, 5588, 'yyyy', 'hyhyh', 1, 1, 99001),
(57, 21, 5588, 'yuyuyu', 'yuyuyuy', 1, 1, 99001),
(60, 18, 5588, '', '33', 1, 1, 99001),
(77, 17, 5588, '', '', 1, 1, 99001),
(91, 13, 5588, '14242', '4242', 2, 2, 99001);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CountryCode` varchar(2) NOT NULL,
  `Budget` double NOT NULL,
  `Used` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Email`, `CountryCode`, `Budget`, `Used`) VALUES
('C001', 'Win Weerachai', 'win.weerachai@thaicreate.com', 'TH', 1000000, 600000),
('C002', 'John  Smith', 'john.smith@thaicreate.com', 'UK', 2000000, 800000),
('C003', 'Jame Born', 'jame.born@thaicreate.com', 'US', 3000000, 600000),
('C004', 'Chalee Angel', 'chalee.angel@thaicreate.com', 'US', 4000000, 100000),
('5942', 'ทดสอบ1', 'daniyan4129@gmail.com', '99', 100, 2),
('7421', 'ทดสอบ2', 'daniyan4129@gmail.com', '88', 42, 45),
('7422', 'ทดสอบ3', 'daniyan4129@gmail.com', '88', 42, 75),
('7423', 'ทดสอบ4', 'daniyan4129@gmail.com', '54', 45, 75),
('7424', 'ทดสอ5', 'daniyan4129@gmail.com', '24', 4, 75),
('7425', 'ทดสอบ6', 'daniyan4129@gmail.com', '42', 0, 75),
('0001', 'ss', 'efe', '41', 44, 4),
('0002', 'dsdsd', 'efef', '41', 11, 4),
('0003', 'sdsd', 'fe', '41', 11, 4),
('0004', 'sdsd', 'efe', '41', 11, 1),
('41', '1', '4jk', '41', 0, 0),
('85', '1', '5511', '58', 44, 0);

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
(3, 5512, 1, 'https://www.bing.com/search?q=google&cvid=893ca692cc6940e2ac95c4a38dcfb0f3&FORM=ANAB01&PC=U531', 1),
(4, 5512, 3, 'https://www.bing.com/search?q=google&cvid=893ca692cc6940e2ac95c4a38dcfb0f3&FORM=ANAB01&PC=U531', 1),
(7, 5533230, 1, 'https://www.bing.com/search?q=google&cvid=893ca692cc6940e2ac95c4a38dcfb0f3&FORM=ANAB01&PC=U531', 2),
(15, 5588, 1, 'https://www.bing.com/search?q=google&cvid=893ca692cc6940e2ac95c4a38dcfb0f3&FORM=ANAB01&PC=U531', 1),
(17, 5588, 1, 'https://www.bing.com/search?q=google&cvid=893ca692cc6940e2ac95c4a38dcfb0f3&FORM=ANAB01&PC=U531', 1);

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
(1, 'Jjjjhh', 'Gugugigig', 99004, '2021-03-22 06:29:02');

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
(4111, 'jkkjkjk', 3, 1),
(5511, 'ระบบนัดแพทย์โรงบาลศรีเมือง', 1, 1),
(5512, 'ระบบขายหวยออนไลน์', 1, 1),
(5588, 'ระบบไฟฟ้าพลังงานหมุนเวียน', 1, 1),
(414141, 'เเ', 1, 1),
(553323, 'cccc', 1, 3),
(5533230, '553323', 1, 1);

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
(36, 5533230, 99003, 2),
(37, 5533230, 99002, 2),
(41, 5588, 99002, 2);

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
(4, 5512, 594235001),
(5, 5512, 594235002),
(7, 5511, 574235007),
(17, 5588, 594235002),
(20, 5533230, 594235002),
(21, 5533230, 594235001),
(23, 5588, 574235001);

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
  `student_type` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_major`, `student_phone`, `student_email`, `student_password`, `student_photo`, `student_type`) VALUES
(3, '3', 1, '0000000000', '3@parichat.skru.ac.th', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235001, 'นายสมพร สุวรรณมณี', 1, '1000000100', '574235001@parichat.skru.ac.th', '1ee1c9b2ba5aa6960ec85aed77bae1d5', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235002, 'นายแดง ชัยศรี', 1, '0000000000', '574235002@parichat.skru.ac.th', 'cbcd536ec5742ce3c7e35bb7153438e2', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235003, 'นางสาวกิตติยา ทองมณี', 1, '0000000000', '574235003@parichat.skru.ac.th', '5b862d22b22489b132b362e406f401b6', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235004, 'นางสาววิภาวัลย์ ทองดี', 2, '0000000000', '574235004@parichat.skru.ac.th', '2b5d646dd5c3cead9b057948aee8f692', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235005, 'นายสมศักดิ์ นบดินบดี', 2, '0000000000', '574235005@parichat.skru.ac.th', 'a2f30c39b40205308756fd95a10cdd22', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235006, 'นายวราชิต บางลาง', 2, '0000000000', '574235006@parichat.skru.ac.th', 'd06dce656e2fd9dc1b0b0d1249795438', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235007, 'นายกิตติศักดิ์ กมลา', 2, '0000000000', '574235007@parichat.skru.ac.th', '430d3aa9b23700417ea9b78e2a62e5fa', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(574235008, 'นางสาวพรภิมล พฤษภา', 1, '0000000000', '574235008@parichat.skru.ac.th', '0e3a9a806f2100a14197841c813c535c', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235001, 'นางสาวกิตติกร ชัยเนศ', 2, '0000000000', '594235001@parichat.skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235002, 'นางสาวภาวิดา ไชยภัคดี', 1, '0000000000', '594235002@parichat.skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235003, 'นางสาวกิตติhhกร ชัยเนศhhhh', 2, '0000000000', '594235001@parichat.skru.ac.th', 'a042f04d4cf3a7db5ff70ae203d35c57', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235005, 'นายสไว', 1, '0000000000', '594235005@parichat.skru.ac.th', 'e435b2dc40ab776e5d6b9d27725081a7', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(594235008, 'นายดานิยาน พร้อมมูล', 1, '0000000000', '594235008@parichat.skru.ac.th', '1b141834cd8071a8ed9b1682a60b8a33', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1),
(2147483647, 'ทด', 1, '0000000000', '59423500800@parichat.skru.ac.th', 'e35dd14ed5e8947ae994139558178e0f', 'https://i.ibb.co/BVcPqGJ/profile-picture-2qq.jpg', 1);

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
(3, 'knTNnb', 5512),
(4, 'knTNnb', 5511),
(34, 'v0HXW5', 5511),
(36, 'v0HXW5', 5512),
(37, 'v0HXW5', 4111);

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
(46, 'knTNnb', 594235003),
(47, 'knTNnb', 574235001),
(48, 'knTNnb', 574235002),
(49, 'knTNnb', 574235003),
(50, 'knTNnb', 574235004),
(51, 'knTNnb', 574235005),
(52, 'knTNnb', 574235006),
(53, 'knTNnb', 574235007),
(54, 'knTNnb', 574235008),
(60, 'knTNnb', 594235005),
(61, 'knTNnb', 594235008),
(64, 'knTNnb', 3),
(65, 'v0HXW5', 594235008),
(66, 'v0HXW5', 594235001),
(67, 'v0HXW5', 594235002),
(68, 'v0HXW5', 594235003),
(75, 'v0HXW5', 2147483647),
(76, 'v0HXW5', 574235001);

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
  `subject_time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_project`
--

INSERT INTO `subject_project` (`subject_key`, `subject_id2`, `subject_classroom`, `subject_name`, `subject_semester`, `subject_year`, `subject_sec`, `subject_day`, `subject_teacher`, `subject_record`, `subject_time_start`, `subject_time_end`) VALUES
('knTNnb', '33232', 'fgfgfgfg', 'weewewew', '1', 2566, '05', 1, 99001, '2021-03-13 00:47:18', '01:48:00', '02:50:00'),
('v0HXW5', '22333', '22333', '22333', '223', 22333, '22333', 2, 99001, '2021-03-16 12:18:01', '13:22:00', '13:22:00');

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
(99001, 'นางสาวตรีเนตร วัชรภัคดี', 'teenaet_wa@skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(99002, 'นางสาวเพ็ญศรี มณีฉายแสง', 'pensri_ma@skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(99003, 'นายเด่นชัย ปราถนาดี', 'denchai_pa@skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 2),
(99004, 'นายสมศักดิ์  กวีนิพนธ์', 'denchai_pa@skru.ac.th', '698d51a19d8a121ce581499d7b701668', 'https://i.ibb.co/HFB65Yz/asa.png', 3);

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
-- Structure for view `23`
--
DROP TABLE IF EXISTS `23`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `23`  AS SELECT `appoint`.`appoint_id` AS `appoint_id`, `appoint`.`project_id` AS `project_id`, `appoint`.`appoint_date_start` AS `appoint_date_start`, `appoint`.`appoint_date_end` AS `appoint_date_end`, `appoint`.`apooint_minute` AS `apooint_minute`, `appoint`.`appoint_comment` AS `appoint_comment`, `appoint`.`teacher_id` AS `teacher_id`, `appoint`.`appoint_status` AS `appoint_status`, `appoint`.`recorder` AS `recorder`, `appoint`.`appoint_recorder` AS `appoint_recorder` FROM `appoint` ;

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

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
  MODIFY `appoint_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `com05`
--
ALTER TABLE `com05`
  MODIFY `com05_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `filee`
--
ALTER TABLE `filee`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pr`
--
ALTER TABLE `pr`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_has_adviser`
--
ALTER TABLE `project_has_adviser`
  MODIFY `pha_key` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `project_has_student`
--
ALTER TABLE `project_has_student`
  MODIFY `phs_key` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subject_hash_project`
--
ALTER TABLE `subject_hash_project`
  MODIFY `sp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `subject_hash_student`
--
ALTER TABLE `subject_hash_student`
  MODIFY `ss_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

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
