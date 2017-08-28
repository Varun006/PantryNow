# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 45.79.108.103 (MySQL 5.7.19-0ubuntu0.16.04.1)
# Database: pantryNow
# Generation Time: 2017-08-28 13:54:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `slug`)
VALUES
	(1,'Beverages','2017-07-08 12:17:50','2017-08-28 17:25:15','beverages'),
	(2,'Home Care','2017-07-08 17:13:55','2017-08-28 17:25:48','home-care'),
	(3,'Personal Care','2017-07-08 17:14:05','2017-08-28 17:25:55','personal-care'),
	(4,'Breakfast & Dairy','2017-07-08 17:14:20','2017-08-28 17:25:41','breakfast-dairy'),
	(5,'Snacks','2017-07-08 17:14:27','2017-08-28 17:26:09','snacks'),
	(7,'Sauces and Jams','2017-07-08 17:14:46','2017-08-24 14:19:23','sauces-and-jams');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strikeThroughPrice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `variation`, `strikeThroughPrice`, `price`, `description`, `photo`, `slug`, `created_at`, `updated_at`, `category`, `subCategory`)
VALUES
	(12,'Coca Cola (600 ml)','0',NULL,'38','Ingredients: Carbonated Water, Sugar, Acidity Regulator (338), Caffeine, Permitted Natural Colour (150d), Added Flavours (Natural Flavouring Substances), Contains No Fruit','1502985253.jpg','coca-cola-600-ml','2017-08-17 15:54:13','2017-08-17 17:10:19',1,1),
	(13,'Coca Cola (2.25 lt)','0',NULL,'90','Ingredients: Carbonated Water, Sugar, Acidity Regulator (338), Caffeine, Permitted Natural Colour (150d), Added Flavours (Natural Flavouring Substances), Contains No Fruit','1502985396.jpg','coca-cola-225-lt','2017-08-17 15:56:36','2017-08-28 17:47:14',1,1),
	(14,'Thums Up (600ml)','0',NULL,'38','Carbonated Water (Sweetened Carbonated Beverage)','1502989141.jpg','thums-up-600ml','2017-08-17 16:59:01','2017-08-17 16:59:03',1,1),
	(15,'Thums Up (2lt)','0',NULL,'90','Carbonated Water (Sweetened Carbonated Beverage)','1502989185.jpg','thums-up-2lt','2017-08-17 16:59:45','2017-08-17 16:59:47',1,1),
	(16,'Kinley Club Soda (600ml)','0',NULL,'20','Carbonated Water','1502989575.jpg','kinley-club-soda-600ml','2017-08-17 17:06:15','2017-08-17 17:09:49',1,4),
	(17,'Red Bull (250ml)','0',NULL,'110','Red Bull vitalizes body and mind providing wings whenever you need them','1502989771.jpg','red-bull-250ml','2017-08-17 17:09:31','2017-08-17 17:09:33',1,5),
	(18,'Sprite (2lt)','0',NULL,'90','Carbonated Water (Sweetened Carbonated Beverage)','1502989966.jpg','sprite-2lt','2017-08-17 17:12:46','2017-08-17 17:12:47',1,1),
	(19,'Dove Deeply Nourishing Body Wash (200ml)','0',NULL,'99','Moisturizing Body Wash.','1503009391.jpg','dove-deeply-nourishing-body-wash-200ml','2017-08-17 22:36:31','2017-08-17 22:36:33',3,11),
	(20,'Palmolive Aroma Absolute Relax Shower Gel (250ml)','0',NULL,'170','Infused with Ylang Ylang essential oil & delicate Iris extract','1503009577.jpg','palmolive-aroma-absolute-relax-shower-gel-250ml','2017-08-17 22:39:37','2017-08-17 22:39:39',3,11),
	(21,'Vivel Soap Aloe Vera (100gm)','0',NULL,'28','Enriched with vitamin E and goodness of aloe vera','1503009697.jpg','vivel-soap-aloe-vera-100gm','2017-08-17 22:41:37','2017-08-17 22:41:39',3,11),
	(22,'Garnier Colour Naturals Hair Colour Cream Burgundy Classic - 3.16','0',NULL,'180','The box contains developer milk bottle (60ml) and hair colourant tube type III (40g).','1503009887.jpg','garnier-colour-naturals-hair-colour-cream-burgundy-classic-316','2017-08-17 22:44:47','2017-08-17 22:44:50',3,10),
	(23,'Parachute Coconut Hair Oil (175ml)','0',NULL,'80','Parachute Advanced Coconut Hair Oil provides 90% penetration with stronger nourished hair.','1503010017.jpg','parachute-coconut-hair-oil-175ml','2017-08-17 22:46:57','2017-08-17 22:46:59',3,10),
	(24,'Tresemme Beauty Full Volume Conditioner (85ml)','0',NULL,'99','Bounce friendly formulation, with volume lockers, leaves hair smooth and polished, even after you shampoo','1503010118.jpg','tresemme-beauty-full-volume-conditioner-85ml','2017-08-17 22:48:38','2017-08-17 22:48:40',3,10),
	(25,'Dove Hair Therapy Dryness Care Shampoo (180ml)','0',NULL,'128','Relieve a flaky, itchy scalp and keep hair beautifully soft and smooth* with Dandruff Care Shampoo, made with ZPTO and Micro Moisture Serum.','1503010165.jpg','dove-hair-therapy-dryness-care-shampoo-180ml','2017-08-17 22:49:25','2017-08-17 22:49:27',3,10);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sub_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sub_categories`;

CREATE TABLE `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;

INSERT INTO `sub_categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Soft Drinks','2017-07-08 12:17:16','2017-07-08 17:00:52'),
	(2,'Juices','2017-07-08 17:01:15','2017-07-08 17:01:15'),
	(3,'Tea & Coffee','2017-07-08 17:01:27','2017-07-08 17:01:27'),
	(4,'Water & Soda','2017-07-08 17:01:39','2017-07-08 17:01:39'),
	(5,'Health & Energy Drinks','2017-07-08 17:01:52','2017-07-08 17:01:52'),
	(6,'Laundry Detergent','2017-07-08 17:15:18','2017-07-08 17:15:18'),
	(7,'Dishwashers','2017-07-08 17:15:26','2017-07-08 17:15:26'),
	(8,'Repellents','2017-07-08 17:16:06','2017-07-08 17:16:06'),
	(9,'Air Fresheners','2017-07-08 17:16:23','2017-07-08 17:16:23'),
	(10,'Hair Care','2017-07-08 17:17:27','2017-07-08 17:17:27'),
	(11,'Skin Care','2017-07-08 17:17:35','2017-07-08 17:17:35'),
	(12,'Oral Needs','2017-07-08 17:17:42','2017-07-08 17:17:42'),
	(13,'Feminine Needs','2017-07-08 17:17:52','2017-07-08 17:17:52'),
	(14,'Shaving Needs','2017-07-08 17:17:58','2017-07-08 17:17:58'),
	(15,'Milk & Milk Products','2017-07-08 17:18:08','2017-07-08 17:18:08'),
	(16,'Cereal','2017-07-08 17:18:15','2017-07-08 17:18:15'),
	(17,'Bread','2017-07-08 17:18:25','2017-07-08 17:18:25'),
	(18,'Eggs','2017-07-08 17:18:30','2017-07-08 17:18:30'),
	(19,'Butter & Cheese','2017-07-08 17:18:37','2017-07-08 17:18:37'),
	(20,'Jams, Honey & Spread','2017-07-08 17:18:45','2017-07-08 17:18:45'),
	(21,'Milk Drinks','2017-07-08 17:18:57','2017-07-08 17:18:57'),
	(22,'Biscuits & Cookies','2017-07-08 17:19:15','2017-07-08 17:19:15'),
	(23,'Namkeen','2017-07-08 17:19:26','2017-07-08 17:19:26'),
	(24,'Chips & Wafers','2017-07-08 17:19:34','2017-07-08 17:19:34'),
	(25,'Chocolates & Candies','2017-07-08 17:19:41','2017-07-08 17:19:41'),
	(26,'Sauces & Ketchup','2017-07-08 17:19:51','2017-07-08 17:19:51'),
	(27,'Jams & Spreads','2017-07-08 17:19:58','2017-07-08 17:19:58'),
	(28,'Health Foods','2017-07-08 17:20:05','2017-07-08 17:20:05'),
	(29,'Honey & Syrups','2017-07-08 17:20:11','2017-07-08 17:20:11'),
	(30,'Pulses','2017-07-08 17:20:18','2017-07-08 17:20:18'),
	(31,'Atta & Others','2017-07-08 17:20:24','2017-07-08 17:20:24'),
	(32,'Rice','2017-07-08 17:20:31','2017-07-08 17:20:31'),
	(33,'Dry Fruits & Nuts','2017-07-08 17:20:38','2017-07-08 17:20:38'),
	(34,'Oils','2017-07-08 17:20:45','2017-07-08 17:20:45'),
	(35,'Spices','2017-07-08 17:20:51','2017-07-08 17:20:51'),
	(36,'Salt & Sugar','2017-07-08 17:20:58','2017-07-08 17:20:58');

/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
