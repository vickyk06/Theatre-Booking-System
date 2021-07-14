-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novox`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ausername` varchar(30) NOT NULL,
  `apassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ausername`, `apassword`) VALUES
('tester1', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` varchar(30) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `age` int(3) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `age`, `phoneno`, `email`) VALUES
('murugavel', 'kgm', 54, 999999, 'jjjk@hj'),
('test1', 'jjkbfs', 9, 909900, 'ghgjj'),
('viki1', 'viki kumar', 20, 2147483647, 'mvigneshkumar2000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `plays`
--

CREATE TABLE `plays` (
  `pid` varchar(6) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `duration` varchar(20) NOT NULL,
  `dir` varchar(50) DEFAULT NULL,
  `actor` varchar(50) DEFAULT NULL,
  `actress` varchar(50) DEFAULT NULL,
  `image` varchar(2000) NOT NULL,
  `tsold` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plays`
--

INSERT INTO `plays` (`pid`, `pname`, `description`, `genre`, `language`, `duration`, `dir`, `actor`, `actress`, `image`, `tsold`, `rating`) VALUES
('E01', 'LION KING', 'lion movie', 'FANTASY', 'ENGLISH', '120:35', 'TIM HOPPER', 'MARK ADAM', 'LILY TURNER', 'tlk.png', NULL, 8),
('E02', 'CURSED CHILD', 'hp', 'FANTASY', 'ENGLISH', '135:15', 'JACK THORNE', 'JAMIE PARKER', 'POPPY MILLER', 'cc.jpg', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `pid` varchar(6) NOT NULL,
  `cid` varchar(40) NOT NULL,
  `rating` int(10) UNSIGNED DEFAULT NULL,
  `feedback` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`pid`, `cid`, `rating`, `feedback`) VALUES
('E01', 'test1', 9, 'cool'),
('E01', 'viki1', 6, 'okishh'),
('E02', 'murugavel', 9, 'good'),
('E02', 'viki1', 2, 'bad');

--
-- Triggers `review`
--
DELIMITER $$
CREATE TRIGGER `computeAvg` AFTER INSERT ON `review` FOR EACH ROW UPDATE plays
    SET rating = (SELECT AVG(rating) FROM review
                         WHERE review.pid = plays.pid)
    WHERE pid = NEW.pid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` varchar(40) NOT NULL,
  `staffname` varchar(40) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `pid` varchar(40) NOT NULL,
  `hallno` int(2) NOT NULL,
  `stime` time NOT NULL,
  `htype` varchar(40) NOT NULL,
  `capacity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`pid`, `hallno`, `stime`, `htype`, `capacity`) VALUES
('E01', 1, '15:45:00', 'gold', 10),
('E01', 1, '17:30:00', 'premium', 25),
('E01', 1, '22:45:00', 'premium', 25),
('E02', 2, '21:00:00', '7star', 15),
('E02', 3, '12:45:00', 'max', 30);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(11) NOT NULL,
  `cid` varchar(40) NOT NULL,
  `pid` varchar(6) NOT NULL,
  `tprice` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `stime` time NOT NULL,
  `hallno` int(3) NOT NULL,
  `mop` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `cid`, `pid`, `tprice`, `date`, `stime`, `hallno`, `mop`) VALUES
(15, 'test1', 'E01', '300', '2020-08-13', '17:30:00', 1, 'cash'),
(16, 'test1', 'E02', '1000', '2020-08-12', '21:00:00', 2, 'cash'),
(17, 'test1', 'E01', '1500', '2020-08-06', '17:30:00', 1, 'card'),
(18, 'test1', 'E02', '300', '2020-08-05', '21:00:00', 2, 'net banking'),
(19, 'viki1', 'E01', '300', '2020-08-18', '17:30:00', 1, 'cash'),
(20, 'viki1', 'E02', '1000', '2020-08-19', '21:00:00', 2, 'card'),
(21, 'viki1', 'E01', '200', '2020-09-01', '17:30:00', 1, 'cash'),
(23, 'viki1', 'E02', '300', '2020-08-20', '12:45:00', 3, 'cash'),
(24, 'test1', 'E02', '300', '2020-08-27', '12:45:00', 3, 'cash'),
(28, 'murugavel', 'E02', '500', '2020-08-20', '21:00:00', 2, 'card'),
(29, 'viki1', 'E02', '1500', '2020-08-26', '21:00:00', 2, 'cash'),
(30, 'viki1', 'E02', '300', '2020-09-09', '15:45:00', 1, 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`) VALUES
('murugavel', '123'),
('test1', 'test'),
('vicky1', 'vicky'),
('viki1', 'viki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ausername`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `plays`
--
ALTER TABLE `plays`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`pid`,`cid`),
  ADD KEY `fk_customerf` (`cid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`hallno`,`stime`),
  ADD KEY `fk_plays` (`pid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `fk_playssss` (`pid`),
  ADD KEY `fk_th` (`hallno`,`stime`),
  ADD KEY `fk_cis` (`cid`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`cid`) REFERENCES `userlogin` (`username`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_customerf` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `plays` (`pid`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_staff` FOREIGN KEY (`staffid`) REFERENCES `adminlogin` (`ausername`);

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `fk_plays` FOREIGN KEY (`pid`) REFERENCES `plays` (`pid`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_cis` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `fk_playssss` FOREIGN KEY (`pid`) REFERENCES `plays` (`pid`),
  ADD CONSTRAINT `fk_th` FOREIGN KEY (`hallno`,`stime`) REFERENCES `theatre` (`hallno`, `stime`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
