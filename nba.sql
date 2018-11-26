-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2018 a las 14:44:59
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_equipo` int(10) NOT NULL,
  `estadio` varchar(50) COLLATE utf8_bin NOT NULL,
  `conferencia` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`nombre`, `id_equipo`, `estadio`, `conferencia`) VALUES
('Toronto Raptors', 1, 'Scotiabank Arena', 'Este'),
('LA Lakers', 2, 'Staples Center', 'Oeste'),
('Boston Celtics', 3, 'TD Garden', 'Este'),
('Minnesota Timberwolves', 4, 'Target Center', 'Oeste'),
('Chicago Bulls', 5, 'United Center', 'Este');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_equipo` int(10) NOT NULL,
  `id_jugador` int(255) NOT NULL,
  `imagen` varchar(500) COLLATE utf8_bin NOT NULL,
  `nacionalidad` varchar(50) COLLATE utf8_bin NOT NULL,
  `conferencia` varchar(50) COLLATE utf8_bin NOT NULL,
  `posicion` varchar(50) COLLATE utf8_bin NOT NULL,
  `media` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`nombre`, `id_equipo`, `id_jugador`, `imagen`, `nacionalidad`, `conferencia`, `posicion`, `media`) VALUES
('Vince Carter', 1, 1, 'vince_1.png', 'EEUU', 'Este', 'Alero', 97),
('Kyle Lowry', 1, 2, 'lowry_1.png', 'EEUU', 'Este', 'Base', 95),
('Chris Bosh', 1, 3, 'bosh_1.png', 'EEUU', 'Este', 'Ala-Pivot', 95),
('Tracy McGrady', 1, 4, 'tracy_1.png', 'EEUU', 'Este', 'Escolta', 83),
('DeMar DeRozan', 1, 5, 'demar_1.png', 'EEUU', 'Este', 'Escolta', 96),
('LeBron James', 2, 6, 'lebron_james_1.png', 'EEUU', 'Oeste', 'Alero', 98),
('Pau Gasol', 2, 7, 'pau_1.png', 'España', 'Oeste', 'Pivot', 92),
('Magic Johnson', 2, 8, 'magic_1.png', 'EEUU', 'Oeste', 'Alero', 98),
('Kobe Bryant', 2, 9, 'kobe_bryant_1.png', 'EEUU', 'Oeste', 'Escolta', 99),
('Shaquille O\'Neal', 2, 10, 'shaquille_1.png', 'EEUU', 'Oeste', 'Pivot', 98),
('Paul Pierce', 3, 11, 'pierce_1.png', 'EEUU', 'Este', 'Alero', 95),
('Kyrie Irving', 3, 12, 'irving_1.png', 'EEUU', 'Este', 'Base', 97),
('Larry Bird', 3, 13, 'bird_1.png', 'EEUU', 'Este', 'Alero', 98),
('Robert Parish', 3, 14, 'robert_1.png', 'EEUU', 'Este', 'Pivot', 92),
('Kevin McHale', 3, 15, 'mchale_1.png', 'EEUU', 'Este', 'Ala-Pivot', 98),
('Ricky Rubio', 4, 16, 'ricky_1.png', 'España', 'Oeste', 'Base', 89),
('Kevin Garnett', 4, 17, 'kevin_1.png', 'EEUU', 'Oeste', 'Ala-Pivot', 97),
('Kevin Love', 4, 18, 'love_1.png', 'EEUU', 'Oeste', 'Ala-Pivot', 99),
('Wally Szczerviak', 4, 19, 'wally_1.png', 'EEUU', 'Oeste', 'Alero', 86),
('Karl-Anthony Towns', 4, 20, 'karl_1.png', 'EEUU', 'Oeste', 'Pivot', 96),
('Michael Jordan', 5, 21, 'jordan_1.png', 'EEUU', 'Este', 'Escolta', 95),
('Scottie Pippen', 5, 22, 'pippen_1.png', 'EEUU', 'Este', 'Alero', 89),
('Derrick Rose', 5, 23, 'rose_1.png', 'EEUU', 'Este', 'Base', 95),
('Horace Grant', 5, 24, 'horace_grant_1.png', 'EEUU', 'Este', 'Pivot', 85),
('Steve Kerr', 5, 25, 'kerr_1.png', 'EEUU', 'Este', 'Base', 82),
('BackPack Juanpa', 4, 26, 'backpack_1.png', 'España', 'Oeste', 'Escolta', 63),
('Ernesto', 1, 27, 'ernes_1.png', 'España', 'Este', 'Pivot', 94),
('Joaquin', 2, 28, 'joak_1.png', 'España', 'Oeste', 'Pivot', 99),
('Jorge Fraxito', 1, 29, 'fraxito_2.png', 'España', 'Este', 'Alero', 99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id_jugador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
