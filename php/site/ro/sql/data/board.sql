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
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board` (
  `board_id` int(11) NOT NULL AUTO_INCREMENT,
  `board_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `board_detail` text CHARACTER SET latin1 NOT NULL,
  `creater` varchar(255) CHARACTER SET latin1 NOT NULL,
  `create_at` int(11) NOT NULL,
  PRIMARY KEY (`board_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board`
--

LOCK TABLES `board` WRITE;
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` VALUES (11,'ãƒ›ãƒ¼ãƒ«ãƒ‹ãƒ¨å†å»ºè¨ˆç”»','ã‚¿ã‚¤ãƒˆãƒ«é€šã‚Šã§ã™ã€‚\r\nç¾çŠ¶ã¡ã‚‡ã£ã¨å®™ã¶ã‚‰ã‚Šã‚“ã«ãªã£ã¦ã‚‹ã®ã§ã€ã¾ãšã¿ãªã•ã‚“ã®æŒ™ã’ãŸã„ã‚­ãƒ£ãƒ©ã®è·ã¨ãƒ¬ãƒ™ãƒ«ã‚’ï¼µï¼°ã—ã¦ãã ã•ã„ã€‚\r\nãŠãŠã‚ˆãï¼‘ï¼‘ï¼å‰å¾Œã‹ã‚‰ã®ã‚¹ã‚¿ãƒ¼ãƒˆã‚’æƒ³å®šã—ã¦ã„ã¾ã™ã€‚\r\næ™‚é–“ã‚‚ç›¸è«‡ã—ãŸã„ã¨ã“ã‚ã§ã™ãŒã€å•é¡Œã®å¤šã„ç‹©å ´ã§ã‚‚ã‚ã‚Šã¾ã™ã®ã§ï¾’ï½²ï¾ã®æ™‚é–“ã¯ãªã‚‹ã¹ããšã‚‰ã—ãŸã€ï¼’ï¼“æ™‚ä»¥é™ãªã®ã‹ãªãƒ¼ã¨æ€ã£ã¦ã„ã¾ã™ã€‚\r\nè³ªå•ç–‘å•ãªã©ã‚‚ã„ã£ã¦ã‚‚ã‚‰ãˆã‚‹ã¨ã‚ã‚ŠãŒãŸã„ã§ã™ã€‚','ã‚€ã’ã‚“',1333291678);
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-03 20:53:09
