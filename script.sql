-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2017 a las 02:49:09
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abogados`
--
CREATE DATABASE IF NOT EXISTS `abogados` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `abogados`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `rut` varchar(55) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellido` varchar(55) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefonos` varchar(255) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `tipo_persona` enum('NATURAL','JURIDICA') NOT NULL,
  `rol` enum('CLIENTE','GERENTE','ADMINISTRADOR','SECRETARIA') NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.21-MariaDB : Database - abogados
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`abogados` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `abogados`;

/*Table structure for table `abogado` */

DROP TABLE IF EXISTS `abogado`;

CREATE TABLE `abogado` (
  `id_abogado` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(25) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `especialidad` enum('Civil','Familia','Penalista','') NOT NULL,
  `valor_hora` int(11) NOT NULL,
  PRIMARY KEY (`id_abogado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `abogado` */

/*Table structure for table `atencion` */

DROP TABLE IF EXISTS `atencion`;

CREATE TABLE `atencion` (
  `id_atencion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_abogado` int(11) NOT NULL,
  `estado` enum('Agendada','Confirmada','Anulada','Perdida','Realizada') NOT NULL,
  PRIMARY KEY (`id_atencion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `atencion` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(55) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellido` varchar(55) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefonos` varchar(255) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `tipo_persona` enum('NATURAL','JURIDICA') NOT NULL,
  `rol` enum('CLIENTE','GERENTE','ADMINISTRADOR','SECRETARIA') NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
