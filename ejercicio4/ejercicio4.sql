-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2018 a las 02:30:32
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicio4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `id` int(11) NOT NULL,
  `fecha_pronostico` date NOT NULL,
  `fecha_actual_registro` date NOT NULL,
  `ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`id`, `fecha_pronostico`, `fecha_actual_registro`, `ciudad`) VALUES
(15, '2018-03-09', '2018-03-12', 'Esmeraldas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temperatura`
--

CREATE TABLE `temperatura` (
  `id` int(11) NOT NULL,
  `idFecha` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `fecha_actual_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temperatura`
--

INSERT INTO `temperatura` (`id`, `idFecha`, `temperatura`, `hora`, `fecha_actual_registro`) VALUES
(2, 15, 24, '12:00 AM', '2018-03-12'),
(3, 15, 23, '02:00 AM', '2018-03-12'),
(4, 15, 25, '04:00 AM', '2018-03-12'),
(5, 15, 24, '06:00 AM', '2018-03-12'),
(6, 15, 25, '08:00 AM', '2018-03-12'),
(7, 15, 27, '10:00 AM', '2018-03-12'),
(8, 15, 28, '12:00 PM', '2018-03-12'),
(9, 15, 29, '02:00 PM', '2018-03-12'),
(10, 15, 28, '04:00 PM', '2018-03-12'),
(11, 15, 27, '06:00 PM', '2018-03-12'),
(12, 15, 26, '08:00 PM', '2018-03-12'),
(13, 15, 25, '10:00 PM', '2018-03-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temperatura`
--
ALTER TABLE `temperatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temperatura_ibfk_1` (`idFecha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `temperatura`
--
ALTER TABLE `temperatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `temperatura`
--
ALTER TABLE `temperatura`
  ADD CONSTRAINT `temperatura_ibfk_1` FOREIGN KEY (`idFecha`) REFERENCES `fecha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
