-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 09:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skjacth_certificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_certificate_project`
--

CREATE TABLE `tb_certificate_project` (
  `proj_ID` int(11) NOT NULL COMMENT 'รหัสตาราง',
  `proj_NameProject` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อโครงการ',
  `proj_Topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หัวข้อโครงการ',
  `proj_Abbreviution` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อักษรย่อ',
  `proj_NumberStart` int(5) NOT NULL COMMENT 'หมายเลขเริ่มต้น',
  `proj_Years` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ปีการศึกษา',
  `proj_OnOffNumber` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เปิดปิดหมายเลข',
  `proj_Img` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปภาพ',
  `proj_CreateDate` datetime NOT NULL COMMENT 'วันที่สร้างโครงการ',
  `proj_NameTest` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ขื่อใช้ ทดสอบ',
  `proj_AxisX` int(5) NOT NULL COMMENT 'แกน X',
  `proj_AxisY` int(5) NOT NULL COMMENT 'แกน Y',
  `proj_FontSize` int(3) NOT NULL COMMENT 'ขนาดตัวอักษร',
  `proj_FontColor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'สีตัวหนังสือ',
  `proj_NumberAxisX` int(5) NOT NULL COMMENT 'ตำแหน่งหมายเลขแกน X',
  `proj_NumberAxisY` int(5) NOT NULL COMMENT 'ตำแหน่งหมายเลขแกน Y',
  `proj_User` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_certificate_project`
--

INSERT INTO `tb_certificate_project` (`proj_ID`, `proj_NameProject`, `proj_Topic`, `proj_Abbreviution`, `proj_NumberStart`, `proj_Years`, `proj_OnOffNumber`, `proj_Img`, `proj_CreateDate`, `proj_NameTest`, `proj_AxisX`, `proj_AxisY`, `proj_FontSize`, `proj_FontColor`, `proj_NumberAxisX`, `proj_NumberAxisY`, `proj_User`) VALUES
(1, 'อบรมสื่อออนไลน์', 'อบรมสื่อออนไลน์', 'ํYVY', 1, '2563', '', '20210315151410.pdf', '0000-00-00 00:00:00', '', 0, 0, 0, '', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_certificate_project`
--
ALTER TABLE `tb_certificate_project`
  ADD PRIMARY KEY (`proj_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_certificate_project`
--
ALTER TABLE `tb_certificate_project`
  MODIFY `proj_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตาราง', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
