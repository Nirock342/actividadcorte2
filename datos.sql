/* esta es la base de datos con la que funciona el proyecto,  en el archivo de conexion.php se deben cambiar nombres de registro a los suyos propios. */

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2023 a las 16:44:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `metamusic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `año` int(10) NOT NULL,
  `remix` varchar(1) NOT NULL,
  `para` varchar(50) NOT NULL,
  `hola` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `genero`, `autor`, `año`, `remix`, `para`, `hola`) VALUES
(5, 'Youre The One', 'House', 'Mia', 90, '0', 'Bailar', ''),
(6, 'un peso', 'reggaeton', 'bad bunny y j balvin', 2000, '0', 'Cantar', ''),
(7, 'yo le llego ', 'reggaeton', 'bad bunny y j balvin', 2000, '0', 'Cantar', ''),
(8, 'odio', 'reggaeton', 'bad bunny j balvin', 2000, '0', 'Cantar', ''),
(9, 'ghosts', 'dupstep', 'deadmau5', 2000, '0', 'Otros', ''),
(10, 'kronos', 'house', 'hi-lo', 90, '0', 'Bailar', ''),
(11, 'brother', 'disco', 'modern talking', 90, '1', 'Bailar', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
