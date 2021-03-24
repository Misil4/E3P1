-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2021 a las 11:58:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `publications`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classics`
--

CREATE TABLE `classics` (
  `isbn` char(13) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `category` varchar(16) NOT NULL,
  `year` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `classics`
--

INSERT INTO `classics` (`isbn`, `title`, `author`, `category`, `year`) VALUES
('1234435545433', 'Orgullo y prejuicio', 'Jane Austen', 'Fiction', 1811),
('1239235545433', 'La vida de Xabier', 'Xabier goenaga', 'Fiction', 2021),
('3236735545433', 'The origin of the Speccies', 'Charles Darwin', 'Non-fiction', 1856),
('3736735591433', 'The old curiosity shop', 'Charles Dickens', 'Fiction', 1841),
('3737837591433', 'Romeo and Juliet', 'William Shakespeare', 'Play', 1594),
('7234435545433', 'The adventures of Tom Sawyer', 'Mark twain', 'Fiction', 1876),
('7534534565770', 'Lord of the rings', 'JRR Tolkien', 'Fiction', 1954),
('7534924565770', 'Lord of the rings', 'JRR Tolkien', 'Fiction', 1954),
('7534925935770', 'Lord of the rings', 'JRR Tolkien', 'Fiction', 1954),
('7534959393577', 'Lord of the rings', 'JRR Tolkien', 'Fiction', 1954);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `classics`
--
ALTER TABLE `classics`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
