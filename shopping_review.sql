-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: shopping
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review` (
  `no` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `writer` varchar(10) NOT NULL,
  `writedate` timestamp NULL DEFAULT NULL,
  `contents` text,
  `photo1` varchar(60) DEFAULT NULL,
  `kinds` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (19,'가디건 너무 좋아욤!!!!','admin','2023-01-02 17:31:26','굿굿','/shopping/img/detail_gadi3-3.jpg','가디건'),(20,'최고최고','admin','2023-01-02 17:31:41','ㄴㅇㄹㄴㅇㄹㄴㅇㄹ','/shopping/img/','맨투맨/후드'),(21,'최고에요','admin','2023-01-02 17:31:50','ㄴㅇㄹㄴㅇㄹㅇㄴㄹ','/shopping/img/','패딩/점퍼'),(22,'ㅇㅇ.....','admin','2023-01-02 17:32:56','좋아요','/shopping/img/','맨투맨/후드'),(23,'옷이 날개다','admin','2023-01-02 17:33:27','ㅇㅈ?','/shopping/img/','셔츠'),(24,'쿠폰주세요!!!!','admin','2023-01-02 17:33:56','쿠폰쿠폰','/shopping/img/','가디건'),(25,'후기','admin','2023-01-02 17:34:20','아아아아아아아아앙','/shopping/img/','패딩/점퍼'),(26,'후기입니다','admin','2023-01-02 17:34:40','ㅇㅀ','/shopping/img/','니트'),(27,'너무좋아요','admin','2023-01-02 17:34:59','ㅜㅜ','/shopping/img/','코트'),(28,'또살래요','admin','2023-01-02 17:35:46','ㅇㅇ','/shopping/img/','니트'),(29,'이뻐요','admin','2023-01-02 17:36:32','ㄴㅇㅁㄹㄴㅇㄹ','/shopping/img/','카고/조거'),(30,'이쁘네요','admin','2023-01-02 17:36:50','ㅎㅎㅎㅎㅎ','/shopping/img/','맨투맨/후드'),(31,'트레이닝복짱','admin','2023-01-02 17:37:43','ㅋㅋㅋㅋㅋㅋㅋㅋ','/shopping/img/','트레이닝'),(32,'심플이즈베스트','admin','2023-01-02 17:38:15','','/shopping/img/','베이직'),(33,'카고좋아','admin','2023-01-02 17:39:15','1ㅇㄹ','/shopping/img/','카고/조거'),(34,'편하고좋아요','admin','2023-01-02 17:41:00','ㅇㅇ','/shopping/img/','트레이닝'),(35,'니트이뻐요','admin','2023-01-02 17:41:37','ㅋㅋㅋㅋㅋㅋㅋㅋ','/shopping/img/','니트'),(36,'가디건날씨!','admin','2023-01-02 17:42:14','ㅁㅇㄹㅇㅁㄴㄹㄴㅇㄹ','/shopping/img/','가디건'),(37,'니트짱','admin','2023-01-02 17:43:34','','/shopping/img/','니트'),(38,'셔츠이뻐요','admin','2023-01-02 17:47:19','','/shopping/img/','셔츠'),(39,'조거이뻐요','admin','2023-01-02 17:48:15','','/shopping/img/','카고/조거'),(40,'가디건핏이쁨 ㅠㅠ','admin','2023-01-02 17:54:24','','/shopping/img/','가디건'),(41,'패딩만입을거에요','admin','2023-01-02 17:55:05','','/shopping/img/','패딩/점퍼'),(43,'좋아용','admin','2023-01-02 18:01:01','좋아좋아','/shopping/img/',''),(44,'카고가짱','admin','2023-01-02 19:21:05','','/shopping/img/','카고/조거');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-21 17:27:53
