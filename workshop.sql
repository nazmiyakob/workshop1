-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 05:38 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventId` int(3) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `Price_Ticket` bigint(10) NOT NULL,
  `Latest_Ticket` bigint(10) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventId`, `Name`, `Place`, `Price_Ticket`, `Latest_Ticket`, `Start_Date`, `End_Date`, `status`) VALUES
(1, 'Maulid Nabi 2018', 'Kompleks Sukan', 4, 75, '2018-11-19', '2018-11-21', 'pending'),
(2, 'Kenduri Khawin', 'Dewan Besar UTeM', 4, 91, '2018-04-26', '2018-04-29', 'pending'),
(4, 'Ceramah Perdana Ustaz Kazim: Antara Cinta & Rupa', 'Dewan Besar UTeM', 5, 97, '2018-04-12', '2018-04-13', 'pending'),
(6, 'Karnival Bola Sepak', 'Stadium UTeM', 1, 2, '2018-03-07', '2018-03-15', 'pending'),
(7, 'Karnival FTMK', 'FTMK', 1, 100, '2018-04-18', '2018-04-18', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `ic_number` bigint(20) NOT NULL,
  `matric_number` varchar(10) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `faculty` varchar(5) NOT NULL,
  `course` varchar(5) NOT NULL,
  `user_type` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `fullname`, `password`, `ic_number`, `matric_number`, `phone_number`, `email`, `faculty`, `course`, `user_type`) VALUES
(101, 'nazmi', 'Mohd Nazmi Syarifuddin Bin Mohd Yakob', 'abc123', 941016016117, 'B031510061', 177089951, 'nazmiyakob1994@gmail.com', 'ftmk', 'bits', 'Admin'),
(102, 'azan', 'Muhammad Azan Bin Kamarul Azhar', 'abc123', 941212085167, 'B031510077', 136789123, 'azan.azhar@gmail.com', 'ftmk', 'bitm', 'Pengguna'),
(103, 'sarah', 'Sarah Syamimi', 'abc123', 940525145924, 'B031510042', 176048995, 'sarahsyamimi@yahoo.com', 'FTMK', 'BITS', 'Pengguna'),
(104, 'nisa', 'Khairunnisha Ismail', 'abc123', 94100901, 'B031510000', 139063384, 'ikhairunnisha@gmail.com', 'FTMK', 'BITS', 'Pengguna'),
(112, 'zaim', 'ZAIM ARIF BIN ABDUL RAZAK', 'abc123', 931016016117, 'B031510031', 137188901, 'zaim@gmail.com', 'FTMK', 'BITS', 'Pengguna'),
(118, 'meon', 'amirul sukry', 'abc123', 940313025613, 'B031510096', 136689218, 'meon@gmail.com', 'FTMK', 'BITS', 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `s_ticket`
--

CREATE TABLE `s_ticket` (
  `CountID` int(11) NOT NULL,
  `EventId` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `qtyTicket` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_ticket`
--

INSERT INTO `s_ticket` (`CountID`, `EventId`, `username`, `qtyTicket`) VALUES
(3, 1, 'mimi', 1),
(4, 2, 'mimi', 2),
(5, 2, 'mimi', 2),
(6, 2, 'mimi', 2),
(7, 2, 'mimi', 2),
(8, 2, 'mimi', 2),
(9, 2, 'mimi', 2),
(10, 1, 'mimi', 2),
(11, 1, 'shasha', 6),
(12, 2, 'shasha', 3),
(13, 6, 'shasha', 2),
(14, 6, 'shasha', 2),
(15, 1, 'shasha', 3),
(16, 1, 'shasha', 2),
(17, 1, 'shasha', 2),
(18, 1, 'shasha', 2),
(19, 1, '102', 3),
(20, 2, '102', 4),
(21, 1, '102', 3),
(22, 1, '103', 2),
(32, 6, '112', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TicketId` int(3) NOT NULL,
  `EventId` varchar(3) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TicketId`, `EventId`, `username`) VALUES
(10, '2', 'mimi'),
(26, '6', 'shasha'),
(66, '6', '112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ic_number` (`ic_number`),
  ADD UNIQUE KEY `matric_number` (`matric_number`);

--
-- Indexes for table `s_ticket`
--
ALTER TABLE `s_ticket`
  ADD PRIMARY KEY (`CountID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TicketId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EventId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `s_ticket`
--
ALTER TABLE `s_ticket`
  MODIFY `CountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `TicketId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
