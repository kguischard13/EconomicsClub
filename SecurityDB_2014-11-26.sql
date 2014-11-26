# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: SecurityDB
# Generation Time: 2014-11-26 19:05:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Members`;

CREATE TABLE `Members` (
  `idMembers` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL DEFAULT 'Guest',
  `Position` varchar(45) DEFAULT 'Club Member',
  `EmailAddress` varchar(45) NOT NULL,
  `SSN` varchar(45) NOT NULL DEFAULT '111-11-1111',
  `MemberPictures` varchar(100) DEFAULT 'Images/Blank.png',
  `Password` varchar(45) NOT NULL DEFAULT 'Guest',
  `Flag` int(11) NOT NULL DEFAULT '7',
  `Status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMembers`),
  UNIQUE KEY `idMembers_UNIQUE` (`idMembers`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Members` WRITE;
/*!40000 ALTER TABLE `Members` DISABLE KEYS */;

INSERT INTO `Members` (`idMembers`, `Name`, `Position`, `EmailAddress`, `SSN`, `MemberPictures`, `Password`, `Flag`, `Status`)
VALUES
	(1,'Kester Guischard','Club Member','test@iona.edu','111-11-1111','Images/Blank.png','Guest',3,NULL),
	(3,'Victor Kuc','Club Member','test2@iona.edu','111-11-1112','Images/Blank.png','Guest',3,NULL),
	(4,'Ralph Gorham','Club Member','test3@iona.edu','111-11-1111','Images/Blank.png','Guest',3,NULL),
	(5,'Guest','Club Member','','111-11-1111','Images/Blank.png','Guest',3,NULL);

/*!40000 ALTER TABLE `Members` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
