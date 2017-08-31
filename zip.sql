# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19)
# Database: pantryNow-local
# Generation Time: 2017-08-28 13:52:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table zipcodes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zipcodes`;

CREATE TABLE `zipcodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zip` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `zipcodes` WRITE;
/*!40000 ALTER TABLE `zipcodes` DISABLE KEYS */;

INSERT INTO `zipcodes` (`id`, `zip`, `created_at`, `updated_at`)
VALUES
	(1,400004,NULL,NULL),
	(2,400005,NULL,NULL),
	(3,400001,NULL,NULL),
	(4,400002,NULL,NULL),
	(5,400020,NULL,NULL),
	(6,400032,NULL,NULL),
	(7,400021,NULL,NULL),
	(8,400007,NULL,NULL),
	(9,400003,NULL,NULL),
	(10,400026,NULL,NULL),
	(11,400008,NULL,NULL),
	(12,400018,NULL,NULL),
	(13,400025,NULL,NULL),
	(14,400028,NULL,NULL),
	(15,400037,NULL,NULL),
	(16,400006,NULL,NULL),
	(17,400011,NULL,NULL),
	(18,400019,NULL,NULL),
	(19,400012,NULL,NULL),
	(20,400034,NULL,NULL),
	(21,400031,NULL,NULL),
	(22,400027,NULL,NULL),
	(23,400010,NULL,NULL),
	(25,400067,NULL,NULL);

/*!40000 ALTER TABLE `zipcodes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;