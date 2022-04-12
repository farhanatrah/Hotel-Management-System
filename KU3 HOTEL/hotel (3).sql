-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 04:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `room_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_price` decimal(9,2) NOT NULL,
  `room_night` int(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room_total` decimal(9,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`room_id`, `cust_id`, `room_name`, `room_price`, `room_night`, `checkin`, `checkout`, `room_total`) VALUES
(37, 9, 'Superior King', '140.00', 6, '2021-01-31', '2021-01-17', '840.00'),
(38, 9, 'Superior King', '140.00', 6, '2021-01-31', '2021-01-17', '840.00'),
(39, 12, 'Superior King', '140.00', 4, '2021-01-24', '2021-01-27', '560.00'),
(40, 12, 'Superior King', '140.00', 5, '2021-01-25', '2021-01-30', '700.00'),
(41, 12, 'Superior King', '140.00', 5, '2021-01-25', '2021-01-30', '700.00'),
(42, 12, 'Superior King', '140.00', 2, '2021-01-17', '2021-01-19', '280.00'),
(56, 12, 'Superior King', '140.00', 2, '2021-01-16', '2021-01-18', '280.00'),
(57, 12, 'Superior King', '140.00', 17, '2021-01-17', '2021-01-31', '2380.00'),
(58, 12, 'Superior King', '140.00', 17, '2021-01-17', '2021-01-31', '2380.00'),
(59, 12, 'Superior King', '140.00', 17, '2021-01-17', '2021-01-31', '2380.00'),
(60, 12, 'Superior King', '140.00', 17, '2021-01-17', '2021-01-31', '2380.00'),
(61, 13, 'Superior King', '140.00', 10, '2021-01-17', '2021-01-27', '1400.00'),
(62, 13, 'Superior King', '140.00', 10, '2021-01-17', '2021-01-27', '1400.00'),
(63, 13, 'Superior King', '140.00', 10, '2021-01-17', '2021-01-27', '1400.00'),
(64, 14, 'Superior King', '140.00', 3, '2021-01-17', '2021-01-19', '420.00'),
(65, 14, 'Superior King', '140.00', 3, '2021-01-17', '2021-01-19', '420.00'),
(66, 14, 'Superior King', '140.00', 3, '2021-01-17', '2021-01-19', '420.00'),
(67, 14, 'Superior King', '140.00', 3, '2021-01-17', '2021-01-19', '420.00'),
(68, 14, 'Superior King', '140.00', 3, '2021-01-17', '2021-01-19', '420.00'),
(69, 14, 'Superior King', '140.00', 3, '2021-01-17', '2021-01-19', '420.00'),
(70, 14, 'Superior King', '140.00', 3, '2021-01-17', '2021-01-19', '420.00'),
(71, 14, 'Superior King', '140.00', 7, '2021-01-16', '2021-01-23', '980.00'),
(72, 14, 'Superior King', '140.00', 7, '2021-01-16', '2021-01-23', '980.00'),
(76, 15, 'Superior King', '140.00', 5, '2021-01-16', '2021-01-20', '700.00'),
(77, 15, 'Superior King', '140.00', 5, '2021-01-16', '2021-01-20', '700.00'),
(78, 15, 'Superior King', '140.00', 5, '2021-01-16', '2021-01-20', '700.00'),
(79, 16, 'Superior King', '140.00', 4, '2021-01-16', '2021-01-20', '560.00'),
(80, 9, 'Superior Twin', '140.00', 2, '2021-01-17', '2021-01-24', '280.00'),
(81, 9, 'Deluxe Twin', '240.00', 5, '2021-01-18', '2021-01-23', '1200.00'),
(82, 9, 'Superior King', '140.00', 2, '2021-01-17', '2021-01-19', '280.00'),
(83, 9, 'Deluxe king', '160.00', 2, '2021-01-17', '2021-01-19', '320.00'),
(84, 9, 'Deluxe king', '160.00', 2, '2021-01-17', '2021-01-19', '320.00'),
(85, 9, 'Deluxe king', '160.00', 2, '2021-01-17', '2021-01-19', '320.00'),
(86, 9, 'Deluxe king', '160.00', 2, '2021-01-17', '2021-01-19', '320.00'),
(87, 9, 'Deluxe king', '160.00', 2, '2021-01-17', '2021-01-19', '320.00'),
(88, 9, 'Deluxe king', '160.00', 2, '2021-01-17', '2021-01-19', '320.00'),
(89, 9, ' Studio Suite King', '200.00', 2, '2021-01-28', '2021-01-30', '400.00'),
(90, 9, 'Superior Twin', '140.00', 1, '0000-00-00', '0000-00-00', '140.00'),
(91, 17, 'Deluxe king', '160.00', 4, '2021-01-18', '2021-01-22', '640.00'),
(92, 18, 'Deluxe Twin', '240.00', 5, '2021-01-19', '2021-01-23', '1200.00'),
(93, 9, 'Superior King', '140.00', 1, '2021-01-19', '2021-01-19', '140.00'),
(94, 9, ' Studio Suite King', '200.00', 1, '2021-01-21', '2021-01-22', '200.00'),
(95, 9, ' Studio Suite King', '200.00', 1, '2021-01-21', '2021-01-22', '200.00'),
(96, 9, ' Studio Suite King', '200.00', 1, '2021-01-21', '2021-01-22', '200.00'),
(97, 9, 'Superior King', '140.00', 3, '2021-01-21', '2021-01-24', '420.00'),
(98, 9, 'Superior King', '140.00', 5, '2021-01-21', '2021-01-25', '700.00'),
(99, 9, 'Superior King', '140.00', 5, '2021-01-21', '2021-01-25', '700.00'),
(100, 9, 'Superior King', '140.00', 5, '2021-01-21', '2021-01-25', '700.00'),
(101, 9, 'Superior King', '140.00', 2, '2021-01-21', '2021-01-23', '280.00'),
(102, 9, 'Superior Twin', '140.00', 1, '0000-00-00', '0000-00-00', '140.00'),
(103, 20, 'Deluxe king', '160.00', 3, '2021-01-21', '2021-01-24', '480.00'),
(104, 21, 'Superior King', '140.00', 365, '2021-01-21', '2022-01-21', '51100.00'),
(105, 22, 'Superior Twin', '140.00', 2, '2021-01-24', '2021-01-26', '280.00'),
(106, 22, 'Superior Twin', '140.00', 2, '2021-01-24', '2021-01-26', '280.00'),
(107, 23, 'Superior Twin', '140.00', 2, '2021-01-24', '2021-01-26', '280.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `noPhone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `username`, `name`, `noPhone`, `address`, `email`, `password`) VALUES
(1, '', 'Nurin Irdina Binti Azfar', '0111670543', 'Block C2-0-3A Condominium Cyberia Smart Home, Cyberjaya, 63000 Selangor.', 'nurinn@gmail.com', ''),
(2, '', 'Suhada Binti Sudin', '0136543208', 'No.14, Jalan 4/5E, Bandar Baru Bangi,\r\n43650 Bangi, Selangor', 'suhada@gmail.com', ''),
(3, '', 'Muhammad ariq Bin Rizal', '0123453244', 'LOT 148, Jalan Haji Supi,KG Salak Tinggi 43900 Sepang,Selangor', 'ariq@gmail.com', ''),
(4, '', 'Puteri Mariana Binti Putra Amir', '0111132456', '765 Jalan Kota Kenari 4/5 Kota Kenari , 09000 Kulim , Kedah\r\n\r\n', 'mary@gmail.com', ''),
(5, '', 'Aminah Binti Salleh', '0195643876', 'No 6, Jalan 8, Taman Desa Sentosa,\r\n43100 Hulu Langat, Selangor', 'aminah@gmail.com', ''),
(6, 'test', 'rrrrr', '23444', 'UiTM CAWANGAN PERLIS, KAMPUS ARAU', 'eeee@gmail.com', '1234'),
(7, 'cuba', 'qqq', '2334', 'UiTM CAWANGAN PERLIS, KAMPUS ARAU', 'ffffff@gmail.com', '3434'),
(8, 'www', 'siti', '23444', 'no 3434', 'fff@gmail.com', '1256'),
(9, 'zam', 'zamzuri', '12333', 'UiTM CAWANGAN PERLIS, KAMPUS ARAU', 'hhh@gmail.com', '123'),
(10, 'aaa', 'ssss', '23444', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '123'),
(11, 'aaa', 'qqq', '123445', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '123'),
(12, 'hidayah', 'ssss', '+11420659', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '345'),
(13, 'dowie', 'dddd', '+11420659', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '123'),
(14, 'hannah', 'fffff', '+11420659', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '123'),
(15, 'su', 'wwww', '+11420659', 'UiTM CAWANGAN PERLIS, KAMPUS ARAU', 'hidayah5999@gmail.com', '123'),
(16, 'didi', 'SITI NURHIDAYAH BINTI ZAMZURI', '+11420659', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '123'),
(18, 'aaaa', 'alya', '098765443', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '1234'),
(19, 'aaa', 'ssss', '9776544', 'NO.44 JALAN 7/6A SEKSYEN 7', 'hidayah5999@gmail.com', '123'),
(20, 'fana', 'nur farhana', '01987655', 'UiTM CAWANGAN PERLIS, KAMPUS ARAU', 'ddd@gmail.com', '123'),
(21, 'atiq', 'dfrhtg', 'dsgtrhbfdc', 'saethyther', 'wrtyrf@gmail.com', 'atiq'),
(22, 'nur ', 'Nur Intan Binti Zahid', '0128765864', 'NO.44 JALAN 7/6A SEKSYEN 7', 'intan@gmail.com', '123'),
(23, 'nurin', 'nurin natasya', '0199877666', 'NO.44 JALAN 7/6A SEKSYEN 7', 'nurrrin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empID` int(10) NOT NULL,
  `empUsername` varchar(255) NOT NULL,
  `empName` varchar(100) NOT NULL,
  `empIC` char(12) NOT NULL,
  `empDOB` date NOT NULL,
  `empAdd` varchar(100) NOT NULL,
  `empPhoneno` varchar(12) NOT NULL,
  `empEmail` varchar(255) NOT NULL,
  `empPassword` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `empUsername`, `empName`, `empIC`, `empDOB`, `empAdd`, `empPhoneno`, `empEmail`, `empPassword`) VALUES
(1, 'ally', 'Nur Alisa', '99787654434', '1999-09-16', 'NO.44 JALAN 7/6A SEKSYEN 7', '0182561422', 'ally@gmail.com', '123'),
(2, '', 'Muhammad Aidil Bin Fadhil', '960902117653', '1996-09-02', '21-1-7 Intan Apartment, Jalan Setiawangsa 21 54200 Kuala Lumpur\r\nWilayah Persekutuan', '0127643796', '', ''),
(3, '', 'Muhammad Afif Irfan Bin Abd Aziz', '990905106533', '1999-09-05', 'NO 87, Jalan LP 4/1,Taman Lestari Perdana,Bandar Putra Permai,43300 Seri Kembangan,Selangor', '0123587598', '', ''),
(4, '', 'Madina Qaisara Binti Hafiz', '981203147654', '1998-12-03', '18B, Jalan 15/4D,47500 Subang Jaya , Selangor', '0196548236', '', ''),
(5, '', 'Hannah Damia Binti Haikal', '990707107666', '1999-07-07', 'No. 21, Jalan Au 2A/19 Taman Sri Keramat 54200 Kuala Lumpur', '0175326789', '', ''),
(6, 'atiq', 'SITI NURHIDAYAH BINTI ZAMZURI', '675544', '2021-01-16', 'NO.44 JALAN 7/6A SEKSYEN 7', '+11420659', 'hidayah5999@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_num` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `room_total` decimal(9,2) NOT NULL,
  `inv_date` date NOT NULL,
  `inv_status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`inv_num`, `cust_id`, `room_total`, `inv_date`, `inv_status`) VALUES
(17, 9, '320.00', '2021-01-17', 'COMPLETE'),
(18, 9, '320.00', '2021-01-17', 'COMPLETE'),
(19, 9, '400.00', '2021-01-17', 'COMPLETE'),
(20, 9, '140.00', '2021-01-17', 'COMPLETE'),
(21, 17, '640.00', '2021-01-17', 'COMPLETE'),
(22, 18, '1200.00', '2021-01-17', 'COMPLETE'),
(23, 9, '140.00', '2021-01-19', 'PENDING'),
(24, 9, '200.00', '2021-01-21', 'PENDING'),
(25, 9, '200.00', '2021-01-21', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(10) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_desc` varchar(255) NOT NULL,
  `room_price` decimal(9,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_desc`, `room_price`) VALUES
(1, 'Superior King', 'This double room is spacious at 46 m2 with a King-sized bed. The rooms enjoy river view and has a se', '140.00'),
(2, 'Superior Twin', 'This room is spacious at 46 m2 with two twin beds. The rooms enjoy river view and has a seating area and flat-screen TV.', '140.00'),
(3, 'Deluxe king', 'A modern, comfortable room with a king size bed and well-equipped to provide you with a comfortable stay', '160.00'),
(4, 'Deluxe Twin', 'Welcome to the elegant 36 square metre Deluxe Twin. This spacious suite offers luxurious facilities to accommodate the discerning traveller', '240.00'),
(5, ' Studio Suite King', 'This luxurious suite is very spacious at 91 m2 consist of two separate bedrooms with King and Queen beds. The suite enjoys ana seating area and flat-screen TV', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inv_num`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inv_num` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
