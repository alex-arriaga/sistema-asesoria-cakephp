-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2014 a las 00:25:10
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` int(15) NOT NULL,
  `contacto_al` int(15) NOT NULL,
  `sexo` varchar(25) NOT NULL,
  `fecha_nac` date NOT NULL,
  `edad` int(3) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `contacto_al`, `sexo`, `fecha_nac`, `edad`, `codigo`, `created`, `modified`) VALUES
(21, 'PATRICIA GRACIELA', 'SERRANO', '', 486, 47, 'Femenino', '1995-06-30', 19, 'FPASE30061995', '2014-06-30', '2014-06-30'),
(22, 'GERMAN', 'SARALEGUI', '', 54, 54, 'Masculino', '2014-06-30', 0, 'MGESA30062014', '2014-06-30', '2014-06-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
