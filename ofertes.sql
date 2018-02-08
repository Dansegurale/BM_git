-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2018 a las 15:36:59
-- Versión del servidor: 5.7.17
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `borsamila`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertes`
--

CREATE TABLE `ofertes` (
  `id` int(11) NOT NULL,
  `oferidor` int(10) NOT NULL,
  `nom_empresa` varchar(255) NOT NULL,
  `lloc_treball` varchar(255) NOT NULL,
  `localitat` varchar(255) NOT NULL,
  `vacants` int(10) NOT NULL,
  `telefon_contacte` int(20) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `resum` int(255) NOT NULL,
  `horari` varchar(255) NOT NULL,
  `retribucio` int(10) NOT NULL,
  `cf` varchar(4) NOT NULL,
  `tipus_contracte` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `altres` varchar(255) NOT NULL,
  `persona_contacte` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ofertes`
--
ALTER TABLE `ofertes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ofertes`
--
ALTER TABLE `ofertes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
