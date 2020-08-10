-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2020 a las 00:43:36
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundacion_semilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance`
--

CREATE TABLE `avance` (
  `id_avance` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_desafio` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `avance`
--

INSERT INTO `avance` (`id_avance`, `id_user`, `id_desafio`, `date`) VALUES
(1, 1, 19, '2020-08-07 14:58:56'),
(2, 1, 20, '2020-08-07 14:58:56'),
(3, 1, 21, '2020-08-07 14:58:56'),
(4, 1, 1, '2020-08-07 14:58:56'),
(5, 1, 2, '2020-08-07 14:58:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comen` int(11) NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comen`, `comentario`, `fecha`, `id_user`, `id_post`) VALUES
(21, 'comentario de prueba', '2020-08-07 19:15:45', 1, 4),
(24, 'asdasdasdasd', '2020-08-10 02:05:30', 1, 20),
(25, 'asdasdasdasd', '2020-08-10 02:05:30', 1, 20),
(26, 'asdasdas', '2020-08-10 02:05:36', 1, 20),
(27, 'asdasdas', '2020-08-10 02:05:36', 1, 20),
(28, 'asdasdasdasd', '2020-08-10 02:33:18', 1, 4),
(29, 'asdasdasdasd', '2020-08-10 02:33:18', 1, 4),
(30, 'asdasdasdasd', '2020-08-10 02:33:18', 1, 4),
(31, 'asdasda', '2020-08-10 02:34:09', 1, 4),
(32, 'aaa', '2020-08-10 04:14:09', 1, 22),
(33, 'qweqweqw', '2020-08-10 21:43:22', 1, 22),
(34, 'qweqweqw', '2020-08-10 21:43:22', 1, 22),
(35, 'sdfsdfsdfsdfsdfsfs', '2020-08-10 21:46:01', 1, 24),
(36, 'sdfsdfsdfsdfsdfsfs', '2020-08-10 21:46:01', 1, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desafio`
--

CREATE TABLE `desafio` (
  `id_desafio` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `indo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `desafio`
--

INSERT INTO `desafio` (`id_desafio`, `name`, `type`, `indo`) VALUES
(1, 'video1-1', 'video', NULL),
(2, 'video1-2', 'video', NULL),
(3, 'video1-3', 'video', NULL),
(4, 'video2-1', 'video', NULL),
(5, 'video2-2', 'video', NULL),
(6, 'video2-3', 'video', NULL),
(7, 'video3-1', 'video', NULL),
(8, 'video3-2', 'video', NULL),
(9, 'video3-3', 'video', NULL),
(10, 'juego1-1', 'juego', NULL),
(11, 'juego1-2', 'juego', NULL),
(12, 'juego1-3', 'juego', NULL),
(13, 'juego2-1', 'juego', NULL),
(14, 'juego2-2', 'juego', NULL),
(15, 'juego2-3', 'juego', NULL),
(16, 'juego3-1', 'juego', NULL),
(17, 'juego3-2', 'juego', NULL),
(18, 'juego3-3', 'juego', NULL),
(19, 'desafio1-1', 'Desafio', NULL),
(20, 'desafio1-2', 'Desafio', NULL),
(21, 'desafio1-3', 'Desafio', NULL),
(22, 'desafio2-1', 'Desafio', NULL),
(23, 'desafio2-2', 'Desafio', NULL),
(24, 'desafio2-3', 'Desafio', NULL),
(25, 'desafio3-1', 'Desafio', NULL),
(26, 'desafio3-2', 'Desafio', NULL),
(27, 'desafio3-3', 'Desafio', NULL),
(28, 'Blog1-1', 'Blog', NULL),
(29, 'Blog1-2', 'Blog', NULL),
(30, 'Blog1-3', 'Blog', NULL),
(31, 'Blog2-1', 'Blog', NULL),
(32, 'Blog2-2', 'Blog', NULL),
(33, 'Blog2-3', 'Blog', NULL),
(34, 'Blog3-1', 'Blog', NULL),
(35, 'Blog3-2', 'Blog', NULL),
(36, 'Blog3-3', 'Blog', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id_destaca` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tipo_post` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insta_desafio`
--

CREATE TABLE `insta_desafio` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_desafio` int(11) NOT NULL,
  `urls` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `insta_desafio`
--

INSERT INTO `insta_desafio` (`id`, `id_user`, `id_desafio`, `urls`, `fecha`) VALUES
(13, 1, 19, 'https://www.instagram.com/p/CDsSJqKhYNEx8r4si2JW8RqmKIV2nuld_8YRLY0/', '2020-08-10 16:37:53'),
(14, 1, 20, 'https://www.instagram.com/p/CDsSJqKhYNEx8r4si2JW8RqmKIV2nuld_8YRLY0/', '2020-08-10 16:38:09'),
(17, 1, 21, 'https://www.instagram.com/p/CDrzmziBpIB/', '2020-08-10 17:01:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` int(10) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `date`) VALUES
(212, 24, 1, '2020-08-10 21:47:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes_com`
--

CREATE TABLE `likes_com` (
  `id_li_com` int(11) NOT NULL,
  `id_com` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pin_post`
--

CREATE TABLE `pin_post` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `messa` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `likes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `messa`, `fecha`, `likes`) VALUES
(22, 1, 'aaaaaa(EDITADO)', '2020-08-10 22:18:52', 1),
(24, 1, 'asd', '2020-08-10 21:47:08', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `rut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `school` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `name_avatar` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `img_avatar` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `avance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `pass`, `name`, `rut`, `school`, `instagram`, `name_avatar`, `img_avatar`, `date_create`, `avance`) VALUES
(1, 'jfuentesverdugo@gmail.com', '1234567890', 'Jose', '17786730-6', 'comercial', 'lborongol', 'borongo', '../../../vistas/img/img.png', '2020-07-22 03:35:42', 25),
(2, 'j1', '1234', 'Alejandro', '1-9', 'inscoval', 'inscoval', 'borongoz', '../../../vistas/img/img.png', '2020-07-22 03:14:54', 99),
(3, 'j1', '1234', 'Samuel', '1-9', 'inscoval', 'inscoval', 'pedro123', '../../../vistas/img/img.png', '2020-07-22 03:12:39', 13),
(4, 'j1', '1234', 'Almendra', '1-9', 'inscoval', 'inscoval', 'batman', '../../../vistas/img/img.png', '2020-07-22 03:12:52', 15),
(5, 'j1', '1234', 'Constanza', '1-9', 'inscoval', 'inscoval', 'rojas', '../../../vistas/img/img.png', '2020-07-22 03:13:07', 18),
(6, 'j1', '1234', 'Carlos', '1-9', 'inscoval', 'inscoval', 'maluenda', '../../../vistas/img/img.png', '2020-07-22 03:13:25', 32),
(7, 'j1', '1234', 'Roberto', '1-9', 'inscoval', 'inscoval', 'borongoz', '../../../vistas/img/img.png', '2020-07-22 03:13:39', 40),
(8, 'j1', '1234', 'Nicol', '1-9', 'inscoval', 'inscoval', 'caceres', '../../../vistas/img/img.png', '2020-07-22 03:14:11', 44),
(9, 'j1', '1234', 'Rodrigo', '1-9', 'inscoval', 'inscoval', 'xiomi', '../../../vistas/img/img.png', '2020-07-22 02:25:48', 48),
(10, 'j1', '1234', 'Samuel', '1-9', 'inscoval', 'inscoval', 'pedro123', '../../../vistas/img/img.png', '2020-07-22 03:12:39', 13),
(11, 'j1', '1234', 'Almendra', '1-9', 'inscoval', 'inscoval', 'batman', '../../../vistas/img/img.png', '2020-07-22 03:12:52', 15),
(12, 'j1', '1234', 'Constanza', '1-9', 'inscoval', 'inscoval', 'rojas', '../../../vistas/img/img.png', '2020-07-22 03:13:07', 18),
(13, 'j1', '1234', 'Carlos', '1-9', 'inscoval', 'inscoval', 'maluenda', '../../../vistas/img/img.png', '2020-07-22 03:13:25', 32),
(14, 'j1', '1234', 'Roberto', '1-9', 'inscoval', 'inscoval', 'borongoz', '../../../vistas/img/img.png', '2020-07-22 03:13:39', 40),
(15, 'j1', '1234', 'Nicol', '1-9', 'inscoval', 'inscoval', 'caceres', '../../../vistas/img/img.png', '2020-07-22 03:14:11', 44),
(16, 'j1', '1234', 'Rodrigo', '1-9', 'inscoval', 'inscoval', 'xiomi', '../../../vistas/img/img.png', '2020-07-22 02:25:48', 48),
(17, 'j1', '1234', 'Nicol', '1-9', 'inscoval', 'inscoval', 'caceres', '../../../vistas/img/img.png', '2020-07-22 03:14:11', 44),
(18, 'j1', '1234', 'Rodrigo', '1-9', 'inscoval', 'inscoval', 'xiomi', '../../../vistas/img/img.png', '2020-07-22 02:25:48', 48),
(19, 'j1', '1234', 'Samuel', '1-9', 'inscoval', 'inscoval', 'pedro123', '../../../vistas/img/img.png', '2020-07-22 03:12:39', 13),
(20, 'j1', '1234', 'Almendra', '1-9', 'inscoval', 'inscoval', 'batman', '../../../vistas/img/img.png', '2020-07-22 03:12:52', 15),
(21, 'j1', '1234', 'Constanza', '1-9', 'inscoval', 'inscoval', 'rojas', '../../../vistas/img/img.png', '2020-07-22 03:13:07', 18),
(22, 'j1', '1234', 'Carlos', '1-9', 'inscoval', 'inscoval', 'maluenda', '../../../vistas/img/img.png', '2020-07-22 03:13:25', 32),
(23, 'j1', '1234', 'Roberto', '1-9', 'inscoval', 'inscoval', 'borongoz', '../../../vistas/img/img.png', '2020-07-22 03:13:39', 40),
(24, 'j1', '1234', 'Nicol', '1-9', 'inscoval', 'inscoval', 'caceres', '../../../vistas/img/img.png', '2020-07-22 03:14:11', 44),
(25, 'j1', '1234', 'Rodrigo', '1-9', 'inscoval', 'inscoval', 'xiomi', '../../../vistas/img/img.png', '2020-07-22 02:25:48', 48);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avance`
--
ALTER TABLE `avance`
  ADD PRIMARY KEY (`id_avance`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_desafio` (`id_desafio`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comen`);

--
-- Indices de la tabla `desafio`
--
ALTER TABLE `desafio`
  ADD PRIMARY KEY (`id_desafio`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id_destaca`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `tipo_post` (`tipo_post`);

--
-- Indices de la tabla `insta_desafio`
--
ALTER TABLE `insta_desafio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `likes_com`
--
ALTER TABLE `likes_com`
  ADD PRIMARY KEY (`id_li_com`),
  ADD KEY `id_com` (`id_com`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `pin_post`
--
ALTER TABLE `pin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avance`
--
ALTER TABLE `avance`
  MODIFY `id_avance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `desafio`
--
ALTER TABLE `desafio`
  MODIFY `id_desafio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id_destaca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `insta_desafio`
--
ALTER TABLE `insta_desafio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT de la tabla `pin_post`
--
ALTER TABLE `pin_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avance`
--
ALTER TABLE `avance`
  ADD CONSTRAINT `avance_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `avance_ibfk_2` FOREIGN KEY (`id_desafio`) REFERENCES `desafio` (`id_desafio`);

--
-- Filtros para la tabla `likes_com`
--
ALTER TABLE `likes_com`
  ADD CONSTRAINT `likes_com_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
