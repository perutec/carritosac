-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-10-2015 a las 22:07:01
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carritosac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `idvehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(100) NOT NULL,
  `anio_fabricacion` varchar(50) NOT NULL,
  `num_puertas` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `placa` varchar(200) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `kminicial` decimal(15,6) NOT NULL,
  `kmrecorrido` decimal(15,6) NOT NULL,
  `cant_gasolina` decimal(15,6) NOT NULL,
  PRIMARY KEY (`idvehiculo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idvehiculo`, `marca`, `anio_fabricacion`, `num_puertas`, `color`, `placa`, `tipo`, `kminicial`, `kmrecorrido`, `cant_gasolina`) VALUES
(1, 'NISSAN', '2015', 5, 'VERDE', 'RIO908', 'SEDAN', '10000.000000', '200.000000', '34.000000'),
(7, 'TOYOTA', '2014', 2, 'VERDE', '23EDR-090', 'CAMION', '2000.000000', '0.000000', '0.000000'),
(8, 'SEAD', '2000', 2, 'VERDE', 'AWS-090', 'CONVERTIBLE', '2000.000000', '0.000000', '0.000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
