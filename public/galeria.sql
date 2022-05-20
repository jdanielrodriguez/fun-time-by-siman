-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2022 a las 05:44:36
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria`
--

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `nombre`, `dpi`, `telefono`, `correo`, `participante`, `fechan`, `image`, `video`, `fecha_hora`, `estado`) VALUES
(1, 'fdsfds', 'hhjhh', 'kjhkjhkj', 'hhkjhkjh', 'hjkhkjhkj', '2022-05-05', '', '', '2022-05-19 06:00:52', 1),
(2, '111', '222', '333', '444', '555', '2022-05-05', '', '', '2022-05-19 06:01:42', 1),
(3, 'Prueba', '4178', '6582', 'hola@hola.com', 'Prueba22', '2022-05-05', 'Prueba22090929.jpeg', 'Hola', '2022-05-19 09:09:29', 1),
(4, 'Prueba2', '41782', '6582', 'hola@hola.com', 'Prueba23', '2022-05-05', 'Prueba23091635.jpeg', 'Prueba23091635.mp4', '2022-05-19 09:16:35', 1),
(5, 'prueba5', '5555', '74123', 'hola@hola.com', 'prueba5', '2022-05-05', 'prueba5092855.jpeg', 'prueba5092855.mp4', '2022-05-19 09:28:55', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
