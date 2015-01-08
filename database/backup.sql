CREATE DATABASE  IF NOT EXISTS `magazinedb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `magazinedb`;
-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: magazinedb
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  `articleName` text NOT NULL,
  `articleBody` longtext NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1: activo',
  `idmagazine` int(11) DEFAULT NULL,
  `review1` int(1) DEFAULT NULL,
  `review2` int(1) DEFAULT NULL,
  PRIMARY KEY (`idarticle`),
  KEY `fk_article_magazine1_idx` (`idmagazine`),
  CONSTRAINT `fk_article_magazine1` FOREIGN KEY (`idmagazine`) REFERENCES `magazine` (`idmagazine`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'lalala','<p>Escribe algo...dsfdsfdsfdsfdsf</p>\n',2,NULL,NULL,NULL),(2,'fgfgf','<p>Escribe algo...gfgfgf</p>\n',2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_has_user`
--

DROP TABLE IF EXISTS `article_has_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_has_user` (
  `article_idarticle` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `idarticle_user` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idarticle_user`,`article_idarticle`,`user_iduser`),
  KEY `fk_article_has_user_user1_idx` (`user_iduser`),
  KEY `fk_article_has_user_article1_idx` (`article_idarticle`),
  CONSTRAINT `fk_article_has_user_article1` FOREIGN KEY (`article_idarticle`) REFERENCES `article` (`idarticle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_has_user_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_has_user`
--

LOCK TABLES `article_has_user` WRITE;
/*!40000 ALTER TABLE `article_has_user` DISABLE KEYS */;
INSERT INTO `article_has_user` VALUES (1,2,1),(2,2,2);
/*!40000 ALTER TABLE `article_has_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogue`
--

DROP TABLE IF EXISTS `catalogue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catalogue` (
  `iduser` int(11) NOT NULL,
  `idarticle` int(11) NOT NULL,
  `idcatalogue` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcatalogue`,`idarticle`,`iduser`),
  KEY `fk_user_has_article_article1_idx` (`idarticle`),
  KEY `fk_user_has_article_user1_idx` (`iduser`),
  CONSTRAINT `fk_user_has_article_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_has_article_article1` FOREIGN KEY (`idarticle`) REFERENCES `article` (`idarticle`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogue`
--

LOCK TABLES `catalogue` WRITE;
/*!40000 ALTER TABLE `catalogue` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discipline`
--

DROP TABLE IF EXISTS `discipline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discipline` (
  `iddiscipline` int(11) NOT NULL AUTO_INCREMENT,
  `disciplineName` varchar(100) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`iddiscipline`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discipline`
--

LOCK TABLES `discipline` WRITE;
/*!40000 ALTER TABLE `discipline` DISABLE KEYS */;
INSERT INTO `discipline` VALUES (1,'Disciplina1',NULL),(2,'Disciplina2',NULL),(3,'Disciplina3',NULL);
/*!40000 ALTER TABLE `discipline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `magazine`
--

DROP TABLE IF EXISTS `magazine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `magazine` (
  `idmagazine` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(45) DEFAULT NULL,
  `magazineNumber` varchar(45) DEFAULT NULL,
  `mounth` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmagazine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magazine`
--

LOCK TABLES `magazine` WRITE;
/*!40000 ALTER TABLE `magazine` DISABLE KEYS */;
/*!40000 ALTER TABLE `magazine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialism`
--

DROP TABLE IF EXISTS `specialism`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialism` (
  `idspecialism` int(11) NOT NULL AUTO_INCREMENT,
  `specialismName` varchar(100) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idspecialism`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialism`
--

LOCK TABLES `specialism` WRITE;
/*!40000 ALTER TABLE `specialism` DISABLE KEYS */;
INSERT INTO `specialism` VALUES (1,'Especialidad1',NULL),(2,'Especialidad2',NULL),(3,'Especialidad3',NULL);
/*!40000 ALTER TABLE `specialism` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subDiscipline`
--

DROP TABLE IF EXISTS `subDiscipline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subDiscipline` (
  `idsubDiscipline` int(11) NOT NULL AUTO_INCREMENT,
  `subdisciplineName` varchar(100) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idsubDiscipline`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subDiscipline`
--

LOCK TABLES `subDiscipline` WRITE;
/*!40000 ALTER TABLE `subDiscipline` DISABLE KEYS */;
INSERT INTO `subDiscipline` VALUES (1,'Subdisciplina1',NULL),(2,'Subdisciplina2',NULL),(3,'Subdisciplina3',NULL);
/*!40000 ALTER TABLE `subDiscipline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `institution` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `academicGrade` varchar(45) NOT NULL,
  `areaInterest` varchar(45) NOT NULL,
  `sniLevel` varchar(1) NOT NULL,
  `lastFiveArticles` longtext NOT NULL,
  `lastFiveResearch` longtext NOT NULL,
  `moreInformation` longtext,
  `cv` varchar(100) NOT NULL,
  `iddiscipline` int(11) NOT NULL,
  `idspecialism` int(11) NOT NULL,
  `idsubDiscipline` int(11) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` int(1) DEFAULT '1' COMMENT '1 : es usuario activo',
  `rol` int(1) DEFAULT '1' COMMENT '1 : autor',
  PRIMARY KEY (`iduser`),
  KEY `fk_user_discipline_idx` (`iddiscipline`),
  KEY `fk_user_specialism1_idx` (`idspecialism`),
  KEY `fk_user_subDiscipline1_idx` (`idsubDiscipline`),
  CONSTRAINT `fk_user_discipline` FOREIGN KEY (`iddiscipline`) REFERENCES `discipline` (`iddiscipline`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_specialism1` FOREIGN KEY (`idspecialism`) REFERENCES `specialism` (`idspecialism`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_subDiscipline1` FOREIGN KEY (`idsubDiscipline`) REFERENCES `subDiscipline` (`idsubDiscipline`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'josh','diaz','56565656','uam','joshi.d.h.yd@gmail.com','lalala','dasdaeewq','3','dsadsad','sadsadas','sadas','',1,1,2,'JDWED14847','1234',1,3),(2,'julio','adadas','545454','uami','brass@gmail.com','feder','ks','1','super ks','feder','','',1,1,1,'JATHU15427','1234',1,1);
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

-- Dump completed on 2015-01-08 17:13:44
