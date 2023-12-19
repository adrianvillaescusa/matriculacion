-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 22:08:19
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
-- Base de datos: `matriculacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_mat`
--

CREATE TABLE `datos_mat` (
  `nombre_alu` varchar(250) NOT NULL,
  `fecha_nac` date NOT NULL,
  `direccion_dom` varchar(250) NOT NULL,
  `telefono` int(9) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nombre_padre` varchar(250) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `curso_elegido` varchar(250) NOT NULL,
  `escuela_ant` varchar(250) NOT NULL,
  `inf_medica` varchar(250) NOT NULL,
  `cont_emergencia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_mat`
--

INSERT INTO `datos_mat` (`nombre_alu`, `fecha_nac`, `direccion_dom`, `telefono`, `email`, `nombre_padre`, `DNI`, `curso_elegido`, `escuela_ant`, `inf_medica`, `cont_emergencia`) VALUES
('Pepe Alonso', '1999-06-01', 'Calle  Pintor Gisbert', 123456789, 'pepealonso@gmail.com', 'Juan Alonso', '12345678D', '1º Asir', 'IES SanVicente', 'Nada', '234567891 Juan Alonso'),
('Pepe Juan Tercero', '1996-07-09', 'Calle del Carrer', 215745754, 'pepejuanter@gmail.com', 'Joan Tercero', '20521323V', '1º Asir', 'IES la Rosa', '', '592049024 Joan Tercero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `contrasena`) VALUES
(1, 'admin-izan', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_mat`
--
ALTER TABLE `datos_mat`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
