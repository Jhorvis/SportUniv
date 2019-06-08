-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2016 a las 14:46:39
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idarticulos` int(11) NOT NULL,
  `articulo` varchar(50) NOT NULL,
  `seriales` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `existencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idarticulos`, `articulo`, `seriales`, `marca`, `modelo`, `existencia`) VALUES
(16, 'Balon de futbol sala', 'sin serial', 'Forte', '5', '12'),
(17, 'balon de kikimbol', 'sin serial', 'tamanaco', 'mujer', '99'),
(18, 'malla de voleibol', 'sin serial', 'forte', 'sin modelo', '0'),
(19, 'balon de voleibol', '123654', 'chimba', 'no modelo', '0'),
(20, 'balon de voleibol', '123654', 'chimba', 'no modelo', '0'),
(21, 'fusiles de asalto', 'PJO9080899JJ', 'Kalashnikov', 'AK-105', '-1'),
(22, 'fusiles de asalto', 'PJO9080899JJ', 'Kalashnikov', 'AK-105', '-1'),
(23, 'balon de voleibol', 'PJO9080899JJ', 'Kalashnikov', 'AK-105', '-1'),
(24, 'balon de voleibol', 'PJO9080899JJ', 'Kalashnikov', 'AK-105', '-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artiestudiante`
--

CREATE TABLE `artiestudiante` (
  `id` int(11) NOT NULL,
  `idarticulos` int(11) NOT NULL,
  `articulo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `seriales` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `existencia` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `artiestudiante`
--

INSERT INTO `artiestudiante` (`id`, `idarticulos`, `articulo`, `seriales`, `marca`, `modelo`, `existencia`, `fecha`, `estatus`) VALUES
(8, 13, 'pesa', '21115453', 'gym', 'xxxcxxx', '0', '0000-00-00', 0),
(9, 15, 'balon', 'q324234', '324234', '324234', '0', '0000-00-00', 0),
(10, 16, 'Balon de futbol sala', 'sin serial', 'Forte', '5', '-3', '0000-00-00', 0),
(11, 17, 'balon de kikimbol', 'sin serial', 'tamanaco', 'mujer', '-94', '0000-00-00', 0),
(12, 17, 'balon de kikimbol', 'sin serial', 'tamanaco', 'mujer', '-94', '0000-00-00', 0),
(13, 16, 'Balon de futbol sala', 'sin serial', 'Forte', '5', '-3', '0000-00-00', 0),
(14, 18, 'malla de voleibol', 'sin serial', 'forte', 'sin modelo', '0', '0000-00-00', 0),
(15, 16, 'Balon de futbol sala', 'sin serial', 'Forte', '5', '-3', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `id` int(11) NOT NULL,
  `nivel` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `accion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id`, `nivel`, `usuario`, `accion`, `descripcion`, `fecha`, `hora`) VALUES
(1, '1', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-25', '22:31:46'),
(2, 'Array', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-25', '22:34:56'),
(3, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-25', '22:36:10'),
(4, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-25', '23:20:54'),
(5, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-25', '23:41:09'),
(6, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-26', '00:03:00'),
(7, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-26', '03:11:42'),
(8, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-26', '03:54:48'),
(9, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-31', '18:35:48'),
(10, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-01-31', '19:41:14'),
(11, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-02', '15:53:06'),
(12, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-02', '15:55:04'),
(13, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-02', '16:04:15'),
(14, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-02', '16:28:49'),
(15, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-02', '16:31:27'),
(16, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-05', '03:00:29'),
(17, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '01:42:43'),
(18, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '06:30:58'),
(19, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '07:30:34'),
(20, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '08:21:34'),
(21, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '00:04:45'),
(22, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '00:08:50'),
(23, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '01:13:06'),
(24, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '01:19:07'),
(25, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '01:39:40'),
(26, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '05:15:50'),
(27, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '05:36:34'),
(28, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: admin', '2016-02-06', '05:36:42'),
(29, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-06', '05:37:34'),
(30, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-06', '05:43:24'),
(31, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-06', '05:53:49'),
(32, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-07', '08:32:55'),
(33, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-07', '09:05:47'),
(34, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-07', '11:49:28'),
(35, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-07', '22:24:29'),
(36, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-02-09', '09:06:46'),
(37, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-13', '09:50:21'),
(38, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-13', '10:00:35'),
(39, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-13', '11:31:40'),
(40, 'Administrador', '22369395', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-13', '12:28:05'),
(41, 'Administrador', '18663835', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-15', '21:13:26'),
(42, 'Administrador', '18663835', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-16', '17:14:47'),
(43, 'Administrador', '18663835', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-16', '18:04:11'),
(44, 'Administrador', '18663835', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-17', '12:20:18'),
(45, 'Administrador', '18663835', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-17', '12:24:18'),
(46, 'Administrador', '18663835', 'Inicio de Session', ' Usuario: Jhorvis', '2016-03-18', '09:05:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentros`
--

CREATE TABLE `encuentros` (
  `idencuentros` int(10) NOT NULL,
  `equipol` varchar(100) NOT NULL,
  `equipov` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idregistro` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `articulos` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idregistro`, `nombre`, `apellido`, `cedula`, `telefono`, `carrera`, `correo`, `articulos`) VALUES
(52, 'valmores', 'Vazquez', 22369390, '04135845', 'Informatica', 'rt@hotmail.com', ''),
(53, 'chuy', 'pea', 22369391, '545', 'AdministraciÃ³n', 'leo@hotmail.com', ''),
(54, 'edwar', 'colina', 16474433, '34534534534', 'Informatica', '3324236@hotmail.com', ''),
(55, 'leo', 'pea', 123456, '123456', 'Informatica', '12@hotmail.com', ''),
(56, 'edward', 'colina', 1234567, '11111', 'Informatica', 'fdg@hotmail.com', ''),
(57, 'Jhorvis Jesus', 'Sanchez Oquendo', 18663835, '04266338848', 'Informatica', 'jhorvissanchez2@gmail.com', ''),
(58, 'Catherine Carolina', 'Calatayud Guerrero', 23887540, '04146585791', 'Educ. Preescolar', 'cathe_cg@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrequipo`
--

CREATE TABLE `inscrequipo` (
  `idinscripcion` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inscrequipo`
--

INSERT INTO `inscrequipo` (`idinscripcion`, `nombre`, `apellido`, `edad`, `telefono`, `cedula`, `carrera`, `user`, `pass`) VALUES
(53, 'v', 'v', 1, '1', '22369390', 'Informatica', 'v', 'v'),
(54, 'leo', 'leo', 15, '4541815456', '22369391', 'Informatica', 'c', 'c'),
(55, 'trrtyr', 'rtytytry', 567, '56546', '16474433', 'Educ. Preescolar', '1', '1'),
(56, 'leo', 'leo', 123, '123', '123456', 'AdministraciÃ³n', '159', '123'),
(57, 'medina', 'luis', 19, '04646464564', '123456', 'Informatica', 'medina', '123'),
(58, 'edward', 'colinas', 31, '1234556', '1234567', 'Informatica', 'ed', '123'),
(59, 'Jhorvis Jesus', 'Sanchez Oquendo', 26, '04266338848', '18663835', 'Informatica', 'jhorvis18', '006767'),
(60, 'Jhon', 'Sanchez', 16, '1', '18663835', 'Informatica', 'jsanchez_792', '1'),
(61, 'luis', 'silva', 1, '1', '19485922', 'Contabilidad Comp', 'ls', '1'),
(62, 'pedro', 'avila', 1, '1', '18663834', 'DiseÃ±o de Modas', 'pavila', '1'),
(63, 'Catherine', 'Calatayud', 22, '15615156', '23887540', 'Educ. Preescolar', 'cathi91', '123'),
(64, 'Jose', 'Espina', 20, '20202020', '23876649', 'Informatica', 'joseespina', '987');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE `jornadas` (
  `id_jornadas` int(11) NOT NULL,
  `nombrejornada` varchar(11) NOT NULL,
  `torneo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornadas`
--

INSERT INTO `jornadas` (`id_jornadas`, `nombrejornada`, `torneo`) VALUES
(1, '1', '1'),
(2, '2', '1'),
(3, '3', '1'),
(4, '4', '1'),
(5, '5', '1'),
(6, '6', '1'),
(7, '7', '1'),
(8, '8', '1'),
(9, '1', '4'),
(10, '2', '4'),
(11, '4', '4'),
(12, '5', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `idperiodo` int(11) NOT NULL,
  `nombreacademico` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaini` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechafina` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`idperiodo`, `nombreacademico`, `fechaini`, `fechafina`) VALUES
(6, 'periodo 1', '2015-11-04', '2015-11-18'),
(7, 'periodo II', '2016-01-31', '2016-01-31'),
(8, '2016-1N', '18-01-2016', '30-04-2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regisequipo`
--

CREATE TABLE `regisequipo` (
  `idequipo` int(11) NOT NULL,
  `identidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombrequipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `coloruni` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `torneo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefonodel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `deleequipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `disciplina` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `regisequipo`
--

INSERT INTO `regisequipo` (`idequipo`, `identidad`, `nombrequipo`, `coloruni`, `telefono`, `torneo`, `telefonodel`, `deleequipo`, `disciplina`, `estatus`) VALUES
(14, '22369391', 'madrid', '5345', '545', '41', '3534', '345', 'Futbol Sala', '2'),
(15, '22369391', 'barca', '6546', '54654', '42', '546', '6456', 'Futbol Sala', '2'),
(16, '22369391', 'milan', '645', '654', '43', '645645', '66', 'Futbol Sala', '2'),
(18, '22369390', 'chesea', '654', '5654', '43', '6546', '656', 'Futbol Sala', '2'),
(21, '22369390', 'sevilla', '6456', '654', '42', '54645', '6456', 'Futbol Sala', '2'),
(22, '22369390', 'porto', '6546', '654', '41', '5465', '546', 'Futbol Sala', '2'),
(23, '22369391', 'arsenal', '35', '4534', '44', '33', '5', 'Futbol Sala', '2'),
(24, '22369390', 'argentina', '755', '6756', '44', '756', '77', 'Futbol Sala', '2'),
(27, '123456', 'baseball', 'rojo', '04121668182', '45', 'rty', 'leo', 'Baloncesto', '2'),
(28, '123456', 'basquetep', '54654', '6', '46', '654', '654', 'Baloncesto', '2'),
(29, '123456', 'barca', 'rojo', '1234567899', '41', '04132446', 'leonartdo', 'Futbol Sala', '2'),
(30, '1234567', 'MADRI', 'BLANCO', '04142335455', '41', '04123154145', 'VICENTE', 'Futbol Sala', '2'),
(31, '123456', 'bbbbbb', '2342', '3244', '42', '3432', '4234', 'Futbol Sala', '2'),
(32, '18663835', 'Unir FC', 'Transparente', '04266338848', '1', '02617362320', 'Jhorvis Sanchez', 'Futbol Sala', '2'),
(33, '18663835', 'Unir FC2', 'blanco', '5555555', '2', '55555555', 'barty', 'Baloncesto', '2'),
(34, '18663834', 'los modelos', 'rosa', '1', '2', '1', 'pedrito', 'Baloncesto', '2'),
(35, '18663834', 'los rositas', 'rosa', '1', '1', '1', 'pedrito', 'Futbol Sala', '2'),
(36, '18663835', 'unir nocturno', 'negro', '1', '4', '1', '1', 'Futbol Sala', '2'),
(37, '23887540', 'Los calatayud', 'trasparente', '123', '1', '123', 'Catherine', 'Futbol Sala', '2'),
(38, '23876649', 'READIC FC', 'NEGRO', '4061', '1', '4061', 'Jhorvis Sanchez', 'Futbol Sala', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regisjornadas`
--

CREATE TABLE `regisjornadas` (
  `id_encuentro` int(10) NOT NULL,
  `nombrejornada` varchar(30) NOT NULL,
  `fechajornada` varchar(30) NOT NULL,
  `torneo` varchar(10) NOT NULL,
  `equipo_local` varchar(100) NOT NULL,
  `equipo_visitante` varchar(100) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regisjornadas`
--

INSERT INTO `regisjornadas` (`id_encuentro`, `nombrejornada`, `fechajornada`, `torneo`, `equipo_local`, `equipo_visitante`, `dia`, `hora`) VALUES
(1, '1', '2016-03-07', '1', 'Unir FC', 'READIC FC', 'Lunes', '12:15 PM'),
(2, '1', '2016-03-06', '1', 'los rositas', 'Los calatayud', 'Miercoles', '04:45 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regisjugadore`
--

CREATE TABLE `regisjugadore` (
  `idjugadore` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Edad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `dorsal` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `torneo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `identidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombrequipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `regisjugadore`
--

INSERT INTO `regisjugadore` (`idjugadore`, `nombre`, `apellido`, `cedula`, `telefono`, `Edad`, `carrera`, `dorsal`, `torneo`, `identidad`, `nombrequipo`) VALUES
(110, 'sujeto 1', '1', '18663835', '1', '1', 'Informatica', '1', '<br />\r\n<b>Notice</b>:  Undefi', '18663835', ''),
(111, 'sujeto 2', '1', '18663835', '1', '1', 'Informatica', '2', '<br />\r\n<b>Notice</b>:  Undefi', '18663835', ''),
(113, 'SUJETO 5', '5', '18663834', '5', '5', 'Contabilidad Comp', '5', '4', '18663835', 'unir nocturno'),
(114, 'sujeto 6', '1', '18663833', '1', '1', 'Informatica', '2', '<br />\r\n<b>Notice</b>:  Undefi', '18663835', ''),
(115, 'Sujeto 7', '7', '18663835', '7', '7', 'AdministraciÃ³n', '7', '4', '18663835', 'unir nocturno'),
(116, 'Sujeto 8', '8', '18663835', '8', '8', 'Contabilidad Comp', '8', '4', '18663835', 'unir nocturno'),
(122, 'sujeto 9', '9', '18663835', '9', '9', 'Contabilidad Comp', '9', '4', '18663835', 'unir nocturno'),
(123, 'sujeto 91', '1', '18663835', '1', '1', 'Contabilidad Comp', '91', '4', '18663835', 'unir nocturno'),
(124, 'Jhorvis', '1', '18663835', '1', '1', 'Comercio Exterior', '1', '4', '18663835', 'unir nocturno'),
(125, 'Sujeto 92', '92', '18663835', '18', '18', 'Contabilidad Comp', '18', '1', '18663835', 'Unir FC'),
(126, 'Diego', 'Castellano', '19485922', '0404', '26', 'Informatica', '88', '1', '23876649', 'READIC FC'),
(127, 'Jhorvis', 'Sanchez', '18663833', '12', '26', 'Informatica', '8', '1', '23876649', 'READIC FC'),
(128, 'Jose', 'Espina', '182684564', '12316', '20', 'Informatica', '7', '1', '23876649', 'READIC FC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registorneo`
--

CREATE TABLE `registorneo` (
  `idtorneo` int(11) NOT NULL,
  `nombretorneo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `disciplina` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechainitorneo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidaequi` int(11) NOT NULL,
  `fechafintorneo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `registorneo`
--

INSERT INTO `registorneo` (`idtorneo`, `nombretorneo`, `idperiodo`, `disciplina`, `fechainitorneo`, `cantidaequi`, `fechafintorneo`) VALUES
(1, 'Torneo inter-escuela diurno', 8, 'Futbol Sala', '17-02-2016', 10, '21-04-2016'),
(2, 'de prueba', 8, 'Baloncesto', 'cualquiera', 1, 'cualquiera'),
(3, 'baloncesto full', 8, 'Baloncesto', '1', 2, '1'),
(4, 'torneo inter-escuela nocturno', 8, 'Futbol Sala', '1', 20, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `identidad` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `identidad`, `nombre`, `user`, `pass`, `nivel`) VALUES
(1, 18663835, 'Administrador', 'Jhorvis', 123, 1),
(11, 123, 'ee', '1234', 1234, 2),
(12, 22369391, 'leonardo', '44', 44, 2),
(15, 22369390, 'v', 'v', 0, 2),
(16, 22369391, 'leo', 'c', 0, 2),
(17, 16474433, 'trrtyr', '1', 1, 2),
(18, 123456, 'leo', '159', 123, 2),
(19, 123456, 'medina', 'medina', 123, 2),
(20, 1234567, 'edward', 'ed', 123, 2),
(21, 18663835, 'Jhorvis Jesus', 'jhorvis18', 6767, 2),
(22, 18663835, 'Jhon', 'jsanchez_792', 1, 2),
(23, 19485922, 'luis', 'ls', 1, 2),
(24, 18663834, 'pedro', 'pavila', 1, 2),
(25, 23887540, 'Catherine', 'cathi91', 123, 2),
(26, 23876649, 'Jose', 'joseespina', 987, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idarticulos`);

--
-- Indices de la tabla `artiestudiante`
--
ALTER TABLE `artiestudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuentros`
--
ALTER TABLE `encuentros`
  ADD PRIMARY KEY (`idencuentros`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idregistro`);

--
-- Indices de la tabla `inscrequipo`
--
ALTER TABLE `inscrequipo`
  ADD PRIMARY KEY (`idinscripcion`);

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`id_jornadas`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`idperiodo`);

--
-- Indices de la tabla `regisequipo`
--
ALTER TABLE `regisequipo`
  ADD PRIMARY KEY (`idequipo`);

--
-- Indices de la tabla `regisjornadas`
--
ALTER TABLE `regisjornadas`
  ADD PRIMARY KEY (`id_encuentro`);

--
-- Indices de la tabla `regisjugadore`
--
ALTER TABLE `regisjugadore`
  ADD PRIMARY KEY (`idjugadore`);

--
-- Indices de la tabla `registorneo`
--
ALTER TABLE `registorneo`
  ADD PRIMARY KEY (`idtorneo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idarticulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `artiestudiante`
--
ALTER TABLE `artiestudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `encuentros`
--
ALTER TABLE `encuentros`
  MODIFY `idencuentros` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `idregistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `inscrequipo`
--
ALTER TABLE `inscrequipo`
  MODIFY `idinscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  MODIFY `id_jornadas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `idperiodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `regisequipo`
--
ALTER TABLE `regisequipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `regisjornadas`
--
ALTER TABLE `regisjornadas`
  MODIFY `id_encuentro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `regisjugadore`
--
ALTER TABLE `regisjugadore`
  MODIFY `idjugadore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT de la tabla `registorneo`
--
ALTER TABLE `registorneo`
  MODIFY `idtorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
