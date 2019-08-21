-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: movies
-- ------------------------------------------------------
-- Server version	10.1.40-MariaDB-0ubuntu0.18.04.1

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
-- Table structure for table `film_actor`
--

DROP TABLE IF EXISTS `film_actor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film_actor` (
  `film_id` int(11) NOT NULL DEFAULT '0',
  `film_title` varchar(50) NOT NULL DEFAULT '',
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `job` enum('actor','director','scene writer') NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film_actor`
--

LOCK TABLES `film_actor` WRITE;
/*!40000 ALTER TABLE `film_actor` DISABLE KEYS */;
INSERT INTO `film_actor` VALUES (1,'Pulp fiction',1,'Quentin Tarantino','actor',1),(1,'Pulp fiction',2,'Quentin Tarantino','director',1),(3,'Bad santa',3,'Billy Bob Thornton','actor',2),(4,'Bad santa 2',4,'Billy Bob Thornton','actor',2),(2,'Police academy',5,'Bubba Smith','actor',3),(5,'Police academy 2',6,'Bubba Smith','actor',3),(6,'Police academy 3',7,'Bubba Smith','actor',3),(7,'Police academy 4',8,'Bubba Smith','actor',3),(8,'Police academy 5',9,'Bubba Smith','actor',3),(9,'Police academy 6',10,'Bubba Smith','actor',3),(10,'Police academy 7',11,'Bubba Smith','actor',3),(3,'Bad santa',12,'Terry Zwigoff','director',4),(4,'Bad santa 2',13,'Terry Zwigoff','director',4);
/*!40000 ALTER TABLE `film_actor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film_series`
--

DROP TABLE IF EXISTS `film_series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film_series` (
  `series_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL DEFAULT '0',
  `film_title` varchar(50) NOT NULL DEFAULT '',
  `series_name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film_series`
--

LOCK TABLES `film_series` WRITE;
/*!40000 ALTER TABLE `film_series` DISABLE KEYS */;
INSERT INTO `film_series` VALUES (1,2,'Police academy','Police academy'),(2,3,'Bad santa','Bad santa'),(2,4,'Bad santa 2','Bad santa'),(1,5,'Police academy 2','Police academy'),(1,6,'Police academy 3','Police academy'),(1,7,'Police academy 4','Police academy'),(1,8,'Police academy 5','Police academy'),(1,9,'Police academy 6','Police academy'),(1,10,'Police academy 7','Police academy');
/*!40000 ALTER TABLE `film_series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_title` varchar(50) NOT NULL DEFAULT '',
  `series_id` int(11) NOT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'Pulp fiction',0),(2,'Police academy',1),(3,'Bad santa',2),(4,'Bad santa 2',2),(5,'Police academy 2',1),(6,'Police academy 3',1),(7,'Police academy 4',1),(8,'Police academy 5',1),(9,'Police academy 6',1),(10,'Police academy 7',1);
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `job` enum('actor','director','scene writer') NOT NULL,
  `persona_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `film_id` (`film_id`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Quentin Tarantino','actor',1,1),(2,'Quentin Tarantino','director',1,1),(3,'Billy Bob Thornton','actor',2,3),(4,'Billy Bob Thornton','actor',2,4),(5,'Bubba Smith','actor',3,2),(6,'Bubba Smith','actor',3,5),(7,'Bubba Smith','actor',3,6),(8,'Bubba Smith','actor',3,7),(9,'Bubba Smith','actor',3,8),(10,'Bubba Smith','actor',3,9),(11,'Bubba Smith','actor',3,10),(12,'Terry Zwigoff','director',4,3),(13,'Terry Zwigoff','director',4,4);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `series` (
  `series_id` int(11) NOT NULL AUTO_INCREMENT,
  `series_name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`series_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

LOCK TABLES `series` WRITE;
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (1,'Police academy'),(2,'Bad santa');
/*!40000 ALTER TABLE `series` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-17 18:51:22
