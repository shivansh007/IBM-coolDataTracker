-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 04:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsaledatatracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tnoofleavedays`
--

CREATE TABLE `tnoofleavedays` (
  `ID` int(11) NOT NULL,
  `Days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tnoofleavedays`
--

INSERT INTO `tnoofleavedays` (`ID`, `Days`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tsalesteaminformation`
--

CREATE TABLE `tsalesteaminformation` (
  `ID` int(11) NOT NULL,
  `TeamName` varchar(20) NOT NULL,
  `TeamLeadID` int(11) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsalesteaminformation`
--

INSERT INTO `tsalesteaminformation` (`ID`, `TeamName`, `TeamLeadID`, `CreatedDate`) VALUES
(1, 'CodeFellas', 1, '2017-03-21 09:21:53'),
(2, 'Scorpians', 2, '2017-03-21 09:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `tuserinformations`
--

CREATE TABLE `tuserinformations` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `EMailAddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuserinformations`
--

INSERT INTO `tuserinformations` (`ID`, `FullName`, `EMailAddress`) VALUES
(1, 'Shivansh Nalwaya', 'shivanshnlw@gmail.com'),
(2, 'John Watson', 'johnwatson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tuserleaveinformations`
--

CREATE TABLE `tuserleaveinformations` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `LeaveStartDate` date NOT NULL,
  `LeaveEndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuserleaveinformations`
--

INSERT INTO `tuserleaveinformations` (`ID`, `UserID`, `LeaveStartDate`, `LeaveEndDate`) VALUES
(1, 1, '2017-03-22', '2017-03-23'),
(2, 12, '2017-03-01', '2017-03-03'),
(3, 1, '2017-03-01', '2017-03-02'),
(4, 1, '2017-03-01', '2017-03-02'),
(5, 1, '2017-03-01', '2017-03-02'),
(6, 1, '2017-03-01', '2017-03-02'),
(7, 1, '2017-03-01', '2017-03-02'),
(8, 1, '2017-03-01', '2017-03-02'),
(9, 1, '2017-03-01', '2017-03-02'),
(10, 2, '2017-03-01', '2017-03-02'),
(11, 2, '2017-03-01', '2017-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `tuserreportingdelegation`
--

CREATE TABLE `tuserreportingdelegation` (
  `ID` int(11) NOT NULL,
  `delegatorsuserid` int(11) NOT NULL,
  `delegateesuserid` int(11) NOT NULL,
  `delegationstartdate` date NOT NULL,
  `delegationenddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuserreportingdelegation`
--

INSERT INTO `tuserreportingdelegation` (`ID`, `delegatorsuserid`, `delegateesuserid`, `delegationstartdate`, `delegationenddate`) VALUES
(1, 3, 3, '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tsalesteaminformation`
--
ALTER TABLE `tsalesteaminformation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tuserinformations`
--
ALTER TABLE `tuserinformations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tuserleaveinformations`
--
ALTER TABLE `tuserleaveinformations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tuserreportingdelegation`
--
ALTER TABLE `tuserreportingdelegation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tsalesteaminformation`
--
ALTER TABLE `tsalesteaminformation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tuserinformations`
--
ALTER TABLE `tuserinformations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tuserleaveinformations`
--
ALTER TABLE `tuserleaveinformations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tuserreportingdelegation`
--
ALTER TABLE `tuserreportingdelegation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
