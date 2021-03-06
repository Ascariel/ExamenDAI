-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 08:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- MySQL Script generated by MySQL Workbench
-- 06/01/17 20:21:14
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema softamb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema softamb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `softamb` DEFAULT CHARACTER SET utf16 ;
USE `softamb` ;

--
-- Database: `softamb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulancia`
--

CREATE TABLE `softamb`.`ambulancia` (
  `id` int(11) NOT NULL,
  `patente` varchar(45) NOT NULL,
  `persona_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ambulancia`
--

INSERT INTO `ambulancia` (`id`, `patente`, `persona_id`) VALUES
(1, 'XX6754', NULL),
(2, 'BD7865', NULL),
(3, 'HY6798', NULL),
(4, 'JI9000', NULL),
(5, 'LB2367', NULL),
(6, 'YY5634', NULL),
(7, 'PY6745', NULL),
(8, 'KJ9870', NULL),
(9, 'QA1243', NULL),
(10, 'GH6666', NULL),
(11, 'JU7743', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carga`
--

CREATE TABLE `softamb`.`carga` (
  `persona_id` int(11) NOT NULL,
  `carga_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `rut` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carga`
--

INSERT INTO `carga` (`persona_id`, `carga_id`, `nombre`, `apellido`, `edad`, `rut`) VALUES
(14, 6, 'Pablo', 'Mancilla', 21, '10214564'),
(14, 7, 'Marcela ', 'Paz', 30, '12765836'),
(13, 8, 'Viviana', 'Castillo', 5, '11448904'),
(12, 9, 'Gerardo', 'Lopez', 16, '6475751'),
(5, 10, 'Catalina', 'Torres', 21, '13770506'),
(5, 11, 'Maria', 'Rosales', 21, '14490825');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `softamb`.`categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Estomago'),
(2, 'Cabeza'),
(3, 'Ojos'),
(4, 'Espalda'),
(5, 'Manos'),
(6, 'Pies');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `softamb`.`persona` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(45) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `gestor` tinyint(1) DEFAULT '0',
  `cliente` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `rut`, `password`, `nombre`, `apellido`, `fecha_nacimiento`, `telefono`, `direccion`, `activo`, `gestor`, `cliente`) VALUES
(2, 'admin', '356a192b7913b04c54574d18c28d46e6395428ab', 'Admin', 'Admin', '1982-09-21', '234234', 'dir', 1, 1, 0),
(3, 'cliente', '356a192b7913b04c54574d18c28d46e6395428ab', 'Cliente', 'Cliente', '1982-09-21', '234234', 'dir', 1, 0, 1),
(4, 'ambos', '356a192b7913b04c54574d18c28d46e6395428ab', 'Ambos', 'Ambos', '1982-09-21', '234234', 'dir', 1, 1, 1),
(6, ' 10214564', '356a192b7913b04c54574d18c28d46e6395428ab', 'Pablo', 'Mancilla', '1982-09-21', '99776654', 'Londre 876, Santiago', 0, 0, 1),
(7, ' 12765836', '356a192b7913b04c54574d18c28d46e6395428ab', 'Marcela', 'Paz', '1972-10-31', '99776659', 'Suecia 999, Providencia', 0, 0, 1),
(8, ' 11448904', '356a192b7913b04c54574d18c28d46e6395428ab', 'Viviana', 'Castillo', '1973-10-22', '98776659', 'Eleodoro Yañes 666, Providencia', 0, 0, 1),
(9, ' 6475751', '356a192b7913b04c54574d18c28d46e6395428ab', 'Gerardo', 'Lopez', '1963-05-12', '98777759', 'Apoquindo 327, Las Condes', 0, 0, 1),
(10, ' 13770506', '356a192b7913b04c54574d18c28d46e6395428ab', 'Catalina', 'Torres', '1993-06-22', '98877759', 'El bosque norte 500, Las condes', 0, 0, 1),
(11, ' 14490825', '356a192b7913b04c54574d18c28d46e6395428ab', 'Maria', 'Rosales', '1990-08-25', '99977759', 'Eyazaguirr # 0405, Santiago', 0, 0, 1),
(12, '12165324', '356a192b7913b04c54574d18c28d46e6395428ab', 'Carlos', 'Arancibia', '2000-09-01', '99885544', 'Las Fresas #987, Vitacura', 1, 0, 1),
(13, '11959885', '356a192b7913b04c54574d18c28d46e6395428ab', 'Marina', 'Jara', '1981-08-06', '99886677', 'Paris #654, Santiago', 1, 1, 0),
(14, '20959885', '356a192b7913b04c54574d18c28d46e6395428ab', 'Ambos', 'Ambos', '2002-06-13', '99775544', 'Antonio Varas # 765, Providencia', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sintoma`
--

CREATE TABLE `softamb`.`sintoma` (
  `id` int(11) NOT NULL,
  `descripcion_sintomas` varchar(45) NOT NULL,
  `primeros_auxilios` mediumtext,
  `ambulancia` tinyint(1) DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sintoma`
--

INSERT INTO `sintoma` (`id`, `descripcion_sintomas`, `primeros_auxilios`, `ambulancia`, `category_id`, `nombre`) VALUES
(1, 'Dolor en la parte superior del vientre', '1- Poner Guatero caliente en la zona con dolor\r\n2- Tomar infusiones calientes\r\n\r\n3-ingerir 25 gotas de viadil forte\r\n\r\nConsulte con el medico si presenta: Dolor en la parte superior del vientre o el abdomen que no desaparece. ', 0, 1, 'Dolor Abdominal'),
(2, 'Colicos e hinchazon', '1- Tomar infusiones tales como:Matico, Menta, Manzanilla.\r\n\r\n2- Ingerir 25 gotas de Viadil forte\r\n\r\nSi los dolores persiste luego de haber transcurrido 45 minutos, acuda a un centro medico.', 0, 1, 'Inflamacion Abdominal'),
(3, 'Presenta vomitos para 3 min', 'Acudir de inmediato a un centro medico ', 0, 1, 'Vomitos'),
(4, 'Dolor de cabeza por estres', '1- ingerir analgesicos de venta libre, como acido acetilsalicilico (aspirin), ibuprofeno o paracetamol\r\n2- Descansar la vista en una habitacion oscura.\r\n3- Poner compresas fria sobre la sona con dolor\'', 0, 2, 'Dolor de cabeza'),
(5, 'Contaste dolores de cabezas y mareos ', '1- Beba agua para evitar la deshidratacion, especialmente si ha vomitado\r\n2- Descanse en una habitacion tranquila y oscura\r\n3- Coloque compresa frio sobre la cabeza\r\n\r\n4- Tomar al analgesico tal como: aspirina, ibuprofeno, colmax\'', 0, 2, 'Mareos y dolor de cabeza'),
(6, 'Ha sufrido un golpe en su cabezas', 'Acudir de inmediato a un centro medico para una atencion oportuna.', 1, 2, 'Traumatizmo craneal'),
(7, 'Sensacion de tener arena en el ojo', '1- Utilizar compresas de agua tibia o fria.\r\n\r\n2- Quitar maquillaje o lentes de contactos\r\n\r\nEs necesario acudir a un especialista ya que si la infeccion es bacteriana', 0, 3, 'Ojos enrojecidos'),
(8, 'Vision borrosa por picor y dolor', '1 Aplicar gotas para el ardor ocular.\r\n\r\nSi los sintomas persisten despues de 45 minutos de haber aplicado las gotas,es necesario acudir a un especialista ya que puede ser una ulcera ocular.', 0, 3, 'Vision borrosa'),
(9, 'No puedo mirar hacia el lado, constante dolor', '1 Lavar los ojos con agua tibia para quitar elementos contaminantes \r\n\r\nAcudir de urgencia a un centro medico en caso de Sandrago o inflamacion.', 0, 3, 'Malestar al mover los ojos '),
(10, 'Inmovilizacion temporal o permanente', '1. Cambio de postura. Si trabajas frente a una computadora los brazos deben estar apoyados sobre el escritorio hasta al nivel de los codos.\r\n Hacer ejercicios de estiramiento.\r\n3.- Si ya tienes la lesion la puedes tratar con rehabilitacion.\r\n4- Acudir a un centro asistencial si el dolor perdura mas de 5 dias.', 1, 4, 'Dolor Espalda Dorzal'),
(11, 'sensacion de hormigueo o ardor', '1- Aplicar compresa calientes\r\n2- Tomar antiinflamatorio \r\n\r\nSi el dolor persiste por mas de 3 dias acudir de inmeditado a un centro asistencial ', 0, 4, 'Contractura'),
(12, 'Entumecimiento, debilidad ', 'Acudir de inmediato a un centro medico', 0, 4, 'Dolor Lumbar'),
(13, 'Torpeza de la mano al agarrar objetos', '1- Usar una ferula en la noche por algunas semanas. Si esto no ayuda, posiblemente sea necesario usarla tambien durante el dia.\r\nEvitar dormir sobre las muñecas.\r\n2- Aplicar compresas frias o calientes en la zona afectada.\r\n\r\nSi el dolor persiste despues de 7 dias acudir a un centro medico. \'', 0, 5, 'Manos sin fuerza'),
(14, 'Rigidez matutina, que dura por mas de 1 hora', '1- ingerir un antinflamatorio\r\n2- Aplicar compresas calientes \r\n\r\nAcudir a un centro medico de persistir los dolores e inmobilidad mas de 3 horas', 0, 5, 'Dolor Articulaciones'),
(15, 'Entumecimiento u hormigueo, fuertes dolores', 'Acudir de urgencia a un centro medico', 0, 5, 'Traumatismo muñeca'),
(16, 'Inflamacion el area del medio del pie', '1- Compresion de la inflamacion (hinchazon) con un vendaje elastico\r\n2- Elevacion del area lesionada\r\n\r\nSi el dolor persiste pasado 24 hrs, acuda un centro medico\'', 0, 6, 'Torcedura de pies'),
(17, 'Inmobilidad pies completo', '1- Aplique hielo sobre el tendon de Aquiles por 15 a 20 minutos, de 2 a 3 veces al dia. Utilice una compresa de hielo envuelta en un trapo. NO aplique hielo directamente sobre la piel.\r\n\r\n2- Tome analgesicos, como acido \r\nacetilsalicilico (aspirin), ibuprofeno (Advil o Motrin) o naproxeno (Aleve, Naprosyn) para reducir la inflamacion y el dolor.\r\n\r\nSi el dolor persiste mas de 24 hrs acudir a un centro medico\r\n', 1, 6, 'Dolor en tobillo'),
(20, 'inmobilidad, dolor ', 'Asistir a un centro medico de urgencia', 1, 6, 'Fractura tobillo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulancia`
--
ALTER TABLE `ambulancia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ambulancia_persona_idx` (`persona_id`);

--
-- Indexes for table `carga`
--
ALTER TABLE `carga`
  ADD PRIMARY KEY (`carga_id`,`persona_id`),
  ADD KEY `fk_persona_idx` (`persona_id`),
  ADD KEY `fk_carga_idx` (`carga_id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sintoma`
--
ALTER TABLE `sintoma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sintoma_category1_idx` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulancia`
--
ALTER TABLE `ambulancia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sintoma`
--
ALTER TABLE `sintoma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ambulancia`
--
ALTER TABLE `ambulancia`
  ADD CONSTRAINT `fk_ambulancia_persona` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `carga`
--
ALTER TABLE `carga`
  ADD CONSTRAINT `fk_carga_carga` FOREIGN KEY (`carga_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_carga_persona` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sintoma`
--
ALTER TABLE `sintoma`
  ADD CONSTRAINT `fk_sintoma_category1` FOREIGN KEY (`category_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
