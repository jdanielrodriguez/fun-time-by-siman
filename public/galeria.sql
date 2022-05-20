-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-05-2022 a las 11:26:14
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `theaudie_funtimesiman`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dpi` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `participante` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `grupo` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `video` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
