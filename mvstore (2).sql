-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 04:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` int(4) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `acount` int(2) NOT NULL,
  `agender` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='actor information';

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `acount`, `agender`) VALUES
(201, ' พิมพ์ชนก', 'ลือวิเศษไพบูลย์', 3, 'f'),
(202, ' ดาวิกา', 'โฮร์เน่', 1, 'f'),
(203, 'ณัฐวุฒิ', 'สุวรรณรัตน์', 2, 'm'),
(204, 'ณเดชน์ ', 'คูกิมิยะ', 2, 'm'),
(205, 'ณภัทร', 'เสียงสมบุญ', 1, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `actorproduct`
--

CREATE TABLE `actorproduct` (
  `aid` varchar(3) NOT NULL,
  `pdid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='actorpd information';

--
-- Dumping data for table `actorproduct`
--

INSERT INTO `actorproduct` (`aid`, `pdid`) VALUES
('201', '102'),
('201', '103'),
('201', '104'),
('202', '105'),
('203', '102'),
('203', '105'),
('204', '101'),
('204', '104'),
('205', '103');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mbID` int(3) NOT NULL,
  `mbname` varchar(20) NOT NULL,
  `mblastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='mvstore infomations';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mbID`, `mbname`, `mblastname`, `address`, `telephone`) VALUES
(1, 'ชนาธิป', 'ชัยภักดี', '601/271', '0657465229'),
(2, 'อารูมีไร๊ ', 'อะไรไม่รู้', 'โลก', '1234'),
(5, 'Kojo', 'Jotaro', 'JoJo', '1234'),
(6, 'Dio', 'Brando', 'ZA warudo', '1234'),
(7, 'ainz ', 'gown', 'nazarick', 'unknow'),
(20, 'jj', 'วาด', 'dd', '954'),
(30, 'นน', 'วาว', '23/17', '1023'),
(31, 'll', 'ghjk', '92662', '0111');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pdid` int(3) NOT NULL,
  `pdname` varchar(20) NOT NULL,
  `pddetails` varchar(30) NOT NULL,
  `pdperiod` int(5) NOT NULL,
  `pddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pdid`, `pdname`, `pddetails`, `pdperiod`, `pddate`) VALUES
(101, 'ธี่หยด', 'น่ากลัว', 121, '2023-10-26'),
(102, 'สิ่งเล็กๆที่เรียกว่า', 'หนังในวัยเด็ก', 118, '2010-08-12'),
(103, ' Friend Zone ระวัง..', 'สนุก...โรเเมนติก', 119, '2019-02-14'),
(104, 'อ้าย..คนหล่อลวง', 'เนื้อหาน่าติดตาม', 128, '2020-12-03'),
(105, 'พี่มาก..พระโขนง ', 'สนุก..ตลก', 90, '2013-03-28'),
(110, 'สุขสันต์วันโสด', 'ตลกที่มาพร้อมความหลอน', 126, '2024-09-25'),
(111, 'นเรศวร', 'สนุกที่มาพร้อมความมัน', 180, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `mbID` int(11) NOT NULL,
  `pdid` int(11) NOT NULL,
  `pcounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`mbID`, `pdid`, `pcounter`) VALUES
(1, 105, 2),
(1, 101, 2),
(2, 102, 1),
(5, 104, 1),
(6, 103, 2),
(6, 104, 2),
(7, 102, 2),
(7, 101, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `actorproduct`
--
ALTER TABLE `actorproduct`
  ADD KEY `aid` (`aid`),
  ADD KEY `pdid` (`pdid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mbID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pdid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD KEY `mbID` (`mbID`),
  ADD KEY `pdid` (`pdid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
