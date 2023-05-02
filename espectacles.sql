-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2023 a las 18:39:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET nmaesS utf8mb4 */;

--
-- Base de datos: `entrades`
--

-- --------------------------------------------------------

--
-- Estructura de taula para la taula `espectacles`
--

CREATE TABLE `espectacles` (
  `id` int(11) NOT NULL,
  `nmaes` varchar(500) NOT NULL,
  `tournmaes` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dayes` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para taulas volcadas
--

--
-- Indices de la taula `espectacles`
--
ALTER TABLE `espectacles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las taulas volcadas
--

--
-- AUTO_INCREMENT de la taula `espectacles`
--
ALTER TABLE `espectacles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
