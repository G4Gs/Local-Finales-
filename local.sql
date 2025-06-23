-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 07-06-2025 a las 14:39:04
=======
-- Tiempo de generación: 03-06-2025 a las 18:43:55
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
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
-- Base de datos: `local`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `titulo_sec` varchar(100) DEFAULT NULL,
  `escuela_sec` varchar(100) DEFAULT NULL,
  `anio_egreso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `persona_id`, `titulo_sec`, `escuela_sec`, `anio_egreso`) VALUES
(1, 1, 'bachiller', '2', 2000),
(2, 2, 'tecnico', '4', 2001),
(3, 3, 'bachiller', '21', 2021),
(4, 4, 'tecnico', '6', 2020),
(5, 5, 'tecnico', '19', 2019),
(121, 157, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(11) NOT NULL,
  `tecnicatura_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `anio` int(11) NOT NULL,
  `programa` varchar(20) DEFAULT NULL,
  `cant_mod` int(11) DEFAULT NULL,
  `duracion` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `tecnicatura_id`, `nombre`, `anio`, `programa`, `cant_mod`, `duracion`) VALUES
(1, 1, 'Algoritmo y Estructura de Datos I', 1, '1', 128, 'Anual'),
(2, 1, 'Prácticas Profesionalizantes I', 1, '1', 64, 'Anual'),
(3, 1, 'Análisis Matemático I', 1, '1', 64, 'Anual'),
(4, 1, 'Algoritmo y Estructura de Datos II', 2, '1', 128, 'Anual'),
(5, 1, 'Prácticas Profesionalizantes II', 2, '1', 128, 'Anual'),
(6, 1, 'Estadística', 2, '1', 64, 'Anual'),
(7, 1, 'Algoritmo y Estructura de Datos III', 3, '1', 128, 'Anual'),
(8, 1, 'Seminario de Actualización', 3, '1', 64, 'Anual'),
(9, 1, 'Prácticas Profesionalizantes III', 3, '1', 128, 'Anual'),
(10, 1, 'Análisis Matemático II', 2, '1', 64, 'Anual'),
(11, 2, 'Administración y gestión de base de datos', 1, '2', 68, 'Anual'),
(12, 2, 'Análisis Matemático', 1, '2', 64, 'Anual'),
(13, 1, 'Ciencia Tecnología y Sociedad', 1, '1', 64, 'Anual'),
(14, 1, 'Inglés I', 1, '1', 64, 'Anual'),
(15, 1, 'Sistemas y Organizaciones', 1, '1', 64, 'Anual'),
(16, 1, 'Arquitectura de Computadoras.', 1, '1', 64, 'Anual'),
(17, 1, 'Álgebra', 1, '1', 64, 'Anual'),
(18, 1, 'Inglés II', 2, '1', 64, 'Anual'),
(19, 1, 'Ingeniería en Software I', 2, '1', 64, 'Anual'),
(20, 1, 'Base de Datos', 2, '1', 64, 'Anual'),
(21, 1, 'Sistemas Operativos', 2, '1', 64, 'Anual'),
(22, 1, 'Aspectos Legales de la Profesión', 3, '1', 64, 'Anual'),
(23, 1, 'Inglés III', 3, '1', 64, 'Anual'),
(24, 1, 'Ingeniería en Software II', 3, '1', 64, 'Anual'),
(25, 1, 'Redes y comunicaciones', 3, '1', 64, 'Anual'),
(26, 5, 'Lógica Computacional', 1, '5', NULL, '1er Cuatrimestre'),
(27, 5, 'Elementos de Análisis Matemático', 1, '5', NULL, '1er Cuatrimestre'),
(28, 5, 'Inglés I', 1, '5', NULL, '1er Cuatrimestre'),
(29, 5, 'Técnicas de Programación', 1, '5', NULL, '1er Cuatrimestre'),
(30, 5, 'Administración y Gestión de Base de Datos', 1, '5', NULL, '2do Cuatrimestre'),
(31, 5, 'Estadística y Probabilidades para Gestión de Datos', 1, '5', NULL, '2do Cuatrimestre'),
(32, 5, 'Inglés II', 1, '5', NULL, '2do Cuatrimestre'),
(33, 5, 'Prácticas Profesionalizantes I', 1, '5', NULL, '2do Cuatrimestre'),
(34, 5, 'Desarrollo de Sistemas de Inteligencia Artificial', 2, '5', NULL, '1er Cuatrimestre'),
(35, 5, 'Seguridad para IOT', 2, '5', NULL, '1er Cuatrimestre'),
(36, 5, 'Prácticas Profesionalizantes II', 2, '5', NULL, '1er Cuatrimestre'),
(37, 5, 'Redes', 2, '5', NULL, '1er Cuatrimestre'),
(38, 5, 'Protocolos e interfaces I', 2, '5', NULL, '1er Cuatrimestre'),
(39, 5, 'Ciencia de Datos', 2, '5', NULL, '2do Cuatrimestre'),
(40, 5, 'Procesamiento de Aprendizaje Automático', 2, '5', NULL, '2do Cuatrimestre'),
(41, 5, 'Arquitectura del nodo IOT', 2, '5', NULL, '2do Cuatrimestre'),
(42, 5, 'Redes II', 2, '5', NULL, '2do Cuatrimestre'),
(43, 5, 'Protocolos e Interfaces II', 2, '5', NULL, '2do Cuatrimestre'),
(44, 5, 'Inteligencia Artificial Aplicada a IOT', 3, '5', NULL, '1er Cuatrimestre'),
(45, 5, 'Prácticas Profesionalizantes III', 3, '5', NULL, '1er Cuatrimestre'),
(46, 5, 'Diseño de infraestructura inteligente para IOT', 3, '5', NULL, '2do Cuatrimestre'),
(47, 5, 'Prácticas Profesionalizantes IV', 3, '5', NULL, '2do Cuatrimestre'),
(48, 5, 'Trabajo', 3, '5', NULL, 'Anual'),
(49, 5, 'Tecnología y Sociedad', 3, '5', NULL, 'Anual'),
(50, 5, 'Modelizado de Minería de Datos', 3, '5', NULL, 'Anual'),
(51, 8, 'Salud Pública y Ocupacional', 1, '8', NULL, 'Anual'),
(52, 8, 'El Establecimiento de Salud', 1, '8', NULL, 'Anual'),
(53, 8, 'Prevención de Riesgos Ergonómicos', 1, '8', NULL, 'Anual'),
(54, 8, 'Prevención de Riesgos del Ambiente de Trabajo', 1, '8', NULL, 'Anual'),
(55, 8, 'Prevención de Riesgos Psicosociales', 1, '8', NULL, 'Anual'),
(56, 8, 'Gestión en Salud y Seguridad Ocupacional', 1, '8', NULL, 'Anual'),
(57, 8, 'Prácticas Profesionalizantes', 1, '8', NULL, 'Anual'),
(58, 2, 'Introducción a la programación', 1, '2', NULL, 'Anual'),
(59, 2, 'Introducción a las redes de datos', 1, '2', NULL, 'Anual'),
(60, 2, 'Laboratorio de Hardware', 1, '2', NULL, 'Anual'),
(61, 2, 'Prácticas Profesionalizantes I', 1, '2', NULL, 'Anual'),
(62, 2, 'Sistemas Digitales', 1, '2', NULL, 'Anual'),
(63, 2, 'Sistemas operativos', 1, '2', NULL, 'Anual'),
(64, 2, 'Algebra y lógica', 2, '2', NULL, 'Anual'),
(65, 2, 'Desarrollo de aplicativos móviles', 2, '2', NULL, 'Anual'),
(66, 2, 'Desarrollo de sistemas Orientado a Objetos', 2, '2', NULL, 'Anual'),
(67, 2, 'Diseño Web', 2, '2', NULL, 'Anual'),
(68, 2, 'Estadística y Probabilidades', 2, '2', NULL, 'Anual'),
(69, 2, 'Inglés I', 2, '2', NULL, 'Anual'),
(70, 2, 'Programación', 2, '2', NULL, 'Anual'),
(71, 2, 'Prácticas Profesionalizantes II', 2, '2', NULL, 'Anual'),
(72, 2, 'Desarrollo de sistemas Web', 3, '2', NULL, 'Anual'),
(73, 2, 'Gestión de Proyectos', 3, '2', NULL, 'Anual'),
(74, 2, 'Ingeniería de software', 3, '2', NULL, 'Anual'),
(75, 2, 'Inglés II', 3, '2', NULL, 'Anual'),
(76, 2, 'Metodología de pruebas de sistemas', 3, '2', NULL, 'Anual'),
(77, 2, 'Prácticas Profesionalizantes III', 3, '2', NULL, 'Anual'),
(78, 9, 'Derecho', 1, '9', NULL, 'Anual'),
(79, 9, 'Economía', 1, '9', NULL, 'Anual'),
(80, 9, 'Fundamentos de Matemática', 1, '9', NULL, 'Anual'),
(81, 9, 'Gestión Impositiva', 1, '9', NULL, 'Anual'),
(82, 9, 'Inglés I', 1, '9', NULL, 'Anual'),
(83, 9, 'Prácticas Profesionalizantes I', 1, '9', NULL, 'Anual'),
(84, 9, 'Principios de Administración', 1, '9', NULL, 'Anual'),
(85, 9, 'Principios de Contabilidad', 1, '9', NULL, 'Anual'),
(86, 9, 'Contabilidad de Gestión', 2, '9', NULL, 'Anual'),
(87, 9, 'Costos y Planificación', 2, '9', NULL, 'Anual'),
(88, 9, 'Derecho Comercial', 2, '9', NULL, 'Anual'),
(89, 9, 'Derecho Laboral', 2, '9', NULL, 'Anual'),
(90, 9, 'Inglés II', 2, '9', NULL, 'Anual'),
(91, 9, 'Matemática Financiera', 2, '9', NULL, 'Anual'),
(92, 9, 'Matemática para Administración', 2, '9', NULL, 'Anual'),
(93, 9, 'Prácticas Profesionalizantes II', 2, '9', NULL, 'Anual'),
(94, 9, 'Tecnologías y Sistemas para Administración', 2, '9', NULL, 'Anual'),
(95, 9, 'Administración Financiera', 3, '9', NULL, 'Anual'),
(96, 9, 'Análisis de Estados Contables', 3, '9', NULL, 'Anual'),
(97, 9, 'Elementos del Mercado Financiero', 3, '9', NULL, 'Anual'),
(98, 9, 'Negocios Internacionales', 3, '9', NULL, 'Anual'),
(99, 9, 'Prácticas Profesionalizantes III', 3, '9', NULL, 'Anual'),
(100, 9, 'Proyectos de Inversión', 3, '9', NULL, 'Anual'),
(101, 9, 'Técnica y Contabilidad Bancaria', 3, '9', NULL, 'Anual'),
(102, 6, 'Administración y Gestión de Bases de Datos', 1, '6', NULL, '2do Cuatrimestre'),
(103, 6, 'Elementos de Análisis Matemático', 1, '6', NULL, '1er Cuatrimestre'),
(104, 6, 'Estadística y Probabilidades para Gestión de Datos', 1, '6', NULL, '2do Cuatrimestre'),
(105, 6, 'Inglés para Ciencia de Datos e IA I', 1, '6', NULL, '1er Cuatrimestre'),
(106, 6, 'Inglés para Ciencia de Datos e IA II', 1, '6', NULL, '2do Cuatrimestre'),
(107, 6, 'Lógica computacional', 1, '6', NULL, '1er Cuatrimestre'),
(108, 6, 'Prácticas Profesionalizantes I', 1, '6', NULL, '2do Cuatrimestre'),
(109, 6, 'Técnicas de Programación', 1, '6', NULL, '1er Cuatrimestre'),
(110, 6, 'Ciencia de Datos', 2, '6', NULL, '1er Cuatrimestre'),
(111, 6, 'Desarrollo de Sistemas de Inteligencia Artificial', 2, '6', NULL, '1er Cuatrimestre'),
(112, 6, 'Modelizado de Minería de datos', 2, '6', NULL, '2do Cuatrimestre'),
(113, 6, 'Prácticas Profesionalizantes II', 2, '6', NULL, '2do Cuatrimestre'),
(114, 6, 'Procesamiento de Aprendizaje Automático', 2, '6', NULL, '2do Cuatrimestre'),
(115, 6, 'Técnicas de Procesamiento del Habla', 2, '6', NULL, '1er Cuatrimestre'),
(116, 6, 'Gestión de Proyectos', 3, '6', NULL, '1er Cuatrimestre'),
(117, 6, 'Prácticas Profesionalizantes III', 3, '6', NULL, '1er Cuatrimestre'),
(118, 6, 'Prácticas Profesionalizantes : Proyecto Integrador', 3, '6', NULL, '2do Cuatrimestre'),
(119, 6, 'Seminario de Actualización', 3, '6', NULL, '1er Cuatrimestre'),
(120, 6, 'Taller de Comunicación', 3, '6', NULL, '2do Cuatrimestre'),
(121, 6, 'Técnica de Procesamiento Digital de Imágenes', 3, '6', NULL, '2do Cuatrimestre'),
(122, 6, 'Tecnología y ambiente', 3, '6', NULL, '1er Cuatrimestre'),
(123, 6, 'Trabajo, Tecnología y Sociedad', 3, '6', NULL, '2do Cuatrimestre'),
(124, 4, 'Administración de las organizaciones', 1, '4', NULL, 'Anual'),
(125, 4, 'Psicología Laboral', 1, '4', NULL, 'Anual'),
(126, 4, 'Física I', 1, '4', NULL, 'Anual'),
(127, 4, 'Química I', 1, '4', NULL, 'Anual'),
(128, 4, 'Medio de Representación', 1, '4', NULL, 'Anual'),
(129, 4, 'Medicina del Trabajo I', 1, '4', NULL, 'Anual'),
(130, 4, 'Seguridad 1', 1, '4', NULL, 'Anual'),
(131, 4, 'Derecho del Trabajo', 1, '4', NULL, 'Anual'),
(132, 4, 'Práctica Profesionalizante I', 1, '4', NULL, 'Anual'),
(133, 4, 'Estadística', 2, '4', NULL, 'Anual'),
(134, 4, 'Física II', 2, '4', NULL, 'Anual'),
(135, 4, 'Química II', 2, '4', NULL, 'Anual'),
(136, 4, 'Ingles Tecnico', 2, '4', NULL, 'Anual'),
(137, 4, 'Ergonomía', 2, '4', NULL, 'Anual'),
(138, 4, 'Seguridad II', 2, '4', NULL, 'Anual'),
(139, 4, 'Higiene Laboral y Medio Ambiente I', 2, '4', NULL, 'Anual'),
(140, 4, 'Medicina del Trabajo II', 2, '4', NULL, 'Anual'),
(141, 4, 'Práctica Profesionalizante II', 2, '4', NULL, 'Anual'),
(142, 4, 'Comunicacion y Administracion de Medios', 3, '4', NULL, 'Anual'),
(143, 4, 'Capacitación de Personal', 3, '4', NULL, 'Anual'),
(144, 4, 'Seguridad III', 3, '4', NULL, 'Anual'),
(145, 4, 'Higiene Laboral y Medio Ambiente II', 3, '4', NULL, 'Anual'),
(146, 4, 'Control de Contaminación', 3, '4', NULL, 'Anual'),
(147, 4, 'Práctica Profesionalizante III', 3, '4', NULL, 'Anual'),
(148, 7, 'Derecho', 1, '7', NULL, 'Anual'),
(149, 7, 'Inglés I', 1, '7', NULL, 'Anual'),
(150, 7, 'Principios de Administración', 1, '7', NULL, 'Anual'),
(151, 7, 'Economía', 1, '7', NULL, 'Anual'),
(152, 7, 'Fundamentos de Matemática', 1, '7', NULL, 'Anual'),
(153, 7, 'Principios de Contabilidad', 1, '7', NULL, 'Anual'),
(154, 7, 'Gestión Administrativo Contable', 1, '7', NULL, 'Anual'),
(155, 7, 'Prácticas Profesionalizantes I', 1, '7', NULL, 'Anual'),
(156, 7, 'Inglés II', 2, '7', NULL, 'Anual'),
(157, 7, 'Tecnologías y Sistemas para Administración', 2, '7', NULL, 'Anual'),
(158, 7, 'Matemática para Administración', 2, '7', NULL, 'Anual'),
(159, 7, 'Derecho Laboral', 2, '7', NULL, 'Anual'),
(160, 7, 'Derecho Comercial', 2, '7', NULL, 'Anual'),
(161, 7, 'Contabilidad de Gestión', 2, '7', NULL, 'Anual'),
(162, 7, 'Costos y Planificación', 2, '7', NULL, 'Anual'),
(163, 7, 'Matemática Financiera', 2, '7', NULL, 'Anual'),
(164, 7, 'Prácticas Profesionalizantes II', 2, '7', NULL, 'Anual'),
(165, 7, 'Administración Financiera', 3, '7', NULL, 'Anual'),
(166, 7, 'Administración Estratégica y Control de Gestión', 3, '7', NULL, 'Anual'),
(167, 7, 'Técnica Impositiva y Laboral', 3, '7', NULL, 'Anual'),
(168, 7, 'Régimen Tributario', 3, '7', NULL, 'Anual'),
(169, 7, 'Gestión de Estados Contables', 3, '7', NULL, 'Anual'),
(170, 7, 'Finanzas de Empresas', 3, '7', NULL, 'Anual'),
(171, 7, 'Prácticas Profesionalizantes III', 3, '7', NULL, 'Anual'),
(172, 10, 'Inglés I', 1, '10', NULL, 'Anual'),
(173, 10, 'Informática', 1, '10', NULL, 'Anual'),
(174, 10, 'Historia de las Instituciones Argentinas  I', 1, '10', NULL, 'Anual'),
(175, 10, 'Antropología cultural', 1, '10', NULL, 'Anual'),
(176, 10, 'Psicologia de grupos e institución', 1, '10', NULL, 'Anual'),
(177, 10, 'Portugues I', 1, '10', NULL, 'Anual'),
(178, 10, 'Ceremonial y protocolo I', 1, '10', NULL, 'Anual'),
(179, 10, 'Redacción formal', 1, '10', NULL, 'Anual'),
(180, 10, 'Comportamiento Social', 1, '10', NULL, 'Anual'),
(181, 10, 'Práctica profesional I', 1, '10', NULL, 'Anual'),
(182, 10, 'Inglés II', 2, '10', NULL, 'Anual'),
(183, 10, 'Historia de la cultura universal', 2, '10', NULL, 'Anual'),
(184, 10, 'Historia de las Instituciones Argentinas II', 2, '10', NULL, 'Anual'),
(185, 10, 'Informática aplicada', 2, '10', NULL, 'Anual'),
(186, 10, 'Portugues II', 2, '10', NULL, 'Anual'),
(187, 10, 'Ceremonial y protocolo II', 2, '10', NULL, 'Anual'),
(188, 10, 'Medios de comunicación y protocolo', 2, '10', NULL, 'Anual'),
(189, 10, 'Práctica profesional II', 2, '10', NULL, 'Anual'),
(190, 10, 'Inglés III', 3, '10', NULL, 'Anual'),
(191, 10, 'Oratoria y locución', 3, '10', NULL, 'Anual'),
(192, 10, 'Relaciones públicas', 3, '10', NULL, 'Anual'),
(193, 10, 'Ceremonial y protocolo III', 3, '10', NULL, 'Anual'),
(194, 10, 'Práctica profesional III', 3, '10', NULL, 'Anual'),
(195, 5, 'Cominicacion', 1, '5', NULL, 'Anual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `cursada_id` int(11) NOT NULL,
  `asistencia` varchar(20) NOT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `calendario_clase_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `cursada_id`, `asistencia`, `observacion`, `calendario_clase_id`) VALUES
<<<<<<< HEAD
(105, 7, 'Presente', NULL, 55),
(106, 8, 'Presente', NULL, 55),
(107, 9, 'Presente', NULL, 55),
(108, 22, 'Presente', NULL, 55);
=======
(1, 7, 'presente', 'ninguna', 1),
(2, 8, 'ausente', 'nada', 1),
(3, 8, 'presente', 'no', 1),
(5, 8, 'si', 'no', 1),
(6, 7, 'presente', 'ninguna', 1),
(7, 7, 'presente', 'ninguna', 1),
(8, 8, 'presente', 'no', 1),
(9, 9, 'ausente', 'justificado', 1);
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_clase`
--

CREATE TABLE `calendario_clase` (
  `id` int(11) NOT NULL,
  `modalidad_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
<<<<<<< HEAD
  `observacion` varchar(255) DEFAULT NULL
=======
  `observacion` varchar(255) NOT NULL
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calendario_clase`
--

INSERT INTO `calendario_clase` (`id`, `modalidad_id`, `curso_id`, `fecha`, `observacion`) VALUES
<<<<<<< HEAD
(55, 1, 1, '2025-06-07', '');
=======
(1, 1, 1, '2025-05-26', '1');
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `estudiante_id_id` int(11) DEFAULT NULL,
  `tecnicatura_id_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `inicio` date DEFAULT NULL,
  `fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `estudiante_id_id`, `tecnicatura_id_id`, `estado`, `inicio`, `fin`) VALUES
(3, 1, 1, 0, '2024-03-12', NULL),
(4, 2, 1, 0, '2024-06-07', NULL),
(5, 3, 1, 0, '2020-09-15', NULL),
(99, 121, 4, 1, '2025-04-02', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision`
--

CREATE TABLE `comision` (
  `id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `tecnicatura_id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `comision` varchar(5) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `ciclo_lectivo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comision`
--

INSERT INTO `comision` (`id`, `turno_id`, `tecnicatura_id`, `anio`, `comision`, `estado`, `ciclo_lectivo`) VALUES
(1, 1, 1, 1, '1ra', 1, '2024'),
(2, 1, 1, 2, '1ra', 1, '2024'),
(3, 1, 1, 3, '1ra', 1, '2024'),
(4, 1, 2, 1, '1ra', 1, '2024'),
(5, 1, 2, 2, '1ra', NULL, '2024'),
(6, 1, 2, 3, '1ra', NULL, '2024'),
(7, 1, 1, 1, '1ra', 1, '2024'),
(8, 1, 1, 1, '1ra', 1, '2024'),
(9, 1, 1, 1, '4ta', 1, '2025');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlativa`
--

CREATE TABLE `correlativa` (
  `id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `motivo` varchar(10) NOT NULL,
  `correlativa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `correlativa`
--

INSERT INTO `correlativa` (`id`, `asignatura_id`, `motivo`, `correlativa_id`) VALUES
(5, 4, 'cursada', 1),
(6, 7, 'final', 1),
(7, 7, 'cursada', 4),
(8, 5, 'final', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursada`
--

CREATE TABLE `cursada` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `modalidad_id` int(11) NOT NULL,
  `nota_id_id` int(11) NOT NULL,
  `condicion` varchar(15) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursada`
--

INSERT INTO `cursada` (`id`, `alumno_id`, `modalidad_id`, `nota_id_id`, `condicion`, `curso_id`) VALUES
(7, 2, 1, 8, 'regular', 1),
(8, 4, 1, 9, 'regular', 1),
(9, 3, 1, 10, 'regular', 1),
(20, 4, 1, 21, 'regular', 15),
(21, 5, 1, 22, 'r', 13),
(22, 1, 1, 23, 'libre', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursada_docente`
--

CREATE TABLE `cursada_docente` (
  `id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  `revista_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `toma` date NOT NULL,
  `cese` date DEFAULT NULL,
  `licencia` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursada_docente`
--

INSERT INTO `cursada_docente` (`id`, `docente_id`, `revista_id`, `curso_id`, `toma`, `cese`, `licencia`) VALUES
(3, 1, 1, 1, '2019-01-01', NULL, 1),
(5, 2, 2, 1, '2019-01-01', NULL, 0),
(6, 2, 1, 15, '2019-01-01', NULL, 0),
(7, 1, 1, 13, '2019-01-01', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `comision_id` int(11) NOT NULL,
  `cupof` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `asignatura_id`, `comision_id`, `cupof`) VALUES
(1, 1, 1, '1'),
(4, 4, 1, '2'),
(5, 5, 2, '3'),
(6, 3, 1, '4'),
(7, 4, 2, '5'),
(8, 6, 2, '6'),
(9, 10, 2, '7'),
(10, 7, 3, '8'),
(11, 8, 3, '9'),
(12, 9, 3, '10'),
(13, 11, 4, '11'),
(14, 12, 4, '12'),
(15, 2, 1, '13'),
(16, 1, 1, '14'),
(17, 13, 1, '15'),
(18, 14, 1, '16'),
(19, 15, 1, '17'),
(20, 16, 1, '18'),
(21, 17, 1, '19'),
(22, 5, 2, '20'),
(23, 18, 2, '21'),
(24, 19, 2, '22'),
(25, 20, 2, '23'),
(26, 21, 2, '24'),
(27, 22, 3, '25'),
(28, 23, 3, '26'),
(29, 24, 3, '27'),
(30, 25, 3, '28'),
(31, 1, 1, '29'),
(32, 2, 1, '30'),
(33, 3, 1, '31'),
(34, 13, 1, '32'),
(35, 14, 1, '33'),
(36, 15, 1, '34'),
(37, 16, 1, '35'),
(38, 17, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `foja` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `persona_id`, `foja`) VALUES
(1, 6, '1'),
<<<<<<< HEAD
(2, 7, '2'),
(3, 158, 'Matematicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
=======
(2, 7, '2');
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_alumno`
--

CREATE TABLE `examen_alumno` (
  `id` int(11) NOT NULL,
  `alumno_id_id` int(11) DEFAULT NULL,
  `examen_final_id_id` int(11) DEFAULT NULL,
  `nota` varchar(10) NOT NULL,
  `tomo` varchar(15) NOT NULL,
  `folio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `examen_alumno`
--

INSERT INTO `examen_alumno` (`id`, `alumno_id_id`, `examen_final_id_id`, `nota`, `tomo`, `folio`) VALUES
(1, 2, 1, '7', '1', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_final`
--

CREATE TABLE `examen_final` (
  `id` int(11) NOT NULL,
  `presidente_id_id` int(11) NOT NULL,
  `vocal1_id_id` int(11) DEFAULT NULL,
  `vocal2_id_id` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `asignatura_id_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `examen_final`
--

INSERT INTO `examen_final` (`id`, `presidente_id_id`, `vocal1_id_id`, `vocal2_id_id`, `fecha`, `asignatura_id_id`) VALUES
(1, 1, 2, NULL, '2024-11-10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilitante`
--

CREATE TABLE `habilitante` (
  `id` int(11) NOT NULL,
  `titulo_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL,
  `anio_egreso` int(11) NOT NULL,
  `promedio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `dia` varchar(30) NOT NULL,
  `horario_inicio` varchar(40) NOT NULL,
  `horario_fin` varchar(40) NOT NULL,
  `cant_modulos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_final`
--

CREATE TABLE `inscripcion_final` (
  `id` int(11) NOT NULL,
  `alumno_id_id` int(11) DEFAULT NULL,
  `asignatura_id_id` int(11) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcion_final`
--

INSERT INTO `inscripcion_final` (`id`, `alumno_id_id`, `asignatura_id_id`, `fecha`) VALUES
(1, 2, 1, '2024-07-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituto`
--

CREATE TABLE `instituto` (
  `id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `url_instituto` varchar(100) DEFAULT NULL,
  `tipo` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `altura` varchar(10) NOT NULL,
  `numero_cue` varchar(15) NOT NULL,
  `instituto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instituto`
--

INSERT INTO `instituto` (`id`, `localidad_id`, `nombre`, `numero`, `url_instituto`, `tipo`, `email`, `calle`, `altura`, `numero_cue`, `instituto`) VALUES
(1, 1, 'Crucero ARA General Belgrano', '12', 'www.i12.com.ar', 'centra', 'i12@abc.gob.ar', '7', '76', '60899400', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `provincia_id`, `region_id`, `nombre`, `codigo_postal`) VALUES
(1, 1, 1, 'la plata', '1900');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id`, `descripcion`) VALUES
(1, 'presencial'),
(2, 'remoto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `parcial` varchar(10) DEFAULT NULL,
  `recuperatorio1` varchar(10) DEFAULT NULL,
  `parcial2` varchar(10) DEFAULT NULL,
  `recuperatorio2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`id`, `parcial`, `recuperatorio1`, `parcial2`, `recuperatorio2`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(8, '3', '7', '1', '9'),
(9, NULL, NULL, NULL, NULL),
(10, '7', NULL, NULL, NULL),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `descripcion`) VALUES
(1, 'argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dni_pasaporte` varchar(20) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `partido` varchar(50) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `departamento` varchar(2) DEFAULT NULL,
  `pasillo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `pais_id`, `localidad_id`, `nombre`, `apellido`, `fecha_nacimiento`, `dni_pasaporte`, `genero`, `email`, `telefono`, `partido`, `calle`, `numero`, `piso`, `departamento`, `pasillo`) VALUES
(1, 1, 1, 'Pedro', 'Farias', '1904-01-01', '001', 'masculino', 'pd@gmail.com', '1', 'lp', '1', '1', 1, '1', '1'),
(2, 1, 1, 'Pablo', 'Rolon', '1904-01-01', '002', 'masculino', 'pm@gmail.com', '2', 'lp', '1', '1', 1, '1', '1'),
(3, 1, 1, 'Jennifer', 'Garner', '1904-01-01', '003', 'femenino', 'jg@gmail.com', '3', 'lp', '3', '3', 3, '3', '3'),
(4, 1, 1, 'Ana', 'Swift', '1904-01-01', '004', 'femenino', '4@gmail.com', '4', 'lp', '8', '5', 5, '5', '5'),
(5, 1, 1, 'Prat', 'Prum', '1904-01-01', '006', 'otro', 'pp@gmail.com', '6', 'lp', '9', '6', 6, '6', '6'),
(6, 1, 1, 'willy', 'west', '1904-01-01', '005', 'masculino', 'flash@gmail.com', '7', 'Central city', '7', '7', 77, '7', '7'),
(7, 1, 1, 'Smith', 'Will', '1904-01-01', '747565', 'masculino', 'gotg@gmail.com', '00014', 'la plata', '3', '3', 3, '3', '3'),
<<<<<<< HEAD
(157, 1, 1, 'Albert', 'Perez', '1984-01-01', '257000', 'masculino', 'ap@gmail.com', NULL, 'lp', '1', NULL, NULL, NULL, NULL),
(158, 1, 1, 'Facundo', 'Garnica', '1996-08-28', '39803324', 'masculino', 'facundo@gmai.com', NULL, 'La Plata', '60', '2211', NULL, NULL, NULL);
=======
(157, 1, 1, 'Albert', 'Perez', '1984-01-01', '257000', 'masculino', 'ap@gmail.com', NULL, 'lp', '1', NULL, NULL, NULL, NULL);
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `pais_id`, `descripcion`) VALUES
(1, 1, 'buenos aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `numero`) VALUES
(1, 'la plata');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista`
--

CREATE TABLE `revista` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `revista`
--

INSERT INTO `revista` (`id`, `descripcion`) VALUES
(1, 'suplente'),
(2, 'titular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(2, 'ROLE_ADMIN'),
(4, 'ROLE_ALUMNO'),
(3, 'ROLE_DOCENTE'),
(5, 'ROLE_ESTUDIANTE'),
(1, 'ROLE_SUPER_ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicatura`
--

CREATE TABLE `tecnicatura` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `duracion` int(11) NOT NULL,
  `cantidad_asignaturas` int(11) DEFAULT NULL,
  `numero_resolucion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tecnicatura`
--

INSERT INTO `tecnicatura` (`id`, `nombre`, `duracion`, `cantidad_asignaturas`, `numero_resolucion`) VALUES
(1, 'TECNICATURA SUPERIOR EN ANALISIS DE SISTEMAS', 3, 23, '6790/19'),
(2, 'TECNICATURA SUPERIOR EN DESARROLLO DE SOFTWARE', 3, 22, '5847/19'),
(4, 'TECNICO SUPERIOR EN HIGENE Y SEGUIRIDAD EN EL TRABAJO', 3, 24, '320/13'),
(5, 'TECNICO SUPERIOR EN INTERNET DE LAS COSAS Y SISTEMAS EMBEBIDOS', 3, 23, '3780/22'),
(6, 'TECNICO SUPERIOR EN CIENCIA DE DATOS E INTELIGENCIA ARTIFICIAL', 3, 22, '2730/22'),
(7, 'TECNICO SUPERIOR EN ADMINISTRACION CONTABLE', 3, 24, '455/23'),
(8, 'CERTIFICADO SUPERIOR EN SALUD Y SEGURIDAD OCUPACIONAL EN EL TRABAJO EN LOS ESTABLECIMIENTOS DE SALUD', 3, 7, '302/10'),
(9, 'TECNICATURA SUPERIOR EN ADMINISTACION FINANCIERA', 3, 24, '456/23'),
(10, 'TECNICO SUPERIOR EN CEREMONISAL Y PROTOCLO', 3, 25, '1623/04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `instituto_id` int(11) NOT NULL,
  `numero` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `institucion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id`, `descripcion`) VALUES
(1, 'mañana'),
(2, 'tarde'),
(3, 'noche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `persona_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `persona_id`) VALUES
(1, 'admin@directivo.i12', '$2y$13$Z64fqu4CtfOmrJ2ZqhQJhOWxWJvmPSJdBwvpvxF8Ev6kG2jBY5ok6', NULL),
<<<<<<< HEAD
(2, '007@docente.i12', '$2y$13$xh2SHGtbX/il.KwaMjieo.ptT1XiYymUUn2UI0KGcfWeLmOlkYiD6', NULL),
=======
(2, '007@docente.i12', '$2y$13$0UU7v4C2F5HVUXNiA9ImJeJPrwgAY9V3tVj30ysdKKpwjOkLBPVsK', NULL),
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
(4, 'admin@admin.i12', '$2y$13$1fEHMaJL6/AbCGS8RUUqyuoM3TCIWDcucW0llOIz1cOHY8g8prQ26', NULL),
(5, '002@estudiante.i12', '$2y$13$prSCR4IhGvASajQnfPEjWuauh/UMKOpPYEWLopgwPAvsXRMeEo9M6', NULL),
(6, 'pm@gmail.com', '$2y$13$Fyc/bGJmra56YoxsIXy8FumGq2mSA.6bcScChmpcX1DJqTSXQpT9e', 2),
(7, 'papa@gmail.com', '$2y$13$j53T0kXQBlIWlUa8H4/QbeDP3BAPDR5tgiSDNUwmdAB5TM1HBe5sm', NULL),
(8, '4@gmail.com', '$2y$13$RGpG5mDmZSTJ5QhWsNWVG.slp0cjyd9JA3JPytxmCUqSiTeYcdEAG', NULL),
<<<<<<< HEAD
(11, 'flash@gmail.com', '$2y$13$IY/wxeBLYaXKWB6zou.x9u3j7QKW0o6x8z4kwdUS8cq00J/QyZbz6', 6),
(12, 'facundo@gmai.com', '$2y$13$YVkudJpqD0JImfU81br5/O75fYrikCB2uBjSwIDQ3Ui2fmD6RM7aS', 158);
=======
(11, 'flash@gmail.com', '$2y$13$ma9ID5TCW0xE6cwK9LCxvOhJNZQf.YmAMLr5a0aRyVAyCaVDZyPgG', 6);
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_rol`
--

CREATE TABLE `user_rol` (
  `user_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_rol`
--

INSERT INTO `user_rol` (`user_id`, `rol_id`) VALUES
<<<<<<< HEAD
(2, 3),
=======
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
(4, 1),
(4, 2),
(5, 4),
(6, 5),
(7, 1),
<<<<<<< HEAD
(11, 3),
(12, 3);
=======
(11, 2);
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1435D52DF5F88DB9` (`persona_id`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9243D6CEE2D74A4D` (`tecnicatura_id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D8264A8DE51B8CF2` (`cursada_id`),
  ADD KEY `IDX_D8264A8DC248204C` (`calendario_clase_id`);

--
-- Indices de la tabla `calendario_clase`
--
ALTER TABLE `calendario_clase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E32223BE1E092B9F` (`modalidad_id`),
  ADD KEY `IDX_E32223BE87CB4A1F` (`curso_id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3D18E16AF3F9BD2A` (`estudiante_id_id`),
  ADD KEY `IDX_3D18E16AC223BB9` (`tecnicatura_id_id`);

--
-- Indices de la tabla `comision`
--
ALTER TABLE `comision`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1013896F69C5211E` (`turno_id`),
  ADD KEY `IDX_1013896FE2D74A4D` (`tecnicatura_id`);

--
-- Indices de la tabla `correlativa`
--
ALTER TABLE `correlativa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_501CD9D2C5C70C5B` (`asignatura_id`),
  ADD KEY `IDX_501CD9D2ACB70627` (`correlativa_id`);

--
-- Indices de la tabla `cursada`
--
ALTER TABLE `cursada`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F474F7D3EE1B1993` (`nota_id_id`),
  ADD KEY `IDX_F474F7D3FC28E5EE` (`alumno_id`),
  ADD KEY `IDX_F474F7D31E092B9F` (`modalidad_id`),
  ADD KEY `IDX_F474F7D387CB4A1F` (`curso_id`);

--
-- Indices de la tabla `cursada_docente`
--
ALTER TABLE `cursada_docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8D9BE23B94E27525` (`docente_id`),
  ADD KEY `IDX_8D9BE23BE8ADDD3D` (`revista_id`),
  ADD KEY `IDX_8D9BE23B87CB4A1F` (`curso_id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CA3B40ECC5C70C5B` (`asignatura_id`),
  ADD KEY `IDX_CA3B40EC4B352BE1` (`comision_id`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_FD9FCFA4F5F88DB9` (`persona_id`);

--
<<<<<<< HEAD
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
=======
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
-- Indices de la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2852854F68C84212` (`examen_final_id_id`),
  ADD KEY `IDX_2852854FD3819735` (`alumno_id_id`);

--
-- Indices de la tabla `examen_final`
--
ALTER TABLE `examen_final`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8861EFE2D1F46B1E` (`presidente_id_id`),
  ADD UNIQUE KEY `UNIQ_8861EFE2CFA8626B` (`vocal1_id_id`),
  ADD UNIQUE KEY `UNIQ_8861EFE2FE4078F6` (`vocal2_id_id`),
  ADD KEY `IDX_8861EFE2AF1D1CBB` (`asignatura_id_id`);

--
-- Indices de la tabla `habilitante`
--
ALTER TABLE `habilitante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DA63DA0861AD3496` (`titulo_id`),
  ADD KEY `IDX_DA63DA0894E27525` (`docente_id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E25853A387CB4A1F` (`curso_id`);

--
-- Indices de la tabla `inscripcion_final`
--
ALTER TABLE `inscripcion_final`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7BEE921AD3819735` (`alumno_id_id`),
  ADD KEY `IDX_7BEE921AAF1D1CBB` (`asignatura_id_id`);

--
-- Indices de la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2A805CCE67707C89` (`localidad_id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4F68E0104E7121AF` (`provincia_id`),
  ADD KEY `IDX_4F68E01098260155` (`region_id`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_51E5B69BC604D5C6` (`pais_id`),
  ADD KEY `IDX_51E5B69B67707C89` (`localidad_id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D39AF213C604D5C6` (`pais_id`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E553F373A909126` (`nombre`);

--
-- Indices de la tabla `tecnicatura`
--
ALTER TABLE `tecnicatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1E70A7F6C6EF28` (`instituto_id`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649F5F88DB9` (`persona_id`);

--
-- Indices de la tabla `user_rol`
--
ALTER TABLE `user_rol`
  ADD PRIMARY KEY (`user_id`,`rol_id`),
  ADD KEY `IDX_E5435EBCA76ED395` (`user_id`),
  ADD KEY `IDX_E5435EBC4BAB96C` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- AUTO_INCREMENT de la tabla `calendario_clase`
--
ALTER TABLE `calendario_clase`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `comision`
--
ALTER TABLE `comision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `correlativa`
--
ALTER TABLE `correlativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cursada`
--
ALTER TABLE `cursada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `cursada_docente`
--
ALTER TABLE `cursada_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- AUTO_INCREMENT de la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `examen_final`
--
ALTER TABLE `examen_final`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- AUTO_INCREMENT de la tabla `habilitante`
--
ALTER TABLE `habilitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripcion_final`
--
ALTER TABLE `inscripcion_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `instituto`
--
ALTER TABLE `instituto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `revista`
--
ALTER TABLE `revista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tecnicatura`
--
ALTER TABLE `tecnicatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_1435D52DF5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `FK_9243D6CEE2D74A4D` FOREIGN KEY (`tecnicatura_id`) REFERENCES `tecnicatura` (`id`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
<<<<<<< HEAD
  ADD CONSTRAINT `FK_D8264A8DC248204C` FOREIGN KEY (`calendario_clase_id`) REFERENCES `calendario_clase` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D8264A8DE51B8CF2` FOREIGN KEY (`cursada_id`) REFERENCES `cursada` (`id`) ON DELETE CASCADE;
=======
  ADD CONSTRAINT `FK_D8264A8DC248204C` FOREIGN KEY (`calendario_clase_id`) REFERENCES `calendario_clase` (`id`),
  ADD CONSTRAINT `FK_D8264A8DE51B8CF2` FOREIGN KEY (`cursada_id`) REFERENCES `cursada` (`id`);
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

--
-- Filtros para la tabla `calendario_clase`
--
ALTER TABLE `calendario_clase`
  ADD CONSTRAINT `FK_E32223BE1E092B9F` FOREIGN KEY (`modalidad_id`) REFERENCES `modalidad` (`id`),
  ADD CONSTRAINT `FK_E32223BE87CB4A1F` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`);

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `FK_3D18E16AC223BB9` FOREIGN KEY (`tecnicatura_id_id`) REFERENCES `tecnicatura` (`id`),
  ADD CONSTRAINT `FK_3D18E16AF3F9BD2A` FOREIGN KEY (`estudiante_id_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `comision`
--
ALTER TABLE `comision`
  ADD CONSTRAINT `FK_1013896F69C5211E` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id`),
  ADD CONSTRAINT `FK_1013896FE2D74A4D` FOREIGN KEY (`tecnicatura_id`) REFERENCES `tecnicatura` (`id`);

--
-- Filtros para la tabla `correlativa`
--
ALTER TABLE `correlativa`
  ADD CONSTRAINT `FK_501CD9D2ACB70627` FOREIGN KEY (`correlativa_id`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `FK_501CD9D2C5C70C5B` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`);

--
-- Filtros para la tabla `cursada`
--
ALTER TABLE `cursada`
  ADD CONSTRAINT `FK_F474F7D31E092B9F` FOREIGN KEY (`modalidad_id`) REFERENCES `modalidad` (`id`),
  ADD CONSTRAINT `FK_F474F7D387CB4A1F` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `FK_F474F7D3EE1B1993` FOREIGN KEY (`nota_id_id`) REFERENCES `nota` (`id`),
  ADD CONSTRAINT `FK_F474F7D3FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `cursada_docente`
--
ALTER TABLE `cursada_docente`
  ADD CONSTRAINT `FK_8D9BE23B87CB4A1F` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `FK_8D9BE23B94E27525` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id`),
  ADD CONSTRAINT `FK_8D9BE23BE8ADDD3D` FOREIGN KEY (`revista_id`) REFERENCES `revista` (`id`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `FK_CA3B40EC4B352BE1` FOREIGN KEY (`comision_id`) REFERENCES `comision` (`id`),
  ADD CONSTRAINT `FK_CA3B40ECC5C70C5B` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `FK_FD9FCFA4F5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  ADD CONSTRAINT `FK_2852854F68C84212` FOREIGN KEY (`examen_final_id_id`) REFERENCES `examen_final` (`id`),
  ADD CONSTRAINT `FK_2852854FD3819735` FOREIGN KEY (`alumno_id_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `examen_final`
--
ALTER TABLE `examen_final`
  ADD CONSTRAINT `FK_8861EFE2AF1D1CBB` FOREIGN KEY (`asignatura_id_id`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `FK_8861EFE2CFA8626B` FOREIGN KEY (`vocal1_id_id`) REFERENCES `docente` (`id`),
  ADD CONSTRAINT `FK_8861EFE2D1F46B1E` FOREIGN KEY (`presidente_id_id`) REFERENCES `docente` (`id`),
  ADD CONSTRAINT `FK_8861EFE2FE4078F6` FOREIGN KEY (`vocal2_id_id`) REFERENCES `docente` (`id`);
<<<<<<< HEAD

=======
 
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
--
-- Filtros para la tabla `habilitante`
--
ALTER TABLE `habilitante`
  ADD CONSTRAINT `FK_DA63DA0861AD3496` FOREIGN KEY (`titulo_id`) REFERENCES `titulo` (`id`),
  ADD CONSTRAINT `FK_DA63DA0894E27525` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `FK_E25853A387CB4A1F` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`);

--
-- Filtros para la tabla `inscripcion_final`
--
ALTER TABLE `inscripcion_final`
  ADD CONSTRAINT `FK_7BEE921AAF1D1CBB` FOREIGN KEY (`asignatura_id_id`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `FK_7BEE921AD3819735` FOREIGN KEY (`alumno_id_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD CONSTRAINT `FK_2A805CCE67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`);

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `FK_4F68E0104E7121AF` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`),
  ADD CONSTRAINT `FK_4F68E01098260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_51E5B69B67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`),
  ADD CONSTRAINT `FK_51E5B69BC604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `FK_D39AF213C604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `FK_C1E70A7F6C6EF28` FOREIGN KEY (`instituto_id`) REFERENCES `instituto` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649F5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `user_rol`
--
ALTER TABLE `user_rol`
  ADD CONSTRAINT `FK_E5435EBC4BAB96C` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E5435EBCA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
