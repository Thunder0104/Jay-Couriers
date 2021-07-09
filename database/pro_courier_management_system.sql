-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 06:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_courier_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier`
--

CREATE TABLE `tbl_courier` (
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `weight` double NOT NULL,
  `invice_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `freight` double NOT NULL,
  `mode` varchar(20) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier`
--

INSERT INTO `tbl_courier` (`cid`, `cons_no`, `ship_name`, `phone`, `s_add`, `rev_name`, `r_phone`, `r_add`, `type`, `weight`, `invice_no`, `qty`, `book_mode`, `freight`, `mode`, `pick_date`, `pick_time`, `status`, `comments`, `book_date`) VALUES
(1, 'M22P7KHM', 'Tousif Khan', '020 253623', 's sd sdsd', 'Rizwan Ahmed', '020 88552', 'sd sd s', 'Parcel', 20, '252525', 12, 'TBB', 240, 'Road', '29/01/2020', '12', 'Completed', 'ds ds d', '2020-01-29'),
(2, 'QIWWGIQP', 'Asif khan', '020 253623', 'shani peth', 'munna bhai', '020 88552', 'asdas das d', 'Documents', 20, '252525', 12, 'TBB', 240, 'Train', '02/02/2020', '4', 'Delivered', '', '2030-01-29'),
(3, 'Q906F73L', 'Amol sarode', '9532653652', 'metha nagar, bhusawal', 'sunil pal', '8585425412', 'balliram peth', 'Documents', 12, '239098', 12, 'ToPay', 200, 'Air', '26/06/2020', '4', 'Landed', 'Thanks', '2020-06-24'),
(4, '2THBV8UM', 'Farzana Sk', '9532652365', 'xzyz', 'Asif Khan', '9852451254', 'ABC', 'Parcel', 2, '23788', 4, 'Paid', 90, 'Road', '02/08/2020', '12', 'Delivered', 'Plz transit', '2020-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_officers`
--

CREATE TABLE `tbl_courier_officers` (
  `cid` int(10) NOT NULL,
  `officer_name` varchar(40) NOT NULL,
  `off_pwd` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(12) NOT NULL,
  `office` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_officers`
--

INSERT INTO `tbl_courier_officers` (`cid`, `officer_name`, `off_pwd`, `address`, `email`, `ph_no`, `office`, `reg_date`) VALUES
(1, 'raj', 'raj', 'kukatpally, hyderabad', 'raj@gmail.com', '9890989989', 'Fast Courier - Hyderabad', '2020-01-30 09:25:21'),
(2, 'dhoni', 'dhoni', 'Syamali Colony,Doranda', 'msd@gmail.com', '9032056719', 'Fast Courier - Ranchi', '2019-11-30 09:40:42'),
(3, 'sunil', 'sunil', 'triplicane,chepauk', 'sunil@gmail.com', '9290405123', 'Fast Courier - Chennai', '2019-08-30 17:50:34'),
(4, 'Sam', 'sam', '13-14,opp reliance trends', 'sam@gmail.com', '9032056719', 'Fast Courier - Amaravathi', '2020-08-25 13:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courier_track`
--

CREATE TABLE `tbl_courier_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courier_track`
--

INSERT INTO `tbl_courier_track` (`id`, `cid`, `cons_no`, `current_city`, `status`, `comments`, `bk_time`) VALUES
(1, 1, 'M22P7KHM', 'Fast Courier - Hyderabad', 'Delayed', 'Delay due to rain', '2020-01-31 10:23:04'),
(3, 1, 'M22P7KHM', 'Fast Courier - Hyderabad', 'Delayed', 'Delayed due to rain', '2020-04-08 10:26:43'),
(4, 4, '2THBV8UM', 'Fast Courier - Ranchi', 'Delayed', 'Due to rain', '2020-06-04 17:44:52'),
(5, 1, 'M22P7KHM', 'Fast Courier - Hyderabad', 'Completed', 'Completed', '2020-02-02 17:49:11'),
(6, 3, 'Q906F73L', 'Fast Courier - Hyderabad', 'Landed', '', '2020-10-20 17:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE `tbl_offices` (
  `id` int(10) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`id`, `off_name`, `address`, `city`, `ph_no`, `office_time`, `contact_person`) VALUES
(1, 'Fast Courier - Hyderabad', 'near kalamandir,kukatpally', 'Hyderabad', '9129183201', '10.00 am - 9.00 pm', 'Shammi Kapur'),
(2, 'Fast Courier - Ranchi', 'Doranda', 'Ranchi', '0245-858521', '10.00 am - 9.00 pm', 'Amol Patil'),
(3, 'Fast Courier - Chennai', '15, Kennet Ln, Egmore', 'Chennai', '020-25125', '10.00 am - 9.00 pm', 'Atul Nigade'),
(4, 'Fast Courier - Amaravathi', '12-13,Swathi road', 'Vijayawada', '9032056719', '10.00 am - 9.00 pm', 'Sam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courier`
--
ALTER TABLE `tbl_courier`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_courier_officers`
--
ALTER TABLE `tbl_courier_officers`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_courier_track`
--
ALTER TABLE `tbl_courier_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
