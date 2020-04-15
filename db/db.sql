-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 15, 2020 at 08:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nvlst`
--

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
(5, 'Ali', 'Hussain', 'aziz', 'az@gm.com', '$2y$10$TJK2V5jEMHN2SWGsjpc8lu0HNTjnB0z6dNz6gvXntosG6Xn4yzVwy'),
(3, 'Mohammed', 'Abdullah', 'MK', 'mk@gmail.com', '$2y$10$rfMworodJN1Nst/n/Bk.K.KMfYqZsiV2GyPpzxGPaXt.mJ5ciDJQ6'),
(8, 'kk', 'kk', 'ali', 'ok@g.com', '$2y$10$EVj9Ec9NAsHcUpy89lhBEe0.MDsVpv18Zjkj9i1HYRPa.ldpiZnKa'),
(4, 'Ali', 'Hussain', 'Nickelz', 'xinickelz@gmail.com', '$2y$10$mmi7637H.0Pz9ToSNYzKieDDwdbhoWBmHuEAKpak2Gbwz9DyT/u1u'),
(7, 'ahmed', 'ali', 'hus', 'xx@xx.om', '$2y$10$JzCsvW.UhGp6JSKbgXA0BuaNhPijXr6SuWeT/tIFKmpKHdsJW0Fb.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD UNIQUE KEY `Email_2` (`Email`),
  ADD KEY `ID` (`ID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
