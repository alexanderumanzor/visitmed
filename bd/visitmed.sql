-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 29, 2018 at 03:19 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria_personal_medico`
--

CREATE TABLE `categoria_personal_medico` (
  `id_categoria_personal_medico` tinyint(10) NOT NULL,
  `cat_personal_medico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoria_personal_medico`
--

INSERT INTO `categoria_personal_medico` (`id_categoria_personal_medico`, `cat_personal_medico`, `editado`) VALUES
(1, 'EnfermerÃ­a', '2018-11-19 14:17:07'),
(2, 'Medicina General', '0000-00-00 00:00:00'),
(3, 'Especialidades', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categoria_usuario`
--

CREATE TABLE `categoria_usuario` (
  `id_categoria_usuario` tinyint(10) NOT NULL,
  `cat_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoria_usuario`
--

INSERT INTO `categoria_usuario` (`id_categoria_usuario`, `cat_usuario`, `editado`) VALUES
(1, '', '2018-11-13 16:31:05'),
(2, 'Administrador General', '0000-00-00 00:00:00'),
(3, 'MÃ©dicos', '2018-11-13 11:12:06'),
(4, '', '2018-11-19 13:20:19'),
(5, 'RecepciÃ³n', '2018-11-13 11:12:20'),
(6, 'Supervisor EnfermerÃ­a', '2018-11-13 11:12:37'),
(7, 'EnfermerÃ­a', '2018-11-13 11:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `datos_familia_paciente`
--

CREATE TABLE `datos_familia_paciente` (
  `id_familia_paciente` int(10) NOT NULL,
  `numero_paciente_fam` int(10) NOT NULL,
  `nombre_padre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_madre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_conyugue` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `responsable_paciente` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_responsable` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono_responsable` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datos_generales_paciente`
--

CREATE TABLE `datos_generales_paciente` (
  `id_paciente` int(10) NOT NULL,
  `numero_expediente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `primer_apellido_paciente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido_paciente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombres_paciente` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sexo_paciente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento_paciente` date NOT NULL,
  `unidad_tiempo` tinyint(10) NOT NULL,
  `edad_paciente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datos_informante`
--

CREATE TABLE `datos_informante` (
  `id_informante_paciente` int(10) NOT NULL,
  `numero_paciente_informante` int(10) NOT NULL,
  `nombre_informante` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `parentesco_informante` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `documento_identidad_informante` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `numero_documento_informante` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_recepcion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `observaciones_inscripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(10) NOT NULL,
  `numero_expediente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `primer_apellido_paciente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `segundo_apellido_paciente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_paciente` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `sexo_paciente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento_paciente` date NOT NULL,
  `edad_paciente` int(10) NOT NULL,
  `unidad_tiempo` tinyint(10) NOT NULL,
  `estado_civil` tinyint(10) NOT NULL,
  `documento_legal_identidad` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `numero_documento` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion_paciente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_paciente` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono_paciente` int(20) NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `numero_expediente`, `primer_apellido_paciente`, `segundo_apellido_paciente`, `nombre_paciente`, `sexo_paciente`, `fecha_nacimiento_paciente`, `edad_paciente`, `unidad_tiempo`, `estado_civil`, `documento_legal_identidad`, `numero_documento`, `ocupacion_paciente`, `direccion_paciente`, `telefono_paciente`, `editado`) VALUES
(1, 'E00001', 'Morales', 'Montalvan', 'Maria Venancia', 'Femenino', '1988-10-30', 30, 1, 1, 'Cedula de Identidad', 'Reg267878547164', 'Abogada', 'Villa El Carmen Casa 89', 123456789, '2018-11-28 20:13:34'),
(2, 'E00002', 'Zuniga', 'Rayo', 'Sarai', 'Femenino', '2018-11-13', 15, 3, 1, 'no posee', 'sin nÃºmero', 'neonato', 'San Salvador', 0, '2018-11-28 21:09:44'),
(3, 'E00003', 'Suazo', '', 'Mireya', 'Femenino', '2000-10-24', 18, 1, 1, 'Cedula de Identidad', 'REG123456789', 'Estudiante', 'La Salvadorita, 2 cuadras al este', 123456789, '2018-11-28 21:11:26'),
(4, 'E00004', 'Mercury', 'Lopez', 'Federico', 'Masculino', '1983-04-13', 35, 1, 3, 'Cedula de Residencia', 'CR1245', 'AlbaÃ±il', 'San Pedro Sula', 1122334455, '2018-11-28 21:14:07'),
(9, 'E00005', 'Perez', '', 'Juan', 'Masculino', '2018-02-27', 9, 2, 1, 'no posee', 'sin registro', 'neonato', 'San JosÃ©', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `estado_civil_paciente`
--

CREATE TABLE `estado_civil_paciente` (
  `id_estado_civil` tinyint(10) NOT NULL,
  `descripcion_estado` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `estado_civil_paciente`
--

INSERT INTO `estado_civil_paciente` (`id_estado_civil`, `descripcion_estado`) VALUES
(1, 'Soltero(a)'),
(2, 'Casado(a)'),
(3, 'Divorciado(a)'),
(4, 'Viudo(a)'),
(5, 'AcompaÃ±ado(a)');

-- --------------------------------------------------------

--
-- Table structure for table `identificacion_paciente`
--

CREATE TABLE `identificacion_paciente` (
  `id_identificacion_paciente` int(10) NOT NULL,
  `numero_paciente_ident` int(10) NOT NULL,
  `estado_civil` tinyint(10) NOT NULL,
  `documento_identidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_documento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion_paciente` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_paciente` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono_paciente` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_medico`
--

CREATE TABLE `personal_medico` (
  `id_personal_medico` int(11) NOT NULL,
  `id_cat_per_medico` tinyint(10) NOT NULL,
  `cargo_medico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad_medica` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_personal_medico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_personal_medico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_empleado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_medico`
--

INSERT INTO `personal_medico` (`id_personal_medico`, `id_cat_per_medico`, `cargo_medico`, `especialidad_medica`, `nombre_personal_medico`, `apellido_personal_medico`, `numero_empleado`, `editado`) VALUES
(1, 3, 'Doctor', 'CardiologÃ­a ', 'Juan Carlos', 'Parodi', 'E001', '2018-11-23 15:24:49'),
(2, 3, 'Doctor', 'OtorrinolaringologÃ­a', 'JosÃ©', 'RodrÃ­guez', 'E002', '2018-11-19 10:59:15'),
(3, 3, 'Licenciada', 'Enfermeria General', 'Elvira', 'DÃ¡vila Ortiz', 'ENF001', '2018-11-19 10:59:34'),
(4, 1, 'Licenciada', 'Enfermeria General', 'Dorothea Elizabeth', 'Orem', 'ENF002', '0000-00-00 00:00:00'),
(5, 2, 'Doctor', 'Medicina General', 'Edward ', 'Jenner', 'MG001', '0000-00-00 00:00:00'),
(6, 2, 'Doctor', 'Medicina General', 'Ignaz', 'Semmelweis', 'MG002', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `unidad_tiempo`
--

CREATE TABLE `unidad_tiempo` (
  `id_unidad_tiempo` tinyint(10) NOT NULL,
  `descripcion_tiempo` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unidad_tiempo`
--

INSERT INTO `unidad_tiempo` (`id_unidad_tiempo`, `descripcion_tiempo`) VALUES
(1, 'AÃ±os'),
(2, 'Meses'),
(3, 'DÃ­as'),
(4, 'Horas');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `id_cat_usuario` tinyint(10) NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre_usuario`, `apellido_usuario`, `password`, `id_cat_usuario`, `editado`) VALUES
(1, 'JoseSandino', 'JosÃ© Antonio', 'Sandino Montano', '$2y$12$jMoif8v1bjsurUf7GBzcTu5BfcdsBWobh83pUCHrf86wPgxzYv.HW', 1, '2018-11-02 16:21:46'),
(2, 'ElDoctor', 'Salomon', 'Ibarra', '$2y$12$EEZx.deS4HOy1m3hJrMf3O1X1xqV.2HPly7mgVvsty/9gyaj98yFC', 3, '2018-11-02 16:45:22'),
(5, 'Recepcion', 'Recepcionista', 'Medico', '$2y$12$L4KcryKxIDEws/3cbFKHUe6dtl84xEoLoBTWQEjcioJ4Hb1Uab326', 5, '2018-11-03 16:26:58'),
(6, 'elnuevo', 'El Nuevo', 'Aprende Rapido', '$2y$12$BMsT5IzAY3DHWSI70BzbS.N3z9J3eHi6Qc5wqUivsWvoBB609zDiW', 5, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_personal_medico`
--
ALTER TABLE `categoria_personal_medico`
  ADD PRIMARY KEY (`id_categoria_personal_medico`);

--
-- Indexes for table `categoria_usuario`
--
ALTER TABLE `categoria_usuario`
  ADD PRIMARY KEY (`id_categoria_usuario`);

--
-- Indexes for table `datos_familia_paciente`
--
ALTER TABLE `datos_familia_paciente`
  ADD PRIMARY KEY (`id_familia_paciente`),
  ADD KEY `numero_paciente_fam` (`numero_paciente_fam`);

--
-- Indexes for table `datos_generales_paciente`
--
ALTER TABLE `datos_generales_paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `unidad_tiempo` (`unidad_tiempo`);

--
-- Indexes for table `datos_informante`
--
ALTER TABLE `datos_informante`
  ADD PRIMARY KEY (`id_informante_paciente`);

--
-- Indexes for table `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD UNIQUE KEY `numero_expediente` (`numero_expediente`),
  ADD KEY `estado_civil` (`estado_civil`),
  ADD KEY `unidad_tiempo` (`unidad_tiempo`);

--
-- Indexes for table `estado_civil_paciente`
--
ALTER TABLE `estado_civil_paciente`
  ADD PRIMARY KEY (`id_estado_civil`);

--
-- Indexes for table `identificacion_paciente`
--
ALTER TABLE `identificacion_paciente`
  ADD PRIMARY KEY (`id_identificacion_paciente`),
  ADD KEY `numero_paciente_ident` (`numero_paciente_ident`),
  ADD KEY `estado_civil` (`estado_civil`);

--
-- Indexes for table `personal_medico`
--
ALTER TABLE `personal_medico`
  ADD PRIMARY KEY (`id_personal_medico`),
  ADD UNIQUE KEY `numero_empleado` (`numero_empleado`),
  ADD KEY `id_cat_per_medico` (`id_cat_per_medico`);

--
-- Indexes for table `unidad_tiempo`
--
ALTER TABLE `unidad_tiempo`
  ADD PRIMARY KEY (`id_unidad_tiempo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `id_cat_usuario` (`id_cat_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_personal_medico`
--
ALTER TABLE `categoria_personal_medico`
  MODIFY `id_categoria_personal_medico` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categoria_usuario`
--
ALTER TABLE `categoria_usuario`
  MODIFY `id_categoria_usuario` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `datos_familia_paciente`
--
ALTER TABLE `datos_familia_paciente`
  MODIFY `id_familia_paciente` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `datos_informante`
--
ALTER TABLE `datos_informante`
  MODIFY `id_informante_paciente` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `datos_paciente`
--
ALTER TABLE `datos_paciente`
  MODIFY `id_paciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `estado_civil_paciente`
--
ALTER TABLE `estado_civil_paciente`
  MODIFY `id_estado_civil` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `identificacion_paciente`
--
ALTER TABLE `identificacion_paciente`
  MODIFY `id_identificacion_paciente` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal_medico`
--
ALTER TABLE `personal_medico`
  MODIFY `id_personal_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `unidad_tiempo`
--
ALTER TABLE `unidad_tiempo`
  MODIFY `id_unidad_tiempo` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `datos_familia_paciente`
--
ALTER TABLE `datos_familia_paciente`
  ADD CONSTRAINT `datos_familia_paciente_ibfk_1` FOREIGN KEY (`numero_paciente_fam`) REFERENCES `datos_generales_paciente` (`id_paciente`);

--
-- Constraints for table `datos_generales_paciente`
--
ALTER TABLE `datos_generales_paciente`
  ADD CONSTRAINT `datos_generales_paciente_ibfk_1` FOREIGN KEY (`unidad_tiempo`) REFERENCES `unidad_tiempo` (`id_unidad_tiempo`);

--
-- Constraints for table `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD CONSTRAINT `datos_paciente_ibfk_1` FOREIGN KEY (`estado_civil`) REFERENCES `estado_civil_paciente` (`id_estado_civil`),
  ADD CONSTRAINT `datos_paciente_ibfk_2` FOREIGN KEY (`unidad_tiempo`) REFERENCES `unidad_tiempo` (`id_unidad_tiempo`);

--
-- Constraints for table `identificacion_paciente`
--
ALTER TABLE `identificacion_paciente`
  ADD CONSTRAINT `identificacion_paciente_ibfk_1` FOREIGN KEY (`numero_paciente_ident`) REFERENCES `datos_generales_paciente` (`id_paciente`),
  ADD CONSTRAINT `identificacion_paciente_ibfk_2` FOREIGN KEY (`estado_civil`) REFERENCES `estado_civil_paciente` (`id_estado_civil`);

--
-- Constraints for table `personal_medico`
--
ALTER TABLE `personal_medico`
  ADD CONSTRAINT `personal_medico_ibfk_1` FOREIGN KEY (`id_cat_per_medico`) REFERENCES `categoria_personal_medico` (`id_categoria_personal_medico`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cat_usuario`) REFERENCES `categoria_usuario` (`id_categoria_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
