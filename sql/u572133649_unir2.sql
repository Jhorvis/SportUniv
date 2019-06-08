-- MySQL dump 10.16  Distrib 10.1.24-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u572133649_unir2
-- ------------------------------------------------------
-- Server version	10.1.24-MariaDB

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
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articulos` (
  `idarticulos` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` varchar(50) NOT NULL,
  `seriales` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `existencia` varchar(50) NOT NULL,
  PRIMARY KEY (`idarticulos`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (1,'Balon de futbol','12345','tamanaco','5','9');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

--
-- Table structure for table `artiestudiante`
--

DROP TABLE IF EXISTS `artiestudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artiestudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idarticulos` int(11) NOT NULL,
  `articulo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `seriales` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `existencia` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artiestudiante`
--

/*!40000 ALTER TABLE `artiestudiante` DISABLE KEYS */;
INSERT INTO `artiestudiante` VALUES (1,1,'Balon de futbol','12345','tamanaco','5','0','0000-00-00',0),(2,1,'Balon de futbol','12345','tamanaco','5','1','0000-00-00',0),(3,1,'Balon de futbol','12345','tamanaco','5','','0000-00-00',0);
/*!40000 ALTER TABLE `artiestudiante` ENABLE KEYS */;

--
-- Table structure for table `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `accion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `servidor` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria`
--

/*!40000 ALTER TABLE `auditoria` DISABLE KEYS */;
INSERT INTO `auditoria` VALUES (1,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.249.201.124','2016-04-26','16:21:38'),(2,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.248.248.218','2016-05-06','01:35:02'),(3,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.234.229.151','2016-05-07','15:23:06'),(4,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','186.185.158.254','2016-05-07','15:27:36'),(5,'Administrador','99999999','Modificó el registro del estudiante: <font color=blue><i>18663835 jhorvis sanchez sanchez</i></font>',' Usuario: Administrador','186.185.158.254','2016-05-07','15:33:18'),(6,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.248.248.218','2016-05-10','12:20:30'),(7,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.249.78.44','2016-05-16','22:36:14'),(8,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.249.78.44','2016-05-16','22:41:07'),(9,'Administrador','99999999','Finalizo la fase previa de un torneo',' Usuario: Administrador','201.249.78.44','2016-05-16','23:03:06'),(10,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2016-06-06','18:18:30'),(11,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2016-07-19','20:22:34'),(12,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.248.248.218','2016-08-03','00:13:30'),(13,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','186.14.88.75','2016-08-03','02:09:31'),(14,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2016-08-17','20:04:05'),(15,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2016-08-31','20:00:16'),(16,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2016-09-19','16:18:48'),(17,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2016-09-20','18:15:08'),(18,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','201.248.248.218','2016-11-08','12:06:17'),(19,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2016-11-25','14:24:39'),(20,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2017-02-21','14:24:37'),(21,'Administrador','99999999','Inicio de Session',' Usuario: Administrador','190.202.92.254','2017-03-28','19:25:51'),(22,'Administrador','99999999','Reinicio la fase previa de un torneo',' Usuario: Administrador','190.202.92.254','2017-03-28','19:37:55');
/*!40000 ALTER TABLE `auditoria` ENABLE KEYS */;

--
-- Table structure for table `encuentros`
--

DROP TABLE IF EXISTS `encuentros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuentros` (
  `idencuentros` int(10) NOT NULL AUTO_INCREMENT,
  `equipol` varchar(100) NOT NULL,
  `equipov` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  PRIMARY KEY (`idencuentros`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuentros`
--

/*!40000 ALTER TABLE `encuentros` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuentros` ENABLE KEYS */;

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante` (
  `idregistro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `articulos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idregistro`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` VALUES (1,'jhorvis','sanchez sanchez',18663835,'04266338848','Mercadotecnia','jhorvis@gmmail.com',''),(2,'Liz ','Medina',18381127,'04162183304','Administración','lbsmedina@hotmail.com','');
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;

--
-- Table structure for table `estudiantesgym`
--

DROP TABLE IF EXISTS `estudiantesgym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantesgym` (
  `idestugym` int(10) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `asistencia` int(11) NOT NULL,
  PRIMARY KEY (`idestugym`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantesgym`
--

/*!40000 ALTER TABLE `estudiantesgym` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantesgym` ENABLE KEYS */;

--
-- Table structure for table `estudiantesgymcarrera`
--

DROP TABLE IF EXISTS `estudiantesgymcarrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantesgymcarrera` (
  `idestudiantegymcarrera` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  PRIMARY KEY (`idestudiantegymcarrera`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantesgymcarrera`
--

/*!40000 ALTER TABLE `estudiantesgymcarrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantesgymcarrera` ENABLE KEYS */;

--
-- Table structure for table `estudiantestorneo`
--

DROP TABLE IF EXISTS `estudiantestorneo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantestorneo` (
  `idestudiantetorneo` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(20) NOT NULL,
  `torneo` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  PRIMARY KEY (`idestudiantetorneo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantestorneo`
--

/*!40000 ALTER TABLE `estudiantestorneo` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantestorneo` ENABLE KEYS */;

--
-- Table structure for table `goleadores`
--

DROP TABLE IF EXISTS `goleadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goleadores` (
  `id_goleador` int(10) NOT NULL AUTO_INCREMENT,
  `jugador` varchar(100) NOT NULL,
  `jornada` varchar(30) NOT NULL,
  `goles` int(3) NOT NULL,
  `faltas` int(11) NOT NULL,
  `tarjetasA` int(11) NOT NULL,
  `tarjetasR` int(11) NOT NULL,
  PRIMARY KEY (`id_goleador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goleadores`
--

/*!40000 ALTER TABLE `goleadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `goleadores` ENABLE KEYS */;

--
-- Table structure for table `inscrequipo`
--

DROP TABLE IF EXISTS `inscrequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscrequipo` (
  `idinscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `notificacion` int(11) NOT NULL,
  PRIMARY KEY (`idinscripcion`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscrequipo`
--

/*!40000 ALTER TABLE `inscrequipo` DISABLE KEYS */;
INSERT INTO `inscrequipo` VALUES (1,'jhorvis','sanchez','jhorvissancchez2@gmail.com','4061','18663835','Informatica','jhorvis2','123456000',1),(2,'carlos','sanchez','dddd@hh.com','233','12345678','Comercio Exterior','car','123450',1),(3,'Pedro','Perez','pedrito@gmail.com','04162487568','23742267','Informatica','pedrito25','123456789',1),(4,'asd','asd','qasd@asd.com','123','2134564','Diseño de Modas','asd18','123450',0),(5,'hola','mundo','asd@as.com','1','1','Informatica','hola','mundo',0);
/*!40000 ALTER TABLE `inscrequipo` ENABLE KEYS */;

--
-- Table structure for table `jornadas`
--

DROP TABLE IF EXISTS `jornadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jornadas` (
  `id_jornadas` int(11) NOT NULL AUTO_INCREMENT,
  `nombrejornada` int(11) NOT NULL,
  `torneo` varchar(11) NOT NULL,
  PRIMARY KEY (`id_jornadas`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jornadas`
--

/*!40000 ALTER TABLE `jornadas` DISABLE KEYS */;
INSERT INTO `jornadas` VALUES (1,1,'1'),(2,2,'1'),(3,1,'2');
/*!40000 ALTER TABLE `jornadas` ENABLE KEYS */;

--
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `idmensaje` int(11) NOT NULL AUTO_INCREMENT,
  `origen` varchar(30) NOT NULL,
  `destino` varchar(30) NOT NULL,
  `mensaje` varchar(1000) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `hora` varchar(15) NOT NULL,
  PRIMARY KEY (`idmensaje`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
INSERT INTO `mensajes` VALUES (1,'España','pedrito25','Nos place informarle que su solicitud para formar parte\r\ndel torneo  de  Futbol Sala con el equipo <b>barcelona</b> ha sido <font color=\'green\'><b>APROBADA!</b></font> por este medio se le estará \r\ninformando las fechas que jugara su equipo','Solicitud de participacion en el torneo de Futbol Sala',1,'2016-05-16','22:53:47'),(2,'España','asd18','Nos place informarle que su solicitud para formar parte\r\ndel torneo  de  Futbol Sala con el equipo <b>prueba</b> ha sido <font color=\'green\'><b>APROBADA!</b></font> por este medio se le estará \r\ninformando las fechas que jugara su equipo','Solicitud de participacion en el torneo de Futbol Sala',0,'2016-05-16','22:57:41'),(3,'España','pedrito25','El proximo compromiso de su equipo fue pautado para\nel dia . Lunes 2016-05-11 a las\n  11:30 AM <br> <br>\nbarcelona VS  prueba','Próximo encentro de tu equipo!',0,'2016-05-16','22:58:13'),(4,'España','asd18','El proximo compromiso de su equipo fue pautado para\nel dia . Lunes 2016-05-11 a las\n  11:30 AM <br> <br>\nbarcelona VS  prueba','Próximo encentro de tu equipo!',1,'2016-05-16','22:58:13'),(5,'España','asd18','El proximo compromiso de su equipo fue pautado para\nel dia . Martes 2016-05-04 a las\n   <br> <br>\nprueba VS  barcelona','Próximo encentro de tu equipo!',0,'2016-05-16','23:00:32'),(6,'España','pedrito25','El proximo compromiso de su equipo fue pautado para\nel dia . Martes 2016-05-04 a las\n   <br> <br>\nprueba VS  barcelona','Próximo encentro de tu equipo!',0,'2016-05-16','23:00:32'),(7,'España','hola','Nos place informarle que su solicitud para formar parte\r\ndel torneo  de  Futbol Sala con el equipo <b>asd</b> ha sido <font color=\'green\'><b>APROBADA!</b></font> por este medio se le estará \r\ninformando las fechas que jugara su equipo','Solicitud de participacion en el torneo de Futbol Sala',0,'2016-11-08','12:06:35');
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;

--
-- Table structure for table `pagogym`
--

DROP TABLE IF EXISTS `pagogym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagogym` (
  `idgym` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(20) NOT NULL,
  `factura` int(50) NOT NULL,
  `pago` varchar(30) NOT NULL,
  `cedula` int(11) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  PRIMARY KEY (`idgym`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagogym`
--

/*!40000 ALTER TABLE `pagogym` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagogym` ENABLE KEYS */;

--
-- Table structure for table `periodo`
--

DROP TABLE IF EXISTS `periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo` (
  `idperiodo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreacademico` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaini` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechafina` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`idperiodo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo`
--

/*!40000 ALTER TABLE `periodo` DISABLE KEYS */;
INSERT INTO `periodo` VALUES (1,'2016','2016-05-19','2016-05-28'),(2,'2014-2015','2016-05-10','2016-06-16');
/*!40000 ALTER TABLE `periodo` ENABLE KEYS */;

--
-- Table structure for table `prueba`
--

DROP TABLE IF EXISTS `prueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prueba` (
  `nombrequipo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prueba`
--

/*!40000 ALTER TABLE `prueba` DISABLE KEYS */;
/*!40000 ALTER TABLE `prueba` ENABLE KEYS */;

--
-- Table structure for table `regisequipo`
--

DROP TABLE IF EXISTS `regisequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regisequipo` (
  `idequipo` int(11) NOT NULL AUTO_INCREMENT,
  `identidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombrequipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `coloruni` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `torneo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefonodel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `deleequipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `disciplina` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idequipo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regisequipo`
--

/*!40000 ALTER TABLE `regisequipo` DISABLE KEYS */;
INSERT INTO `regisequipo` VALUES (1,'23742267','barcelona','rojo','04264659373','1','04146828081','Luis Martinez','Futbol Sala','2'),(2,'2134564','prueba','blanco','4061','1','4061','Jhorvis','Futbol Sala','2'),(3,'1','asd','asd','asd','2','asd','asd','Futbol Sala','2');
/*!40000 ALTER TABLE `regisequipo` ENABLE KEYS */;

--
-- Table structure for table `regisjornadas`
--

DROP TABLE IF EXISTS `regisjornadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regisjornadas` (
  `id_encuentro` int(10) NOT NULL AUTO_INCREMENT,
  `nombrejornada` varchar(30) NOT NULL,
  `fechajornada` varchar(30) NOT NULL,
  `torneo` varchar(10) NOT NULL,
  `equipo_local` varchar(100) NOT NULL,
  `equipo_visitante` varchar(100) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id_encuentro`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regisjornadas`
--

/*!40000 ALTER TABLE `regisjornadas` DISABLE KEYS */;
INSERT INTO `regisjornadas` VALUES (1,'1','2016-05-11','1','barcelona','prueba','Lunes','11:30 AM',1),(2,'2','2016-05-04','1','prueba','barcelona','Martes','',1);
/*!40000 ALTER TABLE `regisjornadas` ENABLE KEYS */;

--
-- Table structure for table `regisjugadore`
--

DROP TABLE IF EXISTS `regisjugadore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regisjugadore` (
  `idjugadore` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Edad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `dorsal` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `torneo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `identidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombrequipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idjugadore`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regisjugadore`
--

/*!40000 ALTER TABLE `regisjugadore` DISABLE KEYS */;
/*!40000 ALTER TABLE `regisjugadore` ENABLE KEYS */;

--
-- Table structure for table `regisresultado`
--

DROP TABLE IF EXISTS `regisresultado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regisresultado` (
  `id_resultado` int(20) NOT NULL AUTO_INCREMENT,
  `equipo_local` varchar(100) NOT NULL,
  `goles_local` int(3) NOT NULL,
  `equipo_visitante` varchar(100) NOT NULL,
  `goles_visitante` int(3) NOT NULL,
  `encuentro` int(10) NOT NULL,
  `torneo` int(11) NOT NULL,
  `nombrejornada` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  PRIMARY KEY (`id_resultado`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regisresultado`
--

/*!40000 ALTER TABLE `regisresultado` DISABLE KEYS */;
INSERT INTO `regisresultado` VALUES (1,'barcelona',5,'prueba',0,1,1,'1','2016-05-11'),(2,'prueba',10,'barcelona',0,2,1,'2','2016-05-04');
/*!40000 ALTER TABLE `regisresultado` ENABLE KEYS */;

--
-- Table structure for table `registorneo`
--

DROP TABLE IF EXISTS `registorneo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registorneo` (
  `idtorneo` int(11) NOT NULL AUTO_INCREMENT,
  `nombretorneo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `disciplina` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechainitorneo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidaequi` int(11) NOT NULL,
  `fechafintorneo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fase1` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`idtorneo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registorneo`
--

/*!40000 ALTER TABLE `registorneo` DISABLE KEYS */;
INSERT INTO `registorneo` VALUES (1,'gggggg',1,'Futbol Sala','2016-05-08',2,'2016-05-31',0,0),(2,'Copa Cocacola',2,'Futbol Sala','2016-05-01',12,'2016-05-31',0,0);
/*!40000 ALTER TABLE `registorneo` ENABLE KEYS */;

--
-- Table structure for table `tablaposicion`
--

DROP TABLE IF EXISTS `tablaposicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablaposicion` (
  `id_posicion` int(11) NOT NULL AUTO_INCREMENT,
  `nombrequipo` varchar(1000) NOT NULL,
  `play` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `loss` int(11) NOT NULL,
  `torneo` int(11) NOT NULL,
  `idequipo` int(11) NOT NULL,
  `golfavor` int(11) NOT NULL,
  `golcontra` int(11) NOT NULL,
  `diferenciagol` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `estatus_e` int(11) NOT NULL,
  PRIMARY KEY (`id_posicion`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablaposicion`
--

/*!40000 ALTER TABLE `tablaposicion` DISABLE KEYS */;
INSERT INTO `tablaposicion` VALUES (1,'barcelona',2,1,1,1,1,5,10,-5,0,3,2,0),(2,'prueba',2,1,1,1,2,10,5,5,0,3,1,0);
/*!40000 ALTER TABLE `tablaposicion` ENABLE KEYS */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `identidad` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,99999999,'España','Administrador',123456000,1),(2,18663835,'jhorvis','jhorvis2',123456000,2),(3,12345678,'carlos','car',123450,2),(4,23742267,'Pedro','pedrito25',123456789,2),(5,2134564,'asd','asd18',123450,2),(6,1,'hola','hola',0,2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

--
-- Dumping events for database 'u572133649_unir2'
--

--
-- Dumping routines for database 'u572133649_unir2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-08 19:54:43
