-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2024 a las 13:34:26
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
(3, 'P-00001', 'QUILMES', 'Cerveza Clásica Quilmes Retornable 1 L', 60, 25, 200, '1300', '1500', '2024-02-10', '2024-02-10-13-12-49__cerveza.jpg', 1, 7, '2024-02-10 13:12:49', '2024-02-22 19:22:35'),
(4, 'P-00002', 'DON SATUR', 'Don satur, bizcocho dulce 200g', 325, 20, 200, '450', '650', '2024-02-10', '2024-02-10-13-18-26__donsatur.jpg', 1, 9, '2024-02-10 13:18:26', '2024-02-10 13:23:06'),
(5, 'P-00003', 'MANAOS', 'Gaseosas manaos de cola - de 2,25L', 440, 15, 400, '745', '850', '2024-02-10', '2024-02-10-13-21-08__manaos.jpg', 1, 6, '2024-02-10 13:21:08', '2024-02-20 17:30:54'),
(6, 'P-00004', 'HELADO DE FRUTILLA', 'Un Pote de 1 kg', 100, 30, 300, '3500', '4000', '2024-02-15', '2024-02-15-17-33-33__', 1, 14, '2024-02-15 17:33:33', '2024-02-20 17:32:24'),
(8, 'P-00005', 'LAVANDINA', 'Agua lavandina ayudin clásica 1L', 260, 30, 300, '770', '969', '2024-02-20', '2024-02-20-20-10-51__lavandinayudin.jpg', 1, 3, '2024-02-20 20:10:07', '2024-02-20 20:10:51'),
(9, 'P-00006', 'JUGO TANG ', 'Sobrecito de jugo Tang de naranja rinde 1L', 179, 25, 300, '260', '300', '2024-02-22', '2024-02-22-13-43-29__jugotangnar.jpg', 1, 17, '2024-02-22 12:49:02', '2024-02-22 13:43:49');

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
(5, 'BEBIDAS', '2024-02-02 01:28:10', '2024-02-22 13:38:02'),
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
(17, 'OTROS', '2024-02-07 19:18:38', '0000-00-00 00:00:00'),
(18, 'LIMPIEZA', '2024-02-22 13:34:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_compras`
--

CREATE TABLE `tb_compras` (
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nro_compra` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `comprobante` varchar(255) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `precio_de_la_compra` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_compras`
--

INSERT INTO `tb_compras` (`id_compra`, `id_producto`, `nro_compra`, `fecha_compra`, `id_proveedor`, `comprobante`, `id_usuario`, `precio_de_la_compra`, `cantidad`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(13, 8, 4, '2024-02-22', 7, 'NOTA DE VENTA 001', 1, '5850', 10, '2024-02-22 13:20:46', '2024-02-22 13:23:09'),
(15, 3, 3, '2024-02-22', 7, 'NOTA DE VENTA 005', 1, '15000', 10, '2024-02-22 19:24:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_proveedores`
--

CREATE TABLE `tb_proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(255) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `empresa` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_proveedores`
--

INSERT INTO `tb_proveedores` (`id_proveedor`, `nombre_proveedor`, `celular`, `telefono`, `empresa`, `email`, `direccion`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'SANTIAGO BARROS', '1179847955', '0800999998', 'SANTI MOTOS', 'santimotos@gmail.com', 'Atahualpa 987 entre Sarmiento  y Liniers', '2024-02-10 15:26:06', '2024-02-13 12:16:27'),
(2, 'EZEQUIEL GOMEZ', '1124554667', '', 'TELECOMPU ', 'telecompu@gmail.com', 'AV libertador 3445', '2024-02-12 11:43:11', '0000-00-00 00:00:00'),
(6, 'FRANCISCO TELLO', '1123454678', '', 'WORKLINE', 'wokline789@gmail.com', 'Alfred 2345  en General Rodriguez ', '2024-02-13 13:00:30', '0000-00-00 00:00:00'),
(7, 'AGUSTIN PARRA', '1184958485', '0800555777', 'OFFLINE', 'offilinempresa@hotmail.com', 'Av calle real 147 entre Beruti e iturri', '2024-02-17 09:19:00', '2024-02-17 09:19:22');

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
(3, 'lucas apaza', 'apazalucas69@gmail.com', '$2y$10$7XhVANT9QTdy3IejBSX.POr8gaXPZ.hZSgkm7IleLo0SjG9VrWZKm', '', 1, '2024-02-06 04:14:23', '2024-02-06 04:14:23'),
(4, 'Juan Barcos', 'juanbarcos22@gmail.com', '$2y$10$rDoVukNk8s2wpTdF4bbVweM2OZr9A6a3XWkvLMl2LnpYLc4.16pS.', '', 4, '2024-02-17 09:10:02', '0000-00-00 00:00:00');

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
-- Indices de la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

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
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Filtros para la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD CONSTRAINT `tb_compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `tb_proveedores` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tb_almacen` (`id_producto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuarios`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
