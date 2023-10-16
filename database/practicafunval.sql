-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 14:52:40
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
-- Base de datos: `practicafunval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID_USER` int(11) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `FOTO` varchar(250) DEFAULT NULL,
  `BIO` varchar(250) DEFAULT NULL,
  `PHONE` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(250) DEFAULT NULL,
  `PASSWORD` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID_USER`, `NAME`, `FOTO`, `BIO`, `PHONE`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Sebastian Aldana', '../public/1_Perfil.png', 'Soy Desarrollador fullstack, el mejor del mundo Hola mundo ', '32425040500', 'mr.sjaldana@gmail.com', '$2y$10$RgD4/cuInZ0AEGChNbP5euq8gwgz3XbQRIpYIYCKp8Uh4ol3t0DGi'),
(2, 'Luis Garcia', NULL, 'Soy luis', '3152687895', 'luis@garcia.com', '$2y$10$mb8XAercnpBtAtU8Ei5usO4dSjqau9.Odw5vb0K5HL6sqPNxTtBaC'),
(3, NULL, NULL, NULL, NULL, 'admi@admi.com', 'admi'),
(4, NULL, NULL, NULL, NULL, 's.jimenez@strokescanbpm.com', '$2y$10$Wpm71x8KnkF15sj5Hz8mculRy4sesVMHngezlzvwixa4sQTLJToGO'),
(5, NULL, NULL, NULL, NULL, 'sebas@jimenez.es', '$2y$10$rHlFaOoPO2lLdTeJMYUQaOl6n9q9vDgepcaRT.Q3EPOGBosKrxk7.'),
(6, 'Luis Rodriguez', '../public/6_Perfil.jpeg', 'Soy Mecánico, el mejor del mundo', '3654897528', 'admin@admin', '$2y$10$2inDB053ZgkzQ5M6xeyHg.J4VUMrPYOoPsV/tGnyFFFeTfBsjZPyS'),
(7, 'Andres Cepeda', '../public/7_Perfil.png', 'Soy cantante famoso', '3546875252', 'test@test', '$2y$10$.3NysRsxyOp2hSdcYvUxuuk1y.Ig/hFk3tihu.Fa4R0wTirV9XG/i');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
