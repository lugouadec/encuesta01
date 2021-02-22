-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-02-2021 a las 02:40:55
-- Versión del servidor: 8.0.23
-- Versión de PHP: 7.3.24-(to be removed in future macOS)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `burnout`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `burnout`
--

CREATE TABLE `burnout` (
  `O1` int NOT NULL,
  `O2` int NOT NULL,
  `O3` int NOT NULL,
  `O4` int NOT NULL,
  `O5` int NOT NULL,
  `O6` int NOT NULL,
  `O7` int NOT NULL,
  `O8` int NOT NULL,
  `O9` int NOT NULL,
  `O10` int NOT NULL,
  `O11` int NOT NULL,
  `O12` int NOT NULL,
  `O13` int NOT NULL,
  `O14` int NOT NULL,
  `O15` int NOT NULL,
  `O16` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confusoras`
--

CREATE TABLE `confusoras` (
  `G6` int NOT NULL,
  `G7` int NOT NULL,
  `G8` int NOT NULL,
  `G9` int NOT NULL,
  `G10` int NOT NULL,
  `EPL14_1` int NOT NULL,
  `EPL14_2` int NOT NULL,
  `EPL13` int NOT NULL,
  `G4` int NOT NULL,
  `G5` int NOT NULL,
  `EPL15` int NOT NULL,
  `G1` int NOT NULL,
  `G2` int NOT NULL,
  `G3` int NOT NULL,
  `G11` int NOT NULL,
  `G12` int NOT NULL,
  `G13` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consentimiento`
--

CREATE TABLE `consentimiento` (
  `fecha` date NOT NULL,
  `folio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exigencia`
--

CREATE TABLE `exigencia` (
  `EPL1` int NOT NULL,
  `EPL2` int NOT NULL,
  `EPL3` int NOT NULL,
  `EPL4` int NOT NULL,
  `EPL5` int NOT NULL,
  `EPL6` int NOT NULL,
  `EPL7` int NOT NULL,
  `EPL8` int NOT NULL,
  `EPL9` int NOT NULL,
  `EPL10` int NOT NULL,
  `EPL11` int NOT NULL,
  `EPL12` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GWEstres`
--

CREATE TABLE `GWEstres` (
  `E1` int NOT NULL,
  `E2` int NOT NULL,
  `E3` int NOT NULL,
  `E4` int NOT NULL,
  `E5` int NOT NULL,
  `E6` int NOT NULL,
  `E7` int NOT NULL,
  `E8` int NOT NULL,
  `E9` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `IAC`
--

CREATE TABLE `IAC` (
  `C1` int NOT NULL,
  `C2` int NOT NULL,
  `C3` int NOT NULL,
  `C4` int NOT NULL,
  `C5` int NOT NULL,
  `C6` int NOT NULL,
  `C7` int NOT NULL,
  `C8` int NOT NULL,
  `C9` int NOT NULL,
  `C10` int NOT NULL,
  `C11` int NOT NULL,
  `C12` int NOT NULL,
  `C13` int NOT NULL,
  `C14` int NOT NULL,
  `C15` int NOT NULL,
  `C16` int NOT NULL,
  `C17` int NOT NULL,
  `C18` int NOT NULL,
  `C19` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participar`
--

CREATE TABLE `participar` (
  `folio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `participar`
--

INSERT INTO `participar` (`folio`) VALUES
(5854),
(6722),
(9115);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personalidad`
--

CREATE TABLE `Personalidad` (
  `P1` int NOT NULL,
  `P2` int NOT NULL,
  `P3` int NOT NULL,
  `P4` int NOT NULL,
  `P5` int NOT NULL,
  `P6` int NOT NULL,
  `P7` int NOT NULL,
  `P8` int NOT NULL,
  `P9` int NOT NULL,
  `P10` int NOT NULL,
  `P11` int NOT NULL,
  `P12` int NOT NULL,
  `P13` int NOT NULL,
  `P14` int NOT NULL,
  `P15` int NOT NULL,
  `P16` int NOT NULL,
  `P17` int NOT NULL,
  `P18` int NOT NULL,
  `P19` int NOT NULL,
  `P20` int NOT NULL,
  `P21` int NOT NULL,
  `P22` int NOT NULL,
  `P23` int NOT NULL,
  `P24` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consentimiento`
--
ALTER TABLE `consentimiento`
  ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `participar`
--
ALTER TABLE `participar`
  ADD PRIMARY KEY (`folio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
