-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2020 at 04:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nvlst`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Title` text,
  `Author_Name` varchar(255) NOT NULL,
  `Genre` varchar(255) DEFAULT NULL,
  `Language` varchar(2) DEFAULT 'en',
  `Release_Date` date DEFAULT NULL,
  `Price` int(11) NOT NULL DEFAULT '1',
  `Provider` varchar(255) DEFAULT NULL,
  `ISBN` decimal(13,0) NOT NULL,
  `Pages` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`ID`, `Title`, `Author_Name`, `Genre`, `Language`, `Release_Date`, `Price`, `Provider`, `ISBN`, `Pages`) VALUES
(1, 'Please See Us', 'Caitlin Mullen', 'Comedy', 'en', '2020-03-10', 422, 'The Novelist', '9771234567898', 234),
(2, 'Ninth House', 'Leigh Bardugo', 'Fantasy', 'en', '2019-12-31', 362, 'Google Books', '9781234567897', 424),
(3, 'Long Bright River', 'Liz Moore', 'Thriller', 'en', '2017-12-31', 154, 'Amazon Books', '9765456322123', 642),
(7, 'Test 1', 'Azoz', 'Thriller', 'en', '2020-04-01', 199, 'IAU', '9771234567898', 241),
(8, 'Test 2', 'MK', 'Thriller', 'en', '2020-02-03', 199, 'Amazon', '9781234567897', 21);

-- --------------------------------------------------------

--
-- Table structure for table `OrderHistory`
--

CREATE TABLE `OrderHistory` (
  `OrderID` int(5) NOT NULL,
  `UserID` int(5) NOT NULL,
  `Books` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OrderHistory`
--

INSERT INTO `OrderHistory` (`OrderID`, `UserID`, `Books`, `Date`) VALUES
(1, 0, '1,2', 'date(Y/m/d)'),
(2, 0, '1,2', 'date(Y/m/d)'),
(3, 6, '1,2', 'date(Y/m/d)'),
(4, 6, '1,2', 'date(Y/m/d)');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(9) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`) VALUES
(3, 'Mohammed', 'Abdullah', 'MK', 'mk@gmail.com', '$2y$10$rfMworodJN1Nst/n/Bk.K.KMfYqZsiV2GyPpzxGPaXt.mJ5ciDJQ6'),
(4, 'Ali', 'Hussain', 'Nickelz', 'xinickelz@gmail.com', '$2y$10$mmi7637H.0Pz9ToSNYzKieDDwdbhoWBmHuEAKpak2Gbwz9DyT/u1u'),
(5, 'Eden', 'Hazard', 'Hazard', 'cfc@cfc.com', '123'),
(6, 'Ali', 'Ahmed', 'Azoz', 'mk@al.com', '$2y$10$J8dNhEjrnKca9GoSssKece9Vs795gercdxxFwDJPnWE4dxqLjUCnC');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserID` int(30) NOT NULL,
  `Books` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `isbn_issn_unique` (`ISBN`,`Pages`);

--
-- Indexes for table `OrderHistory`
--
ALTER TABLE `OrderHistory`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD KEY `ID` (`ID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `OrderHistory`
--
ALTER TABLE `OrderHistory`
  MODIFY `OrderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
