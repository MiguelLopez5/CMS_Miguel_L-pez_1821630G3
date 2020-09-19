-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2019 a las 16:59:03
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_ejemplo`
--
CREATE DATABASE IF NOT EXISTS `cms_ejemplo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms_ejemplo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publication`
--

CREATE TABLE `publication` (
  `idP` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publication`
--

INSERT INTO `publication` (`idP`, `title`, `description`, `url_image`, `id_user`) VALUES
(7, 'Semana cultural', 'Lorem ipsum pater noster qi es in caelo santifiqeu sem voce', 'uploads/Captura de pantalla (1).png', 13),
(10, 'Mas allá del jardin', 'No me acuerdo la fecha pero en cn se estreno una serie llamada \"Más allá del jardín en donde dos hermanos rarucos experimentan aventuras extraordinarias', 'uploads/primero.jpg', 12),
(18, 'Ter Stegen', '  Publiger terberntre ie fheri goierh toierht goeirhtuibe turty', 'uploads/random image.jpg', 12),
(19, 'Actividades de semana', 'un nuevo paisaje para la comunidad pepito perezista que nos ha acompañado durante estos largos x años muchas gracias a todos', 'uploads/new_paisaje.jpg', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `nameRole` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_role`, `nameRole`) VALUES
(1, 'Administrator'),
(2, 'Teacher'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `id_role`) VALUES
(1, 'Marlos', 'example22@gmail.com', '567890', 1),
(12, 'Chucho', 'something@example.com', '$2y$10$SXb5yHlA6SvFNUgbhgpHPew5P1jbjZ25QPM.SvRcTYzaLR/A0BaAi', 1),
(13, 'Other', 'something2@example.com', '$2y$10$79QQyYOcPWyN/j6g98ivFulM1grMhNRdyAjoBQojKblLlhDBuDceW', 2),
(16, 'Another', 'something3@example.com', '$2y$10$ib3lNOgxfCEQrXzFBjaZHuZaAoFAh/3CiH0i0LHwL7rw2KbmKYQk.', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publication`
--
ALTER TABLE `publication`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
