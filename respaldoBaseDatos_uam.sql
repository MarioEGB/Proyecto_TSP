-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2016 a las 04:26:30
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uam`
--
CREATE DATABASE IF NOT EXISTS `uam` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `uam`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciontarea`
--

CREATE TABLE `calificaciontarea` (
  `idCalificacion` int(11) NOT NULL,
  `numTarea` int(11) NOT NULL,
  `aciertos` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `numIntentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `uea` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `trimestre` varchar(3) COLLATE latin1_spanish_ci NOT NULL,
  `cveCurso` varchar(6) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `uea`, `cveProfesor`, `trimestre`, `cveCurso`) VALUES
(1, 213333, 1000, '16P', '3333'),
(2, 213333, 2000, '16P', '3333'),
(3, 210000, 3000, '16P', '4444');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaalumno`
--

CREATE TABLE `listaalumno` (
  `matricula` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `nomAlumno` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_materno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `listaalumno`
--

INSERT INTO `listaalumno` (`matricula`, `idCurso`, `nomAlumno`, `apellido_paterno`, `apellido_materno`, `password`, `roll`) VALUES
(210341133, 1, 'Francisco Javier', 'Hernandez', 'Olvera', 'prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `cveEmp` int(11) NOT NULL,
  `nomProfesor` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_paterno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido_materno` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`cveEmp`, `nomProfesor`, `apellido_paterno`, `apellido_materno`, `password`, `roll`) VALUES
(1000, 'Luis', 'Castro', 'Careaga', 'prueba', 0),
(2000, 'Omar', 'Cabrera', '', 'prueba', 0),
(3000, 'Ricardo', 'Marcelin', 'Jiménez', 'prueba', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roll`
--

CREATE TABLE `roll` (
  `idRoll` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `roll`
--

INSERT INTO `roll` (`idRoll`, `nombre`) VALUES
(0, 'profesor'),
(1, 'alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareascurso`
--

CREATE TABLE `tareascurso` (
  `idTareaCurso` int(11) NOT NULL,
  `idTareaG` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `nomTareaCurso` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `descTareaCurso` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tareascurso`
--

INSERT INTO `tareascurso` (`idTareaCurso`, `idTareaG`, `idCurso`, `nomTareaCurso`, `descTareaCurso`) VALUES
(1, 1, 1, 'Calculadora', 'Programar una calculadora en java'),
(2, 2, 1, 'CalculadoraCientifica', 'Programar una calculadora científica en java');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareasgenericas`
--

CREATE TABLE `tareasgenericas` (
  `idTareaG` int(11) NOT NULL,
  `cveProfesor` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `cveUEA` int(11) NOT NULL,
  `nomTarea` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `descTarea` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tareasgenericas`
--

INSERT INTO `tareasgenericas` (`idTareaG`, `cveProfesor`, `cveUEA`, `nomTarea`, `descTarea`) VALUES
(1, '1000', 213333, 'TestCalculadoraDivision', 'Test de la prueba unitaria división por cero'),
(2, '1000', 213333, 'TestCalculadoraPorcentaje', 'Test de la prueba unitaria calcular porcentaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uea`
--

CREATE TABLE `uea` (
  `cveUEA` int(11) NOT NULL,
  `nomUEA` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `uea`
--

INSERT INTO `uea` (`cveUEA`, `nomUEA`) VALUES
(210000, 'Algoritmos Distribuidos'),
(213333, 'Ingeniería de Software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vistas`
--

CREATE TABLE `vistas` (
  `idVistas` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciontarea`
--
ALTER TABLE `calificaciontarea`
  ADD PRIMARY KEY (`idCalificacion`),
  ADD KEY `Calificaciones_idx` (`numTarea`),
  ADD KEY `Alumno_idx` (`matricula`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`),
  ADD UNIQUE KEY `idCurso_UNIQUE` (`idCurso`),
  ADD KEY `UEA_idx` (`uea`),
  ADD KEY `Profesor_idx` (`cveProfesor`);

--
-- Indices de la tabla `listaalumno`
--
ALTER TABLE `listaalumno`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `Curso_idx` (`idCurso`),
  ADD KEY `roll_idx` (`roll`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`cveEmp`),
  ADD KEY `roll_idx` (`roll`);

--
-- Indices de la tabla `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`idRoll`),
  ADD UNIQUE KEY `idRoll_UNIQUE` (`idRoll`);

--
-- Indices de la tabla `tareascurso`
--
ALTER TABLE `tareascurso`
  ADD PRIMARY KEY (`idTareaCurso`),
  ADD KEY `NumTarea_idx` (`idTareaG`),
  ADD KEY `fk_TareasCurso_Curso1_idx` (`idCurso`);

--
-- Indices de la tabla `tareasgenericas`
--
ALTER TABLE `tareasgenericas`
  ADD PRIMARY KEY (`idTareaG`),
  ADD UNIQUE KEY `idTareaG_UNIQUE` (`idTareaG`),
  ADD KEY `fk_TareasGenericas_UEA1_idx` (`cveUEA`);

--
-- Indices de la tabla `uea`
--
ALTER TABLE `uea`
  ADD PRIMARY KEY (`cveUEA`),
  ADD UNIQUE KEY `idUEA_UNIQUE` (`cveUEA`);

--
-- Indices de la tabla `vistas`
--
ALTER TABLE `vistas`
  ADD PRIMARY KEY (`idVistas`,`roll`),
  ADD UNIQUE KEY `idVistas_UNIQUE` (`idVistas`),
  ADD KEY `fk_Vistas_Roll1_idx` (`roll`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareascurso`
--
ALTER TABLE `tareascurso`
  MODIFY `idTareaCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tareasgenericas`
--
ALTER TABLE `tareasgenericas`
  MODIFY `idTareaG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
