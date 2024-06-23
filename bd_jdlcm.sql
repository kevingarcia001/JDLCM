-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_jdlcm
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos` (
  `idAlumno` int NOT NULL AUTO_INCREMENT,
  `PNombre` varchar(45) DEFAULT NULL,
  `SNombre` varchar(45) DEFAULT NULL,
  `PApellido` varchar(45) DEFAULT NULL,
  `SApellido` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Tutor_idTutor` int NOT NULL,
  `Sexo_idSexo` int NOT NULL,
  PRIMARY KEY (`idAlumno`),
  UNIQUE KEY `idAlumno_UNIQUE` (`idAlumno`),
  KEY `fk_Alumnos_Tutor1_idx` (`Tutor_idTutor`),
  KEY `fk_Alumnos_Sexo1_idx` (`Sexo_idSexo`),
  CONSTRAINT `fk_Alumnos_Sexo1` FOREIGN KEY (`Sexo_idSexo`) REFERENCES `sexo` (`idSexo`),
  CONSTRAINT `fk_Alumnos_Tutor1` FOREIGN KEY (`Tutor_idTutor`) REFERENCES `tutor` (`idTutor`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Carlos','Alberto','Pérez','Gómez','Calle 123','2010-05-15','555-1234',1,1),(2,'Sofía','María','López','Martínez','Avenida 45','2011-06-20','555-5678',2,2),(3,'Luis','Fernando','García','Hernández','Boulevard 67','2012-07-25','555-6789',3,1),(4,'Camila','Patricia','Rodríguez','Fernández','Carrera 89','2013-08-30','555-7890',4,2),(5,'Juan','David','Sánchez','González','Calle 101','2010-09-10','555-8901',5,1),(6,'Valentina','Victoria','Ramírez','Jiménez','Avenida 121','2011-10-15','555-9012',6,2),(7,'Andrés','Eduardo','Torres','Ruiz','Boulevard 143','2012-11-20','555-0123',7,1),(8,'Isabella','Beatriz','Flores','Castro','Carrera 165','2013-12-25','555-1235',8,2),(9,'Mateo','Ángel','Ortiz','Vargas','Calle 187','2010-01-05','555-3456',9,1),(10,'Lucía','Mercedes','Morales','Ramos','Avenida 209','2011-02-10','555-4567',10,2),(11,'Alejandro','José','Hernández','Gómez','Calle 56','2012-03-25','555-5678',1,1),(12,'Fernanda','Isabel','Martínez','Sánchez','Avenida 78','2013-04-20','555-6789',2,2),(13,'Diego','Andrés','González','Fernández','Boulevard 90','2010-08-15','555-7890',3,1),(14,'Valeria','Camila','Fernández','López','Carrera 123','2011-09-10','555-8901',4,2),(15,'Juan','Carlos','Díaz','Pérez','Calle 145','2012-11-05','555-9012',5,1),(16,'Lucas','Javier','Vargas','Ramírez','Avenida 167','2013-12-01','555-0123',6,2),(17,'María','Fernanda','Molina','Gutiérrez','Boulevard 189','2010-01-05','555-1234',7,1),(18,'Gabriel','Alberto','Rojas','Jiménez','Calle 201','2011-02-20','555-2345',8,2),(19,'Santiago','Andrés','Pérez','Ortega','Avenida 223','2012-03-15','555-3456',9,1),(20,'Paula','Isabella','Suárez','Hernández','Carrera 245','2013-04-30','555-4567',10,2),(21,'Camilo','Andrés','Gómez','Hernández','Calle 34','2012-07-10','555-5678',1,1),(22,'Juliana','María','Sánchez','López','Avenida 56','2013-08-25','555-6789',2,2),(23,'Mateo','Alejandro','Fernández','Martínez','Boulevard 78','2010-09-30','555-7890',3,1),(24,'Valentina','Sofía','López','González','Carrera 90','2011-10-15','555-8901',4,2),(25,'David','Sebastián','Pérez','Díaz','Calle 112','2012-11-20','555-9012',5,1),(26,'Isabella','Lucía','Ramírez','Vargas','Avenida 134','2013-12-05','555-0123',6,2),(27,'Juan','Diego','Gutiérrez','Molina','Boulevard 156','2010-01-20','555-1234',7,1),(28,'Laura','Daniela','Jiménez','Rojas','Calle 178','2011-02-05','555-2345',8,2),(29,'Santiago','José','Ortega','Pérez','Avenida 190','2012-03-10','555-3456',9,1),(30,'María','Camila','Hernández','Suárez','Carrera 212','2013-04-25','555-4567',10,2),(31,'Prueba','prueba','PRUEBA','PRUEBA','fghdf','2009-07-04','12345678',11,1);
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anio_academico`
--

DROP TABLE IF EXISTS `anio_academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anio_academico` (
  `idAnio_Academico` int NOT NULL AUTO_INCREMENT,
  `Anio_Academico` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAnio_Academico`),
  UNIQUE KEY `idAnio_Academico_UNIQUE` (`idAnio_Academico`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anio_academico`
--

LOCK TABLES `anio_academico` WRITE;
/*!40000 ALTER TABLE `anio_academico` DISABLE KEYS */;
INSERT INTO `anio_academico` VALUES (1,'2024');
/*!40000 ALTER TABLE `anio_academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignatura` (
  `idAsignatura` int NOT NULL AUTO_INCREMENT,
  `Asignatura` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAsignatura`),
  UNIQUE KEY `idAsignatura_UNIQUE` (`idAsignatura`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
INSERT INTO `asignatura` VALUES (1,'Matemáticas'),(2,'Lengua y Literatura'),(3,'Ciencias Naturales'),(4,'Historia'),(5,'Geografía'),(6,'Educación Física'),(7,'Física'),(8,'Química');
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grado`
--

DROP TABLE IF EXISTS `grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grado` (
  `idGrado` int NOT NULL AUTO_INCREMENT,
  `Grado` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`idGrado`),
  UNIQUE KEY `idGrado_UNIQUE` (`idGrado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grado`
--

LOCK TABLES `grado` WRITE;
/*!40000 ALTER TABLE `grado` DISABLE KEYS */;
INSERT INTO `grado` VALUES (1,'7mo'),(2,'8vo'),(3,'9no'),(4,'10mo'),(5,'11mo');
/*!40000 ALTER TABLE `grado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradoseccion`
--

DROP TABLE IF EXISTS `gradoseccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gradoseccion` (
  `idGradoSeccion` int NOT NULL AUTO_INCREMENT,
  `Grado_idGrado` int DEFAULT NULL,
  `Seccion_idSeccion` int NOT NULL,
  PRIMARY KEY (`idGradoSeccion`),
  UNIQUE KEY `idGradoSeccion_UNIQUE` (`idGradoSeccion`),
  KEY `fk_Grado_Grado1_idx` (`Grado_idGrado`),
  KEY `fk_Grado_Seccion1_idx` (`Seccion_idSeccion`),
  CONSTRAINT `fk_GradoSeccion_Grado1_idx` FOREIGN KEY (`Grado_idGrado`) REFERENCES `grado` (`idGrado`),
  CONSTRAINT `fk_GradoSeccion_Seccion1_idx` FOREIGN KEY (`Seccion_idSeccion`) REFERENCES `seccion` (`idSeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradoseccion`
--

LOCK TABLES `gradoseccion` WRITE;
/*!40000 ALTER TABLE `gradoseccion` DISABLE KEYS */;
INSERT INTO `gradoseccion` VALUES (1,1,1),(2,1,2),(3,1,3),(4,2,1),(5,2,2),(6,2,3),(7,3,1),(8,3,2),(9,3,3),(10,4,1),(11,4,2),(12,4,3),(13,5,1),(14,5,2),(15,5,3);
/*!40000 ALTER TABLE `gradoseccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matricula`
--

DROP TABLE IF EXISTS `matricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matricula` (
  `idMatricula` int NOT NULL AUTO_INCREMENT,
  `CodMatricula` int DEFAULT NULL,
  `Anio_Academico_idAnio_Academico` int NOT NULL,
  `GradoSeccion_idGradoSeccion` int NOT NULL,
  `Turno_idTurno` int NOT NULL,
  `Alumnos_idAlumno` int NOT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`idMatricula`),
  UNIQUE KEY `idMatricula_UNIQUE` (`idMatricula`),
  KEY `fk_Matricula_Anio_Academico1_idx` (`Anio_Academico_idAnio_Academico`),
  KEY `fk_Matricula_GradoSeccion1_idx` (`GradoSeccion_idGradoSeccion`),
  KEY `fk_Matricula_Turno1_idx` (`Turno_idTurno`),
  KEY `fk_Matricula_Alumnos1_idx` (`Alumnos_idAlumno`),
  CONSTRAINT `fk_Matricula_Alumnos1` FOREIGN KEY (`Alumnos_idAlumno`) REFERENCES `alumnos` (`idAlumno`),
  CONSTRAINT `fk_Matricula_Anio_Academico1` FOREIGN KEY (`Anio_Academico_idAnio_Academico`) REFERENCES `anio_academico` (`idAnio_Academico`),
  CONSTRAINT `fk_Matricula_GradoSeccion1` FOREIGN KEY (`GradoSeccion_idGradoSeccion`) REFERENCES `gradoseccion` (`idGradoSeccion`),
  CONSTRAINT `fk_Matricula_Turno1` FOREIGN KEY (`Turno_idTurno`) REFERENCES `turno` (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matricula`
--

LOCK TABLES `matricula` WRITE;
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
<<<<<<< HEAD
INSERT INTO `matricula` VALUES (3,34567,1,3,1,3,'2024-05-20'),(4,45678,1,4,2,4,'2024-05-20'),(5,56789,1,5,1,5,'2024-05-20'),(9,90123,1,9,1,9,'2024-05-20'),(11,11234,1,11,1,11,'2024-05-20'),(12,12345,1,12,2,12,'2024-05-20'),(13,23456,1,13,1,13,'2024-05-20'),(14,34567,1,14,2,14,'2024-05-20'),(15,45678,1,15,1,15,'2024-05-20'),(16,56789,1,1,2,16,'2024-05-20'),(17,67890,1,2,1,17,'2024-05-20'),(18,78901,1,3,2,18,'2024-05-20'),(19,89012,1,4,1,19,'2024-05-20'),(20,90123,1,5,2,20,'2024-05-20'),(21,10123,1,6,1,21,'2024-05-20'),(22,11234,1,7,2,22,'2024-05-20'),(23,12345,1,8,1,23,'2024-05-20'),(24,23456,1,9,2,24,'2024-05-20'),(25,34567,1,10,1,25,'2024-05-20'),(26,45678,1,11,2,26,'2024-05-20'),(27,56789,1,12,1,27,'2024-05-20'),(28,67890,1,13,2,28,'2024-05-20'),(29,78901,1,14,1,29,'2024-05-20'),(30,89012,1,15,2,30,'2024-05-20'),(31,NULL,1,2,1,31,'2024-06-22');
=======
INSERT INTO `matricula` VALUES (1,12345,1,1,1,1,'2024-05-20'),(2,23456,1,2,2,2,'2024-05-20'),(3,34567,1,3,1,3,'2024-05-20'),(4,45678,1,4,2,4,'2024-05-20'),(5,56789,1,5,1,5,'2024-05-20'),(6,67890,1,6,2,6,'2024-05-20'),(7,78901,1,7,1,7,'2024-05-20'),(8,89012,1,8,2,8,'2024-05-20'),(9,90123,1,9,1,9,'2024-05-20'),(10,10123,1,10,2,10,'2024-05-20'),(11,11234,1,11,1,11,'2024-05-20'),(12,12345,1,12,2,12,'2024-05-20'),(13,23456,1,13,1,13,'2024-05-20'),(14,34567,1,14,2,14,'2024-05-20'),(15,45678,1,15,1,15,'2024-05-20'),(16,56789,1,1,2,16,'2024-05-20'),(17,67890,1,2,1,17,'2024-05-20'),(18,78901,1,3,2,18,'2024-05-20'),(19,89012,1,4,1,19,'2024-05-20'),(20,90123,1,5,2,20,'2024-05-20'),(21,10123,1,6,1,21,'2024-05-20'),(22,11234,1,7,2,22,'2024-05-20'),(23,12345,1,8,1,23,'2024-05-20'),(24,23456,1,9,2,24,'2024-05-20'),(25,34567,1,10,1,25,'2024-05-20'),(26,45678,1,11,2,26,'2024-05-20'),(27,56789,1,12,1,27,'2024-05-20'),(28,67890,1,13,2,28,'2024-05-20'),(29,78901,1,14,1,29,'2024-05-20'),(30,89012,1,15,2,30,'2024-05-20'),(31,NULL,1,2,1,31,'2024-06-22');
>>>>>>> fde97636d7e8cbc3043dadb86be76150e68d675d
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nota`
--

DROP TABLE IF EXISTS `nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nota` (
  `idNota` int NOT NULL AUTO_INCREMENT,
  `Nota` int DEFAULT NULL,
  `Asignatura_idAsignatura` int NOT NULL,
  `Matricula_idMatricula` int NOT NULL,
  PRIMARY KEY (`idNota`),
  UNIQUE KEY `idNota_UNIQUE` (`idNota`),
  KEY `fk_Nota_Asignatura1_idx` (`Asignatura_idAsignatura`),
  KEY `fk_Nota_Matricula1_idx` (`Matricula_idMatricula`),
  CONSTRAINT `fk_Nota_Asignatura1` FOREIGN KEY (`Asignatura_idAsignatura`) REFERENCES `asignatura` (`idAsignatura`),
  CONSTRAINT `fk_Nota_Matricula1_idx` FOREIGN KEY (`Matricula_idMatricula`) REFERENCES `matricula` (`idMatricula`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota`
--

LOCK TABLES `nota` WRITE;
/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
<<<<<<< HEAD
INSERT INTO `nota` VALUES (17,99,1,3),(18,78,2,3),(19,89,3,3),(20,75,4,3),(21,75,5,3),(22,77,6,3),(23,78,7,3),(24,90,8,3),(25,90,1,4),(26,86,2,4),(27,87,3,4),(28,93,4,4),(29,76,5,4),(30,94,6,4),(31,94,7,4),(32,84,8,4),(33,98,1,5),(34,84,2,5),(35,69,3,5),(36,84,4,5),(37,98,5,5),(38,87,6,5),(39,97,7,5),(40,95,8,5),(65,98,1,9),(66,75,2,9),(67,78,3,9),(68,98,4,9),(69,96,5,9),(70,91,6,9),(71,100,7,9),(72,95,8,9),(81,84,1,11),(82,74,2,11),(83,69,3,11),(84,61,4,11),(85,84,5,11),(86,97,6,11),(87,93,7,11),(88,92,8,11),(89,96,1,12),(90,92,2,12),(91,91,3,12),(92,65,4,12),(93,86,5,12),(94,83,6,12),(95,89,7,12),(96,85,8,12),(97,75,1,13),(98,75,2,13),(99,73,3,13),(100,94,4,13),(101,73,5,13),(102,92,6,13),(103,98,7,13),(104,93,8,13),(105,80,1,14),(106,86,2,14),(107,87,3,14),(108,85,4,14),(109,74,5,14),(110,86,6,14),(111,84,7,14),(112,94,8,14),(113,83,1,15),(114,85,2,15),(115,95,3,15),(116,85,4,15),(117,85,5,15),(118,85,6,15),(119,64,7,15),(120,91,8,15),(121,74,1,16),(122,75,2,16),(123,79,3,16),(124,98,4,16),(125,84,5,16),(126,74,6,16),(127,74,7,16),(128,84,8,16),(129,84,1,17),(130,93,2,17),(131,94,3,17),(132,73,4,17),(133,63,5,17),(134,84,6,17),(135,64,7,17),(136,84,8,17),(137,76,1,18),(138,94,2,18),(139,78,3,18),(140,65,4,18),(141,93,5,18),(142,70,6,18),(143,71,7,18),(144,94,8,18),(145,93,1,19),(146,92,2,19),(147,65,3,19),(148,96,4,19),(149,84,5,19),(150,89,6,19),(151,74,7,19),(152,70,8,19),(153,61,1,20),(154,83,2,20),(155,90,3,20),(156,64,4,20),(157,97,5,20),(158,93,6,20),(159,73,7,20),(160,87,8,20),(161,75,1,21),(162,89,2,21),(163,86,3,21),(164,90,4,21),(165,87,5,21),(166,87,6,21),(167,67,7,21),(168,97,8,21),(169,95,1,22),(170,62,2,22),(171,75,3,22),(172,75,4,22),(173,79,5,22),(174,87,6,22),(175,67,7,22),(176,92,8,22),(177,90,1,23),(178,75,2,23),(179,89,3,23),(180,89,4,23),(181,98,5,23),(182,98,6,23),(183,76,7,23),(184,87,8,23),(185,87,1,24),(186,78,2,24),(187,87,3,24),(188,98,4,24),(189,64,5,24),(190,71,6,24),(191,63,7,24),(192,90,8,24),(193,90,1,25),(194,87,2,25),(195,90,3,25),(196,78,4,25),(197,75,5,25),(198,93,6,25),(199,90,7,25),(200,90,8,25),(201,90,1,26),(202,71,2,26),(203,78,3,26),(204,78,4,26),(205,87,5,26),(206,87,6,26),(207,78,7,26),(208,78,8,26),(209,98,1,27),(210,98,2,27),(211,76,3,27),(212,99,4,27),(213,65,5,27),(214,65,6,27),(215,87,7,27),(216,89,8,27),(217,98,1,28),(218,98,2,28),(219,75,3,28),(220,76,4,28),(221,65,5,28),(222,89,6,28),(223,78,7,28),(224,87,8,28),(225,65,1,29),(226,65,2,29),(227,65,3,29),(228,87,4,29),(229,83,5,29),(230,96,6,29),(231,87,7,29),(232,87,8,29),(233,87,1,30),(234,78,2,30),(235,96,3,30),(236,96,4,30),(237,96,5,30),(238,68,6,30),(239,76,7,30),(240,77,8,30),(241,96,1,31),(242,96,2,31),(243,96,3,31),(244,96,4,31),(245,96,5,31),(246,85,6,31),(247,96,7,31),(248,96,8,31);
=======
INSERT INTO `nota` VALUES (1,90,1,1),(2,98,2,1),(3,88,3,1),(4,88,4,1),(5,87,5,1),(6,82,6,1),(7,65,7,1),(8,70,8,1),(9,78,1,2),(10,63,2,2),(11,80,3,2),(12,78,4,2),(13,98,5,2),(14,90,6,2),(15,88,7,2),(16,88,8,2),(17,99,1,3),(18,78,2,3),(19,89,3,3),(20,75,4,3),(21,75,5,3),(22,77,6,3),(23,78,7,3),(24,90,8,3),(25,90,1,4),(26,86,2,4),(27,87,3,4),(28,93,4,4),(29,76,5,4),(30,94,6,4),(31,94,7,4),(32,84,8,4),(33,98,1,5),(34,84,2,5),(35,69,3,5),(36,84,4,5),(37,98,5,5),(38,87,6,5),(39,97,7,5),(40,95,8,5),(41,82,1,6),(42,84,2,6),(43,86,3,6),(44,87,4,6),(45,99,5,6),(46,75,6,6),(47,85,7,6),(48,98,8,6),(49,71,1,7),(50,99,2,7),(51,78,3,7),(52,96,4,7),(53,98,5,7),(54,67,6,7),(55,87,7,7),(56,100,8,7),(57,89,1,8),(58,83,2,8),(59,79,3,8),(60,86,4,8),(61,85,5,8),(62,89,6,8),(63,85,7,8),(64,89,8,8),(65,98,1,9),(66,75,2,9),(67,78,3,9),(68,98,4,9),(69,96,5,9),(70,91,6,9),(71,100,7,9),(72,95,8,9),(73,76,1,10),(74,79,2,10),(75,94,3,10),(76,84,4,10),(77,84,5,10),(78,72,6,10),(79,94,7,10),(80,94,8,10),(81,84,1,11),(82,74,2,11),(83,69,3,11),(84,61,4,11),(85,84,5,11),(86,97,6,11),(87,93,7,11),(88,92,8,11),(89,96,1,12),(90,92,2,12),(91,91,3,12),(92,65,4,12),(93,86,5,12),(94,83,6,12),(95,89,7,12),(96,85,8,12),(97,75,1,13),(98,75,2,13),(99,73,3,13),(100,94,4,13),(101,73,5,13),(102,92,6,13),(103,98,7,13),(104,93,8,13),(105,80,1,14),(106,86,2,14),(107,87,3,14),(108,85,4,14),(109,74,5,14),(110,86,6,14),(111,84,7,14),(112,94,8,14),(113,83,1,15),(114,85,2,15),(115,95,3,15),(116,85,4,15),(117,85,5,15),(118,85,6,15),(119,64,7,15),(120,91,8,15),(121,74,1,16),(122,75,2,16),(123,79,3,16),(124,98,4,16),(125,84,5,16),(126,74,6,16),(127,74,7,16),(128,84,8,16),(129,84,1,17),(130,93,2,17),(131,94,3,17),(132,73,4,17),(133,63,5,17),(134,84,6,17),(135,64,7,17),(136,84,8,17),(137,76,1,18),(138,94,2,18),(139,78,3,18),(140,65,4,18),(141,93,5,18),(142,70,6,18),(143,71,7,18),(144,94,8,18),(145,93,1,19),(146,92,2,19),(147,65,3,19),(148,96,4,19),(149,84,5,19),(150,89,6,19),(151,74,7,19),(152,70,8,19),(153,61,1,20),(154,83,2,20),(155,90,3,20),(156,64,4,20),(157,97,5,20),(158,93,6,20),(159,73,7,20),(160,87,8,20),(161,75,1,21),(162,89,2,21),(163,86,3,21),(164,90,4,21),(165,87,5,21),(166,87,6,21),(167,67,7,21),(168,97,8,21),(169,95,1,22),(170,62,2,22),(171,75,3,22),(172,75,4,22),(173,79,5,22),(174,87,6,22),(175,67,7,22),(176,92,8,22),(177,90,1,23),(178,75,2,23),(179,89,3,23),(180,89,4,23),(181,98,5,23),(182,98,6,23),(183,76,7,23),(184,87,8,23),(185,87,1,24),(186,78,2,24),(187,87,3,24),(188,98,4,24),(189,64,5,24),(190,71,6,24),(191,63,7,24),(192,90,8,24),(193,90,1,25),(194,87,2,25),(195,90,3,25),(196,78,4,25),(197,75,5,25),(198,93,6,25),(199,90,7,25),(200,90,8,25),(201,90,1,26),(202,71,2,26),(203,78,3,26),(204,78,4,26),(205,87,5,26),(206,87,6,26),(207,78,7,26),(208,78,8,26),(209,98,1,27),(210,98,2,27),(211,76,3,27),(212,99,4,27),(213,65,5,27),(214,65,6,27),(215,87,7,27),(216,89,8,27),(217,98,1,28),(218,98,2,28),(219,75,3,28),(220,76,4,28),(221,65,5,28),(222,89,6,28),(223,78,7,28),(224,87,8,28),(225,65,1,29),(226,65,2,29),(227,65,3,29),(228,87,4,29),(229,83,5,29),(230,96,6,29),(231,87,7,29),(232,87,8,29),(233,87,1,30),(234,78,2,30),(235,96,3,30),(236,96,4,30),(237,96,5,30),(238,68,6,30),(239,76,7,30),(240,77,8,30),(241,96,1,31),(242,96,2,31),(243,96,3,31),(244,96,4,31),(245,96,5,31),(246,85,6,31),(247,96,7,31),(248,96,8,31);
>>>>>>> fde97636d7e8cbc3043dadb86be76150e68d675d
/*!40000 ALTER TABLE `nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parentesco`
--

DROP TABLE IF EXISTS `parentesco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parentesco` (
  `idParentesco` int NOT NULL AUTO_INCREMENT,
  `Parentesco` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idParentesco`),
  UNIQUE KEY `idParentesco_UNIQUE` (`idParentesco`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parentesco`
--

LOCK TABLES `parentesco` WRITE;
/*!40000 ALTER TABLE `parentesco` DISABLE KEYS */;
INSERT INTO `parentesco` VALUES (1,'Padre'),(2,'Madre'),(3,'Hijo'),(4,'Hija'),(5,'Hermano'),(6,'Hermana'),(7,'Abuelo'),(8,'Abuela'),(9,'Tío'),(10,'Tía'),(11,'Primo'),(12,'Prima');
/*!40000 ALTER TABLE `parentesco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `idRol` int NOT NULL AUTO_INCREMENT,
  `Rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idRol`),
  UNIQUE KEY `idRol_UNIQUE` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Administrador'),(2,'Secretario');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccion`
--

DROP TABLE IF EXISTS `seccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seccion` (
  `idSeccion` int NOT NULL AUTO_INCREMENT,
  `NSecc` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idSeccion`),
  UNIQUE KEY `idSeccion_UNIQUE` (`idSeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccion`
--

LOCK TABLES `seccion` WRITE;
/*!40000 ALTER TABLE `seccion` DISABLE KEYS */;
INSERT INTO `seccion` VALUES (1,'A'),(2,'B'),(3,'C');
/*!40000 ALTER TABLE `seccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexo`
--

DROP TABLE IF EXISTS `sexo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sexo` (
  `idSexo` int NOT NULL AUTO_INCREMENT,
  `Sexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idSexo`),
  UNIQUE KEY `idSexo_UNIQUE` (`idSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexo`
--

LOCK TABLES `sexo` WRITE;
/*!40000 ALTER TABLE `sexo` DISABLE KEYS */;
INSERT INTO `sexo` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `sexo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turno`
--

DROP TABLE IF EXISTS `turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `turno` (
  `idTurno` int NOT NULL AUTO_INCREMENT,
  `Turno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTurno`),
  UNIQUE KEY `idTurno_UNIQUE` (`idTurno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turno`
--

LOCK TABLES `turno` WRITE;
/*!40000 ALTER TABLE `turno` DISABLE KEYS */;
INSERT INTO `turno` VALUES (1,'Matutino'),(2,'Vespertino');
/*!40000 ALTER TABLE `turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutor` (
  `idTutor` int NOT NULL AUTO_INCREMENT,
  `PNombre` varchar(45) DEFAULT NULL,
  `SNombre` varchar(45) DEFAULT NULL,
  `PApellido` varchar(45) DEFAULT NULL,
  `SApellido` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Cedula` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Sexo_idSexo` int NOT NULL,
  `Parentesco_idParentesco` int NOT NULL,
  PRIMARY KEY (`idTutor`),
  UNIQUE KEY `idTutor_UNIQUE` (`idTutor`),
  KEY `fk_Tutor_Sexo1_idx` (`Sexo_idSexo`),
  KEY `fk_Tutor_Parentesco1_idx` (`Parentesco_idParentesco`),
  CONSTRAINT `fk_Tutor_Parentesco1` FOREIGN KEY (`Parentesco_idParentesco`) REFERENCES `parentesco` (`idParentesco`),
  CONSTRAINT `fk_Tutor_Sexo1` FOREIGN KEY (`Sexo_idSexo`) REFERENCES `sexo` (`idSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor`
--

LOCK TABLES `tutor` WRITE;
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
INSERT INTO `tutor` VALUES (1,'Juan','Carlos','Pérez','Gómez','Calle 123','123-456789-0123A','555-1234',1,1),(2,'María','Isabel','López','Martínez','Avenida 45','234-567890-1234B','555-5678',2,2),(3,'Pedro','Antonio','García','Hernández','Boulevard 67','345-678901-2345C','555-6789',1,3),(4,'Ana','Patricia','Rodríguez','Fernández','Carrera 89','456-789012-3456D','555-7890',2,4),(5,'Luis','Fernando','Sánchez','González','Calle 101','567-890123-4567E','555-8901',1,5),(6,'Laura','Victoria','Ramírez','Jiménez','Avenida 121','678-901234-5678F','555-9012',2,6),(7,'Carlos','Eduardo','Torres','Ruiz','Boulevard 143','789-012345-6789G','555-0123',1,7),(8,'Sara','Beatriz','Flores','Castro','Carrera 165','890-123456-7890H','555-1235',2,8),(9,'Miguel','Ángel','Ortiz','Vargas','Calle 187','901-234567-8901I','555-3456',1,9),(10,'Elena','Mercedes','Morales','Ramos','Avenida 209','012-345678-9012J','555-4567',2,10),(11,'PRUEBA','PRUEBA','PRUEBA','PRUEBA','PRUEBA','123456778','12345678',1,2);
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(45) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Contrasena` varchar(45) DEFAULT NULL,
  `Rol_idRol` int NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`),
  KEY `fk_Usuario_Rol1_idx` (`Rol_idRol`),
  CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','Erian','12345',1),(2,'secret','Kevin','12345',2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `view_cantalumnos`
--

DROP TABLE IF EXISTS `view_cantalumnos`;
/*!50001 DROP VIEW IF EXISTS `view_cantalumnos`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_cantalumnos` AS SELECT 
 1 AS `Grado`,
 1 AS `TotalAlumnos`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_infopadres`
--

DROP TABLE IF EXISTS `view_infopadres`;
/*!50001 DROP VIEW IF EXISTS `view_infopadres`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_infopadres` AS SELECT 
 1 AS `#`,
 1 AS `Nombre del tutor`,
 1 AS `Telefono`,
 1 AS `Dirección`,
 1 AS `Cedula`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_matriactual`
--

DROP TABLE IF EXISTS `view_matriactual`;
/*!50001 DROP VIEW IF EXISTS `view_matriactual`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_matriactual` AS SELECT 
 1 AS `#`,
 1 AS `Alumno`,
 1 AS `Direccion`,
 1 AS `Fecha_Nacimiento`,
 1 AS `Telefono`,
 1 AS `Año Académico`,
 1 AS `Grado`,
 1 AS `Sección`,
 1 AS `Turno`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_turnosalum`
--

DROP TABLE IF EXISTS `view_turnosalum`;
/*!50001 DROP VIEW IF EXISTS `view_turnosalum`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_turnosalum` AS SELECT 
 1 AS `#`,
 1 AS `Alumno`,
 1 AS `Direccion`,
 1 AS `Fecha_Nacimiento`,
 1 AS `Telefono`,
 1 AS `Turno`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_usuarios`
--

DROP TABLE IF EXISTS `view_usuarios`;
/*!50001 DROP VIEW IF EXISTS `view_usuarios`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `view_usuarios` AS SELECT 
 1 AS `#`,
 1 AS `Usuario`,
 1 AS `Nombre del Usuario`,
 1 AS `Rol`*/;
SET character_set_client = @saved_cs_client;

--
<<<<<<< HEAD
-- Temporary view structure for view `vista_datos_alumnos`
--

DROP TABLE IF EXISTS `vista_datos_alumnos`;
/*!50001 DROP VIEW IF EXISTS `vista_datos_alumnos`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vista_datos_alumnos` AS SELECT 
 1 AS `#`,
 1 AS `Código de matrícula`,
 1 AS `Año académico`,
 1 AS `Fecha de nacimiento`,
 1 AS `Sexo`,
 1 AS `Notas`,
 1 AS `Teléfono Alumno`,
 1 AS `Asignatura`,
 1 AS `Teléfono Tutor`,
 1 AS `Cédula Tutor`,
 1 AS `Dirección Tutor`,
 1 AS `Grado`,
 1 AS `Sección`,
 1 AS `Turno`,
 1 AS `Parentesco Tutor`,
 1 AS `Sexo Tutor`,
 1 AS `Alumno`,
 1 AS `Tutor`*/;
SET character_set_client = @saved_cs_client;

--
=======
>>>>>>> fde97636d7e8cbc3043dadb86be76150e68d675d
-- Temporary view structure for view `vistareporteestudiantes`
--

DROP TABLE IF EXISTS `vistareporteestudiantes`;
/*!50001 DROP VIEW IF EXISTS `vistareporteestudiantes`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vistareporteestudiantes` AS SELECT 
 1 AS `idAlumno`,
 1 AS `#`,
 1 AS `Código de matrícula`,
 1 AS `Año académico`,
 1 AS `Fecha de nacimiento`,
 1 AS `Sexo`,
 1 AS `Notas`,
 1 AS `Asignatura`,
 1 AS `Teléfono`,
 1 AS `Grado`,
 1 AS `Sección`,
 1 AS `Turno`,
 1 AS `Alumno`,
 1 AS `Tutor`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_matriculados`
--

DROP TABLE IF EXISTS `vw_matriculados`;
/*!50001 DROP VIEW IF EXISTS `vw_matriculados`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_matriculados` AS SELECT 
 1 AS `#`,
 1 AS `Código de matrícula`,
 1 AS `Año académico`,
 1 AS `Grado`,
 1 AS `Sección`,
 1 AS `Turno`,
 1 AS `Alumno`,
 1 AS `Tutor`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'bd_jdlcm'
--

--
-- Dumping routines for database 'bd_jdlcm'
--
/*!50003 DROP PROCEDURE IF EXISTS `GetStudentInfoById` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetStudentInfoById`(IN studentId INT)
BEGIN
    SELECT
        MT.idMatricula AS '#',
        MT.CodMatricula AS 'Código de matrícula',
        AA.Anio_Academico AS 'Año académico',
        AL.Fecha_Nacimiento AS 'Fecha de nacimiento',
        SX.Sexo AS 'Sexo',
        NT.Nota AS 'Notas',
        AG.Asignatura AS 'Asignatura',
        TT.Telefono AS 'Teléfono',
        TRIM(G.Grado) AS 'Grado',
        TRIM(SC.NSecc) AS 'Sección',
        TRIM(T.Turno) AS 'Turno',
        CONCAT(TRIM(AL.PNombre), ' ', TRIM(AL.SNombre), ' ', TRIM(AL.PApellido), ' ', TRIM(AL.SApellido)) AS 'Alumno',
        CONCAT(TRIM(TT.PNombre), ' ', TRIM(TT.SNombre), ' ', TRIM(TT.PApellido), ' ', TRIM(TT.SApellido)) AS 'Tutor'
    FROM Matricula AS MT
    JOIN Anio_Academico AS AA ON MT.Anio_Academico_idAnio_Academico = AA.idAnio_Academico
    JOIN GradoSeccion AS GS ON MT.GradoSeccion_idGradoSeccion = GS.idGradoSeccion
    JOIN Grado AS G ON GS.Grado_idGrado = G.idGrado
    JOIN Seccion AS SC ON GS.Seccion_idSeccion = SC.idSeccion
    JOIN Alumnos AS AL ON MT.Alumnos_idAlumno = AL.idAlumno
    JOIN Sexo AS SX ON AL.Sexo_idSexo = SX.idSexo
    JOIN Tutor AS TT ON AL.Tutor_idTutor = TT.idTutor
    JOIN Turno AS T ON MT.Turno_idTurno = T.idTurno
    JOIN Nota AS NT ON MT.idMatricula = NT.Matricula_idMatricula
    JOIN Asignatura AS AG ON NT.Asignatura_idAsignatura = AG.idAsignatura
    WHERE AL.idAlumno = studentId
    ORDER BY MT.idMatricula;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_alumno` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_alumno`(
    IN _idAlumno INT
)
BEGIN
<<<<<<< HEAD
    -- Eliminar filas dependientes en la tabla nota
    DELETE FROM nota 
    WHERE Matricula_idMatricula IN (SELECT idMatricula FROM matricula WHERE Alumnos_idAlumno = _idAlumno);

    -- Eliminar filas dependientes en la tabla matricula
    DELETE FROM matricula 
    WHERE Alumnos_idAlumno = _idAlumno;

    -- Eliminar el alumno
    DELETE FROM alumnos 
    WHERE idAlumno = _idAlumno;
=======
    DELETE FROM alumnos
    WHERE
        idAlumno = _idAlumno;
>>>>>>> fde97636d7e8cbc3043dadb86be76150e68d675d
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_anio_academico` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_anio_academico`(
    IN _idAnio_Academico INT
)
BEGIN
    DELETE FROM anio_academico
    WHERE
        idAnio_Academico = _idAnio_Academico;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_asignatura` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_asignatura`(
    IN _idAsignatura INT
)
BEGIN
    DELETE FROM asignatura
    WHERE
        idAsignatura = _idAsignatura;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_grado` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_grado`(
    IN _idGrado INT
)
BEGIN
    DELETE FROM grado
    WHERE
        idGrado = _idGrado;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_gradoseccion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_gradoseccion`(
    IN _idGradoSeccion int
)
BEGIN
    DELETE FROM gradoseccion
    WHERE
        idGradoSeccion = _idGradoSeccion;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_matricula` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_matricula`(
    IN _idMatricula int
)
BEGIN
    DELETE FROM matricula
    WHERE
        idMatricula = _idMatricula;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_nota` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_nota`(
    IN _idNota int
)
BEGIN
    DELETE FROM nota
    WHERE
        idNota = _idNota;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_parentesco` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_parentesco`(
    IN _idParentesco INT
)
BEGIN
    DELETE FROM parentesco
    WHERE
        idParentesco = _idParentesco;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_rol` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_rol`(
    IN _idRol INT
)
BEGIN
    DELETE FROM rol
    WHERE
        idRol = _idRol;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_seccion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_seccion`(
    IN _idSeccion INT
)
BEGIN
    DELETE FROM seccion
    WHERE
        idSeccion = _idSeccion;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_sexo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_sexo`(
    IN _idSexo INT
)
BEGIN
    DELETE FROM sexo
    WHERE
        idSexo = _idSexo;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_turno` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_turno`(
    IN _idTurno INT
)
BEGIN
    DELETE FROM turno
    WHERE
        idTurno = _idTurno;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_tutor` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_tutor`(
    IN _idTutor INT
)
BEGIN
    DELETE FROM tutor
    WHERE
        idTutor = _idTutor;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_delete_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_usuario`(
    IN _idUsuario INT
)
BEGIN
    DELETE FROM usuario
    WHERE
        idUsuario = _idUsuario;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_alumno` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_alumno`(
    IN _PNombre VARCHAR(45),
    IN _SNombre VARCHAR(45),
    IN _PApellido VARCHAR(45),
    IN _SApellido VARCHAR(45),
    IN _Direccion VARCHAR(45),
    IN _Fecha_Nacimiento DATE,
    IN _Telefono VARCHAR(9),
    IN _Tutor_idTutor INT,
    IN _Sexo_idSexo INT
)
BEGIN
    INSERT INTO alumnos (
        PNombre,
        SNombre,
        PApellido,
        SApellido,
        Direccion,
        Fecha_Nacimiento,
        Telefono,
        Tutor_idTutor,
        Sexo_idSexo
    ) VALUES (
        _PNombre,
        _SNombre,
        _PApellido,
        _SApellido,
        _Direccion,
        _Fecha_Nacimiento,
        _Telefono,
        _Tutor_idTutor,
        _Sexo_idSexo
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_anio_academico` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_anio_academico`(
    IN _Anio_Academico VARCHAR(45)
)
BEGIN
    INSERT INTO anio_academico (
       Anio_Academico
    ) VALUES (
        _Anio_Academico
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_asignatura` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_asignatura`(
    IN _Asignatura VARCHAR(45)
)
BEGIN
    INSERT INTO asignatura (
       Asignatura
    ) VALUES (
        _Asignatura
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_grado` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_grado`(
    IN _Grado VARCHAR(45)
)
BEGIN
    INSERT INTO grado (
       Grado
    ) VALUES (
        _Grado
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_gradoseccion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_gradoseccion`(
    IN _Grado_idGrado int,
    IN _Seccion_idSeccion int
    
)
BEGIN
    INSERT INTO gradoseccion (
       Grado_idGrado,
       Seccion_idSeccion
    ) VALUES (
        _Grado_idGrado,
        _Seccion_idSeccion
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_matricula` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_matricula`(
    IN _CodMatricula int,
    IN _Anio_Academico_idAnio_Academico int,
    IN _GradoSeccion_idGradoSeccion int,
    IN _Turno_idTurno int,
    IN _Alumnos_idAlumno int,
    IN _Fecha date
)
BEGIN
    INSERT INTO matricula (
        CodMatricula,
        Anio_Academico_idAnio_Academico,
        GradoSeccion_idGradoSeccion,
        Turno_idTurno,
        Alumnos_idAlumno,
        Fecha
    ) VALUES (
        _CodMatricula,
        _Anio_Academico_idAnio_Academico,
        _GradoSeccion_idGradoSeccion,
        _Turno_idTurno,
        _Alumnos_idAlumno,
        _Fecha
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_nota` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_nota`(
    IN _Nota int,
    IN _Asignatura_idAsignatura int,
    IN _Matricula_idMatricula int
)
BEGIN
    INSERT INTO nota (
        Nota,
        Asignatura_idAsignatura,
        Matricula_idMatricula
    ) VALUES (
        _Nota,
        _Asignatura_idAsignatura,
        _Matricula_idMatricula
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_parentesco` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_parentesco`(
    IN _Parentesco VARCHAR(45)
)
BEGIN
    INSERT INTO parentesco (
       Parentesco
    ) VALUES (
        _Parentesco
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_rol` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_rol`(
    IN _Rol VARCHAR(45)
)
BEGIN
    INSERT INTO rol (
       Rol
    ) VALUES (
        _Rol
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_seccion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_seccion`(
    IN _NSecc VARCHAR(2)
)
BEGIN
    INSERT INTO seccion (
       NSecc
    ) VALUES (
        _NSecc
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_sexo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_sexo`(
    IN _Sexo VARCHAR(45)
)
BEGIN
    INSERT INTO sexo (
       Sexo
    ) VALUES (
        _Sexo
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_turno` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_turno`(
    IN _Turno VARCHAR(45)
)
BEGIN
    INSERT INTO turno (
       Turno
    ) VALUES (
        _Turno
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_tutor` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_tutor`(
    IN _PNombre VARCHAR(45),
    IN _SNombre VARCHAR(45),
    IN _PApellido VARCHAR(45),
    IN _SApellido VARCHAR(45),
    IN _Direccion VARCHAR(45),
    IN _Cedula VARCHAR(45),
    IN _Telefono VARCHAR(45),
    IN _Sexo_idSexo INT,
    IN _Parentesco_idParentesco INT
)
BEGIN
    INSERT INTO tutor (
        PNombre,
        SNombre,
        PApellido,
        SApellido,
        Direccion,
        Cedula,
        Telefono,
        Sexo_idSexo,
        Parentesco_idParentesco
    ) VALUES (
        _PNombre,
        _SNombre,
        _PApellido,
        _SApellido,
        _Direccion,
        _Cedula,
        _Telefono,
        _Sexo_idSexo,
        _Parentesco_idParentesco
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_save_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_save_usuario`(
    IN _Usuario varchar(45),
    IN _Nombre varchar(45),
    IN _Contrasena varchar(45),
    IN _Rol_idRol int
)
BEGIN
    INSERT INTO usuario (
        Usuario,
        Nombre,
        Contrasena,
        Rol_idRol
    ) VALUES (
        _Usuario,
        _Nombre,
        _Contrasena,
        _Rol_idRol
    );
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_alumno` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_alumno`(
    IN _idAlumno INT,
    IN _PNombre VARCHAR(45),
    IN _SNombre VARCHAR(45),
    IN _PApellido VARCHAR(45),
    IN _SApellido VARCHAR(45),
    IN _Direccion VARCHAR(45),
    IN _Fecha_Nacimiento DATE,
    IN _Telefono VARCHAR(9),
    IN _Tutor_idTutor INT,
    IN _Sexo_idSexo INT
)
BEGIN
    UPDATE alumnos SET
        PNombre = _PNombre,
        SNombre = _SNombre,
        PApellido = _PApellido,
        SApellido = _SApellido,
        Direccion = _Direccion,
        Fecha_Nacimiento = _Fecha_Nacimiento,
        Telefono = _Telefono,
        Tutor_idTutor = _Tutor_idTutor,
        Sexo_idSexo = _Sexo_idSexo
    WHERE
        idAlumno = _idAlumno;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_anio_academico` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_anio_academico`(
    IN _idAnio_Academico INT,
    IN _Anio_Academico VARCHAR(45)
)
BEGIN
    UPDATE anio_academico SET
        Anio_Academico = _Anio_Academico
    WHERE
        idAnio_Academico = _idAnio_Academico;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_asignatura` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_asignatura`(
    IN _idAsignatura INT,
    IN _Asignatura VARCHAR(45)
)
BEGIN
    UPDATE asignatura SET
        Asignatura = _Asignatura
    WHERE
        idAsignatura = _idAsignatura;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_grado` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_grado`(
    IN _idGrado INT,
    IN _Grado VARCHAR(45)
)
BEGIN
    UPDATE grado SET
        Grado = _Grado
    WHERE
        idGrado = _idGrado;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_gradoseccion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_gradoseccion`(
    IN _idGradoSeccion int,
    IN _Grado_idGrado int,
    IN _Seccion_idSeccion int
)
BEGIN
    UPDATE gradoseccion SET
        Grado_idGrado = _Grado_idGrado,
        Seccion_idSeccion = _Seccion_idSeccion
    WHERE
        idGradoSeccion = _idGradoSeccion;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_matricula` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_matricula`(
    IN _idMatricula int,
    IN _CodMatricula int,
    IN _Anio_Academico_idAnio_Academico int,
    IN _GradoSeccion_idGradoSeccion int,
    IN _Turno_idTurno int,
    IN _Alumnos_idAlumno int,
    IN _Fecha date
)
BEGIN
    UPDATE matricula SET
        CodMatricula = _CodMatricula,
        Anio_Academico_idAnio_Academico = _Anio_Academico_idAnio_Academico,
        GradoSeccion_idGradoSeccion = _GradoSeccion_idGradoSeccion,
        Turno_idTurno = _Turno_idTurno,
        Alumnos_idAlumno = _Alumnos_idAlumno,
        Fecha = _Fecha
    WHERE
        idMatricula = _idMatricula;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_nota` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_nota`(
    IN _idNta int,
    IN _Nota int,
    IN _Asignatura_idAsignatura int,
    IN _Matricula_idMatricula int
)
BEGIN
    UPDATE nota SET
        Nota = _Nota,
        Asignatura_idAsignatura = _Asignatura_idAsignatura,
        Matricula_idMatricula = _Matricula_idMatricula
    WHERE
        idNta = _idNta;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_parentesco` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_parentesco`(
    IN _idParentesco INT,
    IN _Parentesco VARCHAR(45)
)
BEGIN
    UPDATE parentesco SET
        Parentesco = _Parentesco
    WHERE
        idParentesco = _idParentesco;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_rol` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_rol`(
    IN _idRol INT,
    IN _Rol VARCHAR(45)
)
BEGIN
    UPDATE rol SET
        Rol = _Rol
    WHERE
        idRol = _idRol;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_seccion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_seccion`(
    IN _idSeccion INT,
    IN _NSecc VARCHAR(2)
)
BEGIN
    UPDATE seccion SET
        NSecc = _NSecc
    WHERE
        idSeccion = _idSeccion;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_sexo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_sexo`(
    IN _idSexo INT,
    IN _Sexo VARCHAR(45)
)
BEGIN
    UPDATE sexo SET
        Sexo = _Sexo
    WHERE
        idSexo = _idSexo;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_turno` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_turno`(
    IN _idTurno INT,
    IN _Turno VARCHAR(45)
)
BEGIN
    UPDATE turno SET
        Turno = _Turno
    WHERE
        idTurno = _idTurno;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_tutor` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_tutor`(
    IN _idTutor INT,
    IN _PNombre VARCHAR(45),
    IN _SNombre VARCHAR(45),
    IN _PApellido VARCHAR(45),
    IN _SApellido VARCHAR(45),
    IN _Direccion VARCHAR(45),
    IN _Cedula VARCHAR(45),
    IN _Telefono VARCHAR(45),
    IN _Sexo_idSexo INT,
    IN _Parentesco_idParentesco INT
)
BEGIN
    UPDATE tutor SET
        PNombre = _PNombre,
        SNombre = _SNombre,
        PApellido = _PApellido,
        SApellido = _SApellido,
        Direccion = _Direccion,
        Cedula = _Cedula,
        Telefono = _Telefono,
        Sexo_idSexo = _Sexo_idSexo,
        Parentesco_idParentesco = _Parentesco_idParentesco
    WHERE
        idTutor = _idTutor;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_usuario`(
    IN _idUsuario int,
    IN _Usuario varchar(45),
    IN _Nombre varchar(45),
    IN _Contrasena varchar(45),
    IN _Rol_idRol int
)
BEGIN
    UPDATE usuario SET
        Usuario = _Usuario,
        Nombre = _Nombre,
        Contrasena = _Contrasena,
        Rol_idRol = _Rol_idRol
    WHERE
        idUsuario = _idUsuario;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
<<<<<<< HEAD
/*!50003 DROP PROCEDURE IF EXISTS `vista_alumnos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `vista_alumnos`(IN studentId INT)
SELECT
        MT.idMatricula AS '#',
        MT.CodMatricula AS 'Código de matrícula',
        AA.Anio_Academico AS 'Año académico',
        AL.Fecha_Nacimiento AS 'Fecha de nacimiento',
        SX.Sexo AS 'Sexo',
        NT.Nota AS 'Notas',
        AL.Telefono AS 'Teléfono Alumno',
        AG.Asignatura AS 'Asignatura',
        TT.Telefono AS 'Teléfono Tutor',
        TT.Cedula AS 'Cédula Tutor',
        TT.Direccion AS 'Dirección Tutor',
        TRIM(G.Grado) AS 'Grado',
        TRIM(SC.NSecc) AS 'Sección',
        TRIM(T.Turno) AS 'Turno',
        PT.Parentesco AS 'Parentesco Tutor',
        STX.Sexo AS 'Sexo Tutor',
        CONCAT(TRIM(AL.PNombre), ' ', TRIM(AL.SNombre), ' ', TRIM(AL.PApellido), ' ', TRIM(AL.SApellido)) AS 'Alumno',
        CONCAT(TRIM(TT.PNombre), ' ', TRIM(TT.SNombre), ' ', TRIM(TT.PApellido), ' ', TRIM(TT.SApellido)) AS 'Tutor'
    FROM Matricula AS MT
    JOIN Anio_Academico AS AA ON MT.Anio_Academico_idAnio_Academico = AA.idAnio_Academico
    JOIN GradoSeccion AS GS ON MT.GradoSeccion_idGradoSeccion = GS.idGradoSeccion
    JOIN Grado AS G ON GS.Grado_idGrado = G.idGrado
    JOIN Seccion AS SC ON GS.Seccion_idSeccion = SC.idSeccion
    JOIN Alumnos AS AL ON MT.Alumnos_idAlumno = AL.idAlumno
    JOIN Sexo AS SX ON AL.Sexo_idSexo = SX.idSexo
    JOIN Tutor AS TT ON AL.Tutor_idTutor = TT.idTutor
    JOIN Turno AS T ON MT.Turno_idTurno = T.idTurno
    JOIN Parentesco AS PT ON TT.Parentesco_idParentesco = PT.idParentesco
    JOIN Sexo AS STX ON TT.Sexo_idSexo = STX.idSexo
    JOIN Nota AS NT ON MT.idMatricula = NT.Matricula_idMatricula
    JOIN Asignatura AS AG ON NT.Asignatura_idAsignatura = AG.idAsignatura
    WHERE AL.idAlumno = studentId
    ORDER BY MT.idMatricula ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
=======
>>>>>>> fde97636d7e8cbc3043dadb86be76150e68d675d

--
-- Final view structure for view `view_cantalumnos`
--

/*!50001 DROP VIEW IF EXISTS `view_cantalumnos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb3 */;
/*!50001 SET character_set_results     = utf8mb3 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_cantalumnos` AS select `g`.`Grado` AS `Grado`,count(`a`.`idAlumno`) AS `TotalAlumnos` from (((`grado` `g` join `gradoseccion` `gs` on((`g`.`idGrado` = `gs`.`Grado_idGrado`))) join `matricula` `m` on((`gs`.`idGradoSeccion` = `m`.`GradoSeccion_idGradoSeccion`))) join `alumnos` `a` on((`m`.`Alumnos_idAlumno` = `a`.`idAlumno`))) group by `g`.`Grado` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_infopadres`
--

/*!50001 DROP VIEW IF EXISTS `view_infopadres`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb3 */;
/*!50001 SET character_set_results     = utf8mb3 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_infopadres` AS select `p`.`idTutor` AS `#`,concat(trim(`p`.`PNombre`),' ',trim(`p`.`SNombre`),' ',trim(`p`.`PApellido`),' ',trim(`p`.`SApellido`)) AS `Nombre del tutor`,`p`.`Telefono` AS `Telefono`,`p`.`Direccion` AS `Dirección`,`p`.`Cedula` AS `Cedula` from `tutor` `p` order by concat(trim(`p`.`PNombre`),' ',trim(`p`.`SNombre`),' ',trim(`p`.`PApellido`),' ',trim(`p`.`SApellido`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_matriactual`
--

/*!50001 DROP VIEW IF EXISTS `view_matriactual`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb3 */;
/*!50001 SET character_set_results     = utf8mb3 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_matriactual` AS select `a`.`idAlumno` AS `#`,concat(trim(`a`.`PNombre`),' ',trim(`a`.`SNombre`),' ',trim(`a`.`PApellido`),' ',trim(`a`.`SApellido`)) AS `Alumno`,`a`.`Direccion` AS `Direccion`,`a`.`Fecha_Nacimiento` AS `Fecha_Nacimiento`,`a`.`Telefono` AS `Telefono`,`aa`.`Anio_Academico` AS `Año Académico`,`g`.`Grado` AS `Grado`,`s`.`NSecc` AS `Sección`,`t`.`Turno` AS `Turno` from ((((((`alumnos` `a` join `matricula` `m` on((`a`.`idAlumno` = `m`.`Alumnos_idAlumno`))) join `anio_academico` `aa` on((`m`.`Anio_Academico_idAnio_Academico` = `aa`.`idAnio_Academico`))) join `gradoseccion` `gs` on((`m`.`GradoSeccion_idGradoSeccion` = `gs`.`idGradoSeccion`))) join `grado` `g` on((`gs`.`Grado_idGrado` = `g`.`idGrado`))) join `seccion` `s` on((`gs`.`Seccion_idSeccion` = `s`.`idSeccion`))) join `turno` `t` on((`m`.`Turno_idTurno` = `t`.`idTurno`))) where (`aa`.`Anio_Academico` = '2024') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_turnosalum`
--

/*!50001 DROP VIEW IF EXISTS `view_turnosalum`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb3 */;
/*!50001 SET character_set_results     = utf8mb3 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_turnosalum` AS select `a`.`idAlumno` AS `#`,concat(trim(`a`.`PNombre`),' ',trim(`a`.`SNombre`),' ',trim(`a`.`PApellido`),' ',trim(`a`.`SApellido`)) AS `Alumno`,`a`.`Direccion` AS `Direccion`,`a`.`Fecha_Nacimiento` AS `Fecha_Nacimiento`,`a`.`Telefono` AS `Telefono`,`t`.`Turno` AS `Turno` from (((`alumnos` `a` join `matricula` `m` on((`a`.`idAlumno` = `m`.`Alumnos_idAlumno`))) join `turno` `t` on((`m`.`Turno_idTurno` = `t`.`idTurno`))) join `anio_academico` `aa` on((`m`.`Anio_Academico_idAnio_Academico` = `aa`.`idAnio_Academico`))) order by `a`.`idAlumno` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_usuarios`
--

/*!50001 DROP VIEW IF EXISTS `view_usuarios`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb3 */;
/*!50001 SET character_set_results     = utf8mb3 */;
/*!50001 SET collation_connection      = utf8mb3_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_usuarios` AS select `u`.`idUsuario` AS `#`,`u`.`Usuario` AS `Usuario`,`u`.`Nombre` AS `Nombre del Usuario`,`r`.`Rol` AS `Rol` from (`usuario` `u` join `rol` `r` on((`u`.`Rol_idRol` = `r`.`idRol`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
<<<<<<< HEAD
-- Final view structure for view `vista_datos_alumnos`
--

/*!50001 DROP VIEW IF EXISTS `vista_datos_alumnos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vista_datos_alumnos` AS select `mt`.`idMatricula` AS `#`,`mt`.`CodMatricula` AS `Código de matrícula`,`aa`.`Anio_Academico` AS `Año académico`,`al`.`Fecha_Nacimiento` AS `Fecha de nacimiento`,`sx`.`Sexo` AS `Sexo`,`nt`.`Nota` AS `Notas`,`al`.`Telefono` AS `Teléfono Alumno`,`ag`.`Asignatura` AS `Asignatura`,`tt`.`Telefono` AS `Teléfono Tutor`,`tt`.`Cedula` AS `Cédula Tutor`,`tt`.`Direccion` AS `Dirección Tutor`,trim(`g`.`Grado`) AS `Grado`,trim(`sc`.`NSecc`) AS `Sección`,trim(`t`.`Turno`) AS `Turno`,`pt`.`Parentesco` AS `Parentesco Tutor`,`stx`.`Sexo` AS `Sexo Tutor`,concat(trim(`al`.`PNombre`),' ',trim(`al`.`SNombre`),' ',trim(`al`.`PApellido`),' ',trim(`al`.`SApellido`)) AS `Alumno`,concat(trim(`tt`.`PNombre`),' ',trim(`tt`.`SNombre`),' ',trim(`tt`.`PApellido`),' ',trim(`tt`.`SApellido`)) AS `Tutor` from ((((((((((((`matricula` `mt` join `anio_academico` `aa` on((`mt`.`Anio_Academico_idAnio_Academico` = `aa`.`idAnio_Academico`))) join `gradoseccion` `gs` on((`mt`.`GradoSeccion_idGradoSeccion` = `gs`.`idGradoSeccion`))) join `grado` `g` on((`gs`.`Grado_idGrado` = `g`.`idGrado`))) join `seccion` `sc` on((`gs`.`Seccion_idSeccion` = `sc`.`idSeccion`))) join `alumnos` `al` on((`mt`.`Alumnos_idAlumno` = `al`.`idAlumno`))) join `sexo` `sx` on((`al`.`Sexo_idSexo` = `sx`.`idSexo`))) join `tutor` `tt` on((`al`.`Tutor_idTutor` = `tt`.`idTutor`))) join `turno` `t` on((`mt`.`Turno_idTurno` = `t`.`idTurno`))) join `parentesco` `pt` on((`tt`.`Parentesco_idParentesco` = `pt`.`idParentesco`))) join `sexo` `stx` on((`tt`.`Sexo_idSexo` = `stx`.`idSexo`))) join `nota` `nt` on((`mt`.`idMatricula` = `nt`.`Matricula_idMatricula`))) join `asignatura` `ag` on((`nt`.`Asignatura_idAsignatura` = `ag`.`idAsignatura`))) order by `mt`.`idMatricula` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
=======
>>>>>>> fde97636d7e8cbc3043dadb86be76150e68d675d
-- Final view structure for view `vistareporteestudiantes`
--

/*!50001 DROP VIEW IF EXISTS `vistareporteestudiantes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vistareporteestudiantes` AS select `al`.`idAlumno` AS `idAlumno`,`mt`.`idMatricula` AS `#`,`mt`.`CodMatricula` AS `Código de matrícula`,`aa`.`Anio_Academico` AS `Año académico`,`al`.`Fecha_Nacimiento` AS `Fecha de nacimiento`,`sx`.`Sexo` AS `Sexo`,`nt`.`Nota` AS `Notas`,`ag`.`Asignatura` AS `Asignatura`,`tt`.`Telefono` AS `Teléfono`,trim(`g`.`Grado`) AS `Grado`,trim(`sc`.`NSecc`) AS `Sección`,trim(`t`.`Turno`) AS `Turno`,concat(trim(`al`.`PNombre`),' ',trim(`al`.`SNombre`),' ',trim(`al`.`PApellido`),' ',trim(`al`.`SApellido`)) AS `Alumno`,concat(trim(`tt`.`PNombre`),' ',trim(`tt`.`SNombre`),' ',trim(`tt`.`PApellido`),' ',trim(`tt`.`SApellido`)) AS `Tutor` from ((((((((((`matricula` `mt` join `anio_academico` `aa` on((`mt`.`Anio_Academico_idAnio_Academico` = `aa`.`idAnio_Academico`))) join `gradoseccion` `gs` on((`mt`.`GradoSeccion_idGradoSeccion` = `gs`.`idGradoSeccion`))) join `grado` `g` on((`gs`.`Grado_idGrado` = `g`.`idGrado`))) join `seccion` `sc` on((`gs`.`Seccion_idSeccion` = `sc`.`idSeccion`))) join `alumnos` `al` on((`mt`.`Alumnos_idAlumno` = `al`.`idAlumno`))) join `sexo` `sx` on((`al`.`Sexo_idSexo` = `sx`.`idSexo`))) join `tutor` `tt` on((`al`.`Tutor_idTutor` = `tt`.`idTutor`))) join `turno` `t` on((`mt`.`Turno_idTurno` = `t`.`idTurno`))) join `nota` `nt` on((`mt`.`idMatricula` = `nt`.`Matricula_idMatricula`))) join `asignatura` `ag` on((`nt`.`Asignatura_idAsignatura` = `ag`.`idAsignatura`))) order by `mt`.`idMatricula` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_matriculados`
--

/*!50001 DROP VIEW IF EXISTS `vw_matriculados`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_matriculados` AS select `mt`.`idMatricula` AS `#`,`mt`.`CodMatricula` AS `Código de matrícula`,`aa`.`Anio_Academico` AS `Año académico`,trim(`g`.`Grado`) AS `Grado`,trim(`sc`.`NSecc`) AS `Sección`,trim(`t`.`Turno`) AS `Turno`,concat(trim(`al`.`PNombre`),' ',trim(`al`.`SNombre`),' ',trim(`al`.`PApellido`),' ',trim(`al`.`SApellido`)) AS `Alumno`,concat(trim(`tt`.`PNombre`),' ',trim(`tt`.`SNombre`),' ',trim(`tt`.`PApellido`),' ',trim(`tt`.`SApellido`)) AS `Tutor` from (((((((`matricula` `mt` join `anio_academico` `aa` on((`mt`.`Anio_Academico_idAnio_Academico` = `aa`.`idAnio_Academico`))) join `gradoseccion` `gs` on((`mt`.`GradoSeccion_idGradoSeccion` = `gs`.`idGradoSeccion`))) join `grado` `g` on((`gs`.`Grado_idGrado` = `g`.`idGrado`))) join `seccion` `sc` on((`gs`.`Seccion_idSeccion` = `sc`.`idSeccion`))) join `alumnos` `al` on((`mt`.`Alumnos_idAlumno` = `al`.`idAlumno`))) join `tutor` `tt` on((`al`.`Tutor_idTutor` = `tt`.`idTutor`))) join `turno` `t` on((`mt`.`Turno_idTurno` = `t`.`idTurno`))) order by `mt`.`idMatricula` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

<<<<<<< HEAD
-- Dump completed on 2024-06-22 22:30:58
=======
-- Dump completed on 2024-06-22 20:18:57
>>>>>>> fde97636d7e8cbc3043dadb86be76150e68d675d
