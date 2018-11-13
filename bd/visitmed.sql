-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 13, 2018 at 05:28 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 13, 2018 at 10:33 PM
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
  `cat_personal_medico` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoria_personal_medico`
--

INSERT INTO `categoria_personal_medico` (`id_categoria_personal_medico`, `cat_personal_medico`) VALUES
(1, 'Enfermeria'),
(2, 'Medicina General'),
(3, 'Especialidades');

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
(4, 'Supervisor RecepciÃ³n', '2018-11-13 11:13:48'),
(5, 'RecepciÃ³n', '2018-11-13 11:12:20'),
(6, 'Supervisor EnfermerÃ­a', '2018-11-13 11:12:37'),
(7, 'EnfermerÃ­a', '2018-11-13 11:11:49');

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
  `numero_empleado` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_medico`
--

INSERT INTO `personal_medico` (`id_personal_medico`, `id_cat_per_medico`, `cargo_medico`, `especialidad_medica`, `nombre_personal_medico`, `apellido_personal_medico`, `numero_empleado`) VALUES
(1, 3, 'Doctor', 'Cardiología ', 'Juan Carlos', 'Parodi', 'E001'),
(2, 3, 'Doctor', 'Otorrinolaringología', 'José ', 'Rodríguez', 'E002'),
(3, 1, 'Licenciada', 'Enfermeria General', 'Elvira', 'Dávila Ortiz', 'ENF001'),
(4, 1, 'Licenciada', 'Enfermeria General', 'Dorothea Elizabeth', 'Orem', 'ENF002'),
(5, 2, 'Doctor', 'Medicina General', 'Edward ', 'Jenner', 'MG001'),
(6, 2, 'Doctor', 'Medicina General', 'Ignaz', 'Semmelweis', 'MG002');

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
-- Indexes for table `personal_medico`
--
ALTER TABLE `personal_medico`
  ADD PRIMARY KEY (`id_personal_medico`),
  ADD UNIQUE KEY `numero_empleado` (`numero_empleado`),
  ADD KEY `id_cat_per_medico` (`id_cat_per_medico`);

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
  MODIFY `id_categoria_usuario` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `personal_medico`
--
ALTER TABLE `personal_medico`
  MODIFY `id_personal_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

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
(1, 'Administrador VisitMed', '0000-00-00 00:00:00'),
(2, 'Administrador General', '0000-00-00 00:00:00'),
(3, 'MÃ©dicos', '2018-11-13 11:12:06'),
(4, 'Supervisor RecepciÃ³n', '2018-11-13 11:13:48'),
(5, 'RecepciÃ³n', '2018-11-13 11:12:20'),
(6, 'Supervisor EnfermerÃ­a', '2018-11-13 11:12:37'),
(7, 'EnfermerÃ­a', '2018-11-13 11:11:49');

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
-- Indexes for table `categoria_usuario`
--
ALTER TABLE `categoria_usuario`
  ADD PRIMARY KEY (`id_categoria_usuario`);

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
-- AUTO_INCREMENT for table `categoria_usuario`
--
ALTER TABLE `categoria_usuario`
  MODIFY `id_categoria_usuario` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cat_usuario`) REFERENCES `categoria_usuario` (`id_categoria_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
