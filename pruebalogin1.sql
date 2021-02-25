-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2021 a las 01:18:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebalogin1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud_employees`
--

CREATE TABLE `crud_employees` (
  `id` mediumint(9) NOT NULL,
  `names` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_register` date NOT NULL,
  `phone` varchar(12) NOT NULL,
  `comment` tinytext NOT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `crud_employees`
--

INSERT INTO `crud_employees` (`id`, `names`, `address`, `date_register`, `phone`, `comment`, `salary`) VALUES
(0, 'dddd', 'ddddddddddddddddddddd', '2021-02-15', '123123', '213', '21321321.00'),
(7, 'Jhon Williams', 'Calle Saint Seiya 239 Urb. Zodiaco', '2019-11-15', '+51 95418188', 'Compositor de grandes películas', '1200.50'),
(9, 'Goku Sayayin', 'Calle Spiderman #678', '2019-11-15', '+61 98745632', '', '1400.60'),
(10, 'Tsubasa Olive Atom', 'Avenida Planeta de los Simios #998', '2019-11-18', '+84 96358742', 'Un buen juador de futbol', '1300.60'),
(11, 'Jhon Wick', 'Jiron Matones #785', '2019-11-07', '+1 852963250', 'Un gran profesional', '1800.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', 'adminko', 'admin@gmail.com', 'admin', 1),
(2, 'jhonatan', '123', 'jhonatan@gmail.com', '', 1),
(6, 'ddddd', 'ddddddddd', 'ddddddddddddddddddd', '', 2),
(7, 'matias', 'Administrador', 'matias', '', 2),
(8, 'matiasfredes', 'matiasfredes', 'matiasfredes', '', 1),
(9, 'matias1matias1', 'matias1', 'matias1', '', 2),
(10, 'matiasr2', '203582277', '203582277', '', 2),
(11, 'matias@gmail.com', 'matias@gmail.com', 'matias@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `TipArea` varchar(255) NOT NULL,
  `TipoACTIV` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `TipArea`, `TipoACTIV`, `created_at`) VALUES
(34, 'ser1', '123', '2021-02-06 02:44:40'),
(35, 'ewqewq', 'ewqewq', '2021-02-06 02:44:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud_employees`
--
ALTER TABLE `crud_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
