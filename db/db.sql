# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: nvlst
# Generation Time: 2020-04-17 02:20:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Books
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Books`;

CREATE TABLE `Books` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Title` text,
  `Author_Name` varchar(255) NOT NULL,
  `Genre` varchar(255) DEFAULT NULL,
  `Language` varchar(2) DEFAULT 'en',
  `Release_Date` date DEFAULT NULL,
  `Price` int(11) NOT NULL DEFAULT '1',
  `Provider` varchar(255) DEFAULT NULL,
  `ISBN` decimal(13,0) NOT NULL,
  `Number_of_Pages` decimal(8,0) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `isbn_issn_unique` (`ISBN`,`Number_of_Pages`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES `Books` WRITE;
/*!40000 ALTER TABLE `Books` DISABLE KEYS */;

INSERT INTO `Books` (`ID`, `Title`, `Author_Name`, `Genre`, `Language`, `Release_Date`, `Price`, `Provider`, `ISBN`, `Number_of_Pages`)
VALUES
	(1,'Please See Us','Caitlin Mullen','Comedy','en','2020-03-10',422,'The Novelist',9771234567898,97765872),
	(2,'Ninth House','Leigh Bardugo','Fantasy','en','2019-12-31',362,'Google Books',9781234567897,86735821),
	(3,'Long Bright River','Liz Moore','Thriller','en','2017-12-31',154,'Amazon Books',9765456322123,87662712);

/*!40000 ALTER TABLE `Books` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `ID` int(9) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  UNIQUE KEY `Email_2` (`Email`),
  KEY `ID` (`ID`),
  KEY `Username` (`Username`),
  KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;

INSERT INTO `Users` (`ID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`)
VALUES
	(5,'Ali','Hussain','aziz','az@gm.com','$2y$10$TJK2V5jEMHN2SWGsjpc8lu0HNTjnB0z6dNz6gvXntosG6Xn4yzVwy'),
	(3,'Mohammed','Abdullah','MK','mk@gmail.com','$2y$10$rfMworodJN1Nst/n/Bk.K.KMfYqZsiV2GyPpzxGPaXt.mJ5ciDJQ6'),
	(8,'kk','kk','ali','ok@g.com','$2y$10$EVj9Ec9NAsHcUpy89lhBEe0.MDsVpv18Zjkj9i1HYRPa.ldpiZnKa'),
	(4,'Ali','Hussain','Nickelz','xinickelz@gmail.com','$2y$10$mmi7637H.0Pz9ToSNYzKieDDwdbhoWBmHuEAKpak2Gbwz9DyT/u1u'),
	(7,'ahmed','ali','hus','xx@xx.om','$2y$10$JzCsvW.UhGp6JSKbgXA0BuaNhPijXr6SuWeT/tIFKmpKHdsJW0Fb.');

/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
