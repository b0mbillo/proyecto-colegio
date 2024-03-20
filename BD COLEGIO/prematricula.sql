-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-05-2019 a las 14:26:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prematricula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichoacudiente`
--

CREATE TABLE IF NOT EXISTS `fichoacudiente` (
  `idfichoacudiente` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecompleto` varchar(45) DEFAULT NULL,
  `numerodocumento` int(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `parentesco` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idfichoacudiente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `fichoacudiente`
--

INSERT INTO `fichoacudiente` (`idfichoacudiente`, `nombrecompleto`, `numerodocumento`, `correo`, `direccion`, `telefono`, `celular`, `parentesco`) VALUES
(1, 'Puntin Alkavoski', 100120456, 'awesrgdtf@fghjk.com', 'cll#103 49-50c', '222 22 22', '315 322 54', 'progenitor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichoestudiante`
--

CREATE TABLE IF NOT EXISTS `fichoestudiante` (
  `idficho` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecompleto` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `lugarnacimiento` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `gradocursar` varchar(11) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `estrato` varchar(20) NOT NULL,
  `tipodocumento` varchar(50) NOT NULL,
  `expediciondocumento` varchar(50) NOT NULL,
  `numerodocumento` int(10) NOT NULL,
  `numerofolio` int(20) NOT NULL,
  `tiposangre` varchar(5) NOT NULL,
  `eps` varchar(5) NOT NULL,
  `nombreeps` varchar(50) DEFAULT NULL,
  `nivelsisben` int(5) NOT NULL,
  `puntajesisben` int(5) NOT NULL,
  `ars` varchar(5) NOT NULL,
  `nombrears` varchar(50) DEFAULT NULL,
  `religion` varchar(20) NOT NULL,
  `desplazamiento` varchar(5) NOT NULL,
  `desplazamientodonde` varchar(50) DEFAULT NULL,
  `maltrato` varchar(10) NOT NULL,
  `embarazoprecoz` varchar(5) NOT NULL,
  `etnia` varchar(50) DEFAULT NULL,
  `madrecabeza` varchar(5) NOT NULL,
  `veterano` varchar(5) NOT NULL,
  `heroe` varchar(5) NOT NULL,
  PRIMARY KEY (`idficho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `fichoestudiante`
--

INSERT INTO `fichoestudiante` (`idficho`, `nombrecompleto`, `fechanacimiento`, `lugarnacimiento`, `sexo`, `gradocursar`, `telefono`, `municipio`, `comuna`, `estrato`, `tipodocumento`, `expediciondocumento`, `numerodocumento`, `numerofolio`, `tiposangre`, `eps`, `nombreeps`, `nivelsisben`, `puntajesisben`, `ars`, `nombrears`, `religion`, `desplazamiento`, `desplazamientodonde`, `maltrato`, `embarazoprecoz`, `etnia`, `madrecabeza`, `veterano`, `heroe`) VALUES
(1, 'julian', '2001-12-12', 'bogota', 'Hombre', 'once', '603 51 48', 'medellin', 'comuna3', 'estrato7', 'TI', 'envigado', 1001201642, 5, 'o-', 'si', 'sura', 2, 40, 'no', 'ninguno', 'judio', 'no', 'ninguno', 'ninguno', 'no', 'ninguno', 'no', 'no', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
