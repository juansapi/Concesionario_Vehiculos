-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 21:47:00
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbconcesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `autos` varchar(100) NOT NULL,
  `cedula` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` int(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id`, `autos`, `cedula`, `nombre`, `apellidos`, `email`, `celular`, `ciudad`, `observaciones`) VALUES
(1, 'cruze', 1112498186, 'pedro', 'perez', 'rolito.666@live.com', 2147483647, 'cali', 'cotizame'),
(2, 'camaro', 12123123, 'alex', 'mondragon', 'alexmondragon@gmail.com', 2147483647, 'palmira', 'cotizar por favor este carro'),
(3, 'sail', 1123567898, 'Javier', 'rodriguez', 'rodriguez@gmail.com', 2147483647, 'cali', 'cotizarme el carro precio y modelo por favor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(31) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(30) NOT NULL,
  `cedula` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `edad` date NOT NULL,
  `peso` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `cargo`, `cedula`, `nombre`, `apellidos`, `ciudad`, `edad`, `peso`, `email`, `celular`, `direccion`) VALUES
(5, 'administrador', 1112342312, 'ruben', 'rodriguez', 'cali', '2016-11-17', 0, 'ruben.666@live.com', 1231231212, 'cra 32 # 21-123'),
(6, 'gerente', 123123, 'ruben', 'asdasd', 'cali', '2016-11-24', 12, 'ruben.666@live.com', 1231232123, 'cra 32 # 21'),
(7, 'jefe', 1112342312, 'mateo', 'ospina', 'cali', '2016-11-25', 76, 'rolito.666@live.com', 1231231212, 'cra 32 # 21-123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE IF NOT EXISTS `encuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `respuesta` varchar(10) NOT NULL,
  `puntos` int(10) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`idperfil`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idperfil`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Consulta'),
(3, 'Registro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `clave` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idperfil` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `login`, `clave`, `nombre`, `apellido`, `direccion`, `telefono`, `celular`, `email`, `idperfil`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', 1),
(2, '2', '2', '2', '2', '2', '2', '2', '2', 2),
(3, '3', '3', '3', '3', '3', '3', '3', '3', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `cedula` int(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `edad` date NOT NULL,
  `clave` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombre`, `apellidos`, `email`, `celular`, `direccion`, `ciudad`, `edad`, `clave`) VALUES
(2, 1112487189, 'mateo', 'vargas', 'mateoospi96@gmail.com', 2147483647, 'calle 25#34-178', 'cali', '2016-11-24', 'millos'),
(3, 28011806, 'alba', 'lucia', 'lucia@gmail.com', 2147483647, 'calle 100 #89-19', 'palmira', '2016-11-10', 'cali'),
(4, 27080354, 'pedro', 'perez', 'pedro@gmail.com', 2147483647, 'calle 32#129', 'cali', '2016-11-25', 'diciembre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
