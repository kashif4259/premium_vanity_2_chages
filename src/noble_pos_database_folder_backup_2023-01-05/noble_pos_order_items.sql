-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: noble_pos
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `variant_id` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `quantity` double(8,2) NOT NULL,
  `price` double(20,2) NOT NULL,
  `discount` double(20,2) NOT NULL DEFAULT '0.00',
  `sub_total` double(20,2) NOT NULL DEFAULT '0.00',
  `tax_id` int DEFAULT NULL,
  `order_id` int NOT NULL,
  `adjust_stock_type_id` int NOT NULL DEFAULT '0',
  `note` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,3,'receiving',3.00,100.00,0.00,300.00,NULL,1,0,NULL,'2022-11-14 20:37:52','2022-11-14 20:37:52'),(3,0,0,'discount',1.00,1.30,0.00,-1.30,NULL,2,0,NULL,'2022-11-14 20:46:27','2022-11-14 20:46:27'),(5,1,1,'receiving',7.00,100.00,0.00,700.00,NULL,4,0,NULL,'2022-11-16 17:15:11','2022-11-16 17:15:11'),(6,1,2,'receiving',5.00,500.00,0.00,2500.00,NULL,5,0,NULL,'2022-11-16 17:34:12','2022-11-16 17:34:12'),(7,2,3,'receiving',10.00,650.00,0.00,6500.00,NULL,6,0,NULL,'2022-11-16 17:39:43','2022-11-16 17:39:43'),(8,1,1,'sales',-1.00,547.00,0.00,547.00,NULL,7,0,NULL,'2022-11-16 17:51:56','2022-11-16 17:51:56'),(9,2,3,'sales',-1.00,875.00,0.00,875.00,NULL,8,0,NULL,'2022-11-16 19:49:09','2022-11-16 19:49:09'),(10,3,4,'receiving',15.00,600.00,0.00,9000.00,NULL,9,0,NULL,'2022-11-21 19:40:59','2022-11-21 19:40:59'),(11,3,4,'sales',-1.00,850.00,2.00,833.00,NULL,10,0,NULL,'2022-11-21 19:45:43','2022-11-21 19:45:43'),(12,1,1,'sales',-1.00,650.00,0.00,650.00,NULL,11,0,NULL,'2022-11-25 21:28:17','2022-11-25 21:28:17'),(13,0,0,'shipment',1.00,500.00,0.00,500.00,NULL,11,0,NULL,'2022-11-25 21:28:17','2022-11-25 21:28:17'),(14,1,1,'sales',-1.00,650.00,0.00,650.00,NULL,12,0,NULL,'2022-11-25 21:33:42','2022-11-25 21:33:42'),(15,0,0,'shipment',1.00,500.00,0.00,500.00,NULL,12,0,NULL,'2022-11-25 21:33:42','2022-11-25 21:33:42'),(24,2,3,'sales',-1.00,875.00,0.00,875.00,NULL,21,0,NULL,'2022-12-12 14:27:20','2022-12-12 14:27:20'),(25,2,3,'sales',-1.00,875.00,0.00,875.00,NULL,22,0,NULL,'2022-12-12 14:27:21','2022-12-12 14:27:21'),(26,2,3,'sales',-1.00,875.00,0.00,875.00,NULL,23,0,NULL,'2022-12-12 14:46:53','2022-12-12 14:46:53'),(27,3,4,'sales',-2.00,850.00,0.00,1700.00,NULL,24,0,NULL,'2022-12-12 14:51:10','2022-12-12 14:51:10'),(28,2,3,'sales',-1.00,875.00,0.00,875.00,NULL,24,0,NULL,'2022-12-12 14:51:10','2022-12-12 14:51:10'),(29,0,0,'shipment',1.00,500.00,0.00,500.00,NULL,24,0,NULL,'2022-12-12 14:51:10','2022-12-12 14:51:10'),(30,3,4,'sales',-14.00,850.00,0.00,11900.00,NULL,25,0,NULL,'2022-12-17 15:56:49','2022-12-17 15:56:49'),(31,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,26,0,NULL,'2022-12-17 16:17:32','2022-12-17 16:17:32'),(32,3,4,'sales',-7.00,850.00,0.00,5950.00,NULL,27,0,NULL,'2022-12-17 16:19:15','2022-12-17 16:19:15'),(33,2,3,'sales',-1.00,875.00,0.00,875.00,NULL,27,0,NULL,'2022-12-17 16:19:15','2022-12-17 16:19:15'),(34,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,28,0,NULL,'2022-12-17 16:25:43','2022-12-17 16:25:43'),(35,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,29,0,NULL,'2022-12-17 16:29:30','2022-12-17 16:29:30'),(36,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,30,0,NULL,'2022-12-17 17:03:51','2022-12-17 17:03:51'),(37,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,31,0,NULL,'2022-12-17 17:06:02','2022-12-17 17:06:02'),(38,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,32,0,NULL,'2022-12-17 17:08:20','2022-12-17 17:08:20'),(39,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,33,0,NULL,'2022-12-17 17:13:19','2022-12-17 17:13:19'),(40,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,34,0,NULL,'2022-12-17 17:13:52','2022-12-17 17:13:52'),(41,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,35,0,NULL,'2022-12-17 17:16:36','2022-12-17 17:16:36'),(42,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,36,0,NULL,'2022-12-17 17:19:13','2022-12-17 17:19:13'),(43,3,4,'sales',-1.00,850.00,0.00,850.00,NULL,37,0,NULL,'2022-12-17 17:27:18','2022-12-17 17:27:18');
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-26  1:51:02