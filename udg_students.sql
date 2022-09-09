-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 10:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udg_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_udg` int(100) NOT NULL COMMENT 'ID',
  `Stu_id` mediumtext NOT NULL COMMENT 'รหัสนักศึกษา',
  `Name_Surname` varchar(255) NOT NULL COMMENT 'ชื่อ/นามสกุล',
  `Gender` varchar(255) NOT NULL COMMENT 'เพศ',
  `Birthday` date NOT NULL COMMENT 'วัน/เดือน/ปีเกิด',
  `Department` varchar(255) NOT NULL COMMENT 'สาขา',
  `Faculty` varchar(255) NOT NULL COMMENT 'คณะ',
  `Class` int(255) NOT NULL COMMENT 'ระดับชั้นปี',
  `time` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_udg`, `Stu_id`, `Name_Surname`, `Gender`, `Birthday`, `Department`, `Faculty`, `Class`, `time`) VALUES
(1, '163321221001', 'บุญฤทธิ์ สิงห์โต', 'ผู้ชาย', '1999-08-28', 'ระบบสารสนเทศ', 'บริหารธุรกิจและเทคโนโลยีสารสนเทศ', 4, '2022-04-22'),
(2, '123456789', 'อาทิตย์ ดิเรกศรี', 'ผู้ชาย', '2000-01-01', 'ระบบสารสนเทศ', 'บริหารธุรกิจและเทคโนโลยีสารสนเทศ', 4, '2022-04-22'),
(3, '132452', 'สุภัสสรา สวยงาม', 'ผู้หญิง', '1999-01-01', 'การจัดการ', 'บริหารธุรกิจและเทคโนโลยีสารสนเทศ', 4, '2022-04-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_udg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_udg` int(100) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
