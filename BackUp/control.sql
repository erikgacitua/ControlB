-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: control
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

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
-- Table structure for table `registrosB`
--

DROP TABLE IF EXISTS `registrosB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrosB` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `rutR` varchar(12) DEFAULT NULL,
  `nombresR` varchar(25) DEFAULT NULL,
  `apellidosR` varchar(25) DEFAULT NULL,
  `entradaR` datetime DEFAULT NULL,
  `salidaR` datetime DEFAULT NULL,
  `estadoR` int(11) DEFAULT '0',
  `imageR` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrosB`
--

LOCK TABLES `registrosB` WRITE;
/*!40000 ALTER TABLE `registrosB` DISABLE KEYS */;
INSERT INTO `registrosB` VALUES (1,'16.381.725-k','Erik Felipe','Gacitua Arenas','2017-11-08 16:11:44','0000-00-00 00:00:00',1,NULL),(2,'22.222.222-2','Felipe','Gacitua Arenas','2017-11-08 16:11:17','0000-00-00 00:00:00',1,NULL);
/*!40000 ALTER TABLE `registrosB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarioB`
--

DROP TABLE IF EXISTS `usuarioB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarioB` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombresB` varchar(25) DEFAULT NULL,
  `apellidosB` varchar(25) DEFAULT NULL,
  `rutB` varchar(12) DEFAULT NULL,
  `edadB` int(11) DEFAULT NULL,
  `direccionB` varchar(50) DEFAULT NULL,
  `companiaB` varchar(50) DEFAULT NULL,
  `cuartelB` varchar(25) DEFAULT NULL,
  `estadoB` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarioB`
--

LOCK TABLES `usuarioB` WRITE;
/*!40000 ALTER TABLE `usuarioB` DISABLE KEYS */;
INSERT INTO `usuarioB` VALUES (1,'Erik Felipe','Gacitua Arenas','16.381.725-k',31,'pj. fosfato #1138','5ta','1',1),(2,'Felipe','Gacitua Arenas','22.222.222-2',32,'jj','kk','1',1),(3,'test','test','33.333.333-3',23,'jjhj','hhhhjjh','1',1),(4,'test2','tes2','44.444.444-4',54,'edf','defdefd','1',1),(5,'oo','oo','55.555.555-5',89,'jjiui','ioio','1',1);
/*!40000 ALTER TABLE `usuarioB` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-08 17:29:55
