-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2023 a las 22:24:27
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
-- Base de datos: `pinuniverse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `nomAdmin` varchar(200) NOT NULL,
  `apellidosAdmin` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nomAdmin`, `apellidosAdmin`, `email`, `contraseña`) VALUES
(1, 'Leslie Fabiola', 'López Rosales', 'leslie.lopez@udem.edu', 'patito123*'),
(2, 'Diego', 'Mejía Montes', 'diego.mejia@udem.edu', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `custom`
--

CREATE TABLE `custom` (
  `id` int(255) NOT NULL,
  `descrip` varchar(300) NOT NULL,
  `ancho` int(255) NOT NULL,
  `alto` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `custom`
--

INSERT INTO `custom` (`id`, `descrip`, `ancho`, `alto`, `nombre`, `correo`, `img`) VALUES
(7, 'Kirby Con Pistola', 5, 5, 'Diego Mejia', 'dmejiam2002@hotmail.com', 'ImagenesPines/custom/7.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(255) NOT NULL,
  `nombreEvento` varchar(50) NOT NULL,
  `dateEvent` date NOT NULL,
  `locationEvent` varchar(200) NOT NULL,
  `descriptionEvent` varchar(200) NOT NULL,
  `fotoEvent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombreEvento`, `dateEvent`, `locationEvent`, `descriptionEvent`, `fotoEvent`) VALUES
(1, 'Mercadito de Emprendimiento', '2023-05-27', 'https://www.instagram.com/p/CrR_g8OMuXl/', 'Mercadito de Emprendimiento liderado por la SALMEC en el Solar UDEM. ¡No te lo pierdas! Búscanos en nuestro stand de PinUniverse.', 'ImagenesEventos/mercadito.png'),
(2, 'La Conve Monterrey', '2024-03-04', 'https://twitter.com/LaConveMTY', 'Llega la Convención de Cómics, Anime y Entretenimiento más grande de Monterrey. ¡Busca nuestro stand de PinUniverseMX! ', 'ImagenesEventos/laconve.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `universo` varchar(50) DEFAULT NULL,
  `descrip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `universo`, `descrip`) VALUES
(1, 'Patos', 'Pato Pistolas'),
(2, 'Patos', 'Pato Lisa'),
(3, 'Patos', 'Pato Uwu'),
(4, 'patos', 'Pato Pan'),
(5, 'Patos', 'Pato Pipa'),
(6, 'patos', 'Pato Sorprendido'),
(7, 'Patos', 'Pato Pintura'),
(8, 'Demon Slayer', 'Tanjiro'),
(9, 'Demon Slayer', 'Nezuko'),
(10, 'Demon Slayer', 'Zenitsu'),
(11, 'Demon Slayer', 'Inosuke');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos2`
--

CREATE TABLE `productos2` (
  `id` int(255) NOT NULL,
  `universo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos2`
--

INSERT INTO `productos2` (`id`, `universo`, `nombre`, `foto`) VALUES
(25, 'Minimalista', 'Llama', 'ImagenesPines/25.png'),
(26, 'Minimalista', 'Panda', 'ImagenesPines/26.png'),
(27, 'Dinosaurios', 'Mini Dino Amarillo', 'ImagenesPines/27.png'),
(28, 'Dinosaurios', 'Mini Dino Azul', 'ImagenesPines/28.png'),
(29, 'Dinosaurios', 'Mini Dino Celeste', 'ImagenesPines/29.png'),
(30, 'Dinosaurios', 'Mini Dino Rosa', 'ImagenesPines/30.png'),
(31, 'Minimalista', 'Zorro', 'ImagenesPines/31.png'),
(33, 'Animales Cuchillo', 'Pato Cuchillo', 'ImagenesPines/33.png'),
(34, 'Minimalista', 'Koala', 'ImagenesPines/34.png'),
(36, 'Sodiaco', 'Scorpio', 'ImagenesPines/36.png'),
(37, 'Patos', 'Pato Pistolas', 'ImagenesPines/37.png'),
(38, 'Patos', 'Pato Lisa', 'ImagenesPines/38.png'),
(39, 'Patos', 'Pato Sorprendido', 'ImagenesPines/39.png'),
(40, 'Patos', 'Pato Pintura', 'ImagenesPines/40.png'),
(41, 'Demon Slayer', 'Nezuko', 'ImagenesPines/41.png'),
(42, 'Demon Slayer', 'Zenitsu', 'ImagenesPines/42.png'),
(43, 'Demon Slayer', 'Tanjiro', 'ImagenesPines/43.png'),
(44, 'Patos', 'Pato Uwu', 'ImagenesPines/44.png'),
(45, 'Patos', 'Pato Pan', 'ImagenesPines/45.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `custom`
--
ALTER TABLE `custom`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos2`
--
ALTER TABLE `productos2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `custom`
--
ALTER TABLE `custom`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos2`
--
ALTER TABLE `productos2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
