-- MySQL dump 10.13  Distrib 5.5.20, for Linux (x86_64)
--
-- Host: localhost    Database: ro
-- ------------------------------------------------------
-- Server version	5.5.20-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `serial_id` int(11) NOT NULL AUTO_INCREMENT,
  `board_id` int(11) NOT NULL,
  `post_at` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`serial_id`,`board_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (12,11,1333291845,'ã‚€ã’ã‚“','ï¼‘ï¼‘ï¼•ãƒ¡ã‚«ã€€ï¼‘ï¼‘ï¼ä¿®ç¾…'),(13,11,1333291877,'ã˜ã‚ƒã¬','150RKã§å¤–é‡£ã‚Šã‹ã€114RGã§ä½•ã‹'),(14,11,1333292062,'ã•ã¨ãºã‚“','AB106 / RK(Agi)102 / ãƒ¡ã‚«100 / çš¿113 / AB(ME)98'),(15,11,1333292858,'ã¿ã©ãªã•ã‚“','114ä¿®ç¾…/96HPï¼ˆã‚¯ã‚¨ãªã—ï¼‰ã™ã‚‰ã£ã—ã‚…çš¿ä½œã‚‹ãŠ'),(16,11,1333293597,'ãƒ­ãƒ‰','112é­š 99AB 102çš¿ å¾Œé©å½“'),(17,11,1333293969,'è—å½±','120ABã€€102çš¿ã€€ãã‚‰ã„ã‹ãªãï¼Ÿ'),(18,11,1333294005,'è—å½±','ãŠæ¯ã•ã‚“ã®é­šãŒç¾åœ¨104ã§ï½žã™ï¼žï¼œ'),(19,11,1333329171,'ã¾ãƒ¼ãã‚“','RK124/ä¿®ç¾…108 ã§ã™ã€‚'),(20,11,1333450935,'kaze','ï¼¼ãƒ–ãƒ©ã‚®ï¼'),(21,11,1333451260,'å‘ã—ã„ã¾ã£ã¡ã‚…','å¤–é‡£ã‚Šå‰æã§108ä¿®ç¾…111æ°‘99ãƒ¡ã‚«111RKã‹ãªï¼Ÿ');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-03 20:52:56
