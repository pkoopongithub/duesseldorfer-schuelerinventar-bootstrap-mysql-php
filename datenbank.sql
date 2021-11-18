

DROP TABLE IF EXISTS `anmeldung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anmeldung` (
  `sessionID` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(50) DEFAULT NULL,
  `userID` int(11) DEFAULT '0',
  `ip` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`sessionID`),
  KEY `sessionID` (`sessionID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anmeldung`
--

LOCK TABLES `anmeldung` WRITE;
/*!40000 ALTER TABLE `anmeldung` DISABLE KEYS */;
INSERT INTO `anmeldung` VALUES (4,'455f09524f90ee5aac1f673d3631e5b0',1,NULL,NULL,NULL,NULL),(11,'0c983e0028d5d391a15bfa22ae6c124c',1,NULL,NULL,NULL,NULL),(12,'af729f9a4890b0571ffdf7614491ab6f',1,NULL,NULL,NULL,NULL),(13,'bb44822c508bf3ff5af43dfaa68870a5',1,NULL,NULL,NULL,NULL),(15,'42f4f0af5ddb18b197a29b5c902aa777',1,NULL,NULL,NULL,NULL),(16,'2094d154a0a362787b1ced2e5180ee6d',1,NULL,NULL,NULL,NULL),(24,'729dee8041522b3d9474d80eb26211bc',2,NULL,NULL,NULL,NULL),(35,'df1dc0c95f6caf8a57b90b31e8c8290a',2,NULL,NULL,NULL,NULL),(40,'7ac5cec34d51df15dfdc32fd955fa0ac',2,NULL,NULL,NULL,NULL),(42,'e1e97d68920cf2744de4712874a44ae6',2,NULL,NULL,NULL,NULL),(44,'d0d1c70610d95b17f9655b7b4b07edb3',2,NULL,NULL,NULL,NULL),(49,'56c55b85b17d4bde48c06d1b9e9a0c2b',2,NULL,NULL,NULL,NULL),(53,'2d29db1ce7da9169e52b94bf2ac74a0c',2,NULL,NULL,NULL,NULL),(65,'91fe10b362bd37a8090cd6e68afe49f1',2,NULL,NULL,NULL,NULL),(63,'a232ff4ed4fc47c359f5af0ce961eff4',2,NULL,NULL,NULL,NULL),(66,'1923dc5ce72cbd596f63398bf5b3dfb7',2,NULL,NULL,NULL,NULL),(67,'d797014c5ce544f5b3bb34c5ebce390d',2,NULL,NULL,NULL,NULL),(76,'828a9ce171ce900cfbe60fdfe4286eef',2,NULL,NULL,NULL,NULL),(70,'3d74817f29b51d126882384e67897120',2,NULL,NULL,NULL,NULL),(81,'fd25f54bdc77e18d4f6bd57695e6027d',2,NULL,NULL,NULL,NULL),(80,'8d068980dc0e44cc03854e9eea2ed9f6',2,NULL,NULL,NULL,NULL),(82,'6b794230b937fee6bac20c2ecc17ec40',2,NULL,NULL,NULL,NULL),(83,'a70704dba8593a1d977b5ae93a71630d',2,NULL,NULL,NULL,NULL),(86,'12321e654258ded09209204e6134b6dc',2,NULL,NULL,NULL,NULL),(85,'d659e6fe353ebf0f2b452443efcf81a0',2,NULL,NULL,NULL,NULL),(87,'a4f908bbf6ca26edbb8bb63bd16acdbb',2,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `anmeldung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gruppe`
--

DROP TABLE IF EXISTS `gruppe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gruppe` (
  `gruppeID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`gruppeID`),
  KEY `gruppeID` (`gruppeID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gruppe`
--

LOCK TABLES `gruppe` WRITE;
/*!40000 ALTER TABLE `gruppe` DISABLE KEYS */;
INSERT INTO `gruppe` VALUES (1,1,'gruppe1',NULL,NULL,NULL,NULL),(2,0,'gruppe2',NULL,NULL,NULL,NULL),(3,0,'gruppe',NULL,NULL,NULL,NULL),(4,1,'gruppe4',NULL,NULL,NULL,NULL),(5,1,'gruppe4',NULL,NULL,NULL,NULL),(6,1,'test11.10.18',NULL,NULL,NULL,NULL),(7,1,'12.10.18',NULL,NULL,NULL,NULL),(8,2,'Gastprofile',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `gruppe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'Zuverlaessigkeit'),(2,'Arbeitstempo'),(3,'Arbeitsplanung'),(4,'Organisationsfaehigkeit'),(5,'Geschicklichkeit'),(6,'Ordnung'),(7,'Sorgfalt'),(8,'Kreativitaet'),(9,'Problemloesefaehigkeit'),(10,'Abstraktionsvermoegen'),(11,'Selbststaendigkeit'),(12,'Belastbarkeit'),(13,'Konzentrationsfaehigkeit'),(14,'Verantworttungsbewusstsein'),(15,'Eigeninitiative'),(16,'Leistungsbereitschaft'),(17,'Auffassungsgabe'),(18,'Merkfaehigkeit'),(19,'Motivationsfaehigkeit'),(20,'Reflektionsfaehigkeit'),(21,'Teamfaehigkeit'),(22,'Hilfsbereischaft'),(23,'Kontaktfaehigkeit'),(24,'Respektvoller Umgang'),(25,'Kommunikationsfaehigkeit'),(26,'Einfuehlungsvermoegen'),(27,'Konfliktfaehigeit'),(28,'Kritikfaehigkeit'),(29,'Schreiben'),(30,'Lesen'),(31,'Mathematik'),(32,'Naturwissenschaften'),(33,'Fremdsprachen'),(34,'Praesentationsfaehigkeit'),(35,'PC-Kenntnisse'),(36,'Faecheruebergreifendes enken');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kompetenz`
--

DROP TABLE IF EXISTS `kompetenz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kompetenz` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kompetenz`
--

LOCK TABLES `kompetenz` WRITE;
/*!40000 ALTER TABLE `kompetenz` DISABLE KEYS */;
INSERT INTO `kompetenz` VALUES (1,'Arbeitsverhalten'),(2,'Lernverhalten'),(3,'Sozialverhalten'),(4,'Fachkompetenz'),(5,'Personale Kompetenz'),(6,'Methodenkompetenz');
/*!40000 ALTER TABLE `kompetenz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `normFEfs`
--

DROP TABLE IF EXISTS `normFEfs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `normFEfs` (
  `nornFEfsID` int(11) NOT NULL AUTO_INCREMENT,
  `kompetenzID` int(11) DEFAULT '0',
  `p1` float DEFAULT '0',
  `p2` float DEFAULT '0',
  `p3` float DEFAULT '0',
  `p4` float DEFAULT '0',
  `p5` float DEFAULT '0',
  `mi` float DEFAULT '0',
  `sw` float DEFAULT '0',
  PRIMARY KEY (`nornFEfsID`),
  KEY `kompetenzID` (`kompetenzID`),
  KEY `nornFEfsID` (`nornFEfsID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `normFEfs`
--

LOCK TABLES `normFEfs` WRITE;
/*!40000 ALTER TABLE `normFEfs` DISABLE KEYS */;
INSERT INTO `normFEfs` VALUES (1,1,15.3,19.79,24.28,28.77,33.26,24.28,4.49),(2,2,14.63,18.94,23.25,27.56,31.87,23.25,4.31),(3,3,14.62,17.81,21,24.19,27.38,21,3.19),(4,4,15,15.55,16.1,16.65,17.2,16.1,0.55),(5,5,18.44,22.61,26.78,30.95,35.12,26.78,4.17),(6,6,9.79,13.97,18.15,22.33,26.51,18.15,4.18);
/*!40000 ALTER TABLE `normFEfs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `normFEhs`
--

DROP TABLE IF EXISTS `normFEhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `normFEhs` (
  `nornFEhsID` int(11) NOT NULL AUTO_INCREMENT,
  `kompetenzID` int(11) DEFAULT '0',
  `p1` float DEFAULT '0',
  `p2` float DEFAULT '0',
  `p3` float DEFAULT '0',
  `p4` float DEFAULT '0',
  `p5` float DEFAULT '0',
  `mi` float DEFAULT '0',
  `sw` float DEFAULT '0',
  PRIMARY KEY (`nornFEhsID`),
  KEY `kompetenzID` (`kompetenzID`),
  KEY `nornFEhsID` (`nornFEhsID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `normFEhs`
--

LOCK TABLES `normFEhs` WRITE;
/*!40000 ALTER TABLE `normFEhs` DISABLE KEYS */;
INSERT INTO `normFEhs` VALUES (1,1,12.66,18.16,23.66,29.16,34.66,23.66,5.5),(2,2,13.33,18.42,23.51,28.6,33.69,23.51,5.09),(3,3,10.75,15.41,20.07,24.73,29.39,20.07,4.66),(4,4,14.22,15.3,16.38,17.46,18.54,16.38,1.08),(5,5,14.12,20.21,26.3,32.39,38.48,26.3,6.09),(6,6,10.53,14.51,18.49,22.47,26.45,18.49,3.98);
/*!40000 ALTER TABLE `normFEhs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `normSEfs`
--

DROP TABLE IF EXISTS `normSEfs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `normSEfs` (
  `nornSEfsID` int(11) NOT NULL AUTO_INCREMENT,
  `kompetenzID` int(11) DEFAULT '0',
  `p1` float DEFAULT '0',
  `p2` float DEFAULT '0',
  `p3` float DEFAULT '0',
  `p4` float DEFAULT '0',
  `p5` float DEFAULT '0',
  `mi` float DEFAULT '0',
  `sw` float DEFAULT '0',
  PRIMARY KEY (`nornSEfsID`),
  KEY `kompetenzID` (`kompetenzID`),
  KEY `nornSEfsID` (`nornSEfsID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `normSEfs`
--

LOCK TABLES `normSEfs` WRITE;
/*!40000 ALTER TABLE `normSEfs` DISABLE KEYS */;
INSERT INTO `normSEfs` VALUES (1,1,20.77,25.3,29.83,34.36,38.89,29.83,4.53),(2,2,19.01,23.38,27.75,32.12,36.49,27.75,4.37),(3,3,16.89,20.57,24.25,27.93,31.61,24.25,3.68),(4,4,14.29,17.86,21.43,25,28.57,21.43,3.57),(5,5,23.5,28.14,32.78,37.42,42.06,32.78,4.64),(6,6,14.41,18.13,21.85,25.57,29.29,21.85,3.72);
/*!40000 ALTER TABLE `normSEfs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `normSEhs`
--

DROP TABLE IF EXISTS `normSEhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `normSEhs` (
  `nornSEhsID` int(11) NOT NULL AUTO_INCREMENT,
  `kompetenzID` int(11) DEFAULT '0',
  `p1` float DEFAULT '0',
  `p2` float DEFAULT '0',
  `p3` float DEFAULT '0',
  `p4` float DEFAULT '0',
  `p5` float DEFAULT '0',
  `mi` float DEFAULT '0',
  `sw` float DEFAULT '0',
  PRIMARY KEY (`nornSEhsID`),
  KEY `kompetenzID` (`kompetenzID`),
  KEY `nornSEhsID` (`nornSEhsID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `normSEhs`
--

LOCK TABLES `normSEhs` WRITE;
/*!40000 ALTER TABLE `normSEhs` DISABLE KEYS */;
INSERT INTO `normSEhs` VALUES (1,1,13.98,19.26,24.54,29.82,35.1,24.54,5.28),(2,2,14.08,19.15,24.22,29.29,34.36,24.22,5.07),(3,3,10.01,15.21,20.41,25.61,30.81,20.41,5.2),(4,4,11.19,14.85,18.51,22.17,25.83,18.51,3.66),(5,5,15.09,21.12,27.15,33.18,39.21,27.15,6.03),(6,6,11.3,15.19,19.08,22.97,26.86,19.08,3.89);
/*!40000 ALTER TABLE `normSEhs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil`
--

DROP TABLE IF EXISTS `profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil` (
  `profilID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT '0',
  `gruppeID` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT '0',
  `item1` int(11) DEFAULT '0',
  `item2` int(11) DEFAULT '0',
  `item3` int(11) DEFAULT '0',
  `item4` int(11) DEFAULT '0',
  `item5` int(11) DEFAULT '0',
  `item6` int(11) DEFAULT '0',
  `item7` int(11) DEFAULT '0',
  `item8` int(11) DEFAULT '0',
  `item9` int(11) DEFAULT '0',
  `item10` int(11) DEFAULT '0',
  `item11` int(11) DEFAULT '0',
  `item12` int(11) DEFAULT '0',
  `item13` int(11) DEFAULT '0',
  `item14` int(11) DEFAULT '0',
  `item15` int(11) DEFAULT '0',
  `item16` int(11) DEFAULT '0',
  `item17` int(11) DEFAULT '0',
  `item18` int(11) DEFAULT '0',
  `item19` int(11) DEFAULT '0',
  `item20` int(11) DEFAULT '0',
  `item21` int(11) DEFAULT '0',
  `item22` int(11) DEFAULT '0',
  `item23` int(11) DEFAULT '0',
  `item24` int(11) DEFAULT '0',
  `item25` int(11) DEFAULT '0',
  `item26` int(11) DEFAULT '0',
  `item27` int(11) DEFAULT '0',
  `item28` int(11) DEFAULT '0',
  `item29` int(11) DEFAULT '0',
  `item30` int(11) DEFAULT '0',
  `item31` int(11) DEFAULT '0',
  `item32` int(11) DEFAULT '0',
  `item33` int(11) DEFAULT '0',
  `item34` int(11) DEFAULT '0',
  `item35` int(11) DEFAULT '0',
  `item36` int(11) DEFAULT '0',
  `kompetenz1` int(11) DEFAULT '0',
  `kompetenz2` int(11) DEFAULT '0',
  `kompetenz3` int(11) DEFAULT '0',
  `kompetenz4` int(11) DEFAULT '0',
  `kompetenz5` int(11) DEFAULT '0',
  `kompetenz6` int(11) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `feitem1` int(11) NOT NULL,
  `feitem2` int(11) NOT NULL,
  `feitem3` int(11) NOT NULL,
  `feitem4` int(11) NOT NULL,
  `feitem5` int(11) NOT NULL,
  `feitem6` int(11) NOT NULL,
  `feitem7` int(11) NOT NULL,
  `feitem8` int(11) NOT NULL,
  `feitem9` int(11) NOT NULL,
  `feitem10` int(11) NOT NULL,
  `feitem11` int(11) NOT NULL,
  `feitem12` int(11) NOT NULL,
  `feitem13` int(11) NOT NULL,
  `feitem14` int(11) NOT NULL,
  `feitem15` int(11) NOT NULL,
  `feitem16` int(11) NOT NULL,
  `feitem17` int(11) NOT NULL,
  `feitem18` int(11) NOT NULL,
  `feitem19` int(11) NOT NULL,
  `feitem20` int(11) NOT NULL,
  `feitem21` int(11) NOT NULL,
  `feitem22` int(11) NOT NULL,
  `feitem23` int(11) NOT NULL,
  `feitem24` int(11) NOT NULL,
  `feitem25` int(11) NOT NULL,
  `feitem26` int(11) NOT NULL,
  `feitem27` int(11) NOT NULL,
  `feitem28` int(11) NOT NULL,
  `feitem29` int(11) NOT NULL,
  `feitem30` int(11) NOT NULL,
  `feitem31` int(11) NOT NULL,
  `feitem32` int(11) NOT NULL,
  `feitem33` int(11) NOT NULL,
  `feitem34` int(11) NOT NULL,
  `feitem35` int(11) NOT NULL,
  `feitem36` int(11) NOT NULL,
  `fekompetenz1` int(11) NOT NULL,
  `fekompetenz2` int(11) NOT NULL,
  `fekompetenz3` int(11) NOT NULL,
  `fekompetenz4` int(11) NOT NULL,
  `fekompetenz5` int(11) NOT NULL,
  `fekompetenz6` int(11) NOT NULL,
  PRIMARY KEY (`profilID`),
  KEY `gruppeID` (`gruppeID`),
  KEY `profilID` (`profilID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil`
--

LOCK TABLES `profil` WRITE;
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` VALUES (11,2,8,'Gastprofil04',4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,0,0,0,0,0,0),(12,2,8,'Gastprofil05',3,2,2,2,2,3,2,2,2,2,2,3,2,2,2,2,3,2,2,2,3,2,2,2,3,2,2,2,3,2,3,3,3,3,3,3,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,1,2,2,1,2,1,2,2,2,1,2,2,1,2,2,2,2,1,2,2,1,2,2,1,2,2,2,1,2,2,2,1,2,2,2,2,0,0,0,0,0,0),(10,2,8,'Gastprofil03',3,3,3,3,3,4,4,4,4,3,3,3,2,4,3,3,4,3,3,3,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,3,3,3,3,3,3,4,4,4,4,3,3,2,4,3,3,4,3,3,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,0,0,0,0,0,0),(8,2,8,'Gastprofil01',2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0),(9,2,8,'Gastprofil02',4,3,3,3,3,3,2,4,2,2,2,2,2,2,2,2,2,2,4,2,4,4,4,4,4,4,3,2,4,4,4,4,4,4,4,4,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,3,3,3,3,3,3,3,3,3,3,3,3,2,3,3,2,2,2,2,2,4,4,4,4,4,4,4,4,3,3,3,3,3,3,3,3,0,0,0,0,0,0),(13,2,8,'Gastprofil06',2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0),(14,2,8,'Gastprofil07',2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0),(15,2,8,'Gastprofil08',2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0),(16,2,8,'Gastprofil09',2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0),(17,2,8,'Gastprofil10',2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0),(18,2,8,'Gastprofil11',2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,0,0,0,0,0,0);
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `institution` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `vorname` varchar(50) DEFAULT NULL,
  `strasse` varchar(50) DEFAULT NULL,
  `plz` varchar(50) DEFAULT NULL,
  `ort` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'paul','koop',1),(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'gast','gast',2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-14  9:39:06
