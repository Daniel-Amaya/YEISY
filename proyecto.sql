-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2019 a las 02:53:26
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE `medidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `escote` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `escote_total` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `talle_delante` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `talle_atras` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `altura_busto` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `separacion_busto` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contorno_busto` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hombro_delante` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hombro_atras` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contorno_hombro` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `costado` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cintura` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cintura_alta` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cintura_baja` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cadera` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descaderado` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `altura_cadera` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `largo_falda` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `largo_manga` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contorno_brazo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `corte_imperio` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`id`, `nombre`, `apellidos`, `celular`, `escote`, `escote_total`, `talle_delante`, `talle_atras`, `altura_busto`, `separacion_busto`, `contorno_busto`, `hombro_delante`, `hombro_atras`, `contorno_hombro`, `costado`, `cintura`, `cintura_alta`, `cintura_baja`, `cadera`, `descaderado`, `altura_cadera`, `largo_falda`, `largo_manga`, `contorno_brazo`, `corte_imperio`) VALUES
(2, 'papo', 'mcs', '123w', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '4', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'),
(27, 'Ruby', 'Smith222', '3002120210', '333cm', '93cm', '29cm', '289cm', '23cm', '20cm', '23cm', '33cm', '23cm', '39cm', '38cm', '38cm', '19cm', '12cm', '32cm', '23cm', '32cm', '23cm', '89cm', '39cm', '20cm'),
(32, 'asd', '', 'kj', 'jkl', 'kj', 'k', 'jkl', 'jkl', 'kj', '', 'jkkjl', 'jk', 'jkl', 'jkl', 'k', 'jkl', 'jkl', 'jkl', 'kjljkl', 'jkl', '', 'klkjl', 'jkl', 'jk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(12, 'papo', '$2y$10$wtJao8zM6fQHm/6A5BhED.2VHdzk512VIYde6nTyw.juGhH4TGc2W'),
(29, 'eso', '$2y$10$XmpaKRxmb90vGili4POXIeZWZQCgEcBfutcyWGOrYUx6pKc9jt7Im'),
(30, 'pedro', '$2y$10$KvGYV6Dp.BWal6ur9IWlz.Oq3UHAkhpdOl6922mK0qTZMn1Z5owaO'),
(31, 'yeisy', '$2y$10$P5Z.fYXE1ajVbSALhDsF6efLKNktHROrNlzlnpU11eIadMTMBcmyK'),
(32, 'penelope', '$2y$10$Rpn5r/b6DpuVe1nNZQ/bOuPY.BSKaP1d3CR5PsHtXIlS9mzVEbI0y'),
(33, 'daniel', '$2y$10$LkbvMOnV7nS/Wwv0lKNww.97PqpkUw.cCboaGbxRWZ1ptBjjJ7xZS'),
(34, 'danielson', '$2y$10$Z/jWgve8r0Vrv8QmNrv6budAchIBykJTH6PfJDgInqEc8a5gsY/LO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
