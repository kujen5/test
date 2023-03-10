USE supersqli;

--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `words`
--

LOCK TABLES `words` WRITE;
/*!40000 ALTER TABLE `words` DISABLE KEYS */;
INSERT INTO `words` VALUES (1, 'Hack the Planet!');
INSERT INTO `words` VALUES (2, 'Boot Up or Shut Up!');
/*!40000 ALTER TABLE `words` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f8bfef214dd55919bd72ddee388c9b71`
--

DROP TABLE IF EXISTS `f8bfef214dd55919bd72ddee388c9b71`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `f8bfef214dd55919bd72ddee388c9b71` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f8bfef214dd55919bd72ddee388c9b71`
--

LOCK TABLES `f8bfef214dd55919bd72ddee388c9b71` WRITE;
/*!40000 ALTER TABLE `f8bfef214dd55919bd72ddee388c9b71` DISABLE KEYS */;
INSERT INTO `f8bfef214dd55919bd72ddee388c9b71` VALUES (1, 'securinets{soufflet_joumhouria_x_w_hata_l_croissant_keka_wbara}');
/*!40000 ALTER TABLE `f8bfef214dd55919bd72ddee388c9b71` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


GRANT SELECT on supersqli.* to supersqli@'%' identified by 'supersqli';
FLUSH PRIVILEGES;

-- Dump completed on 2018-05-28 15:24:39
