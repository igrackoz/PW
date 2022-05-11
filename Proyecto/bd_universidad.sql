-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-03-2022 a las 03:02:23
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base de datos de una universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

DROP TABLE IF EXISTS `carreras`;
CREATE TABLE IF NOT EXISTS `carreras` (
  `idcarrera` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `Nombre` int(11) NOT NULL,
  `Apellido` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `correo` int(11) NOT NULL,
  `Carrera` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Carrera` (`Carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo de alumnos`
--

DROP TABLE IF EXISTS `grupo de alumnos`;
CREATE TABLE IF NOT EXISTS `grupo de alumnos` (
  `id` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `idmaestro` int(11) NOT NULL,
  `clavedelgrupo` int(11) NOT NULL,
  `Hora` int(11) NOT NULL,
  `Aula` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`,`idmateria`,`idmaestro`,`clavedelgrupo`),
  UNIQUE KEY `idmateria` (`idmateria`),
  UNIQUE KEY `idmateria_2` (`idmateria`),
  UNIQUE KEY `idmaestro` (`idmaestro`),
  UNIQUE KEY `idmaestro_2` (`idmaestro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

DROP TABLE IF EXISTS `maestros`;
CREATE TABLE IF NOT EXISTS `maestros` (
  `idmaestro` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Apellido` int(11) NOT NULL,
  `Departamento` int(11) NOT NULL,
  PRIMARY KEY (`idmaestro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `idmateria` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  PRIMARY KEY (`idmateria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`idcarrera`) REFERENCES `estudiantes` (`Carrera`);

--
-- Filtros para la tabla `grupo de alumnos`
--
ALTER TABLE `grupo de alumnos`
  ADD CONSTRAINT `grupo de alumnos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `estudiantes` (`ID`);

--
-- Filtros para la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD CONSTRAINT `maestros_ibfk_1` FOREIGN KEY (`idmaestro`) REFERENCES `grupo de alumnos` (`idmaestro`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`idmateria`) REFERENCES `grupo de alumnos` (`idmateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
