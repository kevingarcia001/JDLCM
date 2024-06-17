-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2024 a las 00:11:29
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_jdlcm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idAlumno` int NOT NULL,
  `PNombre` varchar(45) DEFAULT NULL,
  `SNombre` varchar(45) DEFAULT NULL,
  `PApellido` varchar(45) DEFAULT NULL,
  `SApellido` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Tutor_idTutor` int NOT NULL,
  `Sexo_idSexo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumno`, `PNombre`, `SNombre`, `PApellido`, `SApellido`, `Direccion`, `Fecha_Nacimiento`, `Telefono`, `Tutor_idTutor`, `Sexo_idSexo`) VALUES
(1, 'Caglos Editados prueba xdxd xdxd ', 'Albertofdfdffdfd', 'fasdfsdf', 'Gómez', 'Calle 123', '2010-05-01', '12345678', 1, 1),
(2, 'SofíaEditada', 'María', 'López', 'Martínez', 'Avenida 45', '2011-06-20', '555-5678', 1, 2),
(3, 'Luis', 'Fernando', 'García', 'Hernández', 'Boulevard 67', '2012-07-25', '555-6789', 3, 1),
(4, 'Camila', 'Patricia', 'Rodríguez', 'Fernández', 'Carrera 89', '2013-08-30', '555-7890', 4, 2),
(5, 'Juan', 'David', 'Sánchez', 'González', 'Calle 101', '2010-09-10', '555-8901', 5, 1),
(6, 'Valentina', 'Victoria', 'Ramírez', 'Jiménez', 'Avenida 121', '2011-10-15', '555-9012', 6, 2),
(7, 'Andrés', 'Eduardo', 'Torres', 'Ruiz', 'Boulevard 143', '2012-11-20', '555-0123', 7, 1),
(8, 'Isabella', 'Beatriz', 'Flores', 'Castro', 'Carrera 165', '2013-12-25', '555-1235', 8, 2),
(9, 'Mateo', 'Ángel', 'Ortiz', 'Vargas', 'Calle 187', '2010-01-05', '555-3456', 9, 1),
(10, 'Lucía', 'Mercedes', 'Morales', 'Ramos', 'Avenida 209', '2011-02-10', '555-4567', 10, 2),
(11, 'Alejandro', 'José', 'Hernández', 'Gómez', 'Calle 56', '2012-03-25', '555-5678', 1, 1),
(12, 'Fernanda', 'Isabel', 'Martínez', 'Sánchez', 'Avenida 78', '2013-04-20', '555-6789', 2, 2),
(13, 'Diego', 'Andrés', 'González', 'Fernández', 'Boulevard 90', '2010-08-15', '555-7890', 3, 1),
(14, 'Valeria', 'Camila', 'Fernández', 'López', 'Carrera 123', '2011-09-10', '555-8901', 4, 2),
(15, 'Juan', 'Carlos', 'Díaz', 'Pérez', 'Calle 145', '2012-11-05', '555-9012', 5, 1),
(16, 'Lucas', 'Javier', 'Vargas', 'Ramírez', 'Avenida 167', '2013-12-01', '555-0123', 6, 2),
(17, 'María', 'Fernanda', 'Molina', 'Gutiérrez', 'Boulevard 189', '2010-01-05', '555-1234', 7, 1),
(18, 'Gabriel', 'Alberto', 'Rojas', 'Jiménez', 'Calle 201', '2011-02-20', '555-2345', 8, 2),
(19, 'Santiago', 'Andrés', 'Pérez', 'Ortega', 'Avenida 223', '2012-03-15', '555-3456', 9, 1),
(20, 'Paula', 'Isabella', 'Suárez', 'Hernández', 'Carrera 245', '2013-04-30', '555-4567', 10, 2),
(21, 'Camilo', 'Andrés', 'Gómez', 'Hernández', 'Calle 34', '2012-07-10', '555-5678', 1, 1),
(22, 'Juliana', 'María', 'Sánchez', 'López', 'Avenida 56', '2013-08-25', '555-6789', 2, 2),
(23, 'Mateo', 'Alejandro', 'Fernández', 'Martínez', 'Boulevard 78', '2010-09-30', '555-7890', 3, 1),
(24, 'Valentina', 'Sofía', 'López', 'González', 'Carrera 90', '2011-10-15', '555-8901', 4, 2),
(25, 'David', 'Sebastián', 'Pérez', 'Díaz', 'Calle 112', '2012-11-20', '555-9012', 5, 1),
(26, 'Isabella', 'Lucía', 'Ramírez', 'Vargas', 'Avenida 134', '2013-12-05', '555-0123', 6, 2),
(27, 'Juan', 'Diego', 'Gutiérrez', 'Molina', 'Boulevard 156', '2010-01-20', '555-1234', 7, 1),
(28, 'Laura', 'Daniela', 'Jiménez', 'Rojas', 'Calle 178', '2011-02-05', '555-2345', 8, 2),
(29, 'Santiago', 'José', 'Ortega', 'Pérez', 'Avenida 190', '2012-03-10', '555-3456', 9, 1),
(30, 'María', 'Camila', 'Hernández', 'Suárez', 'Carrera 212', '2013-04-25', '555-4567', 10, 2),
(31, 'PRUBA', 'PRUBA', 'PRUBA', 'fasdf', 'fdsaff', '2024-05-07', '12333333', 1, 1),
(32, 'PRUBA', 'PRUBA', 'PRUBA', 'fasdf', 'fdsaff', '2024-05-07', '12333333', 1, 1),
(33, 'PRUBA', 'PRUBA', 'PRUBA', 'fasdf', 'fdsaff', '2024-05-07', '12333333', 1, 1),
(34, 'PRUBAEditadar', 'PRUBA', 'PRUBA', 'fasdf', 'fdsaff', '2024-05-07', '12333333', 1, 2),
(47, 'PRUBAaaaaa', 'fsad', 'fasdf', 'PRUBA', 'fdsaff', '2024-06-08', '12333333', 2, 1),
(48, 'PRUBAaaaaa', 'fsad', 'fasdf', 'PRUBA', 'fdsaff', '2024-06-08', '12333333', 2, 1),
(49, 'PRUBAaaaaa', 'fsad', 'fasdf', 'PRUBA', 'fdsaff', '2024-06-08', '12333333', 2, 1),
(50, 'KEVIN', 'PRUBA', 'PRUBA', 'PRUBA', 'fdsaff', '2024-06-13', '12333333', 1, 1),
(51, 'KEVIN aaaaaaaaaaaaaaaa', 'PRUBA', 'PRUBA', 'fasdf', 'fdsaff', '2024-06-12', '12333333', 2, 1),
(52, 'PRUBA', 'PRUBA', 'PRUBA', 'dddddddddddddd', 'PRUBAssss123', '2024-06-06', '12333333', 2, 2),
(53, 'KEVIN aaaaaaaaaaaaaaaa', 'fsffdfdfdsfds', 'PRUBA', 'PRUBA', 'PRUBAssss123', '2024-05-30', '44444444', 2, 1),
(67, 'PRUBAmatricula', 'PRUBAmatricula', 'PRUBAmatricula', 'PRUBAmatricula', 'PRUBAssss123', '2024-06-22', '12333333', 24, 1),
(68, 'kevin', 'Andres', 'Garcia', 'Moncada', 'kevin123', '2024-06-21', '88888888', 25, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anio_academico`
--

CREATE TABLE `anio_academico` (
  `idAnio_Academico` int NOT NULL,
  `Anio_Academico` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `anio_academico`
--

INSERT INTO `anio_academico` (`idAnio_Academico`, `Anio_Academico`) VALUES
(1, '2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `idAsignatura` int NOT NULL,
  `Asignatura` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`idAsignatura`, `Asignatura`) VALUES
(1, 'Matemáticas'),
(2, 'Lengua y Literatura'),
(3, 'Ciencias Naturales'),
(4, 'Historia'),
(5, 'Geografía'),
(6, 'Educación Física'),
(7, 'Física'),
(8, 'Química');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `idGrado` int NOT NULL,
  `Grado` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`idGrado`, `Grado`) VALUES
(1, '7mo'),
(2, '8vo'),
(3, '9no'),
(4, '10mo'),
(5, '11mo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gradoseccion`
--

CREATE TABLE `gradoseccion` (
  `idGradoSeccion` int NOT NULL,
  `Grado_idGrado` int DEFAULT NULL,
  `Seccion_idSeccion` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `gradoseccion`
--

INSERT INTO `gradoseccion` (`idGradoSeccion`, `Grado_idGrado`, `Seccion_idSeccion`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 5, 1),
(14, 5, 2),
(15, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `idMatricula` int NOT NULL,
  `CodMatricula` int DEFAULT NULL,
  `Anio_Academico_idAnio_Academico` int NOT NULL,
  `GradoSeccion_idGradoSeccion` int NOT NULL,
  `Turno_idTurno` int NOT NULL,
  `Alumnos_idAlumno` int NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`idMatricula`, `CodMatricula`, `Anio_Academico_idAnio_Academico`, `GradoSeccion_idGradoSeccion`, `Turno_idTurno`, `Alumnos_idAlumno`, `Fecha`) VALUES
(2, 23456, 1, 2, 2, 2, '2024-05-20'),
(3, 34567, 1, 3, 1, 3, '2024-05-20'),
(4, 45678, 1, 4, 2, 4, '2024-05-20'),
(5, 56789, 1, 5, 1, 5, '2024-05-20'),
(6, 67890, 1, 6, 2, 6, '2024-05-20'),
(7, 78901, 1, 7, 1, 7, '2024-05-20'),
(8, 89012, 1, 8, 2, 8, '2024-05-20'),
(9, 90123, 1, 9, 1, 9, '2024-05-20'),
(10, 10123, 1, 10, 2, 10, '2024-05-20'),
(11, 11234, 1, 11, 1, 11, '2024-05-20'),
(12, 12345, 1, 12, 2, 12, '2024-05-20'),
(13, 23456, 1, 13, 1, 13, '2024-05-20'),
(14, 34567, 1, 14, 2, 14, '2024-05-20'),
(15, 45678, 1, 15, 1, 15, '2024-05-20'),
(16, 56789, 1, 1, 2, 16, '2024-05-20'),
(17, 67890, 1, 2, 1, 17, '2024-05-20'),
(18, 78901, 1, 3, 2, 18, '2024-05-20'),
(19, 89012, 1, 4, 1, 19, '2024-05-20'),
(20, 90123, 1, 5, 2, 20, '2024-05-20'),
(21, 10123, 1, 6, 1, 21, '2024-05-20'),
(22, 11234, 1, 7, 2, 22, '2024-05-20'),
(23, 12345, 1, 8, 1, 23, '2024-05-20'),
(24, 23456, 1, 9, 2, 24, '2024-05-20'),
(25, 34567, 1, 10, 1, 25, '2024-05-20'),
(26, 45678, 1, 11, 2, 26, '2024-05-20'),
(27, 56789, 1, 12, 1, 27, '2024-05-20'),
(28, 67890, 1, 13, 2, 28, '2024-05-20'),
(29, 78901, 1, 14, 1, 29, '2024-05-20'),
(30, 89012, 1, 15, 2, 30, '2024-05-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `idNota` int NOT NULL,
  `Nota` int DEFAULT NULL,
  `Asignatura_idAsignatura` int NOT NULL,
  `Matricula_idMatricula` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `idParentesco` int NOT NULL,
  `Parentesco` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`idParentesco`, `Parentesco`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Hijo'),
(4, 'Hija'),
(5, 'Hermano'),
(6, 'Hermana'),
(7, 'Abuelo'),
(8, 'Abuela'),
(9, 'Tío'),
(10, 'Tía'),
(11, 'Primo'),
(12, 'Prima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int NOT NULL,
  `Rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Rol`) VALUES
(1, 'Admind'),
(2, 'Director');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `idSeccion` int NOT NULL,
  `NSecc` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`idSeccion`, `NSecc`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `idSexo` int NOT NULL,
  `Sexo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idSexo`, `Sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `idTurno` int NOT NULL,
  `Turno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`idTurno`, `Turno`) VALUES
(1, 'Matutino'),
(2, 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `idTutor` int NOT NULL,
  `PNombre` varchar(45) DEFAULT NULL,
  `SNombre` varchar(45) DEFAULT NULL,
  `PApellido` varchar(45) DEFAULT NULL,
  `SApellido` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Cedula` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Sexo_idSexo` int NOT NULL,
  `Parentesco_idParentesco` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`idTutor`, `PNombre`, `SNombre`, `PApellido`, `SApellido`, `Direccion`, `Cedula`, `Telefono`, `Sexo_idSexo`, `Parentesco_idParentesco`) VALUES
(1, 'Juan', 'Carlos', 'Pérez', 'Gómez', 'Calle 123', '123-456789-0123A', '555-1234', 1, 1),
(2, 'María', 'Isabel', 'López', 'Martínez', 'Avenida 45', '234-567890-1234B', '555-5678', 2, 2),
(3, 'Pedro', 'Antonio', 'García', 'Hernández', 'Boulevard 67', '345-678901-2345C', '555-6789', 1, 3),
(4, 'Ana', 'Patricia', 'Rodríguez', 'Fernández', 'Carrera 89', '456-789012-3456D', '555-7890', 2, 4),
(5, 'Luis', 'Fernando', 'Sánchez', 'González', 'Calle 101', '567-890123-4567E', '555-8901', 1, 5),
(6, 'Laura', 'Victoria', 'Ramírez', 'Jiménez', 'Avenida 121', '678-901234-5678F', '555-9012', 2, 6),
(7, 'Carlos', 'Eduardo', 'Torres', 'Ruiz', 'Boulevard 143', '789-012345-6789G', '555-0123', 1, 7),
(8, 'Sara', 'Beatriz', 'Flores', 'Castro', 'Carrera 165', '890-123456-7890H', '555-1235', 2, 8),
(9, 'Miguel', 'Ángel', 'Ortiz', 'Vargas', 'Calle 187', '901-234567-8901I', '555-3456', 1, 9),
(10, 'Elena', 'Mercedes', 'Morales', 'Ramos', 'Avenida 209', '012-345678-9012J', '555-4567', 2, 10),
(24, 'PRUBAmatricula', 'PRUBAmatricula', 'PRUBAmatricula', 'PRUBAmatricula', 'PRUBAmatricula', '12321234568', '22222222', 1, 12),
(25, 'aaa', 'aaa', 'aa', 'aa', 'aaaaa', '12321234568', '22222222', 2, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Contrasena` varchar(255) DEFAULT NULL,
  `Rol_idRol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Usuario`, `Nombre`, `Contrasena`, `Rol_idRol`) VALUES
(8, 'cr1siuuuuuuuu', 'siuuuuuuuu', '$2y$10$YksDJrKIR27I831hpbozQ.285dNb4dQ6Oo5tdthu7PGF.ZARBLd52', 2),
(32, 'asdfasdf', 'fsadsdaf', '123', 1),
(33, 'asdfasdf', 'fsadsdaf', '123', 1),
(34, 'pruebausuario', 'prueba ', '123', 1),
(35, 'pruebausuario', 'prueba ', '123', 1),
(36, 'contra', 'contra', '123', 1),
(37, 'asdfasdf', 'fd', NULL, 1),
(38, 'pruebausuario', 'fd', NULL, 1),
(39, 'pruebausuarioasfdfsdfsdf', 'kevin', NULL, 1),
(40, 'fd', 'fdsf', NULL, 1),
(42, 'pruebausuario', 'fd', '$2y$10$EddGJYUUEFWv23BpGE2LnuyJ8L9R9UNvbgpT7FkPZHicsi2YgB9EK', 1),
(43, 'pruebausuario', 'fd', '$2y$10$B29wm3DQSclpYqN7u09Lv.6tfEQtRYsOgwfOEZ8cqbQFllMK5UuMi', 1),
(44, 'pruebausuario', 'fd', '$2y$10$gykA7Adz3Ajq9SyOJaIqA.ggDzuJjvZT3txd/MlcE38ug/AqoCvz.', 1),
(45, 'contra', 'contra', '$2y$10$i8wbGd.3wyyL4LeGdGhecurNa/.ocIvFgZ4EU3KP.A.j8cMxDhiR6', 2),
(46, 'pruebacontra', 'contrapruebas', '$2y$10$GGj/JlqrOfdVDAMFxbt2AOvMozTAcR80L.drxYXXIAcYGXGIXvlaK', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_matriculados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_matriculados` (
`#` int
,`Código de matrícula` int
,`Año académico` varchar(45)
,`Grado` varchar(4)
,`Sección` varchar(2)
,`Turno` varchar(45)
,`Alumno` varchar(183)
,`Tutor` varchar(183)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_matriculados`
--
DROP TABLE IF EXISTS `vw_matriculados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_matriculados`  AS SELECT `mt`.`idMatricula` AS `#`, `mt`.`CodMatricula` AS `Código de matrícula`, `aa`.`Anio_Academico` AS `Año académico`, trim(`g`.`Grado`) AS `Grado`, trim(`sc`.`NSecc`) AS `Sección`, trim(`t`.`Turno`) AS `Turno`, concat(trim(`al`.`PNombre`),' ',trim(`al`.`SNombre`),' ',trim(`al`.`PApellido`),' ',trim(`al`.`SApellido`)) AS `Alumno`, concat(trim(`tt`.`PNombre`),' ',trim(`tt`.`SNombre`),' ',trim(`tt`.`PApellido`),' ',trim(`tt`.`SApellido`)) AS `Tutor` FROM (((((((`matricula` `mt` join `anio_academico` `aa` on((`mt`.`Anio_Academico_idAnio_Academico` = `aa`.`idAnio_Academico`))) join `gradoseccion` `gs` on((`mt`.`GradoSeccion_idGradoSeccion` = `gs`.`idGradoSeccion`))) join `grado` `g` on((`gs`.`Grado_idGrado` = `g`.`idGrado`))) join `seccion` `sc` on((`gs`.`Seccion_idSeccion` = `sc`.`idSeccion`))) join `alumnos` `al` on((`mt`.`Alumnos_idAlumno` = `al`.`idAlumno`))) join `tutor` `tt` on((`al`.`Tutor_idTutor` = `tt`.`idTutor`))) join `turno` `t` on((`mt`.`Turno_idTurno` = `t`.`idTurno`))) ORDER BY `mt`.`idMatricula` ASC ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumno`),
  ADD UNIQUE KEY `idAlumno_UNIQUE` (`idAlumno`),
  ADD KEY `fk_Alumnos_Tutor1_idx` (`Tutor_idTutor`),
  ADD KEY `fk_Alumnos_Sexo1_idx` (`Sexo_idSexo`);

--
-- Indices de la tabla `anio_academico`
--
ALTER TABLE `anio_academico`
  ADD PRIMARY KEY (`idAnio_Academico`),
  ADD UNIQUE KEY `idAnio_Academico_UNIQUE` (`idAnio_Academico`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`idAsignatura`),
  ADD UNIQUE KEY `idAsignatura_UNIQUE` (`idAsignatura`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`idGrado`),
  ADD UNIQUE KEY `idGrado_UNIQUE` (`idGrado`);

--
-- Indices de la tabla `gradoseccion`
--
ALTER TABLE `gradoseccion`
  ADD PRIMARY KEY (`idGradoSeccion`),
  ADD UNIQUE KEY `idGradoSeccion_UNIQUE` (`idGradoSeccion`),
  ADD KEY `fk_Grado_Grado1_idx` (`Grado_idGrado`),
  ADD KEY `fk_Grado_Seccion1_idx` (`Seccion_idSeccion`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idMatricula`),
  ADD UNIQUE KEY `idMatricula_UNIQUE` (`idMatricula`),
  ADD KEY `fk_Matricula_Anio_Academico1_idx` (`Anio_Academico_idAnio_Academico`),
  ADD KEY `fk_Matricula_GradoSeccion1_idx` (`GradoSeccion_idGradoSeccion`),
  ADD KEY `fk_Matricula_Turno1_idx` (`Turno_idTurno`),
  ADD KEY `fk_Matricula_Alumnos1_idx` (`Alumnos_idAlumno`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`idNota`),
  ADD UNIQUE KEY `idNota_UNIQUE` (`idNota`),
  ADD KEY `fk_Nota_Asignatura1_idx` (`Asignatura_idAsignatura`),
  ADD KEY `fk_Nota_Matricula1_idx` (`Matricula_idMatricula`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`idParentesco`),
  ADD UNIQUE KEY `idParentesco_UNIQUE` (`idParentesco`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`),
  ADD UNIQUE KEY `idRol_UNIQUE` (`idRol`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`idSeccion`),
  ADD UNIQUE KEY `idSeccion_UNIQUE` (`idSeccion`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`idSexo`),
  ADD UNIQUE KEY `idSexo_UNIQUE` (`idSexo`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`idTurno`),
  ADD UNIQUE KEY `idTurno_UNIQUE` (`idTurno`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`idTutor`),
  ADD UNIQUE KEY `idTutor_UNIQUE` (`idTutor`),
  ADD KEY `fk_Tutor_Sexo1_idx` (`Sexo_idSexo`),
  ADD KEY `fk_Tutor_Parentesco1_idx` (`Parentesco_idParentesco`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`),
  ADD KEY `fk_Usuario_Rol1_idx` (`Rol_idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `anio_academico`
--
ALTER TABLE `anio_academico`
  MODIFY `idAnio_Academico` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `idAsignatura` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `idGrado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `gradoseccion`
--
ALTER TABLE `gradoseccion`
  MODIFY `idGradoSeccion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `idMatricula` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `idNota` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `idParentesco` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `idSeccion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `idSexo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `idTurno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `idTutor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_Alumnos_Sexo1` FOREIGN KEY (`Sexo_idSexo`) REFERENCES `sexo` (`idSexo`),
  ADD CONSTRAINT `fk_Alumnos_Tutor1` FOREIGN KEY (`Tutor_idTutor`) REFERENCES `tutor` (`idTutor`);

--
-- Filtros para la tabla `gradoseccion`
--
ALTER TABLE `gradoseccion`
  ADD CONSTRAINT `fk_GradoSeccion_Grado1_idx` FOREIGN KEY (`Grado_idGrado`) REFERENCES `grado` (`idGrado`),
  ADD CONSTRAINT `fk_GradoSeccion_Seccion1_idx` FOREIGN KEY (`Seccion_idSeccion`) REFERENCES `seccion` (`idSeccion`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_Matricula_Alumnos1` FOREIGN KEY (`Alumnos_idAlumno`) REFERENCES `alumnos` (`idAlumno`),
  ADD CONSTRAINT `fk_Matricula_Anio_Academico1` FOREIGN KEY (`Anio_Academico_idAnio_Academico`) REFERENCES `anio_academico` (`idAnio_Academico`),
  ADD CONSTRAINT `fk_Matricula_GradoSeccion1` FOREIGN KEY (`GradoSeccion_idGradoSeccion`) REFERENCES `gradoseccion` (`idGradoSeccion`),
  ADD CONSTRAINT `fk_Matricula_Turno1` FOREIGN KEY (`Turno_idTurno`) REFERENCES `turno` (`idTurno`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_Nota_Asignatura1` FOREIGN KEY (`Asignatura_idAsignatura`) REFERENCES `asignatura` (`idAsignatura`),
  ADD CONSTRAINT `fk_Nota_Matricula1_idx` FOREIGN KEY (`Matricula_idMatricula`) REFERENCES `matricula` (`idMatricula`);

--
-- Filtros para la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `fk_Tutor_Parentesco1` FOREIGN KEY (`Parentesco_idParentesco`) REFERENCES `parentesco` (`idParentesco`),
  ADD CONSTRAINT `fk_Tutor_Sexo1` FOREIGN KEY (`Sexo_idSexo`) REFERENCES `sexo` (`idSexo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
