-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 10:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esports`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(10) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `message`) VALUES
(1, 'ishan', 'pubg is Fun'),
(2, 'rohan', 'cod is Fun'),
(3, 'nikhil', 'csgo is Fun'),
(4, 'pratik', 'valorant is Fun'),
(5, 'ishan', 'pubg is Fun'),
(6, 'rohan', 'cod is Fun'),
(7, 'nikhil', 'csgo is Fun'),
(8, 'pratik', 'valorant is Fun'),
(9, 'ishan', 'pubg is Fun'),
(10, 'rohan', 'cod is Fun'),
(11, 'nikhil', 'csgo is Fun'),
(12, 'pratik', 'valorant is Fun'),
(13, 'ishan', 'pubg is Fun'),
(14, 'rohan', 'cod is Fun'),
(15, 'nikhil', 'csgo is Fun'),
(16, 'pratik', 'valorant is Fun'),
(17, 'ishan', 'pubg is Fun'),
(18, 'rohan', 'cod is Fun'),
(19, 'nikhil', 'csgo is Fun'),
(20, 'pratik', 'valorant is Fun'),
(21, 'ishan', 'pubg is Fun'),
(22, 'rohan', 'cod is Fun'),
(23, 'nikhil', 'csgo is Fun'),
(24, 'pratik', 'valorant is Fun');

-- --------------------------------------------------------

--
-- Table structure for table `duo`
--

CREATE TABLE `duo` (
  `Player1` varchar(20) NOT NULL,
  `CID1` int(20) NOT NULL,
  `Player2` varchar(20) NOT NULL,
  `CID2` int(20) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duo`
--

INSERT INTO `duo` (`Player1`, `CID1`, `Player2`, `CID2`, `phone`) VALUES
('utfu', 135, ' cgtct', 65489, 165498),
('rohan', 1234, 'ishan', 3455, 1234567890),
('tanan', 123, 'nanana', 2, 2147483647),
('ishan', 1234, 'rohan', 2345, 1234567890),
('abcd', 123, 'pqrs', 123, 1234567890),
('tan', 7, 'tam', 8, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game`) VALUES
('Aliens vs. Predator (Jaguar)'),
('Battlefield 1942'),
('Battlefield: Bad Company 2'),
('BioShock'),
('BioShock Infinit'),
('Black'),
('Blacklight Retribution'),
('Borderlands'),
('Borderlands 2'),
('Brothers in Arms: Road to Hill 30'),
('Bulletstorm'),
('Call of Duty 2'),
('Call of Duty 4: Modern Warfare'),
('Call of Duty: Black Ops'),
('Clive Barkers Undying'),
('Counter-Strike');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `game` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `gender`, `game`, `age`) VALUES
(1, 'ishan', 'male', 'pubg', 20),
(2, 'Rohan', 'male', 'cod', 21),
(3, 'nikhil', 'male', 'vaolrant', 22),
(4, 'addy', 'male', 'ludo', 18),
(5, 'aniket', 'male', 'pubg', 24);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `password`, `phone`) VALUES
('isha', 'ishankadam@gmail.com', 'Ishan@11', 1234567890),
('awawdw', 'ishankadam@gmail.com', 'A1234a', 0),
('kb', 'ishankadam@gmail.com', 'Happ@22', 0),
('Tanvi02', 'student@vit.com', 'Happy@02', 56789),
('student@vit.com', 'Happy@02', 'Happy@02', 8877665544),
('ishan.kadam@gmail.com', 'A1234a', 'A1234a', 1234567890),
('student@vit.com', 'Sad123', 'Sad123', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `solo`
--

CREATE TABLE `solo` (
  `Player1` varchar(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solo`
--

INSERT INTO `solo` (`Player1`, `CID`, `phone`) VALUES
('', 1, 0),
('', 2, 0),
('', 3, 0),
('ishan', 1234, 123456790),
('nikhil', 2334, 2345454),
('tanvi', 3456, 3545454),
('rohan', 12345, 1234566),
('nikhil', 1234567, 123456678),
('', 1234568, 0);

-- --------------------------------------------------------

--
-- Table structure for table `squad`
--

CREATE TABLE `squad` (
  `Player1` varchar(50) NOT NULL,
  `CID1` int(10) NOT NULL,
  `Player2` varchar(50) NOT NULL,
  `CID2` int(10) NOT NULL,
  `Player3` varchar(50) NOT NULL,
  `CID3` int(10) NOT NULL,
  `Player4` varchar(50) NOT NULL,
  `CID4` int(10) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `squad`
--

INSERT INTO `squad` (`Player1`, `CID1`, `Player2`, `CID2`, `Player3`, `CID3`, `Player4`, `CID4`, `phone`) VALUES
('ishan', 1234, 'rohan', 12345, 'rohan', 424242, 'ronil', 312313, 1231313),
('', 0, '', 0, '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamname` varchar(50) NOT NULL,
  `CID` int(20) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamname`, `CID`, `phone`) VALUES
('', 1234, 0),
('', 2147483647, 0),
('sins', 2424, 24242424);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solo`
--
ALTER TABLE `solo`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `solo`
--
ALTER TABLE `solo`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234569;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
