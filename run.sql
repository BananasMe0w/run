-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2023 at 06:05 AM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `run`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL,
  `distance` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `groupname` text NOT NULL,
  `gender` text NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(128) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `size` text NOT NULL,
  `receive` text NOT NULL,
  `h_num` text NOT NULL,
  `district` text NOT NULL,
  `subdistrict` text NOT NULL,
  `province` text NOT NULL,
  `postcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `distance`, `firstname`, `lastname`, `groupname`, `gender`, `birth`, `email`, `tel`, `size`, `receive`, `h_num`, `district`, `subdistrict`, `province`, `postcode`) VALUES
(1, '5 km', 'test', 'surtest', '', 'ชาย', '2005-08-01', 'test@gmail.com', '0000000000', 'XS', 'รับด้วยตนเอง', 'xxxx', 'xxxx', 'xxxx', 'xxxxxx', 75120),
(2, '10 km', 'test1', 'surtest', '', 'หญิง', '1980-01-01', 'test2@gmail.com', '1111111111', '4XL', 'ส่งไปรษณีย์', 'xxxx', 'xxxx', 'xxxx', 'xxxx', 75000),
(3, '10 km', 'wasd', 'wasdwasd', '', 'ชาย', '2020-01-17', 'wasd@gmail.com', '2222222222', 'XL', 'รับด้วยตนเอง', 'xxxx', 'xxxx', 'xxxx', 'xxxx', 696969),
(4, 'wasd', 'wasd', '', 'wasd', 'wasd', '2023-01-20', 'wasd', 'wasd', 'wasd', 'wasd', 'wasd', 'wasd', 'wasd', 'wasd', 0),
(5, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '2023-01-20', 'wasd', 'awd', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(6, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '2023-01-20', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(7, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '2023-01-20', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(8, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '2023-01-20', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(9, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '0000-00-00', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(10, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '0000-00-00', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(11, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '0000-00-00', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(12, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '0000-00-00', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0),
(13, 'awdw', 'wasd', 'wasd', 'wasd', 'wasd', '0000-00-00', '', '', 'wasd', 'wasd', 'awds', 'wasd', 'asd', 'awd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info_vip`
--

CREATE TABLE `info_vip` (
  `id_info` int(11) NOT NULL,
  `distance` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `size` text NOT NULL,
  `receive` text NOT NULL,
  `h_num` text NOT NULL,
  `district` text NOT NULL,
  `subdistrict` text NOT NULL,
  `province` text NOT NULL,
  `postcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info_vip`
--

INSERT INTO `info_vip` (`id_info`, `distance`, `firstname`, `lastname`, `gender`, `email`, `tel`, `size`, `receive`, `h_num`, `district`, `subdistrict`, `province`, `postcode`) VALUES
(15, '5 km', 'wasd', 'wasd', 'ชาย', 'wasd@gmail.com', '0000000000', 'L', 'รับด้วยตนเอง', 'xxx', 'xxxx', 'xxx', 'xx', 75000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `info_vip`
--
ALTER TABLE `info_vip`
  ADD PRIMARY KEY (`id_info`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `info_vip`
--
ALTER TABLE `info_vip`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
