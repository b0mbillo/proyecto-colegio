-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-09-2019 a las 15:13:18
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `perfiles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(45) DEFAULT NULL,
  `tipo_documento` varchar(45) DEFAULT NULL,
  `documento` int(12) DEFAULT NULL,
  `codigo` int(11) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `tel` int(7) DEFAULT NULL,
  `grupo_id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`id_estudiante`,`grupo_id_grupo`),
  KEY `fk_estudiantes_grupo1_idx` (`grupo_id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `nombre_completo`, `tipo_documento`, `documento`, `codigo`, `correo`, `tel`, `grupo_id_grupo`) VALUES
(1, 'Brando Montoya', 'TI', 1000412576, 1111, 'baldo542@gmail.com', 2339309, 113);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre`) VALUES
(112, '11-2'),
(113, '11-3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE IF NOT EXISTS `profesores` (
  `id_profesores` int(11) NOT NULL,
  `nombre_completo` varchar(60) DEFAULT NULL,
  `documento` int(12) DEFAULT NULL,
  `codigo` int(11) NOT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `tel/cel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profesores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesores`, `nombre_completo`, `documento`, `codigo`, `correo`, `tel/cel`) VALUES
(1, 'William Betancur', 3146566, 123, 'willyrico@gmail.com', 2334567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores_has_grupo`
--

DROP TABLE IF EXISTS `profesores_has_grupo`;
CREATE TABLE IF NOT EXISTS `profesores_has_grupo` (
  `profesores_id_profesores` int(11) NOT NULL,
  `grupo_id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`profesores_id_profesores`,`grupo_id_grupo`),
  KEY `fk_profesores_has_grupo_grupo1_idx` (`grupo_id_grupo`),
  KEY `fk_profesores_has_grupo_profesores1_idx` (`profesores_id_profesores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores_has_grupo`
--

INSERT INTO `profesores_has_grupo` (`profesores_id_profesores`, `grupo_id_grupo`) VALUES
(1, 112),
(1, 113);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiantes_grupo1` FOREIGN KEY (`grupo_id_grupo`) REFERENCES `grupo` (`id_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesores_has_grupo`
--
ALTER TABLE `profesores_has_grupo`
  ADD CONSTRAINT `fk_profesores_has_grupo_grupo1` FOREIGN KEY (`grupo_id_grupo`) REFERENCES `grupo` (`id_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profesores_has_grupo_profesores1` FOREIGN KEY (`profesores_id_profesores`) REFERENCES `profesores` (`id_profesores`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
