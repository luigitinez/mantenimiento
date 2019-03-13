-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-03-2019 a las 23:40:11
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `mantenimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `telefono` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `dni`, `telefono`, `name`, `tipo`) VALUES
(3, '43224438D', 627708442, 'Luis Martinez Gonzalez', 0),
(5, '45343939R', 2147483647, 'Jose María Pavon', 1),
(6, '4339395X', 2147483647, 'Cristian Diaz', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `km` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `fk_vehiculo` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  `horas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `km`, `fecha`, `fk_vehiculo`, `observaciones`, `horas`) VALUES
(17, 72444, '2019-03-12', 1, 'El coche disfruta de full led. Es la polla con cebolla        \\r\\n      ', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hist_man`
--

CREATE TABLE `hist_man` (
  `id_hisman` int(11) NOT NULL,
  `fk_historial` int(11) NOT NULL,
  `fk_mantenimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hist_man`
--

INSERT INTO `hist_man` (`id_hisman`, `fk_historial`, `fk_mantenimento`) VALUES
(34, 17, 3),
(35, 17, 4),
(36, 17, 1),
(37, 17, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tipo el 0 es mecanica el 1 limpieza';

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id_mantenimiento`, `nombre`, `tipo`) VALUES
(1, 'Cambio de Aceite', 0),
(2, 'Cambio filtro combustible', 0),
(3, 'Integral interior', 1),
(4, 'Limpieza básica', 1),
(5, 'Cambio filtro Aire', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `bastidor` varchar(50) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `fk_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `matricula`, `bastidor`, `modelo`, `marca`, `fk_cliente`) VALUES
(1, '3483HNc', 'sdfwpet43tga98h', 'ibiza', 'Seat', 3),
(2, '2435DHN', 'wet439tqjqogq', 'patner', 'peugeot', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `fk_vehiculo` (`fk_vehiculo`);

--
-- Indices de la tabla `hist_man`
--
ALTER TABLE `hist_man`
  ADD PRIMARY KEY (`id_hisman`),
  ADD KEY `fk_mantenimento` (`fk_mantenimento`),
  ADD KEY `hist_man_ibfk_1` (`fk_historial`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id_mantenimiento`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `fk_cliente` (`fk_cliente`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `hist_man`
--
ALTER TABLE `hist_man`
  MODIFY `id_hisman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`fk_vehiculo`) REFERENCES `vehiculo` (`id_vehiculo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `hist_man`
--
ALTER TABLE `hist_man`
  ADD CONSTRAINT `hist_man_ibfk_1` FOREIGN KEY (`fk_historial`) REFERENCES `historial` (`id_historial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hist_man_ibfk_2` FOREIGN KEY (`fk_mantenimento`) REFERENCES `mantenimiento` (`id_mantenimiento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE CASCADE;
