-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2019 a las 00:14:29
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevo_uct`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` varchar(50) NOT NULL,
  `edificio` varchar(50) NOT NULL,
  `piso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `edificio`, `piso`) VALUES
('informatica', 'eb', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE `edificio` (
  `valor` int(11) NOT NULL,
  `id_edificio` varchar(40) NOT NULL,
  `campus` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edificio`
--

INSERT INTO `edificio` (`valor`, `id_edificio`, `campus`, `nombre`) VALUES
(1, 'eb', 'san juan pablo II', 'edificio biblioteca'),
(2, 'ct', 'san juan pablo II', 'cincuentenario'),
(3, 'ct+', 'san juan pablo II', 'ct+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultades`
--

CREATE TABLE `facultades` (
  `nro` int(10) NOT NULL,
  `id_facultad` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultades`
--

INSERT INTO `facultades` (`nro`, `id_facultad`, `departamento`) VALUES
(1, 'ingenieria', 'obras civiles y geologia'),
(3, 'ingenieria', 'ciencias matematicas y fisicas'),
(4, 'ingenieria', 'informatica'),
(5, 'ingenieria', 'procesos insdustriales'),
(6, 'educacion', 'infancia y educacion basica'),
(7, 'educacion', 'educacion media'),
(8, 'educacion', 'ciencias de la educacion'),
(9, 'tecnica', ' depto. tec. procesos productivos'),
(10, 'educacion', 'depto .tec. de servicios'),
(11, 'recursos naturales', 'cs agropecuarias y acuicolas'),
(12, 'recursos naturales', 'cs biologias y quimicas'),
(13, 'recursos naturales', 'cs ambientales'),
(14, 'recursos naturales', 'cs veterinarias y salud publica'),
(15, 'ciencias de la salud', 'procesos terapeuticos'),
(16, 'ciencias de la salud', 'procesos diagnosticos y evaluacion'),
(17, 'ciencias de la salud', 'psicologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informaciones`
--

CREATE TABLE `informaciones` (
  `nro` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `edificio` varchar(50) NOT NULL,
  `piso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informaciones`
--

INSERT INTO `informaciones` (`nro`, `nombre`, `descripcion`, `edificio`, `piso`) VALUES
(1, 'tesoreria', 'pago de matriculas, certificados, aranceles, etc\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'eb', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinas`
--

CREATE TABLE `oficinas` (
  `id_oficina` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `edicifio` varchar(50) NOT NULL,
  `piso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oficinas`
--

INSERT INTO `oficinas` (`id_oficina`, `nombre`, `departamento`, `edicifio`, `piso`) VALUES
('secretria informatica', 'secretria informatica', 'informatica', 'eb', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id_sala` varchar(30) NOT NULL,
  `piso` int(10) NOT NULL,
  `edificio` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id_sala`, `piso`, `edificio`, `tipo`) VALUES
('208', 2, 'eb', 'sala'),
('eb-203', 2, 'eb', 'sala catedra'),
('eb-204', 2, 'edificio biblioteca', 'sala catedra'),
('eb-205', 2, 'edificio biblioteca', 'sala catedra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD PRIMARY KEY (`valor`);

--
-- Indices de la tabla `facultades`
--
ALTER TABLE `facultades`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `informaciones`
--
ALTER TABLE `informaciones`
  ADD PRIMARY KEY (`nro`);

--
-- Indices de la tabla `oficinas`
--
ALTER TABLE `oficinas`
  ADD PRIMARY KEY (`id_oficina`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `edificio`
--
ALTER TABLE `edificio`
  MODIFY `valor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `facultades`
--
ALTER TABLE `facultades`
  MODIFY `nro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `informaciones`
--
ALTER TABLE `informaciones`
  MODIFY `nro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
