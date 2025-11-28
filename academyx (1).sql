-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2025 a las 17:07:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academyx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `fecha_agregado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  `instructor` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` enum('estudiante','instructor') DEFAULT 'estudiante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `password`, `created_at`, `tipo`) VALUES
(1, 'Isabella', 'isabellacastano188@gmail.com', 'isa123', '2025-11-17 17:39:50', 'estudiante'),
(2, 'Heidy', 'heisyaristizabal00@gmail.com', 'heidy123', '2025-11-17 17:45:56', 'instructor'),
(3, 'Sandra', 'sandramunoz1@gmail.com', '$2y$10$AH8FXAcjC1.Gfkfx68xaoughn9RHFG7V/R6vDDWWCjKHCZIEr0Arm', '2025-11-17 17:56:15', 'estudiante'),
(4, 'Jacobo', 'jacobo123@gmail.com', '$2y$10$9JWOjOaKRozb8Zu.ueGu/Oy6FLASExlWWcOE8MyqYESFbm2zJ9Hly', '2025-11-17 19:47:10', 'estudiante'),
(5, 'laura', 'laura123@gmail.com', '$2y$10$C1nBrdAAUmlFsCtjhl0oWuuv6DFkBmzgpbmLKk8wPGnR93VYx042u', '2025-11-17 19:53:16', 'estudiante'),
(6, '', '', '$2y$10$z.OZvLafj9lIe1VsA6hBfu8bgT/aB8GpAFfadXVmHxu/nB0ihEnVu', '2025-11-19 04:29:30', ''),
(7, 'Usuario Test', 'test1763562946264@correo.com', '$2y$10$Vvmm3vr5C6AvmWQzzJBc5OCl3rzz9.AxwntxfGasd2oaFeY2xG4sa', '2025-11-19 14:35:47', 'estudiante'),
(8, 'Usuario Test', 'test1763562961221@correo.com', '$2y$10$gjv5dv.6bxMuxpi1QYeDUuXIt0itJoaHkhDMogsnwqm4iJzHgriHa', '2025-11-19 14:36:02', 'estudiante'),
(9, 'Usuario Test', 'test1763563131331@correo.com', '$2y$10$Bk9SnmcoJ7FFuLAkMlQ39eQ/IgzECTzpqXyenhNJXDzTLcDGz2cbS', '2025-11-19 14:38:52', 'estudiante'),
(10, 'Usuario Test', 'test1763563167559@correo.com', '$2y$10$oJ8u.T0snbhxb4Xpy6Zp5.xXr.KCNb3bwdBzylPYwzOokFqR1hq3q', '2025-11-19 14:39:29', 'estudiante'),
(11, 'Usuario Test', 'test1763563183577@correo.com', '$2y$10$tQK3gGGU0xk5g1zH6lAY7eZrV5gaIy/KaLMFhrwlSV61rf/BdpsdK', '2025-11-19 14:39:45', 'estudiante'),
(12, 'Usuario Test', 'test1763563247240@correo.com', '$2y$10$W.h6mz9oPDVQvy2TQWQ2ru0CpNjbYup1yRl.5RRvF4SKp.uaFQMKe', '2025-11-19 14:40:49', 'estudiante'),
(13, 'Usuario Test', 'test1763563266003@correo.com', '$2y$10$3VsR5mRQGwmtzvj0a.7R2e.nXJECNxLoQTuFRyNAMUOyw.fifyve6', '2025-11-19 14:41:07', 'estudiante'),
(14, 'Usuario Test', 'test1763563460153@correo.com', '$2y$10$ki4Ydfekdis6L6DP.AazcOduOPfzo.K1QyDS0Q30KPVkMmjG5rm2q', '2025-11-19 14:44:22', 'estudiante'),
(15, 'Usuario Test', 'test1763563967455@correo.com', '$2y$10$bYWVLDW3BWAD5MoU4Iq1hORVSiZ7AFMWbQ5sXdnFjHVgFK486wNGm', '2025-11-19 14:52:50', 'estudiante'),
(16, 'Usuario Test', 'test1763564346737@correo.com', '$2y$10$oZ61vN0eB3FNmkav7J34jeXlbDxe3O08yIhL5sfUqr6u9B/IVAOKi', '2025-11-19 14:59:08', 'estudiante'),
(17, 'Usuario Test', 'test1763564373149@correo.com', '$2y$10$cOH9rHHA5hlti5zQwzZuNulXu0etRAbJ1VJDvmLxCssmQXUeHTzLe', '2025-11-19 14:59:35', 'estudiante'),
(18, 'Usuario Test', 'test1763564418275@correo.com', '$2y$10$7X1EOUDTBZcYXK0nPuF68O7iF2Lxq1qIwBZsAfz91V13fASJ2BnuS', '2025-11-19 15:00:20', 'estudiante'),
(19, 'Usuario Test', 'test1763564638646@correo.com', '$2y$10$hUSVJGuYA9NuATLIT1Nh2ucGvFYZU/xwZOWWsn.1xKu7yW7QnqBUG', '2025-11-19 15:04:00', 'estudiante'),
(20, 'Usuario Test', 'test1763565144641@correo.com', '$2y$10$dp8kye8zpAibqjMk5IXi8e21QolLGdmz1Qa/wgRKjLvvuel99hAl2', '2025-11-19 15:12:26', 'estudiante'),
(21, 'Usuario Test', 'test1763568338111@correo.com', '$2y$10$Da6uymvzZetpM14JJFblpuzV2UwAZSWWj3yrCqXUwSWpZiPEHd8ga', '2025-11-19 16:05:42', 'estudiante'),
(22, 'alejandra ortiz', 'alejaortiz@gmail.com', '$2y$10$ZiW6Cj2ZpbYQIkEdi7jPZe1ZtqLxnDrMlzmYj2euN3TsXka5m.vEy', '2025-11-26 04:17:39', 'estudiante'),
(23, 'Heidy puentes', 'heidyPuentes@gmail.com', '$2y$10$zlcngJfXkJU.8/0V1DdmFOcsMGQg7Vv4k2USb2hAzy5vmzhZzAwpy', '2025-11-26 17:25:16', 'estudiante'),
(24, 'Heidy puentes', 'heidyPuentes1@gmail.com', '$2y$10$SagoNFIRHpH2rECphiDwxeSYgDPfjGgUGJFBnwzl3bby35xdR1UY2', '2025-11-26 17:31:07', 'estudiante'),
(25, 'Heidy puentes', 'heidyPuentes12@gmail.com', '$2y$10$Zx2u7R1ba1n4F4kwKRykLeXo5inpwDY2/SsFMhTnkCf9bj6MWmHFO', '2025-11-26 17:33:08', 'estudiante'),
(26, 'Usuario Test', 'test1764198256628@correo.com', '$2y$10$BkkdRigY9JpC4ZB1dvreD.kddzUsW4GA5qAjgaVlOxXnTddtIBuBe', '2025-11-26 23:04:34', 'estudiante'),
(27, 'Usuario Test', 'test1764198330735@correo.com', '$2y$10$.eTQw7i0jyAXiL0CDFDwiuYjNt9Dz9tmOILzoiM/x9ipKwt6zPniW', '2025-11-26 23:05:32', 'estudiante'),
(28, 'Usuario Test', 'test1764289512999@correo.com', '$2y$10$X1bx1N4B9D3qR6zg29FOUujLw7V/CqxcE8xepHGS7KCdO542sWmdq', '2025-11-28 00:25:15', 'estudiante'),
(29, 'Usuario Test', 'test1764289535829@correo.com', '$2y$10$XIPxgC6gqa6BAjBqaym.HuoUiPBaMmwUR6r4ANourkugw4vjnc7Ri', '2025-11-28 00:25:37', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
