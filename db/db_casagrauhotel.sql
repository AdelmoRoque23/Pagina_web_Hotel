-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2023 a las 18:02:25
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
-- Base de datos: `db_casagrauhotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contacto`
--

CREATE TABLE `tb_contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(245) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_contacto`
--

INSERT INTO `tb_contacto` (`id_contacto`, `nombre`, `correo`, `asunto`, `mensaje`, `fecha`, `id_usuario`) VALUES
(3, 'Adelmo', 'sistemas@arifeperu.com', 'prueba', '-', '17/04/2023  11:53:05 pm', 0),
(4, 'Adelmo', 'sistemas@arifeperu.com', 'prueba', '-', '17/04/2023  11:56:02 pm', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_detallepedido`
--

CREATE TABLE `tb_detallepedido` (
  `id_detallepedido` int(11) NOT NULL,
  `cant` decimal(10,2) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tb_detallepedido`
--

INSERT INTO `tb_detallepedido` (`id_detallepedido`, `cant`, `producto`, `precio`, `subtotal`, `id_pedido`) VALUES
(130, 1.00, 'ALQUILER DE CUATRIMOTO / hora', 50.00, 50.00, 1),
(131, 1.00, 'GASEOSA COCA COLA 1/2 Lt.', 4.00, 4.00, 76),
(132, 1.00, 'JUGO DE PIÑA / jarra', 12.00, 12.00, 76),
(133, 2.00, 'GASEOSA COCA COLA 1/2 Lt.', 4.00, 8.00, 80),
(134, 1.00, 'JUGO DE PIÑA / jarra', 12.00, 12.00, 80),
(135, 1.00, 'JUGO DE PIÑA / jarra', 12.00, 12.00, 81),
(136, 1.00, 'GASEOSA COCA COLA 1 Lt.', 7.50, 7.50, 81),
(137, 1.00, 'ALQUILER DE CUATRIMOTO / hora', 50.00, 50.00, 81),
(138, 1.00, 'GASESOSA INKA COLA 1/2 Lt.', 4.00, 4.00, 81),
(139, 1.00, 'GASEOSA COCA COLA 1 Lt.', 7.50, 7.50, 82),
(140, 1.00, 'GASEOSA COCA COLA 1 Lt.', 7.50, 7.50, 82),
(141, 1.00, 'GASESOSA INKA COLA 1/2 Lt.', 4.00, 4.00, 83),
(142, 1.00, 'JUGO DE PIÑA / jarra', 12.00, 12.00, 83),
(143, 1.00, 'GASEOSA COCA COLA 1 Lt.', 7.50, 7.50, 83),
(146, 1.00, 'ALQUILER DE CUATRIMOTO / hora', 50.00, 50.00, 83),
(147, 1.00, 'GASESOSA INKA COLA 1/2 Lt.', 4.00, 4.00, 83),
(149, 1.00, 'GASEOSA COCA COLA 1/2 Lt.', 4.00, 4.00, 83),
(152, 1.00, 'JUGO DE PIÑA / jarra', 12.00, 12.00, 84),
(153, 1.00, 'GASEOSA COCA COLA 1 Lt.', 7.50, 7.50, 84);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_habitacion`
--

CREATE TABLE `tb_habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `numero` varchar(7) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `nivel` varchar(20) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_habitacion`
--

INSERT INTO `tb_habitacion` (`id_habitacion`, `numero`, `categoria`, `precio`, `nivel`, `tipo`, `descripcion`, `imagen`) VALUES
(1, 'Hab_101', 'Simple', 90.00, 'Piso 1', '1 cama de 1 1/2', '-', '-'),
(2, 'Hab_102', 'Matrimonial', 120.00, 'Piso 1', '1 cama - 2 plazas', '-', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_habitacion` varchar(10) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedido`, `id_habitacion`, `total`, `fecha`, `id_usuario`) VALUES
(75, 'HAB-101', 50.00, '17/04/2023  12:24:17', 1),
(76, 'HAB-102', 16.00, '17/04/2023  01:22:41', 1),
(77, 'HAB-101', 0.00, '26/04/2023  03:46 PM', 1),
(78, 'HAB-101', 0.00, '26/04/2023  04:00 PM', 1),
(79, 'HAB-101', 0.00, '26/04/2023  04:48 PM', 1),
(80, 'HAB-115', 20.00, '26/04/2023  04:50 PM', 2),
(81, 'HAB-104', 73.50, '27/04/2023  10:23 AM', 1),
(82, 'HAB-112', 15.00, '27/04/2023  10:25 AM', 1),
(83, 'HAB-105', 81.50, '27/04/2023  12:22 PM', 1),
(84, 'HAB-113', 19.50, '27/04/2023  05:16 PM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto`
--

CREATE TABLE `tb_producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_producto`
--

INSERT INTO `tb_producto` (`id_producto`, `nombre`, `precio`) VALUES
(1, 'GASESOSA INKA COLA 1/2 Lt.', 4.00),
(3, 'GASEOSA COCA COLA 1/2 Lt.', 4.00),
(4, 'JUGO DE PIÑA / jarra', 12.00),
(5, 'GASEOSA COCA COLA 1 Lt.', 7.50),
(6, 'ALQUILER DE CUATRIMOTO / hora', 50.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `apellidos_nombre` varchar(100) NOT NULL,
  `genero_usuario` varchar(20) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `localidad_usuario` varchar(100) NOT NULL,
  `fecha_creausuario` varchar(50) NOT NULL,
  `estado_usuario` varchar(20) NOT NULL,
  `rol_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `apellidos_nombre`, `genero_usuario`, `usuario`, `password`, `localidad_usuario`, `fecha_creausuario`, `estado_usuario`, `rol_usuario`) VALUES
(76, 'Invitado', 'masculino', 'invitado', '$2y$10$ahZl7StE5nkRnorw5wSYdep7KWk9XfeDVsYWwcY8Zv8gJUuCZMSBi', 'chincha', '17/04/2023  12:39:28 pm', 'Activo', 'Invitado'),
(79, 'Administrador', 'masculino', 'admin', '$2y$10$2JU8jBqhuUzN8RXxzMhvi.SqP1vVCO03u71PiI/SqhmDf6atYuE6G', 'chincha', '17/04/2023  06:29:22 pm', 'Activo', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_contacto`
--
ALTER TABLE `tb_contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `tb_detallepedido`
--
ALTER TABLE `tb_detallepedido`
  ADD PRIMARY KEY (`id_detallepedido`);

--
-- Indices de la tabla `tb_habitacion`
--
ALTER TABLE `tb_habitacion`
  ADD PRIMARY KEY (`id_habitacion`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_contacto`
--
ALTER TABLE `tb_contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_detallepedido`
--
ALTER TABLE `tb_detallepedido`
  MODIFY `id_detallepedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de la tabla `tb_habitacion`
--
ALTER TABLE `tb_habitacion`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `tb_producto`
--
ALTER TABLE `tb_producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
