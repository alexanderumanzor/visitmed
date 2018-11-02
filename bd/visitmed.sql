-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 02, 2018 at 11:13 PM
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
-- Table structure for table `categoria_usuario`
--

CREATE TABLE `categoria_usuario` (
  `id_categoria_usuario` tinyint(10) NOT NULL,
  `cat_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoria_usuario`
--

INSERT INTO `categoria_usuario` (`id_categoria_usuario`, `cat_usuario`) VALUES
(1, 'Administrador VisitMed'),
(2, 'Administrador General'),
(3, 'Médicos'),
(4, 'Supervisor Recepción'),
(5, 'Recepción'),
(6, 'Supervisor Enfermería'),
(7, 'Enfermería');

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
(3, 'admin', 'admin', 'admin', '$2y$12$0hXDI/u7HlEJ0Y0aw/x5.eTKFkss6KkzAdTuA3m6M6Ty/dFkF/7Zq', 1, '2018-11-02 16:46:54'),
(5, 'recepcion', 'Recepcionista', 'Medico', '$2y$12$L4KcryKxIDEws/3cbFKHUe6dtl84xEoLoBTWQEjcioJ4Hb1Uab326', 5, '0000-00-00 00:00:00');

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
  MODIFY `id_categoria_usuario` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
