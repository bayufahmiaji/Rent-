-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: rental
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `balances`
--

DROP TABLE IF EXISTS `balances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `balances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `income` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `balances`
--

LOCK TABLES `balances` WRITE;
/*!40000 ALTER TABLE `balances` DISABLE KEYS */;
INSERT INTO `balances` VALUES (1,'2020-02-04 20:17:22','2020-02-04 20:17:22',10000000,10000000),(2,'2020-02-05 21:50:46','2020-02-05 21:50:46',1600000,11600000),(3,'2020-02-10 13:17:22','2020-10-04 13:17:22',4000000,15600000),(4,'2020-02-10 19:10:09','2020-02-10 19:10:09',4000000,19600000),(5,'2020-02-10 19:24:24','2020-02-10 19:24:24',4000000,23600000),(6,'2020-02-10 19:25:39','2020-02-10 19:25:39',4000000,27600000),(7,'2020-02-10 19:26:55','2020-02-10 19:26:55',4000000,31600000),(8,'2020-02-10 19:28:09','2020-02-10 19:28:09',4000000,35600000),(9,'2020-02-10 19:31:15','2020-02-10 19:31:15',4000000,39600000),(10,'2020-02-10 19:32:15','2020-02-10 19:32:15',4000000,43600000);
/*!40000 ALTER TABLE `balances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `No` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (5,'Alphard','2.5 G A/T',2019,'D 9782 AB',2000000,'alphard.jpg','available','2020-02-02 22:22:42','2020-02-10 19:33:25'),(6,'Toyota Avanza','EA',2019,'D 9702 AB',1000000,'avanza.jpg','available','2020-02-02 22:24:46','2020-02-10 09:09:12'),(7,'Lamborghini','Aventador',2018,'B 8926 BY',5000000,'lamborghini.jpg','available','2020-02-02 22:25:55','2020-02-10 07:24:53'),(8,'Honda Jazz','RS',2019,'D 8927 BH',800000,'honda jazz.jpg','available','2020-02-02 22:28:10','2020-02-05 22:02:19'),(9,'Mini Cooper','Paceman',2019,'D 8926 JK',4000000,'mini cooper.jpg','available','2020-02-02 22:30:22','2020-02-02 22:30:22'),(10,'Xenia','1.3 X A/T',2020,'D 2901 BK',1500000,'xenia.jpg','available','2020-02-02 22:32:19','2020-02-02 22:32:19'),(11,'NIssan Grand Livina','1.8 HWS',2019,'D 8901 YT',1350000,'nissan grand livina.jpg','available','2020-02-02 22:34:31','2020-02-02 22:34:31'),(13,'MItsubishi Xpander','GLX',2019,'D 5972 IU',2500000,'mitsubishi xpander.jpg','available','2020-02-04 11:39:44','2020-02-04 11:39:44'),(14,'Suzuki Ertiga','A-ohd',2019,'D 7212 BH',1200000,'ertiga.jpg','available','2020-02-10 19:43:59','2020-02-10 19:43:59'),(15,'Suzuki APV','Khgs2',2019,'D 9881 KP',1200000,'apv.jpg','available','2020-02-10 19:49:58','2020-02-10 19:49:58');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_01_25_024112_create_cars_table',2),(4,'2020_01_31_085059_create_transactions_table',3),(5,'2020_02_03_073702_add_seat_to_cars_table',4),(6,'2020_02_04_144802_add_email_to_transactions',5),(7,'2020_02_04_164930_add_status_to_transactions',6),(8,'2020_02_04_165907_add_car_to_transactions',7),(9,'2020_02_05_023916_create_balances_table',8),(10,'2020_02_05_031819_create_returns_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `returns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent_date` date NOT NULL,
  `rent_expired` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `returns`
--

LOCK TABLES `returns` WRITE;
/*!40000 ALTER TABLE `returns` DISABLE KEYS */;
INSERT INTO `returns` VALUES (1,'Lamborghini','Bayu Fahmiaji','2020-02-06','2020-02-08','Lunas','2020-02-10 07:24:53','2020-02-10 07:24:53'),(2,'Honda Jazz','Rudy Sofyan','2020-02-07','2020-02-08','Lunas','2020-02-10 08:49:21','2020-02-10 08:49:21'),(3,'Alphard','Acenx','2020-02-11','2020-02-13','Lunas','2020-02-10 08:52:43','2020-02-10 08:52:43'),(4,'Alphard','Acenx','2020-02-12','2020-02-12','Lunas','2020-02-10 19:33:25','2020-02-10 19:33:25'),(5,'Alphard','Acenx','2020-02-15','2020-02-17','Lunas','2020-02-10 19:34:41','2020-02-10 19:34:41'),(6,'Alphard','Acenx','2020-02-18','2020-02-20','Lunas','2020-02-10 19:35:26','2020-02-10 19:35:26'),(7,'Alphard','Acenx','2020-02-21','2020-02-23','Lunas','2020-02-10 19:35:59','2020-02-10 19:35:59'),(8,'Alphard','Acenx','2020-02-24','2020-02-26','Lunas','2020-02-10 19:36:41','2020-02-10 19:36:41'),(9,'Alphard','Acenx','2020-02-27','2020-02-29','Lunas','2020-02-10 19:37:55','2020-02-10 19:37:55'),(10,'Alphard','Acenx','2020-03-01','2020-03-03','Lunas','2020-02-10 19:38:43','2020-02-10 19:38:43');
/*!40000 ALTER TABLE `returns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent_date` date NOT NULL,
  `rent_expired` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,3,7,'Bayu Fahmiaji',2,'5000000','2020-02-06','2020-02-08','2020-02-04 10:14:30','2020-02-04 20:16:09','bayufahmiaji1@gmail.com',10000000,'Lunas','Lamborghini'),(2,4,8,'Rudy Sofyan',2,'800000','2020-02-07','2020-02-08','2020-02-05 21:47:40','2020-02-05 21:50:46','juliawilma22@gmail.com',1600000,'Lunas','Honda Jazz'),(3,5,5,'Acenx',2,'2000000','2020-02-11','2020-02-13','2020-02-10 08:10:43','2020-02-10 08:35:25','bayufahmiaji1@gmail.com',4000000,'Lunas','Alphard'),(4,5,5,'Acenx',2,'2000000','2020-02-12','2020-02-12','2020-02-11 03:14:30','2020-02-10 19:10:09','acenx@gmail.com',4000000,'Lunas','Alphard'),(5,5,5,'Acenx',2,'2000000','2020-02-15','2020-02-17','2020-02-11 03:14:30','2020-02-10 19:24:24','acenx@gmail.com',4000000,'Lunas','Alphard'),(6,5,5,'Acenx',2,'2000000','2020-02-18','2020-02-20','2020-02-11 03:14:30','2020-02-10 19:25:39','acenx@gmail.com',4000000,'Lunas','Alphard'),(7,5,5,'Acenx',2,'2000000','2020-02-21','2020-02-23','2020-02-11 03:14:30','2020-02-10 19:26:55','acenx@gmail.com',4000000,'Lunas','Alphard'),(8,5,5,'Acenx',2,'2000000','2020-02-24','2020-02-26','2020-02-11 03:14:30','2020-02-10 19:28:09','acenx@gmail.com',4000000,'Lunas','Alphard'),(9,5,5,'Acenx',2,'2000000','2020-02-27','2020-02-29','2020-02-11 03:14:30','2020-02-10 19:31:15','acenx@gmail.com',4000000,'Lunas','Alphard'),(10,5,5,'Acenx',2,'2000000','2020-03-01','2020-03-03','2020-02-11 03:14:30','2020-02-10 19:32:15','acenx@gmail.com',4000000,'Lunas','Alphard');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bayu Fahmiaji','admin','bayufahmiaji1@gmail.com','$2y$10$Qz0r58xaD4HR6YZRmKclwexNU6jWwvi/sdGY2wvdp0.mOa10Gyb5.','kOjHBEGiC0ZM2SJPwrRLteV0rAigXIFP2Eckwtgw47UMDjuRifsrFfDgNleG','2020-01-24 19:05:01','2020-01-24 19:05:01'),(2,'Julia','admin','julia@gmail.com','$2y$10$cQ7a3wB/TxB7hNZJI1G9tepYlaNMOkOMcC25DZvXJOhx1OzsZ2sNe','qvQQfbIcx1Vk6Pa68ZcfZwCjHSRu6mVSoTpjSskux3KtOGSi0jk4SB9VNFUC','2020-01-24 19:11:35','2020-01-24 19:11:35'),(3,'Aldy Hysam','user','aldyaliandi840@gmail.com','$2y$10$EEnTowLCe99XW5m3yU36X.SCM00.JEMKJn4mChsB5n5z2xOwgidA6','2mx3LTPywBUS7YWwgIuwMujLDSiEf3rIYPEZI6C0pu6eIXhUnUabKvuRPwsq','2020-01-24 19:31:51','2020-02-10 06:59:11'),(4,'Rudy Sofyan','user','rudy@gmail.com','$2y$10$jw7kdBaReCXJJejDCVAsHOkhEu4TOOl5u/05QH9u4N1jcoY40If4K','J9XwptyWl7hSUv39mn1fynLvdWjpg1pGrquJWSgA5WygkGZnLx9QsbCrxHQp','2020-02-05 21:44:15','2020-02-05 21:44:15'),(5,'Acenx','user','acenx@gmail.com','$2y$10$tEofuf.7WmGajh/VQE.eduaG/TM0wBtxcG/EKXdaRPsJnHifYNw0e','J1hgOPpEOYf3oVIxdziXmERHQDqJeof0A2bokZ25NDRBZ5OWZqvztM6ruwoI','2020-02-10 07:50:15','2020-02-10 07:50:15'),(6,'Noval','user','noval@gmail.com','$2y$10$oPfd.YMlXbwbEAu7oXDehurLtsfV8CvHoymzfcuWT4RSMtfvM.Cmy',NULL,'2020-02-10 19:53:07','2020-02-10 19:53:07'),(7,'Hafiz Faturrahman','user','hafiz@gmail.com','$2y$10$DPQm6mDN4sXZSFhrHF7sNO0OiqwbEQMAFWet0yMRwwOhyeYvS/swm',NULL,'2020-02-10 19:58:09','2020-02-10 19:58:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-22  7:18:04
