-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 11:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Ritesh', 'Kumar', 'Admin2', '222', 'ritesh@gmail.com', '466487'),
(2, 'Pragati', 'Priya', 'Admin1', '111', 'pragati@gmail.com', '6578637'),
(3, ' Nishtha', 'Rani', 'Admin3', '333', 'nishtha@gmail.com', '5467646');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(100) NOT NULL,
  `depart_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `issn_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `depart_id`, `name`, `authors`, `edition`, `status`, `quantity`, `issn_no`) VALUES
(1, 2, 'Principal of electronics', 'V.K. Mehta, Rohit Mehta', '3rd', 'Available', 2, 33823),
(2, 1, 'C', 'Pradeep Bhatiya', '2nd', 'Avilable', 4, 43322112),
(3, 2, 'Fundamental of electronics', 'Deepak kumar', '1st', 'Avilable', 33, 12),
(4, 3, 'Chemistry', 'Anuj bansal', '3rd', 'Avilable', 23, 0),
(5, 4, 'Mechanics', 'Pradeep Bhatiya', '1st', 'Avilable', 44, 23234);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(1, 'dcscde1712362', 'hello!'),
(2, 'dcscde1712111', 'There is no books of ETE department.When will it be available?'),
(3, 'dcscde1712222', 'Hi! which book do you need. Please let us know.'),
(5, '', 'hello! '),
(6, 'dcscde172867', 'Hi! which book do you need. Please let us know.');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depart_id` int(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depart_id`, `department`) VALUES
(1, 'CSE'),
(2, 'ECE'),
(3, 'CHEMICAL'),
(4, 'MECH.');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `issn_no` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `issn_no`, `returned`, `day`, `fine`, `status`) VALUES
('Pragati', 12345678, '2019-05-21', 31, 3.1, 'not paid'),
('Nishtha', 12345679, '2019-05-21', 1, 0.1, 'not paid'),
('pragati', 3443234, '29/3/2021', 10, 50, 'not_paid'),
('', 0, '', 0, 0, ''),
('pragati', 3443234, '29/3/2021', 10, 50, 'not_paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `issn_no` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `issn_no`, `approve`, `issue`, `return`) VALUES
('Ritesh', 366666, '<p style=\"color:yellow; background-color:red;\">EXPIRED</p>', '2019-04-22', '2019-05-16'),
('Pragati', 177777, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-03-20', '2019-04-20'),
('Pragati', 25555, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-01-30', '2019-02-28'),
('Aastha', 111111, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-04-20', '2019-05-20'),
('Nishtha', 22345678, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-02-20', '2019-02-10'),
('C', 145678, '', '', ''),
('Gcs/2030482', 33823, '<p style=\"color:yellow; background-color:red;\">EXPIRED</p>', '2021-04-5', '2021-05-02'),
('Gcs/2030482', 12, '', '', ''),
('Gcs/2030457', 23234, 'yes', '2021-04-5', '2021-06-02'),
('Gcs/2030457', 43322112, '', '', ''),
('Gcs/2030473', 33823, '', '', ''),
('Gcs/2030473', 12, 'yes', '2021-04-5', '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `trade` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `trade`, `username`, `password`, `email`, `contact`) VALUES
(2, 'Ritesh', 'Kumar', 'B.E/Computer', 'Gcs/2030482', 'Rk@123', 'rk@gmail.com', '+917765775457'),
(3, 'Pragati', 'priya', 'B.E/Computer', 'Gcs/2030457', 'Pk@123', 'pk@gmail.com', '+91754378636'),
(4, 'Nishtha', 'Rani', 'B.E/Computer', 'Gcs/2030473', 'Nk@123', 'nk@gmail.com', '+91776754565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
