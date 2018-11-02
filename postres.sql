-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2018 a las 00:08:02
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutoriales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE `postres` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`id`, `nombre`, `precio`, `url`, `stock`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Torta de Chocolate', '4.50', 'torta-de-chocolate', '40', 'postres/DsRASNExERCLEWbzNVK90g3ujUE10oDrmiPKC1yD.jpeg', '2018-11-03 02:05:45', '2018-11-03 02:53:31'),
(2, 'Gelatina de Fresa', '1.50', 'gelatina-de-fresa', '60', 'postres/Xdr6CYxcWI34wnMv9xFb0oWwyhYRC7X5lR1nwAgo.jpeg', '2018-11-03 03:11:21', '2018-11-03 03:11:21'),
(3, 'Pie de Manzana', '4.50', 'pie-de-manzana', '45', 'postres/qWCrNP1YF7zhsoeVTZ2qYlSSLTGa69GntMeqM3CZ.jpeg', NULL, '2018-11-03 03:52:44'),
(4, 'Arroz con Leche', '2.50', 'arroz-con-leche', '36', 'postres/fEUt1XQUsIExkMt1aHfJDkNB1liS4lXYyGduqaCb.jpeg', '2018-11-03 03:53:46', '2018-11-03 03:53:46'),
(5, 'Suspiro a la Limeña', '6.00', 'suspiro-a-la-limeña', '26', 'postres/cylu7s4EfjXRYdWPPYy9jkUmn2sh4AYgBGBaRgRX.jpeg', '2018-11-03 03:54:38', '2018-11-03 03:54:38'),
(6, 'Mazamorra Morada', '3.00', 'mazamorra-morada', '50', 'postres/61VQTE5hKUG9kbmbesUPHrdULDrcRt0wXqvxwzKK.png', '2018-11-03 03:55:16', '2018-11-03 03:55:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postres`
--
ALTER TABLE `postres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
