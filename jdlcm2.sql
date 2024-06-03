CREATE DATABASE  IF NOT EXISTS `bd_jdlcm` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bd_jdlcm`;
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Carlos','Alberto','Pérez','Gómez','Calle 123','2010-05-15','555-1234',1,1),(2,'Sofía','María','López','Martínez','Avenida 45','2011-06-20','555-5678',2,2),(3,'Luis','Fernando','García','Hernández','Boulevard 67','2012-07-25','555-6789',3,1),(4,'Camila','Patricia','Rodríguez','Fernández','Carrera 89','2013-08-30','555-7890',4,2),(5,'Juan','David','Sánchez','González','Calle 101','2010-09-10','555-8901',5,1),(6,'Valentina','Victoria','Ramírez','Jiménez','Avenida 121','2011-10-15','555-9012',6,2),(7,'Andrés','Eduardo','Torres','Ruiz','Boulevard 143','2012-11-20','555-0123',7,1),(8,'Isabella','Beatriz','Flores','Castro','Carrera 165','2013-12-25','555-1235',8,2),(9,'Mateo','Ángel','Ortiz','Vargas','Calle 187','2010-01-05','555-3456',9,1),(10,'Lucía','Mercedes','Morales','Ramos','Avenida 209','2011-02-10','555-4567',10,2),(11,'Alejandro','José','Hernández','Gómez','Calle 56','2012-03-25','555-5678',1,1),(12,'Fernanda','Isabel','Martínez','Sánchez','Avenida 78','2013-04-20','555-6789',2,2),(13,'Diego','Andrés','González','Fernández','Boulevard 90','2010-08-15','555-7890',3,1),(14,'Valeria','Camila','Fernández','López','Carrera 123','2011-09-10','555-8901',4,2),(15,'Juan','Carlos','Díaz','Pérez','Calle 145','2012-11-05','555-9012',5,1),(16,'Lucas','Javier','Vargas','Ramírez','Avenida 167','2013-12-01','555-0123',6,2),(17,'María','Fernanda','Molina','Gutiérrez','Boulevard 189','2010-01-05','555-1234',7,1),(18,'Gabriel','Alberto','Rojas','Jiménez','Calle 201','2011-02-20','555-2345',8,2),(19,'Santiago','Andrés','Pérez','Ortega','Avenida 223','2012-03-15','555-3456',9,1),(20,'Paula','Isabella','Suárez','Hernández','Carrera 245','2013-04-30','555-4567',10,2),(21,'Camilo','Andrés','Gómez','Hernández','Calle 34','2012-07-10','555-5678',1,1),(22,'Juliana','María','Sánchez','López','Avenida 56','2013-08-25','555-6789',2,2),(23,'Mateo','Alejandro','Fernández','Martínez','Boulevard 78','2010-09-30','555-7890',3,1),(24,'Valentina','Sofía','López','González','Carrera 90','2011-10-15','555-8901',4,2),(25,'David','Sebastián','Pérez','Díaz','Calle 112','2012-11-20','555-9012',5,1),(26,'Isabella','Lucía','Ramírez','Vargas','Avenida 134','2013-12-05','555-0123',6,2),(27,'Juan','Diego','Gutiérrez','Molina','Boulevard 156','2010-01-20','555-1234',7,1),(28,'Laura','Daniela','Jiménez','Rojas','Calle 178','2011-02-05','555-2345',8,2),(29,'Santiago','José','Ortega','Pérez','Avenida 190','2012-03-10','555-3456',9,1),(30,'María','Camila','Hernández','Suárez','Carrera 212','2013-04-25','555-4567',10,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matricula`
--

LOCK TABLES `matricula` WRITE;
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
INSERT INTO `matricula` VALUES (1,12345,1,1,1,1,'2024-05-20'),(2,23456,1,2,2,2,'2024-05-20'),(3,34567,1,3,1,3,'2024-05-20'),(4,45678,1,4,2,4,'2024-05-20'),(5,56789,1,5,1,5,'2024-05-20'),(6,67890,1,6,2,6,'2024-05-20'),(7,78901,1,7,1,7,'2024-05-20'),(8,89012,1,8,2,8,'2024-05-20'),(9,90123,1,9,1,9,'2024-05-20'),(10,10123,1,10,2,10,'2024-05-20'),(11,11234,1,11,1,11,'2024-05-20'),(12,12345,1,12,2,12,'2024-05-20'),(13,23456,1,13,1,13,'2024-05-20'),(14,34567,1,14,2,14,'2024-05-20'),(15,45678,1,15,1,15,'2024-05-20'),(16,56789,1,1,2,16,'2024-05-20'),(17,67890,1,2,1,17,'2024-05-20'),(18,78901,1,3,2,18,'2024-05-20'),(19,89012,1,4,1,19,'2024-05-20'),(20,90123,1,5,2,20,'2024-05-20'),(21,10123,1,6,1,21,'2024-05-20'),(22,11234,1,7,2,22,'2024-05-20'),(23,12345,1,8,1,23,'2024-05-20'),(24,23456,1,9,2,24,'2024-05-20'),(25,34567,1,10,1,25,'2024-05-20'),(26,45678,1,11,2,26,'2024-05-20'),(27,56789,1,12,1,27,'2024-05-20'),(28,67890,1,13,2,28,'2024-05-20'),(29,78901,1,14,1,29,'2024-05-20'),(30,89012,1,15,2,30,'2024-05-20');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota`
--

LOCK TABLES `nota` WRITE;
/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor`
--

LOCK TABLES `tutor` WRITE;
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
INSERT INTO `tutor` VALUES (1,'Juan','Carlos','Pérez','Gómez','Calle 123','123-456789-0123A','555-1234',1,1),(2,'María','Isabel','López','Martínez','Avenida 45','234-567890-1234B','555-5678',2,2),(3,'Pedro','Antonio','García','Hernández','Boulevard 67','345-678901-2345C','555-6789',1,3),(4,'Ana','Patricia','Rodríguez','Fernández','Carrera 89','456-789012-3456D','555-7890',2,4),(5,'Luis','Fernando','Sánchez','González','Calle 101','567-890123-4567E','555-8901',1,5),(6,'Laura','Victoria','Ramírez','Jiménez','Avenida 121','678-901234-5678F','555-9012',2,6),(7,'Carlos','Eduardo','Torres','Ruiz','Boulevard 143','789-012345-6789G','555-0123',1,7),(8,'Sara','Beatriz','Flores','Castro','Carrera 165','890-123456-7890H','555-1235',2,8),(9,'Miguel','Ángel','Ortiz','Vargas','Calle 187','901-234567-8901I','555-3456',1,9),(10,'Elena','Mercedes','Morales','Ramos','Avenida 209','012-345678-9012J','555-4567',2,10);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2024-05-22 14:01:18
