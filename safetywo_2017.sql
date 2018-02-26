-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-02-2018 a las 22:00:47
-- Versión del servidor: 5.5.52-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `safetywo_2017`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sw_respuestas_encuesta`
--

CREATE TABLE IF NOT EXISTS `sw_respuestas_encuesta` (
  `id_respuesta` int(11) NOT NULL AUTO_INCREMENT,
  `orden_respuesta` varchar(5) DEFAULT NULL,
  `id_encuesta` int(11) NOT NULL,
  `respuesta` varchar(90) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `puntaje` int(10) NOT NULL,
  PRIMARY KEY (`id_respuesta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `sw_respuestas_encuesta`
--

INSERT INTO `sw_respuestas_encuesta` (`id_respuesta`, `orden_respuesta`, `id_encuesta`, `respuesta`, `puntaje`) VALUES
(1, 'a', 1, 'Todos los siguientes', 1),
(5, 'e', 1, 'Reforzamiento del diálogo social', 0),
(6, 'b', 1, 'Respeto por los derechos fundamentales del trabajo', 0),
(7, 'c', 1, 'Creación de empleo', 1),
(8, 'd', 1, 'Extensión de la seguridad social', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
