-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-12-2016 a las 17:10:29
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Contador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localhost`
--

CREATE TABLE `localhost` (
  `id` int(11) UNSIGNED NOT NULL,
  `navegador` text COLLATE utf8_spanish2_ci,
  `ip` text COLLATE utf8_spanish2_ci,
  `so` text COLLATE utf8_spanish2_ci,
  `fecha` text COLLATE utf8_spanish2_ci,
  `hora` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `localhost`
--

INSERT INTO `localhost` (`id`, `navegador`, `ip`, `so`, `fecha`, `hora`) VALUES
(1, 'Google Chrome', '::1', 'Linux', '25/12/2016', NULL),
(2, 'Google Chrome', '::1', 'Linux', '25/12/2016', NULL),
(3, 'Google Chrome', '::1', 'Linux', '25/12/2016', NULL),
(4, 'Google Chrome', '::1', 'Linux', '25/12/2016', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `localhost`
--
ALTER TABLE `localhost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `localhost`
--
ALTER TABLE `localhost`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
