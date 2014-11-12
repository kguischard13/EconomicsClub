# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: SecurityDB
# Generation Time: 2014-11-12 18:46:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Events`;

CREATE TABLE `Events` (
  `idEvents` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Content` longtext NOT NULL,
  `Date` date NOT NULL,
  `EventTime` time NOT NULL,
  `EventPictures` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEvents`),
  UNIQUE KEY `idEvents_UNIQUE` (`idEvents`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Members`;

CREATE TABLE `Members` (
  `idMembers` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL DEFAULT 'Guest',
  `Position` varchar(45) DEFAULT NULL,
  `EmailAddress` varchar(45) NOT NULL,
  `SSN` varchar(45) NOT NULL DEFAULT '111-11-1111',
  `MemberPictures` varchar(100) DEFAULT NULL,
  `Password` varchar(45) NOT NULL DEFAULT 'Guest',
  `Flag` int(11) NOT NULL DEFAULT '7',
  `Status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMembers`),
  UNIQUE KEY `idMembers_UNIQUE` (`idMembers`),
  UNIQUE KEY `EmailAddress_UNIQUE` (`EmailAddress`),
  UNIQUE KEY `SSN_UNIQUE` (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Merchandise
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Merchandise`;

CREATE TABLE `Merchandise` (
  `idMerchandise` int(11) NOT NULL AUTO_INCREMENT,
  `Item` varchar(45) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `MerchandisePicture` varchar(100) DEFAULT NULL,
  `Info` longtext,
  PRIMARY KEY (`idMerchandise`),
  UNIQUE KEY `idMerchandise_UNIQUE` (`idMerchandise`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Transactions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Transactions`;

CREATE TABLE `Transactions` (
  `idTransactions` int(11) NOT NULL AUTO_INCREMENT,
  `Members_idMembers` int(11) NOT NULL,
  `Merchandise_idMerchandise` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '1',
  `Total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`idTransactions`),
  UNIQUE KEY `Quantity_UNIQUE` (`Quantity`),
  KEY `fk_Cart_Members_idx` (`Members_idMembers`),
  KEY `fk_Transactions_Merchandise1_idx` (`Merchandise_idMerchandise`),
  CONSTRAINT `fk_Cart_Members` FOREIGN KEY (`Members_idMembers`) REFERENCES `Members` (`idMembers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Transactions_Merchandise1` FOREIGN KEY (`Merchandise_idMerchandise`) REFERENCES `Merchandise` (`idMerchandise`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
