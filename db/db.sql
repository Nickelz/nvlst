-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 14, 2020 at 08:40 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `ISSN` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`ID`, `Title`, `Author_Name`, `Genre`, `Language`, `Release_Date`, `Price`, `Provider`, `ISBN`, `ISSN`) VALUES
(1, 'Please See Us', 'Caitlin Mullen', 'Comedy', 'en', '2020-03-10', 422, 'The Novelist', '9771234567898', '97765872'),
(2, 'Ninth House', 'Leigh Bardugo', 'Fantasy', 'en', '2019-12-31', 362, 'Google Books', '9781234567897', '86735821'),
(3, 'Long Bright River', 'Liz Moore', 'Thriller', 'en', '2017-12-31', 154, 'Amazon Books', '9765456322123', '87662712');

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
(4, 'Ali', 'Hussain', 'Nickelz', 'xinickelz@gmail.com', '$2y$10$mmi7637H.0Pz9ToSNYzKieDDwdbhoWBmHuEAKpak2Gbwz9DyT/u1u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `isbn_issn_unique` (`ISBN`,`ISSN`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD KEY `ID` (`ID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
