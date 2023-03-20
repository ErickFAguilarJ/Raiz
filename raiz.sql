-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2022 a las 18:42:52
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `raiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Casas`
--

CREATE TABLE `Casas` (
  `idCasa` int(11) NOT NULL,
  `nombreCasa` varchar(15) NOT NULL,
  `imgCasa` varchar(500) NOT NULL,
  `descriptionCasa` varchar(500) NOT NULL,
  `codeUser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Casas`
--

INSERT INTO `Casas` (`idCasa`, `nombreCasa`, `imgCasa`, `descriptionCasa`, `codeUser`) VALUES
(1, 'casa con árbol', 'https://img.freepik.com/vector-gratis/casa-dos-pisos_1308-16176.jpg', 'es una cassa que tiene un árbol y ya ', 'P1234'),
(2, 'Casa Psina ', 'https://i.ytimg.com/vi/pUEi4uPTYOg/maxresdefault.jpg', 'es una casa con una gran psina ', 'A1234'),
(3, 'Casa grande', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.carza.com%2Fblog%2F6-razones-para-tener-tu-casa-propia%2F&psig=AOvVaw3qP7aI4JDVbzgQTR7-ua8-&ust=1670864591603000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCMjyz-WF8vsCFQAAAAAdAAAAABBC', 'Es una casa muy grande y es tan grande como un edificio así de grande y tiene arboles', 'P1234'),
(1, '1', '1', '1', '1'),
(2, '2', '2', '2', '2'),
(2, '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `idUser` int(11) NOT NULL,
  `nameUser` varchar(50) NOT NULL,
  `passwordUser` varchar(50) NOT NULL,
  `codeUser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`idUser`, `nameUser`, `passwordUser`, `codeUser`) VALUES
(1, 'PABLO', 'P12345', 'P1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `codeUser` (`codeUser`),
  ADD KEY `codeUser_2` (`codeUser`),
  ADD KEY `codeUser_3` (`codeUser`);
ALTER TABLE `Usuarios` ADD FULLTEXT KEY `codeUser_4` (`codeUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
