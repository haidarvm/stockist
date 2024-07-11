/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for FreeBSD14.0 (amd64)
--
-- Host: localhost    Database: stockist
-- ------------------------------------------------------
-- Server version	10.11.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `stockist_category`
--

DROP TABLE IF EXISTS `stockist_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_category` (
  `category_id` int(8) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(1500) NOT NULL,
  `category_code` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_code` (`category_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_category`
--

LOCK TABLES `stockist_category` WRITE;
/*!40000 ALTER TABLE `stockist_category` DISABLE KEYS */;
INSERT INTO `stockist_category` VALUES
(1,'kretek','skt','2024-07-11 07:36:39'),
(2,'filter','skm','2024-07-11 07:36:47');
/*!40000 ALTER TABLE `stockist_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockist_config`
--

DROP TABLE IF EXISTS `stockist_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_config` (
  `config_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `config_name` varchar(200) NOT NULL,
  `value` tinyint(3) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_config`
--

LOCK TABLES `stockist_config` WRITE;
/*!40000 ALTER TABLE `stockist_config` DISABLE KEYS */;
INSERT INTO `stockist_config` VALUES
(1,'minimal_stock',10,'2022-06-11 16:26:21');
/*!40000 ALTER TABLE `stockist_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockist_item`
--

DROP TABLE IF EXISTS `stockist_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(2000) NOT NULL,
  `price` double DEFAULT 0,
  `selling_price` double NOT NULL DEFAULT 0,
  `img` varchar(2200) DEFAULT NULL,
  `thumbnail` varchar(2200) DEFAULT NULL,
  `item_code` varchar(100) NOT NULL,
  `category_id` int(8) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `location` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_item`
--

LOCK TABLES `stockist_item` WRITE;
/*!40000 ALTER TABLE `stockist_item` DISABLE KEYS */;
INSERT INTO `stockist_item` VALUES
(1,'Kujang Mas Kretek',18000,20000,NULL,NULL,'',1,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(2,'Kujang Mas Filter',24500,26500,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(3,'Platinum Kretek',18000,20000,NULL,NULL,'',1,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(4,'Platinum',23500,25500,NULL,NULL,'',1,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(5,'Provost 19',25000,28000,NULL,NULL,'',1,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(6,'Precission Putih',30500,35000,NULL,NULL,'',1,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(7,'Precission Hijau',31500,33500,NULL,NULL,'',1,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(8,'Sinergi Encode',31000,33000,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(9,'Sinergi Mind',27000,29000,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(10,'Mind Menthol',28000,30000,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(11,'Trust Hitam',31500,33500,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(12,'Trust Menthol',32000,34000,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(13,'New Normal ORG',15000,17000,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(14,'New Normal Mind',24000,26000,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(15,'New Normal Menthol',28500,30500,NULL,NULL,'',2,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50'),
(16,'Krakatau',60000,70000,NULL,NULL,'',1,'',NULL,'2024-07-11 08:10:50','2024-07-11 08:10:50');
/*!40000 ALTER TABLE `stockist_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockist_level`
--

DROP TABLE IF EXISTS `stockist_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_level` (
  `leve_id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(300) NOT NULL,
  PRIMARY KEY (`leve_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_level`
--

LOCK TABLES `stockist_level` WRITE;
/*!40000 ALTER TABLE `stockist_level` DISABLE KEYS */;
INSERT INTO `stockist_level` VALUES
(1,'admin'),
(2,'supervisor'),
(3,'operator');
/*!40000 ALTER TABLE `stockist_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockist_stock`
--

DROP TABLE IF EXISTS `stockist_stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(8) NOT NULL,
  `quantity` mediumint(9) NOT NULL,
  `created_at` timestamp(3) NOT NULL DEFAULT current_timestamp(3),
  `updated_at` timestamp(3) NOT NULL DEFAULT current_timestamp(3) ON UPDATE current_timestamp(3),
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_stock`
--

LOCK TABLES `stockist_stock` WRITE;
/*!40000 ALTER TABLE `stockist_stock` DISABLE KEYS */;
INSERT INTO `stockist_stock` VALUES
(1,1,0,'2024-07-11 08:17:32.631','2024-07-11 08:18:37.535');
/*!40000 ALTER TABLE `stockist_stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockist_stock_in`
--

DROP TABLE IF EXISTS `stockist_stock_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_stock_in` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(8) NOT NULL,
  `quantity` mediumint(9) NOT NULL,
  `desc` varchar(2000) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp(3) NOT NULL DEFAULT current_timestamp(3),
  `updated_at` timestamp(3) NOT NULL DEFAULT current_timestamp(3) ON UPDATE current_timestamp(3),
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_stock_in`
--

LOCK TABLES `stockist_stock_in` WRITE;
/*!40000 ALTER TABLE `stockist_stock_in` DISABLE KEYS */;
INSERT INTO `stockist_stock_in` VALUES
(1,1,10,'',NULL,1,'2024-07-11 08:17:32.629','2024-07-11 08:17:32.629');
/*!40000 ALTER TABLE `stockist_stock_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockist_stock_out`
--

DROP TABLE IF EXISTS `stockist_stock_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_stock_out` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(8) NOT NULL,
  `quantity` mediumint(9) NOT NULL,
  `desc` varchar(2000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp(3) NOT NULL DEFAULT current_timestamp(3),
  `updated_at` timestamp(3) NOT NULL DEFAULT current_timestamp(3) ON UPDATE current_timestamp(3),
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_stock_out`
--

LOCK TABLES `stockist_stock_out` WRITE;
/*!40000 ALTER TABLE `stockist_stock_out` DISABLE KEYS */;
INSERT INTO `stockist_stock_out` VALUES
(1,1,5,'jual ke haidar',1,'2024-07-11 08:18:13.611','2024-07-11 08:18:13.611'),
(2,1,5,'jual ke warung',1,'2024-07-11 08:18:37.531','2024-07-11 08:18:37.531');
/*!40000 ALTER TABLE `stockist_stock_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockist_user`
--

DROP TABLE IF EXISTS `stockist_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockist_user` (
  `user_id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `level_id` tinyint(2) NOT NULL,
  `full_name` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockist_user`
--

LOCK TABLES `stockist_user` WRITE;
/*!40000 ALTER TABLE `stockist_user` DISABLE KEYS */;
INSERT INTO `stockist_user` VALUES
(1,'admin','dc9148f09e50c34b342dacb79200c8c503eac462cd97a51671ef7a9433cdec3e',NULL,1,'administrator','2022-03-29 09:16:52','2024-07-09 18:57:51'),
(2,'operator','fe96dd39756ac41b74283a9292652d366d73931f',NULL,2,'operator','2022-03-30 00:19:52','2022-05-16 03:23:12'),
(3,'haidar','9117e9d67c17b856e380c52502a2afbcf0eee813',NULL,2,'haidar','2022-05-18 06:51:56','2022-05-18 06:51:56');
/*!40000 ALTER TABLE `stockist_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-11 15:20:38
