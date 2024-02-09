-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2024 a las 17:12:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemadeventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_almacen`
--

CREATE TABLE `tb_almacen` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `nombre_producto` varchar(200) NOT NULL,
  `descripcion_producto` text DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `stock_minimo` int(11) DEFAULT NULL,
  `stock_maximo` int(11) DEFAULT NULL,
  `precio_compra` varchar(200) NOT NULL,
  `precio_venta` varchar(200) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `imagen` text DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_almacen`
--

INSERT INTO `tb_almacen` (`id_producto`, `codigo`, `nombre_producto`, `descripcion_producto`, `stock`, `stock_minimo`, `stock_maximo`, `precio_compra`, `precio_venta`, `fecha_ingreso`, `imagen`, `id_usuario`, `id_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'P-00001', 'DON SATUR', 'Dos satur -  bizcocho dulce  de 200g', 50, 15, 200, '500', '650', '2024-02-07', '2024-02-07-15-20-21__donsatur.jpg', 3, 9, '2024-02-07 15:20:21', '0000-00-00 00:00:00'),
(2, 'P-00002', 'MANAOS', 'Manaos de cola de 2,25L', 60, 25, 300, '750', '800', '2024-02-07', '2024-02-07-15-21-54__manaos.jpg', 3, 6, '2024-02-07 15:21:54', '0000-00-00 00:00:00'),
(3, 'P-00003', 'PAPAS', '1 kilos de papas', 100, 25, 300, '650', '550', '2024-03-07', '2024-02-07-19-24-48__', 1, 17, '2024-02-07 19:24:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_categorias`
--

INSERT INTO `tb_categorias` (`id_categoria`, `nombre_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'FRUTAS ', '2024-01-30 16:03:43', '2024-02-04 21:01:21'),
(2, 'VERDURAS', '2024-02-02 01:18:37', '0000-00-00 00:00:00'),
(3, 'LIQUIDOS ', '2024-02-02 01:23:28', '2024-02-02 18:44:19'),
(4, 'COMIDAS', '2024-02-02 01:23:44', '0000-00-00 00:00:00'),
(5, 'MEDICAMENTOS', '2024-02-02 01:28:10', '2024-02-02 18:43:22'),
(6, 'GASEOSAS', '2024-02-02 02:27:47', '2024-02-02 18:55:56'),
(7, 'CERVEZAS', '2024-02-02 02:27:52', '2024-02-02 18:56:27'),
(8, 'ELECTRODOMESTICOS', '2024-02-02 02:27:58', '0000-00-00 00:00:00'),
(9, 'GALLETAS', '2024-02-02 18:55:26', '0000-00-00 00:00:00'),
(10, 'PAPEL HIGIENICO', '2024-02-03 01:07:46', '0000-00-00 00:00:00'),
(11, 'JUGOS', '2024-02-03 01:14:13', '2024-02-07 19:18:59'),
(12, 'CARNES', '2024-02-03 01:14:41', '0000-00-00 00:00:00'),
(13, 'ENERGIZANTES', '2024-02-03 01:15:03', '2024-02-03 01:15:20'),
(14, 'HELADOS', '2024-02-04 20:56:17', '2024-02-04 21:15:01'),
(15, 'CHOCOLATE', '2024-02-04 20:56:22', '2024-02-04 21:15:13'),
(16, 'ACEITE', '2024-02-04 20:57:00', '2024-02-04 21:15:27'),
(17, 'OTROS', '2024-02-07 19:18:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'ADMINISTRADOR', '2024-01-29 00:26:11', '2024-01-29 00:26:11'),
(4, 'VENDEDOR', '2024-01-28 22:18:49', '2024-01-29 11:50:39'),
(5, 'CONTADOR', '2024-01-29 11:52:12', '0000-00-00 00:00:00'),
(6, 'ALMACEN', '2024-01-29 13:25:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password_user` text NOT NULL,
  `token` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuarios`, `nombre`, `email`, `password_user`, `token`, `id_rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'Lucas Apaza', 'lucasezequielapaza15@gmail.com', '$2y$10$QwO/PzLhY5mL2H/Yxx/vFeKSn1VPljuxPgihpeQpPbwA3hxcJwM6K', '', 1, '2024-01-30 15:38:02', '2024-01-30 15:38:02'),
(2, 'Federico Felix', 'fedefelix@gmail.com', '$2y$10$FBpxSnb5LZ49nitox6Dcf.m6CONgYwu8SPBbuqqRWFEA8JlC2Julm', '', 4, '2024-02-05 10:56:43', '0000-00-00 00:00:00'),
(3, 'lucas apaza', 'apazalucas69@gmail.com', '$2y$10$7XhVANT9QTdy3IejBSX.POr8gaXPZ.hZSgkm7IleLo0SjG9VrWZKm', '', 1, '2024-02-06 04:14:23', '2024-02-06 04:14:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
  ADD CONSTRAINT `tb_almacen_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categorias` (`id_categoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_almacen_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuarios`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
