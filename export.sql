-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: corona
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `block` char(4) DEFAULT NULL,
  `pref` char(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `infection` int(11) DEFAULT NULL,
  `memo` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (34,'北海道','北海道',NULL,NULL,NULL),(35,'東北','青森県',NULL,NULL,NULL),(36,'東北','秋田県',NULL,NULL,NULL),(37,'東北','山形県',NULL,NULL,NULL),(38,'東北','宮城県',NULL,NULL,NULL),(39,'東北','福島県',NULL,NULL,NULL),(40,'関東','東京都',NULL,NULL,NULL),(41,'関東','茨城県',NULL,NULL,NULL),(42,'関東','栃木県',NULL,NULL,NULL),(43,'関東','群馬県',NULL,NULL,NULL),(44,'関東','埼玉県',NULL,NULL,NULL),(45,'関東','千葉県',NULL,NULL,NULL),(46,'関東','神奈川県',NULL,NULL,NULL),(47,'中部','新潟県',NULL,NULL,NULL),(48,'中部','富山県',NULL,NULL,NULL),(49,'中部','石川県',NULL,NULL,NULL),(50,'中部','福井県',NULL,NULL,NULL),(51,'中部','山梨県',NULL,NULL,NULL),(52,'中部','長野県',NULL,NULL,NULL),(53,'中部','岐阜県',NULL,NULL,NULL),(54,'中部','静岡県',NULL,NULL,NULL),(55,'中部','愛知県',NULL,NULL,NULL),(56,'近畿','三重県',NULL,NULL,NULL),(57,'近畿','滋賀県',NULL,NULL,NULL),(58,'近畿','京都府',NULL,NULL,NULL),(59,'近畿','大阪府',NULL,NULL,NULL),(60,'近畿','兵庫県',NULL,NULL,NULL),(61,'近畿','奈良県',NULL,NULL,NULL),(62,'近畿','和歌山県',NULL,NULL,NULL),(63,'中国','岡山県',NULL,NULL,NULL),(64,'中国','広島県',NULL,NULL,NULL),(65,'中国','鳥取県',NULL,NULL,NULL),(66,'中国','島根県',NULL,NULL,NULL),(67,'中国','山口県',NULL,NULL,NULL),(68,'四国','香川県',NULL,NULL,NULL),(69,'四国','徳島県',NULL,NULL,NULL),(70,'四国','愛媛県',NULL,NULL,NULL),(71,'四国','高知県',NULL,NULL,NULL),(72,'九州沖縄','福岡県',NULL,NULL,NULL),(73,'九州沖縄','佐賀県',NULL,NULL,NULL),(74,'九州沖縄','長崎県',NULL,NULL,NULL),(75,'九州沖縄','熊本県',NULL,NULL,NULL),(76,'九州沖縄','大分県',NULL,NULL,NULL),(77,'九州沖縄','宮崎県',NULL,NULL,NULL),(78,'九州沖縄','鹿児島県',NULL,NULL,NULL),(79,'九州沖縄','沖縄県',NULL,NULL,NULL);
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` char(20) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `address` char(30) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `name` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (3,'456',NULL,NULL,NULL,NULL),(6,'d',NULL,NULL,NULL,NULL),(8,'www',NULL,NULL,NULL,NULL),(9,'www',NULL,NULL,NULL,NULL),(10,'www',NULL,NULL,NULL,NULL),(11,'ab',NULL,NULL,NULL,NULL),(12,'nerjkfbis',NULL,NULL,NULL,NULL),(13,'nerjkfbis',NULL,NULL,NULL,NULL),(14,'nerjkfbis',NULL,NULL,NULL,NULL),(15,'nerjkfbis',NULL,NULL,NULL,NULL),(16,'',NULL,NULL,NULL,NULL),(17,'zz',NULL,NULL,NULL,NULL),(18,'zz',NULL,NULL,NULL,NULL),(19,'zz',NULL,NULL,NULL,NULL),(20,'zz',NULL,NULL,NULL,NULL),(21,'zz',NULL,NULL,NULL,NULL),(22,'zz',NULL,NULL,NULL,NULL),(23,'vv',NULL,NULL,NULL,NULL),(24,'vv',NULL,NULL,NULL,NULL),(25,'vv',NULL,NULL,NULL,NULL),(26,'vv',NULL,NULL,NULL,NULL),(27,'',NULL,NULL,NULL,NULL),(28,'',NULL,NULL,NULL,NULL),(29,'',NULL,NULL,NULL,NULL),(30,'',NULL,NULL,NULL,NULL),(32,'rof',NULL,NULL,NULL,NULL),(33,'rof',NULL,NULL,NULL,NULL),(35,'x',NULL,NULL,NULL,NULL),(36,'x',NULL,NULL,NULL,NULL),(37,'x',NULL,NULL,NULL,NULL),(38,'x',NULL,NULL,NULL,NULL),(39,'x',NULL,NULL,NULL,NULL),(40,'j',NULL,NULL,NULL,NULL),(41,'j',NULL,NULL,NULL,NULL),(42,'j',NULL,NULL,NULL,NULL),(43,'j',NULL,NULL,NULL,NULL),(44,'j',NULL,NULL,NULL,NULL),(45,'j',NULL,NULL,NULL,NULL),(46,'j',NULL,NULL,NULL,NULL),(47,'j',NULL,NULL,NULL,NULL),(48,'j',NULL,NULL,NULL,NULL),(49,'j',NULL,NULL,NULL,NULL),(50,'j',NULL,NULL,NULL,NULL),(51,'j',NULL,NULL,NULL,NULL),(52,'j',NULL,NULL,NULL,NULL),(53,'j',NULL,NULL,NULL,NULL),(54,'gg',NULL,NULL,NULL,NULL),(55,'',NULL,NULL,NULL,NULL),(56,'',NULL,NULL,NULL,NULL),(57,'',NULL,NULL,NULL,NULL),(65,'lll',NULL,NULL,NULL,NULL),(70,'dfn',NULL,NULL,NULL,NULL),(71,'az',NULL,NULL,NULL,NULL),(73,'zz',NULL,NULL,NULL,NULL),(85,'aassq',623717,'福井県鯖江市',NULL,NULL),(86,'0410',-14879,'福井県鯖江市',NULL,NULL),(87,'0410',-14879,'福井県鯖江市',NULL,NULL),(88,'0531',-14879,'福井県鯖江市',NULL,NULL),(89,'1111',-14879,'青森',NULL,NULL),(90,'3717',-14879,'山形県',NULL,NULL),(91,'3717',-14879,'神奈川',NULL,NULL),(92,'1234',-14879,'青森県','ultimateprogram2@gmail.com','三代目の世界のナベアツ');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-27 16:43:15
