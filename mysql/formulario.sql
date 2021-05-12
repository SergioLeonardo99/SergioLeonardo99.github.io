-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2020 a las 18:26:41
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`) VALUES
(1, 'sergio vega', 'vleonardo657@gmail.com', 'sergio', '202cb962ac59075b964b07152d234b70'),
(2, 'pepe reina', 'julio@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70'),
(3, 'julio', 'juanito@gmail.com', 'pepe', '202cb962ac59075b964b07152d234b70'),
(4, 'sergio', 'sala@gmail.com', 'sergio vega', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'rrewrwer', 'rewrwe@dad', 'rwerwe', '1c93890eba92c2c4f303d8b2d5c65395'),
(6, 'david flores', 'david@gmail.com', 'david', '202cb962ac59075b964b07152d234b70'),
(7, 'andres castillo sanchez', 'andresc@gmail.com', 'andres', '202cb962ac59075b964b07152d234b70'),
(8, 'jose castro', 'jose@gmail.com', 'jose', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'andres castro', 'andrescastro@gmail.com', 'andrescastro', '202cb962ac59075b964b07152d234b70'),
(10, 'junior prada ', 'junior@gmail.com', 'junior', '202cb962ac59075b964b07152d234b70'),
(11, 'Maria Corredor', 'maria@gmail.com', 'maria', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
