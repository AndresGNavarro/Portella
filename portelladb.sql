-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 04:26:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portelladb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_entrada`
--

CREATE TABLE `detalle_entrada` (
  `pkdetalle_entrada` int(11) NOT NULL,
  `fkentrada` int(11) NOT NULL,
  `fkproducto` int(11) NOT NULL,
  `cantidad_box` decimal(18,2) NOT NULL,
  `peso` decimal(18,2) NOT NULL,
  `costo` decimal(18,2) NOT NULL,
  `box` varchar(20) NOT NULL,
  `fkjob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_perfil`
--

CREATE TABLE `detalle_perfil` (
  `pkdetalle_perfil` int(11) NOT NULL,
  `fkperfil` int(11) NOT NULL,
  `fkprivilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_salida`
--

CREATE TABLE `detalle_salida` (
  `fkdetalle_salida` int(11) NOT NULL,
  `fksalida` int(11) NOT NULL,
  `cantidad` decimal(18,2) NOT NULL,
  `fkproducto` int(11) NOT NULL,
  `fkjob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `pkentrada` int(11) NOT NULL,
  `folio` varchar(50) NOT NULL,
  `folio_completo` varchar(100) NOT NULL,
  `pedimento` varchar(50) NOT NULL,
  `factura` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fkusuario` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta_producto`
--

CREATE TABLE `etiqueta_producto` (
  `pketiqueta_producto` int(11) NOT NULL,
  `no_parte` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `fkimpresora` int(11) NOT NULL,
  `fkorigen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresora`
--

CREATE TABLE `impresora` (
  `pkimpresora` int(11) NOT NULL,
  `nombre_impresora` varchar(50) NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job`
--

CREATE TABLE `job` (
  `pkjob` int(11) NOT NULL,
  `job` varchar(50) NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `pkkardex` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fkproducto` int(11) NOT NULL,
  `fkusuario` int(11) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `operacion` varchar(50) NOT NULL,
  `existencia` decimal(18,2) NOT NULL,
  `entrada` decimal(18,2) NOT NULL,
  `salida` decimal(18,2) NOT NULL,
  `cantidad_final` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomenclatura`
--

CREATE TABLE `nomenclatura` (
  `pknomenclatura` int(11) NOT NULL,
  `digito` smallint(6) NOT NULL,
  `tipo` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `pkorigen` int(11) NOT NULL,
  `origen` varchar(50) NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`pkorigen`, `origen`, `estado`) VALUES
(1, 'México', 1),
(2, 'Colombia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `pkperfil` int(11) NOT NULL,
  `nombre_perfil` varchar(50) NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegio`
--

CREATE TABLE `privilegio` (
  `pkprivilegio` int(11) NOT NULL,
  `clave` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `pkproducto` int(11) NOT NULL,
  `fkorigen` int(11) NOT NULL,
  `no_parte` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`pkproducto`, `fkorigen`, `no_parte`, `descripcion`, `estado`) VALUES
(1, 1, 'PartN002-100', 'Nueva descripcion', 1),
(2, 1, 'PartN003-1 qweqwe', 'Otra descripción Nahqeqwqwew', 0),
(3, 1, 'PartN001-217', 'Otra descripción Nah', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_almacen`
--

CREATE TABLE `producto_almacen` (
  `pkproducto_almacen` int(11) NOT NULL,
  `fkproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `fkjob` int(11) DEFAULT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_job`
--

CREATE TABLE `producto_job` (
  `pkproducto_job` int(11) NOT NULL,
  `fkproducto` int(11) NOT NULL,
  `fkjob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `pksalida` int(11) NOT NULL,
  `fkusuario` int(11) NOT NULL,
  `folio` varchar(50) NOT NULL,
  `folio_completo` varchar(100) NOT NULL,
  `pedimento` varchar(50) NOT NULL,
  `fecha_pedimento` datetime NOT NULL,
  `factura` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `pkusuario` int(11) NOT NULL,
  `fkperfil` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `a_paterno` varchar(50) NOT NULL,
  `a_materno` varchar(50) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `estado` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_entrada`
--
ALTER TABLE `detalle_entrada`
  ADD PRIMARY KEY (`pkdetalle_entrada`),
  ADD KEY `fkentrada` (`fkentrada`),
  ADD KEY `fkproducto` (`fkproducto`),
  ADD KEY `fkjob` (`fkjob`);

--
-- Indices de la tabla `detalle_perfil`
--
ALTER TABLE `detalle_perfil`
  ADD PRIMARY KEY (`pkdetalle_perfil`),
  ADD KEY `fkperfil` (`fkperfil`),
  ADD KEY `fkprivilegio` (`fkprivilegio`);

--
-- Indices de la tabla `detalle_salida`
--
ALTER TABLE `detalle_salida`
  ADD PRIMARY KEY (`fkdetalle_salida`),
  ADD KEY `fkproducto` (`fkproducto`),
  ADD KEY `fkjob` (`fkjob`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`pkentrada`),
  ADD KEY `fkusuario` (`fkusuario`);

--
-- Indices de la tabla `etiqueta_producto`
--
ALTER TABLE `etiqueta_producto`
  ADD PRIMARY KEY (`pketiqueta_producto`),
  ADD KEY `fkimpresora` (`fkimpresora`),
  ADD KEY `fkorigen` (`fkorigen`);

--
-- Indices de la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD PRIMARY KEY (`pkimpresora`);

--
-- Indices de la tabla `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`pkjob`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`pkkardex`),
  ADD KEY `fkusuario` (`fkusuario`),
  ADD KEY `fkproducto` (`fkproducto`);

--
-- Indices de la tabla `nomenclatura`
--
ALTER TABLE `nomenclatura`
  ADD PRIMARY KEY (`pknomenclatura`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`pkorigen`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`pkperfil`);

--
-- Indices de la tabla `privilegio`
--
ALTER TABLE `privilegio`
  ADD PRIMARY KEY (`pkprivilegio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`pkproducto`),
  ADD KEY `fkorigen` (`fkorigen`);

--
-- Indices de la tabla `producto_almacen`
--
ALTER TABLE `producto_almacen`
  ADD PRIMARY KEY (`pkproducto_almacen`),
  ADD KEY `fkproducto` (`fkproducto`),
  ADD KEY `fkjob` (`fkjob`);

--
-- Indices de la tabla `producto_job`
--
ALTER TABLE `producto_job`
  ADD PRIMARY KEY (`pkproducto_job`),
  ADD KEY `fkproducto` (`fkproducto`),
  ADD KEY `fkjob` (`fkjob`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`pksalida`),
  ADD KEY `fkusuario` (`fkusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`pkusuario`),
  ADD KEY `fkperfil` (`fkperfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_entrada`
--
ALTER TABLE `detalle_entrada`
  MODIFY `pkdetalle_entrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_perfil`
--
ALTER TABLE `detalle_perfil`
  MODIFY `pkdetalle_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_salida`
--
ALTER TABLE `detalle_salida`
  MODIFY `fkdetalle_salida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `pkentrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `etiqueta_producto`
--
ALTER TABLE `etiqueta_producto`
  MODIFY `pketiqueta_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `impresora`
--
ALTER TABLE `impresora`
  MODIFY `pkimpresora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `job`
--
ALTER TABLE `job`
  MODIFY `pkjob` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `kardex`
--
ALTER TABLE `kardex`
  MODIFY `pkkardex` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nomenclatura`
--
ALTER TABLE `nomenclatura`
  MODIFY `pknomenclatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `pkorigen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `pkperfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `privilegio`
--
ALTER TABLE `privilegio`
  MODIFY `pkprivilegio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `pkproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto_almacen`
--
ALTER TABLE `producto_almacen`
  MODIFY `pkproducto_almacen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto_job`
--
ALTER TABLE `producto_job`
  MODIFY `pkproducto_job` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `pksalida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `pkusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_entrada`
--
ALTER TABLE `detalle_entrada`
  ADD CONSTRAINT `detalle_entrada_ibfk_1` FOREIGN KEY (`fkentrada`) REFERENCES `entrada` (`pkentrada`),
  ADD CONSTRAINT `detalle_entrada_ibfk_2` FOREIGN KEY (`fkproducto`) REFERENCES `producto` (`pkproducto`),
  ADD CONSTRAINT `detalle_entrada_ibfk_3` FOREIGN KEY (`fkjob`) REFERENCES `job` (`pkjob`);

--
-- Filtros para la tabla `detalle_perfil`
--
ALTER TABLE `detalle_perfil`
  ADD CONSTRAINT `detalle_perfil_ibfk_1` FOREIGN KEY (`fkperfil`) REFERENCES `perfil` (`pkperfil`),
  ADD CONSTRAINT `detalle_perfil_ibfk_2` FOREIGN KEY (`fkprivilegio`) REFERENCES `privilegio` (`pkprivilegio`);

--
-- Filtros para la tabla `detalle_salida`
--
ALTER TABLE `detalle_salida`
  ADD CONSTRAINT `detalle_salida_ibfk_1` FOREIGN KEY (`fkproducto`) REFERENCES `producto` (`pkproducto`),
  ADD CONSTRAINT `detalle_salida_ibfk_2` FOREIGN KEY (`fkjob`) REFERENCES `job` (`pkjob`);

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`pkusuario`);

--
-- Filtros para la tabla `etiqueta_producto`
--
ALTER TABLE `etiqueta_producto`
  ADD CONSTRAINT `etiqueta_producto_ibfk_1` FOREIGN KEY (`fkimpresora`) REFERENCES `impresora` (`pkimpresora`),
  ADD CONSTRAINT `etiqueta_producto_ibfk_2` FOREIGN KEY (`fkorigen`) REFERENCES `origen` (`pkorigen`);

--
-- Filtros para la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD CONSTRAINT `kardex_ibfk_1` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`pkusuario`),
  ADD CONSTRAINT `kardex_ibfk_2` FOREIGN KEY (`fkproducto`) REFERENCES `producto` (`pkproducto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`fkorigen`) REFERENCES `origen` (`pkorigen`);

--
-- Filtros para la tabla `producto_almacen`
--
ALTER TABLE `producto_almacen`
  ADD CONSTRAINT `producto_almacen_ibfk_1` FOREIGN KEY (`fkproducto`) REFERENCES `producto` (`pkproducto`),
  ADD CONSTRAINT `producto_almacen_ibfk_2` FOREIGN KEY (`fkjob`) REFERENCES `job` (`pkjob`);

--
-- Filtros para la tabla `producto_job`
--
ALTER TABLE `producto_job`
  ADD CONSTRAINT `producto_job_ibfk_1` FOREIGN KEY (`fkproducto`) REFERENCES `producto` (`pkproducto`),
  ADD CONSTRAINT `producto_job_ibfk_2` FOREIGN KEY (`fkjob`) REFERENCES `job` (`pkjob`);

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`pkusuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fkperfil`) REFERENCES `perfil` (`pkperfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
